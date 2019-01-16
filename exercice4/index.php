<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
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
        // on remplace la septième valeur par août avec la bonne orthographe
        $months[7] = 'août';
        // on affiche la septième valeur
        echo $months[7];

    ?>
</body>
</html>