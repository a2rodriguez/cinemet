<?php
// Include the database configuration file
include 'db_connect.php';
echo "Tafiditra ô!";
$statusMsg = '';

// File upload path
$targetDir = "films_img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    echo "Anarana ".$_FILES["file"]["name"];

    
    
    
    // Allow certain file formats
    
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            
           /* $conn = $db->query("INSERT into films (liphoto, datefin) VALUES ('".$fileName."', NOW())");*/
            /* ------MANDEH  TSARA 
           $sql  = $conn->query("INSERT INTO `films` (`liphoto`,  `datyfin`)  VALUES ('".$targetFilePath."', NOW())");
           */

           $sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `duree`, `infos`, `avis`, `liphoto`, `cat_csa`, `datyfin`) 
           VALUES ('".$_POST['titre']."', '".$_POST['categorie']."', '".$_POST['duree']."', '".$_POST['infos']."', '".$_POST['avis']."', '".$targetFilePath."', '".$_POST['cat_csa']."', NOW())");

           /*INSERT INTO `films` (`liphoto`,  `datyfin`)  VALUES ('".$targetFilePath."', NOW())"); */

           //echo "Requete  : ".$sql;
            if($sql ){
                $statusMsg = "Le fichier  «".$fileName. "» a été placé sur le serveur.";
                //echo "Tafiditra  !".$statusMsg;
            }else{
                $statusMsg = "Impossible de copier le fichier sur le serveur, Réessayer SVP !";
                
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Extension valide, suelement au format JPG, JPEG, PNG, GIF, & PDF !';
    }
}else{
    $statusMsg = 'Choisir le fichier à télécherger.';
}


$conn->close();
// Display status message
echo $statusMsg;
?>