<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta	http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="/static/css/print_static_2.css" type="text/css" />
</head>

<body>

<div id="body">

    <div id="section_header">
    </div>

    <div id="content">
      <div class="page" style="font-size: 7pt">
<?php
  $nb_factures = count($factures);
  $compteur_global = 1;
  $new_date = explode("-",$date_facture);
  
  foreach($factures as $id_users => $data_user){
	  $onlyTarifLivraison = false;
	  $ajoutUneFois = true;
?>
            <table style="width: 100%;height:100px">
                <tr>
                  <td><img src="/static/img/logo.jpg" width="227" height="72" /></td>
                  <td>
                    <h1 style="text-align: right"><?php echo date("t",mktime( 0, 0, 0, $new_date[1], 1, $new_date[0] ))."/".$new_date[1]."/".$new_date[0]; ?></h1>
             
                    <h1 style="text-align: right">Facture <?php echo substr($new_date[0],2,2).$new_date[1].$id_users; ?></h1>
                  </td>
                </tr>
            </table>
            <br><br>

            <table style="width: 100%; font-size: 8pt;height:150px">
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;float: left;">
                            <tr>
                                <td>
                                <?php
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
                                         TVA : '.$user_info->tva_intracom.'
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                         Contact : '.$user_info->email.'
                                      </td>
                                    </tr>
                                  </table>';
                                ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; font-size: 8pt;float:left;">
                            <tr>
                                <td>
                                    <?php
                                    echo '<table style="width: 100%;text-align:right;">
                                            <tr>
                                                <td>'.$users_info[$id_users]->nom_societe.'<br>
                                                     '.$users_info[$id_users]->nom_magasin.'<br>'.
                                                       $users_info[$id_users]->adresse.'<br>'.
                                                       $users_info[$id_users]->ville.' '.$users_info[$id_users]->cp.'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Téléphone : '.wordwrap($users_info[$id_users]->tel_fixe,2," ",1).'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Fax : '.wordwrap($users_info[$id_users]->tel_fax,2," ",1).'
                                                </td>
                                            </tr>
                                        </table>';
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

                    $total_facture_ht = $compteur = $nbMaxElementParPage = 0;
					
                    $tab_tva = array();
                    $MaxElement = 23;
					
                        foreach($data_user as $facture){
                          if($nbMaxElementParPage == $MaxElement){
                              echo '</tbody></table>';
                              echo '<div style="page-break-before: always;"></div>';
                              $nbMaxElementParPage = 0;
                              $MaxElement = 35;
                              
                               echo '<table style="width: 100%;">
                                        <tr>
                                          <td><img src="/static/img/logo.jpg" width="227" height="72" /></td>
                                        </tr>
                                      </table>
                                      <br><br>';
                          }

                          if($compteur%2 == 0)
                              $class = "odd_row";
                          else
                              $class = "even_row";

                          if($nbMaxElementParPage == 0)
                              echo $header;
						  
						  if($facture->total_commande > 0){
							  echo '<tr class="'.$class.'">';
								  echo '<td style="text-align: center" width="120">'.date("d/m/Y H:i",strtotime($facture->date_commande)).'</td>';
								  echo '<td style="text-align: center">CR'.$facture->id_commande.'-'.$facture->id_users.'</td>';
								  echo '<td style="text-align: center">'.$facture->intitule_bl.'</td>';
								  echo '<td style="text-align: center">'.$facture->reference_client.'</td>';
								  echo '<td style="text-align: center">'.$facture->generation_verre.'</td>';
								  echo '<td style="text-align: center">'.$facture->total_commande.' €</td>';
							  echo '</tr>';
						  } else {
							  $onlyTarifLivraison = true;
						  }


                          $total_facture_ht += $facture->total_commande;
                          
                          if($facture->TarifLivraison > 0 && $ajoutUneFois){
                            $total_facture_ht += $facture->TarifLivraison;
                             $ajoutUneFois = false;
                          }

                          $compteur++;
                          $nbMaxElementParPage++;
                        }
                        
                        if($nbMaxElementParPage == $MaxElement || $nbMaxElementParPage > ($MaxElement - 3)){
                              echo '</tbody></table>';
                              echo '<div style="page-break-before: always;"></div>';
                              echo '<table class="change_order_items">
                                      <tbody></tbody>';
									  
							if($onlyTarifLivraison){
								echo ' <tr>
										<td colspan="4"></td>
										<td colspan="1" style="text-align: right;"><strong>Frais de livraison</strong></td>
										<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($total_facture_ht,2,'.',' ').' €</strong></td>
									   </tr>';
							}	  
									  
                             /* echo   '<tr>
                                        <td colspan="4" width="260"></td>
                                        <td colspan="1" style="text-align: right;" width="180"><strong>TOTAL HT</strong></td>
                                        <td class="change_order_total_col" style="text-align:center;" width="80"><strong>'.number_format($total_facture_ht,2,'.',' ').' €</strong></td>
                                      </tr>';*/
                        }else{
                              echo '<tbody></tbody>';
							  
							  if($onlyTarifLivraison){
								echo ' <tr>
										<td colspan="4"></td>
										<td colspan="1" style="text-align: right;"><strong>Frais de livraison</strong></td>
										<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($total_facture_ht,2,'.',' ').' €</strong></td>
									   </tr>';
							  }	
							
                              echo  '<tr>
                                        <td colspan="4"></td>
                                        <td colspan="1" style="text-align: right;"><strong>TOTAL HT</strong></td>
                                        <td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($total_facture_ht,2,'.',' ').' €</strong></td>
                                    </tr>';
                        }
                    
                    
                    if(isset($reduction[$id_users]) && $reduction[$id_users] !== false){
                      $sup = $remise = 0;
                      
                      if($reduction[$id_users]->reduction<0)
                        $sup += $reduction[$id_users]->reduction;
                      else
                        $remise += $reduction[$id_users]->reduction;
                        
						$total_facture_ht -= $reduction[$id_users]->reduction;

						  if($remise !=0){
							echo ' <tr>
								<td colspan="4"></td>
								<td colspan="1" style="text-align: right;"><strong>Remise</strong></td>
								<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format($remise,2,'.',' ').' €</strong></td>
								 </tr>';
						  }
							   
						 /* if($sup != 0){
							echo ' <tr>
									<td colspan="4"></td>
									<td colspan="1" style="text-align: right;"><strong>Supplément exceptionnel</strong></td>
									<td class="change_order_total_col" style="text-align:center;"><strong>'.number_format(abs($sup),2,'.',' ').' €</strong></td>
								   </tr>';
						  }*/

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
 <?php
        if($nb_factures != $compteur_global)
          echo '<div style="page-break-before: always;"></div>';
        
        
          $compteur_global++;
     }
 ?>
      </div>
    </div>
</div>

</body>
</html>