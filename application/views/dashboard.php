<?php
include_once('header.php');
include_once('menu.php');

if (!isset($panierA)) {
    $panierA = 0;
}
if (is_object($pair_order)) {
    $deuxiemepaire = 1;
} else {
    $deuxiemepaire = 0;
}


?>

    <style>
        a {
            cursor: pointer;
        }

        #progress-tracer {
            border-radius: 0px;
            background-color: #FFFFFF;
        }
        .select2-container .select2-choice > .select2-chosen {
            white-space: break-spaces;
            height: auto;
        }

        .text_info_comp {
            transform: translateY(75%);
        }

        #text_teledetourage_not_connected {
            text-align: justify;
        }
        #divOmaImageOut {
            max-height: 500px;
            max-width: 1000px;
            margin-top: 25px;
            /*margin-left: auto;*/
            /*margin-right: auto;*/
        }

        #btnSetOmaCode {
            padding: 4px;
        }

        .btn-md {
            width: 140px;
        }
        #divSaveOmaToFile {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        input[type="number"] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        .number-input {
            /*border: 2px solid #ddd;*/
            display: inline-flex;
        }

        .number-input,
        .number-input * {
            box-sizing: border-box;
        }

        .number-input button {
            outline:none;
            -webkit-appearance: none;
            background-color: transparent;
            border: none;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            cursor: pointer;
            margin: 0;
            position: relative;
        }

        .number-input button:before,
        .number-input button:after {
            display: inline-block;
            position: absolute;
            content: '';
            width: 1rem;
            height: 2px;
            background-color: #212121;
            transform: translate(-50%, -50%);
        }
        .number-input button.plus:after {
            transform: translate(-50%, -50%) rotate(90deg);
        }

        .number-input input[type=number] {
            font-family: sans-serif;
            /*max-width: 7rem;*/
            /*padding: .5rem;*/
            /*border: solid #ddd;*/
            /*border-width: 0 2px;*/
            font-size: 2rem;
            /*height: 3rem;*/
            font-weight: bold;
            text-align: center;
        }
        .cote_image {
            height: 77px;
        }
        
        /*.divOmaImageData {*/
        /*    margin-bottom: 30px;*/
        /*}*/

        .flex>li {
            flex:1 1 0px;
        }

        .no-margin-right {
            margin-right: 0px !important;
        }

        .nav.type_teledetourage {
            margin-bottom : 10px;
        }

        #btnLaunchTablette {
            width: 100%;
            margin-top: 10px;
        }

        #btnAddDrilled {
            width: 100%;
            margin-top: 10px;
        }

        /*.connect_machine {*/
        /*    margin-top: 33px !important;*/
        /*}*/

        .label_drilled {
            width: 40%;
            line-height: 50px;
        }

        #div_checkbox_polishing {
            margin: 0;
            /*border-radius: 50%;*/
            display: inline-block;
            overflow: hidden;
            position: relative;
            padding-left: 0px;
        }
        #div_checkbox_polishing input[type=checkbox] {
            margin: 0;
            visibility: hidden;
            left: 7px;
            top: 7px;
        }
        #div_checkbox_polishing label {
            width: 25px;
            height: 25px;
            padding: 0;
            /*margin: 0;*/
            border-radius: 50%;
            border: 5px solid #666;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2) inset;
            cursor: pointer;
            display: block;
            position: relative;
            transition: all 0.3s ease 0s;
            margin-top: 13px;
        }
        #div_checkbox_polishing label:hover{ border-width: 7px; }
        #div_checkbox_polishing input[type=checkbox]:checked+label:hover{
            background-color: #4dd54d;
            border: 7px solid #4dd54d;
        }
        #div_checkbox_polishing input[type=checkbox]:checked+label{
            background-color: #21eb21;
            border: 7px solid #21eb21;
            box-shadow: none;
        }

        #div_checkbox_polishing label:before,
        #div_checkbox_polishing label:after{
            content: "";
            background: #fff;
            width: 4px;
            height: 15px;
            opacity: 0;
            transform: translateX(-50%) rotate(55deg);
            position: absolute;
            left: 160%;
            top: -10px;
            transition: all 0.2s ease 0s;
            border: 2px solid #ffffff;
        }
        #div_checkbox_polishing label:after{
            height: 8px;
            transform: translateX(-50%) rotate(-33deg);
            left: -35%;
            top: -6px;
            padding-left: 0px;
        }
        #div_checkbox_polishing input[type=checkbox]:checked+label:before{
            opacity: 1;
            transform: translateX(-50%) rotate(55deg);
            left: 256%;
            top: -2px;
        }
        #div_checkbox_polishing input[type=checkbox]:checked+label:after{
            opacity: 1;
            transform: translateX(-50%) rotate(-33deg);
            left: 183%;
            top: 4px;
        }
        @media only screen and (max-width:767px){
            #div_checkbox_polishing{ margin: 0 0 20px; }
        }
        License Terms
    </style>
    <script>
        var panierA       = <?php if ($panierA == 1) {
            echo "1";
        } else echo "0";?>;
        var panierAm      = <?php if ($panierA == 1) {
            echo "1";
        } else echo "0";?>;
        var deuxiemepaire = <?php if ($deuxiemepaire == 1) {
            echo "1";
        } else echo "0";?>;

        var force_to_ferme = '0';

        var credit = "0";

        function roundToNearest(numToRound, numToRoundTo) {
            numToRoundTo = 1 / (numToRoundTo);

            return (Math.round(numToRound * numToRoundTo) / numToRoundTo).toFixed(2);
        }

        // $('.btn-plus, .btn-minus').on('click', function(e) {
        //     const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
        //     const input = $(e.target).closest('.input-group').find('input');
        //     if (input.is('input')) {
        //         input[0][isNegative ? 'stepDown' : 'stepUp']()
        //     }
        // })
    </script>
    <div class="loading style-2">
        <div class="loading-wheel"></div>
    </div>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div id="loading-overlay" style="display:none;"></div>
                <div id="loading" style="display:none;">
                    <span id="text_loading">Chargement...</span>
                </div>
                <div id="loading-overlay" style="display:none;"></div>
                <div id="loading-drole" style="display:none;">
                    <span id="text_loading_drole">Chargement...</span>
                </div>
                <input type="text" id="user_id" class="form-control" style="display: none;" maxlength="15" value="<?php echo $user_info->id_users ?>"/>
                <?php
                if ($user_info->valid_mandat != 1 || $user_info->commande_suspendue == 1) { ?>
                    <div class="row">
                        <div class="col-sm-12">

                            <?php
                            if ($user_info->valid_mandat != 1) { ?>

                                <div class="card-box clearfix">

                                    <h4 class="header-title m-t-0 m-b-5">Vos informations de paiement</h4>
                                    <p class="m-b-30">Avant de pouvoir passer vos commandes sur OptiEyes, veuillez
                                        renseigner les informations de prélèvement ci-dessous, vous serez amenné à
                                        valider votre mandat par siangature éléctronique avant de pouvoir commander.</p>


                                    <form class="box manual validate" id="update_RIB" enctype="multipart/form-data">

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="reference_client">Société</label>
                                            <div class="col-lg-10">
                                                <input id="companyName" name="companyName" type="text"
                                                       class="required form-control" value="<?php
                                                echo $user_info->nom_magasin ?>"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group rd-200 clearfix m-b-15">
                                            <label class="col-lg-2 control-label">Civilité du gérant</label>
                                            <div class="col-lg-10">
                                                <div class="radio radio-warning radio-inline">
                                                    <input type="radio" id="civilite_1" value="1" name="honorificPrefix"
                                                           class="required" checked>
                                                    <label for="civilite_1"> M. </label>
                                                </div>
                                                <div class="radio radio-warning radio-inline">
                                                    <input type="radio" id="civilite_2" value="2" name="honorificPrefix"
                                                           class="required">
                                                    <label for="civilite_2"> Mme </label>
                                                </div>
                                                <div class="radio radio-warning radio-inline">
                                                    <input type="radio" id="civilite_3" value="3" name="honorificPrefix"
                                                           class="required">
                                                    <label for="civilite_3"> Mlle </label>
                                                </div>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="familyName">Nom du gérant</label>
                                            <div class="col-lg-10">
                                                <input id="familyName" name="familyName" type="text"
                                                       class="required form-control"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="givenName">Prénom du
                                                gérant</label>
                                            <div class="col-lg-10">
                                                <input id="givenName" name="givenName" type="text"
                                                       class="required form-control"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="street1">Adresse de la
                                                société</label>
                                            <div class="col-lg-10">
                                                <input id="street1" name="street1" type="text"
                                                       class="required form-control" value="<?php
                                                echo $user_info->adresse ?>"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="street2">Complément</label>
                                            <div class="col-lg-10">
                                                <input id="street2" name="street2" type="text"
                                                       class="required form-control"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="city">Ville</label>
                                            <div class="col-lg-10">
                                                <input id="city" name="city" type="text" class="required form-control"
                                                       value="<?php
                                                       echo $user_info->ville ?>"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="postalCode">Code Postal</label>
                                            <div class="col-lg-10">
                                                <input id="postalCode" name="postalCode" type="text"
                                                       class="required form-control" value="<?php
                                                echo $user_info->cp ?>"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="pays">Pays</label>
                                            <div class="col-lg-10">
                                                <input id="pays" name="pays" type="text" class="required form-control"
                                                       value="France" disabled/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix m-b-15">
                                            <label class="col-lg-2 control-label" for="iban">IBAN</label>
                                            <div class="col-lg-10">
                                                <input id="iban" name="iban" type="text" class="required form-control"/>
                                                <div class="validator"></div>
                                            </div>
                                        </div>


                                        <button type="submit" id="btn_update_RIB" class="btn btn-warning">Envoyer
                                        </button>


                                    </form>


                                </div>

                                <?php
                            } elseif ($user_info->commande_suspendue == 1) {

                                echo '<div class="card-box clearfix">
								<h4 class="header-title m-t-0 m-b-5">Commandes suspendues</h4>
								<p class="m-b-30"><strong>Attention !</strong> La partie commande vous a été restreinte jusqu\'à la régularisation de votre compte. Contactez-nous pour de plus amples informations.</p>
							</div>';

                            }

                            ?>

                        </div>

                    </div><!-- end col -->
                    <?php
                }
                else
                {
                ?>
                <form id="commandeForm" class="form-edit-add form-commande" role="form"
                      action=""
                      method="POST" enctype="multipart/form-data" autocomplete="off">

                    <div class="row">
                        <div class="col-sm-12 m-b-10">
                            <h4 class="page-title">Passer une commande</h4><?php
                            if (is_object($pair_order)) {
                                //var_dump($pair_order);
                                $pair_order_correction = json_decode($pair_order->information_commande, true);

                                if ($pair_order->generation == "T-One") {
                                    $pair_order->trad_fr = str_replace("E-Space", "T-One", $pair_order->trad_fr);
                                }

                                echo '<strong class="pair-title">Deuxième paire pour la commande de '
                                     . $pair_order->trad_fr . ' référence "' . $pair_order->reference_client
                                     . '"</strong>';
                            } ?>
                        </div>
                        <div class="page-content container-fluid">


                            <div class="row">
                                <div class="col-md-12">
                                    <div id="stepswizard" class="pull-in">
                                        <ul class="nav nav-tabs navtab-wizard nav-justified bg-muted display_stock">
                                            <li class="active" id="titre_etape1"><a href="#" data-toggle="tab"
                                                                                    aria-expanded="true"><span>Etape 1 <b>/ 2</b></span><br>
                                                    <i>Commande Verres</i></a></li>
                                            <li id="titre_etape2"><a href="#" data-toggle="tab"
                                                                     aria-expanded="true"><span>Etape 2 <b>/ 2</b></span><br>
                                                    <i>Récapitulatif</i></a></li>
                                        </ul>
                                        <div class="tab-content m-b-0 b-0">
                                            <div class="tab-pane m-t-10 fade active in" id="etape1">
                                                <div class="tab-content">
                                                    <div id="commande" class="tab-pane fade in active">
                                                        <div>
                                                            <div class="panel panel-bordered">
                                                                <div class="panel-body">
                                                                    <div class="form-group row" id="div1_type_commande">
                                                                        <div class="col-m-12">
                                                                            <div class="panel panel-default focus_panel"
                                                                                 id="div2_type_commande">
                                                                                <div class="panel-heading"><h5>Type de
                                                                                        commande</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <div class="col-lg-12 card-tabs">
                                                                                        <ul class="nav nav-pills type_commande_verre flex flex-space-between" style = "text-align:center">
                                                                                            <li <?php
                                                                                            if (is_object($pair_order)
                                                                                                || $panierA == 1) {
                                                                                                echo 'class="active"';
                                                                                            } ?>
                                                                                                    id="li_commande_ferme">
                                                                                                <a href="#"
                                                                                                   data-toggle="tab"
                                                                                                   aria-expanded="true"
                                                                                                   id="commande_ferme"><b>Commande
                                                                                                        ferme</b></a>
                                                                                            </li>
                                                                                            <?php
                                                                                            if ($panierA != 1) {
                                                                                                ?>
                                                                                                <li <?php
                                                                                                if (is_object($pair_order)) {
                                                                                                    echo 'class="hide"';
                                                                                                }
                                                                                                if ($type_commande
                                                                                                    == '2') {
                                                                                                    echo 'class="active"';
                                                                                                } ?> id="li_casse_atelier">
                                                                                                    <a href="/index/passer_commande/false/2"
                                                                                                       id="casse_atelier"><b>Casse
                                                                                                            atelier</b></a>
                                                                                                </li>
                                                                                                <li <?php
                                                                                                if (is_object($pair_order)) {
                                                                                                    echo 'class="hide"';
                                                                                                }
                                                                                                if ($type_commande
                                                                                                    == '3') {
                                                                                                    echo 'class="active"';
                                                                                                } ?> id="li_erreur_ophta">
                                                                                                    <a href="/index/passer_commande/false/3"
                                                                                                       id="erreur_ophtalmologiste" class="no-margin-right"><b>Erreur
                                                                                                            ophtalmologiste</b></a>
                                                                                                </li>
                                                                                                <?php
                                                                                            }
                                                                                            ?>
                                                                                        </ul>

                                                                                        <div class="ec_commande_status"
                                                                                             style="display: none;">
                                                                                            <div class="alert alert-warning"
                                                                                                 style="margin-bottom: 0px;"
                                                                                                 id="status_credit">
                                                                                                Votre crédit : <b>417.78
                                                                                                    €</b></div>
                                                                                        </div>

                                                                                        <div class="validator"></div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row ancienne_commande_ref">
                                                                        <div class="col-m-12">
                                                                            <div class="panel panel-default focus_panel">
                                                                                <div class="panel-heading"><h5>Référence
                                                                                        commande remplacée</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <div class="commandes_list">
                                                                                        <select name="ancienne_commande"
                                                                                                id="stock_ancienne_commande"
                                                                                                class="form-control select-search">
                                                                                            <?php
                                                                                            echo $id_commandes; ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="validator"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row hide"
                                                                         id="div1_ref_client">
                                                                        <div class="col-m-12">
                                                                            <div class="panel panel-default focus_panel"
                                                                                 id="div2_ref_client">
                                                                                <div class="panel-heading"><h5>Référence
                                                                                        client</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <div style="height: 41px; width: 100%; border: 1px solid #dcdcdc;border-radius: 4px; padding: 8px 10px 0px 10px;">
                                                                                        <input type="text"
                                                                                               maxlength="14"
                                                                                               id="reference_client"
                                                                                               name="reference_client"
                                                                                               style="border:none;width: 70%;"
                                                                                            <?php
                                                                                            if (is_object($pair_order)) {
                                                                                                echo 'value="'
                                                                                                     . $pair_order->reference_client
                                                                                                     . '" readonly';
                                                                                            } else {
                                                                                                if (isset($refPanierA)) {
                                                                                                    echo 'value="'
                                                                                                         . $refPanierA
                                                                                                         . '"';
                                                                                                } else {
                                                                                                    ?>
                                                                                                    value=""
                                                                                                    <?php
                                                                                                }
                                                                                            } ?>
                                                                                        >
                                                                                        <span id="compeur_caracteres"
                                                                                              style="float: right;">14 Caractères restants</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row <?php
                                                                    if (!is_object($pair_order) && $panierA != 1) {
                                                                        echo 'hide';
                                                                    } ?>" id="caracteristique_verre">
                                                                        <div class="col-xs-12 col-md-3">
                                                                            <div class="panel panel-default panel-intro">
                                                                                <div class="panel-heading "><h5>
                                                                                        Télédétourage</h5></div>
                                                                                <div class="panel-body text-center">
                                                                                    <div id="div_is_teledetourage" style="text-align: center;">
<!--                                                                                        <h5 style="text-align: left;"><span class="color-sample-standard"></span>&nbsp;Standard<br>-->
<!--                                                                                            <span class="color-sample-teledetourage"></span>&nbsp;Télédétourage</h5>-->
                                                                                        <label class="switch">
                                                                                            <input id="is_teledetourage" class="is_teledetourage" type="checkbox"
                                                                                            <?php
                                                                                                if (!$user_info->is_teledetourable) {
                                                                                                    echo 'disabled';
                                                                                                }
                                                                                            ?>
                                                                                            >
                                                                                            <span id='slider_teledetourage' class="slider slider_teledetourage round"
                                                                                            <?php
                                                                                            if (!$user_info->is_teledetourable) {
                                                                                                echo 'style = "cursor: no-drop"';
                                                                                            }
                                                                                            ?>
                                                                                            ></span>
                                                                                        </label>
                                                                                    </div>
<!--                                                                                    <div class="radio radio-warning radio-inline">-->
<!--                                                                                        <input type="radio"-->
<!--                                                                                               id="Standard"-->
<!--                                                                                               value="Standard"-->
<!--                                                                                               name="format"-->
<!--                                                                                               class="required"-->
<!--                                                                                               aria-required="true"-->
<!--                                                                                               checked>-->
<!--                                                                                        <label for="Standard">-->
<!--                                                                                            Standard </label>-->
<!--                                                                                    </div>-->
<!---->
<!--                                                                                    <div class="radio radio-warning radio-inline">-->
<!--                                                                                        <input type="radio"-->
<!--                                                                                               id="Teledetourage"-->
<!--                                                                                               value="Teledetourage"-->
<!--                                                                                               name="format"-->
<!--                                                                                               class="required"-->
<!--                                                                                               aria-required="true"-->
<!--                                                                                            --><?php
//                                                                                            if (!$user_info->is_teledetourable) {
//                                                                                                echo 'disabled';
//                                                                                            } ?>
<!--                                                                                        >-->
<!--                                                                                        <label for="Teledetourage">-->
<!--                                                                                            Teledetourage </label>-->
<!---->
<!--                                                                                    </div>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xs-12 col-md-3">
                                                                            <div class="panel panel-default focus_panel panel-intro"
                                                                                 id="indices_panel">
                                                                                <div class="panel-heading"><h5>
                                                                                        Indice</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <select class="form-control"
                                                                                            id="indices" name="indices">
                                                                                        <option value="">-- Choisir --
                                                                                        </option>
                                                                                        <option value="1.5">1.5</option>
                                                                                        <option value="1.53">1.53
                                                                                            Trivex
                                                                                        </option>
                                                                                        <option value="1.56">1.56
                                                                                        </option>
                                                                                        <option value="1.59">1.591
                                                                                            Polycarbonate
                                                                                        </option>
                                                                                        <option value="1.6">1.6</option>
                                                                                        <option value="1.67">1.67
                                                                                        </option>
                                                                                        <option value="1.74">1.74
                                                                                        </option>
                                                                                        <option value="mineral">
                                                                                            Minéral
                                                                                        </option>
                                                                                    </select></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-3 hide"
                                                                             id="type_produit">
                                                                            <div class="panel panel-default panel-intro"
                                                                                 id="lensFocalGroup_panel">
                                                                                <div
                                                                                        class="panel-heading"><h5>Type de
                                                                                        produit</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px"><select
                                                                                            class="form-control"
                                                                                            id="lensFocalGroup"
                                                                                            name="lensFocalGroup">
                                                                                        <option value="">-- Choisir --
                                                                                        </option>
                                                                                        <?php
                                                                                        if (is_object($pair_order)) {
                                                                                            if ($pair_order->id_generation_verre
                                                                                                == 31 || $pair_order->id_generation_verre
                                                                                                         == 36) {
                                                                                                echo '<option value="1">Unifocal</option>
																				  <option value="6">EyeFatigue</option>';
                                                                                            } elseif ($pair_order->id_generation_verre
                                                                                                      == 32
                                                                                                      || $pair_order->id_generation_verre
                                                                                                         == 35) {
                                                                                                echo '<option value="2">Bifocal</option>
																					<option value="3">Progressif</option>
																					<option value="4">Dégressif</option>
																					<option value="5">Trifocal</option>';
                                                                                            } elseif ($pair_order->id_generation_verre
                                                                                                      == 33) {
                                                                                                echo '<option value="3">Progressif</option>
																				  <option value="4">Dégressif</option>
																				  <option value="2">Bifocal</option>
																				  <option value="5">Trifocal</option>';
                                                                                            } elseif ($pair_order->id_generation_verre
                                                                                                      == 34) {
                                                                                                echo '<option value="4">Dégressif</option>';
                                                                                            }

                                                                                        } else {
                                                                                            ?>
                                                                                            <option value="1">Unifocal
                                                                                            </option>
                                                                                            <option value="3">
                                                                                                Progressif
                                                                                            </option>
                                                                                            <option value="4">
                                                                                                Dégressif
                                                                                            </option>
                                                                                            <?php
                                                                                            if ($panierA != 1) {
                                                                                                ?>
                                                                                                <option value="6">
                                                                                                    EyeFatigue
                                                                                                </option>
                                                                                                <?php
                                                                                            }
                                                                                            ?>
                                                                                            <option value="2">Bifocal
                                                                                            </option>
                                                                                            <?php
                                                                                            if ($panierA != 1) {
                                                                                                ?>
                                                                                                <option value="5">
                                                                                                    Trifocal
                                                                                                </option>
                                                                                                <?php
                                                                                            }
                                                                                        } ?>
                                                                                    </select></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-3 hide"
                                                                             id="generation_progressif">
                                                                            <div class="panel panel-default panel-intro"
                                                                                 id="generation_panel">
                                                                                <div class="panel-heading"><h5>
                                                                                        Génération</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px"><select
                                                                                            class="form-control"
                                                                                            name="generation"
                                                                                            id="generation">
                                                                                        <option value="">-- Choisir --
                                                                                        </option>
                                                                                        <?php
                                                                                        if ($panierA != 1) { ?>
                                                                                            <option value="T-One">
                                                                                                T-One
                                                                                            </option>
                                                                                            <option value="E-Space">
                                                                                                E-Space
                                                                                            </option>
                                                                                            <option value="Platinium">
                                                                                                Platinium
                                                                                            </option>
                                                                                            <option value="Omega">
                                                                                                Omega
                                                                                            </option>
                                                                                            <option value="Elysium">
                                                                                                Elysium
                                                                                            </option>
                                                                                            <?php
                                                                                            if (!is_object($pair_order)) { ?>
                                                                                                <option value="Progressif de stock">
                                                                                                    Progressif de stock
                                                                                                </option>
                                                                                                <?php
                                                                                            } ?>
                                                                                            <?php
                                                                                        }
                                                                                        if (!is_object($pair_order)) { ?>
                                                                                            <option value="Panier A Initial" <?php
                                                                                            if ($panierA == 1) {
                                                                                                echo "selected";
                                                                                            } ?>>
                                                                                                Panier A Initial
                                                                                            </option>
                                                                                            <?php
                                                                                        } ?>
                                                                                    </select></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row hide" id="div1_format_type">
                                                                        <div class="col-m-12">
                                                                            <div class="panel panel-default focus_panel"
                                                                                 id="div2_format_type">
                                                                                <div class="panel-heading"><h5>Type de
                                                                                        monture</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <div class="col-lg-12 card-tabs">
                                                                                        <ul id="ul_type_format" class="nav nav-pills type_commande_verre flex flex-space-between" style = "text-align:center">
                                                                                            <li id="li_format_metal">
                                                                                                <a href="#"
                                                                                                   data-toggle="tab"
                                                                                                   aria-expanded="true"
                                                                                                   id="format_metal"><b>Métal</b></a>
                                                                                            </li>
                                                                                            <li id="li_format_plastique">
                                                                                                <a href="#"
                                                                                                   data-toggle="tab"
                                                                                                   aria-expanded="false"
                                                                                                   id="format_plastique"><b>Plastique</b></a>
                                                                                            </li>
                                                                                            <li id="li_format_nylor">
                                                                                                <a href="#"
                                                                                                   data-toggle="tab"
                                                                                                   aria-expanded="false"
                                                                                                   id="format_nylor"><b>Nylor</b></a>
                                                                                            </li>
                                                                                            <li id="li_format_perce">
                                                                                                <a href="#"
                                                                                                   data-toggle="tab"
                                                                                                   aria-expanded="false"
                                                                                                   id="format_perce"
                                                                                                   class="no-margin-right"><b>Percée</b></a>
                                                                                            </li>
                                                                                        </ul>

                                                                                        <div class="ec_commande_status"
                                                                                             style="display: none;">
                                                                                            <div class="alert alert-warning"
                                                                                                 style="margin-bottom: 0px;"
                                                                                                 id="status_credit">
                                                                                                Votre crédit : <b>417.78
                                                                                                    €</b></div>
                                                                                        </div>

                                                                                        <div class="validator"></div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row hide"
                                                                         id="div_teledetourage">
                                                                        <div class="col-xs-12" id="tab_teledetourage">
                                                                            <div class="panel panel-default"
                                                                                 id="refraction_panel">
                                                                                <div class="panel-heading"><h5>
                                                                                        Forme</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <div class="row">
                                                                                        <div class="col-12">
<!--                                                                                        <div class="col-12">-->
                                                                                            <input type="text" id="txtCustomerCode" class="form-control" style="display: none;" maxlength="15" />
                                                                                            <div class="w-100" id="divDevices" style="display:none">
                                                                                                <div id="choice_machine">
                                                                                                    <label class="w-100 text-muted">Veuillez choisir la machine connectée</label>
                                                                                                    <select class="form-control" id="ddlDevices" style="max-width:200px">
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="card-tabs">
                                                                                                    <ul class="nav nav-pills type_teledetourage flex flex-space-between my-0 px-3" style = "text-align:center">
                                                                                                        <li id="li_btnLaunchTracer">
                                                                                                            <a 
                                                                                                               data-toggle="tab"
                                                                                                               aria-expanded="true"
                                                                                                               id="btnLaunchTracer"><b>Tracer la forme</b></a>
                                                                                                        </li>
<!--                                                                                                        <li id="li_btnLaunchTablette">-->
<!--                                                                                                            <a href="#"-->
<!--                                                                                                               data-toggle="tab"-->
<!--                                                                                                               aria-expanded="true"-->
<!--                                                                                                               id="btnLaunchTablette"><b>Lancer la tablette</b></a>-->
<!--                                                                                                        </li>-->
                                                                                                        <li id="li_btnSetOmaCode">
                                                                                                            <a href="#"
                                                                                                               data-toggle="tab"
                                                                                                               aria-expanded="true"
                                                                                                               id="btnSetOmaCode"
                                                                                                               class="no-margin-right"><b>Charger une forme</b></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                    <input type="file" name="inputFileToOma" id="inputFileToOma" aria-invalid="false" class="valid hide">

<!--                                                                                                    <div class="md-form input-group flex flex-space-between">-->
<!--                                                                                                        <div class="input-group-append">-->
<!--                                                                                                            <button class="btn btn-md btn-warning my-0 px-3" type="button" id="btnLaunchTracer" onclick="LaunchTracer();">Lancer le Traceur</button>-->
<!--                                                                                                        </div>-->
<!--                                                                                                        <div class="input-group-append">-->
<!--                                                                                                            <button class="btn btn-md btn-warning my-0 px-3" type="button" id="btnLaunchTablette" onclick="LaunchTablette();" disabled>Lancer la Tablette</button>-->
<!--                                                                                                        </div>-->
<!--                                                                                                        <div class="input-group-append">-->
<!--                                                                                                            <button class="btn btn-md btn-warning my-0 px-3" type="button" id="btnSetOmaCode" onclick="SetCodeOma();">Récupérer <br>d'un fichier OMA</button>-->
<!--                                                                                                        </div>-->
<!--                                                                                                        <input type="file" name="inputFileToOma" id="inputFileToOma" aria-invalid="false" class="valid hide">-->
<!--                                                                                                    </div>-->
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="w-100 w-100 border rounded p-2" id="divDebug">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="note note-warning" id="omaImageDatas" style="display: none">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-8 col-xs-12" >
                                                                                                            <div class="md-form input-group hide">
                                                                                                                <textarea id="txtOmaImageIn" name="txtOmaImageIn" class="md-textarea form-control" rows="5"></textarea>
                                                                                                                <label for="txtOmaImageIn">Forme OMA</label>
                                                                                                                <div class="input-group-append">
                                                                                                                    <button class="btn btn-md btn-warning my-0 px-3" type="button" onclick="GetImageFromOma();">Récupérer l'image</button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div id="divOmaImageOut">
                                                                                                                <img id="imgOmaImageOut" />
                                                                                                            </div>
    <!--                                                                                                        <div class="col-md-12 divOmaImageData">-->
    <!--                                                                                                            <div class="col-md-6">-->
    <!--                                                                                                                <div style="text-align:center;padding-bottom:10px">-->
    <!--                                                                                                                    Ecarts-->
    <!--                                                                                                                    pupillaire-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div style="text-align: center">-->
    <!--                                                                                                                <img alt="Ecart pupillaire"-->
    <!--                                                                                                                     class="hep-image"-->
    <!--                                                                                                                     src="/static/img/mesure_freeform/ecart_pup.jpg"-->
    <!--                                                                                                                     style="margin-bottom: 18px;">-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-6" style="text-align: center">-->
    <!--                                                                                                                    <div>-->
    <!--                                                                                                                        <label>DROITE</label>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_ecart_puppillaire"></button>-->
    <!--                                                                                                                        <input id="teledetourage_ecart_puppillaire_droit" class="quantity teledetourage_ecart_puppillaire" min="15" max=55 name="quantity" value="27" type="number" step="0.1">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_ecart_puppillaire" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-6" style="text-align: center">-->
    <!--                                                                                                                    <div>-->
    <!--                                                                                                                        <label>GAUCHE</label>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_ecart_puppillaire"></button>-->
    <!--                                                                                                                        <input id="teledetourage_ecart_puppillaire_gauche" class="quantity teledetourage_ecart_puppillaire" min="15" max="55" name="quantity" value="27" type="number" step="0.1">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_ecart_puppillaire" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                            </div>-->
    <!--                                                                                                            <div class="col-md-6">-->
    <!--                                                                                                                <div style="text-align:center;padding-bottom:10px">-->
    <!--                                                                                                                    Hauteur de-->
    <!--                                                                                                                    montage-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div style="text-align: center">-->
    <!--                                                                                                                    <img alt="Hauteur"-->
    <!--                                                                                                                         class="hep-image"-->
    <!--                                                                                                                         src="/static/img/mesure_freeform/Hauteur.jpg"-->
    <!--                                                                                                                         style="margin-bottom: 18px;">-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-6" style="text-align: center">-->
    <!--                                                                                                                    <div>-->
    <!--                                                                                                                        <label>DROITE</label>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_hauteur_montage"></button>-->
    <!--                                                                                                                        <input id="hauteur_montage_droit" class="hauteur_montage quantity" min="5" max="60" name="quantity" value="25" type="number" step="0.1">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_hauteur_montage" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-6" style="text-align: center">-->
    <!--                                                                                                                    <div>-->
    <!--                                                                                                                        <label>GAUCHE</label>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_hauteur_montage"></button>-->
    <!--                                                                                                                        <input id="hauteur_montage_gauche" class="hauteur_montage quantity" min="5" max="60" name="quantity" value="25" type="number" step="0.1">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_hauteur_montage" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                            </div>-->
    <!--                                                                                                        </div>-->
    <!---->
    <!--                                                                                                        <div class="col-md-12 divOmaImageData">-->
    <!--                                                                                                            <div class="col-md-4">-->
    <!--                                                                                                                <div style="text-align:center;padding-bottom:10px">-->
    <!--                                                                                                                    Largeur boxing-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div style="text-align: center" class="cote_image">-->
    <!--                                                                                                                    <img alt="Largeur boxing"-->
    <!--                                                                                                                         class="hep-image"-->
    <!--                                                                                                                         src="/static/img/mesure_freeform/cote_a.jpg"-->
    <!--                                                                                                                         style="margin-bottom: 18px;">-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-12" style="text-align: center">-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_largeur_boxing"></button>-->
    <!--                                                                                                                        <input id="largeur_boxing" class="quantity" min="0" name="quantity" value="0" type="number" step="0.01">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_largeur_boxing" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                            </div>-->
    <!--                                                                                                            <div class="col-md-4">-->
    <!--                                                                                                                <div style="text-align:center;padding-bottom:10px">-->
    <!--                                                                                                                    Hauteur boxing-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div style="text-align: center" class="cote_image">-->
    <!--                                                                                                                    <img alt="Hauteur boxing"-->
    <!--                                                                                                                         class="hep-image"7rem-->
    <!--                                                                                                                         src="/static/img/mesure_freeform/cote_b.jpg"-->
    <!--                                                                                                                         style="margin-bottom: 18px;">-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-12" style="text-align: center">-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_hauteur_boxing"></button>-->
    <!--                                                                                                                        <input id="hauteur_boxing" class="quantity" min="0" name="quantity" value="0" type="number" step="0.01">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_hauteur_boxing" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                            </div>-->
    <!--                                                                                                            <div class="col-md-4">-->
    <!--                                                                                                                <div style="text-align:center;padding-bottom:10px">-->
    <!--                                                                                                                    Taille du pont-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div style="text-align: center" class="cote_image">-->
    <!--                                                                                                                    <img alt="Taille du pont"-->
    <!--                                                                                                                         class="hep-image"-->
    <!--                                                                                                                         src="/static/img/mesure_freeform/cote_c.jpg"-->
    <!--                                                                                                                         style="margin-bottom: 18px;">-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                                <div class="col-md-12" style="text-align: center">-->
    <!--                                                                                                                    <div class="number-input">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="change_taille_du_pont"></button>-->
    <!--                                                                                                                        <input id="taille_du_pont" class="quantity" min="0" max="50" name="quantity" value="18" type="number" step="0.1">-->
    <!--                                                                                                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus change_taille_du_pont" type="button"></button>-->
    <!--                                                                                                                    </div>-->
    <!--                                                                                                                </div>-->
    <!--                                                                                                            </div>-->
    <!--                                                                                                        </div>-->
                                                                                                        </div>
                                                                                                        <div class="col-md-4 col-xs-12" style="margin-top: 30px;">
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Taille de la monture</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-6 number-input">
                                                                                                                    <input type="number"
                                                                                                                           min="0"
                                                                                                                           class="quantity valid form-control"
                                                                                                                           name="largeur_boxing"
                                                                                                                           id="largeur_boxing"
                                                                                                                           value=""
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Taille du pont</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-6 number-input">
                                                                                                                    <input type="number"
                                                                                                                           min="0" max="50"
                                                                                                                           class="quantity valid form-control"
                                                                                                                           name="taille_du_pont"
                                                                                                                           id="taille_du_pont"
                                                                                                                           value=""
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Hauteur du calibre</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-6 number-input">
                                                                                                                    <input type="number"
                                                                                                                           min="0"
                                                                                                                           class="quantity valid form-control"
                                                                                                                           name="hauteur_boxing"
                                                                                                                           id="hauteur_boxing"
                                                                                                                           value=""
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Epaisseur du verre</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-6 number-input">
                                                                                                                    <input type="number"
                                                                                                                           min="0.6"
                                                                                                                           class="quantity valid form-control"
                                                                                                                           name="edge_thickness"
                                                                                                                           id="edge_thickness"
                                                                                                                           value="0.8"
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row" style="margin-top: 20px;">

                                                                                                                <div class="col-xs-12 col-md-5"></div>
                                                                                                                <div class="col-xs-12 col-md-3 text-center text_info_comp">
                                                                                                                    <strong>oeil droit</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-3 text-center text_info_comp">
                                                                                                                    <strong>oeil gauche</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Écart pupillaire</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-3 number-input">
                                                                                                                    <input id="teledetourage_ecart_puppillaire_droit"
                                                                                                                           class="quantity teledetourage_ecart_puppillaire valid form-control"
                                                                                                                           min="15" max="55"
                                                                                                                           name="teledetourage_ecart_puppillaire_droit"
                                                                                                                           value=""
                                                                                                                           type="number"
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-3 number-input">
                                                                                                                    <input type="number"
                                                                                                                           class="quantity teledetourage_ecart_puppillaire valid form-control"
                                                                                                                           min="15" max="55"
                                                                                                                           name="teledetourage_ecart_puppillaire_gauche"
                                                                                                                           id="teledetourage_ecart_puppillaire_gauche"
                                                                                                                           value=""
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Hauteur de montage</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-3 number-input">
                                                                                                                <input type="number"
                                                                                                                       min="5" max="60"
                                                                                                                       class="quantity hauteur_montage valid form-control"
                                                                                                                       name="hauteur_montage_droit"
                                                                                                                       id="hauteur_montage_droit"
                                                                                                                       value=""
                                                                                                                       aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-3 number-input">
                                                                                                                    <input type="number"
                                                                                                                           min="5" max="60"
                                                                                                                           class="quantity hauteur_montage valid form-control"
                                                                                                                           name="hauteur_montage_gauche"
                                                                                                                           id="hauteur_montage_gauche"
                                                                                                                           value=""
                                                                                                                           aria-invalid="false">
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row hide" id="div_polishing">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Polissage</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-6 number-input">
                                                                                                                    <div class="checkbox" id="div_checkbox_polishing">
                                                                                                                        <input type="checkbox" id="polishing" name="polishing" class="valid form-control" checked="">
                                                                                                                        <label for="polishing"></label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                            <div class="form-group row hide" id="addDrilled">
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                                <div class="col-xs-12 col-md-10 input-group-append">
<!--                                                                                                                    <button class="btn btn-warning my-0 px-3 hide" type="button" id="btnLaunchTablette" onclick="LaunchTablette();" disabled>Percez vos verres</button>-->
                                                                                                                    <button class="btn btn-warning my-0 px-3" type="button" id="btnAddDrilled" onclick="addDrilled();">Ajouter un point de Percage</button>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-1"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div id="add_drille" style="margin-top: 20px;">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div id="divOmaImageError hide">

                                                                                                </div>
                                                                                                <?php
                                                                                                if ($user_info->can_save_oma) {
                                                                                                ?>
                                                                                                <div class="input-group-append" id="divSaveOmaToFile">
                                                                                                    <button class="btn btn-warning my-0 px-3" type="button" id="btnSaveOmaToFile" onclick="saveOmaToFile();">Sauvegarder le code OMA<br>dans un fichier</button>
                                                                                                </div>
                                                                                                <?php }?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>

                                                                    <div class="form-group row hide"
                                                                         id="div_refraction">
                                                                        <div class="col-xs-12" id="tab_refraction">
                                                                            <div class="panel panel-default"
                                                                                 id="refraction_panel">
                                                                                <div class="panel-heading"><h5>
                                                                                        Réfraction</h5></div>
                                                                                <div class="panel-body"
                                                                                     style="padding-top: 15px">
                                                                                    <div class="col-xs-12">
                                                                                        <div class="form-group row">

                                                                                            <div class="col-xs-12 col-md-2"></div>
                                                                                            <div class="col-xs-12 col-md-2 text-center"
                                                                                                 style="margin-right: 20px;">
                                                                                                <strong>Sphere</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2 text-center"
                                                                                                 style="margin-right: 20px;">
                                                                                                <strong>Cylindre</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2 text-center"
                                                                                                 style="margin-right: 20px;">
                                                                                                <strong>Axe</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2 text-center addition"
                                                                                                 style="margin-right: 20px;">
                                                                                                <strong>Addition</strong>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">

                                                                                            <div class="col-xs-12 col-md-2">
                                                                                                <input type="checkbox"
                                                                                                       class="jsswitch droit"
                                                                                                       data-color="#64bd63"
                                                                                                       id="droit"
                                                                                                       name="droit"
                                                                                                       value="droit"
                                                                                                       style="float:right"
                                                                                                       checked> <strong>Oeil
                                                                                                    Droit</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2"
                                                                                                 style="margin-right: 20px;">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       name="sphereD"
                                                                                                       id="sphereD"
                                                                                                       value="+0.00">
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2"
                                                                                                 style="margin-right: 20px;">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       name="cylindreD"
                                                                                                       id="cylindreD"
                                                                                                       value="+0.00">
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2"
                                                                                                 style="margin-right: 20px;">
                                                                                                <input type="number"
                                                                                                       class="form-control"
                                                                                                       name="axeD"
                                                                                                       id="axeD"
                                                                                                       value='0' min='0'
                                                                                                       max="360"></div>
                                                                                            <div class="col-xs-12 col-md-2">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       name="additionD"
                                                                                                       id="additionD"
                                                                                                       value="+0.00">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">

                                                                                            <div class="col-xs-12 col-md-2">
                                                                                                <input type="checkbox"
                                                                                                       class="jsswitch gauche"
                                                                                                       data-color="#64bd63"
                                                                                                       id="gauche"
                                                                                                       name="gauche"
                                                                                                       value="gauche"
                                                                                                       style="float:right"
                                                                                                       checked> <strong>Oeil
                                                                                                    Gauche</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2"
                                                                                                 style="margin-right: 20px;">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       name="sphereG"
                                                                                                       id="sphereG"
                                                                                                       value="+0.00">
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2"
                                                                                                 style="margin-right: 20px;">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       name="cylindreG"
                                                                                                       id="cylindreG"
                                                                                                       value="+0.00">
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-md-2"
                                                                                                 style="margin-right: 20px;">
                                                                                                <input type="number"
                                                                                                       class="form-control"
                                                                                                       name="axeG"
                                                                                                       id="axeG"
                                                                                                       value='0' min='0'
                                                                                                       max="360"></div>
                                                                                            <div class="col-xs-12 col-md-2">
                                                                                                <input type="text"
                                                                                                       class="form-control"
                                                                                                       name="additionG"
                                                                                                       id="additionG"
                                                                                                       value="+0.00">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="btn btn-warning btn-lg waves-effect waves-light"
                                                                             style="width: 100%;"
                                                                             id="afficherV">Afficher les verres
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group row hide" id="produit">
                                                                        <div class="col-xs-12">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading"><h5>
                                                                                        Produit</h5></div>
                                                                                <div class="panel-body "
                                                                                     style="padding-top: 15px">

                                                                                    <div class="form-group row">
                                                                                        <div class="col-xs-12 col-md-6 ">
                                                                                            <div class="panel panel-default display_droit">
                                                                                                <div class="panel-heading">
                                                                                                    <h5>Droit
                                                                                                        <div class="btn btn-warning"
                                                                                                             style="float:right; cursor:hand;margin-top: -9px;max-width: 100%; white-space: normal;"
                                                                                                             id="VersGauche">
                                                                                                            <strong>Copier
                                                                                                                sur le
                                                                                                                gauche
                                                                                                                >></strong>
                                                                                                        </div>
                                                                                                    </h5>
                                                                                                </div>
                                                                                                <div class="panel-body"
                                                                                                     style="padding-top: 15px">
                                                                                                    <div class="form-group row"
                                                                                                         style="height: 28px;">
                                                                                                        <div class="col-xs-12 col-md-3">
                                                                                                            Disponibilité
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-md-9">
                                                                                                            <div class="radio radio-warning radio-inline">
                                                                                                                <input type="radio"
                                                                                                                       value="ToutD"
                                                                                                                       id="ToutD"
                                                                                                                       name="dispoD"
                                                                                                                       aria-required="true"
                                                                                                                       checked>
                                                                                                                <label for="ToutD">
                                                                                                                    Tout </label>
                                                                                                            </div>

                                                                                                            <div class="radio radio-warning radio-inline"
                                                                                                                 style="margin-left: 20px;">
                                                                                                                <input type="radio"
                                                                                                                       value="StockD"
                                                                                                                       id="StockD"
                                                                                                                       name="dispoD"
                                                                                                                       aria-required="true">
                                                                                                                <label for="StockD">
                                                                                                                    Stock </label>
                                                                                                            </div>

                                                                                                            <div class="radio radio-warning radio-inline"
                                                                                                                 style="margin-left: 6px;">
                                                                                                                <input type="radio"
                                                                                                                       value="FabricationD"
                                                                                                                       id="FabricationD"
                                                                                                                       name="dispoD"
                                                                                                                       aria-required="true">
                                                                                                                <label for="FabricationD">
                                                                                                                    Fabrication </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row"
                                                                                                         id="progression_D">
                                                                                                        <div class="col-xs-12 col-md-3">
                                                                                                            Couloir de
                                                                                                            Progression
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-md-9">
                                                                                                            <select class="form-control"
                                                                                                                    id="progressionD"
                                                                                                                    name="progressionD">
                                                                                                                <option value="">
                                                                                                                    --
                                                                                                                    Choisir
                                                                                                                    --
                                                                                                                </option>
                                                                                                                <option value="Tous">
                                                                                                                    Tous
                                                                                                                </option>
                                                                                                                <option value="Ultra Short">
                                                                                                                    Tres
                                                                                                                    court
                                                                                                                </option>
                                                                                                                <option value="Extra Short">
                                                                                                                    Court
                                                                                                                </option>
                                                                                                                <option value="Short">
                                                                                                                    Moyen
                                                                                                                </option>
                                                                                                                <option value="Regular">
                                                                                                                    Long
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div id="detailD">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Type de
                                                                                                                verre
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control select-search"
                                                                                                                        id="type_de_verreD"
                                                                                                                        name="type_de_verreD">
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                <b>Traitement</b>
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control "
                                                                                                                        id="traitementD"
                                                                                                                        name="traitementD"
                                                                                                                        disabled>
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Teinte
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control "
                                                                                                                        id="teinteD"
                                                                                                                        name="teinteD"
                                                                                                                        disabled>
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                                <div>
                                                                                                                    <input type="text"
                                                                                                                           value=""
                                                                                                                           class="form-control hide"
                                                                                                                           name="teintepersoD"
                                                                                                                           id="teintepersoD"
                                                                                                                           placeholder="Décrivez votre couleur personnalisée">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Diamètre
                                                                                                                / Précal
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control "
                                                                                                                        id="diametreD"
                                                                                                                        name="diametreD">
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Prisme
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <input type="number"
                                                                                                                       lang="en"
                                                                                                                       step="0.5"
                                                                                                                       min="0.5"
                                                                                                                       max="7"
                                                                                                                       placeholder="Dioptries (aucune)"
                                                                                                                       class="form-control"
                                                                                                                       id="PrismeSphereD"
                                                                                                                       name="PrismeSphereD"
                                                                                                                       style=" width: 49%; float: left; margin-right: 2%;"
                                                                                                                       disabled><input
                                                                                                                        type="number"
                                                                                                                        step="1"
                                                                                                                        min="0"
                                                                                                                        max="360"
                                                                                                                        placeholder="Base (aucune)"
                                                                                                                        class="form-control"
                                                                                                                        id="PrismeCylindreD"
                                                                                                                        name="PrismeCylindreD"
                                                                                                                        style=" width: 49%; float: left;"
                                                                                                                        disabled>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Galbe
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control"
                                                                                                                        id="galbeD"
                                                                                                                        name="galbeD"
                                                                                                                        disabled>
                                                                                                                    <option value="Standard">
                                                                                                                        Standard
                                                                                                                    </option>
                                                                                                                    <option value="2">
                                                                                                                        2
                                                                                                                    </option>
                                                                                                                    <option value="2.5">
                                                                                                                        2.5
                                                                                                                    </option>
                                                                                                                    <option value="3">
                                                                                                                        3
                                                                                                                    </option>
                                                                                                                    <option value="3.5">
                                                                                                                        3.5
                                                                                                                    </option>
                                                                                                                    <option value="4">
                                                                                                                        4
                                                                                                                    </option>
                                                                                                                    <option value="4.5">
                                                                                                                        4.5
                                                                                                                    </option>
                                                                                                                    <option value="5">
                                                                                                                        5
                                                                                                                    </option>
                                                                                                                    <option value="5.5">
                                                                                                                        5.5
                                                                                                                    </option>
                                                                                                                    <option value="6">
                                                                                                                        6
                                                                                                                    </option>
                                                                                                                    <option value="6.5">
                                                                                                                        6.5
                                                                                                                    </option>
                                                                                                                    <option value="7">
                                                                                                                        7
                                                                                                                    </option>
                                                                                                                    <option value="7.5">
                                                                                                                        7.5
                                                                                                                    </option>
                                                                                                                    <option value="8">
                                                                                                                        8
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row hide"
                                                                                                             id="divquantiteD">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Quantité
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control"
                                                                                                                        id="quantiteD"
                                                                                                                        name="quantiteD"
                                                                                                                        disabled>
                                                                                                                    <option value="1"
                                                                                                                            selected>
                                                                                                                        1
                                                                                                                    </option>
                                                                                                                    <option value="2">
                                                                                                                        2
                                                                                                                    </option>
                                                                                                                    <option value="3">
                                                                                                                        3
                                                                                                                    </option>
                                                                                                                    <option value="4">
                                                                                                                        4
                                                                                                                    </option>
                                                                                                                    <option value="5">
                                                                                                                        5
                                                                                                                    </option>
                                                                                                                    <option value="6">
                                                                                                                        6
                                                                                                                    </option>
                                                                                                                    <option value="7">
                                                                                                                        7
                                                                                                                    </option>
                                                                                                                    <option value="8">
                                                                                                                        8
                                                                                                                    </option>
                                                                                                                    <option value="9">
                                                                                                                        9
                                                                                                                    </option>
                                                                                                                    <option value="10">
                                                                                                                        10
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row hide"
                                                                                                             id="divprixD">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                <b>Prix</b>
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <input type="text"
                                                                                                                       style="text-align: right;"
                                                                                                                       value=""
                                                                                                                       class="form-control"
                                                                                                                       id="prixD"
                                                                                                                       name="prixD"
                                                                                                                       readonly>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-md-6">
                                                                                            <div class="panel panel-default display_gauche">
                                                                                                <div class="panel-heading">
                                                                                                    <h5 style="height: 16px;">
                                                                                                        <div class="btn btn-warning"
                                                                                                             style="float: left;width: 188px;cursor:hand;margin-top: -9px;max-width: 100%; white-space: normal;"
                                                                                                             id="VersDroit">
                                                                                                            <strong><<
                                                                                                                Copier
                                                                                                                sur le
                                                                                                                droit</strong>
                                                                                                        </div>
                                                                                                        <span style="float:right">Gauche</span>
                                                                                                    </h5>
                                                                                                </div>
                                                                                                <div class="panel-body"
                                                                                                     style="padding-top: 15px">
                                                                                                    <div class="form-group row"
                                                                                                         style="height: 28px;">
                                                                                                        <div class="col-xs-12 col-md-3">
                                                                                                            Disponibilité
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-md-9">
                                                                                                            <div class="radio radio-warning radio-inline">
                                                                                                                <input type="radio"
                                                                                                                       value="ToutG"
                                                                                                                       id="ToutG"
                                                                                                                       name="dispoG"
                                                                                                                       aria-required="true"
                                                                                                                       checked>
                                                                                                                <label for="ToutG">
                                                                                                                    Tout </label>
                                                                                                            </div>

                                                                                                            <div class="radio radio-warning radio-inline"
                                                                                                                 style="margin-left: 20px;">
                                                                                                                <input type="radio"
                                                                                                                       value="StockG"
                                                                                                                       id="StockG"
                                                                                                                       name="dispoG"
                                                                                                                       aria-required="true">
                                                                                                                <label for="StockG">
                                                                                                                    Stock </label>
                                                                                                            </div>

                                                                                                            <div class="radio radio-warning radio-inline"
                                                                                                                 style="margin-left: 6px;">
                                                                                                                <input type="radio"
                                                                                                                       value="FabricationG"
                                                                                                                       id="FabricationG"
                                                                                                                       name="dispoG"
                                                                                                                       aria-required="true">
                                                                                                                <label for="FabricationG">
                                                                                                                    Fabrication </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row"
                                                                                                         id="progression_G">
                                                                                                        <div class="col-xs-12 col-md-3">
                                                                                                            Couloir de
                                                                                                            Progression
                                                                                                        </div>
                                                                                                        <div class="col-xs-12 col-md-9">
                                                                                                            <select class="form-control"
                                                                                                                    id="progressionG"
                                                                                                                    name="progressionG">
                                                                                                                <option value="">
                                                                                                                    --
                                                                                                                    Choisir
                                                                                                                    --
                                                                                                                </option>
                                                                                                                <option value="Tous">
                                                                                                                    Tous
                                                                                                                </option>
                                                                                                                <option value="Ultra Short">
                                                                                                                    Tres
                                                                                                                    court
                                                                                                                </option>
                                                                                                                <option value="Extra Short">
                                                                                                                    Court
                                                                                                                </option>
                                                                                                                <option value="Short">
                                                                                                                    Moyen
                                                                                                                </option>
                                                                                                                <option value="Regular">
                                                                                                                    Long
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div id="detailG">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Type de
                                                                                                                verre
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control select-search"
                                                                                                                        id="type_de_verreG"
                                                                                                                        name="type_de_verreG">
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                <b>Traitement</b>
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control "
                                                                                                                        name="traitementG"
                                                                                                                        id="traitementG"
                                                                                                                        disabled>
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Teinte
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control "
                                                                                                                        name="teinteG"
                                                                                                                        id="teinteG"
                                                                                                                        disabled>
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                                <div>
                                                                                                                    <input type="text"
                                                                                                                           value=""
                                                                                                                           class="form-control hide"
                                                                                                                           name="teintepersoG"
                                                                                                                           id="teintepersoG"
                                                                                                                           placeholder="Décrivez votre couleur personnalisée">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Diamètre
                                                                                                                / Précal
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control "
                                                                                                                        id="diametreG"
                                                                                                                        name="diametreG">
                                                                                                                    <option value="">
                                                                                                                        --
                                                                                                                        Choisir
                                                                                                                        --
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Prisme
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <input type="number"
                                                                                                                       lang="en"
                                                                                                                       step="0.5"
                                                                                                                       min="0.5"
                                                                                                                       max="7"
                                                                                                                       placeholder="Dioptries (aucune)"
                                                                                                                       class="form-control"
                                                                                                                       id="PrismeSphereG"
                                                                                                                       name="PrismeSphereG"
                                                                                                                       style=" width: 49%; float: left; margin-right: 2%;"
                                                                                                                       disabled><input
                                                                                                                        type="number"
                                                                                                                        step="1"
                                                                                                                        min="0"
                                                                                                                        max="360"
                                                                                                                        placeholder="Base (aucune)"
                                                                                                                        class="form-control"
                                                                                                                        id="PrismeCylindreG"
                                                                                                                        name="PrismeCylindreG"
                                                                                                                        style=" width: 49%; float: left;"
                                                                                                                        disabled>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Galbe
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control"
                                                                                                                        id="galbeG"
                                                                                                                        name="galbeG"
                                                                                                                        disabled>
                                                                                                                    <option value="Standard">
                                                                                                                        Standard
                                                                                                                    </option>
                                                                                                                    <option value="2">
                                                                                                                        2
                                                                                                                    </option>
                                                                                                                    <option value="2.5">
                                                                                                                        2.5
                                                                                                                    </option>
                                                                                                                    <option value="3">
                                                                                                                        3
                                                                                                                    </option>
                                                                                                                    <option value="3.5">
                                                                                                                        3.5
                                                                                                                    </option>
                                                                                                                    <option value="4">
                                                                                                                        4
                                                                                                                    </option>
                                                                                                                    <option value="4.5">
                                                                                                                        4.5
                                                                                                                    </option>
                                                                                                                    <option value="5">
                                                                                                                        5
                                                                                                                    </option>
                                                                                                                    <option value="5.5">
                                                                                                                        5.5
                                                                                                                    </option>
                                                                                                                    <option value="6">
                                                                                                                        6
                                                                                                                    </option>
                                                                                                                    <option value="6.5">
                                                                                                                        6.5
                                                                                                                    </option>
                                                                                                                    <option value="7">
                                                                                                                        7
                                                                                                                    </option>
                                                                                                                    <option value="7.5">
                                                                                                                        7.5
                                                                                                                    </option>
                                                                                                                    <option value="8">
                                                                                                                        8
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row hide"
                                                                                                             id="divquantiteG">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                Quantité
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <select class="form-control"
                                                                                                                        id="quantiteG"
                                                                                                                        name="quantiteG"
                                                                                                                        disabled>
                                                                                                                    <option value="1"
                                                                                                                            selected>
                                                                                                                        1
                                                                                                                    </option>
                                                                                                                    <option value="2">
                                                                                                                        2
                                                                                                                    </option>
                                                                                                                    <option value="3">
                                                                                                                        3
                                                                                                                    </option>
                                                                                                                    <option value="4">
                                                                                                                        4
                                                                                                                    </option>
                                                                                                                    <option value="5">
                                                                                                                        5
                                                                                                                    </option>
                                                                                                                    <option value="6">
                                                                                                                        6
                                                                                                                    </option>
                                                                                                                    <option value="7">
                                                                                                                        7
                                                                                                                    </option>
                                                                                                                    <option value="8">
                                                                                                                        8
                                                                                                                    </option>
                                                                                                                    <option value="9">
                                                                                                                        9
                                                                                                                    </option>
                                                                                                                    <option value="10">
                                                                                                                        10
                                                                                                                    </option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row hide"
                                                                                                             id="divprixG">
                                                                                                            <div class="col-xs-12 col-md-3">
                                                                                                                <b>Prix</b>
                                                                                                            </div>
                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                <input type="text"
                                                                                                                       style="text-align: right;"
                                                                                                                       value=""
                                                                                                                       class="form-control"
                                                                                                                       id="prixG"
                                                                                                                       name="prixG"
                                                                                                                       readonly>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row hide" id="precalibrage">
                                                                        <div class="col-xs-12">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading"><h5>
                                                                                        Précalibrage</h5></div>
                                                                                <div class="panel-body "
                                                                                     style="padding-top: 15px">
                                                                                    <div id="precalibrage_oui">

                                                                                        <div class="form-group clearfix">

                                                                                            <div class="group-title"
                                                                                                 id="click_calibre">
                                                                                                <span>Cliquez sur le calibre qui correspond le plus à votre commande.</span>
                                                                                            </div>

                                                                                            <div class="col-lg-8 col-lg-offset-2 col-sm-12"
                                                                                                 id="mini_calibres">

                                                                                                <?php
                                                                                                $directory =
                                                                                                    $this->config->item('directory_img_calibre');
                                                                                                if ($handle =
                                                                                                    opendir($directory)) {

                                                                                                    while (false !== (
                                                                                                        $image =
                                                                                                            readdir($handle))) {
                                                                                                        if (is_file($directory
                                                                                                                    . "/"
                                                                                                                    . $image)) {

                                                                                                            list($img,
                                                                                                                $extension
                                                                                                                ) =
                                                                                                                explode(".",
                                                                                                                        $image);
                                                                                                            if (false
                                                                                                                === strpos($img,
                                                                                                                           'calibre')) {
                                                                                                                echo '<img src="'
                                                                                                                     . $pre_url
                                                                                                                     . $directory
                                                                                                                     . "/"
                                                                                                                     . $image
                                                                                                                     . '" alt="'
                                                                                                                     . $img
                                                                                                                     . '" id="img_'
                                                                                                                     . $img
                                                                                                                     . '" onclick="show_pic('
                                                                                                                     . $img
                                                                                                                     . ')" height="70" style="margin:15px" class="calibre"/>';
                                                                                                            }
                                                                                                        }
                                                                                                    }

                                                                                                    echo '<div class="validator"></div>';


                                                                                                    closedir($handle);
                                                                                                }
                                                                                                ?>

                                                                                            </div>
                                                                                            <input type="text" value=""
                                                                                                   id="calibre_selected"
                                                                                                   name="calibre"
                                                                                                   class="form-control required"/>
                                                                                        </div>
                                                                                        <div class="group-title col-sm-3"
                                                                                             id="back_calibre"
                                                                                             style="display:none;border: none;">
                                                                                            <div class="btn btn-warning">
                                                                                                Revenir a la selection
                                                                                                des calibres.
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="group-title col-sm-9"
                                                                                             id="big_img"
                                                                                             style="text-align: center;background-color: #FFF;margin-top: 0; display:none">
                                                                                        </div>

                                                                                        <div class="group-title">
                                                                                            <span><b>Mesures FREEFORM.</b> Toutes les mesures ci-dessous doivent être remplies en millimètre.</span>
                                                                                        </div>


                                                                                        <div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12">
                                                                                            <label class=" control-label"
                                                                                                   for="cotea">
                                                                                                <div class="col-xs-12"
                                                                                                     style="height:77px">
                                                                                                    <img src="/static/img/mesure_freeform/cote_a.jpg"
                                                                                                         alt="Largeur boxing"/>
                                                                                                </div>
                                                                                                <div class="col-xs-12">
                                                                                                    <small>Largeur
                                                                                                        boxing</small>
                                                                                                </div>
                                                                                            </label>
                                                                                            <div class="col-xs-12">
                                                                                                <select id="cotea"
                                                                                                        name="cotea"
                                                                                                        class="form-control required">
                                                                                                    <option value=''>
                                                                                                        --Choisir--
                                                                                                    </option>
                                                                                                    <option value='20'>
                                                                                                        20
                                                                                                    </option>
                                                                                                    <option value='20.5'>
                                                                                                        20.5
                                                                                                    </option>
                                                                                                    <option value='21'>
                                                                                                        21
                                                                                                    </option>
                                                                                                    <option value='21.5'>
                                                                                                        21.5
                                                                                                    </option>
                                                                                                    <option value='22'>
                                                                                                        22
                                                                                                    </option>
                                                                                                    <option value='22.5'>
                                                                                                        22.5
                                                                                                    </option>
                                                                                                    <option value='23'>
                                                                                                        23
                                                                                                    </option>
                                                                                                    <option value='23.5'>
                                                                                                        23.5
                                                                                                    </option>
                                                                                                    <option value='24'>
                                                                                                        24
                                                                                                    </option>
                                                                                                    <option value='24.5'>
                                                                                                        24.5
                                                                                                    </option>
                                                                                                    <option value='25'>
                                                                                                        25
                                                                                                    </option>
                                                                                                    <option value='25.5'>
                                                                                                        25.5
                                                                                                    </option>
                                                                                                    <option value='26'>
                                                                                                        26
                                                                                                    </option>
                                                                                                    <option value='26.5'>
                                                                                                        26.5
                                                                                                    </option>
                                                                                                    <option value='27'>
                                                                                                        27
                                                                                                    </option>
                                                                                                    <option value='27.5'>
                                                                                                        27.5
                                                                                                    </option>
                                                                                                    <option value='28'>
                                                                                                        28
                                                                                                    </option>
                                                                                                    <option value='28.5'>
                                                                                                        28.5
                                                                                                    </option>
                                                                                                    <option value='29'>
                                                                                                        29
                                                                                                    </option>
                                                                                                    <option value='29.5'>
                                                                                                        29.5
                                                                                                    </option>
                                                                                                    <option value='30'>
                                                                                                        30
                                                                                                    </option>
                                                                                                    <option value='30.5'>
                                                                                                        30.5
                                                                                                    </option>
                                                                                                    <option value='31'>
                                                                                                        31
                                                                                                    </option>
                                                                                                    <option value='31.5'>
                                                                                                        31.5
                                                                                                    </option>
                                                                                                    <option value='32'>
                                                                                                        32
                                                                                                    </option>
                                                                                                    <option value='32.5'>
                                                                                                        32.5
                                                                                                    </option>
                                                                                                    <option value='33'>
                                                                                                        33
                                                                                                    </option>
                                                                                                    <option value='33.5'>
                                                                                                        33.5
                                                                                                    </option>
                                                                                                    <option value='34'>
                                                                                                        34
                                                                                                    </option>
                                                                                                    <option value='34.5'>
                                                                                                        34.5
                                                                                                    </option>
                                                                                                    <option value='35'>
                                                                                                        35
                                                                                                    </option>
                                                                                                    <option value='35.5'>
                                                                                                        35.5
                                                                                                    </option>
                                                                                                    <option value='36'>
                                                                                                        36
                                                                                                    </option>
                                                                                                    <option value='36.5'>
                                                                                                        36.5
                                                                                                    </option>
                                                                                                    <option value='37'>
                                                                                                        37
                                                                                                    </option>
                                                                                                    <option value='37.5'>
                                                                                                        37.5
                                                                                                    </option>
                                                                                                    <option value='38'>
                                                                                                        38
                                                                                                    </option>
                                                                                                    <option value='38.5'>
                                                                                                        38.5
                                                                                                    </option>
                                                                                                    <option value='39'>
                                                                                                        39
                                                                                                    </option>
                                                                                                    <option value='39.5'>
                                                                                                        39.5
                                                                                                    </option>
                                                                                                    <option value='40'>
                                                                                                        40
                                                                                                    </option>
                                                                                                    <option value='40.5'>
                                                                                                        40.5
                                                                                                    </option>
                                                                                                    <option value='41'>
                                                                                                        41
                                                                                                    </option>
                                                                                                    <option value='41.5'>
                                                                                                        41.5
                                                                                                    </option>
                                                                                                    <option value='42'>
                                                                                                        42
                                                                                                    </option>
                                                                                                    <option value='42.5'>
                                                                                                        42.5
                                                                                                    </option>
                                                                                                    <option value='43'>
                                                                                                        43
                                                                                                    </option>
                                                                                                    <option value='43.5'>
                                                                                                        43.5
                                                                                                    </option>
                                                                                                    <option value='44'>
                                                                                                        44
                                                                                                    </option>
                                                                                                    <option value='44.5'>
                                                                                                        44.5
                                                                                                    </option>
                                                                                                    <option value='45'>
                                                                                                        45
                                                                                                    </option>
                                                                                                    <option value='45.5'>
                                                                                                        45.5
                                                                                                    </option>
                                                                                                    <option value='46'>
                                                                                                        46
                                                                                                    </option>
                                                                                                    <option value='46.5'>
                                                                                                        46.5
                                                                                                    </option>
                                                                                                    <option value='47'>
                                                                                                        47
                                                                                                    </option>
                                                                                                    <option value='47.5'>
                                                                                                        47.5
                                                                                                    </option>
                                                                                                    <option value='48'>
                                                                                                        48
                                                                                                    </option>
                                                                                                    <option value='48.5'>
                                                                                                        48.5
                                                                                                    </option>
                                                                                                    <option value='49'>
                                                                                                        49
                                                                                                    </option>
                                                                                                    <option value='49.5'>
                                                                                                        49.5
                                                                                                    </option>
                                                                                                    <option value='50'>
                                                                                                        50
                                                                                                    </option>
                                                                                                    <option value='50.5'>
                                                                                                        50.5
                                                                                                    </option>
                                                                                                    <option value='51'>
                                                                                                        51
                                                                                                    </option>
                                                                                                    <option value='51.5'>
                                                                                                        51.5
                                                                                                    </option>
                                                                                                    <option value='52'>
                                                                                                        52
                                                                                                    </option>
                                                                                                    <option value='52.5'>
                                                                                                        52.5
                                                                                                    </option>
                                                                                                    <option value='53'>
                                                                                                        53
                                                                                                    </option>
                                                                                                    <option value='53.5'>
                                                                                                        53.5
                                                                                                    </option>
                                                                                                    <option value='54'>
                                                                                                        54
                                                                                                    </option>
                                                                                                    <option value='54.5'>
                                                                                                        54.5
                                                                                                    </option>
                                                                                                    <option value='55'>
                                                                                                        55
                                                                                                    </option>
                                                                                                    <option value='55.5'>
                                                                                                        55.5
                                                                                                    </option>
                                                                                                    <option value='56'>
                                                                                                        56
                                                                                                    </option>
                                                                                                    <option value='56.5'>
                                                                                                        56.5
                                                                                                    </option>
                                                                                                    <option value='57'>
                                                                                                        57
                                                                                                    </option>
                                                                                                    <option value='57.5'>
                                                                                                        57.5
                                                                                                    </option>
                                                                                                    <option value='58'>
                                                                                                        58
                                                                                                    </option>
                                                                                                    <option value='58.5'>
                                                                                                        58.5
                                                                                                    </option>
                                                                                                    <option value='59'>
                                                                                                        59
                                                                                                    </option>
                                                                                                    <option value='59.5'>
                                                                                                        59.5
                                                                                                    </option>
                                                                                                    <option value='60'>
                                                                                                        60
                                                                                                    </option>
                                                                                                    <option value='60.5'>
                                                                                                        60.5
                                                                                                    </option>
                                                                                                    <option value='61'>
                                                                                                        61
                                                                                                    </option>
                                                                                                    <option value='61.5'>
                                                                                                        61.5
                                                                                                    </option>
                                                                                                    <option value='62'>
                                                                                                        62
                                                                                                    </option>
                                                                                                    <option value='62.5'>
                                                                                                        62.5
                                                                                                    </option>
                                                                                                    <option value='63'>
                                                                                                        63
                                                                                                    </option>
                                                                                                    <option value='63.5'>
                                                                                                        63.5
                                                                                                    </option>
                                                                                                    <option value='64'>
                                                                                                        64
                                                                                                    </option>
                                                                                                    <option value='64.5'>
                                                                                                        64.5
                                                                                                    </option>
                                                                                                    <option value='65'>
                                                                                                        65
                                                                                                    </option>
                                                                                                    <option value='65.5'>
                                                                                                        65.5
                                                                                                    </option>
                                                                                                    <option value='66'>
                                                                                                        66
                                                                                                    </option>
                                                                                                    <option value='66.5'>
                                                                                                        66.5
                                                                                                    </option>
                                                                                                    <option value='67'>
                                                                                                        67
                                                                                                    </option>
                                                                                                    <option value='67.5'>
                                                                                                        67.5
                                                                                                    </option>
                                                                                                    <option value='68'>
                                                                                                        68
                                                                                                    </option>
                                                                                                    <option value='68.5'>
                                                                                                        68.5
                                                                                                    </option>
                                                                                                    <option value='69'>
                                                                                                        69
                                                                                                    </option>
                                                                                                    <option value='69.5'>
                                                                                                        69.5
                                                                                                    </option>
                                                                                                    <option value='70'>
                                                                                                        70
                                                                                                    </option>
                                                                                                    <option value='70.5'>
                                                                                                        70.5
                                                                                                    </option>
                                                                                                    <option value='71'>
                                                                                                        71
                                                                                                    </option>
                                                                                                    <option value='71.5'>
                                                                                                        71.5
                                                                                                    </option>
                                                                                                    <option value='72'>
                                                                                                        72
                                                                                                    </option>
                                                                                                    <option value='72.5'>
                                                                                                        72.5
                                                                                                    </option>
                                                                                                    <option value='73'>
                                                                                                        73
                                                                                                    </option>
                                                                                                    <option value='73.5'>
                                                                                                        73.5
                                                                                                    </option>
                                                                                                    <option value='74'>
                                                                                                        74
                                                                                                    </option>
                                                                                                    <option value='74.5'>
                                                                                                        74.5
                                                                                                    </option>
                                                                                                    <option value='75'>
                                                                                                        75
                                                                                                    </option>
                                                                                                    <option value='75.5'>
                                                                                                        75.5
                                                                                                    </option>
                                                                                                    <option value='76'>
                                                                                                        76
                                                                                                    </option>
                                                                                                    <option value='76.5'>
                                                                                                        76.5
                                                                                                    </option>
                                                                                                    <option value='77'>
                                                                                                        77
                                                                                                    </option>
                                                                                                    <option value='77.5'>
                                                                                                        77.5
                                                                                                    </option>
                                                                                                    <option value='78'>
                                                                                                        78
                                                                                                    </option>
                                                                                                    <option value='78.5'>
                                                                                                        78.5
                                                                                                    </option>
                                                                                                    <option value='79'>
                                                                                                        79
                                                                                                    </option>
                                                                                                    <option value='79.5'>
                                                                                                        79.5
                                                                                                    </option>
                                                                                                    <option value='80'>
                                                                                                        80
                                                                                                    </option>
                                                                                                </select>
                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12">
                                                                                            <label class="control-label"
                                                                                                   for="coteb">
                                                                                                <div class="col-xs-12"
                                                                                                     style="height:77px">
                                                                                                    <img src="/static/img/mesure_freeform/cote_b.jpg"
                                                                                                         alt="Hauteur boxing"/>
                                                                                                </div>
                                                                                                <div class="col-xs-12">
                                                                                                    <small>Hauteur
                                                                                                        boxing</small>
                                                                                                </div>
                                                                                            </label>
                                                                                            <div class="col-xs-12">
                                                                                                <select id="coteb"
                                                                                                        name="coteb"
                                                                                                        class="form-control required">
                                                                                                    <option value=''>
                                                                                                        --Choisir--
                                                                                                    </option>
                                                                                                    <option value='15'>
                                                                                                        15
                                                                                                    </option>
                                                                                                    <option value='15.5'>
                                                                                                        15.5
                                                                                                    </option>
                                                                                                    <option value='16'>
                                                                                                        16
                                                                                                    </option>
                                                                                                    <option value='16.5'>
                                                                                                        16.5
                                                                                                    </option>
                                                                                                    <option value='17'>
                                                                                                        17
                                                                                                    </option>
                                                                                                    <option value='17.5'>
                                                                                                        17.5
                                                                                                    </option>
                                                                                                    <option value='18'>
                                                                                                        18
                                                                                                    </option>
                                                                                                    <option value='18.5'>
                                                                                                        18.5
                                                                                                    </option>
                                                                                                    <option value='19'>
                                                                                                        19
                                                                                                    </option>
                                                                                                    <option value='19.5'>
                                                                                                        19.5
                                                                                                    </option>
                                                                                                    <option value='20'>
                                                                                                        20
                                                                                                    </option>
                                                                                                    <option value='20.5'>
                                                                                                        20.5
                                                                                                    </option>
                                                                                                    <option value='21'>
                                                                                                        21
                                                                                                    </option>
                                                                                                    <option value='21.5'>
                                                                                                        21.5
                                                                                                    </option>
                                                                                                    <option value='22'>
                                                                                                        22
                                                                                                    </option>
                                                                                                    <option value='22.5'>
                                                                                                        22.5
                                                                                                    </option>
                                                                                                    <option value='23'>
                                                                                                        23
                                                                                                    </option>
                                                                                                    <option value='23.5'>
                                                                                                        23.5
                                                                                                    </option>
                                                                                                    <option value='24'>
                                                                                                        24
                                                                                                    </option>
                                                                                                    <option value='24.5'>
                                                                                                        24.5
                                                                                                    </option>
                                                                                                    <option value='25'>
                                                                                                        25
                                                                                                    </option>
                                                                                                    <option value='25.5'>
                                                                                                        25.5
                                                                                                    </option>
                                                                                                    <option value='26'>
                                                                                                        26
                                                                                                    </option>
                                                                                                    <option value='26.5'>
                                                                                                        26.5
                                                                                                    </option>
                                                                                                    <option value='27'>
                                                                                                        27
                                                                                                    </option>
                                                                                                    <option value='27.5'>
                                                                                                        27.5
                                                                                                    </option>
                                                                                                    <option value='28'>
                                                                                                        28
                                                                                                    </option>
                                                                                                    <option value='28.5'>
                                                                                                        28.5
                                                                                                    </option>
                                                                                                    <option value='29'>
                                                                                                        29
                                                                                                    </option>
                                                                                                    <option value='29.5'>
                                                                                                        29.5
                                                                                                    </option>
                                                                                                    <option value='30'>
                                                                                                        30
                                                                                                    </option>
                                                                                                    <option value='30.5'>
                                                                                                        30.5
                                                                                                    </option>
                                                                                                    <option value='31'>
                                                                                                        31
                                                                                                    </option>
                                                                                                    <option value='31.5'>
                                                                                                        31.5
                                                                                                    </option>
                                                                                                    <option value='32'>
                                                                                                        32
                                                                                                    </option>
                                                                                                    <option value='32.5'>
                                                                                                        32.5
                                                                                                    </option>
                                                                                                    <option value='33'>
                                                                                                        33
                                                                                                    </option>
                                                                                                    <option value='33.5'>
                                                                                                        33.5
                                                                                                    </option>
                                                                                                    <option value='34'>
                                                                                                        34
                                                                                                    </option>
                                                                                                    <option value='34.5'>
                                                                                                        34.5
                                                                                                    </option>
                                                                                                    <option value='35'>
                                                                                                        35
                                                                                                    </option>
                                                                                                    <option value='35.5'>
                                                                                                        35.5
                                                                                                    </option>
                                                                                                    <option value='36'>
                                                                                                        36
                                                                                                    </option>
                                                                                                    <option value='36.5'>
                                                                                                        36.5
                                                                                                    </option>
                                                                                                    <option value='37'>
                                                                                                        37
                                                                                                    </option>
                                                                                                    <option value='37.5'>
                                                                                                        37.5
                                                                                                    </option>
                                                                                                    <option value='38'>
                                                                                                        38
                                                                                                    </option>
                                                                                                    <option value='38.5'>
                                                                                                        38.5
                                                                                                    </option>
                                                                                                    <option value='39'>
                                                                                                        39
                                                                                                    </option>
                                                                                                    <option value='39.5'>
                                                                                                        39.5
                                                                                                    </option>
                                                                                                    <option value='40'>
                                                                                                        40
                                                                                                    </option>
                                                                                                    <option value='40.5'>
                                                                                                        40.5
                                                                                                    </option>
                                                                                                    <option value='41'>
                                                                                                        41
                                                                                                    </option>
                                                                                                    <option value='41.5'>
                                                                                                        41.5
                                                                                                    </option>
                                                                                                    <option value='42'>
                                                                                                        42
                                                                                                    </option>
                                                                                                    <option value='42.5'>
                                                                                                        42.5
                                                                                                    </option>
                                                                                                    <option value='43'>
                                                                                                        43
                                                                                                    </option>
                                                                                                    <option value='43.5'>
                                                                                                        43.5
                                                                                                    </option>
                                                                                                    <option value='44'>
                                                                                                        44
                                                                                                    </option>
                                                                                                    <option value='44.5'>
                                                                                                        44.5
                                                                                                    </option>
                                                                                                    <option value='45'>
                                                                                                        45
                                                                                                    </option>
                                                                                                    <option value='45.5'>
                                                                                                        45.5
                                                                                                    </option>
                                                                                                    <option value='46'>
                                                                                                        46
                                                                                                    </option>
                                                                                                    <option value='46.5'>
                                                                                                        46.5
                                                                                                    </option>
                                                                                                    <option value='47'>
                                                                                                        47
                                                                                                    </option>
                                                                                                    <option value='47.5'>
                                                                                                        47.5
                                                                                                    </option>
                                                                                                    <option value='48'>
                                                                                                        48
                                                                                                    </option>
                                                                                                    <option value='48.5'>
                                                                                                        48.5
                                                                                                    </option>
                                                                                                    <option value='49'>
                                                                                                        49
                                                                                                    </option>
                                                                                                    <option value='49.5'>
                                                                                                        49.5
                                                                                                    </option>
                                                                                                    <option value='50'>
                                                                                                        50
                                                                                                    </option>
                                                                                                    <option value='50.5'>
                                                                                                        50.5
                                                                                                    </option>
                                                                                                    <option value='51'>
                                                                                                        51
                                                                                                    </option>
                                                                                                    <option value='51.5'>
                                                                                                        51.5
                                                                                                    </option>
                                                                                                    <option value='52'>
                                                                                                        52
                                                                                                    </option>
                                                                                                    <option value='52.5'>
                                                                                                        52.5
                                                                                                    </option>
                                                                                                    <option value='53'>
                                                                                                        53
                                                                                                    </option>
                                                                                                    <option value='53.5'>
                                                                                                        53.5
                                                                                                    </option>
                                                                                                    <option value='54'>
                                                                                                        54
                                                                                                    </option>
                                                                                                    <option value='54.5'>
                                                                                                        54.5
                                                                                                    </option>
                                                                                                    <option value='55'>
                                                                                                        55
                                                                                                    </option>
                                                                                                    <option value='55.5'>
                                                                                                        55.5
                                                                                                    </option>
                                                                                                    <option value='56'>
                                                                                                        56
                                                                                                    </option>
                                                                                                    <option value='56.5'>
                                                                                                        56.5
                                                                                                    </option>
                                                                                                    <option value='57'>
                                                                                                        57
                                                                                                    </option>
                                                                                                    <option value='57.5'>
                                                                                                        57.5
                                                                                                    </option>
                                                                                                    <option value='58'>
                                                                                                        58
                                                                                                    </option>
                                                                                                    <option value='58.5'>
                                                                                                        58.5
                                                                                                    </option>
                                                                                                    <option value='59'>
                                                                                                        59
                                                                                                    </option>
                                                                                                    <option value='59.5'>
                                                                                                        59.5
                                                                                                    </option>
                                                                                                    <option value='60'>
                                                                                                        60
                                                                                                    </option>
                                                                                                    <option value='60.5'>
                                                                                                        60.5
                                                                                                    </option>
                                                                                                    <option value='61'>
                                                                                                        61
                                                                                                    </option>
                                                                                                    <option value='61.5'>
                                                                                                        61.5
                                                                                                    </option>
                                                                                                    <option value='62'>
                                                                                                        62
                                                                                                    </option>
                                                                                                    <option value='62.5'>
                                                                                                        62.5
                                                                                                    </option>
                                                                                                    <option value='63'>
                                                                                                        63
                                                                                                    </option>
                                                                                                    <option value='63.5'>
                                                                                                        63.5
                                                                                                    </option>
                                                                                                    <option value='64'>
                                                                                                        64
                                                                                                    </option>
                                                                                                    <option value='64.5'>
                                                                                                        64.5
                                                                                                    </option>
                                                                                                    <option value='65'>
                                                                                                        65
                                                                                                    </option>
                                                                                                    <option value='65.5'>
                                                                                                        65.5
                                                                                                    </option>
                                                                                                    <option value='66'>
                                                                                                        66
                                                                                                    </option>
                                                                                                    <option value='66.5'>
                                                                                                        66.5
                                                                                                    </option>
                                                                                                    <option value='67'>
                                                                                                        67
                                                                                                    </option>
                                                                                                    <option value='67.5'>
                                                                                                        67.5
                                                                                                    </option>
                                                                                                    <option value='68'>
                                                                                                        68
                                                                                                    </option>
                                                                                                    <option value='68.5'>
                                                                                                        68.5
                                                                                                    </option>
                                                                                                    <option value='69'>
                                                                                                        69
                                                                                                    </option>
                                                                                                    <option value='69.5'>
                                                                                                        69.5
                                                                                                    </option>
                                                                                                    <option value='70'>
                                                                                                        70
                                                                                                    </option>
                                                                                                </select>
                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12">
                                                                                            <label class="control-label"
                                                                                                   for="cotec">
                                                                                                <div class="col-xs-12"
                                                                                                     style="height:77px">
                                                                                                    <img src="/static/img/mesure_freeform/cote_c.jpg"
                                                                                                         alt="Taille du pont"/>
                                                                                                </div>
                                                                                                <div class="col-xs-12">
                                                                                                    <small>Taille du
                                                                                                        pont</small>
                                                                                                </div>
                                                                                            </label>
                                                                                            <div class="col-xs-12">
                                                                                                <select id="cotec"
                                                                                                        name="cotec"
                                                                                                        class="form-control required">
                                                                                                    <option value=''>
                                                                                                        --Choisir--
                                                                                                    </option>
                                                                                                    <option value='5'>
                                                                                                        5
                                                                                                    </option>
                                                                                                    <option value='5.5'>
                                                                                                        5.5
                                                                                                    </option>
                                                                                                    <option value='6'>
                                                                                                        6
                                                                                                    </option>
                                                                                                    <option value='6.5'>
                                                                                                        6.5
                                                                                                    </option>
                                                                                                    <option value='7'>
                                                                                                        7
                                                                                                    </option>
                                                                                                    <option value='7.5'>
                                                                                                        7.5
                                                                                                    </option>
                                                                                                    <option value='8'>
                                                                                                        8
                                                                                                    </option>
                                                                                                    <option value='8.5'>
                                                                                                        8.5
                                                                                                    </option>
                                                                                                    <option value='9'>
                                                                                                        9
                                                                                                    </option>
                                                                                                    <option value='9.5'>
                                                                                                        9.5
                                                                                                    </option>
                                                                                                    <option value='10'>
                                                                                                        10
                                                                                                    </option>
                                                                                                    <option value='10.5'>
                                                                                                        10.5
                                                                                                    </option>
                                                                                                    <option value='11'>
                                                                                                        11
                                                                                                    </option>
                                                                                                    <option value='11.5'>
                                                                                                        11.5
                                                                                                    </option>
                                                                                                    <option value='12'>
                                                                                                        12
                                                                                                    </option>
                                                                                                    <option value='12.5'>
                                                                                                        12.5
                                                                                                    </option>
                                                                                                    <option value='13'>
                                                                                                        13
                                                                                                    </option>
                                                                                                    <option value='13.5'>
                                                                                                        13.5
                                                                                                    </option>
                                                                                                    <option value='14'>
                                                                                                        14
                                                                                                    </option>
                                                                                                    <option value='14.5'>
                                                                                                        14.5
                                                                                                    </option>
                                                                                                    <option value='15'>
                                                                                                        15
                                                                                                    </option>
                                                                                                    <option value='15.5'>
                                                                                                        15.5
                                                                                                    </option>
                                                                                                    <option value='16'>
                                                                                                        16
                                                                                                    </option>
                                                                                                    <option value='16.5'>
                                                                                                        16.5
                                                                                                    </option>
                                                                                                    <option value='17'>
                                                                                                        17
                                                                                                    </option>
                                                                                                    <option value='17.5'>
                                                                                                        17.5
                                                                                                    </option>
                                                                                                    <option value='18'>
                                                                                                        18
                                                                                                    </option>
                                                                                                    <option value='18.5'>
                                                                                                        18.5
                                                                                                    </option>
                                                                                                    <option value='19'>
                                                                                                        19
                                                                                                    </option>
                                                                                                    <option value='19.5'>
                                                                                                        19.5
                                                                                                    </option>
                                                                                                    <option value='20'>
                                                                                                        20
                                                                                                    </option>
                                                                                                    <option value='20.5'>
                                                                                                        20.5
                                                                                                    </option>
                                                                                                    <option value='21'>
                                                                                                        21
                                                                                                    </option>
                                                                                                    <option value='21.5'>
                                                                                                        21.5
                                                                                                    </option>
                                                                                                    <option value='22'>
                                                                                                        22
                                                                                                    </option>
                                                                                                    <option value='22.5'>
                                                                                                        22.5
                                                                                                    </option>
                                                                                                    <option value='23'>
                                                                                                        23
                                                                                                    </option>
                                                                                                    <option value='23.5'>
                                                                                                        23.5
                                                                                                    </option>
                                                                                                    <option value='24'>
                                                                                                        24
                                                                                                    </option>
                                                                                                    <option value='24.5'>
                                                                                                        24.5
                                                                                                    </option>
                                                                                                    <option value='25'>
                                                                                                        25
                                                                                                    </option>
                                                                                                    <option value='25.5'>
                                                                                                        25.5
                                                                                                    </option>
                                                                                                    <option value='26'>
                                                                                                        26
                                                                                                    </option>
                                                                                                    <option value='26.5'>
                                                                                                        26.5
                                                                                                    </option>
                                                                                                    <option value='27'>
                                                                                                        27
                                                                                                    </option>
                                                                                                    <option value='27.5'>
                                                                                                        27.5
                                                                                                    </option>
                                                                                                    <option value='28'>
                                                                                                        28
                                                                                                    </option>
                                                                                                    <option value='28.5'>
                                                                                                        28.5
                                                                                                    </option>
                                                                                                    <option value='29'>
                                                                                                        29
                                                                                                    </option>
                                                                                                    <option value='29.5'>
                                                                                                        29.5
                                                                                                    </option>
                                                                                                    <option value='30'>
                                                                                                        30
                                                                                                    </option>
                                                                                                    <option value='30.5'>
                                                                                                        30.5
                                                                                                    </option>
                                                                                                    <option value='31'>
                                                                                                        31
                                                                                                    </option>
                                                                                                    <option value='31.5'>
                                                                                                        31.5
                                                                                                    </option>
                                                                                                    <option value='32'>
                                                                                                        32
                                                                                                    </option>
                                                                                                    <option value='32.5'>
                                                                                                        32.5
                                                                                                    </option>
                                                                                                    <option value='33'>
                                                                                                        33
                                                                                                    </option>
                                                                                                    <option value='33.5'>
                                                                                                        33.5
                                                                                                    </option>
                                                                                                    <option value='34'>
                                                                                                        34
                                                                                                    </option>
                                                                                                    <option value='34.5'>
                                                                                                        34.5
                                                                                                    </option>
                                                                                                    <option value='35'>
                                                                                                        35
                                                                                                    </option>
                                                                                                </select>
                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12 hide">
                                                                                            <label class="control-label"
                                                                                                   for="coted">
                                                                                                <img src="/static/img/mesure_freeform/cote_d.jpg"
                                                                                                     alt="Digonale verre en mm"/>
                                                                                                <small>Digonale verre en
                                                                                                    mm</small>
                                                                                            </label>
                                                                                            <br>
                                                                                            <input id="coted"
                                                                                                   name="coted"
                                                                                                   type="text"
                                                                                                   class="form-control required"
                                                                                                   pattern="[0-9]+([\.,][0-9]+)?"
                                                                                                   required>
                                                                                            <div class="validator"></div>
                                                                                        </div>


                                                                                        <div class="form-group clearfix col-lg-2 col-sm-2 col-xs-12"
                                                                                             style="margin-top: 80px;">
                                                                                            <label class=" control-label col-xs-12"
                                                                                                   for="type_monture"><small>Type
                                                                                                    de
                                                                                                    monture</small></label>
                                                                                            <select name="type_monture"
                                                                                                    class="form-control required col-xs-12"
                                                                                                    required>
                                                                                                <option value="">
                                                                                                    Sélectionner un type
                                                                                                </option>
                                                                                                <option value="Plastique">
                                                                                                    Plastique
                                                                                                </option>
                                                                                                <option value="Optyl">
                                                                                                    Optyl
                                                                                                </option>
                                                                                                <option value="Metal">
                                                                                                    Métal
                                                                                                </option>
                                                                                                <option value="Nylor">
                                                                                                    Nylor
                                                                                                </option>
                                                                                                <option value="Percee">
                                                                                                    Percée
                                                                                                </option>
                                                                                            </select>
                                                                                            <div class="validator"></div>
                                                                                        </div>

                                                                                        <div class="form-group clearfix col-lg-4 col-xs-12"
                                                                                             style="margin-top: 80px;">
                                                                                            <div class="col-xs-12">
                                                                                                <label class=" control-label"
                                                                                                       for="epaisseur_bord_verre"><small>Epaisseur
                                                                                                        minimum au bord
                                                                                                        du verre</small></label>
                                                                                            </div>
                                                                                            <div class="col-xs-12">
                                                                                                <select class="form-control required col-xs-12"
                                                                                                        required
                                                                                                        id="epaisseur_bord_verre"
                                                                                                        name="epaisseur_bord_verre">
                                                                                                    <option value="0.80">
                                                                                                        0.80mm
                                                                                                    </option>
                                                                                                    <option value="0.90">
                                                                                                        0.90mm
                                                                                                    </option>
                                                                                                    <option value="1.00"
                                                                                                            selected="selected">
                                                                                                        1.00mm
                                                                                                    </option>
                                                                                                    <option value="1.10">
                                                                                                        1.10mm
                                                                                                    </option>
                                                                                                    <option value="1.20">
                                                                                                        1.20mm
                                                                                                    </option>
                                                                                                    <option value="1.30">
                                                                                                        1.30mm
                                                                                                    </option>
                                                                                                    <option value="1.40">
                                                                                                        1.40mm
                                                                                                    </option>
                                                                                                    <option value="1.50">
                                                                                                        1.50mm
                                                                                                    </option>
                                                                                                    <option value="1.60">
                                                                                                        1.60mm
                                                                                                    </option>
                                                                                                    <option value="1.70">
                                                                                                        1.70mm
                                                                                                    </option>
                                                                                                    <option value="1.80">
                                                                                                        1.80mm
                                                                                                    </option>
                                                                                                    <option value="1.90">
                                                                                                        1.90mm
                                                                                                    </option>
                                                                                                    <option value="2.00">
                                                                                                        2.00mm
                                                                                                    </option>
                                                                                                    <option value="2.10">
                                                                                                        2.10mm
                                                                                                    </option>
                                                                                                    <option value="2.20">
                                                                                                        2.20mm
                                                                                                    </option>
                                                                                                    <option value="2.30">
                                                                                                        2.30mm
                                                                                                    </option>
                                                                                                    <option value="2.40">
                                                                                                        2.40mm
                                                                                                    </option>
                                                                                                    <option value="2.50">
                                                                                                        2.50mm
                                                                                                    </option>
                                                                                                </select>
                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group clearfix col-xs-12 hide">
                                                                                            <label class="col-lg-2 control-label"
                                                                                                   for="hauteur_ecart">Hauteur
                                                                                                de montage et écarts
                                                                                                pupillaires</label>
                                                                                        </div>
                                                                                        <div class="form-group div_pupilles clearfix col-xs-12"
                                                                                             style="
    margin-top: 37px;
">
                                                                                            <div class="col-lg-8">

                                                                                                <div class="col-lg-6 col-sm-6 ecart_pup">

                                                                                                    <div style="text-align:center;padding-bottom:10px">
                                                                                                        Ecarts
                                                                                                        pupillaire <span
                                                                                                                class="topoffice"
                                                                                                                style="display: none;">VL</span>
                                                                                                    </div>

                                                                                                    <img alt="Ecart pupillaire"
                                                                                                         class="hep-image"
                                                                                                         src="/static/img/mesure_freeform/ecart_pup.jpg"
                                                                                                         style="margin-bottom: 18px;">

                                                                                                    <div class="clearfix">
                                                                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                                            <label><small>Oeil
                                                                                                                    droit</small></label>
                                                                                                            <select id="ecart_puppillaire_droit"
                                                                                                                    name="ecart_puppillaire_droit"
                                                                                                                    class="form-control required">
                                                                                                                <option value=''>
                                                                                                                    --Choisir--
                                                                                                                </option>
                                                                                                                <option value='15'>
                                                                                                                    15
                                                                                                                </option>
                                                                                                                <option value='15.5'>
                                                                                                                    15.5
                                                                                                                </option>
                                                                                                                <option value='16'>
                                                                                                                    16
                                                                                                                </option>
                                                                                                                <option value='16.5'>
                                                                                                                    16.5
                                                                                                                </option>
                                                                                                                <option value='17'>
                                                                                                                    17
                                                                                                                </option>
                                                                                                                <option value='17.5'>
                                                                                                                    17.5
                                                                                                                </option>
                                                                                                                <option value='18'>
                                                                                                                    18
                                                                                                                </option>
                                                                                                                <option value='18.5'>
                                                                                                                    18.5
                                                                                                                </option>
                                                                                                                <option value='19'>
                                                                                                                    19
                                                                                                                </option>
                                                                                                                <option value='19.5'>
                                                                                                                    19.5
                                                                                                                </option>
                                                                                                                <option value='20'>
                                                                                                                    20
                                                                                                                </option>
                                                                                                                <option value='20.5'>
                                                                                                                    20.5
                                                                                                                </option>
                                                                                                                <option value='21'>
                                                                                                                    21
                                                                                                                </option>
                                                                                                                <option value='21.5'>
                                                                                                                    21.5
                                                                                                                </option>
                                                                                                                <option value='22'>
                                                                                                                    22
                                                                                                                </option>
                                                                                                                <option value='22.5'>
                                                                                                                    22.5
                                                                                                                </option>
                                                                                                                <option value='23'>
                                                                                                                    23
                                                                                                                </option>
                                                                                                                <option value='23.5'>
                                                                                                                    23.5
                                                                                                                </option>
                                                                                                                <option value='24'>
                                                                                                                    24
                                                                                                                </option>
                                                                                                                <option value='24.5'>
                                                                                                                    24.5
                                                                                                                </option>
                                                                                                                <option value='25'>
                                                                                                                    25
                                                                                                                </option>
                                                                                                                <option value='25.5'>
                                                                                                                    25.5
                                                                                                                </option>
                                                                                                                <option value='26'>
                                                                                                                    26
                                                                                                                </option>
                                                                                                                <option value='26.5'>
                                                                                                                    26.5
                                                                                                                </option>
                                                                                                                <option value='27'>
                                                                                                                    27
                                                                                                                </option>
                                                                                                                <option value='27.5'>
                                                                                                                    27.5
                                                                                                                </option>
                                                                                                                <option value='28'>
                                                                                                                    28
                                                                                                                </option>
                                                                                                                <option value='28.5'>
                                                                                                                    28.5
                                                                                                                </option>
                                                                                                                <option value='29'>
                                                                                                                    29
                                                                                                                </option>
                                                                                                                <option value='29.5'>
                                                                                                                    29.5
                                                                                                                </option>
                                                                                                                <option value='30'>
                                                                                                                    30
                                                                                                                </option>
                                                                                                                <option value='30.5'>
                                                                                                                    30.5
                                                                                                                </option>
                                                                                                                <option value='31'>
                                                                                                                    31
                                                                                                                </option>
                                                                                                                <option value='31.5'>
                                                                                                                    31.5
                                                                                                                </option>
                                                                                                                <option value='32'>
                                                                                                                    32
                                                                                                                </option>
                                                                                                                <option value='32.5'>
                                                                                                                    32.5
                                                                                                                </option>
                                                                                                                <option value='33'>
                                                                                                                    33
                                                                                                                </option>
                                                                                                                <option value='33.5'>
                                                                                                                    33.5
                                                                                                                </option>
                                                                                                                <option value='34'>
                                                                                                                    34
                                                                                                                </option>
                                                                                                                <option value='34.5'>
                                                                                                                    34.5
                                                                                                                </option>
                                                                                                                <option value='35'>
                                                                                                                    35
                                                                                                                </option>
                                                                                                                <option value='35.5'>
                                                                                                                    35.5
                                                                                                                </option>
                                                                                                                <option value='36'>
                                                                                                                    36
                                                                                                                </option>
                                                                                                                <option value='36.5'>
                                                                                                                    36.5
                                                                                                                </option>
                                                                                                                <option value='37'>
                                                                                                                    37
                                                                                                                </option>
                                                                                                                <option value='37.5'>
                                                                                                                    37.5
                                                                                                                </option>
                                                                                                                <option value='38'>
                                                                                                                    38
                                                                                                                </option>
                                                                                                                <option value='38.5'>
                                                                                                                    38.5
                                                                                                                </option>
                                                                                                                <option value='39'>
                                                                                                                    39
                                                                                                                </option>
                                                                                                                <option value='39.5'>
                                                                                                                    39.5
                                                                                                                </option>
                                                                                                                <option value='40'>
                                                                                                                    40
                                                                                                                </option>
                                                                                                                <option value='40.5'>
                                                                                                                    40.5
                                                                                                                </option>
                                                                                                                <option value='41'>
                                                                                                                    41
                                                                                                                </option>
                                                                                                                <option value='41.5'>
                                                                                                                    41.5
                                                                                                                </option>
                                                                                                                <option value='42'>
                                                                                                                    42
                                                                                                                </option>
                                                                                                                <option value='42.5'>
                                                                                                                    42.5
                                                                                                                </option>
                                                                                                                <option value='43'>
                                                                                                                    43
                                                                                                                </option>
                                                                                                                <option value='43.5'>
                                                                                                                    43.5
                                                                                                                </option>
                                                                                                                <option value='44'>
                                                                                                                    44
                                                                                                                </option>
                                                                                                                <option value='44.5'>
                                                                                                                    44.5
                                                                                                                </option>
                                                                                                                <option value='45'>
                                                                                                                    45
                                                                                                                </option>
                                                                                                                <option value='45.5'>
                                                                                                                    45.5
                                                                                                                </option>
                                                                                                                <option value='46'>
                                                                                                                    46
                                                                                                                </option>
                                                                                                                <option value='46.5'>
                                                                                                                    46.5
                                                                                                                </option>
                                                                                                                <option value='47'>
                                                                                                                    47
                                                                                                                </option>
                                                                                                                <option value='47.5'>
                                                                                                                    47.5
                                                                                                                </option>
                                                                                                                <option value='48'>
                                                                                                                    48
                                                                                                                </option>
                                                                                                                <option value='48.5'>
                                                                                                                    48.5
                                                                                                                </option>
                                                                                                                <option value='49'>
                                                                                                                    49
                                                                                                                </option>
                                                                                                                <option value='49.5'>
                                                                                                                    49.5
                                                                                                                </option>
                                                                                                                <option value='50'>
                                                                                                                    50
                                                                                                                </option>
                                                                                                                <option value='50.5'>
                                                                                                                    50.5
                                                                                                                </option>
                                                                                                                <option value='51'>
                                                                                                                    51
                                                                                                                </option>
                                                                                                                <option value='51.5'>
                                                                                                                    51.5
                                                                                                                </option>
                                                                                                                <option value='52'>
                                                                                                                    52
                                                                                                                </option>
                                                                                                                <option value='52.5'>
                                                                                                                    52.5
                                                                                                                </option>
                                                                                                                <option value='53'>
                                                                                                                    53
                                                                                                                </option>
                                                                                                                <option value='53.5'>
                                                                                                                    53.5
                                                                                                                </option>
                                                                                                                <option value='54'>
                                                                                                                    54
                                                                                                                </option>
                                                                                                                <option value='54.5'>
                                                                                                                    54.5
                                                                                                                </option>
                                                                                                                <option value='55'>
                                                                                                                    55
                                                                                                                </option>
                                                                                                            </select>

                                                                                                        </div>
                                                                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                                            <label><small>Oeil
                                                                                                                    gauche</small></label>
                                                                                                            <select id="ecart_puppillaire_gauche"
                                                                                                                    name="ecart_puppillaire_gauche"
                                                                                                                    class="form-control required">
                                                                                                                <option value=''>
                                                                                                                    --Choisir--
                                                                                                                </option>
                                                                                                                <option value='15'>
                                                                                                                    15
                                                                                                                </option>
                                                                                                                <option value='15.5'>
                                                                                                                    15.5
                                                                                                                </option>
                                                                                                                <option value='16'>
                                                                                                                    16
                                                                                                                </option>
                                                                                                                <option value='16.5'>
                                                                                                                    16.5
                                                                                                                </option>
                                                                                                                <option value='17'>
                                                                                                                    17
                                                                                                                </option>
                                                                                                                <option value='17.5'>
                                                                                                                    17.5
                                                                                                                </option>
                                                                                                                <option value='18'>
                                                                                                                    18
                                                                                                                </option>
                                                                                                                <option value='18.5'>
                                                                                                                    18.5
                                                                                                                </option>
                                                                                                                <option value='19'>
                                                                                                                    19
                                                                                                                </option>
                                                                                                                <option value='19.5'>
                                                                                                                    19.5
                                                                                                                </option>
                                                                                                                <option value='20'>
                                                                                                                    20
                                                                                                                </option>
                                                                                                                <option value='20.5'>
                                                                                                                    20.5
                                                                                                                </option>
                                                                                                                <option value='21'>
                                                                                                                    21
                                                                                                                </option>
                                                                                                                <option value='21.5'>
                                                                                                                    21.5
                                                                                                                </option>
                                                                                                                <option value='22'>
                                                                                                                    22
                                                                                                                </option>
                                                                                                                <option value='22.5'>
                                                                                                                    22.5
                                                                                                                </option>
                                                                                                                <option value='23'>
                                                                                                                    23
                                                                                                                </option>
                                                                                                                <option value='23.5'>
                                                                                                                    23.5
                                                                                                                </option>
                                                                                                                <option value='24'>
                                                                                                                    24
                                                                                                                </option>
                                                                                                                <option value='24.5'>
                                                                                                                    24.5
                                                                                                                </option>
                                                                                                                <option value='25'>
                                                                                                                    25
                                                                                                                </option>
                                                                                                                <option value='25.5'>
                                                                                                                    25.5
                                                                                                                </option>
                                                                                                                <option value='26'>
                                                                                                                    26
                                                                                                                </option>
                                                                                                                <option value='26.5'>
                                                                                                                    26.5
                                                                                                                </option>
                                                                                                                <option value='27'>
                                                                                                                    27
                                                                                                                </option>
                                                                                                                <option value='27.5'>
                                                                                                                    27.5
                                                                                                                </option>
                                                                                                                <option value='28'>
                                                                                                                    28
                                                                                                                </option>
                                                                                                                <option value='28.5'>
                                                                                                                    28.5
                                                                                                                </option>
                                                                                                                <option value='29'>
                                                                                                                    29
                                                                                                                </option>
                                                                                                                <option value='29.5'>
                                                                                                                    29.5
                                                                                                                </option>
                                                                                                                <option value='30'>
                                                                                                                    30
                                                                                                                </option>
                                                                                                                <option value='30.5'>
                                                                                                                    30.5
                                                                                                                </option>
                                                                                                                <option value='31'>
                                                                                                                    31
                                                                                                                </option>
                                                                                                                <option value='31.5'>
                                                                                                                    31.5
                                                                                                                </option>
                                                                                                                <option value='32'>
                                                                                                                    32
                                                                                                                </option>
                                                                                                                <option value='32.5'>
                                                                                                                    32.5
                                                                                                                </option>
                                                                                                                <option value='33'>
                                                                                                                    33
                                                                                                                </option>
                                                                                                                <option value='33.5'>
                                                                                                                    33.5
                                                                                                                </option>
                                                                                                                <option value='34'>
                                                                                                                    34
                                                                                                                </option>
                                                                                                                <option value='34.5'>
                                                                                                                    34.5
                                                                                                                </option>
                                                                                                                <option value='35'>
                                                                                                                    35
                                                                                                                </option>
                                                                                                                <option value='35.5'>
                                                                                                                    35.5
                                                                                                                </option>
                                                                                                                <option value='36'>
                                                                                                                    36
                                                                                                                </option>
                                                                                                                <option value='36.5'>
                                                                                                                    36.5
                                                                                                                </option>
                                                                                                                <option value='37'>
                                                                                                                    37
                                                                                                                </option>
                                                                                                                <option value='37.5'>
                                                                                                                    37.5
                                                                                                                </option>
                                                                                                                <option value='38'>
                                                                                                                    38
                                                                                                                </option>
                                                                                                                <option value='38.5'>
                                                                                                                    38.5
                                                                                                                </option>
                                                                                                                <option value='39'>
                                                                                                                    39
                                                                                                                </option>
                                                                                                                <option value='39.5'>
                                                                                                                    39.5
                                                                                                                </option>
                                                                                                                <option value='40'>
                                                                                                                    40
                                                                                                                </option>
                                                                                                                <option value='40.5'>
                                                                                                                    40.5
                                                                                                                </option>
                                                                                                                <option value='41'>
                                                                                                                    41
                                                                                                                </option>
                                                                                                                <option value='41.5'>
                                                                                                                    41.5
                                                                                                                </option>
                                                                                                                <option value='42'>
                                                                                                                    42
                                                                                                                </option>
                                                                                                                <option value='42.5'>
                                                                                                                    42.5
                                                                                                                </option>
                                                                                                                <option value='43'>
                                                                                                                    43
                                                                                                                </option>
                                                                                                                <option value='43.5'>
                                                                                                                    43.5
                                                                                                                </option>
                                                                                                                <option value='44'>
                                                                                                                    44
                                                                                                                </option>
                                                                                                                <option value='44.5'>
                                                                                                                    44.5
                                                                                                                </option>
                                                                                                                <option value='45'>
                                                                                                                    45
                                                                                                                </option>
                                                                                                                <option value='45.5'>
                                                                                                                    45.5
                                                                                                                </option>
                                                                                                                <option value='46'>
                                                                                                                    46
                                                                                                                </option>
                                                                                                                <option value='46.5'>
                                                                                                                    46.5
                                                                                                                </option>
                                                                                                                <option value='47'>
                                                                                                                    47
                                                                                                                </option>
                                                                                                                <option value='47.5'>
                                                                                                                    47.5
                                                                                                                </option>
                                                                                                                <option value='48'>
                                                                                                                    48
                                                                                                                </option>
                                                                                                                <option value='48.5'>
                                                                                                                    48.5
                                                                                                                </option>
                                                                                                                <option value='49'>
                                                                                                                    49
                                                                                                                </option>
                                                                                                                <option value='49.5'>
                                                                                                                    49.5
                                                                                                                </option>
                                                                                                                <option value='50'>
                                                                                                                    50
                                                                                                                </option>
                                                                                                                <option value='50.5'>
                                                                                                                    50.5
                                                                                                                </option>
                                                                                                                <option value='51'>
                                                                                                                    51
                                                                                                                </option>
                                                                                                                <option value='51.5'>
                                                                                                                    51.5
                                                                                                                </option>
                                                                                                                <option value='52'>
                                                                                                                    52
                                                                                                                </option>
                                                                                                                <option value='52.5'>
                                                                                                                    52.5
                                                                                                                </option>
                                                                                                                <option value='53'>
                                                                                                                    53
                                                                                                                </option>
                                                                                                                <option value='53.5'>
                                                                                                                    53.5
                                                                                                                </option>
                                                                                                                <option value='54'>
                                                                                                                    54
                                                                                                                </option>
                                                                                                                <option value='54.5'>
                                                                                                                    54.5
                                                                                                                </option>
                                                                                                                <option value='55'>
                                                                                                                    55
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="col-lg-6 col-sm-6 hauteur_pup">

                                                                                                    <div style="text-align:center;padding-bottom:10px">
                                                                                                        Hauteur de
                                                                                                        montage <span
                                                                                                                id="baspupille"
                                                                                                                style="display:none;"></span>
                                                                                                    </div>

                                                                                                    <img alt="Hauteur"
                                                                                                         class="hep-image"
                                                                                                         src="/static/img/mesure_freeform/Hauteur.jpg"
                                                                                                         style="margin-bottom: 18px">

                                                                                                    <div class="clearfix">
                                                                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                                            <label><small>Oeil
                                                                                                                    droit</small></label>
                                                                                                            <select id="hauteur"
                                                                                                                    name="hauteur"
                                                                                                                    class="form-control required">
                                                                                                                <option value=''>
                                                                                                                    --Choisir--
                                                                                                                </option>
                                                                                                                <option value='5'>
                                                                                                                    5
                                                                                                                </option>
                                                                                                                <option value='5.5'>
                                                                                                                    5.5
                                                                                                                </option>
                                                                                                                <option value='6'>
                                                                                                                    6
                                                                                                                </option>
                                                                                                                <option value='6.5'>
                                                                                                                    6.5
                                                                                                                </option>
                                                                                                                <option value='7'>
                                                                                                                    7
                                                                                                                </option>
                                                                                                                <option value='7.5'>
                                                                                                                    7.5
                                                                                                                </option>
                                                                                                                <option value='8'>
                                                                                                                    8
                                                                                                                </option>
                                                                                                                <option value='8.5'>
                                                                                                                    8.5
                                                                                                                </option>
                                                                                                                <option value='9'>
                                                                                                                    9
                                                                                                                </option>
                                                                                                                <option value='9.5'>
                                                                                                                    9.5
                                                                                                                </option>
                                                                                                                <option value='10'>
                                                                                                                    10
                                                                                                                </option>
                                                                                                                <option value='10.5'>
                                                                                                                    10.5
                                                                                                                </option>
                                                                                                                <option value='11'>
                                                                                                                    11
                                                                                                                </option>
                                                                                                                <option value='11.5'>
                                                                                                                    11.5
                                                                                                                </option>
                                                                                                                <option value='12'>
                                                                                                                    12
                                                                                                                </option>
                                                                                                                <option value='12.5'>
                                                                                                                    12.5
                                                                                                                </option>
                                                                                                                <option value='13'>
                                                                                                                    13
                                                                                                                </option>
                                                                                                                <option value='13.5'>
                                                                                                                    13.5
                                                                                                                </option>
                                                                                                                <option value='14'>
                                                                                                                    14
                                                                                                                </option>
                                                                                                                <option value='14.5'>
                                                                                                                    14.5
                                                                                                                </option>
                                                                                                                <option value='15'>
                                                                                                                    15
                                                                                                                </option>
                                                                                                                <option value='15.5'>
                                                                                                                    15.5
                                                                                                                </option>
                                                                                                                <option value='16'>
                                                                                                                    16
                                                                                                                </option>
                                                                                                                <option value='16.5'>
                                                                                                                    16.5
                                                                                                                </option>
                                                                                                                <option value='17'>
                                                                                                                    17
                                                                                                                </option>
                                                                                                                <option value='17.5'>
                                                                                                                    17.5
                                                                                                                </option>
                                                                                                                <option value='18'>
                                                                                                                    18
                                                                                                                </option>
                                                                                                                <option value='18.5'>
                                                                                                                    18.5
                                                                                                                </option>
                                                                                                                <option value='19'>
                                                                                                                    19
                                                                                                                </option>
                                                                                                                <option value='19.5'>
                                                                                                                    19.5
                                                                                                                </option>
                                                                                                                <option value='20'>
                                                                                                                    20
                                                                                                                </option>
                                                                                                                <option value='20.5'>
                                                                                                                    20.5
                                                                                                                </option>
                                                                                                                <option value='21'>
                                                                                                                    21
                                                                                                                </option>
                                                                                                                <option value='21.5'>
                                                                                                                    21.5
                                                                                                                </option>
                                                                                                                <option value='22'>
                                                                                                                    22
                                                                                                                </option>
                                                                                                                <option value='22.5'>
                                                                                                                    22.5
                                                                                                                </option>
                                                                                                                <option value='23'>
                                                                                                                    23
                                                                                                                </option>
                                                                                                                <option value='23.5'>
                                                                                                                    23.5
                                                                                                                </option>
                                                                                                                <option value='24'>
                                                                                                                    24
                                                                                                                </option>
                                                                                                                <option value='24.5'>
                                                                                                                    24.5
                                                                                                                </option>
                                                                                                                <option value='25'>
                                                                                                                    25
                                                                                                                </option>
                                                                                                                <option value='25.5'>
                                                                                                                    25.5
                                                                                                                </option>
                                                                                                                <option value='26'>
                                                                                                                    26
                                                                                                                </option>
                                                                                                                <option value='26.5'>
                                                                                                                    26.5
                                                                                                                </option>
                                                                                                                <option value='27'>
                                                                                                                    27
                                                                                                                </option>
                                                                                                                <option value='27.5'>
                                                                                                                    27.5
                                                                                                                </option>
                                                                                                                <option value='28'>
                                                                                                                    28
                                                                                                                </option>
                                                                                                                <option value='28.5'>
                                                                                                                    28.5
                                                                                                                </option>
                                                                                                                <option value='29'>
                                                                                                                    29
                                                                                                                </option>
                                                                                                                <option value='29.5'>
                                                                                                                    29.5
                                                                                                                </option>
                                                                                                                <option value='30'>
                                                                                                                    30
                                                                                                                </option>
                                                                                                                <option value='30.5'>
                                                                                                                    30.5
                                                                                                                </option>
                                                                                                                <option value='31'>
                                                                                                                    31
                                                                                                                </option>
                                                                                                                <option value='31.5'>
                                                                                                                    31.5
                                                                                                                </option>
                                                                                                                <option value='32'>
                                                                                                                    32
                                                                                                                </option>
                                                                                                                <option value='32.5'>
                                                                                                                    32.5
                                                                                                                </option>
                                                                                                                <option value='33'>
                                                                                                                    33
                                                                                                                </option>
                                                                                                                <option value='33.5'>
                                                                                                                    33.5
                                                                                                                </option>
                                                                                                                <option value='34'>
                                                                                                                    34
                                                                                                                </option>
                                                                                                                <option value='34.5'>
                                                                                                                    34.5
                                                                                                                </option>
                                                                                                                <option value='35'>
                                                                                                                    35
                                                                                                                </option>
                                                                                                                <option value='35.5'>
                                                                                                                    35.5
                                                                                                                </option>
                                                                                                                <option value='36'>
                                                                                                                    36
                                                                                                                </option>
                                                                                                                <option value='36.5'>
                                                                                                                    36.5
                                                                                                                </option>
                                                                                                                <option value='37'>
                                                                                                                    37
                                                                                                                </option>
                                                                                                                <option value='37.5'>
                                                                                                                    37.5
                                                                                                                </option>
                                                                                                                <option value='38'>
                                                                                                                    38
                                                                                                                </option>
                                                                                                                <option value='38.5'>
                                                                                                                    38.5
                                                                                                                </option>
                                                                                                                <option value='39'>
                                                                                                                    39
                                                                                                                </option>
                                                                                                                <option value='39.5'>
                                                                                                                    39.5
                                                                                                                </option>
                                                                                                                <option value='40'>
                                                                                                                    40
                                                                                                                </option>
                                                                                                                <option value='40.5'>
                                                                                                                    40.5
                                                                                                                </option>
                                                                                                                <option value='41'>
                                                                                                                    41
                                                                                                                </option>
                                                                                                                <option value='41.5'>
                                                                                                                    41.5
                                                                                                                </option>
                                                                                                                <option value='42'>
                                                                                                                    42
                                                                                                                </option>
                                                                                                                <option value='42.5'>
                                                                                                                    42.5
                                                                                                                </option>
                                                                                                                <option value='43'>
                                                                                                                    43
                                                                                                                </option>
                                                                                                                <option value='43.5'>
                                                                                                                    43.5
                                                                                                                </option>
                                                                                                                <option value='44'>
                                                                                                                    44
                                                                                                                </option>
                                                                                                                <option value='44.5'>
                                                                                                                    44.5
                                                                                                                </option>
                                                                                                                <option value='45'>
                                                                                                                    45
                                                                                                                </option>
                                                                                                                <option value='45.5'>
                                                                                                                    45.5
                                                                                                                </option>
                                                                                                                <option value='46'>
                                                                                                                    46
                                                                                                                </option>
                                                                                                                <option value='46.5'>
                                                                                                                    46.5
                                                                                                                </option>
                                                                                                                <option value='47'>
                                                                                                                    47
                                                                                                                </option>
                                                                                                                <option value='47.5'>
                                                                                                                    47.5
                                                                                                                </option>
                                                                                                                <option value='48'>
                                                                                                                    48
                                                                                                                </option>
                                                                                                                <option value='48.5'>
                                                                                                                    48.5
                                                                                                                </option>
                                                                                                                <option value='49'>
                                                                                                                    49
                                                                                                                </option>
                                                                                                                <option value='49.5'>
                                                                                                                    49.5
                                                                                                                </option>
                                                                                                                <option value='50'>
                                                                                                                    50
                                                                                                                </option>
                                                                                                                <option value='50.5'>
                                                                                                                    50.5
                                                                                                                </option>
                                                                                                                <option value='51'>
                                                                                                                    51
                                                                                                                </option>
                                                                                                                <option value='51.5'>
                                                                                                                    51.5
                                                                                                                </option>
                                                                                                                <option value='52'>
                                                                                                                    52
                                                                                                                </option>
                                                                                                                <option value='52.5'>
                                                                                                                    52.5
                                                                                                                </option>
                                                                                                                <option value='53'>
                                                                                                                    53
                                                                                                                </option>
                                                                                                                <option value='53.5'>
                                                                                                                    53.5
                                                                                                                </option>
                                                                                                                <option value='54'>
                                                                                                                    54
                                                                                                                </option>
                                                                                                                <option value='54.5'>
                                                                                                                    54.5
                                                                                                                </option>
                                                                                                                <option value='55'>
                                                                                                                    55
                                                                                                                </option>
                                                                                                                <option value='55.5'>
                                                                                                                    55.5
                                                                                                                </option>
                                                                                                                <option value='56'>
                                                                                                                    56
                                                                                                                </option>
                                                                                                                <option value='56.5'>
                                                                                                                    56.5
                                                                                                                </option>
                                                                                                                <option value='57'>
                                                                                                                    57
                                                                                                                </option>
                                                                                                                <option value='57.5'>
                                                                                                                    57.5
                                                                                                                </option>
                                                                                                                <option value='58'>
                                                                                                                    58
                                                                                                                </option>
                                                                                                                <option value='58.5'>
                                                                                                                    58.5
                                                                                                                </option>
                                                                                                                <option value='59'>
                                                                                                                    59
                                                                                                                </option>
                                                                                                                <option value='59.5'>
                                                                                                                    59.5
                                                                                                                </option>
                                                                                                                <option value='60'>
                                                                                                                    60
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6 col-sm-6 col-xs-6">
                                                                                                            <label><small>Oeil
                                                                                                                    gauche</small></label>
                                                                                                            <select id="hauteur_gauche"
                                                                                                                    name="hauteur_gauche"
                                                                                                                    class="form-control required">
                                                                                                                <option value=''>
                                                                                                                    --Choisir--
                                                                                                                </option>
                                                                                                                <option value='5'>
                                                                                                                    5
                                                                                                                </option>
                                                                                                                <option value='5.5'>
                                                                                                                    5.5
                                                                                                                </option>
                                                                                                                <option value='6'>
                                                                                                                    6
                                                                                                                </option>
                                                                                                                <option value='6.5'>
                                                                                                                    6.5
                                                                                                                </option>
                                                                                                                <option value='7'>
                                                                                                                    7
                                                                                                                </option>
                                                                                                                <option value='7.5'>
                                                                                                                    7.5
                                                                                                                </option>
                                                                                                                <option value='8'>
                                                                                                                    8
                                                                                                                </option>
                                                                                                                <option value='8.5'>
                                                                                                                    8.5
                                                                                                                </option>
                                                                                                                <option value='9'>
                                                                                                                    9
                                                                                                                </option>
                                                                                                                <option value='9.5'>
                                                                                                                    9.5
                                                                                                                </option>
                                                                                                                <option value='10'>
                                                                                                                    10
                                                                                                                </option>
                                                                                                                <option value='10.5'>
                                                                                                                    10.5
                                                                                                                </option>
                                                                                                                <option value='11'>
                                                                                                                    11
                                                                                                                </option>
                                                                                                                <option value='11.5'>
                                                                                                                    11.5
                                                                                                                </option>
                                                                                                                <option value='12'>
                                                                                                                    12
                                                                                                                </option>
                                                                                                                <option value='12.5'>
                                                                                                                    12.5
                                                                                                                </option>
                                                                                                                <option value='13'>
                                                                                                                    13
                                                                                                                </option>
                                                                                                                <option value='13.5'>
                                                                                                                    13.5
                                                                                                                </option>
                                                                                                                <option value='14'>
                                                                                                                    14
                                                                                                                </option>
                                                                                                                <option value='14.5'>
                                                                                                                    14.5
                                                                                                                </option>
                                                                                                                <option value='15'>
                                                                                                                    15
                                                                                                                </option>
                                                                                                                <option value='15.5'>
                                                                                                                    15.5
                                                                                                                </option>
                                                                                                                <option value='16'>
                                                                                                                    16
                                                                                                                </option>
                                                                                                                <option value='16.5'>
                                                                                                                    16.5
                                                                                                                </option>
                                                                                                                <option value='17'>
                                                                                                                    17
                                                                                                                </option>
                                                                                                                <option value='17.5'>
                                                                                                                    17.5
                                                                                                                </option>
                                                                                                                <option value='18'>
                                                                                                                    18
                                                                                                                </option>
                                                                                                                <option value='18.5'>
                                                                                                                    18.5
                                                                                                                </option>
                                                                                                                <option value='19'>
                                                                                                                    19
                                                                                                                </option>
                                                                                                                <option value='19.5'>
                                                                                                                    19.5
                                                                                                                </option>
                                                                                                                <option value='20'>
                                                                                                                    20
                                                                                                                </option>
                                                                                                                <option value='20.5'>
                                                                                                                    20.5
                                                                                                                </option>
                                                                                                                <option value='21'>
                                                                                                                    21
                                                                                                                </option>
                                                                                                                <option value='21.5'>
                                                                                                                    21.5
                                                                                                                </option>
                                                                                                                <option value='22'>
                                                                                                                    22
                                                                                                                </option>
                                                                                                                <option value='22.5'>
                                                                                                                    22.5
                                                                                                                </option>
                                                                                                                <option value='23'>
                                                                                                                    23
                                                                                                                </option>
                                                                                                                <option value='23.5'>
                                                                                                                    23.5
                                                                                                                </option>
                                                                                                                <option value='24'>
                                                                                                                    24
                                                                                                                </option>
                                                                                                                <option value='24.5'>
                                                                                                                    24.5
                                                                                                                </option>
                                                                                                                <option value='25'>
                                                                                                                    25
                                                                                                                </option>
                                                                                                                <option value='25.5'>
                                                                                                                    25.5
                                                                                                                </option>
                                                                                                                <option value='26'>
                                                                                                                    26
                                                                                                                </option>
                                                                                                                <option value='26.5'>
                                                                                                                    26.5
                                                                                                                </option>
                                                                                                                <option value='27'>
                                                                                                                    27
                                                                                                                </option>
                                                                                                                <option value='27.5'>
                                                                                                                    27.5
                                                                                                                </option>
                                                                                                                <option value='28'>
                                                                                                                    28
                                                                                                                </option>
                                                                                                                <option value='28.5'>
                                                                                                                    28.5
                                                                                                                </option>
                                                                                                                <option value='29'>
                                                                                                                    29
                                                                                                                </option>
                                                                                                                <option value='29.5'>
                                                                                                                    29.5
                                                                                                                </option>
                                                                                                                <option value='30'>
                                                                                                                    30
                                                                                                                </option>
                                                                                                                <option value='30.5'>
                                                                                                                    30.5
                                                                                                                </option>
                                                                                                                <option value='31'>
                                                                                                                    31
                                                                                                                </option>
                                                                                                                <option value='31.5'>
                                                                                                                    31.5
                                                                                                                </option>
                                                                                                                <option value='32'>
                                                                                                                    32
                                                                                                                </option>
                                                                                                                <option value='32.5'>
                                                                                                                    32.5
                                                                                                                </option>
                                                                                                                <option value='33'>
                                                                                                                    33
                                                                                                                </option>
                                                                                                                <option value='33.5'>
                                                                                                                    33.5
                                                                                                                </option>
                                                                                                                <option value='34'>
                                                                                                                    34
                                                                                                                </option>
                                                                                                                <option value='34.5'>
                                                                                                                    34.5
                                                                                                                </option>
                                                                                                                <option value='35'>
                                                                                                                    35
                                                                                                                </option>
                                                                                                                <option value='35.5'>
                                                                                                                    35.5
                                                                                                                </option>
                                                                                                                <option value='36'>
                                                                                                                    36
                                                                                                                </option>
                                                                                                                <option value='36.5'>
                                                                                                                    36.5
                                                                                                                </option>
                                                                                                                <option value='37'>
                                                                                                                    37
                                                                                                                </option>
                                                                                                                <option value='37.5'>
                                                                                                                    37.5
                                                                                                                </option>
                                                                                                                <option value='38'>
                                                                                                                    38
                                                                                                                </option>
                                                                                                                <option value='38.5'>
                                                                                                                    38.5
                                                                                                                </option>
                                                                                                                <option value='39'>
                                                                                                                    39
                                                                                                                </option>
                                                                                                                <option value='39.5'>
                                                                                                                    39.5
                                                                                                                </option>
                                                                                                                <option value='40'>
                                                                                                                    40
                                                                                                                </option>
                                                                                                                <option value='40.5'>
                                                                                                                    40.5
                                                                                                                </option>
                                                                                                                <option value='41'>
                                                                                                                    41
                                                                                                                </option>
                                                                                                                <option value='41.5'>
                                                                                                                    41.5
                                                                                                                </option>
                                                                                                                <option value='42'>
                                                                                                                    42
                                                                                                                </option>
                                                                                                                <option value='42.5'>
                                                                                                                    42.5
                                                                                                                </option>
                                                                                                                <option value='43'>
                                                                                                                    43
                                                                                                                </option>
                                                                                                                <option value='43.5'>
                                                                                                                    43.5
                                                                                                                </option>
                                                                                                                <option value='44'>
                                                                                                                    44
                                                                                                                </option>
                                                                                                                <option value='44.5'>
                                                                                                                    44.5
                                                                                                                </option>
                                                                                                                <option value='45'>
                                                                                                                    45
                                                                                                                </option>
                                                                                                                <option value='45.5'>
                                                                                                                    45.5
                                                                                                                </option>
                                                                                                                <option value='46'>
                                                                                                                    46
                                                                                                                </option>
                                                                                                                <option value='46.5'>
                                                                                                                    46.5
                                                                                                                </option>
                                                                                                                <option value='47'>
                                                                                                                    47
                                                                                                                </option>
                                                                                                                <option value='47.5'>
                                                                                                                    47.5
                                                                                                                </option>
                                                                                                                <option value='48'>
                                                                                                                    48
                                                                                                                </option>
                                                                                                                <option value='48.5'>
                                                                                                                    48.5
                                                                                                                </option>
                                                                                                                <option value='49'>
                                                                                                                    49
                                                                                                                </option>
                                                                                                                <option value='49.5'>
                                                                                                                    49.5
                                                                                                                </option>
                                                                                                                <option value='50'>
                                                                                                                    50
                                                                                                                </option>
                                                                                                                <option value='50.5'>
                                                                                                                    50.5
                                                                                                                </option>
                                                                                                                <option value='51'>
                                                                                                                    51
                                                                                                                </option>
                                                                                                                <option value='51.5'>
                                                                                                                    51.5
                                                                                                                </option>
                                                                                                                <option value='52'>
                                                                                                                    52
                                                                                                                </option>
                                                                                                                <option value='52.5'>
                                                                                                                    52.5
                                                                                                                </option>
                                                                                                                <option value='53'>
                                                                                                                    53
                                                                                                                </option>
                                                                                                                <option value='53.5'>
                                                                                                                    53.5
                                                                                                                </option>
                                                                                                                <option value='54'>
                                                                                                                    54
                                                                                                                </option>
                                                                                                                <option value='54.5'>
                                                                                                                    54.5
                                                                                                                </option>
                                                                                                                <option value='55'>
                                                                                                                    55
                                                                                                                </option>
                                                                                                                <option value='55.5'>
                                                                                                                    55.5
                                                                                                                </option>
                                                                                                                <option value='56'>
                                                                                                                    56
                                                                                                                </option>
                                                                                                                <option value='56.5'>
                                                                                                                    56.5
                                                                                                                </option>
                                                                                                                <option value='57'>
                                                                                                                    57
                                                                                                                </option>
                                                                                                                <option value='57.5'>
                                                                                                                    57.5
                                                                                                                </option>
                                                                                                                <option value='58'>
                                                                                                                    58
                                                                                                                </option>
                                                                                                                <option value='58.5'>
                                                                                                                    58.5
                                                                                                                </option>
                                                                                                                <option value='59'>
                                                                                                                    59
                                                                                                                </option>
                                                                                                                <option value='59.5'>
                                                                                                                    59.5
                                                                                                                </option>
                                                                                                                <option value='60'>
                                                                                                                    60
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="additional_info" class="form-group row hide">
                                                                        <div class="col-xs-12">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading"><h5>
                                                                                        Informations complémentaires facultatives</h5></div>
                                                                                <div class="panel-body "
                                                                                     style="padding-top: 15px; text-align: center">
                                                                                    <div class="row">
                                                                                        <div class="col-xs-2"></div>
                                                                                        <div class="col-xs-8">
                                                                                            <table id="tab_info_comp" class="table table-factures table-striped dt-responsive nowrap" style="display: none;">
                                                                                                <thead>
                                                                                                    <tr style="background-color: #f8bc06">
                                                                                                        <th></th>
                                                                                                        <th style="color: #fff">Oeil droit</th>
                                                                                                        <th style="color: #fff">Oeil gauche</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr id="tr_ecart_pup">
                                                                                                        <th>Écart pupillaire vision de près</th>
                                                                                                        <td id="tab_ecart_pup_D"></td>
                                                                                                        <td id="tab_ecart_pup_G"></td>
                                                                                                    </tr>
                                                                                                    <tr id="tr_angle_galbe">
                                                                                                        <th>Angle de galbe</th>
                                                                                                        <td id="tab_angle_galbe_D"></td>
                                                                                                        <td id="tab_angle_galbe_G"></td>
                                                                                                    </tr>
                                                                                                    <tr id="tr_distance_verre_oeil">
                                                                                                        <th>Distance verre oeil</th>
                                                                                                        <td id="tab_distance_verre_oeil_D"></td>
                                                                                                        <td id="tab_distance_verre_oeil_G"></td>
                                                                                                    </tr>
                                                                                                    <tr id="tr_angle_pantoscopique">
                                                                                                        <th>Angle pantoscopique</th>
                                                                                                        <td id="tab_angle_pantoscopique_D"></td>
                                                                                                        <td id="tab_angle_pantoscopique_G"></td>
                                                                                                    </tr>
                                                                                                    <tr id="tr_hauteur_montage">
                                                                                                        <th>Hauteur de montage</th>
                                                                                                        <td id="tab_hauteur_montage_D"></td>
                                                                                                        <td id="tab_hauteur_montage_G"></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <button type="button" id="btn_add_info_sup" class="btn btn-warning waves-effect waves-light">
                                                                                                Insérer mes informations complémentaires facultatives
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="col-xs-2"></div>
                                                                                    </div>
                                                                                </div>

                                                                                <div id="add_info_sup" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                                                                    <div class="modal-dialog" style="width: 90%; max-width: 700px;">
                                                                                        <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                                    <h4 class="modal-title">informations complémentaires facultatives</h4>
                                                                                                </div>

                                                                                                <div class="modal-body">
                                                                                                    <div class="panel-body"
                                                                                                         style="padding-top: 15px">
                                                                                                        <div class="col-xs-12">
                                                                                                            <div class="form-group row">

                                                                                                                <div class="col-xs-12 col-md-4"></div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>oeil droit</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>oeil gauche</strong>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Écart pupillaire vision de près</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="ecart_pup_D"
                                                                                                                           id="ecart_pup_D"
                                                                                                                           value="">
                                                                                                                    <p id='error_ecart_pup_D' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="ecart_pup_G"
                                                                                                                           id="ecart_pup_G"
                                                                                                                           value="">
                                                                                                                    <p id='error_ecart_pup_G' class="error error_info_comp"></p>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Angle de galbe</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="angle_galbe_D"
                                                                                                                           id="angle_galbe_D"
                                                                                                                           value="">
                                                                                                                    <p id='error_angle_galbe_D' class="error error_info_comp"></p>

                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="angle_galbe_G"
                                                                                                                           id="angle_galbe_G"
                                                                                                                           value="">
                                                                                                                    <p id='error_angle_galbe_G' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Distance verre oeil</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="distance_verre_oeil_D"
                                                                                                                           id="distance_verre_oeil_D"
                                                                                                                           value="">
                                                                                                                    <p id='error_distance_verre_oeil_D' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="distance_verre_oeil_G"
                                                                                                                           id="distance_verre_oeil_G"
                                                                                                                           value="">
                                                                                                                    <p id="error_distance_verre_oeil_G" class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Angle pantoscopique</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="angle_pantoscopique_D"
                                                                                                                           id="angle_pantoscopique_D"
                                                                                                                           value="">
                                                                                                                    <p id='error_angle_pantoscopique_D' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="angle_pantoscopique_G"
                                                                                                                           id="angle_pantoscopique_G"
                                                                                                                           value="">
                                                                                                                    <p id='error_angle_pantoscopique_G' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-xs-12 col-md-4 text-center text_info_comp">
                                                                                                                    <strong>Hauteur de montage</strong>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="hauteur_montage_D"
                                                                                                                           id="hauteur_montage_D"
                                                                                                                           value="">
                                                                                                                    <p id='error_hauteur_montage_D' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                                <div class="col-xs-12 col-md-4">
                                                                                                                    <input type="text"
                                                                                                                           class="form-control info_comp"
                                                                                                                           name="hauteur_montage_G"
                                                                                                                           id="hauteur_montage_G"
                                                                                                                           value="">
                                                                                                                    <p id='error_hauteur_montage_G' class="error error_info_comp"></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>

                                                                                                <div class="modal-footer">
                                                                                                    <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                                                                                                    <button id="submit_info_comp" class="btn btn-warning waves-effect waves-light" data-dismiss="modal">Valider les informations</button>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

<!--                                                                                <div id="preview_carte"-->
<!--                                                                                     class="form-group clearfix auth_fields"-->
<!--                                                                                     style="display:none; margin-top:20px">-->
<!---->
<!---->
<!--                                                                                    <div class="col-lg-12" id="carte_1">-->
<!--                                                                                        <div class="col-lg-12">-->
<!--                                                                                            <div id="carte">-->
<!--                                                                                                --><?php
//                                                                                                setlocale(LC_TIME,
//                                                                                                    "fr_FR.UTF-8"); ?>
<!---->
<!--                                                                                                <div id="preview_auth_card"-->
<!--                                                                                                     style="float:left">-->
<!---->
<!--                                                                                                    <span class="titre optieyes"></span>-->
<!--                                                                                                    --><?php
//                                                                                                    if (isset($logo)) {
//                                                                                                        echo '<img class="card_logo" src="/static/img/logo.png" />';
//                                                                                                    } ?>
<!---->
<!--                                                                                                    <div class="info">-->
<!--                                                                                                        <span class="ref">REF OPTIEYES</span>-->
<!--                                                                                                        <span class="date">--><?php
//                                                                                                            echo strftime('%d %B %Y',
//                                                                                                                time()) ?><!--</span>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="client">-->
<!--                                                                                                        <span class="civilite">M.</span>-->
<!--                                                                                                        <span class="nom_client"><b-->
<!--                                                                                                                    class="nom">Dupont</b> <b-->
<!--                                                                                                                    class="prenom">Jean</b></span>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="corrections">-->
<!---->
<!--                                                                                                        <table>-->
<!--                                                                                                            <tr class="d"-->
<!--                                                                                                                style="display: none;">-->
<!--                                                                                                                <td class="correct">-->
<!--                                                                                                                    OD:-->
<!--                                                                                                                    <span class="correction"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td>-->
<!--                                                                                                                    <span class="add"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td class="prism">-->
<!--                                                                                                                    <span class="diopt"></span><span-->
<!--                                                                                                                            class="base"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                            </tr>-->
<!---->
<!--                                                                                                            <tr class="g"-->
<!--                                                                                                                style="display: none;">-->
<!--                                                                                                                <td class="correct">-->
<!--                                                                                                                    OG:-->
<!--                                                                                                                    <span class="correction"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td>-->
<!--                                                                                                                    <span class="add"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td class="prism">-->
<!--                                                                                                                    <span class="diopt"></span><span-->
<!--                                                                                                                            class="base"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                            </tr>-->
<!---->
<!--                                                                                                        </table>-->
<!---->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="verres">-->
<!--                                                                                                        <span class="nom_verre"></span>-->
<!--                                                                                                        <span class="diam_verre"></span>-->
<!--                                                                                                        <div class="options">-->
<!--                                                                                                            <span class="miroir"></span>-->
<!--                                                                                                            <span class="galbe"></span>-->
<!--                                                                                                        </div>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="opticien">-->
<!--                                                                                                        <span class="titre">--><?php
//                                                                                                            echo $user_info->nom_magasin; ?><!--</span>-->
<!--                                                                                                        <span>--><?php
//                                                                                                            echo $user_info->adresse; ?><!--</span>-->
<!--                                                                                                        <span>--><?php
//                                                                                                            echo $user_info->cp; ?><!----><?php
//                                                                                                            echo $user_info->ville; ?><!--</span>-->
<!--                                                                                                        <span class="tel">Tél: --><?php
//                                                                                                            echo $user_info->tel_fixe; ?><!--</span>-->
<!--                                                                                                    </div>-->
<!---->
<!---->
<!--                                                                                                </div>-->
<!---->
<!--                                                                                                <div id="preview_auth_img"-->
<!--                                                                                                     style="float:right">-->
<!--                                                                                                    <img src="/static/img/auth_back.jpg"/>-->
<!--                                                                                                </div>-->
<!---->
<!--                                                                                            </div>-->
<!--                                                                                        </div>-->
<!--                                                                                    </div>-->
<!--                                                                                    <div class="col-lg-12" id="cartesGD"-->
<!--                                                                                         style="display:none">-->
<!--                                                                                        <div class="sub-auth"-->
<!--                                                                                             id="prev_auth">-->
<!--                                                                                            <div id="carteD"-->
<!--                                                                                                 style="width:100%; float:left">-->
<!--                                                                                                --><?php
//                                                                                                setlocale(LC_TIME,
//                                                                                                    "fr_FR.UTF-8"); ?>
<!---->
<!--                                                                                                <div id="preview_auth_card">-->
<!---->
<!--                                                                                                    <span class="titre optieyes"></span>-->
<!--                                                                                                    --><?php
//                                                                                                    if (isset($logo)) {
//                                                                                                        echo '<img class="card_logo" src="/static/img/logo.png" />';
//                                                                                                    } ?>
<!---->
<!--                                                                                                    <div class="info">-->
<!--                                                                                                        <span class="ref">REF OPTIEYES</span>-->
<!--                                                                                                        <span class="date">--><?php
//                                                                                                            echo strftime('%d %B %Y',
//                                                                                                                time()) ?><!--</span>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="client">-->
<!--                                                                                                        <span class="civilite">M.</span>-->
<!--                                                                                                        <span class="nom_client"><b-->
<!--                                                                                                                    class="nom">Dupont</b> <b-->
<!--                                                                                                                    class="prenom">Jean</b></span>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="corrections">-->
<!---->
<!--                                                                                                        <table>-->
<!--                                                                                                            <tr class="d"-->
<!--                                                                                                                style="display: none;">-->
<!--                                                                                                                <td class="correct">-->
<!--                                                                                                                    OD:-->
<!--                                                                                                                    <span class="correction"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td>-->
<!--                                                                                                                    <span class="add"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td class="prism">-->
<!--                                                                                                                    <span class="diopt"></span><span-->
<!--                                                                                                                            class="base"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                            </tr>-->
<!--                                                                                                        </table>-->
<!---->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="verres">-->
<!--                                                                                                        <span class="nom_verre"></span>-->
<!--                                                                                                        <span class="diam_verre"></span>-->
<!--                                                                                                        <div class="options">-->
<!--                                                                                                            <span class="miroir"></span>-->
<!--                                                                                                            <span class="galbe"></span>-->
<!--                                                                                                        </div>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="opticien">-->
<!--                                                                                                        <span class="titre">--><?php
//                                                                                                            echo $user_info->nom_magasin; ?><!--</span>-->
<!--                                                                                                        <span>--><?php
//                                                                                                            echo $user_info->adresse; ?><!--</span>-->
<!--                                                                                                        <span>--><?php
//                                                                                                            echo $user_info->cp; ?><!----><?php
//                                                                                                            echo $user_info->ville; ?><!--</span>-->
<!--                                                                                                        <span class="tel">Tél: --><?php
//                                                                                                            echo $user_info->tel_fixe; ?><!--</span>-->
<!--                                                                                                    </div>-->
<!---->
<!---->
<!--                                                                                                </div>-->
<!---->
<!--                                                                                                <div id="preview_auth_img">-->
<!--                                                                                                    <img src="/static/img/auth_back.jpg"/>-->
<!--                                                                                                </div>-->
<!---->
<!--                                                                                            </div>-->
<!--                                                                                            <div id="carteG"-->
<!--                                                                                                 style="width:100%; float:left">-->
<!--                                                                                                --><?php
//                                                                                                setlocale(LC_TIME,
//                                                                                                    "fr_FR.UTF-8"); ?>
<!---->
<!--                                                                                                <div id="preview_auth_card">-->
<!---->
<!--                                                                                                    <span class="titre optieyes"></span>-->
<!--                                                                                                    --><?php
//                                                                                                    if (isset($logo)) {
//                                                                                                        echo '<img class="card_logo" src="/static/img/logo.png" />';
//                                                                                                    } ?>
<!---->
<!--                                                                                                    <div class="info">-->
<!--                                                                                                        <span class="ref">REF OPTIEYES</span>-->
<!--                                                                                                        <span class="date">--><?php
//                                                                                                            echo strftime('%d %B %Y',
//                                                                                                                time()) ?><!--</span>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="client">-->
<!--                                                                                                        <span class="civilite">M.</span>-->
<!--                                                                                                        <span class="nom_client"><b-->
<!--                                                                                                                    class="nom">Dupont</b> <b-->
<!--                                                                                                                    class="prenom">Jean</b></span>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="corrections">-->
<!---->
<!--                                                                                                        <table>-->
<!--                                                                                                            <tr class="g"-->
<!--                                                                                                                style="display: none;">-->
<!--                                                                                                                <td class="correct">-->
<!--                                                                                                                    OG:-->
<!--                                                                                                                    <span class="correction"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td>-->
<!--                                                                                                                    <span class="add"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                                <td class="prism">-->
<!--                                                                                                                    <span class="diopt"></span><span-->
<!--                                                                                                                            class="base"></span>-->
<!--                                                                                                                </td>-->
<!--                                                                                                            </tr>-->
<!---->
<!--                                                                                                        </table>-->
<!---->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="verres">-->
<!--                                                                                                        <span class="nom_verre"></span>-->
<!--                                                                                                        <span class="diam_verre"></span>-->
<!--                                                                                                        <div class="options">-->
<!--                                                                                                            <span class="miroir"></span>-->
<!--                                                                                                            <span class="galbe"></span>-->
<!--                                                                                                        </div>-->
<!--                                                                                                    </div>-->
<!---->
<!--                                                                                                    <div class="opticien">-->
<!--                                                                                                        <span class="titre">--><?php
//                                                                                                            echo $user_info->nom_magasin; ?><!--</span>-->
<!--                                                                                                        <span>--><?php
//                                                                                                            echo $user_info->adresse; ?><!--</span>-->
<!--                                                                                                        <span>--><?php
//                                                                                                            echo $user_info->cp; ?><!----><?php
//                                                                                                            echo $user_info->ville; ?><!--</span>-->
<!--                                                                                                        <span class="tel">Tél: --><?php
//                                                                                                            echo $user_info->tel_fixe; ?><!--</span>-->
<!--                                                                                                    </div>-->
<!---->
<!---->
<!--                                                                                                </div>-->
<!---->
<!--                                                                                                <div id="preview_auth_img">-->
<!--                                                                                                    <img src="/static/img/auth_back.jpg"/>-->
<!--                                                                                                </div>-->
<!---->
<!--                                                                                            </div>-->
<!--                                                                                        </div>-->
<!--                                                                                    </div>-->
<!---->
<!--                                                                                </div>-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="certif" class="form-group row hide">
                                                                        <div class="col-xs-12">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading"><h5>
                                                                                        Certificat</h5></div>
                                                                                <div class="panel-body "
                                                                                     style="padding-top: 15px">

                                                                                    <div id="type_commande_error"
                                                                                         class="col-lg-12">
                                                                                        <?php
                                                                                        if ($panierA != 1) {
                                                                                            ?>
                                                                                        <div class="col-lg-12 card-tabs">
                                                                                            <ul id="ul_carte_auth" class="nav nav-pills flex flex-space-between" style = "text-align:center">
                                                                                                <li id="li_carte_auth_y" class="carte_auth">
                                                                                                    <a href="#"
                                                                                                       data-toggle="tab"
                                                                                                       aria-expanded="true"
                                                                                                       id="a_carte_auth_y"><b>Je souhaite un
                                                                                                            certificat
                                                                                                            d'authenticité
                                                                                                            (Gratuit)</b></a>
                                                                                                </li>
                                                                                                <li id="li_carte_auth_n" class="active carte_auth">
                                                                                                    <a href="#"
                                                                                                       data-toggle="tab"
                                                                                                       aria-expanded="true"
                                                                                                       id="a_carte_auth_n"><b>Non</b></a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="hide">
                                                                                            <div class="radio radio-warning">
                                                                                                <input type="radio"
                                                                                                       id="carte_auth_y"
                                                                                                       value="1"
                                                                                                       name="carte_auth"
                                                                                                       class="required"
                                                                                                       aria-required="true">
                                                                                                <label id="text_titre_carte"
                                                                                                       for="carte_auth_y">
                                                                                                    Je souhaite un
                                                                                                    certificat
                                                                                                    d'authenticité
                                                                                                    (Gratuit) </label>
                                                                                            </div>

                                                                                            <div class="radio radio-warning"
                                                                                                 id="div_auth_n">
                                                                                                <input type="radio"
                                                                                                       id="carte_auth_n"
                                                                                                       value="0"
                                                                                                       name="carte_auth"
                                                                                                       class="required"
                                                                                                       aria-required="true"
                                                                                                       checked>
                                                                                                <label for="carte_auth_n">
                                                                                                    Non </label>
                                                                                            </div>
                                                                                        </div>
                                                                                            <?php
                                                                                        } else {
                                                                                            ?>
                                                                                            <div class="radio radio-warning">
                                                                                                <input type="radio"
                                                                                                       id="carte_auth_y"
                                                                                                       value="1"
                                                                                                       name="carte_auth"
                                                                                                       class="required"
                                                                                                       aria-required="true">
                                                                                                <label id="text_titre_carte"
                                                                                                       for="carte_auth_y">«&nbsp;La
                                                                                                    carte d'authenticité
                                                                                                    est obligatoire pour
                                                                                                    des produits
                                                                                                    commandés en panier
                                                                                                    A&nbsp;»</label>
                                                                                            </div>
                                                                                            <?php
                                                                                        }
                                                                                        ?>
                                                                                        <div class="validator"></div>
                                                                                    </div>

                                                                                    <label class="col-xs-12 control-label hide">Votre
                                                                                        carte</label>
                                                                                    <div class="col-xs-12"
                                                                                         style="margin-top:20px">
                                                                                        <div id="civilite_client"
                                                                                             class="col-xs-2 form-group clearfix auth_fields">
                                                                                            <label class=" control-label">Civilité
                                                                                                client</label>
                                                                                            <div>
                                                                                                <select class="form-control required"
                                                                                                        id="civiliteClient"
                                                                                                        name="civilite_client"
                                                                                                        aria-required="true">
                                                                                                    <option value="0">
                                                                                                        Sélectionner..
                                                                                                    </option>
                                                                                                    <option value="1">
                                                                                                        Madame
                                                                                                    </option>
                                                                                                    <option value="2">
                                                                                                        Monsieur
                                                                                                    </option>
                                                                                                    <option value="3">
                                                                                                        Mademoiselle
                                                                                                    </option>
                                                                                                    <option value="4">
                                                                                                        Enfant
                                                                                                    </option>
                                                                                                </select>
                                                                                                <div class="validator"></div>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div id="nom_client"
                                                                                             class="col-xs-12 col-md-3 form-group clearfix auth_fields">
                                                                                            <label class=" control-label">Nom
                                                                                                du client</label>
                                                                                            <div class="">
                                                                                                <input type="text"
                                                                                                       class="form-control required"
                                                                                                       name="nom_client"
                                                                                                       id="nomClient"
                                                                                                       aria-required="true">
                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div id="prenom_client"
                                                                                             class="col-xs-12 col-md-3 form-group clearfix auth_fields">
                                                                                            <label class=" control-label">Prénom
                                                                                                du client</label>
                                                                                            <div class="">
                                                                                                <input type="text"
                                                                                                       class="form-control required"
                                                                                                       name="prenom_client"
                                                                                                       id="prenomClient"
                                                                                                       aria-required="true">
                                                                                                <div class="validator"></div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-xs-12 col-md-3">
                                                                                            <label class=" control-label"> </label>
                                                                                            <div class=" clearfix"
                                                                                                 style="margin-top:12px">
                                                                                                <a id="generer_carte"
                                                                                                   class="btn btn-warning">Générer
                                                                                                    la carte
                                                                                                    d'authenticité</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>


                                                                                <div id="preview_carte"
                                                                                     class="form-group clearfix auth_fields"
                                                                                     style="display:none; margin-top:20px">


                                                                                    <div class="col-lg-12" id="carte_1">
                                                                                        <div class="col-lg-12">
                                                                                            <div id="carte">
                                                                                                <?php
                                                                                                setlocale(LC_TIME,
                                                                                                          "fr_FR.UTF-8"); ?>

                                                                                                <div id="preview_auth_card"
                                                                                                     style="float:left">

                                                                                                    <span class="titre optieyes"></span>
                                                                                                    <?php
                                                                                                    if (isset($logo)) {
                                                                                                        echo '<img class="card_logo" src="/static/img/logo.png" />';
                                                                                                    } ?>

                                                                                                    <div class="info">
                                                                                                        <span class="ref">REF OPTIEYES</span>
                                                                                                        <span class="date"><?php
                                                                                                            echo strftime('%d %B %Y',
                                                                                                                          time()) ?></span>
                                                                                                    </div>

                                                                                                    <div class="client">
                                                                                                        <span class="civilite">M.</span>
                                                                                                        <span class="nom_client"><b
                                                                                                                    class="nom">Dupont</b> <b
                                                                                                                    class="prenom">Jean</b></span>
                                                                                                    </div>

                                                                                                    <div class="corrections">

                                                                                                        <table>
                                                                                                            <tr class="d"
                                                                                                                style="display: none;">
                                                                                                                <td class="correct">
                                                                                                                    OD:
                                                                                                                    <span class="correction"></span>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <span class="add"></span>
                                                                                                                </td>
                                                                                                                <td class="prism">
                                                                                                                    <span class="diopt"></span><span
                                                                                                                            class="base"></span>
                                                                                                                </td>
                                                                                                            </tr>

                                                                                                            <tr class="g"
                                                                                                                style="display: none;">
                                                                                                                <td class="correct">
                                                                                                                    OG:
                                                                                                                    <span class="correction"></span>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <span class="add"></span>
                                                                                                                </td>
                                                                                                                <td class="prism">
                                                                                                                    <span class="diopt"></span><span
                                                                                                                            class="base"></span>
                                                                                                                </td>
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
                                                                                                        <span class="titre"><?php
                                                                                                            echo $user_info->nom_magasin; ?></span>
                                                                                                        <span><?php
                                                                                                            echo $user_info->adresse; ?></span>
                                                                                                        <span><?php
                                                                                                            echo $user_info->cp; ?><?php
                                                                                                            echo $user_info->ville; ?></span>
                                                                                                        <span class="tel">Tél: <?php
                                                                                                            echo $user_info->tel_fixe; ?></span>
                                                                                                    </div>


                                                                                                </div>

                                                                                                <div id="preview_auth_img"
                                                                                                     style="float:right">
                                                                                                    <img src="/static/img/auth_back.jpg"/>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12" id="cartesGD"
                                                                                         style="display:none">
                                                                                        <div class="sub-auth"
                                                                                             id="prev_auth">
                                                                                            <div id="carteD"
                                                                                                 style="width:100%; float:left">
                                                                                                <?php
                                                                                                setlocale(LC_TIME,
                                                                                                          "fr_FR.UTF-8"); ?>

                                                                                                <div id="preview_auth_card">

                                                                                                    <span class="titre optieyes"></span>
                                                                                                    <?php
                                                                                                    if (isset($logo)) {
                                                                                                        echo '<img class="card_logo" src="/static/img/logo.png" />';
                                                                                                    } ?>

                                                                                                    <div class="info">
                                                                                                        <span class="ref">REF OPTIEYES</span>
                                                                                                        <span class="date"><?php
                                                                                                            echo strftime('%d %B %Y',
                                                                                                                          time()) ?></span>
                                                                                                    </div>

                                                                                                    <div class="client">
                                                                                                        <span class="civilite">M.</span>
                                                                                                        <span class="nom_client"><b
                                                                                                                    class="nom">Dupont</b> <b
                                                                                                                    class="prenom">Jean</b></span>
                                                                                                    </div>

                                                                                                    <div class="corrections">

                                                                                                        <table>
                                                                                                            <tr class="d"
                                                                                                                style="display: none;">
                                                                                                                <td class="correct">
                                                                                                                    OD:
                                                                                                                    <span class="correction"></span>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <span class="add"></span>
                                                                                                                </td>
                                                                                                                <td class="prism">
                                                                                                                    <span class="diopt"></span><span
                                                                                                                            class="base"></span>
                                                                                                                </td>
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
                                                                                                        <span class="titre"><?php
                                                                                                            echo $user_info->nom_magasin; ?></span>
                                                                                                        <span><?php
                                                                                                            echo $user_info->adresse; ?></span>
                                                                                                        <span><?php
                                                                                                            echo $user_info->cp; ?><?php
                                                                                                            echo $user_info->ville; ?></span>
                                                                                                        <span class="tel">Tél: <?php
                                                                                                            echo $user_info->tel_fixe; ?></span>
                                                                                                    </div>


                                                                                                </div>

                                                                                                <div id="preview_auth_img">
                                                                                                    <img src="/static/img/auth_back.jpg"/>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div id="carteG"
                                                                                                 style="width:100%; float:left">
                                                                                                <?php
                                                                                                setlocale(LC_TIME,
                                                                                                          "fr_FR.UTF-8"); ?>

                                                                                                <div id="preview_auth_card">

                                                                                                    <span class="titre optieyes"></span>
                                                                                                    <?php
                                                                                                    if (isset($logo)) {
                                                                                                        echo '<img class="card_logo" src="/static/img/logo.png" />';
                                                                                                    } ?>

                                                                                                    <div class="info">
                                                                                                        <span class="ref">REF OPTIEYES</span>
                                                                                                        <span class="date"><?php
                                                                                                            echo strftime('%d %B %Y',
                                                                                                                          time()) ?></span>
                                                                                                    </div>

                                                                                                    <div class="client">
                                                                                                        <span class="civilite">M.</span>
                                                                                                        <span class="nom_client"><b
                                                                                                                    class="nom">Dupont</b> <b
                                                                                                                    class="prenom">Jean</b></span>
                                                                                                    </div>

                                                                                                    <div class="corrections">

                                                                                                        <table>
                                                                                                            <tr class="g"
                                                                                                                style="display: none;">
                                                                                                                <td class="correct">
                                                                                                                    OG:
                                                                                                                    <span class="correction"></span>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <span class="add"></span>
                                                                                                                </td>
                                                                                                                <td class="prism">
                                                                                                                    <span class="diopt"></span><span
                                                                                                                            class="base"></span>
                                                                                                                </td>
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
                                                                                                        <span class="titre"><?php
                                                                                                            echo $user_info->nom_magasin; ?></span>
                                                                                                        <span><?php
                                                                                                            echo $user_info->adresse; ?></span>
                                                                                                        <span><?php
                                                                                                            echo $user_info->cp; ?><?php
                                                                                                            echo $user_info->ville; ?></span>
                                                                                                        <span class="tel">Tél: <?php
                                                                                                            echo $user_info->tel_fixe; ?></span>
                                                                                                    </div>


                                                                                                </div>

                                                                                                <div id="preview_auth_img">
                                                                                                    <img src="/static/img/auth_back.jpg"/>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="pager m-b-0 wizard display_next">
                                                    <li class="next1" style="float: right;"><a
                                                                                               class="btn btn-warning btn-lg waves-effect waves-light disabled"
                                                                                               id="to_etape2">Suivant</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane m-t-10 fade last_of_page" id="etape2">
                                                <div id="recap_commande" class="invoice"></div>
                                                <ul class="pager m-b-0 wizard">
                                                    <li class="previous display_next" id="to_etape1"><a href="#"
                                                                                                        class="btn btn-inverse btn-lg waves-effect waves-light">Précédent</a>
                                                    </li>
                                                    <li class="finish"><a href="#"
                                                                          class="btn btn-warning btn-lg waves-effect waves-light"
                                                                          id="valider_commande">Valider la commande</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="hidden" value="" id="prixVerreD" name="prixVerreD">
                                            <input type="hidden" value="" id="prixVerreG" name="prixVerreG">
                                            <input type="hidden" value="" id="prixTeinteD" name="prixTeinteD">
                                            <input type="hidden" value="" id="prixTeinteG" name="prixTeinteG">
                                            <input type="hidden" value="" id="prixTraitementD" name="prixTraitementD">
                                            <input type="hidden" value="" id="prixTraitementG" name="prixTraitementG">
                                            <input type="hidden" value="" id="prixDH" name="prixDH">
                                            <input type="hidden" value="" id="prixGH" name="prixGH">
                                            <input type="hidden" value="" id="nomverreDH" name="nomverreDH">
                                            <input type="hidden" value="" id="nomverreGH" name="nomverreGH">
                                            <input type="hidden" value="" id="teinteDH" name="teinteDH">
                                            <input type="hidden" value="" id="teinteGH" name="teinteGH">
                                            <input type="hidden" value="" id="traitementDH" name="traitementDH">
                                            <input type="hidden" value="" id="traitementGH" name="traitementGH">
                                            <input type="hidden" id="id_generation_verre" value="31"
                                                   name="id_generation_verre">
                                            <input type="hidden" id="id_indice_verre" value="1" name="id_indice_verre">
                                            <input type="hidden" id="type_commande" name="type_commande" value="1">
                                            <input type="hidden" id="prix_teledetourage" name="prix_teledetourage" value="0">
                                            <input type="hidden" id="format_teledetourage" name="format_teledetourage" value="">
                                            <input type="hidden" id="diametre_utile_right" name="diametre_utile_right" value="">
                                            <input type="hidden" id="diametre_utile_left" name="diametre_utile_left" value="">
                                        </div>
                                        <div id="casse" class="tab-pane fade">
                                            <h3>Casse atelier</h3>
                                            <p></p>
                                        </div>
                                        <div id="erreur" class="tab-pane fade">
                                            <h3>Erreur optique</h3>
                                            <p></p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <?php
                        if (!is_object($pair_order)) : ?>
                            <!-- <div class="row secondPairOffers">
                    <div class="col-sm-12 m-b-10">
                        <h4 class="page-title">Nos offres seconde paire</h4>
                    </div>
                </div>
-->
                            <div class="row secondPairOffers"></div>
                        <?php
                        endif; ?>


                        <?php
                        } ?>
                </form>
            </div>
        </div> <!-- container -->
        <div id="cylindre_negative" class="modal fade" tabindex="-1" role="dialog"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="cylindre_negative_form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Cylindre négatif</h4>
                        </div>

                        <div class="modal-body">
                            <p id="text_cylindre_negative">Les corrections saisies en cylindre négatif ont été transposées en cylindre positif.</p>
                        </div>

                        <div class="modal-footer">
                            <button id="cylindre_negative_ok" class="btn btn-warning waves-effect waves-light"
                                    data-dismiss="modal">Ok</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div id="tracer_in_modal" class="modal fade" tabindex="-1" role="dialog"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="tracer_modal_form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Tracez votre monture</h4>
                        </div>

                        <div class="modal-body">
                            <p id="tracer_in_body">Lancez le traçage de votre forme en appuyant sur le bouton de votre palpeur</p>
                        </div>

