<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo (($page == "Passer commande" || $page == "commander_lentilles") ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Passer commande </span> </a>
                    <ul class="list-unstyled">
                        <li class="has_sub <?php echo ($page == "Passer commande" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>index/passer_commande" class="waves-effect <?php echo ($page == "Passer commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment-o"></i> <span> Verres </span> </a>
                        </li>
                        <li class="has_sub <?php echo ($page == "commander_lentilles" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>index/commander_lentilles" class="waves-effect <?php echo ($page == "commander_lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment-o"></i> <span> Lentilles </span> </a>
                        </li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo (($page == "Mes commandes" || $page == "Mes commandes de lentilles") ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Mes commandes </span> </a>
                    <ul class="list-unstyled">
                        <li class="has_sub <?php echo ($page == "Mes commandes" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>index/commande" class="waves-effect <?php echo ($page == "Mes commandes" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment"></i> <span> Verres </span> </a>
                        </li>
                        <li class="has_sub <?php echo ($page == "Mes commandes de lentilles" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>index/commandes_lentilles" class="waves-effect <?php echo ($page == "Mes commandes de lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment"></i> <span> Lentilles </span> </a>
                        </li>
                    </ul>
                </li>

                <li class="has_sub <?php echo ($page == "Mes bons de livraisons" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/bons_livraison" class="waves-effect <?php echo ($page == "Mes bons de livraisons" ? 'active' : ''); ?>"><i class="zmdi zmdi-assignment-check"></i> <span> Mes bons de livraison </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "Mes factures" ? 'active' : ''); ?> ">
                    <a href="<?php echo $pre_url;?>index/mes_factures" class="restriction waves-effect <?php echo ($page == "Mes factures" ? 'active' : ''); ?> restrict"><i class="zmdi zmdi-receipt"></i> <span> Mes factures </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "Erreur ophtalmologiste / Casse atelier" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/erreur_casse" class="waves-effect <?php echo ($page == "Erreur ophtalmologiste / Casse atelier" ? 'active' : ''); ?> restrict"><i class="zmdi zmdi-assignment-alert"></i> <span> Erreur / Casse atelier </span> </a>
                </li>

                <li class="has_sub">
                    <a href="/catalogue" class="waves-effect"><i class="zmdi zmdi-file-text"></i> <span> Catalogue Verres </span> </a>
                </li>

                <li class="has_sub">
                    <a href="#catalogueElectronique" class="waves-effect" id="catalogue"><i class="zmdi zmdi-file-text"></i> <span> Catalogue Electronique </span> </a>
                </li>

                <li class="m-t-10 has_sub <?php echo ($page == "Certification éléctronique" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>index/certification" class="waves-effect <?php echo ($page == "Certification éléctronique" ? 'active' : ''); ?>"><img src="/static/img/seal_gmo.png" /> <span> Certification éléctronique </span> </a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="contact-info">
        <div class="contactShow">
            <i class="fa fa-info-circle"></i>
            <div>
            <span>Vous êtes le magasin</span>
            <b><?php echo $user_info->id_users; ?></b>
            </div>
        </div>
        <div class="info">
            <div id="info_assistance_tel">
                <span>Assitance Téléphonique</span>
                <b><a href="tel:0983653585">01 82 88 60 87</a></b>
            </div>
            <div id="email">
                <span>Contact par email</span>
                <b style="font-size: 14px"><a href="mailto:optieyescommande@gmail.com">optieyescommande@gmail.com</a></b>
            </div>
            <div id="info_commercial">
                <span>Votre commercial</span>
                <b>M. ZIBI Samuel</b>
                <b><a href="tel:0666831536">07 56 79 59 06</a></b>
            </div>
        </div>
    </div>
</div>

<script>

    $('.contact-info').mouseenter(function() {
        $( ".info", this ).slideDown();
    })
    .mouseleave(function() {
        $( ".info", this ).slideUp();
    });

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
