
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
        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png"><?php echo $page; ?></h2>
                </div>
                <div class="content">
                    <table id="tab" class="erreur_casse styled">
                        <thead>
                        <tr>
                            <th>Détail</th>
                            <th>Montant</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div><!-- End of .content -->
            </div><!-- End of .box -->
        </div><!-- End of .grid_12 -->

        <form class="grid_12">
            <fieldset>
                <div class="row">
                    <label for="f1_normal_input" style="width: 181px;">
                        <strong>Afficher </strong>
                    </label>
                    <div>
                        <div style="width:80px;float:left;">
                            <input type="radio" value="all" name="option" checked>
                            <label for="aucune_option">Tous</label>
                        </div>
                        <div style="width:150px;float:left;">
                            <input type="radio" value="others" name="option">
                            <label for="aucune_option">Verre de fabrication</label>
                        </div>
                        <div style="width:150px;float:left;">
                            <input type="radio" value="stock" name="option">
                            <label for="aucune_option">Verre de stock</label>
                        </div>
                    </div>
                </div>
            </fieldset><!-- End of fieldset -->
        </form>

        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Récapitulatif de vos commandes Erreurs / Casses</h2>
                </div>
                <div class="content">
                    <div class="tabletools">
                        <div class="left">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <table id="tab_ec" class="mes_commandes styled">
                        <thead>
                        <tr>
                            <th>Détail commande</th>
                            <th>Date</th>
                            <th>Référence optieyes</th>
                            <th>Référence remplacée</th>
                            <th>Prix</th>
                            <th>Numéro BL</th>
                            <th>Référence Client</th>
                            <th>Type de verre</th>
                            <th>Bon de livraison</th>
                            <th>Etat</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div><!-- End of .content -->
            </div><!-- End of .box -->
        </div><!-- End of .grid_12 -->

        <script>
            var table;

            $$.ready(function(){
                table = $('#tab').table({
                    tableTools: {
                        display: false
                    },
                    lang:{
                        "SHOW_ENTRIES" : "<?php echo $parametre_lang_datable['SHOW_ENTRIES']; ?>",
                        "SEARCH": "<?php echo $parametre_lang_datable['SEARCH']; ?>"
                    },
                    filterBar: 'never',
                    dataTable: {
                        "bProcessing": true,
                        "bAutoWidth": false,
                        "sAjaxSource" : "/admin/erreur_casse_ajax/<?php echo $user_id ?>",
                        "aaSorting" : [ [0, "desc"] ],
                        "aoColumnDefs" : [{
                            "sClass": "",
                            "aTargets": [ "_all" ]
                        }],
                        "fnDrawCallback": function( oSettings ) {
                            $$.registry.tooltips();
                        },
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

            var table_ec;

            $$.ready(function(){
                table_ec = $('#tab_ec').table({
                    tableTools: {
                        display: true,
                        swf : "<?php echo $parametre_export_datable['swfUrl']; ?>"
                    },
                    lang:{
                        "SHOW_ENTRIES" : "<?php echo $parametre_lang_datable['SHOW_ENTRIES']; ?>",
                        "SEARCH": "<?php echo $parametre_lang_datable['SEARCH']; ?>"
                    },
                    filterBar:'always',
                    dataTable: {
                        "bProcessing": true,
                        "bAutoWidth": false,
                        "sAjaxSource" : "/admin/user_commandes_ajax/<?php echo $user_id ?>",
                        "aoColumnDefs" : [{
                            "sClass": "center",
                            "aTargets": [ "_all" ]
                        }],
                        "fnDrawCallback": function( oSettings ) {
                            $$.registry.tooltips();
                        },
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

            $("#content").on("change","input[name=option]",function(){
                table_ec.dataTable().fnReloadAjax("/admin/user_commandes_ajax/<?php echo $user_id ?>/?tri="+$(this).val());
            });
        </script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>