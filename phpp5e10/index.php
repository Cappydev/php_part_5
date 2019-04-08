<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Exercice 10</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div>
      <h1>Exercice 10</h1>
      <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</p>
      <a href="https://github.com/La-Manu/Exercices-PHP-partie-5"><input type="button" value="Click ça fait rien"></a>
    </div>
    <div>
      <?php
        $tab_departments = [
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme'
        ];
        foreach ($tab_departments as $number_department => $name_department) {
      ?>
      <p>Le département <?= $name_department; ?> à le numéro <?= $number_department; ?></p>
      <?php
      }
      ?>
    </div>
  </body>
</html>