<?php
include ('db_connect.php');
echo "Cherche un ID dans la base FILM<br>";
///---- Alimentation de la lste déroulante ----
$skul = "SELECT * FROM films";

$resultat = $conn->query($skul);
$roy = $resultat->fetch_assoc();

//echo "Resultat : ".$roy['id_film']."<br>";

echo "<form action='' method='POST'>
<table><tr><td>Choisisser le genre de film:
<select name='valora'>";
while($roy=mysqli_fetch_array($resultat)){
    echo "<option name='valora'>$roy[0]</option>";
}
echo"</select></td></tr>
</table>
<input type='submit' name='validation' id='validation' value='Envoyer' /> 
</form>";


if (isset($_POST['validation'])) {
    $cherch_id = $_POST['valora'];
    echo "Resultat : ".$cherch_id."<br>";
}
$conn->close();


include ('db_connect.php');
///----- Chercher les infos sur le ID trouvé dans FILMS -----
$sql = 'SELECT * FROM films WHERE id_film='.$cherch_id;
$result = $conn->query($sql);
$row = $result->fetch_assoc();



echo "Lien image dans la base de données est : ".$row['liphoto']."<br>";


echo 'Aloha aloha <img src="'.$row['liphoto'].'" alt="Texte Alternatif">'."<br>"; 

echo "Sary sary <img src='".$row['liphoto']."' alt='".$row['infos']."'/>"."<br>";



$conn->close();

?>


