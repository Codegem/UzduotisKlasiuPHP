<?php

namespace MasinosApp;

class Dviratis{
    public $Pedalai;
    public $Atsvaitai;
    public $Trosai;

    public function __construct($Pedalai, $Atsvaitai, $Trosai)
    {
        $this->Pedalai = $Pedalai;
        $this->Atsvaitai = $Atsvaitai;
        $this->Trosai = $Trosai;
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