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
    $liczba =10;
    $mnożenie =1;

    for ($i=1; $i <=10 ; $i++) { 
       echo "Licznik (\$i) wynosi :$i <br>";
       echo "Poprzednia suma wynosi: $mnożenie <br>";
       $mnożenie *= $i;
       echo "Nowa suma wynosi : $mnożenie <br> <br>";

    }
    ?>
</body>
</html>