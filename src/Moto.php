<?php

namespace MasinosApp;
use MasinosApp\Transportas;
class Moto extends Transportas{

    public $SankabosRankena;
    public $GrandinesZvaigzde;
    public $BegiuPedalas;

    public function __construct($Ratai, $Sedynes, $Lempos, $Modelis, 
    $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed, $SankabosRankena, $GrandinesZvaigzde, $BegiuPedalas)
    {
        parent:: __construct($Ratai, $Sedynes, $Lempos, $Modelis, 
            $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed);
        $this->SankabosRankena = $SankabosRankena;
        $this->GrandinesZvaigzde = $GrandinesZvaigzde;
        $this->BegiuPedalas = $BegiuPedalas;
    }

    public function motoCollect(){
        foreach($this->showProfile() as $ArrMoto[]);
        $ArrMoto [] = $this ->SankabosRankena;
        $ArrMoto [] = $this ->GrandinesZvaigzde;
        $ArrMoto [] = $this ->BegiuPedalas;
        return $ArrMoto;
    }

    public function setSankabosRankena($SankabosRankena){
        $this->SankabosRankena = $SankabosRankena;
    }
    public function getSankabosRankena(){
        return $this->SankabosRankena;
    }

    public function setGrandinesZvaigzde($GrandinesZvaigzde){
        $this->GrandinesZvaigzde = $GrandinesZvaigzde;
    }
    public function getGrandinesZvaigzde(){
        return $this->GrandinesZvaigzde;
    }

    public function setBegiuPedalas($BegiuPedalas){
        $this->BegiuPedalas = $BegiuPedalas;
    }
    public function getBegiuPedalas(){
        return $this->BegiuPedalas;
    }

}