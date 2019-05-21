<?php

try
{
/*        $conn = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);*/
    $conn = new PDO('mysql:host=localhost;dbname=harryjo1_php', 'harryjo1', 'AXP2019_8YqXR76+');
    //echo "ok";
}
 
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode().'<br />';
}
?>