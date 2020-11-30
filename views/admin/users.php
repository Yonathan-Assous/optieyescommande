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
                    <h4 class="page-title m-b-20">Fichiers clients</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2 col-mb-15">
                            <label class="m-b-10" for="recherche_num_magasin"> Magasin </label>
                            <select id="recherche_num_magasin" class="form-control">
                                <option value="Tous">Tous</option>
                                <?php
                                    for($i = 2; $i <= $maxUser; ++$i) {
                                        echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                    }
                                ?>

                            </select>
                        </div>

                        <div class="col-sm-2 col-mb-15">
                            <label class="m-b-10" for="recherche_rib"> Mandat </label>
                            <select id="recherche_rib" class="form-control">
                                <option value="0">Tous</option>
                                <option value="2">Validé</option>
                                <option value="1">Non validé</option>
                            </select>
                        </div>

                        <div class="col-sm-2 col-mb-15">
                            <label class="m-b-10" for="deleted"> Supprimés </label>
                            <select id="deleted" class="form-control">
                                <option value="0">Non</option>
                                <option value="1">Oui</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-mb-15">
                            <label class="m-b-10" for="active_commentaire"> Commentaires </label>
                            <div class="checkbox checkbox-warning m-b-15">
                                <input id="active_commentaire" type="checkbox" <?php if($commentaire_actif->active == 1) echo 'checked'; ?>>
                                <label for="active_commentaire">
                                    Activer les commentaires
                                </label>
                            </div>
                        </div>





                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Liste des clients</h4>

                        <table id="datatable" class="table table-striped dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Magasin</th>
                                <th>#</th>
                                <th>Société</th>
                                <th>Ville</th>
                                <th>Inscription</th>
                                <th>Grille</th>
                                <th>Commander</th>
                                <th>Erreur / Casse</th>
                                <th>Informations</th>
                            </tr>
                            </thead>
                        </table>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->


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

    <!-- Datatable init js -->
    <script src="/static/assets/pages/jquery.datatables.init.js"></script>

    <script>
        $(document).ready(function() {

            var table = $('#datatable').DataTable({
                ajax: "/admin/users_ajax",
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                deferRender: true,
                order: [1, 'desc'],
                language: {
                    "lengthMenu": "Afficher _MENU_ utilisateurs par page",
                    "zeroRecords": "Aucun utilisateur trouvé",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun utilisateur à afficher",
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

            $('#recherche_num_magasin').on('change', function(){
                table.ajax.url('/admin/users_ajax?id_users='+$(this).val()).load();
            });

            $('#recherche_rib').on('change', function(){
                table.ajax.url('/admin/users_ajax?rib='+$(this).val()+'&deleted='+$('#deleted').val()).load();
            });

            $('#deleted').on('change', function(){
                table.ajax.url('/admin/users_ajax?deleted='+$(this).val()+'&rib='+$('#recherche_rib').val()).load();
            });

            $(".content").on('change', '#active_commentaire', function(){
                if($(this).is(':checked')){
                    statut = 1
                }else{
                    statut = 0;
                }

                $.ajax({
                    type: "POST",
                    url: "/admin/statutCommentaire",
                    data:"active="+statut,
                    success: function(){
                        if(statut == 1) {
                            var titre = "Commentaires activés";
                        }
                        else {
                            var titre = "Commentaires désactivés";
                        }

                        swal({
                            title: titre,
                            type: "success",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    }
                });
                return false;
            });

        });

        TableManageButtons.init();

    </script>

    <?php include_once('footer.php'); ?>

