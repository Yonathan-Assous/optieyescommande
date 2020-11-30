<div class="left side-menu">
	<div class="sidebar-inner slimscrollleft">
		<!--- Divider -->
		<div id="sidebar-menu">
			<ul>

				<?php $page = $this->uri->segment(2); ?>

				<li class="text-muted menu-title">Administration</li>

				<li class="has_sub <?php echo ($page == "users" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/users" class="waves-effect <?php echo ($page == "users" ? 'active' : ''); ?>"><i class="zmdi zmdi-accounts-alt"></i> <span> Fichiers clients </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "mails" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/emails" class="waves-effect <?php echo ($page == "mails" ? 'active' : ''); ?>"><i class="zmdi zmdi-receipt"></i> <span> Envoi d'emails </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "index" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/index" class="waves-effect <?php echo ($page == "index" ? 'active' : ''); ?>"><i class="zmdi zmdi-money"></i> <span> Caisse journalière </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "facture_client" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/facture_client" class="waves-effect <?php echo ($page == "facture_client" ? 'active' : ''); ?>"><i class="zmdi zmdi-receipt"></i> <span> Factures clients </span> </a>
				</li>

				<li class="text-muted menu-title">Commandes</li>

				<li class="has_sub <?php echo ($page == "valid_commande" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/valid_commande" class="waves-effect <?php echo ($page == "valid_commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-shopping-basket"></i> <span> Fabrication </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "valid_commande_stock" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/valid_commande_stock" class="waves-effect <?php echo ($page == "valid_commande_stock" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span> Stock </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "ancienne_commande" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/ancienne_commande" class="waves-effect <?php echo ($page == "ancienne_commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Expédiées </span> </a>
				</li>


				<li class="text-muted menu-title">Gestion stock</li>

				<li class="has_sub">
					<a href="javascript:void(0);" class="waves-effect <?php echo ($page == "prix_verre" ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Prix des verres </span> </a>
					<ul class="list-unstyled">
					<?php
					foreach( $this->data['generation_verre'] as $value){
						echo  '<li '.($page == "prix_verre" && $this->uri->segment(3) == $value->id_generation_verre ? 'class="active"' : '').'>
								<a href="'.$pre_url.'admin/prix_verre/'.$value->id_generation_verre.'">'.$value->generation_verre.'</a>
							   </li>';
					}
					?>
					</ul>
				</li>

				<li class="has_sub <?php echo ($page == "correction_stock" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/correction_stock" class="waves-effect <?php echo ($page == "correction_stock" ? 'active' : ''); ?>"><i class="zmdi zmdi-grid"></i> <span> Grille de stock </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "maj_tarif_fabrication" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/maj_tarif_fabrication" class="waves-effect <?php echo ($page == "maj_tarif_fabrication" ? 'active' : ''); ?>"><i class="zmdi zmdi-money-box"></i> <span> Grille tarifaires </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "variations_facture_clients" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/variations_facture_clients" class="waves-effect <?php echo ($page == "variations_facture_clients" ? 'active' : ''); ?>"><i class="zmdi zmdi-view-week"></i> <span> Variation factures </span> </a>
				</li>



			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
