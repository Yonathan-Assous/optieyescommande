<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <?php
    $commande_by = '';
    if ($by_admin == 0 && !is_null($by_admin)) {
        $commande_by = 'passé par client';
    }
    else if ($by_admin == 1) {
        $commande_by = 'passé par OptiEyes';
    }
    if($order_id !== false) {
        echo '<h4 class="modal-title">Commande N°'.$order_id.' ' . $commande_by . '</h4>';
    }
    else {
        echo '<h4 class="modal-title">Erreur</h4>';
    }
    ?>

</div>

<div class="modal-body">

<?php

    echo '
    <div class="invoice">
        <div class="details">
            <div class="highlighted">
                <span>Compte numéro : </span> <strong>'.$user_info->id_users.'</strong>
            </div>
            <div>
                <span>Réference Client : </span> <strong>'.$client_ref.'</strong>
            </div>
            <div class="highlighted">
                <span>Date : </span> <strong>'.date('d/m/Y').'</strong>
            </div>
        </div>';

        echo '<table>
                <tr>
                    <td><b>Magasin</b></td>
                    <td>'.$user_info->nom_magasin.'</td>
                </tr>
                <tr>
                    <td><b>Responsable</b></td>
                    <td>'.$user_info->nom_responsable.' - '.$user_info->tel_fixe.'</td>
                </tr>
                <tr>
                    <td><b>Contact</b></td>
                    <td>'.$user_info->email.'</td>
                </tr>
                
                
                </table>';

        echo '<table class="styled borders" id="products">
            <thead>
                <tr>
                    <th style="width: 80%">Description</th>
                    <th>Quantité</th>';

                    if($user_info->restriction_compte == 0){
                        echo '<th>Total</th>';
                    }

          echo '</tr>
            </thead>
            <tbody>';

                $config = $this->lens_config;

                $order_total = 0;


                foreach($config['sides'] as $side => $v) {

                    if(!isset($build['excl'][$side])) {

                        echo '<tr>
                        <td>
                            <h4>Oeil '.$v.' : '.$lens->name.'</h4>';

                            if($lens->packaging > 0) {
                                echo 'Boite de '.$lens->packaging.' lentilles<br />';
                            }

                            $corrections = 0;
                            $output = '';

                            foreach($config['attrs'] as $attr => $name) {
                                if(isset($build[$attr][$side])) {
                                    $output .= $name.' : '.$build[$attr][$side].' ';
                                    ++$corrections;
                                }
                            }

                            if($corrections > 0) {
                                echo '<strong>Corrections :</strong> <br />';
                                echo $output;
                            }


                        echo '</td>
                        <td>'.$build['qty'][$side].'</td>
                        <td>'.number_format(($lens->price * $build['qty'][$side]), 2, ',', '').' €</td>
                    </tr>';

                        $order_total += ($lens->price * $build['qty'][$side]);

                    }

                }


          echo '</tbody>
            </table>';


        if($user_info->restriction_compte == 0){
            echo '<div class="total"><span>Total</span><strong>'.number_format($order_total, '2', ',', '').' €</strong></div>';
        }



   echo '<div class="clearfix"></div>';

        if(!empty($commentaire))
            echo '<div class="notes">
                    <h5>Commentaire :</h5>
                    <p>'.$commentaire.'</p>
                  </div>';
    echo '</div>';

?>
</div>
<div class="modal-footer">
    <?php if($order_id !== false) { echo '<button class="btn btn-danger waves-effect waves-light delete-order" rel="'.$order_id.'">Supprimer</button>'; } ?>
    <button type="submit" class="btn btn-warning waves-effect waves-light" data-dismiss="modal">Fermer</button>
</div>