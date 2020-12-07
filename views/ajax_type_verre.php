<?php

	foreach($type_generation_verre as $key => $value){

		echo '<div class="radio radio-warning">
			<input type="radio" id="type_verre'.$value->id_type_generation_verre.'" value="'.$value->id_type_generation_verre.'" name="id_type_generation_verre" class="required">
			<label for="type_verre'.$value->id_type_generation_verre.'"> '.$value->type_generation_verre.' </label>
		</div>';

	}
?>