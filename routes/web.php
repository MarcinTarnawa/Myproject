<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/job', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class,'show']);

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->can('edit','job')->middleware('auth');
Route::patch('/jobs/{job}', [JobController::class, 'update'])->can('edit','job')->middleware('auth');


Route::get('/', function () {
    return view('index');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/search', SearchController::class);

// sekcja logowania i rejestracji

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']); 
});

Route::delete('/logout',[SessionController::class, 'destroy'])->middleware('auth');