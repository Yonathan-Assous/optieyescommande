
<?php include_once('header.php'); ?>
<body>

    <!-- ----------------- -->
    <!-- Some dialogs etc. -->

   <?php

    include_once('header.php');
    
    include_once('message.php');

   ?>
    
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
						<h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Prix des verres <span id="generation_verre"></span></h2>
					</div>
					<div class="content">
						<div class="tabletools">
							<div class="left">
								<div class="alert success sticky" style="display:none" id="message_valider">
									<span class="icon"></span>
									<strong>Prix mise à jour</strong>
								</div>
								<div class="alert error sticky" style="display:none" id="message_non_valider">
									<span class="icon"></span>
									<strong>Erreur de saisie</strong>
								</div>
                
                <div class="alert success sticky" style="display:none" id="message_order">
									<span class="icon"></span>
									<strong>Ordre mise à jour</strong>
								</div>
								<div class="alert error sticky" style="display:none" id="message_non_order">
									<span class="icon"></span>
									<strong>Erreur ordre non appliqué</strong>
								</div>
                
							</div>
							<div class="right">
							</div>
						</div>
						<table id="verres" class="styled">
							<thead>
							<tr>
								<th>Verre</th>
								<th>Prix</th>
                <th>Grille tarifaire</th>
                <th>Ordre</th>
                <th>Supprimer</th>
							</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
            </div><!-- End of .grid_4 -->

            <script>

                var table, select = "";

                $$.ready(function() {

                    table = $('#verres').table({
                        tableTools: {
                            display: true
                        },
                        filterBar : 'always',
                        lang : {
                            "SHOW_ENTRIES" : "<?php echo $parametre_lang_datable['SHOW_ENTRIES']; ?>",
                            "SEARCH": "<?php echo $parametre_lang_datable['SEARCH']; ?>"
                        },
                        dataTable: {
                            "bProcessing": true,
                            "bAutoWidth": false,
                            "bRetrieve" : true,
                            "sAjaxSource" : "/admin/prix_verre_ajax/<?php echo $id_generation; ?>",
                            "aaSorting" : [ [0, "desc"] ],
                            "fnDrawCallback": function( oSettings ){
                                $(".chzn-select").chosen({
                                    disable_search_threshold: 20,
                                    allow_single_deselect: true,
                                    width:'100%'
                                });
                            },
                            "aoColumnDefs" : [{
                                "sClass": "center",
                                "aTargets": [ "_all" ]
                            }],
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

                    select = '<div style="float:left;margin-left:50px">Grille tarifaire <select id="grille_tarifaire">';
                    select += '<option value="Tous">Tous</option>';
                    select += '<option value="1">Grille 1</option>';
                    select += '<option value="2">Grille 2</option>';
                    select += '<option value="3">Grille 3</option>';
                    select += '<option value="4">Grille 4</option>';
                    select += '<option value="5">Grille 5</option>';
                    select += '<option value="6">Grille 6</option>';
                    select += '</select> </div>';

                    $(".dataTables_filter").after(select);

                    $("#generation_verre").text($("ul.sub li.current a").text());

                });


                $("#content").on("change", "#grille_tarifaire", function(){
                    table.dataTable().fnReloadAjax("/admin/prix_verre_ajax/<?php echo $id_generation; ?>/"+$(this).val());
                });


                var Timer ="";

                $("#content").on("keyup","input[name^=prix_]", function(){
                    if($.isNumeric($(this).val())){
                        clearTimeout(Timer);
                        var value = $.trim($(this).val()), id_verre = $(this).attr("id").split("_")[1], id_grille_tarifaire = $(this).attr("id").split("_")[2];

                        $("#message_non_valider").fadeOut();

                        Timer = setTimeout( function( ) {
                            $.ajax({
                                type: "POST",
                                url: "/admin/updatePrixVerre",
                                data : "id_verre="+id_verre+"&id_grille_tarifaire="+id_grille_tarifaire+"&prix_verre="+value,
                                success: function(data){
                                    $("#message_valider").fadeIn().delay(1000).fadeOut();
                                },
                                error:function(){
                                    $("#message_non_valider").fadeIn().delay(1000).fadeOut();
                                }
                            });
                        }, 1200 );
                    }
                });
                
                $("#content").on("click","button[id^=supprimer_]", function(){
                    if(confirm('Supprimer ce verre ?')){
                      var id_verre = $(this).attr('id').split('_')[1];
                      $.ajax({
                          type: "POST",
                          url: "/admin/desactive_verre",
                          data : "id_verre="+id_verre,
                          success: function(data){
                             window.location.reload();
                          }
                      });
                    }
                });
                
                $("#content").on("keyup","input[id^=order_]", function(){
                  var value = $.trim($(this).val());
                    if($.isNumeric(value)){
                      var id_verre = $(this).attr("id").split("_")[1], id_grille_tarifaire = $(this).attr("id").split("_")[2];
                      $.ajax({
                          type: "POST",
                          url: "/admin/ordre_verre",
                          data : "id_verre="+id_verre+"&id_grille_tarifaire="+id_grille_tarifaire+"&order_verre="+value,
                          success: function(data){
                              $("#message_order").fadeIn().delay(1000).fadeOut();
                          },
                          error:function(){
                              $("#message_non_order").fadeIn().delay(1000).fadeOut();
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