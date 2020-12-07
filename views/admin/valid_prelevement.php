
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
    <section id="content" class="container_12 clearfix" data-sort=true>
        <div class="grid_12">
            <div class="box">

                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Validation des documents de prélèvement</h2>
                </div>

                <div class="content">
                    <div class="tabletools">
                        <div class="left">
                            <div class="alert success sticky" style="display:none" id="message_valider">
                                <span class="icon"></span>
                                <strong>Document validé</strong>
                            </div>
                            <div class="alert error sticky" style="display:none" id="message_non_valider">
                                <span class="icon"></span>
                                <strong>Document refusé</strong>
                            </div>
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <table class="dynamic styled" data-filter-Bar="always" data-lang='{"SHOW_ENTRIES" : "<?php echo $parametre_lang_datable['SHOW_ENTRIES']; ?>", "SEARCH": "<?php echo $parametre_lang_datable['SEARCH']; ?>"}' data-data-table = '{ "aaSorting" : [ [0, "desc"] ] , "oLanguage" : { "sEmptyTable": "<?php echo $parametre_lang_datable['sEmptyTable']; ?>", "oPaginate" : { "sLast" : "<?php echo $parametre_lang_datable['sLast']; ?>", "sFirst" : "<?php echo $parametre_lang_datable['sFirst']; ?>"}, "sInfoEmpty" : "<?php echo $parametre_lang_datable['sInfoEmpty']; ?>", "sInfo": "<?php echo $parametre_lang_datable['sInfo']; ?>", "sInfoFiltered" : "<?php echo $parametre_lang_datable['sInfoFiltered']; ?>", "sZeroRecords" : "<?php echo $parametre_lang_datable['sZeroRecords']; ?>" }}' >
                        <thead>
                        <tr>
                            <th>Numéro magasin</th>
                            <th>Nom Société</th>
                            <th>Email</th>
                            <th>RIB</th>
                            <th>Valider/Refuser le RIB</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($data_prelevement) && is_array($data_prelevement))
                                foreach($data_prelevement as $prelevement){
                                    echo '<tr>
                                            <td class="center">Magasin_'.$prelevement->id_users.'</td>
                                            <td class="center">'.$prelevement->nom_societe.'</td>
                                            <td class="center">'.$prelevement->email.'</td>
                                            <td class="center"><a href="/static/uploads/rib/'.$prelevement->document_rib.'" target="_blank">Voir le RIB</a></td>
                                            <td class="center">
												<div style="margin-left:28%">
													<div style="float:left;margin-left:auto;margin-right:auto;width:100px;">
														<input type="checkbox" name="valid_rib_'.$prelevement->id_users.'" id="valid_rib_'.$prelevement->id_users.'" value="" '.($prelevement->valid_document_rib == 1 ? 'checked' : '').' /> Valider
													</div>
													<div style="float:left;margin-left:auto;margin-right:auto;width:100px;">
														<input type="checkbox" name="refuse_rib_'.$prelevement->id_users.'" id="refuse_rib_'.$prelevement->id_users.'" value="" '.($prelevement->valid_document_rib == 2 ? 'checked' : '').' /> Refuser
													</div>
												</div>
                                            </td>
                                          </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div><!-- End of .content -->
            </div><!-- End of .box -->
        </div><!-- End of .grid_12 -->
    </section><!-- End of #content -->

</div><!-- End of #main -->

<script>
    $("input[name^=valid_],input[name^=refuse_]").on("click",function() {
        if(!$(this).is(':checked')){
            var value = $(this).attr('name').split('_'), type_document = value[1];
            var etat_validation =  value[0], etat = 1, id_users = value[2],send_email = 0;

            $(this).attr('checked',true);

            if(etat_validation == "refuse")
                etat = 2;

            if($("#valid_rib_"+id_users).is(':checked'))
                send_email = 1;

            $.ajax({
                type: "POST",
                url: "/admin/update_valid_document",
                data : "id_users="+id_users+"&valid_document_"+type_document+"="+etat+"&send_email="+send_email,
                success: function(){
                    if(etat_validation == "valid"){
                        $("#refuse_"+type_document+"_"+id_users).removeAttr('checked');
                        $("#message_valider").fadeIn().delay(1000).fadeOut();
                    }else{
                        $("#valid_"+type_document+"_"+id_users).removeAttr('checked');
                        $("#message_non_valider").fadeIn().delay(1000).fadeOut();
                    }
                },
				error: function(jqXHR, textStatus, errorThrown) {
				  alert(textStatus+" "+errorThrown);
				}
            });
        }

        $(this).attr('checked',true);

        return false;
    });
</script>

<?php include_once('footer.php'); ?>

</body>
</html>