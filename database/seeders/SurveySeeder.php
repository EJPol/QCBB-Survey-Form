<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Survey;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $survey = Survey::create(['name' => 'Register Form', 'settings' => ['accept-guest-entries' => true]]);

        $survey->questions()->create([
            'content' => 'First Name',
        ]);

        $survey->questions()->create([
            'content' => 'Last Name',
        ]);

        $survey->questions()->create([
            'content' => 'Date of Birth (MM/DD/YYYY)',
        ]);

        $survey->questions()->create([
            'content' => 'Full Address',
        ]);

        $survey->questions()->create([
            'content' => 'Blood Group',
            'type' => 'radio',
            'options' => ['A', 'B', 'O', 'AB']
        ]);

        $survey->questions()->create([
            'content' => 'Phone Number',
            'type' => 'number',
            'rules' => ['numeric', 'min:11', 'max:11']
        ]);
    }
}
