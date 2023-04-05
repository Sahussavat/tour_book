<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>เข้าสู่ระบบ | Happy Time Happy Tour</title>
</head>

<body>
    @php
        $page = 'login';
    @endphp
    @include('inc.header')
    <div class="container" style="margin: 5%;">
        <div class="row">
            <div class="col">

            </div>
            <div class="col" align="center">
                <div style="margin-left: 25%; margin-right: 25%;">
                    <h1>เข้าสู่ระบบ</h1>
                    <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="email">อีเมลล์</span>
                        <input type="text" class="form-control" id="email" placeholder="อีเมลล์">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="password">รหัสผ่าน</span>
                        <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน">
                    </div>
                    <label style="color:crimson; float: left;" name="password" class="err_msg"></label>
                    <br>
                    <br>
                    <button type="button" class="btn btn-dark"
                    onclick="
                    send_form_data('/login',{
                        'email' : $('#email').val(),
                        'password' : $('#password').val(),
                    }, 
                    ()=>{
                        window.location = '/';
                    });
                    "
                    >เข้าสู่ระบบ</button>
                    <p style="margin-top: 5%;">หรือ <a style="color: #f56262;" href="/register">สมัครสมาชิก</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
