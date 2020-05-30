<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calender;
use App\Result;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $result = Result::orderBy('id','desc')->limit(10)->get();
        $calender = Calender::orderBy('play_date','desc')->limit(10)->get();

        return view('admin.dashboard',compact('result','calender'));
    }
}
