<?php

namespace App\Services;

use App\Models\RecoveryAnswer;

class RecoveryAnswerRepository
{



    public static function storeRecoveryAnswers(array $data): void
    {

        foreach ($data['recoveryQuestions'] as $key => $value) {

            RecoveryAnswer::create([
                'user_id' => $data['user_id'],
                'question_id' =>   $value,
                'answer' => $data['answers'][$key],
            ]);
        }

        return;
    }

    public static function getRecoveryAnswersByUserId(int $userId)
    {

        return  RecoveryAnswer::select('id', 'user_id', 'answer')
            ->where('user_id', $userId)->get();
    }

    public static function getRecoveryQuestionsByUserId(int $userId)
    {

        return  RecoveryAnswer::with('questions')
            ->select('id', 'user_id', 'question_id')
            ->where('user_id', $userId)->get();
    }
}
