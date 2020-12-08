<?php
$slimpay = true;
$form_lock = false;
include_once('header.php');
?>

<body>

<!-- ----------------- -->
<!-- Some dialogs etc. -->

<?php

include_once('content.php');

include_once('message.php');

?>

<!--------------------------------->
<!-- Now, the page itself begins -->
<!--------------------------------->

<?php

include_once('toolbar.php');

include_once('header_bottom.php');

?>

<!-- The container of the sidebar and content box -->
<div role="main" id="main" class="container_12 clearfix">

    <?php

    include_once('toolbar_stripe.php');

    include_once('menu.php');

    ?>

    <!-- Here goes the content. -->
    <section id="content" class="container_12 clearfix" data-sort="true">


        <div class="grid_12">

            <h1 style="font-size: 22px">Commande pour le magasin <?php echo $user_info[0]->id_users; ?></h1>


            <form class="box wizard manual validate" id="wiz">

                <div class="header">
                    <h2><img src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/ui-tab--arrow.png" class="icon">Commande</h2>
                </div>

                <div class="content">
                    <ul class="steps">
                        <li><a class="current" href="#wiz_etape1">Etape 1</a></li>
                        <li><a href="#wiz_etape2">Etape 2</a></li>
                        <li><a href="#wiz_etape3">Etape 3</a></li>
                        <li><a href="#wiz_etape4">Etape 4</a></li>
                        <li><a href="#wiz_etape5">Etape 5</a></li>
                        <li><a href="#wiz_etape6">Récapitulatif de la commande</a></li>
                    </ul>
                    <fieldset id="wiz_etape1">
                        <div class="row">
                            <label for="w1_server" style="text-align:center;">
                                <strong>Type de verre</strong>
                            </label>
                            <div>
                                <div style="width:170px;float:left">
                                    <input type="radio" value="1" id="type_commande_verre_1" name="type_commande_verre">
                                    <label for="type_commande_verre_1">Verre de fabrication</label>
                                </div>

                                <div style="width:170px;float:left">
                                    <input type="radio" value="2" id="type_commande_verre_2" name="type_commande_verre">
                                    <input type="hidden" value="" id="origine_commande" name="origine_commande">
                                    <label for="type_commande_verre_2">Verre de stock</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="precalibrage" style="display:none;">
                            <label for="precalibrage" style="text-align:center;">
                                <strong>Précalibrage ?</strong>
                            </label>
                            <div>
                                <div style="width:170px;float:left">
                                    <input type="radio" value="oui" id="precalibrage_oui" name="precalibrage_diametre">
                                    <label for="precalibrage_oui">Oui (gratuit)</label>
                                </div>
                                <div style="width:170px;float:left" class="hide_type_commande">
                                    <input type="radio" value="non" id="precalibrage_non" name="precalibrage_diametre">
                                    <label for="precalibrage_non">Non</label>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="commande_type" <?php echo (strtotime(date('Y-m-d H:i:s')) < strtotime(date('2015-05-20 13:50:00')) ? '' : 'style="display:none;"'); ?>>
                            <label for="type_commande" style="text-align:center;">
                                <strong>Type de commande</strong>
                            </label>
                            <div id="typecommande">
                                <div style="width:170px;float:left">
                                    <input type="radio" value="1" id="type_commande_1" name="type_commande" class="required" checked="checked">
                                    <label for="type_commande_1">Commande ferme</label>
                                </div>

                                <div style="width:170px;float:left" class="hide_type_commande">
                                    <input type="radio" value="2" id="type_commande_2" name="type_commande" class="required">
                                    <label for="type_commande_2">Casse atelier</label>
                                </div>
                                <div style="width:170px;float:left" class="hide_type_commande">
                                    <input type="radio" value="3" id="type_commande_3" name="type_commande" class="required">
                                    <label for="type_commande_3">Erreur Ophtalmologiste</label>
                                </div>
                                <div class="ec_commande_status">
                                    <span></span>
                                </div>

                            </div>
                        </div>
                        <div class="row" id="ancienne_commande_ref" style="display: none">
                            <label for="ancienne_commande" style="text-align:center;">
                                <strong>Référence commande remplacée</strong>
                            </label>
                            <div class="commandes_list">
                                <span>CR</span>
                                <select name="ancienne_commande" id="ancienne_commande" class="search" data-error-type="inline" style="width: 100px">
                                    <option val="0">Sélectionner</option>
                                    <?php echo $id_commandes; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" id="reference_client">
                            <label for="referenceclient" style="text-align:center;">
                                <strong>Référence Client</strong>
                            </label>
                            <div>
                                <input type="text" class="required" name="reference_client" id="referenceclient" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row" id="numero_magasin">
                            <label for="w1_name" style="text-align:center;">
                                <strong>Numéro Magasin</strong>
                            </label>
                            <div>
                                <p> Magasin <?php echo $user_info[0]->id_users; ?></p>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="wiz_etape2">
                        <div id="calibrage_select_oui">
                            <input type="hidden" value="" id="calibre_selected" class="noerror" name="calibre" class="required" />
                            <div class="alert note top">
                                <span class="icon"></span>
                                <strong>Cliquer sur le calibre qui correspond le plus à votre commande !</strong>
                            </div>
                            <div id="error_calibre_selected" class="alert error" style="display: none;">
                                <span class="icon"></span>
                                <span class="close">x</span>
                                Vous devez choisir un calibre ci-dessous.
                            </div>
                            <?php
                            $directory = $this->config->item('directory_img_calibre');
                            if ($handle = opendir($directory)) {
                                $nb_element_afficher_par_ligne = 0;
                                $nb_max_element_afficher = 6;

                                while (false !== ($image = readdir($handle))) {
                                    if(is_file($directory."/".$image)){

                                        if($nb_element_afficher_par_ligne == 0)
                                            echo '<div class="row" style="text-align:center;">';

                                        list($img,$extension) = explode(".",$image);
                                        echo '<img src="'.$pre_url.$directory."/".$image.'" alt="'.$img.'" height="70" width="100" style="margin:15px" class="calibre"/>';

                                        $nb_element_afficher_par_ligne++;

                                        if($nb_element_afficher_par_ligne == $nb_max_element_afficher){
                                            echo '</div>';
                                            $nb_element_afficher_par_ligne = 0;
                                        }
                                    }
                                }

                                if($nb_element_afficher_par_ligne < $nb_max_element_afficher)
                                    echo '</div>';

                                closedir($handle);
                            }
                            ?>
                            <div class="alert note top">
                                <span class="icon"></span>
                                <strong>Mesures FREEFORM </strong> Toutes les mesures ci dessous doivent être remplis en millimètre.
                            </div>
                            <div class="row">
                                <label for="cote_a" style="text-align:center;">
                                    <img width="90" height="50"  src="/static/img/mesure_freeform/cote_a.jpg" alt="cote_a" style="margin:20" />
                                    <small style="text-align:center">Largeur boxing</small>
                                </label>
                                <div>
                                    <input type="text" class="required" name="cotea" id="cotea" data-error-type="inline" style="margin-top:50px" pattern="^\d{1,2}\.?\d{1}$" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="cote_b" style="text-align:center;">
                                    <img width="90" height="40"  src="/static/img/mesure_freeform/cote_b.jpg" alt="cote_b" style="margin:20" />
                                    <small style="text-align:center">Hauteur boxing</small>
                                </label>
                                <div>
                                    <input type="text" class="required" name="coteb" id="coteb" data-error-type="inline" style="margin-top:50px" pattern="^\d{1,2}\.?\d{1}$" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="cote_c" style="text-align:center;">
                                    <img width="90" height="50"  src="/static/img/mesure_freeform/cote_c.jpg" alt="cote_c"  style="margin:20" />
                                    <small style="text-align:center">Taille du pont</small>
                                </label>
                                <div>
                                    <input type="text" class="required" name="cotec" id="cotec" data-error-type="inline" style="margin-top:50px" pattern="^\d{1,2}\.?\d{1}$" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="code_d" style="text-align:center;">
                                    <img width="90" height="45"  src="/static/img/mesure_freeform/cote_d.jpg" alt="cote_d" style="margin:20" />
                                    <small style="text-align:center">Diagonale verre en milimettres </small>
                                </label>
                                <div>
                                    <input type="text" class="required" name="coted" id="coted" data-error-type="inline" style="margin-top:50px" pattern="^\d{1,2}\.?\d{1}$" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="type_monture" style="text-align:center;">
                                    Type de monture
                                </label>
                                <div>
                                    <select name="type_monture" class="required" data-placeholder="Sélectionner un type">
                                        <option value=""></option>
                                        <option value="Plastique">Plastique</option>
                                        <option value="Optyl">Optyl</option>
                                        <option value="Metal">Métal</option>
                                        <option value="Nylor">Nylor</option>
                                        <option value="Percee">Percée</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="" style="text-align:center;">
                                    Epaisseur minimum au bord du verre
                                </label>
                                <div>
                                    <input type="text" value="" class="required" name="epaisseur_bord_verre" id="epaisseur_bord_verre" data-error-type="inline" pattern="^(\d{1,2}(\.|\,)?\d{1}?)|(\d{1,2})$" placeholder="A remplir en millimètre par pas de 0,1 mm" />
                                </div>
                            </div>
                        </div>
                        <div id="calibrage_select_non" style="display:none;">
                            <div class="row">
                                <label for="type_monture" style="text-align:center;">
                                    Diamètre du verre ?
                                </label>
                                <div>
                                    <div style="width:100px;float:left">
                                        <input type="radio" value="50/55" id="diametre_verre_50_55" name="diametre_verre">
                                        <label for="diametre_verre_50_55">50/55</label>
                                    </div>
                                    <div style="width:100px;float:left" class="hide_type_commande">
                                        <input type="radio" value="55/60" id="diametre_verre_55_60" name="diametre_verre">
                                        <label for="diametre_verre_55_60">55/60</label>
                                    </div>
                                    <div style="width:100px;float:left" class="hide_type_commande">
                                        <input type="radio" value="60/65" id="diametre_verre_60_65" name="diametre_verre">
                                        <label for="diametre_verre_60_65">60/65</label>
                                    </div>
                                    <div style="width:100px;float:left" class="hide_type_commande">
                                        <input type="radio" value="65/70" id="diametre_verre_65_70" name="diametre_verre">
                                        <label for="diametre_verre_65_70">65/70</label>
                                    </div>
                                    <div style="width:100px;float:left" class="hide_type_commande">
                                        <input type="radio" value="70/75" id="diametre_verre_70_75" name="diametre_verre">
                                        <label for="diametre_verre_70_75">70/75</label>
                                    </div>
                                    <div style="width:100px;float:left" class="hide_type_commande">
                                        <input type="radio" value="75/80" id="diametre_verre_75_80" name="diametre_verre">
                                        <label for="diametre_verre_75_80">75/80</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="wiz_etape3">
                        <div class="row">
                            <label style="text-align:center;">
                                <strong>Choix du type de verre</strong>
                            </label>
                            <div id="type_verre"></div>
                        </div>
                    </fieldset>
                    <fieldset id="wiz_etape4">
                        <div class="row">
                            <label style="text-align:center;">
                                <strong>Génération verre</strong>
                            </label>
                            <div style="display:none" id="choice_1"></div>
                            <div style="display:none" id="choice_2"></div>
                            <div style="display:none" id="choice_3"></div>
                            <div style="display:none" id="choice_4"></div>
                            <div style="display:none" id="choice_5"></div>
                            <div style="display:none" id="choice_6"></div>
                            <div style="display:none" id="choice_7"></div>
                        </div>
                        <div class="row" style="display:none" id="show_indice_verre">
                            <label for="indice_verre" style="text-align:center;">
                                <strong>Indice du verre</strong>
                            </label>
                            <div id="indice_verre"></div>
                        </div>
                        <div class="row" style="display:none" id="show_traitement">
                            <label for="traitement" style="text-align:center;">
                                <strong>Traitement</strong>
                            </label>
                            <div>
                                <div style="width:100px;float:left;" id="show_blanc">
                                    <input type="radio" value="Blanc" name="traitement" id="traintement_blanc" class="reset" /><label for="traitement_blanc">Blanc</label>
                                </div>
                                <div style="width:100px;float:left;" id="show_durci">
                                    <input type="radio" value="Durci" name="traitement" id="traitement_durci" class="reset" /><label for="traitement_durci">Durci</label>
                                </div>
                                <div style="width:100px;float:left;" id="show_hmc">
                                    <input type="radio" value="HMC" name="traitement" id="traitement_hmc" class="reset" /><label for="traitement_hmc">HMC</label>
                                </div>
                                <div style="width:100px;float:left;" id="show_satin">
                                    <input type="radio" value="Satin" name="traitement" id="traitement_satin" class="reset" /><label for="traitement_satin">Satin</label>
                                </div>
                                <!--div style="width:100px;float:left;" id="show_bluecoat">
                                                      <input type="radio" value="BlueCoat" name="traitement" id="traitement_bluecoat" class="reset" /><label for="traitement_bluecoat">BlueCoat</label>
                                                  </div -->
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_photocromie">
                            <label for="photocromie" style="text-align:center;">
                                <strong>Photocromie</strong>
                            </label>
                            <div id="photocromie">
                                <div style="width:150px;float:left;" class="show_non_photocromique">
                                    <input type="radio" value="Non Photocromique" name="photocromie" id="photocromie_no" class="reset" /><label for="photocromie_no">Non Photocromique</label>
                                </div>
                                <div style="width:120px;float:left;" class="show_transition_PhotoGrey">
                                    <input type="radio" value="PhotoGrey" name="photocromie" id="photocromie_PhotoGrey" class="reset" /><label for="photocromie_transition">PhotoGrey</label>
                                </div>
                                <div style="width:120px;float:left;" class="show_transition_PhotoBrown">
                                    <input type="radio" value="PhotoBrown" name="photocromie" id="photocromie_PhotoBrown" class="reset" /><label for="photocromie_transition">PhotoBrown</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_teinte">
                            <label for="teinte" style="text-align:center;">
                                <strong>Teinte</strong>
                            </label>
                            <div id="teinte">
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Non Teinté" name="teinte" id="teinte_no" class="reset" /><label for="teinte_no">Non Teinté</label>
                                </div>
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Gris C" name="teinte" id="teinte_grisc" class="reset" /><label for="teinte_grisc">Gris C</label>
                                </div>
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Brun C" name="teinte" id="teinte_brunc" class="reset" /><label for="teinte_brunc">Brun C</label>
                                </div>
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="G15 C" name="teinte" id="teinte_g15c" class="reset" /><label for="teinte_g15c">G15 C</label>
                                </div>
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Bleu nuit C" name="teinte" id="teinte_bleunuitc" class="reset" /><label for="teinte_bleunuitc">Bleu nuit C</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_miroir_stock">
                            <label for="miroir_stock" style="text-align:center;">
                                <strong>Miroir</strong>
                            </label>
                            <div id="miroir_stock">
                                <div style="width:150px;float:left">
                                    <input type="radio" value="0" id="aucune_option" name="miroir_stock">
                                    <label for="aucune_option">Pas d'option miroir</label>
                                </div>
                                <div style="width:80px;float:left">
                                    <input type="radio" value="1" id="miroir_bleu" name="miroir_stock">
                                    <label for="miroir_bleu">Bleu</label>
                                </div>
                                <div style="width:80px;float:left">
                                    <input type="radio" value="3" id="miroir_dore" name="miroir_stock">
                                    <label for="miroir_dore">Doré</label>
                                </div>
                                <div style="width:80px;float:left">
                                    <input type="radio" value="4" id="miroir_vert" name="miroir_stock">
                                    <label for="miroir_vert">Vert</label>
                                </div>
                                <div style="width:80px;float:left">
                                    <input type="radio" value="5" id="miroir_rouge" name="miroir_stock">
                                    <label for="miroir_rouge">Rouge</label>
                                </div>
                                <!--div style="width:130px;float:left">
                                                        <input type="radio" value="6" id="miroir_orange" name="miroir_stock">
                                                        <label for="miroir_orange">Miroir Orange</label>
                                                    </div-->
                                <div style="width:80px;float:left">
                                    <input type="radio" value="2" id="miroir_argent" name="miroir_stock">
                                    <label for="miroir_argent">Argent</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_polarisation">
                            <label for="polarisation" style="text-align:center;">
                                <strong>Polarisation</strong>
                            </label>
                            <div id="polarisation">
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Non polarisé" name="polarise" id="no_polarise" /><label for="no_polarise">Non Polarisé</label>
                                </div>
                                <div style="width:150px;float:left;">
                                    <input type="radio" value="Polarisé Gris base 6" name="polarise" id="polarise_gris_base_6" /><label for="polarise_gris_base_6">Polarisé Gris base 6</label>
                                </div>
                                <div style="width:150px;float:left;">
                                    <input type="radio" value="Polarisé Gris base 8" name="polarise" id="polarise_gris_base_8" /><label for="polarise_gris_base_8">Polarisé Gris base 8</label>
                                </div>
                                <div style="width:150px;float:left;">
                                    <input type="radio" value="Polarisé Brun base 6" name="polarise" id="polarise_brun_base_6" /><label for="polarise_brun_base_6">Polarisé Brun base 6</label>
                                </div>
                                <div style="width:150px;float:left;">
                                    <input type="radio" value="Polarisé Brun base 8" name="polarise" id="polarise_brun_base_8" /><label for="polarise_brun_base_8">Polarisé Brun base 8</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_commande_multiple">
                            <label for="multi_commande" style="text-align:center;">
                                <strong>Plusieurs commandes <br>du même type ? </strong>
                            </label>
                            <div id="multi_commande">
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Non" name="multi_commande" id="multi_commande_non" class="reset" /><label for="Non">Non</label>
                                </div>
                                <div style="width:120px;float:left;">
                                    <input type="radio" value="Oui" name="multi_commande" id="multi_commande_oui" class="reset" /><label for="Oui">Oui</label>
                                </div>
                                <div style="width:400px;float:left;display:none;" id="multi_commande_oui_message">
                                    <div style="float:left;margin-top:5px;">J'aimerais </div>
                                    <div style="width:130px;float:left;margin-left:10px;">
                                        <select name="nb_multi_commande" id="nb_multi_commande" data-placeholder="Sélectionner">
                                            <option value=""></option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div style="float:left;margin-left:10px;margin-top:5px;"> commandes identiques de ce type </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_correction_droit">
                            <label for="correction_droit" style="text-align:center;">
                                <strong>Correction oeil droit</strong>
                                <span class="topoffice" style="display: none;"><br><small>En vision de près</small></span>
                                <span class="info_choix_correction" style="color:red;display: none;"><br>Choisissez d'abord la correction <br> avant de choisir le diamètre.</span>
                            </label>
                            <div id="correction_droit">
                                <div style="width:100px;float:left;margin:20">
                                    <select name="sphere_droit" id="sphere_droit" class="search required">
                                        <option value=""></option>
                                        <?php
                                        for($i = 8; $i >= -10; $i-=0.25){
                                            echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <div style="text-align:center;padding-top:10px;">SPHERE</div>
                                </div>
                                <div style="width:100px;float:left;margin:20">
                                    <select name="cylindre_droit" id="cylindre_droit" class="search required">
                                        <option value=""></option>
                                        <?php
                                        for($i = 0; $i <= 10; $i+=0.25){
                                            echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <div style="text-align:center;padding-top:10px;">CYLINDRE</div>
                                </div>
                            </div>
                            <div style="padding-bottom: 5px;" style="display:none;">
                                <input type="checkbox" value="1" name="only_droit" /> Cocher ici si vous désirez uniquement commander le verre droit
                            </div>
                            <div id="show_indispo_droit" style="display:none; position: absolute; left: 250px; top: 295px; border-left:none; font-size:14px; color:red;">
                                Cette correction n'est pas disponible pour le verre selectionné
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_diametre">
                            <label for="diametre" style="text-align:center;">
                                <strong>Diamètre Verre Droit</strong>
                            </label>
                            <div id="diametre_droit">
                                <div style="width:80px;float:left;" class="groupe1">
                                    <input type="radio" value="55" name="diametre" id="diametre_55" class="reset" /><label for="diametre_55">55</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe1 groupe2">
                                    <input type="radio" value="60" name="diametre" id="diametre_60" class="reset" /><label for="diametre_60">60</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe1 groupe2 groupe3 groupe4 groupe6">
                                    <input type="radio" value="65" name="diametre" id="diametre_65" class="reset" /><label for="diametre_65">65</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe1 groupe3 groupe4 groupe5">
                                    <input type="radio" value="70" name="diametre" id="diametre_70" class="reset" /><label for="diametre_70">70</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe4 groupe6">
                                    <input type="radio" value="75" name="diametre" id="diametre_75" class="reset" /><label for="diametre_75">75</label>
                                </div>
                                <div id="show_diametre_non_dispo_droit" style="display: none;color:red;">
                                    Ce verre n'est pas stocké
                                </div>
                            </div>

                        </div>
                        <div class="row" style="display:none" id="show_nom_verre">
                            <label for="nom_verre" style="text-align:center;">
                                <strong>Nom verre droit</strong>
                            </label>
                            <div style="width:400px;" id="nom_verre">
                                <p style="font-size:14px;color:red;"></p>
                            </div>
                        </div>

                        <div class="row" style="display:none" id="show_correction_gauche">
                            <label for="correction_gauche" style="text-align:center;">
                                <strong>Correction oeil gauche</strong>
                                <span class="topoffice" style="display: none;"><br><small>En vision de près</small></span>
                                <span class="info_choix_correction" style="color:red;display: none;"><br>Choisissez d'abord la correction <br> avant de choisir le diamètre.</span>
                            </label>
                            <div id="correction_gauche">
                                <div style="width:100px;float:left;margin:20">
                                    <select name="sphere_gauche" id="sphere_gauche" class="search required">
                                        <option value=""></option>
                                        <?php
                                        for($i = 8; $i >= -10; $i-=0.25){
                                            echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <div style="text-align:center;padding-top:10px;">SPHERE</div>
                                </div>
                                <div style="width:100px;float:left;margin:20">
                                    <select name="cylindre_gauche" id="cylindre_gauche" class="search required">
                                        <option value=""></option>
                                        <?php
                                        for($i = 0; $i <= 10; $i+=0.25){
                                            echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
                                        }
                                        ?>
                                    </select>
                                    <div style="text-align:center;padding-top:10px;">CYLINDRE</div>
                                </div>
                            </div>
                            <div style="padding-bottom: 5px;" style="display:none;">
                                <input type="checkbox" value="1" name="only_gauche" /> Cocher ici si vous désirez uniquement commander le verre gauche
                            </div>
                            <div id="show_indispo_gauche" style="display:none;position: absolute; left: 350px; top: 407px; border-left:none; font-size:14px; color:red;">
                                Cette correction n'est pas disponible pour le verre selectionné
                            </div>

                        </div>

                        <div class="row" style="display:none" id="show_diametre_gauche">
                            <label for="diametre" style="text-align:center;">
                                <strong>Diamètre Verre Gauche</strong>
                            </label>
                            <div id="diametre_gauche">
                                <div style="width:80px;float:left;" class="groupe1">
                                    <input type="radio" value="55" name="diametre_gauche" id="diametre_gauche_55" class="reset" /><label for="diametre_gauche_55">55</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe1 groupe2">
                                    <input type="radio" value="60" name="diametre_gauche" id="diametre_gauche_60" class="reset" /><label for="diametre_gauche_60">60</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe1 groupe2 groupe3 groupe4 groupe6">
                                    <input type="radio" value="65" name="diametre_gauche" id="diametre_gauche_65" class="reset" /><label for="diametre_gauche_65">65</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe1 groupe3 groupe4 groupe5">
                                    <input type="radio" value="70" name="diametre_gauche" id="diametre_gauche_70" class="reset" /><label for="diametre_gauche_70">70</label>
                                </div>
                                <div style="width:80px;float:left;" class="groupe4 groupe6">
                                    <input type="radio" value="75" name="diametre_gauche" id="diametre_gauche_75" class="reset" /><label for="diametre_gauche_75">75</label>
                                </div>
                                <div id="show_diametre_non_dispo_gauche" style="display: none;color:red;">
                                    Ce verre n'est pas stocké
                                </div>
                            </div>

                        </div>
                        <div class="row" style="display:none" id="show_nom_verre_gauche">
                            <label for="nom_verre" style="text-align:center;">
                                <strong>Nom verre gauche</strong>
                            </label>
                            <div style="width:400px;" id="nom_verre_gauche">
                                <p style="font-size:14px;color:red;"></p>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_hep">
                            <label for="hep" style="text-align:center;">
                                <strong>Hauteur et écarts pupillaires</strong>
                            </label>
                            <div id="hep" style="margin-left: 101px;">
                                <div style="float:left;width:320px;padding-top:8px;">
                                    <div style="text-align:center;padding-bottom:10px">
                                        Hauteur <span id="baspupille" style="display:none;"></span>
                                    </div>
                                    <div style="text-align:center;">
                                        <img style="width:85px;height:33px;" alt="hauteur" src="/static/img/mesure_freeform/Hauteur.jpg">
                                    </div><br>
                                    <div style="text-align: center;">
                                        <div style="width:150px;float:left;">
                                            <label>
                                                Oeil Droit :
                                            </label>
                                            <div>
                                                <input type="text" name="hauteur" value="" class="required" pattern="^\d{1,2}\.?\d{1}$">
                                            </div>
                                        </div>
                                        <div style="width:150px;float:left;margin-left:20px">
                                            <label>
                                                Oeil Gauche :
                                            </label>
                                            <div>
                                                <input type="text" name="hauteur_gauche" value="" class="required" pattern="^\d{1,2}\.?\d{1}$">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div style="float:left;width:320px;margin-left:80px">
                                    <div style="text-align:center;padding-bottom:10px">
                                        Ecarts pupillaire <span class="topoffice" style="display: none;">VL</span>
                                    </div>
                                    <div style="text-align:center">
                                        <img style="width:85px;height:41px;" alt="ecart pupillaire" src="/static/img/mesure_freeform/ecart_pup.jpg">
                                    </div><br>
                                    <div style="text-align: center;">
                                        <div style="width:150px;float:left;">
                                            <label>
                                                Oeil Droit :
                                            </label>
                                            <div>
                                                <input type="text" name="ecart_puppillaire_droit" value="" class="required" pattern="^\d{1,2}\.?\d{1}$">
                                            </div>
                                        </div>
                                        <div style="width:150px;float:left;margin-left:20px">
                                            <label>
                                                Oeil Gauche :
                                            </label>
                                            <div>
                                                <input type="text" name="ecart_puppillaire_gauche" value="" class="required" pattern="^\d{1,2}\.?\d{1}$">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_option">
                            <label for="option" style="text-align:center;">
                                <strong>Options</strong>
                            </label>
                            <div id="option" style="margin-left: 101px;">
                                <div style="float:left;width:260px;border-right:1px dashed;">
                                    <div style="text-align:center;">
                                        Galbe/base <br>
                                        Entre 4 et 10<br>
                                        (facultatif)
                                    </div>
                                    <div style="text-align: center;padding-top:10px;">
                                        <input type="text" name="galbe" id="galbe" value="" pattern="^([4-9]|1[0])$">
                                    </div>
                                    <div style="text-align:center;padding-bottom:10px">
                                        Gratuit
                                    </div>
                                </div>
                                <div style="float:left;width:600px;">
                                    <div style="float:left;width:200px;">
                                        <div style="text-align:center;">
                                            Angle pantoscopique<br><br>
                                            (facultatif)
                                            <br>
                                        </div>
                                        <div style="text-align: center;padding-top:10px;">
                                            <input type="text" name="angle_pantoscopique" id="angle_pantoscopique" value="" placeholder="En degrès" pattern="^\d{1,3}\.?\d{0,2}$" class="disabled_field">
                                        </div>
                                        <div style="text-align:center;padding-bottom:10px">
                                            Gratuit
                                        </div>
                                    </div>
                                    <div style="float:left;width:200px;">
                                        <div style="text-align:center;">
                                            Angle de galbe<br><br>
                                            (facultatif)
                                            <br>
                                        </div>
                                        <div style="text-align: center;padding-top:10px;">
                                            <input type="text" name="angle_galbe" id="angle_galbe" value="" placeholder="En degrès" pattern="^\d{1,3}\.?\d{0,2}$" class="disabled_field">
                                        </div>
                                        <div style="text-align:center;padding-bottom:10px">
                                            Gratuit
                                        </div>
                                    </div>
                                    <div style="float:left;width:200px;">
                                        <div style="text-align:center;">
                                            Distance verre oeil<br>
                                            Entre 1 et 30<br>
                                            (facultatif)
                                            <br>
                                        </div>
                                        <div style="text-align: center;padding-top:10px;">
                                            <input type="text" name="distance_verre_oeil" id="distance_verre_oeil" value="" pattern="^([1-9]|[1-2][0-9]|3[0])$" class="disabled_field" placeholder="En millimètre">
                                        </div>
                                        <div style="text-align:center;padding-bottom:10px">
                                            Gratuit
                                        </div>
                                    </div>
                                    <div style="text-align:center;padding-bottom:5px;display:none;" class="info_disabled">
                                        Options uniquement disponible pour Omega et Elysium
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 101px;border-top:1px dashed;">
                                <div style="margin-right;auto;margin-left:auto;width:1000px">
                                    <div style="width:150px;float:left">
                                        <input type="radio" value="0" id="aucune_option" name="miroir" checked>
                                        <label for="aucune_option">Pas d'option miroir</label>
                                    </div>
                                    <div style="width:130px;float:left">
                                        <input type="radio" value="1" id="miroir_bleu" name="miroir">
                                        <label for="miroir_bleu">Bleu</label>
                                    </div>
                                    <div style="width:130px;float:left">
                                        <input type="radio" value="3" id="miroir_dore" name="miroir">
                                        <label for="miroir_dore">Doré</label>
                                    </div>
                                    <div style="width:130px;float:left">
                                        <input type="radio" value="4" id="miroir_vert" name="miroir">
                                        <label for="miroir_vert">Vert</label>
                                    </div>
                                    <div style="width:130px;float:left">
                                        <input type="radio" value="5" id="miroir_rouge" name="miroir">
                                        <label for="miroir_rouge">Rouge</label>
                                    </div>
                                    <!--div style="width:130px;float:left">
                                                            <input type="radio" value="6" id="miroir_orange" name="miroir">
                                                            <label for="miroir_orange">Miroir Orange</label>
                                                        </div-->
                                    <div style="width:130px;float:left">
                                        <input type="radio" value="2" id="miroir_argent" name="miroir">
                                        <label for="miroir_argent">Argent</label>
                                    </div>
                                    <br><br>
                                    <div style="width:850px;text-align:center;">
                                        (facultatif)<br>
                                        6 € par verre<br>
                                        Miroir en HMC face interne inclus dans ce tarif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display:none" id="show_prisme">
                            <label for="prisme" style="text-align:center;">
                                <strong>Prismes</strong>
                            </label>
                            <div id="prisme" style="margin-left: 101px;">
                                <div style="float:left;width:550px">
                                    <div style="text-align: center;">
                                        <div style="width:250px;float:left;">
                                            <label>
                                                Oeil Droit :
                                            </label>
                                            <br><br>
                                            <div>
                                                <?php
                                                echo '<div style="float: left;width:120px">
                                                                 <select name="dioptrie_droit" id="dioptrie_droit" data-placeholder="Dioptries">
																				<option value=""></option>';

                                                for($deb=0; $deb<=7;$deb+=0.25)
                                                    echo '<option value="'.$deb.'">'.$deb.'</option>';
                                                echo  '</select>
                                                              </div>';

                                                echo '<div style="float: left;width:120px">
                                                                    <select name="base_droit" id="base_droit" data-placeholder="Base (degrés)">
																		<option value=""></option>';
                                                for($deb=0; $deb<=360;$deb++)
                                                    echo '<option value="'.$deb.'">'.$deb.'</option>';
                                                echo  '</select>
                                                              </div>';
                                                ?>
                                            </div>
                                        </div>
                                        <div style="width:250px;float:left;margin-left:20px">
                                            <label>
                                                Oeil Gauche :
                                            </label>
                                            <br><br>
                                            <div>
                                                <?php
                                                echo '<div style="float: left;width:120px">
                                                                <select name="dioptrie_gauche" id="dioptrie_gauche" data-placeholder="Dioptries">
																				<option value=""></option>';
                                                for($deb=0; $deb<=7;$deb+=0.25)
                                                    echo '<option value="'.$deb.'">'.$deb.'</option>';
                                                echo  '</select>
                                                          </div>';

                                                echo '<div style="float: left;width:120px">
                                                                <select name="base_gauche" id="base_gauche" data-placeholder="Base (degrés)">
																		<option value=""></option>';
                                                for($deb=0; $deb<=360;$deb++)
                                                    echo '<option value="'.$deb.'">'.$deb.'</option>';
                                                echo  '</select>
                                                          </div>';
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <br><br>
                                    <div style="text-align:center;padding-bottom:10px">
                                        Gratuit (facultatif)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="show_verre" style="display: none;">
                            <label for="verre" style="text-align:center;">
                                <strong>Choix des verres</strong>
                            </label>
                            <div id="verre"></div>
                        </div>


                        <div class="row" id="show_commentaire" style="display: none;">
                            <label for="verre" style="text-align:center;">
                                <strong>Commentaire</strong>
                                <small>(facultatif)</small>
                            </label>
                            <div id="commentaire">
                                <textarea name="commentaire" rows="5" style="overflow: hidden;" class="ready"></textarea>
                            </div>
                        </div>



                        <div class="row row_error" id="limite_commande" style="display: none;">
                            <label for="verre" style="text-align:center;">
                                <strong>Crédit insuffisant</strong>
                            </label>
                            <div id="limite_commande_msg">
                                <p>Votre crédit casse atelier / erreur ophtalmologiste qui est de <b class="credit_casse">-</b> € ne vous permet pas de passer cette commande d'un montant de <b class="total_commande">-</b> €.</p>
                                <p>Voulez vous tout de même passer cette commande en commande ferme ?</p>
                                <div class="buttons">
                                    <!--<div style="float:left; margin-right: 20px;">
                                        <input type="radio" value="1" id="continue_commande" name="continue_commande">
                                        <label for="continue_commande">Passer en commande ferme</label>
                                    </div>-->
                                    <a id="continue_commande">Continuer en commande ferme</a>
                                    <a id="abort_commande">Annuler</a>
                                </div>
                            </div>
                        </div>

                    </fieldset>


                    <fieldset id="wiz_etape5">

                        <div class="row">
                            <label for="w1_server" style="text-align:center;">
                                <strong>Souhaitez-vous une carte<br />d'authenticté pour certifier<br />l'équipement ? (Gratuit)</strong>
                            </label>
                            <div>
                                <div style="width:100px;float:left">
                                    <input type="radio" value="1" id="carte_auth_y" name="carte_auth">
                                    <label for="carte_auth_y">Oui</label>
                                </div>

                                <div style="width:100px;float:left">
                                    <input type="radio" value="0" id="carte_auth_n" name="carte_auth">
                                    <label for="carte_auth_n">Non</label>
                                </div>
                            </div>
                        </div>


                        <div class="row sub-auth" id="civilite_client" style="display: none">
                            <label for="civiliteClient" style="text-align:center;">
                                <strong>Civilité du client</strong>
                            </label>
                            <div>
                                <select class="required" id="civiliteClient" name="civilite_client">
                                    <option value="0">Sélectionner..</option>
                                    <option value="1">Madame</option>
                                    <option value="2">Monsieur</option>
                                    <option value="3">Mademoiselle</option>
                                    <option value="4">Enfant</option>
                                </select>
                            </div>
                        </div>

                        <div class="row sub-auth" id="nom_client" style="display: none">
                            <label for="nomClient" style="text-align:center;">
                                <strong>Nom du Client</strong>
                            </label>
                            <div>
                                <input type="text" class="required" name="nom_client" id="nomClient" data-error-type="inline" />
                            </div>
                        </div>

                        <div class="row sub-auth" id="prenom_client" style="display: none">
                            <label for="prenomClient" style="text-align:center;">
                                <strong>Préom du Client</strong>
                            </label>
                            <div>
                                <input type="text" class="required" name="prenom_client" id="prenomClient" data-error-type="inline" />
                            </div>
                        </div>

                        <div class="row sub-auth" id="prev_auth">
                            <label style="text-align:center;">
                                <strong>Votre carte</strong>
                            </label>
                            <div>

                                <?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>

                                <div class="clearfix">
                                    <a id="generer_carte" class="button" style="display:none">Générer la carte d'authenticité</a>
                                </div>

                                <div id="preview_auth_card" >

                                    <span class="titre optieyes">Certificat d'authenticité</span>
                                    <?php if(isset($logo)) echo '<img class="card_logo" src="/static/img/logo.png" />'; ?>

                                    <div class="info">
                                        <span class="ref">REF OPTIEYES</span>
                                        <span class="date"><?php echo strftime('%d %B %Y', time()) ?></span>
                                    </div>

                                    <div class="client">
                                        <span class="civilite">M.</span>
                                        <span class="nom_client"><b class="nom">Dupont</b> <b class="prenom">Jean</b></span>
                                    </div>

                                    <div class="corrections">

                                        <table>
                                            <tr class="d">
                                                <td class="correct">OD: <span class="correction"></span></td>
                                                <td><span class="add"></span></td>
                                                <td class="prism"><span class="diopt"></span><span class="base"></span></td>
                                            </tr>

                                            <tr class="g">
                                                <td class="correct">OG: <span class="correction"></span></td>
                                                <td><span class="add"></span></td>
                                                <td class="prism"><span class="diopt"></span><span class="base"></span></td>
                                            </tr>

                                        </table>

                                    </div>

                                    <div class="verres">
                                        <span class="nom_verre"></span>
                                        <span class="diam_verre"></span>
                                        <div class="options">
                                            <span class="miroir"></span>
                                            <span class="galbe"></span>
                                        </div>
                                    </div>

                                    <div class="opticien">
                                        <span class="titre"Nom du magasin</span>
                                        <span>Adresse du magasin</span>
                                        <span>00000 Ville</span>
                                        <span class="tel">Tél: 0000000000</span>
                                    </div>

                                    <img class="normes" src="/static/img/logo_normes.png" />

                                </div>

                                <div id="preview_auth_img" >
                                    <img src="/static/img/preview_auth_card.jpg" />
                                </div>

                            </div>
                        </div>

                    </fieldset>


                    <fieldset id="wiz_etape6">
                        <hr/>
                        <div class="grid_12">
                            <div class="box">
                                <div class="header"><h2>Facture</h2></div>
                                <div class="invoice">
                                    <h3>Récapitulatif de la commande</h3>

                                    <div id="recap_commande"></div>

                                </div><!-- End of .content -->
                            </div><!-- End of .box -->
                        </div><!-- End of .grid_4 -->
                    </fieldset>
                </div><!-- End of .content -->

                <div class="actions">
                    <div class="left">
                        <a href="#" class="button grey"><span><img src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/arrow-180.png" width=16 height=16></span>Précèdent</a>
                    </div>
                    <div class="right">
                        <a href="#" class="button grey"><span><img src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/arrow.png" width=16 height=16></span>Suivant</a>
                        <a href="#1" class="button finish">Terminer la commande</a>
                        <!--a href="#2" class="button finish">Valider en usage personnel</a-->
                    </div>
                </div><!-- End of .actions -->

            </form><!-- End of .box -->
            <div id="msg_success_commande" title="Commande ajoutée" style="display: none;">
                <p>Votre commande à été ajouté avec succès.</p>
                <p>Vous pouvez consulter l'étape d'avancement de celle-ci dans la rubrique "mes commandes".</p>
            </div>

            <div id="msg_erreur_commande" title="Une erreur est survenue" style="display: none;">
                <p>Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte.</p>
                <p>Veuillez la renouveler où nous contacter si le problème persiste. Merci.</p>
            </div>

            <div id="msg_erreur_ec" title="Commande échouée" style="display: none;">
                <p>La commande que vous vouliez passer en casse atelier / erreur ophtalmologiste n'a pas été validée car votre crédit disponible en casse atelier / erreur ophtalmologiste
                    est inférieur au montant de cette commande.</p>
                <p><a class="button" href="<?php echo base_url() ?>admin/erreur_casse/<?php echo $user_info[0]->id_users; ?>">Voir historique de l'utilisateur</a></p>
            </div>


        </div><!-- End of .grid_4 -->

        <script>
            var formData = lastFormData = diff = FinCompteur = "";
            var debutCompteur = new Date();
            var loading = '<img src="/static/img/elements/loading/spinner.gif" style="width: 32px;height: 32px;" />';
            var iledefrance = '<?php echo $region; ?>';
            var tabLivIleDeFrance = ["Mardi","Mercredi","Jeudi","Vendredi","Lundi","Mardi","Mardi"];
            var tabLivHorsIleDeFrance = ["Mercredi","Jeudi","Vendredi","Samedi","Mardi","Mardi","Mardi"];
            var currentChoixMultiCommande = "";
            var tabCurrentGroupeDiametre = [];
            var type_commande_verre = 1;
            var precalibrage = "oui";

            $$.ready(function(){


                $('#wiz').on('change', 'input[name=type_commande]', function() {

                    if($(this).val() > 1) {

                        $.ajax({
                            type: "POST",
                            url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
                            beforeSend:function(){
                                $("#loading-overlay,#loading").show();
                            },
                            success: function(data){

                                $('.right .button.grey').addClass('disabled');

                                if(data!="" && data == "not_logged") {
                                    window.location.reload();
                                }
                                else if(data <= 0){
                                    $('#commande_type').addClass('row_error');
                                    $('#ancienne_commande_ref').hide();
                                    $('.ec_commande_status').find('span').html('Vous ne disposez d\'aucun crédit Erreur / Casse');

                                } else {

                                    $('#ancienne_commande_ref').show();
                                    $('.ec_commande_status').find('span').html('Votre crédit : <b>'+data+' €</b>');
                                    $('#commande_type').removeClass('row_error');
                                    //$('.right .button.grey').removeClass('disabled');
                                }

                                $("#loading-overlay,#loading").hide();
                            },
                            error:function(){
                                $('.ec_commande_status').find('span').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
                                $("#loading-overlay,#loading").hide();
                            }
                        });


                        $('.ec_commande_status').fadeIn(60);
                    }
                    else {
                        $('#ancienne_commande_ref').hide();
                        $('.right .button.grey').removeClass('disabled');
                        $('.ec_commande_status').fadeOut(60);
                    }
                });


                $('#ancienne_commande').on('change', function() {
                    if($(this).val() > 0) {
                        $('.right .button.grey').removeClass('disabled');
                    }
                    else {
                        $('.right .button.grey').addClass('disabled');
                    }
                });


                $('#wiz').on('change', 'select[name=id_verre], input[name=only_gauche], input[name=only_droit]', function() {

                    var option_price = 0;
                    var total_price = 0;

                    if($('input[name=type_commande]:checked').val() > 1) {

                        if($('select[name=id_verre] option:selected').val() != 0) {

                            $.ajax({
                                type: "POST",
                                url: "/admin/getPrixVerre",
                                data: {'id': $('select[name=id_verre] option:selected').val()},
                                dataType: "html",
                                success: function (data) {

                                    $.ajax({
                                        type: "POST",
                                        url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
                                        beforeSend:function(){
                                            $("#loading-overlay,#loading").show();
                                        },
                                        success: function(credit){

                                            if(credit!="" && credit == "not_logged") {
                                                window.location.reload();
                                            }

                                            if($('input[name=miroir]:checked').val() > 0) {
                                                option_price = 6;
                                            }

                                            if ($("input[name=only_gauche]").is(':checked') || $("input[name=only_droit]").is(':checked')) {
                                                total_price += parseFloat(data);
                                                total_price += parseFloat(option_price);
                                            }
                                            else {
                                                total_price += parseFloat(data * 2);
                                                total_price += parseFloat(option_price*2);
                                            }

                                            $('.credit_casse').text(credit);
                                            $('.total_commande').text(total_price);

                                            var diff = credit-total_price;
                                            console.log(option_price);

                                            if(diff < 0) {
                                                $('.limite_commande').fadeIn(60);
                                                $('.right .button.grey').addClass('disabled');
                                            }
                                            else {
                                                $('.limite_commande').fadeOut(60);
                                                $('.right .button.grey').removeClass('disabled');
                                            }


                                            $("#loading-overlay,#loading").hide();
                                        },
                                    });

                                },
                            });

                        }

                    }


                });


                $('#continue_commande').on('click', function() {
                    $('input[name=type_commande]').val(1);
                    $('.right .button.grey').removeClass('disabled').trigger('click');
                });

                $('#continue_commande').on('change', function() {
                    $('input[name=type_commande]').val(1);
                    $('.right .button.grey').removeClass('disabled');
                });

                $('#abort_commande').on('click', function() {
                    $("#msg_erreur_ec").dialog( "open" );
                });



                $('#wiz').wizard({
                    onSubmit: function(){
                        orderOk = false;

                        var date = new Date();
                        var BlueCoat = $("#nom_verre").find('p').html().indexOf('BlueCoat');
                        var Miroir = $("#nom_verre").find('p').html().indexOf('Miroir');
                        var Polarise = $("#nom_verre").find('p').html().indexOf('Polarisé');

                        var jourLivraison = iledefrance == '1' ? tabLivIleDeFrance[date.getDay()] : tabLivHorsIleDeFrance[date.getDay()];

                        if(type_commande_verre == 2 && ($("input[name=id_indice_verre]:checked").val() == 6 || BlueCoat != -1 || Polarise != -1 || Miroir != -1)){
                            if(confirm("Livraison "+jourLivraison+", valider ? ( hors jours feriés )")){
                                orderOk = true;
                            }
                        } else {
                            orderOk = true;
                        }

                        if(orderOk){
                            $.ajax({
                                type: "POST",
                                url: "/admin/addOrder/<?php echo $user_info[0]->id_users; ?>",
                                beforeSend:function(){
                                    $("#loading-overlay,#loading").show();
                                },
                                success: function(data){
                                    if(data!="" && data == "not_logged")
                                        window.location.reload();
                                    else if(data == "erreur"){
                                        $("#msg_erreur_commande").dialog( "open" );
                                    }else{
                                        $("#loading-overlay,#loading").hide();
                                        $("#msg_success_commande").dialog( "open" );
                                    }
                                },
                                error:function(){
                                    $("#loading-overlay,#loading").hide();
                                }
                            });

                            $(this).parent().fadeOut();
                        }
                        return false;
                    },
                    onPageSwitch : function($newStep, newIndex){

                        if($newStep.is('#wiz_etape1')){
                            $('#update_RIB').fadeIn(100);
                            $('#form_error_msg').hide();
                        }
                        else {
                            $('#update_RIB').fadeOut(100);
                            $('#form_error_msg').show();
                        }

                        if(type_commande_verre == 2){

                            $(".info_choix_correction").show();
                            if($newStep.is('#wiz_etape1')){
                                $("#wiz").find('.steps a').removeClass('success');
                            }
                            else if($newStep.is('#wiz_etape2')){
                                $("#wiz_etape2,#wiz_etape4").find('.required:not(#id_verre)').removeClass('required').addClass('required_verre_fabrication');
                                $("#type_verre").find('input').eq(0).prop('checked',true).trigger('change');
                                $("#wiz").find('.steps a:eq(2)').addClass('success');
                                $("#wiz").trigger('goToIndex', 3);
                            }else if($newStep.is('#wiz_etape3')){
                                $("#wiz").trigger('goToIndex', 0);
                            }

                        }
                        else if(type_commande_verre == 1){

                            if($newStep.is('#wiz_etape5')) {
                                $('.right .button.grey').addClass('disabled');


                                var options = 0;
                                var type_verre = $('input[name=id_type_generation_verre]:checked').val();

                                $('a.current').removeClass('error');
                                $('.eye_text, .corrections .d, .corrections .g').hide();


                                // Corrections droit
                                if( ! $('input[name=only_gauche]').is(':checked') ) {

                                    $('.corrections .d .eye_text').show();
                                    $('.corrections .d').show();

                                    if(parseFloat($('#sphere_droit option:selected').text()) > 0) {
                                        var sph = '+'+$('#sphere_droit option:selected').text();
                                    }
                                    else {
                                        var sph = $('#sphere_droit option:selected').text();
                                    }

                                    var add = '';

                                    if(type_verre == 1 || type_verre == 3) {
                                        var add = 'ADD ' + $('#addition_droit option:selected').text();
                                    }
                                    else if (type_verre == 2) {
                                        var add = 'DEG ' + $('#degression_droit option:selected').text();
                                    }

                                    if($('#cylindre_droit option:selected').text() == '0.00') {
                                        var cyl_axe = '  ';
                                    }
                                    else {
                                        var cyl_axe = ' (+' + $('#cylindre_droit option:selected').text() + ') ' + $('#axe_droit option:selected').text() + '° ';
                                    }

                                    $('.corrections .d').find('.correction').text(sph + cyl_axe);
                                    $('.corrections .d').find('.add').text(add);
                                }

                                // Corrections gauche
                                if( ! $('input[name=only_droit]').is(':checked') ) {

                                    $('.corrections .g .eye_text').show();
                                    $('.corrections .g').show();

                                    if(parseFloat($('#sphere_gauche option:selected').text()) > 0) {
                                        var sph = '+'+$('#sphere_gauche option:selected').text();
                                    }
                                    else {
                                        var sph = $('#sphere_gauche option:selected').text();
                                    }

                                    var add = '';

                                    if(type_verre == 1 || type_verre == 3) {
                                        var add = 'ADD ' + $('#addition_gauche option:selected').text();
                                    }
                                    else if (type_verre == 2) {
                                        var add = 'DEG ' + $('#degression_gauche option:selected').text();
                                    }

                                    if($('#cylindre_gauche option:selected').text() == '0.00') {
                                        var cyl_axe = '  ';
                                    }
                                    else {
                                        var cyl_axe = ' (+' + $('#cylindre_gauche option:selected').text() + ') ' + $('#axe_gauche option:selected').text() + '° ';
                                    }


                                    $('.corrections .g').find('.correction').text(sph + cyl_axe);
                                    $('.corrections .g').find('.add').text(add);
                                }

                                var last_line = 0;

                                if( $('#galbe').val().length > 0) {
                                    $('#preview_auth_card .options .galbe').text('Galbe ' + $('#galbe').val());
                                    ++last_line;
                                    ++options;
                                } else {
                                    $('#preview_auth_card .options .galbe').text('');
                                    options = 0;
                                }

                                if($('input[name=miroir]:checked').val() != 0) {

                                    var tiret = '';

                                    if( $('#galbe').val().length > 0) {
                                        var tiret = '- ';
                                    }

                                    $('#preview_auth_card .options .miroir').text('Miroir ' + $('label[for='+$('input[name=miroir]:checked').attr('id')+']:first').text() + ' HMC Face interne '+tiret);
                                    ++last_line;
                                    ++options;
                                } else {
                                    $('#preview_auth_card .options .miroir').text('');
                                }


                                if( $('input[name=precalibrage_diametre]:checked').val() != 'oui' ) {
                                    $('.verres .diam_verre').text('diamètre ' +  $('input[name=diametre_verre]:checked').val() );
                                }
                                else {
                                    $('.verres .diam_verre').text('Précalibré');
                                }


                                if( $('select#dioptrie_droit option:selected').val() != 'undefined' && $('select#dioptrie_droit option:selected').val() != '' ) {
                                    $('.corrections .d').find('.diopt').text($('select#dioptrie_droit option:selected').text()+' Δ');
                                    ++options;
                                } else {
                                    $('.corrections .d').find('.diopt').text('');
                                }

                                if( $('select#dioptrie_gauche option:selected').val() != 'undefined' && $('select#dioptrie_gauche option:selected').val() != '') {
                                    $('.corrections .g').find('.diopt').text($('select#dioptrie_gauche option:selected').text()+' Δ');
                                    ++options;
                                } else {
                                    $('.corrections .g').find('.diopt').text('');
                                }

                                if( $('select#base_droit option:selected').val() != 'undefined' && $('select#base_droit option:selected').val() != '' ) {
                                    $('.corrections .d').find('.base').text(' base ' + $('select#base_droit option:selected').text()+'°');
                                    ++options;
                                } else {
                                    $('#preview_auth_card .prisme .d .base').text('');
                                }

                                if( $('select#base_gauche option:selected').val() != 'undefined' && $('select#base_gauche option:selected').val() != '' ) {
                                    $('.corrections .g').find('.base').text(' base ' + $('select#base_gauche option:selected').text()+'°');
                                    ++options;
                                } else {
                                    $('.corrections .g').find('.base').text('');
                                }

                                if(options > 0) {
                                    $('div.options').show();
                                }
                                else {
                                    $('div.options').hide();
                                }

                                $.ajax({
                                    type: "POST",
                                    url: "/admin/getIdVerre/",
                                    data : { 'id' : $('select[name=id_verre] option:selected').val() },
                                    dataType:"html",
                                    success: function(data){
                                        if(data !== undefined ) {
                                            $('span.nom_verre').text(data);
                                        }
                                    },
                                });


                            }
                            else {
                                $('.right .button.grey').removeClass('disabled');
                            }

                            $(".info_choix_correction").hide();
                            $("#wiz_etape2,#wiz_etape4").find('.required_verre_fabrication').removeClass('required_verre_fabrication').addClass('required');

                            //$('#preview_auth_card, #preview_auth_img').hide();


                            $('input[name="carte_auth"]').on('change', function() {


                                $('#preview_auth_card, #preview_auth_img, #prev_auth').hide();

                                if( $(this).val() == 1 ) {


                                    $('#wiz_etape5 input[name=nom_client], #wiz_etape5 input[name=prenom_client], #wiz_etape5 select').addClass('required');

                                    $('.right .button.grey').addClass('disabled');

                                    // Civilité
                                    $('div#civilite_client').fadeIn();
                                    $('select[name=civilite_client]').on('change', function() {

                                        $('#preview_auth_card, #preview_auth_img').hide();

                                        // Nom
                                        if( $(this).val() != 0 ) {

                                            var civilites = {0:'', 1:'Mme', 2: 'M.', 3:'Mlle', 4:''};


                                            $('#preview_auth_card .civilite').text(civilites[$(this).find('option:selected').val()]);

                                            $('div#nom_client').fadeIn();

                                            $('input[name=nom_client]').on('keyup', function() {

                                                $('#preview_auth_card, #preview_auth_img').hide();

                                                if( $(this).val().length > 0 ) {

                                                    var nom = $(this).val();

                                                    $('#preview_auth_card .nom_client .nom').text(nom.toLowerCase());

                                                    // Prenom
                                                    $('div#prenom_client').fadeIn();
                                                    $('input[name=prenom_client]').on('keyup', function () {

                                                        $('#preview_auth_card, #preview_auth_img').hide();

                                                        if ($(this).val().length > 0) {
                                                            var prenom = $(this).val();
                                                            $('#preview_auth_card .nom_client .prenom').text(prenom.toLowerCase());

                                                            $('#generer_carte, #prev_auth').fadeIn(120);

                                                            $('#preview_auth_card').parent('div').css('height', 'auto');

                                                        }
                                                        else {
                                                            $('#generer_carte').fadeOut(120);
                                                        }

                                                    });

                                                } else {
                                                    $('div#prenom_client').fadeOut();
                                                }
                                            });

                                        }

                                    });

                                } else {
                                    $('div.sub-auth').fadeOut();
                                    $('.right .button.grey').removeClass('disabled');
                                    $('#wiz_etape5 input[type=text], #wiz_etape5 select').removeClass('required');
                                }

                            });

                            $('#prev_auth').on('click', '#generer_carte', function() {


                                $('.right .button.grey').removeClass('disabled');
                                $('#preview_auth_card, #preview_auth_img').fadeIn(120);



                            });

                        }


                        FinCompteur = new Date();
                        dDiff = new Date(FinCompteur - debutCompteur);

                        if(dDiff.getMinutes() >= 30)
                            window.location.reload();

                        if(type_commande_verre == 1) {
                            var last_step = 'wiz_etape6';
                        }
                        else if(type_commande_verre == 2) {
                            var last_step = 'wiz_etape5';
                        }


                        if($newStep.attr('id') == last_step){
                            if(formData!="")
                                lastFormData = formData;

                            formData = $('form#wiz').serialize();

                            if(formData != lastFormData){ //empeche l'envoi du formulaire si il n'est pas different en cas de retour en arrière
                                $.ajax({
                                    type: "POST",
                                    url: "/admin/setOrderRecap/<?php echo $user_info[0]->id_users; ?>",
                                    data : formData,
                                    dataType:"html",
                                    beforeSend:function(){
                                        $("#wiz .finish").hide();
                                        $('#wiz .right .button.grey').show();
                                        $("#recap_commande").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">'+loading+'</div></div>');
                                    },
                                    success: function(data){
                                        if(data=="not_logged")
                                            window.location.reload();
                                        else if(data=="error"){
                                            alert('une erreur est survenue, veuillez réessayer, merci !');
                                        }
                                        else{
                                            $("#wiz .finish").show();
                                            $('#wiz .right .button.grey').hide();
                                            $("#recap_commande").empty().append(data);
                                        }
                                    },
                                    error : function(){
                                        $("#recap_commande").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
                                    }
                                });
                            }
                        }
                    }
                });


                var current_value = null;

                $('input[name="type_commande_verre"]').on('change', function() {

                    console.log(current_value);

                    if(current_value !== null && current_value != $(this).val()) {
                        window.location.href = 'http://'+window.location.hostname+'/admin/passer_commande/<?php echo $user_info[0]->id_users; ?>/?t='+$(this).val();
                    }

                    current_value = $(this).val();

                    if($(this).val() == 2) {

                        $('#wiz_etape5').remove();
                        $('a[href="#wiz_etape5"]').parent('li').remove();
                        $('a[href="#wiz_etape2"], a[href="#wiz_etape3"]').parent('li').hide();

                        $('a[href="#wiz_etape4"]').text('Etape 2');

                        $('#wiz_etape6').attr('id', 'wiz_etape5');
                        $('a[href="#wiz_etape6"]').attr('href', '#wiz_etape5');


                    }

                });



                /*$('.right .button.disabled').on('click', function(e) {
                 return false;
                 e.preventDefault();
                 e.stopPropagation();
                 });*/

                $("#msg_success_commande,#msg_erreur_commande, #msg_erreur_ec").dialog({
                    position: { my: "center", at: "center", of: $("#wiz") },
                    autoOpen: false,
                    modal: true,
                    buttons: [{
                        text: "Ok",
                        click: function() {
                            $(this).dialog("close");
                            window.location.href = "/admin/passer_commande/<?php echo $user_info[0]->id_users; ?>";
                        }
                    }],
                    close: function( event, ui ) {
                        window.location.href = "/admin/passer_commande/<?php echo $user_info[0]->id_users; ?>";
                    }
                });

                $("input[name^=only_]").click(function(){
                    var input = $(this);
                    if(input.attr('name').split('_')[1] == "droit"){
                        if(input.is(':checked')){
                            $("#correction_gauche select").next().removeClass('chzn-disabled');
                            $("input[name=diametre_gauche]").addClass('required');
                        }else{
                            input.attr('checked');
                            $("input[name=only_gauche]").attr('checked',false);
                            $("#correction_gauche select").next().addClass('chzn-disabled');
                            $("#correction_droit select").next().removeClass('chzn-disabled');
                            $("input[name=diametre_gauche]").removeClass('required');
                        }
                    }else{
                        if(input.is(':checked')){
                            $("#correction_droit select").next().removeClass('chzn-disabled');
                            $("input[name=diametre]").addClass('required');
                        }else{
                            input.attr('checked');
                            $("input[name=only_droit]").attr('checked',false);
                            $("#correction_droit select").next().addClass('chzn-disabled');
                            $("#correction_gauche select").next().removeClass('chzn-disabled');
                            $("input[name=diametre]").removeClass('required');
                        }
                    }
                });

                $(".calibre").click(function(){
                    $('.calibre').removeClass('calibre_selected');
                    $(this).addClass('calibre_selected');
                    $("#calibre_selected").val($(this).attr('alt'));
                    $("#error_calibre_selected").hide();
                });

                if($("#calibre_selected").val()!="")
                    $("img[alt="+$("#calibre_selected").val()+"]").addClass('calibre_selected');

                $("#wiz .right,#wiz .current").click(function(){
                    var current = $("#wiz .steps").find('.current').attr('href');

                    if(current == "#wiz_etape2"){
                        if($("#calibre_selected").hasClass('error')){
                            $("#error_calibre_selected").show();
                        }
                        else{
                            $("#error_calibre_selected").hide();
                            $("#calibre_selected").next(".valid-icon").hide();
                        }
                    }
                });

                $("#wiz_etape3 .radiobutton-checked").removeClass('radiobutton-checked');
                $("#wiz_etape3 input[name=id_type_generation_verre]:checked").removeAttr('checked');
            });

            function evenementGammeVerre(){
                $("input[id^=gamme_verres_]").click(function(){
                    if(!$(this).is(':checked')){

                        var id_generation_verre = $(this).attr('id').split('_')[2];
                        $(this).attr('checked',true);
                        $("#show_correction_droit,#show_correction_gauche,#show_hep,#show_option,#show_verre,#show_prisme,#show_commentaire,#show_traitement,#show_photocromie,#show_teinte,#show_miroir_stock,#show_polarisation,#show_commande_multiple,#show_diametre,#show_nom_verre,#show_correction_droit,#show_diametre_gauche,#show_nom_verre_gauche,#show_correction_gauche").hide();

                        $(".topoffice").hide();
                        $("#baspupille").hide();
                        if(id_generation_verre == 6){
                            $(".topoffice").show();
                            $("#baspupille").html('pleine pupille').show();
                        }

                        if(id_generation_verre == 7){
                            $("#baspupille").html('bas de pupille').show();
                        }

                        $.ajax({
                            type: "POST",
                            url: "/admin/getIndiceVerre",
                            data : "id_generation_verre="+id_generation_verre,
                            dataType:"html",
                            beforeSend: function(){
                                $("#indice_verre").append(loading);
                                $("#show_indice_verre").show();
                            },
                            success: function(data){
                                $("#indice_verre").empty().append(data);
                                $("#indice_verre").css('height','');
                                styleRadio();
                                evenementIndiceVerre();

                            },
                            error: function(){
                                $("#indice_verre").empty().append("Une erreur est survenue");
                            }
                        });
                    }
                });
            }


            function evenementIndiceVerre(){
                $("input[id^=indice_verre_]").click(function(){
                    if(!$(this).is(':checked')){
                        var id_indice_verre = $(this).val(), id_generation_verre_value = "";
                        var id_generation_verre = $("input[name=id_generation_verre]:checked").val();


                        id_generation_verre_value = id_generation_verre;


                        $.ajax({
                            type: "POST",
                            url: "/admin/getGrilleFabrication",
                            data : "id_indice_verre="+id_indice_verre+"&id_generation_verre="+id_generation_verre_value+"&type_commande_verre="+type_commande_verre+"&teinte="+$("input[name=teinte]:checked").val()+"&traitement="+$("input[name=traitement]:checked").val()+"&photocromie="+$("input[name=photocromie]:checked").val(),
                            dataType: "html",
                            beforeSend: function(){
                                if(type_commande_verre == 1){
                                    $("#correction_droit,#correction_gauche").append(loading);
                                    $("#show_correction_droit,#show_correction_gauche").show();
                                }
                            },
                            success: function(data){
                                if(type_commande_verre != 2){
                                    $("#correction_droit").empty().append(data);
                                    $('#correction_gauche').empty();
                                    $("#correction_droit > div").clone().appendTo('#correction_gauche');


                                    $('#correction_gauche select').each(function(){
                                        $(this).attr('name', $(this).attr('name').split('_')[0]+'_gauche');
                                        $(this).attr('id', $(this).attr('id').split('_')[0]+'_gauche');
                                    });
                                }

                                if(type_commande_verre == 1){
                                    $("#show_hep,#show_prisme,#show_commentaire").show();
                                }else if(type_commande_verre == 2){
                                    $("#show_traitement,#show_blanc,#show_hmc,#show_satin,#show_durci,#show_bluecoat").show();
                                    $("#show_photocromie,#show_diametre,#show_diametre_gauche,#show_teinte,#show_nom_verre,#show_nom_verre_gauche,#show_commentaire,#show_correction_droit,#show_correction_gauche").hide();
                                    $(".reset").removeAttr('checked');

                                    if(id_indice_verre == 8){
                                        $("#show_blanc,#show_satin,#show_bluecoat").hide();
                                    }

                                    if(id_indice_verre == 4)
                                        $("#show_blanc").hide();

                                    if(id_indice_verre == 5 || id_indice_verre == 6)
                                        $("#show_blanc,#show_durci,#show_hmc").hide();

                                    if(id_indice_verre == 6)
                                        $("#show_bluecoat").hide();

                                    if(id_generation_verre == 9 && id_indice_verre == 4){
                                        $("#show_hmc").hide();
                                    }

                                    if(id_generation_verre == 12 || id_generation_verre == 13 || id_generation_verre == 14){
                                        $("#show_durci,#show_hmc,#show_satin").hide();
                                    }

                                    if(id_generation_verre == 15){
                                        $("#show_blanc,#show_durci,#show_satin").hide();
                                    }
                                }

                                var id_type_generation_verre = $("#wiz_etape3 input[name=id_type_generation_verre]:checked");

                                if((id_type_generation_verre.val() == 1 || id_type_generation_verre.val() == 4 || id_type_generation_verre.val() == 7) && type_commande_verre == 1){
                                    $("#show_option").show();

                                    if(id_type_generation_verre.val() == 4){
                                        $(".disabled_field").parent().parent().hide();
                                    }

                                    if(id_generation_verre > 2){
                                        $(".disabled_field").attr('disabled',true);
                                        $(".disabled_field").val('');
                                        $(".info_disabled").show();
                                    }else{
                                        $(".disabled_field").attr('disabled',false);
                                        $(".info_disabled").hide();
                                    }
                                }

                                setSelect('correction_droit');
                                setSelect('correction_gauche');

                                $$.utils.forms.resize();

                                $("#show_commande_multiple").hide();
                                $("#multi_commande_non,#multi_commande_oui").prop('checked',false);

                            }
                        });

                        if(type_commande_verre != 2)
                            $.ajax({
                                type: "POST",
                                url: "/admin/getSpecificVerre/<?php echo $user_info[0]->id_users; ?>",
                                data : "id_indice_verre="+id_indice_verre+"&id_generation_verre="+id_generation_verre,
                                dataType:"html",
                                beforeSend: function(){
                                    $("#verre").append(loading);
                                    $("#show_verre").show();
                                },
                                success: function(data){
                                    $("#verre").empty().append(data);
                                    setSelect('verre');

                                    $$.utils.forms.resize();
                                }
                            });

                    }
                });
            }

            function EvenementCorrectionVerre(cote,sphere){

                var id_generation_verre_value = $("input[name=id_generation_verre]:checked").val();

                $.ajax({
                    type: "POST",
                    url: "/admin/getGrilleFabrication",
                    data : "id_indice_verre="+$("input[name=id_indice_verre]:checked").val()+"&id_generation_verre="+id_generation_verre_value+"&type_commande_verre="+type_commande_verre+"&id_verre="+$("#show_verre").find('#id_verre').val()+"&cote="+cote+(typeof sphere != "undefined" ? "&sphere="+sphere : '')+"&teinte="+$("input[name=teinte]:checked").val()+"&traitement="+$("input[name=traitement]:checked").val()+"&photocromie="+$("input[name=photocromie]:checked").val()+"&miroir="+$("input[name=miroir_stock]:checked").val()+"&polarise="+$("input[name=polarise]:checked").val(),
                    dataType:"html",
                    beforeSend: function(){
                        if(type_commande_verre == 1){
                            $("#correction_"+cote).empty().append(loading);
                            $("#show_correction_"+cote).show();
                        }
                    },
                    success: function(data){
                        $("#correction_"+cote).empty().append(data);

                        setSelect('correction_'+cote);

                        var id_generation_verre_value = $("input[name=id_generation_verre]:checked").val();

                        if(type_commande_verre == 2)
                            $.ajax({
                                type: "POST",
                                url: "/admin/getDiametre",
                                data : "cylindre="+$("#cylindre_"+cote).val()+"&sphere="+$("#sphere_"+cote).val()+"&id_indice_verre="+$("input[name=id_indice_verre]:checked").val()+"&id_generation_verre="+id_generation_verre_value+"&type_commande_verre="+type_commande_verre+"&teinte="+$("input[name=teinte]:checked").val()+"&traitement="+$("input[name=traitement]:checked").val()+"&photocromie="+$("input[name=photocromie]:checked").val()+"&miroir="+$("input[name=miroir_stock]:checked").val()+"&polarise="+$("input[name=polarise]:checked").val(),
                                dataType:"json",
                                success: function(data){

                                    $("#diametre_"+cote+" input[id^=diametre_]").parent().hide();

                                    if(data.length != 0){
                                        /*if(cote == "gauche")
                                         $("#show_diametre_"+cote).hide();
                                         else
                                         $("#show_diametre").hide();*/

                                        $("#show_diametre_non_dispo_"+cote).hide();

                                        if(cote == "gauche"){
                                            //if($("#show_diametre_gauche #diametre_gauche_"+data[key]).parent().hasClass(tabCurrentGroupeDiametre[key2])){
                                            $("#show_diametre_gauche #diametre_gauche_"+data[key]).parent().show();
                                            //}
                                        } else {
                                            //if($("#diametre_"+data[key]).parent().hasClass(tabCurrentGroupeDiametre[key2])){
                                            $("#diametre_"+data[key]).parent().show();
                                            //}
                                        }


                                        for(var key in data){
                                            //for(var key2 in tabCurrentGroupeDiametre){
                                            if(cote == "gauche"){
                                                //if($("#show_diametre_gauche #diametre_gauche_"+data[key]).parent().hasClass(tabCurrentGroupeDiametre[key2])){
                                                $("#show_diametre_gauche #diametre_gauche_"+data[key]).parent().show();
                                                //}
                                            } else {
                                                //if($("#diametre_"+data[key]).parent().hasClass(tabCurrentGroupeDiametre[key2])){
                                                $("#diametre_"+data[key]).parent().show();
                                                //}
                                            }
                                            //}
                                        }
                                    } else {
                                        if($("input[name=multi_commande]:checked").length != 0 && currentChoixMultiCommande != $("input[name=multi_commande]:checked").val()){
                                            if(cote == "gauche")
                                                $("#show_diametre_"+cote).show();
                                            else
                                                $("#show_diametre").show();

                                            $("#show_diametre_non_dispo_"+cote).show();
                                        }
                                    }

                                    /*if( $("#sphere_"+cote).val() != "" &&  $("#cylindre_"+cote).val() != "" && ($("input[name=multi_commande]:checked").val() != "Oui" || $("#nb_multi_commande").val() != "")){
                                     if( ($("#show_teinte").is(":visible") && $("input[name=teinte]:checked").length != 0) || ($("#show_photocromie").is(":visible") && $("input[name=photocromie]:checked").length != 0) || ($("#show_teinte").is(":hidden") && $("#show_photocromie").is(":hidden") )){
                                     $("#show_diametre").show();
                                     $("#diametre_droit").css('height','');
                                     }
                                     }*/
                                }
                            });
                    }
                });
            }

            function setSelect(id){
                $("#"+id).find('select').each(function(){
                    var $el = $(this);

                    $el.chosen({
                        disable_search_threshold: $el.hasClass('search') ? 0 : Number.MAX_VALUE,
                        allow_single_deselect: true,
                        width: $el.data('width') || '100%'
                    });
                });
            }

            function styleRadio(){
                $('input:radio').not('.ready').checkbox({
                    cls : 'radiobutton',
                    empty : base_url+'static/img/elements/checkbox/empty.png'
                }).addClass('ready');
            }

            $("input[id^=type_commande_verre_]").click(function(){

                type_commande_verre = $(this).val();

                $('input[id=origine_commande]').val($(this).val());

                $("#reference_client,#numero_magasin").show();

                if(type_commande_verre == 1){
                    $("#precalibrage").show();
                    $("input[name=precalibrage_diametre]").addClass('required');
                    $("#precalibrage_oui").prop('checked', false);
                } else{
                    $("#precalibrage").hide();
                    $("input[name=precalibrage_diametre]").removeClass('required');
                    $("#precalibrage_oui").prop('checked', true);
                }

                if(type_commande_verre == 2){
                    $("#type_commande_1").prop('checked');
                    $("#verre").empty().append('<input type="hidden" id="id_verre" name="id_verre" value="" class="required" />');
                    $("#commande_type").show();
                }else{
                    $("#commande_type,#show_diametre,#show_diametre_gauche,#show_traitement,#show_photocromie,#show_teinte,#show_nom_verre,#show_nom_verre_gauche,#show_commande_multiple").hide();
                }

                $$.utils.forms.resize();

                $.ajax({
                    type: "POST",
                    url: "/admin/ajax_type_verre/"+type_commande_verre,
                    dataType:"html",
                    success: function(data){
                        if(data == "redirect")
                            window.location.reload();
                        else{
                            $("#type_verre").empty().append(data);
                            styleRadio();
                        }
                    }
                });
            });

            $("input[name=precalibrage_diametre]").click(function(){
                precalibrage = $(this).val();

                $("#commande_type").show();
                $("#typecommande").css('height','');
                if(precalibrage == "oui"){
                    $("#calibrage_select_oui").show();
                    $("#calibrage_select_non").hide();
                    $("input[name=diametre_verre]").removeClass('required');
                    $("#cotea,#coteb,#cotec,#coted,select[name=type_monture],#epaisseur_bord_verre,#calibre_selected").addClass('required');
                } else{
                    $("#calibrage_select_oui").hide();
                    $("#calibrage_select_non").show();

                    $("input[name=diametre_verre]").addClass('required');
                    $("#cotea,#coteb,#cotec,#coted,select[name=type_monture],#epaisseur_bord_verre,#calibre_selected").removeClass('required');
                }
            });

            $("#wiz_etape3").on("change","input[name=id_type_generation_verre]",function(){
                if($(this).is(':checked')){
                    var value = $(this).val();

                    $(this).attr('checked',true);
                    $("#show_indice_verre,#show_correction_droit,#show_correction_gauche,#show_hep,#show_option,#show_prisme,#show_verre,#show_commentaire").hide();

                    $("#wiz_etape4 div[id^=choice_]").hide();
                    $("#choice_"+value).show();
                    $("div[id^=choice_]").empty();
                    $.ajax({
                        type: "POST",
                        url: "/admin/getGenerationVerre/<?php echo $user_info[0]->id_users; ?>",
                        data : "id_type_generation_verre="+value,
                        dataType:"html",
                        beforeSend: function(){
                            $("#choice_"+value).append(loading);
                        },
                        success: function(data){
                            $("#choice_"+value).empty().append(data);
                            $("#indice_verre").empty();
                            styleRadio();
                            evenementGammeVerre();
                        },
                        error: function(){
                            $("#choice_"+value).empty().append("Une erreur est survenue");
                        }
                    });
                }
            });

            $("#wiz_etape4").on("change","input[name=miroir]:radio",function(){
                if($(this).val()!=0){
                    $('#id_verre option:contains("Gris C")').not(':contains("Gris C dégradé")').not(':contains("Gris C HMC")').not(':contains("Gris C Satin")').addClass('no_hidden');
                    $('#id_verre option:contains("Brun C")').not(':contains("Brun C dégradé")').not(':contains("Brun C HMC")').not(':contains("Brun C Satin")').addClass('no_hidden');
                    $('#id_verre option:contains("Black C")').not(':contains("Black C dégradé")').not(':contains("Black C HMC")').not(':contains("Black C Satin")').addClass('no_hidden');
                    $('#id_verre option:contains("G15 C")').not(':contains("G15 C dégradé")').not(':contains("G15 C HMC")').not(':contains("G15 C Satin")').addClass('no_hidden');

                    $('#id_verre option:not(.no_hidden)').hide();
                }else{
                    $('#id_verre option').removeClass('no_hidden');
                    $('#id_verre option').show();
                }

                $("#id_verre").val("").trigger("liszt:updated");
            });

            $("#wiz_etape4").on("change","select[id^=addition_]",function(){
                var cote = $(this).attr('id').split('_')[1];

                if(cote == "droit")
                    cote = "gauche";
                else
                    cote = "droit";

                $("#addition_"+cote).val($(this).val()).trigger("liszt:updated");
            });


            $("#wiz_etape4").on("change","input[name=only_gauche], input[name=only_droit], input[name=photocromie]:radio,input[name=traitement]:radio,input[name=teinte]:radio,input[name=diametre]:radio,input[name=diametre_gauche]:radio,select[name=nb_multi_commande],input[name=multi_commande],input[name=miroir_stock],input[name=polarise]",function(){
                if(type_commande_verre == 2){
                    var traitement = $("input[name=traitement]:checked"),
                        indice_verre = $("input[name=id_indice_verre]:checked"),
                        diametre = $("input[name=diametre]:checked"),
                        diametre_gauche = $("input[name=diametre_gauche]:checked"),
                        teinte = $("input[name=teinte]:checked"),
                        photocromie = $("input[name=photocromie]:checked");
                    id_generation_verre = $("input[name=id_generation_verre]:checked");

                    var id_generation_verre_value = id_generation_verre.val();


                    if(($(this).attr('name') == 'only_gauche' || $(this).attr('name') == 'only_droit') || ($(this).attr('id') !== undefined && $(this).attr('id').indexOf('diametre') != -1)){
                        var cote = "", diam = diametre.val();
                        if($(this).attr('id') !== undefined && $(this).attr('id').indexOf('gauche') != -1){
                            cote= "_gauche";
                            diam = diametre_gauche.val();
                        }

                        $.ajax({
                            type: "POST",
                            url: "/admin/checkVerreStock/<?php echo $user_info[0]->id_users; ?>",
                            data : "id_indice_verre="+indice_verre.val()+"&id_generation_verre="+id_generation_verre_value+"&teinte="+teinte.val()+"&traitement="+traitement.val()+"&photocromie="+photocromie.val()+"&diametre="+diam+"&couleur_photocromie_transition="+$("input[name=couleur_photocromie_transition]:checked").val()+"&miroir="+$("input[name=miroir_stock]:checked").val()+"&polarise="+$("input[name=polarise]:checked").val(),
                            dataType:"json",
                            success: function(data){
                                if(typeof data.disconnect != "undefined" && data.disconnect == true){
                                    window.location.reload();
                                }else{
                                    $("#show_nom_verre"+cote).show();

                                    $("#nom_verre"+cote).css('height', '');

                                    if(type_commande_verre == 1){
                                        $("#show_commande_multiple").show();
                                        $("#commande_multiple").css('height', '');
                                    }

                                    $("#nom_verre"+cote).find('p').html(data.intutile).css('text-align','left');

                                    if(cote == ""){
                                        $("#id_verre").val(data.id_verre);
                                        $("#id_verre").removeAttr('required');
                                    } else {
                                        $("#id_verre_gauche").val(data.id_verre);
                                        $("#id_verre_gauche").removeAttr('required');
                                    }

                                    if(type_commande_verre == 2) {

                                        var option_price = 0;
                                        var total_price = 0;

                                        $("#id_verre").val(data.id_verre);

                                        if($('input[name=type_commande]:checked').val() > 1) {

                                            $.ajax({
                                                type: "POST",
                                                url: "/admin/getPrixVerre/<?php echo $user_info[0]->id_users; ?>",
                                                data: {'id': data.id_verre},
                                                dataType: "html",
                                                success: function (data) {

                                                    $.ajax({
                                                        type: "POST",
                                                        url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
                                                        beforeSend: function () {
                                                            $("#loading-overlay,#loading").show();
                                                        },
                                                        success: function (credit) {

                                                            if (credit != "" && credit == "not_logged") {
                                                                window.location.reload();
                                                            }

                                                            if (($("input[name=diametre_gauche]:radio").is(':checked') && $("input[name=diametre]:radio").is(':checked')) || ($("input[name=diametre_gauche]:radio").is(':checked') && $("input[name=only_gauche]").is(':checked')) || ($("input[name=diametre]:radio").is(':checked') && $("input[name=only_droit]:radio").is(':checked'))) {

                                                                if ($("input[name=only_gauche]").is(':checked') || $("input[name=only_droit]").is(':checked')) {
                                                                    total_price += parseFloat(data);
                                                                }
                                                                else {
                                                                    total_price += parseFloat(data * 2);
                                                                }

                                                            }


                                                            $('.credit_casse').text(credit);
                                                            $('.total_commande').text(total_price);

                                                            var diff = credit - total_price;

                                                            if (diff < 0) {
                                                                $('.limite_commande').fadeIn(60);
                                                                $('.right .button.grey').addClass('disabled');
                                                            }
                                                            else {
                                                                $('.limite_commande').fadeOut(60);
                                                                $('.right .button.grey').removeClass('disabled');
                                                            }


                                                            $("#loading-overlay,#loading").hide();
                                                        },
                                                    });

                                                },
                                            });

                                        }


                                    }
                                    $("#show_commentaire").show();

                                    $("#commentaire").css('height', '');
                                }
                            }
                        });
                    } else {
                        if($(this).attr('name') == "traitement" || $(this).attr('name') == "teinte" || $(this).attr('name') == "photocromie" || $(this).attr('name') == "polarise" || $(this).attr('name') == "miroir_stock"){
                            $("#show_commande_multiple").hide();
                            $("#multi_commande_non,#multi_commande_oui").prop('checked',false);
                        }

                        if($(this).attr('name') == "traitement" || $(this).attr('name') == "teinte"){
                            tabCurrentGroupeDiametre = [];
                        }

                        if($(this).attr('id').indexOf('diametre') == -1 ){
                            if($(this).attr('name') == 'traitement' || $(this).attr('name') == 'teinte' || $(this).attr('name') == 'photocromie'){
                                diametre.removeAttr('checked');
                                diametre_gauche.removeAttr('checked');
                            }

                            $("div[class^=groupe],#show_diametre,#show_diametre_gauche,#show_nom_verre,#show_nom_verre_gauche,#show_correction_droit,#show_correction_gauche,#show_commentaire").hide();

                            if(id_generation_verre.val() == 12 && indice_verre.val() == 1){
                                $("#show_teinte").show();
                                $("#teinte").css('height', '');
                                $("#teinte_no").parent().hide();
                            } else if(indice_verre.val() == 1 && traitement.val() == "Blanc"){
                                $("#teinte_no").prop('checked','checked');
                                teinte = $("input[name=teinte]:checked");
                            } else{
                                teinte.removeAttr('checked');
                                $("#show_teinte").hide();
                            }

                            if(id_generation_verre.val() == 15 && ((indice_verre.val() == 1 && (traitement.val() == "HMC" || traitement.val() == "BlueCoat")) || (indice_verre.val() == 4 && traitement.val() == "HMC"))){
                                $("#show_photocromie").show();
                                $("#photocromie").css('height', '');

                                if(traitement.val() == "BlueCoat")
                                    $(".show_transition_PhotoBrown").hide();
                                else
                                    $(".show_transition_PhotoBrown").show();

                                $(".show_non_photocromique").hide();

                            }else if(id_generation_verre.val() != 15) {
                                photocromie.removeAttr('checked');
                                $("#photocromie_no").prop('checked','checked');
                                $("#show_photocromie").hide();
                            }

                            if(id_generation_verre.val() == 14 && traitement.val() == "Blanc" && teinte.val() == "Non Teinté" && $("#show_miroir_stock").is(":hidden")){
                                $("#show_miroir_stock").show();
                                $("#miroir_stock").css('height', '');
                                $("#aucune_option").parent().hide();
                                $("#aucune_option").prop('checked','');
                                return false;
                            } else if(id_generation_verre.val() != 14) {
                                $("#aucune_option").prop('checked','checked');
                                $("#show_miroir_stock").hide();
                            }

                            if(id_generation_verre.val() == 13 && traitement.val() == "Blanc" && teinte.val() == "Non Teinté" && $("input[name=miroir_stock]:checked").val() == 0 && $("#show_polarisation").is(":hidden")){
                                $("#show_polarisation").show();
                                $("#polarisation").css('height', '');
                                $("#no_polarise").parent().hide();
                                $("#no_polarise").prop('checked','');
                                return false;
                            } else if(id_generation_verre.val() != 13) {
                                $("#no_polarise").prop('checked','checked');
                                $("#show_polarisation").hide();
                            }

                            if( ($("#show_photocromie").is(":hidden") && $("#show_teinte").is(":hidden")) || ($("#show_photocromie").is(":visible") && photocromie.length != 0) || ($("#show_teinte").is(":visible") && teinte.length != 0)){
                                if(type_commande_verre == 2 && $("input[name=type_commande]:checked").val() == 1){
                                    $("#show_commande_multiple").show();
                                    $("#multi_commande").css('height', '');
                                }
                            } else {
                                $("#show_commande_multiple").hide();
                            }
                        }

                        if( $("input[name=type_commande]:checked").val() != 1){
                            $("#multi_commande_non").prop('checked', true).trigger("liszt:updated");
                        }

                        if($("input[name=multi_commande]:checked").length != 0 && currentChoixMultiCommande != $("input[name=multi_commande]:checked").val()){
                            currentChoixMultiCommande = $("input[name=multi_commande]:checked").val();
                            $("#sphere_droit,#cylindre_droit,#cylindre_gauche,#sphere_gauche").val('').trigger("liszt:updated");
                        }

                        if( $("input[name=multi_commande]:checked").length != 0 && $("input[name=multi_commande]:checked").val() == "Non")
                            $("#nb_multi_commande").val('').trigger("liszt:updated");


                        if( $("input[name=multi_commande]:checked").length != 0 ){
                            $("#sphere_droit,#sphere_gauche,#cylindre_gauche,#cylindre_droit").val(0).trigger("liszt:updated").trigger("change");
                        }

                        EvenementCorrectionVerre('droit');
                        EvenementCorrectionVerre('gauche');

                        $("radio[id^=diametre_]").removeAttr('checked');

                        if( ($("input[name=multi_commande]:checked").length != 0 && ($("input[name=multi_commande]:checked").val() == "Non" || ($("input[name=multi_commande]:checked").val() == "Oui" && $("#nb_multi_commande").val() != "") )) ){
                            if( ($("#show_teinte").is(":visible") && $("input[name=teinte]:checked").length != 0) || ($("#show_photocromie").is(":visible") && $("input[name=photocromie]:checked").length != 0) || ($("#show_teinte").is(":hidden") && $("#show_photocromie").is(":hidden") )){
                                $("#show_correction_droit,#show_correction_gauche").show();
                                if(traitement.val() != "Blanc" || teinte.length != 0){

                                    if( ($("#show_photocromie").is(":visible") && photocromie.length != 0) || $("#show_photocromie").is(":not(:visible)")){
                                        if((indice_verre.val() == 1 && ((traitement.val() == "Blanc" && teinte.val() == "Non Teinté") || (traitement.val() == "HMC" && photocromie.val() == "Non Photocromique") || traitement.val() == "Durci"))){
                                            $(".groupe1").show();
                                            tabCurrentGroupeDiametre.push('groupe1');
                                        }

                                        if(indice_verre.val() == 1 && traitement.val() == "Blanc" && teinte.val() != "Non Teinté"){
                                            $(".groupe2").show();
                                            tabCurrentGroupeDiametre.push('groupe2');
                                        }

                                        if((indice_verre.val() == 8 && (traitement.val() == "Durci" || traitement.val() == "HMC")) || (indice_verre.val() == 1 && ( (traitement.val() == "HMC" && photocromie.val() != "Non Photocromique") || (traitement.val() == "BlueCoat" && photocromie.val() != "Non Photocromique") ))){
                                            $(".groupe3").show();
                                            tabCurrentGroupeDiametre.push('groupe3');
                                        }

                                        if((indice_verre.val() == 4 && (traitement.val() == "Durci" || traitement.val() == "Satin")) || (indice_verre.val() == 5 && traitement.val() == "Satin")){
                                            $(".groupe4").show();
                                            tabCurrentGroupeDiametre.push('groupe4');
                                        }

                                        if(((indice_verre.val() == 1 || indice_verre.val() == 4 || indice_verre.val() == 5) && traitement.val() == "BlueCoat") || (indice_verre.val() == 6 && traitement.val() == "Satin")){
                                            $(".groupe5").show();
                                            tabCurrentGroupeDiametre.push('groupe5');
                                        }

                                        if(indice_verre.val() == 1 && traitement.val() == "Satin"){
                                            $(".groupe2,.groupe5").show();
                                            tabCurrentGroupeDiametre.push('groupe2');
                                            tabCurrentGroupeDiametre.push('groupe5');
                                        }

                                        if(indice_verre.val() == 4 && traitement.val() == "HMC"){
                                            $(".groupe6").show();
                                            tabCurrentGroupeDiametre.push('groupe6');
                                        }
                                    }
                                }

                                $$.utils.forms.resize();
                            }
                        }
                    }
                }
            });

            $("#wiz_etape4").on("change","#sphere_droit,#sphere_gauche",function(){
                if(type_commande_verre == 2)
                    EvenementCorrectionVerre($(this).attr('id').split('_')[1],$(this).val());
            });

            $("#wiz_etape4").on("change","input[name=multi_commande]",function(){
                if($(this).val() == "Oui"){
                    $("#multi_commande_oui_message").show();
                } else {
                    $("#multi_commande_oui_message").hide();
                }
            });

            $("#wiz_etape4").on("change","#sphere_gauche,#cylindre_gauche",function() {

                var id_generation_verre_value = $("input[name=id_generation_verre]:checked").val();

                if(type_commande_verre == 2)
                    $.ajax({
                        type: "POST",
                        url: "/admin/getDiametre",
                        data : "cylindre="+$("#cylindre_gauche").val()+"&sphere="+$("#sphere_gauche").val()+"&id_indice_verre="+$("input[name=id_indice_verre]:checked").val()+"&id_generation_verre="+id_generation_verre_value+"&type_commande_verre="+type_commande_verre+"&teinte="+$("input[name=teinte]:checked").val()+"&traitement="+$("input[name=traitement]:checked").val()+"&photocromie="+$("input[name=photocromie]:checked").val(),
                        dataType:"json",
                        success: function(data){
                            $("#diametre_gauche input[id^=diametre_gauche_]").parent().hide();

                            if(data.length != 0){
                                $("#show_diametre_gauche,#show_diametre_non_dispo_gauche").hide();

                                if(!$("input[name=only_droit]").is(':checked'))
                                    $("#show_diametre_gauche input[id^=diametre_gauche_]").addClass('required');

                                for(var key in data){
                                    //for(var key2 in tabCurrentGroupeDiametre){
                                    //if($("#show_diametre_gauche #diametre_gauche_"+data[key]).parent().hasClass(tabCurrentGroupeDiametre[key2])){
                                    $("#show_diametre_gauche #diametre_gauche_"+data[key]).parent().show();
                                    //}
                                    //}
                                }
                            } else {
                                $("#show_diametre_gauche,#show_diametre_non_dispo_gauche").show();
                                $("#show_diametre_gauche input[id^=diametre_gauche_]").removeClass('required');
                            }

                            if( $("#sphere_gauche").val() != "" &&  $("#cylindre_gauche").val() != "" && ($("input[name=multi_commande]:checked").val() != "Oui" || $("#nb_multi_commande").val() != "")){
                                if( ($("#show_teinte").is(":visible") && $("input[name=teinte]:checked").length != 0) || ($("#show_photocromie").is(":visible") && $("input[name=photocromie]:checked").length != 0) || ($("#show_teinte").is(":hidden") && $("#show_photocromie").is(":hidden") )){
                                    $("#show_diametre_gauche").show();
                                    $("#diametre_gauche").css('height','');
                                }
                            }
                        }
                    });
            });

            $("#wiz_etape4").on("change","#sphere_droit,#cylindre_droit",function(){

                var id_generation_verre_value = $("input[name=id_generation_verre]:checked").val();

                if(type_commande_verre == 2)
                    $.ajax({
                        type: "POST",
                        url: "/admin/getDiametre",
                        data : "cylindre="+$("#cylindre_droit").val()+"&sphere="+$("#sphere_droit").val()+"&id_indice_verre="+$("input[name=id_indice_verre]:checked").val()+"&id_generation_verre="+id_generation_verre_value+"&type_commande_verre="+type_commande_verre+"&teinte="+$("input[name=teinte]:checked").val()+"&traitement="+$("input[name=traitement]:checked").val()+"&photocromie="+$("input[name=photocromie]:checked").val(),
                        dataType:"json",
                        success: function(data){
                            $("#diametre_droit input[id^=diametre_]").parent().hide();

                            if(data.length != 0){
                                $("#show_diametre,#show_diametre_non_dispo_droit").hide();

                                if(!$("input[name=only_gauche]").is(':checked'))
                                    $("#show_diametre input[id^=diametre_]").addClass('required');

                                for(var key in data){
                                    //for(var key2 in tabCurrentGroupeDiametre){
                                    //if($("#diametre_"+data[key]).parent().hasClass(tabCurrentGroupeDiametre[key2])){
                                    $("#diametre_"+data[key]).parent().show();
                                    //}
                                    //}
                                }
                            } else {
                                $("#show_diametre,#show_diametre_non_dispo_droit").show();
                                $("#show_diametre input[id^=diametre_]").removeClass('required');
                            }

                            if( $("#sphere_droit").val() != "" &&  $("#cylindre_droit").val() != "" && ($("input[name=multi_commande]:checked").val() != "Oui" || $("#nb_multi_commande").val() != "")){
                                if( ($("#show_teinte").is(":visible") && $("input[name=teinte]:checked").length != 0) || ($("#show_photocromie").is(":visible") && $("input[name=photocromie]:checked").length != 0) || ($("#show_teinte").is(":hidden") && $("#show_photocromie").is(":hidden") )){
                                    $("#show_diametre").show();
                                    $("#diametre_droit").css('height','');
                                }
                            }
                        }
                    });

            });
        </script>

    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>