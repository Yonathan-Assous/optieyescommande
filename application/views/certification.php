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
						<h4 class="page-title m-b-10">Demande de certification éléctronique de BL</h4>
					</div>
				</div>


                <div class="card-box clearfix">

                    <p>Pour certifier nos BL electroniquement, merci de bien vouloir nous l’envoyer par le biais de cette application.<br /><strong>Vous le recevrez par mail sous 48 heures ouvrées maximum.</strong></p>

                    <?php echo form_open_multipart('index/certification');?>

                        <?php
                            if(isset($status) && $status == 'email_sent') {
                                echo '<div class="alert alert-success">Votre document a bien été transmis, nous vous répondrons sous 48 heures ouvrées.</div>';
                            }
                            elseif(isset($status) && $status == 'email_error') {
                                echo '<div class="alert alert-error">Une erreur est survenue, veuillez réesayer plus tard.</div>';
                            }
                            else {
                                echo '<div class="alert alert-info">Attention, nous n\'acceptons que les fichiers au format PDF</div>';
                            }
                        ?>

                        <input type="file" name="doc" class="form-control m-b-15 m-t-15" accept="application/pdf" />

                        <button type="submit" id="sendDocument" class="btn btn-warning" disabled="disabled">Envoyer le document</button>

                    </form>

                    <script>

                        $('input[type="file"]').on('change', function() {
                            var input = $(this);
                            if (input.val() != '') {
                                $('#sendDocument').attr('disabled', false);
                            }
                            else {
                                $('#sendDocument').attr('disabled', 'disabled');
                            }
                        });

                    </script>

                </div>


			</div> <!-- container -->
		</div> <!-- content -->



	<?php include_once('footer.php'); ?>