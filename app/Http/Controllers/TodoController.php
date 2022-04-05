<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    //
    public function  create($id)
    {
        $todo = Todo::find($id);

        return view('index', ['todo' => $todo,]);
    }
    //
    public function  update(Request $request, $id)
    {
        $request->validate([
            'updateTodo'     => 'required|max:20',
        ]);

        $todo = Todo::find($id);

        $todo->todo     = $request->updateTodo;

        $todo->save();
        /*
        return redirect()->route('todos.index');
        */
        return view('update', );
    }
    //
    public function  delete($id)
    {
        /*
        destroy($id)
        */
        $todo = Todo::find($id);
        /*
        $todo->delete();
        */
        /*
        return redirect()->route('todos.index');
        */
        return view('delete', );
    }
    /*バリデーション*/
    public function store(Request $request)
    {
        $request->validate([
            'newTodo' => 'required|max:20',
        ]);
    }
    /*DBに保存--->書き方が間違っているらしく、よくわからない
    Todo::create([
        'todo' => $request->newTodo,
    ]);
    return redirect()->route('todos.index');
    */
}
