<?php

$info_commande = json_decode($bon_livraison[0]->information_commande,true);
$correction_droit = $correction_gauche = $info_c = $option = $prisme_droit = $prisme_gauche = $mesure_freeform_opt = $sphere_droit = $sphere_gauche = "";
$options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune');

if(isset($info_commande['verre']['correction_droit']['axe'])){
    $axe_droit = (int) $info_commande['verre']['correction_droit']['axe'];
}

if(isset($info_commande['verre']['correction_gauche']['axe'])){
    $axe_gauche = (int) $info_commande['verre']['correction_gauche']['axe'];
}


if($bon_livraison[0]->type_optique == "lentille"){

    if(isset($info_commande['verre']['correction_droit'])){
        $sphere_droit = ($info_commande['verre']['correction_droit']['sphere'] + $info_commande['verre']['correction_droit']['cylindre']);

        if(isset($info_commande['verre']['correction_droit']['axe'])) {
            if ($axe_droit < 90) {
                $axe_droit += 90;
            } elseif ($axe_droit >= 90) {
                $axe_droit -= 90;
            }
        }

        $info_commande['verre']['correction_droit']['cylindre'] = ( -1 * abs($info_commande['verre']['correction_droit']['cylindre']));
    }

    if(isset($info_commande['verre']['correction_gauche'])){
        $sphere_gauche = ($info_commande['verre']['correction_gauche']['sphere'] + $info_commande['verre']['correction_gauche']['cylindre']);

        if(isset($info_commande['verre']['correction_gauche']['axe'])) {
            if ($axe_gauche < 90) {
                $axe_gauche += 90;
            } elseif ($axe_gauche >= 90) {
                $axe_gauche -= 90;
            }
        }

        $info_commande['verre']['correction_gauche']['cylindre'] = ( -1 * abs($info_commande['verre']['correction_gauche']['cylindre']));
    }

} else {

    if(isset($info_commande['verre']['correction_droit'])) {
        $sphere_droit = $info_commande['verre']['correction_droit']['sphere'];
    }


    if(isset($info_commande['verre']['correction_gauche'])) {
        $sphere_gauche = $info_commande['verre']['correction_gauche']['sphere'];
    }

}


$fl_droit = $fl_gauche = '';

if(isset($info_commande['verre']['correction_droit'])) {
    $fl_droit = 'Correction : <br> - Sphère : ' . $sphere_droit . ', Cylindre : ' . $info_commande['verre']['correction_droit']['cylindre'] .(isset($axe_droit) ? ', Axe : ' . $axe_droit : '') . (isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : ' . $info_commande['verre']['correction_droit']['addition'] : '') . (isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : ' . $info_commande['verre']['correction_droit']['degression'] : '') . '<br>';
    $correction_droit = 'Correction : <br> - Sphère : '.$sphere_droit.', Cylindre : '.$info_commande['verre']['correction_droit']['cylindre']. (isset($axe_droit) ? ', Axe : ' . $axe_droit : '') .(isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : '.$info_commande['verre']['correction_droit']['addition'] : '').(isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : '.$info_commande['verre']['correction_droit']['degression'] : '').'<br>';
}

if(isset($info_commande['verre']['correction_gauche'])) {
    $fl_gauche = 'Correction : <br> - Sphère : ' . $sphere_gauche . ', Cylindre : ' . $info_commande['verre']['correction_gauche']['cylindre'] . (isset($axe_gauche) ? ', Axe : ' . $axe_gauche : '') . (isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : ' . $info_commande['verre']['correction_gauche']['addition'] : '') . (isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : ' . $info_commande['verre']['correction_gauche']['degression'] : '') . '<br>';
    $correction_gauche = 'Correction : <br> - Sphère : '. $sphere_gauche.', Cylindre : '.$info_commande['verre']['correction_gauche']['cylindre'].(isset($axe_gauche) ? ', Axe : ' . $axe_gauche : '').(isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : '.$info_commande['verre']['correction_gauche']['addition'] : '').(isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : '.$info_commande['verre']['correction_gauche']['degression'] : '').'<br>';
}


