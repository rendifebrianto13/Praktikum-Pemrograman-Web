<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pertemuan 4 Nomor 1 Modul 8 Proses Login</title>
</head>
<body>

<?php
echo "<h1><left>HASIL LOGIN</center></h1>";
echo "<table width=500 ellpadding=1 cellspacing=1 border=1";
echo "<tr>";
echo "<td>";
echo "<h3>Nama :". $_POST['nama']. "</h3>";
echo "<h3>Email :". $_POST['email']. "</h3>";
date_default_timezone_set('Asia/Jakarta');
echo "Login Pada jam :"; echo date("H:i:s A"); 
echo "<br>";
echo date("l, d-m-Y");
echo "</td>";
echo "</tr>";
echo "</table>";
?>
</body>
</html>