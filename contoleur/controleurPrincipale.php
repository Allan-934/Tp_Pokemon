<?php

function controleurPrincipal($action) {
    $lesActions = array();
    
    $lesActions["connexion"] = "connexion.php"; 
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["inscription"] = "inscription.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>