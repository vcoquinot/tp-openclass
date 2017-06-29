<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur central de la NASA</title>
    </head>

<body>

<?php

if (isset($_POST['login']) AND $_POST['login'] ==  "kangourou") 
    
    {
        echo '<p> bienvenue</p>';
    }
 else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    
?>

</body>
</html>
