<?php 
// On génère une cst qui contiendra le chemin complet vers index.php

define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME'])); //SUPERGLOBAL: contient les infos de la page où je suis
//die(ROOT);

//On sépare les paramètre
$params=explode('/', $_GET['p']);


if($params[0]!= ""){//Est-ce que le paramètre existe?
    $controller= ucfirst($params[0]); //récupère le nom du controlleur, ici Client

    $action= isset($params[1]) ? $params[1]: 'index'; //si le deuxième param n'existe pas, param pas défaut, on va chercher la méthode index
    
    require_once(ROOT.'controllers/'.$controller.'.php'); //récupère le bon fichier de notre controlleur, chemin complet 
    
    
    if(method_exists($controller,$action)){
        $controller= new $controller(); //$client= new $client();
        $controller->$action(); //$client->index(); appeler la methode index
    }else{ //si méthode existe pas
        http_response_code(404);
        echo "Le page demandée n'existe pas";
    }

}else{

}
?>