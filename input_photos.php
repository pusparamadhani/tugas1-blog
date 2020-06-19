<?php
include "app/controller.php";
include "app/photos.php";

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
			<select name="post_id">
						<option>- Pilih -</option>
						<?php foreach ($rowPost as $row) {?>
						<option value="<?php echo $row ['id']; ?>"><?php echo $row ['title']; ?></option>
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