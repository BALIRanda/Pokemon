<?php
require 'bdd/connexionBdd.php';
require 'index.php';

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
var_dump($_POST);
?>

<div align=center>
    <form action="" method="post">
        <p><label for="numero">Numéro du pokemon : <input type="text" name="number"></label></p>
        <p><label for="nom">Nom du pokemon : <input type="text" name="nom"></label></p>
        <p><label for="image"> Image :<input type="text" name="photos"></label></p>
        <p><label for="type">Type :<input type="text" name="type"></label></p>
        <p><label for="version">Version : <input type="select" name="version"></label></p>
        <input type="submit" name="envoyer">
    </form>
    <?php if(isset($message)){
        echo $message;
    } ?>
</div>


<form action="" method="POST">
    <div align="center" class="container col-lg-8">
        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="nom">Nom du pokémon :</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez le nom du pokémon" name="nom">
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="numero">Numéro du pokémon :</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez le numéro du pokémon" name="number">
                <small id="emailHelp" class="form-text text-muted">Ne communiquez votre adresse e-mail à personne.</small>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group col-md-6">
                <label for="image">Photos du pokémon :</label>
                <input type="file" class="form-control" name="photos">
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
                    <option value="Bleu"></option>
                    <option value="Rouge"></option>
                </select>
            </div>    
        </div>

                <button type="submit" class="btn btn-primary" name="envoyer" >S'inscrire</button>
    </div><br>
</form>