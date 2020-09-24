<?php

namespace MasinosApp;

class Masina extends Transportas{
    public $Langai;
    public $Radija;
    public $Atlosai;

    public function __construct($Ratai, $Sedynes, $Lempos, $Modelis, 
    $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed, $Langai, $Radija, $Atlosai)
    {
        parent:: __construct($Ratai, $Sedynes, $Lempos, $Modelis, 
        $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed); 
        $this->Langai = $Langai;
        $this->Radija = $Radija;
        $this->Atlosai = $Atlosai;
    }

    public function masinaCollect(){
        $ArrMas [] = $this ->Langai;
        $ArrMas [] = $this ->Radija;
        $ArrMas [] = $this ->Atlosai;
        return $ArrMas;
    }


    public function setLangai($Langai){
        $this->Langai = $Langai;
    }
    public function getLangai(){
        return $this->Langai;
    }

    public function setRadija($Radija){
        $this->Radija = $Radija;
    }
    public function getRadija(){
        return $this->Radija;
    }

    public function setAtlosai($Atlosai){
        $this->Atlosai = $Atlosai;
    }
    public function getAtlosai(){
        return $this->Atlosai;
    }

    
}