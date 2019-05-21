<?php
session_start();

if (isset($_POST['nom']) AND !empty($_POST['nom'])){
    $_SESSION['nom'] = $_POST['nom'];
}
?>


<html>
<head>
<title>Resaka SESSION</title>
<meta charset="utf-8">
</head>
<body>
    Ton nom est '<?php echo $_SESSION['nom']; ?>'<br>

    <form action="" method="POST">
       <input type="text" name="nom" placeholder="Anarana...">
       <input type="submit" value="Valider"/>
   </form>

    <a href="page2.php" target="_blank">Page 2</a><br>
    <a href="page3.php" target="_blank">Page 3</a><br>
</body>
</html>