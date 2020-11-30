<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

<div id="body">

    <div id="section_header">
	  <table>
		<tbody>
			<tr>
				<td style="width:350px">
        <?php
        if($envoi_chine == 1){
			echo '<strong>Order of '.date('m/d/Y',strtotime("-1 days")).' day Maxime DARMON</strong><br>';
        }
        ?>
					<strong>OPTIEYES FRANCE</strong>
				</td>
        <?php 
        
        if($envoi_chine == 1){
            $left = 'LEFT';
            $right = 'RIGHT';
            echo '<td>(I order you lenses in cyl - but write cyl + on my enveloppes.Example: If i order you -4(-2), write -6(+2) on my enveloppe. Thank you)</td>';
        }
        else {
            $left = 'GAUCHE';
            $right = 'DROITE';
        }
        
        ?>
			</tr>
		</tbody>
	  </table>
      
    </div>
    <br><br>

    <div id="content">

        <div class="page" style="font-size: 7pt">
            <?php

                if(is_array($commande_journaliere)){
                    $libelle_verre = "";
                    
                    $list_verre = array();
                    $options_miroir = array(1 => 'BLUE', 2 => 'SILVER', 3 => 'GOLD', 4 => 'GREEN', 5 => 'RED', 6 => 'ORANGE', 7 => 'PINK' ,8 => 'PURPLE', 9 => 'YELLOW', 10 => 'FLASH');
                    $options_miroir_mail = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');

                  //  var_dump($commande_journaliere);
                    foreach($commande_journaliere as $key => $value){
                    
                    	if(!empty($value->trad_fr))
						{
							$value->libelle_verre = $value->trad_fr;
						}

                       $info_commande = json_decode($value->information_commande, true);
						
						if ((strpos($value->libelle_verre, 'Gris') !== false || strpos($value->libelle_verre, 'Brun') !== false || strpos($value->libelle_verre, 'G15') !== false ) && strpos($value->libelle_verre, 'Polarisé') === false)
						{
						//echo $info_commande['verre']['teinte']."<br>";
						//	var_dump($value);
                        if($value->libelle_verre == "Prog Eco 1,5 HMC") {

                            /*echo '<pre>';
                            var_dump($info_commande['verre']);
                            echo '</pre>';*/

                        }

                       $name = $name_gauche = "";
                       
                       if($envoi_chine == 1){


                         if(strpos($value->libelle_verre, '#diametre#') !== false){
                         	if(isset($info_commande['verre']['correction_droit']['diametre']))
                         	{
                         		 $name = str_replace('#diametre#',$info_commande['verre']['correction_droit']['diametre'], $value->libelle_verre);
                         	}
                         	else
                         	{
                            	if(isset($info_commande['verre']['diametre']))
                              	$name = str_replace('#diametre#',$info_commande['verre']['diametre'], $value->libelle_verre);
                            } 
                            
                            if(isset($info_commande['verre']['correction_gauche']['diametre']))
                         	{
                         		 $name_gauche = str_replace('#diametre#',$info_commande['verre']['correction_gauche']['diametre'], $value->libelle_verre);
                         	}
                         	else
                         	{
                            	if(isset($info_commande['verre']['diametre_gauche']))
                              		$name_gauche = str_replace('#diametre#',$info_commande['verre']['diametre_gauche'], $value->libelle_verre);
                            }
                         } else {
                         	if(isset($info_commande['verre']['correction_droit']['diametre']))
                         	{
                         		 $name = $value->libelle_verre." ".$info_commande['verre']['correction_droit']['diametre'];
                         	}
                         	else
                         	{
								if(isset($info_commande['verre']['diametre']))
								  $name = $value->libelle_verre." ".$info_commande['verre']['diametre'];
							}
                            
                            if(isset($info_commande['verre']['correction_gauche']['diametre']))
                         	{
                         		 $name_gauche = $value->libelle_verre." ".$info_commande['verre']['correction_gauche']['diametre'];
                         	}
                         	else
                         	{
								if(isset($info_commande['verre']['diametre_gauche']))
								  $name_gauche = $value->libelle_verre." ".$info_commande['verre']['diametre_gauche'];
							}
                         }
                       
                       if(strpos($value->traduction, '{color}') !== false) {
                       		if (strpos($value->libelle_verre, 'Miroir Argent') !== false) {
                               $name = str_replace('{color}','SILVER', $value->traduction);
                               $name_gauche = str_replace('{color}','SILVER', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Bleu') !== false) {
                               $name = str_replace('{color}','BLUE', $value->traduction);
                               $name_gauche = str_replace('{color}','BLUE', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Doré') !== false) {
                               $name = str_replace('{color}','GOLD', $value->traduction);
                               $name_gauche = str_replace('{color}','GOLD', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Vert') !== false) {
                               $name = str_replace('{color}','GREEN', $value->traduction);
                               $name_gauche = str_replace('{color}','GREEN', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Rouge') !== false) {
                               $name = str_replace('{color}','RED', $value->traduction);
                               $name_gauche = str_replace('{color}','RED', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Orange') !== false) {
                               $name = str_replace('{color}','ORANGE', $value->traduction);
                               $name_gauche = str_replace('{color}','ORANGE', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Rose') !== false) {
                               $name = str_replace('{color}','PINK', $value->traduction);
                               $name_gauche = str_replace('{color}','PINK', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Violet') !== false) {
                               $name = str_replace('{color}','PURPLE', $value->traduction);
                               $name_gauche = str_replace('{color}','PURPLE', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Jaune') !== false) {
                               $name = str_replace('{color}','YELLOW', $value->traduction);
                               $name_gauche = str_replace('{color}','YELLOW', $value->traduction);
                           }
                           if (strpos($value->libelle_verre, 'Miroir Flash') !== false) {
                               $name = str_replace('{color}','FLASH', $value->traduction);
                               $name_gauche = str_replace('{color}','FLASH', $value->traduction);
                           }
                       		
                          /* if (isset($info_commande['verre']['miroir_stock']['type_miroir'])) {
                               $name = str_replace('{color}',$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']], $value->traduction);
                               $name_gauche = str_replace('{color}',$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']], $value->traduction);
                           }*/
                           
                       }

                       } else {
                       	   if(isset($info_commande['verre']['correction_droit']['diametre']))
                       	   {
                       	   		$name = $value->libelle_verre." ".$info_commande['verre']['correction_droit']['diametre'];
                       	   }
                       	   else
                       	   {
							   if(isset($info_commande['verre']['diametre']))
								  $name = $value->libelle_verre." ".$info_commande['verre']['diametre'];
                           }
                            
                           if(isset($info_commande['verre']['correction_gauche']['diametre']))
                       	   {
                       	   		$name_gauche = $value->libelle_verre." ".$info_commande['verre']['correction_gauche']['diametre'];
                       	   }
                       	   else
                       	   {
								if(isset($info_commande['verre']['diametre_gauche']))
								  $name_gauche = $value->libelle_verre." ".$info_commande['verre']['diametre_gauche'];
						   }

                           if(strpos($value->libelle_verre, '{color}') !== false) {
                               if (isset($info_commande['verre']['miroir_stock']['type_miroir'])) {
                                   $name = str_replace('miroir',$options_miroir_mail[$info_commande['verre']['miroir_stock']['type_miroir']], $name);
                                   $name_gauche = str_replace('miroir',$options_miroir_mail[$info_commande['verre']['miroir_stock']['type_miroir']], $name_gauche);
                               }
                           }
                       }
                       
                        if(($name != "" && !isset($list_verre[$name])) || ($name_gauche != "" && !isset($list_verre[$name_gauche]))){
                        
                          if(isset($info_commande['verre']['correction_droit']['diametre']) && !isset($list_verre[$name]))
                          	$list_verre[$name] = array();
                          	
                          if(isset($info_commande['verre']['correction_gauche']['diametre']) && !isset($list_verre[$name]))
                          	$list_verre[$name_gauche] = array();
                       	   
                          if(isset($info_commande['verre']['diametre']) && !isset($list_verre[$name]))
                            $list_verre[$name] = array();
                          
                          if(isset($info_commande['verre']['diametre_gauche']) && !isset($list_verre[$name_gauche]))
                            $list_verre[$name_gauche] = array();
                            
                        }
                       
                       if(isset($info_commande['verre']['correction_droit'])){


                          if(isset($info_commande['verre']['correction_droit']['addition']) && $info_commande['verre']['correction_droit']['addition'] > 0) {
                              $addition = number_format(floatval($info_commande['verre']['correction_droit']['addition']),2, '.', '').' '.$right;

                              $list_verre[$name][] = array(
                                  'correction' => $info_commande['verre']['correction_droit']['sphere'],
                                  'addition' => $addition
                              );

                          }
                          else {

                            $correction_droit = $info_commande['verre']['correction_droit']['sphere'].'|'.$info_commande['verre']['correction_droit']['cylindre'];

                              if(isset($list_verre[$name][$correction_droit])){
                                  $list_verre[$name][$correction_droit] += 1;
                              } else
                                  $list_verre[$name][$correction_droit] = 1;
                          }


                           

                       }
                       
                       if(isset($info_commande['verre']['correction_gauche'])) {

                           if(isset($info_commande['verre']['correction_gauche']['addition']) && $info_commande['verre']['correction_gauche']['addition'] > 0) {
                               $addition = number_format(floatval($info_commande['verre']['correction_gauche']['addition']), 2, '.', '').' '.$left;

                               $list_verre[$name][] = array(
                                   'correction' => $info_commande['verre']['correction_gauche']['sphere'],
                                   'addition' => $addition
                               );

                           }
                           else {

                               $correction_gauche = $info_commande['verre']['correction_gauche']['sphere'].'|'.$info_commande['verre']['correction_gauche']['cylindre'];

                               if(isset($list_verre[$name_gauche][$correction_gauche])){
                                   $list_verre[$name_gauche][$correction_gauche] += 1;
                               } else
                                   $list_verre[$name_gauche][$correction_gauche] = 1;
                           }

                   

                        }
					}
                    }

                    $compteur = 0;
                    $compteur_commande = 0;
                    $page = 1;

                    foreach($list_verre as $verre => $list){
                         if($compteur == 1){
                            $compteur = 0;
                            echo '</tr></tbody></table>';
                            
                            if(($page == 1 && $compteur_commande == 7) || $compteur_commande == 9){
                              $compteur_commande = 0;
                              $page++;
                              echo '<div style="page-break-before: always;"></div>';
                            }
                         }
                         
                         if($compteur == 0){
                            echo '<table style="width: 100%;">
                                      <tbody><tr><td style="width:500px;">';
                         }
                         
                         echo '<table style="width:500px;font-size:14px">
                                  <tr>
                                    <td colspan="5"><strong>'.$verre.'</strong></td>
                                  </tr>';

                            // BULLSHIT
                            if($verre == 'Prog Eco 1,5 HMC 70' || $verre == 'PROGRESSIF LENSES 1,56 HMC (CORRIDOR 14MM) 70') {

                                $progeco = array();
                                $eco = array();
                                $vi = 0;

                                foreach($list as $k => $v) {
                                    $progeco[$vi] = array('name' => $v['correction'].' ADD '.$v['addition'], 'count' => 1);
                                    ++$vi;
                                }

                                $progeco = array_reverse($progeco);

                                // TODO GESTION DE VERRES EN PLUSIEURS EXEMPLAIRES A LA SUITE
                                foreach($progeco as $k) {
                                    if($envoi_chine == 1){
                                        echo $k['count'].( $k['count'] > 1 ? " lenses " : " lens ");
                                    }
                                    else {
                                        echo $k['count'].( $k['count'] > 1 ? " verres " : " verre ");
                                    }

                                    echo $k['name'].'<br />';
                                }

                            }
                            else {

                                foreach($list as $key => $value){
                                    $data = explode("|", $key);

                                   /* if($envoi_chine == 1){
                                        $cylindre = ( -1 * abs($data[1]));
                                        $sphere = ($data[0] + $data[1]);
                                    } else {*/
                                        $cylindre = $data[1];
                                        $sphere = $data[0];
                                   // }

                                    $correction = ($sphere > 0 ? '+' : '').$sphere.($cylindre !=0 ? " (".(($cylindre > 0 ? '+' : '').$cylindre).")" : "");


                                    if($envoi_chine == 1){
                                        echo'<tr>
                                      <td colspan="5">'.$value.($value > 1 ? " lenses " : " lens ").$correction.'</td>
                                     </tr>';
                                    } else {
                                        echo'<tr>
                                      <td colspan="5">'.$value.($value > 1 ? " verres " : " verre ").$correction.'</td>
                                     </tr>';
                                    }

                                }

                            }

                          
                          $compteur++;
                          $compteur_commande++;
                          
                          echo '</table><br><br></td>';   
                          
                         /* if($compteur == 1){
                            echo '<td style="width:500px;">';
                          }*/
                    }
                }
            ?>
            
        </div>
    </div>
</div>
</body>
</html>