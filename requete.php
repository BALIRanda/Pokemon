<?php
require 'bdd/connexionBdd.php';
require 'nav.php';

if(isset($_POST['nom'], $_POST['number'], $_POST['photos'], $_POST['type'], $_POST['version'])){
    if(!empty($_POST['nom']) AND!empty($_POST['nom']) AND !empty($_POST['photos']) AND !empty($_POST['type']) AND !empty($_POST['version']) AND !empty($_POST['nom'])){
        $numero=htmlspecialchars($_POST['number']);
        $photos=htmlspecialchars($_POST['photos']);
        $type=htmlspecialchars($_POST['type']);
        $version=htmlspecialchars($_POST['version']);
        $nom=htmlspecialchars($_POST['nom']);

        $req=$mysqli->query("INSERT INTO Pokemon(NumeroPokemon,Image,Type,Version,Nom) VALUES('$numero','$photos','$type','$version','$nom')");

        if($req){
         $message='Le formulaire a bien été envoyé';
        }else{
         $message='Le formulaire n\'a pas été envoyé'; 
        }

        

    }else{
        $message='Veuillez remplir tous les champs';
    }
}
?>

<form action="" method="POST">
    <div style="background:white; padding-bottom:20px; padding-top:20px; border-radius: 20px;" align="center" class="container col-lg-6">
        <div class="form-group">
            <div class="form-group col-md-6">
            <h1 style="color:#566573; font-size:30px">Inscrivez votre Pokémon</h1>
                <label for="nom">Nom du pokémon :</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez le nom du pokémon" name="nom">
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="numero">Numéro du pokémon :</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez le numéro du pokémon" name="number">
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="image">Photos du pokémon :</label>
                <input type="text" class="form-control" placeholder="Saisissez l'url de la photo" name="photos">
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="type">Type de pokémon :</label>
                <input type="text" class="form-control" placeholder="Saisissez le type de pokémon" name="type">
            </div>    
        </div>

        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="version">Version du pokémon :</label>
                <select name="version" id="">
                    <option value="Bleu">Bleu</option>
                    <option value="Rouge">Rouge</option>
                </select>
            </div>    
        </div>

                <button type="submit" class="btn btn-primary" name="envoyer" >Envoyer</button>
    </div><br>
</form>