<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title m-b-20">Erreur ophtalmologiste / Casse atelier</h4>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo $ec['useable'] ?></span> €</h2>
                            <h5>Montant utilisable pour commander erreur / casse ( <?php echo $ec['taux'] ?>% )</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo $ec['used'] ?></span> €</h2>
                            <h5>Montant déjà utilisé</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo $ec['rest'] ?></span> €</h2>
                            <h5>Utilisable au <?php echo strftime('%e %B %Y à %Hh%M', time()) ?></h5>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les types de verres que vous souhaitez afficher</p>

                        <div class="radio radio-warning radio-inline">
                            <input type="radio" id="all" value="all" name="option" checked>
                            <label for="all"> Toutes les commandes </label>
                        </div>

                        <div class="radio radio-warning radio-inline">
                            <input type="radio" id="others" value="others" name="option">
                            <label for="others"> Verres de fabrication </label>
                        </div>

                        <div class="radio radio-warning radio-inline">
                            <input type="radio" id="stock" value="stock" name="option">
                            <label for="stock"> Verres de stock </label>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Vos commandes en Erreur ophtalmologiste / Casse atelier</h4>

                        <table id="datatable" class="table-center table-commandes table table-striped dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Référence Optieyes</th>
                                <th>Date</th>
                                <th>Référence remplacée</th>
                                <th>Numéro BL</th>
                                <th>Prix</th>
                                <th>Référence Client</th>
                                <th>Type de verre</th>
                                <th>Etat</th>
                                <th>Détail commande</th>
                            </tr>
                            </thead>
                        </table>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->


    <!-- Datatables-->
    <script src="/static/assetsplugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/static/assetsplugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/static/assetsplugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/static/assetsplugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/static/assetsplugins/datatables/jszip.min.js"></script>
    <script src="/static/assetsplugins/datatables/pdfmake.min.js"></script>
    <script src="/static/assetsplugins/datatables/vfs_fonts.js"></script>
    <script src="/static/assetsplugins/datatables/buttons.html5.min.js"></script>
    <script src="/static/assetsplugins/datatables/buttons.print.min.js"></script>
    <script src="/static/assetsplugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/static/assetsplugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/static/assetsplugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/static/assetsplugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/static/assetsplugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="/static/assetspages/jquery.datatables.init.js"></script>

    <script>
        $(document).ready(function() {

            var table = $('#datatable').DataTable({
                ajax: "/index/mes_commandes_ajax/ec",
                deferRender: true,
                ordering: false,
                columnDefs: [{
                    "targets": "_all",
                    "createdCell": function (td, cellData, rowData, row, col) {
                        $(td).find('.tooltipster').tooltip();
                    }
                }],
                language: {
                    "lengthMenu": "Afficher _MENU_ commandes par page",
                    "zeroRecords": "Aucune commande trouvée",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucune commande à afficher",
                    "infoFiltered": "(Filtrat de _MAX_ entrées)",
                    "search": "Recherche",
                    "paginate": {
                        "first":      "Première",
                        "last":       "Dernière",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    }
                }
            });

            $(".content").on('change','input[name=option]',function(){
                table.ajax.url('/index/mes_commandes_ajax/ec/?tri='+$(this).val()).load();
            });


        });

        TableManageButtons.init();

    </script>

<?php include_once('footer.php'); ?>


<?php /*
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
        <div class="grid_12 ec_table">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png"><?php echo $page; ?></h2>
                </div>
                <div class="content">

                    <p class="page_sub">Sur cette page, vous pouvez voir en temps réel l'évolution de vos casses ateliers et erreurs ophtalmologiste</p>

                    <div class="tabletools">
                        <div class="left">
                        </div>
                        <div class="right">
                        </div>
                    </div>
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
                        "sAjaxSource" : "/index/erreur_casse_ajax",
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
                        "sAjaxSource" : "/index/mes_commandes_ajax/ec",
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
                table_ec.dataTable().fnReloadAjax("/index/mes_commandes_ajax/ec/?tri="+$(this).val());
            });
        </script>
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html> */ ?>