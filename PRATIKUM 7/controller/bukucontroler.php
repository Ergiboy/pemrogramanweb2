<<<<<<< HEAD
<?php

require_once "model/daftar_buku.php";

class bukucontroler{
    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "view/bukuview.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }
=======
<?php

require_once "model/daftar_buku.php";

class bukucontroler{
    public function jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        // memberi data model ke view dan menampilkan view
        include "view/bukuview.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('Location: http://localhost/index.php');
        exit;
    }
>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
}