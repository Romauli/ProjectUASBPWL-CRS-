<?php
include "koneksi.php";
$nama = $_POST['nama'];


if (!empty($nama))
	{
		mysqli_query($con, "INSERT INTO favorite(nama) VALUES('$nama')");
		header('location:index.php');
	}else
	{
	header('location:index.php');	
	}
?>