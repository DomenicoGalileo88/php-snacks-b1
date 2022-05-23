<!-- 
    Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->

<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem neque esse aperiam illum sed, est impedit. Cupiditate dignissimos veritatis est amet velit atque, necessitatibus cumque suscipit, delectus ipsum voluptas quia quasi dolore ut error quaerat? Ipsa velit facere id omnis et ad corrupti minima dolores, doloribus repellat distinctio non quod exercitationem temporibus commodi voluptates enim aut aliquam corporis saepe? Est harum nisi neque nihil quo! Eligendi quo excepturi vero eos magni, eum voluptates sapiente sit blanditiis recusandae? Possimus consequuntur asperiores perferendis nihil accusamus! Sequi magni animi sit incidunt provident quam, omnis iusto illum porro fugit laborum reiciendis doloribus nemo dolorum commodi at eum iste? Dignissimos molestias illo fuga quos ad ut numquam culpa. Doloribus voluptates aperiam quod facere iusto voluptatem vero voluptatibus id sed, a similique libero aliquam, reprehenderit adipisci explicabo. Temporibus, perspiciatis. Unde a aliquam itaque! Totam molestias exercitationem maxime doloremque cupiditate expedita! Repudiandae maiores omnis exercitationem illum est repellat sapiente placeat voluptatibus officiis error consequuntur incidunt perferendis culpa dolorum ullam, optio, recusandae inventore veritatis. Aliquam incidunt ut commodi, officia consectetur doloribus sequi dolor nemo culpa minima porro nisi eveniet vitae deleniti quibusdam suscipit placeat aspernatur error mollitia! Provident itaque, quam recusandae maxime nemo atque unde beatae dolorem!";
$contentArray = explode('.', $text);
var_dump($contentArray);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-5</title>
</head>

<body>
    <h2>Articolo</h2>
    <?php foreach ($contentArray as $paragraph) : ?>
        <p><?= $paragraph; ?>.</p>
    <?php endforeach; ?>

</body>

</html>