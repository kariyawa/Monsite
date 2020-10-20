<!-- Model principal qui va être utilisé par héritage par les autres modèles de l'application-->
<?php

abstract class Model{
    //info DB
    /*private $host="localhost";
    private $db_name="avenoel";
    private $username= "root";
    private $password="";*/
    
    //Propriété contenant la connexion
    protected $_connexion;

    //Propriétés contenant les informations de requêtes
    public $table;
    //public $id;
    
    public function getConnection(){
        $this->_connexion=null;

        try{
            $this->_connexion= new PDO('mysql:host=localhost;dbname=avenoel;charset=utf8','root','');
        }catch(Exception $e){
            echo 'Erreur: '. $e->getMessage();
        }
    }

    public function getAll(){
        $sql="SELECT * FROM". $this->table;
        $query= $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
}
    
?>