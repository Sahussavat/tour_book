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
    <div style="margin-left: 35%; margin-right: 35%; margin-top: 2%;" align="center">
        <h1>สมัครสมาชิก</h1>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text">ชื่อ*</span>
            <input type="text" class="form-control" placeholder="ชื่อ">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">นามสกุล*</span>
            <input type="password" class="form-control" placeholder="นามสกุล">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">อีเมลล์*</span>
            <input type="text" class="form-control" placeholder="อีเมลล์">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">เบอร์โทรศัพท์*</span>
            <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">รหัสผ่าน*</span>
            <input type="text" class="form-control" placeholder="รหัสผ่าน">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">ยืนยันรหัสผ่าน*</span>
            <input type="text" class="form-control" placeholder="ยืนยันรหัสผ่าน">
        </div>
        <br>
        <button type="button" class="btn btn-dark">สมัคร</button>
    </div>
</body>

</html>
