<?php

include ('bdd_connect.php');

$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['email'];
$identifiant = $_POST['ulogin'];
$passwd = $_POST['psw1'];
$passwd_hash = PASSWORD_HASH($_POST['psw1'], PASSWORD_DEFAULT);



$sql = ("INSERT INTO `utilisateur` (`nom`, `prenom`, `mail`, `ulogin`, `motdepasse`, `motdepassec`) VALUES ('".$nom."', '".$prenom."', '".$mail."', '".$identifiant."', '".$passwd."', '".$passwd_hash."')");
$stmt= $conn->prepare($sql);

$stmt->execute([$nom, $prenom, $mail, $identifiant, $passwd, $passwd_hash]);

if($stmt){
    echo "Utilisateur ajouté !";
}else{
    echo "PAS ajouté!";
}

?>