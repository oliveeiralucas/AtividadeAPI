<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskData = DB::table('tasks')->simplePaginate(5);
    
        return view('homePage', compact('taskData'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $taskData = DB::table('tasks')->get();

        return view('create', compact('taskData'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cad=$taskData = DB::table('tasks')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        if($cad){
            return redirect('tasks');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $taskData = DB::table('tasks')->find($id);
    
        return view('show', compact('taskData'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit(string $id)
    {
        $taskData = DB::table('tasks')->find($id);
    
        return view('update', ['taskData' => $taskData]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $taskData = DB::table('tasks')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);
    
        if ($taskData) {
            return redirect('tasks/' . $id);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $taskData = DB::table('tasks')->get();

        DB::table('tasks')->where('id', $id)->delete();
    
        return redirect('tasks/')->with('successo', 'Tarefa excluída com sucesso!');
    }

}
