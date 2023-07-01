<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, string $id)
    {
        #$primeiro = Task::first();  
        #$todos = Task::all();  
        #$com_id_2 = Task::find(2);
        #$com_id_2->delete();
        $task_do_id = Task::find($id);
        if(!$task_do_id){
            return "não existe";
        }
        return $task_do_id;
    }

    public function criarTask()
    {
        $nova_task = new Task;
        $nova_task->descricao = "Descricao teste";
        $nova_task->save();
    }

    public function criarTaskPersonalizada(Request $request)
    {
        $nova_task = new Task;
        #$nova_task->descricao = $request->input("descricao");
        #$nova_task->descricao = $request->header("descricao");
        $nova_task->save();

        return $nova_task;

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $minhatask = Task::find(17);
        $minhatask->descricao = "outracoisa";
        $minhatask->delete();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $task = new Task;
        
        $task->descricao = $request->input("descricao");
        
        $task->save();

        return "OK";
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
