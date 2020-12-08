<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page lmontures-add">
    <!-- Start content -->
    <div class="content">
        <div class="container">
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Pack: <?php echo $pack_name;?> - Selectionnez des montures</h4>
                </div>
<?php // var_dump($checkboxes);?>
            <div class="row">
				<div class="col-sm-6">
                    <div class="card-box">
						<form method="post" id="packMontures" accept-charset="utf-8" enctype="multipart/form-data">
							<div class="form-group">
								<table class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline" width="100%" cellpadding="10" cellspacing="0" id="montures">
									<thead>
										<tr>
											<th></th>
											<th align="center">Image</th>
											<th  align="center">Modeles</th>
										</tr>
									</thead>
									<tbody>
									
								<?php 
								//var_dump($listeD);
								foreach($listeD as $value) { 
									$packs_monture = trim($value[6],',');
									$tab_packs = explode(",",$packs_monture);
								?>
									<tr><td><div class="checkbox checkbox-success checkbox-inline <?php 
									if (in_array($id_pack, $tab_packs)) {
										echo "is_checked";
									}?>"><input type="checkbox" id="monture_<?php echo $value[0];?>" name="monturesPack[]" value="<?php echo $value[0];?>" <?php 
									if (in_array($id_pack, $tab_packs)) {
										echo "checked";
									}?>>
										<label for="monture_<?php echo $value[0];?>"> </label>
										</div>
									</td><td><img src="/uploads/<?php echo $value[4];?>" width="100" ></td><td><?php echo "Collection: ".$value[5]."<br>Modele: ".$value[1]."<br>Type: ".$value[2]."<br>Couleur: ".$value[3];?></td></tr>
								 <?php }?> 
								   
								</table>
                            </div>
							<button type="submit" class="btn btn-warning">Sauvegarder</button>
						</form>
						<br><br><a href="/admin/liste_collections"><< Retour a la page precedente</a>
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
			$("#packMontures").submit(function(){
				var checked = $("#packMontures input:checked").length > 0;
				if (!checked){
					alert("Merci d'ajouter au moin une monture");
					return false;
				}
			});
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
            
            $(".content").on("change", "#liste_montures_pack", function(){
                table.ajax.url('/admin/liste_montures_pack_ajax/'+$(this).val()).load();
            });


        });

        TableManageButtons.init();

    </script>