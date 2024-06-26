<?php

// Code d'initialisation à inclure en début de contrôleur


// paramétrer l'afichage des erreurs
ini_set("display_errors", 1);       // Aficher les erreurs
error_reporting(E_ALL);             // Toutes les erreurs

include "utils/model%20version%20g%C3%A9rant%20la%20BDD.php"; 
// ouvrir la base de données dans la variable globale $bdd
global $bdd;
$bdd = _model2::bdd();
// Pour debugger, on peut ajouter une propriété
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


// Charger les librairies diverses
include_once "utils/model.php";
// Charger les objets du mdèle de données
include_once "modeles/contact.php";
include_once "modeles/appartement.php";