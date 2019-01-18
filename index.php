<?php
class Kelas{
    protected $jumlah;
    public function belajar(){
       echo "Sedang belajar <br>";
    }
    public function tampil_jumlah(){
        echo "Jumlah mahasiswa adalah ".$this->jumlah."<br>";
    }
}
class StudyGroup extends Kelas{
    public function setjumlah($jumlah){
        $this->jumlah = $jumlah;
    }
}

$d34102 = new StudyGroup();
//$d34102->jumlah = 5;
$d34102->setjumlah(20);
$d34102->tampil_jumlah();
?>
