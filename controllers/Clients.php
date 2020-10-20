<?php

class Clients extends Controller{
    public function index(){
        $this->loadModel("Client");
        $kk=$this->Client->getAll();
        var_dump($kk);
        echo 'Bienvenue';
    }
}

?>