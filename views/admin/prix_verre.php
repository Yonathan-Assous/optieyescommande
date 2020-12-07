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
                    <h4 class="page-title m-b-20">Prix des verres</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="grille_tarifaire"> Grille tarifaire </label>
                            <select id="grille_tarifaire" class="form-control">
                                <option value="">Tous</option>
                                <?php
                                for($i = 1; $i <= 6; ++$i) {
                                    echo  '<option value="'.$i.'">Grille '.$i.'</option>'."\n";
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
                                <th>Verre</th>
                                <th>Prix</th>
                                <th>Grille tarifaire</th>
                                <th>Ordre</th>
                                <th>Supprimer</th>
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
                ajax: { url: "/admin/prix_verre_ajax/<?php echo $id_generation; ?>", dataSrc: 'aaData' },
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
                table.ajax.url('/admin/prix_verre_ajax/<?php echo $id_generation; ?>/'+$(this).val()).load();
            });

            var Timer ="";


            $(".content").on("keyup","input[name^=prix_]", function(){
                if($.isNumeric($(this).val())){

                    clearTimeout(Timer);

                    var value = $.trim($(this).val()), id_verre = $(this).attr("id").split("_")[1], id_grille_tarifaire = $(this).attr("id").split("_")[2];

                    $("#message_non_valider").fadeOut();

                    Timer = setTimeout( function( ) {
                        $.ajax({
                            type: "POST",
                            url: "/admin/updatePrixVerre",
                            data : "id_verre="+id_verre+"&id_grille_tarifaire="+id_grille_tarifaire+"&prix_verre="+value,
                            success: function(data){
                                swal({
                                    title: "Tarif mis à jour",
                                    text: "Le prix du verre a été mis à jour.",
                                    type: "success",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    timer: 2000,
                                });
                            },
                            error:function(){
                                swal({
                                    title: "Erreur de saisie",
                                    text: "Une erreur est survenue, veuillez vérifier le montant indiqué.",
                                    type: "error",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    timer: 2000,
                                });
                            }
                        });
                    }, 1200 );
                }
            });

            $(".content").on("click","button[id^=supprimer_]", function(){
                if(confirm('Supprimer ce verre ?')){
                    var id_verre = $(this).attr('id').split('_')[1];
                    $.ajax({
                        type: "POST",
                        url: "/admin/desactive_verre",
                        data : "id_verre="+id_verre,
                        success: function(data){
                            window.location.reload();
                        }
                    });
                }
            });

            $(".content").on("keyup","input[id^=order_]", function(){
                var value = $.trim($(this).val());
                if($.isNumeric(value)){
                    var id_verre = $(this).attr("id").split("_")[1], id_grille_tarifaire = $(this).attr("id").split("_")[2];
                    $.ajax({
                        type: "POST",
                        url: "/admin/ordre_verre",
                        data : "id_verre="+id_verre+"&id_grille_tarifaire="+id_grille_tarifaire+"&order_verre="+value,
                        success: function(data){
                            swal({
                                title: "Ordre mis à jour",
                                text: "La position du verre a été mise à jour.",
                                type: "success",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 2000,
                            });
                        },
                        error:function(){
                            swal({
                                title: "Erreur de mise à jour",
                                text: "Une erreur est survenue, veuillez réessayer plus tard.",
                                type: "error",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 2000,
                            });
                        }
                    });
                }
            });


        });

        TableManageButtons.init();

    </script>

    <?php include_once('footer.php'); ?>

