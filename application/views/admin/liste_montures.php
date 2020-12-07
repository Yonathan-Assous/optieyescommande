<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page lmontures-add">
    <!-- Start content -->
    <div class="content">
        <div class="container">
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Collection: <?php echo $collection_name;?> - Créer une monture</h4>
                </div>

            <div class="row">
				<div class="col-sm-4">
                    <div class="card-box">
						<form method="post" accept-charset="utf-8" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name">Nom de la monture</label>
                                <input type="text" class="form-control" id="modele" name="modele">
								<input type="hidden" id="collection_id" name="collection_id" value="<?php echo $collection_id;?>">
                            </div>
							<div class="form-group">
                                <label for="name">Couleur</label>
                                <input type="text" class="form-control" id="couleur" name="couleur">
                            </div>
							<div class="form-group">
                                <label for="name">Type</label>
                                <select class="form-control" id="type" name="type">
									<option value="Homme">Homme</option>
									<option value="Femme">Femme</option>
									<option value="Mixte">Mixte</option>
									<option value="Enfant">Enfant</option>
								</select>
                            </div>
							<div class="form-group">
                                <label for="name">Taille</label>
                                <input type="text" class="form-control" id="size" name="size">
                            </div>
							<div class="form-group">
                                <label for="name">Quantité en stock</label>
                                <input type="number" class="form-control" id="stock" name="stock">
                            </div>
							<div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" size="20" />
                            </div>
							<div class="form-group">
                                <label for="name">Prix d'achat</label>
                                <input type="number" step=".01" class="form-control" id="prix_achat" name="prix_achat">
                            </div>
							<div class="form-group">
                                <label for="name">Prix de vente</label>
                                <input type="number" step=".01" class="form-control" id="prix_vente" name="prix_vente">
                            </div>
							<button type="submit" class="btn btn-warning">Ajouter cette monture</button>
						</form>
					</div>
                </div><!-- end col -->
            </div>
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Liste des montures vendues sur le site</h4>
                </div>
			<div class="row">
				<div class="col-sm-12">
                    <div class="card-box">
						<div class="row">
							<div class="col-sm-12">
								<div class="card-box">

									<h4 class="header-title m-t-0 m-b-30">Liste des collections</h4>

									<table id="datatable" class="table table-verres table-striped dt-responsive nowrap">
										<thead>
										<tr>
											<th>Image</th>
											<th>Modèle</th>
											<th>Couleur</th>
											<th>Type</th>
											<th>Taille</th>
											<th>En stock</th>
											<th>Prix d'achat</th>
											<th>Prix de vente</th>
											<th>Supprimer</th>
											<th>Modifier</th>
										</tr>
										</thead>
									</table>
								</div>
							</div><!-- end col -->
						</div>
					</div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

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
                ajax: { url: "/admin/liste_montures_ajax/<?php echo $collection_id;?>", dataSrc: 'aaData' },
                deferRender: true,
                ordering: false,
                language: {
                    "lengthMenu": "Afficher _MENU_ collection par page",
                    "zeroRecords": "Aucune collection trouvée",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun collection à afficher",
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
            
            $(".content").on("change", "#liste_montures", function(){
                table.ajax.url('/admin/liste_montures_ajax/'+$(this).val()).load();
            });


        });

        TableManageButtons.init();

    </script>