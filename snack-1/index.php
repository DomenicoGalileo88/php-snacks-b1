<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

 <?php 
 /* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite */
 $matchs = [
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cefalù',
        'punti casa' => '55',
        'punti ospite' => '60',
    ],
    [
        'casa' => 'Napoli',
        'ospite' => 'Roma',
        'punti casa' => '70',
        'punti ospite' => '60',
    ],
    [
        'casa' => 'Bari',
        'ospite' => 'Messina',
        'punti casa' => '65',
        'punti ospite' => '50',
    ],
    [
        'casa' => 'Modena',
        'ospite' => 'Parma',
        'punti casa' => '60',
        'punti ospite' => '70',
    ],
];

/* Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

//var_dump($matchs);
for ($i=0; $i < count($matchs) ; $i++) { 
    $match = $matchs[$i];
    //var_dump($match);

    $ris = $match['casa'] . ' - ' . $match['ospite'] . ' | ' . $match['punti casa'] . '-' . $match['punti ospite'];
    //var_dump($ris);
    echo $ris;
};
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack-1</title>
 </head>
 <body>
     <h1>Matchs:</h1>
     <p>
         <?php
            for ($i=0; $i < count($matchs) ; $i++) { 
                $match = $matchs[$i];
                //var_dump($match);

                $ris = '<p>' . $match['casa'] . ' - ' . $match['ospite'] . ' | ' . $match['punti casa'] . '-' . $match['punti ospite'] . '</p>';
                //var_dump($ris);
                echo $ris;
                };
         ?>
     </p>
 </body>
 </html>