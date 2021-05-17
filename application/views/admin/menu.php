<div class="left side-menu">
	<div class="sidebar-inner slimscrollleft">
		<!--- Divider -->
		<div id="sidebar-menu">
			<ul>

				<?php $page = $this->uri->segment(2); 
				if($page == "valid_commande_montures")
				{
					$this->db->where('id', 1);
					$this->db->set('flag', 0, FALSE);
					$this->db->update('flag_monture');
				}
				?>
				
				<li class="text-muted menu-title">Caisse</li>
					<li class="has_sub <?php echo ($page == "index" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/index" class="waves-effect <?php echo ($page == "index" ? 'active' : ''); ?>"><i class="zmdi zmdi-money"></i> <span> Caisse journalière </span> </a>
					</li>
					<li class="has_sub <?php echo ($page == "facture_client" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/facture_client" class="waves-effect <?php echo ($page == "facture_client" ? 'active' : ''); ?>"><i class="zmdi zmdi-receipt"></i> <span> Factures clients </span> </a>
					</li>
                    <li class="has_sub <?php echo ($page == "valid_commentaire" ? 'active' : ''); ?>">
                        <a href="<?php echo $pre_url;?>admin/valid_commentaire" class="waves-effect <?php echo ($page == "valid_commentaire" ? 'active' : ''); ?>"><i class="zmdi zmdi-shopping-basket"></i> <span> Commentaires </span>
                            <span id="num_commentaire" style="float: right;"></span>
                        </a>
                    </li>
				</li>
				<li class="text-muted menu-title">Commandes en cours</li>

				<li class="has_sub <?php echo ($page == "valid_commande" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/valid_commande" class="waves-effect <?php echo ($page == "valid_commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-shopping-basket"></i> <span> Fabrication </span> </a>
				</li>

				<li class="has_sub <?php echo ($page == "valid_commande_stock" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/valid_commande_stock" class="waves-effect <?php echo ($page == "valid_commande_stock" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span> Stock </span> </a>
				</li>
				<?php
				$this->db->from('flag_monture');
				$this->db->select('*');
				$this->db->where('id', 1);
				$this->db->where('flag', 1);
				$query = $this->db->get();
				if ($query->num_rows() > 0)
				{
				?>
				<li class="has_sub <?php echo ($page == "valid_commande_montures" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/valid_commande_montures" class="waves-effect <?php echo ($page == "valid_commande_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span style="color:red"> Montures </span> </a>
                </li>
				<?php
				}
				else
				{
					?>
				<li class="has_sub <?php echo ($page == "valid_commande_montures" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/valid_commande_montures" class="waves-effect <?php echo ($page == "valid_commande_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span> Montures </span> </a>
                </li>
				<?php
				}
				?>

                <li class="has_sub <?php echo ($page == "valid_commande_lentille" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/valid_commande_lentille" class="waves-effect <?php echo ($page == "valid_commande_lentille" ? 'active' : ''); ?>"><i class="zmdi zmdi-store"></i> <span> Lentilles </span> </a>
                </li>
            
                <li class="has_sub <?php echo ($page == "documents" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/documents" class="waves-effect <?php echo ($page == "documents" ? 'active' : ''); ?>"><i class="zmdi zmdi-receipt"></i> <span> Documents </span> </a>
                </li>

				<li class="text-muted menu-title">Commandes Expédiées</li>

                <li class="has_sub <?php echo ($page == "ancienne_commande" ? 'active' : ''); ?>"><a href="<?php echo $pre_url;?>admin/ancienne_commande" class="waves-effect <?php echo ($page == "ancienne_commande" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Verres Expédiés </span> </a>
                </li>

				<li class="has_sub <?php echo ($page == "ancienne_commande_montures" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/ancienne_commande_montures" class="waves-effect <?php echo ($page == "ancienne_commande_montures" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Montures Expédiées </span> </a>
                </li>
                
                <li class="has_sub <?php echo ($page == "ancienne_commande_lentille" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/ancienne_commande_lentille" class="waves-effect <?php echo ($page == "ancienne_commande_lentille" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Lentilles Expédiées </span> </a>
                </li>
		
				<li class="text-muted menu-title">Administration</li>
				
				 <li class="has_sub <?php echo ($page == "edi_omega" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/edi_omega" class="waves-effect <?php echo ($page == "edi_omega" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> RX à envoyer </span> </a>
                </li>
				 <li class="has_sub <?php echo ($page == "edi_omega_expediee" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/edi_omega_expediee" class="waves-effect <?php echo ($page == "edi_omega_expediee" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> RX envoyés</span> </a>
                </li>
				
				<li class="has_sub <?php echo ($page == "users" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/users" class="waves-effect <?php echo ($page == "users" ? 'active' : ''); ?>"><i class="zmdi zmdi-accounts-alt"></i> <span> Fichiers clients </span> </a>
				</li>
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
				
				<li class="has_sub <?php echo ($page == "liste_collections" ? 'active' : ''); ?>">
                    <a href="<?php echo $pre_url;?>admin/liste_collections" class="waves-effect <?php echo ($page == "liste_collections" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Prix des Montures </span> </a>
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

				<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect <?php echo (($page == "ajout_lentilles" || $page == 'liste_lentilles' || $page == 'modifier_lentille') ? 'active' : ''); ?>"><i class="zmdi zmdi-invert-colors"></i> <span> Ajouter lentilles </span> </a>
                    <ul class="list-unstyled">
                        <li class="has_sub <?php echo ($page == "liste_lentilles" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>admin/liste_lentilles" class="waves-effect <?php echo ($page == "liste_lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Liste lentilles </span> </a>
                        </li>
                        <li class="has_sub <?php echo ($page == "ajout_lentilles" ? 'active' : ''); ?>">
                            <a href="<?php echo $pre_url;?>admin/ajout_lentilles" class="waves-effect <?php echo ($page == "ajout_lentilles" ? 'active' : ''); ?>"><i class="zmdi zmdi-check"></i> <span> Ajouter lentille </span> </a>
                        </li>
                    </ul>
                </li>
				
				<li class="has_sub <?php echo ($page == "correction_stock" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/correction_stock" class="waves-effect <?php echo ($page == "correction_stock" ? 'active' : ''); ?>"><i class="zmdi zmdi-grid"></i> <span> Grille de stock verres </span> </a>
				</li>
				<li class="has_sub <?php echo ($page == "variations_facture_clients" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/variations_facture_clients" class="waves-effect <?php echo ($page == "variations_facture_clients" ? 'active' : ''); ?>"><i class="zmdi zmdi-view-week"></i> <span> Variation factures </span> </a>
				</li>
				<li class="has_sub <?php echo ($page == "mails" ? 'active' : ''); ?>">
					<a href="<?php echo $pre_url;?>admin/emails" class="waves-effect <?php echo ($page == "mails" ? 'active' : ''); ?>"><i class="zmdi zmdi-receipt"></i> <span> Envoi d'emails </span> </a>
				</li>
	
	

			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "/commande/numCommentaire",
            success: function(data){
                console.log(data);
                $("#num_commentaire").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $("#num_commentaire").html('<div style="width:150px;text-align:center;margin-left:auto;margin-right:auto;margin-top:15%;margin-bottom:15%:color:red">Server Error : '+txtError+textStatus+" "+errorThrown+'</div>');
            }
        });
    });
</script>
