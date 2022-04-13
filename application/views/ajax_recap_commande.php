<?php
$panierA = get_cookie("panierA");

    echo '<div class="supplier">
            <h5>Fournisseur :</h5>
            <p>
                <strong>'.$data_admin['admin_info']->nom_societe.'</strong><br>
            </p>
            <h5>Adresse:</h5>
            <p>'.
                $data_admin['admin_info']->adresse.'<br>'.
                $data_admin['admin_info']->cp.' '.$data_admin['admin_info']->ville.'
            </p>
            <p>
                <span>Téléphone : </span>'.$data_admin['admin_info']->tel_fixe.'<br>
                <span>Fax : </span>'.$data_admin['admin_info']->tel_fax.'
            </p>
        </div>
        <div class="customer">
            <h5>Client :</h5>
            <p>
                <strong>'.$user_info->nom_societe.'</strong><br>'.
                $user_info->nom_magasin.'<br>'.
                $user_info->adresse.'<br>'.
                $user_info->cp.' '.$user_info->ville.'
            </p>
            <p>
                <span>Numéro siret : </span>'.$user_info->numero_siret.'<br>
                <span>Téléphone : </span>'.$user_info->tel_fixe.'<br>
                <span>Fax : </span>'.$user_info->tel_fax.'
            </p>
        </div>

        <div class="clearfix"></div>

        <div class="details">
            <div class="highlighted">
                <span>Compte numéro : </span> <strong>'.$user_info->id_users.'</strong>
            </div>
            <div>
                <span>Réference Client : </span> <strong>'.$recap_commande['reference_client'].'</strong>
            </div>
            <div class="highlighted">
                <span>Date : </span> <strong>'.date('d/m/Y').'</strong>
            </div>
        </div>';


    $orderbag = array();
    $total_commande = 0;
    $prixmonture = 0;

    if(isset($pair_order_recap)) {
        $orderbag['pair_order'] = $pair_order_recap;
    }

    $orderbag['order'] = $recap_commande;
	//var_dump($recap_commande);
