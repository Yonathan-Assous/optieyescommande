
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
        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Anciennes commandes</h2>
                </div>
                <div class="content">
                    <div class="tabletools">
                        <div class="left">
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
                          <th>Numéro magasin</th>
                          <th>Nom magasin</th>
                          <th>Nom société</th>
                          <th>Référence optieyes</th>
                          <th>Date de commande</th>
                          <th>Date d'expedition</th>
                          <th>Délais moyen</th>
                          <th>Référence Client</th>
                          <th>Bon de livraison</th>
                          <th>Expédition</th>
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
						"bAutoWidth": false,
						"bProcessing": true,
						"bServerSide": true,
						"sAjaxSource" : "/admin/ancienne_commande_ajax",
						"fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
								if(aData[11] > 1) //11 correspond au type de commande à changer si ajout de colonne
									$('td:eq(2)', nRow).css({'background-color':'rgba(255,0,0,0.5)','color':'#fff'});
						},
            "fnDrawCallback": function( oSettings ) {
									$$.registry.tooltips();
            },
						"aaSorting" : [ [0, "desc"] ],
						"aoColumnDefs" : [{ 
							"sClass": "center", 
							"aTargets": [ "_all" ]							
						}],
						"aoColumns": [
							{ "sName": "commande", "aTargets": [ 0 ]},
							{ "sName": "magasin", "aTargets": [ 1 ]},
							{ "sName": "nom_magasin", "aTargets": [ 2 ]},
							{ "sName": "nom_societe", "aTargets": [ 3 ]},
							{ "sName": "reference_optimize", "aTargets": [ 4 ]},
							{ "sName": "date_commande", "aTargets": [ 5 ]},
							{ "sName": "date_expedition", "aTargets": [ 6 ]},
							{ "sName": "delais", "aTargets": [ 7 ]},
							{ "sName": "reference_client", "aTargets": [ 8 ]},
							{ "sName": "bon_livraison", "aTargets": [ 9 ]},
              { "sName": "expedition", "aTargets": [ 10 ]}
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
        
        var select ="";
        
        select += '<div style="float:left;margin-left:50px">Numéro Magasin <select id="recherche_num_magasin">';
        select += '<option value="Tous">Tous</option>';
     
            for(var i = 2; i<= <?php echo $maxUser; ?>; i++)
              select += '<option value="'+i+'">'+i+'</option>';
    
            select += "</select> </div>";
            
          $(".dataTables_filter").after(select);
			});
      
       $("#content").on("change", "#recherche_num_magasin", function(){
          table.dataTable().fnReloadAjax("/admin/ancienne_commande_ajax?id_users="+$(this).val());
       });
       
       $("#content").on("click", "button[id^=annule_envoi_]", function(){
          var num_commande = $(this).attr('id').split('_')[2];
          
          if(confirm('Annuler l\'expédition pour la commande N° '+num_commande+' ?')){
            $.ajax({
                type: "POST",
                url: "/admin/annule_envoi",
                data : "id_etat_commande=1&id_commande="+num_commande,
                success: function(data){
                    table.dataTable().fnReloadAjax("/admin/ancienne_commande_ajax?id_users="+$("#recherche_num_magasin").val());
                }
            });
          }
       });
		</script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>