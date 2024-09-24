<?php

//visibillity.php

class visibillity{

    public $public = "public";
    private $private = "private";
    protected $protected = "protected";

    function tampilkanData(){
        echo "akses didalam kelas <br>";
        echo "public: ". $this->public . "<br>";
        echo "private: ". $this->private . "<br>";
        echo "protected: ". $this->protected . "<br>";
    }


}