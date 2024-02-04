<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function addblogitem(Request $request) 
    {
        return view('addblogitem');
    }

    public function saveblogitem(Request $request) 
    {
        $blog = new Blog;
        $blog->title = $request->title; 
        $blog->content = '';
        $blog->save();
        return redirect('/');
    }
}
