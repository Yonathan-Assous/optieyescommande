
<?php include_once('header.php'); ?>
<body>

<!-- ----------------- -->
<!-- Some dialogs etc. -->

<?php include_once('content.php'); ?>

<!--  End of Add Client Example Dialog -->

<?php include_once('message.php'); ?>

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

    <div id="info_user" title="Informations Magasin" style="display:none"></div>
    <div id="new_pass_user" title="Nouveau mot de passe" style="display:none">
        <p style="text-align:center;font-size:14px;font-weight:bold">Nouveau mot de passe pour le magasin <span id="num_magasin"></span> :</p>
        <p style="text-align:center;font-size:24px;"></p>
    </div>

    <div id="send_mail_pass" title="Envoyer le mot de passe par mail" style="display:none">
        <form class="validate no-style">
            <input type="hidden" value="" id="secure" />
            <input type="radio" value="1" name="sendPass" checked /> Oui <br>
            <input type="radio" value="0" name="sendPass" /> Non
        </form>
    </div>
    <!-- Here goes the content. -->
    <section id="content" class="container_12 clearfix">
        <div class="grid_12">
            <div class="box">
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png">Liste utilisateurs</h2>
                </div>
                <div class="content">
                    <div class="tabletools">
                        <div class="left">
                            <div class="alert success sticky" style="display:none" id="message_valider">
                                <span class="icon"></span>
                                <strong>Profil mise à jour</strong>
                            </div>
                            <div class="alert error sticky" style="display:none" id="message_non_valider">
                                <span class="icon"></span>
                                <strong>Une erreur est survenue</strong>
                            </div>
                            <div class="alert success sticky" style="display:none" id="commentaire_active">
                                <span class="icon"></span>
                                <strong>Commentaire activé</strong>
                            </div>
                            <div class="alert error sticky" style="display:none" id="commentaire_desactive">
                                <span class="icon"></span>
                                <strong>Commentaire désactivé</strong>
                            </div>
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <table id="tab" class="styled">
                        <thead>
                        <tr>
                            <th style="width: 19px;">Plus d'informations</th>
                            <th style="width: 19px;">Commander</th>
                            <th style="width: 50px;">Erreur / Casse</th>
                            <th>Numéro magasin</th>
                            <th>Ville</th>
                            <th>Nom Société</th>
                            <th>Nom Magasin</th>
                            <th>Date inscription</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End of .grid_4 -->
    </section><!-- End of #content -->
</div><!-- End of #main -->

<script>
    var table, select = "";

    var commentaire_actif = "<?php echo $commentaire_actif->active; ?>";

    $$.ready(function() {
        table = $('#tab').table({
            tableTools: {
                display: true
            },
            filterBar : 'always',
            lang : {
                "SHOW_ENTRIES" : "<?php echo $parametre_lang_datable['SHOW_ENTRIES']; ?>",
                "SEARCH": "<?php echo $parametre_lang_datable['SEARCH']; ?>"
            },
            dataTable: {
                "bProcessing": true,
                "bAutoWidth": false,
                "bRetrieve" : true,
                "sAjaxSource" : "/admin/users_ajax",
                "aaSorting" : [ [0, "desc"] ],
                "fnDrawCallback": function( oSettings ){
                    $(".chzn-select").chosen({
                        disable_search_threshold: 20,
                        allow_single_deselect: true,
                        width:'100%'
                    });
                },
                "aoColumnDefs" : [{
                    "sClass": "center",
                    "aTargets": [ "_all" ]
                }],
                "oLanguage" : {
                    "sProcessing" : "Chargement...",
                    "sEmptyTable": "<?php echo $parametre_lang_datable['sEmptyTable']; ?>",
                    "oPaginate" : {
                        "sLast" : "<?php echo $parametre_lang_datable['sLast']; ?>",
                        "sFirst" : "<?php echo $parametre_lang_datable['sFirst']; ?>"
                    },
                    "sInfoEmpty" : "<?php echo $parametre_lang_datable['sInfoEmpty']; ?>",
                    "sInfo": "<?php echo $parametre_lang_datable['sInfo']; ?>",
                    "sInfoFiltered" : "<?php echo $parametre_lang_datable['sInfoFiltered']; ?>",
                    "sZeroRecords" : "<?php echo $parametre_lang_datable['sZeroRecords']; ?>"
                }
            }
        });

        select += '<div style="float:left;margin-left:50px">Numéro Magasin <select id="recherche_num_magasin">';
        select += '<option value="Tous">Tous</option>';

        for(var i = 2; i<= <?php echo $maxUser; ?>; i++)
            select += '<option value="'+i+'">'+i+'</option>';

        select += "</select> </div>";

        select += '<div style="float:left;margin-left:40px">Mandat <select id="recherche_rib">';
        select += '<option value="0">Tous</option>';
        select += '<option value="2">Validé</option>';
        select += '<option value="1">Non validé</option>';
        select += "</select> </div>";

        select += '<div style="float:left;margin-left:40px">Supprimés <select id="deleted">';
        select += '<option value="0">Non</option>';
        select += '<option value="1">Oui</option>';
        select += "</select> </div>";


        $(".dataTables_filter").after(select);

        $(".dataTables_filter").after('<div style="position:absolute;left:65%"><input type="checkbox"  value="" id="active_commentaire" '+ (commentaire_actif == 1 ? 'checked' : '' )+'/> Activer/Désactiver les commentaires</div>');


    });

    var loading = '<img src="static/img/elements/loading/spinner.gif" style="width: 32px;height: 32px;" /> Chargement...';

    $("#content").on("click","table .info_user",function(){
        $.ajax({
            type: "POST",
            url: $(this).attr('href'),
            beforeSend: function(){
                $("#info_user").dialog("open");
                $("#info_user").empty().append(loading);
            },
            success: function(data){
                $("#info_user").empty().append(data);
            }
        });

        return false;
    });

    $("#content").on("change", "#recherche_num_magasin", function(){
        table.dataTable().fnReloadAjax("/admin/users_ajax?id_users="+$(this).val());
    });

    $("#content").on("change", "#recherche_rib", function(){
        table.dataTable().fnReloadAjax("/admin/users_ajax?rib="+$(this).val()+"&deleted="+$('#deleted').val());
    });

    $("#content").on("change", "#deleted", function(){
        table.dataTable().fnReloadAjax("/admin/users_ajax?deleted="+$(this).val()+"&rib="+$('#recherche_rib').val());
    });

    $("#content").on("change","select[name^=grilleTarifaire_]", function(){
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

    $("#content").on("change","select[name^=grilleTelechargeable_]", function(){
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

    $("#content").on("change","select[name^=commandesuspendue_]", function(){
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

    $("#content").on("change","select[name^=tarif_livraison_]", function(){
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

    $("#content").on("change","#active_commentaire", function(){
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

    $("#content").on("change","select[id^=commentaire_]", function(){
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

    $("#content").on("click",".new_rib", function(){
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

<?php include_once('footer.php'); ?>

</body>
</html>