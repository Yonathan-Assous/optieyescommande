<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <?php
    if($recap_commande !== false) {
       echo '<h4 class="modal-title">Commande N°'.$recap_commande[0]->id_commande.'</h4>';
		//var_dump($recap_commande[0]);
		if($recap_commande[0]->id_verre == "S26783")
		{
			$recap_commande[0]->trad_fr = "Prog Eco 1,5 HMC";
		}
		
       if($recap_commande[0]->premiere_commande > 0) {
           echo '<strong>Deuxième paire de la commande '.$recap_commande[0]->premiere_commande.'</strong>';
       }

       if(false !== $pair && $pair > 0) {
           echo '<strong>Première paire de la commande '.$pair.'</strong>';
       }

    }
    else {
        echo '<h4 class="modal-title">Erreur</h4>';
    }
    ?>

</div>

<div class="modal-body">

    <div class="invoice">
        <?php
        if($recap_commande !== false){

            $info_commande = json_decode($recap_commande[0]->information_commande,true);

            ?>

            <div class="details">
                <div class="highlighted">
                    <span>Compte numéro : </span> <strong><?php echo $recap_commande[0]->id_users; ?></strong>
                </div>
                <div >
                    <span>Référence Client : </span> <strong><?php echo $recap_commande[0]->reference_client; ?></strong>
                </div>
                <div class="highlighted">
                    <span>Date : </span> <strong><?php echo date('d/m/Y - H:i:s', strtotime($recap_commande[0]->date_commande)); ?></strong>
                </div>
            </div>


            <?php

                //var_dump($user);

                echo '<table>
                <tr>
                    <td><b>Magasin</b></td>
                    <td>'.$user[0]->nom_magasin.'</td>
                </tr>
                <tr>
                    <td><b>Responsable</b></td>
                    <td>'.$user[0]->nom_responsable.' - '.$user[0]->tel_fixe.'</td>
                </tr>
                <tr>
                    <td><b>Contact</b></td>
                    <td>'.$user[0]->email.'</td>
                </tr>
                
                
                </table>';
            ?>

            <table class="styled borders" id="products">
                <thead>
                <tr>
                    <th style="width: 80%">Description</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
			//var_dump($recap_commande[0]);	
            $correction_droit = $correction_gauche = $info_d = $info_g = $options = $mesure_freeform_opt = '';
            $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');

			/*
			if($recap_commande[0]['generation_verre'] == '31' && isset($info_commande['verre']['correction_droit']['addition']))
			{
				unset($info_commande['verre']['correction_droit']['addition']);
			}
			
			if($recap_commande[0]['generation_verre'] == '31' && isset($info_commande['verre']['correction_gauche']['addition']))
			{
				unset($info_commande['verre']['correction_gauche']['addition']);
			}*/
			
            if(isset($info_commande['verre']['correction_droit'])) {
                $correction_droit = '<b>Correction :</b> <span style="font-size:18px">Sphère : ' . $info_commande['verre']['correction_droit']['sphere'] . ', Cylindre : ' . $info_commande['verre']['correction_droit']['cylindre'] . (isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : ' . $info_commande['verre']['correction_droit']['axe'] : '') . ((isset($info_commande['verre']['correction_droit']['addition']) && $recap_commande[0]->id_generation_verre != '34') ? ', Addition : ' . $info_commande['verre']['correction_droit']['addition'] : '') . ((isset($info_commande['verre']['correction_droit']['degression']) || $recap_commande[0]->id_generation_verre == '34') ? ', Degression : ' . $info_commande['verre']['correction_droit']['addition'] : '') . '</span><br>';
            }

            if(isset($info_commande['verre']['correction_gauche'])) {
                $correction_gauche = '<b>Correction :</b>  <span style="font-size:18px">Sphère : ' . $info_commande['verre']['correction_gauche']['sphere'] . ', Cylindre : ' . $info_commande['verre']['correction_gauche']['cylindre'] . (isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : ' . $info_commande['verre']['correction_gauche']['axe'] : '') . ((isset($info_commande['verre']['correction_gauche']['addition']) && $recap_commande[0]->id_generation_verre != '34') ? ', Addition : ' . $info_commande['verre']['correction_gauche']['addition'] : '') . ((isset($info_commande['verre']['correction_gauche']['degression']) || $recap_commande[0]->id_generation_verre == '34') ? ', Degression : ' . $info_commande['verre']['correction_gauche']['addition'] : '') . '</span><br>';
            }
            
            if(isset($info_commande['verre']['correction_droit']['PrismeSphere']) && $info_commande['verre']['correction_droit']['PrismeSphere']!="")
			{
				$correction_droit  .= '<b>Prisme :</b>'.$info_commande['verre']['correction_droit']['PrismeSphere']."<br>";
				$correction_droit  .= '<b>Base :</b>'.$info_commande['verre']['correction_droit']['PrismeCylindre']."<br>";
			}
			
			if(isset($info_commande['verre']['correction_gauche']['PrismeSphere']) && $info_commande['verre']['correction_gauche']['PrismeSphere']!="")
			{
				$correction_gauche  .= '<b>Prisme :</b>'.$info_commande['verre']['correction_gauche']['PrismeSphere']."<br>";
				$correction_gauche  .= '<b>Base :</b>'.$info_commande['verre']['correction_gauche']['PrismeCylindre']."<br>";
			}
			
			if(isset($info_commande['verre']['correction_droit']['galbe']) && $info_commande['verre']['correction_droit']['galbe']!="")
			{
				$correction_droit  .= '<b>Galbe :</b>'.$info_commande['verre']['correction_droit']['galbe']."<br>";
			}
			
			if(isset($info_commande['verre']['correction_gauche']['galbe']) && $info_commande['verre']['correction_gauche']['galbe']!="")
			{
				$correction_gauche  .= '<b>Galbe :</b>'.$info_commande['verre']['correction_gauche']['galbe']."<br>";
			}
			

            if(isset($info_commande['precalibrage']['calibre']) && isset($recap_commande[0]->diametreD) && $recap_commande[0]->diametreD=='precalibrage') {
                $info_d = '<b>Précalibrage :</b> ' . $info_commande['precalibrage']['calibre'] . '<br>';
            }

            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ': '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ': '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['diametre_utile']) ? 'Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>' : '';

            

            if(!empty($mesure_freeform_opt)  && (isset($info_commande['verre']['correction_droit']) && $info_commande['verre']['correction_droit']['diametre']=='precalibrage')){
                $info_d .= '<b>Mesure freeform :</b> <br> - ';
                $info_d .= $mesure_freeform_opt;
            }
            
            if(!empty($mesure_freeform_opt)  &&
               isset($info_commande['verre']['correction_gauche']) &&
                    $info_commande['verre']['correction_gauche']['diametre']=='precalibrage'){
                $info_g .= '<b>Mesure freeform :</b> <br> - ';
                $info_g .= $mesure_freeform_opt;
            }

            if(isset($info_commande['monture']['type'])) {
                $info_d .= '<b>Type monture :</b> ' . $info_commande['monture']['type'] . '<br>';
                $info_g .= '<b>Type monture :</b> ' . $info_commande['monture']['type'] . '<br>';
            }

            if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur']) && isset($info_commande['mesure_freeform']['taille_du_pont'])) {
                $info_d .= '<b>EP au bord minimum :</b> ' . $info_commande['bord_verre']['epaisseur'] . '<br>';
                $info_g .= '<b>EP au bord minimum :</b> ' . $info_commande['bord_verre']['epaisseur'] . '<br>';
            }
            
            
            if(isset($recap_commande[0]->nb_multi_commande)) {
                $quantite_commande = ($recap_commande[0]->nb_multi_commande == "" ? 1 : $recap_commande[0]->nb_multi_commande);
            }
            else {
                $quantite_commande = 1;
            }

            if($correction_droit!=''){
            
            	if(isset($teinteD))
				{
					$info_d .= '<b>Teinte :</b> ';
					if($teinteD!="")
						$info_d .= $teinteD."<br>";
					else
						$info_d .= $info_commande['verre']['correction_droit']['teinte']."<br>";
				}
			
				if(isset($traitementD))
				{
					$info_d .= '<b>Traitement :</b> ';
					$info_d .= utf8_decode($traitementD)."<br>";
				}

                if(isset($info_commande['verre']['hauteur'])) {
                    $correction_droit .= ' <b>Hauteur :</b> ' . $info_commande['verre']['hauteur'] . '<br>';
                }

                if(isset($info_commande['mesure_freeform']['ecart_puppillaire_droit'])) {
                    $correction_droit .= ' <b>Ecart pupillaire :</b> ' . $info_commande['mesure_freeform']['ecart_puppillaire_droit'].'<br>';
                }

                if(isset($info_commande['verre']['correction_droit']['dioptrie'])) {
                    $correction_droit .= '<br><b>Prisme : </b><br>- Dioptrie : ' . $info_commande['verre']['correction_droit']['dioptrie'] . ' ';
                }

                if(isset($info_commande['verre']['correction_droit']['base'])) {
                    $correction_droit .= '<b>Base :</b> ' . $info_commande['verre']['correction_droit']['base'] . ' Degrès';
                }

                

				$option_prix = 0;
                echo '<tr>';
               
				$info_d.="<br>";
				
					
				if($info_commande['verre']['correction_droit']['diametre'])
					$correction_droit .= '<b>Diamètre :</b> ' . $info_commande['verre']['correction_droit']['diametre'].'<br>';

                if(isset($recap_commande[0]->ecart_pup_D)) {
                    $correction_droit .= '<b>Écart pupillaire vision de près : </b>' . $recap_commande[0]->ecart_pup_D . '<br>';
                }
                if(isset($recap_commande[0]->angle_galbe_D)) {
                    $correction_droit .= '<b>Angle de galbe : </b>' . $recap_commande[0]->angle_galbe_D. '<br>';
                }
                if(isset($recap_commande[0]->distance_verre_oeil_D)) {
                    $correction_droit .= '<b>Distance verre oeil : </b>' . $recap_commande[0]->distance_verre_oeil_D. '<br>';
                }
                if(isset($recap_commande[0]->angle_pantoscopique_D)) {
                    $correction_droit .= '<b>Angle pantoscopique : </b>' . $recap_commande[0]->angle_pantoscopique_D. '<br>';
                }
                if(isset($recap_commande[0]->hauteur_montage_D)) {
                    $correction_droit .= '<b>Hauteur de montage : </b>' . $recap_commande[0]->hauteur_montage_D. '<br>';
                }

				$correction_droit .= $info_d;
				
				if($recap_commande[0]->generation == "T-One")
				{
					$recap_commande[0]->trad_fr = str_replace("E-Space","T-One",$recap_commande[0]->trad_fr);
				}
				
				if(isset($info_commande['precalibrage']['calibre'])) {
                    $correction_droit .= '<br><img src="/static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';
                }
				$libelleVerreD = $recap_commande[0]->trad_fr ? $recap_commande[0]->trad_fr : $recap_commande[0]->libelle_verre;
				echo '<td><h4>Oeil droit : '.$libelleVerreD.'</h4>'.$correction_droit.'</td>';
				echo '<td class="center">1</td>';
				
				echo '<td class="center">';
				
				if($recap_commande[0]->total_remise_paire > 0) {

					echo '<del>'.number_format($recap_commande[0]->prix_verre+$option_prix
                                        +$recap_commande[0
                    ]->total_remise_paire, 2, ',', '').' €</del> ';
				}
				echo number_format($recap_commande[0]->prix_verre +
                                   $option_prix, 2, ',', '')
                     .' €';;
				
				echo '</tr>';

            }
            if($correction_gauche!=''){

                if(isset($teinteG))
				{
					$info_g .= '<b>Teinte :</b> ';
					if($teinteG!="")
						$info_g .= $teinteG."<br>";
					else
						$info_g .= $info_commande['verre']['correction_gauche']['teinte']."<br>";
				}
			
				if(isset($traitementG))
				{
					$info_g .= '<b>Traitement :</b> ';
					$info_g .= utf8_decode($traitementG)."<br>";
				}

                if(isset($info_commande['verre']['hauteur_gauche'])) {
                    $correction_gauche .= ' <b>Hauteur :</b> ' . $info_commande['verre']['hauteur_gauche'] . '<br>';
                }

                if(isset($info_commande['mesure_freeform']['ecart_puppillaire_gauche'])) {
                    $correction_gauche .= ' <b>Ecart pupillaire :</b> ' . $info_commande['mesure_freeform']['ecart_puppillaire_gauche'].'<br>';
                }

                if(isset($info_commande['verre']['correction_gauche']['dioptrie'])) {
                    $correction_gauche .= '<br><b>Prisme : </b><br>- Dioptrie : ' . $info_commande['verre']['correction_gauche']['dioptrie'] . ' ';
                }

                if(isset($info_commande['verre']['correction_gauche']['base'])) {
                    $correction_gauche .= '<b>Base :</b> ' . $info_commande['verre']['correction_gauche']['base'] . ' Degrès';
                }

                

				$option_prix = 0;
                echo '<tr>';
               
				$info_g.="<br>";
				
					
				if($info_commande['verre']['correction_gauche']['diametre'])
					$correction_gauche .= '<b>Diamètre :</b> ' . $info_commande['verre']['correction_gauche']['diametre'].'<br>';

                if(isset($recap_commande[0]->ecart_pup_G)) {
                    $correction_gauche .= '<b>Écart pupillaire vision de près : </b>' . $recap_commande[0]->ecart_pup_G . '<br>';
                }
                if(isset($recap_commande[0]->angle_galbe_G)) {
                    $correction_gauche .= '<b>Angle de galbe : </b>' . $recap_commande[0]->angle_galbe_G. '<br>';
                }
                if(isset($recap_commande[0]->distance_verre_oeil_G)) {
                    $correction_gauche .= '<b>Distance verre oeil : </b>' . $recap_commande[0]->distance_verre_oeil_G. '<br>';
                }
                if(isset($recap_commande[0]->angle_pantoscopique_G)) {
                    $correction_gauche .= '<b>Angle pantoscopique : </b>' . $recap_commande[0]->angle_pantoscopique_G. '<br>';
                }
                if(isset($recap_commande[0]->hauteur_montage_G)) {
                    $correction_gauche .= '<b>Hauteur de montage : </b>' . $recap_commande[0]->hauteur_montage_G. '<br>';
                }
				$correction_gauche .= $info_g;
				
				if(isset($info_commande['precalibrage']['calibre'])) {
                    $correction_gauche .= '<br><img src="/static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';
                }
                $libelleVerreG = $recap_commande[0]->trad_fr ? $recap_commande[0]->trad_fr : $recap_commande[0]->libelle_verre;

                echo '<td><h4>Oeil gauche : '.$libelleVerreG.'</h4>'.$correction_gauche.'</td>';
				echo '<td class="center">1</td>';
				
				echo '<td class="center">';
				
				if($recap_commande[0]->total_remise_paire >     0) {

                    echo '<del>'.number_format($recap_commande[0]->total_commande -
                                               $recap_commande[0]->prix_verre -
                                               $recap_commande[0]->tarif_express
                                  + $option_prix + $recap_commande[0]->total_remise_paire, 2, ',
                                  ', '').' €</del> ';
				}
				echo number_format($recap_commande[0]->total_commande -
                                   $recap_commande[0]->prix_verre - $recap_commande[0]->tarif_express +
                                   $option_prix, 2, ',', '')
                     .' €';
				
				echo '</tr>';

            }
                

                echo '<tr>';
                echo '<td colspan="3" style="padding-top: 15px">';
                if(isset($info_commande['verre']['traitement'])) { echo '<strong>Traitement :</strong> '.$info_commande['verre']['traitement'].'<br />'; }
                if(isset($info_commande['verre']['photocromie'])) {echo '<strong>Photocromie :</strong> '.$info_commande['verre']['photocromie'].'<br />'; }
                if(isset($info_commande['verre']['teinte'])) {echo '<strong>Teinte :</strong> '.$info_commande['verre']['teinte']; }
                echo (isset($correction['verre']['miroir_stock']) ? $options_miroir[$correction['verre']['miroir_stock']['type_miroir']] : '').(isset($correction['verre']['polarise']) ? $correction['verre']['polarise'] : '');
                echo '</td>';
                echo '</tr>';

                $express = 0;
                if($recap_commande[0]->tarif_express > 0) {

                    $express = $recap_commande[0]->tarif_express;
                    echo '<tr>
                    <td>
                        <h4 style="margin: 20px 0 10px">Service Express</h4>
                        Délais maximum pour une commande passée avant 15h30 : J+3<br />( hors jours fériés et week-end )<br />
                        Rajouter 1 jour pour des verres teintés. 
                    </td>
                    <td class="center">'.$recap_commande[0]->tarif_express.' €</td>
                    </tr>';
                }

                ?>
                </tbody>
            </table>

            <?php

            if($recap_commande[0]->type_commande > 1) {

                $total_final = 0 + $express;

                echo '<div class="total final"><span>Total final</span><strong>'.number_format($total_final, 2, '.', ' ').' €</strong></div>';
                echo '<div class="total"><span>Total</span><strong><del>'.$recap_commande[0]->total_commande.' €</del></strong></div>';


            }
            else {
                echo '<div class="total"><span>Total</span><strong>'.$recap_commande[0]->total_commande.' €</strong></div>';
            }

            ?>

            <div class="clearfix"></div>

            <?php
            if(!empty($recap_commande[0]->commentaire))
                echo '<div class="notes">
                    <h5>Commentaire :</h5>
                    <p>'.$recap_commande[0]->commentaire.'</p>
                  </div>';
            ?>

            <?php
        }
        else{
            echo '<p>Cette commande n\'existe pas ! </p>';
        }
        ?>
    </div>

</div>

<div class="modal-footer">
    <?php if($recap_commande !== false) { echo '<button class="btn btn-danger waves-effect waves-light delete-order" rel="'.$recap_commande[0]->id_commande.'">Supprimer</button>'; } ?>
    <button type="submit" class="btn btn-warning waves-effect waves-light" data-dismiss="modal">Fermer</button>
</div>