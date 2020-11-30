<div class="settings-content" data-width=650>

    <div class="content info-user">
        <div id="settings-1">
            <form action="">

                <?php
                $optionTarif = "";

                for($prix_livraison=0;$prix_livraison<=10;$prix_livraison+=0.5){
                    $optionTarif .= '<option value="'.$prix_livraison.'" '.($prix_livraison == $info_user[0]->tarif_livraison ? 'selected' : '').'>'.$prix_livraison.'</option>';
                }

                ?>

                <table class="info">
                    <tr>
                        <td><label for="email">Email :</label>
                            <input type="text" name="email" value="<?php echo $info_user[0]->email; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nom_societe">Nom société :</label>
                            <input type="text" name="nom_societe" value="<?php echo $info_user[0]->nom_societe; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td>
                            <label for="nom_magasin">Nom magasin :</label>
                            <input type="text" name="nom_magasin" value="<?php echo $info_user[0]->nom_magasin; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="adresse">Adresse :</label>
                            <input type="text" name="adresse" value="<?php echo $info_user[0]->adresse; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td>
                            <label for="adresse">Région :</label>
                            <span><?php echo $region; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cp">Code Postal :</label>
                            <input type="text" name="cp" value="<?php echo $info_user[0]->cp; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td>
                            <label for="ville">Ville :</label>
                            <input type="text" name="ville" value="<?php echo $info_user[0]->ville; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tel_fixe">Téléphone Fixe :</label>
                            <input type="text" name="tel_fixe" value="<?php echo $info_user[0]->tel_fixe; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td>
                            <label for="tel_fax">Téléphone Fax :</label>
                            <input type="text" name="tel_fax" value="<?php echo $info_user[0]->tel_fax; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="numero_siret">Numéro siret :</label>
                            <input type="text" name="numero_siret" value="<?php echo $info_user[0]->numero_siret; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td>
                            <label for="tva_intracom">Numéro Tva Intracommunautaire :</label>
                            <input type="text" name="tva_intracom" value="<?php echo $info_user[0]->tva_intracom; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="num_finess">Numéro Finess :</label>
                            <input type="text" name="num_finess" value="<?php echo $info_user[0]->num_finess; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                        <td>
                            <label for="num_finess">Responsable magasin :</label>
                            <input type="text" name="nom_responsable" value="<?php echo $info_user[0]->nom_responsable; ?>" />
                            <img src="/static/img/icons/packs/fugue/24x24/disk-black.png" class="icon">
                        </td>
                    </tr>

                    <tr>
                        <td><label for="">Tarif livraison :</label> <span><select id="tarif_livraison_<?php echo $info_user[0]->id_users ?>" name="tarif_livraison_<?php echo $info_user[0]->id_users ?>"  class="chzn-select"><?php echo $optionTarif ?></select></span></td>
                        <td>

                            <label for="">Pourcentage casse</label>
                            <span><select id="taux_erreur_<?php echo $info_user[0]->id_users ?>" name="taux_erreur_<?php echo $info_user[0]->id_users ?>" class="chzn-select">
                                <?php

                                    for($i=1;$i <= 10; ++$i) {
                                        echo '<option value="'.$i.'" '.($info_user[0]->taux_erreur == $i ? 'selected="selected"' : '').'>'.$i.'</option>';

                                        if($i < 10) {
                                            echo '<option value="'.round($i+0.5, 1).'" '.($info_user[0]->taux_erreur == round($i+0.5, 1) ? 'selected="selected"' : '').'>'.round($i+0.5, 1).'</option>';
                                        }

                                    }

                                ?>

                            </select></span>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Grille tarifaire</label>
                            <span><select id="grilleTarifaire_<?php echo $info_user[0]->id_users ?>" name="grilleTarifaire_<?php echo $info_user[0]->id_users ?>" class="chzn-select">
                                <option value="1" <?php echo (1 == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '') ?>>Grille 1</option>
                                <option value="2" <?php echo (2 == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '') ?>>Grille 2</option>
                                <option value="3" <?php echo (3 == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '') ?>>Grille 3</option>
                                <option value="4" <?php echo (4 == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '') ?>>Grille 4</option>
                                <option value="5" <?php echo (5 == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '') ?>>Grille 5</option>
                                <option value="6" <?php echo (6 == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '') ?>>Grille 6</option>
                            </select></span>
                        </td>
                        <td>
                            <label for="">Téléchargeable</label>
                            <span><select id="grilleTelechargeable_<?php echo $info_user[0]->id_users ?>" name="grilleTelechargeable_<?php echo $info_user[0]->id_users ?>" class="chzn-select">
                                <option value="1" <?php echo ($info_user[0]->grille_telechargeable == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                                <option value="0" <?php echo ($info_user[0]->grille_telechargeable == 0 ? 'selected="selected"' : '') ?>>Non</option>
                            </select></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Commentaires</label>
                            <span><select id="commentaire_<?php echo $info_user[0]->id_users ?>" name="commentaire_<?php echo $info_user[0]->id_users ?>" class="chzn-select">
                                <option value="1" <?php echo ($info_user[0]->show_commentaire == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                                <option value="0" <?php echo ($info_user[0]->show_commentaire == 0 ? 'selected="selected"' : '') ?>>Non</option>
                            </select></td></span>
                        </td>
                        <td>

                            <label for="">Commande suspendue</label>
                            <span><select id="commandesuspendue_<?php echo $info_user[0]->id_users ?>" name="commandesuspendue_<?php echo $info_user[0]->id_users ?>" class="chzn-select">
                                <option value="0" <?php echo ($info_user[0]->commande_suspendue == 0 ? 'selected="selected"' : '') ?>>Non</option>
                                <option value="1" <?php echo ($info_user[0]->commande_suspendue == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                            </select></span>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">RIB</label>
                            <?php
                                if($info_user[0]->document_rib != NULL) {
                                    echo 'RIB Validé';
                                }
                                else {
                                    echo 'Pas encore de RIB';
                                }
                            ?>
                        </td>
                        <td>
                            <label for="">Mot de passe</label>
                            <a class="button new_pass" href="<?php echo $info_user[0]->id_users.'#'.$info_user[0]->pass ?>">Renouveler</a>
                        </td>
                    </tr>
                </table>








            </form>
        </div><!-- End of #settings-1 -->

    </div><!-- End of .content -->

</div><!-- End of settings dialog -->

<script>

    $("#settings-1").on("click",".new_pass", function(){
        var a = $(this), num_magasin = a.attr('href').split('#')[0];
        if(confirm('Générer un nouveau mot de passe pour le magasin '+num_magasin+' ?')){
            var secure = a.attr('href').split('#')[1];

            $("#secure").val(secure);
            $("#href_data").val(a.attr('href'));
            $("#send_mail_pass").dialog("open");
        }
        return false;
    });

    $('#settings-1').on('click', '.icon', function() {

        var field = $(this).siblings('input').attr('name');
        var value = $(this).siblings('input').val();
        var icon = $(this);

        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users=<?php echo $info_user[0]->id_users ?>&"+field+"="+value,
            success: function(data){
                icon.attr('src', '/static/img/icons/packs/fugue/24x24/tick.png');
                setTimeout(function() {
                    icon.attr('src', '/static/img/icons/packs/fugue/24x24/disk-black.png');
                }, 2000);
            },
            error:function(){
                icon.attr('src', '/static/img/icons/packs/fugue/24x24/cross.png');
                setTimeout(function() {
                    icon.attr('src', '/static/img/icons/packs/fugue/24x24/disk-black.png');
                }, 2000);
            }
        });

    });

    $("#settings-1").on("change","select[name^=taux_erreur_]", function(){
        var id_users = $(this).attr("id").split("_")[2], taux_erreur = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users="+id_users+"&taux_erreur="+taux_erreur,
            success: function(data){
                $("#message_valider").fadeIn().delay(1000).fadeOut();
            },
            error:function(){
                $("#message_non_valider").fadeIn();
            }
        });
    });

    $("#settings-1").on("change","select[name^=grilleTarifaire_]", function(){
        var id_users = $(this).attr("id").split("_")[1], id_grille_tarifaire = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users="+id_users+"&id_grille_tarifaire="+id_grille_tarifaire,
            success: function(data){
                $("#message_valider").fadeIn().delay(1000).fadeOut();
            },
            error:function(){
                $("#message_non_valider").fadeIn();
            }
        });
    });

    $("#settings-1").on("change","select[name^=grilleTelechargeable_]", function(){
        var id_users = $(this).attr("id").split("_")[1], grille_telechargeable = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users="+id_users+"&grille_telechargeable="+grille_telechargeable,
            success: function(data){
                $("#message_valider").fadeIn().delay(1000).fadeOut();
            },
            error:function(){
                $("#message_non_valider").fadeIn();
            }
        });
    });

    $("#settings-1").on("change","select[name^=commandesuspendue_]", function(){
        var id_users = $(this).attr("id").split("_")[1], value_suspension = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users="+id_users+"&commande_suspendue="+value_suspension,
            success: function(data){
                $("#message_valider").fadeIn().delay(1000).fadeOut();
            },
            error:function(){
                $("#message_non_valider").fadeIn();
            }
        });
    });

    $("#settings-1").on("change","select[name^=tarif_livraison_]", function(){
        var id_users = $(this).attr("id").split("_")[2], tarif_livraison = $(this).val();

        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users="+id_users+"&tarif_livraison="+tarif_livraison,
            success: function(data){
                $("#message_valider").fadeIn().delay(1000).fadeOut();
            },
            error:function(){
                $("#message_non_valider").fadeIn();
            }
        });
    });

    $("#settings-1").on("change","#active_commentaire", function(){
        if($(this).is(':checked')){
            statut = 1
        }else{
            statut = 0;
        }

        $.ajax({
            type: "POST",
            url: "/admin/statutCommentaire",
            data:"active="+statut,
            success: function(){
                if(statut == 1)
                    $("#commentaire_active").fadeIn().delay(1000).fadeOut();
                else
                    $("#commentaire_desactive").fadeIn().delay(1000).fadeOut();
            }
        });
        return false;
    });

    $("#settings-1").on("click",".new_pass", function(){
        var a = $(this), num_magasin = a.attr('href').split('#')[0];
        if(confirm('Générer un nouveau mot de passe pour le magasin '+num_magasin+' ?')){
            var secure = a.attr('href').split('#')[1];

            $("#secure").val(secure);
            $("#href_data").val(a.attr('href'));
            $("#send_mail_pass").dialog("open");
        }
        return false;
    });

    $("#settings-1").on("change","select[id^=commentaire_]", function(){
        var id_users = $(this).attr("id").split("_")[1], show_commentaire = $(this).val();
        $.ajax({
            type: "POST",
            url: "/admin/updateUser",
            data : "id_users="+id_users+"&show_commentaire="+show_commentaire,
            success: function(){
                if(show_commentaire == 1)
                    $("#commentaire_active").fadeIn().delay(1000).fadeOut();
                else
                    $("#commentaire_desactive").fadeIn().delay(1000).fadeOut();
            }
        });
        return false;
    });

    $("#settings-1").on("click",".new_rib", function(){
        $("#progressbar").hide();
        $("#new_rib_magasin,#new_file_rib").val("");

        $("#new_rib").dialog("open");

        return false;
    });

    var files = "", isNewRib = false;
    var progressLabel = $("#progress-label");
    var progressbar = $('#progress').progressbar({
        change: function() {
            progressLabel.text( progressbar.progressbar( "value" ) + " %" );
        }
    });

    $("#new_rib").on("change","#new_file_rib", function(e){
        files = e.target.files;
        progressbar.progressbar( "option", {value: 0});
        $("#msg_progress").text('');
    });

    $("#new_rib").on("click","#new_rib_valider", function(e){
        if($("#new_rib_magasin").val()!=""){
            if(files !=""){
                $("#progressbar").fadeOut();

                var id_users = $("#new_rib_magasin").val();
                e.stopPropagation();
                e.preventDefault();

                var data = new FormData();
                $.each(files, function(key, value){
                    data.append('new_file_rib', value);
                });

                progressbar.progressbar( "option", {value: 0});

                $("#msg_progress").text('Ajout du rib en cours...');
                $("#progressbar").fadeIn();
                $.ajax({
                    xhr: function(){
                        if(window.ActiveXObject){
                            return new window.ActiveXObject("Microsoft.XMLHTTP");
                        }else{
                            var xhr = new window.XMLHttpRequest();
                            //Upload progress
                            xhr.upload.addEventListener("progress", function(evt){
                                if (evt.lengthComputable) {
                                    var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                                    progressbar.progressbar( "option", {value: percentComplete});
                                }
                            }, false);
                            //Download progress
                            xhr.addEventListener("progress", function(evt){
                                if (evt.lengthComputable) {
                                    var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                                    progressbar.progressbar( "option", {value: percentComplete});
                                }
                            }, false);
                        }
                        return xhr;
                    },
                    url: '/admin/upload_file/new_file_rib?update_admin=1&id_users='+id_users,
                    type: 'POST',
                    data: data,
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data, textStatus, jqXHR){
                        if(typeof data.error === 'undefined') {
                            progressbar.progressbar( "option", {value: 100});
                            $("#msg_progress").text('Nouveau rib ajouté');
                            isNewRib = true;
                        }
                        else if(data.error == "error_type_file"){
                            $("#msg_progress").text('Le type de fichier est non valide');
                        }
                        else{
                            $("#msg_progress").text('Une erreur est survenue');
                            console.log('ERRORS: ' + data.error);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log('ERRORS: ' + textStatus);
                    }
                });
            }
        }else{
            alert("Entrer un numéro magasin");
        }

        return false;
    });

    $("#info_user,#new_pass_user").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 600,
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        }
    });


    $("#send_mail_pass").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 370,
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        },
        buttons: [{
            text: "Générer",
            click: function() {
                var secure = $("#secure").val();
                $.ajax({
                    type: "POST",
                    url: "/admin/new_pass",
                    dataType:'json',
                    success: function(data){
                        $.ajax({
                            type: "POST",
                            url: "/admin/updatePass",
                            data:"secure="+secure+"&new_pass="+data.new_pass+"&sendPass="+$("input[name=sendPass]:checked").val(),
                            success: function(data2){
                                table.dataTable().fnReloadAjax();
                                $("#send_mail_pass").dialog("close");
                            }
                        });
                    }
                });
            }
        }]
    });


    $("#new_rib").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 370,
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        },
        close:function(){
            if(isNewRib){
                table.dataTable().fnReloadAjax();
                isNewRib = false;
            }
        }
    });

</script>