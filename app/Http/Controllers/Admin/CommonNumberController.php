<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CommonNumber;
use Carbon\Carbon;

class CommonNumberController extends Controller
{
    public function numberList()
    {
        $commonNumber =  CommonNumber::get();
        return view('admin.commonNumber.common_number',compact('commonNumber'));
    }

    public function numberUpdate(Request $request)
    {
        $this->validate($request, [
            'type'   => 'required',
            'direct' => 'required',
            'house'  => 'required',
            'ending'  => 'required',
        ]);

        $type = $request->input('type');
        $update = CommonNumber::where('id',$type)->update([
            'direct' => $request->input('direct'),
            'house' => $request->input('house'),
            'ending' => $request->input('ending'), 
            'added_date' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateString(),
        ]);

        return redirect()->back()->with('message','Common Number Updated Successfully');
    }
}
