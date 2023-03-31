<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>บัตรทัวร์ | Happy Time Happy Tour</title>
</head>

<body>
    @include('inc.header')
    <div class="container" style="margin: 5%;" align="center">
        <div style="margin-left: 25%; margin-right: 25%;">
            <p class="fs-1 fw-bold">จองทัวร์ เสร็จสิ้น</p>
            <p class="fs-1 fw-bold">เที่ยวเชี่ยงใหม่ 4 วัน 3 คืน</p>
            <br>
            <p class="fs-5 fw-light">This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.</p>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <img src="https://th.bing.com/th/id/OIP.wu7D39F5H3HC6l_cxczXVQHaE9?pid=ImgDet&rs=1"
                style="max-height: 300px; max-width: 440px; border-radius: 5px;">
            </div>
            <div class="col" align="left">
                <div style="border-radius: 5px; border: 1px solid black;">
                    <div style="margin: 1%; margin-left: 5%;">
                        <p class="fs-5">ชื่อผู้จอง: xxxxxx</p>
                        <p class="fs-5">อีเมลล์: xxxxxx</p>
                        <p class="fs-5">จำนวนผู้เดินทาง: xxxxxx</p>
                        <p class="fs-5">เบอร์โทรศัพท์: xxxxxx</p>
                        <p class="fs-5">วันที่ออกเดินทาง: xxxxxx</p>
                    </div>
                </div>
                <br>
                <div align="center"
                    style="background-color: #f56262; 
                            color: white; margin-left: 25%; margin-right: 25%; border-radius: 15px;">
                    <p class="fs-4">7900 บาท</p>
                </div>
            </div>
        </div>
        <br>
        <div style="margin-left: 25%; margin-right: 25%;">
            
        </div>
    </div>
</body>

</html>
