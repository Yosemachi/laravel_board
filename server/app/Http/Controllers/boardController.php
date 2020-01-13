<?php

namespace App\Http\Controllers;

use App\board;
use App\User_board;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class boardController extends Controller
{
    public function index()
    {
        $board = User_board::get();

        return view('index', compact('board'));
    }

    public function create(Request $request){
        $message = $request->all();
        $user = Auth::user();
        $params['name'] = $user['name'];
        $params['message'] = $message['message'];
        User_board::create($params);
        $board = User_board::get();
        // dd($user);
        

        return view('index', compact('board'));
    }

    public function edit(Request $request, $id)
    {
        $board = User_board::find($id);

        return view('edit', compact('board'));
    }

    public function save(Request $request)
    {
        $params = $request->all();
        // dd($params);
        User_board::where('id', $params['id'])->update(['message' => $params['message']]);
        $board = User_board::get();

        return view('index', compact('params', 'board'));
    }

    public function delete(Request $request){
        $params = $request->all();
        // dd($params);
        User_board::where('id', $params['id'])->delete();
        $board = User_board::get();

        return view('index', compact('board'));
    }
}
