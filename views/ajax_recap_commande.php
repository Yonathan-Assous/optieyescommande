<?php
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
		
		/*if($recap_commande['type_commande'] > 1)
		echo '<div style="font-size:14px;margin-left:15px;">
				<p>Les verres que vous êtes sur le point de commander vont vous être facturés. Pour pouvoir bénéficier de votre remise, merci de bien vouloir nous envoyer par courrier, à l\'adresse fournisseur mentionnée sur le bon de livraison, sous 30 jours à compter d\'aujourd\'hui :</p>
				<p>- Le nouveau bon de livraison de la commande que vous êtes sur le point de passer</p>
				<p>- L\'ancien bon de livraison de cette commande</p>
				<p>- Les verres de l\'ancien bon de livraison</p>
				<p>Les mesures, générations de verres et traitements devront être identiques. Seul les corrections pourront être différentes pour l\'erreur opthalmologiste uniquement.</p>
				<p style="font-weight:bold">A défaut, cette commande ne pourra faire l\'objet d\'une remise.</p>
				<p>Il se peut que cette commande ne puisse être passée en erreur ophtalmologiste et/ou en casse atelier. Dans ce cas, et pour avoir plus d\'informations, merci de bien vouloir vous référer à l\'espace prévu à cet effet, dans l\'onglet " Erreur ophtalmologiste/Casse atelier ".</p>
			 </div>';*/

        echo '<table class="styled borders" id="products">
            <thead>
                <tr>
                    <th style="width: 80%">Description</th>
                    <th>Quantité</th>';

                    if($user_info->restriction_compte == 0){
                        echo '<th>Total</th>';
                    }

          echo '</tr>
            </thead>
            <tbody>';

            $info_commande = json_decode($recap_commande['information_commande'],true);
            $correction_droit = $correction_gauche = $info_c = $options = $mesure_freeform_opt = '';
            $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune');


