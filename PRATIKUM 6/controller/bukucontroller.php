<?php 

require_once "model/daftar_buku.php";

class bukucontroler{

    public function jalankan(){
        //mengakses model
        $data = new daftarBuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";

      
    }
}