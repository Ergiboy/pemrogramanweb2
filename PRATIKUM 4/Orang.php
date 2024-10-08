<?php

class Orang{
    protected $nama;

    public function setNama ($nama){
        $this->nama = $nama;
    }

    public function ucapsalam(){
        echo "Halo perkenalkan nama saya " . $this->nama . "<b>";
    }
}