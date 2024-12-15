<<<<<<< HEAD
<?php 

class database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'perpustakaan';
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasename);

    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getkoneksi(){
        return $this->koneksi;
    }
    
=======
<?php 

class database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $databasename = 'perpustakaan';
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->databasename);

    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getkoneksi(){
        return $this->koneksi;
    }
    
>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
}