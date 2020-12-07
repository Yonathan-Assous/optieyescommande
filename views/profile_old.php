<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title m-b-20">Votre profil</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">

                            <h4 class="header-title m-t-0 m-b-30"><?php echo $user_info->nom_societe; ?> - SIRET <?php echo $user_info->numero_siret; ?></h4>


                        </div>
                    </div><!-- end col -->
                </div>


            </div> <!-- container -->
        </div> <!-- content -->

        <?php include_once('footer.php'); ?>

    
    <!-- The settings dialog -->
    <?php /* <div id="settings" class="settings-content" data-width=450>
    
        <ul class="tabs center-elements">
            <li><a href="#settings-1"><img src="<?php echo $pre_url;?>static/img/icons/packs/fugue/24x24/user-business.png" alt="" /><span>Paramètre du compte</span></a></li>
        </ul>
        
        <div class="change_password" style="margin-top:120px;">
            <form action="/index/updatePass" method="POST" class="validate" id="settings_password">
				<input type="hidden" value="<?php echo $user_info->pass ?>" name="secure"/>
                <p>
                    <label>Nouveau mot de passe :</label> <input type="password" id="new_pass" class="required small" name="new_pass"/>
                </p>
            </form>
            <div class="actions">
                <div class="right">
                    <input form="settings_password" type="reset" value="Cancel" class="grey" />
                    <input form="settings_password" type="submit" value="OK" />
                </div>
            </div>
        </div><!-- End of .change_password -->
        
        <div class="content">
        
            <div id="settings-1">
                <form action="#" class="validate">
                    <input type="hidden" value="<?php echo $pre_url;?>index/updateProfile" id="action" />
                    <p>

                    </p>
					<p>
              
                    </p>
                    <p>
                      
                
             
                    
                    <p>
          
                      
                    <

                    <p class="divider"></p>
                    <p>
                        <label for="pass">Mot de passe : </label> <input class="grey change_password_button" type="button" id="pass" value="Changer mot de passe..." data-lang-changed="Password changed" />
                    </p>
                </form>
            </div><!-- End of #settings-1 -->
        </div><!-- End of .content -->
        
        <div class="actions">
            <div class="left">
                <button class="grey cancel">Annuler</button>
            </div>
            <div class="right">
                <button class="save">Enregistrer</button>
                <button class="hide saving" disabled >Enregistrement...</button>
            </div>
        </div><!-- End of .actions -->
        
    </div><!-- End of settings dialog --> */?>

                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30"><?php echo $user_info->nom_societe; ?> - SIRET <?php echo $user_info->numero_siret; ?></h4>


                    </div>
                </div><!-- end col -->





                <?php /*<div class="details grid_12">
                <h2>Informations</h2>
                <a href="javascript:$$.settings();"><span class="icon icon-pencil"></span>Mettre à jour les informations</a>
                <section>
                <table>
                <tr>
                <th>Nom société :</th><td><?php echo $user_info->nom_societe; ?></td>
                </tr>
                <tr>
                <th>Nom magasin : </th><td><i><?php echo $user_info->nom_magasin; ?></i></td>
                </tr>
                <tr>
                <th>Email :</th><td><?php echo $user_info->email; ?></td>
                </tr>
                <tr>
                <th>Adresse :</th><td><?php echo $user_info->adresse; ?></td>
                </tr>
                <tr>
                <th>Code Postal :</th><td><?php echo $user_info->cp; ?></td>
                </tr>
                <tr>
                <th>Ville :</th><td><?php echo $user_info->ville; ?></td>
                </tr>
                <tr>
                <th>Téléphone Fixe :</th><td><?php echo $user_info->tel_fixe; ?></td>
                </tr>
                <tr>
                <th>Téléphone Fax :</th><td><?php echo $user_info->tel_fax; ?></td>
                </tr>
                <tr>
                <th>Numéro siret :</th><td><?php echo $user_info->numero_siret; ?></td>
                </tr>
                <tr>
                <th>Numéro Tva Intracommunautaire :</th><td><?php echo $user_info->tva_intracom; ?></td>
                </tr>
                <tr>
                <th>Numéro Finess :</th><td><?php echo $user_info->num_finess; ?></td>
                </tr>
                <tr>
                <th>Responsable magasin :</th><td><?php echo $user_info->nom_responsable; ?></td>
                </tr>

                </table>
                </section>
                </div><!-- End of .details -->

                <div class="details grid_12" style="margin-top: 10px">
                <b>Souhaitez-vous bloquer par mot de passe l'accès aux factures et au profil ? (Attention, une fois bloqué, vous n'aurez plus accès au tarif en ligne lors des commandes que vous passez)</b>
                <span style="margin-left: 15px;">
                <input type="radio" name="acces" id="acces_oui" value="1" style="padding-left:10px" <?php echo $user_info->restriction_compte == 1 ? 'checked="checked"': ""; ?> /><label for="acces_oui">Oui</label>
                </span>
                <span style="margin-left: 10px;">
                <input type="radio" name="acces" id="acces_non" value="0" <?php echo $user_info->restriction_compte == 0 ? 'checked="checked"': ""; ?> /><label for="acces_non">Non</label>
                </span>
                <br />
                <b>Demandez votre mot de passe à votre commercial.</b>
                <div class="alert success sticky" style="padding-left: 15px;width:105px;position:absolute;left:1060px;top:-13px;display: none;" id="message"><span class="icon"></span><span id="message_acces" style="padding-left: 8px"></span></div>
                </div>

                <div class="clearfix"></div>
                <div class="divider"></div>

                <div class="details grid_12">
                <?php
                if($user_info->document_rib == "" || $user_info->valid_document_rib == 2){

                echo '<section>';

                if($user_info->valid_document_rib == 2){

                echo '<div class="alert error sticky no-margin-top">
                <strong>Attention !</strong> Votre rib n\'a pas été validé, car il n\'est pas conforme. Merci de nous renvoyer un exemplaire valide.
                </div>';

                }
                else{

                echo '<div class="alert error sticky no-margin-top">
                <strong>Attention !</strong> Vous n\'avez pas encore envoyé votre RIB ! Vous n\'aurez accès à la partie commande qu\'une fois celui-ci envoyé.
                </div>';

                }


                echo  '<form action="'.$pre_url.'index/upload" enctype="multipart/form-data" method="post" class="box validate ready" novalidate="novalidate" id="up">
                <table>';

                if(isset($error)){
                echo '<tr>
                <td></td><td><label for="v2_charrange" generated="true" class="error inline" style="top: -15px;">'.$error.'</label></td>
                </tr>';
                }

                echo '<tr>
                <th>Upload du RIB : </th><td><input type="file" name="upload_file_rib" /></td><td><input type="submit" value="Envoyer" name="submit" id="Envoyer"></td>
                </tr>
                <tr style="display: none;" id="error_rib">
                <th></th>
                <td><label class="error inline">Vous devez sélectionner un rib à envoyer.</label></td>
                </tr>';


                echo '<tr>
                <th></th>
                <td>(Fichier PDF ou JPG seulement acceptés)</td>
                </tr>
                </table>
                </form>
                </section>';

                }elseif($user_info->valid_document_rib == 0){

                echo '<div class="alert warning sticky no-margin-top">
                <span class="icon"></span>
                <strong>Attention !</strong> Vous pourrez passer commande une fois votre RIB validé, le délais de validation est d\'environ 1h...
                </div>';


                }else{
                echo '<div class="alert success sticky">
                <span class="icon"></span>
                <strong>Votre RIB à bien été validé !</strong>
                </div>';
                }

                ?>
                </div>


                <div class="clearfix"></div>
                <div class="divider"></div>

                <div class="grid_12">
                <a href="javascript:void(0);" class="button red right" id="delete-confirm">Supprimer mon compte</a>
                </div>

                <div id="dialog-delete-confirm" style="display: none;" title="Supprimer mon compte">
                <p>Etes-vous sur de vouloir supprimer votre compte ?</p>
                <p>Attention cette action est irréversible.</p>
                </div>
                </div>

                <script>
                $$.ready(function() {
                $("#Envoyer").click(function(){
                var submit = true,name = "";

                $("#up").find('input[type=file]').each(function(){
                if($(this).val() == ""){
                name = $(this).attr('name').split('_')[2];
                $("#error_"+name).show();
                submit = false;
                }
                });

                if(!submit)
                return false;
                });

                $("input[name=acces]").click(function(){
                if(!$(this).is(":checked")){
                var value = $(this).val();
                $.ajax({
                type: "POST",
                url: "/index/updateAcces",
                data : "restriction_compte="+value,
                success: function(data){
                var text = value == 0 ? "Désactivé" : "Activé";
                $("#message_acces").text("Blocage "+ text);
                $("#message").fadeIn().delay(1000).fadeOut();
                },
                error:function(){
                $("#message_acces").text("Une erreur est survenue");
                $("#message").fadeIn();
                }
                });
                }
                });

                $( "#profile-dialog" ).dialog({
                autoOpen: false,
                modal: true,
                width: 400,
                open: function(){ $(this).parent().css('overflow', 'visible'); $$.utils.forms.resize() }
                }).find('button.submit').click(function(){
                var $el = $(this).parents('.ui-dialog-content');
                if ($el.validate().form()) {
                $el.dialog('close');
                }
                }).end().find('button.cancel').click(function(){
                var $el = $(this).parents('.ui-dialog-content');
                $el.find('form')[0].reset();
                $el.dialog('close');;
                });

                $( ".open-profile-dialog" ).click(function() {
                $( "#profile-dialog" ).dialog( "open" );
                return false;
                });

                $( "#delete-confirm" ).click(function() {
                $("#dialog-delete-confirm").dialog("open");
                return false;
                });

                $("#dialog-delete-confirm").dialog({
                resizable: false,
                modal: true,
                width: 320,
                buttons: {
                "Je confirme ma désinscription": function() {
                $.ajax({
                type: "POST",
                url: "/index/unsubscribe",
                success: function(){
                window.location.reload();
                }
                });
                },
                "Annuler": function() {
                $(this).dialog( "close" );
                }
                },
                autoOpen: false,
                show: {
                effect: "blind",
                duration: 1000
                },
                hide: {
                effect: "blind",
                duration: 1000
                }
                });
                });
                </script>
                </section><!-- End of #content -->
                </div><!-- End of #main --> */ ?>
