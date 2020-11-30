<table cellspacing="0" class="fc-border-separate">
    <tbody>
    <?php
    $nbJourMois = date("t",strtotime($date));
    $maxJourParLigne = 7;
    $jourEnCours = $date == date("Y-m") ? date("j") : 32;
    
    $jours = array();
    $jours[0] = "Dimanche";  
    $jours[1] = "Lundi";  
    $jours[2] = "Mardi";  
    $jours[3] = "Mercredi";  
    $jours[4] = "Jeudi";  
    $jours[5] = "Vendredi";  
    $jours[6] = "Samedi";

    echo '<tr class="fc-first">';

        for($jour = 1;$jour<=$nbJourMois;$jour++){


        
            $j = date('w',strtotime($date.'-'.$jour));

            $currentdate = date('Y-m-d 00:00:00', strtotime($date.'-'.$jour));

            $packaging_day = $this->m_commande->getPackagingByDay($currentdate);
            $lens_day = $this->m_lens->getLensIncomesByDay($currentdate);
			$montures_day = $this->m_montures->getMonturesIncomesByDay($currentdate);
			

            $total_ht = (isset($caByDay[$jour]['total_ht']) ? $caByDay[$jour]['total_ht'] : "0" );
            $total_ht += $packaging_day; //  - $this->m_commande->getSupplementByDay($currentdate)
			
            $total_ttc = $total_ht + ($total_ht*0.2);
			
			$tot_packaging = number_format($this->m_commande->getPackagingByDay($currentdate) ,2,'.',' ');
			$tot_lentille_day = (0 !== $lens_day->total_commande ? number_format($lens_day->total_commande ,2,'.',' ') : number_format(0 ,2,'.',' '));
			$tot_montures_day = (0 !== $montures_day->total_commande ? number_format($montures_day->total_commande ,2,'.',' ') : number_format(0 ,2,'.',' '));
			
			$tot_ht = number_format($total_ht ,2,'.',' ');
			$tot_sup = $this->m_commande->getSupplementByDay($currentdate);
			$tot_verres = $total_ht-$this->m_commande->getPackagingByDay($currentdate) -$lens_day->total_commande-$montures_day->total_commande-$tot_sup;
			$tot_verres = number_format($tot_verres ,2,'.',' ');

            echo ' <td class="fc-widget-content'.($jourEnCours == $jour ? ' fc-state-highlight' : '').'" style="width:133px;">
                        <div style="min-height: 73px;">
                            <div class="fc-day-number">'.$jours[$j].' '.$jour.'</div>
                            <div class="fc-day-content">
                                <div style="position: relative; text-align:center;">HT : '.$tot_ht.' € </div>
								<div style="position: relative; text-align:center;">Sup : '.$tot_sup.'€</div>
                                <div style="position: relative; text-align:center;">P&E : '.$tot_packaging.' €</div>
                                <div style="position: relative; text-align:center;">Lentilles : '.$tot_lentille_day.' €</div>
								<div style="position: relative; text-align:center;">Montures : '.$tot_montures_day.' €</div>
                                <div style="position: relative; text-align:center;">Verre : '.$tot_verres.' € </div>
                            </div>
                        </div>
                    </td>';

            if($jour%$maxJourParLigne == 0)
                echo '</tr><tr>';
        }

    if($nbJourMois>28)
        for($jourGrise = (($maxJourParLigne + $nbJourMois) - 35);$jourGrise<$maxJourParLigne;$jourGrise++){
            echo '<td class="fc-widget-content fc-other-month">
                    <div>
                        <div class="fc-day-number"></div>
                        <div class="fc-day-content">
                            <div style="position:relative">&nbsp;</div>
                        </div>
                    </div>
                  </td>';
        }

    echo '</tr>';
    ?>
    </tbody>
</table>