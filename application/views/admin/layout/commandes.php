<div id="edit-bl" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="form_modif_bl">

                <input type="hidden" name="is_lens" id="is_lens" value="0" />
                <input type="hidden" name="id_nouvelle_date_bl" id="id_nouvelle_date_bl" value="" />
                <input type="hidden" name="id_users_nouveau_bl" id="id_users_nouveau_bl" value="" />


                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Modifier l'intitulé</h4>
                </div>

                <div class="modal-body">
                    <p class="bl-comment"></p>

                    <div class="form-group">
                        <label for="date_bl">Nouvelle date</label>
                        <input type="text" name="date_bl" id="date_bl" class="form-control" data-mask="99/99/9999" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Modifier</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="edit-seconde_paire_omega" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="form_seconde_paire_omega">
           
        		<input type="hidden" name="id_commande_seconde_paire_omega" id="id_commande_seconde_paire_omega" value="" />
                <input type="hidden" name="id_user_seconde_paire_omega" id="id_user_seconde_paire_omega" value="" />

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Seconde Paire Omega</h4>
                </div>

                <div class="modal-body">
                    <p class="bl-comment"></p>

                    <div class="form-group">
                        <label for="ref_seconde_omega">Reference de la seconde paire:</label>
                        <input type="text" name="ref_seconde_omega" id="ref_seconde_omega" class="form-control" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">OK</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="edit-commentaire_omega" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="form_commentaire_omega">
        
        		<input type="hidden" name="id_commande_commentaire_omega" id="id_commande_commentaire_omega" value="" />
                <input type="hidden" name="id_user_commentaire_omega" id="id_user_commentaire_omega" value="" />

        
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Commentaire Omega</h4>
                </div>

                <div class="modal-body">
                    <p class="bl-comment"></p>

                    <div class="form-group">
                        <label for="commentaire_omega">Saisir le commentaire pour Omega:</label>
                        <input type="text" name="commentaire_omega" id="commentaire_omega" class="form-control" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">OK</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="compare-commandes" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>

<div id="detail-commande-lentilles" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>

<div id="detail-commande-montures" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>

<div id="detail-commande" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>


<div id="envoi-commande" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 720px;">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Envoi des commandes</h4>
            </div>

            <div class="modal-body">
                <strong>Voulez-vous vraiment envoyer les commandes de fabrication ?</strong>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                <button id="envoi_commande" class="btn btn-warning waves-effect waves-light">Envoyer les commandes</button>
            </div>

        </div>
    </div>
</div>


<div id="etiquettes-fabrication" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="generation_etiquettes">

                <input type="hidden" id="type_etiquettes" value="" />

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Générer étiquettes de fabrication</h4>
                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="colonne">Colonne</label>
                                <input type="number" name="colonne" id="colonne" class="form-control" value="1" />
                            </div>

                            <div class="col-sm-6">
                                <label for="ligne">Ligne</label>
                                <input type="number" name="ligne" id="ligne" class="form-control" value="1" />
                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">Générer</button>
                </div>

            </form>
        </div>
    </div>
</div>

<div id="modal_check_commandes_pointees" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 95%; max-width: 400px;">
        <div class="modal-content">
            <form id="submit_check_commandes_pointees">

