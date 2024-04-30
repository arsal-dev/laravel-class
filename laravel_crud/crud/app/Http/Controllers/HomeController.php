<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $students = DB::table('students')->get()->all();
        return view('home', ['students' => $students]);
    }
}
