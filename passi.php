<?php
        include ('bdd_connect.php'); 
        echo "Valeur envoyée : ".$_POST['konekta']."<br>";
        

        
        $skl = "SELECT * FROM utilisateur WHERE mail=".$_POST['konekta'];
        echo "Requête : ".$skl."<br>";
        
        foreach ($conn->query($skl) as $rows) {
            ?><div><?php echo $rows['ulogin']."<br>"; echo $rows['motdepasse'];?></div><?php
        }

      
        $safidy = $rows['motedepasse'];
        $log = $rows['ulogin'];

        echo "Login : ".$log. " et mot de passe : ".$safidy;

        $destinataires = "az.raharijaona@gmail.com, ".$safidy;
        $sujet = "Récupération de mail";
        
        // Version MINE
        $entetes = "MIME-Version: 1.0\n";
        
        // en-têtes expéditeur
        $entetes .= "From : administration@site.fr\n";
        
        // en-têtes adresse de retour
        $entetes .= "Reply-to : az.raharijaona@gmail.com\n";
        
        // personnes en copie
        $entetes .= "Cc : araharijaona@yahoo.fr\n";
        $entetes .= "Bcc : a.raharijaona@simplon-charleville.fr\n";
        
        // priorité urgente
        $entetes .= "X-Priority : 1\n";
        
        // type de contenu HTML
        $entetes .= "Content-type: text/html; charset=utf-8\n";
        
        // code de transportage
        $entetes .= "Content-Transfer-Encoding: 8bit\n";
        
        // message HTML
        $message = '<h1> Connexion et Mot de passe </h1>';
        $message .='<br>Login : '. $log."\n";
        $mesage .='Mot de passe : '.$safidy."\n";
        $message .='<br><br><br><div align="center">';
        $message .='<span style="color:#0C0C0C0; font-size:13px;">Copyright ©2019 CINEMET</span>';
        $message .='</div>';
        
        mail($destinataires, $sujet, $message, $entetes);
    ?>
