<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        // $blogs = DB::table('blogs')->get();
        $blogs = Blog::all();
        return view('welcome', ['blogs' => $blogs]);
    }
}
