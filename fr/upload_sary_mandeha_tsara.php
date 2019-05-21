<?php
// Include the database configuration file

include 'db_connect.php';

$sqelle = ('SELECT * FROM genre WHERE id_genre='.$_POST['i_genre']);
foreach  ($conn->query($sqelle) as $row) {
	$desgenre = $row['description'];
}
echo "ID : ".$_POST['i_genre']." - ".$desgenre."<br>";


$statusMsg = '';

// File upload path
$targetDir = "films_img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

//echo "ID Genre: ".$_POST['i_genre']." et Designation : ".$_POST['l_genre'];

if(isset($_POST["envoyer"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $titre =  $_POST['titre']; 
    //$categorie = $_POST['l_genre'];
    $csa = $_POST['catcsa'];
    $duree = $_POST['duree'];
    $info = $_POST['synopsis'];
    $avis = $_POST['notes'];
    $idgen = $_POST['i_genre'];

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        echo "Anarana fichier : ".$_FILES["file"]["name"]."<br>";
        
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            
           /* $conn = $db->query("INSERT into films (liphoto, datefin) VALUES ('".$fileName."', NOW())");*/
/**************************************************(DEBUT) AJOUT FILM ************************************************************************/
          /*$sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `liphoto`,  `datyfin`)  
           VALUES ('".$titre."', '".$categorie."', '".$targetFilePath."', NOW())");*/

            
            $sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `id_genre`, `cat_csa`, `duree`, `infos`, `avis`, `liphoto`,  `datyfin`)  
           VALUES ('".$titre."', '".$desgenre."', '".$idgen."', '".$csa."', '".$duree."', '".$info."', '".$avis."', '".$targetFilePath."', NOW())");

           echo "Query found : ".$sql."<br>";


/**************************************************(FIN) AJOUT FILM ************************************************************************/

           /*INSERT INTO `films` (`liphoto`,  `datyfin`)  VALUES ('".$targetFilePath."', NOW())"); */

           echo "Requete  : ".$sql."<br>";
            if($sql ){
                $statusMsg = "Le fichier  ".$fileName. " a été placé sur le serveur."."<br>";
                //echo "Tafiditra  !".$statusMsg;
            }else{
                $statusMsg = "Impossible de copier le fichier sur le serveur, Réessayer SVP !"."<br>";
                
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file."."<br>";
        }
    }else{
        $statusMsg = 'Extension valide, suelement au format JPG, JPEG, PNG, GIF, & PDF !'."<br>";
    }
}else{
    $statusMsg = 'Choisir le fichier à télécherger.'."<br>";
}


$conn->close();
// Display status message
echo $statusMsg."<br>";
?>