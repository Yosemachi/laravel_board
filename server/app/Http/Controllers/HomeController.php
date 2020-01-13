<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\board;
use App\User_board;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $board = User_board::get();

        return view('index', compact('board'));
    }
}
