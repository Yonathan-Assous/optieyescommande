<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="static/css/print_static.css" type="text/css" />
</head>

<body>

<div id="body">

    <div id="content">

    	<?php
        $new_date = explode("-",$date_facture);
        $timestamp = strtotime($date_facture);

      ?>
          
        <div class="page" style="font-size: 7pt">
          <table style="width: 100%;">
                <tr>
                  <td><img src="static/img/logo.jpg" width="227" height="72" /></td>
                  <td>
                    <h1 style="text-align: right">Facture <?php echo substr($new_date[0],2,2).$new_date[1].$id_users; ?></h1>
                    <h1 style="text-align: right"><?php echo date("t",mktime( 0, 0, 0, $new_date[1], 1, $new_date[0] ))."/".$new_date[1]."/".$new_date[0]; ?></h1>
                  </td>
                </tr>
          </table>
          <br><br>

            <table style="width: 100%; font-size: 8pt;height:150px">
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;">
                            <tr>
                                <td>
                                <?php
                                  if(isset($pdf_admin) && $pdf_admin){
                                    echo '<table style="width: 100%;">
                                        <tr>
                                          <td>'.$user_info->nom_societe.'</td>
                                        </tr>
                                        <tr>
                                          <td>FRANCE</td>
                                        </tr>
                                        <tr>
                                          <td>'.$user_info->adresse.'<br>'.
                                              $user_info->cp.' '.$user_info->ville.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             SIRET : '.$user_info->numero_siret.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             TVA : '.wordwrap($user_info->tva_intracom,3," ",1).'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             Contact : '.$user_info->email.'
                                          </td>
                                        </tr>
                                      </table>';
                                  }
                                  else{
                                    echo '<table style="width: 100%;">
                                        <tr>
                                          <td>'.$data_admin['admin_info']->nom_societe.'</td>
                                        </tr>
                                        <tr>
                                          <td>'.$data_admin['admin_info']->adresse.'<br>'.
                                              $data_admin['admin_info']->cp.' '.$data_admin['admin_info']->ville.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             SIRET : '.$data_admin['admin_info']->numero_siret.'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             TVA : '.wordwrap($data_admin['admin_info']->tva_intracom,3," ",1).'
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                             Contact : '.$data_admin['admin_info']->email.'
                                          </td>
                                        </tr>
                                      </table>';
                                  }
                                ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;">
                            <tr>
                                <td>
                                    <?php
                                      if(isset($pdf_admin) && $pdf_admin){
                                      echo '<table style="width: 100%;text-align:right;">
                                            <tr>
                                                <td>'.$users_info->nom_societe.'<br>
                                                     '.$users_info->nom_magasin.'<br>'.
                                                       $users_info->adresse.'<br>'.
                                                       $users_info->ville.' '.$users_info->cp.'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Téléphone : '.wordwrap($users_info->tel_fixe,2," ",1).'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fax : '.wordwrap($users_info->tel_fax,2," ",1).'
                                                </td>
                                            </tr>
                                        </table>';
                                        }else{
                                          echo '<table style="width: 100%;text-align:right;">
                                              <tr>
                                                <td>'.$user_info->nom_societe.'<br>
                                                   '.$user_info->nom_magasin.'<br>'.
                                                     $user_info->adresse.'<br>'.
                                                     $user_info->cp.' '.$user_info->ville.'
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  Téléphone : '.wordwrap($user_info->tel_fixe,2," ",1).'
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  Fax : '.wordwrap($user_info->tel_fax,2," ",1).'
                                                </td>
                                              </tr>
                                            </table>';
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

                <?php
                    $header = '<table class="change_order_items">
                                <tr>
                                    <th>Date de commande</th>
									<th>Réference optieyes</th>
									<th>Numéro BL</th>
                                    <th>Réference client</th>
                                    <th>Type de verre</th>
                                    <th>Prix</th>
                                </tr>
                                 <tbody>';

                    $total_facture_aff = $total_facture_ht = $compteur = $nbMaxElementParPage = $total_livraison_ht = 0;

                    $tab_tva = array();
                    $MaxElement = 21;
                    $nb_page = 1;
                    $ajoutUneFois = true;
					$onlyTarifLivraison = false;
                    $tarifPackaging = 0;
                    $i = 0;

                    foreach($facture as $key => $facture) {

                        if($i == 0) {
                            if(isset($facture->tarif_packaging)) {
                                $tarifPackaging = $facture->tarif_packaging;
                            }
                            else {
                                $tarifPackaging = 0;
                            }
                        }

                        ++$i;
					
                        if($nbMaxElementParPage == $MaxElement){
                            echo '</tbody></table>
                                    <div style="text-align:center;bottom:10;position: fixed;font-weight:bold">
                                      <page> 
                                        <page_footer>'.$nb_page.'</page_footer> 
                                       </page>
                                     </div>';
									 
                            echo '<div style="page-break-before: always;"></div>';

                            $nbMaxElementParPage =0;
                            $MaxElement = 30;
                            
                             echo '<table style="width: 100%;">
                                    <tr>
                                      <td><img src="static/img/logo.jpg" width="227" height="72" /></td>
                                    </tr>
                                  </table>
                                  <br><br>';
								  
                            $nb_page++;
                        }

                        if($compteur%2 == 0)
                            $class = "odd_row";
                        else
                            $class = "even_row";

                        if($nbMaxElementParPage == 0){
                            echo $header;
                            
                        }
						
						if($facture->total_commande > 0){

							echo '<tr class="'.$class.'">';
								echo '<td style="text-align: center">'.date("d/m/Y H:i",strtotime($facture->date_commande)).'</td>';
								echo '<td style="text-align: center">CR'.$facture->id_commande.'-'.$facture->id_users.'</td>';
								echo '<td style="text-align: center">'.$facture->intitule_bl.'</td>';
								echo '<td style="text-align: center">'.$facture->reference_client.'</td>';
								echo '<td style="text-align: center">'.$facture->generation_verre.'</td>';

                                if($facture->type_commande > 1) {

                                    echo '<td style="text-align: center">0 €<br />'.($facture->type_commande <=2 ? 'Erreur ophta' : 'Casse atelier').'</td>';
                                }
                                else {
                                    echo '<td style="text-align: center">'.$facture->total_commande.' €</td>';
                                }


							echo '</tr>';

						} else {
							$onlyTarifLivraison = true;
						}

                        if(isset($facture->type_commande) && $facture->type_commande == 1) {
                            $total_facture_ht += $facture->total_commande;
                            $total_facture_aff += $facture->total_commande;
                        }
                        
                        if($facture->TarifLivraison > 0){
                            $total_facture_ht += $facture->TarifLivraison;
                            $total_livraison_ht += $facture->TarifLivraison;
                            $ajoutUneFois = false;
                        }


                        $compteur++;
                        $nbMaxElementParPage++;
                    }
                  

                if($nbMaxElementParPage == $MaxElement){
                   echo '</tbody></table>
                          <div style="text-align:center;bottom:10;position: fixed;font-weight:bold">
                            <page> 
                              <page_footer>'.$nb_page.'</page_footer> 
                             </page>
                           </div>';
                           
                   echo '<div style="page-break-before: always;"></div>';
                           
                   echo '<table style="width: 100%;">
                          <tr>
                            <td><img src="static/img/logo.jpg" width="227" height="72" /></td>
                          </tr>
                        </table>
                        <br><br>';
                        
                        echo $header;
                        
                        $nb_page++;
                        
                } else 
                    echo '</tbody><tbody>';
                
				

					/*echo ' <tr>
							<td colspan="4"></td>
							<td colspan="1" style="text-align: right;"><strong>Frais de livraison</strong></td>
							<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($total_livraison_ht,2,'.',' ').' €</strong></td>
						   </tr>';*/

                ?>

                <!--tr>
                    <td colspan="4"></td>
                    <td colspan="1" style="text-align: right;"><strong>TOTAL HT</strong></td>
                    <td class="change_order_total_col" style="text-align:center;"><strong><?php echo number_format($total_facture_ht,2,'.',' '); ?> €</strong></td>
                </tr -->
                <?php

                $label_remise = '';
                
                    if(isset($reduction) && $reduction !== false){

                        $total_sans_remise = $total_facture_ht;
						$sup = $remise = 0;
						
						foreach($reduction as $reduc){
							if($reduc->reduction<0)
								$sup += $reduc->reduction;
							else
								$remise += $reduc->reduction;
								
							$total_facture_ht -= $reduc->reduction;
						}





						if($remise !=0){

                            echo ' <tr>
									<td colspan="4"></td>
									<td colspan="1" style="text-align: right;"><strong>Total HT</strong></td>
									<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($total_sans_remise+abs($sup),2,'.',' ').' €</strong></td>
								   </tr>';

							echo ' <tr>
									<td colspan="4"></td>
									<td colspan="1" style="text-align: right;"><strong>Remise</strong></td>
									<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($remise,2,'.',' ').' €</strong></td>
								   </tr>';

                            $label_remise = '<br />Remise incluse';
					    }


                    }


                if($timestamp >= strtotime('2016-10')) {
                    $label_price = 'Total HT';
                }
                else {
                    if($total_facture_ht > 700) {
                        $label_price = 'Total HT';
                    }
                    else {
                        $label_price = 'Total et Packaging';
                    }
                }


                    echo ' <tr>
                    <td colspan="4" style="text-align: right;"></td>
                    <td colspan="1" style="text-align: right;"><strong>'.$label_price.$label_remise.'</strong></td>
                    <td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($total_facture_ht,2,'.',' ').' €</strong></td>
                    </tr>';

                    if($tarifPackaging > 0 && $timestamp >= strtotime('2016-10')) {

                        $total_facture_ht += $tarifPackaging;

                        echo ' <tr>
                        <td colspan="4" style="text-align: right;"></td>
                        <td colspan="1" style="text-align: right;"><strong>P & E</strong></td>
                        <td class="change_order_total_col" style="text-align:center;"><strong>' . number_format($tarifPackaging, 2, '.', ' ') . ' €</strong></td>
                        </tr>';

                        echo ' <tr>
                        <td colspan="4" style="text-align: right;"></td>
                        <td colspan="1" style="text-align: right;"><strong>Total final HT</strong></td>
                        <td class="change_order_total_col" style="text-align:center;"><strong>' . number_format($total_facture_ht, 2, '.', ' ') . ' €</strong></td>
                        </tr>';

                    }

                    echo ' <tr>
                    <td colspan="4"></td>
                    <td colspan="1" style="text-align: right;"><strong>TVA '.$taux_tva.'%</strong></td>
                    <td class="change_order_total_col" style="text-align:center;"><strong>'.number_format(round($total_facture_ht * ($taux_tva/100),2) ,2,'.',' ').' €</strong></td>
                    </tr>';
					
                ?>
				<tr>
                    <td colspan="4"></td>
                    <td colspan="1" style="text-align: right;"><strong>TOTAL TTC</strong></td>
                    <td class="change_order_total_col" style="text-align:center;"><strong><?php echo number_format(round($total_facture_ht * (($taux_tva/100)+1),2) ,2,'.',' '); ?> €</strong></td>
                </tr>
            </table>
			<div style="text-align:center;bottom:10;position: fixed;font-weight:bold">
				<?php echo $nb_page; ?> 
			</div>
        </div>
    </div>
</div>
</body>
</html>