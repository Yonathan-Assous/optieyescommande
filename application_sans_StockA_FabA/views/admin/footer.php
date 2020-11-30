<footer class="footer">
    2019 © Optieyes
</footer>

</div>


<?php include('layout/reductions.php'); ?>
<?php include('layout/commandes.php'); ?>
<?php include('layout/client.php'); ?>

<?php if(1 == 2 ) { ?>
<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <a href="javascript:void(0);" class="right-bar-toggle">
        <i class="zmdi zmdi-close-circle-o"></i>
    </a>
    <h4 class="">Notifications</h4>
    <div class="notification-list nicescroll">
        <ul class="list-group list-no-border user-list">
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="icon">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">New Signup</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">5 hours ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="icon">
                        <i class="zmdi zmdi-comment"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">New Message received</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item active">
                <a href="#" class="user-list-item">
                    <div class="icon">
                        <i class="zmdi zmdi-settings"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">Settings</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                    </div>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- /Right-bar -->
<?php } ?>


</div>


<script>
    var resizefunc = [];
</script>


<!-- jQuery  -->
<script src="<?php echo $pre_url;?>static/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/waves.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/tooltipster.core.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/tooltipster.bundle.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/toastr/toastr.min.js"></script>

<script src="<?php echo $pre_url;?>static/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.core.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.app.js"></script>

<script src="<?php echo $pre_url;?>static/assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/switchery/switchery.min.js"></script>

<?php

if(isset($modules)) {

    if(array_key_exists('datepicker', $modules)) {
        echo '<script src="/static/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>';
        echo '<script src="/static/assets/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"></script>';
    }

    if(array_key_exists('sweetalert', $modules)) {
        echo '<script src="/static/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>';
    }

    if(array_key_exists('touchspin', $modules)) {
        echo '<script src="/static/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>';
    }

    if(array_key_exists('multiselect', $modules)) {
        echo '<script src="/static/assets/plugins/multiselect/js/jquery.multi-select.js"></script>';
        echo '<script src="/static/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>';
    }



}
?>

</body>
</html>


