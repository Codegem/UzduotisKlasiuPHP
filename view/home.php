<?php

use MasinosApp\Masina;

$autopriemones = [
$masina = new Masina("Masina", "Yra", "Yra", "Yra", "Yra"),
$dviratis = new Masina("Dviratis", "Yra", "Yra", "Nera", "Yra"),
$motociklas = new Masina("Motociklas", "Yra", "Yra", "Yra", "Yra")
];
 
    $car = new Masina();
    $car->setModelis("Golfas");
    $Modelis = $car->getModelis();
    echo $Modelis;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="UzduotisOPP/style.css">
  <title>Masinos App</title>
</head>
<body>
<table style="width: 100%;">
  <tr>
    <th>TransportoPriemone</th>
    <th>Ratai</th>
    <th>Sedynes</th>
    <th>Lempos</th>
    <th>Padangos</th>
  </tr>
    <?php foreach($autopriemones as $priemones):?>
  <tr>
    <?php foreach($priemones as $priemone):?>
            <td><?=$priemone?></td>
    <?php endforeach?>
  </tr>
    <?php endforeach?>
</table>

</body>
</html>

