<?php

$prefix = '';
//$prefix = '../../../../../';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta	http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="<?php echo $prefix ?>static/css/print_static_2.css" type="text/css" />
</head>

<body>

<div id="body">

    <header>
        <img src="<?php echo $prefix; ?>static/img/logo-white.png"  style="float:left;" />
        <h1 style="text-align: right">BL N° <?php echo $bon_livraison_montures[0]->intitule_bl; ?></h1>
        <h2 style="text-align: right">Date: <strong><?php echo date("d/m/Y",strtotime($bon_livraison_montures[0]->date_commande)) ?></strong></h2>
    </header>

    <div id="content">

        <div class="page" style="font-size: 7pt">

            <!--<table style="width: 100%;">
                <tr>
                    <td width="227"><img src="static/img/logo.jpg" width="227" height="72" /></td>
                    <td>
                        <h1 style="text-align: right">Bon de livraison numéro <?php echo $bon_livraison_montures[0]->intitule_bl; ?></h1>
                    </td>
                </tr>
            </table>
            <br><br>-->

            <table style="width: 100%; font-size: 8pt;height:150px; position: relative;">
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;">
                            <tr>
                                <td>
                                    <?php
                                    if(isset($pdf_admin) && $pdf_admin){
                                        echo '<table style="width: 100%;">
                                        <tr>
                                          <td><strong style="font-size: 1.2em">'.$user_info->nom_societe.'</strong></td>
                                        </tr>
                                        <tr>
                                          <td>'.$user_info->adresse.'<br />'.
                                            $user_info->cp.' '.$user_info->ville.'<br />FRANCE
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             <strong>SIRET :</strong> '.$user_info->numero_siret.'<br />
                                             <strong>TVA :</strong> '.wordwrap($user_info->tva_intracom,3," ",1).'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             <strong>Contact :</strong> '.$user_info->email.'
                                          </td>
                                        </tr>
                                      </table>';
                                    }
                                    else{
                                        echo '<table style="width: 100%;">
                                        <tr>
                                          <td><strong style="font-size: 1.2em">'.$data_admin['admin_info']->nom_societe.'</strong></td>
                                        </tr>
                                        <tr>
                                          <td>'.$data_admin['admin_info']->adresse.'<br>'.
                                            $data_admin['admin_info']->cp.' '.$data_admin['admin_info']->ville.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             <strong>SIRET :</strong> '.$data_admin['admin_info']->numero_siret.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             <strong>TVA :</strong> '.wordwrap($data_admin['admin_info']->tva_intracom,3," ",1).'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             <strong>Contact :</strong> '.$data_admin['admin_info']->email.'
                                          </td>
                                        </tr>
                                      </table>';
                                    }
                                    ?>
                                </td>

                                <td style="vertical-align: top">
                                    <?php
                                    if(isset($pdf_admin) && $pdf_admin){
                                        echo '<table style="width: 100%;text-align:right;">
                                            <tr>
                                                <td style=""><strong style="font-size: 1.2em">'.$users_info->nom_societe.'</strong><br />
                                                     '.$users_info->nom_magasin.'<br />'.
                                            $users_info->adresse.'<br />'.
                                            $users_info->ville.' '.$users_info->cp.'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   <strong>Téléphone :</strong> '.wordwrap($users_info->tel_fixe,2," ",1).'<br />
                                                   <strong>Fax :</strong> '.wordwrap($users_info->tel_fax,2," ",1).'
                                                </td>
                                            </tr>
                                        </table>';
                                    }else{
                                        echo '<table style="width: 100%;text-align:right;">
                                              <tr>
                                                <td style=""><strong style="font-size: 1.2em">'.$user_info->nom_societe.'</strong><br />
                                                   '.$user_info->nom_magasin.'<br>'.
                                            $user_info->adresse.'<br>'.
                                            $user_info->cp.' '.$user_info->ville.'
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <strong>Téléphone :</strong> '.wordwrap($user_info->tel_fixe,2," ",1).'<br />
                                                  <strong>Fax :</strong> '.wordwrap($user_info->tel_fax,2," ",1).'
                                                </td>
                                              </tr>
                                            </table>';
                                    }
                                    ?>
                                </td>

                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;">
                            <tr>

                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


            <?php if($bon_livraison_montures[0]->type_commande == 2)
                echo '<div style="-webkit-transform: rotate(0.65rad); -moz-transform: rotate(0.65rad); -ms-transform: rotate(0.65rad);position:absolute;top:310px;left:100px;font-size:80px;z-index:1;opacity: 0.3">CASSE ATELIER</div>';
            else if($bon_livraison_montures[0]->type_commande == 3)
                echo '<div style="-webkit-transform: rotate(0.65rad); -moz-transform: rotate(0.65rad); -ms-transform: rotate(0.65rad);position:absolute;top:310px;left:100px;font-size:70px;z-index:1;opacity: 0.3">ERREUR OPHTALMOLOGISTE</div>';
            ?>

            <table style="width: 100%; font-size: 10pt;z-index:3; text-align: center; margin: 15px 0 5px;">

                <tr>
                    <?php

                    // <div style="margin-bottom: 4px">Compte numéro : <strong>'.$user_info->id_users.'</strong></div>

                    echo'<td>                        
                        <div style="margin-bottom: 4px">
                        Référence client : <strong>'.$bon_livraison_montures[0]->reference_client.'</strong><br />
                        Numéro de compte : <strong>'.$user_info->id_users.'</strong>
                        </div>
                    </td>';

                    $data_encode = "";

                    $config = $this->montures_config;


                    $flashcode = '';//$lens->brand_name.' '.$lens->name.', Boite de '.$lens->packaging;

                    foreach($montures as $monture) {
						
						$flashcode .= $monture['collection']. ' ' .$monture['modele']. ': ' .$monture['size'].' '.$monture['type'].' '.$monture['couleur'].', ';
					}
					/*foreach($config['sides'] as $side => $v) {

                        if(!isset($build['excl'][$side])) {

                            $flashcode .= $v.' : ';

                            foreach($config['attrs'] as $attr => $name) {
                                if(isset($build[$attr][$side])) {
                                    $flashcode .=  $name.' : '.$build[$attr][$side].', ';
                                }
                            }

                        }

                    }*/


                    $data_encode = urlencode("Date de commande : ".date("d/m/Y",strtotime($bon_livraison_montures[0]->date_commande)).", Reference client : ".$bon_livraison_montures[0]->reference_client.", Numero de BL : ".$bon_livraison_montures[0]->intitule_bl.', Magasin : '.$user_info->nom_magasin.', Produit : '.$flashcode);

                    echo '<td>Certification OptiEyes, flashez moi !<br>
                    <img src="http://chart.apis.google.com/chart?chs=150x150&choe=ISO-8859-1&cht=qr&chl='.$data_encode.'" width="140" height="140" /></td>';
                    ?>


                </tr>

            </table>

            <table class="data-table change_order_items">

                <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantité</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $order_total = 0;

                foreach($montures as $monture) {

				echo '<tr>
                        <td>
                            <h4>'.$monture['collection'].' '.$monture['modele'].'</h4><br>
							Taille : '.$monture['size'].'<br>
							Type : '.$monture['type'].'<br>
							Couleur : '.$monture['couleur'].'
						</td>
						<td>'.$monture['qty'].'</td>
					  </tr>';
					
				}

                ?>

				
                </tbody>
            </table>

        </div>

    </div>
</div>
<div style="text-align:center;width: 100%;bottom:40px;position: fixed;font-weight:bold">
    Bon de livraison
</div>
</body>
</html>