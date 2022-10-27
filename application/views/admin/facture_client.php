<?php
include_once('header.php');
include_once('menu.php');

if(isset($_POST['password']) && $_POST['password']=='5566')
{
	$_SESSION['login'] = true;
}

if(!isset($_SESSION['login']) || $_SESSION['login'] != true) 
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
                    <h4 class="page-title m-b-10">Factures clients</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="recherche_num_magasin"> Magasin </label>
                            <select id="recherche_num_magasin" class="form-control">
                                <option value="">Tous</option>
                                <?php
                                for($i = 2; $i <= $maxUser; ++$i) {
                                    echo  '<option value="'.$i.'">'.$i.'</option>'."\n";
                                }
                                ?>

                            </select>
                        </div>


                        <div class="col-sm-2">
                            <label class="m-b-10" for="mois_facture"> Mois </label>
                            <select name="mois_facture" id="mois_facture" class="form-control">
                                <?php
                                    for($mois=1;$mois <= 12; $mois++){
                                        $mois = $mois < 10 ? '0'.$mois : $mois;
                                        echo '<option value="'.$mois.'" '.(date('m') == $mois ? "selected" : '').'>'.$mois.'</option>'."\n";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label class="m-b-10" for="annee_facture"> Année </label>
                            <select name="annee_facture" id="annee_facture" class="form-control">
                                <?php
                                    for($annee=2013;$annee <= date('Y'); $annee++) {
                                        echo '<option value="'.$annee.'" '.(date('Y') == $annee ? 'selected' : '').'>'.$annee.'</option>'."\n";
                                    }
                                ?>
                            </select>
                        </div>

                        </div>

                    </div>


                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-0">Liste des factures</h4>

                        <div class="row">

                            <div class="col-md-offset-3 col-sm-6 col-md-3">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <h2 class="text-warning" id="total-ht"></h2>
                                        <h5>Total HT</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <h2 class="text-warning" id="total-liv"></h2>
                                        <h5>Sans livraison</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <table id="datatable" class="table table-striped dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Numéro magasin</th>
                                <th>Nom magasin</th>
                                <th>Nom société</th>
                                <th>Mois</th>
                                <th>Montant HT</th>
                                <th>Montant TTC</th>
                                <th>Montant HT Lentilles</th>
								<th>Montant HT Montures</th>
                                <th>Montant HT Stock</th>
                                <th>Montant HT Fabrique</th>
                                <th>Remises spéciales</th>
                                <th>Tarif livraison</th>
                                <th>Détails</th>
                                <th>Remise</th>
                            </tr>
                            </thead>
                        </table>


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

            var table = $('#datatable').DataTable({
                ajax: { url: "/admin/facture_client_ajax/<?php echo date('m-Y'); ?>", dataSrc: 'aaData' },
                deferRender: true,
                ordering: false,
                language: {
                    "lengthMenu": "Afficher _MENU_ factures par page",
                    "zeroRecords": "Aucune facture trouvée",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucune facture à afficher",
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

            $.post('/admin/facture_client_ajax/<?php echo date('m-Y'); ?>', function(data) {
                var res = $.parseJSON(data);
                $('#total-ht').html(res.totals['ht']+' €');
                $('#total-liv').html(res.totals['liv']+' €');
            });


            $('#recherche_num_magasin, #mois_facture, #annee_facture').on('change', function() {
                table.ajax.url('/admin/facture_client_ajax/'+$("#mois_facture").val()+'-'+$("#annee_facture").val()+'/'+$('#recherche_num_magasin').val()).load();

                $.post('/admin/facture_client_ajax/'+$("#mois_facture").val()+'-'+$("#annee_facture").val()+'/'+$('#recherche_num_magasin').val(), function(data) {
                    var res = $.parseJSON(data);
                    $('#total-ht').html(res.totals['ht']+' €');
                    $('#total-liv').html(res.totals['liv']+' €');
                });

            });


        });

        TableManageButtons.init();

    </script>

    <?php 
}
	include_once('footer.php'); ?>

