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


				foreach($etiquette as $value){



					$info_commande = json_decode($value->information_commande,true);

//                    var_dump($info_commande);die;

                    foreach($info_commande as $monture)
					{
					    $qty = 1;
					    if (isset($monture['qty'])) {
                            $qty = $monture['qty'];
                        }
					    for ($i = 1; $i <= $qty; $i++) {
                            if(isset($monture['pack_id'])  && isset($monture['pack']))
                            {
                                if($monture['pack']!=null)
                                {
                                    $montures_du_pack = $this->m_montures->getAllMonturesDuPack($monture['pack_id']);
                                    foreach($montures_du_pack as $p_montures)
                                    {
                                        $sign = "";
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
												<table style="width:266px;min-width:266px;height:'.$height.'px;'.($margin_left ? 'margin-left:-10px;' : '').' '.($margin_center ? 'margin-left:-10px;' : '').' '.($margin_right ? 'margin-left:-10px;' : '').' margin-top:-10px">';
                                        echo '<tr>
													<td>';


                                        echo '<table style="width: 100%;">
									  <tr>
										<td width="45"></td>';
                                        echo '<td style="text-align:center;"></td>';
                                        echo '<td></td>';
                                        echo '</tr>
									</table>
														
													</td>
												  </tr>';
                                        echo '<tr>
													<td style="text-align:center;;font-size:14px;width:100%;">';
                                        echo 'Modele: '.$p_montures->modele.' <br>
Couleur: '.$p_montures->couleur;
                                        echo '<br>
<b>Magasin: '.$value->id_users.'</b><br>
<b>Référence: '.$value->reference_client.'</b></td>
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
                                }
                            }
                            if($monture['modele']!=null)
                            {
                                $sign = "";
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
										<table style="width:266px;min-width:266px;height:'.$height.'px;'.($margin_left ? 'margin-left:-10px;' : '').' '.($margin_center ? 'margin-left:-10px;' : '').' '.($margin_right ? 'margin-left:-10px;' : '').' margin-top:-10px">';
                                echo '<tr>
											<td>';


                                echo '<table style="width: 100%;">
							  <tr>
								<td width="45"></td>';
                                echo '<td style="text-align:center;"></td>';
                                echo '<td></td>';
                                echo '</tr>
							</table>
												
											</td>
										  </tr>';
                                echo '<tr>
											<td style="text-align:center;;font-size:14px;width:100%;">
												';
                                echo 'Modele: '.$monture['modele'].'<br>
							Couleur: '.$monture['couleur'];
                                echo '<br><b>Magasin: '.$value->id_users.'</b><br>
								  <b>Référence: '.$value->reference_client.'</b>
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
                        }

					} // Etiquette
				}

			}
			?>
		</tr>
		</tbody>
	</table>
</div>

</body>
</html>