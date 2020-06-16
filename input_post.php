<?php

$category = new app\category();
$rowCategory = $category->tampil();

?>
<h2>TAMBAH POSTAN</h2>
<center>
<form method="POST" action="proses_post.php">
<table>
	<tr>
		<td>DATE</td>
		<td><input type="date" name="date"></td>
	</tr>
	<tr>
		<td>SLUG</td>
		<td><input type="text" name="slug"></td>
	</tr>
	<tr>
		<td>TITLE</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>TEXT</td>
		<td><input type="text" name="text"></td>
	</tr>
	<tr>
		<td>ID CATEGORY</td>
		<td>
			<select name="id">
				<option>- PILIH -</option>
				<?php foreach ($rowCategory as $row) {?>
					<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
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