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

                ?>

                <div class="corrections" <?php echo 'style="'.$cstyles.'"' ?>>
                    <?php
                    if (isset($info_commande['verre']['correction_droit'])) {

                        $sph = number_format($info_commande['verre']['correction_droit']['sphere'], 2);
                        $cyl = number_format($info_commande['verre']['correction_droit']['cylindre'], 2);
                        $cyl_sign = $info_commande['verre']['correction_droit']['cylindre'] != 0 ? '+' : '-';
                        $axe = $info_commande['verre']['correction_droit']['axe'];
                        $diopt = $base = '';

                        if (isset($info_commande['verre']['dioptrie_droit']))
                            $diopt = $info_commande['verre']['dioptrie_droit'].$delta;

                        if (isset($info_commande['verre']['base_droit']))
                            $base = ' base ' . $info_commande['verre']['base_droit'] . '°';

                        if($cyl == 0) {
                            $cyl_axe = '';
                        }
                        else {
                            $cyl_axe = ' (' . $cyl_sign . $cyl . ') ' . $axe . '° ';
                        }

                        $table .='<tr>
                            <td class="correct">OD: ' . $sph . $cyl_axe . ' </td>
                            <td>'.(isset($info_commande['verre']['correction_droit']['addition']) ? ' ADD ' . $info_commande['verre']['correction_droit']['addition'] : '') . (isset($info_commande['verre']['correction_droit']['degression']) ? ' DEG ' . $info_commande['verre']['correction_droit']['degression'] : '').'</td>
                            <td class="prisme"><span class="diopt">' . $diopt . '</span> <span class="base">' . $base . '</span></td>
                        </tr>'."\n";
                    }

                    if (isset($info_commande['verre']['correction_gauche'])) {

                        $sph = number_format($info_commande['verre']['correction_gauche']['sphere'], 2);
                        $cyl = number_format($info_commande['verre']['correction_gauche']['cylindre'], 2);
                        $cyl_sign = $info_commande['verre']['correction_gauche']['cylindre'] != 0 ? '+' : '-';
                        $axe = $info_commande['verre']['correction_gauche']['axe'];
                        $diopt = $base = '';

                        if (isset($info_commande['verre']['dioptrie_gauche']))
                            $diopt = $info_commande['verre']['dioptrie_gauche'].$delta;

                        if (isset($info_commande['verre']['base_gauche']))
                            $base = 'base ' . $info_commande['verre']['base_gauche'] . '°';

                        if($cyl == 0) {
                            $cyl_axe = '';
                        }
                        else {
                            $cyl_axe = ' (' . $cyl_sign . $cyl . ') ' . $axe . '° ';
                        }

                        $table .= '<tr>
                                <td class="correct">OG: ' . $sph . $cyl_axe . ' </td>
                                <td>'.(isset($info_commande['verre']['correction_gauche']['addition']) ? ' ADD ' . $info_commande['verre']['correction_gauche']['addition'] : '') . (isset($info_commande['verre']['correction_gauche']['degression']) ? ' DEG ' . $info_commande['verre']['correction_gauche']['degression'] : '').'</td>
                                <td class="prisme"><span class="diopt">' . $diopt . '</span> <span class="base">' . $base . '</span></td>
                            </tr>'."\n";
                    }

                    $table .= '</table>';

                    echo $table;

                    echo '</div>';

                    $sep = '';
                    if (isset($info_commande['verre']['miroir']['type_miroir']) && isset($info_commande['verre']['galbe'])) {
                        $sep = ', ';
                    }


                    /*if(isset($info_commande['verre']['miroir']['type_miroir'])) {
                        $value->libelle_verre = str_replace('Durci', '', $value->libelle_verre);
                    }*/

                    ?>


                    <div class="verres" <?php echo 'style="'.$ostyles.'"' ?>>
                        <span class="nom_verre"><?php echo $value->libelle_verre ?>, <?php if (isset($info_commande['diametre_verre'])) {
                                echo 'Diamètre ' . $info_commande['diametre_verre'];
                            } else {
                                echo 'Précalibré';
                            } ?></span>
                        <span class="diam_verre"></span>
                        <div class="options">
                            <span class="miroir"><?php if (isset($info_commande['verre']['miroir']['type_miroir'])) echo $options_miroir[$info_commande['verre']['miroir']['type_miroir']] ; ?></span><span class="galbe"><?php if (isset($info_commande['verre']['galbe'])) echo $sep . 'Galbe ' . $info_commande['verre']['galbe']; ?></span>
                        </div>
                    </div>


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