//echo '<pre>';
//print_r($orderbag);
//echo '</pre>';
    foreach($orderbag as $k => $recap_commande) {
        $quantiteVerreTeledetourage = 0;
       if($k == 'pair_order') {
           echo '<h2>Première commande</h2>';
       }

       if($k == 'order' && isset($orderbag['pair_order'])) {
           echo '<h2 style="margin-top: 60px;">Deuxième commande</h2>';
       }

        echo '<table class="styled borders" id="products">
        <thead>
            <tr>
                <th style="width: 80%">Description</th>
                <th>Quantité</th>';

                if($user_info->restriction_compte == 0){
                    echo '<th>Total</th>';
                }

            echo '
            </tr>
        </thead>
        <tbody>';

		if(($panierA==1 || $panierA==$user_info->id_users) && $montures->modele!='')
			{
			echo '<tr>
				<td>
					<h4>Monture: '.$montures->modele.'</h4>
					Taille : '.$montures->size.'<br>
					Type : '.$montures->type.'<br>
					Couleur : '.$montures->couleur.'<br>
					prix unitaire : '.$montures->prix_vente.'
				</td>
				<td>'.$montures->qty.'</td>
				<td>'.$montures->prix_vente*$montures->qty.' €</td>
			  </tr>';
			$prixmonture = $montures->prix_vente*$montures->qty;

			}

            $info_commande = json_decode($recap_commande['information_commande'],true);


            $correction_droit = $correction_gauche = $info_d = $info_g = $options = $mesure_freeform_opt = '';
            $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');


            if(isset($info_commande['verre']['correction_droit'])) {
                $correction_droit = '<b>Correction :</b> Sphère : ' . $info_commande['verre']['correction_droit']['sphere'] . ', Cylindre : ' . $info_commande['verre']['correction_droit']['cylindre'] . (isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : ' . $info_commande['verre']['correction_droit']['axe'] : '') . ((isset($info_commande['verre']['correction_droit']['addition']) && $recap_commande['id_generation_verre'] != '34') ? ', Addition : ' . $info_commande['verre']['correction_droit']['addition'] : '') . ((isset($info_commande['verre']['correction_droit']['degression']) || $recap_commande['id_generation_verre'] == '34') ? ', Degression : ' . $info_commande['verre']['correction_droit']['addition'] : '') . '<br>';
            }

            if(isset($info_commande['verre']['correction_gauche'])) {
                $correction_gauche = '<b>Correction :</b>  Sphère : ' . $info_commande['verre']['correction_gauche']['sphere'] . ', Cylindre : ' . $info_commande['verre']['correction_gauche']['cylindre'] . (isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : ' . $info_commande['verre']['correction_gauche']['axe'] : '') . ((isset($info_commande['verre']['correction_gauche']['addition']) && $recap_commande['id_generation_verre'] != '34')? ', Addition : ' . $info_commande['verre']['correction_gauche']['addition'] : '') . ((isset($info_commande['verre']['correction_gauche']['degression']) || $recap_commande['id_generation_verre'] == '34') ? ', Degression : ' . $info_commande['verre']['correction_gauche']['addition'] : '') . '<br>';
            }

            if(isset($info_commande['verre']['correction_droit']['PrismeSphere']) && $info_commande['verre']['correction_droit']['PrismeSphere'] != "")
			{
				$correction_droit  .= '<b>Prisme :</b>'.$info_commande['verre']['correction_droit']['PrismeSphere']."<br>";
			}

			if(isset($info_commande['verre']['correction_droit']['PrismeCylindre']) && $info_commande['verre']['correction_droit']['PrismeCylindre'] != "")
			{
				$correction_droit  .= '<b>Base :</b>'.$info_commande['verre']['correction_droit']['PrismeCylindre']."<br>";
			}

			if(isset($info_commande['verre']['correction_droit']['galbe']) && $info_commande['verre']['correction_droit']['galbe'] != "")
			{
				$correction_droit  .= '<b>Galbe :</b>'.$info_commande['verre']['correction_droit']['galbe']."<br>";
			}


			if(isset($info_commande['verre']['correction_gauche']['PrismeSphere']) && $info_commande['verre']['correction_gauche']['PrismeSphere'] != "")
			{
				$correction_gauche  .= '<b>Prisme :</b>'.$info_commande['verre']['correction_gauche']['PrismeSphere']."<br>";
			}

			if(isset($info_commande['verre']['correction_gauche']['PrismeCylindre']) && $info_commande['verre']['correction_gauche']['PrismeCylindre'] != "")
			{
				$correction_gauche  .= '<b>Base :</b>'.$info_commande['verre']['correction_gauche']['PrismeCylindre']."<br>";
			}

			if(isset($info_commande['verre']['correction_gauche']['galbe']) && $info_commande['verre']['correction_gauche']['galbe'] != "")
			{
				$correction_gauche  .= '<b>Galbe :</b>'.$info_commande['verre']['correction_gauche']['galbe']."<br>";
			}

            if(isset($info_commande['precalibrage']['calibre']) && isset($recap_commande['diametreD']) && $recap_commande['diametreD']=='precalibrage') {
                $info_d = '<b>Précalibrage :</b> ' . $info_commande['precalibrage']['calibre'] . '<br>';
            }

            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ': '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ': '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['diametre_utile']) ? 'Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>' : '';

            if(isset($info_commande['diametre_verre'])) {
                $info_d .= "<b>Diamètre verre :</b> " . $info_commande['diametre_verre'] . "<br>";
                $info_g .= "<b>Diamètre verre :</b> " . $info_commande['diametre_verre'] . "<br>";
            }

            if(!empty($mesure_freeform_opt)  && isset($recap_commande['diametreD']) && $recap_commande['diametreD']=='precalibrage'){
                $info_d .= '<b>Mesure freeform :</b> <br> - ';
                $info_d .= $mesure_freeform_opt;
            }

            if(!empty($mesure_freeform_opt)  && isset($recap_commande['diametreG']) && $recap_commande['diametreG']=='precalibrage'){
                $info_g .= '<b>Mesure freeform :</b> <br> - ';
                $info_g .= $mesure_freeform_opt;
            }

            if(isset($info_commande['monture']['type'])) {
                $info_d .= '<b>Type monture :</b> ' . $info_commande['monture']['type'] . '<br>';
                $info_g .= '<b>Type monture :</b> ' . $info_commande['monture']['type'] . '<br>';
            }

            if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur']) && isset($info_commande['mesure_freeform']['hauteur'])) {
                $info_d .= '<b>EP au bord minimum :</b> ' . $info_commande['bord_verre']['epaisseur'] . '<br>';
                $info_g .= '<b>EP au bord minimum :</b> ' . $info_commande['bord_verre']['epaisseur'] . '<br>';
            }

            if(isset($info_commande['mesure_freeform']['ecart_puppillaire_droit']) && !empty($info_commande['mesure_freeform']['ecart_puppillaire_droit'])) {
                $info_d .= '<b>Ecart puppillaire droit :</b> ' . $info_commande['mesure_freeform']['ecart_puppillaire_droit'] . '<br>';
            }

			if(isset($info_commande['mesure_freeform']['ecart_puppillaire_gauche']) && !empty($info_commande['mesure_freeform']['ecart_puppillaire_gauche'])) {
				$info_g .= '<b>Ecart puppillaire gauche :</b> ' . $info_commande['mesure_freeform']['ecart_puppillaire_gauche'] . '<br>';
			}

			if(isset($info_commande['mesure_freeform']['hauteur']) && !empty($info_commande['mesure_freeform']['hauteur'])) {
                $info_d .= '<b>Hauteur de montage droit :</b> ' . $info_commande['mesure_freeform']['hauteur'] . '<br>';
            }

			if(isset($info_commande['mesure_freeform']['hauteur_gauche']) && !empty($info_commande['mesure_freeform']['hauteur_gauche'])) {
				$info_g .= '<b>Hauteur de montage gauche :</b> ' . $info_commande['mesure_freeform']['hauteur_gauche'] . '<br>';
			}

           /* if(isset($info_commande['verre']['galbe'])) {
                $options .= '- Galbe/base : ' . $info_commande['verre']['galbe'] . '<br>';
            }

            if(isset($info_commande['verre']['angle_pantoscopique'])) {
                $options .= '- Angle pantoscopique : ' . $info_commande['verre']['angle_pantoscopique'] . '<br>';
            }

            if(isset($info_commande['verre']['angle_galbe'])) {
                $options .= '- Angle de galbe : ' . $info_commande['verre']['angle_galbe'] . '<br>';
            }

            if(isset($info_commande['verre']['distance_verre_oeil'])) {
                $options .= '- Distance verre oeil : ' . $info_commande['verre']['distance_verre_oeil'] . '<br>';
            }

            if(isset($info_commande['verre']['miroir'])) {
                $options .= '- ' . $options_miroir[$info_commande['verre']['miroir']['type_miroir']] . ' (+' . $info_commande['verre']['miroir']['prix_miroir'] . '€)<br>';
            }


            if(!empty($options)){
                $info_d .= 'Options : <br>';
                $info_d .= $options;
            }
            */

            if(isset($recap_commande['teinteD']) && $recap_commande['teinteD']!="")
            {
            	$info_d .= '<b>Teinte :</b> ';
                $teinteD=explode("(",$recap_commande['teinteDH']);
                if($recap_commande['teinteD'] == "CUST_24" || $recap_commande['teinteD'] == "CUST_25")
                	$info_d .= $recap_commande['teintepersoD']."<br>";
                else
                	$info_d .= $teinteD[0]."<br>";
            }

            if(isset($recap_commande['traitementD']) && $recap_commande['traitementD']!=""  && $recap_commande['traitementD']!="0")
            {
            	$info_d .= '<b>Traitement :</b> ';

            	if($recap_commande['traitementD']=='700102')
            		$info_d .= "HMC<br>";
            	else
            	{
					$traitementD=explode("(",$recap_commande['traitementDH']);
					$info_d .= $traitementD[0]."<br>";
                }
            }

            if(isset($recap_commande['teinteG']) && $recap_commande['teinteG']!="")
            {
            	$info_g .= '<b>Teinte :</b> ';
                $teinteG=explode("(",$recap_commande['teinteGH']);
                if($recap_commande['teinteG'] == "CUST_24" || $recap_commande['teinteG'] == "CUST_25")
                	$info_g .= $recap_commande['teintepersoG']."<br>";
                else
                	$info_g .= $teinteG[0]."<br>";
            }

            if(isset($recap_commande['traitementG']) && $recap_commande['traitementG']!=""  && $recap_commande['traitementG']!="0")
            {
            	$info_g .= '<b>Traitement :</b> ';

            	if($recap_commande['traitementG']=='700102')
            		$info_g .= "HMC<br>";
            	else
            	{
					$traitementG=explode("(",$recap_commande['traitementGH']);
					$info_g .= $traitementG[0]."<br>";
				}
            }


            if(isset($recap_commande['nb_multi_commande'])) {
                $quantite_commande = ($recap_commande['nb_multi_commande'] == "" ? 1 : $recap_commande['nb_multi_commande']);
            }
            else {
                $quantite_commande = 1;
            }

            if($correction_droit!=''){

                $correction_droit .=$info_d;

               /* if(isset($info_commande['verre']['hauteur'])) {
                    $correction_droit .= ' <b>Hauteur :</b> ' . $info_commande['verre']['hauteur'] . '<br>';
                }

                if(isset($info_commande['verre']['ecart_puppillaire']['droit'])) {
                    $correction_droit .= ' <b>Ecart pupillaire :</b> ' . $info_commande['verre']['ecart_puppillaire']['droit']. '<br>';
                }
*/
                if(isset($recap_commande['dioptrieD'])) {
                    $correction_droit .= '<br><b>Prisme : </b><br>- Dioptrie : ' . $recap_commande['dioptrieD'] . '<br>';
                }

                if(isset($recap_commande['baseD'])) {
                    $correction_droit .= '<b>Base :</b> ' . $recap_commande['baseD'] . ' Degrès<br>';
                }

                if(isset($recap_commande['diametreD'])) {
                    $correction_droit .= '<b>Diamètre :</b> ' . $recap_commande['diametreD'];
                }

                if(isset($recap_commande['ecart_pup_D']) && $recap_commande['ecart_pup_D'] !== "") {
                    $correction_droit .= '<br><b>Écart pupillaire vision de près :</b> ' . $recap_commande['ecart_pup_D'];
                }
                if(isset($recap_commande['angle_galbe_D']) && $recap_commande['angle_galbe_D'] !== "") {
                    $correction_droit .= '<br><b>Angle de galbe :</b> ' . $recap_commande['angle_galbe_D'];
                }
                if(isset($recap_commande['distance_verre_oeil_D']) && $recap_commande['distance_verre_oeil_D'] !== "") {
                    $correction_droit .= '<br><b>Distance verre oeil :</b> ' . $recap_commande['distance_verre_oeil_D'];
                }
                if(isset($recap_commande['angle_pantoscopique_D']) && $recap_commande['angle_pantoscopique_D'] !== "") {
                    $correction_droit .= '<br><b>Angle pantoscopique :</b> ' . $recap_commande['angle_pantoscopique_D'];
                }
                if(isset($recap_commande['hauteur_montage_D']) && $recap_commande['hauteur_montage_D'] !== "") {
                    $correction_droit .= '<br><b>Hauteur de montage :</b> ' . $recap_commande['hauteur_montage_D'];
                }

                if(isset($info_commande['precalibrage']['calibre'])) {
                    $correction_droit .= '<br><img src="/static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';
                }

             /*   if(isset($info_commande['verre']['polarise'])){
                    $recap_commande['libelle_verre'] = str_replace("polarisé",$info_commande['verre']['polarise'],$recap_commande['libelle_verre']);
                }

                if(isset($info_commande['verre']['miroir_stock'])){
                    $recap_commande['libelle_verre'] = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$recap_commande['libelle_verre']);
                }*/
				$option_prix = 0;
                echo '<tr>';
               /* if($recap_commande['type_commande'] == 1 || $recap_commande['type_commande'] == 2)
                	echo '<td><h4>Oeil droit : '.$recap_commande['libelle_verre'].'</h4>'.$correction_droit.'</td>';
                	*/

                if($k == 'pair_order') {

                	$info_d="<br>";

                	if(isset($pair_order_recap["teinte_D"]))
                	{
                		$info_d .= '<b>Teinte :</b> ';
               			$info_d .= $pair_order_recap["teinte_D"]."<br>";
               		}
               		if(isset($pair_order_recap["traitement_D"]) && $pair_order_recap["traitement_D"]!=""  && $pair_order_recap["traitement_D"]!="0")
					{
						$info_d .= '<b>Traitement :</b> ';
						$info_d .= $pair_order_recap["traitement_D"]."<br>";
					}


                	if($info_commande['verre']['correction_droit']['diametre'])
                		$correction_droit .= '<b>Diamètre :</b> ' . $info_commande['verre']['correction_droit']['diametre'];

                	$correction_droit .= $info_d;

                	if($recap_commande['generation'] == "T-One")
                	{
                		$recap_commande['trad_fr'] = str_replace("E-Space","T-One",$recap_commande['trad_fr']);
                	}

                	echo '<td><h4>Oeil droit : '.$recap_commande['trad_fr'].'</h4>'.$correction_droit.'</td>';
                	echo '<td class="center">1</td>';
                    $quantiteVerreTeledetourage += 1;

                	echo '<td class="center">';
                	//var_dump($discount);
                    	if(isset($discount) && $discount['on'] == $k) {

							if($discount['amount'] > 0) {
								$recap_commande['prix_discount'] = ($recap_commande['prix_verre']) - ( ( ($recap_commande['prix_verre']) / 100 ) * $discount['amount'] ).' €';
								echo '<del>'.(($recap_commande['prix_verre'])).' €</del> ';
								echo '-'.$discount['amount'].'% ';
								echo ($recap_commande['prix_discount']);
								$total_commande += round(floatval($recap_commande['prix_discount']), 2);
							}
							else {
                                echo number_format($recap_commande['prix_verre'], 2, ',', '').' €';
//								echo (($recap_commande['prix_verre'])).' €';
								$total_commande += round(floatval($recap_commande['prix_verre']), 2);
							}
						}
						else {
                            echo number_format($recap_commande['prix_verre'], 2, ',', '').' €';
								$total_commande +=  round(floatval($recap_commande['prix_verre']), 2);
							}
                }
                else
                {
					if($recap_commande['type_de_verreD']!="")
					{
						$nomD=explode("(",$recap_commande['nomverreDH']);
						echo '<td><h4>Oeil droit : '.$nomD[0].'</h4>'.$correction_droit.'</td>';
					}

                	echo '<td class="center">'.$recap_commande['quantiteD'].'</td>';
					$quantiteVerreTeledetourage += $recap_commande['quantiteD'];
                	if($user_info->restriction_compte == 0)
                	{



                        if(isset($info_commande['verre']['miroir']['prix_miroir'])) {
                            $option_prix += $info_commande['verre']['miroir']['prix_miroir'];
                        }


                        if($recap_commande['type_de_verreD']!="")
                        {
                            echo '<td class="center">';
                            if(isset($discount) && $discount['on'] == $k) {
                                if($discount['amount'] > 0) {
                                    $recap_commande['prix_discount'] = ($recap_commande['prixDH']) - ( ( ($recap_commande['prixDH']) / 100 ) * $discount['amount'] );
                                    echo '<del>'.(($recap_commande['prixDH'])).' €</del> ';
                                    echo '-'.$discount['amount'].'% ';
                                    echo ($recap_commande['prix_discount']);
                                    $total_commande += round(floatval($recap_commande['prix_discount']), 2);
                                }
                                else {
                                    echo (($recap_commande['prixDH']));
                                    $total_commande += round(floatval($recap_commande['prixDH']), 2);
                                }
                            }
                            else {
                                echo (($recap_commande['prixDH']));
                                $total_commande += round(floatval($recap_commande['prixDH']), 2);
                            }
                             echo ' €</td>';

                        }


                        /*
                        if($recap_commande['type_commande'] == 1 || $recap_commande['type_commande'] == 2)
                        {
                            if(isset($discount) && $discount['on'] == $k) {
                                if($discount['amount'] > 0) {
                                    $recap_commande['prix_discount'] = ($recap_commande['prix_verre']+$option_prix) - ( ( ($recap_commande['prix_verre']+$option_prix) / 100 ) * $discount['amount'] );
                                    echo '<del>'.(($recap_commande['prix_verre']+$option_prix) * $quantite_commande).' €</del>';
                                    echo '-'.$discount['amount'].'% ';
                                    echo ($recap_commande['prix_discount']*$quantite_commande);
                                    $total_commande += floatval($recap_commande['prix_discount']*$quantite_commande);
                                }
                                else {
                                    echo (($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
                                    $total_commande += floatval(($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
                                }
                            }
                            else {
                                echo (($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
                                $total_commande += floatval(($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
                            }
                        }*/



                    }
                }
                echo '</tr>';

            }



            if($correction_gauche!=''){
                $correction_gauche .=$info_g;

             /*   if(isset($info_commande['verre']['hauteur_gauche'])) {
                    $correction_gauche .= ' <b>Hauteur :</b> ' . $info_commande['verre']['hauteur_gauche'] . '<br>';
                }

                if(isset($info_commande['verre']['ecart_puppillaire']['gauche'])) {
                    $correction_gauche .= ' <b>Ecart pupillaire :</b> ' . $info_commande['verre']['ecart_puppillaire']['gauche']. '<br>';
                }
*/
                if(isset($recap_commande['dioptrieG'])) {
                    $correction_gauche .= '<br><b>Prisme :</b> <br>- Dioptrie : ' . $recap_commande['dioptrieG'] . '<br>';
                }

                if(isset($recap_commande['baseG'])) {
                    $correction_gauche .= '<b>Base :</b> ' . $recap_commande['baseG'] . ' Degrès<br>';
                }

                if(isset($recap_commande['diametreG'])) {
                    $correction_gauche .= '<b>Diamètre :</b> ' . $recap_commande['diametreG'];
                }

                if(isset($recap_commande['ecart_pup_G']) && $recap_commande['ecart_pup_G'] !== "") {
                    $correction_gauche .= '<br><b>Écart pupillaire vision de près :</b> ' . $recap_commande['ecart_pup_G'];
                }
                if(isset($recap_commande['angle_galbe_G']) && $recap_commande['angle_galbe_G'] !== "") {
                    $correction_gauche .= '<br><b>Angle de galbe :</b> ' . $recap_commande['angle_galbe_G'];
                }
                if(isset($recap_commande['distance_verre_oeil_G']) && $recap_commande['distance_verre_oeil_G'] !== "") {
                    $correction_gauche .= '<br><b>Distance verre oeil :</b> ' . $recap_commande['distance_verre_oeil_G'];
                }
                if(isset($recap_commande['angle_pantoscopique_G']) && $recap_commande['angle_pantoscopique_G'] !== "") {
                    $correction_gauche .= '<br><b>Angle pantoscopique :</b> ' . $recap_commande['angle_pantoscopique_G'];
                }
                if(isset($recap_commande['hauteur_montage_G']) && $recap_commande['hauteur_montage_G'] !== "") {
                    $correction_gauche .= '<br><b>Hauteur de montage :</b> ' . $recap_commande['hauteur_montage_G'];
                }

                if(isset($info_commande['precalibrage']['calibre']) ) {
                    $correction_gauche .= '<br><br><img src="/static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';
                }
                echo '<tr>';


               /* if($recap_commande['type_commande'] == 1 || $recap_commande['type_commande'] == 2)
                	echo '<td><h4>Oeil gauche : '.$recap_commande['libelle_verre'].'</h4>'.$correction_gauche.'</td>';
                */
                if($k == 'pair_order') {

                	$info_g="<br>";

                	if(isset($pair_order_recap["teinte_G"]))
                	{
                		$info_g .= '<b>Teinte :</b> ';
               			$info_g .= $pair_order_recap["teinte_G"]."<br>";
               		}
               		if(isset($pair_order_recap["traitement_G"]) && $pair_order_recap["traitement_G"]!=""  && $pair_order_recap["traitement_G"]!="0")
					{
						$info_g .= '<b>Traitement :</b> ';
						$info_g .= $pair_order_recap["traitement_G"]."<br>";
					}


                	if($info_commande['verre']['correction_gauche']['diametre'])
                		$correction_gauche .= '<b>Diamètre :</b> ' . $info_commande['verre']['correction_gauche']['diametre'];


                	$correction_gauche .= $info_g;
                	//gauchehhhhh
                	echo '<td><h4>Oeil gauche : '.$recap_commande['trad_fr'].'</h4>'
                         .$correction_gauche.'</td>';
                	echo '<td class="center">1</td>';
                    $quantiteVerreTeledetourage += 1;

                	echo '<td class="center">';
//                	    echo '<pre>';
//                	    print_r($recap_commande);
//                	    echo '</pre>';
                    $prixVerreG = $recap_commande['total_commande'] - $recap_commande['prix_verre'] - $recap_commande['tarif_express'];
                    	if(isset($discount) && $discount['on'] == $k) {
							if($discount['amount'] > 0) {
								$recap_commande['prix_discount'] = ($prixVerreG) - ( ( ($prixVerreG) / 100 ) * $discount['amount'] ).' €';
								echo '<del>'.((number_format($prixVerreG, 2, ','))).' €</del> ';
								echo '-'.$discount['amount'].'% ';
								echo ($recap_commande['prix_discount']);
								$total_commande += round(floatval($recap_commande['prix_discount']), 2);
							}
							else {
								echo number_format($prixVerreG, 2, ',', '').' €';
								$total_commande += round(floatval($prixVerreG), 2);
							}
						}
						else {
								echo number_format($prixVerreG, 2, ',', '').' €';
								$total_commande += round(floatval($prixVerreG), 2);
							}
                }
                else
                {
					if($recap_commande['type_de_verreG']!="")
					{
						$nomG=explode("(",$recap_commande['nomverreGH']);
						echo '<td><h4>Oeil gauche : '.$nomG[0].'</h4>'.$correction_gauche.'</td>';
					}

					echo '<td class="center">'.$recap_commande['quantiteG'].'</td>';
                    $quantiteVerreTeledetourage += $recap_commande['quantiteG'];

					if($user_info->restriction_compte == 0){
						$option_prix = 0;

						if(isset($info_commande['verre']['miroir']['prix_miroir'])) {
							$option_prix += $info_commande['verre']['miroir']['prix_miroir'];
						}

						if($recap_commande['type_de_verreG']!="")
						{
							echo '<td class="center">';
							if(isset($discount) && $discount['on'] == $k) {
								if($discount['amount'] > 0) {
									$recap_commande['prix_discount'] = ($recap_commande['prixGH']) - ( ( ($recap_commande['prixGH']) / 100 ) * $discount['amount'] );
									echo '<del>'.(($recap_commande['prixGH'])).' €</del> ';
									echo '-'.$discount['amount'].'% ';
									echo ($recap_commande['prix_discount']);
									$total_commande += round(floatval($recap_commande['prix_discount']), 2);
								}
								else {
									echo (($recap_commande['prixGH']));
									$total_commande += round(floatval($recap_commande['prixGH']), 2);
								}
							}
							else {
								echo (($recap_commande['prixGH']));
								$total_commande += round(floatval($recap_commande['prixGH']), 2);
							}
							echo ' €</td>';
						}

						/*if($recap_commande['type_commande'] == 1 || $recap_commande['type_commande'] == 2)
						{

							if(isset($discount) && $discount['on'] == $k) {
								if($discount['amount'] > 0) {
									$recap_commande['prix_discount'] = ($recap_commande['prix_verre']+$option_prix) - ( ( ($recap_commande['prix_verre']+$option_prix) / 100 ) * $discount['amount'] );
									echo '<del>'.(($recap_commande['prix_verre']+$option_prix) * $quantite_commande).' €</del> ';
									echo '-'.$discount['amount'].'% ';
									echo ($recap_commande['prix_discount']*$quantite_commande);
									$total_commande += floatval($recap_commande['prix_discount']*$quantite_commande);
								}
								else {
									echo (($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
									$total_commande += floatval(($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
								}
							}
							else {
								echo (($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
								$total_commande += floatval(($recap_commande['prix_verre']+$option_prix) * $quantite_commande);
							}
						}*/



					}

                }

                echo '</tr>';
            }
//            echo '<pre>';
//        print_r($recap_commande);
//        echo '</pre>';

        if ($recap_commande['format_teledetourage']) {
            if ($recap_commande['format_teledetourage'] == 'plastic') {
                $formatTeledetourage = 'Plasique';
            }
            else if ($recap_commande['format_teledetourage'] == 'metal') {
                $formatTeledetourage = 'Métal';
            }
            else if ($recap_commande['format_teledetourage'] == 'nylor') {
                $formatTeledetourage = 'Nylor';
            }
            else if ($recap_commande['format_teledetourage'] == 'drilled') {
                $formatTeledetourage = 'Percée';
            }
            echo '<tr>';
            echo '<td><h4>Télédétourage Monture: '.$formatTeledetourage . ' (' . $recap_commande['prix_teledetourage'] . ' € par verre)</h4></td>';
            echo '<td class="center">' . $quantiteVerreTeledetourage . '</td>';
            echo '<td class="center">' . $quantiteVerreTeledetourage * $recap_commande['prix_teledetourage'] . ' €</td>';
            echo '</tr>';
            $total_commande += $quantiteVerreTeledetourage * $recap_commande['prix_teledetourage'];
        }



        if(($type_commande_verre == 1  || (isset($type_commande_verreG) && $type_commande_verreG == 1 && $type_commande_verre == 4)
                || $k == 'pair_order')
                && isset($recap_commande['recap_commande'])
                && strpos(strtolower($recap_commande['recap_commande']['nomverreDH']),
                    'miroir') === false
                && strpos(strtolower($recap_commande['recap_commande']['nomverreGH']),
                    'miroir') === false
                && strpos(strtolower($recap_commande['recap_commande']['traitementDH']),
                    'miroir') === false
                && strpos(strtolower($recap_commande['recap_commande']['traitementGH']),
                    'miroir') === false
             ) {

                if($k == 'pair_order') {
                    $express_id = 'express_pair';
                    $is_checked = false;

                    if($pair_order_recap['is_express']) {
                        $is_checked = true;
                    }

                }
                else {
                    $express_id = 'express';
                    $is_checked = false;
                }


                echo '<tr>
                    <td colspan="3"><h4 style="margin: 20px 0; background: #f8bc05; padding: 10px;">Service Express (25€)</h4></td></tr>
                    <tr>
                        <td>
                        <input type="checkbox" id="'.$express_id.'" value="1" name="'.$express_id.'" class="js-switch express" data-color="#ffaa00" '.($is_checked == true ? 'checked="checked"' : '').' />
                        Délais maximum pour une commande passée avant 15h30 : J+3 ( hors jours fériés et week-end )<br />
                        Rajouter 1 jour pour des verres teintés. 
                        </td>
                    <td class="center expressQty">'.($is_checked == true ? '1' : '0').'</td>
                    <td class="center expressPrice">'.($is_checked == true ? '25 €' : '-').'</td>
                </tr>';

            }

			if($panierA!=1 && (isset($recap_commande['nomverreDH']) && strpos($recap_commande['nomverreDH'], "Panier A") === false)  && (isset($recap_commande['nomverreGH']) && strpos($recap_commande['nomverreGH'], "Panier A") === false))
			{
				if(!isset($orderbag['pair_order']) && $recap_commande['type_commande'] == 1 && $type_commande_verre == 1) {
					echo '<tr>
						<td colspan="3"><h4 style="margin: 20px 0; background: #f8bc05; padding: 10px;">Deuxième paire</h4></td></tr>
						<tr>
							<td>
							<input type="checkbox" id="finish_pair" value="1" name="finish_pair" class="js-switch" data-color="#ffaa00" />
							Je veux une deuxième paire pour mon client
							</td>
						<td class="center"></td>
						<td class="center"></td>
					</tr>';

				}
			}

            echo '</tbody>
            </table>';


        }

//echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.$total_commande.'">'.($total_commande+$prixmonture).'</b> €</strong></div>';


        if($user_info->restriction_compte == 0){


            if($recap_commande['type_commande'] == 2 || $recap_commande['type_commande'] == 3) {

                echo '<div class="total final"><span>Total final</span><strong><b class="calculatedTotal" data-base="0">0</b> €</strong></div>';

                if(isset($pair_order_recap)) {
                    echo '<div class="total"><span>Total</span><strong><del><b class="calculatedTotal" data-base="'.round((( $recap_commande['total_commande'] * $quantite_commande )+$prixmonture),2).'">'.round((( $recap_commande['total_commande'] * $quantite_commande )+$prixmonture),2).'</b> €</del></strong></div>';
                }
                else {
                    echo '<div class="total"><span>Total</span><strong><del><b class="calculatedTotal" data-base="'.round(($total_commande+$prixmonture),2).'">'.round(($total_commande+$prixmonture),2).'</b> €</del></strong></div>';
                }

            }
            elseif($recap_commande['type_commande'] == 1) {
                if(isset($pair_order_recap)) {
                    echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.round(($total_commande+$prixmonture),2).'">'.round(($total_commande+$prixmonture),2).'</b> €</strong></div>';
                }
                else {
					/*$t=$recap_commande['total_commande'] * $quantite_commande;
					$tf=$t+$prixmonture;
					if($type_commande_verre == 1)
                    	echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.$tf.'"></b> €</strong></div>';
					else
						echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.$tf.'">'.$tf.'</b> €</strong></div>';
					*/
					echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.round(($total_commande+$prixmonture),2).'">'.round(($total_commande+$prixmonture),2).'</b> €</strong></div>';
                }
            }
            else
            {
            	echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.round(($total_commande+$prixmonture),2).'">'.round(($total_commande+$prixmonture),2).'</b> €</strong></div>';
            }

        }



   echo '<div class="clearfix"></div>';

		//echo '<h2>show_commentaire: '.$recap_commande['user_info']->show_commentaire.'</h2>';
	//	var_dump($recap_commande['user_info']);
		if(isset($recap_commande['user_info']->show_commentaire) &&
           $recap_commande['user_info']->show_commentaire == '1' && $recap_commande['commentaire_actif']->active != 0
            && strpos($recap_commande['libelle_verre'], 'Panier A') === false) {
			?>
			<div class="form-group  clearfix">
				<label class="col-lg-2 control-label" for="commentaire">Commentaire (facultatif)</label>
				<div class="col-lg-10">
					<textarea name="commentaire" id="commentaire" rows="5" class="form-control"></textarea>
					<div class="validator"></div>
				</div>
			</div><br>
		<?php }
?>
