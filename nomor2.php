<?php

//SOAL NOMOR 2

class Siswa{

    public $nrp;
    public $nama;
    public $daftarNilai = [];
    
    public function __construct($nrp, $nama){
        $this->nrp = $nrp;
        $this->nama= $nama;
    }
    public function tambahNilai($mapel,$nilai){
        $this->daftarNilai = new Nilai ($mapel, $nilai);
    }
}

class Nilai{

    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai){
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}
$siswa1= new Siswa('12001','Firman Kurnia');
$siswa1= tambahNilai('Inggris','100');

$siswaList=[];
$mapelList= ['Inggris','Indonesia','Jepang'];
for($i = 0; $i <=10; $i++){
    $nama = generateRandomString(10);
    $mapel = $mapelList[array_rand($mapelList)];
    $nilai = rand(0,100);
    $siswa = new Siswa ("NRP_".($i+1). $nama);
    $siswa = tambahNilai($mapel, $nilai);
    $siswaList[]=$siswa;

}

function generateRandomString($length=10){
    $character= '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString='';
    for ($i = 0; $i<$length; $i++){
        $randomString = $character[rand(0,strlen($character)-1)];
    }return $randomString;
}
foreach ($siswaList as $siswa){
    echo 'NRP: '. $siswa->nrp . 'Nama : '. $siswa->nama;
    foreach ($siswa->daftarNilai as $nilai){
        echo 'Mapel : '. $nilai->mapel . 'Nilai : '. $nilai->mapel. 'Nilai : ' . $nilai->nilai;
    }
}