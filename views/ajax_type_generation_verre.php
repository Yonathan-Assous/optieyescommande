<?php
    foreach($generation_verre as $key => $value){

        echo '<div class="radio radio-warning">
			<input type="radio" id="gamme_verres_'.$value->id_generation_verre.'" value="'.$value->id_generation_verre.'" name="id_generation_verre" class="'.( $value->id_generation_verre > 11 ? 'cacher' : 'required').'">
			<label for="gamme_verres_'.$value->id_generation_verre.'"> '.$value->generation_verre.' </label>
		</div>';

    }
?>