<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TaksModel;

class TaskControllers extends Controller
{
    public function index()
    {
         $task = DB::table('taksmodels')->get();
          return view('task.tas', ['task'=>$task]);
        // $task = DB::table('taksmodels')->get();
        //  return view('task.task',['task'=>$task]);
     
    }
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
  
public function edit($id)
{
    $student =  DB::table('taksmodels')->find($id);
    return view('task.edit', ['student'=>$student]);
}
public function update(Request $request, $id)
    {
        DB::table('taksmodels')->where('id', $id)->update([
            'name' => $request->name,
            'agentname' => $request->agentname,
            'nooftask' => $request->nooftask,
            'taskstatus' => $request->taskstatus,

        ]);
        return redirect(route('task.index'))->with('status', 'Student Updated !!');
    }
    public function delete($id)
{
    $student =  DB::table('taksmodels')->where('id', $id)->delete();
    return redirect(route('task.index'))->with('status', 'Student Deleted !!');
    }

}
