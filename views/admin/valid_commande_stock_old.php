
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
	
    <!-- Here goes the content. -->
    <section id="content" class="container_12 clearfix">
		<form class="grid_12">
			<fieldset>
				<div class="row">
					<label for="f1_normal_input">
						<strong>Traitement : </strong>
					</label>
					<div>
						<div style="width:80px;float:left;">
							<input type="radio" value="all" name="option_traitement" id="option_traitement_all" checked>
							<label for="option_traitement_all">Tous</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="Blanc" name="option_traitement" id="option_traitement_blanc">
							<label for="option_traitement_blanc">Blanc</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="Durci" name="option_traitement" id="option_traitement_durci">
							<label for="option_traitement_durci">Durci</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="HMC" name="option_traitement" id="option_traitement_hmc">
							<label for="option_traitement_hmc">HMC</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="Satin" name="option_traitement" id="option_traitement_satin">
							<label for="option_traitement_satin">Satin</label>
						</div>
						<div style="width:130px;float:left;">
							<input type="radio" value="BlueCoat" name="option_traitement" id="option_traitement_blueCoat">
							<label for="option_blueCoat">BlueCoat</label>
						</div>
					</div>
				</div>
				<div class="row">
					<label for="f1_normal_input">
						<strong>Indice : </strong>
					</label>
					<div>
						<div style="width:80px;float:left;">
							<input type="radio" value="all" name="option_indice" id="option_indice_all" checked>
							<label for="option_indice_all">Tous</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="1.5" name="option_indice" id="option_indice_1_5">
							<label for="option_indice_1_5">1.5</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="1.591" name="option_indice" id="option_indice_1_5_9_1">
							<label for="option_indice_1_5_9_1">1.591</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="1.6" name="option_indice" id="option_indice_1_6">
							<label for="option_indice_1_6">1.6</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="1.67" name="option_indice" id="option_indice_1_6_7_AS">
							<label for="option_indice_1_6_7_AS">1.67</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="1.74" name="option_indice" id="option_indice_1_7_4_AS">
							<label for="option_indice_1_7_4_AS">1.74</label>
						</div>
					</div>
				</div>
				<div class="row">
					<label for="f1_normal_input">
						<strong>Photochromie : </strong>
					</label>
					<div>
						<div style="width:80px;float:left;">
							<input type="radio" value="all" name="option_photochromie" id="option_photochromie_all" checked>
							<label for="option_photochromie_all">Tous</label>
						</div>
						<div style="width:150px;float:left;">
							<input type="radio" value="Non Photocromique" name="option_photochromie" id="option_photochromie_non">
							<label for="option_photochromie_non">Non Photochromique</label>
						</div>
						<div style="width:130px;float:left;">
							<input type="radio" value="PhotoGrey" name="option_photochromie" id="option_photogrey">
							<label for="option_blueCoat">PhotoGrey</label>
						</div>
						<div style="width:130px;float:left;">
							<input type="radio" value="PhotoBrown" name="option_photochromie" id="option_photobrown">
							<label for="option_photoBrown">PhotoBrown</label>
						</div>
					</div>
				</div>
				<div class="row">
					<label for="f1_normal_input">
						<strong>Teinté : </strong>
					</label>
					<div>
						<div style="width:80px;float:left;">
							<input type="radio" value="all" name="option_teinte" id="option_teinte_all" checked>
							<label for="option_teinte_non">Tous</label>
						</div>
						<div style="width:100px;float:left;">
							<input type="radio" value="Non Teinté" name="option_teinte" id="option_teinte_non">
							<label for="option_teinte_non">Non Teinté</label>
						</div>
						<div style="width:100px;float:left;">
							<input type="radio" value="G15 C" name="option_teinte" id="option_teinte_g15c">
							<label for="option_teinte_g15c">G15 C</label>
						</div>
						<div style="width:100px;float:left;">
							<input type="radio" value="Gris C" name="option_teinte" id="option_teinte_gris_c">
							<label for="option_teinte_gris_c">Gris C</label>
						</div>
						<div style="width:100px;float:left;">
							<input type="radio" value="Brun C" name="option_teinte" id="option_teinte_brun_c">
							<label for="option_teinte_brun_c">Brun C</label>
						</div>
            <div style="width:100px;float:left;">
							<input type="radio" value="Bleu nuit C" name="option_teinte" id="option_bleu_nuit_c">
							<label for="option_teinte_brun_c">Bleu nuit C</label>
						</div>
					</div>
				</div>
				<div class="row">
					<label for="f1_normal_input">
						<strong>Diamètre : </strong>
					</label>
					<div>
						<div style="width:80px;float:left;">
							<input type="radio" value="all" name="option_diametre" id="option_diametre_non" checked>
							<label for="option_diametre_non">Tous</label>
						</div>
            <div style="width:80px;float:left;">
							<input type="radio" value="55" name="option_diametre" id="option_diametre_55">
							<label for="option_diametre_55">55</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="60" name="option_diametre" id="option_diametre_60">
							<label for="option_diametre_60">60</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="65" name="option_diametre" id="option_diametre_65">
							<label for="option_diametre_65">65</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="70" name="option_diametre" id="option_diametre_70">
							<label for="option_diametre_70">70</label>
						</div>
						<div style="width:80px;float:left;">
							<input type="radio" value="75" name="option_diametre" id="option_diametre_75">
							<label for="option_diametre_75">75</label>
						</div>
					</div>
				</div>
				<div class="row">
					<label for="f1_normal_input">
						<strong>Correction : </strong>
					</label>
					<div>
						<div style="width:150px;float:left;">
							<input type="text" value="" name="option_correction_sphere" id="option_correction_sphere" placeholder="Sphère">
						</div>
						<div style="width:150px;float:left;">
							<input type="text" value="" name="option_correction_cylindre" id="option_correction_cylindre" placeholder="Cylindre">
						</div>
					</div>
				</div>
			</fieldset><!-- End of fieldset -->
		</form>
		
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
							<th>Région</th>
                            <th>Référence Client</th>
							<th>Correction OD/OG</th>
							<th>Indice verre</th>
							<th>Traitement</th>
							<th>Diamètre</th>
							<th>Photocromie</th>
							<th>Teinte</th>
              <th>miroir/pola</th>
							<th>Tarif HT</th>
							<th>Bon livraison</th>
              <th>Expédier</th>
							<th>Supprimer</th>
							<th>Verre</th>
              <th>Pointage</th>
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
								"sAjaxSource" : "/admin/valid_commande_stock_ajax",
								"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
									if(aData[4] != "Ile-de-France")
										$('td:eq(4)', nRow).css({'background-color':'rgb(221, 85, 35)','color':'#fff'});
                    
                  if(aData[12] != ""){
                    $('td:eq(12)', nRow).css({'background-color':'rgb(249, 244, 111)','color':'#000'});
                  }
                 
									if(aData[19] > 1)
										$('td:eq(1)', nRow).css({'background-color':'rgba(255,0,0,0.5)','color':'#fff'});
                    
                  if(aData[20] == 1 )
                    $('td:eq(15)', nRow).css({'background-color':'#fdfd96','color':'#000'});
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
									{ "sName": "commande"},
									{ "sName": "reference_optimize"},
									{ "sName": "numero_bl"},
									{ "sName": "date_commande"},
									{ "sName": "region"},
									{ "sName": "reference"},
									{ "sName": "Correction"},
									{ "sName": "indice_verre"},
									{ "sName": "traitement"},
									{ "sName": "diametre"},
									{ "sName": "photocromie"},
									{ "sName": "teinte"},
                  { "sName": "miroir_pola"},
									{ "sName": "tarif_ht"},
									{ "sName": "bon_livraison"},
									{ "sName": "expedier"},
									{ "sName": "supprimer"},
									{ "sName": "verre"},
                  { "sName": "pointage"},
									
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
			
			function eventFiltreCommandeVerreStock(){
				var data ="?";
				
				if($("input[name=option_traitement]:checked").val() != "all")
					data += "traitement="+$("input[name=option_traitement]:checked").val()+"&";
				
				if($("input[name=option_indice]:checked").val() != "all")
					data += "indice="+$("input[name=option_indice]:checked").val()+"&";
				
				if($("input[name=option_photochromie]:checked").val() != "all")
					data += "photochromie="+$("input[name=option_photochromie]:checked").val()+"&";
				
				if($("input[name=option_teinte]:checked").val() != "all")
					data += "teinte="+$("input[name=option_teinte]:checked").val()+"&";
				
				if($("input[name=option_diametre]:checked").val() != "all")
					data += "diametre="+$("input[name=option_diametre]:checked").val()+"&";
				
				if($("input[name=option_correction_sphere]").val() != "")
					data += "sphere="+$("input[name=option_correction_sphere]").val()+"&";
					
				if($("input[name=option_correction_cylindre]").val() != "")
					data += "cylindre="+$("input[name=option_correction_cylindre]").val();
			
				table.dataTable().fnReloadAjax("/admin/valid_commande_stock_ajax"+data);
			}
			$("#content").on("change","input[name=option_traitement]:radio,input[name=option_indice]:radio,input[name=option_photochromie]:radio,input[name=option_teinte]:radio,input[name=option_diametre]:radio",function(e) {
				eventFiltreCommandeVerreStock();	
            });
			
			$("#content").on("keyup","input[name=option_correction_cylindre],input[name=option_correction_sphere]",function(){
				eventFiltreCommandeVerreStock();
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
        </script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>