if($bon_livraison[0]->type_optique == NULL || $bon_livraison[0]->type_optique == "verre") {

    if(isset($info_commande['precalibrage']['calibre']))
        $info_c = 'Précalibrage : '.$info_commande['precalibrage']['calibre'].'<br>';


    $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '';
    $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ': '';
    $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ': '';
    $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['diametre_utile']) ? 'Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>' : '';

    if(isset($info_commande['diametre_verre']))
        $info_c .= "Diamètre verre : ".$info_commande['diametre_verre']."<br>";

    if(!empty($mesure_freeform_opt)){
        $info_c .= 'Mesure freeform : <br> - ';
        $info_c .= $mesure_freeform_opt;
    }

    if(isset($info_commande['monture']['type']))
        $info_c .= 'Type monture : '.$info_commande['monture']['type'].'<br>';

    if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur']))
        $info_c .= 'EP au bord minimum : '.$info_commande['bord_verre']['epaisseur'].'<br>';


    if(isset($info_commande['verre']['galbe']))
        $option .= 'Galbe/base : '.$info_commande['verre']['galbe'].' ';

    if(isset($info_commande['verre']['angle_pantoscopique']))
        $option .= 'Angle pantoscopique : '.$info_commande['verre']['angle_pantoscopique'].' ';

    if(isset($info_commande['verre']['angle_galbe']))
        $option .= 'Angle de galbe : '.$info_commande['verre']['angle_galbe'].' ';

    if(isset($info_commande['verre']['distance_verre_oeil']))
        $option .= 'Distance verre oeil : '.$info_commande['verre']['distance_verre_oeil'].' ';

    if(isset($info_commande['verre']['miroir']))
        $option .= $options_miroir[$info_commande['verre']['miroir']['type_miroir']].' HMC face interne<br>';

    if(!empty($option)){
        $info_c .= 'Options : <br>';
        $info_c .= $option;
    }
}


$quantite = 1;

if($bon_livraison[0]->quantite_type_optique != NULL){
    $info_quantite_type_optique = json_decode($bon_livraison[0]->quantite_type_optique,true);
}

if(isset($info_commande['verre']['polarise'])){
    $bon_livraison[0]->libelle_verre = str_replace("polarisé",$info_commande['verre']['polarise'],$bon_livraison[0]->libelle_verre);
}

if(isset($info_commande['verre']['miroir_stock'])){
    $bon_livraison[0]->libelle_verre  = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$bon_livraison[0]->libelle_verre);
}

if($correction_droit != '') {
    $correction_droit .= $info_c;
}

if($correction_gauche != '') {
    $correction_gauche .= $info_c;
}

if($bon_livraison[0]->type_optique != "lentille") {

    if (isset($info_commande['verre']['hauteur'])) {

        if(isset($info_commande['verre']['correction_droit'])) {
            $correction_droit .= ' Hauteur : ' . $info_commande['verre']['hauteur'] . '<br>';
        }

        if(isset($info_commande['gauche']['correction_gauche'])) {
            $correction_gauche .= ' Hauteur : ' . $info_commande['verre']['hauteur'] . '<br>';
        }

    }
}

