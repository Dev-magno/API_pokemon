<?php
require_once '_cabecalho.php';
?>

<header>Meus Pokémons</header>
<main>
    <div class="cards">
        <?php foreach ($pokemons as $pokemon): ?>
            <div class="card">
                <h2><?= htmlspecialchars(ucfirst($pokemon['name'])) ?></h2>
                <img src="<?= htmlspecialchars($pokemon['sprites']['front_default']) ?>" alt="<?= htmlspecialchars($pokemon['name']) ?>">
                <p><strong>Height:</strong> <?= htmlspecialchars($pokemon['height']) ?> dm</p>
                <p><strong>Weight:</strong> <?= htmlspecialchars($pokemon['weight']) ?> hg</p>
                <p><strong>Type:</strong> <?= htmlspecialchars(ucfirst($pokemon['types'][0]['type']['name'])) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
require_once '_rodape.php';
?>