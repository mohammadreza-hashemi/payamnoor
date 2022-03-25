<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->where('password',$request->password)->first();
        if ($user){
            return 'succses';
        }
        return 'false';

    }

    public function create()
    {
        return User::create(['name'=>'ali2','email'=>'ali2@gmail.com','password'=>'123456']);


    }


}
