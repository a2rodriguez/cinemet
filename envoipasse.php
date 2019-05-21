

<!DOCTYPE html>
<html>
<head>
    <title>Récuperation de mot de passe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/form.css">
</head>
<body>
    <?php include ('headera.php');?>
    <div class="titre"> - ENVOI CONNEXION - </div>
    <div class="fonony">
        <form action="passi2.php" method="POST">
            <label for="konekta">Votre mail</label>
            <input type="text" name="konekta" id="konekta"><br><br>
            <input type="submit" name="Envoyer" valuer="Envoyer"> 
        </form>
    </div>
<br><br>

    <?php include ('fotera.php');?>
</body>



