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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


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
  <div class="titre">- UPDATE / DELETE -</div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
                include ('bdd_connect.php'); 
                $i=0;
                $sql = "SELECT * FROM genre ORDER BY description ASC";?>
                <table>
                    <tr>
                        <th>N°</th>
                        <th>Genre de film</th>
                        <th>Mise à jour</th>
                        <th>Suppression</th>
                    </tr>
                    <tr>
                        <?php foreach  ($conn->query($sql) as $row){
                        $i++;    
                        ?>
                        <td>
                            <div align="center"><?php echo $i;?></div>
                        </td>
                        <td>
                            <?php echo strtoupper($row['description']);?>
                        </td>
                        <td>
                            <div align="center">
                                <a href="maj_up_genre.php?mdfu=<?php echo $row['id_genre']?>"><i class="fas fa-edit"></i></a>
                            </div>
                        </td>
                        <td>
                            <div align="center">
                            <a href="suppr_genre.php?fafao=<?php echo $row['id_genre']?>"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </table>
                    <br>Nombre(s) de genre de films dans la base de données :<?php echo $i."<br><br>";
                    $conn=null;
                    ?>
        </div><br><br>
        <div class="col-md-3"></div>
    </div>
    <?php include('fotera.php'); ?>
</body>
</html>
