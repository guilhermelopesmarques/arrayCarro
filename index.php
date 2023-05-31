<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
</head>
<body>
    <?php
    $carros = array("gol","fusca");
    print_r($carros);
    echo "<br>";

    echo $carros[0];
    echo "<br>";

    $carros[2] = "uno";
    print_r($carros);
    echo "<br>";

    $carros[0] = "pálio";
    print_r($carros);
    echo "<br>";

    array_push($carros,"fiesta");
    print_r($carros);
    echo "<br>";

    unset($carros[1]);
    print_r($carros);
    echo "<br>";

    sort($carros);
    print_r($carros);
    echo "<br>";

    foreach($carros as $carro){
        echo $carro . "<br>";
    }


    ?>
</body>
</html>