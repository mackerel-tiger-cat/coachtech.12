<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $item = [
            'content' => '',
        ];
        return view('index', $item);
    }
    //
    public function  create()
    {
        return view('create', );
    }
    //
    public function  update()
    {
        return view('update', );
    }
    //
    public function  delete()
    {
        return view('delete', );
    }
}
