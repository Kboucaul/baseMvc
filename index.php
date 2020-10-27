<?php

require_once('_config/config.php');
require_once('_config/db.php');
require_once('_functions/functions.php');

/*
**  On définie notre page courante
*/
//On verifie si on a une variable page
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = trim(strtolower(htmlspecialchars($_GET['page'])));
}
else
    $page = 'home';

// On liste toutes nos pages
$allPages = scandir('controllers');
//On verifie si la page demandée existe
if (in_array($page."_controller.php", $allPages))
{
    // On inclus le fichier correspondant a la page demandée
    require_once 'models/'.$page.'_model.php';
    require_once 'controllers/'.$page.'_controller.php';
    require_once 'views/'.$page.'_view.php';
}
else
{
    echo "Erreur 404";
    //On renvoie une erreur 
}
?>
