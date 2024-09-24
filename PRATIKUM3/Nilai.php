<?php  

class Nilai {
    private $tugas ;
    private $uts;
    private $uas ;

    public function setTugas ($tugas){
        if ($tugas >=0 && $tugas <=100){
            $this ->tugas = $tugas ;
        }
    }
        public function setuts ($uts){
            if ($uts >=0 && $uts <=100){
                $this ->uts = $uts ;
            }
        }
        public function setuas ($uas){
            if ($uas >=0 && $uas <=100){
                $this ->uas = $uas ;
            }
        }
}
class Nilai {

    public function gettugas (){
        return $this ->tugas ;
    }
    
    public function getuts(){
        return $this ->uts ;
    }

    
    public function getuas (){
        return $this ->uas;
    }

    
    public function gettotalNilai (){
        $totalNilai = 0.3 * $this ->tugas + 0.35 * $this ->uts +0.3 * $this ->uas;
        return $totalNilai ;
    }

}
?>