<?php

namespace App\Http\Controllers;
use App\board;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class boardController extends Controller
{
    public function index()
    {
        $board = board::get();

        return view('index', compact('board'));
    }
    public function show(Request $request, $id)
    {
        $board = board::find($id);

        foreach($board as $key=>$value){
            $message = $value['message'];
            $id = $value['id'];
        }

        return view('edit', compact('message', 'id'));
    }
}