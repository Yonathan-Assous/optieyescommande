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
							<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>" />
							<div class="step" id="collections" data-value="">
								<p class="type_commande">Choisissez une collection</p>
								<div class="data collections list"></div>
                       		</div>
                            <div class="step hidden" id="montures" data-value="">
								<p class="type_commande" id="titreChoisirMontures" style="display: inline;">Choisissez votre monture</p>
								<div style="float: right">Recherche par model <input type="text" name="recherche" id="recherche" value=""></div>
									<div class="data montures list"></div>
								<br><br>
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
		 var data = {};
			 
		$("#recherche").on("keyup", function() {
			var value = $(this).val().toUpperCase();
			if(value!="")
				{
					$(".montures .item").hide();
					//$(".montures ."+value).show();
					$('[class^="item '+value+'"]').show();
				}
			else
				{
					$(".montures .item").show();
				}
		  });
		
		$.ajax({
                type: "POST",
                url: "/index/get_packs",
                data: data
            }).done(function (data) {
			 console.log(data);
                $('#packs > .data').html(data).scrollView();
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
		
		
		$('.step').on('click', '.product-select', function() { 
			var el = $(this);
            var step = el.closest('.step');
            var item = el.closest('.item');
			console.log(el.attr('rel'));
            step.find('.item').removeClass('selected');
            item.addClass('selected');

            step.nextAll('.step').addClass('hidden');
            //step.next('.step').removeClass('hidden').find('li').removeClass('active');
			
			var action = el.attr('rel')
			
			if (action.indexOf("voir_pack") >= 0)
			{
				$('#titreChoisirMontures').text('Liste des montures du pack')
				$.ajax({
                type: "POST",
                url: "/index/get_montures",
                data: { 'id': el.attr('rel'),
					  'user_id':<?php echo $user_id;?>}
            }).done(function (data) {
				 $('#montures').removeClass('hidden').scrollView();
                $('#montures .data').html(data).scrollView();
            });
			}
			else if (action.indexOf("add_pack") >= 0)
			{
				$.ajax({
                type: "POST",
                url: "/index/add_pack_to_order",
                data: { 'id': el.attr('rel') }
				}).done(function (data) {
					swal({
							title: "Votre Pack a bien été ajoutée au panier",
							text: "",
							type: "success",
							showCancelButton: false,
							showConfirmButton: false,
							timer: 2000,
						}/*, function () {
							$('.preview-order').html(data).scrollView();
							window.location.reload();
						}*/);
					//setTimeout("window.location.reload()",2000);
				   var formData = $('form#order').serializeArray();
				   $.ajax({
						type: "POST",
						url: "/index/set_montures_order",
						data: {}
					}).done(function (data) {
						$('.preview-order').html(data);//.scrollView();
					    $('#order').addClass('hide');
					    $("#ref_client").focus();
					});
				});
			}
			else
			{
				$('#titreChoisirMontures').text('Choisissez votre monture')
				$.ajax({
                type: "POST",
                url: "/index/get_montures",
                data: { 'id': el.attr('rel') }
            }).done(function (data) {
				 $('#montures').removeClass('hidden').scrollView();
                $('#montures .data').html(data).scrollView();
            });
			}
			
            
		}).on('click', '.monture-select', function() { 
			var el = $(this);
            var step = el.closest('.step');
            var item = el.closest('.item');

            step.find('.item').removeClass('selected');
            item.addClass('selected');

            step.nextAll('.step').addClass('hidden');
            step.next('.step').removeClass('hidden').find('li').removeClass('active');

			
			$.ajax({
                type: "POST",
                url: "/index/add_montures_to_order",
                data: { 'id': el.attr('rel') }
            }).done(function (data) {
				swal({
                        title: "Votre Monture a bien été ajouté au panier",
                   		text: "",
                        type: "success",
                        showCancelButton: false,
                   		showConfirmButton: false,
                   		timer: 2000,
                    }/*, function () {
					    $('.preview-order').html(data).scrollView();
                        window.location.reload();
                    }*/);
				   var formData = $('form#order').serializeArray();
				   $.ajax({
						type: "POST",
						url: "/index/set_montures_order",
						data: {}
					}).done(function (data) {
						$('.preview-order').html(data);//.scrollView();
					   $('#order').addClass('hide');
					   $("#ref_client").focus();
					});
				//setTimeout("window.location.reload()",2000);
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
                data: {}
            }).done(function (data) {
                $('.preview-order').html(data).scrollView();
            });

        })
		
		$('.preview-order').on('click', '.btn.createOrder', function() {

            $.ajax({
                type: "POST",
                url: "/index/add_montures_order",
                data: {'ref_client' : $('#ref_client').val()}
            }).done(function (data) {
				console.log(data);
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
		
		$('.preview-order').on('click', '.btn.createOrder_avec_verre', function() {

            $.ajax({
                type: "POST",
                url: "/index/add_verre_to_temp_montures_order/",
                data: {'ref_client' : $('#ref_client').val()}
            }).done(function (data) {
				window.location.replace("/index/passer_commande/");
            });

        });
    </script>



<?php include_once('footer.php'); ?>