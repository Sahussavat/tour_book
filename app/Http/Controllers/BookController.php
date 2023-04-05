<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Reservation;

class BookController extends Controller
{
    public function add_reservation(Request $request){
        $rules = [
            'program_id' => ['required'],
            'travellers_amount' => ['required'],
            'travel_date' => ['required'],
            'slip' => ['required'],
        ];

        $customMessages = [
            'required' => 'โปรดกรอกข้อมูล',
        ];
        
        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()){
            return response()->json(['err' => $validator->messages()]);
        }

        $reservation = Program::find($request['program_id'])->reservations()->save(new Reservation([
            'user_id' => \Auth::id(),
            'travellers_amount' => $request['travellers_amount'],
            'travel_date' => $request['travel_date'],
            'slip' => $request['slip'],
        ]));

        return response()->json(['reservation_id' => $reservation['id']]);
    }
}
