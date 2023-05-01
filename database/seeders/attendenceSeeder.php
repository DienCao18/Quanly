<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class attendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0;$i < 10;$i++) {
            DB::table('sinhvien')->insert([
                'rollno'=>'ROO'.$i,
                'fullname'=>'SV0'.$i,
                'email'=>"a".$i."@gmail.com",
                'address'=>'DC'.$i,
                'birthdate'=>'1990-01-02',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')

            ]);
        }

            DB::table('lichday')->insert([
           'subject_name'=>'Học laravel',
         'teacher_name'=>'Thầy cao minh điền',
            'frametime'=>0,
            'starttime'=>13,
            'endtime'=>17,
            'startdate'=>'2006-11-5',
            'enddate'=>'2006-12-5',
            'note'=> 'Học 2 4 6 chiều',
            ]);
        DB::table('lichday')->insert([
            'subject_name' => 'Học SQL',
            'teacher_name' => 'Thầy cao phi duong',
            'frametime' => 0,
            'starttime' => 8,
            'endtime' => 12,
            'startdate' => '2006-11-5',
            'enddate' => '2006-12-5',
            'note' => 'Học 3 5 7 chiều',
           
        ]);
        
    }
}
