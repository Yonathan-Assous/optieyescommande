<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta	http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="static/css/print_static.css" type="text/css" />
</head>

<body>

<div style="font-size: 7pt;position:absolute;left:-15px;top:-15px;">
	<table>
		<tbody>
			<tr>
			<?php
				if(isset($etiquette) && $etiquette !== false){
					$compteur = 1;
					$total_etiquettes = 0;
					$compteurLigne = 1;
					
					$c = 3;
					if($colonne > 1 || $ligne > 1){
						for($j = 1; $j <= $ligne; $j++){
							if($j == $ligne)
								$c = $colonne - 1;
							
							for($i = 1; $i <= $c;$i++){
								
								$displayCylindre = true;
								$height = 140;
								$margin_left = $margin_right = $margin_center = false;
							
								if($compteurLigne == 2)
                  $height += 10;
						
                if($compteurLigne == 3)
                  $height += 5;
                
                /*if($compteurLigne == 4)
                  $height += 5;*/
                  
                if($compteur == 1)
                  $margin_left =true;
                  
                if($compteur == 2)
                  $margin_center =true;
                  
                if($compteur == 3)
                  $margin_right =true;
                  
                  
							
								echo '<td style="width:266px;min-width:266px;height:'.$height.'px;">
										<table style="width:266px;min-width:266px;height:'.$height.'px;'.($margin_left ? 'margin-left:-10px;' : '').' '.($margin_center ? 'margin-left:-10px;' : '').' '.($margin_right ? 'margin-left:-10px;' : '').'">';
									echo '<tr>
											<td>
												<table> 
													<tr>
														<td style="text-align:left;font-weight:bold;font-size:20px;width:30px"></td>
														<td style="width:175px;text-align:center;"></td>
														<td style="text-align:right;font-weight:bold;font-size:20px;width:30px"></td>
													</tr>
												</table>
											</td>
										  </tr>';
									echo '<tr>
											<td style="text-align:center;font-weight:bold;font-size:14px;width:100%;"></td>
										   </tr>';
									 echo '<tr>
											<td style="text-align:right;">
												<table>
													<tr>
														<td style="font-size:7px;text-align:left;width:140px;"></td>
														<td style="font-size:7px;text-align:right;width:105px"></td>
													</tr>
												</table>
											</td>
										   </tr>';
								echo '</table>
									</td>';
							
							
								if($compteur == 3){
									echo '</tr>';
									
									if($compteurLigne  == 7){
										echo '</tbody></table>';
										echo '<div style="page-break-before: always;"></div>';
										echo '<table><tbody>';
										$compteurLigne = 0;
									}
									
									echo '<tr>';
									
									$compteur = 0;
									$compteurLigne++;
								}
									
								$compteur++; 
							}
						}
					}

					$options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');


					foreach($etiquette as $value){

						$info_commande = json_decode($value->information_commande,true);

						$displayCylindre = true;
						$sign = "";
						$height = 140;
						$margin_left = $margin_right = $margin_center = false;
            $verre_seul = true;
            
            if(isset($info_commande['verre']['correction_droit']) && isset($info_commande['verre']['correction_gauche'])){
                $verre_seul = false;
            }
						
            
						if($info_commande['verre']['correction_'.$value->cote]['cylindre'] == 0)
							$displayCylindre = false;
						
						if($info_commande['verre']['correction_'.$value->cote]['cylindre'] > 0)
							$sign = "+";
						
						if($compteurLigne == 2)
							$height += 10;
						
						if($compteurLigne == 3)
							$height += 5;
						
						/*if($compteurLigne == 4)
							$height += 5;*/
							
						if($compteur == 1)
							$margin_left =true;
							
            			if($compteur == 2)
							$margin_center =true;
              
						if($compteur == 3)
							$margin_right =true;
							
						if(isset($info_commande['verre']['polarise'])){
							$value->libelle_verre = str_replace("polarisé",$info_commande['verre']['polarise'],$value->libelle_verre);
						}

						if(isset($info_commande['verre']['miroir_stock'])){
						   $value->libelle_verre = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$value->libelle_verre);
						}

              
						echo '<td style="width:266px;min-width:266px;height:'.$height.'px;">
								<table style="width:266px;min-width:266px;height:'.$height.'px;'.($margin_left ? 'margin-left:-10px;' : '').' '.($margin_center ? 'margin-left:-10px;' : '').' '.($margin_right ? 'margin-left:-10px;' : '').' margin-top:-10px">';
							echo '<tr>
									<td>';
                 
              echo '<table style="width: 100%;">
                      <tr>
                        <td width="45"><img src="static/img/logo.jpg" width="56" height="18" /></td>';
                  echo '<td style="text-align:center;">'.( $verre_seul ? 'Commandé seul' : '').'</td>';
                  echo '<td></td>';
                 echo '</tr>
                    </table>
										<table> 
											<tr>
												<td style="text-align:left;font-weight:bold;font-size:20px;width:30px">'.
												($value->cote == "droit" ? 'D' : (isset($info_commande['verre']['diametre_gauche']) ? $info_commande['verre']['diametre_gauche'] : ""))
												.'</td>
												<td style="width:175px;text-align:center;">'.
												$value->libelle_verre
												.'</td>
												<td style="'.($compteur == 3 ? 'text-align:center' : 'text-align:right').';font-weight:bold;font-size:20px;width:30px">'.
												($value->cote == "gauche" ? 'G' : (isset($info_commande['verre']['diametre']) ? $info_commande['verre']['diametre'] : ""))
												.'</td>
											</tr>
										</table>
									</td>
								  </tr>';
							if(strpos($value->libelle_verre, 'Panier A') !== false)
							{
							echo '<tr>
									<td style="text-align:center;font-weight:bold;font-size:14px;width:100%;background: rgba(135, 206, 250, 0.4) !important;">
										'.($info_commande['verre']['correction_'.$value->cote]['sphere']>0 ? '+' : '').number_format($info_commande['verre']['correction_'.$value->cote]['sphere'], 2, ',', ' ').($displayCylindre ? '('.$sign.number_format($info_commande['verre']['correction_'.$value->cote]['cylindre'], 2, ',', ' ').')' : '' ).' 
										'.((isset($info_commande['verre']['correction_'.$value->cote]['addition']) && $info_commande['verre']['correction_'.$value->cote]['addition'] != '') ? 'ADD '.number_format(floatval($info_commande['verre']['correction_'.$value->cote]['addition']), 2, '.', '') : '').'
									</td>
								   </tr>';
							}
							else
							{
								echo '<tr>
									<td style="text-align:center;font-weight:bold;font-size:14px;width:100%;">
										'.($info_commande['verre']['correction_'.$value->cote]['sphere']>0 ? '+' : '').number_format($info_commande['verre']['correction_'.$value->cote]['sphere'], 2, ',', ' ').($displayCylindre ? '('.$sign.number_format($info_commande['verre']['correction_'.$value->cote]['cylindre'], 2, ',', ' ').')' : '' ).' 
										'.((isset($info_commande['verre']['correction_'.$value->cote]['addition']) && $info_commande['verre']['correction_'.$value->cote]['addition'] != '') ? 'ADD '.number_format(floatval($info_commande['verre']['correction_'.$value->cote]['addition']), 2, '.', '') : '').'
									</td>
								   </tr>';
							}
							 echo '<tr>
									<td style="text-align:right;">
										<table>
											<tr>
												<td style="font-size:7px;text-align:left;width:100px;">
                          Date commande : <b>'.date("d/m/Y",strtotime($value->date_commande)).'</b><br>
													Reference Client : <b>'.$value->reference_client.'</b>
												</td>
												<td style="font-size:7px;text-align:left;width:145px">
													<b>Ref Optieyes : CR'.$value->id_commande."-<span style=\"font-size:14px\">".$value->id_users.'</span></b>
												</td>
											</tr>
										</table>
									</td>
								   </tr>';
						echo '</table>
							</td>';
							
						if($compteur == 3){
							echo '</tr>';
							
							if($compteurLigne  == 7){
								echo '</tbody></table>';
								echo '<div style="page-break-before: always;"></div>';
								echo '<table><tbody>';
								$compteurLigne = 0;
							}
							
							echo '<tr>';
							
							$compteur = 0;
							$compteurLigne++;
						}
							
						$compteur++;
						$total_etiquettes++;
					}

					if(isset($control)) {
						$this->db->set('value', $total_etiquettes)->where('id', $control['etiquettes'])->update('controle');
					}


				}
			?>
			</tr>
		</tbody>
	</table>
</div>

</body>
</html>