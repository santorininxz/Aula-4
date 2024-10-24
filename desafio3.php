<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Faça um programa em PHP que apresente todos os valores ímpares no intervalo de 500 a 1000.</p>
    <?php
    for ($i = 501; $i <= 1000; $i += 2) {
        echo "<li class='number-item'>$i</li>";
    }
    ?>
</body>

</html>