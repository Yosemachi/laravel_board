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

    public function create(Request $request){
        $params = $request->all();
        
        // board::create($params);

        return view('index', compact('params'));
    }

    public function edit(Request $request, $id)
    {
        $board = board::find($id);

        return view('edit', compact('board'));
    }
    public function save(Request $request)
    {
        $params = $request->all();
        // dd($params);
        board::where('id', $params['id'])->update(['message' => $params['message']]);
        $board = board::get();

        return view('index', compact('params', 'board'));
    }
}
