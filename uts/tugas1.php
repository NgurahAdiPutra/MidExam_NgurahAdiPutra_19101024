<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="bio" name="bio" method="POST" action="proses.php">
	<p>Nama <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" /></p>
	<p>TTL  <input type="text" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir" /></p>
	<p>Jenis Kelamin</p>
	<p><input type="radio" name="jk" value="Pria">Pria
		<input type="radio" name="jk" value="Perempuan">Perempuan</p>
	<p>Hobi</p>
	<p>
		<input type="checkbox" name="hobi1" value="Membaca">Membaca
		<input type="checkbox" name="hobi2" value="Travelling">Travelling
		<input type="checkbox" name="hobi3" value="Sepakbola">Sepakbola
		<input type="checkbox" name="hobi4" value="Basket">Basket
	</p>
	<p>Pendidikan <select name="pendidikan">
		<option value="SD">SD</option>
		<option value="SMP">SMP</option>
		<option value="SMA">SMA</option>
		<option value="S1">S1</option>
		<option value="S2">S2</option>
	</select>
	</p>
	<p>Tentang Diri</p>
	<p><textarea name="tentang"></textarea></p>

	<p><input type="submit" name="tombol" id="tombol" value="Tampil"></p>
	</form>


</body>
</html>