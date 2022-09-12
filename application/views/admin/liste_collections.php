<?php
include_once('header.php');
include_once('menu.php');


if(isset($_POST['password']) && $_POST['password']=='5566')
{
    $_SESSION['login'] = true;
}

if(!isset($_SESSION['login']))
{
    ?>
    <div style="width: 285px;
    height: auto;
    margin: auto;
    margin-top: 150px;
    padding: 20px;
    border: 1px solid #bbb;">
        <form name='input' action='' method='post'>
            <div style="width: 100%;float: left; margin-bottom: 20px"><div style="width:105px;float: left"><label for='password'>Mot de passe: </label></div><div style="width:180px;float:left" ><input type='password' value='' id='password' name='password' /></div>
                <div class='error'><?php
                    if(isset($passError))
                        echo $passError;?></div></div>
            <input type='submit' value='Connexion' name='sub' style="margin-left:84px" />
        </form>
    </div>
    <?php
}
else
{
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
				<div class="col-sm-4">
                    <div class="card-box">
						<form method="post" accept-charset="utf-8" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="namePack">Nom du pack</label>
                                <input type="text" class="form-control" id="namePack" name="namePack">
                            </div>
							<div class="form-group">
                                <label for="imagePack">Image</label>
                                <input type="file" name="imagePack" size="20" />
                            </div>
							<button type="submit" class="btn btn-warning">Ajouter ce pack</button>
						</form>
					</div>
                </div>
            </div>
			
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Liste des packs vendus sur le site</h4>
                </div>
			<div class="row">
				<div class="col-sm-12">
                    <div class="card-box">
						<div class="row">
							<div class="col-sm-12">
								<div class="card-box">

									<h4 class="header-title m-t-0 m-b-30">Liste des pack</h4>

									<table id="datatablePack" class="table table-packs table-striped dt-responsive nowrap">
										<thead>
										<tr>
											<th>Image</th>
											<th>Packs</th>
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

			var tablePack = $('#datatablePack').DataTable({
                ajax: { url: "/admin/liste_pack_ajax", dataSrc: 'aaData' },
                deferRender: true,
                ordering: false,
                language: {
                    "lengthMenu": "Afficher _MENU_ pack par page",
                    "zeroRecords": "Aucun pack trouvé",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun pack à afficher",
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
            
            $(".content").on("change", "#liste_packs", function(){
                tablePack.ajax.url('/admin/liste_pack_ajax/'+$(this).val()).load();
            });
			
			
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

    <?php
}
include_once('footer.php'); ?>