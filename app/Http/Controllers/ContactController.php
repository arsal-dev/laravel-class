<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function get()
    {
        // $contacts = DB::table('contacts')->select('id', 'name', 'email')->where('id', 5)->get();

        $contacts = DB::table('contacts')->get();

        return view('contacts', ['data' => $contacts->all()]);
    }

    public function insert()
    {
        DB::table('contacts')->insert([
            'name' => 'Ahmed',
            'email' => 'ahmed@email.com',
            'subject' => 'using laravel query builder',
            'age' => 6,
            'message' => 'ahmed is using laravel query builder',
            'created_at' => now(),
        ]);

        return '<h1>Data Saved To Database!</h1>';
    }

    public function submit(Request $request)
    {
        // dd($request->all());

        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'age' => 'required|numeric|min:18',
            'message' => 'required',
        ]);

        DB::table('contacts')->insert([
            'name' => $validated_data['name'],
            'email' => $validated_data['email'],
            'subject' => $validated_data['subject'],
            'age' => $validated_data['age'],
            'message' => $validated_data['message'],
            'created_at' => now(),
        ]);

        return redirect('get-contacts');
    }
}
