<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub <?php echo ($page == "Passer commande" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/passer_commande" class="waves-effect <?php echo ($page == "Passer commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment-o"></i> <span> Passer commande </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "Mes commandes" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/commande" class="waves-effect <?php echo ($page == "Mes commandes" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment"></i> <span> Mes commandes </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "Mes bons de livraisons" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/bons_livraison" class="waves-effect <?php echo ($page == "Mes bons de livraisons" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment-check"></i> <span> Mes bon de livraison </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "Mes factures" ? 'active' : ''); ?> ">
                    <a href="<?php echo $pre_url;?>index/mes_factures" class="restriction waves-effect <?php echo ($page == "Mes factures" ? 'active' : ''); ?> restrict"><i class="zmdi zmdi-receipt"></i> <span> Mes factures </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "Erreur ophtalmologiste / Casse atelier" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/erreur_casse" class="waves-effect <?php echo ($page == "Erreur ophtalmologiste / Casse atelier" ? 'active' : ''); ?> restrict"><i class="zmdi zmdi-assignment-alert"></i> <span> Erreur / Casse atelier </span> </a>
                </li>

                <li class="has_sub">
                    <a href="#catalogueElectronique" class="waves-effect" id="catalogue"><i class="zmdi zmdi-file-text"></i> <span> Catalogue Electronique </span> </a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="contact-info">
        <div>
            <span>Vous êtes le magasin</span>
            <b><?php echo $user_info->id_users; ?></b>
        </div>
        <div id="info_assistance_tel">
            <span>Assitance Téléphonique</span>
            <b><a href="tel:0983653585">09 83 65 35 85</a></b>
        </div>
        <div id="email">
            <span>Contact par email</span>
            <b style="font-size: 14px"><a href="mailto:optieyescommande@gmail.com">optieyescommande@gmail.com</a></b>
        </div>
        <div id="info_commercial">
            <span>Votre commercial</span>
            <b>M. ZIBI Samuel</b>
            <b><a href="tel:0666831536">06 66 83 15 36</a></b>
        </div>
    </div>
</div>

<script>
    $('#catalogue').on('click', function() {
        swal({
                title: "Catalogue Electronique",
                text: "Le fichier que vous êtes sur le point de télécharger doit être intégré à votre logiciel d'opticien. Si vous ne savez pas comment procéder, merci de bien vouloir contacter le service technique de votre logiciel. Ils pourront vous guider ou le faire à votre place.",
                showCancelButton: true,
                confirmButtonColor: "#F8BC05",
                confirmButtonText: "Télécharger",
                cancelButtonText: "Annuler",
                closeOnConfirm: true
            },
            function(){
                window.location.href ='<?php echo $pre_url ?>get_catalogue.php';
            });
    });
</script>



<?php /*
<!-- The sidebar -->
<aside>
    <div class="top">


        <!-- Navigation -->
        <nav><ul class="collapsible accordion">




                <li <?php echo ($page == "Mes verres personnalisés" ? 'class="current"' : ''); ?> >
                    <!--a href="<?php //echo $pre_url;?>index/verre_personnalise">
                        <img src="<?php //echo $pre_url;?>static/img/icons/packs/fugue/16x16/document-horizontal.png" alt="" height="16" width="16">Appellation verres
                    </a-->
                </li>
				<?php 
					if(isset($user_info->grille_telechargeable) && $user_info->grille_telechargeable == 1){
						if($user_info->valid_document_rib == 1){
						echo '<li>
								<a href="'.$pre_url.'index/download/download/plaquette_optimize'.$user_info->id_grille_tarifaire.'.pdf">
									<img src="'.$pre_url.'static/img/icons/packs/fugue/16x16/book-open-text-image.png" alt="" height="16" width="16">Grille de fabrication
								</a>
							 </li>';
					
							echo '<li>
									<a href="'.$pre_url.'index/download/download/grille_stock_optimize'.$user_info->id_grille_tarifaire.($user_info->id_grille_tarifaire == 1 ? '.jpg' : '.pdf' ).'">
										<img src="'.$pre_url.'static/img/icons/packs/fugue/16x16/book-open-text-image.png" alt="" height="16" width="16">Grille de stock
									</a>
								 </li>';
						} 
					}
				?>
				<!--li>
                    <a href="<?php echo $pre_url;?>index/download/download/optimize.txt" id="catalogue_electronique">
                        <img src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/book-open-text-image.png" alt="" height="16" width="16">Catalogue électronique
                    </a>
                </li-->
            </ul></nav><!-- End of nav -->

    </div><!-- End of .top -->

</aside><!-- End of sidebar -->