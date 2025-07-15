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

class Register extends Component
{

    #[Validate('required')]
    public $name = '';
    #[Validate(['required', 'unique:users,user_name'])]
    public $user_name = '';

    #[Validate(['required', 'numeric', 'min_digits:10', 'max_digits:15', 'unique:users,mobile'])]
    public $mobile = '';
    #[Validate(['nullable', 'email', 'unique:users'])]
    public $email = '';
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public $password = '';
    public $passwordConfirmation = '';
    public $year = '';
    public $month = '';
    public $day = '';
    
    public $recoveryQuestions = [];
      public $question=[];
    public $repeater = [''];
    public $answers = [];

    protected $recoveryRules=[
        'answers.0' => [ 'required' ],
        "answers.1"=> [ 'required' ],
        "answers.2"=> [ 'required' ],
        'recoveryQuestions.0' => [ 'required' ],
        'recoveryQuestions.1'=> [ 'required' ],
        "recoveryQuestions.2"=> [ 'required' ],
    ];


    #[Computed]
    public function QuestionData()
    {

        return RecoveryQuestion::get();
    }


    #[Computed]
    public function QuestionData2()
    {
        return RecoveryQuestion::where('id', '!=', implode(',', array($this->recoveryQuestions[0] ?? '0')))->get();
    }

    #[Computed]
    public function QuestionData3()
    {
        return RecoveryQuestion::where('id', '!=', implode(',', array($this->recoveryQuestions[0] ?? '0')))
        ->where('id', '!=', implode(',', array($this->recoveryQuestions[1] ?? '0')))
        ->get();
    }


    public function register()
    {
  
        
         $this->validate();
        
         if($this->recoveryQuestions) {
            $this->validate( $this->recoveryRules);
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
                    'user_id'=>$user->id,
                    'question_id'=>$value,
                    'answer'=>$this->answers[$key],
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

    public function updated($prop) {

       $this->validateOnly($prop);
    }
    
 
    #[Layout('components.layouts.uilogin-admin-app')]
    public function render()
    {
       
        $title='تسجيل حساب جديد';
        return view('livewire.ui_auth.register')->layoutData(['title'=>$title]);
    }
}
