<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>เข้าสู่ระบบ | Happy Time Happy Tour</title>
</head>

<body>
    @include('inc.header')
    <div class="container" style="margin: 5%;">
        <div class="row">
            <div class="col">
                @php
                    $program = \App\Models\Program::find($tour_id);  
                @endphp
            </div>
            <div class="col-6" align="center">
                <p class="fs-1 fw-bold">รายละเอียดโปรแกรมทัวร์</p>
                <p class="fs-1">{{$program['program_name']}}</p>
                <br>
                <p class="fs-5 fw-light">{{$program['detail']}}</p>
                <br>
                <div align="center"
                    style="background-color: #f56262; 
                            color: white; margin-left: 25%; margin-right: 25%; border-radius: 15px;">
                    <p class="fs-4">{{number_format($program['total_cost'])}} บาท</p>
                </div>
                <br>
                <ul class="list-group" align="left">
                    @php
                     $day_details = $program->day_details()->get();   
                    @endphp
                    @foreach ($day_details as $day_detail)
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <p class="fs-5 fw-bold">วันที่ {{ $day_detail['day_no'] }}</p>
                                    </div>
                                    <div style="margin-left: 5%;" class="col">
                                        {{ $day_detail['detail'] }}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <br>
                @if(\Auth::check())
                @if(!\Auth::user()->is_admin())
                <button type="button" class="btn btn-lg btn-primary"
                onclick="window.location = '/tour/{{$tour_id}}/book'"
                >จองทัวร์</button>
                @endif
                @endif
            </div>
            <div class="col" align="center">
                <p class="fs-4 fw-bold">ฟรี</p>
                <p class="fs-4 fw-bold">ประกันภัยการเดินทาง!</p>
            </div>
        </div>
    </div>
</body>

</html>
