<?php
require_once 'modele/PokemonModel.php';

class PokemonController {
    private $model;

    public function __construct() {
        $this->model = new PokemonModel();
    }

    // Récupère tous les Pokémon et appelle la vue [cite: 33]
    public function showAllPokemon() {
        $pokemons = $this->model->getAllPokemons();
        require 'views/list_pokemon.php';
    }

    // Affiche le détail d'un Pokémon sélectionné [cite: 34]
    public function showOnePokemon($id) {
        $pokemon = $this->model->getPokemonById($id);
        if ($pokemon) {
            require 'views/detail_pokemon.php';
        } else {
            echo "Pokémon introuvable.";
        }
    }
}