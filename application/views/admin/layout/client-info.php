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
                        <li class="active">
                            <a href="#modal-prix-verres" data-toggle="tab" aria-expanded="false">
                                <span>Prix verres</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#modal-prix-traitements" data-toggle="tab" aria-expanded="false">
                                <span>Prix traitements</span>
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
                                <h5>Table des Prix modifiés</h5>
                                <table id="tableCustomPrixTraitements"
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
                        </div>
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
									
								})
								
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
    var table = $('#tableCustomPrixTraitements').DataTable({
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

    $.ajax({
		type: "POST",
		url: "/traitement/getCustomPriceList",
		data: {
			'user_id' : <?php echo $info_user[0]->id_users ?>
		},
		dataType: "json",
	}).done( function(data) {
		$('#tableCustomPrixTraitements').dataTable( {
			"destroy": true,
			"aaData": data,
			"columns": [
				{ "data": "code" },
				{ "data": "verre" },
				{ "data": "prix" },
				{ "data": "traitement" },
				{ "data": "action" }
			]
			})
		})

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
				console.log(data)
				//alert("HHHH");
				if(data[0])
				{
					$('#listeVerres').empty();
            		$('#listeVerres').append('<option value="">-- Choisir --</option>');
            		$('#divlisteVerres').removeClass('hide');
            		
					//console.log(data);
					
					$.each(data, function(key, value){
						$('#listeVerres').append('<option value="'+ value.code +'">'+ value.libelle + ' ('+value.prix+' &euro;)</option>');
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
					'code_verre' : $('#listeVerres').val(),
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
                    'code_verre' : $('#listeVerres').val(),
                    'name_verre' : name_verre,
                    'traitement_id': $('#listeTraitements').val()
                },
                dataType: "html",
                success: function(data){

                    if(data=="OK")
                    {
                        $('#nouveau_prix_traitement').val('');
                        $('#listeVerres').empty();
                        $('#listeVerres').append('<option value="">-- Choisir --</option>');

                        $('#divlisteVerres').addClass('hide');

                        $('#tableCustomPrixTraitements').DataTable().clear();
                        $.ajax({
                            type: "POST",
                            url: "/traitement/getCustomPriceList",
                            data: {
                                'user_id' : <?php echo $info_user[0]->id_users ?>
                            },
                            dataType: "json",
                        }).done( function(data) {
                            $('#tableCustomPrixTraitements').DataTable( {
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


    $("#listeVerres").change(function() {
        var verre = $('#listeVerres').val();
        if (verre == "") {
            $('#choice_change_price').addClass('hide');
        } else {
            $('#choice_change_price').removeClass('hide');
        }

        $.ajax({
            type: "POST",
            url: "/admin/getAllTraitementsWithPrice",
            data: {
                'idLenses' : $('#listeVerres').val()
            },
            dataType: "json",
            success: function(data){
                console.log(data);
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

    });

    $("#listeTraitements").change(function() {
        if ($('#listeTraitements').val() != "") {
            $('#div_nouveau_prix_traitement').removeClass('hide');
        }
        else {
            $('#div_nouveau_prix_traitement').addClass('hide');
        }
    });
</script>