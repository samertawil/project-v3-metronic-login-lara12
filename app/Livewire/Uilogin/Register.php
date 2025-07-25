<?php

namespace  App\Livewire\Uilogin;

use Livewire\Component;
use App\Models\RecoveryAnswer;
use Livewire\Attributes\Layout;
use App\Models\RecoveryQuestion;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class Register extends Component
{

    #[Validate('required')]
    public string $name = '';
    #[Validate(['required', 'unique:users,user_name'])]
    public string $user_name = '';

    #[Validate(['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'])]
    public string $mobile = '';
    #[Validate(['nullable', 'email', 'unique:users'])]
    public string $email = '';
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public string $password = '';
    public string $passwordConfirmation = '';

/** 
 * @var string[] 
 */
    public array $recoveryQuestions = [];
    /** 
 * @var string[] 
 */
    public array $question = [];
    /** 
 * @var string[] 
 */
    public array $repeater = [''];
    /** 
 * @var string[] 
 */
    public array $answers = [];

    /**
 * @var array<string, string[]>
 */
    protected array $recoveryRules = [
        'answers.0' => ['required'],
        "answers.1" => ['required'],
        "answers.2" => ['required'],
        'recoveryQuestions.0' => ['required'],
        'recoveryQuestions.1' => ['required'],
        "recoveryQuestions.2" => ['required'],
    ];


    #[Computed]
    public function QuestionData(): Collection
    {

        return RecoveryQuestion::get();
    }


    #[Computed]
    public function QuestionData2(): Collection
    {
        return RecoveryQuestion::where('id', '!=', implode(',', array($this->recoveryQuestions[0] ?? '0')))->get();
    }

    #[Computed]
    public function QuestionData3(): Collection
    {
        return RecoveryQuestion::where('id', '!=', implode(',', array($this->recoveryQuestions[0] ?? '0')))
            ->where('id', '!=', implode(',', array($this->recoveryQuestions[1] ?? '0')))
            ->get();
    }


    public function register(): mixed
    {


        $this->validate();

        if ($this->recoveryQuestions) {
            $this->validate($this->recoveryRules);
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'user_name' => $this->user_name,
                'name' => $this->name,
                'mobile' => $this->mobile,
                'email' => $this->email,
                'password' => Hash::make($this->password),


            ]);

            foreach ($this->recoveryQuestions as $key => $value) {

                RecoveryAnswer::create([
                    'user_id' => $user->id,
                    'question_id' => $value,
                    'answer' => $this->answers[$key],
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {

            DB::rollBack();
            return $e;
        }



        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('dashboard.home'));
    }

    public function updated(string $prop): void
    {

        $this->validateOnly($prop);
    }


    #[Layout('components.layouts.uilogin-admin-app')]
    public function render(): View
    {

        $title = 'تسجيل حساب جديد';
        return view('livewire.ui_auth.register')->layoutData(['title' => $title]);
    }
}
