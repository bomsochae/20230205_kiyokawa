<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $param = ['text' => '建物です'];
        return view('index', $param);
    }
    
    public function room(Request $request)
    {
        $room = $request->id;
        $param = ['text' => '部屋番号は' . $room . 'です'];
        return view('index', $param);
    }
}
