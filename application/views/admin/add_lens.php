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

    <div class="content-page lens-add">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        <?php if(isset($msg)) { echo $msg; } ?>

                        <?php //if(isset($lens_data) && !empty($lens_data)) { echo '<pre>'; var_dump($lens_data); echo '</pre>'; } ?>

                        <div class="lens-order card-box card-tabs clearfix">

                            <form method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            <h3>Informations</h3>

                            <div class="form-group">
                                <label for="name">Nom des lentilles</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" size="20" />
                            </div>


                            <div class="form-group">
                                <label for="packaging">Lentilles par boite</label>
                                <input type="text" class="form-control" id="packaging" name="packaging">
                            </div>

                            <div class="form-group">
                                <label for="packaging">Prix par boite</label>
                                <p>Le prix sera appliqué à toutes les grilles, vous pourrez les modifier dans la page correspondante</p>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>

                            <div class="form-group">
                                <label for="generation_id">Type de lentilles</label>
                                <select name="generation_id" class="form-control">
                                    <?php
                                        foreach($lens_generations as $gen) {
                                            echo '<option value="'.$gen->id.'">'.$gen->name.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="generation_id">Marque</label>
                                <select name="brand_id" class="form-control">
                                    <?php
                                    foreach($lens_brands as $brand) {
                                        echo '<option value="'.$brand->id.'">'.$brand->name.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" value="1" name="progressive" id="progressive" /> <label class="control-label" for="progressive"> Progressives</label>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" value="1" name="toric" id="toric" /> <label class="control-label" for="toric"> Toriques</label>
                            </div>


                            <h3>Corrections</h3>

                            <?php foreach($config['attrs'] as $k => $v): ?>
                            <div class="form-group">

                                <label for="<?php echo $k ?>_type"><?php echo $v ?></label>

                                <select class="correction_type form-control" data-option="<?php echo $k ?>" name="option[<?php echo $k ?>]" id="<?php echo $k ?>_type">
                                    <option value="none">Sans</option>
                                    <option value="list">Liste de valeurs</option>
                                    <option value="range">Plages de valeurs</option>
                                </select>

                                <div class="<?php echo $k ?>_list hidden option-selector">
                                    <label for="<?php echo $k ?>_list">Données</label>
                                    <input type="text" class="form-control" id="<?php echo $k ?>_list" name="data[<?php echo $k ?>][list]">
                                </div>

                                <div class="<?php echo $k ?>_range hidden option-selector">
                                    <label for="<?php echo $k ?>_range">Données</label>

                                    <p>Plages de valeur, <b>exemple</b> : -10 à -6 par pas de 0.5, puis -6 à 6 par pas de 0.25<br />Toujours commencer par valeur la plus basse</p>

                                    <div class="form-inline <?php echo $k ?>_range" rel="1">
                                        <div class="form-group">
                                            <label>De</label>
                                            <input type="text" class="form-control" name="data[<?php echo $k ?>][range][start][]" style="width: 80px">
                                        </div>
                                        <div class="form-group" style="margin-left: 25px">
                                            <label>A</label>
                                            <input type="text" class="form-control" name="data[<?php echo $k ?>][range][end][]" style="width: 80px">
                                        </div>
                                        <div class="form-group" style="margin-left: 25px; margin-right: 40px;">
                                            <label>Pas</label>
                                            <input type="text" class="form-control" name="data[<?php echo $k ?>][range][step][]" style="width: 80px">
                                        </div>
                                        <a class="btn btn-default addRange">Ajouter une plage</a>
                                    </div>

                                </div>

                                <div class="<?php echo $k ?>_range hidden option-selector">

                                    <label for="<?php echo $k ?>_list">Valeurs à exclure</label>
                                    <input type="text" class="form-control" id="<?php echo $k ?>_excl" name="data[<?php echo $k ?>][excl]">

                                </div>

                            </div>
                            <?php endforeach; ?>

                            <button type="submit" class="btn btn-warning">Ajouter cette lentille</button>


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
<?php
}
include_once('footer.php'); ?>