<fieldset>
<legend>Menghitung Persegi Panjang</legend>
<form action="" method="post">
<table>
	<tr>   
 	<td>Panjang</td> 
	<td>:</td>
    <td><input type="text" name="panjang" /></td>
	</tr>

	<tr>
    	<td>Lebar</td> 
		<td>:</td>
        <td><input type="text" name="lebar" /></td>
	</tr>
	
	<tr>
   		<td><input type="submit" value="hitung" name="hitung"/></td>
	</tr>
</table>
</form>

<?php
	if (isset($_POST['hitung'])){
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];

	function luas ($panjang,$lebar) 
			{
	$luas = $panjang *$lebar ;
	echo ("Jadi Luas Persegi adalah : ".$luas);
				}
	luas($panjang,$lebar);
	}
?>
</fieldset>
