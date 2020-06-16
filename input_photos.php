<?php

$photos = new app\photos();
$rowPost = $photos->tampil();

?>
<h2>TAMBAH PHOTO</h2>
<center>
<form method="POST" action="proses_photos.php">
<table>
	<tr>
		<td>DATE</td>
		<td><input type="date" name="date"></td>
	</tr>
	<tr>
		<td>TITILE</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>TEXT</td>
		<td><input type="text" name="text"></td>
	</tr>
	<tr>
		<td>ID POST</td>
		<td>
			<select name="id">
						<option>- Pilih -</option>
						<?php foreach ($post as $post) {?>
						<option value="<?php echo $post ['id']; ?>"><?php echo $post ['id']; ?></option>
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