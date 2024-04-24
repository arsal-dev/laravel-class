<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'age' => 'required|numeric|min:18',
            'message' => 'required'
        ]);
    }
}
