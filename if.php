<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 6;
    $b = 6;
    if ($a == $b) {
        echo "Zmienne a i b są równe";
    } else {
        echo "Zmienne a i b nie są równe";
    } 
    for ($i=0; $i < 10 ; $i++) {
        if ($i % 2 == 0) {
            echo "Liczba $i jest parzysta <br>";
        }
        else { 
            echo "Liczba $i jest nieparzysta <br>";
        }
    }
    ?>
</body>
</html>