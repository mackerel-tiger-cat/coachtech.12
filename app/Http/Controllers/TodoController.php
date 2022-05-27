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
        $todo = new Todo();
        $todo->content = $content;
        $todo->save();
        return view('createresult', $param);
    }
}
