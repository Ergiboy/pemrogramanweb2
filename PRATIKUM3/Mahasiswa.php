<?php
include "orang.php";

class Mahasiswa extends orang{
    public $nim;
    public $prodi;
    public function getnilaisemester(){

    }
}

class mahasiswaasing extends Mahasiswa{

    //override
    public function ucapsalam(){
        echo "hello my name " . $this->nama;
    }

}