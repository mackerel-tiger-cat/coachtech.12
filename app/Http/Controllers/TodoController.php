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
    public function  create()
    {
        return view('create');
    }

    public function createpost(Request $request)
    {
        $param = [
            'input' => $request->content
        ];
        $todo = Todo::create(['content'=>$request->content,]);
        return view('createresult', $param);
    }

    public function update()
    {
        return view('update');
    }

    public function updatepost(Request $request)
    {
        $param = [
            'input' => $request->content
        ];
        $todo = Todo::create(['content'=>$request->content,]);
        Todo::find(1)
        ->update(['content' => 1]);
        return view('updatepost', $param);
    }
}

