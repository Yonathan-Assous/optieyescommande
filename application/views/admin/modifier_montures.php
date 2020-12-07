<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page lmontures-add">
    <!-- Start content -->
    <div class="content">
        <div class="container">
			<div class="col-sm-12">
                    <h4 class="page-title m-b-10 pull-left">Modifier une monture</h4>
                </div>
<?php if(isset($msg)) { echo $msg; } ?>
            <div class="row">
				<div class="col-sm-4">
                    <div class="card-box">
						<form method="post" accept-charset="utf-8" enctype="multipart/form-data">
							<div class="form-group">
                                <label for="name">Nom de la monture</label>
                                <input type="text" class="form-control" id="modele" name="modele" value="<?php echo $modele;?>">
                            </div>
							<div class="form-group">
                                <label for="name">Couleur</label>
                                <input type="text" class="form-control" id="couleur" name="couleur" value="<?php echo $couleur;?>">
                            </div>
							<div class="form-group">
                                <label for="name">Type</label>
                                <select class="form-control" id="type" name="type">
									<option value="Homme" <?php if($type=="Homme") echo "selected";?>>Homme</option>
									<option value="Femme" <?php if($type=="Femme") echo "selected";?>>Femme</option>
									<option value="Mixte" <?php if($type=="Mixte") echo "selected";?>>Mixte</option>
									<option value="Enfant" <?php if($type=="Enfant") echo "selected";?>>Enfant</option>
								</select>
                            </div>
							<div class="form-group">
                                <label for="name">Taille</label>
                                <input type="text" class="form-control" id="size" name="size" value="<?php echo $size;?>">
                            </div>
							<div class="form-group">
                                <label for="name">Quantité en stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $stock;?>">
                            </div>
							<div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" size="20" />
                            </div>
							<div class="form-group">
<?php
								if($image != "")
								{
									echo '<img src="/uploads/'.$image.'" height="150">';
								}
								?>

                                <input type="checkbox" value="1" name="remove_image" id="remove_image" /> <label class="control-label" for="remove_image"> Cocher pour supprimer l'image</label>
                            </div>
							<div class="form-group">
                                <label for="name">Prix d'achat</label>
                                <input type="number" step=".01" class="form-control" id="prix_achat" name="prix_achat" value="<?php echo $prix_achat;?>">
                            </div>
							<div class="form-group">
                                <label for="name">Prix de vente</label>
                                <input type="number" step=".01" class="form-control" id="prix_vente" name="prix_vente" value="<?php echo $prix_vente;?>">
                            </div>
							<button type="submit" class="btn btn-warning">Modifier cette monture</button>
						</form>
					</div>
                </div><!-- end col -->
            </div>
			
			<a href="/admin/liste_montures/<?php echo $collection;?>"><- Retourner a la liste des monture</a>

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

    