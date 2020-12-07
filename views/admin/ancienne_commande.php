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
                    <h4 class="page-title m-b-20">Commandes expediées</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_num_magasin"> Magasin </label>
                            <select id="recherche_num_magasin" class="form-control">
                                <option value="">Tous</option>
                                <?php
                                for($i = 2; $i <= $maxUser; ++$i) {
                                    echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                }
                                ?>

                            </select>
                        </div>

                    </div>


                </div>


                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>

                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Nom magasin</th>
                                <th></th>
                                <th>Référence optieyes</th>
                                <th>Date de commande</th>
                                <th>Date d'expedition</th>
                                <th>Délais moyen</th>
                                <th>Référence Client</th>
                                <th>Bon de livraison</th>
                                <th>Détails</th>
                                <th>Expédition</th>
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
            ajax: { url: "/admin/ancienne_commande_ajax", dataSrc: 'aaData' },
            deferRender: true,
            ordering: false,
            serverSide: true,
            columnDefs: [{
                "targets": 9,
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).find('.tooltipster').tooltip();
                }
            }],
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

        $(document).on("change", "#recherche_num_magasin", function(){
            var value = $(this).val();

            if(value != '') {
                table.ajax.url('/admin/ancienne_commande_ajax?id_users='+value).load();
            }
            else {
                table.ajax.url('/admin/ancienne_commande_ajax').load();
            }

        });

        $(document).on("click", "button[id^=annule_envoi_]", function(){
            var num_commande = $(this).attr('id').split('_')[2];

            if(confirm('Annuler l\'expédition pour la commande N° '+num_commande+' ?')){
                $.ajax({
                    type: "POST",
                    url: "/admin/annule_envoi",
                    data : "id_etat_commande=1&id_commande="+num_commande,
                    success: function(data){
                        if($("#recherche_num_magasin").val() != '') {
                            table.ajax.url('/admin/ancienne_commande_ajax?id_users='+$("#recherche_num_magasin").val()).load();
                        }
                        else {
                            table.ajax.url('/admin/ancienne_commande_ajax').load();
                        }
                    }
                });
            }
        });


    });

    TableManageButtons.init();

</script>

<?php include_once('footer.php'); ?>

