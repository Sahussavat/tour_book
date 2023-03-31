<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>จองทัวร์ | Happy Time Happy Tour</title>
</head>

<body>
    @include('inc.header')
    <div class="container" style="margin: 5%;" align="center">
        <div style="margin-left: 25%; margin-right: 25%;">
            <p class="fs-1 fw-bold">จองทัวร์</p>
            <p class="fs-1 fw-bold">เที่ยวเชี่ยงใหม่ 4 วัน 3 คืน</p>
            <br>
            <p class="fs-5 fw-light">This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>
            <br>
            <div align="center"
                style="background-color: #f56262; 
                        color: white; margin-left: 25%; margin-right: 25%; border-radius: 15px;">
                <p class="fs-4">7900 บาท</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <div style="margin-left: 30%;">
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
                        <span class="input-group-text">จำนวนผู้เดินทาง*</span>
                        <input type="text" class="form-control" placeholder="จำนวนผู้เดินทาง">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">วันที่ออกเดินทาง*</span>
                        <input type="date" class="form-control" placeholder="จำนวนผู้เดินทาง">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">แนบสลิป*</span>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="{{asset('images/qr-code.png')}}" style="max-height: 300px; max-width: 300px;">
                <p class="fs-4 fw-bold">ธนาคาร ไทยมานิช</p>
                <p class="fs-6 fw-bold">บัญชี บริษัท Happy Tour จำกัด</p>
            </div>
        </div>
        <br>
        <div style="margin-left: 25%; margin-right: 25%;">
            <button class="btn btn-lg btn-dark" style="background-color: #f56262;
            border-color: #f56262;"
            onclick="
            window.location = '/tour/{{$tour_id}}/book/1';
            ">ยืนยันการจอง</button>
        </div>
    </div>
</body>

</html>
