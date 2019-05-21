<?php
    try {
      $bdd = new PDO('mysql:host=Localhost;dbname=vente','root','');
    } catch (PDOException $e){
        print "Erreur !: " . $e ->getMessage() . "<br>";
        die();
    }

    $nomr = $_POST['nomr'];
    $ville = $_POST['ville'];


    $sql = $bdd->prepare("INSERT INTO representants (nomr, ville) VALUES ( '$nomr', '$ville')");

    $sql ->execute();
    header('Location: requete.php');

  ?>
