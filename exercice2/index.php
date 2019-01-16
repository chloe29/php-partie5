<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // on crée un tableau
        // Janvier représente la ligne 0
        $months = array('janvier', 'février', 'mars', 'avril', 'mail', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        // on affiche la 3eme ligne du tableau réprésenté par le numéro 2 car la première ligne correspond à la case 0
        // on va chercher la valeur qui correspond à la clé 2
        echo $months[2];
    ?>
</body>
</html>