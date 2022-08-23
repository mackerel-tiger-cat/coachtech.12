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
        $todo = Todo::create(['content'=>$request->content]);
        $param = [
            'input' => $todo
        ];
        return view('createresult', $param);
    }

    public function update()
    {
        return view('update');
    }

    public function updatepost(Request $request)
    {
        Todo::find(1)
            ->update(['content' => $request->content]);
        $todo = Todo::find(1);
        $param = [
            'input' => $todo
        ];
        return view('updatepost', $param);
    }
}

