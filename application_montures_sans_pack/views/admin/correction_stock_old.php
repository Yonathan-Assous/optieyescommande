
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
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Corrections des verres de stock</h2>
                </div>
                <div class="content">
					<div style="width:400px; margin: 15px auto">
						<select name="verre_stock" id="verre_stock">
							<?php
								if(isset($verres) && $verres != false)
									foreach($verres as $verre){
										echo '<option value="'.$verre->id_verre.'">'.$verre->libelle_verre.'</option>';
									}
								else
									echo '<option value="">Aucun verre</option>';
							?>
						</select>
						<br /><br />
						<select name="diametre" id="diametre">
              				<option value="55">55</option>
							<option value="60">60</option>
							<option value="65">65</option>
							<option value="67">67</option>
							<option value="70">70</option>
							<option value="72">72</option>
							<option value="75">75</option>
						</select>
					</div>
					<div id="tab_correction"></div>
                </div>
            </div>
        </div><!-- End of .grid_4 -->

        <script>
			
			ajaxGrilleCorrection();
			
			function ajaxGrilleCorrection(){
				$.ajax({
						type: "POST",
						url: "/admin/setGrilleCorrection",
						data : "id_verre="+$("#verre_stock").val()+"&diametre="+$("#diametre").val(),
						dataType: "html",
						success: function(data){
							$("#tab_correction").empty().append(data);
						},
						error: function(jqXHR, textStatus, errorThrown) {
						  alert(textStatus+" "+errorThrown);
						}
					});
			}
				
			$("#content").on("change","#verre_stock,#diametre",function(){
				ajaxGrilleCorrection();
			});
					
			$("#content").on("click","#correction td.selectionnable",function(){
				var el = $(this),statut = 'ajout';
				
				if(el.css('backgroundColor') != "transparent")
					statut = 'supprimer';
								
				 $.ajax({
                        type: "POST",
                        url: "/admin/MiseEnPlaceCorrection",
                        data : "id_verre="+$("#verre_stock").val()+"&statut="+statut+"&sphere="+el.find('input[name=sphere]').val()+'&cylindre='+el.find('input[name=cylindre]').val()+"&diametre="+$("#diametre").val(),
                        success: function(data){
						  if(el.css('backgroundColor') == "transparent")
								el.css('backgroundColor','#66CCFF');
							else
								el.css('backgroundColor','');	
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                          alert(textStatus+" "+errorThrown);
                        }
                    });
			});
			
        </script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>