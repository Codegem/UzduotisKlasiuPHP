<?php
namespace MasinosApp;
use MasinosApp\Transportas;
use MasinosApp\Masina;
use MasinosApp\Moto;
use MasinosApp\Dviratis;
use MasinosApp\Show;



$Transportas = new Transportas("Masina", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra");
$Dviratis = new Dviratis("Dviratis", "aaa", "bbb", "ccc", "ddd", "eee", "sss", "hhh", "eee", "jjj", "pask3", "pask2", "pask1");
$Masina = new Masina("Masina", "aaa", "Yra", "bbb", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "yra", "bbb", "yra");
$Moto = new Moto("Moto", "eee", "Yra", "ddd", "bbb", "ccc", "Yra", "Yra", "Yra", "Yra", "yra", "yra", "yra");


// $Masina->setVariklis("triperis");

// $Masina->setModelisMarke("BMW", " i8");
// foreach($Masina->getModelMarke() as $mod){
// echo $mod;
// }
// echo $Dviratis->showProfile();
// echo $Dviratis->dviratisCollect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

<h1>Dviratis info</h1>
<?php foreach($Dviratis->dviratisCollect() as $array):?>
    <p><?=$array?></p>
<?php endforeach?>

<h1>Auto info</h1>
<?php foreach($Masina->masinaCollect() as $array):?>
    <p><?=$array?></p>
<?php endforeach?>

<h1>Moto info</h1>
<?php foreach($Moto->motoCollect() as $array):?>
    <p><?=$array?></p>
<?php endforeach?>

</body>
</html>


