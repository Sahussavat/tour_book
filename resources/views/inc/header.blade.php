@php
if(!isset($page)){
  $page = "";   
}
@endphp
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
               aria-current="interactive_novel" href="/contact"><p class="fs-5">ติดต่อเรา</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($page == "add_tour") active @endif"
               aria-current="interactive_novel" href="/tour/add"><p class="fs-5">เพิ่มโปรแกรมทัวร์</p></a>
            </li>
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
                 aria-current="interactive_novel" href="/login"><p class="fs-5">เข้าสู่ระบบ</p></a>
              </li>
              @endif
            </ul>
          </div>
    </div>
    <div class="popup_section">
    </div>
</nav>