<?php

//REMPLACER PAR AUTOLOADING

class Client extends Model{
    public function __construct(){
        $this->table="client";
        $this->getConnection(); //connection à la table client
    }
}
?>