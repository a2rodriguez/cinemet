<?php
session_start();
session_destroy();
?>

<html>
<head>
<title>Resaka SESSION</title>
<meta charset="utf-8">
</head>
<body>
    
    <?php 
        if (isset($_SESSION['nom']))
            {
                echo "Je sais encore qui tu es '".$_SESSION['nom']."'<br>"; 
            }else{
                echo "Vous êtes déconnecté !";
                
            }
        ?>
    
</body>
</html>