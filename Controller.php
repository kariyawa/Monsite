<!-- Controller principal-->
<?php

abstract class Controller{

    //Charger un MODELE, loadModel(Client)
    public function loadModel(string $model){
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model=new $model();    
    }


    //appel du bon fichier html VIEW
    public function render(string $fichier, array $data=[]){
        extract($data);

        ob_start();
        require_once(ROOT.'views/'.(get_class($this)).'/'.$fichier.'.php');

        $content=ob_get_clean();
        require_once(ROOT.'views/layouts/default.php');
    }



}



?>