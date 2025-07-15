<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecoveryQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecoveryQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $QuestionsData = [
            ['question_ar' => 'ما هي المدينة التي ولدت فيها؟','question_en'=>'What city were you born in?'],
            ['question_ar' => 'ما هي المدينة التي تزوج والديك فيها؟','question_en'=>'In what city or town did your parents meet?'],
            ['question_ar' => 'ما هو لون اول سيارة تملكتها؟','question_en'=>'What was the color of your first car?'],
            ['question_ar' => 'ما هو اسم عائلة جيرانك؟','question_en'=>"What is your neighbor's last name?"],
            ['question_ar' => 'كم عدد الحيوانات الأليفة التي كنت تمتلكها عندما كنت في العاشرة من عمرك؟','question_en'=>'How many pets did you have at 10 years old?'],
            ['question_ar' => 'في أي شهر تزوجت؟','question_en'=>"What month did you get married?"],
        ];
        RecoveryQuestion::insert($QuestionsData);
    }
}

// php artisan make:seeder RecoveryQuestionsSeeder
// php artisan db:seed RecoveryQuestionsSeeder


