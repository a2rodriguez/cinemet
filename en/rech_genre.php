<!DOCTYPE html>
<html>
<head>
<title>Recherche Genre</title>
<meta charset="utf-8">
</head>
<body>
    <h1>RECHERCHE GENRE</h1>
        <?php
        include ('bdd_connect.php');
        $sql = $conn->query('SELECT * FROM genre ORDER BY description ASC');
        ?><label for="l_genre">Catégorie du film : </label>
        <select name='l_genre' onchange="selgenre(this)">
        <?php                
        while ($row = $sql->fetch())
        {
            
            echo "<option  value=".$row['id_genre'].">".$row['description']."</option>";
        }

        ?></select> <!-- Source : https://www.xul.fr/html5/select.php --->
        <?php
        $valgenre = "<span id='ikaty'></span>"; //-- ID récuperé via JS
        $desgenre = "<span id='katy'></span>"; //-- Description récuperée via JS

        
        //echo "<br>"."ID trouvé = ".$valgenre."<br>";
        //echo "Genre trouvé = ".$desgenre."<br>";
        ?>
        <?php
        
        $sql->closeCursor();

        $conn = null;

        ?>

    <script>
        function selgenre(element)
        {
            var idx=element.selectedIndex;
            var val=element.options[idx].value;
            var content=element.options[idx].innerHTML;
            document.getElementById('ikaty').innerHTML = val;
            document.getElementById('katy').innerHTML = content;
            //alert(val + " " + content);
        }
    </script>
</body>
</html>