<!--                        <div class="modal-footer">-->
<!--                            <button id="cylindre_negative_ok" class="btn btn-warning waves-effect waves-light"-->
<!--                                    data-dismiss="modal">Ok</button>-->
<!--                        </div>-->
                    </form>
                </div>
                <div class="progress" id="progress-tracer">
                    <div id="progress-bar-tracer" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div id="axe_between_0_180" class="modal fade" tabindex="-1" role="dialog"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="axe_between_0_180_form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Axe de votre cylindre</h4>
                        </div>

                        <div class="modal-body">
                            <p id="text_axe_between_0_180">Merci de bien vouloir saisir un axe compris entre 0 et 180 degrés</p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-warning waves-effect waves-light"
                                    data-dismiss="modal">Ok</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div id="nothing_diameter" class="modal fade" tabindex="-1" role="dialog"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="nothing_diameter_form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Pas de diamètre</h4>
                        </div>

                        <div class="modal-body">
                            <p id="text_nothing_diameter">Il n'y pas de diamètre assez grand en fonction de la monture, de l'écart pupillaire et de la hauteur du montage que vous avez mis.</p>
                        </div>

                        <div class="modal-footer">
                            <button id="nothing_diameter_ok" class="btn btn-warning waves-effect waves-light"
                                    data-dismiss="modal">Ok</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

