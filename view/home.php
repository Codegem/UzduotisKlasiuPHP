<?php
namespace MasinosApp;
use MasinosApp\Transportas;

$Masina = new Transportas("Masina", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra", "Yra");

$i = 1;
foreach($Masina->showProfile() as $model)
{
echo ($i.". ".$model."<br>");
$i++;
}

$Masina->setVariklis("triperis");

$Masina->setModelisMarke("BMW", " i8");
foreach($Masina->getModelMarke() as $mod){
echo $mod;
}
?>


