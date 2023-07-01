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
    return view('welcome');
    #return "Hello World";
});

Route::get("/index/{id}", [TaskController::class, "index"]);

Route::get("/cria-task", function(){ return "Faça um Post, não um Get";});
Route::post("/cria-task", [TaskController::class, "criarTask"]);
Route::post("/cria-task-personalizada", [TaskController::class, "criarTaskPersonalizada"]);

Route::post("/cria-tarefa",[TaskController::class, "store"]);

Route::get("/tarefas", [TaskController::class, "index"]);

Route::post("/atualiza-tarefa", [TaskController::class, "create"]);


