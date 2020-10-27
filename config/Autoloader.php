<!--composer: importer une librairie, permet en une ligne de code comme dump de symphony.
définir ou vont être nos classes pas besoin de les appeler, un simple use suffira, gestion de dépendances-->

<!-- REMPLACER PAR AUTOLOADING
namespace c'est comme une arborescence des fichiers. Y'a conflit entre les deux classes autoloaders diff,
lequel choisir? NAMESPACE -->

<?php 

namespace App\config;

class Autoloader{
    public static function register(){
        spl_autoload_register([__CLASS__, 'autoload']); //enregistre tt les classes de mon projet
    }

    public static function autoload($class){
        $class= str_replace('App', '', $class); //on met toutes les classes ds app
        $class=str_replace('\\', '/', $class);

        require '../'.$class.'.php'; //remplace tous les requires
    }
}

?>