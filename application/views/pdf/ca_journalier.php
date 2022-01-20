<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta	http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="static/css/print_static.css" type="text/css" />
</head>

<body>

<div id="body">

    <div id="section_header">
    </div>

    <div id="content">

        <div class="page" style="font-size: 7pt">
            <table style="width: 100%;" class="header">
                <tr>
                    <td><h1 style="text-align: left">Export CA <?php echo $date; ?></h1></td>
                </tr>
            </table>
            <?php
            $dCust=explode("-",$date);
            $dEnd=$dCust[1].'-'.$dCust[0];
            ?>
<!--            <table class="change_order_items">-->
<!--                <tbody>-->
<!--                --><?php
//                $dCust=explode("-",$date);
//                $dEnd=$dCust[1].'-'.$dCust[0];

//
//                $maxJour = date("t",strtotime($date));
//                $maxJourParLigne = 7;
//                $nbJourEnCours = 1;
//                $jourEnCours = $date == date("Y-m") ? date("j") : 32;
//
//                for($nbJour = 1;$nbJour<=$maxJour;$nbJour++){
//
//                    if($nbJourEnCours == 1){
//                        if($nbJour == 1)
//                            $class = 'class="fc-first"';
//                        else
//                            $class = '';
//
//                        echo '<tr '.$class.'>';
//                    }
//
//                    $currenttime = DateTime::createFromFormat('d-m-Y', $nbJour.'-'.$date);
//                    $currenttime->setTime(0,0,0);
//
//
//                    $total_ht = (isset($caByDay[$nbJour]['total_ht']) ? $caByDay[$nbJour]['total_ht'] : "0" );
//					$temp_tot = $total_ht;
//                    $total_ht += $this->m_commande->getPackagingByDay($currenttime->format('Y-m-d H:i:s')); //  - $this->m_commande->getSupplementByDay($currenttime->format('Y-m-d H:i:s'))
//
//                    $total_ttc = $total_ht + ($total_ht*0.2);
//
//					$sup_day = $this->m_commande->getSupplementByDay($currenttime->format('Y-m-d H:i:s'));
//
//                    $lens_day = $this->m_lens->getLensIncomesByDay($currenttime->format('Y-m-d H:i:s'));
//					$montures_day = $this->m_montures->getMonturesIncomesByDay($currenttime->format('Y-m-d H:i:s'));
//
//					$verres_day = $temp_tot - $montures_day->total_commande - $lens_day->total_commande - $sup_day;
//
//					$fraisdelivraison = $total_ht - $verres_day - $montures_day->total_commande - $lens_day->total_commande;
//
//					$total_hors_livraison = $lens_day->total_commande + $montures_day->total_commande + $verres_day;
//
//                    echo ' <td class="fc-widget-content'.($jourEnCours == $nbJour ? ' fc-state-highlight' : '').'" style="border-bottom:1px solid;width:80px;">
//                                <div style="min-height: 73px;">
//                                    <div class="fc-day-number">'.$nbJour.'</div>
//                                    <div class="fc-day-content">
//                                        <div style="text-align:center;">HT : '.number_format($total_ht ,2,'.',' ').' €</div>
//                                        <div style="text-align:center;margin-top:10px;">HT Hors frais de livraison : '.number_format($total_hors_livraison ,2,'.',' ').' €</div>
//										<div style="text-align:center;margin-top:10px;">Frais de livraison : '.(0 !== $fraisdelivraison ? number_format($fraisdelivraison ,2,'.',' ') : number_format(0 ,2,'.',' ')).' €</div>
//										<div style="text-align:center;margin-top:10px;">Verres : '.(0 !== $verres_day ? number_format($verres_day ,2,'.',' ') : number_format(0 ,2,'.',' ')).' €</div>
//                                        <div style="text-align:center;margin-top:10px;">Lentilles : '.(0 !== $lens_day->total_commande ? number_format($lens_day->total_commande ,2,'.',' ') : number_format(0 ,2,'.',' ')).' €</div>
//										<div style="text-align:center;margin-top:10px;">Montures : '.(0 !== $montures_day->total_commande ? number_format($montures_day->total_commande ,2,'.',' ') : number_format(0 ,2,'.',' ')).' €</div>
//                                    </div>
//                                </div>
//                            </td>';
//
//                    if($nbJourEnCours == $maxJourParLigne){
//                        echo '</tr>';
//                        $nbJourEnCours =0;
//                    }
//
//                    $nbJourEnCours++;
//                }
//
//                if($nbJourEnCours != 1){
//                    for($jourGrise = $nbJourEnCours;$jourGrise<=$maxJourParLigne;$jourGrise++){
//                        echo '<td class="fc-widget-content fc-other-month">
//                                <div>
//                                    <div class="fc-day-number"></div>
//                                    <div class="fc-day-content">
//                                        <div style="position:relative">&nbsp;</div>
//                                    </div>
//                                </div>
//                              </td>';
//                    }
//
//                    echo '</tr>';
//                }
//                ?>
<!--                </tbody>-->
<!--            </table>-->

            <table style="width: 100%; border: 1px solid black; font-size: 8pt;border-collapse: collapse;">
                <tr>
                    <td style="border: 1px solid black;"></td>
                    <td style="border: 1px solid black;text-align:center;">Total HT mensuel</td>
                    <td style="border: 1px solid black;text-align:center;">Total TTC mensuel</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;text-align:center;">CA frais de livraison inclus</td>
                    <?php
                    $ca_mensuel =  $ca_mensuel + $this->m_commande->getPackagingByMonth($date); //  - $this->m_commande->getSupplementByMonth($date)
                    $ca_mensuel_hors_livraison =  $ca_mensuel_hors_livraison - $this->m_commande->getSupplementByMonth($date);
					
					$fraisdelivraisonmensuel = ($ca_mensuel - $ca_mensuel_hors_livraison);

                    echo'<td style="border: 1px solid black;text-align:center;"><strong>'.number_format($ca_mensuel,2,'.',' ').' €</strong></td>
                    <td style="border: 1px solid black;text-align:center;"><strong>'.number_format(round(($ca_mensuel*(($taux_tva/100)+1)),2) ,2,'.',' ').' €</strong></td>';
                    ?>
                </tr>
				
                <tr>
                    <td style="border: 1px solid black;text-align:center;">CA Hors frais de livraison</td>
                    <?php
                    echo'<td style="border: 1px solid black;text-align:center;"><strong>'.number_format($ca_mensuel_hors_livraison,2,'.',' ').' €</strong></td>
                         <td style="border: 1px solid black;text-align:center;"><strong>'.number_format(round(($ca_mensuel_hors_livraison*(($taux_tva/100)+1)),2) ,2,'.',' ').' €</strong></td>';
                    ?>
                </tr>
				<tr>
                    <td style="border: 1px solid black;text-align:center;">Frais de Livraison</td>
                    <?php
                    echo'<td style="border: 1px solid black;text-align:center;"><strong>'.number_format($fraisdelivraisonmensuel,2,'.',' ').' €</strong></td>
                         <td style="border: 1px solid black;text-align:center;"><strong>'.number_format(round(($fraisdelivraisonmensuel*(($taux_tva/100)+1)),2) ,2,'.',' ').' €</strong></td>';
                    ?>
                </tr>
				<tr>
                    <td style="border: 1px solid black;text-align:center;">Part verres</td>
                    <?php
					$lens_month = $this->m_lens->getLensIncomesByMonth($dEnd);
					$montures_month = $this->m_montures->getMonturesIncomesByMonth($dEnd);
                    $verres_month = $ca_mensuel_hors_livraison-$lens_month->total_commande-$montures_month->total_commande;

                    echo'<td style="border: 1px solid black;text-align:center;"><strong>'.number_format($verres_month,2,'.',' ').' €</strong></td>
                         <td style="border: 1px solid black;text-align:center;"><strong>'.number_format(round(($verres_month*(($taux_tva/100)+1)),2) ,2,'.',' ').' €</strong></td>';
                    ?>
                </tr>
                <tr>
                    <td style="border: 1px solid black;text-align:center;">Part lentilles</td>
                    <?php

                    

                    echo'<td style="border: 1px solid black;text-align:center;"><strong>'.number_format($lens_month->total_commande,2,'.',' ').' €</strong></td>
                         <td style="border: 1px solid black;text-align:center;"><strong>'.number_format(round(($lens_month->total_commande*(($taux_tva/100)+1)),2) ,2,'.',' ').' €</strong></td>';
                    ?>
                </tr>
				<tr>
                    <td style="border: 1px solid black;text-align:center;">Part montures</td>
                    <?php

                    

                    echo'<td style="border: 1px solid black;text-align:center;"><strong>'.number_format($montures_month->total_commande,2,'.',' ').' €</strong></td>
                         <td style="border: 1px solid black;text-align:center;"><strong>'.number_format(round(($montures_month->total_commande*(($taux_tva/100)+1)),2) ,2,'.',' ').' €</strong></td>';
                    ?>
                </tr>

            </table>

        </div>

    </div>
</div>

</body>
</html>