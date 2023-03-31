<div class="modal fade" id="exampleModal" aria-modal="true" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" align="center">
                <div>
                    <img src="{{$tour_img}}"
                        onload="const cropper = new Cropper($(this).get()[0], {
            minContainerWidth: 700,
            minContainerHeight: 600,
            data:{ //define cropbox size
                width: 700,
                height:  600,
            },
            dragMode: 'move',
            viewMode: 1,
            modal: false,
            cropBoxResizable: false,
            ready: function(){
                // all controls here
                
            }
        }); glo_cropper = cropper;">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                    onclick="
            if(typeof glo_cropper !== 'undefined'){
                console.log('wwq');
                let src = glo_cropper.getCroppedCanvas().toDataURL('image/png');
                $('#tour_img_preview').attr('src', src);
                $('#tour_img').val(src)
                $('#exampleModal').modal('hide');
            }
            ">ตกลง</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#exampleModal").modal('show');
    });
</script>
