<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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

Route::get('/tasks/create', [CrudController::class, 'create']);

Route::get('/tasks', [CrudController::class, 'index']);

Route::get('/tasks/{id}', [CrudController::class, 'show']);

Route::post('/tasks', [CrudController::class, 'store']);

Route::get('/tasks/{id}/edit', [CrudController::class, 'edit']);

Route::put('/tasks/{id}', [CrudController::class, 'update']);

Route::delete('/tasks/{id}', [CrudController::class, 'destroy']);






