<?php
session_start();
require('function.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONS</title>
</head>
<body>
   <p>Bonjour <?php echo $_SESSION['nom']; ?> </p>
</body>
    
    