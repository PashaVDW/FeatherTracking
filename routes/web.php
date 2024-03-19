<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::controller(TaskController::class)->name('task.')->group(function () {
   Route::get('/', 'index')->name('index');
   Route::post('/task-create', 'create')->name('create');
});

Route::get('/register', [AuthenticationController::class, 'registerIndex']);


