<div id="edit-bl" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="form_modif_bl">

                <input type="hidden" name="id_nouvelle_date_bl" id="id_nouvelle_date_bl" value="" />
                <input type="hidden" name="id_users_nouveau_bl" id="id_users_nouveau_bl" value="" />


                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Modifier l'intitulé</h4>
                </div>

                <div class="modal-body">
                    <p class="bl-comment"></p>

                    <div class="form-group">

                        <div class="radio radio-inline radio-warning">
                            <input type="radio" value="verre" id="type_optique_verre" class="required" name="type_optique" />
                            <label for="type_optique_verre">Verres</label>
                        </div>

                        <div class="radio radio-inline radio-warning">
                            <input type="radio" value="lentille" id="type_optique_lentille" class="required" name="type_optique" />
                            <label for="type_optique_lentille">Lentilles</label>
                        </div>

                    </div>

                    <div class="form-group only_lentilles">
                        <label for="intitule_type_optique">Libellé</label>
                        <input type="text" name="intitule_type_optique" id="intitule_type_optique" class="form-control" />
                    </div>

                    <div class="form-group only_lentilles">
                        <label>Quantités</label>

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="libelle_quantite_lentille_droit">Droite</label>
                                <input type="number" name="libelle_quantite_lentille_droit" id="libelle_quantite_lentille_droit" class="form-control" />
                            </div>

                            <div class="col-sm-6">
                                <label for="libelle_quantite_lentille_gauche">Gauche</label>
                                <input type="number" name="libelle_quantite_lentille_gauche" id="libelle_quantite_lentille_gauche" class="form-control" />
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="date_bl">Nouvelle date</label>
                        <input type="text" name="date_bl" id="date_bl" class="form-control" data-mask="99/99/9999" />
                    </div>



                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Modifier</button>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="compare-commandes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>


<div id="detail-commande" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>


<div id="envoi-commande" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 600px;">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Envoi des commandes</h4>
            </div>

            <div class="modal-body">
                <strong>Voulez-vous vraiment envoyer les commandes de fabrication ?</strong>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                <button id="envoi_commande" class="btn btn-warning waves-effect waves-light">Envoyer les commandes</button>
            </div>

        </div>
    </div>
</div>


<div id="etiquettes-fabrication" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="generation_etiquettes">

                <input type="hidden" id="type_etiquettes" value="" />

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Générer étiquettes de fabrication</h4>
                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="colonne">Colonne</label>
                                <input type="number" name="colonne" id="colonne" class="form-control" value="1" />
                            </div>

                            <div class="col-sm-6">
                                <label for="ligne">Ligne</label>
                                <input type="number" name="ligne" id="ligne" class="form-control" value="1" />
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Générer</button>
                </div>

            </form>
        </div>
    </div>
</div>




