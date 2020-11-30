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
                    <div class="card-box buttons-box clearfix">
						<a class="btn btn-info pull-left m-r-10" id="envoi_commande_journaliere" rel="4"><i class="zmdi zmdi-truck m-r-5"></i> Envoyer la liste et checker les commandes</a>
                        <a class="btn btn-danger pull-left m-r-10 hide" id="generer_bl" rel="2"><i class="zmdi zmdi-shopping-cart m-r-5"></i> Générer BL</a>
                        <a class="btn btn-warning pull-left" id="expedier_montures"><i class="zmdi zmdi-truck m-r-5"></i>  Expedier commandes checkées (<b></b>)</a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card-box">

                        <script>

                            $(document).ready(function() {


                                $.ajax({
                                    type: "POST",
                                    url: "/admin/montures_check_count",
                                    success: function(data){
                                        $('#expedier_montures').find('b').text(data);
                                    }
                                });


                                $('#expedier_montures').on('click', function() {

                                    var btn_exp = $(this);

                                    if(btn_exp.hasClass('ready')) {
                                        $.ajax({
                                            type: "POST",
                                            url: "/admin/expedier_montures",
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

                                $('.content').on('change', '.monturesCheck', function() {

                                    var order = $(this).data('order');
                                    var check = $(this).is(':checked');

                                    $.ajax({
                                        type: "POST",
                                        url: "/admin/montures_check",
                                        data: {
                                            'order' : order,
                                            'check' : check
                                        }
                                    }).done(function(res) {
                                        if(res == 'error') {
                                            alert('Une erreur est survenue');
                                        }
                                        else {

                                            $('#expedier_montures').find('b').text(res);

                                        }
                                    });


                                });

                                $('#generer_bl').on('click', function() {
                                    $.ajax({
                                        type: "POST",
                                        url: "/admin/montures_bl",
                                    }).done(function(res) {
                                        if(res == 'error') {
                                            alert('Une erreur est survenue');
                                        }
                                        else {
                                            swal({
                                                type: "success",
                                                title: "Envoyé",
                                                text: "Les bons de livraison ont été envoyés par email",
                                                timer: 2000,
                                                showConfirmButton: false
                                            });
                                        }
                                    });
                                });
                            });


                        </script>

                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>

                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Détails</th>
                                <th>Référence</th>
                                <th>Date</th>
                                <th>Tableau de bord</th>
                                <th>Bon de livraison</th>
                                <th style="max-width: 140px">Ref Client</th>
                                <th>Montures</th>
                                <th>Tarif HT</th>
                                <th style="max-width: 140px">Check</th>
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

        var table = $('#datatable').DataTable({
            ajax: { url: "/admin/valid_commande_montures_ajax/<?php echo $status ?>", dataSrc: 'aaData' },
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

