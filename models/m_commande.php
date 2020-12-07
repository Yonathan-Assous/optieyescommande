<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_commande extends CI_Model {

    var $table = 'commande';
	var $table_commentaire = 'commande_commentaire';
	var $table_pointage = 'commande_pointage';
	var $table_journaliere = 'commande_journaliere';

    var $fields = array(
            'origine_commande'				 => 'origine_commande',
            'ancienne_commande'				 => 'ancienne_commande',
            'id_commande'                    => 'id_commande',
            'id_users'                       => 'id_users',
            'date_commande'                  => 'date_commande',
            'id_etat_commande'               => 'id_etat_commande',
            'date_update_commande'           => 'date_update_commande',
            'reference_client'               => 'reference_client',
            'id_generation_verre'            => 'id_generation_verre',
            'id_type_generation_verre'       => 'id_type_generation_verre',
            'id_verre'                       => 'id_verre',
            'id_indice_verre'                => 'id_indice_verre',
            'information_commande'           => 'information_commande',
            'information_certificat'         => 'information_certificat',
            'taux_tva'						 => 'taux_tva',
            'prix_verre'					 => 'prix_verre',
            'total_commande'                 => 'total_commande',
            'tarif_livraison'                => 'tarif_livraison',
            'email_send'                     => 'email_send',
            'type_commande'					 => 'type_commande',
            'intitule_bl' 					 => 'intitule_bl',
            'date_annule' => 'date_annule'
    );

    public function __construct() {
        parent::__construct();
    }

    public function getCommandeByUser($data){
	
        $add = "";
		if(isset($data['tri']) && $data['tri'] == "stock")
			$add = "AND c.id_type_generation_verre = 5 ";
		else if(isset($data['tri']) && $data['tri'] == "others")
				$add = "AND c.id_type_generation_verre <> 5 ";

        if(isset($data['type_commande']) && $data['type_commande'] == 1) {
            $add .= 'AND c.type_commande > 1';
        }
			
        $query = $this->db->query("SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande,c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as generation_verre,
                                   type_generation_verre,libelle_verre,commentaire,c.prix_verre,intitule_bl, (TarifLivraison1 + COALESCE(TarifLivraison2, 0)) as TarifLivraison
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
                                      FROM commande cc
                                      WHERE cc.id_users = ".$data['id_users']."
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr
                                   ON (
                                      c.id_commande = idCommande
                                   )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                                      FROM commande cc
                                      WHERE cc.id_users = ".$data['id_users']."
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr2
                                   ON (
                                      c.id_commande = idCommande2
                                   )
                                   WHERE id_users=".$data['id_users']." ".$add."
                                   ORDER BY date_commande DESC");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    function getAllCommandeByUser($id_users = false) {

        if($id_users !== false) {

            $id_users = intval($id_users);
            $query = $this->db->query('SELECT c.id_commande, c.reference_client, v.libelle_verre, c.date_commande  FROM commande AS c LEFT JOIN verres AS v ON c.id_verre = v.id_verre WHERE id_users = '.$id_users.' ORDER BY date_commande DESC');

            if ($query && $query->num_rows() > 0) {
                return $query->result();
            }
            else {
                return false;
            }

        }
        else {
            return false;
        }

    }


    function countAllCommande() {
        
            $query = $this->db->query('SELECT COUNT(id_commande) as total  FROM commande');

            if ($query && $query->num_rows() > 0) {
                return $query->result();
            }
            else {
                return false;
            }

    }

    function getCommandeById($id_commande, $id_users = false){
        $sql_add = "";
        
        if($id_users !== false)
          $sql_add .= "AND c.id_users =".$id_users;
          
        $query = $this->db->query("SELECT c.id_commande,date_commande,c.id_etat_commande,information_commande,ancienne_commande,reference_client,total_commande,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,c.id_users,
                                          generation_verre,type_generation_verre,libelle_verre,c.prix_verre,commentaire,libelle_verre_personnalise,type_commande,c.intitule_bl, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande=".$id_commande." ".$sql_add."
                                   ORDER BY date_commande DESC");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getAllCommande($id_etat_commande=false,$id_magasin=false){

		$sql_add = $sql_order = "";
		
        if($id_etat_commande)
            $sql_add = "WHERE c.id_etat_commande < 5
						AND HOUR( TIMEDIFF( NOW() , date_update_commande ) ) >= 24";
		else
			$sql_add = "WHERE c.id_etat_commande < 6";
			
		if($id_magasin !== false)
			$sql_add .=" AND id_magasin = ".$id_magasin;
		else
			$sql_add .=" AND id_magasin = 1";
		
		if($id_magasin !== false)
			$sql_order = "ORDER BY c.id_commande DESC";
		else
			$sql_order = "ORDER BY date_commande DESC";

        $query = $this->db->query("SELECT c.id_users,c.id_commande,c.ancienne_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   ".$sql_add." ".$sql_order);
								   
        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
	
	public function getOldOrder($startLimit,$offsetLimit,$search, $id_users){
		$limit = $sWhere = "";
		 
		if(isset( $startLimit ) && $offsetLimit != '-1' ){
			$limit = "LIMIT ". $startLimit .", ".$offsetLimit;
		}
		
		if($search != "" || $id_users !== false){
			$addOthersFields = true;
			$addField = "";
			$sWhere = "AND ";
			
            if($id_users !== false) {
              $addField .= "c.id_users = " . $id_users;
            }


            /*if(preg_match("/^(CR|cr)([0-9])+(-)?([0-9])*$/", $search) && $addField == ""){
                $num_commande = explode("-",$search);
                $num_commande = substr($num_commande[0],2);

                $addField .= "c.id_commande = ".$this->db->escape_str( $num_commande );
            }

            if(substr_count($search, '/') == 2 && $addField == ""){
                $date = explode("/",$search);
                $addField .= "c.date_commande like '".$date[2]."-".$date[1]."-".$date[0]."%' OR c.date_update_commande like '".$date[2]."-".$date[1]."-".$date[0]."%'";
            }*/

            if($addField == ""){
                $addField .= " c.reference_client like '%".$this->db->escape_str( $search )."%' ||
                c.date_commande like '%".$this->db->escape_str( $search )."%' ||
                c.id_commande like '%".$this->db->escape_str( $search )."%' ||
                c.reference_client like '%".$this->db->escape_str( $search )."%'
                ";
            }
			
			$sWhere .= $addField;
		}
		
		 $query = $this->db->query("SELECT c.id_users,c.id_commande,date_commande,reference_client,date_update_commande,type_commande,nom_magasin,nom_societe,commentaire
                                    FROM ".$this->table." c
                                    INNER JOIN users u ON c.id_users = u.id_users 
                                    LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                    WHERE c.id_etat_commande = 6
                                    AND c.lens_id = 0
                                    ".$sWhere."
                                    ORDER BY date_update_commande DESC ".$limit);

												
        if ($query && $query->num_rows() > 0){
			$data = array();
			$data['results'] = $query->result();
			
			$query2 = $this->db->query("SELECT COUNT(id_commande) as nb_commande FROM ".$this->table." c INNER JOIN users u ON c.id_users = u.id_users WHERE c.id_etat_commande = 6 ".$sWhere);
			
			if($query2 && $query2->num_rows() > 0){
				$result = $query2->row();
				$data['total_num_rows'] = $result->nb_commande;
			
				return $data;
			}
		}

        return false;
	}

    public function update_etat_commande() {
        $commandes = $this->getAllCommande(true);

        if($commandes !== false){
            foreach($commandes as $commande){
                $date = new DateTime(date("Y-m-d H:i:s"));
                $date_commande = new DateTime($commande->date_commande);
                $jour = $date->diff($date_commande)->d;
                $tab_etat_commande = array(1 => 2, 2 => 3, 3 => 4, 4 => 4, 5 => 4, 6 => 5); //Chaque clé correspond à un jour après avoir passé commande $key 1 = 1 jour donc etat commande => 2, $key 2 = 2 jours donc etat commande => 3, etc...

                $etat_commande = isset($tab_etat_commande[$jour]) ? $tab_etat_commande[$jour] : "";
						
				// en cas de soucis de cron et que le nombre de jour après avoir passé commande, dépasserait 6, la commande passe en avant dernière état
                if($jour>6)
                    $etat_commande = 5;

                if(!empty($etat_commande)){
                    $data['id_etat_commande'] = $etat_commande;
                    $data['id_commande'] = $commande->id_commande;
                    $data['date_update_commande'] = date("Y-m-d H:i:s");

					$this->db->where('id_type_generation_verre<>', 5 ,false); 
                    $this->update($data);
					

                    if($this->db->_error_message()!="")
                        return $data['error'] = $this->db->_error_message();
                }
            }
			
			return $commandes;
        }

        return false;
    }

    public function getTotalCommandeByMonth($id_users){

        $query = $this->db->query("SELECT sum(total_commande) + COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) - COALESCE(total_reductions, 0) as total, date_commande, DATE(date_commande), date_remise, total_reductions
                                   FROM ".$this->table." c
                                   LEFT JOIN
                                    (SELECT
                                        SUM(reduction) AS total_reductions,
                                        date_remise
                                    FROM
                                        facture_reduction
                                    WHERE id_users = ".$id_users."
                                    GROUP BY DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                      DATE_FORMAT(date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                                        FROM commande cc
                                        WHERE cc.id_users = ".$id_users."
                                        AND tarif_livraison > 0
                                        AND id_etat_commande = 6
                                        AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                        GROUP BY id_users,date(date_update_commande)      
                                   ) as tarif_livr
                                   ON (
                                    c.id_commande = idCommande
                                       )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                                      FROM commande cc
                                      WHERE cc.id_users = ".$id_users."
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr2
                                   ON (
                                      c.id_commande = idCommande2
                                   )
                                   WHERE c.id_users=".$id_users."
                                   GROUP BY DATE_FORMAT(date_commande, '%m-%Y')
                                   ORDER BY date_commande DESC");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }


    public function getTotalCommandeByYear($id_users){

        $year = date('Y', time());
        $query = $this->db->query("SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = ".$id_users." AND type_commande = 1 AND date_commande > '".$year."-01-01 00:00:00'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getTotalECCommandeByYear($id_users){

        $year = date('Y', time());
        $query = $this->db->query("SELECT SUM(total_commande) AS total FROM commande WHERE id_users = ".$id_users." AND type_commande > 1 AND date_commande > '".$year."-01-01 00:00:00'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getAllCommandeByMonth($data){
    
         $tarif_appoint = 0;  
         $TabHoraireTarifLiv = array(); 
		 
			$query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande, type_commande
									   FROM ".$this->table." c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."' 
											AND cc.id_users=".$data['id_users']."
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '".$data['date']."' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."'
										  AND cc.id_users=".$data['id_users']."
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '".$data['date']."' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '".$data['date']."' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '".$data['date']."'
									  AND c.id_users=".$data['id_users']."
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)");
									  
			if ($query && $query->num_rows() > 0){
				foreach($query->result() as $result){
					
					array_push($TabHoraireTarifLiv,$result->date_update_commande);
				
					$tarif_appoint += $result->tarif_liv;
				}	
            }
			
                                  
        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users, date_update_commande, type_commande
         FROM ".$this->table." c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$data['date']."'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date']  . '-01 -1 month'))."'
          AND cc.id_users=".$data['id_users']."
          AND tarif_livraison > 0 
          AND id_etat_commande = 6
          AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
          GROUP BY id_users,date(date_update_commande)
          ) as tarif_livr
          ON (
           c.id_commande = idCommande
           )
           LEFT JOIN (
          SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$data['date']."'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date']  . '-01 -1 month'))."'
            AND cc.id_users=".$data['id_users']."
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$data['date']."'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=".$data['id_users']."
           AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date']  . '-01 -1 month'))."'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users");
                                  
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            $add = true;
				
              if(count($TabHoraireTarifLiv) > 0){
                foreach($TabHoraireTarifLiv as $dateHoraire){
                  $date1 = explode(" ",$dateHoraire);
                  $date2 = explode(" ",$result->date_update_commande);
                  
                  if($date1[0] == $date2[0]){
                    if(($date1[1] >= '09:00:00' && $date1[1] < '16:00:00') && ($date2[1] >= '09:00:00' && $date2[1] < '16:00:00')) {
                      $add = false;
                      break;
                    } 
                    
                    if(($date1[1] < '09:00:00' || $date1[1] >= '16:00:00') && ($date2[1] < '09:00:00' || $date2[1] >= '16:00:00')) {
                      $add = false;
                      break;
                    }
                  }
                }
              }
				
              if($add)
                  $tarif_appoint += $result->tarif_liv;
          }
        }
    
            $query = $this->db->query("SELECT c.id_commande,c.id_users, c.type_commande, date_commande,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande
                                       FROM ".$this->table." c
                                       INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = ".$data['id_users']."
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=".$data['id_users']."
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '".$data['date']."'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC");

            if ($query && $query->num_rows() > 0){
              $data = $query->result();
                if($tarif_appoint != 0){
                  $data[0]->TarifLivraison += $tarif_appoint;
                }
                
              return $data;
            }   
          
		$query2 = $this->db->query("SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '".$data['date']."-01' as date_commande,cp,nom_magasin,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM ".$this->table." c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."'
												AND tarif_livraison > 0
												AND cc.id_users =".$data['id_users']."
												AND id_etat_commande = 6
												AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
												GROUP BY id_users,date(date_update_commande)   
										   ) as tarif_livr
										   ON (
											   c.id_commande = idCommande
										   )
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
											  FROM commande cc
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."'
											  AND cc.id_users =".$data['id_users']."
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date'].'-01 -1 month'))."' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '".$data['date']."' 
										AND id_etat_commande = 6
										AND c.id_users =".$data['id_users']);
															  
														
		
		if ($query2 && $query2->num_rows() > 0){	
			return $query2->result();
		}
			
        return false;
    }
    
    public function getAllCommandeByMonthForAllbill($data){
          $TabHoraireTarifLiv = array(); 
          
        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users,date_update_commande
                                   FROM ".$this->table." c
                                   LEFT JOIN 
                                    (
                                   	  SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
                                      FROM commande cc
                                      WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND DATE_FORMAT(date_commande, '%Y-%m') = '".$data['date']."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)                                      
                                   ) as tarif_livr
                                   ON (
                                      c.id_commande = idCommande
                                   )
                                   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                                      FROM commande cc
                                      WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m') = '".$data['date']."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr2
                                   ON (
                                      c.id_commande = idCommande2
                                   )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '".$data['date']."'
								  AND id_etat_commande = 6
                                  GROUP BY c.id_users
                                  ORDER BY c.id_users");

        $tarif_appoint = array();                          
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            if(!isset($TabHoraireTarifLiv[$result->id_users]))
              $TabHoraireTarifLiv[$result->id_users] = array();
               
            array_push($TabHoraireTarifLiv[$result->id_users],$result->date_update_commande);
               
            if(isset($tarif_appoint[$result->id_users])){
              $tarif_appoint[$result->id_users] += $result->tarif_liv;
            } else {
              $tarif_appoint[$result->id_users] = $result->tarif_liv;
            }
          }
        }      
                 
        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users, date_update_commande
                                   FROM ".$this->table." c
                                   LEFT JOIN 
                                    ( 
                                    SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                                    FROM commande cc 
                                    WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$data['date']."'
                                    AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date']  . '-01 -1 month'))."'
                                    AND tarif_livraison > 0 
                                    AND id_etat_commande = 6
                                    AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                    GROUP BY id_users,date(date_update_commande)
                                    ) as tarif_livr
                                    ON (
                                     c.id_commande = idCommande
                                     )
                                     LEFT JOIN (
                                    SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                                      FROM commande cc
                                      WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$data['date']."'
                                      AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date']  . '-01 -1 month'))."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                     ) as tarif_livr2
                                     ON (
                                      c.id_commande = idCommande2
                                     )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$data['date']."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date']  . '-01 -1 month'))."'
                                     GROUP BY id_users,date(date_update_commande)
                                   ORDER BY c.id_users");
                        
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
              $add = true;
				
              if(isset($TabHoraireTarifLiv[$result->id_users])){
                foreach($TabHoraireTarifLiv[$result->id_users] as $dateHoraire){
                  $date1 = explode(" ",$dateHoraire);
                  $date2 = explode(" ",$result->date_update_commande);
                  
                  if($date1[0] == $date2[0]){
                    if(($date1[1] >= '09:00:00' && $date1[1] < '16:00:00') && ($date2[1] >= '09:00:00' && $date2[1] < '16:00:00')) {
                      $add = false;
                      break;
                    } 
                    
                    if(($date1[1] < '09:00:00' || $date1[1] >= '16:00:00') && ($date2[1] < '09:00:00' || $date2[1] >= '16:00:00')) {
                      $add = false;
                      break;
                    }
                  }
                }
              }
				
              if($add)
               if(isset($tarif_appoint[$result->id_users])){
                $tarif_appoint[$result->id_users] += $result->tarif_liv;
              } else {
                $tarif_appoint[$result->id_users] = $result->tarif_liv;
              }
          }
        }      

        $query = $this->db->query("SELECT c.id_commande,date_commande,reference_client,total_commande,generation_verre,intitule_bl, taux_tva,libelle_verre_personnalise,c.id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,num_finess,email,COALESCE(total_reductions, 0) as reduction, 0 as TarifLivraison
                                   FROM ".$this->table." c
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN (
                                            SELECT id_users as idu,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idu AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN
                                    (SELECT
                                        SUM(reduction) AS total_reductions,
                                        id_users as idusers,
                                        date_remise
                                    FROM
                                        facture_reduction
                                    WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$data['date']."'
                                    GROUP BY id_users) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m') = '".$data['date']."' 
                                   ORDER BY c.id_users DESC");
         
         if($query && $query->num_rows() > 0){
            $tab = $query->result();
            if(count($tarif_appoint) > 0){
              foreach($tab as $key => $d){
				  if(isset($tarif_appoint[$d->id_users]))
					$tab[$key]->TarifLivraison = $tarif_appoint[$d->id_users]; 
              }
            }
            
            $query2 = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as total,c.id_commande, 0 as total_commande,0 as total_stock,0 as total_fabrique, 0 as reduction, c.id_users, '' as reference_client, '' as generation_verre, '".$data['date']."-01' as date_commande,numero_siret,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,num_finess,email,id_grille_tarifaire,nom_societe,'' as intitule_bl, COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM ".$this->table." c
										INNER JOIN users u ON c.id_users = u.id_users
										LEFT JOIN 
                                       ( 
                                        SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                                        FROM commande cc 
                                        WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."' 
                                        AND tarif_livraison > 0 
                                        AND id_etat_commande = 6
                                        AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                        GROUP BY id_users,date(date_update_commande)
                                        ) as tarif_livr
									    ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$data['date']."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '".date('Y-m',strtotime($data['date'].'-01 -1 month'))."' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '".$data['date']."' 
										AND id_etat_commande = 6
										AND c.id_users NOT IN(SELECT id_users as iduser2 
															  FROM commande c2 
															  WHERE DATE_FORMAT(c2.date_commande, '%Y-%m') = '".$data['date']."')
										GROUP BY c.id_users
										ORDER BY c.id_users");
			
			foreach($query2->result() as $data2){
        if($data2->total > 0)
          array_push($tab,$data2);
      }
			
            return $tab;
		}

        return false;
    }


    public function getAllCommandeByMonthAndUser($date, $excl = null){

        if($excl) {
            $excl = 'AND c.id_users NOT IN('.implode(',', $excl).')';
        }
    
         $TabHoraireTarifLiv = array(); 
     
         $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM ".$this->table." c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".$date."' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '".$date."'
            AND id_etat_commande = 6
            ".$excl."
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users");


        $tarif_appoint = array();                          
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            if(!isset($TabHoraireTarifLiv[$result->id_users]))
                  $TabHoraireTarifLiv[$result->id_users] = array();
               
               array_push($TabHoraireTarifLiv[$result->id_users],$result->date_update_commande);
               
            if(isset($tarif_appoint[$result->id_users])){
              $tarif_appoint[$result->id_users] += $result->tarif_liv;
            } else {
               $tarif_appoint[$result->id_users] = $result->tarif_liv;
            }
          }
        }
		
                  
          $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM ".$this->table." c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
              ON (
                 c.id_commande = idCommande
               )
               LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                  FROM commande cc
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             ".$excl."
             AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users");
									 
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            $add = true;
				
              if(isset($TabHoraireTarifLiv[$result->id_users])){
                foreach($TabHoraireTarifLiv[$result->id_users] as $dateHoraire){
                  $date1 = explode(" ",$dateHoraire);
                  $date2 = explode(" ",$result->date_update_commande);
                  
                  if($date1[0] == $date2[0]){
                    if(($date1[1] >= '09:00:00' && $date1[1] < '16:00:00') && ($date2[1] >= '09:00:00' && $date2[1] < '16:00:00')) {
                      $add = false;
                      break;
                    } 
                    
                    if(($date1[1] < '09:00:00' || $date1[1] >= '16:00:00') && ($date2[1] < '09:00:00' || $date2[1] >= '16:00:00')) {
                      $add = false;
                      break;
                    }
                  }
                }
              }
				
              if($add)
                if(isset($tarif_appoint[$result->id_users]))
                  $tarif_appoint[$result->id_users] += $result->tarif_liv;
                else
                  $tarif_appoint[$result->id_users] = $result->tarif_liv;
          }
        }      
		
        $query = $this->db->query("SELECT COALESCE(total_stock, 0)  + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique, c.date_commande,c.id_users, COALESCE(total_reductions, 0) as reduction,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, 0 as tarif_liv
           FROM ".$this->table." c
           INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
           INNER JOIN users u ON u.id_users = c.id_users
           LEFT JOIN
            (SELECT
                SUM(reduction) AS total_reductions,
                id_users as idusers,
                date_remise
            FROM
                facture_reduction
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '".$date."'
            GROUP BY id_users) AS reductions
           ON (
            c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
           )
           LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
            FROM ".$this->table." c
            WHERE id_type_generation_verre = 5 
            AND type_commande = 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            GROUP BY idusersstock) as commande_stock
          ON (
              c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
          )
          LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
            FROM ".$this->table." c
            WHERE id_type_generation_verre <> 5 
            AND type_commande = 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".$date."'
          ".$excl."
          GROUP BY c.id_users
          ORDER BY c.id_users");
								  
        if ($query && $query->num_rows() > 0){
            $data = $query->result();
                
            if(count($tarif_appoint) > 0){
              foreach($data as $key => $d){
                if(isset($tarif_appoint[$d->id_users])){
                  $data[$key]->total += $tarif_appoint[$d->id_users];
                  $data[$key]->tarif_liv += $tarif_appoint[$d->id_users];
                }
              }
            }

			$query2 = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as total,0 as total_stock,0 as total_fabrique, 0 as reduction, c.id_users, '01-".$date."' as date_commande,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv
                FROM ".$this->table." c
                INNER JOIN users u ON c.id_users = u.id_users
                LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
              ON (
                 c.id_commande = idCommande
               )
               LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                  FROM commande cc
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY date(date_update_commande),id_users
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
                WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."' 
                AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '".$date."' 
                AND id_etat_commande = 6
                ".$excl."
                AND c.id_users NOT IN(SELECT id_users as iduser2 
                                      FROM commande c2 
                                      WHERE DATE_FORMAT(c2.date_commande, '%m-%Y') = '".$date."')
            
                GROUP BY id_users
                ORDER BY c.id_users");
			
			foreach($query2->result() as $data2){
         if($data2->total > 0)
          array_push($data,$data2);
			}
            return $data;
		}

        return false;
    }

    public function CAMensuel($date, $tarif_Livraison = true){

        $TarifLivraison = $tarifliv = 0;
        $TabHoraireTarifLiv = array(); 
         
        if($tarif_Livraison){
          $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande,DATE_FORMAT(date_update_commande, '%e') as day
                                     FROM ".$this->table."
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND ( DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                     GROUP BY id_users,date(date_update_commande)");
  
        
          if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
               if(!isset($TabHoraireTarifLiv[$value->id_users]))
                  $TabHoraireTarifLiv[$value->id_users] = array();
               
               array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
               $TarifLivraison += $value->TarifLivraison; 
               
               if($value->day == 1){
                $tarifliv += $value->TarifLivraison;
                }
            }
              
              
         $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande,DATE_FORMAT(date_update_commande, '%e') as day
                                     FROM ".$this->table."
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                     GROUP BY id_users,date(date_update_commande)");
          
          if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
                if(!isset($TabHoraireTarifLiv[$value->id_users]))
                  $TabHoraireTarifLiv[$value->id_users] = array();
				
                array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
                $TarifLivraison += $value->TarifLivraison;
                
                if($value->day == 1){
                  $tarifliv += $value->TarifLivraison;
                  
                  }
            }    
        
          $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as TarifLivraison,id_users,date_update_commande, DATE_FORMAT(date_update_commande, '%e') as day
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
										FROM commande cc 
										WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$date."' 
                    AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY id_users,date(date_update_commande)
										) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
										SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$date."'
                      AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
                                     GROUP BY id_users,date(date_update_commande)");

 
          if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
            $add = true;
				
              if(isset($TabHoraireTarifLiv[$value->id_users])){
                foreach($TabHoraireTarifLiv[$value->id_users] as $dateHoraire){
                  $date1 = explode(" ",$dateHoraire);
                  $date2 = explode(" ",$value->date_update_commande);
                    
                  if($date1[0] == $date2[0]){
                    if(($date1[1] >= '09:00:00' && $date1[1] < '16:00:00') && ($date2[1] >= '09:00:00' && $date2[1] < '16:00:00')) {
                      $add = false;
                      break;
                    } 
                    
                    if(($date1[1] < '09:00:00' && $date1[1] >= '16:00:00') && ($date2[1] < '09:00:00' && $date2[1] >= '16:00:00')) {
                      $add = false;
                      break;
                    }
                    
                    
                    if(($date1[1] < '09:00:00' || $date1[1] >= '16:00:00') && ($date2[1] < '09:00:00' || $date2[1] >= '16:00:00')) {
                      $add = false;
                      break;
                    }
                  }
                }
              }
				
              if($add){
                $TarifLivraison += $value->TarifLivraison;
                  
                  if($value->day == 1){
                    $tarifliv += $value->TarifLivraison;
                  }
              }
            
            }
        }
                                      
        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(total_commande),0) as ca_journalier FROM commande
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND type_commande = 1)
                                   +
                                   (".$TarifLivraison.")
								   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM facture_reduction fr
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."') as ca");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }


    public function update($data){
        $data = array_intersect_key($data, $this->fields);

        if(isset($data['id_commande']))
            $this->db->where('id_commande', $data['id_commande']);

        $this->db->update($this->table, $data);

        return $data;
    }
   
    public function updateCommandeSend($last_date_commande,$magasin=0){
		if($last_date_commande!="")
			$this->db->where("date_commande<","'".$last_date_commande."'",false);
			
		if($magasin != 0)
			if($magasin == 1)
				$this->db->where("(id_type_generation_verre <> 5 OR id_verre NOT IN (SELECT id_verre FROM verres_traduction))");
			elseif($magasin == 2)
				$this->db->where("id_type_generation_verre = 5 AND id_verre IN (SELECT id_verre FROM verres_traduction)");
				
		$this->db->where("email_send", 0);
		$this->db->set("email_send",1);
		
        $this->db->update($this->table);
    }

    public function addOrder($data){
      if(is_array($data)){
        $commentaire = "";

        if(!empty($data['commentaire']))
          $commentaire = $data['commentaire'];
          
        $numero = (int)$this->getNbDayOrder();
        $numero++;
        
        if($numero < 10)
          $numero = '00'.$numero;
        elseif($numero < 100)
          $numero = '0'.$numero;
        
        $data['intitule_bl'] = date("ymd").$numero;

        $data = array_intersect_key($data, $this->fields);

        foreach($data as $num => $key){
          $update_fields[] = $num."='".$data[$num]."'";
          $data_key[] = $num;
        }
        
        $data['reference_client'] = $this->db->escape($data['reference_client']);
        $data['information_commande'] = $this->db->escape($data['information_commande']);
        $data['origine_commande'] = (int) $data['origine_commande'];
        $data['ancienne_commande'] = (int) $data['ancienne_commande'];
        $data['information_certificat'] = $this->db->escape($data['information_certificat']);
        $data['taux_tva'] = $this->db->escape($data['taux_tva']);
        $data['date_commande'] = $this->db->escape($data['date_commande']);
        $data['date_update_commande'] = $this->db->escape($data['date_update_commande']);

        if($this->db->query("INSERT INTO ".$this->table." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")")){
          if(!empty($commentaire)){
            $data = array('id_commande' => $this->db->insert_id(), 'commentaire' => $commentaire);
            $this->db->insert($this->table_commentaire, $data);
          }
            
          $this->setNbDayOrder();
          
          return true;
        }
        
        return false;
      }
    }

    public function getCommandeJournaliere($date="", $magasin = 1, $envoi_chine = 0){
		$sql_add = "AND (c.id_type_generation_verre <> 5 OR c.id_verre NOT IN (SELECT id_verre FROM verres_traduction))";
		$date_add = "date_commande <='".$date."'";
		$email_send = " AND email_send = 0";
		$order_by = "c.id_commande";
    
		if($magasin == 2){
			$sql_add = "AND c.id_type_generation_verre = 5 AND c.id_verre IN (SELECT id_verre FROM verres_traduction)";
			$order_by = "v.libelle_verre";
		}
    
    if($envoi_chine == 1){
      $date_add = "date_commande >='".$date." 00:00:00' AND date_commande <='".$date." 23:59:59'";
      $email_send = "";
    }
		
        $query = $this->db->query("SELECT c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande,information_commande,reference_client,total_commande,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,commentaire, vt.traduction,c.id_verre
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                   WHERE ".$date_add." ".$sql_add." ".$email_send."
                                   ORDER BY ".$order_by);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCaJournalier($tarif_Livraison = true){
    
        $TarifLivraison = 0;
        $TabHoraireTarifLiv = array();

              
        if($tarif_Livraison){
          $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande
                                     FROM ".$this->table."
                                     WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
                                     AND date_update_commande<='".date("Y-m-d 23:59:59")."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND ( DATE_FORMAT(date_commande, '%Y-%m')='".date('Y-m')."' AND ((date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                     GROUP BY date(date_update_commande),id_users");
          
          if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
              $TabHoraireTarifLiv[$value->id_users] = array();
              array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
              $TarifLivraison += $value->TarifLivraison;
            }
              
          $query2 = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande
                                      FROM ".$this->table."
                                      WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
                                      AND date_update_commande<='".date("Y-m-d 23:59:59")."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND ((date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".date('Y-m')."') AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY date(date_update_commande),id_users");
          
          if($query2 && $query2->num_rows() > 0)
            foreach($query2->result() as $value){
              if(!isset($TabHoraireTarifLiv[$value->id_users]))
                $TabHoraireTarifLiv[$value->id_users] = array();
				
                array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
                $TarifLivraison += $value->TarifLivraison;
            }
              
          $query = $this->db->query("SELECT COALESCE(TarifLivraison,0) + COALESCE(TarifLivraison2,0) as TarifLivraison,id_users,date_update_commande
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
										FROM commande cc 
										WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
										AND date_update_commande<='".date("Y-m-d 23:59:59")."'
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY id_users
										) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
										SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
										  AND date_update_commande<='".date("Y-m-d 23:59:59")."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
                                     AND date_update_commande<='".date("Y-m-d 23:59:59")."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime(date('Y-m').'-01 -1 month'))."'
                                     GROUP BY id_users");
          
          if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
              $add = true;
				
              if(isset($TabHoraireTarifLiv[$value->id_users])){
                foreach($TabHoraireTarifLiv[$value->id_users] as $dateHoraire){
               
                  
                  if(($dateHoraire >= date('Y-m-d 09:00:00') && $dateHoraire < date('Y-m-d 16:00:00')) && ($value->date_update_commande >= date('Y-m-d 09:00:00') && $value->date_update_commande < date('Y-m-d 16:00:00'))) {
                   $add = false;
                    break;
                  }
                  
                  if(($dateHoraire < date('Y-m-d 09:00:00') || $dateHoraire >= date('Y-m-d 16:00:00')) && ($value->date_update_commande < date('Y-m-d 09:00:00') || $value->date_update_commande >= date('Y-m-d 16:00:00'))) {
                    $add = false;
                    break;
                  }
                }
              }
				
              if($add){
                $TarifLivraison += $value->TarifLivraison;
                
              }
            }
        }
        
            
        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(total_commande),0) as ca_journalier FROM ".$this->table."
                                   WHERE date_commande>='".date("Y-m-d 00:00:00")."'
                                   AND date_commande<='".date("Y-m-d 23:59:59")."'
                                   AND type_commande = 1 )
                                   + 
                                   (".$TarifLivraison.")
                                   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM facture_reduction fr
								   WHERE date_remise = '".date("Y-m-d")."') as ca_journalier");
                   

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCaByDayOfMonth($date){
    
	 $TabHoraireTarifLiv = array();
		
    $tarif = 0;
     $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,DATE_FORMAT(date_update_commande, '%e') AS day, id_users, date_update_commande
                                   FROM ".$this->table."
                                   WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                   AND tarif_livraison > 0
                                   AND id_etat_commande = 6
                                   AND ( DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND ((date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                   GROUP BY id_users,date(date_update_commande)");
        
        $TarifLivraisonTab = array();
        
        if($query && $query->num_rows() > 0)
          foreach($query->result() as $value){
            if(!isset($TabHoraireTarifLiv[$value->id_users]))  
              $TabHoraireTarifLiv[$value->id_users] = array();
			
              $TabHoraireTarifLiv[$value->id_users][$value->day]= array();
			
              array_push($TabHoraireTarifLiv[$value->id_users][$value->day],$value->date_update_commande);
      
            if(isset($TarifLivraisonTab[$value->day]))
              $TarifLivraisonTab[$value->day] += $value->TarifLivraison;
            else
              $TarifLivraisonTab[$value->day] = $value->TarifLivraison;
              
              
              $tarif += $value->TarifLivraison;
          }
          
          
        $query = $this->db->query("SELECT tarif_livraison as TarifLivraison, DATE_FORMAT(date_update_commande, '%e') AS day, id_users, date_update_commande
                                   FROM ".$this->table."
                                   WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                   AND tarif_livraison > 0
                                   AND id_etat_commande = 6
                                   AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                   GROUP BY id_users,date(date_update_commande)");
        
        if($query && $query->num_rows() > 0)
           foreach($query->result() as $value){
              if(!isset($TabHoraireTarifLiv[$value->id_users])){
                $TabHoraireTarifLiv[$value->id_users] = array();
              }
			  
              if(!isset($TabHoraireTarifLiv[$value->id_users][$value->day])){
                $TabHoraireTarifLiv[$value->id_users][$value->day]= array();
              }
              
              array_push($TabHoraireTarifLiv[$value->id_users][$value->day],$value->date_update_commande);
			  
            if(isset($TarifLivraisonTab[$value->day]))
              $TarifLivraisonTab[$value->day] += $value->TarifLivraison;
            else
              $TarifLivraisonTab[$value->day] = $value->TarifLivraison;
              
              $tarif += $value->TarifLivraison;
          } 
          
           $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as TarifLivraison, DATE_FORMAT(date_update_commande, '%e') AS day, id_users, date_update_commande as date_update_commande
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
										FROM commande cc 
										WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
										AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY id_users,date(date_update_commande)
										) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
										SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
                                     GROUP BY id_users,date(date_update_commande)");
          
          if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
              $add = true;
              
              if(isset($TabHoraireTarifLiv[$value->id_users][$value->day])){
                foreach($TabHoraireTarifLiv[$value->id_users][$value->day] as $dateHoraire){
                  if(($dateHoraire >= $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 09:00:00' && $dateHoraire < $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 16:00:00') && ($value->date_update_commande >= $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 09:00:00' && $value->date_update_commande < $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 16:00:00')) {
                    $add = false;
                    break;
                  }
                  
                  if(($dateHoraire < $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 09:00:00' || $dateHoraire >= $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 16:00:00') && ($value->date_update_commande < $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 09:00:00' || $value->date_update_commande >= $date.'-'.($value->day< 10 ? '0' : '').$value->day.' 16:00:00')) {
                    $add = false;
                    break;
                  }
                }
              }
              
             if($add)	{
               if(isset($TarifLivraisonTab[$value->day]))
                  $TarifLivraisonTab[$value->day] += $value->TarifLivraison;
                else
                  $TarifLivraisonTab[$value->day] = $value->TarifLivraison;
                  
                  $tarif += $value->TarifLivraison;
                  
                  }
            }
           
        $query = $this->db->query("SELECT
                                      SUM(total_commande) - COALESCE(total_reductions, 0) AS total_ht,
                                      taux_tva,
                                      DATE_FORMAT(date_commande, '%e') AS day,
                                      date_commande
                                    FROM
                                      commande
                                      LEFT JOIN
                                        (SELECT
                                          SUM(reduction) AS total_reductions,
                                          date_remise
                                        FROM
                                          facture_reduction
                                        GROUP BY date_remise) AS reductions
                                        ON (
                                          DATE_FORMAT(date_commande, '%Y-%m-%d') = date_remise
                                        )
                                    WHERE DATE_FORMAT(date_commande, '%Y-%m') = '".$date."'
                                    AND type_commande = 1
                                    GROUP BY day
                                    ORDER BY day ASC");

		if ($query && $query->num_rows() > 0){
			foreach($query->result() as $value){
				if(!isset($data[$value->day])){
					$data[$value->day] = array();
				}
				$data[$value->day]['total_ht'] = $value->total_ht;
        
				if(isset($TarifLivraisonTab[$value->day])){
					$data[$value->day]['total_ht'] += $TarifLivraisonTab[$value->day];
          
				  unset($TarifLivraisonTab[$value->day]);
				}
			
				$data[$value->day]['total_ttc']= round($data[$value->day]['total_ht'] * $value->taux_tva,2);
			}
			
			if(count($TarifLivraisonTab) > 0)
				foreach($TarifLivraisonTab as $day => $tarif){
					$data[$day]['total_ht'] = $tarif;
					$data[$day]['total_ttc'] = round($data[$day]['total_ht'] * 1.2 ,2);
				}
   
			return $data;
		}

        return false;
    }
	
	public function delete($data){
		$this->db->where('id_commande', $data['id_commande']);
		$this->db->delete($this->table);
		$this->db->where('id_commande', $data['id_commande']);
    $this->db->delete($this->table_commentaire);
		
		$this->db->where('id_commande', $data['id_commande']);
        $this->db->delete("etiquette");
	}
	
	
	public function checkNewOrder(){
  
    $query_last_date_commande = $this->db->query("SELECT date_commande
                                                  FROM last_check_order");   
                               
    $return = false;
    
    if($query_last_date_commande && $query_last_date_commande->num_rows() > 0){
        $query = $this->db->query("SELECT MAX(date_commande) as last_order, commentaire,c.id_type_generation_verre
                                   FROM ".$this->table." c
                                   LEFT JOIN ".$this->table_commentaire." cc ON c.id_commande = cc.id_commande
                                   WHERE date_commande > '".$query_last_date_commande->row()->date_commande."'");                     
                                     
        if ($query && $query->num_rows() > 0 && $query->row()->last_order !== NULL){
			
          if($query->row()->id_type_generation_verre == 5)
            $return = 2;
           
          if($query->row()->id_type_generation_verre <> 5)
            $return = 3;
		
		  if($query->row()->commentaire !== null)
            $return = 1;
            
          $this->db->set("date_commande", $query->row()->last_order);
          $this->db->update("last_check_order");
        }
    }

    return $return;
	}
	
	public function getCommandeEmargement(){
		$this->db->select("commande.id_users,nom_magasin,COUNT(id_commande) as nombre_commande,adresse,cp,ville,tel_fixe");
		$this->db->from($this->table);
		$this->db->join('users', $this->table.'.id_users = users.id_users','inner');
		$this->db->where("date_update_commande >", date("Y-m-d 00:00:00"));
		$this->db->where("id_etat_commande", 6);
		$this->db->group_by('id_users');
		$this->db->order_by('cp');
		$query = $this->db->get();
		
		if ($query && $query->num_rows() > 0)
			return  $query->result();
		
        return false;
	}
	
	public function addPointage($id_commande){
		$this->db->insert($this->table_pointage, array('id_commande' => $id_commande, 'date_pointage' => date("Y-m-d"))); 
	}
	
	public function deletePointage($id_commande){
		$this->db->where('id_commande', $id_commande);
        $this->db->delete($this->table_pointage);
	}
	
	public function getNbDayOrder(){
		$this->db->select("nb_commande");
		$this->db->from($this->table_journaliere);
		
		$query = $this->db->get();
		$res = 0;
		if ($query && $query->num_rows() > 0){
			$data = $query->result();
			$res = $data[0]->nb_commande;
		}
		
		return $res;
	}
	
	public function setNbDayOrder(){
		$this->db->set("nb_commande", "nb_commande+1" ,false);
		$this->db->update($this->table_journaliere);
	}
	
	public function resetNbDayOrder(){
		$this->db->set("nb_commande", 0);
		$this->db->update($this->table_journaliere);
	}
	
	public function ajouter_etiquette($data){
        if(isset($data['delete']) && $data['delete'] == 1){
      if(isset($data['id_commande']))
        $this->db->where('id_commande', $data['id_commande']);
        
      if(isset($data['cote']))  
        $this->db->where('cote', $data['cote']);
			//$this->db->where('date_click', date('Y-m-d'));
			$this->db->delete("etiquette");
		}else{
			$query = $this->db->query("SELECT MAX(ordre) as max FROM etiquette WHERE date_click='".date("Y-m-d")."'");
			$ordre = 1;
			
			if ($query && $query->num_rows() > 0){
				  $row = $query->row();
				  $ordre = $row->max + 1;
			}
				
			$this->db->query("INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (".$data['id_commande'].", '".$data['cote']."',".$ordre.",'".date("Y-m-d")."')");
		}
	}
	
	public function getEtiquette(){
		$query = $this->db->query("SELECT c.id_commande,id_users,information_commande,reference_client,libelle_verre,cote,date_commande
                               FROM ".$this->table." c
                               INNER JOIN verres v ON v.id_verre = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click ='".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               AND c.id_type_generation_verre = 5 AND c.id_indice_verre <> 6 AND c.id_generation_verre <> 14
                               ORDER BY ordre");
						  
		if ($query && $query->num_rows() > 0){
			return $query->result();
		}

        return false;
	}
  
  public function getEtiquetteSend($listId){
		$query = $this->db->query("SELECT c.id_commande,id_users,information_commande,reference_client,libelle_verre,cote,date_commande
                               FROM ".$this->table." c
                               INNER JOIN verres v ON v.id_verre = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE c.id_commande IN (".$listId.")
                               ORDER BY libelle_verre,ordre");
						  
		if ($query && $query->num_rows() > 0){
			return $query->result();
		}

        return false;
	}
  
  public function getEtiquetteFabrication(){
		$query = $this->db->query("SELECT c.id_commande, c.id_indice_verre, c.origine_commande, id_users,information_commande,information_certificat,reference_client,libelle_verre,cote,date_commande,c.id_indice_verre,c.id_generation_verre
                               FROM ".$this->table." c
                               INNER JOIN verres v ON v.id_verre = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               ORDER BY date_click, ordre");
						  
		if ($query && $query->num_rows() > 0){
			return $query->result();
		}

        return false;
	}

    public function getCertificat(){
        $query = $this->db->query("SELECT c.id_commande,id_users,information_commande,information_certificat,reference_client,libelle_verre,cote,date_commande,c.id_indice_verre,c.id_generation_verre
                               FROM ".$this->table." c
                               INNER JOIN verres v ON v.id_verre = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND c.information_certificat != ''
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY date_click, ordre DESC");

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function getUpdateCommande(){
        $query = $this->db->query("SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM ".$this->table." c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre");

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

	
	public function resetEtiquette(){
		$this->db->query("DELETE FROM etiquette 
						  WHERE id_commande IN 
							(	
								SELECT id_commande FROM 
									(
										SELECT e.id_commande 
										FROM etiquette e 
										INNER JOIN commande c ON e.id_commande=c.id_commande 
										WHERE id_etat_commande = 6 
										GROUP BY e.id_commande
									) as tmp
							)");
	}
	
	public function getEtiquetteAlreadySet(){
		$query = $this->db->query("SELECT id_commande,cote FROM etiquette");
		
		if ($query && $query->num_rows() > 0){
			$data = array();
			foreach($query->result() as $value)
				$data[$value->id_commande][$value->cote] = 1;
			
			return $data;
		}

        return false;
	}
  
  public function getCommandeStockJournalier(){
    $query = $this->db->query("SELECT information_commande,libelle_verre, count(id_commande) as nb_commande
                               FROM ".$this->table." c
                               INNER JOIN verres v ON v.id_verre = c.id_verre
                               INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                               INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                               WHERE c.id_type_generation_verre = 5
                               AND c.date_commande >='".date("2015-05-01 00:00:00")."'
                               AND date_commande<='".date("2015-05-01 23:59:59")."'
                               GROUP BY libelle_verre,information_commande");
                               
    if ($query && $query->num_rows() > 0){
      return $query->result();
    }

    return false;
  }
  
  public function nouvelle_date_bl($data){
    $this->db->query("INSERT INTO intitule_bl (id_commande,date_bl,intitule_bl,type_optique,intitule_type_optique,quantite_type_optique) VALUES (".$data['id_commande'].", '".$data['date_bl']."','".$data['intitule_bl']."','".$data['type_optique']."','".$data['intitule_type_optique']."','".$data['quantite_type_optique']."') ON DUPLICATE KEY UPDATE date_bl='".$data['date_bl']."', intitule_bl='".$data['intitule_bl']."'");
  }
  
  public function getNbIntituleBl($intitule_bl){   

    $query = $this->db->query("SELECT MAX(intitule_bl) as IntituleBL
                               FROM intitule_bl
                               WHERE intitule_bl like '".$intitule_bl."%'");
                               
	$query2 = $this->db->query("SELECT MAX(intitule_bl) as IntituleBL
								FROM ".$this->table." c
								WHERE intitule_bl like '".$intitule_bl."%'");
                               
    if ($query2 && $query2->num_rows() > 0){
	  $data2 = $query2->result();
    } else {
	  $data2 = false;
	}
	
    if ($query && $query->num_rows() > 0){
      $data = $query->result();
      if($data[0]->IntituleBL !== NULL && ($data2 === false || $data[0]->IntituleBL > $data2[0]->IntituleBL))
        return $query->result();
	  else if($data2 !== false)
		return $query2->result();
    }

    return false;
  }
  
  
  
  public function getAllCommandeByYearAndUser($data){
    
        /* $TabHoraireTarifLiv = array(); 
     
         $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
                                   FROM ".$this->table." c
                                   LEFT JOIN 
                                      ( 
                                        SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                                        FROM commande cc 
                                        WHERE DATE_FORMAT(date_update_commande, '%Y') = '".$date."' 
                                        AND tarif_livraison > 0 
                                        AND id_etat_commande = 6
                                        AND DATE_FORMAT(date_commande, '%Y') = '".$date."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                        GROUP BY id_users,date(date_update_commande)
                                        ) as tarif_livr
                                  ON (
                                     c.id_commande = idCommande
                                   )
                                  LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                                      FROM commande cc
                                      WHERE DATE_FORMAT(date_update_commande, '%Y') = '".$date."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y') = '".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY id_users,date(date_update_commande)
                                   ) as tarif_livr2
                                   ON (
                                      c.id_commande = idCommande2
                                   )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '".$date."' 
                                  AND DATE_FORMAT(c.date_update_commande, '%Y') = '".$date."'
                                  AND id_etat_commande = 6
                                  GROUP BY c.id_users,date(date_update_commande)
                                  ORDER BY c.id_users");
        $tarif_appoint = array();                          
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            if(!isset($TabHoraireTarifLiv[$result->id_users]))
                  $TabHoraireTarifLiv[$result->id_users] = array();
               
               array_push($TabHoraireTarifLiv[$result->id_users],$result->date_update_commande);
               
            if(isset($tarif_appoint[$result->id_users])){
              $tarif_appoint[$result->id_users] += $result->tarif_liv;
            } else {
               $tarif_appoint[$result->id_users] = $result->tarif_liv;
            }
          }
        }
		
                  
								  $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
										FROM commande cc 
										WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
										AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY id_users,date(date_update_commande)
										) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
										SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
										  AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
                                     GROUP BY id_users,date(date_update_commande)
									 ORDER BY c.id_users");
									 
        if ($query && $query->num_rows() > 0){
          foreach($query->result() as $result){
            $add = true;
				
              if(isset($TabHoraireTarifLiv[$result->id_users])){
                foreach($TabHoraireTarifLiv[$result->id_users] as $dateHoraire){
                  $date1 = explode(" ",$dateHoraire);
                  $date2 = explode(" ",$result->date_update_commande);
                  
                  if($date1[0] == $date2[0]){
                    if(($date1[1] >= '09:00:00' && $date1[1] < '16:00:00') && ($date2[1] >= '09:00:00' && $date2[1] < '16:00:00')) {
                      $add = false;
                      break;
                    } 
                    
                    if(($date1[1] < '09:00:00' && $date1[1] >= '16:00:00') && ($date2[1] < '09:00:00' && $date2[1] >= '16:00:00')) {
                      $add = false;
                      break;
                    }
                  }
                }
              }
				
              if($add)
                if(isset($tarif_appoint[$result->id_users]))
                  $tarif_appoint[$result->id_users] += $result->tarif_liv;
                else
                  $tarif_appoint[$result->id_users] = $result->tarif_liv;
          }
        }      */
        
        $sql_add = "c.id_users <> 2";
        
        if($data['numero_magasin'] != ""){
            $sql_add = "c.id_users = ".$data['numero_magasin'];
        }
        
        
        $query = $this->db->query("SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total,c.id_users, DATE_FORMAT(c.date_commande, '%c') as mois, nom_societe, nom_magasin
                                   FROM commande c
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN
                                    (SELECT
                                        SUM(reduction) AS total_reductions,
                                        id_users as idusers,
                                        date_remise
                                    FROM
                                        facture_reduction
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '".$data['annee']."'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '".$data['annee']."'
                                  AND ".$sql_add."
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users");
        if ($query && $query->num_rows() > 0){
          return $query->result();
        }
        
      /*  $query = $this->db->query("SELECT COALESCE(total_stock, 0)  + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique, c.date_commande,c.id_users, COALESCE(total_reductions, 0) as reduction,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, 0 as tarif_liv
                                   FROM ".$this->table." c
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN
                                    (SELECT
                                        SUM(reduction) AS total_reductions,
                                        id_users as idusers,
                                        date_remise
                                    FROM
                                        facture_reduction
                                    WHERE DATE_FORMAT(date_remise, '%m-%Y') = '".$date."'
                                    GROUP BY id_users) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM ".$this->table." c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
                                    GROUP BY idusersstock) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM ".$this->table." c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
                                    GROUP BY idusersfabrique) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".$date."'
                                  GROUP BY c.id_users
                                  ORDER BY c.id_users");*/
								  
        /*if ($query && $query->num_rows() > 0){
            $data = $query->result();
                
            if(count($tarif_appoint) > 0){
              foreach($data as $key => $d){
                if(isset($tarif_appoint[$d->id_users])){
                  $data[$key]->total += $tarif_appoint[$d->id_users];
                  $data[$key]->tarif_liv += $tarif_appoint[$d->id_users];
                }
              }
            }

			$query2 = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as total,0 as total_stock,0 as total_fabrique, 0 as reduction, c.id_users, '01-".$date."' as date_commande,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv
										FROM ".$this->table." c
										INNER JOIN users u ON c.id_users = u.id_users
										LEFT JOIN 
                                      ( 
                                        SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                                        FROM commande cc 
                                        WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."' 
                                        AND tarif_livraison > 0 
                                        AND id_etat_commande = 6
                                        AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                                        GROUP BY id_users,date(date_update_commande)
                                        ) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
                                   		SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY date(date_update_commande),id_users
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
										WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."' 
										AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '".$date."' 
										AND id_etat_commande = 6
										AND c.id_users NOT IN(SELECT id_users as iduser2 
															  FROM commande c2 
															  WHERE DATE_FORMAT(c2.date_commande, '%m-%Y') = '".$date."')
									
									    GROUP BY id_users,DATE_FORMAT(c.date_commande, '%Y-%m')
										ORDER BY c.id_users");
			
			foreach($query2->result() as $data2){
         if($data2->total > 0)
          array_push($data,$data2);
			}
            return $data;
		}*/

        return false;
    }
}