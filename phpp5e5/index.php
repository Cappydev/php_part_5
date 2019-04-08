<?php
$country = [
    '02'=>'Aisne',
    '59'=>'Nord',
    '60'=>'Oise',
    '62'=>'Pas-de-Calais',
    '80'=>'Somme',
];
$show = $country[59];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
            <a href="https://github.com/La-Manu/Exercices-PHP-partie-5"+><input type="button" value="Click ça fait rien"></a>
        <div>
            <p><?= $show; ?></p>
        </div>
    </body>
</html>