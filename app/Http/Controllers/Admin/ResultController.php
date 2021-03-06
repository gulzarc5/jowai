<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Result;
use Carbon\Carbon;
use DataTables;

class ResultController extends Controller
{
    public function resultList()
    {
        return view('admin.result.result_list');
    }

    public function resultListAjax()
    {
        $query = Result::orderBy('id','desc');
        return datatables()->of($query->get())
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn ='<a href="'.route('admin.result_edit',['id'=>$row->id]).'" class="btn btn-warning btn-sm">Edit</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function resultInsert(Request $request)
    {
        $this->validate($request, [
            'number'   => 'required',
            'type' => 'required',
        ]);
        
        $date = Carbon::now()->setTimezone('Asia/Kolkata')->toDateString();
        $type = $request->input('type');
        $number = $request->input('number');

        $today_result = Result::whereDate('added_date',$date)->count();
        if ($today_result > 0) {
            if ($type == '1') {
                Result::whereDate('added_date',$date)->update([
                    'fr'=>$number,
                ]);
            } else {
                Result::whereDate('added_date',$date)->update([
                    'sr'=>$number,
                ]);
            }
            
        } else {
            if ($type == '1') {
                Result::create([
                    'fr'=>$number,
                    'added_date' => $date,
                ]);
            } else {
                Result::create([
                    'sr'=>$number,
                    'added_date' => $date,
                ]);
            }
        }
        
        return redirect()->back()->with('message','Result Added Successfully');
    }

    public function resultEdit($id)
    {
        $result = Result::where('id',$id)->first();
        return view('admin.result.result_edit',compact('result'));
    }

    public function resultUpdate(Request $request,$id)
    {
        Result::where('id',$id)->update([
            'fr'=>$request->input('fr'),
            'sr'=>$request->input('sr'),
        ]);
        return redirect()->back()->with('message','Result Updated Successfully');
    }
}
