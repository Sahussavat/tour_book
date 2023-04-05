<?php

namespace App\Http\Controllers;

use App\Models\Day_detail;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{
    public function add_tour(Request $request){
        $rules = [
            'program_name' => ['required'],
            'program_img' => ['required'],
            'detail' => ['required'],
            'day_details' => ['required'],
            'total_cost' => ['required'],
            'day_amount' => ['required'],
        ];

        $customMessages = [
            'required' => 'โปรดกรอกข้อมูล',
        ];
        
        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()){
            return response()->json(['err' => $validator->messages()]);
        }
        $day_details = json_decode($request['day_details'], true)['all'];
        if(in_array('', $day_details)){
            return response()->json(['err' => ['day_details' => ['โปรดกรอกข้อมูลให้ครบทุกวันที่']]]);
        }

        $tour = new Program();
        $tour['program_name'] = $request['program_name'];
        $tour['program_img'] = $request['program_img'];
        $tour['detail'] = $request['detail'];
        $tour['total_cost'] = $request['total_cost'];
        $tour['day_amount'] = $request['day_amount'];
        $tour->save();

        $i = 1;
        foreach($day_details as $day_detail){
            $tour->day_details()->save(new Day_detail([
                'day_no' => $i,
                'detail' => $day_detail,
            ]));
            $i++;
        }
    }
}
