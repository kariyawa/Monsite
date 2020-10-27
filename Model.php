<!-- Model principal-->
<?php

abstract class Model{
    protected $_connexion;
    public $table;
    //public $id;
    
    public function getConnection(){
        $this->_connexion=null;

        try{
            $this->_connexion= new PDO('mysql:host=localhost;dbname=avenoel;charset=utf8','root','');
        }catch(PDOException $e){
            echo 'Erreur: '. $e->getMessage();
        }
    }

    public function getAll(){
        $sql="SELECT * FROM ". $this->table;
        $query= $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    /*public function getUnique(){
        $sql="SELECT * FROM ". $this->table ." WHERE id=" .$this->id;;
        $query= $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    } */
    
}
    
?>