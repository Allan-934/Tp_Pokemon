<?php
session_start();
require_once 'bd.inc.php';
require_once 'controller/AuthController.php';
require_once 'controller/PokemonController.php';

// CORRECTION : On appelle la fonction pour obtenir la connexion réelle
$pdo = connexionPDO(); 

$action = $_GET['action'] ?? 'home';
$auth = new AuthController($pdo); // On transmet la connexion PDO au contrôleur
$poke = new PokemonController();

switch($action) {
    case 'register': $auth->register(); break;
    case 'login':    $auth->login(); break;
    case 'logout':   $auth->logout(); break;
    case 'list':     $poke->showAllPokemon(); break; 
    case 'detail':   $poke->showOnePokemon($_GET['id'] ?? null); break; 
    default:         require 'vue/vueHome.php'; break;
}