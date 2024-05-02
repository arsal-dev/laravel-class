<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show()
    {
        return Teacher::get();
        // return Teacher::where('id', '>', 5)->orderBy('id', 'desc')->take(5)->get();
        // return Teacher::select('email')->find(1);
        // return Teacher::latest()->get();
        // return Teacher::where('id', 10)->orWhere('id', '>', 12)->get();
    }

    public function create()
    {
        Teacher::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'city' => 'karachi'
        ]);
    }

    public function delete()
    {
        // Teacher::where('id', 1)->delete();
        // Teacher::truncate();
        Teacher::destroy(3);
    }

    public function update()
    {
        Teacher::where('id', 1)->update([
            'city' => 'abdullah',
        ]);
    }

    public function trash()
    {
        return Teacher::onlyTrashed()->get();
    }

    public function restore()
    {
        return Teacher::withTrashed()->find(1)->restore();
    }

    public function forceDelete()
    {
        return Teacher::withTrashed()->find(3)->forceDelete();
    }
}
