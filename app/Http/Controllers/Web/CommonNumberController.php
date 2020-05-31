<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CommonNumber;

class CommonNumberController extends Controller
{
    public function index()
    {
        $commonNumber1 =  CommonNumber::where('id',1)->first();
        $commonNumber2 =  CommonNumber::where('id',2)->first();
        return view('web.common.common',compact('commonNumber1','commonNumber2'));
    }
}
