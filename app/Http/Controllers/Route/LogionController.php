<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogionController extends Controller
{
    public function login(Request $request) {

        return view('route.login');
    }

    public function getUser(Request $request)
    {
        $name=$request->name;
        $email = $request->email;
        $password = $request->password;
        $birthday = $request->birthday;
        $address = $request->address;
        $xacnhan = $request->xacnhan;


        return view('route.welcome', compact('birthday', 'address', 'xacnhan','name','email','password'));
    }

    public function postuser(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $birthday = $request->birthday;
        $address = $request->address;
        $xacnhan = $request->xacnhan;
        return view('route.login', compact('birthday', 'address', 'xacnhan', 'name', 'email', 'password'));

    }
}
