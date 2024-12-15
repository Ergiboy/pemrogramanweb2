<<<<<<< HEAD
<?php

class buku
{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function getjudul()
    {
        return $this->judul;
    }


    public function getpengarang()
    {
        return $this->pengarang;
    }


    public function getpenerbit()
    {
        return $this->penerbit;
    }


    public function gettahun()
    {
        return $this->tahun;
    }
}
=======
<?php

class buku
{
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function getjudul()
    {
        return $this->judul;
    }


    public function getpengarang()
    {
        return $this->pengarang;
    }


    public function getpenerbit()
    {
        return $this->penerbit;
    }


    public function gettahun()
    {
        return $this->tahun;
    }
}
>>>>>>> 72c474e09a843a8467c33804b1ea61ac82d5d135
