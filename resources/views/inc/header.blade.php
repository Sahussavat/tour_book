@php
if(!isset($page)){
  $page = "";   
}
@endphp
@include('util.submit_control')
<nav class="navbar navbar-dark bg-dark">
    <div style="margin-left: 35%;">
        <p style="color: white;" class="fs-1">Happy Time Happy Tour</p>    
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" style="margin-left: 5%;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @if($page == "") active @endif"
               aria-current="novel" href="/"><p class="fs-5">หน้าแรก</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($page == "contact") active @endif"
                href="/contact"><p class="fs-5">ติดต่อเรา</p></a>
            </li>
            @if(\Auth::check())
            @if(\Auth::user()->is_admin())
            <li class="nav-item">
              <a class="nav-link @if($page == "add_tour") active @endif"
                href="/tour/add"><p class="fs-5">เพิ่มโปรแกรมทัวร์</p></a>
            </li>
            @endif
            @endif
          </ul>
        </div>
        <div class="collapse navbar-collapse" style="margin-left: 50%;">
            <ul class="navbar-nav">
              @if(!\Auth::check())
              <li class="nav-item">
                <a class="nav-link @if($page == "register") active @endif"
                 aria-current="novel" href="/register"><p class="fs-5">สมัครสมาชิก</p></a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if($page == "login") active @endif"
                  href="/login"><p class="fs-5">เข้าสู่ระบบ</p></a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="#"
                onclick="
                send_form_data('/logout',{},()=>{ window.location = '/';});
                "
                ><p class="fs-5">ออกจากระบบ</p></a>
              </li>
              @endif
            </ul>
          </div>
    </div>
    <div class="popup_section">
    </div>
</nav>