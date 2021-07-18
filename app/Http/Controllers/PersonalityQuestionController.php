<?php

namespace App\Http\Controllers;

use App\PersonalityQuestion;
use Illuminate\Http\Request;

class PersonalityQuestionController extends Controller
{
    public function index()
    {
        $questions = PersonalityQuestion::all();

        $data = [
            'questions' => $questions
        ];
        return view('question', $data);
    }

    
}
