
<!-- INSERTION DANS UNE BDD EN PDO -->
<?php
    //Ouvreture d'une connexion à la bdd
    //$objectPdo = new PDO('mysql:host=localhost;dbname=cinemet','root','');
    include ('bdd_connect.php');


    //Préparation de la requête d'insertion (SQL)
    //$pdoStat = $objectPdo->prepare('INSERT INTO films VALUES (NULL, :titre, :categorie, :duree, :infos, :avis, :liphoto, :cat_csa, :id_genre, :id_real)');

    $pdoStat = $conn->prepare('INSERT INTO films VALUES (:titre, :categorie, :duree, :infos, :avis, :liphoto, :cat_csa, :id_genre, :id_real)');


    //on lie chaque marqueur par une valeur
    
    $pdoStat->bindValue(':titre', $_POST['lohateny'], PDO::PARAM_STR);
    $pdoStat->bindValue(':categorie', $_POST['katego'], PDO::PARAM_STR);
    $pdoStat->bindValue(':duree', $_POST['fdure'], PDO::PARAM_STR);
    $pdoStat->bindValue(':infos', $_POST['unfaux'], PDO::PARAM_STR);
    $pdoStat->bindValue(':avis', $_POST['note'], PDO::PARAM_STR);
    $pdoStat->bindValue(':cat_csa', $_POST['kat_csa'], PDO::PARAM_STR);
    $pdoStat->bindValue(':id_genre', $_POST['zanra'], PDO::PARAM_STR);
    $pdoStat->bindValue(':id_real', $_POST['realy'], PDO::PARAM_STR);
    
    //Exécution de la requête préparée
    $insertIsOk = $pdoStat->execute();

    if($insertIsOk){
        $message = 'Nouveau film ajouté dans la bdd';
    }else{
        $message = 'Echec !';
    }



?>
<!DOCTYPE html>
<html>
    <head>
        <title>TEST PDO</title>
        <meta charset="utf-8">
</head>
<body>
    <h1>Insertion film</h1>
    <?php echo $message;?>
   <!--<form action="" method="POST">
        <label for="lohateny">Titre: </label><input type="text" name="lohateny"><br>
        Catégorie:<input type="text" name="katego"><br>
        Durée:<input type="text" name="fdure"><br>
        Infos:<input type="text" name="unfaux"><br>
        Avis:<input type="text" name="note"><br>
        Catégorie CSA:<input type="text" name="kat_csa"><br>
        Genre:<input type="text" name="zanra"><br>
        Réalisateur:<input type="text" name="realy"><br>

        <input type="submit" name="Envoyer" value="Envoyer">
    </form>-->
</body>
<html>
    
