<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
});

Route::middleware(['auth'])->group(function () {
    // Görev CRUD işlemleri (destroy hariç)
    Route::resource('tasks', TaskController::class)->except(['destroy']);

    // Görevi tamamlama işlemi
    Route::get('tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');

    // Görevi silme işlemi (GET ile)
    Route::get('tasks/{task}/destroy', [TaskController::class, 'destroy'])->name('tasks.destroy');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
