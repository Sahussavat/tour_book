<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>หน้าหลัก | Happy Time Happy Tour</title>
</head>

<body>
    @include('inc.header')
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 3%;">
        @php
        $programs = \App\Models\Program::get();
        @endphp
        @foreach ($programs as $program)
        <div class="col">
            <div class="card">
                <a onclick="window.location = '/tour/{{$program['id']}}';" style="cursor: pointer;">
                <img style="max-height: 300px; max-width: 440px;"
                src="{{$program['program_img']}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$program['program_name']}}</h5>
                    <p class="card-text">{{$program['detail']}}</p>
                    <br>
                    <div align="center" style="background-color: #f56262; 
                    color: white; margin-left: 15%; margin-right: 15%; border-radius: 15px;">
                        <p class="fs-4">{{number_format($program['total_cost'])}} บาท</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
