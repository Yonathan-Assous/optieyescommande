<div id="user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 1170px">
        <div class="modal-content">

        </div>
    </div>
</div>

<div id="user-unlock" class="modal fade" tabindex="-1" role="dialog"aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px">
        <div class="modal-content">
            <h3 class="m-b-0">Identification</h3>
            <p>Pour acceder à ce contenu, vous devez vous identifier.</p>

            <form id="userDasboardUnlock" class="m-t-20">
                <input type="password" class="form-control" name="user_unlock_password" />
                <input type="hidden" class="form-control" name="user_unlock_id" />
                <div class="text-right m-t-10">
                    <a class="btn btn-default waves-effect" data-dismiss="modal">Annuler</a>
                    <button type="submit" class="btn btn-warning">Acceder au dossier</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="user-dashboard" class="modal fade" tabindex="-1" role="dialog"aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 900px">
        <div class="modal-content" style="max-height: calc(100vh - 100px); overflow-y: auto;">

        </div>
    </div>
</div>

<script>

    $('.content').on('click', '.get-userdashboard', function() {
        $('#user-unlock').find('input[name="user_unlock_id"]').val($(this).data('user'));
    });

    $('#userDasboardUnlock').on('submit', function(e) {
        e.preventDefault();

        $.post('/admin/validateComAuth/', $(this).serializeArray(), function(res) {
            try {
                var data = JSON.parse(res);
                if(data.status == 0) {
                    alert('Mot de passe invalide');
                }
            } catch(e) {

                console.log(res);

                $('#user-unlock').modal('hide');
                $('#user-dashboard').modal('show');
                $('#user-dashboard').find('.modal-content').html(res);


                $('#user-dashboard').on('submit', '#updateUserDashboard', function(e) {

                    e.preventDefault();

                    var formData = $(this).serialize();

                    $.ajax({
                        type: "POST",
                        url: "/admin/updateUserDashboard",
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

                            $('#user-dashboard').modal('hide');

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

            }


        });
    });

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
					
					console.log(data);

                    swal({
                        title: "Client mis à jour",
                        text: "La fiche du client a bien été mise à jour.",
                        type: "success",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });

                    $('#user-modal').modal('hide');
					location.reload();

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