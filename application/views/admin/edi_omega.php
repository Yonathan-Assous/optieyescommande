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
                    <h4 class="page-title m-b-10 pull-left">EDI Omega</h4>
                    <div class="pull-right" style="padding-bottom: 6px">
                    	<a class="btn btn-danger pull-left m-r-10" id="envoi_commande_omega" rel="1"><i class="zmdi zmdi-shopping-cart m-r-5"></i> Envoyer les commandes</a>
                    </div>    
                </div>
                
                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes Fabrication</h4>
						Liste des Clients dans l'EDI : <div id="listeMag"></div>
                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr>
                            	<th>Infos</th>
                                <th>Commande opticien</th>
                                <th>Commande Omega</th>
                                <th>Envoyer</th>
                            </tr>
                            </thead>
                        </table>
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
</style>

<script>
    var resizefunc = [];
</script>

<!-- Datatables-->
<script src="static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="static/assets/plugins/datatables/jszip.min.js"></script>
<script src="static/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="static/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="static/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="static/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

<!-- Modal-Effect -->
<script src="static/assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="static/assets/plugins/custombox/dist/legacy.min.js"></script>

<!-- Datatable init js -->
<script src="static/assets/pages/jquery.datatables.init.js"></script>

<script>
	$(document).ready(function() {
		$.ajax({
					type: "POST",
					url: "/admin/getMagEdi",
					data: {},
					dataType: "json",
					success: function (data) {	
					//console.log(data);
					var d = "";
					$.each(data, function(key, value){
						d = d+value.id_users+",";
					});
					$('#listeMag').html(d);
			
					}
			
				});
        var table = $('#datatable').DataTable({
            ajax: { url: "/admin/edi_omega_ajax", dataSrc: 'aaData' },
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "Tout"]
            ],
            paging: false,
            deferRender: true,
            ordering: false,
            columnDefs: [{
                "targets": "_all",
                "createdCell": function (td, cellData, rowData, row, col) {
                    $(td).find('.tooltipster').tooltip();
                }
            }],
            "createdRow": function ( row, data, index ) {
               /* if ( data[1].length > 20 ) {
                    $('td', row).eq(1).addClass('highlight-ref');
                    if($('td', row).eq(1).find('.reject_ec').length == 0) {
                        $('td', row).eq(1).addClass('rejected');
                    }
                }*/

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
		<?php
		if(isset($_GET['id']))
		{?>
       setTimeout(function(){
	   scrollToAnchor('<?php echo $_GET['id'];?>');
	   }, 5000);
	   <?php }?>
	function scrollToAnchor(aid){
			var aTag = $("a[id='"+ aid +"']");
			$('html,body').animate({scrollTop: aTag.offset().top},'slow');
		}
    });
    TableManageButtons.init();
    
    $(document).on('click', '.delete-order-edi', function() {

        var order_id = $(this).attr('rel');

        swal({
            title: "Etes-vous sûr ?",
            text: "Voulez-vous vraiment supprimer la commande N°"+order_id+" ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui",
            cancelButtonText: "Annuler",
            closeOnConfirm: false,
            closeOnCancel: true },
            function(isConfirm){
                if (isConfirm) {

                    $.ajax({
                        type: "POST",
                        url: "/admin/delete_order_edi",
                        data : "id_commande="+order_id,
                        success: function(data){

                            swal({
                                type: 'success',
                                title: "Effectué",
                                text: "La commande a bien été supprimée.",
                                timer: 2000,
                                showConfirmButton: false
                            });
						setTimeout(function() { 
							window.location.replace("/admin/edi_omega"); }, 2000);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            swal({
                                tyoe: 'error',
                                title: "Erreur",
                                text: "Une erreur est survenue lors de la suppression.",
                                timer: 2000,
                                showConfirmButton: false
                            });

                        }
                    });
                }
            });



    });
	
</script>

<?php include_once('footer.php'); ?>

