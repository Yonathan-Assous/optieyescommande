<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teinte extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function setTeintesInDatabase() {
//        var_dump('die');die;
        $this->m_teinte->insertPrixTeinte();
    }

    public function getTeintePriceListTest() {
//        var_dump($this->input->post());die();

        $data =
            $this->input->post();
        $draw = intval($data["draw"]);
        $rowStart = intval($data["start"]);
        $rowLength = intval($data["length"]);
        $search = $data['search']['value'];

        $totalRow = $this->m_teinte->getCountTeintePriceList($data['user_id']);
        $tab =
            $this->m_teinte->getTeintePriceList($data['user_id'], $rowStart, $rowLength, $search);
//        var_dump($tab);
//        $x[] = [1,2,3,4,5,6];
//        $x[] = [2,5,3,6,5,0];
//        var_dump($x);die;
        $output = array(
            "draw" => $draw,
            "start" => $rowStart,
            "length" => $rowLength,
            "recordsTotal" => $totalRow,
            "recordsFiltered" => $totalRow,
            "data" => $tab
        );
        echo json_encode($output);
//        exit();

//        echo json_encode($columns);
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