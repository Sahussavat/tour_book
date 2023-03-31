<script>

    function show_err_message(msgs, parent_obj = $(document)){
        Object.keys(msgs).forEach(function(target){
            var selector_target = parent_obj.find(".err_msg[name='"+target+"']");
            var label_target = parent_obj.find(".input_name[name='"+target+"']");
            if(selector_target.length){
                var label_txt = label_target.length ? label_target.html(): selector_target.data("err_label");
                selector_target.html(label_txt+": "+msgs[target][0]);
            }
        });
    }
    
    function clear_err_msg(target, parent_obj = $(document)){
        var selector_target = parent_obj.find(".err_msg[name='"+target+"']");
        if(selector_target)
        selector_target.html("");
    }
    
    function set_default_if_null(default_data, parent_obj = $(document)){
        Object.keys(default_data).forEach(function(target){
            var target_obj = parent_obj.find("#"+target);
            if(target_obj.length)
            if(!target_obj.val())
            target_obj.val(default_data[target]);
        });
    }
    
    function get_data_to_json(target_arr){
        var json_data = {};
        target_arr.forEach((data)=>{
            if(data instanceof Array){
                json_data[data[0]] = data[1];
            } else {
                json_data[data] = $("#"+data).val();
            }
        });
        return json_data;
    }
    
    function send_form_data(url, data = {}, when_done_do = (res)=>{}, parent_obj = $(document)){
        if(typeof global_data !== 'undefined'){
            data = {...global_data, ...data};
        }
    
        if(!data['_token'])
        data['_token'] = '{{Session::token()}}';
        
        $.post( url, data)
        .done(function( res ) {
            if(res['err']){
                show_err_message(res['err'], parent_obj);
            } else {
                if(res['default']){
                    set_default_if_null(res['default'], parent_obj);
                }
                if(typeof global_when_done !== 'undefined'){
                    global_when_done(res, parent_obj);
                }
                if(when_done_do){
                    when_done_do(res);
                }
            }
        }).fail((err)=>{
            console.log(err['responseText']);
        });
    }
    </script>