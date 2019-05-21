<!DOCTYPE html>
<html>
<head>
    <title>Gestion du site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="connexion.css">
    <link rel="stylesheet" href="style/form.css">
    <link rel="stylesheet" href="style/styla.css">

    <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- link (FIN) BOOSTRAP 4.3.1 -->

    <!---------------(DEBUT) TABLEAU------------------------>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
    <!---------------(FIN) TABLEAU------------------------>
    
</head>
<body>
  <?php include('headera.php'); ?>
  <div class="titre">- LISTE UTILISATEURS -</div>
  <div align="center">
    <?php
        if (isset($_SESSION['nom']))
            {
                echo "Vous êtes «".$_SESSION['nom']."»<br>"; 
            }else{
                echo "Vous êtes déconnectés !";
            }
    ?>
  </div>
    <div class="row" align="center">
        <div class="col-md-3">
        <?php
        /*$originalDate = "2019-05-15";
        echo "Date en Format brute : ".$originalDate."<br>";
        $newDate = date("d/m/Y", strtotime($originalDate));
        echo "Date en Format FR : ".$newDate."<br>";*/
        ?>

        </div>
        <div class="col-md-6">
            <?php
                include ('bdd_connect.php'); 
                $i=0;
                $sql = "SELECT * FROM utilisateur ORDER BY nom ASC";?>
                <table>
                    <tr>
                        <th>N°</th>
                        <th>Nom & prénom(s)</th>
                        <th>Adresse mail</th>
                        <th>Login</th>
                        <th>Mot de passe</th>
                    </tr>
                    <tr>
                        <?php foreach ($conn->query($sql) as $row){
                        $i++;    
                        ?>
                        <td  align="center">
                        <div align="center"><?php echo $i;?></div>
                        </td>
                        <td>
                            <?php echo strtoupper($row['nom'])." ".strtolower($row['prenom']);?>
                        </td>
                        <td>
                            <?php echo $row['mail'];?>
                        </td>
                        <td>
                            <?php echo $row['ulogin'];?>
                        </td>
                        <td>
                            <?php echo $row['motdepassec'];?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </table>
                    <br>Nombre(s) d'utilisateurs dans la base de données :<?php echo $i."<br><br>";
                    $conn=null;
                    ?>
        </div><br><br>
        <div class="col-md-3"></div>
    </div>
    <?php include('fotera.php'); ?>
</body>
</html>
