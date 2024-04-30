<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function add_student()
    {
        return view('students.add');
    }

    public function add_new_student(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|unique:students',
            'age' => 'required',
            'subject' => 'required',
            'address' => 'required',
        ]);

        DB::table('students')->insert([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'age' => $data['age'],
            'subject' => $data['subject'],
            'address' => $data['address'],
            'created_at' => now(),
        ]);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        DB::table('students')->delete($id);

        return redirect('/');
    }

    public function update($id)
    {
        $student = DB::table('students')->find($id);

        return view('students.update', ['student' => $student]);
    }

    public function update_put(Request $request, $id)
    {
        $data = $request->all();
        // $data = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:students',
        //     'phone' => 'required|unique:students',
        //     'age' => 'required',
        //     'subject' => 'required',
        //     'address' => 'required',
        // ]);

        DB::table('students')->where('id', $id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'age' => $data['age'],
            'subject' => $data['subject'],
            'address' => $data['address'],
            'updated_at' => now(),
        ]);

        return redirect('/');
    }
}
