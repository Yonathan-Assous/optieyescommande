<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

<div id="body">

    <div id="section_header">
    </div>

    <div id="content">

        <div class="page" style="font-size: 7pt">
            <?php
                if(is_array($commande_journaliere)){


                    $config = $this->montures_config;

						$compteurCommande = 1;
                        $commandeParPage = 4;

                        $nombreCommande = count($commande_journaliere);

                        foreach($commande_journaliere as $key => $value){

                            $build = json_decode($value->information_commande, true);

                            $montures = json_decode($value->information_commande,true);
                           
                            echo'<table style="width: 100%;" class="header">
                                    <tr>
                                        <td><h1 style="text-align: left; display: block; width: 100%">Magasin '.$value->id_users.' CR'.$value->id_commande.'-'.$value->id_users.'</h1></td>
                                        <td style="text-align: right;">'.(isset($value->tel_fixe) ? '<span style="font-size: 20px">Tel: '.$value->tel_fixe.'</span>' : '').'</td>
                                    </tr>
                                </table>

                                <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;">
                                    <tr>
                                        <td colspan="5"><strong>Réfèrence client: '.$value->reference_client.'</strong></td>
                                    </tr>';

								foreach($montures as $monture) {
					
								echo '<tr>
										<td>
											<h4>Collection:'.$monture['collection'].'</h4><h4>'.$monture['modele'].'</h4>
											Taille : '.$monture['size'].'<br>
											Type : '.$monture['type'].'<br>
											Couleur : '.$monture['couleur'].'<br>
											Quantité : '.$monture['qty'].'

										</td>
									  </tr>';
								}
                               

                                if(!empty($value->commentaire)){
                                    echo '<tr>
                                            <td><strong>Commentaire : '.$value->commentaire.'</strong></td>
                                          </tr>';
                                }

                                echo '</table>';

                            if($compteurCommande!=$nombreCommande) {
                                if($compteurCommande%$commandeParPage == 0) {
                                    echo '<div style="page-break-before: always;"></div>';

                                } else {
                                    echo '<br><br><br>';
                                }
                            }

									
								$compteurCommande++;
                        }
                }
                else{
                       echo '<table style="width: 100%;" class="header">
                                <tr>
                                    <td><h1 style="text-align: center">Aucune nouvelle commande</h1></td>
                                </tr>
                             </table>';
                }
            ?>
        </div>

    </div>
</div>
</body>
</html>