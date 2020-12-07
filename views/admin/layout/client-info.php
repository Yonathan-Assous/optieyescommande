<?php

    $optionTarif = "";

    for($prix_livraison=0;$prix_livraison<=10;$prix_livraison+=0.5){
        $optionTarif .= '<option value="'.$prix_livraison.'" '.($prix_livraison == $info_user[0]->tarif_livraison ? 'selected' : '').'>'.$prix_livraison.' €</option>';
    }

    $fields = array(
        'informations' => array(
            'nom_societe' => array('title' => 'Nom de la société', 'col' => 6),
            'nom_magasin' => array('title' => 'Nom du magasin', 'col' => 6),
            'adresse' => array('title' => 'Adresse', 'col' => 12),
            'cp' => array('title' => 'Code postal', 'col' => 6),
            'ville' => array('title' => 'Ville', 'col' => 6),
            'numero_siret' => array('title' => 'Numéro SIRET', 'col' => 12),
            'tva_intracom' => array('title' => 'Numéro TVA', 'col' => 12),
            'num_finess' => array('title' => 'Numéro Finess', 'col' => 12),
        ),
        'contact' => array(
            'nom_responsable' =>  array('title' => 'Nom du résponsable', 'col' => 12),
            'email' =>  array('title' => 'Adresse email', 'col' => 12),
            'tel_fixe' =>  array('title' => 'Téléphone fixe', 'col' => 12),
            'tel_fax' =>  array('title' => 'Téléphone fax', 'col' => 12),
        )
    );

?>

<h4 class="modal-title">Client #<?php echo $info_user[0]->id_users ?> - <span class="text-muted"><?php echo $info_user[0]->nom_societe; ?></span></h4>

<form id="updateUser" action="#" method="POST">

    <input type="hidden" name="user" value="<?php echo $info_user[0]->id_users ?>" />

    <ul class="nav nav-tabs navtab-bg nav-justified">
        <li class="active">
            <a href="#user-modal-info" data-toggle="tab" aria-expanded="false">
                <span>Société</span>
            </a>
        </li>
        <li class="">
            <a href="#user-modal-contact" data-toggle="tab" aria-expanded="false">
                <span>Contact</span>
            </a>
        </li>
        <li class="">
            <a href="#user-modal-param" data-toggle="tab" aria-expanded="false">
                <span>Paramètres</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">



        <div class="tab-pane active" id="user-modal-info">
            <div class="row">
                <?php
                foreach($fields['informations'] as $k => $v) {

                    echo '<div class="form-group m-b-10 col-sm-'.$v['col'].'">
                        <label for="'.$k.'" class="control-label">'.$v['title'].'</label>
                        <input type="text" class="form-control" id="'.$k.'" name="'.$k.'" value="'.$info_user[0]->$k.'">
                    </div>';

                }
                ?>
            </div>
        </div>


        <div class="tab-pane" id="user-modal-contact">
            <div class="row">
                <?php
                foreach($fields['contact'] as $k => $v) {

                    echo '<div class="form-group m-b-10 col-sm-'.$v['col'].'">
                            <label for="'.$k.'" class="control-label">'.$v['title'].'</label>
                            <input type="text" class="form-control" id="'.$k.'" name="'.$k.'" value="'.$info_user[0]->$k.'">
                        </div>';

                }
                ?>
            </div>
        </div>

        <div class="tab-pane" id="user-modal-param">
            <div class="row">

                <div class="form-group m-b-10 col-sm-12">
                    <label for="jour_prelevement" class="control-label">Jour de prélèvement</label>
                    <select id="jour_prelevement" name="jour_prelevement"  class="form-control">
                        <?php 
                            for($i=1;$i<29;++$i) {
                                echo '<option value="'.$i.'" '.($info_user[0]->jour_prelevement == $i ? 'selected="selected"' : '').'>'.$i.'</option>';
                            }
                        ?>
                    </select>
                </div>
                
                <div class="form-group m-b-10 col-sm-12">
                    <label for="tarif_livraison" class="control-label">Tarif livraison</label>
                    <select id="tarif_livraison" name="tarif_livraison"  class="form-control"><?php echo $optionTarif ?></select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="tarif_packaging" class="control-label">Tarif packaging</label>
                    <input type="text" id="tarif_packaging" name="tarif_packaging"  class="form-control" value="<?php echo $info_user[0]->tarif_packaging ?>" />
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="tarif_supplement" class="control-label">Supplément sur les verres</label>
                    <input type="text" id="tarif_supplement" name="tarif_supplement"  class="form-control" value="<?php echo $info_user[0]->tarif_supplement ?>" />
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="taux_erreur" class="control-label">Pourcentage casse</label>
                    <select id="taux_erreur" name="taux_erreur"  class="form-control">
                        <?php
                        for($i=1;$i <= 10; ++$i) {
                            echo '<option value="'.$i.'" '.($info_user[0]->taux_erreur == $i ? 'selected="selected"' : '').'>'.$i.' %</option>';
                            if($i < 10) {
                                echo '<option value="'.round($i+0.5, 1).'" '.($info_user[0]->taux_erreur == round($i+0.5, 1) ? 'selected="selected"' : '').'>'.round($i+0.5, 1).' %</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="id_grille_tarifaire" class="control-label">Grille tarifaire</label>
                    <select id="id_grille_tarifaire" name="id_grille_tarifaire"  class="form-control">
                        <?php
                        for($i=1;$i <= 6; ++$i) {
                            echo '<option value="'.$i.'" '.($i == $info_user[0]->id_grille_tarifaire ? 'selected="selected"' : '').'>Grille '.$i.'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="show_commentaire" class="control-label">Activer les commentaires</label>
                    <select id="show_commentaire" name="show_commentaire" class="form-control">
                        <option value="1" <?php echo ($info_user[0]->show_commentaire == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                        <option value="0" <?php echo ($info_user[0]->show_commentaire == 0 ? 'selected="selected"' : '') ?>>Non</option>
                    </select>
                </div>

                <div class="form-group m-b-10 col-sm-12">
                    <label for="commande_suspendue" class="control-label">Suspendre les commandes</label>
                    <select id="commande_suspendue" name="commande_suspendue" class="form-control">
                        <option value="1" <?php echo ($info_user[0]->commande_suspendue == 1 ? 'selected="selected"' : '') ?>>Oui</option>
                        <option value="0" <?php echo ($info_user[0]->commande_suspendue == 0 ? 'selected="selected"' : '') ?>>Non</option>
                    </select>
                </div>


                <div class="form-group m-b-10 col-sm-12">
                    <label for="new_password" class="control-label">Envoyer un nouveau mot de passe</label>
                    <input type="text" id="new_password" class="form-control" value="" />
                    <a class="btn btn-warning btn-block waves-effect" id="sendNewPassword">Envoyer le mot de passe</a>
                </div>

            </div>
        </div>



    </div>

    <div class="modal-footer m-b-10">
        <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-warning waves-effect waves-light">Mettre à jour</button>
    </div>

</form>

<script>

    $('#sendNewPassword').on('click', function() {

        $.ajax({
            type: "POST",
            url: "/admin/send_new_password",
            data: {
                'user_id' : <?php echo $info_user[0]->id_users ?>,
                'password' : $('#new_password').val()
            },
            success: function(data){

                var res = $.parseJSON(data);

                if(res.status == 'ok') {

                    swal({
                        title: "Mot de passe à jour",
                        type: "success",
                        text: "Lt mot de passe a bien été mis à jour",
                        timer: 2000,
                        showConfirmButton: false
                    });

                }

            }
        });

    });

</script>