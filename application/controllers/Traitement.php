<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class traitement extends MY_Controller {

    public function index()
    {
        var_dump('Hello World!');
    }

    public function setTraitementsInDatabase() {
//        var_dump('die');die;
        $this->m_traitement->insertPrixTraitement();
    }

    public function getTraitementPriceList()
    {
        $data =
            $this->input->post();

        $tab =
            $this->m_traitement->getTraitementPriceList($data['user_id']);
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

    public function desactivePriceTraitement() {
        $data = $this->input->post();
        $result = $this->m_traitement->desactivePriceTraitement(
            $data['lens_code'],
            $data['traitement_id'],
            $data['user_id']
        );
        echo $result;
    }

}