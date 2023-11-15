<?php

namespace Database\Seeders;

use App\Models\SurveyQuestionAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveyQuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionAnswer = new SurveyQuestionAnswer();
        $questionAnswer->survey_question_id = 1;
        $questionAnswer->survey_answer_id = 2;
        $questionAnswer->answer = "sample answer";
        $questionAnswer->save();
    }
}
