<?php 

require_once "model/daftar buku.php";

class bukucontroller{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";

      
    }
}

