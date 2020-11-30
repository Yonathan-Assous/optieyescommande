
<?php include_once('header.php'); ?>
<body>

<!-- ----------------- -->
<!-- Some dialogs etc. -->

<?php include_once('content.php'); ?>

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
        <h2 class="grid_12" style="font-size: 14px;">Choisissez de commercialiser des produits unique et qui vous ressemble grâce à Optimize en changeant l'appellation de vos verres pour faire face aux devis de vos concurrents !</h2>
        <p class="grid_12 ">Si vous ne souhaitez pas changer l'appellation d'un ou plusieurs verre(s), laissez vide le champ correspondant.</p>
        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png"><?php echo $page; ?></h2>
                </div>
                <form action="/index/addPerso" class="grid_12" id="addPerso">
                    <?php
                        foreach( $generation_verre as $value){
                            echo '<div class="row">
                                        <label for="'.$value->generation_verre.'">
                                            <strong>'.$value->generation_verre.'</strong>
                                        </label>
                                        <div>
                                            <input type="text" name="id_generation_verre['.$value->id_generation_verre.']" id="'.$value->generation_verre.'" value="'.(isset($verre_personnalise[$value->id_generation_verre]) ? $verre_personnalise[$value->id_generation_verre] : "").'" />
                                        </div>
                                   </div>';
                        }
                    ?>
                </form>
            </div><!-- End of .box -->
            <div class="grid_12" style="float:right">
                <a href="javascript:void(0);" class="button blue right" id="confirm" style="float:right">Enregistrer</a>
            </div>
        </div><!-- End of .grid_12 -->
    </section><!-- End of #content -->

    <div style="display: none;" id="msg_success_perso" title="Enregistrement réussi">
        <p>Vos personnalisations ont bien été prise en compte.</p>
    </div>

    <div style="display: none;" id="msg_error_perso" title="Erreur">
        <p>Une erreur est survenue pendant l'enregistrement, veuillez recommencer.</p>
    </div>

    <script>
        $$.ready(function() {
            $( "#msg_success_perso" ).dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
                    }
                }]
            });

            $( "#confirm" ).click(function() {
                $.ajax({
                    type: "POST",
                    url: "/index/addPerso",
                    data : $("#addPerso").serialize(),
                    success: function(data){
                        $("#msg_success_perso").dialog("open");
                    },
                    error:function(){
                        $("#msg_error_perso").dialog("open");
                    }
                });

                return false;
            });
        });
    </script>
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>