<!--                <input type="hidden" id="type_etiquettes_auto" value="" />-->

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="custom-width-modalLabel">Checker les commandes pointées</h4>
                </div>

                <div class="modal-body">

                    <div class="panel-body" style="padding-top: 15px">
                        <div>
                            Êtes-vous sûr de vouloir checker les commandes pointées?
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Checker</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
	$(document).on('click', '#envoi_commande_omega', function() {
		var titre_commande = 'Envoi des commandes checkées chez Omega';
        var texte_commande = 'ATTENTION ! En cliquant sur oui vous allez envoyer les commandes checkées directement sur le FTP d\'Omega.';
        
        swal({
            title: titre_commande,
            text: texte_commande,
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {
					$.ajax({
                        type: "POST",
                        url: "/admin/send_to_omega",
                        data : "",
                        success: function(data){

                            swal({
                                type: 'success',
                                title: "Effectué",
                                text: "Les commandes ont bien été envoyées à Omega.",
                                timer: 2000,
                                showConfirmButton: false
                            });
                            window.location.replace("/admin/edi_omega");
 
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            swal({
                                tyoe: 'error',
                                title: "Erreur",
                                text: "Une erreur est survenue lors l'envoi à Omega.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                        }
                    });
                }
            });
	});
	
	
	$(document).on('click', '#regenerer_certif', function() {
		var order_id = $(this).attr('rel');

        swal({
            title: "Regenerer certificat",
            text: "Voulez-vous regenerer le cerificat de la commande N°"+order_id+" ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {

                    $('#detail-commande').modal('hide');

                    $.ajax({
                        type: "POST",
                        url: "/admin/regenerer_certif",
                        data : "id_commande="+order_id,
                        success: function(data){
							swal({
                                type: 'success',
                                title: "Effectué",
                                text: "Le certif a bien été genere.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                            $('#detail-commande').modal('hide');
                            $('.modal-backdrop').hide();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            swal({
                                tyoe: 'error',
                                title: "Erreur",
                                text: "Une erreur est survenue lors de la regeneration.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                        }
                    });
                }
                else
                {
                       
                            $('#detail-commande').modal('hide');
                            $('.modal-backdrop').hide();
                            
                }
            });
	});
	
    $(document).on('click', '#envoi_commande_journaliere', function() {

        var type_commande = $(this).attr('rel');

        var titre_commande = '-';
        var texte_commande = '-';

        if(type_commande == 1) {
            titre_commande = 'Liste pour passer commande';
            texte_commande = 'En cliquant sur oui vous allez générer la liste pour passer la commande des verres de fabrication.';
        }
        else if(type_commande == 3) {
            titre_commande = 'Liste pour passer commande';
            texte_commande = 'En cliquant sur oui vous allez générer la liste pour passer la commande des lentilles.';
        }
		else if(type_commande == 4) {
            titre_commande = 'Liste pour passer commande';
            texte_commande = 'En cliquant sur oui vous allez générer la liste pour passer la commande des montures.';
        }
        else {
            titre_commande = 'Liste des verres de stock';
            texte_commande = 'En cliquant sur oui vous allez générer la liste des verres de stock dans le même ordre que vos étiquettes.';
        }

        swal({
            title: titre_commande,
            text: texte_commande,
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {
					if(type_commande == 4)
					{
							//$('input:checkbox').prop('checked', this.checked);
						var checkboxes = $("#datatable_wrapper").find(':checkbox');
						
						checkboxes.prop('checked', true);
						checkboxes.each(function () {
           

							var order = $(this).data('order');
							var check = $(this).is(':checked');

							$.ajax({
								type: "POST",
								url: "/admin/montures_check",
								data: {
									'order' : order,
									'check' : check
								}
							}).done(function(res) {
							console.log(res);
								if(res == 'error') {
									//alert('Une erreur est survenue');
								}
								else {

									$('#expedier_montures').find('b').text(res);

								}
							});
						});
						
						
						var	path = 'generer_etiquette_montures';
						
					//	e.preventDefault();
						$.post('/admin/'+path, $(this).serialize(), function(data) {

console.log(data);
								if (data == 'sent') {
									swal({
										title: "Etiquettes ont été générées",
										text: "Les étiquettes vous ont été transmises par email.",
										type: "success",
										showCancelButton: false,
										showConfirmButton: false,
										timer: 2000,
									});
								}
								else if (data == 'empty') {
									swal({
										title: "Aucune étiquette",
										text: "Aucune étiquette à envoyer",
										type: "warning",
										showCancelButton: false,
										showConfirmButton: false,
										timer: 2000,
									});
								}
								else {
									swal({
										title: "Une erreur est survenue",
										text: "Rafraichissez la page et recommencez..",
										type: "error",
										showCancelButton: false,
										showConfirmButton: false,
										timer: 2000,
									});
								}
						});
						
					}
					else
					{
						$.ajax({
							type: "POST",
							url: "/cron/generation_pdf_commande_journaliere/1/"+type_commande,
							success: function(data){
								if(data == "no_order")

									swal({
										title: "Pas de commande",
										text: "Il n'y a aucune nouvelle commande à envoyer",
										type: "error",
										showCancelButton: false,
										showConfirmButton: false,
										timer: 3000,
									});

								else{

									swal({
										title: "Commandes envoyées",
										text: "Les dernières commandes ont bien été envoyées",
										type: "success",
										showCancelButton: false,
										showConfirmButton: false,
										timer: 3000,
									});

								}
							}
						});
					}

                }
            });
        
        
    });

    $('#form_modif_bl').on('submit', function(e) {
        let commande_id = $('#id_nouvelle_date_bl').val();
        let user_id = $('#id_users_nouveau_bl').val();
        $('#edit-bl').modal('hide');
        $('#button_nouvel_intitule_' + commande_id + '_' + user_id).addClass('hide')
        e.preventDefault();
        $.post('/admin/update_bl', $(this).serialize(), function(data) {

            // console.log(data);
           if(data == 'sent' || data == '<pre>sent') {
               swal({
                   title: "Bon mis à jour",
                   text: "Le bon a été mis à jour et envoyé au client.",
                   type: "success",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 500,
               });


               // setTimeout(function() { window.location.reload() }, 2000);
           }
            else {
               swal({
                   title: "Une erreur est survenue",
                   text: "Rafraichissez la page et recommencez..",
                   type: "error",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
           }
        });

    });
    
    $('#form_seconde_paire_omega').on('submit', function(e) {

        e.preventDefault();
        $.post('/admin/update_seconde_paire_omega', $(this).serialize(), function(data) {

            $('#edit-seconde_paire_omega').modal('hide');

           if(data == 'sent') {
               swal({
                   title: "Seconde paire Omega",
                   text: "Le fichier XML pour Omega a bien ete mis a jour avec la nouvelle seconde paire.",
                   type: "success",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
               setTimeout(function() { 
					var id_commande = $('#id_commande_seconde_paire_omega').val();
					var id_user = $('#id_user_seconde_paire_omega').val();
					window.location.replace("/admin/edi_omega?id=button_commentaires_omega_"+id_commande+"_"+id_user);

			   }, 2000);
           }
            else {
               swal({
                   title: "Une erreur est survenue",
                   text: "Rafraichissez la page et recommencez..",
                   type: "error",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
           }
        });

    });
    
    $('#form_commentaire_omega').on('submit', function(e) {

        e.preventDefault();
        $.post('/admin/update_commentaire_omega', $(this).serialize(), function(data) {

            $('#edit-commentaire_omega').modal('hide');

           if(data == 'sent') {
               swal({
                   title: "Commentaire Omega",
                   text: "Le fichier XML pour Omega a bien ete mis a jour avec le nouveau commentaire.",
                   type: "success",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
               setTimeout(function() { 
			        var id_commande = $('#id_commande_commentaire_omega').val();
					var id_user = $('#id_user_commentaire_omega').val();
				window.location.replace("/admin/edi_omega?id=button_commentaires_omega_"+id_commande+"_"+id_user); }, 2000);
           }
            else {
               swal({
                   title: "Une erreur est survenue",
                   text: "Rafraichissez la page et recommencez..",
                   type: "error",
                   showCancelButton: false,
                   showConfirmButton: false,
                   timer: 2000,
               });
           }
        });

    });


    $(document).on('click', '.generer_etiquettes', function() {
        $('#type_etiquettes').val($(this).attr('rel'));
    });

    $(document).on('click', '.check_commandes_pointees', function() {
        $('#type_etiquettes').val($(this).attr('rel'));
    });

    $('#generation_etiquettes').on('submit', function(e) {

        var type_generation = $('#type_etiquettes').val();
        var path = '';

        if(type_generation == 1) {
            path = 'generer_etiquette_fabrication';
        }
        else if(type_generation == 2) {
            path = 'generer_etiquette';
        }


        e.preventDefault();
        $.post('/admin/'+path, $(this).serialize(), function(data) {

            $('#etiquettes-fabrication').modal('hide');
            
            //console.log("Data:");
            //console.log(data);

               // if (data == 'sent') {
               if(data.indexOf("sent") >= 0){
                    swal({
                        title: "Etiquettes envoyées",
                        text: "Les étiquettes vous ont été transmises par email.",
                        type: "success",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
                else if(data.indexOf("empty") >= 0){ //if (data == 'empty') {
                    swal({
                        title: "Aucune étiquette",
                        text: "Aucune étiquette à envoyer",
                        type: "warning",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
                else {
                    swal({
                        title: "Une erreur est survenue",
                        text: "Rafraichissez la page et recommencez..",
                        type: "error",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
        });

    });

    // $(document).on('click', '.generer_etiquettes_auto', function() {
    //     $('#type_etiquettes_auto').val($(this).attr('rel'));
    // });

    $('#submit_check_commandes_pointees').on('submit', function(e) {

        var type_generation = $('#type_etiquettes').val();
        var path = '';

        if(type_generation == 1) {
            path = 'check_etiquette_fabrication_auto';
        }
        else if(type_generation == 2) {
            path = 'check_etiquette_stock_auto';
        }


        e.preventDefault();
        $.post('/admin/'+path, $(this).serialize(), function(data) {

            $('#modal_check_commandes_pointees').modal('hide');

            //console.log("Data:");
            //console.log(data);

            // if (data == 'sent') {

            if(data.indexOf("empty") >= 0){ //if (data == 'empty') {
                swal({
                    title: "Aucune commandes pointées",
                    text: "Aucune commandes à checker",
                    type: "warning",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
            }
            else if(data){
                let dataJson = JSON.parse(data);
                let commande;
                let x;
                let i;
                console.log(dataJson);
                for (let index = 0; index < dataJson.length; ++index) {
                    console.log(dataJson[index])
                    commande = dataJson[index];
                    x = document.querySelectorAll('[data-commande="' + commande + '"]');
                    console.log(x)
                    for (i = 0; i < x.length; i++) {
                        x[i].classList.remove("btn-danger");
                        x[i].classList.add("btn-success");
                        x[i].classList.add("is_checked");
                    }
                }
                $.ajax({
                    type: "POST",
                    url: "/admin/get_update_commande",
                    success: function(data){
                        $('#expedier_commandes').find('b').text(data);
                    }
                });
                swal({
                    title: "Commande checkées",
                    text: "Les commandes pointées sont checkées.",
                    type: "success",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
            }
            else {
                swal({
                    title: "Une erreur est survenue",
                    text: "Rafraichissez la page et recommencez..",
                    type: "error",
                    showCancelButton: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
            }
        });

    });

    $(document).on('click', '.commande-info', function() {
       $.post('/admin/commande_details', { id: $(this).attr('rel') }, function(data) {
           $('#detail-commande').find('.modal-content').html(data);
       });
    });

    $(document).on('click', '.commande-lentilles-info', function() {
        $.post('/admin/commande_details_lentilles', { id: $(this).attr('rel') }, function(data) {
            $('#detail-commande-lentilles').find('.modal-content').html(data);
        });
    });
	
	 $(document).on('click', '.commande-montures-info', function() {
		
        $.post('/admin/commande_details_montures', { id: $(this).attr('rel') }, function(data) {
            $('#detail-commande-montures').find('.modal-content').html(data);
        });
		 
    });

    $(document).on('click', '.delete-order', function() {

        var order_id = $(this).attr('rel');

        swal({
            title: "Etes-vous sûr ?",
            text: "Voulez-vous vraiment supprimer la commande N°"+order_id+" ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {

                    $('#detail-commande').modal('hide');

                    $.ajax({
                        type: "POST",
                        url: "/admin/delete_order",
                        data : "id_commande="+order_id,
                        success: function(data){

                            swal({
                                type: 'success',
                                title: "Effectué",
                                text: "La commande a bien été supprimée.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                            $('.content').find('.commande-info[rel='+order_id+']').closest('tr').fadeOut(80);
                            $('.content').find('.commande-lentilles-info[rel='+order_id+']').closest('tr').fadeOut(80);
							$('.content').find('.commande-montures-info[rel='+order_id+']').closest('tr').fadeOut(80);
                            $('#detail-commande-lentilles').modal('hide');
							$('#detail-commande-montures').modal('hide');
                            $('#detail-commande').modal('hide');

                            
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            swal({
                                tyoe: 'error',
                                title: "Erreur",
                                text: "Une erreur est survenue lors de la suppression.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                        }
                    });
                }
            });



    });

    $(document).on("click","a[id^=button_nouvel_intitule_]",function(e) {

        if($(this).closest('tr').find('.commande-info').length > 0) {
            var commentaire = $(this).closest('tr').find('.commande-info').attr('original-title');
        }

        if($(this).closest('tr').find('.commande-lentilles-info').length > 0) {
            var commentaire = $(this).closest('tr').find('.commande-lentilles-info').attr('original-title');
        }
		
		if($(this).closest('tr').find('.commande-montures-info').length > 0) {
            var commentaire = $(this).closest('tr').find('.commande-montures-info').attr('original-title');
        }


        $("#edit-bl .bl-comment").html(commentaire);

        if($(this).attr('rel') == 'lens') {
            $('#is_lens').val(1);
            $('.lens_hidden').hide();
            $('.only_lens').show();
        }
		else if($(this).attr('rel') == 'montures') {
            $('#is_montures').val(1);
            $('.montures_hidden').hide();
            $('.only_montures').show();
        }
        else {
            $('#is_lens').val(0);
            $('.lens_hidden').show();
            $('.only_lens').hide();
        }

        $("#id_nouvelle_date_bl").val($(this).attr('id').split('_')[3]);
        $("#id_users_nouveau_bl").val($(this).attr('id').split('_')[4]);

        $("#date_bl").datepicker({
            language: 'fr',
            format: 'dd/mm/yyyy'
        });

        $('input[name=type_optique]').on('change', function() {

            var elem = $(this);

            if(elem.val() == 'lentille') {
                $('.only_lentilles').fadeIn(60);
            }
            else {
                $('.only_lentilles').fadeOut(60);
            }
        });

    });
    
    $(document).on("click","a[id^=button_seconde_paire_omega_]",function(e) {

        $("#id_commande_seconde_paire_omega").val($(this).attr('id').split('_')[4]);
        $("#id_user_seconde_paire_omega").val($(this).attr('id').split('_')[5]);
        
      //  $("#ref_seconde_omega").val("");

    });
    
    $(document).on("click","a[id^=button_commentaires_omega_]",function(e) {

        $("#id_commande_commentaire_omega").val($(this).attr('id').split('_')[3]);
        $("#id_user_commentaire_omega").val($(this).attr('id').split('_')[4]);
        
      //  $("#commentaire_omega").val("");
        
      //  console.log($(this).attr('id').split('_')[3]);
      //  console.log($(this).attr('id').split('_')[4]);

    });
    
    $(document).on("click","input[name^=edi]",function(e) {
        var input = $(this);
        var edi = input.is(':checked') ? 1 : 0;
        var type = input.is(':checked') ? 'ajout' : 'retirer';
        var id_commande = input.attr('name').split('_')[1];

        $.ajax({
            type: "POST",
            url: "/admin/edi",
            data : "id_commande="+id_commande+"&edi="+edi,
            success: function(data){
               
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus+" "+errorThrown);
            }
        });

        if(input.is(':checked')){
            input.prop('checked',true);
        }else{
            input.prop('checked',false);
        }
    });
    

    $(document).on("click","input[name^=pointage]",function(e) {
        var input = $(this);
        var pointage = input.is(':checked') ? 1 : 0;
        var type = input.is(':checked') ? 'ajout' : 'retirer';
        var id_commande = input.attr('name').split('_')[1];

        $.ajax({
            type: "POST",
            url: "/admin/pointage",
            data : "id_commande="+id_commande+"&pointage="+pointage,
            success: function(data){
                $("#message_"+type).fadeIn().delay(1000).fadeOut();
                if(pointage == 1){
                    $("#pointage_date_"+id_commande).text(data);
                }else
                    $("#pointage_date_"+id_commande).text('');

                $.ajax({
                    type: "POST",
                    url: "/admin/get_pointage_count",
                    success: function(data){
                        $('#check_pointage').find('b').text(data);
                    }
                });

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus+" "+errorThrown);
            }
        });

        if(input.is(':checked')){
            input.prop('checked',true);
        }else{
            input.prop('checked',false);
        }
    });

    $(document).on("click","input[name^=expedier_]",function(e) {

        var el = $(this);

        if($(this).is(':checked')){
            var id_commande = $(this).attr('name').split('_')[1], id_user = $(this).attr('name').split('_')[2];

            $.ajax({
                type: "POST",
                url: "/admin/update_commande",
                data : "id_commande="+id_commande+"&id_etat_commande=6&id_users="+id_user,
                success: function(data){
                    el.closest('tr').fadeOut(100);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(textStatus+" "+errorThrown);
                }
            });
            $(this).prop('checked',true);
        }else
            $(this).prop('checked',false);
    });

    $(document).on("click","table .compare_commande",function(){
        $.ajax({
            type: "POST",
            url: '/admin/compareCommande/'+$(this).attr('rel'),
            success: function(data){
                $("#compare-commandes").find('.modal-content').html(data);
            }
        });

        return false;
    });
</script>
