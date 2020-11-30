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
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Documents</h4>


                        <?php

                        $list = [
                            'fab' => [],
                            'stock' => [],
                            'reassort' => [],
                            'etiquettes_fab' => [],
							'montures' => []
                        ];

                            foreach($files as $name => $t) {


                                $fname = $name;
                                $class = 'stock';

                                preg_match("(_([0-9]{2})_([0-9]{2})_([0-9]{2})-([0-9]{2})-([0-9]{2}))", $name,$matches);

                                $date = new DateTime();
                                $date->setDate(date('Y', $t), $matches[2], $matches[1]);
                                $date->setTime($matches[3], $matches[4], $matches[5]);

                                $name = str_replace($matches[0].'.pdf', '', $name);
                                $type = $name;

                                $name = str_replace('_', ' ', $name);
                                $name = ucfirst($name);

                                if('commande_journaliere' == $type) {
                                    $class = 'fab';
                                    $name = 'Fabrication';
                                }

                                if('commande_stock_journaliere' == $type) {
                                    $name = 'Liste';
                                }

                                if('certificat_authenticite' == $type) {
                                    $class = 'etiquettes_fab';
                                    $name = 'Authenticité';
                                }

                                if('etiquette_fabrication' == $type) {
                                    $class = 'etiquettes_fab';
                                    $name = 'Etiquettes';
                                }
								
								if('commande_montures_journaliere' == $type) {
                                    $class = 'montures';
                                    $name = 'Montures';
                                }

                                if (isset($lastDate) && ($lastDate->getTimestamp() - $date->getTimestamp()) > 10) {
                                    $list[$class][] = '<div class="spacer" style="margin-bottom: 20px;"></div>';
                                }

                                if($date->format('G') != 0 || 'commande_montures_journaliere' == $type) {
                                    $list[$class][] = '<li>- <a target="_blank" href="http://www.optieyescommande.com/static/aa/'.$fname.'">'.$name.' du '.$date->format('d/m à H:i:s').'</a></li>';
                                }
                                else {
									
                                    $list['reassort'][] = '<li>- <a target="_blank" href="http://www.optieyescommande.com/static/aa/'.$fname.'">Réassort du '.$date->format('d/m à H:i:s').'</a></li>';
                                }

                                $lastDate = clone $date;
                            }
                        ?>


                        <div style="float: left; width: 19%; margin-right: 1%;">
                            <h3>Commandes de stock</h3>
                            <ul style="font-size: 1.2em; list-style-type: none; padding-left: 0">
                                <?php echo join("\n", $list['stock']); ?>
                            </ul>
                        </div>

                        <div style="float: left; width: 19%; margin-right: 1%;">
                            <h3>Commandes de fabrication</h3>
                            <ul style="font-size: 1.2em; list-style-type: none; padding-left: 0">
                                <?php echo join("\n", $list['fab']); ?>
                            </ul>
                        </div>

                        <div style="float: left; width: 19%; margin-right: 1%;">
                            <h3>Etiquettes et cartes authenticité fabrication</h3>
                            <ul style="font-size: 1.2em; list-style-type: none; padding-left: 0">
                                <?php echo join("\n", $list['etiquettes_fab']); ?>
                            </ul>
                        </div>

                        <div style="float: left; width: 19%; margin-right: 1%;">
                            <h3>Réassorts</h3>
                            <ul style="font-size: 1.2em; list-style-type: none; padding-left: 0">
                                <?php echo join("\n", $list['reassort']); ?>
                            </ul>
                        </div>
						
						<div style="float: left; width: 19%; margin-right: 1%;">
                            <h3>Montures</h3>
                            <ul style="font-size: 1.2em; list-style-type: none; padding-left: 0">
                                <?php echo join("\n", $list['montures']); ?>
                            </ul>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

<?php include_once('footer.php'); ?>