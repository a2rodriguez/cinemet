<!DOCTYPE html>
<html>
    <head>
        <title>TEST PDO</title>
        <meta charset="utf-8">
</head>
<body>
    <h1>Insertion film</h1>
    <?php //echo $message;?>
   <form action="insert_pdo.php" method="POST">
        <label for="lohateny">Titre: </label><input type="text" name="lohateny"><br>
        Catégorie:<input type="text" name="katego"><br>
        Durée:<input type="text" name="fdure"><br>
        Infos:<input type="text" name="unfaux"><br>
        Avis:<input type="text" name="note"><br>
        Catégorie CSA:<input type="text" name="kat_csa"><br>
        Genre:<input type="text" name="zanra"><br>
        Réalisateur:<input type="text" name="realy"><br>

        <input type="submit" name="Envoyer" value="Envoyer">
    </form>
</body>
<html>
    
