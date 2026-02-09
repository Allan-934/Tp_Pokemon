<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Pokédex</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="index.php?action=register" method="POST">
        <div>
            <label for="username">Nom d'utilisateur :</label><br>
            <input type="text" id="username" name="username" required>
        </div>
        <br>
        <div>
            <label for="password">Mot de passe :</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        <br>
        <button type="submit">S'inscrire</button>
    </form>

    <br>
    <hr>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
</body>
</html>