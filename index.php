<?php 

define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME'])); //SUPERGLOBAL: contient les infos de la page où je suis

//appel du modèle et routeur principaux
require_once(ROOT.'Model.php');
require_once(ROOT.'Controller.php');

$params=explode('/', $_GET['p']);
//CREER UNE ARRAYLIST QUI CONTIENDRA TOUS MES CONTROLLEURS
if(isset($params[0])){
    $controller=$params[0];
    $action= isset($params[1]) ? $params[1]: 'index';
    require_once(ROOT.'controllers/'.$controller.'.php');
    
    if(method_exists($controller,$action)){
        $controller= new $controller(); //$client= new $client();
        $controller->$action(); //$client->index(); appeler la methode index
    }else{
        http_response_code(404);
    }

}else{
    http_response_code(404);
}
?>