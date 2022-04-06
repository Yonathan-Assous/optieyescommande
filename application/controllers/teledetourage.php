<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teledetourage extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        var_dump('Hello World!');
    }

    public function insertPrice() {
        $this->m_teledetourage->insertPrice();
    }

    public function testTracerEdiEyes() {
        $this->load->view('test_teledetourage');
    }

    public function getFormatPrice() {
        $data = $this->input->post();
        echo $this->m_teledetourage->getTeledetourageFormatPrice($data['user_id'], $data['formatTeledetourage']);
    }
}