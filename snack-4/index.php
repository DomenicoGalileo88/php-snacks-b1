<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$random_numbers = [];

while (count($random_numbers) <= 15) {
    $number = rand(1, 100);

    if (!in_array($number, $random_numbers)) {
        $random_numbers[] = $number;
    };
};

//var_dump($random_numbers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>

<body>

    <h1>I 15 numeri casuali sono:</h1>
    <p>
        <strong>
            <?php
            for ($i = 1; $i < count($random_numbers); $i++) {
                $random_number = $random_numbers[$i];
                echo $random_number . ', ';
            }
            ?>
        </strong>
    </p>


</body>

</html>