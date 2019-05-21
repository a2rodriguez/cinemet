<?php
session_start();
?>

<html>
<head>
<title>Resaka SESSION</title>
<meta charset="utf-8">
</head>
<body>
    Je sais qui tu es '<?php echo $_SESSION['nom']; ?>'
</body>
</html>