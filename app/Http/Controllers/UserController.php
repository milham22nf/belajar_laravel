<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        $data['title']= 'register';
        return view('user/register', $data);
    }
}
