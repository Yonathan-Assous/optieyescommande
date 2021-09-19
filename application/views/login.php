<?php
include_once('header.php');
?>

    <div class="wrapper-page login-page">
        <div id="login-page-flex">
            <div class="section-login" style="width: 100%; ">
                <div id="div-image" class="text-center div-image">
                    <div class="login-page logo">
                        <img id="logo-optieyes" src="/static/img/logo.png" />
                    </div>
                </div>
                <div id="card-box" class="m-t-30 card-box new-design">
                    <h2 class="login-title">Espace client</h2>
                    <div class="login-description" style="font-weight: bold;">
                        Connectez-vous à votre espace client optieyes.com
                    </div>
                    <div class="panel-body">

                    <?php if(isset($recovery) && $recovery) { ?>

                        <form id="recoverPassword">

                            <input type="hidden" name="secure" value="<?php echo end(explode("/", $_SERVER['REQUEST_URI'])); ?>" />

                            <div class="form-group clearfix">
                                <div class="col-xs-12">
                                    <p class="m-b-10">Veuillez remplir le formulaire ci-dessous afin de réinitialiser votre mot de passe.</p>
                                    <input class="form-control" type="password" name="new_pass" id="new_pass"  placeholder="Nouveau mot de passe" />
                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="confirm_new_pass" id="confirm_new_pass" placeholder="Confirmez" />
                                </div>
                            </div>

                            <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <button class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase"  type="submit">Réinitialiser</button>
                                </div>
                            </div>

                        </form>



                    <?php } else { ?>
                        <form id="loginForm" class="form-horizontal m-t-10">

                            <p class="error error-login"></p>

                            <div class="form-group new-design-form-group">
                                <div class="col-xs-12">
                                    <input class="form-control new-design" type="text" name="login[email]" required="" placeholder="Adresse email">
                                </div>
                            </div>

                            <div class="form-group new-design-form-group">
                                <div class="col-xs-12">
                                    <input id="login-pass" class="form-control no-border-top new-design" type="password" name="login[pass]" required="" placeholder="Mot de passe">
                                    <div class="password-icon">
                                        <span id="eye-off-icon" class="iconify" data-icon="mdi:eye-off" data-width="35"></span>
                                        <span id="eye-icon" class="iconify" data-icon="mdi:eye" data-width="35" style="display:none;"></span>
                                    </div>
                                    <p class="error recover-error"></p>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12" style="text-align: center;">
                                    <a href="#password-reset" id="password-link" class="text-muted" data-toggle="modal" data-target="#password-reset">
                                        <i class="fa fa-lock m-r-5"></i> Mot de passe oublié
                                    </a>
                                </div>
                            </div>
                            <div class="form-group text-center m-t-30 new-design-form-group">
                                <div class="col-xs-12">
                                    <button class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase new-design"
                                            type="submit" name="login_btn">Connexion</button>
                                </div>
                            </div>



                        </form>

                        <form id="registerForm" class="form-horizontal m-t-10" style="display: none">
                            <div id="inscription">
                                <div class="form-group ">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_nom_societe">Nom de la société</label>
                                        <input class="form-control" type="text" name="inscription[nom_societe]" id="inscription_nom_societe" required="">
                                    </div>
                                    <div class="col-xs-12 col-sm-6"">
                                        <label for="inscription_nom_magasin">Nom du magasin</label>
                                        <input class="form-control" type="text" name="inscription[nom_magasin]" id="inscription_nom_magasin" required="">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_adresse">Adresse magasin</label>
                                        <input class="form-control" type="text" name="inscription[adresse]" id="inscription_adresse" required="">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_cp">Code Postal</label>
                                        <input class="form-control" type="text" name="inscription[cp]" id="inscription_cp" required="">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_ville">Ville</label>
                                        <input class="form-control" type="text" name="inscription[ville]" id="inscription_ville" required="">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_tel_fixe">Téléphone Fixe</label>
                                        <input class="form-control" type="text" name="inscription[tel_fixe]" id="inscription_tel_fixe" required="">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_numero_siret">Numéro SIRET</label>
                                        <input class="form-control" type="text" name="inscription[numero_siret]" id="inscription_numero_siret" required data-error="#error-siret">
                                        <p class="error error-siret" id="error-siret"></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_num_finess">Numéro Finess</label>
                                        <input class="form-control" type="text" name="inscription[num_finess]" id="inscription_num_finess" required="">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_email">Email</label>
                                        <input class="form-control" type="text" name="inscription[email]" id="inscription_email" required="">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="inscription_nom_responsable">Nom du responsable du magasin</label>
                                        <input class="form-control" type="text" name="inscription[nom_responsable]" id="inscription_nom_responsable" required="">
                                    </div>
                                </div>
                                <div class="form-group text-center m-t-30">
                                    <div class="col-xs-12">
                                        <button id="accept_register" class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase" type="button" name="accept_register">Passer au Sepa</button>
                                    </div>
                                </div>
                            </div>

                            <div id="sepa" style="display: none">
                                <h4 class="header-title m-b-5" style="margin-top: -40px">Vos informations de paiement</h4>
                                <p> Avant de pouvoir passer vos commandes sur OptiEyes, veuillez
                                    renseigner les informations de prélèvement ci-dessous, vous serez amenné à
                                    valider votre mandat par siangature éléctronique avant de pouvoir commander.</p>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label for="companyName">Société</label>
                                        <input id="companyName" name="sepa[companyName]" type="text"
                                               class="required form-control" value="<?php
                                        //echo $user_info->nom_magasin ?>"/>
                                        <div class="validator"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6" style="text-align: center">
                                        <label class="control-label" for="honorificPrefix" style="display: flex">Civilité du gérant</label>
                                        <div class="radio radio-warning radio-inline" style="width: 30%;">
                                            <input type="radio" id="civilite_1" value="1" name="sepa[honorificPrefix]"
                                                   class="required" checked>
                                            <label for="civilite_1"> M. </label>
                                        </div>
                                        <div class="radio radio-warning radio-inline" style="width: 30%;">
                                            <input type="radio" id="civilite_2" value="2" name="sepa[honorificPrefix]"
                                                   class="required">
                                            <label for="civilite_2"> Mme </label>
                                        </div>
                                        <div class="radio radio-warning radio-inline" style="width: 30%;">
                                            <input type="radio" id="civilite_3" value="3" name="sepa[honorificPrefix]"
                                                   class="required">
                                            <label for="civilite_3"> Mlle </label>
                                        </div>
                                        <div class="validator"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                    <label class="control-label" for="familyName">Nom du gérant</label>
                                        <input id="familyName" name="sepa[familyName]" type="text"
                                               class="required form-control"/>
                                        <div class="validator"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="givenName">Prénom du
                                            gérant</label>
                                        <input id="givenName" name="sepa[givenName]" type="text"
                                               class="required form-control"/>
                                        <div class="validator"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="street1">Adresse de la
                                            société</label>
                                        <input id="street1" name="sepa[street1]" type="text"
                                               class="required form-control" value="<?php
                                        //echo $user_info->adresse ?>"/>
                                        <div class="validator"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="street2">Complément</label>
                                        <input id="street2" name="sepa[street2]" type="text"
                                               class="required form-control"/>
                                        <div class="validator"></div>
                                    </div>
                                </div>

                                <div class="form-group clearfix m-b-15">
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="city">Ville</label>
                                        <input id="city" name="sepa[city]" type="text" class="required form-control"
                                               value="<?php
                                               //echo $user_info->ville ?>"/>
                                        <div class="validator"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="postalCode">Code Postal</label>
                                        <input id="postalCode" name="sepa[postalCode]" type="text"
                                               class="required form-control" value="<?php
                                        //echo $user_info->cp ?>"/>
                                        <div class="validator"></div>
                                    </div>
                                </div>

                                <div class="form-group clearfix m-b-15">
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="pays">Pays</label>
                                        <input id="pays" name="sepa[pays]" type="text" class="required form-control"
                                               value="France" disabled/>
                                        <div class="validator"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label class="control-label" for="iban">IBAN</label>
                                        <input id="iban" name="sepa[iban]" type="text" class="required form-control"/>
                                        <div class="validator"></div>
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-30">
                                    <div class="col-xs-12 col-sm-6">
                                        <button id="previous_register" class="btn btn-bordred btn-block waves-effect waves-light text-uppercase"
                                                type="button" name="previous_register" style="background-color: lightgrey">Précédent</button>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <button class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit" name="register_btn">Inscription</button>
                                    </div>
                                </div>
                            </div>


                        </form>

                    <?php } ?>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-center" style="margin-top:-20px; margin-bottom: 20px;">
                        <p class="text-muted"><span class="client-status">Pas encore client ?</span>
                            <a href="#register" id="register_link" class="text-warning m-l-5" rel="register"><b>Inscrivez-vous</b></a>
                        </p>
                    </div>
                </div>

