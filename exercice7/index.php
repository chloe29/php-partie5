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
        // la clé (index) correspond au numéro du département et la valeur correspond au nom du département
        $departements = array (
            '80' => 'Somme',
            '60' => 'Oise',
            '02' => 'Aisne',
            '59' => 'Nord',
            '62' => 'Pas-de-Calais'
        );
        $departements['51'] = 'Marne';
        echo $departements['51'];
    ?>
</body>
</html>