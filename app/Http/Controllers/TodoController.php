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
    public function  create(Request $request)
    {
        $content = $request->content;
        $items = [
            'content' => '',
            'content' => $content
        ];
        return view('create', $items);
    }

    public function createpost(Request $request)
    {
        $content = $request->content;
        $param = [
            'content' => $content,
            'input' => $request->content
            //--->左側がcreateresult.blade.phpの13行目の{{$input}}と一致している
        ];
        $content = new Todo();
        $content->todo = $this->todo;
        $todo->done = false;
        $todo->save();
        return view('createresult', $param);
    }

    //
    /*
    public function  update(Request $request, $id)
    {
        $this->validate($request, [
            'updatedTodo' => 'required|max:20',
        ]);
        $todo = Todo::findOrFail($id);
        $todo->name = $request->updatedTodo;
        $todo->save();
        //return view('update', ['todos' => $items]);...indexの部分と同じ
    }
    */
    //
    /*
    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        //return view('todolist', ['todos' => $items]);...indexの部分と同じ
    }
    */
    /*バリデーション...エラーメッセージの表示*/
    /*
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
    */
}