if($bon_livraison[0]->type_optique == NULL || $bon_livraison[0]->type_optique == "verre"){

    if(isset($info_commande['verre']['diametre'])) {
        $correction_droit .= 'Diametre : ' . $info_commande['verre']['diametre'];
        $correction_gauche .= 'Diametre : ' . $info_commande['verre']['diametre'];
    }

    if(isset($info_commande['verre']['ecart_puppillaire']['droit'])) {
        $correction_droit .= ' Ecart pupillaire : ' . $info_commande['verre']['ecart_puppillaire']['droit'];
    }

    if(isset($info_commande['verre']['ecart_puppillaire']['gauche'])) {
        $correction_gauche .= ' Ecart pupillaire : ' . $info_commande['verre']['ecart_puppillaire']['gauche'];
    }

    if(isset($info_commande['verre']['dioptrie_droit'])) {
        $correction_droit .= '<br>Prisme : <br>- Dioptrie : ' . $info_commande['verre']['dioptrie_droit'] . ' ';
    }

    if(isset($info_commande['verre']['dioptrie_gauche'])) {
        $correction_gauche .= '<br>Prisme : <br>- Dioptrie : ' . $info_commande['verre']['dioptrie_gauche'] . ' ';
    }

    if(isset($info_commande['verre']['base_droit'])) {
        $correction_droit .= 'Base : '.$info_commande['verre']['base_droit'].' Degrès';
    }

    if(isset($info_commande['verre']['base_gauche'])) {
        $correction_gauche .= 'Base : '.$info_commande['verre']['base_gauche'].' Degrès';
    }

    if(isset($info_commande['precalibrage']['calibre'])) {
        $correction_droit .= '<br><img src="static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="100" heigth="70" />';
        $correction_gauche .= '<br><img src="static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="100" heigth="70" />';
    }

}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta	http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="static/css/print_static.css" type="text/css" />
</head>

<body>

