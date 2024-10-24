<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Faça um programa em PHP que mostre todos os números inteiros de 100 a 200 com incremento de 2 em 2.</h1>
    <?php
    for ($i = 100; $i <= 200; $i += 2) {
        echo "<li class='number-item'>$i</li>";
    }
    ?>
</body>

</html>