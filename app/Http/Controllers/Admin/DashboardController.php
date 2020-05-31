<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calender;
use App\Result;
use App\ContactUs;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $result = Result::orderBy('id','desc')->limit(10)->get();
        $calender = Calender::orderBy('play_date','desc')->limit(10)->get();

        return view('admin.dashboard',compact('result','calender'));
    }

    public function contactList()
    {
        return view('admin.contact.contact');
    }

    public function contactListAjax()
    {
        $query = ContactUs::orderBy('id','desc');
        return datatables()->of($query->get())
            ->addIndexColumn()
            ->make(true);
    }
}
