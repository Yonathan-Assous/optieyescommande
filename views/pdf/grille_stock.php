<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>

<div id="body">

    <div id="section_header">
    </div>

    <div id="content">
      <table>
        <tbody>
              <?php
              $compteur = $nb_ligne = 1;
              $compteur_colspan = 0;
              $current_libelle = "";
              $en_tete = $diam = $grille = "";
              
              foreach($grille_stock as $id_verre => $list_diametre){
                foreach($list_diametre as $diametre => $data){
                  $grillestock = json_decode($data->grille_stock,true);
                  
                  if($compteur == 1){
                    echo $en_tete;
                    echo $diam;
                    echo $grille;
                    
                    $en_tete = $diam = $grille = "";
                    
                    $en_tete .= "<tr>";
                    $diam .= "<tr>";
                    $grille .= "<tr>";
                  }
                  
                  if($current_libelle != $data->libelle_verre){
                    $current_libelle = $data->libelle_verre;
                    
                    if($en_tete != ""){
                      $en_tete = str_replace("#replace_colspan#",$compteur_colspan,$en_tete);
                      $compteur_colspan = 0;
                        $en_tete .= '<td style="min-width:20px;"></td>';
                        $diam .= '<td style="min-width:20px;"></td>';
                        $grille .= '<td style="min-width:20px;"></td>';
                    }

                    $en_tete .= '<td style="text-align:center;border :1px dashed"" colspan="#replace_colspan#">'.$data->libelle_verre.'</td>';
                  }                           
                            
                  $diam .= '<td style="text-align:center;">'.$data->diametre.'</td>';
                  
                  
                 $grille .= '<td>';
                  
                 $grille .= '<table cellspacing="0" style="font-size:10px;min-width:250px;">
                              <tbody>';
                  
                              foreach($grillestock as $sphere => $tab_cylindre){
                                $grille .= '<tr>';
                                
                                  $grille .= '<td style="text-align:center;min-width:30px;">'.$sphere.'</td>';
                                
                                foreach($tab_cylindre as $cylindre){		
                                  $grille .= '<td style="border:1px solid white;min-height:5px;max-height:5px;min-width:5px;max-width:5px;background-color:#ffa500"></td>';
                                }
                                $grille .= '</tr>';
                              }
        
                  $grille .=  '</tbody>
                             </table>';
                  
                  $grille .= '</td>';
                  
                  $compteur_colspan++;
                  
                  if($compteur == 7 || ($nb_ligne == 2 && $compteur == 6) || ($nb_ligne == 3 && $compteur == 5) || ($nb_ligne == 4 && $compteur == 6)  || ($nb_ligne == 5 && $compteur == 5) || ($nb_ligne == 5 && $compteur == 6) || ($nb_ligne == 6 && $compteur == 6) || ($nb_ligne == 7 && $compteur == 5) || ($nb_ligne == 8 && $compteur == 5)){
                    $en_tete .= '</tr>';
                    $diam .= '</tr>';
                    $grille .= '</tr>';
                    
                      if($nb_ligne == 1){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }
                      
                       if($nb_ligne == 2){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }
                      
                      if($nb_ligne == 3){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }
                      
                       if($nb_ligne == 4){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }
                      
                      if($nb_ligne == 5){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }
                      
                      if($nb_ligne == 6){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }
                      
                       if($nb_ligne == 7){
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                        $grille .= '<tr style="height:40px;"><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                      }

                      
                    
                    $compteur=0;
                    
                    $en_tete = str_replace("#replace_colspan#",$compteur_colspan,$en_tete);
                    
                    $current_libelle = "";
                    
                    $nb_ligne++;
                  }
                
                  
                  $compteur++;
                }
              }
              ?>
        </tbody>
       </table>
       <br><br><br><br><br><br><br><br>
       <table>
        <tbody>
			<tr style="border: 3px solid;">
				<td colspan="10" style="font-weight:bold;text-align:center;font-size:16px;height:40px">Tarif</td>
			</tr>
          <?php
             $compteur = 1;
             $ligne = "";
            foreach($grille_stock as $id_verre => $list_diametre){
                foreach($list_diametre as $diametre => $data){
                  
                  if($compteur == 1){
                    echo $ligne;
                    $ligne = "";
                    
                    $ligne .= '<tr style="height:50px">';
                  }
                  
                  $ligne .= '<td style="width:300px;"><b>'.$data->libelle_verre.'<b></td><td style="min-width:50px;">'.$data->prix_verre.' €</td>';
                  
                  if($compteur == 4){
                    $ligne .= '</tr>';
                    $compteur = 0;
                  } else {
                    $ligne .= '<td style="width:50px"></td>';
                  }
                  
                  $compteur++;
                }
              }
          ?>
        </tbody>
       </table>
    </div>
</div>
</body>
</html>