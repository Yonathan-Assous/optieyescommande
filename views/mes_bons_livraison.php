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
					<h4 class="page-title m-b-10">Bons de livraison</h4>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">

						<h4 class="header-title m-t-0 m-b-30">Vos bons de livraison</h4>

						<table id="datatable" class="table-center table-commandes table table-striped dt-responsive nowrap">
							<thead>
							<tr>
								<th>Référence optieyes</th>
								<th>Date de commande</th>
								<th>Référence Client</th>
								<th>Numéro BL</th>
								<th>Type de verre</th>
								<th>PDF bon de livraison</th>
							</tr>
							</thead>
						</table>


					</div>
				</div><!-- end col -->
			</div>


		</div> <!-- container -->
	</div> <!-- content -->


	<!-- Datatables-->
	<script src="/current/static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
	<script src="/current/static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/jszip.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/pdfmake.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/vfs_fonts.js"></script>
	<script src="/current/static/assets/plugins/datatables/buttons.html5.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/buttons.print.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
	<script src="/current/static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

	<!-- Datatable init js -->
	<script src="/current/static/assets/pages/jquery.datatables.init.js"></script>

	<script>
		$(document).ready(function() {

			var table = $('#datatable').DataTable({
				ajax: "/index/bons_livraison_ajax",
				deferRender: true,
				ordering: false,
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