if(isset($info_commande['verre']['correction_droit']))
                $correction_droit = 'Correction : <br> - Sphère : '.$info_commande['verre']['correction_droit']['sphere'].', Cylindre : '.$info_commande['verre']['correction_droit']['cylindre'].(isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : '.$info_commande['verre']['correction_droit']['axe'] : '').(isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : '.$info_commande['verre']['correction_droit']['addition'] : '').(isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : '.$info_commande['verre']['correction_droit']['degression'] : '').'<br>';

            if(isset($info_commande['verre']['correction_gauche']))
                $correction_gauche = 'Correction : <br> - Sphère : '.$info_commande['verre']['correction_gauche']['sphere'].', Cylindre : '.$info_commande['verre']['correction_gauche']['cylindre'].(isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : '.$info_commande['verre']['correction_gauche']['axe'] : '').(isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : '.$info_commande['verre']['correction_gauche']['addition'] : '').(isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : '.$info_commande['verre']['correction_gauche']['degression'] : '').'<br>';

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
				$options .= '- Galbe/base : '.$info_commande['verre']['galbe'].'<br>';
			
			if(isset($info_commande['verre']['angle_pantoscopique']))
				$options .= '- Angle pantoscopique : '.$info_commande['verre']['angle_pantoscopique'].'<br>';
				
			if(isset($info_commande['verre']['angle_galbe']))
				$options .= '- Angle de galbe : '.$info_commande['verre']['angle_galbe'].'<br>';
						
			if(isset($info_commande['verre']['distance_verre_oeil']))
				$options .= '- Distance verre oeil : '.$info_commande['verre']['distance_verre_oeil'].'<br>';
				
			if(isset($info_commande['verre']['miroir']))
				$options .= '- '.$options_miroir[$info_commande['verre']['miroir']['type_miroir']].' HMC face interne (+'.$info_commande['verre']['miroir']['prix_miroir'].'€)<br>';
				
			if(!empty($options)){
				$info_c .= 'Options : <br>';
				$info_c .= $options;
			}
									
                  
      $quantite_commande = ($recap_commande['nb_multi_commande'] == "" ? 1 : $recap_commande['nb_multi_commande']);
            if($correction_droit!=''){
                $correction_droit .=$info_c;
                
                
        if(isset($info_commande['verre']['hauteur']))
              $correction_droit .= ' Hauteur : '.$info_commande['verre']['hauteur'].'<br>';
				
				if(isset($info_commande['verre']['ecart_puppillaire']['droit']))
					$correction_droit .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['droit'];
				
				if(isset($info_commande['verre']['dioptrie_droit']))
					$correction_droit .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_droit'].' ';

				if(isset($info_commande['verre']['base_droit']))
					$correction_droit .= 'Base : '.$info_commande['verre']['base_droit'].' Degrès';
					
				if(isset($info_commande['verre']['diametre']))
					$correction_droit .= 'Diamètre : '.$info_commande['verre']['diametre'];
          
          if(isset($info_commande['precalibrage']['calibre']))
            $correction_droit .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';

        if(isset($info_commande['verre']['polarise'])){
          $recap_commande['libelle_verre'] = str_replace("polarisé",$info_commande['verre']['polarise'],$recap_commande['libelle_verre']);
        }
        
        if(isset($info_commande['verre']['miroir_stock'])){
          $recap_commande['libelle_verre'] = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$recap_commande['libelle_verre']);
        }
        
                echo '<tr>';
                    echo '<td><h4>Oeil droit : '.$recap_commande['libelle_verre'].'</h4>'.$correction_droit.'</td>';
                    echo '<td class="center">'.$quantite_commande.'</td>';

                    if($user_info->restriction_compte == 0){
						$option_prix = 0;
						
						if(isset($info_commande['verre']['miroir']['prix_miroir']))
							$option_prix += $info_commande['verre']['miroir']['prix_miroir'];
							
						echo '<td class="center">'.(($recap_commande['prix_verre']+$option_prix) * $quantite_commande).' €</td>';
					}

                echo '</tr>';
            }

            if($correction_gauche!=''){
                $correction_gauche .=$info_c;
                
        if(isset($info_commande['verre']['hauteur_gauche']))
            $correction_gauche .= ' Hauteur : '.$info_commande['verre']['hauteur_gauche'].'<br>';
				
				if(isset($info_commande['verre']['ecart_puppillaire']['gauche']))
					$correction_gauche .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['gauche'];
				
				if(isset($info_commande['verre']['dioptrie_gauche']))
					$correction_gauche .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_gauche'].' ';

				if(isset($info_commande['verre']['base_gauche']))
					$correction_gauche .= 'Base : '.$info_commande['verre']['base_gauche'].' Degrès';
				
				if(isset($info_commande['verre']['diametre_gauche']))
					$correction_gauche .= 'Diamètre : '.$info_commande['verre']['diametre_gauche'];
          
        if(isset($info_commande['precalibrage']['calibre']))
            $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';
					
                echo '<tr>';
                    echo '<td><h4>Oeil gauche : '.$recap_commande['libelle_verre'].'</h4>'.$correction_gauche.'</td>';
                    echo '<td class="center">'.$quantite_commande.'</td>';
                    if($user_info->restriction_compte == 0){
						$option_prix = 0;
						
						if(isset($info_commande['verre']['miroir']['prix_miroir']))
							$option_prix += $info_commande['verre']['miroir']['prix_miroir'];
							
						echo '<td class="center">'.( ($recap_commande['prix_verre']+$option_prix) * $quantite_commande).' €</td>';
					}
                echo '</tr>';
            }

      echo '</tbody>
        </table>';



        if($user_info->restriction_compte == 0){

            if($recap_commande['type_commande'] > 1) {

                echo '<div class="total final"><span>Total final</span><strong>0 €</strong></div>';
                echo '<div class="total"><span>Total</span><strong><del>'.( $recap_commande['total_commande'] * $quantite_commande ).' €</del></strong></div>';


            }
            else {
                echo '<div class="total"><span>Total</span><strong>'.( $recap_commande['total_commande'] * $quantite_commande ).' €</strong></div>';
            }

        }



   echo '<div class="clearfix"></div>';

        if(!empty($recap_commande['commentaire']))
            echo '<div class="notes">
                    <h5>Commentaire :</h5>
                    <p>'.$recap_commande['commentaire'].'</p>
                  </div>';
?>