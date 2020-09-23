<?php

namespace MasinosApp;

class Moto{
    public $SankabosRankena;
    public $GrandinesZvaigzde;
    public $BegiuPedalas;

    public function __construct($SankabosRankena, $GrandinesZvaigzde, $BegiuPedalas)
    {
        $this->SankabosRankena = $SankabosRankena;
        $this->GrandinesZvaigzde = $GrandinesZvaigzde;
        $this->BegiuPedalas = $BegiuPedalas;
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