<?php
// Include the database configuration file
include 'db_connect.php';
$statusMsg = '';

// File upload path
$targetDir = "films_img/";
$fileName = basename($_FILES["mfil"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["mfil"]["name"])){
    // Allow certain file formats
    $titre =  $_POST['titre']; 
    $categorie = $_POST['categorie'];
    $csa = $_POST['catcsa'];
    $duree = $_POST['duree'];
    $info = $_POST['synopsis'];
    $avis = $_POST['notes'];

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        echo "Anarana ".$_FILES["mfil"]["name"];
        
        // Upload file to server
        if(move_uploaded_file($_FILES["mfil"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            
           /* $conn = $db->query("INSERT into films (liphoto, datefin) VALUES ('".$fileName."', NOW())");*/
/**************************************************(DEBUT) AJOUT FILM ************************************************************************/
          /*$sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `liphoto`,  `datyfin`)  
           VALUES ('".$titre."', '".$categorie."', '".$targetFilePath."', NOW())");*/

           /* -----> 11 Mai à 18h29 
            $sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `cat_csa`, `duree`, `infos`, `avis`, `liphoto`,  `datyfin`)  
           VALUES ('".$titre."', '".$categorie."', '".$csa."', '".$duree."', '".$info."', '".$avis."', '".$targetFilePath."', NOW())");
           */
           $sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `id_genre`, `duree`, `infos`, `avis`, `liphoto`, `cat_csa`, `datyfin`) 
           VALUES ('".$_POST['titre']."', '".$_POST['l_genre']."', '".$_POST['i_genre']."', '".$_POST['duree']."', '".$_POST['infos']."', '".$_POST['avis']."', '".$targetFilePath."', '".$_POST['cat_csa']."', NOW())");



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