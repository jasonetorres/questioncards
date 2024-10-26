<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        Question::create([
            'question' => $request->question,
        ]);

        return redirect()->back()->with('success', 'Question submitted successfully!');
    }

    public function admin()
    {
        $questions = Question::all();
        return view('admin', compact('questions'));
    }
}
