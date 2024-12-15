<<<<<<< HEAD
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
=======
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
>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
}