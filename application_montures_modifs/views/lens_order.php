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

                        <div class="lens-order card-box card-tabs clearfix">

                        <form id="order">

                            <div class="step" id="ref">
                                <div class="form-group">
                                    <label for="client_ref">Référence client</label>
                                    <input type="text" class="form-control" id="client_ref" name="client_ref" maxlength="14">
                                    <p class="helper-text"><b>14</b> Caractères restants</p>
                                </div>
                            </div>

                        <div class="step hidden" id="generation" data-value="">
                            <p class="type_commande">Choisissez le type de commande que vous désirez passer</p>
                            <ul class="nav nav-pills">
                                <?php
                                    if(isset($lens_generations) && !empty($lens_generations)) {
                                        foreach($lens_generations as $gen) {
                                            echo '<li><a href="#'.$gen->id.'" rel="'.$gen->id.'">'.$gen->name.'</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>

                        <div class="step hidden" id="progressive" data-value="">
                            <ul class="nav nav-pills">
                                <li><a rel="0">Non Progressives</a></li>
                                <li><a rel="1">Progressives</a></li>
                            </ul>
                        </div>

                        <div class="step hidden" id="toric" data-value="">
                            <ul class="nav nav-pills">
                                <li><a rel="0">Non Toriques</a></li>
                                <li><a rel="1">Toriques</a></li>
                            </ul>
                        </div>

                        <div class="step hidden" id="brand" data-value="">
                            <p class="type_commande">Choisissez la marque de vos lentilles</p>
                            <div class="data"></div>
                        </div>

                        <div class="step hidden" id="lens" data-value="">
                            <p class="type_commande">Choisissez votre produit</p>
                            <div class="data lens list"></div>
                        </div>

                        <div class="step hidden" id="corrections">

                            <p class="type_commande">Choisissez vos corrections</p>

                                <input type="hidden" name="user_id" value="<?php echo $user_id ?>" />
                                <div class="data"></div>

                            <?php
                                if ($commentaire_actif->active == 1 && isset($user_info->show_commentaire) && $user_info->show_commentaire == 1) {
                                    ?>
                                    <div class="form-group clearfix">
                                        <label class="control-label" for="commentaire">Commentaire (facultatif)</label>
                                        <textarea name="commentaire" id="commentaire" rows="5" class="form-control"></textarea>
                                        <div class="validator"></div>
                                    </div>
                                <?php } ?>

                            <a class="btn btn-warning btn-lg" id="validateOrder">Continuer</a>

                        </div>

                        </form>


                        <div class="tab-content">

                            <div class="preview-order"></div>


                        <?php

                            /*$props = array(
                                'sph' => array(
                                    'type' => 'range',
                                    'data' => array(
                                        0 => array(
                                            'start' => -9,
                                            'end' => -6,
                                            'step' => 0.5,
                                        ),
                                        1 => array(
                                            'start' => -6,
                                            'end' => 6,
                                            'step' => 0.25,
                                        ),
                                    )
                                ),
                                'cyl' => array(
                                    'type' => 'list',
                                    'data' => array(
                                        -0.75, -1.25, -1.75, -2.25
                                    )
                                ),
                                'axe' => array(
                                    'type' => 'range',
                                    'data' => array(
                                        0 => array(
                                            'start' => 0,
                                            'end' => 180,
                                            'step' => 10
                                        )
                                    )
                                ),
                                'ray' => false,

                            );*/


                            $lens = array(
                                'name' => 'Biomedics Toric',
                                'packaging' => '6',
                                'progressive' => 0,
                                'toric' => 1,
                                'generation_id' => 1,
                                'brand_id' => 2,
                                'props' => array(
                                    'sph' => array(
                                        'type' => 'range',
                                        'data' => array(
                                            0 => array(
                                                'start' => -9,
                                                'end' => -6,
                                                'step' => 0.5,
                                            ),
                                            1 => array(
                                                'start' => -6,
                                                'end' => 5,
                                                'step' => 0.25,
                                            ),
                                            2 => array(
                                                'start' => 5,
                                                'end' => 6,
                                                'step' => 0.5,
                                            ),
                                        ),
                                    ),
                                    'axe' => array(
                                        'type' => 'range',
                                        'data' => array(
                                            0 => array(
                                                'start' => 0,
                                                'end' => 180,
                                                'step' => 10,
                                            ),
                                        )
                                    ),
                                    'cyl' => array(
                                        'type' => 'list',
                                        'data' => array(-0.75, -1.25, -1.75, -2.25)
                                    ),
                                    'dia' => array(
                                        'type' => 'list',
                                        'data' => array(14.5)
                                    ),
                                    'ray' => array(
                                        'type' => 'list',
                                        'data' => array(8.7)
                                    ),
                                )
                            );

                            if(isset($_GET['action']) && $_GET['action'] == 'add') {

                                if($this->db->insert('lens', array(
                                    'name' => $lens['name'],
                                    'packaging' => $lens['packaging'],
                                    'progressive' => $lens['progressive'],
                                    'toric' => $lens['toric'],
                                    'generation_id' => $lens['generation_id'],
                                    'brand_id' => $lens['brand_id'],
                                ))) {

                                    $insert_id = $this->db->insert_id();

                                    $this->db->insert('lens_build', array(
                                        'lens_id' => $insert_id,
                                        'data' => json_encode($lens['props'])
                                    ));

                                    for($i=1;$i <= 6; ++$i) {

                                        $this->db->insert('lens_price', array(
                                            'lens_id' => $insert_id,
                                            'grid_id' => $i,
                                            'price' => 10
                                        ));

                                    }

                                    echo 'Lentille ajoutée';

                                }

                                echo '<pre>';
                                echo json_encode($lens['props']);
                                echo '</pre>';

                            }






                        ?>

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


        $('.step').on('click', '.nav-pills a', function() {

            var el = $(this);
            var step = el.closest('.step');
            var prop = el.attr('rel');

            el.closest('.nav-pills').find('li').removeClass('active');
            el.closest('li').addClass('active');

            el.closest('.step').data('value', prop);

            if(step.next('.step').attr('id') == 'brand') {

                var data = {
                    'generation' : $('#generation').data('value'),
                    'progressive' : $('#progressive').data('value'),
                    'toric' : $('#toric').data('value')
                };

                $.ajax({
                    type: "POST",
                    url: "/index/get_lens_brands",
                    data: data
                }).done(function (data) {
                    $('#brand > .data').html(data).scrollView();
                });

            }

            step.nextAll('.step').addClass('hidden');

            if(step.attr('id') == 'generation' && (step.data('value') == 4 || step.data('value') == 5)) {

                $('#progressive').data('value', '');
                $('#toric').data('value', '');

                var data = {
                    'generation' : parseInt($('#generation').data('value')),
                    'progressive' : '',
                    'toric' : ''
                };

                $.ajax({
                    type: "POST",
                    url: "/index/get_lens_brands",
                    data: data
                }).done(function (data) {
                    $('#brand > .data').html(data).scrollView();
                });

                $('.step#brand').removeClass('hidden').find('li').removeClass('active');
            }
            else {
                step.next('.step').removeClass('hidden').find('li').removeClass('active');
            }


        }).on('click', '.product-select', function() {

            var el = $(this);
            var step = el.closest('.step');
            var item = el.closest('.item');

            step.find('.item').removeClass('selected');
            item.addClass('selected');

            step.nextAll('.step').addClass('hidden');
            step.next('.step').removeClass('hidden').find('li').removeClass('active');

            $.ajax({
                type: "POST",
                url: "/index/get_lens_config",
                data: { 'id': el.attr('rel') }
            }).done(function (data) {
                $('#corrections .data').html(data).scrollView();
            });

        }).on('click', '#validateOrder', function() {

            var formData = $('form#order').serializeArray();

            $.ajax({
                type: "POST",
                url: "/index/set_lens_order",
                data: formData
            }).done(function (data) {
                $('.preview-order').html(data).scrollView();
            });

        }).on('change', 'input.excl', function() {

            var el = $(this);
            var side = el.closest('.side');

            if(el.is(':checked')) {
                side.siblings('.side').addClass('disabled');
            }
            else {
                side.siblings('.side').removeClass('disabled');
            }
        });



        $('#brand').on('change', 'select', function() {

            var el = $(this);
            var step = el.closest('.step');

            var data = {
                'generation' : $('#generation').data('value'),
                'progressive' : $('#progressive').data('value'),
                'brand' : el.val(),
                'toric' : $('#toric').data('value')
            };

            step.nextAll('.step').addClass('hidden');
            step.next('.step').removeClass('hidden').find('li').removeClass('active');

            $.ajax({
                type: "POST",
                url: "/index/get_lenses",
                data: data
            }).done(function (data) {
                $('#lens > .data').html(data).scrollView();
            });

        });

        $('.preview-order').on('click', '.btn.createOrder', function() {

            $.ajax({
                type: "POST",
                url: "/index/add_lens_order",
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