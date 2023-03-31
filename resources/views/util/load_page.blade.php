<script>
    if (typeof load_data_page !== 'function')

    function load_data_page(url, pages_data = {}, target, parent_obj = $(document), when_done =
        null, is_just_append = false) {

        if (!is_just_append) {
            parent_obj.find("." + target).empty();
        }
        if (typeof global_data !== 'undefined')
            if (global_data) {
                pages_data = {
                    ...global_data,
                    ...pages_data
                };
            }

        if (!pages_data['_token'])
            pages_data['_token'] = "{{ Session::token() }}";
        $.post(url, pages_data)
            .done(function(data) {
                parent_obj.find("." + target).append(
                    data
                );
                if (when_done) {
                    when_done();
                }
            }).fail((err) => {
                console.log(err['responseText']);
            });
    }

    if (typeof load_pop_up !== 'function') {
        function load_pop_up(url, pages_data = {}) {
            load_data_page(url, pages_data, "popup_section");
        }
    }
</script>
