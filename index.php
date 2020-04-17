	<?php
	require 'nav.php';
        require 'bdd/connexionBdd.php';
	?>	
        <div class="container">
        <div class='row d-flex'>
        <?php $pokemons = $mysqli->query('SELECT * FROM Pokemon WHERE Version = "rouge"');
          foreach ($pokemons as $pokemon):;?>

        <div class="card" style="margin:30px">
          <img src="<?php echo $pokemon['Image'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $pokemon['Nom'] ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Numero : <?php echo $pokemon['NumeroPokemon'] ?></li>
            <li class="list-group-item">Type : <?php echo $pokemon['Type'] ?></li>
            <li class="list-group-item">Version : <?php echo $pokemon['Version'] ?></li>
          </ul>
        </div>

        <?php endforeach; ?>
        </div>
        </div>
                <div>
                    <div class="degradee margin-top-sm">
                        <h1>Pokémon exclusifs à la Version Bleu</h1>
                    </div>
              <div class="container">
        <div class='row d-flex'>
        <?php $pokemons = $mysqli->query('SELECT * FROM Pokemon WHERE Version = "bleue"');
          foreach ($pokemons as $pokemon):;?>

        <div class="card" style="margin:30px">
          <img src="<?php echo $pokemon['Image'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $pokemon['Nom'] ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Numero : <?php echo $pokemon['NumeroPokemon'] ?></li>
            <li class="list-group-item">Type : <?php echo $pokemon['Type'] ?></li>
            <li class="list-group-item">Version : <?php echo $pokemon['Version'] ?></li>
          </ul>
        </div>

        <?php endforeach; ?>
        </div>
        </div>
  </body>
</html>	
