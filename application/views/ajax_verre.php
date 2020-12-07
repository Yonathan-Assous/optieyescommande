<select name="id_verre" id="id_verre" class="required select-search form-control">
<?php

    if(isset($verre) && is_array($verre)){
        echo '<option value="">Choisir un verre</option>'."\n";
        foreach($verre as $key => $value){
            
            $supplement = 0;
            if($user_supplement > 0) {
                if($value->supplement == 1) {
                    $supplement = $user_supplement;
                }
            }
            
            echo '<option value="'.$value->id_verre.'" class="required">'.$value->libelle_verre.($restriction == 1 ? '' : ' (<strong>' .($value->prix_verre+$supplement).' €</strong>)').'</option>'."\n";
        }
    }

?>
</select>