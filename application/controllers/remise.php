<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class remise extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        var_dump('Hello World!');
    }

    public function checkOtherRemise() {
        $userId = $_POST['user_id'];
        $remise = $_POST['remise'];
        $montantFrom = $_POST['montant'];
        $sinceDate = $_POST['since_date'];
        $untilDate = $_POST['until_date'];
        $total = $this->m_remise->checkOtherRemise($userId, $remise, $montantFrom, $sinceDate, $untilDate);
        echo json_encode(array('status' => 'ok', 'total_remise' => $total));
    }

    public function addRemise() {
        $userId = $_POST['user_id'];
        $remise = $_POST['remise'];
        $montantFrom = $_POST['montant'];
        $sinceDate = $_POST['since_date'];
        $untilDate = $_POST['until_date'];
        $typeRemise = $_POST['type_remise'];
        $this->m_remise->addRemise($userId, $remise, $montantFrom, $sinceDate, $untilDate, $typeRemise);
        echo json_encode(array('status' => 'ok'));
    }

    public function getRemises() {
        $userId = $_POST['user_id'];
        $tab = $this->m_remise->getRemises($userId);
        echo json_encode($tab);
    }

    public function desactiveRemise() {
        $data = $this->input->post();
        $result = $this->m_remise->desactiveRemise(
            $data['remise_id']
        );
        echo $result;
    }
}