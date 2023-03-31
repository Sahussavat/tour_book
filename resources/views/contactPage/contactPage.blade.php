<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>ติดต่อเรา | Happy Time Happy Tour</title>
</head>

<body>
    @php
    $page = "contact";   
    @endphp
    @include('inc.header')
    <div style="margin: 5%;" align="center">
        <h1>ติดต่อเรา</h1>
        <div style="margin-top: 5%; margin-left: 25%; margin-right: 25%; border: 1px solid black;">
            <br>
            <p class="fs-5">Email: HappyTour@dead.com</p>
            <p class="fs-5">Call center: 02-XXXXX-XXXXX-XXXX</p>
        </div>
    </div>
</body>

</html>
