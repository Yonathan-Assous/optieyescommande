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
                    <div class="card-box">
						<h4>Montures - Passer un commande</h4>
                        <div class="montures-order card-box card-tabs clearfix">

                        <form id="order">
							<div class="step" id="collections" data-value="">
								<p class="type_commande">Choisissez une collection</p>
								<div class="data collections list"></div>
                       		</div>
                            <div class="step hidden" id="montures" data-value="">
								<p class="type_commande">Choisissez votre monture</p>
								<div class="data montures list"></div>
								<br><br>
								
                        	</div>
							<div class="step"  data-value="">
                        		<a class="btn btn-warning btn-lg disabled" id="enter_ref_client">Passer au recapitulatif de commande</a>
							</div>
							
							<div class="step hidden" id="ref">
                                <div class="form-group">
                                    <label for="client_ref">Référence client</label>
                                    <input type="text" class="form-control" id="ref_client" name="ref_client" maxlength="14"><a class="btn btn-warning btn-lg" id="validateOrder">OK</a>
                                    <p class="helper-text"><b>14</b> Caractères restants</p>
                                </div>
                            </div>

                        </form>


                        <div class="tab-content">

                            <div class="preview-order"></div>



                        </div>
                    </div>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>

        $.fn.scrollView = function () {
            return this.each(function () {
                $('html, body').animate({
                    scrollTop: $(this).offset().top
                }, 200);
            });
        }
		
		
		 $(document).ready(function() {
		 var data = {
                
            };
			 
		 
			 
		$.ajax({
                type: "POST",
                url: "/index/can_montures_order",
                data: data
            }).done(function (data) {
			 console.log("Can order: "+data);
			    if(data == "1")
				{
                	$('#enter_ref_client').removeClass('disabled');
				}
            }); 
			 
		 $.ajax({
                type: "POST",
                url: "/index/get_collections",
                data: data
            }).done(function (data) {
			 console.log(data);
                $('#collections > .data').html(data).scrollView();
            });
		 });
		
		$('#ref').on('keyup', 'input', function() {

            var el = $(this);
            var step = el.closest('.step');
            var length = $(this).val().length;

            var rest = 14-length;

            step.find('.helper-text b').text(rest);

            if(length > 0) {
                step.next('.step').removeClass('hidden').scrollView();
            }

        });
		
		$('.step').on('click', '.product-select', function() { 
			var el = $(this);
            var step = el.closest('.step');
            var item = el.closest('.item');

            step.find('.item').removeClass('selected');
            item.addClass('selected');

            step.nextAll('.step').addClass('hidden');
            step.next('.step').removeClass('hidden').find('li').removeClass('active');

            $.ajax({
                type: "POST",
                url: "/index/get_montures",
                data: { 'id': el.attr('rel') }
            }).done(function (data) {
                $('#montures .data').html(data).scrollView();
            });
		}).on('click', '.monture-select', function() { 
			var el = $(this);
            var step = el.closest('.step');
            var item = el.closest('.item');

            step.find('.item').removeClass('selected');
            item.addClass('selected');

            step.nextAll('.step').addClass('hidden');
            step.next('.step').removeClass('hidden').find('li').removeClass('active');

			
            //var formData = $('form#order').serializeArray();
			$.ajax({
                type: "POST",
                url: "/index/add_montures_to_order",
                data: { 'id': el.attr('rel') }
            }).done(function (data) {
				
				
				swal({
                        title: "Commande de Montures",
                   		text: "l'ajout a bien été effectué",
                        type: "success",
                        showCancelButton: false,
                   		showConfirmButton: false,
                   		timer: 2000,
                    }/*, function () {
					    $('.preview-order').html(data).scrollView();
                        window.location.reload();
                    }*/);
				setTimeout("window.location.reload()",2000);
            });

            

        }).on('click', '#enter_ref_client', function() {

            var el = $(this);
            var step = el.closest('.step');
            var item = el.closest('.item');
			step.nextAll('.step').addClass('hidden');
            step.next('.step').removeClass('hidden').find('li').removeClass('active');
		   

        }).on('click', '#validateOrder', function() {

            var formData = $('form#order').serializeArray();
           $.ajax({
                type: "POST",
                url: "/index/set_montures_order",
                data: {'ref_client' : $('#ref_client').val()}
            }).done(function (data) {
                $('.preview-order').html(data).scrollView();
            });

        })
		
		$('.preview-order').on('click', '.btn.createOrder', function() {

            $.ajax({
                type: "POST",
                url: "/index/add_montures_order",
                data: { }
            }).done(function (data) {

                if(data!="" && data == "not_logged")
                    window.location.reload();
                else if(data == "erreur"){
                    swal({
                        title: "Une erreur est survenue",
                        text: "Un problème technique est survenu lors de votre commande et celle-ci n'a pu être prise en compte. euillez la renouveler où nous contacter si le problème persiste. Merci.",
                        type: "error",
                        showCancelButton: true,
                        confirmButtonClass: 'btn-danger waves-effect waves-light',
                        confirmButtonText: 'Fermer'
                    });
                }else{
                    swal({
                        title: "Commande validée",
                        text: "Votre commande à été ajouté avec succès, vous pouvez suivre son évolution depuis la page \"Mes commandes\"",
                        type: "success",
                        confirmButtonClass: 'btn-warning',
                        confirmButtonText: "Ok",
                        closeOnConfirm: false
                    }, function () {
                        window.location.reload();
                    });
                }

            });

        });
    </script>



<?php include_once('footer.php'); ?>