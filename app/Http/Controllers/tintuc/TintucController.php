<?php

namespace App\Http\Controllers\tintuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TintucController extends Controller
{
    public function index() {
        return view('tintuc.tintuc');
    }

    public function thegioi() {
        return view('tintuc.thegioi');
    }

    public function lienhe()
    {
        return view('tintuc.lienhe');
    }

}
