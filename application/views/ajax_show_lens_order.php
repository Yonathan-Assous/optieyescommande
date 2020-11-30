<?php

    echo '
    <div class="invoice">
    <div class="supplier">
            <h5>Fournisseur :</h5>
            <p>
                <strong>'.$data_admin['admin_info']->nom_societe.'</strong><br>
            </p>
            <h5>Adresse:</h5>
            <p>'.
                $data_admin['admin_info']->adresse.'<br>'.
                $data_admin['admin_info']->cp.' '.$data_admin['admin_info']->ville.'
            </p>
            <p>
                <span>Téléphone : </span>'.$data_admin['admin_info']->tel_fixe.'<br>
                <span>Fax : </span>'.$data_admin['admin_info']->tel_fax.'
            </p>
        </div>
        <div class="customer">
            <h5>Client :</h5>
            <p>
                <strong>'.$user_info->nom_societe.'</strong><br>'.
                $user_info->nom_magasin.'<br>'.
                $user_info->adresse.'<br>'.
                $user_info->cp.' '.$user_info->ville.'
            </p>
            <p>
                <span>Numéro siret : </span>'.$user_info->numero_siret.'<br>
                <span>Téléphone : </span>'.$user_info->tel_fixe.'<br>
                <span>Fax : </span>'.$user_info->tel_fax.'
            </p>
        </div>

        <div class="clearfix"></div>

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
                            <h4>Oeil '.$v.' : '.$lens->brand_name.' '.$lens->name.'</h4>';

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

    echo '<div class="text-center"><a class="btn btn-warning btn-lg createOrder">Terminer la commande</a></div>';