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
                    $('#program_img_choose').click();
                    ">
                        <img style="max-height: 300px; max-width: 300px;" id="program_img_preview" style="cursor: pointer;"
                            src="https://cdn1.iconfinder.com/data/icons/rounded-black-basic-ui/139/Photo_Add-RoundedBlack-512.png">
                    </div>
                    <input type="hidden" id="program_img" onchange="clear_err_msg('program_img');">
                    <br>
                </div>
                <input type="file" id="program_img_choose" style="visibility: hidden;" onclick="$(this).val('')"
                    onchange="
                    if($(this).prop('files').length){
                        load_pop_up('/tour/load',{
                            'load': 'load_add_program_img',
                            'program_img': window.URL.createObjectURL($(this).prop('files')[0]),
                        });
                    }">
                <div style="margin-left: 10%; margin-right: 10%;">
                    <label style="color:crimson; float: left;" name="program_img" data-err_label="ภาพทัวร์*"
                     class="err_msg"></label>
                </div>
                <br>
                <div style="margin-left: 10%; margin-right: 10%;">
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="program_name">ชื่อโปรแกรมทัวร์ *</span>
                        <input type="text" class="form-control" id="program_name" placeholder="ชื่อโปรแกรมทัวร์"
                        onchange="clear_err_msg('program_name');">
                    </div>
                    <label style="color:crimson; float: left;" name="program_name" class="err_msg"></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="detail">คำอธิบาย *</span>
                        <textarea class="form-control" rows="5" id="detail" style="resize: none;"
                        onchange="clear_err_msg('detail');"></textarea>
                    </div>
                    <label style="color:crimson; float: left;" name="detail" class="err_msg"></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text input_name" name="total_cost">ราคาโปรแกรมทัวร์ *</span>
                        <input type="number" class="form-control" id="total_cost" placeholder="ราคาโปรแกรมทัวร์"
                        onchange="clear_err_msg('total_cost');">
                    </div>
                    <label style="color:crimson; float: left;" name="total_cost" class="err_msg"></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">จำนวน</span>
                        <input type="number" class="form-control" id="day_amount" placeholder="จำนวนวัน"
                        onchange="clear_err_msg('day_amount');">
                        <span class="input-group-text">วัน</span>
                    </div>
                    <label style="color:crimson; float: left;" name="day_amount" 
                    data-err_label="จำนวนวัน" class="err_msg"></label>
                </div>
            </div>
            <div class="col" align="center">
                <div>
                    <p class="fs-3">รายละเอียดโปรแกรมทัวร์</p>
                </div>
                <div>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-info" onclick="add_day_detail();">+เพิ่ม</button>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div style="overflow-y: auto; height: 370px;">
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

                            function get_all_day_details(){
                                clear_err_msg('day_details');
                                let details = {'all': []};
                                $('.day_detail').each((i, obj)=>{
                                    details['all'].push($(obj).val());
                                });
                                return details;
                            }
                        </script>
                    </div>
                </div><br>
                <label style="color:crimson; float: left;" name="day_details" data-err_label="รายละเอียดโปรแกรมทัวร์"
                 class="err_msg"></label>
            </div>
        </div>
        <div align="center">
            <br>
            <button class="btn btn-outline-primary"
            onclick="
            send_form_data('/program/add',{
                'program_name' : $('#program_name').val(),
                'program_img' : $('#program_img').val(),
                'detail' : $('#detail').val(),
                'day_details' : JSON.stringify(get_all_day_details()),
                'total_cost' : $('#total_cost').val(),
                'day_amount' : $('#day_amount').val(),
            },
            ()=>{
                window.location = '/tour/add';
            });
            "
            >บันทึกข้อมูล</button>
        </div>
    </div>
</body>

</html>
