<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Test Requête SQL</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

        <center><h1> Insertion dans la BDD </h1></center>

      	  <form id="contact" method="post" action="send.php">
        		<fieldset><legend>Ajouter un Représentant</legend>
        			<p><label for="nomr">Nom :</label><input type="text" id="nomr" name="nomr" /></p>
        			<p><label for="ville">Ville :</label><input type="text" id="ville" name="ville" /></p>
        		</fieldset>

        		<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
        	</form>


            <form id="contact" method="post" action="send1.php">
              <fieldset><legend>Ajouter un Produits</legend>
                <p><label for="nomp">Nom du Produit :</label><input type="text" id="nomp" name="nomp" /></p>
                <p><label for="coul">Couleur du produits :</label><input type="text" id="coul" name="coul" /></p>
                <p><label for="pds">Tarif Produit:</label><input type="text" id="pds" name="pds" /></p>

              </fieldset>

              <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
            </form>


            <form id="contact" method="post" action="send2.php">
              <fieldset><legend>Créer un Client</legend>
                <p><label for="nomc">Nom du Client :</label><input type="text" id="nomc" name="nomc" /></p>
                <p><label for="villec">Ville :</label><input type="text" id="villec" name="villec" /></p>
              </fieldset>

              <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
            </form>

  </body>
</html>
