<?php 
namespace MasinosApp;

    class Masina{
        private $Modelis, 
                $Marke, 
                $Kaina, 
                $Svoris, 
                $Variklis, 
                $Maxspeed;
        public $Tpriemone;
        public $Ratai;
        public $Sedynes;
        public $Lempos;
        public $Padangos;

// metodas kuris privalomai kvieciamas kuriant objekta
    public function __construct($Tpriemone, $Ratai, $Sedynes, $Lempos, $Padangos)
    {
        $this->Tpriemone = $Tpriemone;
        $this->Ratai = $Ratai;
        $this->Sedynes = $Sedynes;
        $this->Lempos = $Lempos;
        $this->Padangos = $Padangos;
    }
    

    public function showProfile(){
    $data[] = $this->Tpriemone;
    $data[] = $this->Ratai;
    $data[] = $this->Sedynes;
    $data[] = $this->Lempos;
    $data[] = $this->Padangos;

    return $data;
    }

    public function setModelis($Modelis){
        $this->Modelis = $Modelis;
    }
    public function getModelis(){
        return $this->Modelis;
    }
    public function setMarke($Marke){
        $this->Marke = $Marke;
    }
    public function getMarke(){
        return $this->Marke;
    }
    public function setKaina($Kaina){
        $this->Kaina = $Kaina;
    }
    public function getKaina(){
        return $this->Kaina;
    }
    public function setSvoris($Svoris){
        $this->Svoris = $Svoris;
    }
    public function getSvoris(){
        return $this->Svoris;
    }
    public function setVariklis($Variklis){
        $this->Variklis = $Variklis;
    }
    public function getVariklis(){
        return $this->Variklis;
    }
    public function setMaxspeed($Maxspeed){
        $this->Maxspeed = $Maxspeed;
    }
    public function getMaxspeed(){
        return $this->Maxspeed;
    }


}