<div id="user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 600px">
        <div class="modal-content">

        </div>
    </div>
</div>

<script>

    $('.content').on('click', '.get-userinfo', function() {

        $.post('getInfoUser/'+$(this).data('user'), function(data) {
           $('#user-modal').find('.modal-content').html(data);
        });


        $('#user-modal').on('submit', '#updateUser', function(e) {

            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "/admin/updateUser",
                data : formData,
                success: function(data){

                    swal({
                        title: "Client mis à jour",
                        text: "La fiche du client a bien été mise à jour.",
                        type: "success",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });

                    $('#user-modal').modal('hide');

                },
                error:function(){
                    /*icon.attr('src', '/static/img/icons/packs/fugue/24x24/cross.png');
                     setTimeout(function() {
                     icon.attr('src', '/static/img/icons/packs/fugue/24x24/disk-black.png');
                     }, 2000);*/
                }
            });

            return false;

        });

    });

</script>