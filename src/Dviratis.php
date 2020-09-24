<?php

namespace MasinosApp;

class Dviratis extends Transportas{
    public $Pedalai;
    public $Atsvaitai;
    public $Trosai;

    public function __construct($Ratai, $Sedynes, $Lempos, $Modelis, 
    $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed, $Pedalai, $Atsvaitai, $Trosai)
    {
        parent::__construct($Ratai, $Sedynes, $Lempos, $Modelis, 
        $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed);
        $this->Pedalai = $Pedalai;
        $this->Atsvaitai = $Atsvaitai;
        $this->Trosai = $Trosai;
    }

    public function dviratisCollect(){
        
        $ArrDvir [] = $this ->Pedalai;
        $ArrDvir [] = $this ->Atsvaitai;
        $ArrDvir [] = $this ->Trosai;
        return $ArrDvir;
    }

    public function setPedalai($Pedalai){
        $this->Pedalai = $Pedalai;
    }
    public function getPedalai(){
        return $this->Pedalai;
    }

    public function setAtsvaitai($Atsvaitai){
        $this->Atsvaitai = $Atsvaitai;
    }
    public function getAtsvaitai(){
        return $this->Atsvaitai;
    }

    public function setTrosai($Trosai){
        $this->Trosai = $Trosai;
    }
    public function getTrosai(){
        return $this->Trosai;
    }


}