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
                    <h4 class="page-title m-b-20">Prix des lentilles</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="grille_tarifaire"> Type de lentilles </label>
                            <select id="grille_tarifaire" class="form-control">
                                <?php
                                    foreach($generations as $gen) {
                                        echo  '<option value="'.$gen->id.'">'.$gen->name.'</option>'."\n";
                                    }
                                ?>

                            </select>
                        </div>

                    </div>

                </div>

                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Liste des verres</h4>

                        <table id="datatable" class="table table-verres table-striped dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Lentille</th>
                                <th>Modifier</th>
                            </tr>
                            </thead>
                        </table>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>
        var resizefunc = [];
    </script>

    <!-- Datatables-->
    <script src="static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="static/assets/plugins/datatables/jszip.min.js"></script>
    <script src="static/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="static/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="static/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="static/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Modal-Effect -->
    <script src="static/assets/plugins/custombox/dist/custombox.min.js"></script>
    <script src="static/assets/plugins/custombox/dist/legacy.min.js"></script>

    <!-- Datatable init js -->
    <script src="static/assets/pages/jquery.datatables.init.js"></script>

    <script>
        $(document).ready(function() {

            var table = $('#datatable').DataTable({
                ajax: { url: "/admin/liste_lentille_ajax/1", dataSrc: 'aaData' },
                deferRender: true,
                ordering: false,
                language: {
                    "lengthMenu": "Afficher _MENU_ verres par page",
                    "zeroRecords": "Aucun verre trouvé",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun verre à afficher",
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
            
            $(".content").on("change", "#grille_tarifaire", function(){
                table.ajax.url('/admin/liste_lentille_ajax/'+$(this).val()).load();
            });


        });

        TableManageButtons.init();

    </script>

    <?php include_once('footer.php'); ?>

