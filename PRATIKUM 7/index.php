<<<<<<< HEAD
<?php

include "Controller/bukucontroler.php";

$aplikasi = new bukucontroler();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus';
        $aplikasi->hapus();
        break;
=======
<?php

include "Controller/bukucontroler.php";

$aplikasi = new bukucontroler();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan';
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus';
        $aplikasi->hapus();
        break;
>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
}