<script>

    $(document).on('click', '#envoi_commande_journaliere', function() {

        var type_commande = $(this).attr('rel');

        var titre_commande = '-';
        var texte_commande = '-';

        if(type_commande == 1) {
            titre_commande = 'Liste pour passer commande';
            texte_commande = 'En cliquant sur oui vous allez générer la liste pour passer la commande des verres de fabrication.';
        }
        else {
            titre_commande = 'Liste des verres de stock';
            texte_commande = 'En cliquant sur oui vous allez générer la liste des verres de stock dans le même ordre que vos étiquettes.';
        }

        swal({
            title: titre_commande,
            text: texte_commande,
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {

                    $.ajax({
                        type: "POST",
                        url: "/cron/generation_pdf_commande_journaliere/1/"+type_commande,
                        success: function(data){
                            if(data == "no_order")

                                swal({
                                    title: "Pas de commande",
                                    text: "Il n'y a aucune nouvelle commande à envoyer",
                                    type: "error",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    timer: 3000,
                                });

                            else{

                                swal({
                                    title: "Commandes envoyées",
                                    text: "Les dernières commandes ont bien été envoyées",
                                    type: "success",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    timer: 3000,
                                });

                            }
                        }
                    });

                }
            });
        
        
    });

    $('#form_modif_bl').on('submit', function(e) {

        e.preventDefault();
        $.post('/admin/update_bl', $(this).serialize(), function(data) {

            $('#edit-bl').modal('hide');

           if(data == 'sent') {
               swal({
                   title: "Bon mis à jour",
                   text: "Le bon a été mis à jour et envoyé au client.",
                   type: "success",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
               setTimeout(function() { window.location.reload() }, 2000);
           }
            else {
               swal({
                   title: "Une erreur est survenue",
                   text: "Rafraichissez la page et recommencez..",
                   type: "error",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
           }
        });

    });


    $(document).on('click', '.generer_etiquettes', function() {
        $('#type_etiquettes').val($(this).attr('rel'));
    });

    $('#generation_etiquettes').on('submit', function(e) {

        var type_generation = $('#type_etiquettes').val();
        var path = '';

        if(type_generation == 1) {
            path = 'generer_etiquette_fabrication';
        }
        else if(type_generation == 2) {
            path = 'generer_etiquette';
        }


        e.preventDefault();
        $.post('/admin/'+path, $(this).serialize(), function(data) {

            $('#etiquettes-fabrication').modal('hide');

                if (data == 'sent') {
                    swal({
                        title: "Etiquettes envoyées",
                        text: "Les étiquettes vous ont été transmises par email.",
                        type: "success",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
                else if (data == 'empty') {
                    swal({
                        title: "Aucune étiquette",
                        text: "Aucune étiquette à envoyer",
                        type: "warning",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
                else {
                    swal({
                        title: "Une erreur est survenue",
                        text: "Rafraichissez la page et recommencez..",
                        type: "error",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
        });

    });


    $(document).on('click', '.commande-info', function() {
       $.post('/admin/commande_details', { id: $(this).attr('rel') }, function(data) {
           $('#detail-commande').find('.modal-content').html(data);
       });
    });

    $(document).on('click', '.delete-order', function() {

        var order_id = $(this).attr('rel');

        swal({
            title: "Etes-vous sûr ?",
            text: "Voulez-vous vraiment supprimer la commande N°"+order_id+" ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {

                    $('#detail-commande').modal('hide');

                    $.ajax({
                        type: "POST",
                        url: "/admin/delete_order",
                        data : "id_commande="+order_id,
                        success: function(data){

                            swal({
                                type: 'success',
                                title: "Effectué",
                                text: "La commande a bien été supprimée.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                            $('.content').find('.commande-info[rel='+order_id+']').closest('tr').fadeOut(80);
                            
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            swal({
                                tyoe: 'error',
                                title: "Erreur",
                                text: "Une erreur est survenue lors de la suppression.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                        }
                    });
                }
            });



    });

    $(document).on("click","a[id^=button_nouvel_intitule_]",function(e) {

        var commentaire = $(this).closest('tr').find('.commande-info').attr('original-title');
        $("#edit-bl .bl-comment").html(commentaire);

        $("#id_nouvelle_date_bl").val($(this).attr('id').split('_')[3]);
        $("#id_users_nouveau_bl").val($(this).attr('id').split('_')[4]);

        $("#date_bl").datepicker({
            language: 'fr',
            format: 'dd/mm/yyyy'
        });

        $('input[name=type_optique]').on('change', function() {

            var elem = $(this);

            if(elem.val() == 'lentille') {
                $('.only_lentilles').fadeIn(60);
            }
            else {
                $('.only_lentilles').fadeOut(60);
            }
        });

    });

    $(document).on("click","input[name^=pointage]",function(e) {
        var input = $(this);
        var pointage = input.is(':checked') ? 1 : 0;
        var type = input.is(':checked') ? 'ajout' : 'retirer';
        var id_commande = input.attr('name').split('_')[1];

        $.ajax({
            type: "POST",
            url: "/admin/pointage",
            data : "id_commande="+id_commande+"&pointage="+pointage,
            success: function(data){
                $("#message_"+type).fadeIn().delay(1000).fadeOut();
                if(pointage == 1){
                    $("#pointage_date_"+id_commande).text(data);
                }else
                    $("#pointage_date_"+id_commande).text('');

                $.ajax({
                    type: "POST",
                    url: "/admin/get_pointage_count",
                    success: function(data){
                        $('#check_pointage').find('b').text(data);
                    }
                });

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus+" "+errorThrown);
            }
        });

        if(input.is(':checked')){
            input.prop('checked',true);
        }else{
            input.prop('checked',false);
        }
    });

    $(document).on("click","input[name^=expedier_]",function(e) {

        var el = $(this);

        if($(this).is(':checked')){
            var id_commande = $(this).attr('name').split('_')[1], id_user = $(this).attr('name').split('_')[2];

            $.ajax({
                type: "POST",
                url: "/admin/update_commande",
                data : "id_commande="+id_commande+"&id_etat_commande=6&id_users="+id_user,
                success: function(data){
                    el.closest('tr').fadeOut(100);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(textStatus+" "+errorThrown);
                }
            });
            $(this).prop('checked',true);
        }else
            $(this).prop('checked',false);
    });

    $(document).on("click","table .compare_commande",function(){
        $.ajax({
            type: "POST",
            url: '/admin/compareCommande/'+$(this).attr('rel'),
            success: function(data){
                $("#compare-commandes").find('.modal-content').html(data);
            }
        });

        return false;
    });

</script>