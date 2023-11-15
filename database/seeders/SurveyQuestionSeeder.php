<?php

namespace Database\Seeders;

use App\Models\SurveyQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $surveyQuestion = new SurveyQuestion();
        $surveyQuestion->type = "text";
        $surveyQuestion->question = "Example text question";
        $surveyQuestion->description = "Example text question description";
        $surveyQuestion->data = "[]";
        $surveyQuestion->survey_id = 1;
        $surveyQuestion->save();
    }
}
