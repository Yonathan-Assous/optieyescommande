<?php 
    include_once('header.php');
?>

    <div class="wrapper-page login-page">

        <div class="m-t-30 card-box">
            <div class="text-center">
                <div class="login-page logo">
                    <img src="/static/img/logo.png" />
                </div>

            </div>
            <div class="panel-body">

                <?php if(isset($recovery) && $recovery) { ?>

                <form id="recoverPassword">

                    <input type="hidden" name="secure" value="<?php echo end(explode("/", $_SERVER['REQUEST_URI'])); ?>" />

                    <div class="form-group clearfix">
                        <div class="col-xs-12">
                            <p class="m-b-10">Veuillez remplire le formulaire ci-dessous afin de réinitialiser votre mot de passe.</p>
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
                            <button class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit">Réinitialiser</button>
                        </div>
                    </div>

                </form>



                <?php } else { ?>
                <form id="loginForm" class="form-horizontal m-t-10">

                    <p class="error error-login"></p>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="login[email]" required="" placeholder="Adresse email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="login[pass]" required="" placeholder="Mot de passe">
                            <p class="error recover-error"></p>
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit" name="login_btn">Connexion</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="#password-reset" id="password-link" class="text-muted" data-toggle="modal" data-target="#password-reset"><i class="fa fa-lock m-r-5"></i> Mot de passe oublié</a>
                        </div>
                    </div>

                </form>

                <form id="registerForm" class="form-horizontal m-t-10" style="display: none">

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_nom_societe">Nom de la société</label>
                            <input class="form-control" type="text" name="inscription[nom_societe]" id="inscription_nom_societe" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_nom_magasin">Nom du magasin</label>
                            <input class="form-control" type="text" name="inscription[nom_magasin]" id="inscription_nom_magasin" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_adresse">Adresse magasin</label>
                            <input class="form-control" type="text" name="inscription[adresse]" id="inscription_adresse" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_cp">Code Postal</label>
                            <input class="form-control" type="text" name="inscription[cp]" id="inscription_cp" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_ville">Ville</label>
                            <input class="form-control" type="text" name="inscription[ville]" id="inscription_ville" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_tel_fixe">Téléphone Fixe</label>
                            <input class="form-control" type="text" name="inscription[tel_fixe]" id="inscription_tel_fixe" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_numero_siret">Numéro SIRET</label>
                            <input class="form-control" type="text" name="inscription[numero_siret]" id="inscription_numero_siret" required="">
                            <p class="error error-siret"></p>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_num_finess">Numéro Finess</label>
                            <input class="form-control" type="text" name="inscription[num_finess]" id="inscription_num_finess" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_email">Email</label>
                            <input class="form-control" type="text" name="inscription[email]" id="inscription_email" required="">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label for="inscription_nom_responsable">Nom du responsable du magasin</label>
                            <input class="form-control" type="text" name="inscription[nom_responsable]" id="inscription_nom_responsable" required="">
                        </div>
                    </div>


                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit" name="register_btn">Inscription</button>
                        </div>
                    </div>


                </form>

                <?php } ?>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center" style="margin-top:-20px; margin-bottom: 20px;">
                <p class="text-muted"><span class="client-status">Pas encore client ?</span> <a href="#register" id="register_link" class="text-warning m-l-5" rel="register"><b>Inscrivez-vous</b></a></p>
            </div>
        </div>

        <img style="display: block; max-width: 200px; margin: 0 auto;" src="/static/img/seal_color.png" />

        <div class="m-t-30 card-box">
            <div class="videoWrapper">
                <iframe src="https://www.youtube.com/embed/9SN1-uSYzKQ?rel=0" frameborder="0" allowfullscreen></iframe>
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
                            <h4 class="modal-title">Email existant</h4>
                        </div>

                        <div class="modal-body">
                            <p id="text_siret_exist"></p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-warning waves-effect waves-light"
                                    data-dismiss="modal">Ok</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <script>


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
            });

            $(document).on('click', '#register_link', function() {

                if($(this).attr('rel') == 'register') {
                    $('#loginForm').slideUp(100);
                    $('#registerForm').slideDown(60);
                    $(this).attr('rel', 'login').find('b').text('Connectez-vous');
                    $('.client-status').text('Déjà client ?');
                }
                else {
                    $('#registerForm').slideUp(100);
                    $('#loginForm').slideDown(60);
                    $(this).attr('rel', 'register').find('b').text('Inscrivez-vous');
                    $('.client-status').text('Pas encore client ?');
                }



            });

        </script>




    </div>

