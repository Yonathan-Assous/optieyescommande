<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_grille_stock extends CI_Model {

    var $table = 'grille_stock';

    var $fields = array(
            'id_verre'        => 'id_verre',
            'diametre'		  => 'diametre',
            'grille_stock'    => 'grille_stock',
            'traduction_verre' => 'traduction_verre'
    );

    public function __construct() {
        parent::__construct();
    }

    public function getGrilleStock($data){

         $libelle_verre = "";
      
        if(isset($data['miroir']) && $data['miroir'] != "undefined" && $data['miroir'] != 0) {
          $libelle_verre = "AND libelle_verre like '%miroir%'";
        }
        else if(isset($data['polarise']) && $data['polarise'] != "undefined" && $data['polarise'] != "Non polarisé") {
          $libelle_verre = "AND libelle_verre like '%polarisé%'";
        }
        else if((isset($data['teinte']) && $data['teinte'] != "undefined" && $data['teinte'] == "Non Teinté") || (isset($data['photocromie']) && $data['photocromie'] != "undefined" && $data['photocromie'] == "Non Photocromique")){

            if(isset($data['photocromie']) && $data['photocromie'] != "undefined" && $data['photocromie'] == "Non Photocromique") {
                $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre NOT LIKE '%Photo%'";
            }
            else {
                $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'";
            }

        }
        else if(isset($data['teinte']) && $data['teinte'] != "undefined"){
          $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre like '%".$data['teinte']."%'";
        }
        else if(isset($data['photocromie']) && $data['photocromie'] != "undefined") {
          $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre like '%".$data['photocromie']."%'";
        }
        else {
          $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%'";
        }
        
        $query = $this->db->query("SELECT grille_stock
                                   FROM ".$this->table." gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = ".$data['id_generation_verre']." 
                                   AND id_indice_verre =".$data['id_indice_verre']." 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   ".$libelle_verre);

        if ($query && $query->num_rows() > 0)
          return $query->result();
        
        return false;
    }
    
    public function getGrille($data){
       $query = $this->db->query("SELECT grille_stock
                                   FROM ".$this->table."
                                   WHERE diametre = ".$data['diametre']." 
                                   AND id_verre =".$data['id_verre']);
                                   
                                   
       if ($query && $query->num_rows() > 0)
          return $query->result();
        
        return false;
    }
	
	public function addGrilleStock($data){
		$data = array_intersect_key($data, $this->fields);

		foreach($data as $num => $key)
			$data_key[] = $num;

		$this->db->query("INSERT INTO ".$this->table." (".implode(', ', $data_key).") VALUES (".$data['id_verre'].",".$data['diametre'].",'".$data['grille_stock']."') ON DUPLICATE KEY UPDATE grille_stock='".$data['grille_stock']."'");
	}
	
	public function DeleteGrilleStock($data){
		$this->db->query("DELETE FROM ".$this->table." WHERE id_verre=".$data['id_verre']." AND diametre=".$data['diametre']);
	}
  
   public function getDiametre($data){

     $libelle_verre = "";

       // Arf
       if($data['id_generation_verre'] == 18) {
           return 'stock_progressif';
       }

        if(isset($data['miroir']) && $data['miroir'] != "undefined" && $data['miroir'] != 0) {
          $libelle_verre = "AND libelle_verre like '%miroir%'";
        }
        else if(isset($data['polarise']) && $data['polarise'] != "undefined" && $data['polarise'] != "Non polarisé") {
            if($data['id_generation_verre'] == 17) {
                $libelle_verre = "AND libelle_verre like '%".$data['polarise']."%'";
            }
            else {
                $libelle_verre = "AND libelle_verre like '%polarisé%'";
            }

        }
        else if((isset($data['teinte']) && $data['teinte'] != "undefined" && $data['teinte'] == "Non Teinté") || (isset($data['photocromie']) && $data['photocromie'] != "undefined" && $data['photocromie'] == "Non Photocromique")){

            if($data['teinte'] != "undefined" && $data['teinte'] != "Non Teinté") {
                $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre like '%".$data["teinte"]."%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'";
            }
            else {
                $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'";

            }

        }
        else if(isset($data['teinte']) && $data['teinte'] != "undefined"){
          $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre like '%".$data['teinte']."%'";
        }
        else if(isset($data['photocromie']) && $data['photocromie'] != "undefined") {
          $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%' AND libelle_verre like '%".$data['photocromie']."%'";
        }
        else {
            $libelle_verre = "AND libelle_verre like '%".$data['traitement']."%'";
        }

		$query = $this->db->query("SELECT DISTINCT(diametre), grille_stock
								   FROM ".$this->table." gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = ".$data['id_generation_verre']." 
								   AND id_indice_verre =".$data['id_indice_verre']." 
								   AND ACTIVE = 1 ".$libelle_verre);


							   
     if ($query && $query->num_rows() > 0){
         return $query->result();
     }
        
        return false;
   }
   
   public function getAllGrilleStock(){
       $query = $this->db->query("SELECT diametre,grille_stock,libelle_verre,prix_verre,v.id_verre
                                  FROM ".$this->table." gs
                                  INNER JOIN verres v ON v.id_verre = gs.id_verre
                                  INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                  WHERE ACTIVE = 1
                                  GROUP BY v.id_verre,diametre");
                
        $data = array();
         
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            $data[$result->id_verre][$result->diametre] = $result;
          }
        
          return $data;
        }
        
      return false;
   }
}