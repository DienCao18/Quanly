<?php

namespace App\Http\Controllers\quanly;

use App\Http\Controllers\Controller;
use DateInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class attendenceController extends Controller
{
    public function index(Request $request) {
        $index=0;
        
        $lichgiaovien=DB::table('lichday')
        ->where('id',$request->id)
        ->get();
        if ($lichgiaovien !== null && count($lichgiaovien)>0) {
            $lichgiaovien=$lichgiaovien[0];
        } else {
            return redirect()->route('ql');
        };
        $myDate = new \DateTime();
        $myDate->modify('+7 hour');

        $currentlyDate = $myDate->format("Y-m-d");

        // 1 ngày điểm danh 1 lần
        $edit=DB::table('diemdanh')
        ->leftJoin('sinhvien', 'sinhvien.rollno','=','diemdanh.rollno')
        ->where('diemdanh.id_lichday', $request->id)
        ->where('diemdanh.created_at','>=', $currentlyDate)
        ->select('diemdanh.*','sinhvien.fullname')
        ->get();
         $attendence=null;
        if ($edit==null || count($edit)==0) {
            $attendence = DB::table('sinhvien')
            ->where('class_name',$lichgiaovien->class_name)
            ->get();

       return view('quanly.attendence',compact('index'))->with([
        'attendence' =>$attendence,
        'lichgiaovien'=>$lichgiaovien,
        'edit'=>$edit,
       ]);
    }
    }

    public function post(Request $request) {
        $data=JSON_decode($request->data,true);
        $id_lichday=$request->id_lichday;
        $myDate = new \DateTime();
        $myDate->modify('+7 hour');

        $currentlyTime = $myDate->format("Y-m-d H:i:s");
        $currentlyDate = $myDate->format("Y-m-d");


        //thêm mới
        foreach($data as $item) {
            DB::table('diemdanh')->insert([
                
                'id_lichday'=>$id_lichday,
                'rollno'=>$item['rollno'],
                'status'=>$item['status'],
                'note'=>$item['note'],
                'created_at' => $currentlyTime,
                'updated_at' => $currentlyTime,
            ]);
        }
        $edit = DB::table('diemdanh')
        ->leftJoin('sinhvien', 'sinhvien.rollno', '=', 'diemdanh.rollno')
        ->where('diemdanh.id_lichday', $request->id_lichday)
        ->where('diemdanh.created_at', '>=', $currentlyDate)
        ->select('diemdanh.*', 'sinhvien.fullname')
        ->get();

        //Update
        if ($edit != null && count($edit) > 0) {
            foreach ($data as $item) {
                DB::table('diemdanh')
                ->where('id_lichday', $request->id_lichday)
                ->where('diemdanh.created_at', '>=', $currentlyDate)
                ->where('rollno',$item['rollno'])
                ->update([

                    'id_lichday' => $id_lichday,
                  
                    'status' => $item['status'],
                    'note' => $item['note'],
                  
                    'updated_at' => $currentlyTime,
                ]);
            }

            return redirect()->route('ql');
        }
        
    }

    public function lichday(Request $request)
    {
        $myDate= new \DateTime();
        $myDate->modify('+7 hour');

        $currently= $myDate->format("Y-m-d");
        $frametime=0;
        $day= $myDate->format("N");
        if ($day==1 || $day==3 || $day==5) {
            $frametime=0;
        } else if ($day == 7) {
            $frametime=-1;
        } else {
            $frametime=1;
        }

        $hour= $myDate->format("H");
        $minute= $myDate->format("i");
        $currentTime=$hour+$minute/60;
       


        $lichday = DB::table('lichday')
        ->where('startdate','<=',$currently)
        ->where('enddate', '>=', $currently)
        ->where('frametime',$frametime)
        ->where('starttime','<=',$currentTime)
        ->where('endtime', '>=', $currentTime)
        ->get();
        return view('quanly.lichday')->with([
            'lichday' => $lichday,
        ]);
    }
}
