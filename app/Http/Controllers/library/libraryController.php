<?php

namespace App\Http\Controllers\library;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function index(Request $request) {
        // $bookList=[];
        // for ($i=1; $i < 10; $i++) {
        //     $bookList[]=[
        //         'STT'=>$i,
        //         'name' => 'Book'.$i,
        //         'publicyear' => 2000+($i+1),
        //     ];

        // }
        $bookList = DB::table('library')->get();
       return view('library.index')->with([
        'bookList' => $bookList,
       ]);
    }

    public function input(Request $request)
    {
        return view('library.input');
    }

    public function post(Request $request) {
        $STT=$request->STT;
        $name=$request->name;
        $publicyear=$request->publicyear;
        DB::table('library')->insert([
            'name' => $name,
            'STT' => $STT,
            'publicyear' => $publicyear,
            

        ]);
        return redirect()->route('library');
    }
}
