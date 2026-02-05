<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->middleware('auth');

Route::post('/tasks/{task}/undo', [TaskController::class, 'undo'])->middleware('auth');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->middleware('auth')->name('tasks.destroy');

// so the route is a POST. 
Route::post('/tasks', [TaskController::class, 'store'])->middleware('auth');

Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth')->name('tasks.index');

Route::get('/tasks/create', function() {
    return view('tasks.create');
})->middleware('auth');


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
