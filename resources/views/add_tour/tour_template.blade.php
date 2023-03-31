<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('util.basicUtil')
    <title>เพิ่มโปรแกรมทัวร์ | Happy Time Happy Tour</title>
</head>

<body>
    @php
        $page = 'add_tour';
    @endphp
    @include('inc.header')
    @include('util.load_page');
    <div class="container" style="margin: 5%;">
        <div class="row">
            <div class="col" align="center">
                <div>
                    <div style="cursor: pointer;"
                        onclick="
                    $('#tour_img_choose').click();
                    ">
                        <img style="max-height: 300px; max-width: 300px;" id="tour_img_preview" style="cursor: pointer;"
                            src="https://cdn1.iconfinder.com/data/icons/rounded-black-basic-ui/139/Photo_Add-RoundedBlack-512.png">
                    </div>
                    <input type="hidden" id="tour_img">
                    <br>
                </div>
                <input type="file" id="tour_img_choose" style="visibility: hidden;" onclick="$(this).val('')"
                    onchange="
                    if($(this).prop('files').length){
                        load_pop_up('/tour/load',{
                            'load': 'load_add_tour_img',
                            'tour_img': window.URL.createObjectURL($(this).prop('files')[0]),
                        });
                    }">
                <br>
                <div style="margin-left: 10%; margin-right: 10%;">
                    <div class="input-group mb-3">
                        <span class="input-group-text">ชื่อโปรแกรมทัวร์ *</span>
                        <input type="text" class="form-control" placeholder="ชื่อโปรแกรมทัวร์">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">ราคาโปรแกรมทัวร์ *</span>
                        <input type="number" class="form-control" placeholder="ราคาโปรแกรมทัวร์">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">จำนวน</span>
                        <input type="number" class="form-control" placeholder="จำนวนวัน">
                        <span class="input-group-text">วัน</span>
                        <input type="number" class="form-control" placeholder="จำนวนวันคืน">
                        <span class="input-group-text">คืน</span>
                    </div>
                </div>
            </div>
            <div class="col" align="center">
                <div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-info" onclick="add_day_detail();">+เพิ่ม</button>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div style="overflow-y: auto; height: 400px;">
                        <ul class="list-group sortable" id="day_details" align="left">
                            @for ($i = 1; $i <= 10; $i++)
                                @include('add_tour.load_tour', ['load' => 'day_detail_template'])
                            @endfor
                        </ul>
                        <script>
                            $('.sortable').sortable({
                                update: function(event, ui) {
                                    reset_day_no();
                                }
                            });

                            function reset_day_no() {
                                let day = 1;
                                $('.program_day').each((index, element) => {
                                    $(element).html(day);
                                    day++;
                                });
                            }

                            function add_day_detail() {
                                $('#day_details').append(
                                    `@include('add_tour.load_tour', ['load' => 'day_detail_template'])`);
                                reset_day_no();
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div align="center">
            <br>
            <button class="btn btn-outline-primary">บันทึกข้อมูล</button>
        </div>
    </div>
</body>

</html>
