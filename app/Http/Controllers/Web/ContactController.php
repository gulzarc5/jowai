<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);

        ContactUs::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('message','Thanks For Contacting With Us . We Will Get back to You Soon.');

    }
}
