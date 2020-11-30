<script src="https://kit.fontawesome.com/7f4879516e.js" crossorigin="anonymous"></script>
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
                <span>Réference Client : </span><span id="txtrefclient" style="font-size:10px; color:red">*Obligatoire </span> <input type="text" class="form-control red_border" id="ref_client" name="ref_client" maxlength="14" required><p class="helper-text" ><b>14</b> Caractères restants</p>
            </div>
            <div class="highlighted">
                <span>Date : </span> <strong>'.date('d/m/Y').'</strong>
            </div>
        </div>';

        echo '<table class="styled borders" id="products">
            <thead>
                <tr>
                    <th style="width: 80%">Description</th>
                    <th style="text-align: right;">Quantité</th>';

                    if($user_info->restriction_compte == 0){
                        echo '<th style="text-align: right;">Total</th>';
                    }
			echo '<th style="text-align: right;">Supprimer</th>';

          echo '</tr>
            </thead>
            <tbody>';


                $config = $this->montures_config;

                $order_total = 0;

				foreach($montures as $monture) {
					if($monture->modele!=null)	
					{
						echo '<tr>
							<td>
								</i><h4>'.$monture->collection.' '.$monture->modele.'</h4>
								Taille : '.$monture->size.'<br>
								Type : '.$monture->type.'<br>
								Couleur : '.$monture->couleur.'<br>
								prix unitaire : '.$monture->prix_vente.'

							</td>
							<td align="right">'.$monture->qty.'</td>
							<td align="right">'.$monture->prix_vente*$monture->qty.'</td>
							<td align="right"><a href="/index/supprimer_monture_temp/'.$monture->id_temp.'"><i class="fas fa-trash"></a></td>
						  </tr>';
						$order_total += $monture->prix_vente*$monture->qty;
					}
					if($monture->pack!=null)	
					{
						echo '<tr>
							<td>
								</i><h4>Pack: '.$monture->pack.'</h4>
								prix unitaire : '.$monture->prixpack.'
							</td>
							<td align="right">'.$monture->qty.'</td>
							<td align="right">'.$monture->prixpack*$monture->qty.'</td>
							<td align="right"><a href="/index/supprimer_monture_temp/'.$monture->id_temp.'"><i class="fas fa-trash"></a></td>
						  </tr>';
						$order_total += $monture->prixpack*$monture->qty;
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

    echo '<div class="text-center"><a class="btn btn-warning btn-lg createOrder hide" id="terminer">Terminer la commande</a></div>';
?>
<style type="text/css">
	.red_border{
		border: 3px solid red !important; 
	}
</style>
<script>
		$('#ref_client').on("keyup", function() {

				var el = $(this);
				var step = el.closest('div');
				var length = $(this).val().length;

				var rest = 14-length;

				step.find('.helper-text b').text(rest);

				if(length > 0) {
					$('#terminer').removeClass('hide');
					$('#txtrefclient').addClass('hide');
					$('#ref_client').removeClass('red_border');
					
				}
				else
				{
					$('#terminer').addClass('hide');
					$('#txtrefclient').removeClass('hide');
					$('#ref_client').addClass('red_border');
				}

			});
</script>