<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\Task;
 
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view ('tasks.index')->with('tasks', $tasks);
    }
 
    
    public function create()
    {
        return view('tasks.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect('task')->with('flash_message', 'Detyra u shtua!');  
    }
 
    
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('tasks', $task);
    }
 
    
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('tasks', $task);
    }
 
  
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('task')->with('flash_message', 'Detyra u perditsua!');  
    }
 
   
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Detyra u fshi!');  
    }
}