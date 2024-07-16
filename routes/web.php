<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//one way

//Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
//Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
//Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
//Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
//Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
//Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
//Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');

Route::view('/home', 'home');
Route::view('/about','about');
Route::view('/portfolio', 'portfolio');
Route::view('/login','login');
Route::view('/not-found', '404');

//grouped - seems to allow for named routes

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs',  'index')->name('jobs.index');
    Route::get('/jobs/create', 'create')->name('jobs.create');
    Route::get('/jobs/{job}',  'show')->name('jobs.show');
    Route::post('/jobs',  'store')->name('jobs.store');
    Route::get('/jobs/{job}/edit',  'edit')->name('jobs.edit');
    Route::patch('/jobs/{job}',  'update')->name('jobs.update');
    Route::delete('/jobs/{job}',  'destroy')->name('jobs.destroy');
});

// resource follows crud conventions

//Route::resource('jobs', JobController::class, [
//    //'only' => ['index', 'show']
//    'excpet' => ['edit', 'update']
//]);

//authentication
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
