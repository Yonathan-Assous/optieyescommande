<div id="restrict" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 90%; max-width: 400px;">
        <div class="modal-content">
            <form id="restriction_form" action="#" method="POST">

                <input type="hidden" name="restrict" id="restriction_status" />

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Acces restreint</h4>
                </div>

                <div class="modal-body">

                    <p class="m-b-20">L'acces à cette fonctionnalité a été restreint par le gérant de votre magasin, veuillez indiquer votre code d'acèes ci-dessous.</p>

                    <div class="form-group only_lentilles">
                        <label for="restriction_pass">Mot de passe</label>
                        <input type="password" name="restriction_pass" id="restriction_pass" class="form-control" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Acceder</button>
                </div>

            </form>
        </div>
    </div>
</div>


<script>

    var href = '';

    $(document).on('click', '.restrict', function(e) {

        e.preventDefault();

        if(!$(this).hasClass('active')) {

            href = $(this).attr("href");

            $.ajax({
                type: "POST",
                url: '<?php echo $pre_url; ?>'+"index/getRestriction",
                success: function(restriction){
                    if(restriction == 1){
                        $('#restrict').modal('show');
                    }
                    else {
                        window.location.href = href;
                    }

                }
            });
        }

    });

    $('#restriction_form').on('submit', function(e) {

        e.preventDefault();

        $.ajax({
            type: "POST",
            data: $('#restriction_form').serialize(),
            url: '<?php echo $pre_url; ?>'+"index/verif_restriction",
            success: function(data){
                if(data == 1){
                    if($('#restriction_status').val() != '') {

                        var restriction_status = $('#restriction_status').val();

                        $.ajax({
                            type: "POST",
                            url: "/index/updateAcces",
                            data : "restriction_compte="+restriction_status,
                            success: function(data){
                                toastr["info"]("La restriction du compte est maintenant "+(restriction_status == 0 ? "désactivée" : "activée"), "Préférences sauvegardées");
                                $('#restrict').modal('hide');
                            },
                            error:function(){
                                toastr["error"]("Une erreur est survenur lors de l'enregistrement", "Erreur");
                            }
                        });

                    }
                    else {
                        window.location.href = href;
                    }
                }
                else {
                    $('#restrict').modal('hide');
                }

            }
        });
    });

</script>