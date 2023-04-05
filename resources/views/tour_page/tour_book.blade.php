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
            @php
             $program = \App\Models\Program::find($tour_id);   
            @endphp
            <p class="fs-1 fw-bold">จองทัวร์</p>
            <p class="fs-1 fw-bold">{{$program['program_name']}}</p>
            <br>
            <p class="fs-5 fw-light">{{$program['detail']}}</p>
            <br>
            <div align="center"
                style="background-color: #f56262; 
                        color: white; margin-left: 25%; margin-right: 25%; border-radius: 15px;">
                <p class="fs-4">{{number_format($program['total_cost'])}} บาท</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <div style="margin-left: 30%;">
                    <div class="input-group mb-3">
                        @php
                         $user = \Auth::user()   
                        @endphp
                        <span class="input-group-text">ชื่อ*</span>
                        <input type="text" class="form-control" placeholder="ชื่อ" readonly
                        value="{{$user['first_name']}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">นามสกุล*</span>
                        <input type="text" class="form-control" placeholder="นามสกุล" readonly
                        value="{{$user['last_name']}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">อีเมลล์*</span>
                        <input type="text" class="form-control" placeholder="อีเมลล์" readonly
                        value="{{$user['email']}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">เบอร์โทรศัพท์*</span>
                        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" readonly
                        value="{{$user['phone_no']}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="travellers_amount">จำนวนผู้เดินทาง*</span>
                        <input type="number" class="form-control" id="travellers_amount" placeholder="จำนวนผู้เดินทาง"
                        onchange="clear_err_msg('travellers_amount');">
                    </div>
                    <label style="color:crimson; float: left;" name="travellers_amount" class="err_msg"></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="travel_date">วันที่ออกเดินทาง*</span>
                        <input type="datetime-local" class="form-control" id="travel_date" placeholder="จำนวนผู้เดินทาง"
                        onchange="clear_err_msg('travel_date');">
                    </div>
                    <label style="color:crimson; float: left;" name="travel_date" class="err_msg"></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="slip">แนบสลิป*</span>
                        <input type="file" class="form-control"
                        onchange="
                        if($(this).prop('files').length){
                            $('#slip').val(window.URL.createObjectURL($(this).prop('files')[0]));
                            $('#slip').change();
                        }
                        ">
                        <input type="hidden" id="slip" class="form-control"
                        onchange="clear_err_msg('slip');">
                    </div>
                    <label style="color:crimson; float: left;" name="slip" class="err_msg"></label>
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
            send_form_data('/tour/book',{
                'program_id' : {{$program['id']}},
                'travellers_amount' : $('#travellers_amount').val(),
                'travel_date' : $('#travel_date').val(),
                'slip' : $('#slip').val(),
            },
            (res)=>{
                window.location = '/tour/{{$program['id']}}/book/' + res['reservation_id'];
            });
            ">ยืนยันการจอง</button>
        </div>
    </div>
</body>

</html>
