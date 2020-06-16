<?php

$photos = new app\photos();
$rowPhotos = $photos->tampil();

?>
<h2>TAMBAH ALBUM</h2>
<center>
<form method="POST" action="proses_album.php">
<table>
	<tr>
		<td>NAME</td>
		<td><input type="text" name="name"></td>
	</tr>

	<tr>
		<td>TEXT</td>
		<td><input type="text" name="text"></td>
	</tr>
	<tr>
		<td>ID PHOTO</td>
		<td>
			<select name="id">
						<option>- Pilih -</option>
						<?php foreach ($rowPhotos as $row) {?>
						<option value="<?php echo $row ['id']; ?>"><?php echo $row ['id']; ?></option>
						<?php } ?>
					</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="tsimpan" value="SIMPAN"></td>
	</tr>
</table>
</form>
</center>