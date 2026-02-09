<?php
require_once 'modele/UserModel.php';

class AuthController {
    private $model;

    public function __construct($db) { 
        $this->model = new UserModel($db); 
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Inscription : formulaire avec username et password
            $this->model->register($_POST['username'], $_POST['password']);
            header('Location: index.php?action=login');
            exit();
        }
        require 'views/register.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Connexion : vérifier le mot de passe et créer une session
            $user = $this->model->login($_POST['username'], $_POST['password']); 
            if ($user) {
                $_SESSION['username'] = $user['username'];
                header('Location: index.php');
                exit();
            }
        }
        require 'views/login.php';
    }

    public function logout() {
        // Déconnexion : détruire la session
        session_destroy(); 
        header('Location: index.php');
        exit();
    }
}