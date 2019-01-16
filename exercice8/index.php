<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // tableau
        $months = [
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
            'décembre'];
        // on fait une boucle pour afficher le tableau
        // à chaque tour de boucle, la valeur de l'élément suivant est mise dans la variable $mois
        // on peut donc utiliser $mois que à l'intérieur de la boucle pour afficher les données du tableau
        foreach($months as $month){
    ?>
    <p><?= $month ?></p>
    <?php
        }
    ?>
</body>
</html>