<div id="body">

    <div id="section_header">
    </div>

    <div id="content">

        <div class="page" style="font-size: 7pt">
			 <table style="width: 100%;">
                <tr>
                  <td width="227"><img src="static/img/logo.jpg" width="227" height="72" /></td>
                  <td>
                    <h1 style="text-align: right">Bon de livraison numéro <?php echo $bon_livraison[0]->intitule_bl; ?></h1>
                  </td>
                </tr>
          </table>
          <br><br>
		  
		  <table style="width: 100%; font-size: 8pt;height:150px">
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;">
                            <tr>
                                <td>
                                <?php
                                 echo '<table style="width: 100%;">
                                        <tr>
                                          <td>'.$data_admin['admin_info']->nom_societe.'</td>
                                        </tr>
                                        <tr>
                                          <td>'.$data_admin['admin_info']->adresse.'<br>'.
                                              $data_admin['admin_info']->cp.' '.$data_admin['admin_info']->ville.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             '.$data_admin['admin_info']->email.'
                                          </td>
                                        </tr>
                                       </table>'; 
                                ?>
                                </td>
                                <?php
                                  echo '<td>
                                          <table style="width: 100%;text-align:center;float:right;margin-top:-25px">
                                            <tr>
                                              <td style="">';
                                                  $data_encode = "";
                                                  $data_encode = urlencode("Date de commande : ".date("d/m/Y",strtotime($bon_livraison[0]->date_commande)).", Reference client : ".$bon_livraison[0]->reference_client.", Numero de BL : ".$bon_livraison[0]->intitule_bl.', Magasin : '.$user_info->nom_magasin.', Produit : '.($bon_livraison[0]->type_optique != NULL ? ucfirst($bon_livraison[0]->type_optique) : 'Verre').' '.($bon_livraison[0]->intitule_type_optique != NULL ? $bon_livraison[0]->intitule_type_optique : $bon_livraison[0]->libelle_verre).', D: '.strip_tags(str_replace('<br>', ' ', $fl_droit)).', G: '.strip_tags(str_replace('<br>', ' ', $fl_gauche)));

                                          echo  'Certification OptiEyes, flashez moi !<br>
                                                <img src="http://chart.apis.google.com/chart?chs=150x150&choe=ISO-8859-1&cht=qr&chl='.$data_encode.'" width="150" height="150" />
                                              </td>
                                            </tr>
                                          </table>
                                        </td>';
                                
                                ?>
                            </tr>
                        </table>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;">
                            <tr>
                                <td>
                                  <br><br><br><br><br><br>
                                    <?php
                                          echo '<table style="width: 100%;text-align:right;">
												  <tr>
													<td>'.$user_info->nom_societe.'<br>
													   '.$user_info->nom_magasin.'<br>'.
														 $user_info->adresse.'<br>'.
														 $user_info->cp.' '.$user_info->ville.'
													</td>
												  </tr>
												  <tr>
													<td>
													  Téléphone : '.wordwrap($user_info->tel_fixe,2," ",1).'
													</td>
												  </tr>
												  <tr>
													<td>
													  Fax : '.wordwrap($user_info->tel_fax,2," ",1).'
													</td>
												  </tr>
												</table>';
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
			
			<?php if($bon_livraison[0]->type_commande == 2)
					echo '<div style="-webkit-transform: rotate(0.65rad); -moz-transform: rotate(0.65rad); -ms-transform: rotate(0.65rad);position:absolute;top:310px;left:100px;font-size:80px;z-index:1;opacity: 0.3">CASSE ATELIER</div>';
				  else if($bon_livraison[0]->type_commande == 3)
					echo '<div style="-webkit-transform: rotate(0.65rad); -moz-transform: rotate(0.65rad); -ms-transform: rotate(0.65rad);position:absolute;top:310px;left:100px;font-size:70px;z-index:1;opacity: 0.3">ERREUR OPHTALMOLOGISTE</div>';
			?>

            <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;z-index:3">

                <tr>
                  <?php
                   echo'<td>Compte numéro : <strong>'.$user_info->id_users.'</strong></td>
					    <td>Réfence client : <strong>'.$bon_livraison[0]->reference_client.'</strong></td>
                        <td><span>Date: <strong>'.date("d/m/Y",strtotime($bon_livraison[0]->date_commande)).'</strong></td>';
                  ?>
                </tr>

            </table>

            <table class="change_order_items">

                <tbody>
                <tr>
                <?php
                  echo '<th>'.($bon_livraison[0]->type_optique != NULL ? ucfirst($bon_livraison[0]->type_optique) : 'Verre').'</th>';
                ?>
                    <th>Déscription</th>
                    <th>Quantité</th>
                </tr>

                
                <?php

                        if(isset($info_commande['verre']['correction_droit'])) {
                            echo '<tr class="'.($correction_gauche!='' ? 'odd_row' : 'even_row').'">';
                              echo '<td>'.($bon_livraison[0]->type_optique != NULL ? ucfirst($bon_livraison[0]->type_optique) : 'Verre').' oeil droit : '.($bon_livraison[0]->intitule_type_optique != NULL ? $bon_livraison[0]->intitule_type_optique : $bon_livraison[0]->libelle_verre).'</td>';
                                echo '<td>'.$correction_droit.'</td>';
                                echo '<td style="text-align: center">'.(isset($info_quantite_type_optique['quantite_droit']) ? $info_quantite_type_optique['quantite_droit'] : $quantite).'</td>';
                            echo '</tr>';
                        }


                        if(isset($info_commande['verre']['correction_gauche'])) {
                            $quantite = 1;
                             
                            echo '<tr class="'.($correction_droit!='' ? 'even_row' : 'odd_row').'">';
                                echo '<td>'.($bon_livraison[0]->type_optique != NULL ? ucfirst($bon_livraison[0]->type_optique) : 'Verre').' oeil gauche : '.($bon_livraison[0]->intitule_type_optique != NULL ? $bon_livraison[0]->intitule_type_optique : $bon_livraison[0]->libelle_verre).'</td>';
                                echo '<td>'.$correction_gauche.'</td>';
                                echo '<td style="text-align: center">'.(isset($info_quantite_type_optique['quantite_gauche']) ? $info_quantite_type_optique['quantite_gauche'] : $quantite).'</td>';
                            echo '</tr>';
                        }
                ?>

                </tbody>
            </table>

        </div>

    </div>
</div>
<div style="text-align:center;bottom:10;position: fixed;font-weight:bold">
    Bon de livraison
</div>
</body>
</html>