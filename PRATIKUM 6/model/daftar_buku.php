<?php

require_once "buku.php";
require_once "database/database.php";

class daftarbuku
{
    public function getdata()
    {
        $db = new database();
        $koneksi = $db->getkoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                // var_dump($row['judul']);
                // die();
                $book = new buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
                //var_dump($book->getJudul());
                array_push($daftar_buku, $book);
            }
        }

        // var_dump($daftar_buku[1]->getjudul());
        // die();

        return $daftar_buku;
    }

    public function getkolomtabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }
}