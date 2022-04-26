<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('todolist', ['todos' => $items]);
        // todolist.blade.phpの$todosに$itemを入れている 
    }
    //Eloquent 検索とモデル結合ルート
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Todo::where('name', 'LIKE',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }

    //
    public function  create($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.create', compact('todo'));
    }

    //
    public function  update(Request $request, $id)
    {
        $this->validate($request, [
            'updatedTodo' => 'required|max:20',
        ]);
        $todo = Todo::findOrFail($id);
        $todo->name = $request->updatedTodo;
        $todo->save();
        return redirect()->route('todos.index');
    }
    
    //
    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route('todos.index');
    }
    
    /*バリデーション*/
    public function store(Request $request)
    {
        $request->validate([
            'newTodo' => 'required|max:20',
        ]);
        $todo = new Task;
        $todo->name = $request->newTodo;
        $todo->save();
        return redirect()->route('todos.index');
    }
    
}