<!--        <div id="teledetourage_not_connected" class="modal fade" tabindex="-1" role="dialog"-->
<!--             aria-hidden="true" style="display: none;">-->
<!--            <div class="modal-dialog" style="width: 90%; max-width: 400px;">-->
<!--                <div class="modal-content">-->
<!---->
<!--                    <form id="teledetourage_not_connected_form">-->
<!---->
<!--                        <div class="modal-header">-->
<!--                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                            <h4 class="modal-title">Machine non connectée</h4>-->
<!--                        </div>-->
<!---->
<!--                        <div class="modal-body">-->
<!--                            <p id="text_teledetourage_not_connected">Votre machine n'est pas connectée, veuillez la connecter et appuyez sur le bouton <strong>"CONNECT".</strong></br>-->
<!--                                Si vous voulez passer une commande standard appuyez sur <strong>"RETOUR"</strong>.</p>-->
<!--                        </div>-->
<!--                        <div class="modal-footer">-->
<!--                            <button class="btn btn-danger waves-effect return_to_commande_standard" data-dismiss="modal">RETOUR</button>-->
<!--                            <button id="connect_machine_modal" class="btn btn-warning waves-effect waves-light connect_machine" data-dismiss="modal">CONNECT</button>-->
<!--                        </div>-->
<!--                    </form>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div> <!-- content -->

    <!-- Form wizard -->
    <script src="/static/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="/static/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/static/assets/mdb/js/popper.min.js"></script>
    <script type="text/javascript" src="/static/assets/js/fileSaver.min.js"></script>
