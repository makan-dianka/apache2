<?php
// on affiche tout ce qui est passé 

// on récupère les variables globales pour ce script 
// echo "SCRIPT NAME : ".$_SERVER['SCRIPT_NAME'] ;
// echo "<br>";
// echo "SCRIPT FILENAME : ".$_SERVER['SCRIPT_FILENAME'] ; 
// echo "<br>";

// on definit des constantes pour appeller les scripts qqsoit le directory
define('WEBROOT' , str_replace('index.php' , '' , $_SERVER['SCRIPT_NAME']));
define('ROOT' , str_replace('index.php' , '' , $_SERVER['SCRIPT_FILENAME']));

// echo "ROOT CONST : ".ROOT ;
// echo "<br>";
// echo "WEB-ROOT CONST : ".WEBROOT ; 
// echo "<br>";
// echo "FINAL PATH : ".$mypath = ROOT.'core/controller.php' ;
// echo "<br>";
require(ROOT.'core/controller.php');



// on recupere tous les paramètres de l'url sépares 
$param = explode('/',$_GET['p']);

// URL index.php/tuto/index 
// on extrait chaque parametre 
// le premier element nous donne l'objet controleur a appeller 
$controller = $param[0] ; // tuto
// le deuxieme l'action a effectuer 
$method = $param[1] ; // index

$called = 'controllers/'.$controller.'.php' ;
require($called);


// on vérifie bien que la methode appellée existe dans la classe
if ( method_exists( $controller , $method )) {
    // on l'execute
    $myctrl = new $controller() ; // $myctrl = new Tuto(); 
    $myctrl->$method(); // $myctrl->index(); 
    // tuto->index()
}
else {
    echo "methode non existante, erreur 404";
}

?>