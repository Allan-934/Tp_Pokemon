<?php
class PokemonModel {
    private $jsonPath = 'data/pokemons.json';

    // Retourne tous les Pokémon du JSON [cite: 27]
    public function getAllPokemons() {
        $json = file_get_contents($this->jsonPath);
        return json_decode($json, true);
    }

    // Retourne un Pokémon spécifique selon son ID [cite: 28]
    public function getPokemonById($id) {
        $pokemons = $this->getAllPokemons();
        foreach ($pokemons as $pokemon) {
            if ($pokemon['id'] == $id) {
                return $pokemon;
            }
        }
        return null;
    }
}