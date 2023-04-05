<?php

namespace App\Http\Controllers;

use App\Models\Role_user;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request){
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone_no' => ['required', 'unique:users,phone_no'],
            'email' => ['required', 'unique:users,email'],
            'password_confirmation' => ['required'],
            'password' => ['required', 'confirmed'],
        ];

        $customMessages = [
            'required' => 'โปรดกรอกข้อมูล',
            'email.unique' => 'มีคนใช้อีเมลล์นี้แล้ว',
            'phone_no.unique' => 'มีคนใช้เบอร์นี้แล้ว',
            'password.confirmed' => 'โปรดกรอกรหัสผ่านให้ตรงกัน',
        ];
        
        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()){
            return response()->json(['err' => $validator->messages()]);
        }

        $user = new User([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone_no' => $request['phone_no'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        $user->save();

        $role_user = new Role_user([
            'user_id' => $user->id,
            'role_id' => \App\Models\Role::where('role_name', 'traveller')->first()['id'],
        ]);
        $role_user->save();

        $this->login($request);
    }

    public function login(Request $request){
        $rules = [
            'email' => ['required'],
            'password' => ['required'],
        ];

        $customMessages = [
            'required' => 'โปรดกรอกข้อมูล',
        ];
        
        $validator = Validator::make($request->all(), $rules, $customMessages);

        if($validator->fails()){
            return response()->json(['err' => $validator->messages()]);
        }

        if (!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return response()->json(['err' => [
                'password' => ['รหัสผ่านหรือไอดีไม่ถูกต้อง']
            ]]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
    }
}
