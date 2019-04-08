<?php
$tab_departments = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Exercice 9</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div>
      <h1>Exercice 9</h1>
      <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
    </div>
    <div>
      <p>
        <?php foreach ($tab_departments as $department) {
          echo $department;
        }
        ?>
      </p>
    </div>
  </body>
</html>