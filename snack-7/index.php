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
        'voti' => [
            'matematica' => 8,
            'fisica' => 6,
            'geografia' => 5,
            'storia' => 7
        ],
    ],
    [
        'name' => 'Alessia',
        'last_name' => 'Valentino',
        'voti' => [
            'matematica' => 7,
            'fisica' => 6,
            'geografia' => 8,
            'storia' => 4
        ],
    ],
    [
        'name' => 'Francesca',
        'last_name' => 'Balestra',
        'voti' => [
            'matematica' => 7,
            'fisica' => 6,
            'geografia' => 5,
            'storia' => 6
        ],
    ],
    [
        'name' => 'Andrea',
        'last_name' => 'Di Matteo',
        'voti' => [
            'matematica' => 4,
            'fisica' => 6,
            'geografia' => 5,
            'storia' => 5
        ],
    ],
    [
        'name' => 'Gabriella',
        'last_name' => 'Tizzano',
        'voti' => [
            'matematica' => 8,
            'fisica' => 8,
            'geografia' => 6,
            'storia' => 8
        ],
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
    <div><?php for ($i = 0; $i < count($classe); $i++) {
                $alunno = $classe[$i];
                /* sommo tutti i voti */
                $sum_voti = array_sum($alunno["voti"]);
                /* faccio la media dei voti sommati */
                $media = $sum_voti / count($alunno["voti"]);
            ?>
            <h3>
                <?php echo $alunno['name'] . ' ' . $alunno['last_name'] . ' Media voti: ' . $media . '<br>'; ?>
            </h3>
        <?php }
        ?>
    </div>
</body>

</html>