<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calender;

class CalenderController extends Controller
{
    public function index()
    {
        $calender = Calender::orderBy('play_date','desc')->paginate(2);
        return view('web.calender.calender',compact('calender'));
    }
}
