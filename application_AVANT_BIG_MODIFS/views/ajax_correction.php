<?php


	if($type_commande_verre == 1){

	    $sides = array('droit', 'gauche');

		$data = json_decode($correction[0]->grille_fabrication_verre);


        foreach($sides as $s) {

            if(isset($pair_order) && is_object($pair_order)) {

                $pair_corrections = json_decode($pair_order->information_commande);

                if($s == 'droit' && isset($pair_corrections->verre->correction_droit)) {
                    $corrections = $pair_corrections->verre->correction_droit;
                }
                elseif($s == 'gauche' && isset($pair_corrections->verre->correction_gauche)) {
                    $corrections = $pair_corrections->verre->correction_gauche;
                }

            }

            echo '<div class="correct_wrapper" data-side="'.$s.'">';


            $degressionAvailable = false;

            if(isset($pair_order) && is_object($pair_order)) {

                if (isset($data->degression)) {

                    $degressionAvailable = true;

                    if (isset($corrections->addition)) {
                        $corrections->sphere += $corrections->addition;
                        $degressionAvailable = true;
                    }

                    if (!isset($corrections->degression)) {
                        $corrections->degression = $corrections->addition;
                        unset($corrections->addition);
                    }

                }

            }

            foreach($data as $key => $value) {

                $disabledState = 'disabled';
                $defaultState = false;
                $currentValue = '';


                if(isset($pair_order) && is_object($pair_order)) {
                    if($key == 'degression') {
                        if(true == $degressionAvailable) {
                            $disabledState = '';
                            $defaultState = true;
                        }
                    }
                }
                else {
                    $disabledState = '';
                }

                echo '<div class="col-lg-3 col-sm-3 col-xs-6">
                <span>' . strtoupper($key) . '</span>
                <select name="' . $key . '_'.$s.'" id="' . $key . '_'.$s.'" class="search form-control" '.$disabledState.'>';

                for ($deb = $value->deb; $deb <= $value->fin; $deb += $value->pas) {

                    if(isset($pair_order) && is_object($pair_order)) {
                        if($deb == $corrections->$key) {
                            $currentValue = $corrections->$key;
                        }
                        echo '<option value="' . $deb . '" ' . ((false === $defaultState && $deb == $corrections->$key) ? 'selected="selected"' : '') . '>' . ($key == "axe" ? $deb : number_format($deb, 2, '.', '')) . '</option>';
                    }
                    else {
                        echo '<option value="' . $deb . '" ' . ($key == "sphere" && $deb == 0 ? 'selected="selected"' : '') . '>' . ($key == "axe" ? $deb : number_format($deb, 2, '.', '')) . '</option>';
                    }
                }

                echo '</select>
                </div>';

                if($disabledState == 'disabled') {
                    echo '<input type="hidden" name="' . $key . '_'.$s.'" id="' . $key . '_'.$s.'" value="'.$currentValue.'" />';
                }


            }

            echo '</div>';

        }



	} else if($type_commande_verre == 2){

		$option_sphere = $option_cylindre = "";
		
		if(isset($correction_stock) && $correction_stock !== false){
      $tab_base = json_decode($correction_stock[0]->grille_stock,true);
      
      foreach($correction_stock as $key => $correction){

        if($key != 0){
          $data = json_decode($correction->grille_stock,true);

          if(!empty($data)) {
              foreach ($data as $k => $val) {

                  if (array_key_exists($k, $tab_base)) {

                      foreach ($val as $k2 => $val2) {

                          if (!in_array($val2, $tab_base[$k])) {
                              $addValueAtThisKey = "";

                              foreach ($tab_base[$k] as $k3 => $val3) {

                                  if ((float)$val3 > (float)$val2) {

                                      if (!in_array($val2, $tab_base[$k]))
                                          array_splice($tab_base[$k], $k3, 0, $val2);

                                      break;
                                  } else if ((float)$val3 < (float)$val2) {

                                      $addValueAtThisKey = $k3;
                                  }
                              }

                              if ($addValueAtThisKey != "" && !in_array($val2, $tab_base[$k]))
                                  array_splice($tab_base[$k], $addValueAtThisKey + 1, 0, $val2);
                          }
                      }
                  } else {
                      $tab_base[$k] = $val;
                  }
              }
          }
        }
      }

      if(!empty($tab_base) && is_array($tab_base)) {
          krsort($tab_base);
      }
      
			$compteur = $sphereSelected = "";

            if(!empty($tab_base) && is_array($tab_base)) {
                foreach ($tab_base as $clee => $value) {
                    if ((float)$clee >= 0) {
                        $sphereSelected = $clee;
                    } else {
                        if ($sphereSelected === "")
                            $sphereSelected = $clee;

                        break;
                    }
                }
            }

			if(isset($sphere))
				$sphereSelected = $sphere;

            if(!empty($tab_base) && is_array($tab_base)) {
                foreach($tab_base as $keySphere => $cyl){
                        $option_sphere .= '<option value="'.$keySphere.'" '.($keySphere == $sphereSelected ? 'selected' : '').'>'.($keySphere > 0 ? '+'.number_format($keySphere, 2, '.', '') : number_format($keySphere, 2, '.', '')).'</option>';

                            if($keySphere == $sphereSelected){
                  sort($cyl);
                                foreach($cyl as $keyCylindre => $display)
                                    $option_cylindre .= '<option value="'.$display.'" '.($display == 0 ? 'selected="selected"' : '').'>'.($display > 0 ? '+'. number_format($display, 2, '.', '') : number_format($display, 2, '.', '')).'</option>';

                    }

                    $compteur++;
                }
            }

		}
		if(!isset($cote))
			$cote = time();

		if($id_generation_verre == 18) {

			$sphere = isset($sphere) ? $sphere : 0;
			$add = isset($add) ? $add : 1;

			for($i=-3; $i<=2; $i+=0.25) {
				$option_sphere .= '<option '.($sphere == $i ? 'selected="selected"' : '').' value="'.$i.'">'.number_format($i, 2, '.', '').'</option>'.PHP_EOL;
			}

			$option_add = '';
			for($i=1; $i<=3; $i+=0.25) {
				$option_add .= '<option '.($add == $i ? 'selected="selected"' : '').' value="'.$i.'">'.number_format($i, 2, '.', '').'</option>'.PHP_EOL;
			}

		}


		echo '<div class="col-lg-3 col-sm-3 col-xs-6">

				<span>SPHERE</span>

				<select name="sphere_'.$cote.'" id="sphere_'.$cote.'" class="search form-control required">';
			echo $option_sphere;
		  echo '</select>
				
			 </div>';

		if($id_generation_verre != 18) {

			echo '<div class="col-lg-3 col-sm-3 col-xs-6">
				<span>CYLINDRE</span>
				<select name="cylindre_'.$cote.'" id="cylindre_'.$cote.'" class="search form-control required">'.$option_cylindre.'</select>
			 </div>';

		}
		else {
			echo '<div class="col-lg-3 col-sm-3 col-xs-6">
				<span>ADDITION*</span>
				<select name="addition_'.$cote.'" id="addition_'.$cote.'" class="search form-control required">'.$option_add.'</select>
			 </div>';
		}
	}
?>