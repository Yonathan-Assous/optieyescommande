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
}