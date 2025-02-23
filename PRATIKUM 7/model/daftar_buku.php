<<<<<<< HEAD
<?php

require_once "buku.php";
require_once "database/database.php";

class daftarbuku
{
    private $koneksi;

    public function getdata()
    {
        $db = new database();
        $this->koneksi = $db->getkoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $book = new buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
                $book->setId($row["id"]);
                array_push($daftar_buku, $book);
            }
        }

        return $daftar_buku;
    }

    public function getkolomtabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }

    public function simpan($buku)
    {
        $db = new Database();
        $koneksi = $db->getkoneksi();

        $sql = "INSERT INTO buku (Judul, Pengarang, Penerbit, Tahun) VALUES ('" . $buku->getjudul() . "', '" . $buku->getpengarang() . "', '" . $buku->getpenerbit() . "', '" . $buku->gettahun() . "')";
        $query = $koneksi->query($sql);

        if ($query === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM buku WHERE id = " . $id;
        $query = $this->koneksi->query($sql);

        return $query;
    }

    public function update($buku)
    {
        $sql = "UPDATE buku SET judul = '" . $buku->getjudul() . "', pengarang = '" . $buku->getpengarang() . "', penerbit = '" . $buku->getpenerbit() . "', tahun = '" . $buku->gettahun() . "' WHERE id = " . $buku->getId();
        $query = $this->koneksi->query($sql);

        return $query;
    }
=======
<?php

require_once "buku.php";
require_once "database/database.php";

class daftarbuku
{
    private $koneksi;

    public function getdata()
    {
        $db = new database();
        $this->koneksi = $db->getkoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $book = new buku($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
                $book->setId($row["id"]);
                array_push($daftar_buku, $book);
            }
        }

        return $daftar_buku;
    }

    public function getkolomtabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }

    public function simpan($buku)
    {
        $db = new Database();
        $koneksi = $db->getkoneksi();

        $sql = "INSERT INTO buku (Judul, Pengarang, Penerbit, Tahun) VALUES ('" . $buku->getjudul() . "', '" . $buku->getpengarang() . "', '" . $buku->getpenerbit() . "', '" . $buku->gettahun() . "')";
        $query = $koneksi->query($sql);

        if ($query === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM buku WHERE id = " . $id;
        $query = $this->koneksi->query($sql);

        return $query;
    }

    public function update($buku)
    {
        $sql = "UPDATE buku SET judul = '" . $buku->getjudul() . "', pengarang = '" . $buku->getpengarang() . "', penerbit = '" . $buku->getpenerbit() . "', tahun = '" . $buku->gettahun() . "' WHERE id = " . $buku->getId();
        $query = $this->koneksi->query($sql);

        return $query;
    }
>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
}