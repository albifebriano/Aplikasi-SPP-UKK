<?php

$id_spp = $_GET['id_spp'];

include'../koneksi.php';
$sql = "DELETE FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=spp");
}else{
	echo"<script>alert('Maaf Data Tidak Terhapus / Terkaid dengan data yang lain'); window.locatin.assign('?url=spp');</script>";
}


