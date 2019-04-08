<?php
$country = [
    '02'=>'Aisne',
    '59'=>'Nord',
    '60'=>'Oise',
    '62'=>'Pas-de-Calais',
    '80'=>'Somme',
    '51'=>'Marne'
];
$show = $country[51];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
            <a href="https://github.com/La-Manu/Exercices-PHP-partie-5"><input type="button" value="Click ça fait rien"></a>
        <div>
            <p><?= $show; ?></p>
        </div>
    </body>
</html>