<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Editeur d'articles</title>
    </head>

    <body>  
<?php
    $db = new PDO('mysql:host=localhost;dbname=billet;charset=utf8', 'root', '');
    $reponse = $db->query("SELECT id, title, content, date_creation FROM `posts` WHERE id=1");

    while ($donnees = $reponse->fetch())
{
?>
    <p>Nom de l'article :  <?php echo $donnees['title']; ?> </br>
    <p>Nom de l'article :  <?php echo $donnees['content']; ?> </br> 
<?php

}


$reponse->closeCursor(); // Termine le traitement de la requête


?>


    </body>
</html>