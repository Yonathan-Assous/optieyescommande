﻿<?php
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

    if(isset($pair_order_recap)) {
        $orderbag['pair_order'] = $pair_order_recap;
    }

    $orderbag['order'] = $recap_commande;


    foreach($orderbag as $k => $recap_commande) {

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

        echo '</tr>
        </thead>
        <tbody>';


            $info_commande = json_decode($recap_commande['information_commande'],true);


            $correction_droit = $correction_gauche = $info_c = $options = $mesure_freeform_opt = '';
            $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');


            if(isset($info_commande['verre']['correction_droit'])) {
                $correction_droit = 'Correction : <br> - Sphère : ' . $info_commande['verre']['correction_droit']['sphere'] . ', Cylindre : ' . $info_commande['verre']['correction_droit']['cylindre'] . (isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : ' . $info_commande['verre']['correction_droit']['axe'] : '') . (isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : ' . $info_commande['verre']['correction_droit']['addition'] : '') . (isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : ' . $info_commande['verre']['correction_droit']['degression'] : '') . '<br>';
            }

            if(isset($info_commande['verre']['correction_gauche'])) {
                $correction_gauche = 'Correction : <br> - Sphère : ' . $info_commande['verre']['correction_gauche']['sphere'] . ', Cylindre : ' . $info_commande['verre']['correction_gauche']['cylindre'] . (isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : ' . $info_commande['verre']['correction_gauche']['axe'] : '') . (isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : ' . $info_commande['verre']['correction_gauche']['addition'] : '') . (isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : ' . $info_commande['verre']['correction_gauche']['degression'] : '') . '<br>';
            }

            if(isset($info_commande['precalibrage']['calibre'])) {
                $info_c = 'Précalibrage : ' . $info_commande['precalibrage']['calibre'] . '<br>';
            }

            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ': '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ': '';
            $mesure_freeform_opt .= isset($info_commande['mesure_freeform']['diametre_utile']) ? 'Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>' : '';

            if(isset($info_commande['diametre_verre'])) {
                $info_c .= "Diamètre verre : " . $info_commande['diametre_verre'] . "<br>";
            }

            if(!empty($mesure_freeform_opt)){
                $info_c .= 'Mesure freeform : <br> - ';
                $info_c .= $mesure_freeform_opt;
            }

            if(isset($info_commande['monture']['type'])) {
                $info_c .= 'Type monture : ' . $info_commande['monture']['type'] . '<br>';
            }

            if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur'])) {
                $info_c .= 'EP au bord minimum : ' . $info_commande['bord_verre']['epaisseur'] . '<br>';
            }

            if(isset($info_commande['verre']['galbe'])) {
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
                $info_c .= 'Options : <br>';
                $info_c .= $options;
            }


            if(isset($recap_commande['nb_multi_commande'])) {
                $quantite_commande = ($recap_commande['nb_multi_commande'] == "" ? 1 : $recap_commande['nb_multi_commande']);
            }
            else {
                $quantite_commande = 1;
            }

            if($correction_droit!=''){

                $correction_droit .=$info_c;

                if(isset($info_commande['verre']['hauteur'])) {
                    $correction_droit .= ' Hauteur : ' . $info_commande['verre']['hauteur'] . '<br>';
                }

                if(isset($info_commande['verre']['ecart_puppillaire']['droit'])) {
                    $correction_droit .= ' Ecart pupillaire : ' . $info_commande['verre']['ecart_puppillaire']['droit'];
                }

                if(isset($info_commande['verre']['dioptrie_droit'])) {
                    $correction_droit .= '<br>Prisme : <br>- Dioptrie : ' . $info_commande['verre']['dioptrie_droit'] . ' ';
                }

                if(isset($info_commande['verre']['base_droit'])) {
                    $correction_droit .= 'Base : ' . $info_commande['verre']['base_droit'] . ' Degrès';
                }

                if(isset($info_commande['verre']['diametre'])) {
                    $correction_droit .= 'Diamètre : ' . $info_commande['verre']['diametre'];
                }

                if(isset($info_commande['precalibrage']['calibre'])) {
                    $correction_droit .= '<br><img src="static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';
                }

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

                    if(isset($info_commande['verre']['miroir']['prix_miroir'])) {
                        $option_prix += $info_commande['verre']['miroir']['prix_miroir'];
                    }

                    echo '<td class="center">';

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
                    echo ' €</td>';

                }

                echo '</tr>';

            }

            if($correction_gauche!=''){
                $correction_gauche .=$info_c;

                if(isset($info_commande['verre']['hauteur_gauche'])) {
                    $correction_gauche .= ' Hauteur : ' . $info_commande['verre']['hauteur_gauche'] . '<br>';
                }

                if(isset($info_commande['verre']['ecart_puppillaire']['gauche'])) {
                    $correction_gauche .= ' Ecart pupillaire : ' . $info_commande['verre']['ecart_puppillaire']['gauche'];
                }

                if(isset($info_commande['verre']['dioptrie_gauche'])) {
                    $correction_gauche .= '<br>Prisme : <br>- Dioptrie : ' . $info_commande['verre']['dioptrie_gauche'] . ' ';
                }

                if(isset($info_commande['verre']['base_gauche'])) {
                    $correction_gauche .= 'Base : ' . $info_commande['verre']['base_gauche'] . ' Degrès';
                }

                if(isset($info_commande['verre']['diametre_gauche'])) {
                    $correction_gauche .= 'Diamètre : ' . $info_commande['verre']['diametre_gauche'];
                }

                if(isset($info_commande['precalibrage']['calibre'])) {
                    $correction_gauche .= '<br><img src="static/img/calibre/' . $info_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';
                }

                echo '<tr>';
                echo '<td><h4>Oeil gauche : '.$recap_commande['libelle_verre'].'</h4>'.$correction_gauche.'</td>';
                echo '<td class="center">'.$quantite_commande.'</td>';

                if($user_info->restriction_compte == 0){
                    $option_prix = 0;

                    if(isset($info_commande['verre']['miroir']['prix_miroir'])) {
                        $option_prix += $info_commande['verre']['miroir']['prix_miroir'];
                    }

                    echo '<td class="center">';

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
                    echo ' €</td>';

                }

                echo '</tr>';
            }


            if(($type_commande_verre == 1 && isset($recap_commande['miroir']) && $recap_commande['miroir'] == 0) || ($k == 'pair_order' && isset($recap_commande['id_miroir']) && $recap_commande['id_miroir'] == 0)) {

            if($k == 'pair_order') {
                $express_id = 'express_pair';
                $is_checked = false;

                if($pair_order_recap['tarif_express'] > 0) {
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

            echo '</tbody>
            </table>';


        }


        if($user_info->restriction_compte == 0){


            if($recap_commande['type_commande'] > 1) {

                echo '<div class="total final"><span>Total final</span><strong><b class="calculatedTotal" data-base="0">0</b> €</strong></div>';

                if(isset($pair_order_recap)) {
                    echo '<div class="total"><span>Total</span><strong><del><b class="calculatedTotal" data-base="'.( $recap_commande['total_commande'] * $quantite_commande ).'">'.( $recap_commande['total_commande'] * $quantite_commande ).'</b> €</del></strong></div>';
                }
                else {
                    echo '<div class="total"><span>Total</span><strong><del><b class="calculatedTotal" data-base="'.$total_commande.'">'.$total_commande.'</b> €</del></strong></div>';
                }


            }
            else {
                if(isset($pair_order_recap)) {
                    echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.$total_commande.'">'.$total_commande.'</b> €</strong></div>';
                }
                else {
                    echo '<div class="total"><span>Total</span><strong><b class="calculatedTotal" data-base="'.( $recap_commande['total_commande'] * $quantite_commande ).'">'.( $recap_commande['total_commande'] * $quantite_commande ).'</b> €</strong></div>';
                }
            }

        }



   echo '<div class="clearfix"></div>';

        if(!empty($recap_commande['commentaire']))
            echo '<div class="notes">
                    <h5>Commentaire :</h5>
                    <p>'.$recap_commande['commentaire'].'</p>
                  </div>';
?>
