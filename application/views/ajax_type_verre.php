<?php

	foreach($type_generation_verre as $key => $value){
		$panierA = get_cookie("panierA");
		$panierA_sans_monture = get_cookie("panierA_sans_monture");
			if($panierA_sans_monture=='1'){
				$panierA='1';
			}
		if(($panierA==$user_id || $panierA=="1") && $panierA!="")
		{
			if($value->id_type_generation_verre!=7)
			{
				echo '<div class="radio radio-warning">
				<input type="radio" id="type_verre'.$value->id_type_generation_verre.'" value="'.$value->id_type_generation_verre.'" name="id_type_generation_verre" class="required">
				<label for="type_verre'.$value->id_type_generation_verre.'"> '.$value->type_generation_verre.' </label>
			</div>';
			}
		}
		else
		{
			echo '<div class="radio radio-warning">
				<input type="radio" id="type_verre'.$value->id_type_generation_verre.'" value="'.$value->id_type_generation_verre.'" name="id_type_generation_verre" class="required">
				<label for="type_verre'.$value->id_type_generation_verre.'"> '.$value->type_generation_verre.' </label>
			</div>';
		}

	}
?>