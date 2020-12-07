<?php
    include_once('header.php');
    include_once('menu.php');
?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo number_format($ca_journalier,2,'.',''); ?></span> €</h2>
                            <h5>CA Journalier<br />Frais de livraison inclus</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo number_format($ca_mensuel,2,'.',''); ?></span>  €</h2>
                            <h5>CA Mensuel<br />Frais de livraison inclus</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo number_format($ca_journalier_sans_livraison,2,'.',''); ?></span>  €</h2>
                            <h5>CA Journalier<br />Hors frais de livraison</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-6">
                    <div class="card-box widget-user">
                        <div>
                            <h2 class="text-warning"><span data-plugin="counterup"><?php echo number_format($ca_mensuel_sans_livraison,2,'.',''); ?></span>  €</h2>
                            <h5>CA Mensuel<br />Hors frais de livraison</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Caisse journalière</h4>
                        
                        <div class="row ca-settings">
                            <div class="col-sm-6 col-xs-12">
                                <select id="date-caisse" class="form-control pull-left">
                                    <option>Anciennes caisses</option>
                                    <?php

                                    setlocale(LC_ALL, "fr_FR.utf8");

                                    $date_1 = new DateTime(date('Y-m-d', strtotime($firstorder[0]->date_commande)));
                                    $date_2 = new DateTime(date('Y-m-d', time()));

                                    $dateDiff = date_diff($date_1, $date_2);
                                    $months = ($dateDiff->y*12)+$dateDiff->m;


                                        for($i = 0; $i < $months; ++$i) {
                                            if($i < 1) {
                                                $date = date('m/Y');
                                                $year = date('Y');
                                            }
                                            else {
                                                $date = date('m/Y', strtotime('-'.$i.' month'));
                                                $year = date('Y', strtotime('-'.$i.' month'));
                                            }

                                            echo '<option value="'.$date.'">'.ucfirst(strftime('%B', strtotime('-'.$i.' month'))).' '.$year.'</option>'."\n";

                                        }

                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-6 col-xs-12 pull-right">
                                <button id="export-caisse" rel="<?php echo date('m-Y') ?>" class="btn btn-warning pull-right"><i class="zmdi zmdi-case-download"></i> Exporter la caisse</button>
                            </div>
                        </div>

                        <div id="data_ca_journalier"></div>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>
        var $month = new Array();
        $month['01'] = 'Janvier';
        $month['02'] = 'Février';
        $month['03'] = 'Mars';
        $month['04'] = 'Avril';
        $month['05'] = 'Mai';
        $month['06'] = 'Juin';
        $month['07'] = 'Juillet';
        $month['08'] = 'Août';
        $month['09'] = 'Septembre';
        $month['10'] = 'Octobre';
        $month['11'] = 'Novembre';
        $month['12'] = 'Décembre';

        var date_selected = '';
        var link_ca_journalier = '/admin/generer_pdf_ca_journalier/ca_journalier/';

        function ajax_ca_journalier(date){
            var mois = date.split("/")[0], annee = date.split("/")[1];

            $("#data_ca_journalier").html('Veuillez patienter');

            $.ajax({
                type: "POST",
                url: "/admin/getCaJournalierByMonth",
                data : "date_ca_par_mois="+annee+"-"+mois,
                success: function(data){
                    $("#export-caisse").attr('rel', mois+'-'+annee);
                    $("#data_ca_journalier").html(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $("#data_ca_journalier").html('<div style="width:150px;text-align:center;margin-left:auto;margin-right:auto;margin-top:15%;margin-bottom:15%:color:red">Server Error : '+txtError+textStatus+" "+errorThrown+'</div>');
                }
            });
        }

        $(document).ready(function(){

            ajax_ca_journalier('<?php echo date("m/Y"); ?>');

            $('#export-caisse').on('click', function() {
                window.location.href = link_ca_journalier+$(this).attr('rel');
            });

            $("#date-caisse").on('change', function() {
                var date = $(this).val();
                if(date != "") {
                    if(date_selected != date) {
                        date_selected = date;
                        ajax_ca_journalier(date);
                    }
                }

            });
        });
    </script>


<?php include_once('footer.php'); ?>