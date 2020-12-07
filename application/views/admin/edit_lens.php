<?php
include_once('header.php');
include_once('menu.php');
?>

    <div class="content-page lens-add">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <?php if(isset($msg)) { echo $msg; } ?>

                        <div class="lens-order card-box card-tabs clearfix">

                        <form method="post">
                            <input type="hidden" name="remove" value="1" />
                            <button type="submit" class="btn btn-danger pull-right">Supprimer cette lentille</button>
                        </form>

                        <form method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            <h3>Informations</h3>

                            <div class="form-group">
                                <label for="name">Nom des lentilles</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $lens_data[0]->name ?>">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" size="20" />
                            </div>

                            <div class="form-group">

                                <?php if('' !== $lens_data[0]->image) {
                                    echo '<img src="'.site_url('uploads/'.$lens_data[0]->image).'" class="lens_image" />';
                                } ?>

                                <input type="checkbox" value="1" name="remove_image" id="remove_image" /> <label class="control-label" for="remove_image"> Cocher pour supprimer l'image</label>
                            </div>

                            <div class="form-group">
                                <label for="packaging">Lentilles par boite</label>
                                <input type="text" class="form-control" id="packaging" name="packaging" value="<?php echo $lens_data[0]->packaging ?>">
                            </div>

                            <div class="form-group">
                                <label for="packaging">Prix par boite</label>
                                <p>Le prix sera appliqué à toutes les grilles, vous pourrez les modifier dans la page correspondante</p>
                                <input type="text" class="form-control" id="price" name="price" value="<?php echo $lens->price ?>" />
                            </div>

                            <div class="form-group">
                                <label for="generation_id">Type de lentilles</label>
                                <select name="generation_id" class="form-control">
                                    <?php
                                        foreach($lens_generations as $gen) {
                                            echo '<option value="'.$gen->id.'" '.($lens_data[0]->generation_id == $gen->id ? 'selected' : '').'>'.$gen->name.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="generation_id">Marque</label>
                                <select name="brand_id" class="form-control">
                                    <?php
                                    foreach($lens_brands as $brand) {
                                        echo '<option value="'.$brand->id.'" '.($lens_data[0]->brand_id == $brand->id ? 'selected' : '').'>'.$brand->name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" value="1" name="progressive" id="progressive" <?php echo $lens_data[0]->progressive == 1 ? 'checked' : '' ?> /> <label class="control-label" for="progressive"> Progressives</label>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" value="1" name="toric" id="toric" <?php echo $lens_data[0]->toric == 1 ? 'checked' : '' ?> /> <label class="control-label" for="toric"> Toriques</label>
                            </div>


                            <?php
                                $build = json_decode($lens_data[0]->data, true);
                            ?>

                            <h3>Corrections</h3>

                            <?php foreach($config['attrs'] as $k => $v): ?>


                                <div class="form-group">

                                    <label for="<?php echo $k ?>_type"><?php echo $v ?></label>

                                    <select class="correction_type form-control" data-option="<?php echo $k ?>" name="option[<?php echo $k ?>]" id="<?php echo $k ?>_type">
                                        <option value="none" <?php if(false === $build[$k]['type']) { echo 'selected'; } ?>>Sans</option>
                                        <option value="list" <?php if('list' === $build[$k]['type']) { echo 'selected'; } ?>>Liste de valeurs</option>
                                        <option value="range" <?php if('range' === $build[$k]['type']) { echo 'selected'; } ?>>Plages de valeurs</option>
                                    </select>

                                    <div class="<?php echo $k ?>_list <?php if('list' !== $build[$k]['type']) { echo 'hidden'; } ?> option-selector">
                                        <label for="<?php echo $k ?>_list">Données</label>

                                        <input type="text" class="form-control" id="<?php echo $k ?>_list" name="data[<?php echo $k ?>][list]" value="<?php if('list' === $build[$k]['type']) { echo implode(',', $build[$k]['data']); } ?>">

                                    </div>

                                    <div class="<?php echo $k ?>_range <?php if('range' !== $build[$k]['type']) { echo 'hidden'; } ?> option-selector">
                                        <label for="<?php echo $k ?>_range">Données</label>

                                        <p>Plages de valeur, <b>exemple</b> : -10 à -6 par pas de 0.5, puis -6 à 6 par pas de 0.25<br />Toujours commencer par valeur la plus basse</p>

                                        <?php

                                            if('range' === $build[$k]['type']) {

                                                $ranges = count($build[$k]['data']);
                                                $i = 1;

                                                foreach($build[$k]['data'] as $range_array) {

                                                    echo '<div class="form-inline '.$k.'_range" rel="1">
                                                    <div class="form-group">
                                                        <label>De</label>
                                                        <input type="text" class="form-control" name="data['.$k.'][range][start][]" value="'.$range_array['start'].'" style="width: 80px">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 25px">
                                                        <label>A</label>
                                                        <input type="text" class="form-control" name="data['.$k.'][range][end][]" value="'.$range_array['end'].'" style="width: 80px">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 25px; margin-right: 40px;">
                                                        <label>Pas</label>
                                                        <input type="text" class="form-control" name="data['.$k.'][range][step][]" value="'.$range_array['step'].'" style="width: 80px">
                                                    </div>';



                                                    echo '<a class="btn btn-default addRange '.($i < $ranges ? 'hidden' : '').'" style="margin-right: 10px;">Ajouter une plage</a>';

                                                    if($i < $ranges) {
                                                        echo '<a class="btn btn-default removeRange">Retirer</a>';
                                                    }


                                                    ++$i;

                                                    echo '</div>';

                                                }

                                            }
                                            else {

                                                echo '<div class="form-inline '.$k.'_range" rel="1">
                                                    <div class="form-group">
                                                        <label>De</label>
                                                        <input type="text" class="form-control" name="data['.$k.'>][range][start][]" style="width: 80px">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 25px">
                                                        <label>A</label>
                                                        <input type="text" class="form-control" name="data['.$k.'][range][end][]" style="width: 80px">
                                                    </div>
                                                    <div class="form-group" style="margin-left: 25px; margin-right: 40px;">
                                                        <label>Pas</label>
                                                        <input type="text" class="form-control" name="data['.$k.'][range][step][]" style="width: 80px">
                                                    </div>
                                                   
                                                    <a class="btn btn-default addRange">Ajouter une plage</a>
                                                </div>';
                                            }
                                        ?>


                                    </div>

                                    <div class="<?php echo $k ?>_range <?php if('range' !== $build[$k]['type']) { echo 'hidden'; } ?> option-selector">

                                        <label for="<?php echo $k ?>_list">Valeurs à exclure</label>
                                        <input type="text" class="form-control" id="<?php echo $k ?>_excl" name="data[<?php echo $k ?>][excl]" value="<?php if('range' === $build[$k]['type'] && isset($build[$k]['excl'])) { echo implode(',', $build[$k]['excl']); } ?>">

                                    </div>

                                </div>
                            <?php endforeach; ?>

                            <button type="submit" class="btn btn-warning">Modifier ces lentilles</button>


                        </form>


                        <div class="tab-content">

                            <div class="preview-order"></div>


                        <?php


                            /*$lens = array(
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
                            );*/

                        ?>

                        </div>
                    </div>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>

        $('.correction_type').on('change', function() {
            var parent = $(this).closest('.form-group');
            var type = $(this).val();
            var option = $(this).data('option');

            parent.find('.option-selector').addClass('hidden');
            $('.'+option+'_'+type).removeClass('hidden');
        });

        $('form').on('click', '.removeRange', function() {
            $(this).closest('.form-inline').remove();
        });

        $('form').on('click', '.addRange', function() {

            var row = $(this).closest('.form-inline');
            var parent = $(this).closest('.option-selector');

            var newRow = row.clone();

            row.find('.addRange').remove();

            newRow.find('input[type="text"]').val('');
            newRow.appendTo(parent);

            if(row.find('.removeRange').length == 0) {
                row.append('<a class="btn btn-default removeRange">Retirer</a>');
            }

        });

    </script>



<?php include_once('footer.php'); ?>