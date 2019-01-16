<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // tableau associatif : utilisation de la fonction array
        // la clé correspond au numéro du département et la valeur correspond au nom du département
        $departements = array (
            80 => 'Somme',
            60 => 'Oise',
            02 => 'Aisne',
            59 => 'Nord',
            62 => 'Pas-de-Calais'
        );
        // on fait une boucle pour afficher le tableau
        // à chaque tour de boucle, la valeur de l'élément suivant est mise dans la variable $elemnts
        // on peut donc utiliser $elements que à l'intérieur de la boucle pour afficher les données du tableau
        foreach($departements as $departement){
            echo $departement . ' ';
        }
    ?>
</body>
</html>