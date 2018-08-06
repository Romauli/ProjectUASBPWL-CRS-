<?php
//buat koneksi MySQL untuk user: root, tanpa password, alamat:localhost
$con=mysqli_connect("localhost","root","","bigbossedm");
//cek apakah koneksi dengan MySQL berhasil
if (mysqli_connect_errno($con)){
echo "Koneksi dengan MySQL gagal :" . mysqli_connect_error();
}
else{
echo "";
}

//$con=mysqli_connect('localhost','root','','bigbossedm');
//mysql_select_db('bigbossedm');
?>