<?php /*
    <!-- Envoi mail commande -->
	<div id="error_send_no_order" style="display: none;" class="dialog">
        <p> <strong>Aucune nouvelle commande à envoyer. </strong></p>
    </div>
    <div id="error_send_commande_journa" style="display: none;" title="Erreur">
        <p> <strong>Une erreur est survenue lors de l'envoi du mail des commandes</strong></p>
    </div>
    <div id="success_send_commande_journa" style="display: none;" class="dialog">
        <p> <strong>Les commandes ont été envoyés. </strong></p>
    </div>
    <div id="confirm_send_commande_journa" style="display: none;" title="Envoi des dernières commandes">
		<input type="hidden" id="type_commande_to_send" name="type_commande_to_send" value="" />
        <p><strong>Les commandes seront envoyés sur <?php echo isset($user_info->email) ? $user_info->email : ''; ?>.<br /><br />Envoyer les dernières commandes effectuées ? </strong></p>
		<div id="loading_send_commande_journa" style="display:none;">
			<img src="/static/img/elements/loading/spinner.gif" style="width: 32px;height: 32px;" alt="spinner" />
			Envoi en cours...
		</div>
    </div>
    <!-- Fin envoi mail commande -->

    <!-- Changement TVA -->
    <div id="error_tva" style="display: none;" title="Erreur" class="dialog">
        <p style="color:red"> <strong>Entrez un taux.</strong></p>
    </div>
    <div style="display: none;" id="error_tva_number" title="Erreur" class="dialog">
        <p style="color:red"> <strong> Chiffres uniquement acceptés. </strong></p>
    </div>
    <div id="success_tva" style="display: none;" class="dialog">
        <p style="color:green"> <strong>Taux TVA changé. </strong></p>
    </div>
    <div id="change_tva" style="display: none;">
        <p>Taux actuel : <span><?php echo isset($taux_tva) ? $taux_tva : ''; ?></span>%</p>
        <form class="validate" id="form_change_tva">
            Nouveau taux : <input type="text" value="" name="taux_tva" id="taux_tva" class="required" placeholder="%" pattern="^\d{1,2}(.|,)?\d{0,2}$" />
        </form>
        <br>
        <br>
    </div>
    <!-- Fin Changement TVA -->

    <!-- Reduction Facture -->
    <div style="display: none;" id="reduc_facture" title="Remise facture">
        <form class="validate" id="form_reduc_facture">
            <input type="hidden" name="date_reduc_facture" id="date_reduc_facture" value="" />
            <input type="hidden" name="id_users" id="id_users" value="" />
            <input type="hidden" name="totalFacture_reduct_facture" id="totalFacture_reduct_facture" value="" />
            Montant de la remise : <input type="text" value="" name="reduction_facture" id="reduction_facture" class="required" placeholder="€" pattern="^\d{1,5}(.|,)?\d{0,2}$" /> Date : <input type="date" name="date_remise" id="date_remise" value="<?php echo date("d/m/Y"); ?>" class="required maskDate">
        </form>
    </div>
    <div style="display: none;" id="list_reduc_facture" title="Remise facture" class="dialog">
    </div>

    <div style="display: none;" id="error_reduc_facture" title="Erreur" class="dialog">
        <p style="color:red"> <strong>Entrez un montant. </strong></p>
    </div>

    <div style="display: none;" id="error_number_reduc_facture" title="Erreur" class="dialog">
        <p style="color:red"> <strong> Chiffres uniquement acceptés. </strong></p>
    </div>

    <div style="display: none;" id="success_reduc_facture" title="Remise facture" class="dialog">
        <p style="color:green"> <strong> Montant de réduction ajoutée. </strong></p>
    </div>

    <div style="display: none;" id="confirm_delete_reduc_facture" title="Remise facture">
        <form class="validate" id="form_delete_reduc_facture">
            <input type="hidden" name="date_delete_reduc_facture" id="date_delete_reduc_facture" value="" />
            <input type="hidden" name="id_users_delete_reduc_facture" id="id_users_delete_reduc_facture" value="" />
            <input type="hidden" name="totalFacture_delete_reduct_facture" id="totalFacture_delete_reduct_facture" value="" />
        </form>
        <p style="color:green"> <strong>Supprimer cette réduction? </strong></p>
    </div>

    <div style="display: none;" id="success_delete_reduc_facture" title="Remise facture" class="dialog">
        <p style="color:green"> <strong> Réduction supprimée. </strong></p>
    </div>
    <!-- FIN Reduction Facture -->
	
  <!-- ENVOi DE MAIL CLIENT -->
	<div style="display: none;" id="send_mail_customer" title="Envoi d'email">
		<form id="form_mail_customer" class="no-style validate">
			<div style="text-align:center">Choisir les destinataires du mail : </div><br>
			<div style="text-align:center" id="listUser"></div><br>
			<div style="text-align:center">Sujet du mail : <input type="text" value="" style="width:600px" class="required" name="sujet_mail"></div><br>
			<div style="text-align:center">Pièce jointe : <input type="file" class="ready" name="piece_jointe" id="piece_jointe"><span style="display:none;"><img src="/static/img/loading.gif" alt="Chargement..." /></<span></div><br>
			<input type="hidden" value="" name="piece_jointe_mail" id="piece_jointe_mail" />
			
			<textarea id="area_mail" name="area_mail"></textarea>
		</form>
	</div>
  <!-- FIN ENVOi DE MAIL CLIENT -->
  
  <!-- MISE A JOUR DOCUMENT -->
	<div style="display: none;" id="send_document_downloadable" title="Mise à jour documents téléchargeables">
		<form id="form_send_document" class="no-style validate">
			<div style="text-align:center">
        Document à mettre à jour : 
        <select id="document">
          <option value="grille_stock_optimize">Grille de prix stock</option>
          <option value="plaquette_optimize">Grille de prix fabrique</option>
        </select>
      </div>
      <br />
      <div style="text-align:center">
        Grille tarifaire : 
        <select id="grille_document">
          <option value="1">Grille 1</option>
          <option value="2">Grille 2</option>
          <option value="3">Grille 3</option>
        </select>
      </div>
      <br />
			<div style="text-align:center">
        <input type="file" value="" name="nouveau_document" id="nouveau_document" class="ready"/>
      </div><br>
      
      <div style="display:none" id="progressbar_document">
				<br><br>
				<span id="msg_progress_document" style="font-weight:bold"></span>
				<div id="progress_document"><div id="progress-label-document" style=" position: absolute;left: 46%; font-weight: bold;text-shadow: 1px 1px 0 #fff;"></div></div>
			</div>
		</form>
	</div>
  <!-- FIN MISE A JOUR DOCUMENT -->
  
  <!-- Fenetre generation etiquette -->
  <div style="display: none;" id="show_etiquette" title="Générer étiquette stock">
		<form id="form_show_etiquette" class="no-style validate" action="/admin/generer_etiquette" method="POST">
			Colonne : <input type="text" value="1" style="width:50px" class="required" name="colonne" id="colonne">
			Ligne : <input type="text" value="1" style="width:50px" class="required" name="ligne" id="ligne">
		</form>
	</div>
  <!-- FIN Fenetre generation etiquette-->
	
   <!-- Fenetre generation etiquette fabrication -->
  <div style="display: none;" id="show_etiquette_fabrication" title="Générer étiquette fabrication">
		<form id="form_show_etiquette_fabrication" class="no-style validate" action="/admin/generer_etiquette_fabrication" method="POST">
			Colonne : <input type="text" value="1" style="width:50px" class="required" name="colonne" id="colonne">
			Ligne : <input type="text" value="1" style="width:50px" class="required" name="ligne" id="ligne">
		</form>
	</div>
  <!-- FIN Fenetre generation etiquette fabrication-->
  
  <!-- Fenetre demande quantité lentille -->
  <div style="display: none;" id="show_quantite_lentille" title="quantité lentille ?">
    <div class="show_commentaire_modif_bl"></div><br><br>
    <form id="form_show_libelle_lentille" class="no-style validate" method="POST">
      Quantité droite : <input type="text" name="libelle_quantite_lentille_droit" id="libelle_quantite_lentille_droit" value="" class="required" pattern="^\d{1,2}$"><br>
      Quantité gauche : <input type="text" name="libelle_quantite_lentille_gauche" id="libelle_quantite_lentille_gauche" value="" class="required" pattern="^\d{1,2}$">
    </form>
	</div>
  <!-- Fin Fenetre demande quantité lentille -->
  
  
  <!-- Fenetre demande libellé lentille -->
  <div style="display: none;" id="show_libelle_lentille" title="Libellé lentille ?">
    <div class="show_commentaire_modif_bl"></div><br><br>
    <form id="form_show_nouvelle_date_bl" class="no-style validate" method="POST">
      Libellé : <input type="text" name="libelle_lentille" id="libelle_lentille" value="" class="required">
    </form>
	</div>
  <!-- Fin Fenetre demande libellé lentille -->
  
   <!-- Fenetre demande verre ou lentille pour les nouvelles date BL -->
  <div style="display: none;" id="show_verre_lentille" title="Verre ou lentille ?">
      <div class="show_commentaire_modif_bl"></div><br><br>
      <input type="radio" value="verre" id="type_optique_verre" class="required" name="type_optique" /> Verre &nbsp;&nbsp;
      <input type="radio" value="lentille" id="type_optique_lentille" class="required" name="type_optique" /> Lentille
	</div>
  <!-- Fin Fenetre demande nouvelle date BL -->
  
	
	  <!-- Fenetre demande nouvelle date BL -->
  <div style="display: none;" id="show_nouvelle_date_bl" title="Nouvelle date BL">
    <div class="show_commentaire_modif_bl"></div><br><br>
		<form id="form_show_nouvelle_date_bl" class="no-style validate" action="/admin/nouvel_intitule_bl" method="POST">
      <input type="hidden" value="" id="id_nouvelle_date_bl" name="id_nouvelle_date_bl" >
      Date : <input type="text" name="nouvelle_date_bl" id="nouvelle_date_bl" value="" class="required maskDate">
		</form>
	</div>
  <!-- Fin Fenetre demande nouvelle date BL -->
  
  <!-- Fenetre Envoi nouveau BL -->
  <div style="display: none;" id="show_envoi_bl" title="Envoi du nouveau BL ?">
    <div class="show_commentaire_modif_bl"></div><br><br>
		<form id="form_show_envoi_bl" class="no-style validate" method="POST">
      <input type="hidden" value="" id="id_users_nouveau_bl" name="id_users_nouveau_bl" >
      <input type="radio" value="Oui" id="envoi_nouveau_bl_oui" class="required" name="envoi_nouveau_bl" /> Oui &nbsp;&nbsp;
      <input type="radio" value="Non" id="envoi_nouveau_bl_non" class="required" name="envoi_nouveau_bl" /> Non
		</form>
	</div>
  <!-- Fin Fenetre Envoi nouveau BL-->
  
   <!-- Fenetre message fin -->
  <div style="display: none;" id="show_message_fin" title="Fin">
		Toutes ces opérations viennent d'etre effectuées !
	</div>
  <!-- Fin Fenetre message fin -->

*/ ?>