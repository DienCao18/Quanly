<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteStudentController extends Controller
{
    public function showStudent(request $request) {
        $studentlist=[];
        for ($i=0; $i<10; $i++) {
            $studentlist[]=[
                'STT'=>$i+1,
                'fullname' => 'I LOVE YOU'.$i,
                'email' => 'ilover@gmail.com' . ($i+5),
                'birthdate' => date('Y-m-d H:i:s'),
            ];
        }
        if (empty($giaithua)) {
            $giaithua=1;
        } else {
            $giaithua = $request->giaithua;
        }
        $result=1;
        $tinh=$request->tinh;
        
        switch ($tinh){
            case "result";
                for ($i = 1; $i <= $giaithua; $i++) {
                    $result *= $i;
                };
        }
        
        return view('route.student-list',compact('result','giaithua'))->with(['student'=>$studentlist]);
    }
}
