<?php

namespace App\Http\Controllers\data;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatasinhvienController extends Controller
{
    public function edit(Request $request) {
        $id=0;
        $name=$age=$address=$gender='';
        if (isset($request->id) && $request->id>0) {
            $id=$request->id;
            $std=DB::table('student')->where('id',$id)->get();
            if ($std !=null && count($std)>0) {
                $name=$std[0]->name;
                $gender = $std[0]->gender;
                
                $address = $std[0]->address;
                $age = $std[0]->age;

            }
        }
        return view('data.danhsachsinhvien')->with([
            'id' => $id,
            'name' => $name,
            'gender' => $gender,
            'address' => $address,
            'age' => $age,
        ]);
    }

    public function addstudent(Request $request) {
        $name=$request->name;
        $age = $request->age;
        $gender = $request->gender;
        $address = $request->address;

        DB::table('student')->insert([
            'name' => $name,
            'gender' => $gender,
            'address' => $address,
            'age' => $age,

        ]);

        return redirect()->route('getsinhvien');
    }

    public function showdanhsach(Request $request) {
        $studenlist=DB::table('student')->get();
        return view('data.showdanhsach')->with([
            'studenlist' => $studenlist,
        ]);
    }

    public function deletestudent(Request $request) {
        DB::table('student')
        ->where('id', $request->id)
        ->delete();
    }
}
