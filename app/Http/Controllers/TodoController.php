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
        ];
        $todo = Todo::create(['content'=>$request->content,]);
        return view('createresult', $param);
    }

    public function update(Request $request)
    {
        $content = $request->content;
        $items = Todo::where('id', '=', '山本先生')->get();
        $items->save();
        return view('update', $items);
    }

    public function updatepost(Request $request)
    {
        Todo::find(1)
        ->update(['content' => 1]);
        return view('updatepost', $items);
    }
}

