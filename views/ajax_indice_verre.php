<?php
    foreach($indice_verre as $key => $value){

        echo '<div class="radio radio-warning radio-inline">
			<input type="radio" id="indice_verre_'.$value->id_indice_verre.'" value="'.$value->id_indice_verre.'" name="id_indice_verre" class="required">
			<label for="indice_verre_'.$value->id_indice_verre.'"> '.$value->indice_verre.' </label>
		</div>';
    }
?>