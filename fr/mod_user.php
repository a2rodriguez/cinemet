<!DOCTYPE html>
<html>
<head>
    <title>Mise à jour utilisateur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="connexion.css">
    <link rel="stylesheet" href="style/form.css">
</head>
<body>
  <?php include('headera.php'); ?>
  <div class="titre">- UTILISATEUR MIS A JOUR-</h2></div>

  <div class="fonony">
  <?php

    include ('bdd_connect.php');
    $skl = "SELECT * FROM utilisateur WHERE iduser=".$_GET['mdfu'];
    foreach ($conn->query($skl) as $rows) {
        echo "ID : ".$rows['iduser']."<br>";
        echo "Login : ".$rows['ulogin']."<br>";
        $safidy = $rows['motdepasse'];
        echo "Password : ".$safidy."<br>";

        $nom= $rows['nom'];
        $prenom= $rows['prenom'];
        $email= $rows['email'];
        $ulogin= $rows['ulogin'];
        $mot_passe1= $rows['psw1'];
        $mot_passe2= PASSWORD_HASH($rows['psw1'], PASSWORD_DEFAULT);



    }
    

    


//requete

//$passwd_hash = PASSWORD_HASH($_GET['psw1'], PASSWORD_DEFAULT);

//$pdoStat = $conn->prepare('UPDATE utilisatuer SET titre=:lohateny, categorie=:katego, duree=:fdure, infos=:unfiaux, avis=:note, cat_csa=:kat_csa, WHERE iduser=:idfilma LIMIT 1');

//$sql = ("UPDATE `utilisateur` SET (`nom`, `prenom`, `mail`, `ulogin`, `motdepasse`, `motdepassec`) VALUES ('".$nom."', '".$prenom."', '".$mail."', '".$identifiant."', '".$passwd."', '".$passwd_hash."')");

/*
$sql = ("UPDATE `utilisateur` SET (`nom`, `prenom`, `mail`, `ulogin`, `motdepasse`, `motdepassec`) 
VALUES ('".$_GET['nom']."', '".$_GET['prenom']."', '".$_GET['email']."', '".$_GET['ulogin']."', '".$_GET['psw1']."', '".$_GET['psw2']."')");
*/

//$sql = $conn->prepare("UPDATE `utilisateur` SET nom= :nom, prenom= :prenom, mail= :email, ulogin= :ulogin, motdepasse= :psw1 WHERE iduser= :mdfu LIMIT 1");




//$pdoStat->bindValue(':mdf',$_GET['iduser'], PDO::PARAM_INT);
/*
$sql->bindValue(':nom',$_GET['nom'], PDO::PARAM_STR);
$sql->bindValue(':prenom',$_GET['prenom'], PDO::PARAM_STR);
$sql->bindValue(':email',$_GET['email'], PDO::PARAM_STR);
$sql->bindValue(':ulogin',$_GET['ulogin'], PDO::PARAM_STR);
$sql->bindValue(':psw1',$_GET['motdepasse'], PDO::PARAM_STR);
*/


/* ========= REQUETE UPDATE ==================
$req = $bdd->prepare('UPDATE registre SET site = :nvsite, identifiant = :nvidentifiant, mdp = :mdp WHERE id = :id');
$req->execute(array(
 
    ':nvsite' => ['site'],
 
    ':nvidentifiant' => ['identifiant'],
 
    ':nvmdp' => ['mdp'],
     
    ':id' => ['id'],
    ));
*/



//$sql = $conn->prepare("UPDATE `utilisateur` SET nom= :nom, prenom= :prenom, mail= :email, ulogin= :ulogin, motdepasse= :psw1 WHERE iduser= :mdfu");
//$sql->execute(array(':nom' => ['nom'], ':prenom' => ['prenom'], ':email' => ['mail'], ':ulogin' => ['ulogin'], ':psw1' => ['motdepasse']));
    
/*
$req = $bdd->prepare('UPDATE registre SET site = :site, identifiant = :identifiant, mdp = :mdp WHERE id = :id');
    $req->bindValue('site',$_POST['site']);
    $req->bindValue('identifiant',$_POST['identifiant']);
    $req->bindValue('mdp',$_POST['mdp']);
    $req->bindValue('id',$_POST['id']);
    
*/
/*
    $sql = $conn->prepare('UPDATE utilisateur SET nom= :nom, prenom= :prenom, mail= :email, ulogin= :ulogin, motedepasse= :mot_passe1 WHERE iduser= :mdfu');
    $nom= $_POST['nom']);
    $prenom= $_POST['prenom']);
    $email= $_POST['email']);
    $ulogin= $_POST['ulogin']);
    $mot_passe1= $_POST['psw1']);
    $mot_passe2= PASSWORD_HASH($_POST['psw1'], PASSWORD_DEFAULT);
    


    [$nom, $prenom, $email, $ulogin, $mot_passe1, $mot_passe2]
    */



    $data = [$nom, $prenom, $email, $ulogin, $mot_passe1, $mot_passe2];

    echo "Données = ".$data;

    $sql = 'UPDATE utilisateur SET nom= :nom, prenom= :prenom, mail= :email, ulogin= :ulogin, motedepasse= :mot_passe1 motedepassec= :mot_passe2 WHERE iduser= :mdfu';
    $resilta= $dpo->prepare($sql);
    $resilta->execute($data);


    if($resilta){
        $message = "Mise à jour effectué";
    }else{
        $message = "Problème de mise à jour!";
    }
    $conn = null;
?>
</div><br><br>
    <?php include('fotera.php'); ?>
</body>
</html>
