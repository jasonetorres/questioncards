<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index']);
Route::post('/questions', [QuestionController::class, 'store']);
Route::get('/admin', [QuestionController::class, 'admin']);
Route::delete('/questions/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');

