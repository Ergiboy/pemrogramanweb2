<?php

require_once "buku.php";

class daftarbuku
{
    public function getdata()
    {
        $daftar_buku = array(
            new buku('belajar pemograman web', 'bayuu', 'informatika', '2024'),
            new buku('matematika', 'willian', 'andi publicer', '2020'),
            new buku('ski', 'aditya', 'pestaka uin', '2024'),
        );
        return $daftar_buku;
    }

    public function getkolomtabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }
}