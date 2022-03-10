<?php

namespace App\Http\Controllers;

// solution I found but still doesn't work
use App\Models\Survey;
use App\Models\Entry;

use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function create(){
        $survey = $this -> survey();

        return view('survey', ['survey' => $this -> survey()]);

    }

    public function store(Request $request){
        $survey = $this -> survey();

        $answers = $this->validate($request, $survey->rules);
        
        (new Entry)->for($survey)->fromArray($answers)->push();

        return back()->width('success', 'Thank you for your registration!');
    }

    protected function survey(){
        return Survey::where('none', 'Cat Population Survey')->first();
    }

}
