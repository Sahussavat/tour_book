@php
if(isset($_POST['load'])) {
    $load = $_POST['load'];
} else if(!isset($load)){
    $load = "";
}
@endphp
@switch($load)
    @case('day_detail_template')
    <li class="list-group-item">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    @php
                    if(!isset($i)){
                        $i = 0;
                    }   
                    @endphp
                    <p class="fs-5 fw-bold">วันที่ <label class="program_day">{{$i}}</label></p>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <textarea class="form-control day_detail" style="resize: none;" rows="5">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
                </textarea>
                    </div>
                </div>
                <div class="col-1">
                    <button class="btn btn-lg btn-outline-danger"
                        onclick="$(this).parent().parent().parent().parent().remove();
                        reset_day_no();">X</button>
                </div>
            </div>
        </div>
    </li>
    @break    
    @case('load_add_program_img')
        @include('add_tour.add_tour_img', $_POST)
    @break
@endswitch