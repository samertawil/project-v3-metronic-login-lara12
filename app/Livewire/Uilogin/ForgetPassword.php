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

class ForgetPassword extends Component
{
    public $recoveryQuestions = [];
    #[Validate([ 'exists:users,user_name'])]
    public $user_name ='';

    public $typeValue;
    public $encryptEmailName;
    public $userQuestions;
    public $question1;
    public $question2;
    public $question3;
    public $answer1;
    public $answer2;
    public $answer3;
    public $checkResult = 0;
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public $password = '';
    public $passwordConfirmation = '';
    public $status;
    public $data;
    public $behavior;
    public $QuestionBehavior;
    public $check_type;


    #[Computed]
    public function user()
    {
        $user = User::firstWhere('user_name', $this->user_name);
        if ($user) {
            if (empty($user->email)) {
                $part1 =    ['user' => $user, 'emailData' => 'noRecoveryEmail'];
            } else {
                $pos = strpos($user->email, '@');
                $emailName = substr($user->email, 0, $pos);
                $providerName = substr($user->email,  $pos);
                $count = ceil(strlen($emailName) * 60 / 100);
                $name = Str::limit($emailName, -$count, '***');
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
    }

    public function updatedcheckType($prop) {
      $this->typeValue=$prop;
    }

    public function sendResetLink()
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
    }


    public function checkAnswers()
    {

        if (
            $this->answer1 == $this->data['questionsData'][0]->answer
            && $this->answer2 == $this->data['questionsData'][1]->answer
            && $this->answer3 == $this->data['questionsData'][2]->answer
        ) {
            return  $this->checkResult = 1;
        } else {
            return $this->checkResult = 0;
            $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));
        }
    }


    public function changePassword()
    {
        $result =  ForgetPassword::checkAnswers();

        if ($result === 0) {
            $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));
            return;
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

    public function updated($prop)
    {

        $this->validateOnly($prop);
    }



    #[Layout('components.layouts.uilogin-admin-app')]
    public function render()
    {
        $title = __('customTrans.Forgot Password');
        return view('livewire.ui_auth.forget-password')->title($title);
    }
}
