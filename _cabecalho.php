<?php
// Função para obter dados de um Pokémon da PokeAPI
function getPokemonData($pokemonName) {
    // URL da PokeAPI para buscar informações de um Pokémon específico
    $url = "https://pokeapi.co/api/v2/pokemon/$pokemonName";

    // Faz a requisição usando file_get_contents
    $response = file_get_contents($url);

     // Verifica se houve erro na requisição
    if ($response === FALSE) {
        return null; // Retorna null se houve erro na requisição
    }

    // Decodifica a resposta JSON para um array associativo e retorna os dados do Pokémon
    return json_decode($response, true);
}

// Nomes dos Pokémons que quero buscar na PokeAPI
$pokemonNames = ['pikachu', 'bulbasaur', 'charmander', 'squirtle', 'mewtwo', 'rayquaza', 'arceus', "dragonite", 'tyranitar', 'metagross'];
$pokemons = [];

// Loop para buscar dados de cada Pokémon e armazená-los no array $pokemons
foreach ($pokemonNames as $name) {
    // Chama a função getPokemonData para obter os dados do Pokémon
    $pokemonData = getPokemonData($name);

    // Verifica se os dados do Pokémon foram obtidos com sucesso
    if ($pokemonData) {
        $pokemons[] = $pokemonData;   // Adiciona os dados do Pokémon ao array $pokemons
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">            
</head>
<body>
    <header>

    </header>
    <main>
