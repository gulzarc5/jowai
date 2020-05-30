<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calender;
use Carbon\Carbon;
use DataTables;

class CalenderController extends Controller
{
    public function numberList()
    {
        return view('admin.calender.calender');
    }

    public function calenderListAjax()
    {
        $query = Calender::orderBy('play_date','desc');
        return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('status_tab', function($row){
                if ($row->status == '1') {
                    return "<button class='btn btn-sm btn-primary'>YES</button>";
                } else {
                    return "<button class='btn btn-sm btn-danger'>NO</button>";
                }
                
            })
            ->rawColumns(['status_tab'])
            ->make(true);
    }

    public function calenderAdd(Request $request)
    {
        $this->validate($request, [
            'date'   => 'required',
            'status' => 'required',
        ]);

        $date = $request->input('date');

        $check = Calender::whereDate('play_date',$date)->count();
        if ($check > 0) {
            $update = Calender::where('play_date',$date)->update([
                'status' => $request->input('status'),
            ]);
        }else{
            $update = Calender::create([
                'play_date' => $date,
                'status' => $request->input('status'),
            ]);
        }

       
        return redirect()->back()->with('message','Date Added Successfully in Calender');
    }
}
