<?php

namespace Database\Seeders;

use App\Models\Survey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = new Survey();
        $survey->user_id = 1;
        $survey->image = "images/example.jpeg";
        $survey->title = "Survey title example";
        $survey->slug = "survey-title-example";
        $survey->status = 1;
        $survey->description = "Survey description example";
        $survey->expire_date = now()->addDays(10);

        $survey->save();
    }
}
