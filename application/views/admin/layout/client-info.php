<?php

    $optionTarif = "";

    for($prix_livraison=0;$prix_livraison<=10;$prix_livraison+=0.5){
        $optionTarif .= '<option value="'.$prix_livraison.'" '.($prix_livraison == $info_user[0]->tarif_livraison ? 'selected' : '').'>'.$prix_livraison.' €</option>';
    }

    $fields = array(
        'informations' => array(
            'nom_societe' => array('title' => 'Nom de la société', 'col' => 6),
            'nom_magasin' => array('title' => 'Nom du magasin', 'col' => 6),
            'adresse' => array('title' => 'Adresse', 'col' => 12),
            'cp' => array('title' => 'Code postal', 'col' => 6),
            'ville' => array('title' => 'Ville', 'col' => 6),
            'numero_siret' => array('title' => 'Numéro SIRET', 'col' => 12),
            'tva_intracom' => array('title' => 'Numéro TVA', 'col' => 12),
            'num_finess' => array('title' => 'Numéro Finess', 'col' => 12),
        ),
        'contact' => array(
            'nom_responsable' =>  array('title' => 'Nom du résponsable', 'col' => 12),
            'email' =>  array('title' => 'Adresse email', 'col' => 12),
            'tel_fixe' =>  array('title' => 'Téléphone fixe', 'col' => 12),
            'tel_fax' =>  array('title' => 'Téléphone fax', 'col' => 12),
        )
    );

?>

<div id="loading-overlay" style="display:none;"></div>
<div id="loading" style="display:none;">
    <span id="text_loading">Chargement...</span>
</div>
<h4 class="modal-title">Client #<?php echo $info_user[0]->id_users ?> - <span class="text-muted"><?php echo $info_user[0]->nom_societe; ?></span></h4>

