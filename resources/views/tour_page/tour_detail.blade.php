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

            </div>
            <div class="col-6" align="center">
                <p class="fs-1 fw-bold">รายละเอียดโปรแกรมทัวร์</p>
                <p class="fs-1">เที่ยวเชี่ยงใหม่ 4 วัน 3 คืน</p>
                <br>
                <p class="fs-5 fw-light">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                <br>
                <div align="center"
                    style="background-color: #f56262; 
                            color: white; margin-left: 25%; margin-right: 25%; border-radius: 15px;">
                    <p class="fs-4">7900 บาท</p>
                </div>
                <br>
                <ul class="list-group" align="left">
                    @for ($i = 1; $i <= 5; $i++)
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <p class="fs-5 fw-bold">วันที่ {{ $i }}</p>
                                    </div>
                                    <div style="margin-left: 5%;" class="col">
                                        This is a longer card with supporting text below as a natural lead-in to
                                        additional content. This content is a little bit longer.
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
                <br>
                <button type="button" class="btn btn-lg btn-primary"
                onclick="window.location = '/tour/{{$tour_id}}/book'"
                >จองทัวร์</button>
            </div>
            <div class="col" align="center">
                <p class="fs-4 fw-bold">ฟรี</p>
                <p class="fs-4 fw-bold">ประกันภัยการเดินทาง!</p>
            </div>
        </div>
    </div>
</body>

</html>
