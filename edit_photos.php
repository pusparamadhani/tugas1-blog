<?php
include "app/controller.php";
include "app/photos.php";

$id = $_GET['id'];
$photos = new app\photos();
$row = $photos->edit($id);
?>
<center>
<h2>EDIT PHOTO</h2>
<form method="POST" action="proses_photos.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>DATE</td>
			<td><input type="date" name="date" value="<?php echo $row['date']; ?>"></td>
		</tr>
		<tr>
			<td>TITLE</td>
			<td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><input type="text" name="text" value="<?php echo $row['text']; ?>"></td>
		</tr>
		<tr>
			<td>ID POST</td>
			<td><input type="text" name="post_id" value="<?php echo $row['post_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tedit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</center>