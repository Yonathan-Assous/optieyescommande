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

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_reference_optieyes"> Référence optieyes</label>
                            <input type="number" id="recherche_reference_optieyes" class="form-control">
                        </div>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_reference_client"> Référence Client</label>
                            <input type="text" id="recherche_reference_client" class="form-control">
                        </div>


<!--                        <div class="col-sm-2">-->
<!--                            <label class="m-b-10" for="date_start"> Depuis </label>-->
<!--                            <select id="date_start" class="form-control">-->
<!--                                <option value="1 month" selected>1 mois</option>-->
<!--                                <option value="3 months">3 mois</option>-->
<!--                                <option value="6 months">6 mois</option>-->
<!--                                <option value="1 year">1 an</option>-->
<!--                                <option value="all">Toujours</option>-->
<!--                            </select>-->
<!--                        </div>-->

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_sphere"> Sphère </label>
                            <input type="text" id="recherche_sphere" class="form-control">
                        </div>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_cylindre"> Cylindre </label>
                            <input type="text" id="recherche_cylindre" class="form-control">
                        </div>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_axe"> Axe </label>
                            <input type="text" id="recherche_axe" class="form-control">
                        </div>

                        <div class="col-sm-12">
                            <label class="m-b-10" for="search">&nbsp;</label>
                            <button id="search" type="button" class="btn btn-warning form-control waves-effect waves-light" style="display: block">Rechercher</button>
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
                                <th>Numero BL</th>
                                <th>Date de commande</th>
                                <th>Date d'expedition</th>
                                <th>Délais moyen</th>
                                <th>Référence Client</th>
								<th>Panier</th>
                                <th>Prix</th>
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

<style type="text/css">
	td.highlight-blue {
    background: rgba(135, 206, 250, 0.2) !important;
}
</style>

<script>
    var resizefunc = [];
</script>

<!-- Datatables-->
<script src="/static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="/static/assets/plugins/datatables/jszip.min.js"></script>
<script src="/static/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="/static/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="/static/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="/static/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

<!-- Modal-Effect -->
<script src="/static/assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="/static/assets/plugins/custombox/dist/legacy.min.js"></script>

<!-- Datatable init js -->
<script src="/static/assets/pages/jquery.datatables.init.js"></script>

<script>
    $(document).ready(function() {
        //var dateStart = $("#date_start").val();
        var x = 500;
            var table = $('#datatable').DataTable({
            ajax: { url: "/admin/ancienne_commande_ajax"
                    //+ "?date_start="+dateStart
                , dataSrc: 'aaData' },
            deferRender: true,
            ordering: false,
            serverSide: true,
            bFilter: false,
            columnDefs: [{
                "targets": 9,
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).find('.tooltipster').tooltip();
                }
            }],
            "createdRow": function ( row, data, index ) {
                if ( data[2].length > 20 ) {
                    $('td', row).eq(2).addClass('highlight-ref');
                    if($('td', row).eq(2).find('.reject_ec').length != 0) {
                        $('td', row).eq(2).addClass('rejected');
                    }
                }
				if ( data[8]=='Panier A' ) {
                    $('td', row).addClass('highlight-blue');
                }

            },
            language: {
                "lengthMenu": "Afficher _MENU_ commandes par page",
                "zeroRecords": "Aucune commande trouvée",
                "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                "infoEmpty": "Aucune commande à afficher",
               // "infoFiltered": "(Filtrat de _MAX_ entrées)",
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
            search();
        });

        // $(document).on("change", "#date_start", function(){
        //     search();
        // });
        //
        // $("input").on('input', function() {
        //     search();
        // });
        // $(document).on("change", "#recherche_reference_optieyes", function(){
        //     search();
        // });

        // $(document).on("change", "#recherche_reference_optieyes", function(){
        //     console.log('a');
        //     search();
        //
        // });

        $('#search').click(function () {
            search();
        });

        function search() {
            var magasin = $("#recherche_num_magasin").val();
            var reference_optieyes = $("#recherche_reference_optieyes").val();
            var reference_client = $("#recherche_reference_client").val();
            // var dateStart = $("#date_start").val();
            var recherche_sphere = $("#recherche_sphere").val();
            var recherche_cylindre = $("#recherche_cylindre").val();
            var recherche_axe = $("#recherche_axe").val();

            if(magasin != '' || reference_optieyes != '' || reference_client != '') {
                table.ajax.url('/admin/ancienne_commande_ajax?id_users='+magasin +
                    '&reference_optieyes=' + reference_optieyes +
                    '&reference_client=' + reference_client +
                    // '&date_start=' + dateStart +
                    '&recherche_sphere=' + recherche_sphere +
                    '&recherche_cylindre=' + recherche_cylindre +
                    '&recherche_axe=' + recherche_axe
                ).load();
            }
            else {
                table.ajax.url('/admin/ancienne_commande_ajax?' +
                // 'date_start=' + dateStart +
                '&recherche_sphere=' + recherche_sphere +
                '&recherche_cylindre=' + recherche_cylindre +
                '&recherche_axe=' + recherche_axe
                ).load();
            }
        }

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

