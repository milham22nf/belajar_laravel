<?php

namespace App\Http\Controllers;

use App\http\Middleware\Authenticate;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Authenticate::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/home');
        }
    }


}
?>