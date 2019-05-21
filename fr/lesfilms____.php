<!Doctype html>
<html>
    <head>
        
        <meta charset="UTF-8"/>
        <title>Affichage des films</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link (DEBUT) BOOSTRAP 4.3.1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- link (FIN) BOOSTRAP 4.3.1 -->
        <link rel="stylesheet" href="style/reset.css" >
        <link rel="stylesheet" href="style/style.css" >
        <style>
            .container {
                padding: 16px;
                background-color: white;
                box-sizing: content-box;
                /*width: 40%;*/
                width: 40%;
            }
            .box {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                
                
                /*align-items: flex-start;*/
                align-items: space-between;
                /*height: 200px;*/
                height: 450px;

                }
            .box>*:first-child {
                align-self: stretch;
            }
            .box .selected {
                align-self: center;
            }
/***********************************/
.lamina{
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	/*justify-content: center;*/
	align-items: space-between;
	align-content: stretch;
}
/***********************************/
        </style>
    </head>
    <body>
    <?php //include ('header.php'); ?>
        <div class="titre">- NOS FILMS -</h2></div>
            <?php 
                include ('bdd_connect.php'); //New connexion with PDO;
                if(isset($_POST["submit"])){
        
                    $lokin = $_POST['uname'];
                    $passwd = $_POST['psw'];
        
                    $sql = "SELECT * FROM utilisateur WHERE ulogin LIKE '".$lokin."' and motdepasse='".$passwd."'" ;
                    foreach  ($conn->query($sql) as $row) { //Source : https://www.php.net/manual/fr/pdo.query.php
                            echo "» Vous êtes "."<br>";
                            echo strtoupper($row['nom'])."<br>".strtoupper($row['prenom'])."<br>";
                            /*echo ">>> ".$row['iduser']."<br>";
                            echo ">>> ".$row['ulogin']."<br>";
                            echo ">>> ".$row['motdepasse']."<br><br>";*/
                        }
                    }else{
                        echo "Utilisateur INCONNU dans la BDD";
                    }
                
                //$conn->closeCursor();
                    $conn=null;
                
               
            
            /*
            
            include('db_connect.php'); 
            $sql = "SELECT * FROM films ORDER BY id_film DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {

                    ?><div class="container box boaty">
                    <div>  
                    
                    <a href="fiche_film.php?id_film=<?php echo $row['id_film']; ?>">
                        <img src='<?php  echo $row['liphoto']; ?>' height='360' width='280'/>
                    </a>
                    </div class="container boaty">
                    <div>
                        
                    </div>
                    <div class="lamina"><u>#ID </u>: <?php echo $row['id_film']; ?><br>
                        <u>Titre </u>: <?php echo $row['titre']; ?><br>
                        <u>Catégorie </u>: <?php echo $row['categorie']; ?><br>
                        <u>Durée </u>:<?php echo $row['duree']; ?><br>
                        <u>Synopsys </u>: <?php echo $row['infos']; ?><br>
                        <u>Avis </u>: <?php echo $row['avis']; ?><br>
                        <u>Catégorie CSA </u>: <?php echo $row['cat_csa'];?><br>
                    </div>
                    
                    </div><br><br>

                <?php }
            } else {
                echo "0 results";
            }
           
            $conn->close();
		    ?>
*/

 //CONNEXION WITH PDO
    include('bdd_connect.php');
    //$pdoStat = $conn->prepare('SELECT * FROM films ORDER BY id_film DESC');

    /*$executeIsOk = $pdoStat->execute();

    $film = $pdoStat->fetchAll(); */

    

    $sql = ('SELECT * FROM films ORDER BY id_film DESC');
    foreach  ($conn->query($sql) as $row) {
    //foreach($film as $sarym):?>
    <ul>
    <div class="row">
        <li>
        <div class="box">
            <a href="fiche_film.php?id_film=<?php echo $row['id_film']; ?>">
                <img src='<?php  echo $row['liphoto']; ?>' height='360' width='280'/>
            </a><br>
            </div>
            
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4">  
                <u>#ID </u>: <?php echo $row['id_film']; ?><br>
                <u>Titre </u>: <?php echo $row['titre']; ?><br>
                <u>Catégorie </u>: <?php echo $row['categorie']; ?><br>
                <u>Durée </u>:<?php echo $row['duree']; ?><br>
                <u>Synopsys </u>: <?php echo $row['infos']; ?><br>
                <u>Avis </u>: <?php echo $row['avis']; ?><br>
                <u>Catégorie CSA </u>: <?php echo $row['cat_csa'];?><br>
            </div>
        </li>
    </div>
     <!-- -->
     </ul>
    <?php }
        $conn=null;
     ?>




    <?php include ('footer.php'); ?>
    </body>
</html>


