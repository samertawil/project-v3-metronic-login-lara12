<?php

namespace App\Livewire\Uilogin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\RecoveryAnswer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class ForgetPassword extends Component
{
    /**
     * @var string[]
     */
    public array $recoveryQuestions = [];
    #[Validate(['exists:users,user_name'])]
    public string $user_name = '';

    public string $typeValue;
    public string $encryptEmailName;
    public string $userQuestions;
    public string $question1;
    public string $question2;
    public string $question3;
    public string $answer1;
    public string $answer2;
    public string $answer3;
    public int $checkResult = 0;
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public string $password = '';
    public string $passwordConfirmation = '';
    public string $status;
    public mixed $data;
    public string $behavior;
    public string $QuestionBehavior;
    public string $check_type;


    #[Computed]
    public function user(): mixed
    {
        $user = User::firstWhere('user_name', $this->user_name);
        if ($user) {
            if (empty($user->email)) {
                $part1 =    ['user' => $user, 'emailData' => 'noRecoveryEmail'];
            } else {
                $pos = strpos($user->email, '@');

                if ($pos === false) {
                    // '@' not found, treat entire email as the name part (no provider)
                    $emailName = $user->email;
                    $providerName = '';
                } else {
                    $emailName = substr($user->email, 0, $pos);
                    $providerName = substr($user->email, $pos);
                }


                $count = (int) ceil(strlen($emailName) * 0.6);

                $limitLength = max(strlen($emailName) - $count, 0);
                
                $name = Str::limit($emailName, $limitLength, '***');
         
                $this->encryptEmailName = $name . $providerName;


                $part1 =  ['user' => $user, 'emailData' => $this->encryptEmailName];
               
            }

            $userQuestions = RecoveryAnswer::with('questions')->where('user_id', $user->id)->get();

            if (($userQuestions->isEmpty())) {

                $part2 =    ['questionsData' => 'noQuestions'];
            } else {

                $this->question1 = $userQuestions[0];
                $this->question2 = $userQuestions[1];
                $this->question3 = $userQuestions[2];

                $part2 =    ['questionsData' => [$this->question1, $this->question2, $this->question3]];
            }

            $this->data = array_merge($part1, $part2);

            return $this->data;
        }
        return false;
    }

    public function updatedcheckType(string $prop): void
    {
        $this->typeValue = $prop;
    }

    public function sendResetLink(): mixed
    {

        if ($this->data['user']->email) {


            $status = Password::sendResetLink([
                'email' => $this->data['user']->email,
            ]);
            if ($status === Password::RESET_LINK_SENT) {

                $this->status = __($status);

                toastr()->positionClass('toast-top-full-width')->closeButton(true)->timeOut(10000)->progressBar(false)
                    ->success($this->status);

                return redirect()->route('login');
            }
        }
        return false;
    }


    public function checkAnswers(): mixed
    {

        if (
            $this->answer1 == $this->data['questionsData'][0]->answer
            && $this->answer2 == $this->data['questionsData'][1]->answer
            && $this->answer3 == $this->data['questionsData'][2]->answer
        ) {
            return  $this->checkResult = 1;
        } else {
            $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));
            return $this->checkResult = 0;
        }
    }


    public function changePassword(): mixed
    {
        $result =  ForgetPassword::checkAnswers();

        if ($result === 0) {
            $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));
            return '';
        }
        $this->validate();


        $this->data['user']->update([
            'password' => Hash::make($this->password),
        ]);
        toastr()->positionClass('toast-top-full-width')->closeButton(true)->timeOut(10000)->progressBar(false)
            ->success("تم تغير كلمة المرور بنجاح");

        Auth::guard('web')->login($this->data['user']);

        return redirect()->route(config('uilogin.redirectToAdmin'));
    }

    public function updated(string $prop): void
    {

        $this->validateOnly($prop);
    }



    #[Layout('components.layouts.uilogin-admin-app')]
    public function render(): View
    {
        $title = __('customTrans.Forgot Password');
        return view('livewire.ui_auth.forget-password')->title($title);
    }
}
