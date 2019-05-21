<?php
include ('bdd_connect.php');

echo "Sary : ".$_POST['mfil']." et le fichier : ".$_FILES['mfil']['name'];
/*----------------(DEBUT) Ajout Image-------------------*/
if (isset($_POST["Enregistrer"])){
//if (isset($_FILES["mfil"])){
    

    $file_name = $_FILES['mfil']['name'];
    $file_tmp = $_FILES['mfil']['tmp_name'];

    $uploads_dir = "films_img/";

    $movefile = move_uploaded_file($file_tmp, $uploads_dir . $file_name);

    $targetFilePath = $uploads_dir.$file_name;

}else{
    echo "Oups! Tsy tafiditra ato."."<br>";
}
/*
$uploads_dir = "films_img/";
foreach ($_FILES["mfil"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["mfil"]["tmp_name"][$key];
        
        $name = basename($_FILES["mfil"]["name"][$key]);

        $targetFilePath = "$uploads_dir/$name";

        move_uploaded_file($tmp_name, "$uploads_dir/$name");

    }
}

*/
$ttr=$_POST['titre'];
$kat=$_POST['l_genre'];
$ikat=$_POST['i_genre'];
$dure=$_POST['duree'];
$unfau=$_POST['synopsis'];
$noty=$_POST['notes'];
$targetFilePath="films_img/afilm07.jpg";
$kt=$_POST['catcsa'];

echo "Valeurs trouvées id=".$ikat." et Genre = ".$kat;
/*----------------(FIN) Ajout Image-------------------*/

$sql  = $conn->query("INSERT INTO `films` (`titre`, `categorie`, `id_genre`, `duree`, `infos`, `avis`, `liphoto`, `cat_csa`, `datefin`) VALUES ('".$_POST['titre']."', '".$_POST['l_genre']."', '".$_POST['i_genre']."', '".$_POST['duree']."', '".$_POST['synopsis']."', '".$_POST['notes']."', '".$targetFilePath."', '".$_POST['catcsa']."', NOW())");

            echo "Requete  : ".$sql."<br>";

            $rep= $conn->prepare($sql);

            //[$ttr], [$kat], [$ikat], [$dure], [$unfau], [$noty], [$targetFilePath], [$kt]
            

            $rep->execute();


            if($sql){
                $statusMsg = "Le fichier  ".$fileName. " a été placé sur le serveur."."<br>";
                //echo "Tafiditra  !".$statusMsg;
            }else{
                $statusMsg = "Impossible de copier le fichier sur le serveur, Réessayer SVP !"."<br>";
        }
   


$conn=null;





echo $statusMsg."<br>";
?>