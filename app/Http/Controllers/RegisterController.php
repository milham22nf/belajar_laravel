<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $ValidateData = $request-> validate ([
            'name' => 'required|max:255',
            'username' => ['required', 'min,3', 'max,355', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'paswword' => 'required|min:5|max:255',
         ]);

        $ValidateData['password'] = Hash::make($ValidateData['password']);

         //$request->session()->flash('success', 'Registrasi Berhasil Tolong Login');

         return redirect('/login')->with('success', 'Registrasi Berhasil Tolong Login');
    }
}

?>