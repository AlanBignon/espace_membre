<?php

function redirection () {
    header('Location: http://localhost/espace_menbre_login.php');
    die;
}
function recupcsv ($nomfichier) {
    $array = array();
    $recupfichier = fopen($nomfichier, "r");
    if($recupfichier) {
        while (!feof($recupfichier)) {
            $valeur = fgetcsv($recupfichier, 0 , ',' , '"' );
            $array [] = $valeur;
        }
        fclose($recupfichier);
    }
    return $array ;
}