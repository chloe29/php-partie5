<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // la fonction array permet de créer un tableau
        // janvier représente la ligne 0
        $months = array('janvier', 'février', 'mars', 'avril', 'mail', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        // boucle foreach pour afficher le tableau
        foreach ($months as $month){
            echo $month . ' ';
        }

        // // autre méthode :
        // // initialisation de la variable avec la fonction count() qui renvoie le nombre de mois dans le tableau
        // $monthsLength = count($months);
        // // boucle for pour afficher le tableau
        // for($counter = 0; $counter < $monthsLength; $counter++){
        //     echo $months[$counter] . ' ';
        // }
    ?>
</body>
</html>