<?php
$tab_month = [
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'décembre'
];
$tab_month[7] = 'août';
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
            <a href="https://github.com/La-Manu/Exercices-PHP-partie-5"><input type="button" value="Click ça fait rien"></a>
        <div>
            <p><?= $tab_month[7] ?></p>
        </div>
    </body>
</html>