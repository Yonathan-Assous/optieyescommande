<?php
include_once('header.php');
include_once('menu.php');

if(isset($_POST['password']) && $_POST['password']=='1141')
{
    $_SESSION['login'] = true;
}

if(!isset($_SESSION['login']))
{
    ?>
    <div style="width: 285px;
    height: auto;
    margin: auto;
    margin-top: 150px;
    padding: 20px;
    border: 1px solid #bbb;">
        <form name='input' action='' method='post'>
            <div style="width: 100%;float: left; margin-bottom: 20px"><div style="width:105px;float: left"><label for='password'>Mot de passe: </label></div><div style="width:180px;float:left" ><input type='password' value='' id='password' name='password' /></div>
                <div class='error'><?php
                    if(isset($passError))
                        echo $passError;?></div></div>
            <input type='submit' value='Connexion' name='sub' style="margin-left:84px" />
        </form>
    </div>
    <?php
}
else
{
?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-sm-12">
                    <h4 class="page-title m-b-20">Variations factures clients</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="annee_variation"> Année </label>
                            <select id="annee_variation" class="form-control">
                                <option value="">Choisissez</option>
                                <?php
                                $annee_actuelle = date('Y');
                                for($annee = 2013;$annee <= $annee_actuelle;$annee++){
                                    echo '<option value="'.$annee.'">'.$annee.'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="numero_magasin"> Magasin </label>
                            <select id="numero_magasin" class="form-control">
                                <option value="">Choisissez</option>
                                <?php
                                for($user = 3;$user <= $maxUser;$user++){
                                    echo '<option value="'.$user.'">'.$user.'</option>';
                                }
                                ?>
                            </select>
                        </div>

                    </div>


                </div>


                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Variation factures</h4>

                        <div id="variation_factures">
                            <table id="tab" class="variation_factures"></table>
                        </div>
                        
                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>
        var resizefunc = [];
    </script>

    <!-- Datatables-->
    <script src="/static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/static/assets/plugins/datatables/jszip.min.js"></script>
    <script src="/static/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="/static/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="/static/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/static/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Modal-Effect -->
    <script src="/static/assets/plugins/custombox/dist/custombox.min.js"></script>
    <script src="/static/assets/plugins/custombox/dist/legacy.min.js"></script>

    <!-- Datatable init js -->
    <script src="/static/assets/pages/jquery.datatables.init.js"></script>

    <script>

        $(document).ready(function() {

            $(".content").on("change","#annee_variation,#numero_magasin", function(){
                if($("#annee_variation").val()!="")
                    $.ajax({
                        type: "POST",
                        url: "/admin/variations_facture_clients_ajax",
                        data : "annee="+$("#annee_variation").val()+"&numero_magasin="+$("#numero_magasin").val(),
                        success: function(data){
                            $("#tab").html(data);
                        }
                    });
            });

        });

        TableManageButtons.init();

    </script>


    <?php
    }
    include_once('footer.php'); ?>

