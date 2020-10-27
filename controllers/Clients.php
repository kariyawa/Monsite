<?php

// REMPLACER PAR AUTOLOADING
class Clients extends Controller{
    public function index(){
        $this->loadModel("Client");
        $clients=$this->Client->getAll();
        //var_dump($clients);

        //appel view client
        $this->render('index', ['clients' => $clients]); //tableau

    }
}

?>