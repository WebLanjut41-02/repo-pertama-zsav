<?php
class kelas{
protected $jumlah;
public function belajar(){
	echo "sedang belajar";
}
public function tampil_jumlah(){
	echo "jumlah mahasiswa adalah :".$this->jumlah;
}
}
class studygroup extends belajar
{
	public function setjumlah($jumlah){

	}
	
	function __construct(argument)
	{
		# code...
	}
}
?>