
<?php include_once('header.php'); ?>
<body>

<!-- ----------------- -->
<!-- Some dialogs etc. -->

<?php include_once('content.php'); ?>

<!--  End of Add Client Example Dialog -->

<?php include_once('message.php'); ?>

<!--------------------------------->
<!-- Now, the page itself begins -->
<!--------------------------------->

<?php

include_once('toolbar.php');

include_once('header_bottom.php');

?>

<!-- The container of the sidebar and content box -->
<div role="main" id="main" class="container_12 clearfix">

<?php

include_once('toolbar_stripe.php');

include_once('menu.php');

?>

	<div id="compare_commande" title="Comparaison des commandes" style="display:none"></div>

    <section id="content" class="container_12 clearfix">

		<div class="actions_holder">

			<a class="button" id="expedier_commandes">Expedier toutes les commandes checkées (<b></b>)</a>

			<script>

				$(document).ready(function() {

					$.ajax({
						type: "POST",
						url: "/admin/get_update_commande",
						success: function(data){
							$('#expedier_commandes').find('b').text(data);
						}
					});

					$('#expedier_commandes').on('click', function() {

						var btn_exp = $(this);

						if(btn_exp.hasClass('ready')) {
							$.ajax({
								type: "POST",
								url: "/admin/expedier_commandes",
								success: function(data){
									btn_exp.removeClass('ready');
									if(data == 'sent') {
										window.location.reload();
									}
								}
							});
						}
						else {
							btn_exp.addClass('ready');

						}

					});

				});


			</script>
		</div>

        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Validation des commandes</h2>
                </div>
                <div class="content">
                    <div class="tabletools">
                        <div class="left">
                            <div class="alert success sticky" style="display:none" id="message_valider">
                                <span class="icon"></span>
                                <strong>Commande validée</strong>
                            </div>
                            <div class="alert error sticky" style="display:none" id="message_non_valider">
                                <span class="icon"></span>
                                <strong>Une erreur est survenue</strong>
                            </div>
							<div class="alert success sticky" style="display:none" id="message_ajout">
                                <span class="icon"></span>
                                <strong>Pointage ajouté</strong>
                            </div>
							<div class="alert success sticky" style="display:none" id="message_retirer">
                                <span class="icon"></span>
                                <strong>Pointage retiré</strong>
                            </div>
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <table id="tab" class="styled">
                        <thead>
                        <tr>
                            <th>Voir la commande</th>
							<th>Référence optieyes</th>
							<th>Numéro BL</th>
                            <th>Date</th>
                            <th>Référence Client</th>
                            <th>Etat</th>
							<th>Tarif HT</th>
							<th>Bon de livraison</th>
                            <th>Expédier</th>
							<th>Supprimer</th>
							<th>Pointage</th>
              <th>Verre</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End of .grid_4 -->

        <script>
			var table,isRechargeable = true;
			
			$$.ready(function(){


				$("#compare_commande").dialog({
					autoOpen: false,
					modal: true,
					resizable: false,
					width: 800,
					show: {
						effect: "blind",
						duration: 200
					},
					hide: {
						effect: "blind",
						duration: 200
					}
				});

				var loading = '<img src="/static/img/elements/loading/spinner.gif" style="width: 32px;height: 32px;" /> Chargement...';

				$("#content").on("click","table .compare_commande",function(){
					$.ajax({
						type: "POST",
						url: '/admin/compareCommande/'+$(this).attr('rel'),
						beforeSend: function(){
							$("#compare_commande").dialog("open");
							$("#compare_commande").empty().append(loading);
						},
						success: function(data){
							$("#compare_commande").empty().append(data);
						}
					});

					return false;
				});


				table = $('#tab').table({
							tableTools: {
								display: true
							},
							lang:{
								"SHOW_ENTRIES" : "<?php echo $parametre_lang_datable['SHOW_ENTRIES']; ?>", 
								"SEARCH": "<?php echo $parametre_lang_datable['SEARCH']; ?>"
							},
							filterBar:'always',
							dataTable: {
								"bProcessing": true,
								"bAutoWidth": false,
								"sAjaxSource" : "/admin/valid_commande_ajax",
								"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
									if(aData[12] > 1)
										$('td:eq(1)', nRow).css({'background-color':'rgba(255,0,0,0.5)','color':'#fff'});
                    
                  if(aData[13] == 1)
										$('td:eq(8)', nRow).css({'background-color':'#fdfd96','color':'#000'});
								},
								"aaSorting" : [ [0, "desc"] ],
								"aoColumnDefs" : [{ 
									"sClass": "center", 
									"aTargets": [ "_all" ]							
								}],
								"fnDrawCallback": function( oSettings ) {
									$$.registry.tooltips();
								},
								"aoColumns": [
									{ "sName": "commande", "aTargets": [ 0 ]},
									{ "sName": "reference_optimize", "aTargets": [ 1 ]},
									{ "sName": "numero_bl", "aTargets": [ 2 ]},
									{ "sName": "date_commande", "aTargets": [ 3 ]},
									{ "sName": "reference", "aTargets": [ 4 ]},
									{ "sName": "etat", "aTargets": [ 5 ]},
									{ "sName": "etat", "tarif_ht": [ 6 ]},
									{ "sName": "bon_livraison", "aTargets": [ 7 ]},
									{ "sName": "expedier", "aTargets": [ 8 ]},
									{ "sName": "supprimer", "aTargets": [ 9 ]},
									{ "sName": "pointage", "aTargets": [ 10 ]},
                  { "sName": "verre", "aTargets": [ 11 ]}
								],
								"oLanguage" : { 
									"sProcessing" : "Chargement...", 
									"sEmptyTable": "<?php echo $parametre_lang_datable['sEmptyTable']; ?>", 
									"oPaginate" : { 
										"sLast" : "<?php echo $parametre_lang_datable['sLast']; ?>", 
										"sFirst" : "<?php echo $parametre_lang_datable['sFirst']; ?>"
									}, 
									"sInfoEmpty" : "<?php echo $parametre_lang_datable['sInfoEmpty']; ?>", 
									"sInfo": "<?php echo $parametre_lang_datable['sInfo']; ?>", 
									"sInfoFiltered" : "<?php echo $parametre_lang_datable['sInfoFiltered']; ?>", 
									"sZeroRecords" : "<?php echo $parametre_lang_datable['sZeroRecords']; ?>"
								}
							}
						});


				var select = '<div style="float:left;margin-left:50px">Numéro Magasin <select id="recherche_num_magasin">';
				select += '<option value="Tous">Tous</option>';

				for(var i = 2; i<= <?php echo $maxUser; ?>; i++)
					select += '<option value="'+i+'">'+i+'</option>';

				select += "</select> </div>";

				//$(".dataTables_filter").after(select);

			});
			
			$("#tab").on("click","a[id^=deleteOrder_]",function(){
				var a = $(this), id_order = a.attr("id").split("_")[1];
				if(confirm('Supprimer cette commande ?')){
                    $.ajax({
                        type: "POST",
                        url: "/admin/delete_order",
                        data : "id_commande="+id_order,
                        success: function(data){
						  table.dataTable().fnDeleteRow(a.closest('tr')[0]);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                          alert(textStatus+" "+errorThrown);
                        }
                    });
                }
                return false;
			});
			
            $("#tab").on("click","input[name^=expedier_]",function(e) {
                if($(this).is(':checked')){
                    var id_commande = $(this).attr('name').split('_')[1], id_user = $(this).attr('name').split('_')[2];
					
                    $.ajax({
                        type: "POST",
                        url: "/admin/update_commande",
                        data : "id_commande="+id_commande+"&id_etat_commande=6&id_users="+id_user,
                        success: function(data){
                            $("#message_valider").fadeIn().delay(1000).fadeOut();
                            $("#libelle_etat_commande_"+id_commande).text("Expédition le "+data+" (6/6)");
							$( "&nbsp;" ).insertAfter( $("#deleteOrder_"+id_commande) );
							$("#deleteOrder_"+id_commande).remove();
                        },
						error: function(jqXHR, textStatus, errorThrown) {
						  alert(textStatus+" "+errorThrown);
						}
                    });
					 $(this).prop('checked',true);
                }else
					 $(this).prop('checked',false);
            });
			
			$("#tab").on("click","input[name^=pointage]",function(e) {
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
							$("#pointage_date_"+id_commande).show();
						}else
							$("#pointage_date_"+id_commande).hide();
						
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
            
            $("#tab").on("click","input[name^=verre_droit],input[name^=verre_gauche]",function(e) {
				var supprimer = 1;

                if($(this).is(':checked')){
					supprimer = 0;
				}

				var id_commande = $(this).attr('name').split('_')[2];
				var cote = $(this).attr('name').split('_')[1];

				$.ajax({
					type: "POST",
					url: "/admin/ajouter_etiquette",
					data : "id_commande="+id_commande+"&cote="+cote+"&delete="+supprimer,
					error: function(jqXHR, textStatus, errorThrown) {
					  alert(textStatus+" "+errorThrown);
					}
				});
            });

			$("#tab").on("click",".valid_commande",function() {

				var supprimer = 1;

				if(!$(this).hasClass('is_checked')) {
					var supprimer = 0;
					$(this).addClass('is_checked');
				}
				else {
					$(this).removeClass('is_checked');
				}


				var cotes = {'d':'droit', 'g':'gauche'}
				var id_commande = $(this).data('commande');
				var verres = $(this).data('verres');
				
				var cote = verres.split('');
				var calls = cote.length;
				var i = 0;


				console.log(cotes[cote[i]]);
				console.log(supprimer);
				console.log(id_commande);

				function ajax_call() {
					$.ajax({
						type: "POST",
						url: "/admin/ajouter_etiquette",
						data : "id_commande="+id_commande+"&cote="+cotes[cote[i]]+"&delete="+supprimer,
						error: function(jqXHR, textStatus, errorThrown) {
							alert(textStatus+" "+errorThrown);
						},
						success: function (resp) {
							++i;
							if (i < calls) {
								ajax_call();
							}

							$.ajax({
								type: "POST",
								url: "/admin/get_update_commande",
								success: function(data){
									$('#expedier_commandes').find('b').text(data);
								}
							});


						}
					});

				};
				ajax_call();

			});

        </script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>