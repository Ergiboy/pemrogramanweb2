<<<<<<< HEAD
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

=======
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

>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
