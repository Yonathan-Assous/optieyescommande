<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_lens extends CI_Model
{

    var $table = 'lens';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @param null
     * @return mixed
     */
    public function getGenerations() {

        $query = $this->db->query('SELECT * FROM '.$this->table.'_generation ORDER BY id ASC');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }

    /**
     * @param null
     * @return mixed
     */
    public function getBrands() {

        $query = $this->db->query('SELECT * FROM '.$this->table.'_brand ORDER BY id ASC');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }


    /**
     * @param $generation, $progressive, $toric
     * @return mixed
     */
    public function getAvailableBrands($generation, $progressive, $toric) {

        $generation = (int) $generation;
        $progressive = (int) $progressive;
        $toric = (int) $toric;

        $query = $this->db->query('SELECT l.brand_id, b.name, b.id AS id FROM '.$this->table.' l INNER JOIN '.$this->table.'_brand b ON l.brand_id = b.id WHERE progressive = '.$progressive.' AND toric = '.$toric.' AND generation_id = '.$generation.' GROUP BY b.id ORDER BY b.id ASC');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }

    /**
     * @param $args
     * @return mixed
     */
    public function getLenses($args) {

        $defaults = array(
            'generation_id' => null,
            'brand_id' => null,
            'progressive' => null,
            'toric' => null,
            'grid_id' => 1
        );

        $params = array_merge($defaults, $args);

        $this->db->from($this->table.' AS l');
        $this->db->select('l.*, p.price, p.grid_id, b.name as brand_name', false);

        foreach($params as $k => $v) {

            if(null !== $v) {
                $this->db->where($k, $v);
            }

        }


        $this->db->join($this->table.'_price AS p', 'l.id = p.lens_id');
        $this->db->join($this->table.'_brand AS b', 'l.brand_id = b.id');

        $this->db->order_by('id', 'asc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;

    }

    public function getLensPrices($generation_id, $grid = 0) {

        if($grid > 0) {
            $this->db->where('grid_id', $grid);
        }

        $this->db->where('generation_id', $generation_id);
        $this->db->join($this->table, $this->table.'.id = '.$this->table.'_price.lens_id');
        $this->db->order_by('id', 'asc');

        $query = $this->db->get($this->table.'_price');

        if ($query->num_rows() > 0) {
            return $query->result();
        }

        return false;
    }


    /**
     * @param $lens_id
     * @return mixed
     */
    public function getLens($lens_id = false) {

        if(false !== $lens_id) {

            $this->db->select('l.*, p.price, p.grid_id, b.name as brand_name', false);
            $this->db->from($this->table.' AS l');
            $this->db->where('l.id', $lens_id);
            $this->db->join($this->table.'_price AS p', 'l.id = p.lens_id');
            $this->db->join($this->table.'_brand AS b', 'l.brand_id = b.id');
            $this->db->where('grid_id', 1);
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                return $query->result()[0];
            }

            return false;

        }

        return false;


    }


    /**
     * @param $lens_id
     * @return mixed
     */
    public function getLensConfigurator($lens_id) {

        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $lens_id);
        $this->db->join($this->table.'_build', $this->table.'_build.lens_id = '.$this->table.'.id');
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
    public function addLensOrder($args, $byAdmin = 0) {

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

        if(!empty($commentaire)){
            $params['is_confirmed'] = 0;
        }
        if($this->db->insert('commande', $params)) {

            if(!empty($commentaire)){
                $data = array('id_commande' => $this->db->insert_id(), 'commentaire' => $commentaire);
                $this->db->insert('commande_commentaire', $data);
            }

            $CI->m_commande->setNbDayOrder();

            return true;

        }


        return false;

    }

    public function getOrders($status, $checked = false) {

        $this->db->select('c.*, cc.id_commande as cid, cc.commentaire, lens.*, lens_check.*');
        $this->db->from('commande c');
        $this->db->join('lens', 'lens.id = c.lens_id');
        $this->db->where('is_confirmed', 1);

        switch($status) {

            case 0:

                $this->db->where('id_etat_commande <', 6);

                if($checked) {
                    $this->db->join('lens_check', 'c.id_commande = lens_check.order_id');
                    $this->db->order_by('check_date', 'asc');
                }
                else {
                    $this->db->join('lens_check', 'c.id_commande = lens_check.order_id', 'left');
                    $this->db->order_by('id_commande', 'desc');
                }

                break;

            case 1:

                $this->db->where('id_etat_commande', 6);
                break;

        }

        $this->db->join('commande_commentaire cc', 'cc.id_commande = c.id_commande', 'left');
        $this->db->where('lens_id >', 0);
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

        $query = $this->db->query("SELECT c.id_users,c.id_commande,date_commande,reference_client,date_update_commande,type_commande,nom_magasin,nom_societe,commentaire,c.intitule_bl
                                    FROM commande c
                                    INNER JOIN users u ON c.id_users = u.id_users 
                                    LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                    WHERE c.id_etat_commande = 6
                                    AND lens_id != 0
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

        $query = $this->db->query('SELECT COUNT(id_commande) as total FROM commande WHERE id_verre IS NULL and lens_id > 0 AND ('.$add.')');

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
        $this->db->join('lens', 'lens.id = commande.lens_id');

        switch($status) {
            case 1:
                $this->db->where('id_etat_commande <', 6);
                break;


        }


        $this->db->where('id_users', $user_id);
        $this->db->where('lens_id >', 0);
        $this->db->where('id_verre', null);

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

        $this->db->select('commande.*, lens.*, lens_brand.name as brand_name, users.*');
        $this->db->from('commande');
        $this->db->join('lens', 'lens.id = commande.lens_id');
        $this->db->join('lens_brand', 'lens_brand.id = lens.brand_id');
        $this->db->join('users', 'users.id_users = commande.id_users');
        $this->db->where('commande.lens_id >', 0);
        $this->db->where('id_verre', null);
        $this->db->where('date_commande <', $date);
        $this->db->where('email_send', 0);

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return  $query->result();

        return false;

    }

    public function getOrderById($id) {

        $this->db->select('c.*, l.*, cc.id_commande AS cid, cc.commentaire, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique');
        $this->db->from('commande c');
        $this->db->join('lens l', 'l.id = c.lens_id');
        $this->db->join('commande_commentaire cc', 'cc.id_commande = c.id_commande', 'left');
        $this->db->join('intitule_bl ib', 'ib.id_commande = c.id_commande', 'left');
        $this->db->where('c.lens_id >', 0);
        $this->db->where('c.id_commande', $id);
        $this->db->where('c.id_verre', null);
        $this->db->order_by('c.id_commande', 'desc');

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return  $query->result();

        return false;

    }

    public function getLensIncomesByDay($date = null) {

        if($date === null) {
            $date = date('Y-m-d H:i:s', mktime(0,0,0));
            $date_end = date('Y-m-d H:i:s', mktime(23,59,59));
        }
        else {
            $date_end = date('Y-m-d 23:59:59', strtotime($date));
        }

        $this->db->select('SUM(total_commande) AS total_commande');
        $this->db->from('commande');
        $this->db->where('lens_id >', 0);
        $this->db->where('date_commande >', $date);
        $this->db->where('date_commande <', $date_end);
        $this->db->where('is_confirmed =', 1);

        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return $query->row();

        return 0;

    }

    public function getLensIncomesByMonth($date = null) {

        if($date === null) {
            $date = date('Y-m');
        }


        $this->db->select('SUM(total_commande) AS total_commande');
        $this->db->from('commande');
        $this->db->where('lens_id >', 0);
        $this->db->where('DATE_FORMAT(date_commande, "%Y-%m") =', $date);
        $this->db->where('is_confirmed =', 1);


        $query = $this->db->get();

        if ($query && $query->num_rows() > 0)
            return $query->row();

        return 0;

    }


    public function setOrderCheck($order, $check) {

        if(false !== $this->getOrderById($order)) {

            switch($check) {

                case 'false':

                    if($this->db->delete(
                        'lens_check', array('order_id' => $order)
                    )) {
                        return true;
                    }

                    break;

                case 'true':

                    if($this->db->insert(
                        'lens_check',
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