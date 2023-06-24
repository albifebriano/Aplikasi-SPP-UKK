<?php

$koneksi = mysqli_connect('localhost','root','','db_spp_albi');

if(!$koneksi){
	echo"Koneksi Anda Gagal";
}