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
				
				<li class="has_sub <?php echo ($page == "valid_commande_montures" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/valid_commande_montures" class="waves-effect <?php echo ($page == "valid_commande_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span> Montures </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "valid_commande_lentille" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/valid_commande_lentille" class="waves-effect <?php echo ($page == "valid_commande_lentille" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span> Lentilles </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "ancienne_commande" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/ancienne_commande" class="waves-effect <?php echo ($page == "ancienne_commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Verres Expédiés </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "ancienne_commande_lentille" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/ancienne_commande_lentille" class="waves-effect <?php echo ($page == "ancienne_commande_lentille" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Lentilles Expédiées </span> </a>
                </li>
				
				<li class="has_sub <?php echo ($page == "ancienne_commande_montures" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/ancienne_commande_montures" class="waves-effect <?php echo ($page == "ancienne_commande_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Montures Expédiées </span> </a>
                </li>

                <li class="has_sub <?php echo ($page == "documents" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/documents" class="waves-effect <?php echo ($page == "documents" ? 'active' : ''); ?>"><i class="zmdi zmdi-receipt"></i> <span> Documents </span> </a>
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
				<?php
				/*
				<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo (($page == "ajout_montures" || $page == 'liste_montures' || $page == 'modifier_montures') ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Montures produits/prix </span> </a>
                    <ul class="list-unstyled">
                        <li class="has_sub <?php echo ($page == "ajout_montures" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>admin/ajout_montures" class="waves-effect <?php echo ($page == "ajout_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Creer une collection </span> </a>
                        </li>
                        <li class="has_sub <?php echo ($page == "liste_montures" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>admin/liste_montures" class="waves-effect <?php echo ($page == "liste_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Liste des collections </span> </a>
                        </li>
                    </ul>
                </li>
				*/?>
				<li class="has_sub <?php echo ($page == "liste_collections" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/liste_collections" class="waves-effect <?php echo ($page == "liste_collections" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Montures produits/prix </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo ($page == "prix_lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Prix des lentilles </span> </a>
                    <ul class="list-unstyled">
                        <?php
                        foreach( $this->data['generation_lentilles'] as $value){
                            echo  '<li '.($page == "prix_lentilles" && $this->uri->segment(3) == $value->id ? 'class="active"' : '').'>
								<a href="'.$pre_url.'admin/prix_lentilles/'.$value->id.'">'.$value->name.'</a>
							   </li>';
                        }
                        ?>
                    </ul>
                </li>

				<li class="has_sub <?php echo ($page == "correction_stock" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/correction_stock" class="waves-effect <?php echo ($page == "correction_stock" ? 'active' : ''); ?>"><i class="zmdi zmdi-grid"></i> <span> Grille de stock </span> </a>
				</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo (($page == "ajout_lentilles" || $page == 'liste_lentilles' || $page == 'modifier_lentille') ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Stock lentilles </span> </a>
                    <ul class="list-unstyled">
                        <li class="has_sub <?php echo ($page == "liste_lentilles" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>admin/liste_lentilles" class="waves-effect <?php echo ($page == "liste_lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Liste lentilles </span> </a>
                        </li>
                        <li class="has_sub <?php echo ($page == "ajout_lentilles" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>admin/ajout_lentilles" class="waves-effect <?php echo ($page == "ajout_lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Ajouter lentille </span> </a>
                        </li>
                    </ul>
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
