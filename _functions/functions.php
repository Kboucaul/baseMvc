<?php

/**
 * Permet de sécuriser une chaine d ecarcateres
 *
 * @param string $str
 * 
 * @return string
 */
function str_secur(string $str) {
    return trim(htmlspecialchars($str));
}
/**
 * Permet un affichage lisible d'une variable
 *
 * @param $var
 * @return void
 */
function debug($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

?>