<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>บัตรทัวร์ | Happy Time Happy Tour</title>
</head>

<body>
    @include('inc.header')
    <div class="container" style="margin: 5%;" align="center">
        @php
         $program = \App\Models\Program::find($tour_id);  
         $book = $program->reservations()->find($book_id); 
         $user = \App\Models\User::find($book['user_id']);
        @endphp
        <div style="margin-left: 25%; margin-right: 25%;">
            <p class="fs-1 fw-bold">จองทัวร์ เสร็จสิ้น</p>
            <p class="fs-1 fw-bold">{{$program['program_name']}}</p>
            <br>
            <p class="fs-5 fw-light">{{$program['detail']}}</p>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <img src="{{$program['program_img']}}"
                style="max-height: 300px; max-width: 440px; border-radius: 5px;">
            </div>
            <div class="col" align="left">
                <div style="border-radius: 5px; border: 1px solid black;">
                    <div style="margin: 1%; margin-left: 5%;">
                        <p class="fs-5">ชื่อผู้จอง: {{$user['first_name']." ".$user['last_name']}}</p>
                        <p class="fs-5">อีเมลล์: {{$user['email']}}</p>
                        <p class="fs-5">จำนวนผู้เดินทาง: {{$book['travellers_amount']}}</p>
                        <p class="fs-5">เบอร์โทรศัพท์: {{$user['phone_no']}}</p>
                        <p class="fs-5">วันที่ออกเดินทาง: {{$book['travel_date']}}</p>
                    </div>
                </div>
                <br>
                <div align="center"
                    style="background-color: #f56262; 
                            color: white; margin-left: 25%; margin-right: 25%; border-radius: 15px;">
                    <p class="fs-4">{{number_format($program['total_cost'])}} บาท</p>
                </div>
            </div>
        </div>
        <br>
        <div style="margin-left: 25%; margin-right: 25%;">
            
        </div>
    </div>
</body>

</html>
