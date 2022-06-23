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
                    <h4 class="page-title m-b-10 pull-left">Comptes sur le télédétourage</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box">


                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>

                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr id="title_table">
<!--                                <th>id_user</th>-->
<!--                                <th>2022-06</th>-->
<!--                                <th>2022-05</th>-->
                            </tr>
                            </thead>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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
        // var table = $('#datatable').DataTable({
        //     ajax: { url: "/admin/comptes_teledetourage_ajax"},
        //     aLengthMenu: [
        //         [10, 25, 50, 100, 200, -1],
        //         [10, 25, 50, 100, 200, "Tout"]
        //     ],
        //     deferRender: true,
        //     ordering: true,
        //     columnDefs: [{
        //         "targets": "_all",
        //         "createdCell": function (td, cellData, rowData, row, col) {
        //             $(td).find('.tooltipster').tooltip();
        //         }
        //     }],
        //     "createdRow": function ( row, data, index ) {
        //         $('td', row).eq(1).addClass('highlight-ref');
        //         if($('td', row).eq(1).find('.reject_ec').length == 0) {
        //             $('td', row).eq(1).addClass('rejected');
        //         }
        //     },
        //     language: {
        //         "lengthMenu": "Afficher _MENU_ commandes par page",
        //         "zeroRecords": "Aucune commande trouvée",
        //         "info": "Affichage de la page page _PAGE_ sur _PAGES_",
        //         "infoEmpty": "Aucune commande à afficher",
        //         "infoFiltered": "(Filtrat de _MAX_ entrées)",
        //         "search": "Recherche",
        //         "paginate": {
        //             "first":      "Première",
        //             "last":       "Dernière",
        //             "next":       "Suivant",
        //             "previous":   "Précédent"
        //         }
        //     }
        //
        // });
        // let displayStart = $('#datatable').DataTable().page.info().page * 10;
        $.ajax({
            type: "POST",
            url: "/admin/comptes_teledetourage_ajax",
            dataType: "json",
        }).done( function(data) {
            let keys = Object.keys(data[0]);
            let columns = [];
            for (const element of keys) {
                let node = document.createElement("th");
                let textnode = document.createTextNode(element)
                node.style.cssText = 'width:' + 100 / keys.length + '%';
                node.appendChild(textnode);
                document.getElementById("title_table").appendChild(node);
                columns.push({ "data": element});
            }

            console.log(columns);


            $('#datatable').DataTable({
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                "destroy": true,
                "aaData": data,
                "columns": columns,
                "displayStart" : $('#datatable').DataTable().page.info().page * 10,
                "language": {
                    "lengthMenu": "Afficher _MENU_ traitements par page",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoFiltered": "(Filtrat de _MAX_ entrées)",
                    "search": "Recherche",
                    "paginate": {
                        "first":      "Première",
                        "last":       "Dernière",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    }
                },
            });
        });
    });

    // TableManageButtons.init();

</script>

<style>
    tr, th {
        text-align: center;
    }
</style>
<?php include_once('footer.php'); ?>

