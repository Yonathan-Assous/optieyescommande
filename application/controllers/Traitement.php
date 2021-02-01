<?php

class Traitement extends MY_Controller
{
    public function index()
    {
        var_dump('Hello World!');
    }

    public function setTraitementsInDatabase() {
//        var_dump('die');die;
        $this->m_traitements->insertPrixTraitement();
    }
}