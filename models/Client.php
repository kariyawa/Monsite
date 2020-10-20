<?php
class Client extends Model{
    public function __construct(){
        $this->table="client";
        $this->getConnection();
    }
}
?>