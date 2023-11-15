<?php

namespace Database\Seeders;

use App\Models\SurveyAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveyAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer = new SurveyAnswer();
        $answer->survey_id = 1;
        $answer->start_date = now()->subMinutes(10);
        $answer->end_date = now();
        $answer->save();
    }
}