<form id="updateUser" class="form-edit-add" role="form" action="#" method="POST">

    <input type="hidden" name="user" value="<?php echo $info_user[0]->id_users ?>" />

    <ul class="nav nav-tabs navtab-bg nav-justified">
        <li class="active">
            <a href="#user-modal-info" data-toggle="tab" aria-expanded="false">
                <span>Société</span>
            </a>
        </li>
        <li class="">
            <a href="#user-modal-contact" data-toggle="tab" aria-expanded="false">
                <span>Contact</span>
            </a>
        </li>
        <li class="">
            <a href="#user-modal-param" data-toggle="tab" aria-expanded="false">
                <span>Paramètres</span>
            </a>
        </li>
		<li class="">
            <a href="#user-modal-commerciaux" data-toggle="tab" aria-expanded="false">
                <span>Commerciaux</span>
            </a>
        </li>
        <li class="">
            <a href="#user-modal-prix" data-toggle="tab" aria-expanded="false">
                <span>Prix&nbsp;Verres</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">



        <div class="tab-pane active" id="user-modal-info">
            <div class="row">
                <?php
                foreach($fields['informations'] as $k => $v) {

                    echo '<div class="form-group m-b-10 col-sm-'.$v['col'].'">
                        <label for="'.$k.'" class="control-label">'.$v['title'].'</label>
                        <input type="text" class="form-control" id="'.$k.'" name="'.$k.'" value="'.$info_user[0]->$k.'">
                    </div>';

                }
                ?>
            </div>
        </div>


        <div class="tab-pane" id="user-modal-contact">
            <div class="row">
                <?php
                foreach($fields['contact'] as $k => $v) {

                    echo '<div class="form-group m-b-10 col-sm-'.$v['col'].'">
                            <label for="'.$k.'" class="control-label">'.$v['title'].'</label>
                            <input type="text" class="form-control" id="'.$k.'" name="'.$k.'" value="'.$info_user[0]->$k.'">
                        </div>';

                }
                ?>
            </div>
        </div>

        <div class="tab-pane" id="user-modal-param">
            <div class="row">

                <div class="form-group m-b-10 col-sm-12">
                    <label for="login_notification" class="control-label">Notification quand le client se connecte</label>
                    <select id="login_notification" name="login_notification" class="form-control">
                        <option value="1" <?php echo ($info_user[0]->login_notification == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                        <option value="0" <?php echo ($info_user[0]->login_notification == 0 ? 'selected="selected"' : '') ?>>Non</option>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="jour_prelevement" class="control-label">Jour de prélèvement</label>
                    <select id="jour_prelevement" name="jour_prelevement"  class="form-control">
                        <?php 
                            for($i=1;$i<29;++$i) {
                                echo '<option value="'.$i.'" '.($info_user[0]->jour_prelevement == $i ? 'selected="selected"' : '').'>'.$i.'</option>';
                            }
                        ?>
                    </select>
                </div>
                
                <div class="form-group m-b-10 col-sm-12">
                    <label for="tarif_livraison" class="control-label">Tarif livraison</label>
                    <select id="tarif_livraison" name="tarif_livraison"  class="form-control"><?php echo $optionTarif ?></select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="tarif_packaging" class="control-label">Tarif packaging</label>
                    <input type="text" id="tarif_packaging" name="tarif_packaging"  class="form-control" value="<?php echo $info_user[0]->tarif_packaging ?>" />
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="tarif_supplement" class="control-label">Supplément sur les verres</label>
                    <input type="text" id="tarif_supplement" name="tarif_supplement"  class="form-control" value="<?php echo $info_user[0]->tarif_supplement ?>" />
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="percent_tva" class="control-label">Pourcentage de la TVA</label>
                    <input type="text" id="percent_tva" name="percent_tva"  class="form-control" value="<?php echo $info_user[0]->percent_tva?>" />
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="taux_erreur" class="control-label">Pourcentage casse</label>
                    <select id="taux_erreur" name="taux_erreur"  class="form-control">
                        <?php
                        for($i=1;$i <= 10; ++$i) {
                            echo '<option value="'.$i.'" '.($info_user[0]->taux_erreur == $i ? 'selected="selected"' : '').'>'.$i.' %</option>';
                            if($i < 10) {
                                echo '<option value="'.round($i+0.5, 1).'" '.($info_user[0]->taux_erreur == round($i+0.5, 1) ? 'selected="selected"' : '').'>'.round($i+0.5, 1).' %</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="id_grille_tarifaire" class="control-label">Grille tarifaire</label>
                    <select id="id_grille_tarifaire" name="id_grille_tarifaire"  class="form-control">
                        <?php
                            for($i=1;$i <= 15; ++$i) {
                                echo '<option value="'.$i.'" '.($i == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '').'>Grille '.$i.'</option>';
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="show_commentaire" class="control-label">Activer les commentaires</label>
                    <select id="show_commentaire" name="show_commentaire" class="form-control">
                        <option value="1" <?php echo ($info_user[0]->show_commentaire == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                        <option value="0" <?php echo ($info_user[0]->show_commentaire == 0 ? 'selected="selected"' : '') ?>>Non</option>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="commande_suspendue" class="control-label">Suspendre les commandes</label>
                    <select id="commande_suspendue" name="commande_suspendue" class="form-control">
                        <option value="1" <?php echo ($info_user[0]->commande_suspendue == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                        <option value="0" <?php echo ($info_user[0]->commande_suspendue == 0 ? 'selected="selected"' : '') ?>>Non</option>
                    </select>
                </div>


                <div class="form-group m-b-10 col-sm-12">
                    <label for="new_password" class="control-label">Envoyer un nouveau mot de passe</label>
                    <input type="text" id="new_password" class="form-control" value="" />
                    <a class="btn btn-warning btn-block waves-effect" id="sendNewPassword">Envoyer le mot de passe</a>
                </div>

            </div>
        </div>

		<div class="tab-pane" id="user-modal-commerciaux">
            <div class="row">
				<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
				<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
				<div id="passprotect">
				<input type="password" id="pass"> <input type="button" id="login" value="OK"><br>
				<span id="err"></span></div>
				<div id="passok"></div>
            </div>
        </div>
        
        <div class="tab-pane" id="user-modal-prix">
            <div class="form-group row">
            	<h5 style="margin-bottom: 0px;">Cloner les prix d'un client</h5>
            	(Attention cette operation supprimera les prix deja saisi pour ce client)
            	<br><br>
            	Client a dupliquer :<br><select class="form-control select-search"  id="listeClients" style="max-width: 400px;display: inline-block;">
						<option value="">-- Choisir --</option>
					</select> <a href="#" id="btn_dupliquer" class="btn btn-warning waves-effect waves-light">Dupliquer</a>
            	<br><br>
            	<h5>Ajouter un nouveau prix special</h5>
                <input type="text" value="" id="recherche_verre" name="recherche_verre" style="height: 35px;"> <a href="#" id="btn_recherche_verre" class="btn btn-warning waves-effect waves-light">Rechercher</a>
            	<div id="divNouveauVerres" class="hide"><br><br>
            	</div>
            	<div id="divlisteVerres" class="form-group row hide"><br>
            		<h5>Selectionnez un verre :</h5>
            		<select class="form-control select-search"  id="listeVerres">
						<option value="">-- Choisir --</option>
					</select><br>
                </div>
                <div id="choice_change_price" class="form-group row hide">
                    <ul class="nav nav-tabs navtab-bg nav-justified">
                        <li id="nav-prix-verre" class="active">
                            <a href="#modal-prix-verres" data-toggle="tab" aria-expanded="false">
                                <span>Prix verres</span>
                            </a>
                        </li>
                        <li id="nav-prix-traitement" >
                            <a href="#modal-prix-traitements" data-toggle="tab" aria-expanded="false">
                                <span>Prix traitements</span>
                            </a>
                        </li>
                        <li id="nav-prix-teinte" >
                            <a href="#modal-prix-teintes" data-toggle="tab" aria-expanded="false">
                                <span>Prix teintes</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="modal-prix-verres">
                            <div>
                                Nouveau prix Verre: <input type="text" value="" id="nouveau_prix"
                                                           name="nouveau_prix" style="text-align: right; width: 78px; height: 35px; padding-right: 5px;"> &euro;
                                <a href="#" style="margin-left:20px"
                                   id="btn_submit_prix"
                                   class="btn btn-warning waves-effect waves-light">OK</a>
                            </div>
                        </div>
                        <div class="tab-pane" id="modal-prix-traitements">
                            <div id="divlisteTraitements" class="form-group row hide"><br>
                                <h5>Selectionnez un traitement :</h5>
                                <select class="form-control select-search"  id="listeTraitements">
                                    <option value="">-- Choisir --</option>
                                </select><br>
                                <div id="div_nouveau_prix_traitement" class="hide">
                                    Nouveau prix Traitement : <input type="text" value=""
                                                                     id="nouveau_prix_traitement"
                                                                     name="nouveau_prix_traitement" style="text-align: right; width: 78px; height: 35px; padding-right: 5px;"> &euro;
                                    <a href="#" style="margin-left:20px"
                                       id="btn_submit_prix_traitement"
                                       class="btn btn-warning waves-effect waves-light">OK</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="modal-prix-teintes">
                            <div id="divlisteTeintes" class="form-group row hide"><br>
                                <h5>Selectionnez une teinte :</h5>
                                <select class="form-control select-search"  id="listeTeintes">
                                    <option value="">-- Choisir --</option>
                                </select><br>
                                <div id="div_nouveau_prix_teinte" class="hide">
                                    Nouveau prix Teinte : <input type="text" value=""
                                                                     id="nouveau_prix_teinte"
                                                                     name="nouveau_prix_teinte" style="text-align: right; width: 78px; height: 35px; padding-right: 5px;"> &euro;
<!--                                    <a href="#" style="margin-left:20px"-->
<!--                                       id="btn_submit_prix_teinte"-->
<!--                                       class="btn btn-warning waves-effect waves-light">OK</a>-->
                                    <button style="margin-left:20px"
                                            type = "button"
                                       id="btn_submit_prix_teinte"
                                       class="btn btn-warning waves-effect waves-light">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="history_price" class="form-group row">
                    <ul class="nav nav-tabs navtab-bg nav-justified">
                        <li id="nav-history-verres" class="active">
                            <a href="#modal-history-verres" data-toggle="tab" aria-expanded="false">
                                <span>Historique verres</span>
                            </a>
                        </li>
                        <li id="nav-history-traitements">
                            <a href="#modal-history-traitements" data-toggle="tab" aria-expanded="false">
                                <span>Historique traitements</span>
                            </a>
                        </li>
                        <li id="nav-history-teintes">
                            <a href="#modal-history-teintes" data-toggle="tab" aria-expanded="false">
                                <span>Historique teintes</span>
                            </a>
                        </li>
                        <li id="catalogue">
                            <a href="#modal-catalogue" data-toggle="tab" aria-expanded="false">
                                <span>Catalogue</span>
                            </a>
                        </li>
<!--                        <li id="nav-history-teintes">-->
<!--                            <a href="#modal-history-teintes-test" data-toggle="tab" aria-expanded="false">-->
<!--                                <span>Historique teintes test</span>-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                    <div class="tab-content">
                        <div style="text-align: center">
                            Actifs / Tous
                        </div>
                        <div class="material-switch pull-right">
                            <input id="checkboxActive" name="checkboxActive" type="checkbox" checked/>
                            <label for="checkboxActive" class="label-warning"></label>
                        </div>
                        <div class="tab-pane active" id="modal-history-verres">
                            <h5>Table des Prix modifiés</h5>
                            <table id="tableCustomPrix"
                                   class="table table-striped dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Ref.</th>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="modal-history-traitements">

                            <h5>Table des Prix modifiés</h5>
                            <table id="tableCustomPrixTraitements"
                                   class="table table-striped dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>Code Verre / Traitement</th>
                                    <th>Verre</th>
                                    <th>Traitement</th>
                                    <th>Prix (Prix initial)</th>
                                    <th>Date</th>
                                    <th>Désactivation</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="modal-history-teintes">
                            <h5>Table des Prix modifiés</h5>
                            <table id="tableCustomPrixTeintes"
                                   class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Code Verre / Teinte</th>
                                        <th>Verre</th>
                                        <th>Teinte</th>
                                        <th>Prix (Prix initial)</th>
                                        <th>Date</th>
                                        <th>Désactivation</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="tab-pane" id="modal-catalogue">
                            <h5>Catalogue</h5>
                            <table id="tableCustomCatalogue"
                                   class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Verre</th>
                                        <th>Prix</th>
                                        <th>Order</th>
                                        <th>HMC</th>
                                        <th>HMC Face Interne</th>
                                        <th>Satin</th>
                                        <th>Satin Face Interne</th>
                                        <th>Satin UV</th>
                                        <th>Satin UV Face Interne</th>
                                        <th>Achromatique</th>
                                        <th>Achromatique Face Interne</th>
                                        <th>BlueCoat</th>
                                        <th>Spectrum</th>
                                        <th>Satin Max</th>
                                        <th>Satin Max Face Interne</th>
                                        <th>Satin Drive Or</th>
                                        <th>Miroir</th>
                                        <th>Teinte</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
<!--                        <div class="tab-pane" id="modal-history-teintes-test">-->
<!--                            <h5>Table des Prix modifiés</h5>-->
<!--                            <table id="tableCustomPrixTeintesTest"-->
<!--                                   class="table table-striped dt-responsive nowrap">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <th>Code Verre / Teinte</th>-->
<!--                                    <th>Verre</th>-->
<!--                                    <th>Teinte</th>-->
<!--                                    <th>Prix (Prix initial)</th>-->
<!--                                    <th>Date</th>-->
<!--                                    <th>Désactivation</th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                            </table>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal-footer m-b-10">
        <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-warning waves-effect waves-light">Mettre à jour</button>
    </div>

</form>

<script>
	$(document).ready(function(){

	<?php
	$noPass = get_cookie("noPass");
	if($noPass=='1')
	{?>
		$.ajax({
            type: "POST",
            url: "/admin/accesCommerciaux",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>,
                'password' : $('#pass').val()
            },
            success: function(data){

                var res = $.parseJSON(data);
				// $("#err").text("Incorrect password");

                if(res.status == 'ok') {
						//$("#err").text("Password OK");
					$('#passprotect').hide();
					
					$('#passok').html(res.DataCom);
					$(function(){ $('#Samuel').bootstrapToggle() });
					$(function(){ $('#Daniel').bootstrapToggle() });
					$(function(){ $('#Gregory').bootstrapToggle() });
                    $(function(){ $('#Glenn').bootstrapToggle() });
					$(function(){ $('#Optical_Service').bootstrapToggle() });
					
					$( "#passok" ).append( "<input type='hidden' name='withPass' value='1'>" );
                    
                }
				if(res.status == 'error') {
						$("#err").text("Incorrect password");
                    
                }

            }
        });
	
		<?php
	}
	else
	{ ?>
		
	$("#login").click(function() {
   	
	$.ajax({
            type: "POST",
            url: "/admin/accesCommerciaux",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>,
                'password' : $('#pass').val()
            },
            success: function(data){

                var res = $.parseJSON(data);
				// $("#err").text("Incorrect password");

                if(res.status == 'ok') {
						//$("#err").text("Password OK");
					$('#passprotect').hide();
					
					$('#passok').html(res.DataCom);
					$(function(){ $('#Samuel').bootstrapToggle() });
					$(function(){ $('#Daniel').bootstrapToggle() });
					$(function(){ $('#Gregory').bootstrapToggle() });
                    $(function(){ $('#Glenn').bootstrapToggle() });
					$(function(){ $('#Optical_Service').bootstrapToggle() });
					
					$( "#passok" ).append( "<input type='hidden' name='withPass' value='1'>" );
                    
                }
				if(res.status == 'error') {
						$("#err").text("Incorrect password");
                    
                }

            }
        });
	});
	<?php } ?>
});
    $('#sendNewPassword').on('click', function() {

        $.ajax({
            type: "POST",
            url: "/admin/send_new_password",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>,
                'password' : $('#new_password').val()
            },
            success: function(data){

                var res = $.parseJSON(data);

                if(res.status == 'ok') {

                    swal({
                        title: "Mot de passe à jour",
                        type: "success",
                        text: "Lt mot de passe a bien été mis à jour",
                        timer: 2000,
                        showConfirmButton: false
                    });

                }

            }
        });

    });

$(document).ready(function(){

	$.ajax({
            type: "POST",
            url: "/admin/getListeClients",
            dataType: "json",
            success: function(data){
				if(data[0])
				{
					$.each(data, function(key, value){
						$('#listeClients').append('<option value="'+ value.id_users +'">'+ value.id_users + ' - '+value.nom_societe+'</option>');
					});
				}
			}
                
        });
        
    $('#btn_dupliquer').on('click', function() {
    
    		if($('#listeClients').val() != "")
    		{
	
               $.ajax({
					type: "POST",
					url: "/admin/duplicatePriceTab",
					data: {
						'user_id' : <?php echo $info_user[0]->id_users ?>,
						'from_user_id' : $('#listeClients').val()
					},
					dataType: "html",
					success: function(data){
				
						if(data=="OK")
						{
							$('#tableCustomPrix').DataTable().clear();
							$.ajax({
								type: "POST",
								url: "/admin/getCustomPriceList",
								data: {
									'user_id' : <?php echo $info_user[0]->id_users ?>
								},
								dataType: "json",
							}).done( function(data) {
								$('#tableCustomPrix').DataTable( {
									"destroy": true,
									"aaData": data,
									"columns": [
										{ "data": "code" },
										{ "data": "libelle" },
										{ "data": "prix" },
										{ "data": "action" }
									]
									})
									
								});
                            recreateDatatableTeinte();
                            getTraitementPriceList();
								
						}
						
					}
				
				});
			}
               
    });
    
	

	var table = $('#tableCustomPrix').DataTable({
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                deferRender: true,
                order: [1, 'desc'],
                language: {
                    "lengthMenu": "Afficher _MENU_ verres par page",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
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
    $('#tableCustomPrixTraitements').DataTable({
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "Tout"]
        ],
        deferRender: true,
        order: [1, 'desc'],
        language: {
            "lengthMenu": "Afficher _MENU_ traitements par page",
            "info": "Affichage de la page page _PAGE_ sur _PAGES_",
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




    var tableTeintes = $('#tableCustomPrixTeintes').DataTable({
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "Tout"]
        ],
        deferRender: true,
        order: [1, 'desc'],
        bPaginate: true,
        bProcessing:true,
        language: {
            "lengthMenu": "Afficher _MENU_ traitements par page",
            "info": "Affichage de la page page _PAGE_ sur _PAGES_",
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

    var tableCatalogue = $('#tableCustomCatalogue').DataTable({
        aLengthMenu: [
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "Tout"]
        ],
        deferRender: true,
        order: [1, 'desc'],
        bPaginate: true,
        bProcessing:true,
        language: {
            "lengthMenu": "Afficher _MENU_ traitements par page",
            "info": "Affichage de la page page _PAGE_ sur _PAGES_",
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

    getTraitementPriceList();
    getTeintePriceList();
    getCatalogue();
    // console.log('test');
    // getTeintePriceListTest()
        $.ajax({
            type: "POST",
            url: "/admin/getCustomPriceList",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>
            },
            dataType: "json",
        }).done( function(data) {
            $('#tableCustomPrix').dataTable( {
                "destroy": true,
                "aaData": data,
                "columns": [
                    { "data": "code" },
                    { "data": "libelle" },
                    { "data": "prix" },
                    { "data": "action" }
                ]
            })
        })

	$('#btn_recherche_verre').on('click', function() {
	
        $.ajax({
            type: "POST",
            url: "/admin/getAllVerres",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>,
                'requete' : $('#recherche_verre').val()
            },
            dataType: "json",
            success: function(data){
				// console.log(data)
				//alert("HHHH");
				if(data[0])
				{
					$('#listeVerres').empty();
            		$('#listeVerres').append('<option value="">-- Choisir --</option>');
            		$('#divlisteVerres').removeClass('hide');
            		
					//console.log(data);
					
					$.each(data, function(key, value){
						$('#listeVerres').append('<option value="'+ value.verre_or_lens_id +'">'+ value.libelle + ' ('+value.prix+' &euro;)</option>');
					});
				
				}
				else
				{
					$('#divlisteVerres').addClass('hide');
				}
			}
                
        });

    });


});

	$('body').on('click', '#btn_submit_prix', function(event){ 
		
		if($('#nouveau_prix').val() != "" && $('#listeVerres').val() != "")
		{
			var name_verre = $("#listeVerres option:selected").text();
			console.log(name_verre);
			$.ajax({
				type: "POST",
				url: "/admin/setPriceVerre",
				data: {
					'user_id' : <?php echo $info_user[0]->id_users ?>,
					'new_price' : $('#nouveau_prix').val(),
					'verre_or_lens_id' : $('#listeVerres').val(),
					'name_verre' : name_verre
				},
				dataType: "html",
				success: function(data){
				
					if(data=="OK")
						{
							$('#nouveau_prix').val('');
							$('#listeVerres').empty();
            				$('#listeVerres').append('<option value="">-- Choisir --</option>');
            				
							$('#divlisteVerres').addClass('hide');
				
							$('#tableCustomPrix').DataTable().clear();
							$.ajax({
								type: "POST",
								url: "/admin/getCustomPriceList",
								data: {
									'user_id' : <?php echo $info_user[0]->id_users ?>
								},
								dataType: "json",
							}).done( function(data) {
								$('#tableCustomPrix').DataTable( {
									"destroy": true,
									"aaData": data,
									"columns": [
										{ "data": "code" },
										{ "data": "libelle" },
										{ "data": "prix" },
										{ "data": "action" }
									]
									})
						
								})
					
						}
						
				}
				
			});
		}

    });
	
	
 	$('body').on('click', 'a.supprimer_prix', function(event){ 
	
               $.ajax({
					type: "POST",
					url: "/admin/delCustomPrice",
					data: {
						'user_id' : <?php echo $info_user[0]->id_users ?>,
						'id_prix' : $(this).attr('rel')
					},
					dataType: "html",
					success: function(data){
				
						if(data=="OK")
						{
							$('#tableCustomPrix').DataTable().clear();
							$.ajax({
								type: "POST",
								url: "/admin/getCustomPriceList",
								data: {
									'user_id' : <?php echo $info_user[0]->id_users ?>
								},
								dataType: "json",
							}).done( function(data) {
								$('#tableCustomPrix').DataTable( {
									"destroy": true,
									"aaData": data,
									"columns": [
										{ "data": "code" },
										{ "data": "libelle" },
										{ "data": "prix" },
										{ "data": "action" }
									]
									})
									
								})
								
						}
						
					}
				
				});
               
    });
    
    
    $('body').on('click', 'a.modifier_prix', function(event){ 
    
    	$('#divNouveauVerres').html('');
    	var s = $(this).attr('rel').split('*');
    	var id_prix = s[0];
    	var old_prix = s[1];
		
		$('#divNouveauVerres').removeClass('hide');
		$('#divNouveauVerres').append('<h3>Nouveau prix :</h3><input type="text" style="height: 35px;" id="newPrice" value="'+old_prix+'"><a href="#" rel="'+id_prix+'" id="changePrice" class="btn btn-warning waves-effect waves-light">OK</a>');
		
               
    });
    
    
    $('body').on('click', '#changePrice', function(event){ 
		
		if($('#newPrice').val() != "")
		{
			$.ajax({
				type: "POST",
				url: "/admin/setPriceVerreById",
				data: {
					'user_id' : <?php echo $info_user[0]->id_users ?>,
					'new_price' : $('#newPrice').val(),
					'id_prix' : $(this).attr('rel'),
				},
				dataType: "html",
				success: function(data){
				
					if(data=="OK")
						{
							$('#divNouveauVerres').addClass('hide');
							
							$('#tableCustomPrix').DataTable().clear();
							$.ajax({
								type: "POST",
								url: "/admin/getCustomPriceList",
								data: {
									'user_id' : <?php echo $info_user[0]->id_users ?>
								},
								dataType: "json",
							}).done( function(data) {
								$('#tableCustomPrix').DataTable( {
									"destroy": true,
									"aaData": data,
									"columns": [
										{ "data": "code" },
										{ "data": "libelle" },
										{ "data": "prix" },
										{ "data": "action" }
									]
									})
									
								})
								
						}
				}
				
			});
		}

    });

    function getTraitementPriceList() {
        let displayStart = $('#tableCustomPrixTraitements').DataTable().page.info().page * 10;
        $.ajax({
            type: "POST",
            url: "/traitement/getTraitementPriceList",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>
            },
            dataType: "json",
        }).done( function(data) {
            $('#tableCustomPrixTraitements').dataTable( {
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                "destroy": true,
                "aaData": data,
                "columns": [
                    { "data": "code" },
                    { "data": "verre" },
                    { "data": "traitement" },
                    { "data": "prix" },
                    { "data": "date" },
                    { "data": "action" }
                ],
                "displayStart" : displayStart,
                dom: 'Blfrtip',
                "buttons": ['copy','csv','excel',
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        title: 'Historique des traitements du client ' + <?php echo $info_user[0]->id_users ?>,
                        exportOptions: {
                            columns: [0,1,2,3]
                        },
                    },'print'],
                "language": {
                    "lengthMenu": "Afficher _MENU_ traitements par page",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoFiltered": "(Filtrat de _MAX_ entrées)",
                    "search": "Recherche",
                    "paginate": {
                        "first":      "Première",
                        "last":       "Dernière",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    }
                },
                "createdRow": function (row, data, index) {
                    // console.log(data['active']);
                    // console.log('active');
                    // console.log(data);
                    // console.log(row);
                    if (data['active'] == false) {
                        $(row).addClass('prix_traitement_inactive');
                    }
                    else {
                        $(row).addClass('prix_traitement_active');
                    }
                },
                "order": [[ 4, "desc" ]]
            });
            traitementTeinteActiveInactive();
        });
    }


    function getCatalogue() {
        let displayStart = $('#tableCustomCatalogue').DataTable().page.info().page * 10;
        $.ajax({
            type: "POST",
            url: "/admin/getPricesByUser",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>
            },
            dataType: "json",
        }).done( function(data) {
            let table = $('#tableCustomCatalogue').dataTable( {
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                "destroy": true,
                "aaData": data,
                "columns": [
                    { "data": "verre" },
                    { "data": "prix" },
                    { "data": "order" },
                    { "data": "HMC" },
                    { "data": "HMC Face Interne" },
                    { "data": "Satin" },
                    { "data": "Satin Face Interne" },
                    { "data": "Satin UV" },
                    { "data": "Satin UV Face Interne" },
                    { "data": "Achromatique" },
                    { "data": "Achromatique Face Interne" },
                    { "data": "BlueCoat" },
                    { "data": "Spectrum" },
                    { "data": "Satin Max" },
                    { "data": "Satin Max Face Interne" },
                    { "data": "Satin Drive Or" },
                    { "data": "Miroir" },
                    { "data": "teinte" },
                ],
                "columnDefs": [
                    {
                        "targets": [2,4,6,7,8,9,10,12,13,14,15,16],
                        "visible": false,
                        "searchable": false
                    }
                ],
                "displayStart" : displayStart,
                dom: 'Blfrtip',
                "buttons": [ {
                    backgroundColor: "red",
                    extend: 'excel',
                    text: 'Excel',
                    title: 'Catalogue du magasin ' + <?php echo $info_user[0]->id_users ?>,
                    filename: 'catalogue_magasin_' + <?php echo $info_user[0]->id_users ?>,
                    action: function(e, dt, node, config) {
                        var that = this;
                        isLoading('Chargement du Excel'); // function to show a loading spin

                        setTimeout(function() { // it will download and hide the loading spin when excel is ready
                            //exportExtension = 'PDF';
                            $.fn.DataTable.ext.buttons.excelHtml5.action.call(that, e, dt, node, config);
                            $("#loading-overlay,#loading").hide();// close spin
                        }, 1000);

                    },
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    title: 'Catalogue du magasin ' + <?php echo $info_user[0]->id_users ?>,
                    filename: 'catalogue_magasin_' + <?php echo $info_user[0]->id_users ?>,
                    processing: "true",

                    action: function(e, dt, node, config) {
                        let that = this;
                        isLoading('Chargement du PDF'); // function to show a loading spin

                        setTimeout(function() { // it will download and hide the loading spin when excel is ready
                            //exportExtension = 'PDF';
                            $.fn.DataTable.ext.buttons.pdfHtml5.action.call(that, e, dt, node, config);
                            $("#loading-overlay,#loading").hide();// close spin
                        }, 50);
                    },
                    exportOptions: {
                        columns: [0,1,3,5,7,9,11,12,13,15,16,17]
                    },
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    alignment: 'center',
                    styles: {
                        tableHeader: {
                            alignment: 'center'
                        }
                    },
                    // pageBreakBefore: function(currentNode, nodesObject) {
                    //     console.log(nodesObject.getFollowingNodesOnPage());
                    //     console.log(nodesObject.getNodesOnNextPage());
                    //     console.log(nodesObject.getPreviousNodesOnPage());
                    // },
                    customize: function(doc) {
                        doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
                        doc.defaultStyle.alignment = 'center';
                        doc.defaultStyle.fontSize = 9;
                        //doc.defaultStyle.width = "auto";
                        doc.content[1].table.widths = [ 'auto', '*', '*', '*', '*', 'auto', '*', '*', '*', 'auto', '*', '*' ]
                            doc.defaultStyle.height = 30;
                        // doc.styles.tableHeader.fontSize = 9;
                        doc.styles.tableHeader.fillColor = '#fbca35';
                        // doc.styles.tableBodyOdd.fillColor = 'blue';
                        doc.styles.tableBodyEven.fillColor = '#fde6a2';
                        //doc.defaultStyle.fillColor  = 'red';
                        // let price = doc.table.column(1).data().toArray();
                        // for (let i = 0; i < price.length; i++) {
                        //     if (price[i] == "") {
                        //         doc.content[1].table.body[i+1][3].backgroundColor = 'blue';
                        //     }
                        // }
                        let rowCount = doc.content[1].table.body.length;
                        let columnCount = doc.content[1].table.body[1].length;
                        let subtitle = doc.content[1].table.body[1];
                        let counter = 0;
                        //headerText[1] = 'gddfgfd';

                        for (let i = 1; i < rowCount; i++) {
                            counter++;
                            //doc.content[0].table.body.fillColor[i] = 'red';
                            // console.log(doc.content[1].table.body[i]);
                            // console.log(doc.content[1].table.body[i].length);
                            // console.log(doc.content[1].positions);
                            // if (doc.content[1].positions[i].pageNumber > pageNumber && i > 1) {
                            //     doc.content[1].table.body.splice(1, 0, headerText);
                            //     pageNumber++;
                            // }
                            if (doc.content[1].table.body[i][1].text == "" || counter == 27 && i > 28 || counter == 28) {
                                if (doc.content[1].table.body[i][1].text == "") {
                                    subtitle = doc.content[1].table.body[i];
                                    for (let j = 0; j < columnCount; j++) {
                                        doc.content[1].table.body[i][j].fillColor = '#f0ad4e';
                                        doc.content[1].table.body[i][j].fontSize = '16';
                                        doc.content[1].table.body[i][j].style = "tableHeader";
                                        // if (j != 0) {
                                        //     doc.content[1].table.body[i][j].hide = true;
                                        // }
                                    }
                                }
                                // else if (counter == 25) {
                                //     doc.content[1].table.body.splice(i, 0, subtitle);
                                //     //doc.content[1].table.body[i][0].text = headerText[0].text;
                                //     //console.log(doc.content[1].table.body[i]);
                                // }
                                // doc.content[1].table.body[i][6].text = doc.content[1].table.body[i][0].text;
                                if (i > 1) {
                                    for (let j = 0; j < columnCount; j++) {
                                        doc.content[1].table.body[i][j].pageBreak = 'before';
                                    }
                                    counter = 0;
                                }


                                // doc['header'] = (function(currentPage, pages) {
                                //     for (let t = 1; t < pages; t++) {
                                //         if (currentPage == t) {
                                //             console.log(headerText);
                                //             console.log(t);
                                //             return { text: headerText[t] }
                                //         }
                                //     }
                                // });
                            }
                        }

                        doc['footer'] = (function(page, pages) {
                            return {
                                columns: [
                                    {
                                        alignment: 'center',
                                        text: [
                                            { text: page.toString(), italics: true },
                                            ' of ',
                                            { text: pages.toString(), italics: true }
                                        ]
                                    }],
                                margin: [10, 0]
                            }
                        });
                    },
                },'print'],
                "language": {
                    "lengthMenu": "Afficher _MENU_ traitements par page",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoFiltered": "(Filtrat de _MAX_ entrées)",
                    "search": "Recherche",
                    "paginate": {
                        "first":      "Première",
                        "last":       "Dernière",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    }
                },
                "createdRow": function (row, data, index) {
                    // console.log(data);
                    // console.log(index);
                    // console.log(row);
                    if (data['prix'] == 'NULL' || data['prix'] == 'hide') {
                        data['prix'] = ''
                        $('td:eq(0)', row).attr('colspan', 6);
                        $('td:eq(0)', row).css('text-align', 'center');
                        // $('td:eq(1)', row).css('display', 'none');
                        $('td', row).eq(1).addClass("hidetd");
                        $('td', row).eq(2).addClass("hidetd");
                        $('td', row).eq(3).addClass("hidetd");
                        $('td', row).eq(4).addClass("hidetd");
                        $('td', row).eq(5).addClass("hidetd");
                        //$(row).addClass("hidetd");

                        $(row).addClass('sub_title')
                    }
                    else if (data['prix'] == 'hide') {
                        // data['prix'] = ''
                        // $('td:eq(0)', row).attr('colspan', 6);
                        // $('td:eq(0)', row).css('text-align', 'center');
                        // // $('td:eq(1)', row).css('display', 'none');
                        // $('td', row).eq(1).addClass("hidetd");
                        // $('td', row).eq(2).addClass("hidetd");
                        // $('td', row).eq(3).addClass("hidetd");
                        // $('td', row).eq(4).addClass("hidetd");
                        // $('td', row).eq(5).addClass("hidetd");
                        $(row).addClass("hidetd");

                        // $(row).addClass('sub_title')
                    }
                    //$('td', row).eq(3).addClass("hidetd");
                },
                "order": [[ 2, "asc" ]]
            });
            //console.log(table);
            table.on( 'buttons-processing', function ( e, indicator ) {
                if ( indicator ) {
                    console.log('exporting data');
                }
                else {
                    console.log('export complete');
                }
            } );
            //traitementTeinteActiveInactive();
        });
    }

    $('#tableCustomPrixTraitements').on( 'draw.dt', function () {
        addClickEventDesactivePrixTraitement();
    } );


    function addClickEventDesactivePrixTraitement() {
        $('.desactive_prix_traitement').click(function(e) {
            // e.stopPropagation();
            e.preventDefault() ;
        }) ;
        $('.desactive_prix_traitement').click(function () {
            var traitement = $(this).attr('rel').split('*');
            var lens_id = traitement[0];
            var traitement_id = traitement[1];
            desactiveTraitementPrice(lens_id, traitement_id);
        });
    }

    function addClickEventDesactivePrixTeinte() {
        $('.desactive_prix_teinte').click(function(e) {
            // e.stopPropagation();
            e.preventDefault() ;
        }) ;
        $('.desactive_prix_teinte').click(function () {
            var teinte = $(this).attr('rel').split('*');
            var lens_id = teinte[0];
            var teinte_id = teinte[1];
            desactiveTeintePrice(lens_id, teinte_id);
        });
    }

    function isLoading(text) {
        $("#text_loading").text(text) ;
        $("#loading-overlay,#loading").show();
    }

    function desactiveTraitementPrice (lens_id, traitement_id) {
        $.ajax({
            type: "POST",
            url: "/traitement/desactivePriceTraitement",
            data: {
                'user_id': <?php echo $info_user[0]->id_users ?>,
                'lens_id': lens_id,
                'traitement_id': traitement_id
            },
            dataType: "html",
            success: function(data){
                    //$('#tableCustomPrixTraitements').DataTable().clear();
                    getTraitementPriceList();
            }
        });
    }

    function getTeintePriceList() {
        let displayStart = $('#tableCustomPrixTeintes').DataTable().page.info().page * 10;
        $.ajax({
            type: "POST",
            url: "/teinte/getTeintePriceList",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>
            },
            dataType: "json",
        }).done( function(data) {
            $('#tableCustomPrixTeintes').dataTable( {
                "destroy": true,
                "aaData": data,
                "columns": [
                    { "data": "code" },
                    { "data": "verre" },
                    { "data": "teinte" },
                    { "data": "prix" },
                    { "data": "date" },
                    { "data": "action" }
                ],
                "displayStart" : displayStart,
                "createdRow": function (row, data, index) {
                    if (data['active'] == false) {
                        $(row).addClass('prix_teinte_inactive');
                    }
                    else {
                        $(row).addClass('prix_teinte_active');
                    }
                },
                "order": [[ 4, "desc" ]]
            })

            traitementTeinteActiveInactive();
        });
    }
    //function getTeintePriceListTest(displayStart = 0) {
    //    // $('#tableCustomPrixTeintesTest').DataTable().clear();
    //    $('#tableCustomPrixTeintesTest').DataTable( {
    //        "pageLength" : 10,
    //        "processing": true,
    //        "serverSide": true,
    //        'serverMethod': 'post',
    //        "retrieve" : true,
    //        "displayStart" : displayStart,
    //        // "destroy" : true,
    //        "ajax": {
    //            "url": "/teinte/getTeintePriceListTest",
    //            "data": {
    //                "user_id" : <?php //echo $info_user[0]->id_users ?>
    //            }
    //        },
    //        'columns': [
    //            { data: 'code' },
    //            { data: 'verre' },
    //            { data: 'prix' },
    //            { data: 'teinte' },
    //            { data: 'date' },
    //            { data: 'action' },
    //        ],
    //        "createdRow": function (row, data, index) {
    //            if (data['active'] == false) {
    //                $(row).addClass('prix_teinte_inactive');
    //            }
    //            else {
    //                $(row).addClass('prix_teinte_active');
    //            }
    //        },
    //    } );
    //}
    $('#tableCustomPrixTeintes').on( 'draw.dt', function () {
        addClickEventDesactivePrixTeinte();
    } );

    // $('#tableCustomPrixTeintesTest').on( 'draw.dt', function () {
    //     addClickEventDesactivePrixTeinte();
    // } );
    function desactiveTeintePrice (lens_id, teinte_id) {
        $.ajax({
            type: "POST",
            url: "/teinte/desactivePriceTeinte",
            data: {
                'user_id': <?php echo $info_user[0]->id_users ?>,
                'lens_id': lens_id,
                'teinte_id': teinte_id
            },
            dataType: "html",
            success: function(data){
                recreateDatatableTeinte();
            }
        });
    }
    function recreateDatatableTeinte() {
        // let displayStart = $('#tableCustomPrixTeintesTest').DataTable().page.info().page * 10;
        // $('#tableCustomPrixTeintes').DataTable().clear();
        // $('#tableCustomPrixTeintesTest').DataTable().clear();
        // $('#tableCustomPrixTeintesTest').DataTable().destroy();
        getTeintePriceList();
        // getTeintePriceListTest(displayStart);
    }
    $('body').on('click', '#btn_submit_prix_traitement', function(event){

        if($('#nouveau_prix_traitement').val() != "" && $('#listeVerres').val() != "")
        {
            var name_verre = $("#listeVerres option:selected").text();
            console.log(name_verre);
            $.ajax({
                type: "POST",
                url: "/traitement/setPriceTraitement",
                data: {
                    'user_id' : <?php echo $info_user[0]->id_users ?>,
                    'new_price' : $('#nouveau_prix_traitement').val(),
                    'lens_id' : $('#listeVerres').val(),
                    'name_verre' : name_verre,
                    'traitement_id': $('#listeTraitements').val()
                },
                dataType: "html",
                success: function(data){
                    if(data=="OK")
                    {
                        //$('#tableCustomPrixTraitements').DataTable().clear();
                        getTraitementPriceList();
                    }

                }

            });
        }

    });

    $('body').on('click', '#btn_submit_prix_teinte', function(event){

        if($('#nouveau_prix_teinte').val() != "" && $('#listeVerres').val() != "")
        {
            var name_verre = $("#listeVerres option:selected").text();
            console.log(name_verre);
            $.ajax({
                type: "POST",
                url: "/teinte/setPriceTeinte",
                data: {
                    'user_id' : <?php echo $info_user[0]->id_users ?>,
                   'new_price' : $('#nouveau_prix_teinte').val(),
                   'lens_id' : $('#listeVerres').val(),
                   'name_verre' : name_verre,
                   'teinte_id': $('#listeTeintes').val()
               },
               dataType: "html",
               success: function(data){
                   if(data=="OK")
                   {
                       recreateDatatableTeinte()
                   }

               }

            });
        }

    });

    $("#listeVerres").change(function() {
        var verre = $('#listeVerres').val();
        if (verre == "") {
            $('#choice_change_price').addClass('hide');
        } else {
            $('#choice_change_price').removeClass('hide');
        }

        $.ajax({
            type: "POST",
            url: "/traitement/getAllTraitementsWithPrice",
            data: {
                'user_id': <?php echo $info_user[0]->id_users ?>,
                'idLenses' : $('#listeVerres').val()
            },
            dataType: "json",
            success: function(data){
                if(data[0])
                {
                    $('#listeTraitements').empty();
                    $('#listeTraitements').append('<option value="">-- Choisir --</option>');
                    $('#divlisteTraitements').removeClass('hide');

                    //console.log(data);

                    $.each(data, function(key, value){
                        $('#listeTraitements').append('<option value="'+ value.id +'">'+ value.name +
                            ' (' + value.code +') Prix: ' + value.price + '</option>');
                    });

                }
                else
                {
                    $('#divlisteTraitements').addClass('hide');
                }
            }

        });

        $.ajax({
            type: "POST",
            url: "/teinte/getAllTeintesWithPrice",
            data: {
                'user_id': <?php echo $info_user[0]->id_users ?>,
                'idLenses' : $('#listeVerres').val()
            },
            dataType: "json",
            success: function(data){
                if(data[0])
                {
                    $('#listeTeintes').empty();
                    $('#listeTeintes').append('<option value="">-- Choisir --</option>');
                    $('#divlisteTeintes').removeClass('hide');

                    //console.log(data);

                    $.each(data, function(key, value){
                        if (key <= 1) {
                            $('#listeTeintes').append('<option value="'+ value.name +'">'+ value.name + '</option>');
                        }
                        else {
                            $('#listeTeintes').append('<option value="'+ value.id +'">'+ value.name +
                                ' (' + value.code +') Prix: ' + value.price + '</option>');
                        }
                    });

                }
                else
                {
                    $('#divlisteTeintes').addClass('hide');
                }
            }

        });

    });

    $("#listeTraitements").change(function() {
        if ($('#listeTraitements').val() != "") {
            $('#div_nouveau_prix_traitement').removeClass('hide');
        }
        else {
            $('#div_nouveau_prix_traitement').addClass('hide');
        }
    });

    $("#listeTeintes").change(function() {
        if ($('#listeTeintes').val() != "") {
            $('#div_nouveau_prix_teinte').removeClass('hide');
        }
        else {
            $('#div_nouveau_prix_teinte').addClass('hide');
        }
    });

    $('#checkboxActive').click(function(){
        traitementTeinteActiveInactive();
    });

    $('#nav-prix-verre').click(function(){
        $('#nav-history-verres').addClass('active');
        $('#modal-history-verres').addClass('active');
        $('#nav-history-traitements').removeClass('active');
        $('#modal-history-traitements').removeClass('active');
        $('#nav-history-teintes').removeClass('active');
        $('#modal-history-teintes').removeClass('active');
    });

    $('#nav-prix-traitement').click(function(){
        $('#nav-history-verres').removeClass('active');
        $('#modal-history-verres').removeClass('active');
        $('#nav-history-teintes').removeClass('active');
        $('#modal-history-teintes').removeClass('active');
        $('#nav-history-traitements').addClass('active');
        $('#modal-history-traitements').addClass('active');
    });

    $('#nav-prix-teinte').click(function(){
        $('#nav-history-verres').removeClass('active');
        $('#modal-history-verres').removeClass('active');
        $('#nav-history-traitements').removeClass('active');
        $('#modal-history-traitements').removeClass('active');
        $('#nav-history-teintes').addClass('active');
        $('#modal-history-teintes').addClass('active');
    });

    function traitementTeinteActiveInactive() {
        if ($('#checkboxActive').is(":checked") == false) {
            $('.prix_traitement_inactive').addClass('hide');
            $('.prix_teinte_inactive').addClass('hide');
        }
        else {
            $('.prix_traitement_inactive').removeClass('hide');
            $('.prix_teinte_inactive').removeClass('hide');
        }
    }
</script>

<style>
    div.dataTables_filter {
        text-align: center;
    }
</style>