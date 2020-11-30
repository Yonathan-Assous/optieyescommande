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
                    <h4 class="page-title m-b-20">Commandes de stock</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box buttons-box clearfix">
                        <?php /* <a class="btn btn-inverse pull-left m-r-10 generer_etiquettes" data-toggle="modal" data-target="#etiquettes-fabrication" rel="2"><i class="zmdi zmdi-collection-text m-r-5"></i> Générer étiquettes</a> */ ?>
                        <a class="btn btn-danger pull-left m-r-10" id="envoi_commande_journaliere" rel="2"><i class="zmdi zmdi-shopping-cart m-r-5"></i> Envoyer la liste</a>
                        <a class="btn btn-warning pull-left" id="expedier_commandes"><i class="zmdi zmdi-truck m-r-5"></i> Expedier commandes checkées (<b></b>)</a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div id="show-options" class="card-box table-options rd-100">

                        <div class="options-heading" data-toggle="collapse" data-parent="#show-options" href="#showOptions" aria-expanded="false" aria-controls="showOptions">
                            <h4 class="header-title m-t-0">Options d'affichage</h4>
                            <p class="text-muted font-13 m-t-10">Sélectionnez les options de verres que vous souhaitez afficher</p>
                        </div>

                        <div class="panel-collapse collapse" id="showOptions" aria-expanded="false">

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left m-b-10">
                                    <b>Traitement</b>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_traitement_all" value="all" name="option_traitement" checked>
                                        <label for="option_traitement_all"> Tous </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_traitement_blanc" value="Blanc" name="option_traitement">
                                        <label for="option_traitement_blanc"> Blanc </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_traitement_durci" value="Durci" name="option_traitement">
                                        <label for="option_traitement_durci"> Durci </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_traitement_hmc" value="HMC" name="option_traitement">
                                        <label for="option_traitement_hmc"> HMC </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_traitement_satin" value="Satin" name="option_traitement">
                                        <label for="option_traitement_satin"> Satin </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_traitement_blueCoat" value="BlueCoat" name="option_traitement">
                                        <label for="option_traitement_blueCoat"> BlueCoat </label>
                                    </div>

                                </div>
                            </div>


                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left m-b-10">
                                    <b>Indice</b>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_indice_all" value="all" name="option_indice" checked>
                                        <label for="option_indice_all"> Tous </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_indice_1_5" value="1.5" name="option_indice">
                                        <label for="option_indice_1_5"> 1.5 </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_indice_1_5_9_1" value="1.591" name="option_indice">
                                        <label for="option_indice_1_5_9_1"> 1.591 </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_indice_1_6" value="1.6" name="option_indice">
                                        <label for="option_indice_1_6"> 1.6 </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_indice_1_6_7_AS" value="1.67" name="option_indice">
                                        <label for="option_indice_1_6_7_AS"> 1.67 </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_indice_1_7_4_AS" value="1.74" name="option_indice">
                                        <label for="option_indice_1_7_4_AS"> 1.74 </label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left m-b-10">
                                    <b>Photochromie</b>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_photochromie_all" value="all" name="option_photochromie" checked>
                                        <label for="option_photochromie_all"> Tous </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_photochromie_non" value="Non Photocromique" name="option_photochromie">
                                        <label for="option_photochromie_non"> Sans </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_photogrey" value="PhotoGrey" name="option_photochromie">
                                        <label for="option_photogrey"> PhotoGrey </label>
                                    </div>

                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_photobrown" value="PhotoBrown" name="option_photochromie">
                                        <label for="option_photobrown"> PhotoBrown </label>
                                    </div>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left m-b-10">
                                    <b>Teinte</b>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_teinte_all" value="all" name="option_teinte" checked>
                                        <label for="option_teinte_all"> Tous </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_teinte_non" value="Non Teinté" name="option_teinte">
                                        <label for="option_teinte_non"> Non Teinté </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_teinte_g15c" value="G15 C" name="option_teinte">
                                        <label for="option_teinte_g15c"> G15 C </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_teinte_gris_c" value="Gris C" name="option_teinte">
                                        <label for="option_teinte_gris_c"> Gris C </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_teinte_brun_c" value="Brun C" name="option_teinte">
                                        <label for="option_teinte_brun_c"> Brun C </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_bleu_nuit_c" value="Bleu nuit C" name="option_teinte">
                                        <label for="option_bleu_nuit_c"> Bleu nuit C </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left m-b-10">
                                    <b>Diamètre</b>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 pull-left">
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_diametre_non" value="all" name="option_diametre" checked>
                                        <label for="option_diametre_non"> Tous </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_diametre_55" value="55" name="option_diametre">
                                        <label for="option_diametre_55"> 55 </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_diametre_60" value="60" name="option_diametre">
                                        <label for="option_diametre_60"> 60 </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_diametre_65" value="65" name="option_diametre">
                                        <label for="option_diametre_65"> 65 </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_diametre_70" value="70" name="option_diametre">
                                        <label for="option_diametre_70"> 70 </label>
                                    </div>
                                    <div class="radio radio-warning radio-inline">
                                        <input type="radio" id="option_diametre_75" value="75" name="option_diametre">
                                        <label for="option_diametre_75"> 75 </label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left m-b-10">
                                    <b>Corrections</b>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-10 pull-left">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <input type="text" class="form-control" value="" name="option_correction_sphere" id="option_correction_sphere" placeholder="Sphère">
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <input type="text" class="form-control" value="" name="option_correction_cylindre" id="option_correction_cylindre" placeholder="Cylindre">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>

                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Voir la commande</th>
                                <th>Référence optieyes</th>
                                <th>Numéro BL</th>
                                <th>Date</th>
                                <th>Référence Client</th>
                                <th>Teinte</th>
                                <th>Tarif HT</th>
                                <th>Expédier</th>
                                <th>Pointage</th>
                                <th>Verre</th>
                            </tr>
                            </thead>
                        </table>

                        <script>

                            $(document).ready(function() {

                                $.ajax({
                                    type: "POST",
                                    url: "/admin/get_update_commande/2",
                                    success: function(data){
                                        $('#expedier_commandes').find('b').text(data);
                                    }
                                });

                                $('#expedier_commandes').on('click', function() {

                                    var btn_exp = $(this);

                                    if(btn_exp.hasClass('ready')) {
                                        $.ajax({
                                            type: "POST",
                                            url: "/admin/expedier_commandes/2",
                                            success: function(data){
                                                btn_exp.removeClass('ready');
                                                if(data == 'sent') {
                                                    window.location.reload();
                                                }
                                            }
                                        });
                                    }
                                    else {
                                        btn_exp.addClass('ready btn-danger');

                                    }

                                });


                                $(".content").on("click","input[name^=verre_droit],input[name^=verre_gauche]",function(e) {
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
                                    }).done(function() {

                                        $.ajax({
                                            type: "POST",
                                            url: "/admin/get_update_commande/2",
                                            success: function(data){
                                                $('#expedier_commandes').find('b').text(data);
                                            }
                                        });

                                    });
                                });

                                $.ajax({
                                    type: "POST",
                                    url: "/admin/get_update_commande/2",
                                    success: function(data){
                                        $('#expedier_commandes').find('b').text(data);
                                    }
                                });



                                $(".content").on("click",".valid_commande",function() {

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
                                                    url: "/admin/get_update_commande/2",
                                                    success: function(data){
                                                        $('#expedier_commandes').find('b').text(data);
                                                    }
                                                });


                                            }
                                        });

                                    };
                                    ajax_call();

                                });

                            });


                        </script>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<!-- Datatables-->
