<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_commande extends CI_Model {

    var $table = 'commande';
    var $table_temp = 'commande_temp';
    var $table_commentaire = 'commande_commentaire';
    var $table_commentaire_temp = 'commande_commentaire_temp';
    var $table_pointage = 'commande_pointage';
    var $table_journaliere = 'commande_journaliere';

    var $fields = array(
        'origine_commande'				 => 'origine_commande',
        'ancienne_commande'				 => 'ancienne_commande',
        'penalty'                        => 'penalty',
        'premiere_commande'				 => 'premiere_commande',
        'total_remise_paire'			 => 'total_remise_paire',
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
        'id_miroir'                      => 'id_miroir',
        'addition'                       => 'addition',
        'information_commande'           => 'information_commande',
        'information_certificat'         => 'information_certificat',
        'taux_tva'						 => 'taux_tva',
        'prix_verre'					 => 'prix_verre',
        'total_commande'                 => 'total_commande',
        'total_remise_verre'             => 'total_remise_verre',
        'tarif_livraison'                => 'tarif_livraison',
        'tarif_packaging'                => 'tarif_packaging',
        'tarif_supplement'               => 'tarif_supplement',
        'tarif_express'                  => 'tarif_express',
        'is_express'                     => 'is_express',
        'email_send'                     => 'email_send',
        'type_commande'					 => 'type_commande',
        'intitule_bl' 					 => 'intitule_bl',
        'date_annule' 					 => 'date_annule',
        'generation' 					 => 'generation',
        'panierA' 					     => 'panierA',
        'ecart_pup_D' 					 => 'ecart_pup_D',
        'ecart_pup_G' 					 => 'ecart_pup_G',
        'angle_galbe_D' 				 => 'angle_galbe_D',
        'angle_galbe_G' 				 => 'angle_galbe_G',
        'distance_verre_oeil_D' 		 => 'distance_verre_oeil_D',
        'distance_verre_oeil_G' 		 => 'distance_verre_oeil_G',
        'angle_pantoscopique_D' 		 => 'angle_pantoscopique_D',
        'angle_pantoscopique_G' 		 => 'angle_pantoscopique_G',
        'hauteur_montage_D' 			 => 'hauteur_montage_D',
        'hauteur_montage_G' 			 => 'hauteur_montage_G',
        'by_admin' 			             => 'by_admin'
    );

    public function __construct() {
        parent::__construct();
    }

    public function checkOrderByUser($user_id, $order_id) {

        $this->db->select('1');
        $this->db->from('commande_temp');
        $this->db->where('id_users', $user_id);
        $this->db->where('id_commande', $order_id);
        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;

    }
    public function getCommandeByUserAvecMontures($data){

        $add = "";

        if(isset($data['tri'])) {

            switch ($data['tri']) {
                case 'stock':
                    $add = "AND (((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) OR origine_commande=2) OR commande_monture = 1)";
                    break;
                case 'others':
                    $add = "AND ((((c.id_type_generation_verre <> 5 AND c.id_type_generation_verre <> 23 AND c.id_type_generation_verre <> 0) OR origine_commande=1)) OR commande_monture = 1)";
                    break;
                case 'pending':
                    $add = "AND c.id_etat_commande < 6";
                    break;
            }

        }

        if(isset($data['type_commande']) && $data['type_commande'] == 1) {
            $add .= 'AND c.type_commande > 1';
        }

        $query = $this->db->query("SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande, c.tarif_express, c.is_express, c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as generation_verre,commande_monture,
                                   type_generation_verre,libelle_verre,commentaire,c.prix_verre,intitule_bl, (TarifLivraison1 + COALESCE(TarifLivraison2, 0)) as TarifLivraison
                                   FROM ".$this->table." c
                                   LEFT JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
                                   LEFT JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
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
    public function getCommandeByUser($data){

        $add = "";

        if(isset($data['tri'])) {

            switch ($data['tri']) {
                case 'stock':
                    $add = "AND (((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) AND c.id_type_generation_verre <> 0) OR origine_commande=2) ";
                    break;
                case 'others':
                    $add = "AND (((c.id_type_generation_verre <> 5 AND c.id_type_generation_verre <> 23 AND c.id_type_generation_verre <> 0) OR origine_commande=1)) ";
                    break;
                case 'pending':
                    $add = "AND c.id_etat_commande < 6";
                    break;
            }

        }

        if(isset($data['type_commande']) && $data['type_commande'] == 1) {
            $add .= 'AND c.type_commande > 1';
        }
        $sql = "SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande, c.tarif_express, c.is_express, c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as generation_verre,
                                   type_generation_verre,libelle_verre,commentaire,c.prix_verre,intitule_bl, (TarifLivraison1 + COALESCE(TarifLivraison2, 0)) as TarifLivraison, trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
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
                                   AND (trad_fr LIKE CONCAT('%', generation, '%')
                                   OR trad_fr is NULL)
                                   ORDER BY date_commande DESC";

        $query = $this->db->query($sql);



        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCommandeByUserLight($data)
    {

        $add = "";

        if(isset($data['tri'])) {

            switch ($data['tri']) {
                case 'stock':
                    $add = "AND (origine_commande=2)";
                    break;
                case 'others':
                    $add = "AND (origine_commande=1) ";
                    break;
                case 'pending':
                    $add = "AND c.id_etat_commande < 6";
                    break;
            }

        }

        if(isset($data['type_commande']) && $data['type_commande'] == 1) {
            $add .= 'AND c.type_commande > 1';
        }

        $sql = "SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande, c.tarif_express, c.is_express, c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,generation_verre,
                                   type_generation_verre,c.prix_verre,intitule_bl,c.id_generation_verre, c.origine_commande,commentaire
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                    LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   WHERE id_users=".$data['id_users']." ".$add."
                                   GROUP BY id_commande ORDER BY date_commande DESC LIMIT 2000";
        $query = $this->db->query($sql);


        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }


    public function getCommandeByUserNew($data){

        $add = "";

        if(isset($data['tri'])) {

            switch ($data['tri']) {
                case 'stock':
                    $add = "AND (((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) AND c.id_type_generation_verre <> 0) OR origine_commande=2)";
                    break;
                case 'others':
                    $add = "AND ((c.id_type_generation_verre <> 5 AND c.id_type_generation_verre <> 23 AND c.id_type_generation_verre <> 0) OR origine_commande=1) ";
                    break;
                case 'pending':
                    $add = "AND c.id_etat_commande < 6";
                    break;
            }

        }

        if(isset($data['type_commande']) && $data['type_commande'] == 1) {
            $add .= 'AND c.type_commande > 1';
        }

        $query = $this->db->query("SELECT date_update_commande,c.id_commande,c.id_type_generation_verre,date_commande, c.tarif_express, c.is_express, c.id_etat_commande,information_commande,type_commande,ancienne_commande,total_commande,reference_client,libelle_etat_commande,IF(libelle_verre_personnalise <> 'NULL',libelle_verre_personnalise,generation_verre) as generation_verre,
                                   type_generation_verre,libelle_verre,commentaire,c.prix_verre,intitule_bl, (TarifLivraison1 + COALESCE(TarifLivraison2, 0)) as TarifLivraison,c.id_generation_verre,v.gtin as gtin_stock, l.gtin as gtin, c.origine_commande
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN lenses l on l.code=c.id_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
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
                                   GROUP BY id_commande ORDER BY date_commande DESC");


        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    function getAllCommandeByUser($id_users = false, $date = null) {

        if($id_users !== false) {

            $dateQuery = '';

            if(null !== $date) {
                $dateQuery = ' AND date_commande > "'.$date->format('Y-m-d 00:00:00').'"';
            }

            $id_users = intval($id_users);

            $query = $this->db->query('SELECT c.id_commande, c.reference_client, v.libelle_verre, c.date_commande,l.trad_fr, c.generation  FROM commande AS c 
            LEFT JOIN lenses AS l ON c.id_verre = l.code
            LEFT JOIN verres AS v ON c.id_verre = v.id_verre 
            WHERE id_users = '.$id_users.$dateQuery.' GROUP BY id_commande ORDER BY date_commande DESC');


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

    function getDiscountByOrderId($order_id, $pair = false) {

        if($order = $this->getCommandeById($order_id, false, $pair)) {

            switch($order[0]->id_generation_verre) {

                case 4: // E-Space
                case 6: // Degressif (Top Office)
                case 7: // Bifocaux
                case 8: // Unifocal fabrication (Freestyle)
                case 11: // Eyefatigue
                    return 30;
                    break;
                case 3: // Platinum
                    return 35;
                    break;
                case 2: // Omega
                    return 40;
                    break;
                case 1: // Elysium
                    return 50;
                    break;
                case 5: // T-One
                default:
                    return 0;
            }

        }

    }

    function getDiscountByOrderIdNew($order_id, $pair = false) {

        if($order = $this->getCommandeByIdNew($order_id, false, $pair)) {

            if($order[0]->id_generation_verre == 34 || $order[0]->id_generation_verre == 35 || $order[0]->id_generation_verre == 36 || $order[0]->id_generation_verre == 31)
            {
                return 30;
            }
            else
            {
                if($order[0]->generation == 'Elysium')
                {
                    return 50;
                }
                elseif($order[0]->generation == 'Omega')
                {
                    return 40;
                }
                elseif($order[0]->generation == 'Platinium')
                {
                    return 35;
                }
                elseif($order[0]->generation == 'E-Space')
                {
                    return 30;
                }
                else
                {
                    return 0;
                }
            }
        }
    }

    function getTraitementNameByCode($traitement_paire)
    {
        $query = $this->db->query("SELECT name FROM `lensOptions` WHERE `code` = '".$traitement_paire."'");
        if ($query && $query->num_rows() > 0)
            return $query->result()[0]->name;

        return false;
    }

    function getTraitementByCode($traitement_paire)
    {
        $query = $this->db->query("SELECT * FROM `lensOptions` WHERE `code` = '".$traitement_paire."'");
        if ($query && $query->num_rows() > 0)
            return $query->result()[0]->trad_fr;

        return false;
    }

    function getTeinteById($teinte_paire)
    {
        $query = $this->db->query("SELECT * FROM `lensOptions` WHERE `code` = '".$teinte_paire."'");
        if ($query && $query->num_rows() > 0)
            return $query->result()[0]->trad_fr;

        return false;
    }

    function getTeinteEnById($teinte_paire)
    {
        $query = $this->db->query("SELECT * FROM `lensOptions` WHERE `code` = '".$teinte_paire."'");
        if ($query && $query->num_rows() > 0)
            return $query->result()[0]->name;

        return false;
    }


    function getOrderByPairId($pair_id) {

        $this->db->select('id_commande');
        $this->db->where('premiere_commande', $pair_id);

        $query = $this->db->get('commande');

        if ($query && $query->num_rows() > 0) {
            return $query->result()[0]->id_commande;
        }

        return false;

    }

    /*  function getCommandeById($id_commande, $id_users = false, $pair = false){
          $sql_add = "";

          if($id_users !== false)
            $sql_add .= "AND c.id_users =".$id_users;


          if(false === $pair) {
              $table_commande = $this->table;
              $table_commentaire = $this->table_commentaire;
          }
          else {
              $table_commande = $this->table_temp;
              $table_commentaire = $this->table_commentaire_temp;
          }

          $query = $this->db->query("SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                            generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                     FROM ".$table_commande." c
                                     INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                     INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                     INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                     INNER JOIN verres v ON v.id_verre = c.id_verre
                                     INNER JOIN users u ON u.id_users = c.id_users
                                     INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                     LEFT JOIN ".$table_commentaire." cc ON cc.id_commande = c.id_commande
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
      }*/
    function getCommandeById($id_commande, $id_users = false, $pair = false){
        $sql_add = "";

        if($id_users !== false)
            $sql_add .= "AND c.id_users = ".$id_users;


        if(false === $pair) {
            $table_commande = $this->table;
            $table_commentaire = $this->table_commentaire;
        }
        else {
            $table_commande = $this->table_temp;
            $table_commentaire = $this->table_commentaire_temp;
        }
        $sql = "SELECT generation FROM " . $table_commande . " c WHERE id_commande = ". $id_commande." ".$sql_add;
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0) {
            $generation = $query->result()[0]->generation;
            $sqlGeneration = "";
            if (!empty($generation) AND strpos($generation, 'stock') == false) {
                $sqlGeneration = "AND vnew.trad_fr LIKE '%" . $generation . "%'";
            }
            $sql = "SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                   generation_verre,type_generation_verre,libelle_verre,commentaire,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin,vnew.trad_fr,c.id_type_generation_verre,v.gtin as gtin_stock, vnew.gtin as gtin
                                   FROM ".$table_commande." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN lenses vnew ON vnew.code = c.id_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN ".$table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande=".$id_commande." ".$sql_add." " . $sqlGeneration . "
                                   AND (display = 'X' OR v.id_verre IS NOT NULL)
                                   ORDER BY date_commande DESC";
//print_r($sql);die;
            $query = $this->db->query($sql);
            if ($query && $query->num_rows() > 0)
                return $query->result();
        }


//        var_dump($sql);die;



        return false;
    }

    function getCommandeByIdNew($id_commande, $id_users = false, $pair = false){
        $sql_add = "";

        if($id_users !== false)
            $sql_add .= "AND c.id_users =".$id_users;


        if(false === $pair) {
            $table_commande = $this->table;
            $table_commentaire = $this->table_commentaire;
        }
        else {
            $table_commande = $this->table_temp;
            $table_commentaire = $this->table_commentaire_temp;
        }
        $sql = "SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,v.trad_fr,commentaire,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique,v_stock.libelle_verre,c.id_type_generation_verre,verres.gtin as gtin_stock, v.gtin as gtin
                                   FROM ".$table_commande." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN lenses v ON (v.code = c.id_verre AND (v.trad_fr LIKE (CONCAT('%', c.generation ,'%'))) OR c.generation = NULL)
                                   LEFT JOIN verres ON verres.id_verre = c.id_verre
                                   LEFT JOIN verres_stock v_stock ON v_stock.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN ".$table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande=".$id_commande." ".$sql_add."
                                   ORDER BY date_commande DESC";
//                                   AND (v.display = 'X' OR v_stock.id_verre IS NOT NULL
//                                   OR verres.id_verre IS NOT NULL)
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }


    public function rejectEc($id)
    {
        $query = $this->db->query('UPDATE commande SET penalty = 1 WHERE id_commande = '. (int) $id);
    }

    public function getAllCommandeEdiOmega()
    {
        $sql_add = "WHERE (c.id_verre IN (SELECT code FROM lenses) AND c.id_etat_commande < 6)";
        $sql = "SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,status_omega,l.trad_fr, l.name as lensname,l.code as lenscode, origine_commande,c.premiere_commande,commentaire_omega,seconde_omega
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   INNER JOIN lenses l ON (l.code = c.id_verre AND l.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
                                   ".$sql_add." AND (id_type_generation_verre=0 OR id_type_generation_verre = NULL) AND status_omega=0 AND is_confirmed = 1 ORDER BY id_commande DESC";
        $query = $this->db->query($sql);


        if ($query && $query->num_rows() > 0)

            return $query->result();

        return false;
    }

    public function getAllMagCommandeEdiOmega()
    {

        $query = $this->db->query("SELECT id_users
                                   FROM ".$this->table." c
                                   INNER JOIN lenses ON c.id_verre = lenses.code
                                   WHERE (c.id_etat_commande < 6) AND (id_type_generation_verre=0 OR id_type_generation_verre = NULL) AND status_omega=0 GROUP BY id_users");



        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getAllCommandeEdiOmegaExpediee($date_start = NULL)
    {
        //$sql_add = "WHERE (c.id_etat_commande < 6)";
        $addDate_start = '';
        if($date_start) {
            $now = date('Y-m-d');
            $date_start = date('Y-m-d', strtotime($now . ' - ' . $date_start));
            $addDate_start .= " AND c.date_commande > '" . $date_start. "'";
        }
        $sql = "SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,status_omega,l.trad_fr, l.name as lensname,l.code as lenscode, origine_commande,c.premiere_commande,co.commande,co.xml,co.status,co.filename,date_omega,commentaire_omega,seconde_omega
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   INNER JOIN commande_omega co ON co.id_commande = c.id_commande
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN lenses l ON (l.code = c.id_verre AND l.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
                                   WHERE status_omega!=0 AND status = 2" . $addDate_start . " ORDER BY date_omega DESC,id_commande DESC";
//        print_r($sql);die;
        $query = $this->db->query($sql);



        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCommandeEdiOmegaById($id_commande){

        $sql = "SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,status_omega,l.trad_fr, l.name as lensname,l.code as lenscode, origine_commande,c.premiere_commande,commentaire_omega,seconde_omega
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   INNER JOIN lenses l ON (l.code = c.id_verre AND l.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
                                   WHERE c.id_commande=".$id_commande;
//        var_dump($sql);die;
        $query = $this->db->query($sql);
        //var_dump($sql);


        if ($query && $query->num_rows() > 0)
            return $query->result()[0];

        return false;
    }
    public function getCommandeEdiOmegaByIdD($id_commande){


        $query = $this->db->query("SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,status_omega,l.trad_fr, l.name as lensname,l.code as lenscode, origine_commande,c.premiere_commande,commentaire_omega,seconde_omega
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   INNER JOIN lenses l ON l.code = c.id_verre
                                   WHERE c.id_commande=".$id_commande."");


        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function updateCommandeOmega($id_commande,$textarea,$axml)
    {
        $sql = "UPDATE commande_omega SET xml = '".addslashes($axml)."',commande = '".addslashes($textarea)."'  WHERE id = '".$id_commande."'";

        //echo $sql; die;
        if($this->db->query($sql)) {
            return 1;
        }

        return 0;
    }

    public function updateEdiStatus($id_commande,$status,$filename = "")
    {
        if($this->db->query("UPDATE commande_omega SET status = '".$status."', filename = '".$filename."' WHERE id_commande = '".$id_commande."'")) {
            if($status == '2')
                $this->db->query("UPDATE commande SET status_omega = '1',date_omega = NOW() WHERE id_commande = '".$id_commande."'");
            return 1;
        }
        return 0;
    }

    public function getAllCommandesCheckedOmega()
    {
        $query = $this->db->query("SELECT * FROM commande_omega WHERE status='1'");

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }


    public function getTextCommandeOmega($id_commande,$textarea,$axml)
    {
        $query = $this->db->query("SELECT * FROM commande_omega WHERE id_commande='".$id_commande."'");
        if ($query && $query->num_rows() == 0)
        {
            $this->db->query("INSERT INTO commande_omega (`id`, `id_commande`, `commande`, `xml`, `status`) VALUES (NULL, '".$id_commande."', '".addslashes($textarea)."', '".addslashes($axml)."', '1')");
            //echo "INSERT INTO commande_omega (`id`, `id_commande`, `commande`, `xml`, `status`) VALUES (NULL, '".$id_commande."', '".addslashes($textarea)."', '".addslashes($axml)."', '1')";
        }

        $query_o = $this->db->query("SELECT * FROM commande_omega WHERE id_commande='".$id_commande."'");
        if ($query_o && $query_o->num_rows() > 0)
        {
            return $query_o->result();
        }

    }

    public function updateXMLCommandeOmega($id_commande,$typechange,$change,$axml)
    {
        if($typechange != "")
        {
            $this->db->query("UPDATE commande SET ".$typechange." = '".addslashes($change)."' WHERE id_commande = '".$id_commande."'");
        }
        if($this->db->query("UPDATE commande_omega SET xml = '".addslashes($axml)."' WHERE id_commande = '".$id_commande."'"))
        {
            return 1;
        }
        else
            return 0;


    }

    public function getAllCommande($id_etat_commande=false,$id_magasin=false){

        $sql_order = "";
        $sql_add = "WHERE is_confirmed = 1";

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

        $query = $this->db->query("SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule,panierA,c.id_type_generation_verre,c.id_verre,status_omega
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

    public function getCommandeWithCommentaireNotConfirmed($number_commentaire = false, $id_etat_commande=false,$origine_commande=false)
    {
        $sql_order = "";
        $sql_add = "WHERE is_confirmed = 0";

        if($id_etat_commande)
            $sql_add .= " AND  c.id_etat_commande < 5
						AND HOUR( TIMEDIFF( NOW() , date_update_commande ) ) >= 24";
        else
            $sql_add .= " AND  c.id_etat_commande < 6";

        $sql_order = "ORDER BY date_commande DESC";

        if (!empty($number_commentaire)) {
            if ($number_commentaire != 'all') {
                $limit = 'LIMIT ' . $number_commentaire;
            }
            else {
                $limit = '';
            }
        }
        else {
            $limit = 'LIMIT 10';
        }
        $sql = "SELECT c.id_users,c.id_commande,c.ancienne_commande, c.lens_id, c.penalty, c.id_generation_verre, c.id_type_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,commentaire,type_commande,intitule_bl,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,c.id_verre,status_omega
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   ".$sql_add." AND (id_type_generation_verre=0 OR id_type_generation_verre IS NULL) ".$sql_order . " " . $limit;
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }
    public function getAllCommandeNew($id_etat_commande=false,$origine_commande=false){

        $sql_order = "";
        $sql_add = "WHERE is_confirmed = 1";

        if($id_etat_commande)
            $sql_add .= " AND  c.id_etat_commande < 5
						AND HOUR( TIMEDIFF( NOW() , date_update_commande ) ) >= 24";
        else
            $sql_add .= " AND  c.id_etat_commande < 6";

        if($origine_commande !== false)
            $sql_add .=" AND origine_commande = ".$origine_commande;
        else
            $sql_add .=" AND origine_commande = 1";


        if($origine_commande !== false)
            $sql_order = "ORDER BY c.id_commande DESC";
        else
            $sql_order = "ORDER BY date_commande DESC";

        $sql = "SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, c.id_type_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,c.id_verre,status_omega
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   ".$sql_add." AND (id_type_generation_verre=0 OR id_type_generation_verre = NULL) GROUP BY c.id_commande ".$sql_order;
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getAllCommandeNewWithVerre($id_etat_commande=false,$origine_commande=false){

        $sql_add = $sql_order = "";

        if($id_etat_commande)
            $sql_add = "WHERE c.id_etat_commande < 5
						AND HOUR( TIMEDIFF( NOW() , date_update_commande ) ) >= 24";
        else
            $sql_add = "WHERE c.id_etat_commande < 6";

        if($origine_commande !== false)
            $sql_add .=" AND origine_commande = ".$origine_commande;
        else
            $sql_add .=" AND origine_commande = 1";


        if($origine_commande !== false)
            $sql_order = "ORDER BY c.id_commande DESC";
        else
            $sql_order = "ORDER BY date_commande DESC";

        $query = $this->db->query("SELECT c.id_users,c.id_commande,c.ancienne_commande, c.penalty, c.id_generation_verre, c.id_type_generation_verre, date_commande, c.tarif_express, c.is_express, c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,penalty,cp,date_annule, panierA,c.id_verre,status_omega,libelle_verre,trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN verres_stock v ON v.id_verre = c.id_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   ".$sql_add." AND (id_type_generation_verre=0 OR id_type_generation_verre = NULL) ".$sql_order);


        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function checkStockDeporte($id_verre)
    {
        $query = $this->db->query("SELECT * FROM `lenses` WHERE `code` LIKE '".$id_verre."'");


        if ($query && $query->num_rows() > 0)
            return '1';

        return '0';
    }

    public function getOldOrder($startLimit,$offsetLimit, $id_users, $reference_optieyes,
                                $reference_client, $sphere, $cylindre, $axe){
        $limit = $sWhere = "";

        if(isset( $startLimit ) && $offsetLimit != '-1' ){
            $limit = "LIMIT ". $startLimit .", ".$offsetLimit;
        }


//		if($search != "" || $id_users !== false){
        $addUser = "";
        if($id_users != false) {
            $addUser .= " AND c.id_users = " . $id_users;
        }

        $addReferenceOptieyes = "";
        if($reference_optieyes != false) {
            $addReferenceOptieyes .= " AND c.id_commande LIKE '%" . $reference_optieyes. "%'";
        }

        $addReferenceClient = "";
        if($reference_client != false) {
            $addReferenceClient .= " AND c.reference_client LIKE '%" . $reference_client. "%'";
        }

//        $addDate_start = '';
//        if($date_start != false) {
//            $now = date('Y-m-d');
//            $date_start = date('Y-m-d', strtotime($now . ' - ' . $date_start));
//            $addDate_start .= " AND c.date_commande > '" . $date_start. "'";
//        }

        $addSphere = "";
        if($sphere != false && $sphere != "-") {
            $addSphere .= " AND c.information_commande LIKE '%\"sphere\":\"" . number_format($sphere, 2);
            if ($cylindre != false && $cylindre != "-") {
                $addSphere .= "\",\"cylindre\":\"" . number_format($cylindre,2);
                if ($axe != false) {
                    $addSphere .= "\",\"axe\":\"" . $axe;
                }
            }
            else if ($axe != false) {
                $addSphere .= "\",\"cylindre\":\"____\",\"axe\":\"" . $axe;
            }
            $addSphere .= "%'";
        }

        $addCylindre = "";
        if($cylindre != false && $cylindre != "-") {
            if (!$addSphere) {
                $addCylindre .= " AND c.information_commande LIKE '%\"cylindre\":\"" . number_format($cylindre,2);
                if ($axe != false) {
                    $addCylindre .= "\",\"axe\":\"" . $axe;
                }
                $addCylindre .= "%'";
            }
        }

        $addAxe = "";
        if($axe != false && !$addSphere && !$addCylindre) {
            $addAxe .= " AND c.information_commande LIKE '%\"axe\":\"" . $axe. "%'";
        }

//        $addReferenceClient = "";
//        if($reference_client != false) {
//            $addReferenceClient .= " AND c.reference_client LIKE '%" . $reference_client. "%'";
//        }
        /*if(preg_match("/^(CR|cr)([0-9])+(-)?([0-9])*$/", $search) && $addField == ""){
            $num_commande = explode("-",$search);
            $num_commande = substr($num_commande[0],2);

            $addField .= "c.id_commande = ".$this->db->escape_str( $num_commande );
        }

        if(substr_count($search, '/') == 2 && $addField == ""){
            $date = explode("/",$search);
            $addField .= "c.date_commande like '".$date[2]."-".$date[1]."-".$date[0]."%' OR c.date_update_commande like '".$date[2]."-".$date[1]."-".$date[0]."%'";
        }*/

//            if($addField == ""){
//                $addField .= "(c.reference_client like '%".$this->db->escape_str( $search )."%' ||
//                c.date_commande like '%".$this->db->escape_str( $search )."%' ||
//                c.id_commande like '%".$this->db->escape_str( $search )."%' ||
//                c.intitule_bl like '%".$this->db->escape_str( $search )."%' ||
//                c.reference_client like '%".$this->db->escape_str( $search )."%'
//                )";
//            }

//			$sWhere .= $addField;
//		}

        $sql = "SELECT c.id_users,c.id_commande,c.intitule_bl, c.tarif_express, c.is_express, c.penalty, c.ancienne_commande, c.total_commande, date_commande,reference_client,date_update_commande,type_commande,nom_magasin,nom_societe,commentaire,c.id_generation_verre
                                    FROM ".$this->table." c
                                    INNER JOIN users u ON c.id_users = u.id_users 
                                    LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                    WHERE c.id_etat_commande = 6
                                    AND c.lens_id = 0 AND c.commande_monture = 0
                                    ".$addUser.$addReferenceOptieyes.$addReferenceClient.$addSphere.$addCylindre.$addAxe."
                                    ORDER BY date_update_commande DESC ".$limit;

        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0){
            $data = array();
            $data['results'] = $query->result();
            $sql = "SELECT COUNT(id_commande) as nb_commande FROM ".$this->table." c WHERE c.id_etat_commande = 6 AND c.lens_id = 0".$addUser.$addReferenceOptieyes.$addReferenceClient.$addSphere.$addCylindre.$addAxe;
            $query2 = $this->db->query($sql);
            if($query2 && $query2->num_rows() > 0){
                $result = $query2->row();
                $data['total_num_rows'] = $result->nb_commande;
                return $data;
            }
        }

        return false;
    }


    function countAllCommande($id_users = null, $search = null) {

        $add = '';

        if($id_users) {
            $add .= 'WHERE id_users = '.$id_users;

            if($search) {

                $add .= " AND (reference_client like '%".$this->db->escape_str( $search )."%' ||
                date_commande like '%".$this->db->escape_str( $search )."%' ||
                id_commande like '%".$this->db->escape_str( $search )."%' ||
                reference_client like '%".$this->db->escape_str( $search )."%')
                ";
            }

        } else {

            $add .= "WHERE reference_client like '%".$this->db->escape_str( $search )."%' ||
                date_commande like '%".$this->db->escape_str( $search )."%' ||
                id_commande like '%".$this->db->escape_str( $search )."%' ||
                reference_client like '%".$this->db->escape_str( $search )."%'
                ";

        }



        $query = $this->db->query('SELECT COUNT(id_commande) as total FROM commande '.$add);

        if ($query && $query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }

    }


    public function update_etat_commande() {
        $commandes = $this->getAllCommandeNew(true);

        if($commandes !== false){
            foreach($commandes as $commande){
                $date = new DateTime(date("Y-m-d H:i:s"));
                $date_commande = new DateTime($commande->date_commande);
                $jour = $date->diff($date_commande)->d;
                $tab_etat_commande = array(1 => 2, 2 => 3, 3 => 4, 4 => 4, 5 => 4, 6 => 5); //Chaque cl� correspond � un jour apr�s avoir pass� commande $key 1 = 1 jour donc etat commande => 2, $key 2 = 2 jours donc etat commande => 3, etc...

                $etat_commande = isset($tab_etat_commande[$jour]) ? $tab_etat_commande[$jour] : "";

                // en cas de soucis de cron et que le nombre de jour apr�s avoir pass� commande, d�passerait 6, la commande passe en avant derni�re �tat
                if($jour>6)
                    $etat_commande = 5;

                if(!empty($etat_commande)){
                    $data['id_etat_commande'] = $etat_commande;
                    $data['id_commande'] = $commande->id_commande;
                    $data['date_update_commande'] = date("Y-m-d H:i:s");
                    $this->db->where('origine_commande<>', 2 ,false);
                    $this->db->where('id_type_generation_verre<>', 5 ,false);
                    $this->db->where('id_type_generation_verre<>', 23 ,false);
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

        $sql = "SELECT sum(total_commande) + COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) - COALESCE(total_reductions, 0) as total, date_commande, DATE(date_commande), date_remise, total_reductions
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
                                   ORDER BY date_commande DESC";
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }


    public function getTotalCommandeByYear($id_users){

        $year = date('Y', time());
//        $sql = "SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = ".$id_users."
//        AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//        AND id_verre IS NOT null AND date_commande > '".$year."-01-01 00:00:00'";
        $sql = "SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = ".$id_users." 
        AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) 
        AND id_verre IS NOT null";
        // Excluded lenses
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0) {
            return $query->result();
        }

        return 0;


        // version corrig�e, finalement non..
        /*$annee = date('Y', time());

        $query = $this->db->query("SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total
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

                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN
                                  (SELECT
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5

                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN
                                  (SELECT
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5

                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )

                                  WHERE c.id_users = ".$id_users."
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users");

        $total = 0;
        if ($query && $query->num_rows() > 0){

            foreach($query->result() as $result) {
                $total += $result->total;
            }


            return $total;
        }*/

        return false;
    }

    public function getTotalECCommandeByYear($id_users){
        $date = date('Y-m-d H:i:s',strtotime("- 12 months"));
//        $year = date('Y', time());
//        $sql = "SELECT COALESCE(SUM(totalCommande),0) + COALESCE(SUM(totalExpress),0) AS total FROM commande c
//        LEFT JOIN (SELECT SUM(total_commande) AS totalCommande, id_commande AS idcom FROM commande ct WHERE id_users = ".$id_users." AND type_commande > 1 AND tarif_express = 0 AND date_commande > '".$year."-01-01 00:00:00') AS total_com ON c.id_commande = idcom
//        LEFT JOIN (SELECT SUM(total_commande-tarif_express) AS totalExpress, id_commande AS idexp FROM commande ce WHERE id_users = ".$id_users." AND type_commande > 1 AND tarif_express > 0 AND date_commande > '".$year."-01-01 00:00:00') AS total_exp ON c.id_commande = idexp
//        WHERE id_users = ".$id_users." AND type_commande > 1 AND date_commande > '".$year."-01-01 00:00:00'";
        $sql = "SELECT COALESCE(SUM(totalCommande),0) + COALESCE(SUM(totalExpress),0) AS total FROM commande c
                LEFT JOIN (SELECT SUM(total_commande) AS totalCommande, id_commande AS idcom FROM commande ct WHERE id_users = ".$id_users." AND type_commande > 1 AND tarif_express = 0 AND date_commande > '".$date."') AS total_com ON c.id_commande = idcom
                LEFT JOIN (SELECT SUM(total_commande-tarif_express) AS totalExpress, id_commande AS idexp FROM commande ce WHERE id_users = ".$id_users." AND type_commande > 1 AND tarif_express > 0 AND date_commande > '".$date."') AS total_exp ON c.id_commande = idexp
                WHERE id_users = ".$id_users." AND type_commande > 1 AND date_commande > '".$date."'";
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getAllCommandeByMonth($data){

        $tarif_appoint = 0;
        $TabHoraireTarifLiv = array();

        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, c.is_express, date_update_commande, type_commande
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


        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, c.is_express, date_update_commande, type_commande
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

        $query = $this->db->query("SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,c.is_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture, v.libelle_verre, trad_fr
                                       FROM ".$this->table." c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN verres_stock v ON v.id_verre = c.id_verre
                                   	   LEFT JOIN lenses ls ON (ls.code = c.id_verre AND ls.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
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

        $query2 = $this->db->query("SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '".$data['date']."-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
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

        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.penalty, date_update_commande
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

        $query = $this->db->query("SELECT c.id_commande,date_commande,reference_client,total_commande,generation_verre,intitule_bl, taux_tva,libelle_verre_personnalise,c.id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,num_finess,email,COALESCE(total_reductions, 0) as reduction, 0 as TarifLivraison, commande_monture
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

    public function getShippingsByMonth($date, $user) {

        $query = $this->db->query("SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."'
            AND id_etat_commande = 6
            AND id_users = '".$user."'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."'
            AND id_etat_commande = 6
            AND id_users = '".$user."'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM ".$this->table." c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".$date."'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '".$date."'
        AND id_etat_commande = 6
        AND id_users = '".$user."'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC");

        if ($query && $query->num_rows() > 0) {
            return $query->result()[0];
        }

        return false;

    }


    public function getPackagingByMonth($date, $user = null) {

        if($user !== null) {
            $sql = 'SELECT tarif_packaging as total 
                    FROM users 
                    WHERE id_users = '.$user;
        }
        else {
            $sql = 'SELECT SUM(tarif_packaging) as total FROM users WHERE id_users IN (
                        SELECT DISTINCT(id_users) FROM `commande` 
                        WHERE DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" AND is_confirmed = 1 )';


        }
//        $sql = 'SELECT id_users, tarif_packaging FROM commande c INNER JOIN (SELECT MAX(date_commande) as maxDate FROM commande
//        WHERE DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" '.$add.' GROUP BY id_users) AS t WHERE c.date_commande = t.maxDate '.$add.' GROUP BY id_users, tarif_packaging ';
//        var_dump($sql);die;
        $query = $this->db->query($sql);
        $result = $query->result();
        $total = 0;
        if ($query && $query->num_rows() > 0) {
            $total = $result[0]->total;
        }
        return $total;

    }

    public function getSupplementByMonth($date, $user = null) {

        $add = '';

        if($user !== null) {
            $add = 'AND id_users = '.$user;
        }
        $sql = 'SELECT SUM(tarif_supplement) AS total_supplement FROM commande WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" '.$add;
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0) {
            return $query->result()[0]->total_supplement;
        }

        return 0;

    }

    public function getSupplementByDay($date = null) {

        if($date === null) {
            $date = date('Y-m-d H:i:s', mktime(0,0,0));
            $date_end = date('Y-m-d H:i:s', mktime(23,59,59));
        }
        else {
            $date_end = date('Y-m-d 23:59:59', strtotime($date));
        }
        $sql = 'SELECT SUM(tarif_supplement) AS total_supplement FROM commande WHERE (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND is_confirmed = 1 AND date_commande > "'.$date.'" AND date_commande < "'.$date_end.'"';
        $query = $this->db->query($sql);
        $total = 0;

        if ($query && $query->num_rows() > 0) {
            return $query->result()[0]->total_supplement;
        }

        return 0;

    }

    public function updatePackaging($user, $price) {

//        $price = (int) $price;
//        $user = (int) $user;
//
//        $this->db->query('UPDATE commande SET tarif_packaging = '.$price.' WHERE DATE_FORMAT(date_commande, "%m-%Y") = "'.date('m-Y').'" AND id_users = '.$user);

    }


    public function getPackagingByDay($date = null, $user = null) {
        $add = '';
        $date_start_month = date('Y-m-01 H:i:s', mktime(0,0,0));
        if($date === null) {
            $date = date('Y-m-d H:i:s', mktime(0,0,0));
            $date_end = date('Y-m-d H:i:s', mktime(23,59,59));
        }
        else {
            //$date = date('Y-m-d 00:00:00', strtotime($date));
            $date_end = date('Y-m-d 23:59:59', strtotime($date));
        }

        $sql = 'SELECT SUM(tarif_packaging) as total FROM users 
                WHERE id_users IN ( SELECT DISTINCT(id_users) FROM `commande` 
                WHERE date_commande >= "' .
                $date . '" AND date_commande <= "' . $date_end . '" AND is_confirmed = 1)
                AND id_users NOT IN ( SELECT DISTINCT(id_users) FROM `commande` 
                WHERE date_commande >= "' .
            $date_start_month . '" AND date_commande <= "' . $date . '" AND is_confirmed = 1)';
        //        $sql = 'SELECT id_users, tarif_packaging FROM commande c INNER JOIN (SELECT MAX(date_commande) as maxDate FROM commande
        //        WHERE DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" '.$add.' GROUP BY id_users) AS t WHERE c.date_commande = t.maxDate '.$add.' GROUP BY id_users, tarif_packaging ';
        //        var_dump($sql);die;
        //return $sql;
//        print_r($sql);die;
        $query = $this->db->query($sql);
        $total = 0;

        if ($query && $query->num_rows() > 0) {
            $result = $query->result();
            $total = $result[0]->total;
        }
        return $total;

        if($user !== null) {
            $add = 'AND id_users = '.$user;
        }

        $time = strtotime($date);
        $mois = date('m-Y', $time);
        $jour = date('j', $time);

        /* Get first orders of the day by clients to add on the daily sales */

        if($jour > 1) {
            $sql = 'SELECT c.id_users FROM commande c WHERE DATE_FORMAT(date_commande, "%m-%Y") = "' . $mois . '" AND c.date_commande < "' . $date . '" ' . $add . ' GROUP BY id_users';
            $get_last_orders = $this->db->query($sql);
        }
        $get_day_orders = $this->db->query('SELECT c.id_users FROM commande c WHERE DATE_FORMAT(date_commande, "%m-%Y") = "'.$mois.'" AND c.date_commande > "'.$date.'" AND c.date_commande < "'.$date_end.'" '.$add.' GROUP BY id_users');


        $day_orders = array();
        $last_orders = array();
        if($jour > 1) {
            foreach ($get_last_orders->result() as $order) {
                if (!in_array($order->id_users, $last_orders)) {
                    $last_orders[] = $order->id_users;
                }
            }
        }

        foreach($get_day_orders->result() as $order) {
            if(!in_array($order->id_users, $day_orders)) {
                $day_orders[] = $order->id_users;
            }
        }

        if($jour > 1) {
            $new_orders = array_diff($day_orders, $last_orders);
        }
        else {
            $new_orders = $day_orders;
        }

        //echo $date.' '. implode(',',$last_orders).'<br />';
        //echo $date.' '. implode(',',$new_orders).'<br />';
        $total = 0;

        if ($new_orders) {

            $sql = 'SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN('.implode(',',$new_orders).') AND date_commande > "'.$date.'" AND date_commande < "'.$date_end.'" GROUP BY tarif_packaging, date_commande ORDER BY date_commande DESC';
            $query = $this->db->query($sql);



            if ($query && $query->num_rows() > 0) {
                foreach($query->result() as $result) {
                    $total += $result->total;
                }
            }

        }
        //var_dump('merde');
        return $total;

    }

    public function updateBillsForMonth($user) {

//        $user_info = $this->db->query('SELECT tarif_packaging FROM users WHERE id_users = '.$user)->result();
//
//        if($this->db->query('UPDATE commande SET tarif_packaging = '.$user_info[0]->tarif_packaging.' WHERE DATE_FORMAT(date_commande, "%m-%Y") = "'.date('m-Y').'" AND id_users = '.$user)) {
//            return 1;
//        }
//
//
//        return 0;

    }


    public function getAllCommandeByMonthAndUser($date, $excl = null, $user = null){

        if($excl) {
            $excl = 'AND c.id_users NOT IN('.implode(',', $excl).')';
        }

        if($user) {
            $user = 'AND c.id_users = '.(int) $user;
        }

        $TabHoraireTarifLiv = array();
        $sql = "SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date(date_update_commande) AS date_update_commande, COUNT(1) AS expeditions
            FROM ".$this->table." c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '".$date."' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande), cc.tarif_livraison, cc.id_commande)
                as tarif_livr
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
              GROUP BY id_users,date(date_update_commande), cc.tarif_livraison, cc.id_commande)
            as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".$date."' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '".$date."'
            AND id_etat_commande = 6
            ".$excl."
            ".$user."
            GROUP BY c.id_users,date(date_update_commande), TarifLivraison, idCommande  
            ORDER BY c.id_users ASC";
//        print_r($sql);die;
        $query = $this->db->query($sql);

        $tarif_appoint = array();
        if ($query && $query->num_rows() > 0){
            foreach($query->result() as $result){
                if(!isset($TabHoraireTarifLiv[$result->id_users]))
                    $TabHoraireTarifLiv[$result->id_users] = array();

                array_push($TabHoraireTarifLiv[$result->id_users],$result->date_update_commande);

                if(isset($tarif_appoint[$result->id_users])){
                    $tarif_appoint[$result->id_users] += floatval($result->tarif_liv);
                } else {
                    $tarif_appoint[$result->id_users] = floatval($result->tarif_liv);
                }
            }
        }

        $sql = "SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
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
                GROUP BY id_users,date(date_update_commande), TarifLivraison, idCommande
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
                  GROUP BY id_users,date(date_update_commande), TarifLivraison2, idCommande2
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='".$date."'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             ".$excl."
             ".$user."
             AND DATE_FORMAT(date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."'
             GROUP BY id_users, date(date_update_commande), date_update_commande
             ORDER BY c.id_users";

        $query = $this->db->query($sql);


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

        $sql = "SELECT COALESCE(total_stock, 0)  + COALESCE(total_fabrique, 0) + COALESCE(total_lentilles, 0) + COALESCE(total_montures, 0) + COALESCE(total_express, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique,total_lentilles,total_montures, total_express, DATE_FORMAT(c.date_commande, '%Y-%m') AS y_m_commande,c.id_users, COALESCE(total_reductions, 0) as reduction,cp,nom_magasin,id_grille_tarifaire,nom_societe, 0 as tarif_liv, COALESCE(exp_stock) AS expeditions_stock, COALESCE(exp_fabric) AS expeditions_fabric
           FROM ".$this->table." c
           LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
           INNER JOIN users u ON u.id_users = c.id_users
           LEFT JOIN
            (SELECT
                SUM(reduction) AS total_reductions,
                id_users as idusers,
                DATE_FORMAT(date_remise, '%Y-%m') as y_m_remise
            FROM
                facture_reduction
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '".$date."'
            GROUP BY id_users, y_m_remise) AS reductions
           ON (
            c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = y_m_remise
           )
           LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_stock,id_users as idusersstock,DATE_FORMAT(c.date_commande, '%Y-%m') AS y_m_commande, COUNT(1) AS exp_stock
            FROM ".$this->table." c
            WHERE (id_type_generation_verre = 5 OR id_type_generation_verre = 23 OR origine_commande=2) 
            AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            AND commande_monture = 0
            AND id_verre IS NOT NULL
            GROUP BY idusersstock, y_m_commande) as commande_stock
          ON (
              c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = commande_stock.y_m_commande
          )
          LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_fabrique,id_users as idusersfabrique,DATE_FORMAT(c.date_commande, '%Y-%m') AS y_m_commande, COUNT(1) AS exp_fabric
            FROM ".$this->table." c
            WHERE (origine_commande=1)
            AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            AND commande_monture = 0
            AND id_verre IS NOT NULL
            GROUP BY idusersfabrique, y_m_commande) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = commande_fabrique.y_m_commande
          )
          LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_lentilles,id_users as iduserslentilles,DATE_FORMAT(c.date_commande, '%Y-%m') AS y_m_commande, COUNT(1) AS exp_lentilles
            FROM ".$this->table." c
            WHERE lens_id > 0
            AND id_verre IS NULL
            AND commande_monture = 0
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            GROUP BY iduserslentilles, y_m_commande) as commande_lentilles
          ON (
              c.id_users = iduserslentilles AND DATE_FORMAT(c.date_commande, '%Y-%m') = commande_lentilles.y_m_commande
          )
		  LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_montures,id_users as idusersmontures,DATE_FORMAT(c.date_commande, '%Y-%m') AS y_m_commande, COUNT(1) AS exp_montures
            FROM ".$this->table." c
            WHERE commande_monture = 1
            AND id_verre IS NULL
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            GROUP BY idusersmontures, y_m_commande) as commande_montures
          ON (
              c.id_users = idusersmontures AND DATE_FORMAT(c.date_commande, '%Y-%m') = commande_montures.y_m_commande
          )
           LEFT JOIN 
          (SELECT 
            SUM(tarif_express) as total_express,id_users as idusersexpress,DATE_FORMAT(c.date_commande, '%Y-%m') AS y_m_commande, COUNT(1) AS exp_express
            FROM ".$this->table." c
            WHERE type_commande > 1 AND penalty != 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '".$date."'
            GROUP BY idusersexpress, y_m_commande) as commande_express
          ON (
              c.id_users = idusersexpress AND DATE_FORMAT(c.date_commande, '%Y-%m') = commande_express.y_m_commande
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".$date."'
          ".$excl."
          ".$user."
          GROUP BY c.id_users, y_m_commande, commande_stock.total_stock, commande_fabrique.total_fabrique, commande_lentilles.total_lentilles, commande_montures.total_montures, commande_express.total_express, total, reduction, commande_stock.exp_stock, commande_fabrique.exp_fabric
          ORDER BY c.id_users";
//        print_r($sql);die;
        $query = $this->db->query($sql);

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
            $sql2 = "SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as total,0 as total_stock,0 as total_fabrique, 0 as reduction, c.id_users, '01-".$date."' as date_commande,cp,nom_magasin, id_grille_tarifaire,nom_societe, COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv
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
                GROUP BY id_users,date(date_update_commande), TarifLivraison, idCommande
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
                  GROUP BY date(date_update_commande),id_users, TarifLivraison2, idCommande2
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
                WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '".date('m-Y',strtotime("01-".$date  . ' -1 month'))."' 
                AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '".$date."' 
                AND id_etat_commande = 6
                ".$excl."
                ".$user."
                AND c.id_users NOT IN(SELECT id_users as iduser2 
                                      FROM commande c2 
                                      WHERE DATE_FORMAT(c2.date_commande, '%m-%Y') = '".$date."')
            
                GROUP BY id_users
                ORDER BY c.id_users";
            $query2 = $this->db->query($sql2);

            foreach($query2->result() as $data2){
                if($data2->total > 0)
                    array_push($data,$data2);
            }
            return $data;
        }

        return false;
    }

    public function lastMonthOrderExpeditions($date) {

        $current_month = DateTime::createFromFormat('m-Y', $date);
        $last_month = DateTime::createFromFormat('m-Y', $date);

        $last_month->modify('first day of previous month');

        $TarifLivraison = 0;

        $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande
                                     FROM ".$this->table."
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$current_month->format('Y-m')."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND ( DATE_FORMAT(date_commande, '%Y-%m')='".$last_month->format('Y-m')."' AND ((date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                     GROUP BY date(date_update_commande),id_users");

        if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
                $TabHoraireTarifLiv[$value->id_users] = array();
                array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
                $TarifLivraison += $value->TarifLivraison;
            }

        $query2 = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande
                                      FROM ".$this->table."
                                      WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$current_month->format('Y-m')."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND ((date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".$last_month->format('Y-m')."') AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
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
										WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$current_month->format('Y-m')."'
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
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$current_month->format('Y-m')."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$current_month->format('Y-m')."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".$last_month->format('Y-m')."'
                                     GROUP BY id_users");

        if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
                $add = true;

                if(isset($TabHoraireTarifLiv[$value->id_users])){
                    foreach($TabHoraireTarifLiv[$value->id_users] as $dateHoraire){


                        if(($dateHoraire >= $current_month->format('Y-m-d 00:00:00') && $dateHoraire <$current_month->format('Y-m-d 06:00:00')) && ($value->date_update_commande >= $current_month->format('Y-m-d 09:00:00') && $value->date_update_commande < $current_month->format('Y-m-d 16:00:00'))) {
                            $add = false;
                            break;
                        }

                        if(($dateHoraire < $current_month->format('Y-m-d 09:00:00') || $dateHoraire >= $current_month->format('Y-m-d 16:00:00')) && ($value->date_update_commande < $current_month->format('Y-m-d 09:00:00') || $value->date_update_commande >= $current_month->format('Y-m-d 16:00:00'))) {
                            $add = false;
                            break;
                        }
                    }
                }

                if($add){
                    $TarifLivraison += $value->TarifLivraison;

                }
            }
        return $TarifLivraison;
    }


    public function lastMonthOrderExpeditionsByDay($date) {

        $current_month = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        $last_month = DateTime::createFromFormat('Y-m-d H:i:s', $date);

        $last_month->modify('first day of previous month');

        $TarifLivraison = 0;

        $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande
                                     FROM ".$this->table."
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m-%d')='".$current_month->format('Y-m-d')."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND ( DATE_FORMAT(date_commande, '%Y-%m')='".$last_month->format('Y-m')."' AND ((date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                     GROUP BY date(date_update_commande),id_users");

        if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
                $TabHoraireTarifLiv[$value->id_users] = array();
                array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
                $TarifLivraison += $value->TarifLivraison;
            }

        $query2 = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date_update_commande
                                      FROM ".$this->table."
                                      WHERE DATE_FORMAT(date_update_commande, '%Y-%m-%d')='".$current_month->format('Y-m-d')."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND ((date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".$last_month->format('Y-m')."') AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
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
										WHERE DATE_FORMAT(date_update_commande, '%Y-%m-%d')='".$current_month->format('Y-m-d')."'
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
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m-%d')='".$current_month->format('Y-m-d')."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m-d')='".$current_month->format('Y-m-d')."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".$last_month->format('Y-m')."'
                                     GROUP BY id_users");

        if($query && $query->num_rows() > 0)
            foreach($query->result() as $value){
                $add = true;

                if(isset($TabHoraireTarifLiv[$value->id_users])){
                    foreach($TabHoraireTarifLiv[$value->id_users] as $dateHoraire){


                        if(($dateHoraire >= $current_month->format('Y-m-d 00:00:00') && $dateHoraire <$current_month->format('Y-m-d 06:00:00')) && ($value->date_update_commande >= $current_month->format('Y-m-d 09:00:00') && $value->date_update_commande < $current_month->format('Y-m-d 16:00:00'))) {
                            $add = false;
                            break;
                        }

                        if(($dateHoraire < $current_month->format('Y-m-d 09:00:00') || $dateHoraire >= $current_month->format('Y-m-d 16:00:00')) && ($value->date_update_commande < $current_month->format('Y-m-d 09:00:00') || $value->date_update_commande >= $current_month->format('Y-m-d 16:00:00'))) {
                            $add = false;
                            break;
                        }
                    }
                }

                if($add){
                    $TarifLivraison += $value->TarifLivraison;

                }
            }
        return $TarifLivraison;
    }


    public function CAMensuel($date, $tarif_Livraison = true){

        // Tests
        /*$data = $this->getAllCommandeByMonthAndUser($date);

        $total = 0;
        $livraison = 0;

        if(!empty($data)) {

            foreach ($data as $k => $d) {
                $livraison += $d->tarif_liv;
                $total += $d->total;
            }

            if ($tarif_Livraison == false) {
                $total = $total - $livraison;
            }

            return $total;

        }
        else {
            return 0;
        }*/

        $time = DateTime::createFromFormat('m-Y', $date);
        $date = $time->format('Y-m');


        $TarifLivraison = $tarifliv = 0;
        $TabHoraireTarifLiv = array();

        if($tarif_Livraison){
            $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date(date_update_commande),DATE_FORMAT(date_update_commande, '%e') as day
                                     FROM ".$this->table."
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND ( DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                     GROUP BY id_users, date(date_update_commande), TarifLivraison, day");


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


            $query = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date(date_update_commande),DATE_FORMAT(date_update_commande, '%e') as day
                                     FROM ".$this->table."
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                     GROUP BY id_users,date(date_update_commande), TarifLivraison, day");

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

            $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison1),0) + COALESCE(SUM(TarifLivraison2),0) as TarifLivraison,id_users,date(date_update_commande), DATE_FORMAT(date_update_commande, '%e') as day
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
										FROM commande cc 
										WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$date."' 
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY TarifLivraison1, idCommande
										) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									   LEFT JOIN (
										SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '".$date."'
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY TarifLivraison2, idCommande2
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.' -1 month'))."'
                                     GROUP BY id_users,date(date_update_commande), day");

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
//        print_r($TarifLivraison);die;
        $sql = "SELECT (SELECT IFNULL(SUM(total_commande),0) as ca_journalier FROM commande
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND (type_commande = 1
                                   OR type_commande > 1 AND penalty = 1)
                                   AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(tarif_express),0) as tarif_express FROM commande
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."'
                                   AND type_commande > 1 AND penalty != 1
                                   AND is_confirmed = 1) 
                                   +
                                   (".$TarifLivraison.")
								   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM facture_reduction fr
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."') as ca";
        $query = $this->db->query($sql);

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }
//        print_r($total);die;
        return $total;

    }

    public function getCAmonthSupplement_Samuel($date){

        $supplement = 0;

        $sql = 'SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" AND Samuel = 100.00 AND is_confirmed = 1';
        //var_dump($sql);

        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAmonth_Samuel($date){

        $time = DateTime::createFromFormat('m-Y', $date);
        $date = $time->format('Y-m');

        $sql = "SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND (type_commande = 1) AND Samuel = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND type_commande > 1 AND penalty = 1 AND Samuel = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."'
                                   AND (type_commande > 1 AND penalty != 1) AND Samuel = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."' AND Samuel = 100.00) as ca";
//        print_r($sql);die;
        $query = $this->db->query($sql);

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAmonthSupplement_Daniel($date){
        $supplement = 0;

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND  DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" AND Daniel = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAmonth_Daniel($date){

        $time = DateTime::createFromFormat('m-Y', $date);
        $date = $time->format('Y-m');


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND type_commande = 1 AND Daniel = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND type_commande > 1 AND penalty = 1 AND Daniel = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."'
                                   AND type_commande > 1 AND penalty != 1 AND Daniel = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."' AND Daniel = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAmonthSupplement_Gregory($date){

        $supplement = 0;

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" AND Gregory = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAmonth_Gregory($date){

        $time = DateTime::createFromFormat('m-Y', $date);
        $date = $time->format('Y-m');


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' 
                                   AND type_commande = 1 AND Gregory = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' 
                                   AND type_commande > 1 AND penalty = 1 AND Gregory = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express 
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."'
                                   AND type_commande > 1 AND penalty != 1 AND Gregory = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."' AND Gregory = 100.00 ) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAmonthSupplement_Glenn($date){

        $supplement = 0;

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement 
                                   FROM commande
		                           JOIN users ON commande.id_users = users.id_users
		                           WHERE (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) 
		                           AND DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" 
		                           AND Glenn = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAmonth_Glenn($date){

        $time = DateTime::createFromFormat('m-Y', $date);
        $date = $time->format('Y-m');


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' 
                                   AND type_commande = 1 AND Glenn = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' 
                                   AND type_commande > 1 AND penalty = 1 AND Glenn = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express 
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."'
                                   AND type_commande > 1 AND penalty != 1 AND Glenn = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."' AND Glenn = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAmonthSupplement_Optical_Service($date){

        $supplement = 0;

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND DATE_FORMAT(date_commande, "%m-%Y") = "'.$date.'" AND Optical_Service = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAmonth_Optical_Service($date){

        $time = DateTime::createFromFormat('m-Y', $date);
        $date = $time->format('Y-m');


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND type_commande = 1 AND Optical_Service = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND type_commande > 1 AND penalty = 1 AND Optical_Service = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='".$date."'
                                   AND type_commande > 1 AND penalty != 1 AND Optical_Service = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '".$date."' AND Optical_Service = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAdaySupplement_Samuel(){

        $supplement = 0;
        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND (commande.date_commande > "'.$date.'" AND commande.date_commande < "'.$date_end.'") AND Samuel = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAday_Samuel(){

        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande = 1 AND Samuel = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande > 1 AND penalty = 1 AND Samuel = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."')
                                   AND type_commande > 1 AND penalty != 1 AND Samuel = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE (date_remise > '".$date."' AND date_remise < '".$date_end."') AND Samuel = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAdaySupplement_Daniel(){

        $supplement = 0;
        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND (commande.date_commande > "'.$date.'" AND commande.date_commande < "'.$date_end.'") AND Daniel = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAday_Daniel(){

        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));

        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande = 1 AND Daniel = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande > 1 AND penalty = 1 AND Daniel = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."')
                                   AND type_commande > 1 AND penalty != 1 AND Daniel = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE (date_remise > '".$date."' AND date_remise < '".$date_end."') AND Daniel = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAdaySupplement_Gregory(){

        $supplement = 0;
        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND (commande.date_commande > "'.$date.'" AND commande.date_commande < "'.$date_end.'") AND Gregory = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAday_Gregory(){

        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande = 1 AND Gregory = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande > 1 AND penalty = 1 AND Gregory = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."')
                                   AND type_commande > 1 AND penalty != 1 AND Gregory = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE (date_remise > '".$date."' AND date_remise < '".$date_end."') AND Gregory = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAdaySupplement_Glenn(){

        $supplement = 0;
        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement 
                                   FROM commande
		                           JOIN users ON commande.id_users = users.id_users
		                           WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) 
		                           AND (commande.date_commande > "'.$date.'" 
		                           AND commande.date_commande < "'.$date_end.'") 
		                           AND Glenn = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAday_Glenn(){

        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier 
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' 
                                   AND commande.date_commande < '".$date_end."') 
                                   AND type_commande = 1 
                                   AND Glenn = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty
                                   FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' 
                                   AND commande.date_commande < '".$date_end."') 
                                   AND type_commande > 1 
                                   AND penalty = 1 
                                   AND Glenn = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express 
                                    FROM commande
								    JOIN users ON commande.id_users = users.id_users
                                    WHERE (commande.date_commande > '".$date."' 
                                    AND commande.date_commande < '".$date_end."')
                                    AND type_commande > 1 
                                    AND penalty != 1 
                                    AND Glenn = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction 
								   FROM facture_reduction fr
								   JOIN users ON fr.id_users = users.id_users
								   WHERE (date_remise > '".$date."' 
								   AND date_remise < '".$date_end."') 
								   AND Glenn = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
    }

    public function getCAdaySupplement_Optical_Service(){

        $supplement = 0;
        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));

        $query = $this->db->query('SELECT SUM(commande.tarif_supplement) AS total_supplement FROM commande
		JOIN users ON commande.id_users = users.id_users
		WHERE  (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) AND (commande.date_commande > "'.$date.'" AND commande.date_commande < "'.$date_end.'") AND Optical_Service = 100.00 AND is_confirmed = 1');

        if ($query && $query->num_rows() > 0) {
            $supplement += $query->result()[0]->total_supplement;
        }

        return $supplement;
    }

    public function getCAday_Optical_Service(){

        $date = date('Y-m-d H:i:s', mktime(0,0,0));
        $date_end = date('Y-m-d H:i:s', mktime(23,59,59));


        $query = $this->db->query("SELECT (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande = 1 AND Optical_Service = 100.00 AND is_confirmed = 1)
                                   +
                                  (SELECT IFNULL(SUM(commande.total_commande),0) as ca_journalier_penalty FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."') AND type_commande > 1 AND penalty = 1 AND Optical_Service = 100.00 AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(commande.tarif_express),0) as tarif_express FROM commande
								   JOIN users ON commande.id_users = users.id_users
                                   WHERE (commande.date_commande > '".$date."' AND commande.date_commande < '".$date_end."')
                                   AND type_commande > 1 AND penalty != 1 AND Optical_Service = 100.00 AND is_confirmed = 1) 
                                   -
								  (SELECT IFNULL(SUM(fr.reduction),0) as reduction FROM facture_reduction fr
								  JOIN users ON fr.id_users = users.id_users
								   WHERE (date_remise > '".$date."' AND date_remise < '".$date_end."') AND Optical_Service = 100.00) as ca");

        $total = 0;

        if ($query && $query->num_rows() > 0) {
            foreach($query->result() as $result) {
                $total += $result->ca;
            }
        }

        return $total;
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
                $this->db->where("(( origine_commande=1))");
            elseif($magasin == 2)
                $this->db->where("(((origine_commande=2) AND id_verre IN (SELECT id_verre FROM verres_traduction)) OR origine_commande=2)");
            elseif($magasin == 4)
                $this->db->where("commande_monture = 1");

        $this->db->where("email_send", 0);
        $this->db->set("email_send",1);

        $this->db->update($this->table);
    }

    public function addOrder($data, $byAdmin = 0){
        if(is_array($data)){

            $pair = $data['pair'];
            unset($data['discount']);
            $data['by_admin'] = $byAdmin;
            if(!isset($data['id_verreD']) && !isset($data['id_verreG']))
            {
                $ancienne_commande = isset($data['ancienne_commande']) ? $data['ancienne_commande'] : 0;
                $data['ancienne_commande'] = (int) $ancienne_commande;

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

                $data['tarif_express'] = 0;

                if($data['express'] == 1) {
                    $data['tarif_express'] = 25;
                    $data['total_commande'] += 25;
                    $data['is_express'] = true;
                }

                $data = array_intersect_key($data, $this->fields);
                unset($data['date_annule']);

                foreach($data as $num => $key){
                    $update_fields[] = $num."='".$data[$num]."'";
                    $data_key[] = $num;
                }
                if(isset($data['id_miroir']))
                    $data['id_miroir'] = $this->db->escape($data['id_miroir']);

                $data['reference_client'] = $this->db->escape($data['reference_client']);
                $data['information_commande'] = $this->db->escape($data['information_commande']);
                $data['origine_commande'] = (int) $data['origine_commande'];

                $data['information_certificat'] = $this->db->escape($data['information_certificat']);
                $data['taux_tva'] = $this->db->escape($data['taux_tva']);
                $data['date_commande'] = $this->db->escape($data['date_commande']);
                $data['date_update_commande'] = $this->db->escape($data['date_update_commande']);

                if(true == $pair) {
                    $table_commande = $this->table_temp;
                    $table_commentaire = $this->table_commentaire_temp;
                }
                else {
                    $table_commande = $this->table;
                    $table_commentaire = $this->table_commentaire;
                }
                $data['id_verre'] = "'".$data['id_verre']."'";
                $data['generation'] = "'".$data['generation']."'";
                $data['id_type_generation_verre']=0;
                // PLZ RTFM
                // https://www.codeigniter.com/userguide2/database/active_record.html
                //echo "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";
//            var_dump($data);
                if(!empty($commentaire)){
                    array_push( $data_key, 'is_confirmed');
                    $data['is_confirmed'] = 0;
                }
//                var_dump($data);die;

                foreach ($data as $key => $value) {
                    if (is_null($value)) {
                        if ($value != 'generation') {
                            $data[$key] = 'NULL';
                        }
                    }
                }
                $sql = "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES ("
                    .implode(",", $data).")";
                if($this->db->query($sql)){

                    $commande_id = $this->db->insert_id();

                    if(!empty($commentaire)){
                        $data = array('id_commande' => $commande_id, 'commentaire' => $commentaire);
                        $this->db->insert($table_commentaire, $data);
                    }

                    $this->setNbDayOrder();
                    if(true === $pair) {
                        return array('id' => $commande_id, 'pair' => true);
                    }
                    else {
                        return array('id' => $commande_id, 'pair' => false);
                    }

                }

                return false;
            }

            else
            {

                $ancienne_commande = isset($data['ancienne_commande']) ? $data['ancienne_commande'] : 0;
                $data['ancienne_commande'] = (int) $ancienne_commande;

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

                $id_verreD = $data['id_verreD'];
                $id_verreG = $data['id_verreG'];
                $nb_multi_commande = $data['nb_multi_commande'];

                $quantiteD = $data['quantiteD'];
                $quantiteG = $data['quantiteG'];

                $type_de_verreD = $data['type_de_verreD'];
                $type_de_verreG = $data['type_de_verreG'];

                //   $type_commandeD = $data['type_commandeD'];
                if(isset($data['type_commande_verreD']))
                    $type_commande_verreD = $data['type_commande_verreD'];

                if(isset($data['origine_commandeD']))
                    $origine_commandeD = $data['origine_commandeD'];

                $information_commandeD = $data['information_commandeD'];

                //   $type_commandeG = $data['type_commandeG'];
                $type_commande_verreG = $data['type_commande_verreG'];
                $origine_commandeG = $data['origine_commandeG'];

                $information_commandeG = $data['information_commandeG'];
                $data['id_type_generation_verre']=0;

                $type_commande_verre = $data['type_commande_verre'];

                if(isset($data['prixDiscountD']))
                {
                    $prixDH=$data['prixDiscountD'];
                    $prixGH=$data['prixDiscountG'];
                    $prixUnitaireD = $data['prixDiscountD'];
                    $prixUnitaireG = $data['prixDiscountG'];
                }
                else
                {
                    $prixDH=$data['prixDH'];
                    $prixGH=$data['prixGH'];
                    $prixUnitaireD = $data['prixUnitaireD'];
                    $prixUnitaireG = $data['prixUnitaireG'];
                }

                $panierA = $data['panierA'];
                $panierA_D = 0;
                $panierA_G = 0;

                if(isset($data['panierA_D']))
                {
                    $panierA_D = $data['panierA_D'];
                }

                if(isset($data['panierA_G']))
                {
                    $panierA_G = $data['panierA_G'];
                }


                $unVerreD = 0;
                $unVerreG = 0;

                $verreGauche = isset($data['recap_commande']['gauche']) ? true : false;
                $verreDroit = isset($data['recap_commande']['droit']) ? true : false;

                if($data['type_de_verreD']!="" && $data['type_de_verreG']==""  && !isset($data['gauche']))
                {
                    $unVerreD = 1;
                }

                if($data['type_de_verreG']!="" && $data['type_de_verreD']=="" && !isset($data['droit']))
                {
                    $unVerreG = 1;
                }

                $data['tarif_express'] = 0;
                $data['is_express'] = 0;
                $express = $data['express'];

                //$data['prix_verre'] = str_replace("�","",$data['prix_verre']);

                $data['id_miroir'] = $this->db->escape($data['id_miroir']);
                $data['reference_client'] = $this->db->escape($data['reference_client']);

                $data['origine_commande'] = (int) $data['origine_commande'];

                $data['information_certificat'] = $this->db->escape($data['information_certificat']);
                $data['taux_tva'] = $this->db->escape($data['taux_tva']);
                $data['date_commande'] = $this->db->escape($data['date_commande']);
                $data['date_update_commande'] = $this->db->escape($data['date_update_commande']);

                foreach ($this->fields as $value) {
                    if (isset($data[$value]) && $data[$value] === '') {
                        if ($value != 'generation') {
                            $data[$value] = 'NULL';
                        }
                    }
                }

                $data['generation'] = "'".$data['generation']."'";

                if(true == $pair) {
                    $table_commande = $this->table_temp;
                    $table_commentaire = $this->table_commentaire_temp;
                }
                else {
                    $table_commande = $this->table;
                    $table_commentaire = $this->table_commentaire;
                }

                $expressD = 0;

                $data = array_intersect_key($data, $this->fields);
//                var_dump($data);die;

                unset($data['date_annule']);

                foreach($data as $num => $key){
                    $update_fields[] = $num."='".$data[$num]."'";
                    $data_key[] = $num;
                }
                //var_dump($data_key);die;

                if($type_commande_verre!=4)
                {

                    $data['prix_verre'] = str_replace("�","",$data['prix_verre']);

                    if($quantiteD==$quantiteG && $type_commande_verre == 2 && $type_de_verreD==$type_de_verreG)
                    {
                        $data['prix_verre'] = $prixUnitaireD;
                        $data['total_commande']=$prixUnitaireD*2;

                    }

                    if($quantiteD==$quantiteG && $type_commande_verre == 1 && $type_de_verreD==$type_de_verreG)
                    {
//					if($prixUnitaireD != $prixUnitaireG)
//					{
//						$data['prix_verre'] = $prixUnitaireD + $prixUnitaireG;
//					}
//					else
//					{
                        $data['prix_verre'] = $prixUnitaireD;
//					}
                        $data['total_commande']=$prixUnitaireD+$prixUnitaireG;
                    }

                    if($express == 1)
                    {
                        $data['tarif_express'] = 25;
                        $data['total_commande'] += 25;
                        $data['is_express'] = true;
                    }

                    $data['information_commande'] = str_replace("+","",$data['information_commande']);
                    $data['information_commande'] = $this->db->escape($data['information_commande']);

                    if(strpos($data['id_verre'], "]") !== false)
                    {
                        $data['id_verre'] = str_replace("]","",$data['id_verre']);
                        $v = explode("*",$data['id_verre']);
                        $data['id_verre'] = $v[0];
                    }

                    $data['id_verre'] = "'".$data['id_verre']."'";
                    if (isset($data['premiere_commande'])) {
                        $premiereCommande = $data['premiere_commande'];
                        $data['premiere_commande'] = 0;
                    }

                    //echo "Verre != 4 <br>";
                    //echo "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";

                    if(!empty($commentaire)){
                        array_push( $data_key, 'is_confirmed');
                        $data['is_confirmed'] = 0;
                    }
                    $sql = "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES ("
                        .implode(",", $data).")";
//                    var_dump($sql);die;

                    if($this->db->query($sql));
                    {

                        $commande_id = $this->db->insert_id();
                        if (isset($premiereCommande)) {
                            $sqlPaireOne = "SELECT * FROM commande 
                                  WHERE `id_commande` = '" . $premiereCommande . "'";
                            $query = $this->db->query($sqlPaireOne);
                            $paireOne = $query->result();
                            if ($paireOne[0]->prix_verre >= $data['prix_verre'])  {
                                $sql2 = "UPDATE `commande` SET `premiere_commande` = '" . $commande_id
                                    . "' WHERE `id_commande` = '" . $premiereCommande . "'";
                            }
                            else {
                                $sql2 = "UPDATE `commande` SET `premiere_commande` = '" . $premiereCommande
                                    . "' WHERE `id_commande` = '" . $commande_id . "'";
                            }

                            $this->db->query($sql2);
                        }

                        if(!empty($commentaire)){
                            $data = array('id_commande' => $commande_id, 'commentaire' => $commentaire);
                            $this->db->insert($table_commentaire, $data);
                        }

                        $this->setNbDayOrder();

                        if(true === $pair) {
                            return array('id' => $commande_id, 'pair' => true);
                        }
                        else {
                            return array('id' => $commande_id, 'pair' => false);
                        }

                    }

                }
                else
                {
                    $ok = 0;
                    if($id_verreD!="" && $verreDroit)
                    {
                        //$data['type_commande'] = $type_commandeD;
                        $type_commande_verre = $type_commande_verreD;
                        $data['origine_commande'] = $origine_commandeD;

                        if($unVerreD==0)
                        {
                            $data['prix_verre'] = $prixDH;
                            $data['total_commande'] = $prixDH;
                        }
                        else
                        {
                            $data['total_commande'] = $data['prix_verre'];
                        }

                        $data['information_commande'] = str_replace("+","",$information_commandeD);
                        $data['information_commande'] = $this->db->escape($data['information_commande']);

                        $data['id_verre'] = $id_verreD;

                        if(isset($panierA_D) && $panierA_D != 0 && $panierA_D != "")
                        {
                            $data['panierA']=$panierA_D;
                        }
                        else if(isset($data['panierA']) && $data['panierA']!=2) {
                            $data['panierA']=0;
                        }



                        if(strpos($id_verreD, "]") !== false)
                        {
                            $data['id_verre'] = str_replace("]","",$id_verreD);
                            $v = explode("*",$data['id_verre']);
                            $data['id_verre'] = $v[0];
                            $data['id_verre'] = "'".$data['id_verre']."'";
                        }
                        else
                        {
                            $data['id_verre'] = "'".$data['id_verre']."'";
                        }

                        $data['id_verre']=str_replace("''","'",$data['id_verre']);



                        if($express == 1 && $type_commande_verreD=="1")
                        {
                            $data['tarif_express'] = 25;
                            $data['total_commande'] += 25;
                            $data['is_express'] = true;
                            $expressD = 1;
                        }

                        /*	echo "Droit = 4<br>";
                            echo "nb_multi_commande = ".$nb_multi_commande."<br>";
                            echo "quantiteD = ".$quantiteD."<br>";
                            echo "unVerreD = ".$unVerreD."<br>";
                            echo "id_verreD = ".$id_verreD."<br>";
                            echo "id_verreG = ".$id_verreG."<br>";
                            var_dump($data);

                            echo "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";
                        */

                        if($nb_multi_commande == 1 && $quantiteD>1 && $unVerreD==0 && $id_verreD!=$id_verreG)
                        {

                            $data['prix_verre'] = $prixUnitaireD;
                            $data['total_commande'] = $prixUnitaireD;


                            for($i=0;$i<$quantiteD;$i++)
                            {

                                if(!empty($commentaire)){
                                    array_push( $data_key, 'is_confirmed');
                                    $data['is_confirmed'] = 0;
                                }
                                if($this->db->query("INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")"))
                                {

                                    $commande_id = $this->db->insert_id();


                                    if(!empty($commentaire)){
                                        $data = array('id_commande' => $commande_id, 'commentaire' => $commentaire);
                                        $this->db->insert($table_commentaire, $data);
                                    }

                                    $this->setNbDayOrder();

                                    $ok = 1;

                                }
                            }

                        }
                        else
                        {

                            if(!empty($commentaire)){
                                array_push( $data_key, 'is_confirmed');
                                $data['is_confirmed'] = 0;
                            }

                            $sql = "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";
                            if($this->db->query($sql))
                            {

                                $commande_id = $this->db->insert_id();


                                if(!empty($commentaire)){
                                    $data = array('id_commande' => $commande_id, 'commentaire' => $commentaire);
                                    $this->db->insert($table_commentaire, $data);
                                }

                                $this->setNbDayOrder();

                                $ok = 1;

                            }
                        }
                    }
                    if($id_verreG!="" && $verreGauche)
                    {

                        //$data['type_commande'] = $type_commandeG;
                        $type_commande_verre = $type_commande_verreG;
                        $data['origine_commande'] = $origine_commandeG;
//					if($unVerreG==0)
//					{
//						$data['prix_verre'] = $prixGH;
//						$data['total_commande'] = $prixGH;
//					}
//					else
//					{
//					    var_dump($data);die;
                        $data['prix_verre'] = 0;
                        $data['total_commande'] = $prixGH;
//					}

                        $data['information_commande'] = str_replace("+","",$information_commandeG);
                        $data['information_commande'] = $this->db->escape($data['information_commande']);

                        $data['id_verre'] = $id_verreG;

                        if($panierA_G != 0 && $panierA_G != "")
                        {
                            $data['panierA']=$panierA_G;
                        }
                        else
                        {
                            if($data['panierA']!=2)
                                $data['panierA']=0;
                        }

                        if(strpos($id_verreG, "]") !== false)
                        {
                            $data['id_verre'] = str_replace("]","",$id_verreG);
                            $v = explode("*",$data['id_verre']);
                            $data['id_verre'] = $v[0];
                            $data['id_verre'] = "'".$data['id_verre']."'";
                        }
                        else
                        {
                            $data['id_verre'] = "'".$data['id_verre']."'";
                        }

                        $data['id_verre']=str_replace("''","'",$data['id_verre']);



                        if($type_commande_verre=="1" && $expressD==0)
                        {
                            if($express == 1)
                            {
                                $data['tarif_express'] = 25;
                                $data['total_commande'] += 25;
                                $data['is_express'] = true;
                            }
                        }

                        /*	echo "Gauche = 4<br>";
                            echo "nb_multi_commande = ".$nb_multi_commande."<br>";
                            echo "quantiteG = ".$quantiteG."<br>";
                            echo "unVerreG = ".$unVerreG."<br>";
                            echo "id_verreD = ".$id_verreD."<br>";
                            echo "id_verreG = ".$id_verreG."<br>";
                            var_dump($data);

                            echo "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";
                        */


                        if($nb_multi_commande == '1' && $quantiteG>1 && $unVerreG==0 && $id_verreD!=$id_verreG)
                        {

                            $data['prix_verre'] = $prixUnitaireG;
                            $data['total_commande'] = $prixUnitaireG;

                            for($i=0;$i<$quantiteG;$i++)
                            {
                                if(!empty($commentaire)){
                                    array_push( $data_key, 'is_confirmed');
                                    $data['is_confirmed'] = 0;
                                }

                                $sql = "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";
                                if($this->db->query($sql))
                                {

                                    $commande_id = $this->db->insert_id();


                                    if(!empty($commentaire)){
                                        $data = array('id_commande' => $commande_id, 'commentaire' => $commentaire);
                                        $this->db->insert($table_commentaire, $data);
                                    }

                                    $this->setNbDayOrder();

                                    $ok = 1;

                                }
                            }
                        }
                        else
                        {
                            if(!empty($commentaire)){
                                array_push( $data_key, 'is_confirmed');
                                $data['is_confirmed'] = 0;
                            }
                            $sql = "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";
                            if($this->db->query($sql))
                            {

                                $commande_id = $this->db->insert_id();


                                if(!empty($commentaire)){
                                    $data = array('id_commande' => $commande_id, 'commentaire' => $commentaire);
                                    $this->db->insert($table_commentaire, $data);
                                }

                                $this->setNbDayOrder();

                                $ok = 1;

                            }
                        }
                    }

                    if($ok == 1)
                    {
                        if(true === $pair) {
                            return array('id' => $commande_id, 'pair' => true);
                        }
                        else {
                            return array('id' => $commande_id, 'pair' => false);
                        }
                    }

                }




                // PLZ RTFM
                // https://www.codeigniter.com/userguide2/database/active_record.html
                //echo "INSERT INTO ".$table_commande." (".implode(', ', $data_key).") VALUES (".implode(",", $data).")";



                return false;
            }
        }
    }

    public function getCommandeJournalierePDF($date="", $magasin = 1, $envoi_chine = 0){

        $sql_add = "AND c.id_verre IN (SELECT code FROM lenses)";
        $date_add = "date_commande <='".$date."'";
        $email_send = " AND email_send = 0";
        $order_by = "c.id_commande";

        if($magasin == 2){
            $sql_add = "AND c.id_verre NOT IN (SELECT code FROM lenses)";
            $order_by = "v.order_verre";
        }

        if($envoi_chine == 1){
            $date_add = "date_commande >='".$date." 00:00:00' AND date_commande <='".$date." 23:59:59'";
            $email_send = "";
        }
        $sql = "SELECT u.tel_fixe, c.*, c.premiere_commande,c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.tarif_express, c.is_express, information_commande,reference_client,total_commande, penalty,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,commentaire, vt.traduction,c.id_verre,trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres_stock v ON v.id_verre = c.id_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                   WHERE (".$date_add." ".$sql_add.") ".$email_send."
                                   AND c.is_confirmed = 1
                                   ORDER BY ".$order_by;
        //var_dump($sql);die;

        $query = $this->db->query($sql);

        /*echo "SELECT u.tel_fixe, c.*, c.premiere_commande,c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.tarif_express,information_commande,reference_client,total_commande, penalty,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,commentaire, vt.traduction,c.id_verre,trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                   WHERE (".$date_add." ".$sql_add.") ".$email_send."
                                   ORDER BY ".$order_by;
        */
        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCommandeJournaliere($date="", $magasin = 1, $envoi_chine = 0){
        $sql_add = "AND c.id_verre IN (SELECT code FROM lenses)";
        $date_add = "date_commande <='".$date."'";
        $email_send = " AND email_send = 0";
        $order_by = "c.id_commande";

        if($magasin == 2){
            $sql_add = "AND c.id_verre NOT IN (SELECT code FROM lenses)";
            $order_by = "v.libelle_verre";
        }

        if($envoi_chine == 1){
            $date_add = "date_commande >='".$date." 00:00:00' AND date_commande <='".$date." 23:59:59'";
            $email_send = "";
        }

        $sql = "SELECT u.tel_fixe, c.*, c.premiere_commande,c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.tarif_express, c.is_express, information_commande,reference_client,total_commande, penalty,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,commentaire, vt.traduction,c.id_verre,trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                   WHERE ".$date_add." ".$sql_add." ".$email_send."
                                   ORDER BY ".$order_by;
//        var_dump($sql);die;
        $query = $this->db->query($sql);
        /*echo "SELECT u.tel_fixe, c.*, c.premiere_commande,c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.tarif_express,information_commande,reference_client,total_commande, penalty,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,commentaire, vt.traduction,c.id_verre,trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                   WHERE ".$date_add." ".$sql_add." ".$email_send."
                                   ORDER BY ".$order_by;
                                   */

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCommandeJournalierekacia($date="", $magasin = 1, $envoi_chine = 0){

        $sql_add = "AND c.id_verre IN (SELECT code FROM lenses)";
        $date_add = "date_commande <='".$date."'";
        $email_send = " AND email_send = 0";
        $order_by = "c.id_commande";

        if($magasin == 2){
            $sql_add = "AND c.id_verre NOT IN (SELECT code FROM lenses)";
            $order_by = "v.libelle_verre";
        }

        if($envoi_chine == 1){
            $date_add = "date_commande >='".$date." 00:00:00' AND date_commande <='".$date." 23:59:59'";
            $email_send = "";
        }

        $sql = "SELECT u.tel_fixe, c.*, c.premiere_commande,c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.tarif_express, c.is_express, information_commande,reference_client,total_commande, penalty,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,commentaire, vt.traduction,c.id_verre,trad_fr
                                   FROM ".$this->table." c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   LEFT JOIN verres v ON v.id_verre = c.id_verre
                                   LEFT JOIN lenses l ON l.code = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   LEFT JOIN ".$this->table_commentaire." cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                   WHERE ".$date_add." ".$sql_add." ".$email_send." AND (libelle_verre IS NOT NULL OR generation = 'Progressif de stock')
                                   ORDER BY ".$order_by;
//        var_dump($sql);die;
        $query = $this->db->query($sql);


        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCommandeRetard($type = 0){

        /*  $query = $this->db->query('SELECT c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.id_generation_verre, c.id_indice_verre, information_commande,reference_client,total_commande, penalty,libelle_etat_commande,generation_verre,type_generation_verre,libelle_verre,prix_verre,vt.traduction,c.id_verre,trad_fr
                                     FROM '.$this->table.' c
                                     INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                     INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                     LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                     LEFT JOIN verres v ON v.id_verre = c.id_verre
                                     LEFT JOIN lenses l ON l.code = (c.id_verre AND l.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
                                     LEFT JOIN verres_traduction vt ON vt.id_verre = c.id_verre
                                     LEFT JOIN commande_pointage cp ON c.id_commande = cp.id_commande
                                     WHERE (((((c.id_type_generation_verre <> 5 AND c.id_type_generation_verre <> 23 AND c.id_type_generation_verre <> 0) OR origine_commande=1)) AND c.id_etat_commande = 5 AND cp.date_pointage IS NULL)
                                     OR ((((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) AND c.id_type_generation_verre <> 0) OR origine_commande=2) AND date_commande < "'.date('Y-m-d 23:59:59', strtotime('yesterday')).'" AND date_commande > "'.date('Y-m-d 00:00:00', strtotime('first day of last month')).'" AND c.id_etat_commande != 6 AND cp.date_pointage IS NULL))
                                     ORDER BY c.id_commande');
                                     */
        $sql = 'SELECT c.id_commande,c.id_users,c.id_type_generation_verre,date_commande,c.id_etat_commande, c.id_generation_verre, c.id_indice_verre, information_commande,reference_client,total_commande, penalty,c.id_verre,trad_fr,l.name
                                   FROM commande c
                                   INNER JOIN lenses l ON (l.code = c.id_verre AND l.trad_fr LIKE (CONCAT("%", c.generation ,"%")))
                                   LEFT JOIN commande_pointage cp ON c.id_commande = cp.id_commande
                                   WHERE (origine_commande = 1 AND c.id_etat_commande = 5 AND cp.date_pointage IS NULL)
                                   OR (origine_commande=2 AND date_commande < "'.date('Y-m-d 23:59:59', strtotime('yesterday')).'" AND date_commande > "'.date('Y-m-d 00:00:00', strtotime('first day of last month')).'" AND c.id_etat_commande != 6 AND cp.date_pointage IS NULL)
                                   ORDER BY c.id_commande';
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getCaJournalier($tarif_Livraison = true) {

        $TarifLivraison = 0;
        $TabHoraireTarifLiv = array();

        //date_default_timezone_set('Asia/Jerusalem');

        if($tarif_Livraison){

            $sql = "SELECT tarif_livraison as TarifLivraison,id_users,date(date_update_commande)
                                     FROM ".$this->table."
                                     WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
                                     AND date_update_commande<='".date("Y-m-d 23:59:59")."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND ( DATE_FORMAT(date_commande, '%Y-%m')='".date('Y-m')."' AND ((date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                     GROUP BY date(date_update_commande),id_users,TarifLivraison";
            $query = $this->db->query($sql);

            if($query && $query->num_rows() > 0)
                foreach($query->result() as $value){
                    $TabHoraireTarifLiv[$value->id_users] = array();
                    array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
                    $TarifLivraison += $value->TarifLivraison;
                }

            $query2 = $this->db->query("SELECT tarif_livraison as TarifLivraison,id_users,date(date_update_commande)
                                      FROM ".$this->table."
                                      WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
                                      AND date_update_commande<='".date("Y-m-d 23:59:59")."'
                                      AND tarif_livraison > 0
                                      AND id_etat_commande = 6
                                      AND ((date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".date('Y-m')."') AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                      GROUP BY date(date_update_commande), id_users, TarifLivraison");

            if($query2 && $query2->num_rows() > 0)
                foreach($query2->result() as $value){
                    if(!isset($TabHoraireTarifLiv[$value->id_users]))
                        $TabHoraireTarifLiv[$value->id_users] = array();

                    array_push($TabHoraireTarifLiv[$value->id_users],$value->date_update_commande);
                    $TarifLivraison += $value->TarifLivraison;
                }

            $query = $this->db->query("SELECT COALESCE(TarifLivraison1,0) + COALESCE(TarifLivraison2,0) as TarifLivraison,id_users,date_update_commande
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
										FROM commande cc 
										WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
										AND date_update_commande<='".date("Y-m-d 23:59:59")."'
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY id_users, TarifLivraison1, idCommande
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
										  GROUP BY id_users, TarifLivraison2, idCommande2
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE date_update_commande>='".date("Y-m-d 00:00:00")."'
                                     AND date_update_commande<='".date("Y-m-d 23:59:59")."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime(date('Y-m').'-01 -1 month'))."'
                                     GROUP BY id_users, TarifLivraison, date_update_commande");

//            print_r($sql);


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

        $sql = "SELECT (SELECT IFNULL(SUM(total_commande),0) as ca_journalier FROM ".$this->table."
                                   WHERE date_commande>='".date("Y-m-d 00:00:00")."'
                                   AND date_commande<='".date("Y-m-d 23:59:59")."'
                                   AND (type_commande = 1 OR type_commande > 1 AND penalty = 1)
                                   AND is_confirmed = 1)
                                   +
                                   (SELECT IFNULL(SUM(tarif_express),0) as tarif_express FROM ".$this->table."
                                   WHERE date_commande>='".date("Y-m-d 00:00:00")."'
                                   AND date_commande<='".date("Y-m-d 23:59:59")."'
                                   AND type_commande > 1 AND penalty != 1
                                   AND is_confirmed = 1) 
                                   +
                                   (".$TarifLivraison.")
                                   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM facture_reduction fr
								   WHERE date_remise = '".date("Y-m-d")."') as ca_journalier";
//        print_r($sql);


        $query = $this->db->query($sql);


        if ($query && $query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }


    public function getCaByDayOfMonth($date){

        $TabHoraireTarifLiv = array();

        $tarif = 0;
        $query = $this->db->query("SELECT tarif_livraison as TarifLivraison, DATE_FORMAT(date_update_commande, '%e') AS day, id_users, date(date_update_commande)
                                   FROM ".$this->table."
                                   WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                   AND tarif_livraison > 0
                                   AND id_etat_commande = 6
                                   AND ( DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND ((date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00')))
                                   GROUP BY id_users,date(date_update_commande), TarifLivraison, day");

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


        $query = $this->db->query("SELECT tarif_livraison as TarifLivraison, DATE_FORMAT(date_update_commande, '%e') AS day, id_users, date(date_update_commande)
                                   FROM ".$this->table."
                                   WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                   AND tarif_livraison > 0
                                   AND id_etat_commande = 6
                                   AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%Y-%m')='".$date."' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                                   GROUP BY id_users,date(date_update_commande), TarifLivraison, day");

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

        $query = $this->db->query("SELECT COALESCE(SUM(TarifLivraison1),0) + COALESCE(SUM(TarifLivraison2),0) as TarifLivraison, DATE_FORMAT(date_update_commande, '%e') AS day, id_users, date(date_update_commande) as date_update_commande
                                     FROM ".$this->table." c
									 LEFT JOIN 
									  ( 
										SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
										FROM commande cc 
										WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
										AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
										AND tarif_livraison > 0 
										AND id_etat_commande = 6
										AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
										GROUP BY TarifLivraison1, idCommande
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
										  GROUP BY TarifLivraison2, idCommande2
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
                                     WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='".$date."'
                                     AND tarif_livraison > 0
                                     AND id_etat_commande = 6
                                     AND DATE_FORMAT(date_commande, '%Y-%m') = '".date('Y-m',strtotime($date.'-01 -1 month'))."'
                                     GROUP BY id_users,date(date_update_commande), day");

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

//        $sql = "SELECT SUM(tarif_express) AS total_ht, taux_tva, DATE_FORMAT(date_commande, '%e') AS day, date_commande
//            FROM commande
//            WHERE DATE_FORMAT(date_commande, '%Y-%m') = '".$date."'
//            AND type_commande > 1
//            GROUP BY day
//            ORDER BY day ASC";
////        print_r($sql);die;
//
//        $query = $this->db->query($sql);
//
//
//        if ($query && $query->num_rows() > 0){
//            foreach($query->result() as $value){
//                if(!isset($data[$value->day])){
//                    $data[$value->day] = array();
//                }
//                $data[$value->day]['total_ht'] = $value->total_ht;
//
//                if(isset($TarifLivraisonTab[$value->day])){
//                    $data[$value->day]['total_ht'] += $TarifLivraisonTab[$value->day];
//
//                    unset($TarifLivraisonTab[$value->day]);
//                }
//
//                $data[$value->day]['total_ttc']= round($data[$value->day]['total_ht'] * $value->taux_tva,2);
//            }
//
//            if(count($TarifLivraisonTab) > 0)
//                foreach($TarifLivraisonTab as $day => $tarif){
//                    $data[$day]['total_ht'] = $tarif;
//                    $data[$day]['total_ttc'] = round($data[$day]['total_ht'] * 1.2 ,2);
//                }
//        }

        $sql = "SELECT SUM(total_commande) - COALESCE(total_reductions, 0) AS total_ht,
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
                        AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
                        AND is_confirmed = 1
                        GROUP BY day
                        ORDER BY day ASC";
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0){
            foreach($query->result() as $value){

                if(!isset($data[$value->day])){
                    $data[$value->day] = array();
                }

                if(!isset($data[$value->day]['total_ht'])){
                    $data[$value->day]['total_ht'] = 0;
                }

                if(!isset($data[$value->day]['total_ttc'])){
                    $data[$value->day]['total_ttc'] = 0;
                }


                $data[$value->day]['total_ht'] += $value->total_ht;

                if(isset($TarifLivraisonTab[$value->day])){
                    $data[$value->day]['total_ht'] += $TarifLivraisonTab[$value->day];

                    unset($TarifLivraisonTab[$value->day]);
                }

                $data[$value->day]['total_ttc'] += round($data[$value->day]['total_ht'] * $value->taux_tva,2);
            }

            if(count($TarifLivraisonTab) > 0)
                foreach($TarifLivraisonTab as $day => $tarif){
                    $data[$day]['total_ht'] += $tarif;
                    $data[$day]['total_ttc'] += round($data[$day]['total_ht'] * 1.2 ,2);
                }
            return $data;
        }


        return false;
    }

    public function delete($data, $pair = false){

        if(false === $pair) {
            $table_commande = $this->table;
            $table_commentaire = $this->table_commentaire;
        }
        else {
            $table_commande = $this->table_temp;
            $table_commentaire = $this->table_commentaire_temp;
        }

        $query = $this->db->query('SELECT * FROM commande WHERE id_commande = "'.$data['id_commande'].'" AND commande_monture = 1 ');
        $montures = $query->result();
        if ($query && $query->num_rows() > 0){

            if($montures[0]->commande_monture == 1)
            {
                $todelete = json_decode($montures[0]->information_commande);
                foreach ($todelete as $monture_add_stock)
                {
                    if($monture_add_stock->id!=null)
                    {
                        $this->db->where('id', $monture_add_stock->id);
                        $this->db->set('stock', 'stock+'.$monture_add_stock->qty, FALSE);
                        $this->db->update('montures');
                    }
                    if($monture_add_stock->pack_id!=null)
                    {
                        $idpack = ','.$monture_add_stock->pack_id.',';
                        $query_p = $this->db->query('SELECT * FROM montures WHERE pack LIKE "%'.$idpack.'%" ');
                        $montures_p = $query_p->result();

                        foreach ($montures_p as $monture_p)
                        {
                            $this->db->where('id', $monture_p->id);
                            $this->db->set('stock', 'stock+'.$monture_add_stock->qty, FALSE);
                            $this->db->update('montures');
                        }

                    }
                }
            }
        }
        $this->db->where('id_commande', $data['id_commande']);
        $this->db->delete($table_commande);

        $this->db->where('id_commande', $data['id_commande']);
        $this->db->delete($table_commentaire);

        $this->db->where('id_commande', $data['id_commande']);
        $this->db->delete("etiquette");

        $this->db->where('id_commande', $data['id_commande']);
        $this->db->delete("commande_omega");
    }

    public function delete_edi($data, $pair = false){

        echo "ID COMMANDE:".$data['id_commande'];
        $res = $this->db->query("UPDATE commande set status_omega=2 WHERE id_commande = '".$data['id_commande']."'");
        $this->db->where('id_commande', $data['id_commande']);
        $this->db->delete('commande_omega');

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

                if($query->row()->id_type_generation_verre == 5 || $query->row()->id_type_generation_verre == 23)
                    $return = 2;

                if($query->row()->id_type_generation_verre <> 5 && $query->row()->id_type_generation_verre <> 23)
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

    public function ajouter_etiquetteNEW($data){

        if(isset($data['delete']) && $data['delete'] == 1)
        {

            if(isset($data['id_commande']))
                $this->db->query("DELETE FROM etiquette WHERE id_commande=".$data['id_commande']);

        }
        else{
            $query = $this->db->query("SELECT MAX(ordre) as max FROM etiquette WHERE date_click='".date("Y-m-d")."'");
            $ordre = 1;

            if ($query && $query->num_rows() > 0){
                $row = $query->row();
                $ordre = $row->max + 1;
            }

            if(isset($data['cote']) && $data['cote']=='d')
                $this->db->query("INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (".$data['id_commande'].", 'droit',".$ordre.",'".date("Y-m-d")."')");

            if(isset($data['cote']) && $data['cote']=='g')
                $this->db->query("INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (".$data['id_commande'].", 'gauche',".$ordre.",'".date("Y-m-d")."')");

            if(isset($data['cote']) && $data['cote']=='dg')
            {
                $this->db->query("INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (".$data['id_commande'].", 'droit',".$ordre.",'".date("Y-m-d")."')");

                $query = $this->db->query("SELECT MAX(ordre) as max FROM etiquette WHERE date_click='".date("Y-m-d")."'");
                $ordre = 1;

                if ($query && $query->num_rows() > 0){
                    $row = $query->row();
                    $ordre = $row->max + 1;
                }
                $this->db->query("INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (".$data['id_commande'].", 'gauche',".$ordre.",'".date("Y-m-d")."')");
            }

        }

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



    public function getCommandesExpediees() {
        return $this->db->get('expedition');
    }

    public function getEtiquette(){
        $query = $this->db->query("SELECT c.id_commande,id_users,information_commande,reference_client,libelle_verre,cote,date_commande
                               FROM ".$this->table." c
                               INNER JOIN verres_stock v ON v.id_verre = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click ='".date('Y-m-d')."'
                               AND id_etat_commande < 6 AND
                               (c.id_verre NOT IN (SELECT code FROM lenses) OR c.id_verre = '42174')
                               ORDER BY order_verre");

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function getEtiquetteSend($listId){
        $query = $this->db->query("SELECT c.id_commande,id_users,information_commande,reference_client,libelle_verre,cote,date_commande,trad_fr,c.id_type_generation_verre, c.generation
                               FROM ".$this->table." c
                               LEFT JOIN verres_stock v ON v.id_verre = c.id_verre
                               LEFT JOIN lenses l ON l.code = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE c.id_commande IN (".$listId.")
                               ORDER BY order_verre,ordre");

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function getEtiquetteFabrication(){
        $sql = "SELECT c.id_commande, c.id_indice_verre, c.origine_commande, id_users,information_commande,information_certificat,reference_client,libelle_verre,cote,date_commande,c.id_indice_verre,c.id_generation_verre, trad_fr,c.id_type_generation_verre, c.generation
                               FROM ".$this->table." c
                               LEFT JOIN verres v ON v.id_verre = c.id_verre
                               LEFT JOIN lenses l ON (l.code = c.id_verre AND l.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               AND c.id_verre IN (SELECT code FROM lenses)
                               ORDER BY date_click, ordre ";
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function getEtiquetteFabricationNew($from = 0, $to = 0){
        $query = $this->db->query("SELECT c.id_commande, c.id_indice_verre, c.origine_commande, id_users,information_commande,information_certificat,reference_client,libelle_verre,cote,date_commande,c.id_indice_verre,c.id_generation_verre, trad_fr,c.id_type_generation_verre, c.generation
                               FROM ".$this->table." c
                               LEFT JOIN verres v ON v.id_verre = c.id_verre
                               LEFT JOIN lenses l ON (l.code = c.id_verre AND l.trad_fr LIKE (CONCAT('%', c.generation ,'%')))
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               AND c.id_verre IN (SELECT code FROM lenses)
                               AND l.display = 'X'
                               ORDER BY date_click, ordre LIMIT ".$from.",".$to);

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }


    public function getCertificat(){
        $query = $this->db->query("SELECT c.id_commande,id_users,information_commande,information_certificat,reference_client,libelle_verre,cote,date_commande,c.id_indice_verre,c.id_generation_verre,trad_fr,c.id_type_generation_verre, c.generation
                               FROM ".$this->table." c
                               LEFT JOIN verres v ON v.id_verre = c.id_verre
                               LEFT JOIN lenses l ON l.code = c.id_verre
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND c.information_certificat != ''
                               AND id_etat_commande < 6
                               AND c.id_verre IN (SELECT code FROM lenses)
                               GROUP BY c.id_commande
                               ORDER BY date_click, ordre DESC");

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function getCertificatStock($id_commande){
        $query = $this->db->query("SELECT c.id_commande,id_users,information_commande,information_certificat,reference_client,libelle_verre,date_commande,c.id_indice_verre,c.id_generation_verre,trad_fr,c.id_type_generation_verre, c.generation
                               FROM commande c
                               LEFT JOIN verres v ON v.id_verre = c.id_verre
                               LEFT JOIN lenses l ON l.code = c.id_verre
                               WHERE  c.id_commande = '".$id_commande."' AND c.information_certificat != ''
                               AND id_etat_commande < 6
                               AND  (c.id_generation_verre = 23 OR c.panierA != 0)
                               GROUP BY c.id_commande
                               ORDER BY date_commande DESC");
        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function getUpdateCommande($type_commande = 1){
        /*if($type_commande == 1) {
            $sql = 'AND (((((c.id_type_generation_verre <> 5 AND c.id_type_generation_verre <> 23 AND c.id_type_generation_verre <> 0) OR origine_commande=1)) OR c.id_indice_verre = 6 OR c.id_generation_verre = 16 OR c.id_generation_verre = 19) OR (c.id_generation_verre = 9 AND c.id_indice_verre = 7))';
        }
        else {
            $sql = 'AND (((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) AND c.id_type_generation_verre <> 0) OR origine_commande=2) AND c.id_generation_verre <> 16 AND c.id_generation_verre <> 19 AND c.id_indice_verre != 6 AND c.id_indice_verre != 7';
        }

        $query = $this->db->query("SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM ".$this->table." c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               ".$sql."
                               GROUP BY c.id_commande
                               ORDER BY ordre");
        */
        if($type_commande == 1) {
            $sqlAdd = 'AND (((((c.id_type_generation_verre <> 5 AND c.id_type_generation_verre <> 23 AND c.id_type_generation_verre <> 0) OR origine_commande=1)) OR (l.id IS NOT NULL AND origine_commande <> 1)) )';
            $sql = "SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM ".$this->table." c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               LEFT JOIN lenses l ON l.code = c.id_verre
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               ".$sqlAdd."
                               GROUP BY c.id_commande
                               ORDER BY ordre";
        }
        else {
            $sqlAdd = 'AND ( (((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) AND c.id_type_generation_verre <> 0) OR origine_commande=2) AND l.id IS NULL)';
            $sql = "SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM ".$this->table." c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               LEFT JOIN lenses l ON l.code = c.id_verre
                               WHERE date_click <= '".date('Y-m-d')."'
                               AND id_etat_commande < 6
                               ".$sqlAdd."
                               GROUP BY c.id_commande
                               ORDER BY ordre";
        }
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }


    public function getPointageCount() {
        $query = $this->db->query('SELECT COUNT(1) AS total FROM commande c INNER JOIN commande_pointage cp ON c.id_commande = cp.id_commande WHERE c.id_etat_commande < 6');

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
            $result = $query->result();
            $data = array();
            foreach($result as $value)
                $data[$value->id_commande][$value->cote] = 1;

            return $data;
        }

        return false;
    }

    public function getCommandeStockJournalier(){
        $query = $this->db->query("SELECT information_commande,libelle_verre, count(id_commande) as nb_commande, trad_fr,c.id_type_generation_verre
                               FROM ".$this->table." c
                               LEFT JOIN verres v ON v.id_verre = c.id_verre
                               LEFT JOIN lenses l ON l.code = c.id_verre
                               INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                               LEFT JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                               WHERE (((c.id_type_generation_verre = 5 OR c.id_type_generation_verre = 23) AND c.id_type_generation_verre <> 0) OR origine_commande=2)
                               AND c.date_commande >='".date("2015-05-01 00:00:00")."'
                               AND date_commande<='".date("2015-05-01 23:59:59")."'
                               GROUP BY libelle_verre,information_commande");

        if ($query && $query->num_rows() > 0){
            return $query->result();
        }

        return false;
    }

    public function nouvelle_date_bl($data){
        $this->db->query("INSERT INTO intitule_bl (id_user,id_commande,date_bl,intitule_bl) VALUES (".$data['id_users'].", '".$data['id_commande']."', '".$data['date_bl']."','".$data['intitule_bl']."') ON DUPLICATE KEY UPDATE date_bl='".$data['date_bl']."', intitule_bl='".$data['intitule_bl']."'");
    }

    public function checkIntituleBl($intitule_bl, $new_id){

        $query = $this->db->query("SELECT COUNT(*) as IntituleBL
                               FROM intitule_bl
                               WHERE intitule_bl like '".$intitule_bl.$new_id."%'");

        $query2 = $this->db->query("SELECT COUNT(*) as IntituleBL
								FROM ".$this->table." c
								WHERE intitule_bl like '".$intitule_bl.$new_id."%'");

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

    public function getAllCommandeByLastSixMonthAndUser($user_id){

        $sql_add = "c.id_users <> 2";
        if($user_id != ""){
            $sql_add = "c.id_users = ".$user_id;
        }

        $now = date('Y-m');
        for ($i = 5; $i >= 0; $i--) {
            $date = date('m', strtotime($now. ' - ' . $i . ' months'));
            $factures[$date] = 0;
        }
        $date = date('Y-m', strtotime($now. ' - 5 months')); // On ajoute 1 jour
        $sql = "SELECT SUM(total_commande) as total, DATE_FORMAT(date_commande, '%m') as date_c
                FROM commande c
                WHERE DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
                AND id_users = $user_id
                GROUP BY date_c
                ORDER BY date_c";
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0){
            $result = $query->result();
            foreach ($result as $total) {
                $factures[$total->date_c] += $total->total;
            }
        }

        $sql = "SELECT
                SUM(reduction) AS total_reductions,
                id_users as idusers,
                DATE_FORMAT(date_remise, '%m') as date_c
                FROM
                facture_reduction
                WHERE DATE_FORMAT(date_remise, '%Y-%m') >= '".$date."'
                AND id_users = $user_id
                GROUP BY date_c
                ORDER BY date_c";
//        print_r($sql);die;
        $query = $this->db->query($sql);
        if ($query && $query->num_rows() > 0){
            $result = $query->result();
            foreach ($result as $total_reductions) {
                $factures[$total_reductions->date_c] -= $total_reductions->total_reductions;
            }
        }

//        print_r($factures);die;
//        $sql = "SELECT
//                SUM(total_commande) as total_montures,DATE_FORMAT(date_commande, '%m') as date_c
//                FROM commande c
//                WHERE  id_verre IS NULL
//                AND commande_monture = 1
//                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//                AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                AND id_users = $user_id
//                GROUP BY date_c
//                ORDER BY date_c";
//        $query = $this->db->query($sql);
//        if ($query && $query->num_rows() > 0){
//            $result = $query->result();
//            foreach ($result as $total_montures) {
//                $factures[$total_montures->date_c] += $total_montures->total_montures;
//            }
//        }
//
//        $sql = "SELECT
//                SUM(total_commande) as total_lentilles,DATE_FORMAT(date_commande, '%m') as date_c
//                FROM commande c
//                WHERE lens_id IS NULL
//                AND commande_monture = 1
//                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//                AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                AND id_users = $user_id
//                GROUP BY date_c
//                ORDER BY date_c";
//        $query = $this->db->query($sql);
//        if ($query && $query->num_rows() > 0){
//            $result = $query->result();
//            foreach ($result as $total_montures) {
//                $factures[$total_montures->date_c] += $total_montures->total_montures;
//            }
//        }
//        $sql = "SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) + COALESCE(total_lentilles, 0) + COALESCE(total_montures, 0) + COALESCE(total_express, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique,total_lentilles,total_montures, c.id_users, DATE_FORMAT(c.date_commande, '%c') as mois, nom_societe, nom_magasin
//                                   FROM commande c
//                                   LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
//                                   INNER JOIN users u ON u.id_users = c.id_users
//                                   LEFT JOIN
//                                    (SELECT
//                                        SUM(reduction) AS total_reductions,
//                                        id_users as idusers,
//                                        date_remise
//                                    FROM
//                                        facture_reduction
//                                    WHERE DATE_FORMAT(date_remise, '%Y-%m') >= '".$date."'
//                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
//                                   ON (
//                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
//                                   )
//                                   LEFT JOIN
//                                  (SELECT
//                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
//                                    FROM commande c
//                                    WHERE (id_type_generation_verre = 5 OR id_type_generation_verre = 23 OR origine_commande=2)
//                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//                                    AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                                    AND commande_monture = 0
//            						AND id_verre IS NOT NULL
//                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
//                                  ON (
//                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
//                                  )
//                                  LEFT JOIN
//                                  (SELECT
//                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
//                                    FROM commande c
//                                    WHERE ( origine_commande=1)
//                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//                                    AND commande_monture = 0
//            						AND id_verre IS NOT NULL
//                                    AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
//                                  ON (
//                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
//                                  )
//                                   LEFT JOIN
//                                  (SELECT
//                                    SUM(total_commande) as total_lentilles,id_users as iduserslentilles,date_commande
//                                    FROM commande c
//                                     WHERE lens_id > 0
//                                    AND id_verre IS NULL
//                                    AND commande_monture = 0
//                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//                                    AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                                    GROUP BY iduserslentilles,DATE_FORMAT(date_commande, '%m-%Y')) as commande_lentilles
//                                  ON (
//                                      c.id_users = iduserslentilles AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_lentilles.date_commande, '%Y-%m')
//                                  )
//								  LEFT JOIN
//                                  (SELECT
//                                    SUM(total_commande) as total_montures,id_users as idusersmontures,date_commande
//                                    FROM commande c
//                                     WHERE  id_verre IS NULL
//									AND commande_monture = 1
//                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
//                                    AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                                    GROUP BY idusersmontures,DATE_FORMAT(date_commande, '%m-%Y')) as commande_montures
//                                  ON (
//                                      c.id_users = idusersmontures AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_montures.date_commande, '%Y-%m')
//                                  )
//                                   LEFT JOIN
//                                  (SELECT
//                                    SUM(tarif_express) as total_express,id_users as idusersexpress,date_commande
//                                    FROM commande c
//                                    WHERE type_commande > 1 AND penalty != 1
//                                    AND DATE_FORMAT(date_commande, '%Y-%m') >= '".$date."'
//                                    GROUP BY idusersexpress,DATE_FORMAT(date_commande, '%m-%Y')) as commande_express
//                                  ON (
//                                      c.id_users = idusersexpress AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_express.date_commande, '%Y-%m')
//                                  )
//                                  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') >= '".$date."'
//                                  AND ".$sql_add."
//                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
//                                  ORDER BY c.id_users, length(mois), mois";
//        $query = $this->db->query($sql);
//        if ($query && $query->num_rows() > 0){
//            return $query->result();
//        }
        return $factures;
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

        $sql = "SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) + COALESCE(total_lentilles, 0) + COALESCE(total_montures, 0) + COALESCE(total_express, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique,total_lentilles,total_montures, c.id_users, DATE_FORMAT(c.date_commande, '%c') as mois, nom_societe, nom_magasin
                                   FROM commande c
                                   LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
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
                                    WHERE (id_type_generation_verre = 5 OR id_type_generation_verre = 23 OR origine_commande=2)
                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    AND commande_monture = 0
            						AND id_verre IS NOT NULL
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE ( origine_commande=1)
                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
                                    AND commande_monture = 0
            						AND id_verre IS NOT NULL
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_lentilles,id_users as iduserslentilles,date_commande
                                    FROM commande c
                                     WHERE lens_id > 0
                                    AND id_verre IS NULL
                                    AND commande_monture = 0
                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    GROUP BY iduserslentilles,DATE_FORMAT(date_commande, '%m-%Y')) as commande_lentilles
                                  ON (
                                      c.id_users = iduserslentilles AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_lentilles.date_commande, '%Y-%m')
                                  )
								  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_montures,id_users as idusersmontures,date_commande
                                    FROM commande c
                                     WHERE  id_verre IS NULL
									AND commande_monture = 1
                                    AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1))
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    GROUP BY idusersmontures,DATE_FORMAT(date_commande, '%m-%Y')) as commande_montures
                                  ON (
                                      c.id_users = idusersmontures AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_montures.date_commande, '%Y-%m')
                                  )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(tarif_express) as total_express,id_users as idusersexpress,date_commande
                                    FROM commande c
                                    WHERE type_commande > 1 AND penalty != 1
                                    AND DATE_FORMAT(date_commande, '%Y') = '".$data['annee']."'
                                    GROUP BY idusersexpress,DATE_FORMAT(date_commande, '%m-%Y')) as commande_express
                                  ON (
                                      c.id_users = idusersexpress AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_express.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '".$data['annee']."'
                                  AND ".$sql_add."
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users";
        $query = $this->db->query($sql);
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

    public function getTarifPackaging($id_users, $userTarifPackaging) {
        $year = date('Y');
        $month = date('m');
        $sql = "SELECT * FROM commande
                WHERE YEAR(date_commande)=$year AND MONTH(date_commande)=$month
                AND id_users = $id_users";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return 0;
        }
        else {
            return $userTarifPackaging;
        }
    }

    public function change_174_With_167($commande) {
        $informationCommande = json_decode($commande->information_commande);
        if (isset($informationCommande->verre->correction_droit)) {
            $correctionDroit = $informationCommande->verre->correction_droit;
        }
        if (isset($informationCommande->verre->correction_gauche)) {
            $correctionGauche = $informationCommande->verre->correction_gauche;
        }

        $lensName = str_replace('1.74', '1.67', $commande->lensname);
        $sql = "SELECT * FROM lenses WHERE name = '$lensName'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $lens = $query->result()[0];
            $verifyVerreDroit = isset($correctionDroit) ? $this->m_passer_commande_verre->getDiametres($lens->code,$correctionDroit->sphere,$correctionDroit->cylindre) : true;
            $verifyVerreGauche = isset($correctionGauche) ? $this->m_passer_commande_verre->getDiametres($lens->code,$correctionGauche->sphere,$correctionGauche->cylindre) : true;
            if ($verifyVerreDroit && $verifyVerreGauche) {
                $commande->lensname = $lensName;
                $commande->lenscode = $lens->code;
                $commande->indice_omega = '1.67';
            }
        }
        return $commande;
    }

    public function setExpress($commandeId, $isExpress, $isFacture) {
        $sql = 'SELECT * FROM `commande` WHERE id_commande = ' . $commandeId;
        $query = $this->db->query($sql);
        $commande = $query->result()[0];
        $oldTarifExpress = $commande->tarif_express;
        $tarifCommande = $commande->total_commande;
        if ($isExpress && $isFacture) {
            $tarifExpress = 25;
        }
        else {
            $tarifExpress = 0;
        }
        $sql = 'UPDATE `commande` SET `tarif_express` = ' . $tarifExpress . ', `is_express` = ' . $isExpress . ',
                    total_commande = ' . ($tarifCommande + $tarifExpress - $oldTarifExpress) . '
                    WHERE id_commande = ' . $commandeId;
        $this->db->query($sql);
    }

    /** La date est sous forme m-Y */
    public function getTotalCommandeWithAndWithoutTvaByuserAndDate($userId, $date = NULL){

        if (!$date) {
            $date = date('m-Y');
        }
        $sql = "SELECT sum(total_commande) - COALESCE(total_reductions, 0) + u.tarif_packaging as total,
                total_reductions,
                u.tarif_packaging,
                (sum(total_commande) - COALESCE(total_reductions, 0) + u.tarif_packaging) * u.percent_tva / 100 as TVA,
                (sum(total_commande) - COALESCE(total_reductions, 0) + u.tarif_packaging) * (1 + u.percent_tva / 100) as total_ttc
                FROM commande c LEFT JOIN 
                    (SELECT SUM(reduction) AS total_reductions,
                    date_remise FROM facture_reduction WHERE id_users = $userId 
                    AND DATE_FORMAT(date_remise, '%m-%Y') = '$date') AS reductions ON ( DATE_FORMAT(date_commande, '%m-%Y') = DATE_FORMAT(date_remise, '%m-%Y') ) 
                LEFT JOIN users as u ON u.id_users = c.id_users WHERE c.id_users = $userId AND DATE_FORMAT(date_commande, '%m-%Y') = '$date' 
                                                                AND is_confirmed = 1 
                                                                AND (type_commande = 1 OR (type_commande > 1 AND penalty = 1)) 
                ORDER BY date_commande DESC";
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            return $query->result();

        return false;
    }

    public function getTotalTvaByUser($userId) {

    }

    /** La date est sous forme m-Y */
    public function getDifferenceTvaByUsersWithPercentTvaDifferentWithTwenty($date = NULL) {
        if (!$date) {
            $date = date('m-Y');
        }
        $sql = "SELECT id_users FROM `users` WHERE percent_tva <> 20";
        $query = $this->db->query($sql);

        if ($query && $query->num_rows() > 0)
            $userIds = $query->result();
        else
            return 0;
        $total = 0;
//        print_r($userIds);die;
        foreach ($userIds as $userId) {
            if ($totalCommande = $this->getTotalCommandeWithAndWithoutTvaByuserAndDate($userId->id_users, $date)[0]) {
                $total += $totalCommande->total * 1.2 - $totalCommande->total_ttc;
            }
        }
        return $total;
    }
}
