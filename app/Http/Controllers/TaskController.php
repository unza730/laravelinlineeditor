<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TaksModel;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $task = DB::table('taksmodels')->get();
          return view('task.tas', ['task'=>$task]);
        // $task = DB::table('taksmodels')->get();
        //  return view('task.task',['task'=>$task]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('taksmodels')->insert([
            'name' => $request->name,
            'agentname' => $request->agentname,
            'nooftask' => $request->nooftask,
            'taskstatus' => $request->taskstatus,

        ]);
        return redirect(route('task.index'))->with('status', 'Student Added !!');
    }
  

}