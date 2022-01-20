<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_montures extends CI_Model
{

    var $table = 'montures';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @param null
     * @return mixed
     */
    public function getCollection() {

        $query = $this->db->query('SELECT * FROM '.$this->table.'_collection ORDER BY id ASC');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }
	
	public function getPacks() {

        $query = $this->db->query('SELECT * FROM '.$this->table.'_pack ORDER BY id ASC');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }

	public function getAllMonturesDuPack($id_pack){

      // $query = $this->db->query('SELECT * FROM '.$this->table.' WHERE pack LIKE "%,'.$id_pack.',%" ORDER BY id ASC');
		
		$idpack = ','.$id_pack.',';
		
		$this->db->from($this->table);
        $this->db->select('*');
		$this->db->like('pack', $idpack);
		
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }
    /**
     * @param $args
     * @return mixed
     */
    public function get_Montures($id_collection) {

        $this->db->from($this->table);
        $this->db->select('*');
		$this->db->where('id_collection', $id_collection);

        $this->db->order_by('id', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }
	
	public function check_stock($id_monture) {
		
		$d = date("Y/m/d H:i:s", strtotime("-30 minutes"));
        $this->db->from('commande_montures_temp');
        $this->db->select('SUM(qty) as stock_temp');
		$this->db->where('id_monture', $id_monture);
		$this->db->where('status', 0);
		$this->db->where('date >', $d);
        $this->db->group_by("id_monture");
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result()[0];
        }

        return false;

    }
	
	public function getMonture($id_monture)
	{
		$this->db->from($this->table);
        $this->db->select('*');
		$this->db->where('id', $id_monture);

        $this->db->order_by('id', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result()[0];
        }

        return false;

	}
	
	public function getPackName($id_pack)
	{
		$this->db->from('montures_pack');
        $this->db->select('*');
		$this->db->where('id', $id_pack);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result()[0];
        }
	}
	
	public function clearPackMonture($id_pack)
	{
		$this->db->query('UPDATE montures SET pack = REPLACE(pack,",'.$id_pack.',","") WHERE 1');
	}
	
	public function getCollectionName($id_collection)
	{
		$this->db->from('montures_collection');
        $this->db->select('*');
		$this->db->where('id', $id_collection);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
            return $query->result()[0];
        }
	}
	
	public function del_collection($id_collection)
	{
		 $this->db->query('DELETE FROM montures_collection WHERE id = "'.$id_collection.'" ');
		$this->db->query('DELETE FROM montures WHERE id_collection = "'.$id_collection.'" ');
	}
	
	public function del_pack($id_pack)
	{
		 $this->db->query('DELETE FROM montures_pack WHERE id = "'.$id_pack.'" ');
		
	}
	
	public function del_monture($id_monture)
	{
		 $this->db->query('DELETE FROM montures WHERE id = "'.$id_monture.'" ');
	}
	
	public function get_Collection() {

        $defaults = array(
            'id' => null
        );

       // $params = array_merge($defaults, $args);

        $this->db->from('montures_collection AS c');
        $this->db->select('*');

       /* foreach($params as $k => $v) {

            if(null !== $v) {
                $this->db->where($k, $v);
            }

        }*/

        $this->db->order_by('id', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }
	
	public function getAllMontures() {

        $defaults = array(
            'id' => null
        );

        $this->db->from('montures AS c');
        $this->db->select('*');

        $this->db->order_by('modele', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }
	
	public function get_Pack() {

        $defaults = array(
            'id' => null
        );

       // $params = array_merge($defaults, $args);

        $this->db->from('montures_pack AS c');
        $this->db->select('*');

       /* foreach($params as $k => $v) {

            if(null !== $v) {
                $this->db->where($k, $v);
            }

        }*/

        $this->db->order_by('id', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }

    public function getMonturesPrices($generation_id, $grid = 0) {

        if($grid > 0) {
            $this->db->where('grid_id', $grid);
        }

        $this->db->where('generation_id', $generation_id);
        $this->db->join($this->table, $this->table.'.id = '.$this->table.'_price.montures_id');
        $this->db->order_by('id', 'asc');

        $query = $this->db->get($this->table.'_price');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }


    /**
     * @param $montures_id
     * @return mixed
     */
    public function getMontures($montures_id = false) {

        /*if(false !== $montures_id) {

            $this->db->select('l.*, p.price, p.grid_id, b.name as brand_name', false);
            $this->db->from($this->table.' AS l');
            $this->db->where('l.id', $montures_id);
            $this->db->join($this->table.'_price AS p', 'l.id = p.montures_id');
            $this->db->join($this->table.'_brand AS b', 'l.brand_id = b.id');
            $this->db->where('grid_id', 1);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                return $query->result()[0];
            }

            return false;

        }

        return false;
*/

    }


    /**
     * @param $montures_id
     * @return mixed
     */
    public function getMonturesConfigurator($montures_id) {

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $montures_id);
        $this->db->join($this->table.'_build', $this->table.'_build.montures_id = '.$this->table.'.id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }

    /**
     * @param $args
     * @return mixed
     */
    public function addMonturesOrder($args, $byAdmin = 0) {

        $CI =& get_instance();
        $CI->load->model('m_commande');

        $defaults = array(
            'ancienne_commande' => 0,
            'date_commande' => date('Y-m-d H:i:s'),
            'date_update_commande' => date('Y-m-d H:i:s'),
            'id_generation_verre' => null,
            'id_type_generation_verre' => null,
            'id_verre' => null,
            'id_indice_verre' => null,
            'id_miroir' => null,
            'information_certificat' => '',
            'prix_verre' => null,
            'tarif_supplement' => 0,
            'tarif_packaging' => 0,
            'id_etat_commande' => 1,
            'taux_tva' => 1.196,
            'by_admin' => $byAdmin
        );

        $params = array_merge($defaults, $args);


        $numero = (int) $CI->m_commande->getNbDayOrder() + 1;

        if($numero < 10) {
            $numero = '00' . $numero;
        }
        elseif($numero < 100) {
            $numero = '0' . $numero;
        }

        $params['intitule_bl'] = (int) date('ymd').$numero;

        $commentaire = $params['commentaire'];

        unset($params['commentaire']);


        if($this->db->insert('commande', $params)) {

            if(!empty($commentaire)){
                $data = array('id_commande' => $this->db->insert_id(), 'commentaire' => $commentaire);
                $this->db->insert('commande_commentaire', $data);
            }
            
            $this->db->where('id', 1);
			$this->db->set('flag', 1, FALSE);
			$this->db->update('flag_monture');

            $CI->m_commande->setNbDayOrder();

            return true;

        }


        return false;

    }

    public function getOrders($status, $checked = false) {

        $this->db->select('c.*, cc.id_commande as cid, cc.commentaire, montures_check.*');
        $this->db->from('commande c');
        $this->db->where('commande_monture', 1);

        switch($status) {

            case 0:

                $this->db->where('id_etat_commande <', 6);

                if($checked) {
                    $this->db->join('montures_check', 'c.id_commande = montures_check.order_id');
                    $this->db->order_by('check_date', 'asc');
                }
                else {
                    $this->db->join('montures_check', 'c.id_commande = montures_check.order_id', 'left');
                    $this->db->order_by('id_commande', 'desc');
                }

                break;

            case 1:

                $this->db->where('id_etat_commande', 6);
                break;

        }

        $this->db->join('commande_commentaire cc', 'cc.id_commande = c.id_commande', 'left');
        $this->db->where('id_verre', null);

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0) {
            return $query->result();
        }

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
            $sWhere = " AND ";

            if($id_users !== false) {
                $addField .= "c.id_users = " . $id_users;
            }

            if($addField == ""){
                $addField .= "(c.reference_client like '%".$this->db->escape_str( $search )."%' ||
                c.date_commande like '%".$this->db->escape_str( $search )."%' ||
                c.id_commande like '%".$this->db->escape_str( $search )."%' ||
                c.intitule_bl like '%".$this->db->escape_str( $search )."%' ||
                c.reference_client like '%".$this->db->escape_str( $search )."%'
                )";
            }

            $sWhere .= $addField;
        }

        $query = $this->db->query("SELECT c.id_users,c.id_commande,date_commande,reference_client,date_update_commande,type_commande,nom_magasin,nom_societe,commentaire
                                    FROM commande c
                                    INNER JOIN users u ON c.id_users = u.id_users 
                                    LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                    WHERE c.id_etat_commande = 6
                                    AND commande_monture != 0
                                    AND id_verre IS NULL
                                    ".$sWhere."
                                    ORDER BY date_update_commande DESC ".$limit);


        if ($query && $query->num_rows() > 0){

            $data = array();
            $data['results'] = $query->result();

            $query2 = $this->db->query("SELECT COUNT(id_commande) as nb_commande FROM commande c INNER JOIN users u ON c.id_users = u.id_users WHERE c.id_etat_commande = 6 ".$sWhere);

            if($query2 && $query2->num_rows() > 0){
                $result = $query2->row();
                $data['total_num_rows'] = $result->nb_commande;

                return $data;
            }
        }

        return false;
    }


    function countAllOrders($id_users = null, $search = null) {

        $add = '1 = 1 ';

        if($id_users) {

            $add .= 'AND id_users = '.$id_users;

            if($search) {

                $add .= " AND (reference_client like '%".$this->db->escape_str( $search )."%' ||
                date_commande like '%".$this->db->escape_str( $search )."%' ||
                id_commande like '%".$this->db->escape_str( $search )."%' ||
                reference_client like '%".$this->db->escape_str( $search )."%')
                ";
            }

        } else {

            $add .= " AND reference_client like '%".$this->db->escape_str( $search )."%' ||
                date_commande like '%".$this->db->escape_str( $search )."%' ||
                id_commande like '%".$this->db->escape_str( $search )."%' ||
                reference_client like '%".$this->db->escape_str( $search )."%'
                ";

        }

        $query = $this->db->query('SELECT COUNT(id_commande) as total FROM commande WHERE id_verre IS NULL AND commande_monture = 1 AND ('.$add.')');

        if ($query && $query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }

    }


    public function getUserOrders($status, $user_id) {

        $this->db->select('*');
        $this->db->from('commande');

        switch($status) {
            case 1:
                $this->db->where('id_etat_commande <', 6);				
                break;

        }

		$this->db->where('commande_monture', 1);
        $this->db->where('id_users', $user_id);
        $this->db->where('id_verre', null);
		$this->db->order_by('date_commande', 'desc');

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }

    public function getDailyOrders($date = null) {

        if(null === $date) {
            $date = date('Y-m-d H:i:s');
        }

        $this->db->select('commande.*, users.*');
        $this->db->from('commande');
        $this->db->join('users', 'users.id_users = commande.id_users');
        $this->db->where('commande_monture ', 1);
        $this->db->where('id_verre', null);
        $this->db->where('date_commande <', $date);
        $this->db->where('email_send', 0);

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return  $query->result();

        return false;

    }

    public function getOrderById($id) {

    /*    $this->db->select('c.*, cc.id_commande AS cid, cc.commentaire, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique');
        $this->db->from('commande c');
        //$this->db->join('montures l', 'l.id = c.montures_id');
        $this->db->join('commande_commentaire cc', 'cc.id_commande = c.id_commande', 'left');
        $this->db->join('intitule_bl ib', 'ib.id_commande = c.id_commande', 'left');
       // $this->db->where('c.montures_id >', 0);
        $this->db->where('c.id_commande', $id);
        $this->db->where('c.id_verre IS NULL');
        $this->db->order_by('c.id_commande', 'desc');*/
        
         // $query = $this->db->get();
        
        $query = $this->db->query("SELECT c.*, cc.id_commande AS cid, cc.commentaire, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
FROM commande c
LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
LEFT JOIN intitule_bl ib ON ib.id_commande = c.id_commande
WHERE c.id_commande = ".$id."  AND c.id_verre IS NULL ORDER BY c.id_commande DESC");

		
        if ($query && $query->num_rows() > 0)
            return $query->result();
		else
        	return false;


    }

    public function getMonturesIncomesByDay($date = null) {

        if($date === null) {
            $date = date('Y-m-d H:i:s', mktime(0,0,0));
            $date_end = date('Y-m-d H:i:s', mktime(23,59,59));
        }
        else {
            $date_end = date('Y-m-d 23:59:59', strtotime($date));
        }

        $this->db->select('SUM(total_commande) AS total_commande');
        $this->db->from('commande');
        $this->db->where('commande_monture', 1);
        $this->db->where('date_commande >', $date);
        $this->db->where('date_commande <', $date_end);
        $this->db->where('is_confirmed =', 1);

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return $query->row();

        return 0;

    }

    public function getMonturesIncomesByMonth($date = null) {

        if($date === null) {
            $date = date('Y-m');
        }


      /*  $this->db->select('SUM(total_commande) AS total_commande');
        $this->db->from('commande');
        $this->db->where('commande_monture', "1");
        $this->db->where('DATE_FORMAT(date_commande, "%Y-%m") =', $date);


        $query = $this->db->get();*/
        
        $query = $this->db->query("SELECT SUM(total_commande) AS total_commande
                               FROM commande
                               WHERE DATE_FORMAT(date_commande, '%Y-%m') = '".$date."' AND commande_monture='1' AND is_confirmed = 1");
                               
		
      /*  if ($query && $query->num_rows() > 0)
            return $query->row();
            */
        if ($query && $query->num_rows() > 0){
            return $query->result()[0];
        }

        return 0;

    }

    public function setOrderCheck($order, $check) {

        if(false !== $this->getOrderById($order)) {

            switch($check) {

                case 'false':

                    if($this->db->delete(
                        'montures_check', array('order_id' => $order)
                    )) {
                        return true;
                    }

                    break;

                case 'true':

                    if($this->db->insert(
                        'montures_check',
                        array(
                            'order_id' => $order,
                            'check_date' => date('Y-m-d H:i:s')
                        )
                    )) {
                        return true;
                    }

                    break;

            }

        }

        return false;

    }

}