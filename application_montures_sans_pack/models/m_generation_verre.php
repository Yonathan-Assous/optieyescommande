<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_generation_verre extends CI_Model {

    var $table = 'generation_verre';

    var $fields = array(
            'id_generation_verre'             => 'id_generation_verre',
            'generation_verre'                => 'generation_verre',
            'id_type_generation_verre'        => 'id_type_generation_verre',
            'order_generation_verre'          => 'order_generation_verre',
            'order_menu'                      => 'order_menu'
    );

    public function __construct() {
        parent::__construct();
    }

    public function getGenerationVerre($id_type_generation_verre="",$id_users=null, $verre_perso=true, $admin = true){
        $sql=$LEFT ="";

        if($admin)
          $orderBy = "order_menu ASC";
        else
          $orderBy = "order_generation_verre ASC";
          
        if(!empty($id_type_generation_verre)){
            $sql = "AND gv.id_type_generation_verre='".$id_type_generation_verre."'";
        }
			
		if(!empty($id_users)){
			$LEFT = "LEFT JOIN (
								SELECT id_generation_verre,libelle_verre_personnalise
								FROM verres_generation_personnalise
								WHERE id_users = ".$id_users."
					   ) as vgp
					   ON (
						gv.id_generation_verre = vgp.id_generation_verre
					   )";
		}

        $query = $this->db->query("SELECT gv.id_generation_verre,".($verre_perso ? "IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as" : "")." generation_verre, id_type_generation_verre
                                   FROM ".$this->table." gv
                                   ".$LEFT."
                                   WHERE 1=1
                                   ".$sql." AND gv.active = 1 
                                   ORDER BY ".$orderBy);           

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getIndiceVerre($id_generation_verre){
        $query = $this->db->query("SELECT iv.id_indice_verre,indice_verre
                                   FROM ".$this->table." gv
                                   INNER JOIN indice_generation_verre igv ON igv.id_generation_verre = gv.id_generation_verre
                                   INNER JOIN indice_verre iv ON igv.id_indice_verre = iv.id_indice_verre
                                   WHERE gv.id_generation_verre=".$id_generation_verre." 
                                   AND iv.active = 1
                                   ORDER BY indice_verre");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
}