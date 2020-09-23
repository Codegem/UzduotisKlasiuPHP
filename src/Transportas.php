<?php 
namespace MasinosApp;

    class Transportas{
        public $Ratai;
        public $Sedynes;
        public $Lempos;
        private $Modelis;
        private $Marke; 
        private $Kaina; 
        private $Svoris;
        private $Variklis; 
        private $Maxspeed;

    

// metodas kuris privalomai kvieciamas kuriant objekta
    public function __construct($Ratai, $Sedynes, $Lempos, $Modelis, 
    $Marke, $Kaina, $Svoris, $Variklis, $Maxspeed)
    {
        $this->Ratai = $Ratai;
        $this->Sedynes = $Sedynes;
        $this->Lempos = $Lempos;
        $this->Modelis = $Modelis;
        $this->Marke = $Marke;
        $this->Kaina = $Kaina;
        $this->Svoris = $Svoris;
        $this->Variklis = $Variklis;
        $this->Maxspeed = $Maxspeed;

    }
    

    public function showProfile(){
    $data[] = $this->Ratai;
    $data[] = $this->Sedynes;
    $data[] = $this->Lempos;
    $data[] = $this->Modelis;
    $data[] = $this->Marke;
    $data[] = $this->Kaina;
    $data[] = $this->Svoris;
    $data[] = $this->Variklis;
    $data[] = $this->Maxspeed;


    return $data;
    }

    public function setModelisMarke($Modelis, $Marke){
        $this->Modelis = $Modelis;
        $this->Marke = $Marke;
    }
    public function getModelMarke(){
        $model[] = $this->Modelis;
        $model[] = $this->Marke;
        return $model;
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