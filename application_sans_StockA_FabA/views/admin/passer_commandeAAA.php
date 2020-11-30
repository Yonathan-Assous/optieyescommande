<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12 m-b-10">
                        <h4 class="page-title">Passer une commande pour le magasin <?php echo $user_info[0]->id_users; ?></h4>
                    </div>
                </div>


                <div class="row">


                    <div class="col-sm-12">

                    <?php
                    if($user_info[0]->commande_suspendue == 1){

                            echo '<div class="card-box clearfix">
								<h4 class="header-title m-t-0 m-b-5">Commandes suspendues</h4>
								<p class="m-b-30"><strong>Attention !</strong> La partie commande vous a été restreinte jusqu\'à la régularisation de votre compte. Contactez-nous pour de plus amples informations.</p>
							</div>';

                        }

                        else { ?>


                            <div class="card-box card-tabs clearfix">

                                <p class="type_commande">Choisissez le type de commande que vous désirez passer</p>

                                <ul class="nav nav-pills type_commande_verre">
                                    <li class="">
                                        <a href="#verre-fabric" data-toggle="tab" aria-expanded="true" rel="1">Verres de fabrication</a>
                                    </li>
                                    <li class="">
                                        <a href="#verre-stock" data-toggle="tab" aria-expanded="false" rel="2">Verres de stock</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div id="verre-fabric" class="tab-pane fade in hidden">
                                        <div class="row">
                                            <div class="col-md-12 order-form-container">

                                                <form id="commandeForm" method="get" action="" class="form-commande form-horizontal">

                                                    <input type="hidden" name="type_commande_verre" value="1" />
                                                    <input type="hidden" name="origine_commande" id="origine_commande" value="1" />
                                                    <input type="hidden" name="nb_multi_commande" value="" />

                                                    <div id="fabricwizard" class="pull-in">
                                                        <ul>
                                                            <li><a href="#step_1" data-toggle="tab"><span>Etape 1 <b>/ 6</b></span><i>Commande</i></a></li>
                                                            <li><a href="#step_2" data-toggle="tab"><span>Etape 2 <b>/ 6</b></span><i>Calibrage</i></a></li>
                                                            <li><a href="#step_3" data-toggle="tab"><span>Etape 3 <b>/ 6</b></span><i>Verres</i></a></li>
                                                            <li><a href="#step_4" data-toggle="tab"><span>Etape 4 <b>/ 6</b></span><i>Corrections</i></a></li>
                                                            <li><a href="#step_5" data-toggle="tab"><span>Etape 5 <b>/ 6</b></span><i>Certificat</i></a></li>
                                                            <li><a href="#last_step" data-toggle="tab"><span>Etape 6 <b>/ 6</b></span><i>Récapitulatif</i></a></li>
                                                        </ul>

                                                        <div class="tab-content m-b-0 b-0">

                                                            <div class="tab-pane m-t-10 fade" id="step_1">

                                                                <div class="row">

                                                                    <div class="form-group rd-180 clearfix">
                                                                        <label class="col-lg-2 control-label">Précalibrage</label>
                                                                        <div id="type_commande_error" class="col-lg-10">

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" id="precal_oui" value="oui" name="precalibrage_diametre" class="required">
                                                                                <label for="precal_oui"> Oui (Gratuit) </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" id="precal_non" value="non" name="precalibrage_diametre" class="required">
                                                                                <label for="precal_non"> Non </label>
                                                                            </div>

                                                                            <div class="validator"></div>

                                                                        </div>

                                                                        <div class="row_error"></div>

                                                                    </div>


                                                                    <div class="form-group rd-180 clearfix">
                                                                        <label class="col-lg-2 control-label">Type de commande</label>
                                                                        <div class="col-lg-10">

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" id="type_commande_1" value="1" name="type_commande" class="required">
                                                                                <label for="type_commande_1"> Commande ferme </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" id="type_commande_2" value="2" name="type_commande" class="required">
                                                                                <label for="type_commande_2"> Casse atelier </label>

                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" id="type_commande_3" value="3" name="type_commande" class="required">
                                                                                <label for="type_commande_3"> Erreur ophtalmologiste </label>
                                                                            </div>

                                                                            <div class="ec_commande_status">
                                                                                <div class="alert"></div>
                                                                            </div>

                                                                            <div class="validator"></div>

                                                                        </div>

                                                                        <div class="row_error"></div>

                                                                    </div>


                                                                    <div class="form-group clearfix ancienne_commande_ref">
                                                                        <label class="col-lg-2 control-label" for="reference_client">Référence commande remplacée</label>
                                                                        <div class="col-lg-10">
                                                                            <div class="commandes_list">
                                                                                <select name="ancienne_commande" id="ancienne_commande" class="form-control select-search">
                                                                                    <option>Sélectionner</option>
                                                                                    <?php echo $id_commandes; ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label" for="reference_client">Référence client</label>
                                                                        <div class="col-lg-10">
                                                                            <input id="reference_client" name="reference_client" type="text" class="required form-control">
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="tab-pane m-t-10 fade" id="step_2">

                                                                <div id="precalibrage_oui">

                                                                    <div class="form-group clearfix">

                                                                        <div class="group-title"><span>Cliquez sur le calibre qui correspond le plus à votre commande.</span></div>

                                                                        <div class="col-lg-8 col-lg-offset-2 col-sm-12">

                                                                            <?php
                                                                            $directory = $this->config->item('directory_img_calibre');
                                                                            if ($handle = opendir($directory)) {

                                                                                while (false !== ($image = readdir($handle))) {
                                                                                    if(is_file($directory."/".$image)){

                                                                                        list($img,$extension) = explode(".",$image);
                                                                                        echo '<img src="'.$pre_url.$directory."/".$image.'" alt="'.$img.'" height="70" width="100" style="margin:15px" class="calibre"/>';

                                                                                    }
                                                                                }

                                                                                echo '<div class="validator"></div>';


                                                                                closedir($handle);
                                                                            }
                                                                            ?>

                                                                        </div>

                                                                        <input type="text" value="" id="calibre_selected"  name="calibre" class="form-control required" />


                                                                    </div>

                                                                    <div class="group-title"><span><b>Mesures FREEFORM.</b> Toutes les mesures ci-dessous doivent être remplies en millimètre.</span></div>



                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="cotea">
                                                                            <img src="/static/img/mesure_freeform/cote_a.jpg" alt="Largeur boxing" />
                                                                            <small>Largeur boxing</small>
                                                                        </label>
                                                                        <div class="col-lg-10 col-sm-10 col-xs-9">
                                                                            <input id="cotea" name="cotea" type="text" pattern="^(\d{1,2}(\.|\,)?\d{1}?)|(\d{1,2})$" class="form-control">
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>
 
                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="coteb">
                                                                            <img src="/static/img/mesure_freeform/cote_b.jpg" alt="Hauteur boxing" />
                                                                            <small>Hauteur boxing</small>
                                                                        </label>
                                                                        <div class="col-lg-10 col-sm-10 col-xs-9">
                                                                            <input id="coteb" name="coteb" type="text" pattern="^(\d{1,2}(\.|\,)?\d{1}?)|(\d{1,2})$" class="form-control">
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="cotec">
                                                                            <img src="/static/img/mesure_freeform/cote_c.jpg" alt="Taille du pont" />
                                                                            <small>Taille du pont</small>
                                                                        </label>
                                                                        <div class="col-lg-10 col-sm-10 col-xs-9">
                                                                            <input id="cotec" name="cotec" type="text" pattern="^(\d{1,2}(\.|\,)?\d{1}?)|(\d{1,2})$" class="form-control">
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 col-sm-2 col-xs-3 control-label" for="coted">
                                                                            <img src="/static/img/mesure_freeform/cote_d.jpg" alt="Digonale verre en mm" />
                                                                            <small>Digonale verre en mm</small>
                                                                        </label>
                                                                        <div class="col-lg-10 col-sm-10 col-xs-9">
                                                                            <input id="coted" name="coted" type="text" pattern="^(\d{1,2}(\.|\,)?\d{1}?)|(\d{1,2})$" class="form-control">
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2control-label" for="type_monture">Type de monture</label>
                                                                        <div class="col-lg-10">
                                                                            <select name="type_monture" class="form-control required">
                                                                                <option value="">Sélectionner un type</option>
                                                                                <option value="Plastique">Plastique</option>
                                                                                <option value="Optyl">Optyl</option>
                                                                                <option value="Metal">Métal</option>
                                                                                <option value="Nylor">Nylor</option>
                                                                                <option value="Percee">Percée</option>
                                                                            </select>
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label" for="epaisseur_bord_verre">Epaisseur minimum au bord du verre</label>
                                                                        <div class="col-lg-10">
                                                                            <input id="epaisseur_bord_verre" name="epaisseur_bord_verre" type="text" class="form-control" pattern="^(\d{1,2}(\.|\,)?\d{1}?)|(\d{1,2})$" placeholder="A remplir en millimètre par pas de 0,1 mm" />
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div id="precalibrage_non">

                                                                    <div class="form-group rd-100 clearfix">
                                                                        <label class="col-lg-2 control-label">Diamètre du verre</label>
                                                                        <div class="col-lg-10">

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" value="50/55" id="diametre_verre_50_55" name="diametre_verre">
                                                                                <label for="diametre_verre_50_55">50/55</label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" value="55/60" id="diametre_verre_55_60" name="diametre_verre">
                                                                                <label for="diametre_verre_55_60">55/60</label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" value="60/65" id="diametre_verre_60_65" name="diametre_verre">
                                                                                <label for="diametre_verre_60_65">60/65</label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" value="65/70" id="diametre_verre_65_70" name="diametre_verre">
                                                                                <label for="diametre_verre_65_70">65/70</label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" value="70/75" id="diametre_verre_70_75" name="diametre_verre">
                                                                                <label for="diametre_verre_70_75">70/75</label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline">
                                                                                <input type="radio" value="75/80" id="diametre_verre_75_80" name="diametre_verre">
                                                                                <label for="diametre_verre_75_80">75/80</label>
                                                                            </div>

                                                                            <div class="validator"></div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="tab-pane m-t-10 fade" id="step_3">

                                                                <div class="form-group clearfix">
                                                                    <label class="col-lg-2 control-label">Type de verre</label>
                                                                    <div class="col-lg-10" id="type_verre"></div>
                                                                </div>

                                                            </div>

                                                            <div class="tab-pane m-t-10 fade" id="step_4">

                                                                <div class="form-group clearfix">
                                                                    <label class="col-lg-2 control-label">Génération verre</label>

                                                                    <div class="col-lg-10">
                                                                        <div class="generation_verre" id="choice_1"></div>
                                                                        <div class="generation_verre" id="choice_2"></div>
                                                                        <div class="generation_verre" id="choice_3"></div>
                                                                        <div class="generation_verre" id="choice_4"></div>
                                                                        <div class="generation_verre" id="choice_5"></div>
                                                                        <div class="generation_verre" id="choice_6"></div>
                                                                        <div class="generation_verre" id="choice_7"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group indices rd-180 clearfix">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Indice du verre</label>
                                                                    <div class="col-lg-10">
                                                                        <div id="indice_verre"></div>
                                                                        <div class="validator"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group corrections clearfix" id="droit">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Correction oeil droit</label>
                                                                    <div class="col-lg-10">
                                                                        <div class="grille clearfix"></div>
                                                                        <div class="cote">
                                                                            <input type="checkbox" value="1" name="only_droit" id="only_droit" /> <label class="control-label" for="only_droit">Cochez ici si vous désirez uniquement commander le verre droit</label>
                                                                        </div>
                                                                        <div class="validator"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group corrections clearfix" id="gauche">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Correction oeil gauche</label>
                                                                    <div class="col-lg-10">
                                                                        <div class="grille clearfix"></div>
                                                                        <div class="cote">
                                                                            <input type="checkbox" value="1" name="only_gauche" id="only_gauche" /> <label class="control-label" for="only_gauche">Cochez ici si vous désirez uniquement commander le verre gauche</label>
                                                                        </div>
                                                                        <div class="validator"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group pupilles clearfix">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Hauteur et écarts pupillaires</label>
                                                                    <div class="col-lg-10">

                                                                        <div class="col-lg-6 col-sm-6">

                                                                            <img alt="Hauteur" class="hep-image" src="/static/img/mesure_freeform/Hauteur.jpg" style="margin-bottom: 18px">

                                                                            <div class="clearfix">
                                                                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                    <label>Oeil droit</label>
                                                                                    <input type="text" name="hauteur" value="" class="form-control required decimal" pattern="^\d{1,2}\.?\d{1}$">
                                                                                </div>
                                                                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                    <label>Oeil gauche</label>
                                                                                    <input type="text" name="hauteur_gauche" value="" class="form-control required decimal" pattern="^\d{1,2}\.?\d{1}$">
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="col-lg-6 col-sm-6">

                                                                            <img alt="Ecart pupillaire" class="hep-image" src="/static/img/mesure_freeform/ecart_pup.jpg">

                                                                            <div class="clearfix">
                                                                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                    <label>Oeil droit</label>
                                                                                    <input type="text" name="ecart_puppillaire_droit" value="" class="form-control required decimal" pattern="^\d{1,2}\.?\d{1}$">
                                                                                </div>
                                                                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                    <label>Oeil gauche</label>
                                                                                    <input type="text" name="ecart_puppillaire_gauche" value="" class="form-control required decimal" pattern="^\d{1,2}\.?\d{1}$">
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="validator"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group options clearfix rd-100">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Options</label>
                                                                    <div class="col-lg-10">

                                                                        <div class="options_header" data-toggle="collapse" href="#orderOptions" aria-expanded="false" aria-controls="orderOptions">
                                                                            <h4 class="header-title m-b-10">Voir les options</h4>
                                                                        </div>

                                                                        <div class="options_content panel-collapse collapse m-t-20" aria-expanded="false" id="orderOptions">

                                                                            <div class="row">

                                                                                <div class="col-lg-3">
                                                                                    <label for="galbe"><b>Galbe / Base</b><br />Entre 4 et 10 (facultatif)</label>
                                                                                    <input type="text" name="galbe" id="galbe" value="" pattern="^([4-9]|1[0])$" class="form-control">
                                                                                </div>

                                                                                <div class="col-lg-9">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-4">
                                                                                            <label for="galbe"><b>Angle pantoscopique</b><br />(facultatif)</label>
                                                                                            <input type="text" name="angle_pantoscopique" id="angle_pantoscopique" value="" placeholder="En degrès" pattern="^\d{1,3}\.?\d{0,2}$" class="opt_pre form-control">
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <label for="galbe"><b>Angle de galbe</b><br />(facultatif)</label>
                                                                                            <input type="text" name="angle_galbe" id="angle_galbe" value="" placeholder="En degrès" pattern="^\d{1,3}\.?\d{0,2}$" class="opt_pre form-control">
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <label for="galbe"><b>Distance verre oeil</b><br />Entre 1 et 30 (facultatif)</label>
                                                                                            <input type="text" name="distance_verre_oeil" id="distance_verre_oeil" value="" placeholder="En degrès" pattern="^([1-9]|[1-2][0-9]|3[0])$" class="opt_pre form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">

                                                                                    <label class="control-label miroir"><b>Miroir (Facultatif)</b><br />6 € par verre<br />Miroir en HMC face interne inclus dans ce tarif</label>

                                                                                    <div class="radio radio-warning radio-inline">
                                                                                        <input type="radio" id="aucune_option" value="0" name="miroir" class="required" checked>
                                                                                        <label for="aucune_option"> Sans </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning radio-inline">
                                                                                        <input type="radio" id="miroir_bleu" value="1" name="miroir" class="required">
                                                                                        <label for="miroir_bleu"> Bleu </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning radio-inline">
                                                                                        <input type="radio" id="miroir_dore" value="2" name="miroir" class="required">
                                                                                        <label for="miroir_dore"> Doré </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning radio-inline">
                                                                                        <input type="radio" id="miroir_vert" value="3" name="miroir" class="required">
                                                                                        <label for="miroir_vert"> Vert </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning radio-inline">
                                                                                        <input type="radio" id="miroir_rouge" value="4" name="miroir" class="required">
                                                                                        <label for="miroir_rouge"> Rouge </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning radio-inline">
                                                                                        <input type="radio" id="miroir_argent" value="5" name="miroir" class="required">
                                                                                        <label for="miroir_argent"> Argent </label>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <div class="validator"></div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group prismes clearfix">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Prismes</label>
                                                                    <div class="col-lg-10">

                                                                        <div class="options_header" data-toggle="collapse" href="#orderPrism" aria-expanded="false" aria-controls="orderPrism">
                                                                            <h4 class="header-title m-b-10">Voir les prismes</h4>
                                                                        </div>

                                                                        <div class="options_content panel-collapse collapse m-t-20" aria-expanded="false" id="orderPrism">

                                                                            <div class="col-lg-6 col-sm-6 option_block">
                                                                                <label>Oeil droit</label>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                        <select name="dioptrie_droit" id="dioptrie_droit" class="form-control">
                                                                                            <option value="">Dioptries</option>
                                                                                            <?php
                                                                                            for($deb = 0; $deb <= 7; $deb += 0.25) {
                                                                                                echo '<option value="' . $deb . '">' . $deb . '</option>'."\n";
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                        <select name="base_droit" id="base_droit" class="form-control">
                                                                                            <option value="">Base (degrés)</option>
                                                                                            <?php
                                                                                            for($deb = 0; $deb <= 360; $deb++) {
                                                                                                echo '<option value="' . $deb . '">' . $deb . '</option>'."\n";
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 col-sm-6 option_block">
                                                                                <label>Oeil gauche</label>
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                        <select name="dioptrie_gauche" id="dioptrie_gauche" class="form-control">
                                                                                            <option value="">Dioptries</option>
                                                                                            <?php
                                                                                            for($deb = 0; $deb <= 7; $deb += 0.25) {
                                                                                                echo '<option value="' . $deb . '">' . $deb . '</option>'."\n";
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                        <select name="base_gauche" id="base_gauche" class="form-control">
                                                                                            <option value="">Base (degrés)</option>
                                                                                            <?php
                                                                                            for($deb = 0; $deb <= 360; $deb++) {
                                                                                                echo '<option value="' . $deb . '">' . $deb . '</option>'."\n";
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <div class="validator"></div>
                                                                </div>

                                                                <div class="form-group verres clearfix">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Choix des verres</label>
                                                                    <div class="col-lg-10">
                                                                        <div id="verre"></div>
                                                                        <div class="validator"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group commentaire clearfix">
                                                                    <label class="col-lg-2 control-label" for="reference_client">Commentaire (facultatif)</label>
                                                                    <div class="col-lg-10">
                                                                        <textarea name="commentaire" rows="5" class="form-control"></textarea>
                                                                        <div class="validator"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="limite_commande">
                                                                    <div class="form-group commentaire clearfix">
                                                                        <label class="col-lg-2 control-label" for="reference_client">Erreur</label>
                                                                        <div class="col-lg-10">

                                                                            <div class="limite_commande_msg">
                                                                                <p>Votre crédit casse atelier / erreur ophtalmologiste qui est de <b class="credit_casse">-</b> € ne vous permet pas de passer cette commande d'un montant de <b class="total_commande">-</b> €.</p>
                                                                                <p>Voulez vous tout de même passer cette commande en commande ferme ?</p>
                                                                                <div class="buttons">
                                                                                    <a class="btn btn-warning" id="continue_commande">Continuer en commande ferme</a>
                                                                                    <a class="btn btn-danger" id="abort_commande">Annuler</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="tab-pane m-t-10 fade" id="step_5">

                                                                <div class="row">

                                                                    <div class="form-group clearfix">
                                                                        <label class="col-lg-2 control-label">Certificat</label>
                                                                        <div id="type_commande_error" class="col-lg-10">

                                                                            <div class="radio radio-warning">
                                                                                <input type="radio" id="carte_auth_y" value="1" name="carte_auth" class="required">
                                                                                <label for="carte_auth_y"> Je souhaite un certificat d'authenticité (Gratuit) </label>
                                                                            </div>

                                                                            <div class="radio radio-warning">
                                                                                <input type="radio" id="carte_auth_n" value="0" name="carte_auth" class="required">
                                                                                <label for="carte_auth_n"> Non </label>
                                                                            </div>

                                                                            <div class="validator"></div>

                                                                        </div>

                                                                    </div>

                                                                    <div id="civilite_client" class="form-group clearfix auth_fields">
                                                                        <label class="col-lg-2 control-label">Civilité client</label>
                                                                        <div class="col-lg-10">
                                                                            <select class="form-control required" id="civiliteClient" name="civilite_client">
                                                                                <option value="0">Sélectionner..</option>
                                                                                <option value="1">Madame</option>
                                                                                <option value="2">Monsieur</option>
                                                                                <option value="3">Mademoiselle</option>
                                                                                <option value="4">Enfant</option>
                                                                            </select>
                                                                            <div class="validator"></div>
                                                                        </div>

                                                                    </div>

                                                                    <div id="nom_client" class="form-group clearfix auth_fields">
                                                                        <label class="col-lg-2 control-label">Nom du client</label>
                                                                        <div class="col-lg-10">
                                                                            <input type="text" class="form-control required" name="nom_client" id="nomClient" />
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="prenom_client" class="form-group clearfix auth_fields">
                                                                        <label class="col-lg-2 control-label">Prénom du client</label>
                                                                        <div class="col-lg-10">
                                                                            <input type="text" class="form-control required" name="prenom_client" id="prenomClient" />
                                                                            <div class="validator"></div>
                                                                        </div>
                                                                    </div>



                                                                    <div id="preview_carte" class="form-group clearfix auth_fields">
                                                                        <label class="col-lg-2 control-label">Votre carte</label>
                                                                        <div id="type_commande_error" class="col-lg-10">

                                                                            <div class="sub-auth" id="prev_auth">
                                                                                <div>

                                                                                    <?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>

                                                                                    <div class="clearfix">
                                                                                        <a id="generer_carte" class="btn btn-warning">Générer la carte d'authenticité</a>
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
                                                                                            <span class="titre"><?php echo $user_info[0]->nom_magasin; ?></span>
                                                                                            <span><?php echo $user_info[0]->adresse; ?></span>
                                                                                            <span><?php echo $user_info[0]->cp; ?> <?php echo $user_info[0]->ville; ?></span>
                                                                                            <span class="tel">Tél: <?php echo $user_info[0]->tel_fixe; ?></span>
                                                                                        </div>

                                                                                        <img class="normes" src="/static/img/logo_normes.png" />

                                                                                    </div>

                                                                                    <div id="preview_auth_img" >
                                                                                        <img src="/static/img/preview_auth_card.jpg" />
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="tab-pane m-t-10 fade" id="last_step">
                                                                <div id="recap_commande" class="invoice"></div>
                                                            </div>



                                                        </div>



                                                        <ul class="pager m-b-0 wizard">
                                                            <li class="previous"><a href="#" class="btn btn-inverse btn-lg waves-effect waves-light">Précédent</a></li>
                                                            <li class="next"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light">Suivant</a></li>
                                                            <li class="finish"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light">Valider la commande</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div id="verre-stock" class="tab-pane fade hidden">
                                        <div class="row">
                                            <div class="col-md-12 order-form-container">


                                                <form id="stockForm" method="get" action="" class="form-commande  form-horizontal">

													<input type="hidden" name="type_commande_verre" value="2" />
													<?php if($panierA == 1)
																{ ?>
													<input type="hidden" name="id_type_generation_verre" value="23" />									
													<?php
																}
															else
															{
																?>
													<input type="hidden" name="id_type_generation_verre" value="5" />
													<?php
															}
													?>
													
													<input type="hidden" name="origine_commande" id="origine_commande" value="2" />
													<input type="hidden" name="nb_multi_commande" value="" />
													<input type="hidden" id="id_verre" name="id_verre" value="" class="required" />

													<div id="stockwizard" class="pull-in">
														<ul>
															
															<?php if($panierA == 1)
																{
																	echo '<li><a href="#stock_1" data-toggle="tab"><span>Etape 1 <b>/ 4</b></span><i>Commande</i></a></li>
																<li><a href="#stock_2" data-toggle="tab"><span>Etape 2 <b>/ 4</b></span><i>Verres</i></a></li>
																<li><a href="#stock_3" data-toggle="tab"><span>Etape 3 <b>/ 4</b></span><i>Certificat</i></a></li>
																<li><a href="#last_step_stock" data-toggle="tab"><span>Etape 4 <b>/ 4</b></span><i>Récapitulatif</i></a></li>';
																}
																else
																{
																	echo '<li><a href="#stock_1" data-toggle="tab"><span>Etape 1 <b>/ 3</b></span><i>Commande</i></a></li>
																<li><a href="#stock_2" data-toggle="tab"><span>Etape 2 <b>/ 3</b></span><i>Verres</i></a></li>
																<li><a href="#last_step_stock" data-toggle="tab"><span>Etape 3 <b>/ 3</b></span><i>Récapitulatif</i></a></li>';
																}
															?>
															
														</ul>

														<div class="tab-content m-b-0 b-0">

															<div class="tab-pane m-t-10 fade" id="stock_1">

																<div class="row">

																	<div class="form-group rd-200 clearfix">
																		<label class="col-lg-2 control-label">Type de commande</label>
																		<div class="col-lg-10">

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="stock_type_commande_1" value="1" name="type_commande" class="required" <?php if($panierA == 1)
																					echo "checked"?>>
																				<label for="stock_type_commande_1"> Commande ferme </label>
																			</div>
																			<?php if($panierA != 1){?>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="stock_type_commande_2" value="2" name="type_commande" class="required">
																				<label for="stock_type_commande_2"> Casse atelier </label>

																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="stock_type_commande_3" value="3" name="type_commande" class="required">
																				<label for="stock_type_commande_3"> Erreur ophtalmologiste </label>
																			</div>
																			<?php } ?>

																			<div class="ec_commande_status">
																				<div class="alert"></div>
																			</div>

																			<div class="validator"></div>

																		</div>

																		<div class="row_error"></div>

																	</div>


																	<div class="form-group clearfix ancienne_commande_ref">
																		<label class="col-lg-2 control-label" for="stock_ancienne_commande">Référence commande remplacée</label>
																		<div class="col-lg-10">
																			<div class="commandes_list">
																				<select name="ancienne_commande" id="stock_ancienne_commande" class="form-control select-search">
																					<option>Sélectionner</option>
																					<?php echo $id_commandes; ?>
																				</select>
																			</div>
																			<div class="validator"></div>
																		</div>
																	</div>

																	<div class="form-group clearfix last_of_page referenceClient">
																		<label class="col-lg-2 control-label" for="stock_reference_client">Référence client</label>
																		<div class="col-lg-10">
																			<input id="stock_reference_client" name="reference_client" type="text" class="required form-control" maxlength="14">
                                                                            <p class="helper-text"><b>14</b> Caractères restants</p>
																			<div class="validator"></div>
																		</div>
																	</div>

																</div>

															</div>

															<div class="tab-pane m-t-10 fade" id="stock_2">
																<div class="row">

																	<div class="form-group rd-200 clearfix">
																		<label class="col-lg-2 control-label">Génération verre</label>
																		<div class="col-lg-10">

                                                                            <div class="row">
                                                                                <div class="col-md-6">
																					<?php if($panierA == 1)
																					{
																					?>
                                                                                    <div class="radio radio-warning"><input type="radio" id="gamme_verres_23" value="23" name="id_generation_verre" class="required" checked>
                                                                                        <label for="gamme_verres_23"> Stock </label>
                                                                                    </div>
																					<?php 
																					}
																						if($panierA != 1){?>
																					<div class="radio radio-warning"><input type="radio" id="gamme_verres_9" value="9" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_9"> Stock </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_12" value="12" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_12"> Stock Teinté </label>
                                                                                    </div>
																					
																					<!--<div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_22" value="22" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_22"> Stock Dégradé </label>
                                                                                    </div> -->
																					
                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_15" value="15" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_15"> Stock Photochromique </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_19" value="19" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_19"> Stock Transition &reg; </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_16" value="16" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_16"> Stock BlueCoat </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_18" value="18" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_18"> Stock Progressif </label>
                                                                                    </div>
																					
																					

                                                                                </div>

                                                                                <div class="col-md-6">

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_20" value="20" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_20"> Stock bi-couleur plan </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_14" value="14" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_14"> Stock Miroité plan </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_17" value="17" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_17"> Stock Polarisé plan </label>
                                                                                    </div>

                                                                                    <div class="radio radio-warning">
                                                                                        <input type="radio" id="gamme_verres_21" value="21" name="id_generation_verre" class="required">
                                                                                        <label for="gamme_verres_21"> Stock Miroité Dégradé plan <span class="badge badge-warning">Nouveau</span></label>
                                                                                    </div>
																					<?php } ?>

                                                                                </div>
                                                                            </div>


																			<div class="validator"></div>

																		</div>

																	</div>


																	<div class="form-group rd-200 clearfix indice_vere"  <?php if($panierA == 1)
																					echo 'style="display:block"';?>>
																		<label class="col-lg-2 control-label">Indice du verre</label>
																		<div class="col-lg-10">
																			<div id="stock_indice_verre"></div>
																		</div>
																	</div>


																	<div class="form-group rd-200 clearfix traitement">
																		<label class="col-lg-2 control-label">Traitement</label>
																		<div class="col-lg-10">

																			<div class="radio radio-warning radio-inline traitement-blanc">
																				<input type="radio" id="traitement_blanc" value="Blanc" name="traitement" class="required">
																				<label for="traitement_blanc"> Blanc </label>
																			</div>

																			<div class="radio radio-warning radio-inline traitement-durci">
																				<input type="radio" id="traitement_durci" value="Durci" name="traitement" class="required">
																				<label for="traitement_durci"> Durci </label>
																			</div>

																			<div class="radio radio-warning radio-inline traitement-hmc">
																				<input type="radio" id="traitement_hmc" value="HMC" name="traitement" class="required">
																				<label for="traitement_hmc"> HMC </label>
																			</div>

																			<div class="radio radio-warning radio-inline traitement-satin">
																				<input type="radio" id="traitement_satin" value="Satin" name="traitement" class="required">
																				<label for="traitement_satin"> Satin </label>
																			</div>

																			<div class="radio radio-warning radio-inline traitement-bluecoat">
																				<input type="radio" id="traitement_bluecoat" value="BlueCoat" name="traitement" class="required">
																				<label for="traitement_bluecoat"> BlueCoat </label>
																			</div>

																			<div class="radio radio-warning radio-inline traitement-bluecoat-defender">
																				<input type="radio" id="traitement_bluecoat_defender" value="BlueCoat Defender" name="traitement" class="required">
																				<label for="traitement_bluecoat_defender"> BlueCoat Defender </label>
																			</div>

																		</div>
																	</div>

																	<div class="form-group clearfix photochromie" id="show_photocromie">
																		<label class="col-lg-2 control-label">Photochromie</label>
																		<div class="col-lg-10" id="photocromie">

																			<div class="radio radio-warning radio-inline show_non_photocromique">
																				<input type="radio" id="photocromie_no" value="Non Photocromique" name="photocromie" class="required">
																				<label for="photocromie_no"> Non photocromique </label>
																			</div>

																			<div class="radio radio-warning radio-inline show_transition_PhotoGrey">
																				<input type="radio" id="photocromie_PhotoGrey" value="PhotoGrey" name="photocromie" class="required">
																				<label for="photocromie_PhotoGrey"> PhotoGrey </label>
																			</div>

																			<div class="radio radio-warning radio-inline show_transition_PhotoBrown">
																				<input type="radio" id="photocromie_PhotoBrown" value="PhotoBrown" name="photocromie" class="required">
																				<label for="photocromie_PhotoBrown"> PhotoBrown </label>
																			</div>

                                                                            <div class="radio radio-warning radio-inline show_transition_Gris">
                                                                                <input type="radio" id="photocromie_transition_Gris" value="Transition Gris" name="photocromie" class="required">
                                                                                <label for="photocromie_transition_Gris"> Transition Gris </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline show_transition_Brun">
                                                                                <input type="radio" id="photocromie_transition_Brun" value="Transition Brun" name="photocromie" class="required">
                                                                                <label for="photocromie_transition_Brun"> Transition Brun </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline show_transition_G15">
                                                                                <input type="radio" id="photocromie_transition_G15" value="Transition G15" name="photocromie" class="required">
                                                                                <label for="photocromie_transition_G15"> Transition G15 </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline show_transition_Xtractive_Gris">
                                                                                <input type="radio" id="photocromie_transition_Xtractive_Gris" value="Transition Xtractive Gris" name="photocromie" class="required">
                                                                                <label for="photocromie_transition_Xtractive_Gris"> Transition Xtractive Gris </label>
                                                                            </div>

																		</div>
																	</div>

																	<div class="form-group rd-100 clearfix" id="show_teinte">
																		<label class="col-lg-2 control-label">Teinte</label>
																		<div class="col-lg-10" id="teinte">

																			<div class="radio radio-warning radio-inline stock_reg">
																				<input type="radio" id="teinte_no" value="Non Teinté" name="teinte" class="required">
																				<label for="teinte_no"> Non teinté </label>
																			</div>

																			<div class="radio radio-warning radio-inline stock_reg">
																				<input type="radio" id="teinte_grisc" value="Gris C" name="teinte" class="required">
																				<label for="teinte_grisc"> Gris C </label>
																			</div>

																			<div class="radio radio-warning radio-inline stock_reg">
																				<input type="radio" id="teinte_brunc" value="Brun C" name="teinte" class="required">
																				<label for="teinte_brunc"> Brun C </label>
																			</div>

																			<div class="radio radio-warning radio-inline stock_reg">
																				<input type="radio" id="teinte_g15c" value="G15 C" name="teinte" class="required">
																				<label for="teinte_g15c"> G15 C </label>
																			</div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_jaune_violet" value="Jaune AB dégradé violet AB" name="teinte" class="required">
                                                                                <label for="teinte_jaune_violet" data-img="jaune_violet.jpeg"> Jaune AB dégradé violet AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_orange_bleu" value="Orange AB dégradé bleu AB" name="teinte" class="required">
                                                                                <label for="teinte_orange_bleu" data-img="orange_bleu.jpeg"> Orange AB dégradé bleu AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_vert_rouge" value="Vert AB dégradé rouge AB" name="teinte" class="required">
                                                                                <label for="teinte_vert_rouge" data-img="vert_rouge.jpeg"> Vert AB dégradé rouge AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_rouge_bleu" value="Rouge AB dégradé bleu AB" name="teinte" class="required">
                                                                                <label for="teinte_rouge_bleu" data-img="rouge_bleu.jpeg"> Rouge AB dégradé bleu AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_rose_jaune" value="Rose AB dégradé jaune AB" name="teinte" class="required">
                                                                                <label for="teinte_rose_jaune" data-img="rose_jaune.jpeg"> Rose AB dégradé jaune AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_jaune_vert" value="Jaune AB dégradé vert AB" name="teinte" class="required">
                                                                                <label for="teinte_jaune_vert" data-img="jaune_vert.jpeg"> Jaune AB dégradé vert AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_violet_vert" value="Violet AB dégradé vert AB" name="teinte" class="required">
                                                                                <label for="teinte_violet_vert" data-img="violet_vert.jpeg"> Violet AB dégradé vert AB </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_bi_color">
                                                                                <input type="radio" id="teinte_orange_vert" value="Orange AB dégradé vert AB" name="teinte" class="required">
                                                                                <label for="teinte_orange_vert" data-img="orange_vert.jpeg"> Orange AB dégradé vert AB </label>
                                                                            </div>


                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_jaune_miroir_dore" value="Jaune AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_jaune_miroir_dore" data-img="miroir_jaune_dore.jpeg"> Jaune AB Dégradé Miroir Doré </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_rose_miroir_dore" value="Rose AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_rose_miroir_dore" data-img="miroir_rose_dore.jpeg"> Rose AB Dégradé Miroir Doré </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_orange_miroir_dore" value="Orange AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_orange_miroir_dore" data-img="miroir_orange_dore.jpeg"> Orange AB Dégradé Miroir Doré </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_rouge_miroir_dore" value="Rouge AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_rouge_miroir_dore" data-img="miroir_rouge_dore.jpeg"> Rouge AB Dégradé Miroir Doré </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_vert_miroir_dore" value="Vert AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_vert_miroir_dore" data-img="miroir_vert_dore.jpeg"> Vert AB Dégradé Miroir Doré </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_bleu_miroir_dore" value="Bleu AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_bleu_miroir_dore" data-img="miroir_bleu_dore.jpeg"> Bleu AB Dégradé Miroir Doré </label>
                                                                            </div>

                                                                            <div class="radio radio-warning radio-inline stock_miroir_degrade">
                                                                                <input type="radio" id="teinte_turquoise_miroir_dore" value="Turquoise AB Dégradé Miroir Doré" name="teinte" class="required">
                                                                                <label for="teinte_turquoise_miroir_dore" data-img="miroir_turquoise_dore.jpeg"> Turquoise AB Dégradé Miroir Doré </label>
                                                                            </div>


                                                                            <?php /*<div class="radio radio-warning radio-inline teinte_bleunuitc">
																				<input type="radio" id="teinte_bleunuitc" value="Bleu nuit C" name="teinte" class="required">
																				<label for="teinte_bleunuitc"> Bleu nuit C </label>
																			</div>*/ ?>

																		</div>
																	</div>

																	<div class="form-group rd-200 clearfix" id="show_galbe_stock">
																		<label class="col-lg-2 control-label">Galbe</label>
																		<div class="col-lg-10" id="galbe_stock">

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="galbe_stock_6" value="6" name="galbe_stock" class="required">
																				<label for="galbe_stock_6"> Galbe 6 (Standard) </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="galbe_stock_8" value="8" name="galbe_stock" class="required">
																				<label for="galbe_stock_8"> Galbe 8 (Courbé) </label>
																			</div>

																		</div>
																	</div>

																	<div class="form-group rd-200 clearfix" id="show_miroir_stock">
																		<label class="col-lg-2 control-label">Miroir</label>
																		<div class="col-lg-10" id="miroir_stock">

																			<!--<div class="radio radio-warning radio-inline">
                                                                                <input type="radio" id="aucune_option" value="0" name="miroir_stock" class="required">
                                                                                <label for="aucune_option"> Sans </label>
                                                                            </div>-->

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_bleu" value="1" name="miroir_stock" class="required">
																				<label for="miroir_stock_bleu"> Bleu </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_dore" value="3" name="miroir_stock" class="required">
																				<label for="miroir_stock_dore"> Doré </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_vert" value="4" name="miroir_stock" class="required">
																				<label for="miroir_stock_vert"> Vert </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_rouge" value="5" name="miroir_stock" class="required">
																				<label for="miroir_stock_rouge"> Rouge </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_orange" value="6" name="miroir_stock" class="required">
																				<label for="miroir_stock_orange"> Orange </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_rose" value="7" name="miroir_stock" class="required">
																				<label for="miroir_stock_rose"> Rose </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_violet" value="8" name="miroir_stock" class="required">
																				<label for="miroir_stock_violet"> Violet </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_jaune" value="9" name="miroir_stock" class="required">
																				<label for="miroir_stock_jaune"> Jaune </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="miroir_stock_argent" value="2" name="miroir_stock" class="required">
																				<label for="miroir_stock_argent"> Argent </label>
																			</div>

																		</div>
																	</div>

																	<div class="form-group rd-200 clearfix" id="show_polarisation">
																		<label class="col-lg-2 control-label">Polarisation</label>
																		<div class="col-lg-10" id="polarisation">

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="no_polarise" value="Non polarisé" name="polarise" class="required">
																				<label for="no_polarise"> Non polarisé </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="polarise_gris_base_6" value="Polarisé Gris base 6" name="polarise" class="required">
																				<label for="polarise_gris_base_6"> Polarisé Gris base 6 </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="polarise_gris_base_8" value="Polarisé Gris base 8" name="polarise" class="required">
																				<label for="polarise_gris_base_8"> Polarisé Gris base 8 </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="polarise_brun_base_6" value="Polarisé Brun base 6" name="polarise" class="required">
																				<label for="polarise_brun_base_6"> Polarisé Brun base 6 </label>
																			</div>

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="polarise_brun_base_8" value="Polarisé Brun base 8" name="polarise" class="required">
																				<label for="polarise_brun_base_8"> Polarisé Brun base 8 </label>
																			</div>

																		</div>
																	</div>

																	<div class="form-group rd-100 clearfix" id="show_commande_multiple">
																		<label class="col-lg-2 control-label">Plusieurs commandes<br />du même type ?</label>
																		<div class="col-lg-10" id="multi_commande">

																			<div class="radio radio-warning radio-inline">
																				<input type="radio" id="multi_commande_non" value="Non" name="multi_commande" class="required">
																				<label for="multi_commande_non"> Non </label>
																			</div>

																			<div class="radio radio-warning radio-inline" <?php if($panierA == 1)
																					echo 'style="display:none"';?>>
																				<input type="radio" id="multi_commande_oui" value="Oui" name="multi_commande" class="required">
																				<label for="multi_commande_oui"> Oui </label>
																			</div>

																			<div id="multi_commande_oui_message">
																				J'aimerai
																				<select name="nb_multi_commande" id="nb_multi_commande" class="form-control" style="display: inline-block; width: 70px">
																					<option value="1">-</option>
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
																				commandes identiques
																			</div>

																		</div>
																	</div>


																	<!-- Verres oeil droit -->

																	<div class="form-group rd-100 clearfix corrections" id="show_correction_droit">
																		<label class="col-lg-2 control-label">Correction oeil droit<span class="custom_hauteur hidden">Hauteur 17</span></label>
																		<div class="col-lg-10">

																			<div class="grille clearfix" id="correction_droit">

																				<div class="col-lg-3 col-sm-3 col-xs-6">

																					<span>SPHERE</span>

																					<select name="sphere_droit" id="sphere_droit" class="form-control search required">
																						<option value=""></option>
																						<?php
																						if($panierA=='1')
																						{
																							for($i = 4; $i >= -4; $i-=0.25){
																								echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
																							}
																						}
																						else
																						{
																							for($i = 8; $i >= -10; $i-=0.25){
																								echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
																							}
																						}
																						?>
																					</select>


																				</div>

																				<div class="col-lg-3 col-sm-3 col-xs-6">

																					<span>CYLINDRE</span>

																					<select name="cylindre_droit" id="cylindre_droit" class="form-control search required cylindre_select">
																						<option value=""></option>
																						<?php
																						for($i = 0; $i <= 10; $i+=0.25){
																							echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
																						}
																						?>
																					</select>


																				</div>

																			</div>

																			<div class="cote">
																				<input type="checkbox" value="1" name="only_droit" id="stock_only_droit" /> <label class="control-label" for="stock_only_droit">Cochez ici si vous désirez uniquement commander le verre droit</label>
																			</div>
																			<div class="validator"></div>

																		</div>
																	</div>

																	<div class="form-group rd-100 clearfix last_of_page" id="show_diametre">
																		<label class="col-lg-2 control-label">Diamètre verre droit</label>
																		<div class="col-lg-10" id="diametre_droit">

																			<p class="error">Choisissez d'abord la correction avant de choisir le diamètre.</p>

																			<div class="radio radio-warning radio-inline groupe1">
																				<input type="radio" value="55" id="diametre_55" name="diametre" class="required">
																				<label for="diametre_55">55</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe1 groupe2">
																				<input type="radio" value="60" id="diametre_60" name="diametre" class="required">
																				<label for="diametre_60">60</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe1 groupe2 groupe3 groupe4 groupe6">
																				<input type="radio" value="65" id="diametre_65" name="diametre" class="required">
																				<label for="diametre_65">65</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe1 groupe3 groupe4 groupe5">
																				<input type="radio" value="70" id="diametre_70" name="diametre" class="required">
																				<label for="diametre_70">70</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe4 groupe6">
																				<input type="radio" value="75" id="diametre_75" name="diametre" class="required">
																				<label for="diametre_75">75</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe4 groupe6">
																				<input type="radio" value="80" id="diametre_80" name="diametre" class="required">
																				<label for="diametre_80">80</label>
																			</div>

																			<div id="show_diametre_non_dispo_droit">
																				<label>Ce verre n'est pas stocké</label>
																			</div>

																			<div class="validator"></div>

																		</div>
																	</div>

																	<div class="form-group clearfix" id="show_nom_verre">
																		<label class="col-lg-2 control-label">Nom verre droit</label>
																		<div class="col-lg-10" id="nom_verre">
																			<p></p>
																		</div>
																	</div>


																	<!-- Verres oeil gauche -->

																	<div class="form-group rd-100 clearfix corrections" id="show_correction_gauche">
																		<label class="col-lg-2 control-label">Correction oeil gauche <span class="custom_hauteur hidden">Hauteur 17</span></label>
																		<div class="col-lg-10">

																			<div class="grille clearfix" id="correction_gauche">

																				<div class="col-lg-3 col-sm-3 col-xs-6">

																					<span>SPHERE</span>

																					<select name="sphere_gauche" id="sphere_gauche" class="form-control search required">
																						<option value=""></option>
																						<?php
																						for($i = 8; $i >= -10; $i-=0.25){
																							echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
																						}
																						?>
																					</select>


																				</div>

																				<div class="col-lg-3 col-sm-3 col-xs-6">

																					<select name="cylindre_gauche" id="cylindre_gauche" class="form-control search required cylindre_gauche">

																						<span>CYLINDRE</span>

																						<option value=""></option>
																						<?php
																						for($i = 0; $i <= 10; $i+=0.25){
																							echo '<option value="'.$i.'" '.($i == 0 ? 'selected="selected"' : '').'>'.($i == 0 ? '0.00' : ($i > 0 ? '+'.$i : $i)).'</option>';
																						}
																						?>
																					</select>


																				</div>

																			</div>

																			<div class="cote">
																				<input type="checkbox" value="1" name="only_gauche" id="stock_only_gauche" /> <label class="control-label" for="stock_only_gauche">Cochez ici si vous désirez uniquement commander le verre gauche</label>
																			</div>
																			<div class="validator"></div>

																		</div>
																	</div>

																	<div class="form-group rd-100 clearfix last_of_page" id="show_diametre_gauche">
																		<label class="col-lg-2 control-label">Diamètre verre gauche</label>
																		<div class="col-lg-10" id="diametre_gauche">

																			<p class="error">Choisissez d'abord la correction avant de choisir le diamètre.</p>

																			<div class="radio radio-warning radio-inline groupe1">
																				<input type="radio" value="55" id="diametre_gauche_55" name="diametre_gauche" class="required">
																				<label for="diametre_gauche_55">55</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe1 groupe2">
																				<input type="radio" value="60" id="diametre_gauche_60" name="diametre_gauche" class="required">
																				<label for="diametre_gauche_60">60</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe1 groupe2 groupe3 groupe4 groupe6">
																				<input type="radio" value="65" id="diametre_gauche_65" name="diametre_gauche" class="required">
																				<label for="diametre_gauche_65">65</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe1 groupe3 groupe4 groupe5">
																				<input type="radio" value="70" id="diametre_gauche_70" name="diametre_gauche" class="required">
																				<label for="diametre_gauche_70">70</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe4 groupe6">
																				<input type="radio" value="75" id="diametre_gauche_75" name="diametre_gauche" class="required">
																				<label for="diametre_gauche_75">75</label>
																			</div>

																			<div class="radio radio-warning radio-inline groupe4 groupe6">
																				<input type="radio" value="80" id="diametre_gauche_80" name="diametre_gauche" class="required">
																				<label for="diametre_gauche_80">80</label>
																			</div>

																			<div id="show_diametre_non_dispo_gauche">
																				<label>Ce verre n'est pas stocké</label>
																			</div>

																			<div class="validator"></div>

																		</div>
																	</div>

																	<div class="form-group clearfix" id="show_nom_verre_gauche">
																		<label class="col-lg-2 control-label">Nom verre gauche</label>
																		<div class="col-lg-10" id="nom_verre_gauche">
																			<p></p>
																		</div>
																	</div>

																	<?php
																	if($commentaire_actif->active == 1)
																		if(isset($user_info->show_commentaire) && $user_info->show_commentaire == 1) {
																			?>
																			<div class="form-group commentaire clearfix">
																				<label class="col-lg-2 control-label" for="commentaire_stock">Commentaire (facultatif)</label>
																				<div class="col-lg-10">
																					<textarea name="commentaire" id="commentaire_stock" rows="5" class="form-control"></textarea>
																					<div class="validator"></div>
																				</div>
																			</div>
																		<?php } ?>

																	<div class="limite_commande">
																		<div class="form-group clearfix">
																			<label class="col-lg-2 control-label">Erreur</label>
																			<div class="col-lg-10">

																				<div class="limite_commande_msg">
																					<p>Votre crédit casse atelier / erreur ophtalmologiste qui est de <b class="credit_casse">-</b> € ne vous permet pas de passer cette commande d'un montant de <b class="total_commande">-</b> €.</p>
																					<p>Voulez vous tout de même passer cette commande en commande ferme ?</p>
																					<div class="buttons">
																						<a class="btn btn-warning continue_commande">Continuer en commande ferme</a>
																						<a class="btn btn-danger abort_commande">Annuler</a>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>


																</div>

															</div>
															
															<div class="tab-pane m-t-10 fade" id="stock_3">

																<div class="row">

																	<div class="form-group clearfix">
																		<label class="col-lg-2 control-label">Certificat</label>
																		<div id="type_commande_error" class="col-lg-10">

																			<div class="radio radio-warning">
																				<input type="radio" id="carte_auth_y" value="1" name="carte_auth" class="required" <?php if($panierA==1) echo 'checked';?>>
																				<label for="carte_auth_y"><?php if($panierA==1) {?>« La carte d'authenticité est obligatoire pour des produits commandés en panier A »<?php }
																					else
																					{?>Je souhaite un certificat d'authenticité (Gratuit)<?php } ?></label>
																			</div>

																			<div class="radio radio-warning <?php if($panierA==1) echo 'hide';?>">
																				<input type="radio" id="carte_auth_n" value="0" name="carte_auth" class="required">
																				<label for="carte_auth_n"> Non </label>
																			</div>

																			<div class="validator"></div>

																		</div>

																	</div>

																	<div id="civilite_client" class="form-group clearfix auth_fields" <?php if($panierA==1) echo 'style="display: block;"';?>>
																		<label class="col-lg-2 control-label">Civilité client</label>
																		<div class="col-lg-10">
																			<select class="form-control required" id="civiliteClient" name="civilite_client">
																				<option value="0">Sélectionner..</option>
																				<option value="1">Madame</option>
																				<option value="2">Monsieur</option>
																				<option value="3">Mademoiselle</option>
																				<option value="4">Enfant</option>
																			</select>
																			<div class="validator"></div>
																		</div>

																	</div>

																	<div id="nom_client" class="form-group clearfix auth_fields">
																		<label class="col-lg-2 control-label">Nom du client</label>
																		<div class="col-lg-10">
																			<input type="text" class="form-control required" name="nom_client" id="nomClient" />
																			<div class="validator"></div>
																		</div>
																	</div>

																	<div id="prenom_client" class="form-group clearfix auth_fields">
																		<label class="col-lg-2 control-label">Prénom du client</label>
																		<div class="col-lg-10">
																			<input type="text" class="form-control required" name="prenom_client" id="prenomClient" />
																			<div class="validator"></div>
																		</div>
																	</div>



																	<div id="preview_carte" class="form-group clearfix auth_fields">
																		<label class="col-lg-2 control-label">Votre carte</label>
																		<div class="col-lg-10">

																			<div class="clearfix">
																				<a id="generer_carte" class="btn btn-warning">Générer la carte d'authenticité</a>
																			</div>

																			<div class="sub-auth" id="prev_auth">
																				<div>

																					<?php setlocale(LC_TIME, "fr_FR.UTF-8"); ?>



																					<div id="preview_auth_card" >

																						<span class="titre optieyes"></span>
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
																							<span class="verre_droit"></span><br>
																							<span class="verre_gauche"></span>
																							<div class="options">
																								<span class="miroir"></span>
																								<span class="galbe"></span>
																							</div>
																						</div>

																						<div class="opticien">
																							<span class="titre"><?php echo $user_info->nom_magasin; ?></span>
																							<span><?php echo $user_info->adresse; ?></span>
																							<span><?php echo $user_info->cp; ?> <?php echo $user_info->ville; ?></span>
																							<span class="tel">Tél: <?php echo $user_info->tel_fixe; ?></span>
																						</div>


																					</div>

																					<div id="preview_auth_img" >
																						<img src="/static/img/auth_back.jpg" />
																					</div>

																				</div>
																			</div>

																		</div>

																	</div>

																</div>
															</div>

															<div class="tab-pane m-t-10 fade last_of_page" id="last_step_stock">
																<div id="recap_commande_stock" class="invoice"></div>
															</div>

															<ul class="pager m-b-0 wizard">
																<li class="previous"><a href="#" class="btn btn-inverse btn-lg waves-effect waves-light">Précédent</a></li>
																<li class="next"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light">Suivant</a></li>
																<li class="finish"><a href="#" class="btn btn-warning btn-lg waves-effect waves-light">Valider la commande</a></li>
															</ul>

														</div>

													</div>

												</form>


                                            </div>
                                        </div>
                                    </div>


                                </div> <!-- tab content -->

                            </div>

                        <?php } ?>

                    </div>

                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <!-- Form wizard -->
    <script src="/static/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="/static/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

    <script type="text/javascript">

        var iledefrance = '<?php echo $region; ?>';
        var tabLivIleDeFrance = ["Mardi","Mercredi","Jeudi","Vendredi","Lundi","Mardi","Mardi"];
        var tabLivHorsIleDeFrance = ["Mercredi","Jeudi","Vendredi","Samedi","Mardi","Mardi","Mardi"];
        var currentChoixMultiCommande = "";
        var tabCurrentGroupeDiametre = [];
        var precalibrage = "oui";

        $(document).ready(function() {

            $(".select-search").select2();

            $("input.decimal").TouchSpin({
                min: 0,
                max: 50,
                step: 0.1,
                decimals: 1,
                boostat: 5,
                maxboostedstep: 10,
                buttondown_class: "btn btn-default",
                buttonup_class: "btn btn-default",
            });

            $.extend($.validator.messages, {
                required: "Ce champ est obligatoire",
                number: "Veuillez indiquer un nombre",
                digits: "Veuillez indiquer des numéros",
                maxlength: jQuery.validator.format("Limite à {0} caractères."),
                minlength: jQuery.validator.format("Veuillez indiquer au moins {0} caractères."),
                rangelength: jQuery.validator.format("Veuillez indiquer entre {0} et {1} caractères."),
                range: jQuery.validator.format("Veuillez indiquer une valeur entre {0} et {1}."),
                max: jQuery.validator.format("Veuillez indiquer une valeur inferieure à {0}."),
                min: jQuery.validator.format("Veuillez indiquer une valeur supérieure à {0}.")
            });


            // ------------------------------
            // Type de verres

            var type_commande_verre = 1;

            $('.type_commande_verre').on('click', 'a', function() {
                type_commande_verre = $(this).attr('rel');
                $('input#origine_commande').val(type_commande_verre);
                $('.tab-pane').removeClass('hidden');
            });



            function EvenementCorrectionVerre(cote, sphere){

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
                                            $("#show_diametre_gauche").show();

                                        } else {
                                            $("#show_diametre").show();
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
                                }
                            });
                    }
                });
            }


            $('#commandeForm').on('change', 'input[name=id_type_generation_verre]', function(){

                var value = $(this).val();

                $('.corrections').hide();

                $("#step_4 div[id^=choice_]").hide();

                $("#choice_"+value).show();
                $("div[id^=choice_]").empty();
                $.ajax({
                    type: "POST",
                    url: "/admin/getGenerationVerre/<?php echo $user_info[0]->id_users; ?>",
                    data : "id_type_generation_verre="+value,
                    dataType:"html",
                    success: function(data){
                        $("#choice_"+value).html(data).append('<div class="validator"></div>');
                        $("#indice_verre").empty();
                        validFields();
                    },
                    error: function(){
                        $("#choice_"+value).html("Une erreur est survenue");
                        $('.indices').hide();
                    }
                });

            });


            $('#stockForm').on('change', 'input[name=id_generation_verre]', function(){

                var value = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "/admin/getIndiceVerre/<?php echo $user_info[0]->id_users; ?>",
                    data : "id_generation_verre="+value,
                    dataType:"html",
                    success: function(data){

                        $('.indice_vere').fadeIn(120);
                        $('.traitement, #show_photocromie, #show_miroir_stock, #show_polarisation, #show_commande_multiple, #show_correction_droit, #show_correction_gauche').hide();
                        $("#stock_indice_verre").html(data).append('<div class="validator"></div>');

                        validFields();
                    },
                    error: function(){
                        $("#stock_indice_verre").html("Une erreur est survenue");
                    }
                });


            });


            $('#commandeForm').on('change', 'input[id^=gamme_verres_]', function(){

                var id_generation_verre = $(this).attr('id').split('_')[2];

                if(id_generation_verre != 2 && id_generation_verre != 1) {
                    $('.opt_pre').prop('disabled', true);
                }
                else {
                    $('.opt_pre').prop('disabled', false);
                }

                $('.corrections, .pupilles, .prismes, .commentaire, .options, .verres, .topoffice, #baspupille').hide();

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
                        $('.indices').show();
                    },
                    success: function(data){
                        $('#indice_verre').html(data).css('height','');

                    },
                    error: function(){
                        $('#indice_verre').html("Une erreur est survenue");
                    }
                });
            });


            $('.form-commande').on('change', 'input[id^=indice_verre_]', function(){

                var id_indice_verre = $(this).val();
                var id_generation_verre_value = id_generation_verre = $("input[name=id_generation_verre]:checked").val();



                $.ajax({
                    type: "POST",
                    url: "/admin/getGrilleFabrication",
                    data : "id_indice_verre="+id_indice_verre+"&id_generation_verre="+id_generation_verre_value+"&type_commande_verre="+type_commande_verre+"&teinte="+$("input[name=teinte]:checked").val()+"&traitement="+$("input[name=traitement]:checked").val()+"&photocromie="+$("input[name=photocromie]:checked").val(),
                    dataType: "html",
                    beforeSend: function(){
                        if(type_commande_verre == 1){
                            $('.corrections, .pupilles, .prismes, .commentaire, .options, .verres').show();
                        }
                    },
                    success: function(data){

                        if(type_commande_verre == 1){

                            $('.corrections#droit .grille, .corrections#gauche .grille').html(data);

                            $('.corrections#gauche select').each(function(){
                                $(this).attr('name', $(this).attr('name').split('_')[0]+'_gauche');
                                $(this).attr('id', $(this).attr('id').split('_')[0]+'_gauche');
                            });

                            $('.pupilles, .prismes, .commentaire').show();
                        }
                        else if(type_commande_verre == 2){

                            $(".traitement, .traitement .radio").show();
                            $('.traitement input[type=radio]').prop('checked', false);

                            if(id_indice_verre == 8){
                                $(".traitement-blanc, .traitement-satin, .traitement-bluecoat").hide();
                            }

                            if(id_indice_verre == 4)
                                $(".traitement-blanc").hide();

                            if(id_indice_verre == 5 || id_indice_verre == 6)
                                $(".traitement-blanc, .traitement-durci, .traitement-hmc").hide();

                            if(id_indice_verre == 6)
                                $(".traitement-bluecoat").hide();

                            if(id_generation_verre == 9 && id_indice_verre == 4){
                                $(".traitement-hmc").hide();
                            }

                            if(id_generation_verre == 12 || id_generation_verre == 13 || id_generation_verre == 14){
                                $(".traitement-durci, .traitement-hmc, .traitement-satin").hide();
                            }

                            if(id_generation_verre == 15){
                                $(".traitement-blanc, .traitement-durci, .traitement-satin").hide();
                            }
                        }

                        var id_type_generation_verre = $("input[name=id_type_generation_verre]:checked");

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
                        success: function(data){
                            $("#verre").html(data).promise().done(function() {
                                $("#verre .select-search").select2();
                            });
                        }
                    });


            });




            $("#stockForm").on("change", "input[name=only_gauche], input[name=only_droit], input[name=photocromie],input[name=traitement],input[name=teinte],input[name=diametre],input[name=diametre_gauche],select[name=nb_multi_commande],input[name=multi_commande],input[name=miroir_stock],input[name=polarise]",function(){

                console.log(type_commande_verre);

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
                            $("#multi_commande_non").prop('checked', true);
                            EvenementCorrectionVerre('droit');
                            EvenementCorrectionVerre('gauche');
                        }

                        if($("input[name=multi_commande]:checked").length != 0 && currentChoixMultiCommande != $("input[name=multi_commande]:checked").val()){
                            currentChoixMultiCommande = $("input[name=multi_commande]:checked").val();
                            $("#sphere_droit,#cylindre_droit,#cylindre_gauche,#sphere_gauche").val('');
                        }

                        if( $("input[name=multi_commande]:checked").length != 0 && $("input[name=multi_commande]:checked").val() == "Non") {
                            $("#nb_multi_commande").hide();
                            EvenementCorrectionVerre('droit');
                            EvenementCorrectionVerre('gauche');
                        }
                        else {
                            $("#nb_multi_commande").show();
                        }


                        if( $("input[name=multi_commande]:checked").length != 0 ){
                            $("#sphere_droit,#sphere_gauche,#cylindre_gauche,#cylindre_droit").val(0).trigger("change");

                        }


                        $("input[id^=diametre_]").removeAttr('checked');

                        if( ($("input[name=multi_commande]:checked").length != 0 && ($("input[name=multi_commande]:checked").val() == "Non" || ($("input[name=multi_commande]:checked").val() == "Oui" && $("#nb_multi_commande").val() != "") )) ){

                            EvenementCorrectionVerre('droit');
                            EvenementCorrectionVerre('gauche');

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

                            }
                        }
                    }
                }
            });


            // ------------------------------
            // Type de commande

            $('input[name=type_commande]').on('change', function() {

                var currentForm = $(this).closest('form');

                if($(this).val() > 1) {

                    $.ajax({
                        type: "POST",
                        url: "/admin/ECCreditCheck/<?php echo $user_info[0]->id_users; ?>",
                        success: function(data){

                            validFields();

                            if(data!="" && data == "not_logged") {
                                window.location.reload();
                            }
                            else if(data <= 0){
                                currentForm.find('#commande_type').addClass('row_error');
                                currentForm.find('.ancienne_commande_ref').hide();
                                currentForm.find('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');

                            } else {

                                currentForm.find('.ancienne_commande_ref').show();
                                currentForm.find('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>'+data+' €</b>');
                                currentForm.find('#commande_type').removeClass('row_error');
                            }

                        },
                        error:function(){
                            currentForm.find('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
                            currentForm.find("#loading-overlay,#loading").hide();
                        }
                    });


                    $('.ec_commande_status').fadeIn(60);
                }
                else {
                    currentForm.find('.ancienne_commande_ref').hide();
                    $('.right .button.grey').removeClass('disabled');
                    $('.ec_commande_status').fadeOut(60);
                }

            });


            $('#ancienne_commande').on('change', function() {
                if($(this).val() > 0) {
                    $('.next .btn').removeClass('disabled');
                }
                else {
                    $('.next .btn').addClass('disabled');
                }
            });


            // ------------------------------
            // Prix des verres - EC

            $('#commandeForm').on('change', 'select[name=id_verre], input[name=only_gauche], input[name=only_droit]', function() {

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
                                        console.log(diff);

                                        if(diff < 0) {
                                            $('.limite_commande').fadeIn(60);
                                            $('.next .btn').addClass('disabled');
                                        }
                                        else {
                                            $('.limite_commande').fadeOut(60);
                                            $('.next .btn').removeClass('disabled');
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
                $('.next .btn').removeClass('disabled').trigger('click');
            });


            $('#abort_commande').on('click', function() {
                swal({
                    title: "Etes-vous sûr ?",
                    text: "Voulez-vous vraiment annuler cette commande ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: 'btn-warning',
                    cancelButtonText: 'Annuler',
                    confirmButtonText: "Oui, annuler",
                    closeOnConfirm: false
                }, function () {
                    window.location.reload();
                });
            });


            // ------------------------------
            // Authenticite

            $('#commandeForm').on('change', 'input[name="carte_auth"]', function() {


                $('#preview_carte, #preview_auth_card, #preview_auth_img, #prev_auth').hide();

                if( $(this).val() == 1 ) {


                    $('#commandeForm input[name=nom_client], #commandeForm input[name=prenom_client], #commandeForm select').addClass('required');

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
                                            $('#preview_carte, #generer_carte, #prev_auth').fadeIn(120);

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
                    $('.auth_fields, #preview_auth_card, #preview_auth_img, #prev_auth, div.sub-auth').fadeOut();
                    $('.right .button.grey').removeClass('disabled');
                    $('#commandeForm input[type=text], #commandeForm select').removeClass('required');
                }

            });

            $('#prev_auth').on('click', '#generer_carte', function() {


                $('.right .button.grey').removeClass('disabled');
                $('#preview_auth_card, #preview_auth_img').fadeIn(120);



            });




            // ------------------------------
            // Calibrage

            $('input[name=precalibrage_diametre]').on('change', function(){
                precalibrage = $(this).val();

                $('#commande_type').show();
                $('#typecommande').css('height','');
                if(precalibrage == 'oui'){
                    $('#precalibrage_oui').show();
                    $('#precalibrage_non').hide();
                    $('input[name=diametre_verre]').removeClass('required');
                    $('#cotea,#coteb,#cotec,#coted,select[name=type_monture],#epaisseur_bord_verre,#calibre_selected').addClass('required');
                } else{
                    $('#precalibrage_oui').hide();
                    $('#precalibrage_non').show();

                    $('input[name=diametre_verre]').addClass('required');
                    $('#cotea,#coteb,#cotec,#coted,select[name=type_monture],#epaisseur_bord_verre,#calibre_selected').removeClass('required');
                }
            });

            $('.calibre').on('click', function(){
                $('.calibre').removeClass('calibre_selected');
                $(this).addClass('calibre_selected');
                $('#calibre_selected').val($(this).attr('alt'));
                $('#error_calibre_selected').hide();
            });

            if($('#calibre_selected').val() != "") {
                $('img[alt='+$('#calibre_selected').val()+']').addClass('calibre_selected');
            }


            // ------------------------------
            // Validation

            function validFields() {
                $('.form-commande input[type=radio], .form-commande select').each(function (e) {
                    $(this).rules("add", {
                        messages: {
                            required: "Veuillez choisir une option."
                        }
                    });
                });
            }

            var $validator = $("#commandeForm").validate({
                errorPlacement: function(error, element) {
                    error.appendTo(element.closest('.form-group').find('.validator'));
                }
            });

            var $stockvalidator = $("#stockForm").validate({
                errorPlacement: function(error, element) {
                    error.appendTo(element.closest('.form-group').find('.validator'));
                }
            });

            validFields();



            // ------------------------------
            // Form Wizard

            $('#stockwizard').bootstrapWizard({
                'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted',
                'onTabClick': function(tab, navigation, index) {
                    return false;
                },
                'onNext': function (tab, navigation, index) {

                    validFields();

                    var $valid = $("#stockForm").valid();
                    if (!$valid) {
                        $stockvalidator.focusInvalid();
                        return false;
                    }


                    switch(index) {
                        case 2:

                            var formData = $('#stockForm').serialize();

                            $.ajax({
                                type: "POST",
                                url: "/admin/setOrderRecap/<?php echo $user_info[0]->id_users; ?>",
                                data : formData,
                                dataType:"html",
                                beforeSend:function(){
                                    $("#recap_commande_stock").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
                                },
                                success: function(data){
                                    if(data=="not_logged")
                                        window.location.reload();
                                    else if(data=="error"){
                                        alert('une erreur est survenue, veuillez réessayer, merci !');
                                    }
                                    else{
                                        $("#recap_commande_stock").empty().append(data);
                                    }
                                },
                                error : function(){
                                    $("#recap_commande_stock").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
                                }
                            });

                            break;
                    }

                }
            });

            $('#fabricwizard').bootstrapWizard({
                'tabClass': 'nav nav-tabs navtab-wizard nav-justified bg-muted',
                'onTabClick': function(tab, navigation, index) {
                    return false;
                },
                'onNext': function (tab, navigation, index) {

                    validFields();


                    var $valid = $("#commandeForm").valid();
                    if (!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }

                    switch(index) {

                        case 1:
                            $('#calibre_selected').rules("add", {
                                messages: {
                                    required: "Veuillez choisir une option."
                                }
                            });
                            break;

                        case 2:

                            $.ajax({
                                type: "POST",
                                url: "/admin/ajax_type_verre/"+type_commande_verre,
                                dataType:"html",
                                success: function(data){
                                    if(data == "redirect")
                                        window.location.reload();
                                    else{
                                        $("#type_verre").html(data).append('<div class="validator"></div>');
                                        validFields();
                                    }
                                }
                            });

                            break;

                        case 4:

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
                                url: "/admin/getIdVerre",
                                data : { 'id' : $('select[name=id_verre] option:selected').val() },
                                dataType:"html",
                                success: function(data){
                                    if(data !== undefined ) {
                                        $('span.nom_verre').text(data);
                                    }
                                },
                            });

                            break;

                        case 5:

                            var formData = $('#commandeForm').serialize();

                            $.ajax({
                                type: "POST",
                                url: "/admin/setOrderRecap/<?php echo $user_info[0]->id_users; ?>",
                                data : formData,
                                dataType:"html",
                                beforeSend:function(){
                                    $("#wiz .finish").hide();
                                    $('#wiz .right .button.grey').show();
                                    $("#recap_commande").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
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

                            break;

                    }

                },
            });

            $('.finish').on('click', function() {

                orderOk = false;

                var date = new Date();

                if($("#nom_verre").find('p').html() !== undefined) {
                    var BlueCoat = $("#nom_verre").find('p').html().indexOf('BlueCoat');
                    var Miroir = $("#nom_verre").find('p').html().indexOf('Miroir');
                    var Polarise = $("#nom_verre").find('p').html().indexOf('Polarisé');
                }
                else {
                    var BlueCoat = -1;
                    var Miroir = -1;
                    var Polarise = -1;
                }

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

                        },
                        success: function(data){
                            if(data!="" && data == "not_logged")
                                window.location.reload();
                            else if(data == "erreur"){
                                swal({
                                    title: "Une erreur est survenue",
                                    text: "Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte. euillez la renouveler où nous contacter si le problème persiste. Merci.",
                                    type: "error",
                                    showCancelButton: true,
                                    confirmButtonClass: 'btn-danger waves-effect waves-light',
                                    confirmButtonText: 'Fermer'
                                });
                            }else{
                                swal({
                                    title: "Commande validée",
                                    text: "Votre commande à été ajouté avec succès, vous pouvez suivre son évolution depuis la page \"Mes commandes\"",
                                    type: "success",
                                    confirmButtonClass: 'btn-warning',
                                    confirmButtonText: "Ok",
                                    closeOnConfirm: false
                                }, function () {
                                    window.location.reload();
                                });
                            }
                        },
                        error:function(){
                            $("#loading-overlay,#loading").hide();
                        }
                    });

                    $(this).parent().fadeOut();
                }


            });


        });

    </script>

<?php include_once('footer.php'); ?>