<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>หน้าหลัก | Happy Time Happy Tour</title>
</head>

<body>
    @include('inc.header')
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 3%;">
        @for ($i=0;$i < 14;$i++)
        <div class="col">
            <div class="card">
                <a onclick="window.location = '/tour/1';" style="cursor: pointer;">
                <img style="max-height: 300px; max-width: 440px;"
                src="https://th.bing.com/th/id/OIP.wu7D39F5H3HC6l_cxczXVQHaE9?pid=ImgDet&rs=1" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">เที่ยวเชี่ยงใหม่ 4 วัน 3 คืน</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <br>
                    <div align="center" style="background-color: #f56262; 
                    color: white; margin-left: 15%; margin-right: 15%; border-radius: 15px;">
                        <p class="fs-4">7900 บาท</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        @endfor
    </div>
</body>

</html>
