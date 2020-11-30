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
						<h4 class="page-title m-b-10">Mes commandes de lentilles</h4>
					</div>
				</div>


				<div class="row">

					<div class="col-sm-12">
						<div class="card-box">

							<h4 class="header-title m-t-0">Options d'affichage</h4>

							<div class="radio radio-warning radio-inline">
								<input type="radio" id="all" value="0" name="option" checked>
								<label for="all"> Toutes les commandes </label>
							</div>

							<div class="radio radio-warning radio-inline">
								<input type="radio" id="pending" value="1" name="option">
								<label for="pending"> Pas encore expédiées </label>
							</div>

						</div>
					</div>

					<div class="col-sm-12">
						<div class="card-box">

							<h4 class="header-title m-t-0 m-b-30">Récapitulatif de vos commandes</h4>

							<table id="datatable" class="table-center table-commandes table table-striped dt-responsive nowrap">
								<thead>
								<tr>
									<th data-priority="1">Référence Optieyes</th>
									<th>Date</th>
									<th>Numéro BL</th>
									<th>Référence Client</th>
									<th>Type de verre</th>
									<th>Etat</th>
									<th>Détail commande</th>
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
				ajax: "/index/mes_commandes_lentilles_ajax",
				deferRender: true,
				ordering: false,
				columnDefs: [{
					"targets": "_all",
					"createdCell": function (td, cellData, rowData, row, col) {
						$(td).find('.tooltipster').tooltip();
					}
				}],
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

			$(".content").on('change','input[name=option]',function(){
				table.ajax.url('/index/mes_commandes_lentilles_ajax?tri='+$(this).val()).load();
			});


		});



		TableManageButtons.init();

	</script>

	<?php include_once('footer.php'); ?>