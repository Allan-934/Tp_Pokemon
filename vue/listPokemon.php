<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Pokémon</title>
    <style>
        .pokemon-container { display: flex; flex-wrap: wrap; gap: 20px; }
        .pokemon-card { border: 1px solid #ccc; padding: 15px; border-radius: 8px; text-align: center; width: 150px; }
        .pokemon-card img { width: 100px; height: 100px; }
    </style>
</head>
<body>
    <h1>Pokédex</h1>
    
    <p><a href="index.php">🏠 Retour Accueil</a></p>
    <hr>

    <div class="pokemon-container">
        <?php foreach ($pokemons as $p): ?>
            <div class="pokemon-card">
                <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['nom']; ?>">
                <h3><?php echo $p['nom']; ?></h3>
                <p>Type : <?php echo $p['type']; ?></p>
                <a href="index.php?action=detail&id=<?php echo $p['id']; ?>">
                    <button>Voir détail</button>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>