<?php include_once('footer.php') ?>




<?php /* <body class=login>

	<!-- Some dialogs etc. -->

	<!-- The loading box -->
	<div id="loading-overlay"></div>
	<div id="loading">
		<span>Chargement...</span>
	</div>
	<!-- End of loading box -->
	
	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->
	
	<!-- The toolbar at the top -->
	<section id="toolbar">
		<div class="container_12">
		
			<!-- Left side -->
			<div class="left">
				<ul class="breadcrumb">
				
					<li><a href="javascript:void(0);">Optieyes Commande</a></li>
					<li><a href="javascript:void(0);"><?php echo $page; ?></a></li>
					
				</ul>
			</div>
			<!-- End of .left -->
			
			<!-- Right side -->
			<!--div class="right">
				<ul>
				
					<li><a href="dashboard.html"><span class="icon i14_bended-arrow-left"></span>Back to Dashboard</a></li>
					
					<li class="red"><a href="#">Purchase</a></li>
					
				</ul>
			</div><!-- End of .right -->
			
			<!-- Phone only items -->
			<div class="phone">
				
				<!-- User Link -->
				<li><a href="#"><span class="icon icon-home"></span></a></li>
				<!-- Navigation -->
				<li><a href="#"><span class="icon icon-heart"></span></a></li>
			
			</div><!-- End of .phone -->
			
		</div><!-- End of .container_12 -->
	</section><!-- End of #toolbar -->
	
	<!-- The header containing the logo -->
	<header class="container_12">
		
		<div class="container">
		
			<!-- Your logos -->
			<a href="/tf-mango/"><img src="<?php echo $pre_url; ?>static/img/logo-light.png?v=<?php echo $version; ?>" alt="Crystal" width="227" height="73"></a>
			<a class="phone-title" href="login.html"><img src="static/img/logo-mobile.png" alt="Crystal" height="22" width="70" /></a>
			
			<?php
			if((isset($recovery) && !$recovery) && (isset($maintenance) && !$maintenance)){
				echo '<div class="right" id="inscription_display">
					<span>Vous n\'êtes pas inscrit?</span>
					<a id="inscription_btn">Créer un compte</a>
				</div>
				<div class="right" id="log_display" style="display: none;">
					<span>Vous possèdez déjà un compte?</span>
					<a id="log_btn">Connectez-vous</a>
				</div>';
			}
			?>

		</div><!-- End of .container -->
	
	</header><!-- End of header -->
	
	<!-- The container of the sidebar and content box -->
	<section id="login" class="container_12 clearfix">
	
    <?php
    if(isset($maintenance) && $maintenance){
    ?>
        <section id="maintenance" class="container_12 clearfix">
            <form method="post" class="box validate" style="width: 600px; max-width:445px;margin-top:37px">
                <div class="header">
                    <h2><span class="icon icon-lock"></span>Nous sommes actuellement en maintenance !</h2>
                </div>

                <div class="content">
                    <div class="form-box">
                        <img src="/static/img/maintenance.jpg" alt="maintenance">
                    </div>
                </div>
            </form>
        </section>

    <?php
    }
    elseif(isset($recovery) && $recovery){

    ?>
        <section id="recovery_pass" class="container_12 clearfix">
            <form method="post" class="box validate" style="width: 600px; max-width: 600px;margin-top:37px" id="form_reset_pass">
				<input type="hidden" name="secure" value="<?php echo end(explode("/", $_SERVER['REQUEST_URI'])); ?>" />
                <div class="header">
                    <h2><span class="icon icon-lock"></span>Réinitialisation du mot de passe</h2>
                </div>

                <div class="content">
                    <div class="form-box">
                        <div class="row">
                            <label for="new_pass">
                                <strong>Nouveau mot de passe :</strong>
                            </label>
                            <div>
                                <input tabindex="1" type="password" class="required" name="new_pass" id="new_pass" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="confirm_new_pass">
                                <strong>Confirmer nouveau mot de pass : </strong>
                            </label>
                            <div>
                                <input tabindex="2" type="password" class="required" name="confirm_new_pass" id="confirm_new_pass" equalto="#new_pass" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="actions">
                            <div class="right">
                                <input tabindex="3" type="submit" value="Valider" name="valider" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
		
		<!-- Spawn $$.loaded -->
	<script>
		$.loaded();

        $.ready(function(){
         
			$("#success_new_pass,#error_new_pass").dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
						window.location = "/";
                    }
                }]
            });
			
			$("#form_reset_pass input[type=submit]").click(function(){
				if($("#form_reset_pass").validate()){
					$.ajax({
						type: "POST",
						url: "/index/updatePass",
						data: $("#form_reset_pass").serialize(),
						success: function(data){
							if(data=="error_no_user_found")
								$("#error_new_pass").dialog("open");
							else
								$("#success_new_pass").dialog("open");
						}
					});
				}
				
				return false;
			});
        });
	</script>
		
		<div id="success_new_pass" style="display: none;">
            <p> <strong>Votre mot de passe à été changé avec succès. Vous pouvez désormais vous connecter avec votre nouveau mot de passe. </strong></p>
        </div>
		<div id="error_new_pass" style="display: none;">
            <p> <strong>Une erreur est survenue durant la réinitialisation de votre mot de passe. </strong></p>
        </div>
    <?php
    }
    else{
    ?>

        <div id="login_form">
            <form method="post" class="box validate">

                <div class="header">
                    <h2><span class="icon icon-lock"></span>Connexion</h2>
                </div>

                <div class="content">

                    <!-- Login messages -->
                    <div class="login-messages">
                        <div class="message welcome">Bienvenue !</div>
                        <div class="message failure">Tous les champs doivent être renseignés.</div>
                        <div class="message failure_log">Email/Mot de passe incorrect, veuillez recommencer.</div>
                    </div>

                    <!-- The form -->
                    <div class="form-box">

                        <div class="row">
                            <label for="login_email">
                                <strong>Votre Email</strong>
                                <!--small>Or email address</small-->
                            </label>
                            <div>
                                <input tabindex=1 type="text" class="required noerror" name="login[email]" id="login_name" />
                            </div>
                        </div>

                        <div class="row">
                            <label for="login_pass">
                                <strong>Votre Mot de passe</strong>
                                <small><a href="#" id="reset_pass">Mot de passe oublié?</a></small>
                            </label>
                            <div>
                                <input tabindex=2 type="password" class="required noerror" name="login[pass]" id="login_pw" />
                            </div>
                        </div>

                        <div class="alert_msg">
                            <p>Chers partenaires,</p>

                            <p><strong>Optimize devient OptiEyes !</strong></p>

                            <p>Ce nouveau site de commande repose maintenant sur un serveur plus puissant que l'ancien.
                                Plusieurs améliorations ont été apportées pour augmenter la fluidité de vos commandes.</p>

                            <p>Votre mot de passe reste inchangé. Si vous l'avez oublié, utilisez l'oublie de mot de passe. Celui-ci sera par la suite modifiable sur votre espace personnel.</p>

                            <p>Nous sommes toujours joignable au 09 83 65 35 85 et sur notre nouvelle adresse mail optieyescommande@gmail.com si besoin.</p>
                        </div>
							
                    </div><!-- End of .form-box -->




                </div><!-- End of .content -->

                <div class="actions">
                    <div class="left">
                        <div class="rememberme">
                            <input tabindex=4 type="checkbox" name="login[remember]" id="login_remember" checked /><label for="login_remember">Se souvenir de moi?</label>
                        </div>
                    </div>
                    <div class="right">
                        <input tabindex=3 type="submit" value="Se connecter" name="login_btn" />
                    </div>
                </div><!-- End of .actions -->

            </form><!-- End of form -->
			<!--div style="margin-top:30px;width:900px;margin-left:auto;margin-right:auto">
				<div style="float:left">
					<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/KjMHrYzrOmo&ap=%2526fmt%3D18" style="width:430px; height:340px;">
						<param name="movie" value="http://www.youtube.com/v/KjMHrYzrOmo&ap=%2526fmt%3D18" />
						<param name="allowFullScreen" value="true" />
						<param name="allowScriptAccess" value="always" />
						<param name="wmode" value="transparent" />
					</object>
				</div>
				<div style="float:right">
					<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/SebrQ4TwIV4&ap=%2526fmt%3D18" style="width:430px; height:340px;">
						<param name="movie" value="http://www.youtube.com/v/SebrQ4TwIV4&ap=%2526fmt%3D18" />
						<param name="allowFullScreen" value="true" />
						<param name="allowScriptAccess" value="always" />
						<param name="wmode" value="transparent" />
					</object>
				</div>
			</div-->
        </div>
    </section>
	
    <!-- inscription form -->

        <section id="inscription" class="container_12 clearfix" style="display:none;">
            <form method="post" class="box validate" style="width: 600px; max-width: 600px;margin-top:37px">

                <div class="header">
                    <h2><span class="icon icon-lock"></span>Inscription</h2>
                </div>

                <div class="content">

                    <!-- inscription messages -->
                    <div class="login-messages">
                        <div class="message welcome">Bienvenue !</div>
                        <div class="message failure">Tous les champs doivent être renseignés.</div>
                    </div>

                    <!-- The form -->
                    <div class="form-box">
                        <div class="row">
                            <label for="inscription_nom_societe">
                                <strong>Nom Société</strong>
                            </label>
                            <div>
                                <input tabindex="1" type="text" class="required" name="inscription[nom_societe]" id="inscription_nom_societe" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_nom_magasin">
                                <strong>Nom Magasin</strong>
                            </label>
                            <div>
                                <input tabindex="2" type="text" class="required" name="inscription[nom_magasin]" id="inscription_nom_magasin" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_adresse">
                                <strong>Adresse Magasin</strong>
                            </label>
                            <div>
                                <input tabindex="3" type="text" class="required" name="inscription[adresse]" id="inscription_adresse" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_cp">
                                <strong>Code Postal</strong>
                            </label>
                            <div>
                                <input tabindex="4" type="text" class="required" name="inscription[cp]" id="inscription_cp" minlength="5" maxlength="5" pattern="^(2[abAB]|0[1-9]|[1-9][0-9])[0-9]{3}$" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_ville">
                                <strong>Ville</strong>
                            </label>
                            <div>
                                <input tabindex="5" type="text" class="required" name="inscription[ville]" id="inscription_ville" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_tel_fixe">
                                <strong>Téléphone Fixe</strong>
                            </label>
                            <div>
                                <input tabindex="6" type="text" class="required" name="inscription[tel_fixe]" id="inscription_tel_fixe" minlength="10" maxlength="10" pattern="^\d{1,10}$" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_tel_fax">
                                <strong>Fax</strong>
                            </label>
                            <div>
                                <input tabindex="7" type="text" class="required" name="inscription[tel_fax]" id="inscription_tel_fax" minlength="10" maxlength="10" pattern="^\d{1,10}$" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_numero_siret">
                                <strong>Numéro Siret</strong>
                            </label>
                            <div>
                                <input tabindex="8" type="text" class="required" name="inscription[numero_siret]" id="inscription_numero_siret" minlength="14" maxlength="14" pattern="^\d{1,14}$" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_tva_intracom">
                                <strong>Numéro TVA Intracommunautaire</strong>
                            </label>
                            <div>
                                <input tabindex="9" type="text" class="maskTvaIntra" name="inscription[tva_intracom]" id="inscription_tva_intracom" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_num_finess">
                                <strong>Numéro Finess</strong>
                            </label>
                            <div>
                                <input tabindex="10" type="text" class="required" name="inscription[num_finess]" id="inscription_num_finess" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="inscription_email">
                                <strong>Email</strong>
                            </label>
                            <div>
                                <input tabindex="11" type="text" class="required" name="inscription[email]" id="inscription_email" email="true" data-error-type="inline" />
                            </div>
                        </div>
                        <div class="row">
                            <label for="nom_responsable">
                                <strong>Nom du responsable du magasin</strong>
                            </label>
                            <div>
                                <input tabindex="12" type="text" class="required" name="inscription[nom_responsable]" id="nom_responsable" data-error-type="inline" />
                            </div>
                        </div>

                    </div><!-- End of .form-box -->

                </div><!-- End of .content -->

                <div class="actions">
                    <div class="right">
                        <input tabindex="3" type="submit" value="S'inscrire" name="btn_inscri" />
                    </div>
                </div><!-- End of .actions -->

            </form><!-- End of form -->
        </section>

        <div style="display: none;" id="msg_success_subscribe" title="Inscription réussie">
            <h3>Merci pour votre inscription</h3>
            <p>Un mail contenant vos informations de connexion vient de vous être envoyé.  Si vous ne le recevez pas, vérifiez également dans votre dossier spams.</p>
        </div>
        <div style="display: none;" id="msg_account_exist" title="Erreur email">
            <p>Cet email est déjà présent dans notre base de donnée. Veuillez en saisir un autre.</p>
        </div>
		<div style="display: none;" id="siret_exist" title="Erreur numéro Siret">
            <p>Ce numéro siret est déjà présent dans notre base de donnée. Si vous avez perdu les informations pour vous connecter à votre compte, vous pouvez réinitialiser votre mot de passe sur l'interface de connexion, en cliquant sur "Mot de passe oublié?" </p>
        </div>
        <div style="display: none;" id="msg_reset_pass" title="Réinitialiser votre mot de passe">
            <form id="form_reset_pass" class="validate">
                <p> <strong>Entrer votre numéro finess </strong><input type="text" id="numero_finess" name="numero_finess" value="" pattern="^\d{1,14}$" class="required" /></p>
            </form>
        </div>
        <div id="error_numero_finess" style="display: none;">
            <p style="color:red;"> <strong>Ce numéro finess n'existe pas, veuillez en saisir un autre ! </strong></p>
        </div>
        <div id="error_numero_finess_empty" style="display: none;">
            <p style="color:red;"> <strong>Vous devez entrer un numéro finess ! </strong></p>
        </div>
		<div style="display: none;" id="msg_redirect" title="Redirection">
            <p>Nous avons changé d'adresse, vous allez être redirigé dans 5 secondes...</p>
			<p>Si rien ne se passe <a href="http://www.optieyescommande.com">Cliquez-ici</a></p>
        </div>


    <div id="success_numero_finess" style="display: none;">
            <p> <strong>Un email avec les instructions de réinitialisation vous a été envoyé. </strong></p>
        </div>

		<div id="msg_ie_users" style="display: none;">
            <p> <strong>Ce site est optimisé pour Firefox ou Chrome.</strong></p>
			<p> <strong>Vous utilisez une version d'Internet Explorer obsolète et vous risquez de rencontrer des problèmes pendant votre navigation sur notre site.</strong></p>
			<p> <strong>Installer Firefox <a href="http://www.mozilla.org" target="_blank">(ici)</a> ou Chrome <a href="http://www.google.fr/intl/fr/chrome/browser/" target="_blank">(là)</a> pour une meilleure expérience de navigation.</strong></p>
			<p> <strong>Ou bien mettez à jour votre version d'Internet Explorer avec la dernière version pour une meilleure compatibilité (mais pas optimale !) avec notre site.</strong></p>
        </div>
		
		
		<!-- Spawn $$.loaded -->
	<script>

        $.ready(function(){
			if($.browser.msie && parseFloat($.browser.version)<10){
				$("#msg_ie_users").dialog({
					modal: true,
					width: 500,
					buttons: [{
						text: "Ok",
						click: function() {
							$(this).dialog("close");
						}
					}]
				});
			}
			
            $("#inscription_btn").click(function(){
                $("#login_form").slideUp();
                $("#inscription_display").hide();
                $("#log_display").show();
                $("#inscription").slideDown(800);
				
				$$.utils.forms.resize();

               return false;
            });
            $("#log_btn").click(function(){
                $("#inscription").slideUp();
                $("#log_display").hide();
                $("#inscription_display").show();
                $("#login_form").slideDown(800);
				
				$$.utils.forms.resize();

                return false;
            });

            $("#reset_pass").click(function(){
				$("#form_reset_pass #numero_siret").val("");
                $("#msg_reset_pass").dialog( "open" );
				
                return false;
            });

            $("#msg_success_subscribe").dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
                        window.location.reload();
                    }
                }]
            });

            $("#msg_account_exist").dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
                    }
                }]
            });
			
			<?php if(strpos($_SERVER['SERVER_NAME'], "crystalcommande") !== false){ ?>
					$("#msg_redirect").dialog({
						autoOpen: true,
						modal: true
					});
			
			<?php } ?>

            $("#msg_reset_pass").dialog({
                autoOpen: false,
                modal: true,
                resizable: false,
                width: 400,
                buttons: {
                    "Annuler": function() {
                       $(this).dialog( "close" );
                    },
                    "Envoyer la demande": function() {
						var diag = $(this);
                        $.ajax({
                            type: "POST",
                            url: "/index/sendMailresetPass",
                            data: $("#form_reset_pass").serialize(),
                            success: function(data){
                                if(data!=""){
                                    if(data == "numero_siret_does_not_exist"){
                                        $("#error_numero_finess").dialog("open");
                                    }
                                    else if(data == "empty_numero_siret"){
                                        $("#error_numero_finess_empty").dialog("open");
                                    }
                                }else{
                                    diag.dialog( "close" );
									$("#success_numero_finess").dialog("open");
								}
                            }
                        });
                    }
                },
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "blind",
                    duration: 500
                }
            });
        });
	</script>

    <?php
    }

        include_once('message_error.php');
    ?>

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html> */ ?>