<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all(
            $items = [
                'content' => '',
            ];
        return view('todolist', ['todos' => $items]);
        // todolist.blade.phpの$todosに$itemを入れている 
    }

    //Eloquent 検索とモデル結合ルート...todolist.blade.phpが表示されるか
    /*
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
    */

    //
    public function  create(Request $request)
    {
        $content = $request->content;
        $items = [
            'content' => ''
            'content' => $content
           // --->実際にアクセス出来ているか確認するためのviewのcreate.blade.php
        ];
        return view('createresult', $items);
        //--->結果を返すための表記方法が知りたい
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
