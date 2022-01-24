<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

    <?php

    switch($recap_commande[0]->type_commande) {
        case 3:
            echo '<h4 class="modal-title">Erreur ophtalmologiste - Client '.$recap_commande[0]->id_users.'</h4>';
            break;
        case 2:
            echo '<h4 class="modal-title">Casse atelier - Client '.$recap_commande[0]->id_users.'</h4>';
            break;
    }

    ?>

</div>

<div class="modal-body">

        <table class="styled borders" id="products">
            <thead>
            <tr>
                <?php if($ancienne_commande !== false && $recap_commande !== false) { ?>
                <th>Nouvelle commande N°<?php echo $recap_commande[0]->id_commande; ?> /
                    <?php
                        if ($recap_commande[0]->reference_client != $ancienne_commande[0]->reference_client) {
                            $ref_client_new = '<strong style="background-color: black; color: white">' . $recap_commande[0]->reference_client . '</strong>';
                            $ref_client_old = '<strong style="background-color: black; color: white">' . $ancienne_commande[0]->reference_client . '</strong>';
                        }
                        else {
                            $ref_client_new = $recap_commande[0]->reference_client;
                            $ref_client_old = $ancienne_commande[0]->reference_client;
                        }
                        echo $ref_client_new;
                    ?>
                    <br /><?php echo $recap_commande[0]->date_commande; ?></th>
                <th>Ancienne commande N°<?php echo $ancienne_commande[0]->id_commande; ?> / <?php echo $ref_client_old; ?> <br /><?php echo $ancienne_commande[0]->date_commande; ?></th>
                <?php } ?>
            </tr>
            </thead>

            <tbody>

            <tr>

                <td>

                    <?php

                    if($recap_commande !== false) {

                        $info_commande = json_decode($recap_commande[0]->information_commande,true);
                        if($ancienne_commande !== false) {
                            $info_nouvelle_commande = json_decode($ancienne_commande[0]->information_commande, true);
                        }
                        $correction_droit = $correction_gauche = $info_c = $options = '';
                        $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');

                        if(isset($info_commande['verre']['correction_droit'])) {
                            if (!isset($info_nouvelle_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['sphere'] != $info_nouvelle_commande['verre']['correction_droit']['sphere']) {
                                $correction_droit = '<br>- <span style="background-color: #ed1c24; color: white">Sphère: <strong>'.$info_commande['verre']['correction_droit']['sphere'].'</strong></span>, ';
                            }
                            else {
                                $correction_droit .= '<br>- Sphère: <strong style="color: #ed1c24">'.$info_commande['verre']['correction_droit']['sphere'].'</strong>, ';
                            }
                            if (!isset($info_nouvelle_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['cylindre'] != $info_nouvelle_commande['verre']['correction_droit']['cylindre']) {
                                $correction_droit .= '<span style="background-color: #22b14c; color: white">Cylindre: <strong>'.$info_commande['verre']['correction_droit']['cylindre'].'</strong></span>, ';
                            }
                            else {
                                $correction_droit .= 'Cylindre: <strong style="color: #22b14c">'.$info_commande['verre']['correction_droit']['cylindre'].'</strong>, ';
                            }
                            if (!isset($info_nouvelle_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['axe'] != $info_nouvelle_commande['verre']['correction_droit']['axe']) {
                                $correction_droit .= '<span style="background-color: #ffaec9; color: #333">Axe: <strong>'.$info_commande['verre']['correction_droit']['axe'].'</strong></span>, ';
                            }
                            else {
                                $correction_droit .= 'Axe: <strong style="color: #ffaec9">'.$info_commande['verre']['correction_droit']['axe'].'</strong>, ';
                            }
                            $additionNew = isset($info_commande['verre']['correction_droit']['addition']) ? $info_commande['verre']['correction_droit']['addition'] : '';
                            $additionOld = isset($info_nouvelle_commande['verre']['correction_droit']['addition']) ? $info_nouvelle_commande['verre']['correction_droit']['addition'] : '';
                            if ($additionOld != $additionNew) {
                                $correction_droit .= '<span style="background-color: #00a2e8; color: white">Addition: <strong>'.$additionNew.'</strong></span>';
                            }
                            else if ($additionNew != ''){
                                $correction_droit .= 'Addition: <strong style="color: #00a2e8">'.$additionNew.'</strong>';
                            }

                            $correction_droit = 'Correction: ' . $correction_droit . '</br>';
                        }


//                        if(isset($info_commande['verre']['correction_droit']))
//                            $correction_droit = 'Correction : <br> - Sphère : <strong style="color: #ed1c24">'.$info_commande['verre']['correction_droit']['sphere'].'</strong>, Cylindre : <strong style="color: #22b14c">'.$info_commande['verre']['correction_droit']['cylindre'].'</strong>'.(isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : <strong style="color: #ffaec9">'.$info_commande['verre']['correction_droit']['axe'] : '').'</strong>'.(isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : <strong style="color: #ff9c00">' .$info_commande['verre']['correction_droit']['addition'] : '').'</strong>'.(isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : '.$info_commande['verre']['correction_droit']['degression'] : '').'<br>';

                        if(isset($info_commande['verre']['correction_gauche'])) {
                            if (!isset($info_nouvelle_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['sphere'] != $info_nouvelle_commande['verre']['correction_gauche']['sphere']) {
                                $correction_gauche = '<br> - <span style="background-color: #ed1c24; color: white">Sphère: <strong>'.$info_commande['verre']['correction_gauche']['sphere'].'</strong></span>, ';
                            }
                            else {
                                $correction_gauche .= '<br> - Sphère: <strong style="color: #ed1c24">'.$info_commande['verre']['correction_gauche']['sphere'].'</strong>, ';
                            }
                            if (!isset($info_nouvelle_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['cylindre'] != $info_nouvelle_commande['verre']['correction_gauche']['cylindre']) {
                                $correction_gauche .= '<span style="background-color: #22b14c; color: white">Cylindre: <strong>'.$info_commande['verre']['correction_gauche']['cylindre'].'</strong></span>, ';
                            }
                            else {
                                $correction_gauche .= 'Cylindre: <strong style="color: #22b14c">'.$info_commande['verre']['correction_gauche']['cylindre'].'</strong>, ';
                            }
                            if (!isset($info_nouvelle_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['axe'] != $info_nouvelle_commande['verre']['correction_gauche']['axe']) {
                                $correction_gauche .= '<span style="background-color: #ffaec9; color: #333">Axe: <strong>'.$info_commande['verre']['correction_gauche']['axe'].'</strong></span>, ';
                            }
                            else {
                                $correction_gauche .= 'Axe: <strong style="color: #ffaec9">'.$info_commande['verre']['correction_gauche']['axe'].'</strong>, ';
                            }
                            $additionNew = isset($info_commande['verre']['correction_gauche']['addition']) ? $info_commande['verre']['correction_gauche']['addition'] : '';
                            $additionOld = isset($info_nouvelle_commande['verre']['correction_gauche']['addition']) ? $info_nouvelle_commande['verre']['correction_gauche']['addition'] : '';
                            if ($additionOld != $additionNew) {
                                $correction_gauche .= '<span style="background-color: #00a2e8; color: white">Addition: <strong>'.$additionNew.'</strong></span></br>';
                            }
                            else if ($additionNew != ''){
                                $correction_gauche .= 'Addition: <strong style="color: #00a2e8">'.$additionNew.'</strong></br>';
                            }
                            $correction_gauche = 'Correction : ' . $correction_gauche;
                        }
//                            $correction_gauche = 'Correction : <br> - Sphère : <strong style="color: #00a2e8">'.$info_commande['verre']['correction_gauche']['sphere'].'</strong>, Cylindre : <strong style="color: #222">'.$info_commande['verre']['correction_gauche']['cylindre'].'</strong>'.(isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : <strong style="color: #c9c9c9">'.$info_commande['verre']['correction_gauche']['axe'] : '').'</strong>'.(isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : <strong style="color: #c8bfe7">'.$info_commande['verre']['correction_gauche']['addition'] : '').'</strong>'.(isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : '.$info_commande['verre']['correction_gauche']['degression'] : '').'<br>';

                        if(isset($info_commande['precalibrage']['calibre'])) {
                            $precalibrageNew = $info_commande['precalibrage']['calibre'];
                        }
                        else  {
                            $precalibrageNew = '';
                        }
                        if(isset($info_nouvelle_commande['precalibrage']['calibre'])) {
                            $precalibrageOld = $info_nouvelle_commande['precalibrage']['calibre'];
                        }
                        else  {
                            $precalibrageOld = '';
                        }
                        if($precalibrageNew != $precalibrageOld) {
                                $info_c = '<strong style="background-color: #57c5a5; color: white">Précalibrage : '.$precalibrageNew.'</strong><br>';
                        }
                        else if (!empty($precalibrageNew)) {
                            $info_c = 'Précalibrage : '.$precalibrageNew.'<br>';
                        }

                        if(isset($info_commande['diametre_verre']))
                            $info_c .= "Diamètre verre : ". $info_commande['diametre_verre']."<br>";

                        if (isset($info_commande['mesure_freeform']) || isset($info_nouvelle_commande['mesure_freeform'])) {
                            $info_c .= 'Mesure freeform : <br>';
                            $largeurBoxingNew = isset($info_commande['mesure_freeform']['largeur_boxing']) ? $info_commande['mesure_freeform']['largeur_boxing'] : '';
                            $largeurBoxingOld = isset($info_nouvelle_commande['mesure_freeform']['largeur_boxing']) ? $info_nouvelle_commande['mesure_freeform']['largeur_boxing'] : '';

                            $hauteurBoxingNew = isset($info_commande['mesure_freeform']['hauteur_boxing']) ? $info_commande['mesure_freeform']['hauteur_boxing'] : '';
                            $hauteurBoxingOld = isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']) ? $info_nouvelle_commande['mesure_freeform']['hauteur_boxing'] : '';

                            $tailleDuPontNew = isset($info_commande['mesure_freeform']['taille_du_pont']) ? $info_commande['mesure_freeform']['taille_du_pont'] : '';
                            $tailleDuPontOld = isset($info_nouvelle_commande['mesure_freeform']['taille_du_pont']) ? $info_nouvelle_commande['mesure_freeform']['taille_du_pont'] : '';

                            if ($largeurBoxingNew != $largeurBoxingOld) {
                                $info_c .= '- <span style="background-color: #ffaee8; color: #333">Largeur boxing: <strong>'.$largeurBoxingNew.'</strong></span><br>';
                            }
                            else if (!empty($largeurBoxingNew)) {
                                $info_c .= '- Largeur boxing:'.$largeurBoxingNew.'<br>';
                            }
                            if ($hauteurBoxingNew != $hauteurBoxingOld) {
                                $info_c .= '- <span style="background-color: #1c74ed; color: white">Hauteur boxing: <strong>'.$hauteurBoxingNew.'</strong></span><br>';
                            }
                            else if (!empty($hauteurBoxingNew)) {
                                $info_c .= '- Hauteur boxing:'.$hauteurBoxingNew.'<br>';
                            }
                            if ($tailleDuPontNew != $tailleDuPontOld) {
                                $info_c .= '- <span style="background-color: #ffb700; color: white">Taille du pont: <strong>'.$tailleDuPontNew.'</strong></span><br>';
                            }
                            else if (!empty($tailleDuPontNew)) {
                                $info_c .= '- Taille du pont:'.$tailleDuPontNew.'<br>';
                            }
                            if(isset($info_commande['mesure_freeform']['diametre_utile']))
                                $info_c .=  '- Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>';
                            $info_c .= '<br>';
                        }

//                        if(isset($info_commande['mesure_freeform']['largeur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']))
//                            $info_c .= (isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '').(isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ' : '').(isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ' : '');



                        $typeMontureNew = isset($info_commande['monture']['type']) ? $info_commande['monture']['type'] : '';
                        $typeMontureOld = isset($info_nouvelle_commande['monture']['type']) ? $info_nouvelle_commande['monture']['type'] : '';

                        if ($typeMontureNew != $typeMontureOld) {
                            $info_c .= '- <span style="background-color: #d3aeff; color: #333">Type monture: <strong>'.$typeMontureNew.'</strong></span><br>';
                        }
                        else if (!empty($typeMontureNew)) {
                            $info_c .= '- Type monture:'.$typeMontureNew.'<br>';
                        }
//                        $info_c .= '- Type monture : '.$info_commande['monture']['type'].'<br>';



                        if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur'])) {
                            $oldEpaisseur = $info_commande['bord_verre']['epaisseur'];
                        }
                        else  {
                            $oldEpaisseur = '';
                        }

                        if(isset($info_nouvelle_commande['bord_verre']['epaisseur']) && !empty($info_nouvelle_commande['bord_verre']['epaisseur'])) {
                            $newEpaisseur = $info_nouvelle_commande['bord_verre']['epaisseur'];
                        }
                        else  {
                            $newEpaisseur = '';
                        }

                        if ($oldEpaisseur != $newEpaisseur) {
                            $info_c .= '- <strong style="background-color: #777; color: white">EP au bord minimum :  '.$oldEpaisseur.'</strong><br>';
                        }
                        else if (!empty($oldEpaisseur)) {
                            $info_c .= '- EP au bord minimum : '.$oldEpaisseur.'<br>';
                        }

                        if ($info_c == 'Mesure freeform : <br>') {
                            $info_c = '';
                        }

                        if(isset($info_commande['verre']['correction_droit']['galbe'])) {
                            $oldGalbe = $info_commande['verre']['correction_droit']['galbe'];
                        }
                        else if(isset($info_commande['verre']['correction_gauche']['galbe'])) {
                            $oldGalbe = $info_commande['verre']['correction_gauche']['galbe'];
                        }
                        else  {
                            $oldGalbe = '';
                        }
                        if(isset($info_nouvelle_commande['verre']['correction_droit']['galbe'])) {
                            $newGalbe = $info_nouvelle_commande['verre']['correction_droit']['galbe'];
                        }
                        else if(isset($info_nouvelle_commande['verre']['correction_gauche']['galbe'])) {
                            $newGalbe = $info_nouvelle_commande['verre']['correction_gauche']['galbe'];
                        }
                        else  {
                            $newGalbe = '';
                        }
                        if ($oldGalbe != $newGalbe) {
                            $options .= '- <strong style="background-color: #5f0808; color: white">Galbe/base : '.$oldGalbe.'</strong><br>';
                        }
                        else if (!empty($oldGalbe)) {
                            $options .= '- Galbe/base : '.$oldGalbe.'<br>';
                        }

                        if(isset($info_commande['verre']['angle_pantoscopique']))
                            $options .= '- Angle pantoscopique : '.$info_commande['verre']['angle_pantoscopique'].'<br>';

                        if(isset($info_commande['verre']['angle_galbe']))
                            $options .= '- Angle de galbe : '.$info_commande['verre']['angle_galbe'].'<br>';

                        if(isset($info_commande['verre']['distance_verre_oeil']))
                            $options .= '- Distance verre oeil : '.$info_commande['verre']['distance_verre_oeil'].'<br>';

                        if(isset($info_commande['verre']['miroir']))
                            $options .= '- '.$options_miroir[$info_commande['verre']['miroir']['type_miroir']].' (+'.$info_commande['verre']['miroir']['prix_miroir'].'€)<br>';

                        if(!empty($options)){
                            $info_c .= 'Options : <br>';
                            $info_c .= $options;
                        }

                        if($correction_droit!=''){
                            $correction_droit .= $info_c;

                            $newHauteur = isset($info_commande['verre']['hauteur']) ? $info_commande['verre']['hauteur'] : '';
                            $oldHauteur = isset($info_nouvelle_commande['verre']['hauteur']) ? $info_nouvelle_commande['verre']['hauteur'] : '';

                            if ($oldHauteur != $newHauteur) {
                                $correction_droit .= '<strong style="background-color: #ff7272; color: white"> Hauteur: ' . $newHauteur . '</strong><br>';
                            }
                            else if (!empty($newHauteur)){
                                $correction_droit .= 'Hauteur: ' . $newHauteur . '<br>';
                            }

//                            if(isset($info_commande['verre']['hauteur']))
//                                $correction_droit .= ' Hauteur Droit : '.$info_commande['verre']['hauteur'].'<br>';

//                            if(isset($info_commande['verre']['diametre']))
//                                $correction_droit .= 'Diametre : '.$info_commande['verre']['diametre'].'<br>';
                            $oldDiametre = isset($info_nouvelle_commande['verre']['correction_droit']['diametre']) ? $info_nouvelle_commande['verre']['correction_droit']['diametre'] : '';
                            $newDiametre = isset($info_commande['verre']['correction_droit']['diametre']) ? $info_commande['verre']['correction_droit']['diametre'] : '';

                            if ($oldDiametre != $newDiametre) {
                                $correction_droit .= '<strong style="background-color: #2691a7; color: white"> Diamètre: ' . $newDiametre . '</strong><br>';
                            }
                            else {
                                $correction_droit .= 'Diamètre: ' . $newDiametre . '<br>';
                            }

                            $oldTraitement = isset($info_nouvelle_commande['verre']['correction_droit']['traitement']) ? $info_nouvelle_commande['verre']['correction_droit']['traitement'] : '';
                            $newTraitement = isset($info_commande['verre']['correction_droit']['traitement']) ? $info_commande['verre']['correction_droit']['traitement'] : '';
                            $traitementName = $this->m_traitement->getNameByCode($newTraitement);

                            if ($oldTraitement != $newTraitement) {
                                $correction_droit .= '<strong style="background-color: #df24c3; color: white"> Traitement: ' . $traitementName . '</strong><br>';
                            }
                            else if (!empty($newTraitement)) {
                                $correction_droit .= 'Traitement: ' . $traitementName . '<br>';
                            }

                            $oldTeinte = isset($info_nouvelle_commande['verre']['correction_droit']['teinte']) ? $info_nouvelle_commande['verre']['correction_droit']['teinte'] : '';
                            $newTeinte = isset($info_commande['verre']['correction_droit']['teinte']) ? $info_commande['verre']['correction_droit']['teinte'] : '';
                            $teinteName = $this->m_teinte->getNameByCode($newTeinte);

                            if ($oldTeinte != $newTeinte) {
                                $correction_droit .= '<strong style="background-color: #9d1ced; color: white"> Teinte: ' . $teinteName . '</strong><br>';
                            }
                            else if (!empty($newTeinte)) {
                                $correction_droit .= 'Teinte: ' . $teinteName . '<br>';
                            }
//                            if (isset($info_commande['verre']['correction_droit']['traitement']) && !empty($info_commande['verre']['correction_droit']['traitement']) )
//                                $correction_droit .= 'Traitement: ' . $info_commande['verre']['correction_droit']['traitement'].'<br>';
//
//                            if (isset($info_commande['verre']['correction_droit']['teinte']) && !empty($info_commande['verre']['correction_droit']['teinte']))
//                                $correction_droit .= 'Teinte: ' . $info_commande['verre']['correction_droit']['teinte'].'<br>';

                            $oldEcartPupillaire = !empty($info_nouvelle_commande['verre']['ecart_puppillaire']['droit']) ? $info_nouvelle_commande['verre']['ecart_puppillaire']['droit'] : '';
                            $newEcartPupillaire = !empty($info_commande['verre']['ecart_puppillaire']['droit']) ? $info_commande['verre']['ecart_puppillaire']['droit'] : '';
                            if ($oldEcartPupillaire != $newEcartPupillaire) {
                                $correction_droit .= '<strong style="background-color: #a2ff00; color: #333">Ecart pupillaire : '.$newEcartPupillaire.'</strong><br>';
                            }
                            else if (!empty($newEcartPupillaire)) {
                                $correction_droit .= 'Ecart pupillaire: '.$newEcartPupillaire.'<br>';
                            }

//                            if(isset($info_commande['verre']['ecart_puppillaire']['droit']))
//                                $correction_droit .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['droit'].'<br>';

                            $oldDioptrie = !empty($info_nouvelle_commande['verre']['dioptrie_droit']) ? $info_nouvelle_commande['verre']['dioptrie_droit'] : '';
                            $newDioptrie = !empty($info_commande['verre']['dioptrie_droit']) ? $info_commande['verre']['dioptrie_droit'] : '';
                            $oldBase = !empty($info_nouvelle_commande['verre']['base_droit']) ? $info_nouvelle_commande['verre']['base_droit'] . ' Degrès'  : '';
                            $newBase = !empty($info_commande['verre']['base_droit']) ? $info_commande['verre']['base_droit'] . ' Degrès' : '';

                            if ($oldDioptrie != $newDioptrie || $oldBase != $newBase) {
                                $correction_droit .= '<br>Prisme : <br>';
                                if ($oldDioptrie != $newDioptrie) {
                                    $correction_droit .= '<strong style="background-color: #5b74dd; color: white">- Dioptrie : '.$newDioptrie.'</strong><br>';
                                }
                                else if (!empty($newDioptrie)) {
                                    $correction_droit .= '- Dioptrie : '.$newDioptrie.'<br>';
                                }
                                if ($oldBase != $newBase) {
                                    $correction_droit .= '<strong style="background-color: #d79000; color: white">- Base : '.$newBase.'</strong><br>';
                                }
                                else if (!empty($newBase)) {
                                    $correction_droit .= '- Base : '.$newBase .'<br>';
                                }
                            }

//                            if(isset($info_commande['verre']['dioptrie_droit']) && !empty($info_commande['verre']['dioptrie_droit']))
//                                $correction_droit .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_droit'].'<br>';
//
//                            if(isset($info_commande['verre']['base_droit']) && !empty($info_commande['verre']['base_droit']))
//                                $correction_droit .= 'Base : '.$info_commande['verre']['base_droit'].' Degrès'.'<br>';

                            if(isset($info_commande['precalibrage']['calibre'])) {
                                $correction_droit .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';
                            }
                            else if (isset($info_nouvelle_commande['precalibrage']['calibre'])) {
                                $correction_droit .= '<br><img src="/static/img/calibre/'.$info_nouvelle_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" style = "visibility: hidden" />';
                            }


                            $option_prix = 0;

                            if(isset($info_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_commande['verre']['miroir']['prix_miroir'];


                            if(isset($info_commande['verre']['polarise'])){
                                $recap_commande[0]->libelle_verre = str_replace("polarisé",$info_commande['verre']['polarise'],$recap_commande[0]->libelle_verre);
                            }

                            if(isset($info_commande['verre']['miroir_stock'])){
                                $recap_commande[0]->libelle_verre  = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$recap_commande[0]->libelle_verre);
                            }
                            
                            if($recap_commande[0]->generation ==  "T-One")
							{
								$recap_commande[0]->trad_fr = str_replace("E-Space","T-One",$recap_commande[0]->trad_fr);
								$recap_commande[0]->libelle_verre = str_replace("E-Space","T-One",$recap_commande[0]->libelle_verre);
							}
                            if (!isset($info_nouvelle_commande['verre']['correction_droit'])) {
                                $correction_droit =  '<h4 style="text-align: left"><span style = "background-color: #333; color: white;">Verre oeil droit : '.$recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre.'</span></h4>' . $correction_droit;
                            }
                            else if ($ancienne_commande[0]->trad_fr.$recap_commande[0]->libelle_verre != $recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre) {
                                $correction_droit =  '<h4 style="text-align: left"><span style = "background-color: #fbca35; color: #333;">Verre oeil droit : '.$recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre.'</span></h4>' . $correction_droit;
                            }
                            else {
                                $correction_droit =  '<h4 style="text-align: left">Verre oeil droit : '.$recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre.'</h4>' . $correction_droit;
                            }
//                            echo $correction_droit;

                        }

                        if($correction_gauche!=""){
                            $correction_gauche .= $info_c;

                            $newHauteur = isset($info_commande['verre']['hauteur_gauche']) ? $info_commande['verre']['hauteur_gauche'] : '';
                            $oldHauteur = isset($info_nouvelle_commande['verre']['hauteur_gauche']) ? $info_nouvelle_commande['verre']['hauteur_gauche'] : '';

                            if ($oldHauteur != $newHauteur) {
                                $correction_gauche .= '<strong style="background-color: #ff7272; color: white"> Hauteur: ' . $oldHauteur . '</strong><br>';
                            }
                            else if (!empty($oldHauteur)) {
                                $correction_gauche .= 'Hauteur: ' . $oldHauteur . '<br>';
                            }

//                            if(isset($info_commande['verre']['hauteur_gauche']))
//                                $correction_gauche .= ' Hauteur : '.$info_commande['verre']['hauteur_gauche'].'<br>';

//                            if (isset($info_commande['verre']['correction_gauche']['diametre']))
//                                $correction_gauche .= 'Diametre: ' . $info_commande['verre']['correction_gauche']['diametre'] . '<br>';
                            $oldDiametre = isset($info_nouvelle_commande['verre']['correction_gauche']['diametre']) ? $info_nouvelle_commande['verre']['correction_gauche']['diametre'] : '';
                            $newDiametre = isset($info_commande['verre']['correction_gauche']['diametre']) ? $info_commande['verre']['correction_gauche']['diametre'] : '';

                            if ($oldDiametre != $newDiametre) {
                                $correction_gauche .= '<strong style="background-color: #2691a7; color: white"> Diamètre: ' . $newDiametre . '</strong><br>';
                            }
                            else {
                                $correction_gauche .= 'Diamètre: ' . $newDiametre . '<br>';
                            }

                            $oldTraitement = isset($info_nouvelle_commande['verre']['correction_gauche']['traitement']) ? $info_nouvelle_commande['verre']['correction_gauche']['traitement'] : '';
                            $newTraitement = isset($info_commande['verre']['correction_gauche']['traitement']) ? $info_commande['verre']['correction_gauche']['traitement'] : '';
                            $traitementName = $this->m_traitement->getNameByCode($newTraitement);

                            if ($oldTraitement != $newTraitement) {
                                $correction_gauche .= '<strong style="background-color: #df24c3; color: white"> Traitement: ' . $traitementName . '</strong><br>';
                            }
                            else if (!empty($newTraitement)) {
                                $correction_gauche .= 'Traitement: ' . $traitementName . '<br>';
                            }

                            $oldTeinte = isset($info_nouvelle_commande['verre']['correction_gauche']['teinte']) ? $info_nouvelle_commande['verre']['correction_gauche']['teinte'] : '';
                            $newTeinte = isset($info_commande['verre']['correction_gauche']['teinte']) ? $info_commande['verre']['correction_gauche']['teinte'] : '';
                            $teinteName = $this->m_teinte->getNameByCode($newTeinte);

                            if ($oldTeinte != $newTeinte) {
                                $correction_gauche .= '<strong style="background-color: #9d1ced; color: white"> Teinte: ' . $teinteName . '</strong><br>';
                            }
                            else if (!empty($newTeinte)) {
                                $correction_gauche .= 'Teinte: ' . $teinteName . '<br>';
                            }

//                            if (isset($info_commande['verre']['correction_gauche']['traitement']) && !empty($info_commande['verre']['correction_gauche']['traitement']))
//                                $correction_gauche .= 'Traitement: ' . $this->m_traitement->getNameByCode($info_commande['verre']['correction_gauche']['traitement']) . '<br>';
//
//                            if (isset($info_commande['verre']['correction_gauche']['teinte']) && !empty($info_commande['verre']['correction_gauche']['teinte']))
//                                $correction_gauche .= 'Teinte: ' . $this->m_teinte->getNameByCode($info_commande['verre']['correction_gauche']['teinte']) . '<br>';

                            $oldEcartPupillaire = !empty($info_nouvelle_commande['verre']['ecart_puppillaire']['gauche']) ? $info_nouvelle_commande['verre']['ecart_puppillaire']['gauche'] : '';
                            $newEcartPupillaire = !empty($info_commande['verre']['ecart_puppillaire']['gauche']) ? $info_commande['verre']['ecart_puppillaire']['gauche'] : '';
                            if ($oldEcartPupillaire != $newEcartPupillaire) {
                                $correction_gauche .= '<strong style="background-color: #a2ff00; color: #333">Ecart pupillaire : '.$newEcartPupillaire.'</strong><br>';
                            }
                            else if (!empty($newEcartPupillaire)) {
                                $correction_gauche .= 'Ecart pupillaire: '.$newEcartPupillaire.'<br>';
                            }

//                            if(isset($info_commande['verre']['ecart_puppillaire']['gauche']))
//                                $correction_gauche .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['gauche'];

                            $oldDioptrie = !empty($info_nouvelle_commande['verre']['dioptrie_gauche']) ? $info_nouvelle_commande['verre']['dioptrie_gauche'] : '';
                            $newDioptrie = !empty($info_commande['verre']['dioptrie_gauche']) ? $info_commande['verre']['dioptrie_gauche'] : '';
                            $oldBase = !empty($info_nouvelle_commande['verre']['base_gauche']) ? $info_nouvelle_commande['verre']['base_gauche'] . ' Degrès' : '';
                            $newBase = !empty($info_commande['verre']['base_gauche']) ? $info_commande['verre']['base_gauche'] . ' Degrès' : '';

                            if ($oldDioptrie != $newDioptrie || $oldBase != $newBase) {
                                $correction_gauche .= '<br>Prisme : <br>';
                                if ($oldDioptrie != $newDioptrie) {
                                    $correction_gauche .= '<strong style="background-color: #5b74dd; color: white">- Dioptrie : '.$newDioptrie.'</strong><br>';
                                }
                                else if (!empty($newDioptrie)) {
                                    $correction_gauche .= '- Dioptrie : '.$newDioptrie.'<br>';
                                }
                                if ($oldBase != $newBase) {
                                    $correction_gauche .= '<strong style="background-color: #d79000; color: white">- Base : '.$newBase.'</strong><br>';
                                }
                                else if (!empty($newBase)) {
                                    $correction_gauche .= '- Base : '.$newBase.'<br>';
                                }
                            }

//                            if(isset($info_commande['verre']['dioptrie_gauche']) && !empty($info_commande['verre']['dioptrie_gauche']))
//                                $correction_gauche .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_gauche'].' ';
//
//                            if(isset($info_commande['verre']['base_gauche']) && !empty($info_commande['verre']['base_gauche']))
//                                $correction_gauche .= 'Base : '.$info_commande['verre']['base_gauche'].' Degrès';

                            if(isset($info_commande['precalibrage']['calibre'])) {
                                $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';
                            }
                            else if (isset($info_nouvelle_commande['precalibrage']['calibre'])) {
                                $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_nouvelle_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" style = "visibility: hidden" />';
                            }

//                            if(isset($info_commande['precalibrage']['calibre']))
//                                $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';

//                            $correction_gauche .= (isset($info_commande['verre']['diametre_gauche']) ? 'Diametre : '.$info_commande['verre']['diametre_gauche'] : (isset($info_commande['verre']['diametre']) ? 'Diametre : '.$info_commande['verre']['diametre'] : ""));


                            $option_prix = 0;

                            if(isset($info_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_commande['verre']['miroir']['prix_miroir'];
                                
                            if($recap_commande[0]->generation ==  "T-One")
							{
								$recap_commande[0]->trad_fr = str_replace("E-Space","T-One",$recap_commande[0]->trad_fr);
								$recap_commande[0]->libelle_verre = str_replace("E-Space","T-One",$recap_commande[0]->libelle_verre);
							}

                            if (!isset($info_nouvelle_commande['verre']['correction_gauche'])) {
                                $correction_gauche = '<h4 style="text-align: left"><span style = "background-color: #333; color: white;">Verre oeil gauche : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</span></h4>' . $correction_gauche;
                            }
                            else if ($ancienne_commande[0]->trad_fr.$recap_commande[0]->libelle_verre != $recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre) {
                                $correction_gauche = '<h4 style="text-align: left"><span style = "background-color: #fbca35; color: #333;">Verre oeil gauche : '.$recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre.'</span></h4>' . $correction_gauche;
                            }
                            else {
                                $correction_gauche = '<h4 style="text-align: left">Verre oeil gauche : '.$recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre.'</h4>' . $correction_gauche;
                            }
//                            echo $correction_gauche;

                        }
                        if ($correction_droit != '' && isset($info_commande['verre']['correction_droit'])) {
                            echo $correction_droit;
                        }
                        if ($correction_gauche != '') {
                            echo $correction_gauche;
                        }
                        if ($correction_droit != '' && !isset($info_commande['verre']['correction_droit'])) {
                            echo $correction_droit;
                        }
//                        echo '<pre>';
//                        print_r($info_commande);
//                        echo '/<pre>';
                    }
                    else{
                        echo '<div style="text-align:center;"><p style="padding-top:50px">Cette commande n\'existe pas ! </p></div>';
                    }

                    ?>

                </td>

                <td>

                    <?php

                    if($ancienne_commande !== false) {

                        $info_nouvelle_commande = json_decode($ancienne_commande[0]->information_commande, true);
                        $correction_droit = $correction_gauche = $info_c = $options = '';
                        $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange', 7 => 'Miroir Rose' ,8 => 'Miroir Violet', 9 => 'Miroir Jaune', 10 => 'Miroir Flash');

                        if (isset($info_nouvelle_commande['verre']['correction_droit'])) {
                            if (!isset($info_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['sphere'] != $info_nouvelle_commande['verre']['correction_droit']['sphere']) {
                                $correction_droit = '<br> - <span style="background-color: #ed1c24; color: white">Sphère: <strong>'.$info_nouvelle_commande['verre']['correction_droit']['sphere'].'</strong></span>, ';
                            }
                            else {
                                $correction_droit .= '<br> - Sphère: <strong style="color: #ed1c24">'.$info_nouvelle_commande['verre']['correction_droit']['sphere'].'</strong>, ';
                            }
                            if (!isset($info_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['cylindre'] != $info_nouvelle_commande['verre']['correction_droit']['cylindre']) {
                                $correction_droit .= '<span style="background-color: #22b14c; color: white">Cylindre: <strong>'.$info_nouvelle_commande['verre']['correction_droit']['cylindre'].'</strong></span>, ';
                            }
                            else {
                                $correction_droit .= 'Cylindre: <strong style="color: #22b14c">'.$info_nouvelle_commande['verre']['correction_droit']['cylindre'].'</strong>, ';
                            }
                            if (!isset($info_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['axe'] != $info_nouvelle_commande['verre']['correction_droit']['axe']) {
                                $correction_droit .= '<span style="background-color: #ffaec9; color: #333">Axe: <strong>'.$info_nouvelle_commande['verre']['correction_droit']['axe'].'</strong></span>, ';
                            }
                            else {
                                $correction_droit .= 'Axe: <strong style="color: #ffaec9">'.$info_nouvelle_commande['verre']['correction_droit']['axe'].'</strong>, ';
                            }
                            $additionNew = isset($info_commande['verre']['correction_droit']['addition']) ? $info_commande['verre']['correction_droit']['addition'] : '';
                            $additionOld = isset($info_nouvelle_commande['verre']['correction_droit']['addition']) ? $info_nouvelle_commande['verre']['correction_droit']['addition'] : '';
                            if ($additionOld != $additionNew) {
                                $correction_droit .= '<span style="background-color: #00a2e8; color: white">Addition: <strong>'.$additionOld.'</strong></span>';
                            }
                            else if ($additionOld != ''){
                                $correction_droit .= 'Addition: <strong style="color: #00a2e8">'.$additionOld.'</strong>';
                            }
//                            if (!isset($info_commande['verre']['correction_droit']) || $info_commande['verre']['correction_droit']['addition'] != $info_nouvelle_commande['verre']['correction_droit']['addition']) {
//                                $correction_droit .= '<span style="background-color: #00a2e8; color: white">Addition: <strong>'.$info_nouvelle_commande['verre']['correction_droit']['addition'].'</strong></span></br>';
//                            }
//                            else {
//                                $correction_droit .= 'Addition: <strong style="color: #00a2e8">'.$info_nouvelle_commande['verre']['correction_droit']['addition'].'</strong></br>';
//                            }
                            $correction_droit = 'Correction : ' . $correction_droit;
                        }
//                            $correction_droit = 'Correction : <br> - Sphère : <strong style="color: #ed1c24">' . $info_nouvelle_commande['verre']['correction_droit']['sphere'] . '</strong>, Cylindre : <strong style="color: #22b14c">' . $info_nouvelle_commande['verre']['correction_droit']['cylindre'] . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_droit']['axe']) ? ', Axe : <strong style="color: #ffaec9">' . $info_nouvelle_commande['verre']['correction_droit']['axe'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_droit']['addition']) ? ', Addition : <strong style="color: #ff9c00">' . $info_nouvelle_commande['verre']['correction_droit']['addition'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_droit']['degression']) ? ', Degression : ' . $info_nouvelle_commande['verre']['correction_droit']['degression'] : '') . '<br>';

                        if (isset($info_nouvelle_commande['verre']['correction_gauche'])) {
                            if (!isset($info_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['sphere'] != $info_nouvelle_commande['verre']['correction_gauche']['sphere']) {
                                $correction_gauche = '<br> - <span style="background-color: #ed1c24; color: white">Sphère: <strong>'.$info_nouvelle_commande['verre']['correction_gauche']['sphere'].'</strong></span>, ';
                            }
                            else {
                                $correction_gauche .= '<br> - Sphère: <strong style="color: #ed1c24">'.$info_nouvelle_commande['verre']['correction_gauche']['sphere'].'</strong>, ';
                            }
                            if (!isset($info_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['cylindre'] != $info_nouvelle_commande['verre']['correction_gauche']['cylindre']) {
                                $correction_gauche .= '<span style="background-color: #22b14c; color: white">Cylindre: <strong>'.$info_nouvelle_commande['verre']['correction_gauche']['cylindre'].'</strong></span>, ';
                            }
                            else {
                                $correction_gauche .= 'Cylindre: <strong style="color: #22b14c">'.$info_nouvelle_commande['verre']['correction_gauche']['cylindre'].'</strong>, ';
                            }
                            if (!isset($info_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['axe'] != $info_nouvelle_commande['verre']['correction_gauche']['axe']) {
                                $correction_gauche .= '<span style="background-color: #ffaec9; color: #333">Axe: <strong>'.$info_nouvelle_commande['verre']['correction_gauche']['axe'].'</strong></span>, ';
                            }
                            else {
                                $correction_gauche .= 'Axe: <strong style="color: #ffaec9">'.$info_nouvelle_commande['verre']['correction_gauche']['axe'].'</strong>, ';
                            }
                            $additionNew = isset($info_commande['verre']['correction_gauche']['addition']) ? $info_commande['verre']['correction_gauche']['addition'] : '';
                            $additionOld = isset($info_nouvelle_commande['verre']['correction_gauche']['addition']) ? $info_nouvelle_commande['verre']['correction_gauche']['addition'] : '';
                            if ($additionOld != $additionNew) {
                                $correction_gauche .= '<span style="background-color: #00a2e8; color: white">Addition: <strong>'.$additionOld.'</strong></span></br>';
                            }
                            else if ($additionOld != ''){
                                $correction_gauche .= 'Addition: <strong style="color: #00a2e8">'.$additionOld.'</strong></br>';
                            }
//                            if (!isset($info_commande['verre']['correction_gauche']) || $info_commande['verre']['correction_gauche']['addition'] != $info_nouvelle_commande['verre']['correction_gauche']['addition']) {
//                                $correction_gauche .= '<span style="background-color: #00a2e8; color: white">Addition: <strong>'.$info_nouvelle_commande['verre']['correction_gauche']['addition'].'</strong></span></br>';
//                            }
//                            else {
//                                $correction_gauche .= 'Addition: <strong style="color: #00a2e8">'.$info_nouvelle_commande['verre']['correction_gauche']['addition'].'</strong></br>';
//                            }
                            $correction_gauche = 'Correction : ' . $correction_gauche;
                        }
//                        if (isset($info_nouvelle_commande['verre']['correction_gauche'])) {
//                            $correction_gauche = 'Correction : <br> - Sphère : <strong style="color: #00a2e8">' . $info_nouvelle_commande['verre']['correction_gauche']['sphere'] . '</strong>, Cylindre : <strong style="color: #222">' . $info_nouvelle_commande['verre']['correction_gauche']['cylindre'] . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_gauche']['axe']) ? ', Axe : <strong style="color: #c9c9c9">' . $info_nouvelle_commande['verre']['correction_gauche']['axe'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_gauche']['addition']) ? ', Addition : <strong style="color: #c8bfe7">' . $info_nouvelle_commande['verre']['correction_gauche']['addition'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_gauche']['degression']) ? ', Degression : ' . $info_nouvelle_commande['verre']['correction_gauche']['degression'] : '') . '<br>';
//                        }

                        if($precalibrageNew != $precalibrageOld) {
                            $info_c = '<strong style="background-color: #57c5a5; color: white">Précalibrage : '.$precalibrageOld.'</strong><br>';
                        }
                        else if (!empty($precalibrageOld)) {
                            $info_c = 'Précalibrage : '.$precalibrageOld.'<br>';
                        }
//                        if (isset($info_nouvelle_commande['precalibrage']['calibre']))
//                            $info_c = 'Précalibrage : ' . $info_nouvelle_commande['precalibrage']['calibre'] . '<br>';


                        if (isset($info_nouvelle_commande['diametre_verre']))
                            $info_c .= "Diamètre verre : " . $info_nouvelle_commande['diametre_verre'] . "<br>";

                        if (isset($info_commande['mesure_freeform']) || isset($info_nouvelle_commande['mesure_freeform'])) {
                            $info_c .= 'Mesure freeform : <br>';
                            $largeurBoxingNew = isset($info_commande['mesure_freeform']['largeur_boxing']) ? $info_commande['mesure_freeform']['largeur_boxing'] : '';
                            $largeurBoxingOld = isset($info_nouvelle_commande['mesure_freeform']['largeur_boxing']) ? $info_nouvelle_commande['mesure_freeform']['largeur_boxing'] : '';

                            $hauteurBoxingNew = isset($info_commande['mesure_freeform']['hauteur_boxing']) ? $info_commande['mesure_freeform']['hauteur_boxing'] : '';
                            $hauteurBoxingOld = isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']) ? $info_nouvelle_commande['mesure_freeform']['hauteur_boxing'] : '';

                            $tailleDuPontNew = isset($info_commande['mesure_freeform']['taille_du_pont']) ? $info_commande['mesure_freeform']['taille_du_pont'] : '';
                            $tailleDuPontOld = isset($info_nouvelle_commande['mesure_freeform']['taille_du_pont']) ? $info_nouvelle_commande['mesure_freeform']['taille_du_pont'] : '';

                            if ($largeurBoxingNew != $largeurBoxingOld) {
                                $info_c .= '- <span style="background-color: #ffaee8; color: #333">Largeur boxing: <strong>'.$largeurBoxingOld.'</strong></span><br>';
                            }
                            else if (!empty($largeurBoxingOld)) {
                                $info_c .= '- Largeur boxing:'.$largeurBoxingOld.'<br>';
                            }
                            if ($hauteurBoxingNew != $hauteurBoxingOld) {
                                $info_c .= '- <span style="background-color: #1c74ed; color: white">Hauteur boxing: <strong>'.$hauteurBoxingOld.'</strong></span><br>';
                            }
                            else if (!empty($hauteurBoxingOld)) {
                                $info_c .= '- Hauteur boxing:'.$hauteurBoxingOld.'<br>';
                            }
                            if ($tailleDuPontNew != $tailleDuPontOld) {
                                $info_c .= '- <span style="background-color: #ffb700; color: white">Taille du pont: <strong>'.$tailleDuPontOld.'</strong></span><br>';
                            }
                            else if (!empty($tailleDuPontOld)) {
                                $info_c .= '- Taille du pont:'.$tailleDuPontOld.'<br>';
                            }
                            if (isset($info_nouvelle_commande['mesure_freeform']['diametre_utile']))
                                $info_c .= '- Diametre utile : ' . $info_nouvelle_commande['mesure_freeform']['diametre_utile'] . '<br>';
                            $info_c .= '<br>';
                        }

//                        if (isset($info_nouvelle_commande['mesure_freeform']['largeur_boxing']) || isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']) || isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']))
//                            $info_c .= (isset($info_nouvelle_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : ' . $info_nouvelle_commande['mesure_freeform']['largeur_boxing'] . ', ' : '') . (isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : ' . $info_nouvelle_commande['mesure_freeform']['hauteur_boxing'] . ', ' : '') . (isset($info_nouvelle_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : ' . $info_nouvelle_commande['mesure_freeform']['taille_du_pont'] . ', ' : '');


                        if ($typeMontureNew != $typeMontureOld) {
                            $info_c .= '- <span style="background-color: #d3aeff; color: #333">Type monture: <strong>'.$typeMontureOld.'</strong></span><br>';
                        }
                        else if (!empty($typeMontureOld)) {
                            $info_c .= '- Type monture:'.$typeMontureOld.'<br>';
                        }

//                        if (isset($info_nouvelle_commande['monture']['type']))
//                            $info_c .= '- Type monture : ' . $info_nouvelle_commande['monture']['type'] . '<br>';

//                        if (isset($info_nouvelle_commande['bord_verre']['epaisseur']) && !empty($info_nouvelle_commande['bord_verre']['epaisseur']))
//                            $info_c .= 'EP au bord minimum : ' . $info_nouvelle_commande['bord_verre']['epaisseur'] . '<br>';

                        if ($oldEpaisseur != $newEpaisseur) {
                            $info_c .= '- <strong style="background-color: #777; color: white">EP au bord minimum :  '.$newEpaisseur.'</strong><br>';
                        }
                        else if (!empty($oldEpaisseur)) {
                            $info_c .= '- EP au bord minimum : '.$newEpaisseur.'<br>';
                        }

                        if ($info_c == 'Mesure freeform : <br>') {
                            $info_c = '';
                        }

//                        if (isset($info_nouvelle_commande['verre']['galbe']))
//                            $options .= '- Galbe/base : ' . $info_nouvelle_commande['verre']['galbe'] . '<br>';
                        if ($oldGalbe != $newGalbe) {
                            $options .= '- <strong style="background-color: #5f0808; color: white">Galbe/base : '.$newGalbe.'</strong><br>';
                        }
                        else if (!empty($newGalbe)) {
                            $options .= '- Galbe/base : '.$newGalbe.'<br>';
                        }

                        if (isset($info_nouvelle_commande['verre']['angle_pantoscopique']))
                            $options .= '- Angle pantoscopique : ' . $info_nouvelle_commande['verre']['angle_pantoscopique'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['angle_galbe']))
                            $options .= '- Angle de galbe : ' . $info_nouvelle_commande['verre']['angle_galbe'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['distance_verre_oeil']))
                            $options .= '- Distance verre oeil : ' . $info_nouvelle_commande['verre']['distance_verre_oeil'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['miroir']))
                            $options .= '- ' . $options_miroir[$info_nouvelle_commande['verre']['miroir']['type_miroir']] . ' (+' . $info_nouvelle_commande['verre']['miroir']['prix_miroir'] . '€)<br>';

                        if (!empty($options)) {
                            $info_c .= 'Options : <br>';
                            $info_c .= $options;
                        }

                        if ($correction_droit != '') {
                            $correction_droit .= $info_c;

                            $newHauteur = isset($info_commande['verre']['hauteur']) ? $info_commande['verre']['hauteur'] : '';
                            $oldHauteur = isset($info_nouvelle_commande['verre']['hauteur']) ? $info_nouvelle_commande['verre']['hauteur'] : '';

                            if ($oldHauteur != $newHauteur) {
                                $correction_droit .= '<strong style="background-color: #ff7272; color: white"> Hauteur: ' . $oldHauteur . '</strong><br>';
                            }
                            else if (!empty($oldHauteur)) {
                                $correction_droit .= 'Hauteur: ' . $oldHauteur . '<br>';
                            }

//                            if (isset($info_nouvelle_commande['verre']['hauteur']))
//                                $correction_droit .= ' Hauteur Droit : ' . $info_nouvelle_commande['verre']['hauteur'] . '<br>';

//                            if (isset($info_nouvelle_commande['verre']['correction_droit']['diametre']))
//                                $correction_droit .= 'Diametre: ' . $info_nouvelle_commande['verre']['diametre'] . '<br>';

                            $oldDiametre = isset($info_nouvelle_commande['verre']['correction_gauche']['diametre']) ? $info_nouvelle_commande['verre']['correction_gauche']['diametre'] : '';
                            $newDiametre = isset($info_commande['verre']['correction_gauche']['diametre']) ? $info_commande['verre']['correction_gauche']['diametre'] : '';

                            if ($oldDiametre != $newDiametre) {
                                $correction_droit .= '<strong style="background-color: #2691a7; color: white"> Diamètre: ' . $oldDiametre . '</strong><br>';
                            }
                            else {
                                $correction_droit .= 'Diamètre: ' . $oldDiametre . '<br>';
                            }

                            $oldTraitement = isset($info_nouvelle_commande['verre']['correction_droit']['traitement']) ? $info_nouvelle_commande['verre']['correction_droit']['traitement'] : '';
                            $newTraitement = isset($info_commande['verre']['correction_droit']['traitement']) ? $info_commande['verre']['correction_droit']['traitement'] : '';
                            $traitementName = $this->m_traitement->getNameByCode($oldTraitement);

                            if ($oldTraitement != $newTraitement) {
                                $correction_droit .= '<strong style="background-color: #df24c3; color: white"> Traitement: ' . $traitementName . '</strong><br>';
                            }
                            else if (!empty($oldTraitement)) {
                                $correction_droit .= 'Traitement: ' . $traitementName . '<br>';
                            }

                            $oldTeinte = isset($info_nouvelle_commande['verre']['correction_droit']['teinte']) ? $info_nouvelle_commande['verre']['correction_droit']['teinte'] : '';
                            $newTeinte = isset($info_commande['verre']['correction_droit']['teinte']) ? $info_commande['verre']['correction_droit']['teinte'] : '';
                            $teinteName = $this->m_teinte->getNameByCode($oldTeinte);

                            if ($oldTeinte != $newTeinte) {
                                $correction_droit .= '<strong style="background-color: #9d1ced; color: white"> Teinte: ' . $teinteName . '</strong><br>';
                            }
                            else if (!empty($oldTeinte)) {
                                $correction_droit .= 'Teinte: ' . $teinteName . '<br>';
                            }

                            $oldEcartPupillaire = !empty($info_nouvelle_commande['verre']['ecart_puppillaire']['droit']) ? $info_nouvelle_commande['verre']['ecart_puppillaire']['droit'] : '';
                            $newEcartPupillaire = !empty($info_commande['verre']['ecart_puppillaire']['droit']) ? $info_commande['verre']['ecart_puppillaire']['droit'] : '';
                            if ($oldEcartPupillaire != $newEcartPupillaire) {
                                $correction_droit .= '<strong style="background-color: #a2ff00; color: #333">Ecart pupillaire : '.$oldEcartPupillaire.'</strong><br>';
                            }
                            else if (!empty($oldEcartPupillaire)) {
                                $correction_droit .= 'Ecart pupillaire: '.$oldEcartPupillaire.'<br>';
                            }
//
//                            if (isset($info_nouvelle_commande['verre']['ecart_puppillaire']['droit']))
//                                $correction_droit .= ' Ecart pupillaire : ' . $info_nouvelle_commande['verre']['ecart_puppillaire']['droit'] . '<br>';

                            $oldDioptrie = !empty($info_nouvelle_commande['verre']['dioptrie_droit']) ? $info_nouvelle_commande['verre']['dioptrie_droit'] : '';
                            $newDioptrie = !empty($info_commande['verre']['dioptrie_droit']) ? $info_commande['verre']['dioptrie_droit'] : '';
                            $oldBase = !empty($info_nouvelle_commande['verre']['base_droit']) ? $info_nouvelle_commande['verre']['base_droit'] . ' Degrès' : '';
                            $newBase = !empty($info_commande['verre']['base_droit']) ? $info_commande['verre']['base_droit'] . ' Degrès' : '';

                            if ($oldDioptrie != $newDioptrie || $oldBase != $newBase) {
                                $correction_droit .= '<br>Prisme : <br>';
                                if ($oldDioptrie != $newDioptrie) {
                                    $correction_droit .= '<strong style="background-color: #5b74dd; color: white">- Dioptrie : '.$oldDioptrie.'</strong><br>';
                                }
                                else if (!empty($newDioptrie)) {
                                    $correction_droit .= '- Dioptrie : '.$oldDioptrie.'<br>';
                                }
                                if ($oldBase != $newBase) {
                                    $correction_droit .= '<strong style="background-color: #d79000; color: white">- Base : '.$oldBase.'</strong><br>';
                                }
                                else if (!empty($oldBase)) {
                                    $correction_droit .= '- Base : '.$oldBase.'<br>';
                                }
                            }

//                            if (isset($info_nouvelle_commande['verre']['dioptrie_droit']) && !empty($info_nouvelle_commande['verre']['dioptrie_droit']))
//                                $correction_droit .= '<br>Prisme : <br>- Dioptrie : ' . $info_nouvelle_commande['verre']['dioptrie_droit'] . '<br>';

//                            if (isset($info_nouvelle_commande['verre']['base_droit']) && !empty($info_nouvelle_commande['verre']['base_droit']))
//                                $correction_droit .= 'Base : ' . $info_nouvelle_commande['verre']['base_droit'] . ' gfdgdfgdfDegrès';

                            if(isset($info_nouvelle_commande['precalibrage']['calibre'])) {
                                $correction_droit .= '<br><img src="/static/img/calibre/'.$info_nouvelle_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';
                            }
                            else if (isset($info_commande['precalibrage']['calibre'])) {
                                $correction_droit .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" style = "visibility: hidden" />';
                            }

//                            if (isset($info_nouvelle_commande['precalibrage']['calibre']))
//                                $correction_droit .= '<br><img src="/static/img/calibre/' . $info_nouvelle_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';

                            $option_prix = 0;

                            if (isset($info_nouvelle_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_nouvelle_commande['verre']['miroir']['prix_miroir'];


                            if (isset($info_nouvelle_commande['verre']['polarise'])) {
                                $ancienne_commande[0]->libelle_verre = str_replace("polarisé", $info_nouvelle_commande['verre']['polarise'], $ancienne_commande[0]->libelle_verre);
                            }

                            if (isset($info_nouvelle_commande['verre']['miroir_stock'])) {
                                $ancienne_commande[0]->libelle_verre = str_replace("miroir", $options_miroir[$info_nouvelle_commande['verre']['miroir_stock']['type_miroir']], $ancienne_commande[0]->libelle_verre);
                            }
							
							if($ancienne_commande[0]->generation ==  "T-One")
							{
								$ancienne_commande[0]->trad_fr = str_replace("E-Space","T-One",$ancienne_commande[0]->trad_fr);
								$ancienne_commande[0]->libelle_verre = str_replace("E-Space","T-One",$ancienne_commande[0]->libelle_verre);
							}
                            if (!isset($info_commande['verre']['correction_droit'])) {
                                $correction_droit = '<h4 style="text-align: left"><span style = "background-color: #333; color: white;">Verre oeil droit : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</span></h4>' . $correction_droit;
                            }
                            else if ($ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre != $recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre) {
                                $correction_droit = '<h4 style="text-align: left"><span style = "background-color: #fbca35; color: #333;">Verre oeil droit : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</span></h4>' . $correction_droit;
                            }
                            else {
                                $correction_droit = '<h4 style="text-align: left">Verre oeil droit : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</h4>' . $correction_droit;
                            }
                        }

                        if ($correction_gauche != "") {
                            $correction_gauche .= $info_c;

                            $newHauteur = isset($info_commande['verre']['hauteur_gauche']) ? $info_commande['verre']['hauteur_gauche'] : '';
                            $oldHauteur = isset($info_nouvelle_commande['verre']['hauteur_gauche']) ? $info_nouvelle_commande['verre']['hauteur_gauche'] : '';

                            if ($oldHauteur != $newHauteur) {
                                $correction_gauche .= '<strong style="background-color: #ff7272; color: white"> Hauteur: ' . $newHauteur . '</strong><br>';
                            }
                            else if (!empty($newHauteur)) {
                                $correction_gauche .= 'Hauteur: ' . $newHauteur . '<br>';
                            }

//                            if (isset($info_nouvelle_commande['verre']['hauteur_gauche']))
//                                $correction_gauche .= ' Hauteur : ' . $info_nouvelle_commande['verre']['hauteur_gauche'] . '<br>';

//                            if (isset($info_nouvelle_commande['verre']['correction_gauche']['diametre']))
//                                $correction_gauche .= 'Diametre: ' . $info_nouvelle_commande['verre']['correction_gauche']['diametre'] . '<br>';

                            $oldDiametre = isset($info_nouvelle_commande['verre']['correction_gauche']['diametre']) ? $info_nouvelle_commande['verre']['correction_gauche']['diametre'] : '';
                            $newDiametre = isset($info_commande['verre']['correction_gauche']['diametre']) ? $info_commande['verre']['correction_gauche']['diametre'] : '';

                            if ($oldDiametre != $newDiametre) {
                                $correction_gauche .= '<strong style="background-color: #2691a7; color: white"> Diamètre: ' . $oldDiametre . '</strong><br>';
                            }
                            else {
                                $correction_gauche .= 'Diamètre: ' . $oldDiametre . '<br>';
                            }

                            $oldTraitement = isset($info_nouvelle_commande['verre']['correction_gauche']['traitement']) ? $info_nouvelle_commande['verre']['correction_gauche']['traitement'] : '';
                            $newTraitement = isset($info_commande['verre']['correction_gauche']['traitement']) ? $info_commande['verre']['correction_gauche']['traitement'] : '';
                            $traitementName = $this->m_traitement->getNameByCode($oldTraitement);

                            if ($oldTraitement != $newTraitement) {
                                $correction_gauche .= '<strong style="background-color: #df24c3; color: white"> Traitement: ' . $traitementName . '</strong><br>';
                            }
                            else if (!empty($oldTraitement)) {
                                $correction_gauche .= 'Traitement: ' . $traitementName . '<br>';
                            }

                            $oldTeinte = isset($info_nouvelle_commande['verre']['correction_gauche']['teinte']) ? $info_nouvelle_commande['verre']['correction_gauche']['teinte'] : '';
                            $newTeinte = isset($info_commande['verre']['correction_gauche']['teinte']) ? $info_commande['verre']['correction_gauche']['teinte'] : '';
                            $teinteName = $this->m_teinte->getNameByCode($oldTeinte);

                            if ($oldTeinte != $newTeinte) {
                                $correction_gauche .= '<strong style="background-color: #9d1ced; color: white"> Teinte: ' . $teinteName . '</strong><br>';
                            }
                            else if (!empty($oldTeinte)) {
                                $correction_gauche .= 'Teinte: ' . $teinteName . '<br>';
                            }

                            $oldEcartPupillaire = !empty($info_nouvelle_commande['verre']['ecart_puppillaire']['gauche']) ? $info_nouvelle_commande['verre']['ecart_puppillaire']['gauche'] : '';
                            $newEcartPupillaire = !empty($info_commande['verre']['ecart_puppillaire']['gauche']) ? $info_commande['verre']['ecart_puppillaire']['gauche'] : '';
                            if ($oldEcartPupillaire != $newEcartPupillaire) {
                                $correction_gauche .= '<strong style="background-color: #a2ff00; color: #333">Ecart pupillaire: '.$oldEcartPupillaire.'</strong><br>';
                            }
                            else if (!empty($oldEcartPupillaire)) {
                                $correction_gauche .= 'Ecart pupillaire: '.$oldEcartPupillaire.'<br>';
                            }
//                            if (isset($info_nouvelle_commande['verre']['ecart_puppillaire']['gauche']))
//                                $correction_gauche .= ' Ecart pupillaire : ' . $info_nouvelle_commande['verre']['ecart_puppillaire']['gauche'] . '<br>';

                            $oldDioptrie = !empty($info_nouvelle_commande['verre']['dioptrie_gauche']) ? $info_nouvelle_commande['verre']['dioptrie_gauche'] : '';
                            $newDioptrie = !empty($info_commande['verre']['dioptrie_gauche']) ? $info_commande['verre']['dioptrie_gauche'] : '';
                            $oldBase = !empty($info_nouvelle_commande['verre']['base_gauche']) ? $info_nouvelle_commande['verre']['base_gauche'] . ' Degrès' : '';
                            $newBase = !empty($info_commande['verre']['base_gauche']) ? $info_commande['verre']['base_gauche'] . ' Degrès' : '';

                            if ($oldDioptrie != $newDioptrie || $oldBase != $newBase) {
                                $correction_gauche .= '<br>Prisme : <br>';
                                if ($oldDioptrie != $newDioptrie) {
                                    $correction_gauche .= '<strong style="background-color: #5b74dd; color: white">- Dioptrie : '.$oldDioptrie.'</strong><br>';
                                }
                                else if (!empty($newDioptrie)) {
                                    $correction_gauche .= '- Dioptrie : '.$oldDioptrie.'<br>';
                                }
                                if ($oldBase != $newBase) {
                                    $correction_gauche .= '<strong style="background-color: #d79000; color: white">- Base : '.$oldBase.'</strong><br>';
                                }
                                else if (!empty($oldBase)) {
                                    $correction_gauche .= '- Base : '.$oldBase.'<br>';
                                }
                            }

//                            if (isset($info_nouvelle_commande['verre']['dioptrie_gauche']) && !empty($info_nouvelle_commande['verre']['dioptrie_gauche']))
//                                $correction_gauche .= 'Prisme : <br>- Dioptrie : ' . $info_nouvelle_commande['verre']['dioptrie_gauche'] . '<br>';
//
//                            if (isset($info_nouvelle_commande['verre']['base_gauche']) && !empty($info_nouvelle_commande['verre']['base_gauche']))
//                                $correction_gauche .= 'Base : ' . $info_nouvelle_commande['verre']['base_gauche'] . ' Degrès' . '<br>';

                            if(isset($info_nouvelle_commande['precalibrage']['calibre'])) {
                                $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_nouvelle_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';
                            }
                            else if (isset($info_commande['precalibrage']['calibre'])) {
                                $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" style = "visibility: hidden" />';
                            }
//                            if (isset($info_nouvelle_commande['precalibrage']['calibre']))
//                                $correction_gauche .= '<br><img src="/static/img/calibre/' . $info_nouvelle_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';

//                            $correction_gauche .= (isset($info_nouvelle_commande['verre']['diametre_gauche']) ? 'Diametre : ' . $info_nouvelle_commande['verre']['diametre_gauche'] : (isset($info_nouvelle_commande['verre']['diametre']) ? 'Diametre : ' . $info_nouvelle_commande['verre']['diametre'] : ""));


                            $option_prix = 0;

                            if (isset($info_nouvelle_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_nouvelle_commande['verre']['miroir']['prix_miroir'];

							if($ancienne_commande[0]->generation ==  "T-One")
							{
								$ancienne_commande[0]->trad_fr = str_replace("E-Space","T-One",$ancienne_commande[0]->trad_fr);
								$ancienne_commande[0]->libelle_verre = str_replace("E-Space","T-One",$ancienne_commande[0]->libelle_verre);
							}
                            if (!isset($info_commande['verre']['correction_gauche'])) {
                                $correction_gauche = '<h4 style="text-align: left"><span style = "background-color: #333; color: white;">Verre oeil gauche : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</span></h4>' . $correction_gauche;
                            }
                            else if ($ancienne_commande[0]->trad_fr.$recap_commande[0]->libelle_verre != $recap_commande[0]->trad_fr.$recap_commande[0]->libelle_verre) {
                                $correction_gauche = '<h4 style="text-align: left"><span style = "background-color: #fbca35; color: #333;">Verre oeil gauche : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</span></h4>' . $correction_gauche;
                            }
                            else {
                                $correction_gauche = '<h4 style="text-align: left">Verre oeil gauche : '.$ancienne_commande[0]->trad_fr.$ancienne_commande[0]->libelle_verre.'</h4>' . $correction_gauche;
                            }
//                            echo $correction_gauche;


                        }
                        if ($correction_droit != '' && isset($info_commande['verre']['correction_droit'])) {
                            echo $correction_droit;
                        }
                        if ($correction_gauche != '') {
                            echo $correction_gauche;
                        }
                        if ($correction_droit != '' && !isset($info_commande['verre']['correction_droit'])) {
                            echo $correction_droit;
                        }
//                        echo '<pre>';
//                        print_r($info_nouvelle_commande);
//                        echo '/<pre>';
                    }
                    else{
                        echo '<div style="text-align:center;"><p style="padding-top:50px">Cette commande n\'existe pas ! </p></div>';
                    }



                    ?>

                </td>

            </tr>

            </tbody>
        </table>
    

</div>