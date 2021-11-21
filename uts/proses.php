<?php 

$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$jk=$_POST['jk'];
$pendidik=$_POST['pendidikan'];
$tentang=$_POST['tentang'];

echo "Nama 			 : $nama <br>";
echo "TTL  			 : $ttl <br>";
echo "Jenis Kelamin  : $jk <br>";
echo "Hobi 			 : <br>";
	if (isset($_POST ['hobi1'])) {
		echo "-".$_POST['hobi1']."<br>";
	}
	if (isset($_POST ['hobi2'])) {
		echo "-".$_POST['hobi2']."<br>";
	}
	if (isset($_POST ['hobi3'])) {
		echo "-".$_POST['hobi3']."<br>";
	}
	if (isset($_POST ['hobi4'])) {
		echo "-".$_POST['hobi4']."<br>";
	}
echo "Pendidikan 	: $pendidik <br>";
echo "Tentang Diri :<br>";
echo "$tentang";
 ?>