<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <?php
    if($order_id !== false) {
        echo '<h4 class="modal-title">Commande N°'.$order_id.'</h4>';
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

              //  $config = $this->montures_config;

                $order_total = 0;


                foreach($montures as $monture) {

					if($monture['modele']!=null)	
					{
						echo '<tr>
								<td>
									<h4>'.$monture['modele'].'</h4><br>
									Taille : '.$monture['size'].'<br>
									Type : '.$monture['type'].'<br>
									Couleur : '.$monture['couleur'].'<br>
									prix unitaire : '.$monture['prix_vente'].'

								</td>
								<td>'.$monture['qty'].'</td>
								<td>'.$monture['prix_vente']*$monture['qty'].'</td>
							  </tr>';
							$order_total += $monture['prix_vente']*$monture['qty'];
					}
					if($monture['pack']!=null)	
					{
						echo '<tr>
							<td>
								</i><h4>Pack: '.$monture['pack'].'</h4>
								prix unitaire : '.$monture['prixpack'].'
							</td>
							<td>'.$monture['qty'].'</td>
							<td>'.$monture['prixpack']*$monture['qty'].'</td>
						  </tr>';
						$order_total += $monture['prixpack']*$monture['qty'];
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