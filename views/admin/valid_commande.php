<?php
include_once('header.php');
include_once('menu.php');
?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            
            <div class="row">

                <div class="col-sm-12">
                    <h4 class="page-title m-b-10">Commandes de fabrication</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box buttons-box clearfix">

                        <a class="btn btn-inverse pull-left m-r-10 generer_etiquettes" data-toggle="modal" data-target="#etiquettes-fabrication" rel="1"><i class="zmdi zmdi-collection-text m-r-5"></i> Générer étiquettes</a>

                        <a class="btn btn-primary pull-left m-r-10" id="email_retard" rel="1"><i class="zmdi zmdi-email m-r-5"></i> Email retards</a>
                        <a class="btn btn-danger pull-left m-r-10" id="envoi_commande_journaliere" rel="1"><i class="zmdi zmdi-shopping-cart m-r-5"></i> Liste pour commander</a>
                        <a class="btn btn-warning pull-left" id="expedier_commandes"><i class="zmdi zmdi-truck m-r-5"></i> Expedier commandes checkées (<b></b>)</a>

                        <span class="pull-right" id="check_pointage">Commandes pointées : <b></b></span>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="card-box">

                        <script>

                            $(document).ready(function() {

                                $.ajax({
                                    type: "POST",
                                    url: "/admin/get_pointage_count",
                                    success: function(data){
                                        $('#check_pointage').find('b').text(data);
                                    }
                                });

                                $.ajax({
                                    type: "POST",
                                    url: "/admin/get_update_commande",
                                    success: function(data){
                                        $('#expedier_commandes').find('b').text(data);
                                    }
                                });

                                $('#email_retard').on('click', function() {
                                    $.ajax({
                                        type: "POST",
                                        url: "/admin/email_retard",
                                        success: function(data){
                                            if(data == 'ok') {

                                                swal({
                                                    title: "Email envoyé",
                                                    text: "",
                                                    type: "success",
                                                    confirmButtonClass: 'btn-success',
                                                    confirmButtonText: "Ok",
                                                    closeOnConfirm: true
                                                });

                                            }
                                            else {
                                                swal({
                                                    title: "Erreur",
                                                    text: "Erreur lors de l'envoi du mail",
                                                    type: "warning",
                                                    confirmButtonClass: 'btn-warning',
                                                    confirmButtonText: "Ok",
                                                    closeOnConfirm: true
                                                });
                                            }
                                        }
                                    });
                                });

                                $('#expedier_commandes').on('click', function() {

                                    var btn_exp = $(this);

                                    if(btn_exp.hasClass('ready')) {
                                        $.ajax({
                                            type: "POST",
                                            url: "/admin/expedier_commandes",
                                            success: function(data){
                                                btn_exp.removeClass('ready');
                                                if(data == 'sent') {
                                                    window.location.reload();
                                                }
                                            }
                                        });
                                    }
                                    else {
                                        btn_exp.addClass('ready btn-danger');

                                    }

                                });

                                $(".content").on("click",".valid_commande",function() {

                                    var supprimer = 1;

                                    if(!$(this).hasClass('is_checked')) {
                                        var supprimer = 0;
                                        $(this).addClass('is_checked');
                                    }
                                    else {
                                        $(this).removeClass('is_checked');
                                    }


                                    var cotes = {'d':'droit', 'g':'gauche'}
                                    var id_commande = $(this).data('commande');
                                    var verres = $(this).data('verres');

                                    var cote = verres.split('');
                                    var calls = cote.length;
                                    var i = 0;


                                    function ajax_call() {
                                        $.ajax({
                                            type: "POST",
                                            url: "/admin/ajouter_etiquette",
                                            data : "id_commande="+id_commande+"&cote="+cotes[cote[i]]+"&delete="+supprimer,
                                            error: function(jqXHR, textStatus, errorThrown) {
                                                alert(textStatus+" "+errorThrown);
                                            },
                                            success: function (resp) {
                                                ++i;
                                                if (i < calls) {
                                                    ajax_call();
                                                }

                                                $.ajax({
                                                    type: "POST",
                                                    url: "/admin/get_update_commande",
                                                    success: function(data){
                                                        $('#expedier_commandes').find('b').text(data);
                                                    }
                                                });

                                                $.ajax({
                                                    type: "POST",
                                                    url: "/admin/get_pointage_count",
                                                    success: function(data){
                                                        $('#check_pointage').find('b').text(data);
                                                    }
                                                });


                                            }
                                        });

                                    };
                                    ajax_call();

                                });

                            });


                        </script>

                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>

                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Détails</th>
                                <th>Référence</th>
                                <th>Bon de livraison</th>
                                <th>Date</th>
                                <th style="max-width: 220px">Ref Client</th>
                                <th>Etat</th>
                                <th>Tarif HT</th>
                                <th>Pointage</th>
                                <th>Verre</th>
                            </tr>
                            </thead>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- Datatables-->
<script src="/static/assetsplugins/datatables/jquery.dataTables.min.js"></script>
<script src="/static/assetsplugins/datatables/dataTables.bootstrap.js"></script>
<script src="/static/assetsplugins/datatables/dataTables.buttons.min.js"></script>
<script src="/static/assetsplugins/datatables/buttons.bootstrap.min.js"></script>
<script src="/static/assetsplugins/datatables/jszip.min.js"></script>
<script src="/static/assetsplugins/datatables/pdfmake.min.js"></script>
<script src="/static/assetsplugins/datatables/vfs_fonts.js"></script>
<script src="/static/assetsplugins/datatables/buttons.html5.min.js"></script>
<script src="/static/assetsplugins/datatables/buttons.print.min.js"></script>
<script src="/static/assetsplugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="/static/assetsplugins/datatables/dataTables.keyTable.min.js"></script>
<script src="/static/assetsplugins/datatables/dataTables.responsive.min.js"></script>
<script src="/static/assetsplugins/datatables/responsive.bootstrap.min.js"></script>
<script src="/static/assetsplugins/datatables/dataTables.scroller.min.js"></script>

<!-- Modal-Effect -->
<script src="/static/assetsplugins/custombox/dist/custombox.min.js"></script>
<script src="/static/assetsplugins/custombox/dist/legacy.min.js"></script>

<!-- Datatable init js -->
<script src="/static/assetspages/jquery.datatables.init.js"></script>

<script>
    $(document).ready(function() {

        var table = $('#datatable').DataTable({
            ajax: { url: "/admin/valid_commande_ajax", dataSrc: 'aaData' },
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "Tout"]
            ],
            deferRender: true,
            ordering: false,
            columnDefs: [{
                "targets": "_all",
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).find('.tooltipster').tooltip();
                }
            }],
            "createdRow": function ( row, data, index ) {
                if ( data[1].length > 20 ) {
                    $('td', row).eq(1).addClass('highlight-ref');
                }

            },
            language: {
                "lengthMenu": "Afficher _MENU_ commandes par page",
                "zeroRecords": "Aucune commande trouvée",
                "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                "infoEmpty": "Aucune commande à afficher",
                "infoFiltered": "(Filtrat de _MAX_ entrées)",
                "search": "Recherche",
                "paginate": {
                    "first":      "Première",
                    "last":       "Dernière",
                    "next":       "Suivant",
                    "previous":   "Précédent"
                }
            }
        });


    });

    TableManageButtons.init();

</script>

<?php include_once('footer.php'); ?>

