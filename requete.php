<?php 
if(isset($_POST['number'], $_POST['photos'], $_POST['type'], $_POST['version'])){
    if(!empty($_POST['number']) AND !empty($_POST['photos']) AND !empty($_POST['type']) AND !empty($_POST['version'])){
        $numero=htmlspecialchars($_POST['number']);
        $photos=htmlspecialchars($_POST['photos']);
        $type=htmlspecialchars($_POST['type']);
        $version=htmlspecialchars($_POST['version']);

        $req=$mysqli->query("INSERT INTO Pokemon(NumeroPokemon,Image,Type,Version) VALUES('$numero','$photos','$type','$version')");
        $message='Le formulaire a bien été envoyé';

    }else{
        $message='Veuillez remplir tous les champs';
    }
}

?>

<div align=center>
    <form action="" method="post" enctype="multipart/form-data">
        <p><label for="numero">Numéro du pokemon : <input type="text" name="number"></label></p>
        <p><label for="image"> Image :<input type="text" name="photos"></label></p>
        <p><label for="type">Type :<input type="text" name="type"></label></p>
        <p><label for="version">Version : <input type="select" name="version"></label></p>
        <input type="submit" name="envoyer">
    </form>
    <?php if(isset($message)){
        echo $message;
    } ?>
</div>