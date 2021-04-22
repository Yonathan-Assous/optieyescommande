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
                    <h4 class="page-title m-b-10 pull-left">Verres Omega Expédié</h4>
                </div>
                
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes Fabrication</h4>
                        <div class="col-sm-2" style="float: initial; margin-bottom: 22px">
                            <label class="m-b-10" for="date_start"> Depuis </label>
                            <select id="date_start" class="form-control">
                                <option value="2 weeks" selected>2 semaines</option>
                                <option value="1 month">1 mois</option>
                                <option value="3 months">3 mois</option>
                                <option value="6 months">6 mois</option>
                                <option value="1 year">1 an</option>
                                <option value="all">Toujours</option>
                            </select>
                        </div>
                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                            	<th>Infos</th>
                                <th>Commande opticien</th>
                                <th>Commande Omega expédiée</th>
                                <th>XML</th>
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
        var dateStart = $("#date_start").val();
        var table = $('#datatable').DataTable({
            ajax: { url: "/admin/edi_omega_expedie_ajax" +
                    "?date_start=" + dateStart,
                    dataSrc: 'aaData' },
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
               /* if ( data[1].length > 20 ) {
                    $('td', row).eq(1).addClass('highlight-ref');
                    if($('td', row).eq(1).find('.reject_ec').length == 0) {
                        $('td', row).eq(1).addClass('rejected');
                    }
                }*/

            },
            language: {
                "lengthMenu": "Afficher _MENU_ commandes par page",
                "zeroRecords": "Aucune commande trouvée",
                "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                "infoEmpty": "Aucune commande à afficher",
                //"infoFiltered": "(Filtrat de _MAX_ entrées)",
                "search": "Recherche",
                "paginate": {
                    "first":      "Première",
                    "last":       "Dernière",
                    "next":       "Suivant",
                    "previous":   "Précédent"
                }
            }
        });

        $(document).on("change", "#date_start", function(){
                search();
            });

        function search() {
            var dateStart = $("#date_start").val();
            table.ajax.url('/admin/edi_omega_expedie_ajax?' +
                'date_start=' + dateStart
            ).load();
        }
    });
    TableManageButtons.init();
</script>

<?php include_once('footer.php'); ?>

