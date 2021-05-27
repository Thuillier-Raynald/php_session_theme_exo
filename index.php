<?php
session_start();
require('function.php');
if (!empty($_POST['nom'])) {
    // creer une cle 'nom' et je stock la valeur de "nom" renseigné dans le formulaire
    $_SESSION['nom'] = $_POST['nom'];
}
if (!empty($_POST['prenom'])) {
    // creer une cle 'prenom' et je stock la valeur de "prenom" renseigné dans le formulaire
    $_SESSION['prenom'] = $_POST['prenom'];
}
if (!empty($_POST['theme'])) {
    // creer une cle 'theme' et je stock la valeur de "theme" renseigné dans le formulaire
    $_SESSION['theme'] = $_POST['theme'];
}
debug($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONS</title>
    <style>
        .dark {
            background-color: #000;
            color: #FFF;
        }
        .light {
            background-color: #FFF;
            color: #000;
        }
    </style>
</head>
<body class="<?php echo $_SESSION['theme']; ?>">
   <form action="index.php" method="POST">
        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom">
        <br>
        <label for="theme">Thème Light</label>
        <input type="radio" name="theme" id="light" value="light" checked="checked">
        <label for="theme">Thème Dark</label>
        <input type="radio" name="theme" id="dark" value="dark">
        <br>
        <input type="submit" value="Envoyer">
   </form>
</body>
    
    