<script src="/current/static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/current/static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="/current/static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/current/static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="/current/static/assets/plugins/datatables/jszip.min.js"></script>
<script src="/current/static/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="/current/static/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="/current/static/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="/current/static/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="/current/static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="/current/static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="/current/static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/current/static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="/current/static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

<!-- Modal-Effect -->
<script src="/current/static/assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="/current/static/assets/plugins/custombox/dist/legacy.min.js"></script>

<!-- Datatable init js -->
<script src="/current/static/assets/pages/jquery.datatables.init.js"></script>

<script>
    $(document).ready(function() {

        var table = $('#datatable').DataTable({
            ajax: { url: "/admin/valid_commande_stock_ajax", dataSrc: 'aaData' },
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "Tout"]
            ],
            deferRender: true,
            ordering: false,
            columnDefs: [{
                "targets": "_all",
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).find('.tooltipster').tooltip();
                }
            }],
            "createdRow": function ( row, data, index ) {
                if ( data[1].length > 20 ) {
                    $('td', row).eq(1).addClass('highlight-ref');
                }

                if ( data[7].length > 200 ) {
                    $('td', row).eq(7).addClass('highlight-yellow');
                }
            },
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


        function filterData() {

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

            table.ajax.url('/admin/valid_commande_stock_ajax'+data).load();
        }

        $(".content").on("change","input[name=option_traitement]:radio,input[name=option_indice]:radio,input[name=option_photochromie]:radio,input[name=option_teinte]:radio,input[name=option_diametre]:radio",function(e) {
            filterData();
        });


        $(".content").on("keyup","input[name=option_correction_cylindre],input[name=option_correction_sphere]",function(){
            filterData();
        });


    });

    TableManageButtons.init();

</script>

<?php include_once('footer.php'); ?>

