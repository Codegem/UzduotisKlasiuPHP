<?php

namespace MasinosApp;

class Masina{
    public $Langai;
    public $Radija;
    public $Atlosai;

    public function __construct($Langai, $Radija, $Atlosai)
    {
        $this->Langai = $Langai;
        $this->Radija = $Radija;
        $this->Atlosai = $Atlosai;
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