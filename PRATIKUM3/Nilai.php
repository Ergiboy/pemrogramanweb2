<?php
//Nilai.php

class Nilai{
    //property
    private $tugas = 0;
    private $uts = 0;
    private $uas = 0;

    //setter
    public function settugas ($tugas){
        if ($tugas >= 0 && $tugas <= 100){
            $this->tugas = $tugas;
        }
    }

    public function setuts ($uts){
        if ($uts >= 0 && $uts <= 100){
            $this->uts = $uts;
        }
    }

    public function setuas ($uas){
        if ($uas >= 0 && $uas <= 100){
            $this->uas = $uas;
        }
    }

    //getter
    public function gettugas(){
        return $this->tugas;
    }
    public function getuts(){
        return $this->uts;
    }
    public function getuas(){
        return $this->uas;
    }

    public function getTotalNilai(){
        $totalNilai = 0.3 * $this->tugas + 0.35 * $this->uts + 0.35 * $this->uas;
        return $totalNilai;
    }
}