<!-- 
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php
/* Passare come parametri GET name, mail e age */


$name = $_GET['name'];
//var_dump($name);

$email = $_GET['email'];
//var_dump($email);

$age = $_GET['age'];
//var_dump(is_numeric($age));
/* verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero */

/* 
per name usa strlen
per email controllo con strpos
per age usa is_numeric
 */

if (strlen($name) > 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age) == true) :

    //var_dump('Accesso riuscito!');

else : //var_dump('Accesso negato!');

endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    
<?php if (strlen($name) > 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age) == true) : ?>
    <h2>Accesso riuscito!</h2>
<?php else : ?>
    <h2>Accesso negato!</h2>
<?php endif; ?>


</body>
</html>