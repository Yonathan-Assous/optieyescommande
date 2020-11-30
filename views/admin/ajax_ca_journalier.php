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

            $total_ht = (isset($caByDay[$jour]['total_ht']) ? $caByDay[$jour]['total_ht'] : "0" );
            $total_ht += $packaging_day; //  - $this->m_commande->getSupplementByDay($currentdate)

            $total_ttc = $total_ht + ($total_ht*0.2);

            echo ' <td class="fc-widget-content'.($jourEnCours == $jour ? ' fc-state-highlight' : '').'" style="width:133px;">
                        <div style="min-height: 73px;">
                            <div class="fc-day-number">'.$jours[$j].' '.$jour.'</div>
                            <div class="fc-day-content">
                                <div style="position: relative; height: 0px;text-align:center;">HT : '.number_format($total_ht ,2,'.',' ').' € </div>
                                <div style="position: relative; height: 0px;text-align:center;margin-top:20px;">P&E : '.number_format($this->m_commande->getPackagingByDay($currentdate) ,2,'.',' ').' €</div>
                                <div style="position: relative; height: 0px;text-align:center;margin-top:20px;">Sup : '.$this->m_commande->getSupplementByDay($currentdate).'€</div>
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