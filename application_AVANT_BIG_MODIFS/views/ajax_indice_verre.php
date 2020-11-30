<?php
    foreach($indice_verre as $key => $value){
		$panierA = get_cookie("panierA");
		$panierA_sans_monture = get_cookie("panierA_sans_monture");
			if($panierA_sans_monture=='1'){
				$panierA='1';
			}
		if($panierA=='1')
		{
			if($value->id_indice_verre!=2)
			{
				echo '<div class="radio radio-warning radio-inline">
				<input type="radio" id="indice_verre_'.$value->id_indice_verre.'" value="'.$value->id_indice_verre.'" name="id_indice_verre" class="required">
				<label for="indice_verre_'.$value->id_indice_verre.'"> '.$value->indice_verre.' </label>
			</div>';
			}
		}
		else
		{
			echo '<div class="radio radio-warning radio-inline">
				<input type="radio" id="indice_verre_'.$value->id_indice_verre.'" value="'.$value->id_indice_verre.'" name="id_indice_verre" class="required">
				<label for="indice_verre_'.$value->id_indice_verre.'"> '.$value->indice_verre.' </label>
			</div>';
		}
    }
?>