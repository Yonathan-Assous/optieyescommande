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

						$compteurCommande = 1;
                        $commandeParPage = 3;

                        $nombreCommande = count($commande_journaliere);
						$options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange');
						
                        foreach($commande_journaliere as $key => $value){

                            $info_commande = json_decode($value->information_commande,true);
                            $correction_droit = $correction_gauche = $option = $prisme_droit = $prisme_gauche = "";

                            if(isset($info_commande['verre']['correction_droit'])){

                                if($value->id_type_generation_verre == 5){
                                   $cylindre = ( -1 * abs($info_commande['verre']['correction_droit']['cylindre']));
                                   $sphere = ($info_commande['verre']['correction_droit']['sphere'] + $info_commande['verre']['correction_droit']['cylindre']);
                                   
                                   $info_commande['verre']['correction_droit']['cylindre'] = $cylindre;
                                   $info_commande['verre']['correction_droit']['sphere'] = $sphere;
                                }

                                if($value->id_type_generation_verre == 4){

                                    $cylindre = ( -1 * abs($info_commande['verre']['correction_droit']['cylindre']));
                                    $sphere = ($info_commande['verre']['correction_droit']['sphere'] + $info_commande['verre']['correction_droit']['cylindre']);

                                    $info_commande['verre']['correction_droit']['cylindre'] = $cylindre;
                                    $info_commande['verre']['correction_droit']['sphere'] = $sphere;

                                    if($info_commande['verre']['correction_droit']['axe']) {
                                        if ($info_commande['verre']['correction_droit']['axe'] < 90) {
                                            $info_commande['verre']['correction_droit']['axe'] += 90;
                                        } elseif ($info_commande['verre']['correction_droit']['axe'] >= 90) {
                                            $info_commande['verre']['correction_droit']['axe'] -= 90;
                                        }
                                    }

                                }
                                
                                $correction_droit = "OD : ".$info_commande['verre']['correction_droit']['sphere']."(".$info_commande['verre']['correction_droit']['cylindre'].")".(isset($info_commande['verre']['correction_droit']['axe']) ? $info_commande['verre']['correction_droit']['axe']."°" : "").(isset($info_commande['verre']['correction_droit']['addition']) ? " ADD ".$info_commande['verre']['correction_droit']['addition'] : "").(isset($info_commande['verre']['correction_droit']['degression']) ? " DEG ".$info_commande['verre']['correction_droit']['degression'] : "");
                            }
                            
                            if(isset($info_commande['verre']['correction_gauche'])){

                                if($value->id_type_generation_verre == 5){
                                  $cylindre = ( -1 * abs($info_commande['verre']['correction_gauche']['cylindre']));
                                  $sphere = ($info_commande['verre']['correction_gauche']['sphere'] + $info_commande['verre']['correction_gauche']['cylindre']);
                                  
                                  $info_commande['verre']['correction_gauche']['cylindre'] = $cylindre;
                                  $info_commande['verre']['correction_gauche']['sphere'] = $sphere;
                                }

                                if($value->id_type_generation_verre == 4){

                                    $cylindre = ( -1 * abs($info_commande['verre']['correction_gauche']['cylindre']));
                                    $sphere = ($info_commande['verre']['correction_gauche']['sphere'] + $info_commande['verre']['correction_gauche']['cylindre']);

                                    $info_commande['verre']['correction_gauche']['cylindre'] = $cylindre;
                                    $info_commande['verre']['correction_gauche']['sphere'] = $sphere;


                                    if($info_commande['verre']['correction_gauche']['axe']) {
                                        if ($info_commande['verre']['correction_gauche']['axe'] < 90) {
                                            $info_commande['verre']['correction_gauche']['axe'] += 90;
                                        } elseif ($info_commande['verre']['correction_gauche']['axe'] >= 90) {
                                            $info_commande['verre']['correction_gauche']['axe'] -= 90;
                                        }
                                    }


                                }



                                $correction_gauche = "OG : ".$info_commande['verre']['correction_gauche']['sphere']."(".$info_commande['verre']['correction_gauche']['cylindre'].")".(isset($info_commande['verre']['correction_gauche']['axe']) ? $info_commande['verre']['correction_gauche']['axe']."°" : "").(isset($info_commande['verre']['correction_gauche']['addition']) ? " ADD ".$info_commande['verre']['correction_gauche']['addition'] : "").(isset($info_commande['verre']['correction_gauche']['degression']) ? " DEG ".$info_commande['verre']['correction_gauche']['degression'] : "");
                            }

                            echo'<table style="width: 100%;" class="header">
                                    <tr>
                                        <td><h1 style="text-align: left; display: block; width: 100%">Magasin '.$value->id_users.' CR'.$value->id_commande.'-'.$value->id_users.'</h1></td>
                                        <td style="text-align: right;">'.(isset($value->tel_fixe) ? '<span style="font-size: 20px">Tel: '.$value->tel_fixe.'</span>' : '').'</td>
                                    </tr>
                                </table>

                                <table style="width: 100%; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 8pt;">
                                    <tr>
                                        <td colspan="5"><strong>'.$value->reference_client.'</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><strong>'.$value->id_users.'</strong></td>
                                    </tr>';

                               if(isset($info_commande['precalibrage']['calibre'])){
                                   echo '<tr>
                                            <td colspan="5"><img src="static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="100" heigth="70" /></td>
                                        </tr>';
                               }

                                if(isset($info_commande['mesure_freeform']['largeur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']) || isset($info_commande['mesure_freeform']['taille_du_pont']) || isset($info_commande['mesure_freeform']['diametre_utile']) || isset($info_commande['monture']['type'])){
                                   echo '<tr>
                                            <td>'.(isset($info_commande['mesure_freeform']['largeur_boxing']) ? '<strong> A='.$info_commande['mesure_freeform']['largeur_boxing'].'</strong>    ' : '').
                                                  (isset($info_commande['mesure_freeform']['hauteur_boxing']) ? '<strong> B='.$info_commande['mesure_freeform']['hauteur_boxing'].'</strong>    ' : '').
                                                  (isset($info_commande['mesure_freeform']['taille_du_pont']) ? '<strong> C='.$info_commande['mesure_freeform']['taille_du_pont'].'</strong>    ' : '').
                                                  (isset($info_commande['mesure_freeform']['diametre_utile']) ? '<strong> D='.$info_commande['mesure_freeform']['diametre_utile'].'</strong>    ' : '').
												  (isset($info_commande['monture']['type']) ? ' <strong>'.$info_commande['monture']['type'].'</strong>': '').
                                           '</td>
                                        </tr>';
                                }

							   echo '<tr>
										<td colspan="5"><strong>'.$value->type_generation_verre.'</strong></td>
									</tr>';

                   if(isset($info_commande['verre']['polarise'])){
                      $value->libelle_verre = str_replace("polarisé",$info_commande['verre']['polarise'],$value->libelle_verre);
                   }
                   
                   if(isset($info_commande['verre']['miroir_stock'])){
                      $value->libelle_verre  = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$value->libelle_verre);
                   }

                               echo '<tr>
                                        <td colspan="5"><strong>'.$value->libelle_verre.'</strong></td>
                                    </tr>';

                                if($correction_droit!=""){
                                    echo'<tr>
                                            <td><strong>'.$correction_droit.'</strong></td>';
											
											if(isset($info_commande['verre']['ecart_puppillaire']['droit']))
												echo '<td><strong>EPD: '.$info_commande['verre']['ecart_puppillaire']['droit'].'</strong></td>';
											
											if(isset($info_commande['verre']['hauteur']))
												echo '<td><strong>HD: '.$info_commande['verre']['hauteur'].'</strong></td>';
												
											if(isset($info_commande['verre']['diametre']))
												echo '<td><strong>Diamètre: '.$info_commande['verre']['diametre'].'</strong></td>';
											
                                    echo '</tr>';
                                }

                                if($correction_gauche!=""){
                                    echo'<tr>
                                            <td><strong>'.$correction_gauche.'</strong></td>';
											
											if(isset($info_commande['verre']['ecart_puppillaire']['gauche']))
												echo '<td><strong>EPD: '.$info_commande['verre']['ecart_puppillaire']['gauche'].'</strong></td>';
											
											if(isset($info_commande['verre']['hauteur_gauche']))
												echo '<td><strong>HD: '.$info_commande['verre']['hauteur_gauche'].'</strong></td>';
											
											if(isset($info_commande['verre']['diametre_gauche']))
												echo '<td><strong>Diamètre: '.$info_commande['verre']['diametre_gauche'].'</strong></td>';
											else if(isset($info_commande['verre']['diametre']))
												echo '<td><strong>Diamètre: '.$info_commande['verre']['diametre'].'</strong></td>';
												
                                    echo '</tr>';
                                }

                                if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur'])){
                                    echo '<tr>
                                            <td><strong>EPB: '.$info_commande['bord_verre']['epaisseur'].'</strong></td>
                                          </tr>';
                                }
								
                if(isset($info_commande['diametre_verre']))
                  $option .= "Diamètre verre : ".$info_commande['diametre_verre']." ";
								 
								if(isset($info_commande['verre']['galbe']))
									$option .= "Galbe/base : ".$info_commande['verre']['galbe']." ";
								
								if(isset($info_commande['verre']['angle_pantoscopique']))
									$option .= "Angle pantoscopique : ".$info_commande['verre']['angle_pantoscopique']." ";
									
								if(isset($info_commande['verre']['angle_galbe']))
									$option .= "Angle de galbe : ".$info_commande['verre']['angle_galbe']." ";
									
								if(isset($info_commande['verre']['distance_verre_oeil']))
									$option .= "Distance verre oeil : ".$info_commande['verre']['distance_verre_oeil'];
									
								if(isset($info_commande['verre']['miroir']))
									$option .= "- ".$options_miroir[$info_commande['verre']['miroir']['type_miroir']]." HMC face interne";
									
								if(!empty($option))
									echo '<tr><td><strong>Option(s) : </strong>'.$option.'</td></tr>';
									
								if(isset($info_commande['verre']['dioptrie_droit']))
                                    $prisme_droit .= "Dioptrie : ".$info_commande['verre']['dioptrie_droit']." ";

                                if(isset($info_commande['verre']['base_droit']))
                                    $prisme_droit .= "Base :".$info_commande['verre']['base_droit']." Degrès";


                                if(isset($info_commande['verre']['dioptrie_gauche']))
                                    $prisme_gauche .= "Dioptrie : ".$info_commande['verre']['dioptrie_gauche']." ";

                                if(isset($info_commande['verre']['base_gauche']))
                                    $prisme_gauche .= "Base : ".$info_commande['verre']['base_gauche']." Degrès";

                                if(!empty($prisme_droit))
                                    echo '<tr>
                                              <td>
												<strong>Prisme droit : </strong>'.$prisme_droit.'
                                              </td>
                                          </tr>';

                                if(!empty($prisme_gauche))
                                    echo '<tr>
                                              <td>
												<strong>Prisme gauche : </strong>'.$prisme_gauche.'
                                              </td>
                                          </tr>';

                                if(!empty($value->commentaire)){
                                    echo '<tr>
                                            <td><strong>Commentaire : '.$value->commentaire.'</strong></td>
                                          </tr>';
                                }

                                echo '</table>';

                            if($compteurCommande!=$nombreCommande)
								if($compteurCommande%$commandeParPage == 0){
									echo '<div style="page-break-before: always;"></div>';

								}else
									echo '<br><br><br>';
									
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