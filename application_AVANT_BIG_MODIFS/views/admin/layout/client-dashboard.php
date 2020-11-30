<h4 class="modal-title">Tableau de bord - <span class="text-muted">Client #<?php echo $info_user[0]->id_users ?> - <?php echo $info_user[0]->nom_societe; ?></span></h4>

<form id="updateUserDashboard" action="#" method="POST">

    <input type="hidden" name="user" value="<?php echo $info_user[0]->id_users ?>" />

    <div class="m-t-15">

        <div class="m-b-25">

            <label>Historique client</label>
            <select id="clientHistoryYear" class="form-control">
                <option value="">Choisissez</option>
                <?php
                $annee_actuelle = date('Y');
                for($annee = 2013;$annee <= $annee_actuelle;$annee++){
                    echo '<option value="'.$annee.'" '.($annee == $annee_actuelle ? 'selected="selected"' : '').'>'.$annee.'</option>';
                }
                ?>
            </select>

            <div id="clientHistory" class="m-t-10 m-b-20">
                <table></table>
            </div>

        </div>

        <h5>Contact principal / Gestionnaire des achats</h5>

        <div class="row m-t-10">

            <div class="col-md-6">
                <label for="main_contact_name" class="control-label">Nom du contact</label>
                <input type="text" id="main_contact_name" name="main_contact_name"  class="form-control" value="<?php echo $info_user[0]->main_contact_name ?>" />
            </div>

            <div class="col-md-6">
                <label for="main_contact_number" class="control-label">Numéro du contact</label>
                <input type="text" id="main_contact_number" name="main_contact_number"  class="form-control" value="<?php echo $info_user[0]->main_contact_number ?>" />
            </div>

        </div>

        <div class="m-t-20">
            <label for="referral" class="control-label">Vient de la part de / groupement</label>
            <input type="text" id="referral" name="referral"  class="form-control" value="<?php echo $info_user[0]->referral ?>" />
        </div>

        <div class="m-t-20">
            <label for="client_history" class="control-label">Historique du client depuis son inscription</label>
            <textarea id="client_history" name="client_history"  class="form-control"><?php echo $info_user[0]->client_history ?></textarea>
        </div>

        <div class="row m-t-20">

            <div class="col-md-6">
                <label for="commercial_objectives" class="control-label">Prise de RDV, Objectifs, Suivi commercial</label>
                <textarea id="commercial_objectives" name="commercial_objectives"  class="form-control"><?php echo $info_user[0]->commercial_objectives ?></textarea>
            </div>

            <div class="col-md-6">
                <label for="hotline_info" class="control-label">Informations importantes de la hotline</label>
                <textarea id="hotline_info" name="hotline_info"  class="form-control"><?php echo $info_user[0]->hotline_info ?></textarea>
            </div>

        </div>

    </div>

    <div class="modal-footer m-b-10">
        <button class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-warning waves-effect waves-light">Mettre à jour</button>
    </div>

</form>

<script>

    if($("#clientHistoryYear").val()!="") {
        $.ajax({
            type: "POST",
            url: "/admin/variations_facture_clients_ajax",
            data: "annee=" + $("#clientHistoryYear").val() + "&client_set=1&numero_magasin=<?php echo $info_user[0]->id_users ?>",
            success: function (data) {
                $("#clientHistory").find('table').html(data);
            }
        });
    }

    $("#user-dashboard").on("change","#clientHistoryYear", function(){

        if($("#clientHistoryYear").val()!="") {
            $.ajax({
                type: "POST",
                url: "/admin/variations_facture_clients_ajax",
                data: "annee=" + $("#clientHistoryYear").val() + "&client_set=1&numero_magasin=<?php echo $info_user[0]->id_users ?>",
                success: function (data) {
                    $("#clientHistory").find('table').html(data);
                }
            });
        }
    });

</script>