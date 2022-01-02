<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_verres extends CI_Model {

    var $table = 'verres';

    var $fields = array(
            'id_verre'               => 'id_verre',
            'id_generation_verre'    => 'id_generation_verre',
            'id_indice_verre'        => 'id_indice_verre',
            'libelle_verre'          => 'libelle_verre',
            'prix_verre'             => 'prix_verre'
    );

    public function __construct() {
        parent::__construct();
    }

    public function ajoutVerre($data){
        $this->db->insert($this->table, $data);
    }

    public function getVerre($data){

        $sql ='1=1';
		$groupBy = "GROUP BY id_verre,libelle_verre,id_generation_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre, supplement";
    
        $orderBy = "id_verre, id_grille_tarifaire";
    
        if(isset($data['id_generation_verre'])){
            $sql = 'id_generation_verre IN('.$data['id_generation_verre'].')';
            $orderBy = "indice_verre, v.id_verre, id_grille_tarifaire";
        }
			
		if(isset($data['id_indice_verre']))
			$sql .= ' AND v.id_indice_verre='.$data['id_indice_verre'];
			
		if(isset($data['prixVerre']))
			$groupBy = "";

        if(isset($data['grille']))
            $sql .= ' AND id_grille_tarifaire = '.$data['grille'];
		
        $sqlResult = 'SELECT v.id_verre,libelle_verre,id_generation_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre, supplement
                                   FROM '.$this->table.' v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE '.$sql.'
                                   AND v.active = 1
                                   AND id_grille_tarifaire = 1
								   '.$groupBy.'
                                   ORDER BY '.$orderBy;
        //var_dump($sqlResult);die;
        $query = $this->db->query($sqlResult);
		
		
        if ($query->num_rows() > 0)
            return $query->result();

        return false;
    }
	
	public function getVerreA($data){

        $sql ='1=1';
		$groupBy = "GROUP BY id_verre";
    
        $orderBy = "id_verre, id_grille_tarifaire";
    
        $sql = 'id_generation_verre = "23"';
        $orderBy = "indice_verre, v.id_verre, id_grille_tarifaire";
			
		if(isset($data['id_indice_verre']))
			$sql .= ' AND v.id_indice_verre='.$data['id_indice_verre'];
			
		if(isset($data['prixVerre']))
			$groupBy = "";

        if(isset($data['grille']))
            $sql .= ' AND id_grille_tarifaire = '.$data['grille'];


        $query = $this->db->query('SELECT v.id_verre,libelle_verre,id_generation_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre, supplement
                                   FROM '.$this->table.' v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE '.$sql.'
                                   AND v.active = 1  AND v.id_verre<41228
								   '.$groupBy.'
                                   ORDER BY '.$orderBy);
		

        if ($query->num_rows() > 0)
            return $query->result();

        return false;
    }
	
	public function getVerreASM($data){

        $sql ='1=1';
		$groupBy = "GROUP BY id_verre";
    
        $orderBy = "id_verre, id_grille_tarifaire";
    
        $sql = 'id_generation_verre = "23"';
        $orderBy = "indice_verre, v.id_verre, id_grille_tarifaire";
			
		if(isset($data['id_indice_verre']))
			$sql .= ' AND v.id_indice_verre='.$data['id_indice_verre'];
			
		if(isset($data['prixVerre']))
			$groupBy = "";

        if(isset($data['grille']))
            $sql .= ' AND id_grille_tarifaire = '.$data['grille'];


        $query = $this->db->query('SELECT v.id_verre,libelle_verre,id_generation_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre, supplement
                                   FROM '.$this->table.' v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE '.$sql.'
                                   AND v.active = 1 AND v.id_verre>=41228
								   '.$groupBy.'
                                   ORDER BY '.$orderBy);
		

        if ($query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getSpecificVerre($data){

        $sql_add = '';
        $order = 'ORDER BY ordre_verre ASC';

        if(isset($data['miroir']) && $data['miroir'] != 0) {
            //$sql_add = 'AND (libelle_verre LIKE "%Gris C%" OR libelle_verre LIKE "%Brun C%" OR libelle_verre LIKE "%G15%" OR libelle_verre LIKE "%Black%") ';

            $sql_add = '';

           /* $sql_add .= 'AND (libelle_verre
            LIKE "%Gris C Durci%" OR libelle_verre 
            LIKE "%Gris C Durci Polarisé%" OR libelle_verre 
            LIKE "%Gris C HMC Face interne%" OR libelle_verre 
            LIKE "%Gris C HMC Face interne Polarisé%" OR libelle_verre 
            LIKE "%Gris C Dégradé Durci%" OR libelle_verre 
            LIKE "%Gris C Dégradé HMC Face interne%" OR libelle_verre 
            LIKE "%Brun C Durci%" OR libelle_verre 
            LIKE "%Brun C Durci Polarisé%" OR libelle_verre 
            LIKE "%Brun C HMC Face interne%" OR libelle_verre 
            LIKE "%Brun C HMC Face interne Polarisé%" OR libelle_verre 
            LIKE "%Brun C Dégradé Durci%" OR libelle_verre 
            LIKE "%Brun C Dégradé HMC Face interne%" OR libelle_verre 
            LIKE "%G15 C Durci%" OR libelle_verre 
            LIKE "%G15 C Durci Polarisé%" OR libelle_verre 
            LIKE "%G15 C HMC Face interne%" OR libelle_verre 
            LIKE "%G15 C HMC Face interne Polarisé%" OR libelle_verre 
            LIKE "%G15 C Dégradé Durci%" OR libelle_verre 
            LIKE "%G15 C Dégradé HMC Face interne%" OR libelle_verre 
            LIKE "%Black C Durci%" OR libelle_verre 
            LIKE "%Black C HMC Face interne%" OR libelle_verre 
            LIKE "%Black C Dégradé Durci%" OR libelle_verre 
            LIKE "%Black C Dégradé HMC Face interne%")';*/

            $sql_add .= 'AND (libelle_verre 
            LIKE "%Gris C HMC Face interne%" OR libelle_verre 
            LIKE "%Gris C HMC Face interne Polarisé%" OR libelle_verre 
            LIKE "%Gris C Dégradé HMC Face interne%" OR libelle_verre 
            LIKE "%Brun C HMC Face interne%" OR libelle_verre 
            LIKE "%Brun C HMC Face interne Polarisé%" OR libelle_verre 
            LIKE "%Brun C Dégradé HMC Face interne%" OR libelle_verre 
            LIKE "%G15 C HMC Face interne%" OR libelle_verre 
            LIKE "%G15 C HMC Face interne Polarisé%" OR libelle_verre 
            LIKE "%G15 C Dégradé HMC Face interne%" OR libelle_verre 
            LIKE "%Black C HMC Face interne%" OR libelle_verre 
            LIKE "%Black C Dégradé HMC Face interne%")';

            if($data['miroir'] == 4 || $data['miroir'] == 6 || $data['miroir'] == 8) {
                $sql_add .= 'AND (libelle_verre NOT LIKE "%Polarisé%")';
            }

            //$order = 'ORDER BY libelle_verre ASC';
        }

        if(isset($data['filter']) && $data['filter'] != 0) {

            // 1 = Gris, 2 = Brun, 3 = G15, 4 = Transition, 5 = Polarise

            switch($data['filter']) {

                case 1:
                    $sql_add .= ' AND (libelle_verre LIKE "%Gris%" AND libelle_verre NOT LIKE "%Transition%" AND libelle_verre NOT LIKE "%Xtractive%" AND libelle_verre NOT LIKE "%Polaris%")';
                    break;

                case 2:
                    $sql_add .= ' AND (libelle_verre LIKE "%Brun%" AND libelle_verre NOT LIKE "%Transition%" AND libelle_verre NOT LIKE "%Xtractive%" AND libelle_verre NOT LIKE "%Polaris%")';
                    break;

                case 3:
                    $sql_add .= ' AND (libelle_verre LIKE "%G15%" AND libelle_verre NOT LIKE "%Transition%" AND libelle_verre NOT LIKE "%Xtractive%" AND libelle_verre NOT LIKE "%Polaris%")';
                    break;

                case 4:
                    $sql_add .= ' AND libelle_verre LIKE "%Transition%"';
                    break;

                case 5:
                    $sql_add .= ' AND libelle_verre LIKE "%Polaris%"';
                    break;

            }

        }
        /*else {
            $sql_add .= ' AND libelle_verre NOT LIKE "%Transition%"';
        }*/
		$panierA_sans_monture = get_cookie("panierA_sans_monture");
			if($panierA_sans_monture=='1'){
				$sql_add .= ' AND v.id_verre>=41228';
			}
			else
			{
				$sql_add .= ' AND v.id_verre<41228';
			}

        $query = $this->db->query('SELECT v.id_verre,libelle_verre,prix_verre,libelle_verre_personnalise, supplement, v.ordre_verre
                                   FROM '.$this->table.' v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   LEFT JOIN (
                                            SELECT id_generation_verre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise
                                            WHERE id_users = '.$data['id_users'].'
                                   ) as vgp
                                   ON (
                                    v.id_generation_verre = vgp.id_generation_verre
                                   )
                                   WHERE v.id_generation_verre='.$data['id_generation_verre'].'
                                   AND id_indice_verre='.$data['id_indice_verre'].'
                                   AND id_grille_tarifaire='.$data['id_grille_tarifaire'].'
                                   '.$sql_add.'
                                   AND prix_verre >0
                                   AND active = 1
                                   '.$order.'
                                   ');

        if ($query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getPrixVerre($id_verre=null,$id_grille,$id_users){
        if(!empty($id_verre) && !empty($id_users)){
            $query = $this->db->query('SELECT libelle_verre,prix_verre,libelle_verre_personnalise, supplement
                                       FROM '.$this->table.' v
                                       INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
									   LEFT JOIN (
                                            SELECT id_generation_verre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise
                                            WHERE id_users = '.$id_users.'
									   ) as vgp
									   ON (
										v.id_generation_verre = vgp.id_generation_verre
									   )
                                       WHERE v.id_verre='.$id_verre.'
                                       AND id_grille_tarifaire='.$id_grille);

            if ($query->num_rows() > 0)
                return $query->result();
        }

        return false;
    }
    
    public function addVerre($data){
      $this->db->query("INSERT INTO ".$this->table." (id_generation_verre,id_indice_verre,libelle_verre) VALUES ('".$data['id_generation_verre']."','".$data['id_indice_verre']."','".$data['libelle_verre']."')");
      
      return $this->db->insert_id();
    }
    
    public function desactive_verre($data){
        $this->db->query("UPDATE ".$this->table." SET active = 0 WHERE id_verre = ".$data['id_verre']);
    
    }
    
    public function updateOrdre($data){
    
    
      $this->db->query("UPDATE ".$this->table." SET order_verre = ".$data['order_verre']." WHERE id_verre = ".$data['id_verre']);
    
       /*$query = $this->db->query('SELECT MAX(order_verre) as max_order
                                  FROM '.$this->table.' v
                                  WHERE id_grille_tarifaire = '.$data['id_grille_tarifaire']);

        if ($query->num_rows() > 0){
           $result = $query->result();
           
           for($order_verre = $data['order_verre']; $order_verre <= $result[0]['max_order']; $order_verre++){
              $this->db->query("UPDATE ".$this->table." SET order_verre = ".($order_verre + 1)." WHERE id_grille_tarifaire = ".$data['id_grille_tarifaire']." AND order_verre = ".);
           }
           
        }*/
    }
}