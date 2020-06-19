<?php
include "app/controller.php";
include "app/album.php";

$id = $_GET['id'];
$album = new app\album();
$row = $album->edit($id);
$lst = $album->listPhotos();
?>
<center>
<h2>EDIT ALBUM</h2>
<form method="POST" action="proses_album.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>NAME</td>
			<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><input type="text" name="text" value="<?php echo $row['text']; ?>"></td>
		</tr>
		<tr>
			<td>ID PHOTOS</td>
			<td>
				<select name="photos_id">
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['id']; ?>"<?php echo $row['id']==$ls['id'] ? " selected" : ""; ?>><?php echo $ls['text']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tedit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</center>