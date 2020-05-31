<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Result;

class IndexController extends Controller
{
    public function index()
    {
        $today_result = Result::orderBy('added_date','desc')->limit(1)->first();
        $prev_result = Result::orderBy('added_date','desc')->limit(7)->get();
        return view('web.index',compact('today_result','prev_result'));
    }
}