<!--                <img style="display: block; max-width: 200px; margin: 0 auto;" src="/static/img/seal_color.png" />-->
            </div>
            <div id="div-video";>
                <a href="https://www.youtube.com/embed/9SN1-uSYzKQ?autoplay=1" target="_blank" allow='autoplay'>
                    <div style="display: flex; justify-content: center; overflow: hidden" >
                        <video id="optieyes_video" controls="controls" autoplay="true" muted="muted" style="height: 100vh; pointer-events: none;">
                            <source src="/static/videos/OptiEyes.mp4" type="video/mp4" />
                        </video>
                    </div>
                </a>
<!--                        <video src="/static/videos/OptiEyes.mp4" type="video/mp4" autoplay="play" controls></video>-->
<!--                        <audio src="/static/audio/audio3.mp3" controls></audio>-->
<!--                        <iframe src="https://www.youtube.com/embed/9SN1-uSYzKQ?rel=0" frameborder="0" allowfullscreen></iframe>-->
            </div>
        </div>
        <div id="password-reset" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="password_reset">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Réinitialiser mot de passe</h4>
                        </div>

                        <div class="modal-body">
                            <p>Afin de réinitialiser votre mot de passe, veuillez indiquer votre
                                adresse email.</p>

                            <div class="form-group">
                                <label for="email">Adresse Email</label>
                                <input type="email" name="email" id="email"
                                       class="form-control" />
                                <p class="error reset-error"></p>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-default waves-effect waves-light" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-warning waves-effect waves-light">Réinitialiser</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div id="password_exist" class="modal fade" tabindex="-1" role="dialog"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="password_exist_form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Email existant</h4>
                        </div>

                        <div class="modal-body">
                            <p id="text_password_exist"></p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-default waves-effect waves-light"
                                    data-dismiss="modal">Non</button>
                            <button id="submit_change_mdp" class="btn btn-warning waves-effect
                            waves-light" data-dismiss="modal">Oui</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <div id="siret_exist" class="modal fade" tabindex="-1" role="dialog"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                <div class="modal-content">

                    <form id="siret_exist_form">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Siret existant</h4>
                        </div>

                        <div class="modal-body">
                            <p id="text_siret_exist">Ce numéro de siret existe déjà</p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-warning waves-effect waves-light"
                                    data-dismiss="modal">Ok</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <script src="/static/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

        <script>
            $(document).ready(function() {
                var video = document.getElementById("optieyes_video");
                video.play();
                $('#eye-icon').on('click', function(e) {
                    $('#eye-icon').hide();
                    $('#eye-off-icon').show();
                    document.getElementById('login-pass').type='password';
                });

                $('#eye-off-icon').on('click', function(e) {
                    $('#eye-icon').show();
                    $('#eye-off-icon').hide();
                    document.getElementById('login-pass').type='text';
                });
            });

            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                $('p.error').text('');
                $.post('/index/check_login', $(this).serialize(), function(data) {
                    var res  = $.parseJSON(data);
                    if(res.status == 'ok'){
                        window.location.reload();
                    }
                    if(res.status == 'error_log') {
                        $('p.error-login').text('Le mot de passe que vous avez saisi est incorrect.');
                    }
                });
            });

            $('#submit_change_mdp').on('click', function(e) {
                $('#password-reset').modal('show');
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

            $("#registerForm").validate({
                rules: {
                    "inscription[numero_siret]": {
                        required: true,
                        digits: true,
                        bon_number_siret: true
                    },
                    "inscription[num_finess]": {
                        required: true,
                        digits: true
                    },
                    "inscription[cp]": {
                        required: true,
                        digits: true,
                        maxlength: 5
                    },
                    "sepa[companyName]": {
                        required: true,
                    },
                    "sepa[honorificPrefix": {
                        required: true,
                    },
                    "sepa[familyName": {
                        required: true,
                    },
                },
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(placement).append(error)
                    } else {
                        error.insertAfter(element);
                    }
                }
            });


            jQuery.validator.addMethod("bon_number_siret", function(value, element) {
                let valueArray = value.split('');
                let sum = 0;
                let x;
                for (let i = 1; i <= valueArray.length; i++) {
                    let num = parseInt(valueArray[valueArray.length - i]);
                    if (i%2 == 1) {
                        sum += num;
                    }
                    else {
                        x = num * 2;
                        if (x >= 10) {
                            sum += (x%10) + 1
                        }
                        else {
                            sum += x
                        }
                    }
                }
                if(sum % 10 != 0) {
                    $.validator.messages.bon_number_siret = "Votre numéro SIRET n'est pas aux normes";
                    return false;
                }
                else return true;
            });

            $('#accept_register').on('click', function(e) {
                if($("#registerForm").valid()) {
                    $('#sepa').show();
                    $('#inscription').hide();
                    $('#companyName').val($('#inscription_nom_magasin').val());
                    $('#street1').val($('#inscription_adresse').val());
                    $('#city').val($('#inscription_ville').val());
                    $('#postalCode').val($('#inscription_cp').val());
                }

            });

            $('#previous_register').on('click', function(e) {
                $('#sepa').hide();
                $('#inscription').show();
            });

            $('#password_reset').on('submit', function(e) {
                e.preventDefault();
                $('.reset-error').hide();
                $.ajax({
                    type: "POST",
                    url: "/index/sendMailresetPass",
                    data: $("#password_reset").serialize(),
                    success: function(data){
                        if(data!=""){
                            if(data == "numero_siret_does_not_exist"){
                                $('.reset-error').fadeIn(100).text('Aucun compte trouvé pour ce numéro.');
                            }
                            else if(data == "email_not_good"){
                                $('p.reset-error').fadeIn(100).html("Cette adresse e-mail " +
                                    "n’existe pas " +
                                    "dans notre base client. Contactez nous à <a " +
                                    "href=\"mailto:optieyescommande@gmail.com\">optieyescommande@gmail.com </a>si besoin");
                            }
                        }else{
                            $('#password-reset').modal('hide');

                            swal({
                                title: "Réinitialisation",
                                text: "Un email contenant un lien de réinitialisation du mot de passe vient de vous être envoyé.",
                                type: "success",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }
                    }
                });
            });

            $('#recoverPassword').on('submit', function(e) {
                e.preventDefault();
                $('.recover-error').hide();
                $.ajax({
                    type: "POST",
                    url: "/index/updatePass",
                    data: $("#recoverPassword").serialize(),
                    success: function(data){
                        if(data=="error_no_user_found") {
                            $('.recover-error').fadeIn(100).text('Erreur : numéro de compte inconnu.');
                        }
                        else {
                            $('#registerForm').slideUp(100);
                            $('#loginForm').slideDown(60);

                            swal({
                                title: "Mise à jour réussie",
                                text: "Votre mot de passe a bien été mis à jour.",
                                type: "success",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });

                            setTimeout(function() {
                                window.location.href = '/';
                            }, 3000);
                        }
                    }
                });

            });

            $('#registerForm').on('submit', function(e) {
                e.preventDefault();
                $('.error').text('');
                if($("#registerForm").valid()) {
                    $.ajax({
                        type: "POST",
                        url: "/index/subscribe",
                        data: $("#registerForm").serialize(),
                        success: function(data){
                            var res = $.parseJSON(data);
                            console.log(res);
                            if(res.status == 'ok') {
                                $('#registerForm').html('<p>Votre inscription a bien été prise en compte, vos informations de connexion vous ont été transmises par mail</p>');
                            }
                            else if(res.status == 'exists') {
                                $('#text_password_exist').html('Vous avez déjà ouvert un compte avec cette' +
                                    ' adresse mail le ' + res.date +
                                    '. <br>Voulez vous régénérer un ' +
                                    'nouveau mot de passe ?');
                                $('#password_exist').modal('show');
                            }
                            else if(res.status == 'error') {
                                if (res.error == 'duplicate_siret') {
                                    $('#text_siret_exist').html('Veuillez noter que ce numéro de SIRET existe déjà pour le ' +
                                        'numéro de magasin ' + res.magasin + ' en interne');
                                    $('#siret_exist').modal('show');
                                }
                                else if(res.error !== undefined) {
                                    $('.error-'+res.error).text('Veuillez indiquer un numéro valide');
                                }
                            }
                        }
                    });

                }
            });

            $(document).on('click', '#register_link', function() {
                const mediaQuery = window.matchMedia('(min-width: 993px)');
                if($(this).attr('rel') == 'register') {
                    $('#loginForm').slideUp(100);
                    $('#registerForm').slideDown(60);
                    $(this).attr('rel', 'login').find('b').text('Connectez-vous');
                    $('.client-status').text('Déjà client ?');
                    $('.login-title').hide();
                    $('.login-description').hide();
                    $('#div-video').hide();
                    // document.body.style.background = "#ddd";
                    if (mediaQuery.matches) {
                        document.getElementById("card-box").style.maxWidth = "840px";
                        document.getElementById("div-image").style.backgroundColor = "#fbca353b";
                        document.getElementById("div-image").style.width = "100%";
                        document.getElementById("logo-optieyes").style.width = "18%";
                    }
                }
                else {
                    $('#registerForm').slideUp(100);
                    $('#loginForm').slideDown(60);
                    $(this).attr('rel', 'register').find('b').text('Inscrivez-vous');
                    $('.client-status').text('Pas encore client ?');
                    $('.login-title').show();
                    $('.login-description').show();
                    // document.body.style.background = "#fff";
                    if (mediaQuery.matches) {
                        $('#div-video').show();
                        document.getElementById("card-box").style.maxWidth = "420px"
                        document.getElementById("div-image").style.backgroundColor = "#fff";
                        document.getElementById("div-image").style.width = "50%";
                        document.getElementById("logo-optieyes").style.width = "32%";
                    }

                }



            });

        </script>

        <style>
            body {
                background: #fff;
                font-size: 0px;
                /*background: #f8f8f9*/
            }

            .footer {
                font-size: 14px;
            }

            .new-design {
                font-family: 'Roboto Condensed';
                letter-spacing: 1px;
                font-size: 15px;
            }

            .new-design > .login-title {
                font-family: 'Cinzel', serif;
            }

            .new-design > .login-description {
                font-family: 'Alegreya Sans SC', sans-serif;
                color: #000;
            }

            input {
                letter-spacing: 1px;
                font-size: 15px;
                font-family: 'FontAwesome';
            }

            .client-status, #register_link {
                font-size: 14px;
            }

            @media screen and (min-width: 993px) {
                .card-box.new-design {
                    margin-top: 190px !important;
                }
                .form-control.no-border-top {
                    border-top: 1px solid #fff;
                }
            }

            @media screen and (max-width: 992px) {
                .col-xs-12 {
                    padding-bottom: 15px;
                }

                .col-lg-6>input {
                    border: solid #999 1px;
                }
                .form-group {
                    margin-bottom: 0px;
                }
                .footer {
                    display: none;
                }
                .password-icon {
                    top: 33%;
                }
            }

            .col-lg-6 {
                padding-right: 10px;
                padding-left: 10px;
            }


        </style>


    </div>

<?php include_once('footer.php') ?>




