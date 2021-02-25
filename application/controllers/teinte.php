<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teinte extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function setTeintesInDatabase() {
//        var_dump('die');die;
        $this->m_teinte->insertPrixTeinte();
    }

    public function getTeintePriceList()
    {
        $data =
            $this->input->post();

        $tab =
            $this->m_teinte->getTeintePriceList($data['user_id']);
        echo json_encode($tab);
    }

    public function setPriceTeinte() {
        $data =
            $this->input->post();

        $result =
            $this->m_teinte->setPriceTeinte(
                $data['new_price'],
                $data['lens_id'],
                $data['name_verre'],
                $data['teinte_id'],
                $data['user_id']
            );

        echo $result;
    }

    public function desactivePriceTeinte() {
        $data = $this->input->post();
        $result = $this->m_teinte->desactivePriceTeinte(
            $data['lens_id'],
            $data['teinte_id'],
            $data['user_id']
        );
        echo $result;
    }

    public function getAllTeintesWithPrice()
    {
        $data =
            $this->input->post();
        $tab =
            $this->m_teinte->getAllTeintesWithPrice($data['idLenses']);

        //var_dump($tab);

        echo json_encode($tab);
    }
}