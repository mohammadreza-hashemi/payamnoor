<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('panel');
        }
            return 'CREDENTIAL IS FAILED !!';
    }

    public function logout()
    {
        \auth()->logout();
        return redirect('login');
    }




}