<!--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>-->

<!--    <script type="text/javascript" src="/static/assets/mdb/js/mdb.min.js"></script>-->
    <!-- MDB - Only for documentation -->
    <!-- SignalR - Required -->
    <script src="/static/assets/js/jquery.signalR-2.4.1.min.js"></script>
    <script src="https://tracerserver.edieyes.net/signalrserver/signalr/hubs"></script>

    <script src="/static/assets/js/ediEyes.js"></script>
    <script type="text/javascript">

        $('#commande_ferme').click(function () {

            $('#produit').addClass('hide');
            $("#detailD").css("display", "none");
            $("#afficherV").css("display", "inline-block");
            $('#precalibrage').addClass('hide');
            $('#certif').addClass('hide');
            $('#div1_ref_client').removeClass('hide');
            $('#div2_type_commande').removeClass('focus_panel');
            $('#to_etape2').addClass('disabled');
            type = '1';
            $('#type_commande').val('1');
        })

        $('#casse_atelier').click(function () {

            $('#produit').addClass('hide');
            $("#detailD").css("display", "none");
            $("#afficherV").css("display", "inline-block");
            $('#precalibrage').addClass('hide');
            $('#certif').addClass('hide');
            $('#div1_ref_client').addClass('hide');
            $('#div2_type_commande').addClass('focus_panel');
            $('#to_etape2').addClass('disabled');
            type = '2';
            $('#type_commande').val('2');

        })

        <?php
        if($type_commande == '2') {
        ?>
        $(document).ready(function ($) {
            $('#produit').addClass('hide');
            $("#detailD").css("display", "none");
            $("#afficherV").css("display", "inline-block");
            $('#precalibrage').addClass('hide');
            $('#certif').addClass('hide');
            $('#div1_ref_client').addClass('hide');
            $('#div2_type_commande').addClass('focus_panel');
            $('#to_etape2').addClass('disabled');
            type = '2';
            $('#type_commande').val('2');
            //setTimeout(function(){
            var currentForm = $(this).closest('form');
            $('.next .btn').addClass('disabled');

            $.ajax({
                type: "POST",
                url: "/index/ECCreditCheck",
                success: function (data) {
                    console.log(data);
                    var spac = '';
                    data     = parseFloat(data.split(' ').join(spac), 10);
                    console.log(data);
                    credit = data;

                    if (data != "" && data == "not_logged") {
                        window.location.reload();
                    } else if (data <= 0) {
                        $('#commande_type').addClass('row_error');
                        $('.ancienne_commande_ref').hide();
                        //currentForm.find('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
                        $('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning')
                        $('#status_credit').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
                        $('.next .btn').addClass('disabled');
                    } else {
                        $('.ancienne_commande_ref').show();
                        $('#div1_ref_client').removeClass('hide');
                        //currentForm.find('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>'+data+' €</b>');
                        $('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger')
                        $('#status_credit').html('Votre crédit : <b>' + data + ' €</b>');
                        $('#commande_type').removeClass('row_error');
                    }

                },
                error: function () {
                    $('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
                    $("#loading-overlay,#loading").hide();
                    $('.next .btn').addClass('disabled');
                }
            });

            $('.ec_commande_status').fadeIn(60);
            //	},5000);

        });
        <?php
        }
        if($type_commande == '3') {
        ?>
        $(document).ready(function ($) {
            $('#produit').addClass('hide');
            $("#detailD").css("display", "none");
            $("#afficherV").css("display", "inline-block");
            $('#precalibrage').addClass('hide');
            $('#certif').addClass('hide');
            $('#div1_ref_client').addClass('hide');
            $('#div2_type_commande').addClass('focus_panel');
            $('#to_etape2').addClass('disabled');
            type = '3';
            $('#type_commande').val('3');

            var currentForm = $(this).closest('form');
            $('.next .btn').addClass('disabled');

            $.ajax({
                type: "POST",
                url: "/index/ECCreditCheck",
                success: function (data) {

                    var spac = '';
                    data     = parseFloat(data.split(' ').join(spac), 10);
                    credit   = data;

                    if (data != "" && data == "not_logged") {
                        window.location.reload();
                    } else if (data <= 0) {
                        $('#commande_type').addClass('row_error');
                        $('.ancienne_commande_ref').hide();
                        $('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
                        $('.next .btn').addClass('disabled');
                    } else {
                        $('.ancienne_commande_ref').show();
                        $('#div1_ref_client').removeClass('hide');
                        $('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>' + data + ' €</b>');
                        $('#commande_type').removeClass('row_error');
                    }

                },
                error: function () {
                    $('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
                    $("#loading-overlay,#loading").hide();
                    $('.next .btn').addClass('disabled');
                }
            });


            $('.ec_commande_status').fadeIn(60);

        });
        <?php
        }
        ?>

        $('#erreur_ophtalmologiste').click(function () {

            $('#produit').addClass('hide');
            $("#detailD").css("display", "none");
            $("#afficherV").css("display", "inline-block");
            $('#precalibrage').addClass('hide');
            $('#certif').addClass('hide');
            $('#div1_ref_client').addClass('hide');
            $('#div2_type_commande').addClass('focus_panel');
            $('#to_etape2').addClass('disabled');
            type = '3';
            $('#type_commande').val('3');
        })



        function getFormatTeledetouragePrice(format_teledetourage) {
            console.log(format_teledetourage)
            $.ajax({
                type: "POST",
                url: "/teledetourage/getFormatPrice",
                data: {"user_id" : $('#user_id').val(),
                    "formatTeledetourage" : format_teledetourage},
                dataType: "json",
                success: function (data) {
                    $('#prix_teledetourage').val(data)
                    $('#format_teledetourage').val(format_teledetourage)
                    calculPrice();
                    console.log(data);
                }
            });
        }

        function changeTypeMonture(typeMonture) {
            if (typeMonture == 'metal' || typeMonture == 'plastic') {
                $('#div_polishing').removeClass('hide');
                if ($('#edge_thickness').val() == 1.8) {
                    $('#edge_thickness').val('0.8');
                }
            }
            else {
                $('#div_polishing').addClass('hide');
                $("#polishing").prop("checked", false);
                if ($('#edge_thickness').val() == 0.8) {
                    $('#edge_thickness').val('1.8');
                }
            }

            let txtOmaImageIn = $('#txtOmaImageIn').val();

            if (typeMonture != 'drilled') {
                $('#addDrilled').addClass('hide');
                $('#add_drille').addClass('hide');
                if (txtOmaImageIn.lastIndexOf("SEGHT") != -1 && txtOmaImageIn.lastIndexOf("IPD") != -1 && txtOmaImageIn.lastIndexOf("DBL") != -1) {
                    $('#div_refraction').removeClass('hide');
                }
            }
            else {
                $('#addDrilled').removeClass('hide');
                $('#add_drille').removeClass('hide');

                if (txtOmaImageIn.lastIndexOf("DRILLE") == -1) {
                    $('#div_refraction').addClass('hide');
                    $('#produit').addClass('hide');
                }
            }

            if ($('#div_teledetourage').is(":hidden")) {
                $('#divDevices').show();
            }
            if ($("#ddlDevices").val() != null) {
                $('#div_teledetourage').removeClass('hide');
                backgroundEcartAndHauteurAll();
            }
            else {
                swalTeledetourage()
            }

            getFormatTeledetouragePrice(typeMonture);
        }

        $('#format_metal').click(function () {
            changeTypeMonture('metal')
        })

        $('#format_plastique').click(function () {
            changeTypeMonture('plastic')
        })

        $('#format_nylor').click(function () {
            changeTypeMonture('nylor')
            // if ($('#edge_thickness').val() == 0.8) {
            //     $('#edge_thickness').val('1.8');
            // }            // $('#btnLaunchTablette').addClass('hide');
            // $('#addDrilled').addClass('hide');
            // $('#add_drille').addClass('hide');
            // if ($('#div_teledetourage').is(":hidden")) {
            //     $('#divDevices').show()
            //     // Connect();
            // }
            // if ($("#ddlDevices").val() != null) {
            //     $('#div_teledetourage').removeClass('hide');
            //     backgroundEcartAndHauteurAll();
            // }
            // else {
            //     swalTeledetourage()
            //     // $('#teledetourage_not_connected').modal('show');
            // }
            // let txtOmaImageIn = $('#txtOmaImageIn').val();
            //
            // if (txtOmaImageIn.lastIndexOf("SEGHT") != -1 && txtOmaImageIn.lastIndexOf("IPD") != -1 && txtOmaImageIn.lastIndexOf("DBL") != -1) {
            //     $('#div_refraction').removeClass('hide');
            // }
            //
            // getFormatTeledetouragePrice('nylor');
        })

        $('#format_perce').click(function () {
            changeTypeMonture('drilled')

            // $("#polishing").prop("checked", false);
            // if ($('#edge_thickness').val() == 0.8) {
            //     $('#edge_thickness').val('1.8');
            // }
            // if ($('#div_teledetourage').is(":hidden")) {
            //     $('#divDevices').show()
            //     // Connect();
            // }
            // if ($("#ddlDevices").val() != null) {
            //     $('#div_teledetourage').removeClass('hide');
            //     // $('#btnLaunchTablette').removeClass('hide');
            //     $('#addDrilled').removeClass('hide');
            //     $('#add_drille').removeClass('hide');
            //     $('#div_polishing').addClass('hide');
            //     backgroundEcartAndHauteurAll();
            // }
            // else {
            //     swalTeledetourage()
            //     // $('#teledetourage_not_connected').modal('show');
            // }
            // let txtOmaImageIn = $('#txtOmaImageIn').val();
            // if (txtOmaImageIn.lastIndexOf("DRILLE") == -1) {
            //     $('#div_refraction').addClass('hide');
            //     $('#produit').addClass('hide');
            // }
            //
            // getFormatTeledetouragePrice('drilled');
        })

        $('#btn_add_info_sup').click(function () {
            $('#add_info_sup').modal('show');
        })

        $('.info_comp').on('input', function() {
            let number = this.value;
            console.log('#error_' + this.id);
            console.log(number);
            if ((isNaN(parseFloat(number)) || !isFinite(number)) && number != "") {
                $('#error_' + this.id).html('la valeur doit être un nombre');
                $("#submit_info_comp").prop("disabled", true);
                // $('#submit_info_comp').addClass('disabled');
            }
            else if (!isNaN(parseFloat(number)) && isFinite(number) && number >= 0 || number == ""){
                let str = this.id;
                let lastC = (str).substr(str.length-1);
                let nameD;
                let nameG;
                if (lastC == 'D') {
                    nameD = str;
                    nameG = str.substr(0, str.length-1) + "G";
                }
                else {
                    nameG = str;
                    nameD = str.substr(0, str.length-1) + "D";
                }
                let valueD = document.getElementById(nameD).value;
                let valueG = document.getElementById(nameG).value;
                $('#error_' + this.id).html('');
                if (number > 20) {
                    $('#error_' + this.id).html('la valeur doit être inférieur à 21');
                    $("#submit_info_comp").prop("disabled", true);
                }
                if (valueD != "" && valueG == "") {
                    $('#error_' + nameG).html('Vous devez remplir l\'oeil gauche');
                    $("#submit_info_comp").prop("disabled", true);
                }
                else if (valueD == "" && valueG != "") {
                    $('#error_' + nameD).html('Vous devez remplir l\'oeil droit');
                    $("#submit_info_comp").prop("disabled", true);
                }
                else {
                    if ($('#error_' + nameD).html() == 'Vous devez remplir l\'oeil droit') {
                        $('#error_' + nameD).html('');
                    }
                    if ($('#error_' + nameG).html() == 'Vous devez remplir l\'oeil gauche') {
                        $('#error_' + nameG).html('');
                    }
                    let text;
                    let errors = document.getElementsByClassName('error');
                    let disable = false;
                    $(errors).each(function( index ) {
                        text = $( this ).text();
                        if (text) {
                            disable = true
                        }
                    });
                    if (!disable) {
                        $("#submit_info_comp").prop("disabled", false);
                    }
                }
            }
            else {
                $('#error_' + this.id).html('la valeur doit être positive');
                $("#submit_info_comp").prop("disabled", true);
            }
        });

        $('#submit_info_comp').click(function() {
            let disable_table = true;

            $('#tab_ecart_pup_D').html($('#ecart_pup_D').val());
            $('#tab_ecart_pup_G').html($('#ecart_pup_G').val());
            if ($('#ecart_pup_D').val()) {
                disable_table = false;
                $("#tr_ecart_pup").show();
            }
            else {
                $("#tr_ecart_pup").hide();
            }

            $('#tab_angle_galbe_D').html($('#angle_galbe_D').val());
            $('#tab_angle_galbe_G').html($('#angle_galbe_G').val());
            if ($('#angle_galbe_D').val()) {
                disable_table = false;
                $("#tr_angle_galbe").show();
            }
            else {
                $("#tr_angle_galbe").hide();
            }

            $('#tab_distance_verre_oeil_D').html($('#distance_verre_oeil_D').val());
            $('#tab_distance_verre_oeil_G').html($('#distance_verre_oeil_G').val());
            if ($('#distance_verre_oeil_D').val()) {
                disable_table = false;
                $("#tr_distance_verre_oeil").show();
            }
            else {
                $("#tr_distance_verre_oeil").hide();
            }

            $('#tab_angle_pantoscopique_D').html($('#angle_pantoscopique_D').val());
            $('#tab_angle_pantoscopique_G').html($('#angle_pantoscopique_G').val());
            if ($('#angle_pantoscopique_D').val()) {
                disable_table = false;
                $("#tr_angle_pantoscopique").show();
            }
            else {
                $("#tr_angle_pantoscopique").hide();
            }

            $('#tab_hauteur_montage_D').html($('#hauteur_montage_D').val());
            $('#tab_hauteur_montage_G').html($('#hauteur_montage_G').val());
            if ($('#hauteur_montage_D').val()) {
                disable_table = false;
                $("#tr_hauteur_montage").show();
            }
            else {
                $("#tr_hauteur_montage").hide();
            }
            if (disable_table) {
                $("#tab_info_comp").hide();
                document.getElementById('btn_add_info_sup').innerHTML = "Insérer mes informations complémentaires facultatives ";
            }
            else {
                $("#tab_info_comp").show();
                document.getElementById('btn_add_info_sup').innerHTML = "Changer mes informations complémentaires facultatives ";
            }

            let table = document.getElementById("tab_info_comp");

            let bascule = 0;
            for (var i = 1, row; row = table.rows[i]; i++) {
                if ($(row).is(':visible')) {
                    if (bascule == 0) {
                        row.style.background = '#fff';
                        bascule = 1;
                    }
                    else {
                        row.style.background = '#f8bc0626'
                        bascule = 0;
                    }
                }


            }

        });

        function show_pic(img) {
            $("#big_img").show();
            $("#mini_calibres").hide();

            $("#back_calibre").show();
            $("#click_calibre").hide();

            $("#big_img").html("<img id='theImg' src='/static/img/calibre_B/" + img + ".png'/>");

            $('html, body').animate({
                scrollTop: $("#precalibrage").offset().top
            }, 2000);
        }

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

        var iledefrance               = '<?php echo $region; ?>';
        var tabLivIleDeFrance         = ["Mardi", "Mercredi", "Jeudi", "Vendredi", "Lundi", "Mardi", "Mardi"];
        var tabLivHorsIleDeFrance     = ["Mercredi", "Jeudi", "Vendredi", "Samedi", "Mardi", "Mardi", "Mardi"];
        var currentChoixMultiCommande = "";
        var tabCurrentGroupeDiametre  = [];
        var precalibrage              = "oui";
        var forceAddStep              = false;
        var forceSphStep              = false;

        $(document).ready(function () {

            if ($('.jsswitch').length > 0) {
                var elems = Array.prototype.slice.call(document.querySelectorAll('.jsswitch'));

                elems.forEach(function (html) {
                    var init = new Switchery(html, {
                        color: '#64bd63',
                        secondaryColor: '#fb2b54',
                        jackColor: '#f5f5f5',
                        jackSecondaryColor: '#f5f5f5'
                    });
                });
            }


            $('#back_calibre').on('click', function () {
                $("#big_img").hide();
                $("#mini_calibres").show();

                $("#back_calibre").hide();
                $("#click_calibre").show();
            });

            $('#lensFocalGroup').on('change', function () {
                if ($('#is_teledetourage').is(':checked') == false) {
                    $('#div_refraction').addClass('hide');
                }
                // $('#div_teledetourage').addClass('hide');
                $('#div1_format_type').addClass('hide');
                $('#progression_D').addClass('hide');
                $('#progression_G').addClass('hide');

                $('#precalibrage').addClass('hide');
                $('#certif').addClass('hide');

                $('#generation').val("").change();


                <?php
                if(is_object($pair_order)) {
                ?>
                if ($("#lensFocalGroup").val() == '4') {
                    <?php
                    if($pair_order->id_generation_verre == 33)
                    {
                    ?>
                    $('#sphereD').val(<?php echo floatval($pair_order_correction['verre']['correction_droit']['sphere'])
                                                 + floatval($pair_order_correction['verre']['correction_droit']['addition']);?>);
                    $('#sphereG').val(<?php echo floatval($pair_order_correction['verre']['correction_gauche']['sphere'])
                                                 + floatval($pair_order_correction['verre']['correction_gauche']['addition']);?>);
                    <?php
                    }
                    else
                    {?>
                    $('#sphereD').val(<?php echo $pair_order_correction['verre']['correction_droit']['sphere'];?>);
                    $('#sphereG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['sphere'];?>);
                    <?php if (isset($pair_order_correction['verre']['correction_droit']['addition']))
                    {
                    ?>
                    $('#additionD').val("+" + (<?php echo floatval($pair_order_correction['verre']['correction_droit']['addition']);?>).toFixed(2));
                    <?php
                    }?>
                    <?php if (isset($pair_order_correction['verre']['correction_gauche']['addition']))
                    {
                    ?>
                    $('#additionG').val("+" + (<?php echo floatval($pair_order_correction['verre']['correction_gauche']['addition']);?>).toFixed(2));
                    <?php
                    }?>
                    <?php
                    }?>
                } else {
                    $('#sphereD').val(<?php echo $pair_order_correction['verre']['correction_droit']['sphere'];?>);
                    $('#sphereG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['sphere'];?>);

                }

                $('#cylindreD').val(<?php echo $pair_order_correction['verre']['correction_droit']['cylindre'];?>);
                $('#cylindreG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['cylindre'];?>);

                $('#axeD').val(<?php echo $pair_order_correction['verre']['correction_droit']['axe'];?>);
                $('#axeG').val(<?php echo $pair_order_correction['verre']['correction_gauche']['axe'];?>);

                $('#sphereD').prop('readOnly', true);
                $('#sphereG').prop('readOnly', true);
                $('#cylindreD').prop('readOnly', true);
                $('#cylindreG').prop('readOnly', true);
                $('#axeD').prop('readOnly', true);
                $('#axeG').prop('readOnly', true);


                //alert($("#lensFocalGroup").val());
                if ($("#lensFocalGroup").val() == '4') {
                    $('#additionD').prop('readOnly', false);
                    $('#additionG').prop('readOnly', false);
                    // $('#additionD').val("+0.75");
                    // $('#additionG').val("+0.75");
                } else {


                    setTimeout(function () {

                        <?php
                        if(isset($pair_order_correction['verre']['correction_droit']['addition']))
                        {
                        ?>

                        $('#additionD').val(<?php
                            if (floatval($pair_order_correction['verre']['correction_droit']['addition']) >= 0) {
                                echo "+" . $pair_order_correction['verre']['correction_droit']['addition'];
                            } else {
                                echo $pair_order_correction['verre']['correction_droit']['addition'];
                            }?>);

                        <?php
                        }
                        if(isset($pair_order_correction['verre']['correction_gauche']['addition']))
                        {
                        ?>
                        $('#additionG').val(<?php
                            if (floatval($pair_order_correction['verre']['correction_gauche']['addition']) >= 0) {
                                echo "+" . $pair_order_correction['verre']['correction_gauche']['addition'];
                            } else {
                                echo $pair_order_correction['verre']['correction_gauche']['addition'];
                            }?>);

                        <?php
                        }
                        ?>
                    }, 1000);
                    $('#additionD').prop('readOnly', true);
                    $('#additionG').prop('readOnly', true);


                }

                <?php
                }
                else
                {
                ?>
                $('#sphereD').prop('readOnly', false);
                $('#sphereG').prop('readOnly', false);
                $('#cylindreD').prop('readOnly', false);
                $('#cylindreG').prop('readOnly', false);
                $('#axeD').prop('readOnly', false);
                $('#axeG').prop('readOnly', false);

                $('#sphereD').val("+0.00");
                $('#cylindreD').val("+0.00");
                $('#axeD').val("0");
                $('#additionD').val("+0.00");
                $('#sphereG').val("+0.00");
                $('#cylindreG').val("+0.00");
                $('#axeG').val("0");
                $('#additionG').val("+0.00");

                var droite = $('#droit').is(':checked');
                var gauche = $('#gauche').is(':checked');


                if (droite) {
                    $(".display_droit").css("display", "block");
                    $("#sphereD").prop('disabled', false);
                    $("#cylindreD").prop('disabled', false);
                    $("#axeD").prop('disabled', false);
                    $("#additionD").prop('disabled', false);

                    $("#sphereD").val('+0.00');
                    $("#cylindreD").val('+0.00');
                    $("#axeD").val('0');
                    $("#additionD").val('+0.75');

                    $("#VersDroit").css("display", "block");
                } else {
                    $(".display_droit").css("display", "none");

                    $("#sphereD").val('');
                    $("#cylindreD").val('');
                    $("#axeD").val('');
                    $("#additionD").val('');

                    $("#sphereD").prop('disabled', true);
                    $("#cylindreD").prop('disabled', true);
                    $("#axeD").prop('disabled', true);
                    $("#additionD").prop('disabled', true);

                    $("#VersDroit").css("display", "none");
                }

                if (gauche) {
                    $(".display_gauche").css("display", "block");
                    $("#sphereG").prop('disabled', false);
                    $("#cylindreG").prop('disabled', false);
                    $("#axeG").prop('disabled', false);
                    $("#additionG").prop('disabled', false);

                    $("#sphereG").val('+0.00');
                    $("#cylindreG").val('+0.00');
                    $("#axeG").val('0');
                    $("#additionG").val('+0.75');

                    $("#VersGauche").css("display", "block");
                } else {

                    $("#sphereG").val('');
                    $("#cylindreG").val('');
                    $("#axeG").val('');
                    $("#additionG").val('');

                    $("#sphereG").prop('disabled', true);
                    $("#cylindreG").prop('disabled', true);
                    $("#axeG").prop('disabled', true);
                    $("#additionG").prop('disabled', true);

                    $("#VersGauche").css("display", "none");
                }
                <?php
                }
                ?>

                var lensFocalGroup      = $(this).val();
                var id_generation_verre = Number(lensFocalGroup) + 30;
                $("#id_generation_verre").val(id_generation_verre);

                if (lensFocalGroup != "") {
                    if (this.value == '4') {
                        $(".addition").html("<b>Dégréssion</b>");
                    } else {
                        $(".addition").html("<b>Addition</b>");
                    }

                    console.log($('#indices').val());
                    if (this.value == '3' && $('#indices').val() != "mineral") {
                        $("#generation_progressif").css("display", "block");
                        $('#lensFocalGroup_panel').removeClass('focus_panel')
                        $('#generation_panel').addClass('focus_panel');
                        $('#generation').focus();

                        if ($('#progressionD').val() == '') {
                            $("#detailD").css("display", "none");
                        } else {
                            $("#detailD").css("display", "block");
                        }
                        if ($('#progressionG').val() == '') {
                            $("#detailG").css("display", "none");
                        } else {
                            $("#detailG").css("display", "block");
                        }
                        $('#additionD').val("+0.75");
                        $('#additionG').val("+0.75");
                    } else {
                        $("#generation_progressif").css("display", "none");
                        $('#lensFocalGroup_panel').removeClass('focus_panel')
                        $('#refraction_panel').addClass('focus_panel');
                        $('#sphereD').focus();

                        $("#detailD").css("display", "block");
                        $("#detailG").css("display", "block");
                    }

                    if (this.value == '' || this.value == '1' || this.value == '6') {
                        $("#additionD").css("display", "none");
                        $("#additionG").css("display", "none");
                        $(".addition").css("display", "none");

                    } else {
                        $("#additionD").css("display", "block");
                        $("#additionG").css("display", "block");
                        $(".addition").css("display", "block");
                    }

                    if (lensFocalGroup != "3" || $('#indices').val() == "mineral") {
                        if ($('#is_teledetourage').is(':checked') == false) {
                            $('#div_refraction').removeClass('hide')
                        }
                        else {
                            // $('#div_teledetourage').removeClass('hide');
                            $('#div1_format_type').removeClass('hide');

                            // Connect();
                        }
                        $('#progression_D').addClass('hide')
                        $('#progression_G').addClass('hide')
                    } else {
                        $("#generation_progressif").css("display", "block");
                        $('#generation_progressif').removeClass('hide')
                        $('#progression_D').removeClass('hide')
                        $('#progression_G').removeClass('hide')
                    }

                }

                $('#produit').addClass('hide');
                $("#afficherV").css("display", "block");
            });

            $('input[name=additionD]').change(function () {
                var indiceId       = $('#indices').val();
                var generation     = $('#generation').val();
                var lensFocalGroup = $('#lensFocalGroup').val();
                var sphereD        = $('#sphereD').val();
                var cylindreD      = $('#cylindreD').val();
                var axeD           = $('#axeD').val();
                var additionD      = $(this).val();
                var sphereG        = $('#sphereG').val();
                var cylindreG      = $('#cylindreG').val();
                var axeG           = $('#axeG').val();
                var additionG      = $('#additionG').val();

                var stockD = $('input[name="dispoD"]:checked').val()
                var stockG = $('input[name="dispoG"]:checked').val()


                $("#detailD").css("display", "none");
                $("#afficherV").css("display", "inline-block");

                if (additionD == '') {
                    additionD = '-';
                    $("#additionD").val("+0.75");
                } else {
                    if (additionD.indexOf(",") >= 0) {
                        additionD = additionD.replace(',', '.');
                        additionD = roundToNearest(additionD, 0.25);
                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>
                        $("#additionD").val(additionD);
                    }

                    if (additionD.indexOf(".") < 0) {

                        additionD = additionD + ".00";
                        //alert(sphereD);
                        $("#additionD").val(additionD);
                    }

                    if (additionD.indexOf("+") >= 0) {
                        additionD = additionD.replace('+', '');
                        n_sphereD = roundToNearest(additionD, 0.25);

                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>

                        n_sphereD = n_sphereD.toString();
                        if (n_sphereD.indexOf(".") < 0) {
                            n_sphereD = n_sphereD + ".00";
                        }
                        var new_sphere = "+" + n_sphereD;

                        $("#additionD").val(new_sphere);
                    } else if (additionD.indexOf("-") >= 0) {
                        n_sphereD = roundToNearest(additionD, 0.25);

                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>

                        n_sphereD = n_sphereD.toString();

                        if (n_sphereD.indexOf(".") < 0) {
                            n_sphereD = n_sphereD + ".00";
                        }
                        $("#additionD").val(n_sphereD);
                    } else {
                        n_sphereD = roundToNearest(additionD, 0.25);

                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>

                        n_sphereD = n_sphereD.toString();

                        if (n_sphereD.indexOf(".") < 0) {
                            n_sphereD = n_sphereD + ".00";
                        }
                        var new_sphere = "+" + n_sphereD;


                        $("#additionD").val(new_sphere);
                        additionD = $('#additionD').val();
                    }
                }

                <?php
                if(is_object($pair_order)) {
                if($pair_order->id_generation_verre == '34')
                {
                ?>
                if (cylindreD.indexOf(",") >= 0) {
                    cylindreD = cylindreD.replace(',', '.');
                }
                if (cylindreD.indexOf("+") >= 0) {
                    cylindreD = cylindreD.replace('+', '');
                }
                new_sphereD = (Number(additionD) + Number(cylindreD)).toFixed(2);
                $("#sphereD").val(new_sphereD);
                <?php
                }
                }
                ?>


                if ($("#droit").prop('checked') == true && $("#gauche").prop('checked') == true && additionG == "+0.75") {
                    $('#additionG').val($(this).val())
                }


            });

            $('input[name=additionG]').change(function () {
                var indiceId       = $('#indices').val();
                var generation     = $('#generation').val();
                var lensFocalGroup = $('#lensFocalGroup').val();
                var sphereD        = $('#sphereD').val();
                var cylindreD      = $('#cylindreD').val();
                var axeD           = $('#axeD').val();
                var additionD      = $('#additionD').val();
                var sphereG        = $('#sphereG').val();
                var cylindreG      = $('#cylindreG').val();
                var axeG           = $('#axeG').val();
                var additionG      = $(this).val();

                var stockD = $('input[name="dispoD"]:checked').val()
                var stockG = $('input[name="dispoG"]:checked').val()

                $("#detailG").css("display", "none");
                $("#afficherV").css("display", "inline-block");

                if (additionG == '') {
                    additionG = '-';
                    $("#additionG").val("+0.75");
                } else {
                    if (additionG.indexOf(",") >= 0) {
                        additionG = additionG.replace(',', '.');
                        additionG = roundToNearest(additionG, 0.25);
                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>
                        $("#additionG").val(additionG);
                    }

                    if (additionG.indexOf(".") < 0) {

                        additionG = additionG + ".00";
                        //alert(sphereD);
                        $("#additionG").val(additionG);
                    }

                    if (additionG.indexOf("+") >= 0) {
                        additionG = additionG.replace('+', '');
                        n_sphereD = roundToNearest(additionG, 0.25);
                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>
                        n_sphereD = n_sphereD.toString();
                        if (n_sphereD.indexOf(".") < 0) {
                            n_sphereD = n_sphereD + ".00";
                        }
                        var new_sphere = "+" + n_sphereD;

                        $("#additionG").val(new_sphere);
                    } else if (additionG.indexOf("-") >= 0) {
                        n_sphereD = roundToNearest(additionG, 0.25);
                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>
                        n_sphereD = n_sphereD.toString();

                        if (n_sphereD.indexOf(".") < 0) {
                            n_sphereD = n_sphereD + ".00";
                        }
                        $("#additionG").val(n_sphereD);
                    } else {
                        n_sphereD = roundToNearest(additionG, 0.25);
                        <?php
                        if(is_object($pair_order)) {
                        ?>
                        if (lensFocalGroup == "4") {
                            if (n_sphereD > 2) {
                                n_sphereD = 2;
                            }

                            if (n_sphereD < 0.75) {
                                n_sphereD = 0.75;
                            }
                        }
                        <?php } ?>
                        n_sphereD = n_sphereD.toString();

                        if (n_sphereD.indexOf(".") < 0) {
                            n_sphereD = n_sphereD + ".00";
                        }
                        var new_sphere = "+" + n_sphereD;

                        $("#additionG").val(new_sphere);
                        additionG = $('#additionG').val();
                    }
                }

                <?php
                if(is_object($pair_order)) {
                if($pair_order->id_generation_verre == '34')
                {
                ?>
                if (cylindreG.indexOf(",") >= 0) {
                    cylindreG = cylindreG.replace(',', '.');
                }
                if (cylindreG.indexOf("+") >= 0) {
                    cylindreG = cylindreG.replace('+', '');
                }
                new_sphereG = (Number(additionG) + Number(cylindreG)).toFixed(2);
                $("#sphereG").val(new_sphereG);
                <?php
                }
                }
                ?>

            });


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
                errorPlacement: function (error, element) {
                    error.appendTo(element.closest('.form-group').find('.validator'));
                }
            });

            var $stockvalidator = $("#stockForm").validate({
                errorPlacement: function (error, element) {
                    error.appendTo(element.closest('.form-group').find('.validator'));
                }
            });

            validFields();

            <?php if(!is_object($pair_order)) : ?>
            $('.next .btn').addClass('disabled');
            <?php endif; ?>
            $("#to_etape2").click(function () {

                validFields();

                var type  = $('#type_commande').val();
                var prixD = parseFloat($('#prixD').val().replace('€', ''));
                var prixG = parseFloat($('#prixG').val().replace('€', ''));


                var prixDHF = $('#prixDH').val();
                var prixGHF = $('#prixGH').val();

                var g         = 0;
                var gauche    = $('#gauche').is(':checked');
                var diametreG = $('#diametreG').val();
                var dCheck    = $('#droit').is(':checked');
                var diametreD = $('#diametreD').val();
                var verreG = $('#type_de_verreG').val();
                var verreD = $('#type_de_verreD').val();

                var nameD = $("#type_de_verreD option:selected").html();
                var nameG = $("#type_de_verreG option:selected").html();

                var traitementD = $("#traitementD option:selected").text();
                var traitementG = $("#traitementG option:selected").text();

                var teinteD = $("#teinteD option:selected").text();
                var teinteG = $("#teinteG option:selected").text();

                var PrismeSphereD = $('#PrismeSphereD').val();
                var PrismeCylindreD = $('#PrismeCylindreD').val();

                var PrismeSphereG = $('#PrismeSphereG').val();
                var PrismeCylindreG = $('#PrismeCylindreG').val();
                console.log(PrismeCylindreD);
                console.log(PrismeSphereD);
                var isPrisme = true;
                var textPrisme = "";
                var prismeId;
                if (PrismeSphereG && !PrismeCylindreG) {
                    textPrisme = "Veuillez remplir la base du prisme pour le verre gauche";
                    isPrisme = false;
                    prismeId = "#PrismeCylindreG";
                }
                else if (PrismeCylindreG && !PrismeSphereG) {
                    textPrisme = "Veuillez remplir la valeur de la dioptrie du prisme pour le " +
                        "verre gauche";
                    isPrisme = false;
                    prismeId = "#PrismeSphereG";
                }
                else if (PrismeSphereD && !PrismeCylindreD) {
                    textPrisme = "Veuillez remplir la base du prisme pour le verre droit";
                    isPrisme = false;
                    prismeId = "#PrismeCylindreD";

                }
                else if (PrismeCylindreD && !PrismeSphereD) {
                    textPrisme = "Veuillez remplir la valeur de la dioptrie du prisme pour le verre droit";
                    isPrisme = false;
                    prismeId = "#PrismeSphereD";
                }
                if (!isPrisme) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: textPrisme,
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });
                    $('html,body').animate({scrollTop: $("#traitementD").offset().top}, 'slow');
                    var flashInterval = setInterval(function () {
                        $(prismeId).toggleClass('border-red');
                    }, 1000);
                    $(prismeId).click(function() {
                        clearInterval(flashInterval);
                        $(prismeId).removeClass('border-red');
                    });
                }

                // if (gauche && diametreG == "") {
                //     g = 1;
                //     swal({
                //         title: "Erreur",
                //         text: "Veuillez spécifier un diamètre pour le verre gauche",
                //         type: "warning",
                //         showCancelButton: false,
                //         confirmButtonText: "OK",
                //         closeOnConfirm: true
                //     });
                //
                // }
                /*
        if(nameD == nameG && traitementD == traitementG && teinteD == teinteG && prixDHF != prixGHF && type == 1)
        {
        	g = 1;
			swal({
				title: "Erreur",
				text: "Merci de bien vouloir ressaisir vos corrections",
				type: "warning",
				showCancelButton: false,
				confirmButtonText: "OK",
				closeOnConfirm: true
			});
        }

        if(((dCheck && (prixDHF == "" || prixDHF == "0")) || (gauche && (prixGHF == "" || prixGHF == "0")))  && type == 1)
        {
        	g = 1;
			swal({
				title: "Erreur",
				text: "Merci de bien vouloir ressaisir vos corrections",
				type: "warning",
				showCancelButton: false,
				confirmButtonText: "OK",
				closeOnConfirm: true
			});
        }
    */
                let nameVerreD = $('#type_de_verreD').find(":selected").text();
                let nameVerreG = $('#type_de_verreG').find(":selected").text();
                console.log("$nameVerreD" + nameVerreD);
                console.log("$nameVerreG" + nameVerreG);
                let valueD =  document.getElementById('type_de_verreD').options[document.getElementById('type_de_verreD').selectedIndex].value
                let valueG =  document.getElementById('type_de_verreG').options[document.getElementById('type_de_verreG').selectedIndex].value
                if (nameVerreD.indexOf("Panier A") !== -1 && nameVerreD.indexOf("Stock") !== -1
                    && (nameVerreG.indexOf("Panier A") === -1 || nameVerreG.indexOf("Stock") === -1)
                    && valueG != ''
                    ||
                    (nameVerreG.indexOf("Panier A") !== -1 && nameVerreG.indexOf("Stock") !== -1
                        && (nameVerreD.indexOf("Panier A") === -1 || nameVerreD.indexOf("Stock") === -1)
                        && valueD != ''
                    )
                ) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Un panier A de stock peut uniquement être associé à un autre panier A de stock. Merci de bien vouloir corriger votre commande",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });
                }

                if (gauche && verreG == "") {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Verre gauche non disponible dans cette dioptrie",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });

                }

                if (gauche && diametreG == "") {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez spécifier un diamètre pour le verre gauche",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });

                }

                if (gauche && diametreG == "precalibrage" && ($("#cotea").val() == '' || $("#coteb").val() == '' || $("#cotec").val() == '' || $("#ecart_puppillaire_gauche").val() == '' || $("#hauteur_gauche").val() == '')) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez compléter toutes les informations de précalibrage pour le verre gauche",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });
                }

                if (dCheck && diametreD == "precalibrage" && ($("#cotea").val() == '' || $("#coteb").val() == '' || $("#cotec").val() == '' || $("#ecart_puppillaire_droit").val() == '' || $("#hauteur").val() == '')) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez compléter toutes les informations de précalibrage pour le verre droit",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });
                }

                if ($('#calibre_selected').val() == "" && (diametreD == "precalibrage" || diametreG == "precalibrage")) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez choisir une forme pour le précalibrage",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });

                }

                if (dCheck && diametreD == "") {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez spécifier un diamètre pour le verre droit",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });

                }

                if (gauche && traitementG == "" && nameG.indexOf("Panier") == 0 && nameG.indexOf("Stock") == 0) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez spécifier un traitement pour le verre gauche",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });

                }

                if (dCheck && traitementD == "" && nameD.indexOf("Panier") == 0 && nameD.indexOf("Stock") == 0) {
                    g = 1;
                    swal({
                        title: "Erreur",
                        text: "Veuillez spécifier un traitement pour le verre droit",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonText: "OK",
                        closeOnConfirm: true
                    });

                }

                console.log("G = " + g);
                if (g == 1) {

                }

                if (g == 0) {
                    if (isNaN(prixD) && isNaN(prixG)) {
                        tprix = 0
                    } else {
                        if (isNaN(prixD)) {
                            tprix = prixG
                        } else if (isNaN(prixG)) {
                            tprix = prixD
                        } else {
                            tprix = prixD + prixG;
                        }

                    }

                    $('#etape1').removeClass('active');
                    $('#titre_etape1').removeClass('active');
                    $('#etape1').removeClass('in');
                    $('#to_etape1').removeClass('disabled');

                    $('#etape2').addClass('active');
                    $('#titre_etape2').addClass('active');
                    $('#etape2').addClass('in');

                    $('.pager .previous').removeClass('disabled');


                    tcredit = parseFloat(credit);
                    console.log("type: " + type);
                    console.log("tprix: " + tprix);
                    console.log("tcredit: " + tcredit);

                    if ((type == '1' || (type != '1' && tprix <= tcredit) || force_to_ferme == '1') && g == 0) {
                        //alert("etape2 - type:"+type);
                        var $valid = $("#commandeForm").valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }

                        var formData = $('#commandeForm').serialize();
                        console.log(formData);
                        console.log("Here2");

                        /*	if(tprix <= tcredit)
			{
				type = '2';
				$('#type_commande').val('2');
			}
			*/
                        // console.log(formData);
                        $.ajax({
                            type: "POST",
                            url: "/index/setOrderRecapNew",
                            data: '<?php if (is_object($pair_order)) {
                                echo 'pair_order=' . $pair_order->id_commande . '&';
                            } ?>' + formData,
                            dataType: "html",
                            beforeSend: function () {
                                $("#recap_commande").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
                            },
                            success: function (data) {
                                //console.log(data);
                                if (data == "not_logged")
                                    window.location.reload();
                                else if (data == "error") {
                                    alert('une erreur est survenue, veuillez réessayer, merci !');
                                } else {
                                    $("#recap_commande").empty().append(data);

                                    $("#wiz .finish").show();
                                    $('#wiz .next .btn').hide();
                                    $("#recap_commande").empty().append(data);

                                    if ($('.js-switch').length > 0) {
                                        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                        elems.forEach(function (html) {
                                            var init = new Switchery(html, {
                                                color: '#64bd63',
                                                secondaryColor: '#fb2b54',
                                                jackColor: '#f5f5f5',
                                                jackSecondaryColor: '#f5f5f5'
                                            });
                                        });

                                        $('.js-switch').each(function () {

                                            var row      = $(this).closest('tr');
                                            var switches = $('.js-switch.express:checked').length;

                                            if ($(this).is(':checked')) {
                                                row.find('td.expressPrice').text('25 €');
                                                row.find('td.expressQty').text('1');
                                            } else {
                                                row.find('td.expressPrice').text('-');
                                                row.find('td.expressQty').text('0');
                                            }

                                            $('.calculatedTotal').each(function () {
                                                $(this).text(parseFloat($(this).data('base')) + (switches * 25));
                                            });

                                        });


                                        $('.js-switch').on('change', function () {

                                            var row      = $(this).closest('tr');
                                            var switches = $('.js-switch.express:checked').length;


                                            if ($(this).attr('id') === 'finish_pair') {
                                                if ($(this).is(':checked')) {
                                                    $('.finish').find('.btn').text('Valider ma ' +
                                                        'première commande');
                                                } else {
                                                    $('.finish').find('.btn').text('Valider la commande');
                                                }
                                            } else {
                                                if ($(this).is(':checked')) {
                                                    row.find('td.expressPrice').text('25 €');
                                                    row.find('td.expressQty').text('1');
                                                } else {
                                                    row.find('td.expressPrice').text('-');
                                                    row.find('td.expressQty').text('0');
                                                }

                                                $('.calculatedTotal').each(function () {
                                                    $(this).text(parseFloat($(this).data('base')) + (switches * 25));
                                                });
                                            }

                                        });

                                    }
                                }
                            },
                            error: function () {
                                $("#recap_commande").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
                            }
                        });
                    } else {
                        console.log("etape2 - type:" + type);
                        swal({
                                title: "Crédit insuffisant",
                                text: "Votre crédit disponible est insuffisant pour couvrir le montant des verres en commande. Passer la commande en commande ferme ?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Oui",
                                cancelButtonText: "Non",
                                closeOnConfirm: true,
                                closeOnCancel: true
                            },
                            function (isConfirm) {
                                if (isConfirm) {

                                    type = '1';
                                    $('#type_commande').val('1');
                                    force_to_ferme = '1';

                                    /*$('#etape2').removeClass('active');
				  $('.display_stock #titre_etape2').removeClass('active');
				  $('#etape2').removeClass('in');

				  $('#etape3').removeClass('active');
				  $('.display_stock #titre_etape3').removeClass('active');
				  $('#etape3').removeClass('in');

				  $('#etape1').addClass('active');
				  $('.display_stock #titre_etape1').addClass('active');
				  $('#etape1').addClass('in');

				  $('#li_casse_atelier').removeClass('active');
				  $('#li_commande_ferme').addClass('active');

				  $(".ec_commande_status").css("display", "none");
				  $(".ancienne_commande_ref").css("display", "none");
				  */
                                    var $valid = $("#commandeForm").valid();
                                    if (!$valid) {
                                        $validator.focusInvalid();
                                        return false;
                                    }

                                    var formData = $('#commandeForm').serialize();
                                    console.log(formData);
                                    console.log("Here1");

                                    $.ajax({
                                        type: "POST",
                                        url: "/index/setOrderRecapNew",
                                        data: '<?php if (is_object($pair_order)) {
                                            echo 'pair_order=' . $pair_order->id_commande . '&';
                                        } ?>' + formData,
                                        dataType: "html",
                                        beforeSend: function () {
                                            $("#recap_commande").empty().append('<div style="height:400px"><div style="width:150px;margin-left:auto;margin-right:auto;padding-top:10%;">Veuillez patienter</div></div>');
                                        },
                                        success: function (data) {
                                            //console.log(data);
                                            if (data == "not_logged")
                                                window.location.reload();
                                            else if (data == "error") {
                                                alert('une erreur est survenue, veuillez réessayer, merci !');
                                            } else {
                                                $("#recap_commande").empty().append(data);

                                                $("#wiz .finish").show();
                                                $('#wiz .next .btn').hide();
                                                $("#recap_commande").empty().append(data);

                                                if ($('.js-switch').length > 0) {
                                                    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

                                                    elems.forEach(function (html) {
                                                        var init = new Switchery(html, {
                                                            color: '#64bd63',
                                                            secondaryColor: '#fb2b54',
                                                            jackColor: '#f5f5f5',
                                                            jackSecondaryColor: '#f5f5f5'
                                                        });
                                                    });

                                                    $('.js-switch').each(function () {

                                                        var row      = $(this).closest('tr');
                                                        var switches = $('.js-switch.express:checked').length;

                                                        if ($(this).is(':checked')) {
                                                            row.find('td.expressPrice').text('25 €');
                                                            row.find('td.expressQty').text('1');
                                                        } else {
                                                            row.find('td.expressPrice').text('-');
                                                            row.find('td.expressQty').text('0');
                                                        }

                                                        $('.calculatedTotal').each(function () {
                                                            $(this).text(parseFloat($(this).data('base')) + (switches * 25));
                                                        });

                                                    });


                                                    $('.js-switch').on('change', function () {

                                                        var row      = $(this).closest('tr');
                                                        var switches = $('.js-switch.express:checked').length;


                                                        if ($(this).attr('id') === 'finish_pair') {
                                                            if ($(this).is(':checked')) {
                                                                $('.finish').find('.btn').text
                                                                ('Valider ma première ' +
                                                                    'commandesssss');
                                                            } else {
                                                                $('.finish').find('.btn').text('Valider la commande');
                                                            }
                                                        } else {
                                                            if ($(this).is(':checked')) {
                                                                row.find('td.expressPrice').text('25 €');
                                                                row.find('td.expressQty').text('1');
                                                            } else {
                                                                row.find('td.expressPrice').text('-');
                                                                row.find('td.expressQty').text('0');
                                                            }

                                                            $('.calculatedTotal').each(function () {
                                                                $(this).text(parseFloat($(this).data('base')) + (switches * 25));
                                                            });
                                                        }

                                                    });

                                                }
                                            }
                                        },
                                        error: function () {
                                            $("#recap_commande").empty().append('<div style="height:400px"><div style="width:550px;margin-left:auto;margin-right:auto;padding-top:10%;color:red;font-size:18px">Une erreur s\'est produite, veuillez recommencer. Si le problème persiste, envoyez un mail à </div></div>');
                                        }
                                    });

                                } else {
                                    $('#etape2').removeClass('active');
                                    $('.display_stock #titre_etape2').removeClass('active');
                                    $('#etape2').removeClass('in');

                                    $('#etape3').removeClass('active');
                                    $('.display_stock #titre_etape3').removeClass('active');
                                    $('#etape3').removeClass('in');

                                    $('#etape1').addClass('active');
                                    $('.display_stock #titre_etape1').addClass('active');
                                    $('#etape1').addClass('in');
                                }
                            });
                    }
                }
            });
            $('.finish').on('click', function () {

                orderOk = false;

                //alert("type_commande_verre:"+type_commande_verre);

                var date = new Date();
                var pair = false;

                if ($('#finish_pair').is(':checked') && type_commande_verre == 1) {
                    pair = true;
                }

                var jourLivraison = iledefrance == '1' ? tabLivIleDeFrance[date.getDay()] :
                    tabLivHorsIleDeFrance[date.getDay()];

                var nom_verreD = $("#type_de_verreD option:selected").html();
                var nom_verreG = $("#type_de_verreG option:selected").html();

                if (nom_verreD.indexOf(" - Stock déporté") >= 0 || nom_verreG.indexOf(" - Stock déporté") >= 0) {
                    swal({
                        title: "Livraison",
                        text: "Livraison " + jourLivraison + ", valider ? ( hors jours feriés )",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Oui",
                        cancelButtonText: "Non",
                        closeOnConfirm: false,
                        closeOnCancel: true
                    }, function (isConfirm) {
                        if (isConfirm) {
                            orderOk = true;
                            placeOrder();
                        }
                    });

                } else {
                    orderOk = true;
                    placeOrder();
                }

                function placeOrder() {
                    var is_express      = 0;
                    var is_express_pair = 0;

                    var commentaire = $('#commentaire').val();

                    //alert(commentaire);

                    if (type_commande_verre == 1 && $('#express').is(':checked')) {
                        is_express = 1;
                    }

                    if (type_commande_verre == 1 && $('#express_pair').is(':checked')) {
                        is_express_pair = 1;
                    }

                    if ($('#finish_pair').is(':checked')) {
                        console.log('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
                        var next = false;

                        swal({
                            title: "Première paire",
                            text: "Vous venez de passer la commande de la première paire, vous devez impérativement terminer la commande de la deuxième paire afin de valider les deux commandes.",
                            type: "success",
                            confirmButtonClass: 'btn-warning',
                            confirmButtonText: "Ok",
                            closeOnConfirm: false,
                            showCancelButton: true,
                            cancelButtonText: 'Annuler'
                        }, function () {

                            $.ajax({
                                type: "POST",
                                data: {
                                    express: is_express,
                                    express_pair: is_express_pair,
                                    pair: pair,
                                    commentaire: commentaire
                                },
                                dataType: 'json',
                                url: "/index/addOrder",
                                beforeSend: function () {

                                },
                                success: function (data) {
                                    if (data.status != 'ok' && data.status != 'error') {
                                        window.location.reload();
                                    } else if (data.status == 'error') {
                                        swal({
                                            title: "Une erreur est survenue",
                                            text: "Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte. euillez la renouveler où nous contacter si le problème persiste. Merci.",
                                            type: "error",
                                            showCancelButton: true,
                                            confirmButtonClass: 'btn-danger waves-effect waves-light',
                                            confirmButtonText: 'Fermer'
                                        });
                                    } else {


                                        if (data.pair == true && data.order_id > 0) {
                                            //console.log('..<?php //echo $_SERVER['REQUEST_URI']; ?>////' + data.order_id)
                                            window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>/' + data.order_id;
                                        } else {
                                            window.location.reload();
                                        }

                                    }
                                },
                                error: function () {
                                    $("#loading-overlay,#loading").hide();
                                }
                            });

                            $(this).parent().fadeOut();

                        });
                    } else {
                        console.log('BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB');

                        $.ajax({
                            type: "POST",
                            data: {
                                express: is_express,
                                express_pair: is_express_pair,
                                commentaire: commentaire

                            },
                            dataType: 'json',
                            url: "/index/addOrder",
                            beforeSend: function () {

                            },
                            success: function (data) {
                                if (data.status != 'ok' && data.status != 'error') {
                                    window.location.reload();
                                } else if (data.status == 'error') {
                                    swal({
                                        title: "Une erreur est survenue",
                                        text: "Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte. veuillez la renouveler où nous contacter si le problème persiste. Merci.",
                                        type: "error",
                                        showCancelButton: true,
                                        confirmButtonClass: 'btn-danger waves-effect waves-light',
                                        confirmButtonText: 'Fermer'
                                    });
                                } else {

                                    if (data.pair == true && data.order_id > 0) {
                                        window.location.href = '<?php echo 'http://' . $_SERVER['HTTP_HOST']
                                                                           . $_SERVER['REQUEST_URI']; ?>/' + data.order_id;
                                    } else {

                                        swal({
                                            title: "<?php if (is_object($pair_order)) {
                                                echo 'Commandes validées';
                                            } else {
                                                echo 'Commande validée';
                                            } ?>",
                                            text: "<?php if (is_object($pair_order)) {
                                                echo 'Vos commandes ont été ajoutées avec succès, vous pouvez suivre leur évolution depuis la page \"Mes commandes\"';
                                            } else {
                                                echo 'Votre commande à été ajouté avec succès, vous pouvez suivre son évolution depuis la page \"Mes commandes\"';
                                            } ?>",
                                            type: "success",
                                            confirmButtonClass: 'btn-warning',
                                            confirmButtonText: "Ok",
                                            closeOnConfirm: false
                                        }, function () {
                                            window.location.href = '/index/passer_commande/';
                                        });
                                    }

                                }
                            },
                            error: function () {
                                $("#loading-overlay,#loading").hide();
                            }
                        });

                        $(this).parent().fadeOut();

                    }

                }

            });

            $('#commande_ferme').click(function () {
                $('#type_commande').val('1');
                var currentForm = $(this).closest('form');
                currentForm.find('.ancienne_commande_ref').hide();
                $('.next .btn').removeClass('disabled');
                $('.ec_commande_status').fadeOut(60);
            })

            $('#casse_atelier').click(function () {
                /*$('#type_commande').val('2');
	var currentForm = $(this).closest('form');
  		$('.next .btn').addClass('disabled');

			$.ajax({
				type: "POST",
				url: "/index/ECCreditCheck",
				success: function(data){
					credit = data;

					if(data!="" && data == "not_logged") {
						window.location.reload();
					}
					else if(data <= 0){
						currentForm.find('#commande_type').addClass('row_error');
						currentForm.find('.ancienne_commande_ref').hide();
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
						$('.next .btn').addClass('disabled');
					} else {
						currentForm.find('.ancienne_commande_ref').show();
						$('#div1_ref_client').removeClass('hide');
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>'+data+' €</b>');
						currentForm.find('#commande_type').removeClass('row_error');
					}

				},
				error:function(){
					currentForm.find('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
					currentForm.find("#loading-overlay,#loading").hide();
					$('.next .btn').addClass('disabled');
				}
			});


			$('.ec_commande_status').fadeIn(60);
			*/
            })

            $('#erreur_ophtalmologiste').click(function () {
                /*$('#type_commande').val('3');
	var currentForm = $(this).closest('form');
  		$('.next .btn').addClass('disabled');

			$.ajax({
				type: "POST",
				url: "/index/ECCreditCheck",
				success: function(data){

					if(data!="" && data == "not_logged") {
						window.location.reload();
					}
					else if(data <= 0){
						currentForm.find('#commande_type').addClass('row_error');
						currentForm.find('.ancienne_commande_ref').hide();
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-danger').removeClass('alert-warning').html('Vous ne disposez d\'aucun crédit Erreur / Casse');
						$('.next .btn').addClass('disabled');
					} else {
						currentForm.find('.ancienne_commande_ref').show();
						$('#div1_ref_client').removeClass('hide');
						currentForm.find('.ec_commande_status').find('.alert').addClass('alert-warning').removeClass('alert-danger').html('Votre crédit : <b>'+data+' €</b>');
						currentForm.find('#commande_type').removeClass('row_error');
					}

				},
				error:function(){
					currentForm.find('.ec_commande_status').find('span').addClass('error').html('Une erreur est survenue, veuillez recharger la page et réessayer.');
					currentForm.find("#loading-overlay,#loading").hide();
					$('.next .btn').addClass('disabled');
				}
			});


			$('.ec_commande_status').fadeIn(60);
	*/
            })

            $('#commandeForm').on('change', 'input[name="miroir"], select[name="id_verre"], input[name="only_gauche"], input[name="only_droit"]', function () {

                var option_price = 0;
                var total_price  = 0;


                var cote       = "",
                    opose      = '_gauche',
                    elem_opose = '_gauche',
                    elem       = '_droit';

                if ($(this).attr('id') !== undefined && $(this).attr('id').indexOf('gauche') != -1) {
                    cote       = "_gauche";
                    opose      = "";
                    elem_opose = "_droit";
                    elem       = "_gauche";
                }

                if ($('input[name="only' + elem + '"]').is(':checked')) {
                    $('.correction' + elem_opose).hide();
                } else {
                    $('.correction' + elem_opose).show();
                }

                if ($('input[name="type_commande"]:checked').val() > 1) {

                    if ($('select[name="id_verre"] option:selected').val() != 0) {

                        $.ajax({
                            type: "POST",
                            url: "/index/getPrixVerre",
                            data: {'id': $('select[name="id_verre"] option:selected').val()},
                            dataType: "html",
                            success: function (data) {

                                $.ajax({
                                    type: "POST",
                                    url: "/index/ECCreditCheck",
                                    beforeSend: function () {
                                        $("#loading-overlay,#loading").show();
                                    },
                                    success: function (credit) {

                                        if (credit != "" && credit == "not_logged") {
                                            window.location.reload();
                                        }

                                        if ($('input[name="miroir"]:checked').val() > 0) {
                                            option_price = 7;
                                        }

                                        if ($('input[name="only_gauche"]').is(':checked') || $('input[name="only_droit"]').is(':checked')) {
                                            total_price += parseFloat(data);
                                            total_price += parseFloat(option_price);
                                        } else {
                                            total_price += parseFloat(data * 2);
                                            total_price += parseFloat(option_price * 2);
                                        }

                                        $('.credit_casse').text(credit);
                                        $('.total_commande').text(total_price);

                                        var diff = credit - total_price;

                                        if (diff < 0) {
                                            $('.limite_commande').fadeIn(60);
                                            $('.next .btn').addClass('disabled');
                                        } else {
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
            /*
	$('#btn_update_RIB').on('click', function(e){


		try {

				$.ajax({
				type: "POST",
				url: "/index/submit_mandat",
				data: $('#update_RIB').serialize(),

				success: function(data){

					$('#update_RIB input').removeClass('error');
					$('#update_RIB .validator').text('');


					if(data!="" && data == "not_logged") {
						window.location.reload();
					}
					else {

						data = $.parseJSON(data);

						if(data.status == 1) {
							window.location.href = data.link;
						}
						else {

							$.each(data, function(index, value) {
								$('#update_RIB input#'+index).removeClass('valid').addClass('error');
								if(value == 1) {
									$('#update_RIB input#'+index).siblings('.validator').text('Ce champ est requis');
								}
								else {
									$('#update_RIB input#'+index).siblings('.validator').text('Format invalide');
								}
							});

						}

					}


				}
			});
			} catch(ex) {
				console.log("Erreur click submit");
			}
			e.preventDefault();
	});		*/

            $('#update_RIB').on('submit', function (e) {

                e.preventDefault();
                console.log($('#update_RIB').serialize());


                $.ajax({
                    type: "POST",
                    url: "/index/submit_mandat",
                    data: $('#update_RIB').serialize(),

                    success: function (data) {

                        $('#update_RIB input').removeClass('error');
                        $('#update_RIB .validator').text('');


                        if (data != "" && data == "not_logged") {
                            window.location.reload();
                        } else {

                            data = $.parseJSON(data);

                            if (data.status == 1) {
                                window.location.href = data.link;
                            } else {

                                $.each(data, function (index, value) {
                                    $('#update_RIB input#' + index).removeClass('valid').addClass('error');
                                    if (value == 1) {
                                        $('#update_RIB input#' + index).siblings('.validator').text('Ce champ est requis');
                                    } else {
                                        $('#update_RIB input#' + index).siblings('.validator').text('Format invalide');
                                    }
                                });

                            }

                        }


                    }
                });


            });
        });



        $('#axeD').on('change', function(event)
        {
            var axe = $('#axeD').val()
            if(axe < 0 || axe > 180){
                $('#axe_between_0_180').modal('show');
                $('#axeD').val('');
            }
        });

        $('.connect_machine').click(function () {
            console.log('rewrewrwerwerrrrrrrrrrrrrrrrrr');
            Connect(null, true);
        })

        $('.return_to_commande_standard').click(function () {
            document.getElementById("is_teledetourage").checked = false;
            hideAll();
        })

        function hideAll() {
            $('#produit').addClass('hide');
            // $('#format_perce').addClass('hide');
            $('#div_refraction').addClass('hide');
            $('#div_teledetourage').addClass('hide');
            $('#div1_format_type').addClass('hide');
            $('#type_produit').addClass('hide');
            $('#generation_progressif').addClass('hide');
            $('#indices').val('');
        }

        function widthImageOma () {
            let divDevices = document.getElementById('divDevices');
            document.getElementById('divOmaImageOut').setAttribute("style","height:" + divDevices.offsetWidth / 2 + "px");
        }

        String.prototype.hexEncode = function(){
            var hex, i;

            var result = "";
            for (i=0; i<this.length; i++) {
                hex = this.charCodeAt(i).toString(16);
                result += ("000"+hex).slice(-4);
            }
            return result
        }

        String.prototype.hexDecode = function(){
            var j;
            var hexes = this.match(/.{1,4}/g) || [];
            var back = "";
            for(j = 0; j<hexes.length; j++) {
                back += String.fromCharCode(parseInt(hexes[j], 16));
            }

            return back;
        }

        $('#btnLaunchTracer').click(function () {
            LaunchTracer();
        });

        // $('#btnLaunchTablette').click(function () {
        //     LaunchTablette();
        // });

        $('#btnSetOmaCode').click(function () {
            SetCodeOma();
            //backgroundDrilled()
        });

        $('#is_teledetourage').change(function() {
            if ($('#is_teledetourage').is(':checked')) {
                let user_id = $('#user_id').val();
                $('#txtCustomerCode').val(user_id);
                Connect();
            }
        });

        function swalTeledetourage() {
            swal({
                title: "Traceur non connecté",
                text: "\nVotre traceur n'est pas connecté, veuillez le connecter en appuyant sur \"CONNECTER\".\n\n" +
                    "                                Si vous souhaitez passer une commande sans télédétourage, appuyez sur \"RETOUR\"",
                type: "warning",
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "CONNECTER",
                cancelButtonText: "RETOUR",
                confirmButtonClass: "connect_machine btn-success",
                cancelButtonClass: "return_to_commande_standard",
            });
            $('.return_to_commande_standard').click(function () {
                document.getElementById("is_teledetourage").checked = false;
                hideAll();
            })
            $('.connect_machine').click(function () {
                Connect(null, true);
            })
        }

        $('#edge_thickness').on('input', function () {
            backgroundEcartAndHauteurAll();
        });

        function backgroundEcartAndHauteurAll() {
            backgroundEcartAndHauteur('teledetourage_ecart_puppillaire_droit')
            backgroundEcartAndHauteur('teledetourage_ecart_puppillaire_gauche')
            backgroundEcartAndHauteur('hauteur_montage_droit')
            backgroundEcartAndHauteur('hauteur_montage_gauche')
            backgroundEcartAndHauteur('largeur_boxing')
            backgroundEcartAndHauteur('taille_du_pont')
            backgroundEcartAndHauteur('hauteur_boxing')
            backgroundEcartAndHauteur('edge_thickness')
        }

        function backgroundEcartAndHauteur(id) {
            let jqueryId = '#' + id
            let valueMin = 10;
            let valueMax = 100;
            if (id === 'edge_thickness') {
                valueMin = 0.6;
                valueMax = 3.0000000001;
            }
            if ($(jqueryId).val() == '' || $(jqueryId).val() < valueMin || $(jqueryId).val() >= valueMax) {
                $(jqueryId).attr('style', "background-color: #e39090" +
                    " !important")
                $('#div_refraction').addClass('hide');
                // document.getElementById(id).style.backgroundColor = 'red !important';
                // document.getElementById("'" + id + "'").style.backgroundColor = 'red !important';
            }
            else {
                $(jqueryId).attr('style', "background-color: #a0e7a0  !important")
                $('#afficherV').show();
            }
        }

        function backgroundDrilled() {
            let els = document.getElementsByClassName("percage");
            let id;
            let disableRefraction = false;
            for(let i = 0; i < els.length; i++)
            {
                id = '#' + els[i].id
                if(els[i].value) {
                    $(id).attr('style', "background-color: #a0e7a0" +
                        " !important")
                }
                else {
                    $(id).attr('style', "background-color: #e39090" +
                        " !important")
                    disableRefraction = true
                }
            }
            if (!disableRefraction && els.length > 0) {
                $('#div_refraction').removeClass('hide');
            }
            else {
                $('#div_refraction').addClass('hide');
            }
        }
    </script>


<?php
include_once('footer.php'); ?>