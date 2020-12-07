<div id="add-reduction" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="form_reduc_facture">

                <input type="hidden" name="date_reduc_facture" id="date_reduc_facture" value="" />
                <input type="hidden" name="id_users" id="id_users" value="" />
                <input type="hidden" name="totalFacture_reduct_facture" id="totalFacture_reduct_facture" value="" />

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Ajouter une remise</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group m-b-10">
                        <label for="reduction_facture" class="control-label">Montant</label>
                        <input type="text" class="form-control" id="reduction_facture" name="reduction_facture" placeholder="€">
                    </div>
                    <div class="form-group">
                        <label for="date_remise" class="control-label">Date</label>
                        <input type="text" class="form-control" id="date_remise" name="date_remise" value="<?php echo date('d/m/Y') ?>">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Ajouter remise</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="get-reduction" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Gestion des remises</h4>
            </div>

            <div class="modal-body remises">
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>

<script>

    $(".content").on("click", "a[id^=openReduction_]",function(e) {
        var id_users = $(this).attr("id").split("_")[3];
        var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];
        var annee = date.split("-")[0];
        var mois = date.split("-")[1] < 10 ? date.split("-")[1].substr(1,1) : date.split("-")[1];
        $("#date_remise").datepicker({
            language: 'fr',
            format: 'dd/mm/yyyy',
            startDate: new Date(<?php echo date('Y') ?>, <?php echo date('m') ?>-1 , 1),
            endDate: new Date(<?php echo date('Y') ?>, <?php echo date('m') ?>, 0)
        });
        $("#form_reduc_facture #date_reduc_facture").val(date);
        $("#form_reduc_facture #id_users").val(id_users);
        $("#form_reduc_facture #totalFacture_reduct_facture").val($("#totalFacture_"+date+"_"+id_users).text());

    });


    $(".content").on("click", "a[id^=deleteReduction_]",function(e) {
        var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];

        console.log(date);
        $.ajax({
            type: "POST",
            url: "/admin/getListReduction",
            data : "date_remise="+date+"&id_users="+id_users,
            success: function(data){
                $("#get-reduction").find('.remises').html(data);
            }
        });
    });


    $(document).on("click", "a[id^=deleteRemise_]",function(e) {

        var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];
        var elem = $(this);

        elem.removeClass('btn-warning').addClass('btn-danger delete-remise').html('Etes-vous sûr ?');

    });

    $(document).on('click', '.delete-remise', function() {

        var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];
        var elem = $(this);

        $.ajax({
            type: "POST",
            url: "/admin/delete_reduction",
            data : "date_remise="+date+"&id_users="+id_users+"&totalFacture="+$("#totalFacture_delete_reduct_facture").val()+"&reduction="+$("#deleteRemise_"+date+"_"+id_users).parent('p').find('span').text(),
            success: function(data){

                $("#totalFacture_"+date.split('-')[0]+"-"+date.split('-')[1]+"_"+id_users).text(data);
                $("#deleteRemise_"+date+"_"+id_users).parent('p').remove();

                elem.closest('.row').fadeOut().delay(500).remove();

                $.ajax({
                    type: "POST",
                    url: "/admin/getListReduction",
                    data : "date_remise="+date.substr(0, 7)+"&id_users="+id_users,
                    success: function(data){
                        if(data == 0) {
                            $("#deleteReduction_"+date.split('-')[0]+"-"+date.split('-')[1]+"_"+id_users).hide();
                            $('#get-reduction').modal('hide');
                        }
                    }
                });

            }
        });

        $("#deleteReduction_"+date+"_"+id_users).fadeOut();

    });
    
    

    $('#form_reduc_facture').on('submit', function(e) {
        e.preventDefault();
        var reduction = $("#reduction_facture").val();
        if(reduction != ""){
            reduction = reduction.replace(",",".");
            reduction = $.trim(reduction);
            if($.isNumeric(reduction)){
                var date = $("#form_reduc_facture #date_reduc_facture").val(),
                    id_users = $("#form_reduc_facture #id_users").val();
                $.ajax({
                    type: "POST",
                    url: "/admin/reduction_facture",
                    data : $("#form_reduc_facture").serialize(),
                    success: function(data){
                        $("#totalFacture_"+date+"_"+id_users).text(data);
                        $("#deleteReduction_"+date+"_"+id_users).fadeIn();
                        $('#add-reduction').modal('hide');
                    }
                });
            }
            else {
                console.log('wrong_data');
            }
        }
        else {
            console.log('no_data');
        }
    });
</script>