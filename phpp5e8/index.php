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
?>
<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "UTF-8" />
        <title>Exercice 8</title>
        <link rel = "stylesheet" href = "style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
        </div>
        <div>
            <?php foreach ($tab_month as $month) { ?>
                <p><?= $month; ?></p>
            <?php } ?>
        </div>
    </body>
</html>