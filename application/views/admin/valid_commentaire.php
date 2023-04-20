<?php
include_once('header.php');
include_once('menu.php');

if(isset($_POST['password']) && $_POST['password']=='5566')
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
                    <div class="card-box">


                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>
                        <div class="col-sm-2" style="float: initial; margin-bottom: 22px">
                            <label class="m-b-10" for="number_commentaires"> Nombre de commentaires </label>
                            <select id="number_commentaires" class="form-control">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="all">Tous</option>
                            </select>
                        </div>
                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Détails</th>
                                <th>Référence</th>
                                <th>Bon de livraison</th>
                                <th>Type de verre</th>
                                <th>Dernières factures</th>
                                <!--<th>J-10</th>-->
                                <th>Deal</th>
                                <th>Moyenne</th>
                                <th>J-30</th>
                                <th>Tableau de bord</th>
                                <!--<th>J-90</th>-->
                                <th>Date</th>
                                <th style="max-width: 140px">Ref Client</th>
                                <th>Validation</th>
                            </tr>
                            </thead>
                        </table>
                        <div id="valid_commentaire" class="modal fade" tabindex="-1" role="dialog"
                             aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" style="width: 90%; max-width: 400px;">
                                <div class="modal-content">

<!--                                    <form id="valid_commentaire_form">-->

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Valider la commande</h4>
                                        </div>

                                        <div class="modal-body">
                                            <p>Êtes-vous sûr de vouloir valider la commande ?</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-danger waves-effect waves-light" data-dismiss="modal">No</button>
                                            <button id="confirm_commande" class="btn btn-success waves-effect waves-light" data-dismiss="modal">Yes</button>
                                        </div>
<!--                                    </form>-->

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style type="text/css">
    td.highlight-blue {
        background: rgba(135, 206, 250, 0.2) !important;
    }
    #datatable {
        width: 100% !important;
    }
    .bl_conditions_remplies {
        background-color: #95de97a3 !important;
    }
    .bl_conditions_non_remplies {
        background-color: #de9595a3 !important;
    }
    .bl_conditions_new {
        background-color: #ffe1a9 !important;
    }
</style>

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
        // $('body').on("click", function() {
        //     getCommande();
        // });
        let table;
        getCommande();
        let commandeId = 0;
        $(".content").on("click",".valid_commentaire",function() {
            commandeId = $(this).attr('data-commande');
            $('#valid_commentaire').modal('show');
        });

        function getCommande() {
            table = $('#datatable').DataTable({
                ajax: { url: "/admin/valid_commentaire_ajax", dataSrc: 'aaData' },
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                destroy: true,
                deferRender: true,
                ordering: false,
                columnDefs: [{
                    "targets": "_all",
                    "createdCell": function (td, cellData, rowData, row, col) {
                        $(td).find('.tooltipster').tooltip();
                    }
                }],
                "createdRow": function ( row, data, index ) {
                    if ( data[1].length > 20 ) {
                        $('td', row).eq(1).addClass('highlight-ref');
                        if($('td', row).eq(1).find('.reject_ec').length == 0) {
                            $('td', row).eq(1).addClass('rejected');
                        }
                    }
                    //met la couleur bl_conditions_non_remolies en rouge par exemple
                    if (data[14]) {
                        $(row).addClass(data[14]);
                    }
                },
                language: {
                    "lengthMenu": "Afficher _MENU_ commandes par page",
                    "zeroRecords": "Aucune commande trouvée",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucune commande à afficher",
                    "infoFiltered": "(Filtrat de _MAX_ entrées)",
                    "search": "Recherche",
                    "paginate": {
                        "first":      "Première",
                        "last":       "Dernière",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    }
                }
            });

        }

        $(document).on("change", "#number_commentaires", function(){
            getNumberCommentaire();
        });

        function getNumberCommentaire() {
            let numberCommentaire = $("#number_commentaires").val();
            table.ajax.url('/admin/valid_commentaire_ajax?' +
                'number_commentaires=' + numberCommentaire
            ).load();
        }

        function orderValidated(commandeId) {
            // let data_commande = '[data-commande="commandeId"]'
            let orderValidated = document.querySelector('[data-commande="' + commandeId + '"]');
            orderValidated.classList.add("hide");
        }
        $('#confirm_commande').on('click', function(e) {
            $.ajax({
                type: "POST",
                url: "/commande/confirmCommande",
                data: {
                    'commande_id': commandeId
                },
                dataType: "html",
                success: function(data){
                    //$('#datatable').DataTable().clear();
                    // getCommande();
                    orderValidated(commandeId);
                    $.ajax({
                        type: "POST",
                        url: "/commande/numCommentaire",
                        success: function(data){
                            console.log(data);
                            $("#num_commentaire").html(data);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            $("#num_commentaire").html('<div style="width:150px;text-align:center;margin-left:auto;margin-right:auto;margin-top:15%;margin-bottom:15%:color:red">Server Error : '+txtError+textStatus+" "+errorThrown+'</div>');
                        }
                    });
                },
                error: function(data){
                    alert('dsadsas');
                },
            });
            // e.preventDefault();
            // $('.reset-error').hide();
            // $.ajax({
            //     type: "POST",
            //     url: "/index/sendMailresetPass",
            //     data: $("#password_reset").serialize(),
            //     success: function(data){
            //         if(data!=""){
            //             if(data == "numero_siret_does_not_exist"){
            //                 $('.reset-error').fadeIn(100).text('Aucun compte trouvé pour ce numéro.');
            //             }
            //             else if(data == "email_not_good"){
            //                 $('p.reset-error').fadeIn(100).html("Cette adresse e-mail " +
            //                     "n’existe pas " +
            //                     "dans notre base client. Contactez nous à <a " +
            //                     "href=\"mailto:optieyescommande@gmail.com\">optieyescommande@gmail.com </a>si besoin");
            //             }
            //         }else{
            //             $('#password-reset').modal('hide');
            //
            //             swal({
            //                 title: "Réinitialisation",
            //                 text: "Un email contenant un lien de réinitialisation du mot de passe vient de vous être envoyé.",
            //                 type: "success",
            //                 showCancelButton: false,
            //                 showConfirmButton: false,
            //                 timer: 3000,
            //             });
            //         }
            //     }
            // });
        });

    });

    TableManageButtons.init();

</script>


<?php
}
 include_once('footer.php'); ?>
