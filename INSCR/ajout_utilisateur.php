<?php

include ('bdd_connect.php');

$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$identifiant = $_POST['ulogin'];
$passwd = $_POST['psw1'];

/* $sql = ("INSERT INTO `utilisateur`(`nom`, `prenom`, `mail`, `ulogin`, `motdepasse`) VALUES ('".$_POST['nom']."','".$_POST['prenom']."', '".$_POST['email']."', '".$_POST['ulogin']."','".$_POST['psw1']."')"); */
$sql = ("INSERT INTO `utilisateur` VALUES ('".$nom."', '".$prenom."', '".$mail."', '".$identifiant."', '".$passwd."')");
$stmt= $conn->prepare($sql);
$stmt->execute([$nom, $prenom, $mail, $identifiant, $passwd]);

if($stmt){
    echo "ok";
}else{
    echo "PAS ok";
}

?>