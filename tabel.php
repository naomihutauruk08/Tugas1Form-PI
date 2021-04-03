<?php
require_once('crud.php');
$data = getAllDataMahasiswa();    //Memanggil function nya untuk mengambil semua data mahasiswanya
$fakultas = getAllData("fakultas");
?>