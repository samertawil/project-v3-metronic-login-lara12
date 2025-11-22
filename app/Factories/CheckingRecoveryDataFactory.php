<?php

namespace App\Factories;


use Illuminate\Support\Str;
use App\Services\RecoveryAnswerRepository;

class CheckingRecoveryDataFactory
{
    public string $user_name = '';
    public string $encryptEmailName;
    public int $userId = 0;
     public object $userObject;

    public function __construct(object $user)
    {
        $this->userObject = $user;
        $this->userId = $user->id;
    }

    public   function checkEmailData()
    {
      
        if (empty($this->userObject->email)) {

            $data =    ['user' => $this->userObject, 'emailData' => 'noRecoveryEmail'];
        } else {
            $pos = strpos($this->userObject->email, '@');

            if ($pos === false) {
                // '@' not found, treat entire email as the name part (no provider)
                $emailName = $this->userObject->email;
                $providerName = '';
            } else {
                $emailName = substr($this->userObject->email, 0, $pos);
                $providerName = substr($this->userObject->email, $pos);
            }

            $count = (int) ceil(strlen($emailName) * 0.6);

            $limitLength = max(strlen($emailName) - $count, 0);

            $name = Str::limit($emailName, $limitLength, '***');

            $encryptEmailName = $name . $providerName;

            $data =  ['user' => $this->userObject, 'emailData' => $encryptEmailName];
        }

        return $data;
    }

    public  function checkQuestionsData()
    {
    
        $userQuestionsData =  RecoveryAnswerRepository::getRecoveryQuestionsByUserId($this->userObject->id);

        if (($userQuestionsData->isEmpty())) {

            $part2 =    ['questionsText' => 'noQuestions'];

        } else {

            $part2 = [];

            foreach ($userQuestionsData as $value) {
                
                $questions[] = $value->questions->question_ar ?? '';
            }

            $part2 = [
                'questionsText' => $questions
            ];
           
        }

        return $part2;
    }

 

}
