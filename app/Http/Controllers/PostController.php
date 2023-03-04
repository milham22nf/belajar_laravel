<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        return view ('post', [
            "title" => "posts",
            "posts" => \App\models\post::all()
        ]);
    }

    public function show($slug)
    {
        return view('posts', [
            "title" => "Single Post",
            "post" => post::find($slug)
        ]);
    }
}
