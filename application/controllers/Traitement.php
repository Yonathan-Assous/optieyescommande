<?php

class Traitement extends MY_Controller
{
    public function index()
    {
        var_dump('Hello World!');
    }

    public function setTraitementsInDatabase() {
//        var_dump('die');die;
        $this->m_traitement->insertPrixTraitement();
    }

    public function getCustomPriceList()
    {
        $data =
            $this->input->post();

        $tab =
            $this->m_traitement->getCustomPriceList($data['user_id']);
        var_dump($tab);die;
        echo json_encode($tab);
    }

    public function setPriceTraitement() {
        $data =
            $this->input->post();

        $result =
            $this->m_traitement->setPriceTraitement(
                $data['new_price'],
                $data['code_verre'],
                $data['name_verre'],
                $data['traitement_id'],
                $data['user_id']
            );

        echo $result;
    }
}