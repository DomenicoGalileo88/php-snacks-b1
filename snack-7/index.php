<!-- 
     Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. */
$classe = [
    [
        'name' => 'Luigi',
        'last_name' => 'Esposito',
        'voti' => [8, 6, 5, 7],
    ],
    [
        'name' => 'Alessia',
        'last_name' => 'Valentino',
        'voti' => [7, 6, 8, 4],
    ],
    [
        'name' => 'Francesca',
        'last_name' => 'Balestra',
        'voti' => [7, 6, 5, 6],
    ],
    [
        'name' => 'Andrea',
        'last_name' => 'Di Matteo',
        'voti' => [4, 6, 5, 5],
    ],
    [
        'name' => 'Gabriella',
        'last_name' => 'Tizzano',
        'voti' => [8, 8, 6, 8],
    ],
];

//var_dump($classe);

/* Stampare Nome, Cognome e la media dei voti di ogni alunno. */

/* for ($i = 0; $i < count($classe); $i++) {
    $alunno = $classe[$i];
    $sum = array_sum($alunno["voti"]);

    $media = $sum / count($alunno["voti"]);

    //var_dump($alunno);
    echo $alunno['name'] . ' ' . $alunno['last_name'] . ' ' . $media . '<br>';
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-7</title>
</head>

<body>
    <h1>Alunni:</h1>
    <p><?php for ($i = 0; $i < count($classe); $i++) {
            $alunno = $classe[$i];
            $sum = array_sum($alunno["voti"]);

            $media = $sum / count($alunno["voti"]);

            //var_dump($alunno);
            echo $alunno['name'] . ' ' . $alunno['last_name'] . ' Media: ' . $media . '<br>';
        } 
        ?>
    </p>
</body>

</html>