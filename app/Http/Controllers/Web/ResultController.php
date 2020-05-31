<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Result;

class ResultController extends Controller
{
    public function index()
    {
        $result = Result::orderBy('id','desc')->paginate(2);
        return view('web.previous.previous',compact('result'));
    }
}
