<?php
include ('bdd_connect.php');

if (isset($_POST['uname']) AND isset($_POST['psw'])) 
    {
        /*if (!isset($_POST['uname']) AND !isset($_POST['psw'])) {*/
            $login = $_POST['uname'];
            $passwd = $_POST['psw'];
            //$passwd_hash = password_hash($_POST['psw'], PASSWORD_DEFAULT);
    
            /*$sql = $conn->prepare('SELECT * FROM utilisateur WHERE ulogin= :ulogin AND motdepasse= :motdepasse');*/
            $sql = $conn->prepare('SELECT * FROM utilisateur WHERE ulogin= :uname AND motdepasse= :psw');
            $sql->execute(array('uname' => $login, 'psw' => $passwd));
            $resultat = $sql->fetch();
    
            if(!$resultat){
                echo "Login et/ou Mot de passe INCORRECT!<br/>";
                //header ('Location: login_user.php');
            }else{
                $_SESSION['nom'] = $resultat['nom'];
                $_SESSION['prenom'] = $resultat['prenom'];
                header ('Location: administration.php');
            }
            $sql->closeCursor();
        
        /*}*/
    }else{
        echo "Login et Mot de passe OBLIGATOIRE! <br/>";
    }    
    
?>