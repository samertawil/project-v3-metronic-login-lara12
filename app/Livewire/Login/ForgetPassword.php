<?php

namespace App\Livewire\Login;


use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use App\Services\UserRepository;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Services\RecoveryAnswerRepository;
use App\Factories\CheckingRecoveryDataFactory;

class ForgetPassword extends Component
{
    /**
     * @var string[]
     */
    public array $recoveryQuestions = [];

    #[Validate(['exists:users,user_name'])]
    public string $user_name = '';
    public ?string $typeValue = null;
    public string $answer1 = '';
    public string $answer2 = '';
    public string $answer3 = '';
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public string $password = '';
    public string $passwordConfirmation = '';
    public ?string $status = null;
    public ?string $check_type = null;
    public    $answerModels = [];


    #[Computed]
    public function user(): ?array
    {

        $user = UserRepository::showUser($this->user_name);

        if (! $user) {

            return null;
        }

        $data =  app(CheckingRecoveryDataFactory::class, ['user' => $user]);

        $mailChoose = $data->checkEmailData();

        $questionRecoveryChoose = $data->checkQuestionsData();

        return  array_merge($mailChoose, $questionRecoveryChoose);
    }

    public function updatedUserName(string $value): void
    {
        // Reset all state that depends on the user.
        $this->reset('typeValue', 'answerModels', 'password', 'passwordConfirmation');
        $this->resetValidation(); // Clear all validation errors.

        if (!empty($value)) {
            $this->validateOnly('user_name');
        }
    }

    private function validateAnswers(): bool
    {

        if (empty($this->user['user'])) {
            return false;
        }

        $questionsAnswersData =  RecoveryAnswerRepository::getRecoveryAnswersByUserId($this->user['user']->id);

        if ($this->user['questionsText'] === 'noQuestions') {
            $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));

            return false;
        }
        if (! empty($questionsAnswersData)) {

            $countAnswer = count($this->answerModels);
            $countQuestions = count($questionsAnswersData);

            if ($countAnswer != $countQuestions) {
                $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));
                return false;
            }




            foreach ($this->answerModels as $key => $value) {

                if ($value  != $questionsAnswersData[$key]->answer) {

                    $this->addError('wrongAnswer', __('customTrans.wrongAnswer'));
                    return false;
                }
            }
        }
        return true;
    }



    public function changePassword(): mixed
    {


        if (!$this->validateAnswers()) {
            return null;
        }

        $this->validate();

        $this->user['user']->update([
            'password' => Hash::make($this->password),
        ]);
        toastr()->positionClass('toast-top-full-width')->closeButton(true)->timeOut(10000)->progressBar(false)
            ->success("تم تغير كلمة المرور بنجاح");

        Auth::guard('web')->login($this->user['user']);

        return redirect()->route(config('uilogin.redirectToAdmin'));
    }


    public function sendResetLink(): mixed
    {


        if (!empty($this->user['user']->email)) {

            $status = Password::sendResetLink([
                'email' => $this->user['user']->email,
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



    #[Layout('components.layouts.uilogin-admin-app')]
    public function render(): View
    {
        $title = __('customTrans.Forgot Password');
        return view('livewire.login.forget-password')->title($title);
    }
}
