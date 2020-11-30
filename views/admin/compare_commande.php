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
                <th>Nouvelle commande N°<?php echo $recap_commande[0]->id_commande; ?> / <?php echo $recap_commande[0]->reference_client; ?><br /><?php echo $recap_commande[0]->date_commande; ?></th>
                <th>Ancienne commande N°<?php echo $ancienne_commande[0]->id_commande; ?> / <?php echo $ancienne_commande[0]->reference_client; ?> <br /><?php echo $ancienne_commande[0]->date_commande; ?></th>
                <?php } ?>
            </tr>
            </thead>

            <tbody>

            <tr>

                <td>

                    <?php

                    if($recap_commande !== false) {

                        $info_commande = json_decode($recap_commande[0]->information_commande,true);
                        $correction_droit = $correction_gauche = $info_c = $options = '';
                        $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange');

                        if(isset($info_commande['verre']['correction_droit']))
                            $correction_droit = 'Correction : <br> - Sphère : <strong style="color: #ed1c24">'.$info_commande['verre']['correction_droit']['sphere'].'</strong>, Cylindre : <strong style="color: #22b14c">'.$info_commande['verre']['correction_droit']['cylindre'].'</strong>'.(isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : <strong style="color: #ffaec9">'.$info_commande['verre']['correction_droit']['axe'] : '').'</strong>'.(isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : <strong style="color: #ff9c00">' .$info_commande['verre']['correction_droit']['addition'] : '').'</strong>'.(isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : '.$info_commande['verre']['correction_droit']['degression'] : '').'<br>';

                        if(isset($info_commande['verre']['correction_gauche']))
                            $correction_gauche = 'Correction : <br> - Sphère : <strong style="color: #00a2e8">'.$info_commande['verre']['correction_gauche']['sphere'].'</strong>, Cylindre : <strong style="color: #222">'.$info_commande['verre']['correction_gauche']['cylindre'].'</strong>'.(isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : <strong style="color: #c9c9c9">'.$info_commande['verre']['correction_gauche']['axe'] : '').'</strong>'.(isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : <strong style="color: #c8bfe7">'.$info_commande['verre']['correction_gauche']['addition'] : '').'</strong>'.(isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : '.$info_commande['verre']['correction_gauche']['degression'] : '').'<br>';

                        if(isset($info_commande['precalibrage']['calibre']))
                            $info_c = 'Précalibrage : '.$info_commande['precalibrage']['calibre'].'<br>';


                        if(isset($info_commande['diametre_verre']))
                            $info_c .= "Diamètre verre : ". $info_commande['diametre_verre']."<br>";

                        $info_c .= 'Mesure freeform : <br> - ';

                        if(isset($info_commande['mesure_freeform']['largeur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']))
                            $info_c .= (isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '').(isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ' : '').(isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ' : '');

                        if(isset($info_commande['mesure_freeform']['diametre_utile']))
                            $info_c .=  'Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>';

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

                        if($correction_droit!=''){
                            $correction_droit .= $info_c;

                            if(isset($info_commande['verre']['hauteur']))
                                $correction_droit .= ' Hauteur Droit : '.$info_commande['verre']['hauteur'].'<br>';

                            if(isset($info_commande['verre']['diametre']))
                                $correction_droit .= 'Diametre : '.$info_commande['verre']['diametre'];

                            if(isset($info_commande['verre']['ecart_puppillaire']['droit']))
                                $correction_droit .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['droit'];

                            if(isset($info_commande['verre']['dioptrie_droit']))
                                $correction_droit .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_droit'].' ';

                            if(isset($info_commande['verre']['base_droit']))
                                $correction_droit .= 'Base : '.$info_commande['verre']['base_droit'].' Degrès';

                            if(isset($info_commande['precalibrage']['calibre']))
                                $correction_droit .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';

                            $option_prix = 0;

                            if(isset($info_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_commande['verre']['miroir']['prix_miroir'];


                            if(isset($info_commande['verre']['polarise'])){
                                $recap_commande[0]->libelle_verre = str_replace("polarisé",$info_commande['verre']['polarise'],$recap_commande[0]->libelle_verre);
                            }

                            if(isset($info_commande['verre']['miroir_stock'])){
                                $recap_commande[0]->libelle_verre  = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$recap_commande[0]->libelle_verre);
                            }

                            echo '<h4 style="text-align: left">Verre oeil droit : '.$recap_commande[0]->libelle_verre.'</h4>';
                            echo $correction_droit;

                        }

                        if($correction_gauche!=""){
                            $correction_gauche .= $info_c;

                            if(isset($info_commande['verre']['hauteur_gauche']))
                                $correction_gauche .= ' Hauteur : '.$info_commande['verre']['hauteur_gauche'].'<br>';

                            if(isset($info_commande['verre']['ecart_puppillaire']['gauche']))
                                $correction_gauche .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['gauche'];

                            if(isset($info_commande['verre']['dioptrie_gauche']))
                                $correction_gauche .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_gauche'].' ';

                            if(isset($info_commande['verre']['base_gauche']))
                                $correction_gauche .= 'Base : '.$info_commande['verre']['base_gauche'].' Degrès';

                            if(isset($info_commande['precalibrage']['calibre']))
                                $correction_gauche .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';

                            $correction_gauche .= (isset($info_commande['verre']['diametre_gauche']) ? 'Diametre : '.$info_commande['verre']['diametre_gauche'] : (isset($info_commande['verre']['diametre']) ? 'Diametre : '.$info_commande['verre']['diametre'] : ""));


                            $option_prix = 0;

                            if(isset($info_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_commande['verre']['miroir']['prix_miroir'];


                            echo '<h4 style="text-align: left">Verre oeil gauche : '.$recap_commande[0]->libelle_verre.'</h4>';
                            echo $correction_gauche;

                        }

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
                        $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange');

                        if (isset($info_nouvelle_commande['verre']['correction_droit']))
                            $correction_droit = 'Correction : <br> - Sphère : <strong style="color: #ed1c24">' . $info_nouvelle_commande['verre']['correction_droit']['sphere'] . '</strong>, Cylindre : <strong style="color: #22b14c">' . $info_nouvelle_commande['verre']['correction_droit']['cylindre'] . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_droit']['axe']) ? ', Axe : <strong style="color: #ffaec9">' . $info_nouvelle_commande['verre']['correction_droit']['axe'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_droit']['addition']) ? ', Addition : <strong style="color: #ff9c00">' . $info_nouvelle_commande['verre']['correction_droit']['addition'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_droit']['degression']) ? ', Degression : ' . $info_nouvelle_commande['verre']['correction_droit']['degression'] : '') . '<br>';

                        if (isset($info_nouvelle_commande['verre']['correction_gauche']))
                            $correction_gauche = 'Correction : <br> - Sphère : <strong style="color: #00a2e8">' . $info_nouvelle_commande['verre']['correction_gauche']['sphere'] . '</strong>, Cylindre : <strong style="color: #222">' . $info_nouvelle_commande['verre']['correction_gauche']['cylindre'] . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_gauche']['axe']) ? ', Axe : <strong style="color: #c9c9c9">' . $info_nouvelle_commande['verre']['correction_gauche']['axe'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_gauche']['addition']) ? ', Addition : <strong style="color: #c8bfe7">' . $info_nouvelle_commande['verre']['correction_gauche']['addition'] : '') . '</strong>' . (isset($info_nouvelle_commande['verre']['correction_gauche']['degression']) ? ', Degression : ' . $info_nouvelle_commande['verre']['correction_gauche']['degression'] : '') . '<br>';

                        if (isset($info_nouvelle_commande['precalibrage']['calibre']))
                            $info_c = 'Précalibrage : ' . $info_nouvelle_commande['precalibrage']['calibre'] . '<br>';


                        if (isset($info_nouvelle_commande['diametre_verre']))
                            $info_c .= "Diamètre verre : " . $info_nouvelle_commande['diametre_verre'] . "<br>";

                        $info_c .= 'Mesure freeform : <br> - ';

                        if (isset($info_nouvelle_commande['mesure_freeform']['largeur_boxing']) || isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']) || isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']))
                            $info_c .= (isset($info_nouvelle_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : ' . $info_nouvelle_commande['mesure_freeform']['largeur_boxing'] . ', ' : '') . (isset($info_nouvelle_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : ' . $info_nouvelle_commande['mesure_freeform']['hauteur_boxing'] . ', ' : '') . (isset($info_nouvelle_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : ' . $info_nouvelle_commande['mesure_freeform']['taille_du_pont'] . ', ' : '');

                        if (isset($info_nouvelle_commande['mesure_freeform']['diametre_utile']))
                            $info_c .= 'Diametre utile : ' . $info_nouvelle_commande['mesure_freeform']['diametre_utile'] . '<br>';

                        if (isset($info_nouvelle_commande['monture']['type']))
                            $info_c .= 'Type monture : ' . $info_nouvelle_commande['monture']['type'] . '<br>';

                        if (isset($info_nouvelle_commande['bord_verre']['epaisseur']) && !empty($info_nouvelle_commande['bord_verre']['epaisseur']))
                            $info_c .= 'EP au bord minimum : ' . $info_nouvelle_commande['bord_verre']['epaisseur'] . '<br>';


                        if (isset($info_nouvelle_commande['verre']['galbe']))
                            $options .= '- Galbe/base : ' . $info_nouvelle_commande['verre']['galbe'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['angle_pantoscopique']))
                            $options .= '- Angle pantoscopique : ' . $info_nouvelle_commande['verre']['angle_pantoscopique'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['angle_galbe']))
                            $options .= '- Angle de galbe : ' . $info_nouvelle_commande['verre']['angle_galbe'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['distance_verre_oeil']))
                            $options .= '- Distance verre oeil : ' . $info_nouvelle_commande['verre']['distance_verre_oeil'] . '<br>';

                        if (isset($info_nouvelle_commande['verre']['miroir']))
                            $options .= '- ' . $options_miroir[$info_nouvelle_commande['verre']['miroir']['type_miroir']] . ' HMC face interne (+' . $info_nouvelle_commande['verre']['miroir']['prix_miroir'] . '€)<br>';

                        if (!empty($options)) {
                            $info_c .= 'Options : <br>';
                            $info_c .= $options;
                        }

                        if ($correction_droit != '') {
                            $correction_droit .= $info_c;

                            if (isset($info_nouvelle_commande['verre']['hauteur']))
                                $correction_droit .= ' Hauteur Droit : ' . $info_nouvelle_commande['verre']['hauteur'] . '<br>';

                            if (isset($info_nouvelle_commande['verre']['diametre']))
                                $correction_droit .= 'Diametre : ' . $info_nouvelle_commande['verre']['diametre'];

                            if (isset($info_nouvelle_commande['verre']['ecart_puppillaire']['droit']))
                                $correction_droit .= ' Ecart pupillaire : ' . $info_nouvelle_commande['verre']['ecart_puppillaire']['droit'];

                            if (isset($info_nouvelle_commande['verre']['dioptrie_droit']))
                                $correction_droit .= '<br>Prisme : <br>- Dioptrie : ' . $info_nouvelle_commande['verre']['dioptrie_droit'] . ' ';

                            if (isset($info_nouvelle_commande['verre']['base_droit']))
                                $correction_droit .= 'Base : ' . $info_nouvelle_commande['verre']['base_droit'] . ' Degrès';

                            if (isset($info_nouvelle_commande['precalibrage']['calibre']))
                                $correction_droit .= '<br><img src="/static/img/calibre/' . $info_nouvelle_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';

                            $option_prix = 0;

                            if (isset($info_nouvelle_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_nouvelle_commande['verre']['miroir']['prix_miroir'];


                            if (isset($info_nouvelle_commande['verre']['polarise'])) {
                                $ancienne_commande[0]->libelle_verre = str_replace("polarisé", $info_nouvelle_commande['verre']['polarise'], $ancienne_commande[0]->libelle_verre);
                            }

                            if (isset($info_nouvelle_commande['verre']['miroir_stock'])) {
                                $ancienne_commande[0]->libelle_verre = str_replace("miroir", $options_miroir[$info_nouvelle_commande['verre']['miroir_stock']['type_miroir']], $ancienne_commande[0]->libelle_verre);
                            }

                            echo '<h4 style="text-align: left">Verre oeil droit : ' . $ancienne_commande[0]->libelle_verre . '</h4>';
                            echo $correction_droit;

                        }

                        if ($correction_gauche != "") {
                            $correction_gauche .= $info_c;

                            if (isset($info_nouvelle_commande['verre']['hauteur_gauche']))
                                $correction_gauche .= ' Hauteur : ' . $info_nouvelle_commande['verre']['hauteur_gauche'] . '<br>';

                            if (isset($info_nouvelle_commande['verre']['ecart_puppillaire']['gauche']))
                                $correction_gauche .= ' Ecart pupillaire : ' . $info_nouvelle_commande['verre']['ecart_puppillaire']['gauche'];

                            if (isset($info_nouvelle_commande['verre']['dioptrie_gauche']))
                                $correction_gauche .= '<br>Prisme : <br>- Dioptrie : ' . $info_nouvelle_commande['verre']['dioptrie_gauche'] . ' ';

                            if (isset($info_nouvelle_commande['verre']['base_gauche']))
                                $correction_gauche .= 'Base : ' . $info_nouvelle_commande['verre']['base_gauche'] . ' Degrès';

                            if (isset($info_nouvelle_commande['precalibrage']['calibre']))
                                $correction_gauche .= '<br><img src="/static/img/calibre/' . $info_nouvelle_commande['precalibrage']['calibre'] . '.jpg" width="150" heigth="70" />';

                            $correction_gauche .= (isset($info_nouvelle_commande['verre']['diametre_gauche']) ? 'Diametre : ' . $info_nouvelle_commande['verre']['diametre_gauche'] : (isset($info_nouvelle_commande['verre']['diametre']) ? 'Diametre : ' . $info_nouvelle_commande['verre']['diametre'] : ""));


                            $option_prix = 0;

                            if (isset($info_nouvelle_commande['verre']['miroir']['prix_miroir']))
                                $option_prix += $info_nouvelle_commande['verre']['miroir']['prix_miroir'];


                            echo '<h4 style="text-align: left">Verre oeil gauche : ' . $ancienne_commande[0]->libelle_verre . '</h4>';
                            echo $correction_gauche;

                        }

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