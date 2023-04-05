<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>สมัครสมาชิก | Happy Time Happy Tour</title>
</head>

<body>
    @php
    $page = "register";   
    @endphp
    @include('inc.header')
    @include('util.submit_control')
    <div style="margin-left: 35%; margin-right: 35%; margin-top: 2%;" align="center">
        <h1>สมัครสมาชิก</h1>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text input_name" name="first_name">ชื่อ*</span>
            <input type="text" class="form-control" id="first_name" placeholder="ชื่อ"
            onchange="clear_err_msg('first_name')">
        </div>
        <label style="color:crimson; float: left;" name="first_name" class="err_msg"></label>
        <div class="input-group mb-3">
            <span class="input-group-text input_name" name="last_name">นามสกุล*</span>
            <input type="text" class="form-control" id="last_name" placeholder="นามสกุล"
            onchange="clear_err_msg('last_name')">
        </div>
        <label style="color:crimson; float: left;" name="last_name" class="err_msg"></label>
        <div class="input-group mb-3">
            <span class="input-group-text input_name" name="email">อีเมลล์*</span>
            <input type="email" class="form-control" id="email" placeholder="อีเมลล์"
            onchange="clear_err_msg('email')">
        </div>
        <label style="color:crimson; float: left;" name="email" class="err_msg"></label>
        <div class="input-group mb-3">
            <span class="input-group-text input_name" name="phone_no">เบอร์โทรศัพท์*</span>
            <input type="text" class="form-control" id="phone_no" placeholder="เบอร์โทรศัพท์"
            onchange="clear_err_msg('phone_no')">
        </div>
        <label style="color:crimson; float: left;" name="phone_no" class="err_msg"></label>
        <div class="input-group mb-3">
            <span class="input-group-text input_name" name="password">รหัสผ่าน*</span>
            <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน"
            onchange="clear_err_msg('password')">
        </div>
        <label style="color:crimson; float: left;" name="password" class="err_msg"></label>
        <div class="input-group mb-3">
            <span class="input-group-text input_name" name="password_confirmation">ยืนยันรหัสผ่าน*</span>
            <input type="password" class="form-control" id="password_confirmation" placeholder="ยืนยันรหัสผ่าน"
            onchange="clear_err_msg('password_confirmation')">
        </div>
        <label style="color:crimson; float: left;" name="password_confirmation" class="err_msg"></label>
        <br>
        <button type="button" class="btn btn-dark"
        onclick="
        send_form_data('/register',{
            'first_name' : $('#first_name').val(),
            'last_name' : $('#last_name').val(),
            'phone_no' : $('#phone_no').val(),
            'email' : $('#email').val(),
            'password' : $('#password').val(),
            'password_confirmation' : $('#password_confirmation').val(),
        }, 
        ()=>{
            window.location = '/';
        });
        "
        >สมัคร</button>
    </div>
</body>

</html>
