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
                    <h4 class="page-title m-b-20"><?php echo $user_info->nom_societe; ?> <span class="siret">Magasin N° <?php echo $user_info->id_users; ?></span></h4>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <div class="row">

                            <form id="profileUpdate" class="form-horizontal profile-form" role="form">

                                <h4 class="header-title m-t-0 m-b-30">Informations de votre compte</h4>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="nom_societe" class="col-sm-3 control-label">Nom de la société</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nom_societe" name="nom_societe" placeholder="Nom societe" value="<?php echo $user_info->nom_societe; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nom_magasin" class="col-sm-3 control-label">Nom du magasin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nom_magasin" name="nom_magasin" placeholder="Nom magasin" value="<?php echo $user_info->nom_magasin; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="numero_siret" class="col-sm-3 control-label">Numéro siret</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="numero_siret" name="numero_siret" placeholder="Numéro siret" value="<?php echo $user_info->numero_siret; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tva_intracom" class="col-sm-3 control-label">Numéro Tva Intracommunautaire</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tva_intracom" name="tva_intracom" placeholder="Numéro Tva Intracommunautaire" value="<?php echo $user_info->tva_intracom; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="num_finess" class="col-sm-3 control-label">Numéro Finess</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="num_finess" name="num_finess" placeholder="Numéro Finess" value="<?php echo $user_info->num_finess; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nom_responsable" class="col-sm-3 control-label">Responsable magasin</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nom_responsable"  name="nom_responsable" placeholder="Responsable magasin" value="<?php echo $user_info->nom_responsable; ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">


                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_info->email; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="adresse" class="col-sm-3 control-label">Adresse</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="<?php echo $user_info->adresse; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cp" class="col-sm-3 control-label">Code Postal</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cp" name="cp" placeholder="Code Postal" value="<?php echo $user_info->cp; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ville" class="col-sm-3 control-label">Ville</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="<?php echo $user_info->ville; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tel_fixe" class="col-sm-3 control-label">Téléphone Fixe</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tel_fixe" name="tel_fixe" placeholder="Téléphone Fixe" value="<?php echo $user_info->tel_fixe; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <label for="tel_fax" class="col-sm-3 control-label">Téléphone Fax</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tel_fax" name="tel_fax" placeholder="Téléphone Fax" value="<?php echo $user_info->tel_fax; ?>">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-warning btn-lg pull-right"><i class="fa fa-pencil"></i>  Mettre à jour les informations</button>

                                </div>

                            </form>

                        </div>


                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!-- content -->

    <script>


        $('#profileUpdate').on('submit', function(e) {

            e.preventDefault();

            $.post('/index/updateProfile', $(this).serialize(), function(data) {
                var res = $.parseJSON(data);

                if(res.status == '') {
                    toastr["info"]("Vos informations ont bien été mises à jour", "Informations mises à jour");
                }
            });


        });


        jQuery(function($) {

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }



            $(".restriction").on('click', function(){

                var value = $(this).attr('rel');

                $('#restriction_status').val(value);
                $('#restrict').modal('show');


            });
        });
    </script>

    <?php include_once('footer.php'); ?>

