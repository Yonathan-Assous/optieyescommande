<?php
if(!empty($list_reduction)) {
    foreach ($list_reduction as $val) {
        list($year, $month, $day) = explode("-", $val->date_remise);
        echo '<div class="row"><div class="col-xs-4">' . $day . '/' . $month . '/' . $year . '</div>
        <div class="col-xs-4"><b>' . $val->reduction . ' €</b></div> 
        <div class="col-xs-4"><a class="btn btn-warning btn-sm pull-right" href="#" id="deleteRemise_' . $val->date_remise . '_' . $val->id_users . '" ><i class="zmdi zmdi-close"></i> Supprimer</a></div></div>';
    }
}
else {
    echo '0';
}
?>