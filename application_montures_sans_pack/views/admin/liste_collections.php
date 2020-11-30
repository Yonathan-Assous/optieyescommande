<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page lmontures-add">
    <!-- Start content -->
    <div class="content">
        <div class="container">
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Créer une collection</h4>
                </div>

            <div class="row">
				<div class="col-sm-4">
                    <div class="card-box">
						<form method="post" accept-charset="utf-8" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name">Nom de la collection</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
							<div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" size="20" />
                            </div>
							<button type="submit" class="btn btn-warning">Ajouter cette collection</button>
						</form>
					</div>
                </div><!-- end col -->
            </div>
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Liste des collections vendues sur le site</h4>
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
											<th>Collection</th>
											<th>Supprimer</th>
											<th>Montures</th>
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
                ajax: { url: "/admin/liste_collection_ajax", dataSrc: 'aaData' },
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
            
            $(".content").on("change", "#liste_collections", function(){
                table.ajax.url('/admin/liste_collection_ajax/'+$(this).val()).load();
            });


        });

        TableManageButtons.init();

    </script>