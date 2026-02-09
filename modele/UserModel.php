<?php

class UserModel {
    private $pdo;

    // Le constructeur reçoit la connexion à la base de données "pokedex" [cite: 13]
    public function __construct($db) {
        $this->pdo = $db;
    }

    // Inscription : hachage du mot de passe et insertion [cite: 17]
    public function register($username, $password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        return $stmt->execute([$username, $hash]);
    }

    // Connexion : vérification du mot de passe et retour des infos utilisateur 
    public function login($username, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // Vérifie si l'utilisateur existe et si le mot de passe est correct 
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}