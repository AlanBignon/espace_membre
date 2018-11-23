<?php

function redirection () {
    header('Location: http://localhost/espace_menbre_login.php');
    die;
}

function recupcsv($nomfichier) {
    $tabcsv = array();     // On cree un tableau
    $recupfichier = fopen($nomfichier , "r"); // Ouverture d'un fichier
    if ($recupfichier) {
        // On test la fin du fichier
        while (!feof($recupfichier)) {
            $valeur = fgetcsv($recupfichier , 0 , ';' , '"' ); // Recuperation des donnees du csv
            if ( empty($valeur)) continue; // Donnee vide
            //CONTINUE: structure de controle
            $key=$valeur[3];
            $tabcsv[$key]=$valeur; // On met les valeur dans le tableau
        }
        fclose($recupfichier);   // On ferme le fichier
    } else {
        echo ("erreur de lecture du fichier $nomfichier"); // On lance une exception(fichier incorrecte)
    }
    return $tabcsv; // On conserve notre tableau

}