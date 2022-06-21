<!doctype html>
<html lang="fr" style="margin:0;padding:0">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="STYLESHEET" href="static/css/print_static.css" type="text/css" />
</head>

<style>
    b.delta {
        font-family: DejaVu Sans, sans-serif !important;
        margin-left: 10px;
    }
</style>

<body style="box-sizing: border-box;">

    <?php

    setlocale(LC_TIME, "fr_FR.UTF-8");
    $delta = '<b class="delta">&#916;</b>';
    
    $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

    if(isset($certificat) && $certificat !== false){

        $civilite = array(0 => '', 1 => 'Mme', 2 => 'M.', 3 => 'Mlle', 4 => '');
        $certifs = count($certificat);

        $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');

        $i = 0;

        foreach($certificat as $value) {

        if ($info_client = json_decode($value->information_certificat, true)) {

            $info_commande = json_decode($value->information_commande, true);
            $user_info = $this->m_users->getUserById($value->id_users);

            $correction_droit = $correction_gauche = $info_c = $options = '';


            ?>

            <div class="preview_auth_card" <?php if ($i > 0) echo 'style="top: 6px;"' ?>>

                <span class="titre optieyes"></span>

                <?php if (isset($logo)) echo '<img class="card_logo" src="static/img/logo.jpg" />'; ?>

                <div class="info" <?php if ($i > 0) echo 'style="margin-top: -6px;"' ?>>
                    <span class="ref"><?php echo $value->id_commande ?></span>
                    <span class="date"><?php echo strftime('%d %B %Y', time()) ?></span>
                </div>

                <div class="client" <?php if ($i > 0) echo 'style="margin-top: -6px;"' ?>>
                    <span class="civilite"><?php echo $civilite[$info_client['civilite_client']] ?></span> <span class="nom_client"><b class="nom"><?php echo $info_client['nom_client'] ?></b> <b class="prenom"><?php echo $info_client['prenom_client'] ?></b></span>
                </div>

                <?php

                $cstyles = '';
                $ostyles = '';

                if(!isset($info_commande['verre']['miroir']['type_miroir']) && !isset($info_commande['verre']['galbe'])) {
                    $cstyles .= 'top: 85px;';
                    $ostyles .= 'top: 115px;';
                }

                if($i > 0) {
                    $cstyles .= 'margin-top: -6px';
                }

                $table = '<table>';
                
                if(!empty($value->trad_fr))
                {
                	$value->libelle_verre = $value->trad_fr;
                }

                ?>

                <div class="corrections" <?php echo 'style="'.$cstyles.'"' ?>>
                    <?php
				/*	if(strpos($value->libelle_verre, 'Panier A') !== false)
					{
						if (isset($info_commande['verre']['correction_droit'])) {

							$sph = number_format($info_commande['verre']['correction_droit']['sphere'], 2);
							$cyl = number_format($info_commande['verre']['correction_droit']['cylindre'], 2);
							$cyl_sign = $info_commande['verre']['correction_droit']['cylindre'] != 0 ? '+' : '-';
							
							if($cyl == 0) {
								$cyl_axe = '';
							}
							else {
								$cyl_axe = ' (' . $cyl_sign . $cyl . ') ';
							}
							
							//$cyl_axe = ' (' . $cyl_sign . $cyl . ') ';

							$table .='<tr>
								<td class="correct">OD: ' . $sph . $cyl_axe . ' </td>
							</tr>'."\n";
						}
						if (isset($info_commande['verre']['correction_gauche'])) {

							$sph = number_format($info_commande['verre']['correction_gauche']['sphere'], 2);
							$cyl = number_format($info_commande['verre']['correction_gauche']['cylindre'], 2);
							$cyl_sign = $info_commande['verre']['correction_gauche']['cylindre'] != 0 ? '+' : '-';
							
							if($cyl == 0) {
								$cyl_axe = '';
							}
							else {
								$cyl_axe = ' (' . $cyl_sign . $cyl . ') ';
							}
							
							//$cyl_axe = ' (' . $cyl_sign . $cyl . ') ';

							$table .='<tr>
								<td class="correct">OG: ' . $sph . $cyl_axe . ' </td>
							</tr>'."\n";
						}
						$table .= '</table>';

						echo $table;

						echo '</div>';
					}
					else
					{*/
						if (isset($info_commande['verre']['correction_droit'])) {

							$sph = number_format($info_commande['verre']['correction_droit']['sphere'], 2);
							$cyl = number_format($info_commande['verre']['correction_droit']['cylindre'], 2);
							$cyl_sign = $info_commande['verre']['correction_droit']['cylindre'] != 0 ? '+' : '-';
							$axe = $info_commande['verre']['correction_droit']['axe'];
							$diopt = "";
							$base = '';

							if (isset($info_commande['verre']['correction_droit']['PrismeSphere']) && $info_commande['verre']['correction_droit']['PrismeSphere'] != "")
								$diopt = $info_commande['verre']['correction_droit']['PrismeSphere'].$delta;

							if (isset($info_commande['verre']['correction_droit']['PrismeCylindre']) && $info_commande['verre']['correction_droit']['PrismeCylindre'] != "")
								$base = ' base ' . $info_commande['verre']['correction_droit']['PrismeCylindre'] . '°';

							if($cyl == 0) {
								$cyl_axe = '';
							}
							else {
								$cyl_axe = ' (' . $cyl_sign . $cyl . ') ' . $axe . '° ';
							}
							
							//$cyl_axe = ' (' . $cyl_sign . $cyl . ') ' . $axe . '° ';

							$table .='<tr>
								<td class="correct">OD: ' . $sph . $cyl_axe . ' </td>
								<td>'.((isset($info_commande['verre']['correction_droit']['addition']) && $value->id_generation_verre != 34) ? ' ADD ' . $info_commande['verre']['correction_droit']['addition'] : '') . ((isset($info_commande['verre']['correction_droit']['degression']) || $value->id_generation_verre == 34) ? ' DEG ' . $info_commande['verre']['correction_droit']['addition'] : '').'</td>
								<td class="prisme">';
								
							if($diopt != "")
								$table .='<span class="diopt">' . $diopt . '</span>';
								
							if($base != "")
								$table .='<span class="base">' . $base . '</span>';
								
							$table .='</td></tr>'."\n";
						}

						if (isset($info_commande['verre']['correction_gauche'])) {

							$sph = number_format($info_commande['verre']['correction_gauche']['sphere'], 2);
							$cyl = number_format($info_commande['verre']['correction_gauche']['cylindre'], 2);
							$cyl_sign = $info_commande['verre']['correction_gauche']['cylindre'] != 0 ? '+' : '-';
							$axe = $info_commande['verre']['correction_gauche']['axe'];
							$diopt = $base = '';

							if (isset($info_commande['verre']['correction_gauche']['PrismeSphere']) && $info_commande['verre']['correction_gauche']['PrismeSphere'] != "")
								$diopt = $info_commande['verre']['correction_gauche']['PrismeSphere'].$delta;

							if (isset($info_commande['verre']['correction_gauche']['PrismeCylindre']) && $info_commande['verre']['correction_gauche']['PrismeCylindre'] != "")
								$base = ' base ' . $info_commande['verre']['correction_gauche']['PrismeCylindre'] . '°';

							if($cyl == 0) {
								$cyl_axe = '';
							}
							else {
								$cyl_axe = ' (' . $cyl_sign . $cyl . ') ' . $axe . '° ';
							}
							
							//$cyl_axe = ' (' . $cyl_sign . $cyl . ') ' . $axe . '° ';

							$table .= '<tr>
									<td class="correct">OG: ' . $sph . $cyl_axe . ' </td>
									<td>'.((isset($info_commande['verre']['correction_gauche']['addition'])  && $value->id_generation_verre != 34) ? ' ADD ' . $info_commande['verre']['correction_gauche']['addition'] : '') . ((isset($info_commande['verre']['correction_gauche']['degression'])  || $value->id_generation_verre == 34) ? ' DEG ' . $info_commande['verre']['correction_gauche']['addition'] : '').'</td>
									<td class="prisme">';
								
							if($diopt != "")
								$table .='<span class="diopt">' . $diopt . '</span>';
								
							if($base != "")
								$table .='<span class="base">' . $base . '</span>';
								
							$table .='</td></tr>'."\n";
						}

						$table .= '</table>';

						echo $table;

						echo '</div>';

						$sep = '';
						if (isset($info_commande['verre']['miroir']['type_miroir']) && isset($info_commande['verre']['galbe'])) {
							$sep = ', ';
						}

					//}
                    /*if(isset($info_commande['verre']['miroir']['type_miroir'])) {
                        $value->libelle_verre = str_replace('Durci', '', $value->libelle_verre);
                    }*/
                    
                    if($value->generation ==  "T-One")
					{
						$value->libelle_verre = str_replace("E-Space","T-One",$value->libelle_verre);
					}

                    if(strpos($value->libelle_verre, 'Panier A') !== false)
					{
						
						?>
                    <div class="verres" <?php echo 'style="'.$ostyles.'"' ?>>
						<?php
						if(isset($info_commande['verre']['correction_droit']['diametre']) || isset($info_commande['verre']['correction_gauche']['diametre']))
						{
							if (isset($info_commande['verre']['correction_droit'])) {
								?>
							<span class="nom_verre">Droit: <?php echo $value->libelle_verre;?>, <?php if (isset($info_commande['verre']['correction_droit']['diametre'])) {
									echo ' Diamètre: ' . $info_commande['verre']['correction_droit']['diametre'];
								} else {
									echo ' Précalibré';
								} ?></span>
							<?php
							}
							if (isset($info_commande['verre']['correction_gauche'])) {
								?>
								<br><span class="nom_verre">Gauche: <?php echo $value->libelle_verre;?>, <?php if (isset($info_commande['verre']['correction_droit']['diametre'])) {
									echo ' Diamètre ' . $info_commande['verre']['correction_droit']['diametre'];
								} else {
									echo 'Précalibré';
								} ?></span>
							<?php
							}
						}
						else
						{
							if (isset($info_commande['verre']['correction_droit'])) {
								?>
							<span class="nom_verre">Droit: <?php echo $value->libelle_verre;?>, <?php if (isset($info_commande['verre']['diametre'])) {
									echo 'Diamètre ' . $info_commande['verre']['diametre'];
								} else {
									echo ' Précalibré';
								} ?></span>
							<?php
							}
							if (isset($info_commande['verre']['correction_gauche'])) {
								?>
								<br><span class="nom_verre">Gauche: <?php echo $value->libelle_verre;?>, <?php if (isset($info_commande['verre']['diametre_gauche'])) {
									echo ' Diamètre ' . $info_commande['verre']['diametre_gauche'];
								} else {
									echo ' Précalibré';
								} ?></span>
							<?php
							}
						}
						?>	
                    </div>
					<?php
					}
					else
					{
					?>
                    <div class="verres" <?php echo 'style="'.$ostyles.'"' ?>>
                        <span class="nom_verre"><?php echo $value->libelle_verre ?></span> <span class="diam_verre"><?php 
                        if(isset($info_commande['verre']['correction_droit']['diametre']) || isset($info_commande['verre']['correction_gauche']['diametre']))
						{
							if(isset($info_commande['verre']['correction_droit']['diametre']) && isset($info_commande['verre']['correction_gauche']) && $info_commande['verre']['correction_droit']['diametre']==$info_commande['verre']['correction_gauche']['diametre'])
							{
								echo ' Diamètre: ' . $info_commande['verre']['correction_droit']['diametre'];
							}
							else
							{
							
								if (isset($info_commande['verre']['correction_droit']['diametre'])) 
								{
									echo ' Diamètre Droit: ' . $info_commande['verre']['correction_droit']['diametre'];
								}
								else {
									echo ' Diamètre Droit: Précalibré';
								}
							
								if (isset($info_commande['verre']['correction_gauche']['diametre'])) 
								{
									echo ' Diamètre Gauche: ' . $info_commande['verre']['correction_gauche']['diametre'];
								} 
								else {
									echo ' Diamètre Gauche: Précalibré';
								}
							}
							 
						}
						else
						{
                        	if (isset($info_commande['diametre_verre'])) {
                                echo ' Diamètre ' . $info_commande['diametre_verre'];
                            } else {
                                echo ' Précalibré';
                            } 
                        }?></span><div class="options">
                            <span class="miroir"><?php 
                            if(isset($value->traitementD) && isset($value->traitementG) && $value->traitementD==$value->traitementG)
							{
								echo utf8_decode($value->traitementD);
							}
							else
							{
								if (isset($value->traitementG)) 
								{
									echo  utf8_decode($value->traitementG);
								}
								else if (isset($value->traitementD))
								{
									echo  utf8_decode($value->traitementD);
								} 
								
							}
							
							
							
							
                            if(isset($value->teinteD) && isset($value->teinteG) && $value->teinteD==$value->teinteG)
							{
								echo ' ' . utf8_decode(strtr( $value->teinteD, $unwanted_array ));
							}
							else
							{
								if (isset($value->teinteG)) 
								{
									echo ' ' . utf8_decode(strtr( $value->teinteG, $unwanted_array ));
								}
								else
								{
									if(isset($value->teinteD))
										echo ' ' . utf8_decode(strtr( $value->teinteD, $unwanted_array ));
								} 
								
							}
                            
                            
                             ?></span><span class="galbe" style="margin-left:5px"><?php 
                             
                             
                             if(isset($info_commande['verre']['correction_gauche']) && isset($info_commande['verre']['correction_droit']['galbe']) && $info_commande['verre']['correction_droit']['galbe']==$info_commande['verre']['correction_gauche']['galbe'])
							{
								if($info_commande['verre']['correction_droit']['galbe'] != "Standard")
									echo 'Galbe ' . $info_commande['verre']['correction_droit']['galbe'];
							}
							else
							{
								if (isset($info_commande['verre']['correction_gauche']['galbe'])) 
								{
									if($info_commande['verre']['correction_gauche']['galbe'] != "Standard")
										echo 'Galbe ' . $info_commande['verre']['correction_gauche']['galbe'];
								}
								else if (isset($info_commande['verre']['correction_droit']['galbe']))
                                {
									if($info_commande['verre']['correction_droit']['galbe'] != "Standard")
										echo 'Galbe ' . $info_commande['verre']['correction_droit']['galbe'];
								} 
								
							}	
                             ?></span>
                        </div>
                    </div>
					<?php
					}
					?>


                    <div class="opticien">
                        <span class="titre"><?php echo ucfirst($user_info[0]->nom_magasin) ?></span>
                        <span><?php echo $user_info[0]->adresse ?></span>
                        <span><?php echo $user_info[0]->cp . ' ' . $user_info[0]->ville ?></span>
                        <span class="tel">Tél. <?php echo chunk_split($user_info[0]->tel_fixe, 2, ' ') ?></span>
                    </div>


                </div>


                <?php

                ++$i;
                if ($i < $certifs) echo '<div style="page-break-after: always;"></div>';

            }
        }

            $this->db->set('value', $i)->where('id', $control['certificat'])->update('controle');
    }

    ?>

</body>
</html>