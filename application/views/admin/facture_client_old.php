
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

    <!-- Here goes the content. -->
    <section id="content" class="container_12 clearfix">
        <div style="text-align:center;width:100%;padding:0 20px;margin-left:auto;margin-right:auto;height:60px;">
          <div style="width:80px;float:left;">
            Mois
            <select name="mois_facture" id="mois_facture">
            <?php
                for($mois=1;$mois <= 12; $mois++){
                  $mois = $mois < 10 ? '0'.$mois : $mois;
                  echo '<option value="'.$mois.'" '.(date('m') == $mois ? "selected" : '').'>'.$mois.'</option>';
                }
            ?>
            </select>
          </div>
          <div style="width:100px;float:left;">
            Année
            <select name="annee_facture" id="annee_facture">
            <?php
                for($annee=2013;$annee <= date('Y'); $annee++)
                  echo '<option value="'.$annee.'" '.(date('Y') == $annee ? 'selected' : '').'>'.$annee.'</option>';
            ?>
          </select>
          </div>

            <div style="width:120px;float:left;margin-left:40px">
                Numéro magasin
                <select id="numero_magasin">
                    <option value=""></option>
                    <?php
                    for($user = 3;$user <= $maxUser;$user++){
                        echo '<option value="'.$user.'">'.$user.'</option>';
                    }
                    ?>
                </select>
            </div>

           <div style="width:150px;float:left;margin-left:50px;">
            Date de prélèvement
            <input type="text" id="date_bill" name="date_bill" class="maskDate" value="<?php echo date('d/m/Y'); ?>"/>
          </div>
          <div style="width:150px;float:left;margin-top:13px;">
            <a class="button grey" href="#" id="send_bill">Envoyer les factures</a>
          </div>
          
          <div style="width:230px;float:left;margin-top:13px;margin-left:50px;">
            <a class="button grey" href="" id="generate_all_bill" target="_blank">Générer toutes les factures du mois</a>
          </div>
        </div>
        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Factures clients</h2>
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
                            <th>Nom magasin</th>
                            <th>Nom société</th>
                            <th>Numéro magasin</th>
                            <th>Région</th>
                            <th>Mois</th>
                            <th>Montant HT</th>
                            <th>Montant HT Stock</th>
                            <th>Montant HT Fabrique</th>
                            <th>Tarif livraison</th>
                            <th>Détail facture</th>
                            <th>Remise facture</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End of .grid_4 -->

        <script>
			var table;
			
			$$.ready(function(){
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
								"sAjaxSource" : "/admin/facture_client_ajax/"+'<?php echo date('m-Y'); ?>',
								"aaSorting" : [ [0, "desc"] ],
								"aoColumnDefs" : [{ 
									"sClass": "center", 
									"aTargets": [ "_all" ]							
								}],
								"fnDrawCallback": function( oSettings ) {
									$$.registry.tooltips();
								},
								"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
									if(aData[12] == 2)
										$('td:eq(4)', nRow).css({'background-color':'rgb(221, 85, 35)','color':'#fff'});
                  else if(aData[12] == 3)
										$('td:eq(4)', nRow).css({'background-color':'rgb(32,178,170)','color':'#fff'});
								},
								"aoColumns": [
									{ "sName": "nom_magasin", "aTargets": [ 0 ]},
									{ "sName": "nom_societe", "aTargets": [ 1 ]},
									{ "sName": "numero_magasin", "aTargets": [ 2 ]},
									{ "sName": "region", "aTargets": [ 3 ]},
									{ "sName": "mois", "aTargets": [ 4 ]},
									{ "sName": "montant_ht", "aTargets": [ 5 ]},
									{ "sName": "montant_ht_stock", "aTargets": [ 6 ]},
									{ "sName": "montant_ht_fabrique", "aTargets": [ 7 ]},
                  { "sName": "tarif_livraison", "aTargets": [ 8 ]},
									{ "sName": "detail_facture", "aTargets": [ 9 ]},
									{ "sName": "remise_facture", "tarif_ht": [ 10 ]}
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


            $("#content").on("change", "#numero_magasin", function(){
                table.dataTable().fnReloadAjax("/admin/facture_client_ajax/<?php echo date('m-Y'); ?>/"+$(this).val());
            });

            $(document).on("click","a[id^=deleteRemise_]",function(e){
                var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];

                $("#date_delete_reduc_facture").val(date);
                $("#id_users_delete_reduc_facture").val(id_users);
                $("#totalFacture_delete_reduct_facture").val($("#totalFacture_"+date.split('-')[0]+"-"+date.split('-')[1]+"_"+id_users).text());

                $("#confirm_delete_reduc_facture").dialog("open");
				
				return false;
            });

            $("#content").on("click","a[id^=deleteReduction_]",function(e) {
                var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];

                $.ajax({
                    type: "POST",
                    url: "/admin/getListReduction",
                    data : "date_remise="+date+"&id_users="+id_users,
                    success: function(data){
                        $("#list_reduc_facture").empty().append(data);
                        $("#list_reduc_facture").dialog("open");
                    }
                });

                return false;
            });
            
            $("#content").on("change","#mois_facture,#annee_facture",function(){
              table.dataTable().fnReloadAjax("/admin/facture_client_ajax/"+$("#mois_facture").val()+"-"+$("#annee_facture").val());
              
              $("#generate_all_bill").attr('href', 'http://ns346386.ip-37-187-97.eu/optimize/pdf/factures_'+$("#annee_facture").val()+"_"+$("#mois_facture").val()+'.pdf');
            });
            
             $("#generate_all_bill").attr('href', 'http://ns346386.ip-37-187-97.eu/optimize/pdf/factures_'+$("#annee_facture").val()+"_"+$("#mois_facture").val()+'.pdf');

            $("#content").on("click","a[id^=openReduction_]",function(e) {
                var date = $(this).attr("id").split("_")[1], id_users = $(this).attr("id").split("_")[2];
				var annee = date.split("-")[0];
				var mois = date.split("-")[1] < 10 ? date.split("-")[1].substr(1,1) : date.split("-")[1];
				
				$("#form_reduc_facture #date_remise").datepicker( "option", "minDate", new Date(annee, mois-1 , 1));
				$("#form_reduc_facture #date_remise").datepicker( "option", "maxDate", new Date(annee, mois, 0));
                $("#date_reduc_facture").val(date);
                $("#reduc_facture #id_users").val(id_users);
                $("#totalFacture_reduct_facture").val($("#totalFacture_"+date+"_"+id_users).text());
                $("#reduc_facture").dialog("open");

                return false;
            });
            
            $("#send_bill").on("click", function(){
              if($("#date_bill").val() !=""){
                if(confirm('Envoyer les factures pour le '+$("#mois_facture").val()+"/"+$("#annee_facture").val()+' ?')){
                   $.ajax({
                    type: "POST",
                    url: "/admin/send_bill",
                    data:"mois="+$("#mois_facture").val()+"&annee="+$("#annee_facture").val()+"&date_bill="+$("#date_bill").val()
                   });
                 }
              }
              else{
                alert('Aucune date de prélèvement n\'est renseigné.');
              }
              return false;
            });
                     
        </script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>