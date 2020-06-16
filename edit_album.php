<?php
include "koneksi.php";
include "app/album.php";

$id = $_GET['id'];
$album = new album();
$row = $album->edit($id);

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
				<select name="id">
						<option>- Pilih -</option>
						<?php
						$sql3 = "SELECT * FROM photos";
						$stmt2 = $koneksi ->prepare($sql3);
						$stmt2->execute();
						while ($row = $stmt2->fetch()) { 
							if ($row['id'] == $result['id']) {
								$selected = 'selected';
							}else{
								$selected = '';
							}
							?>
						<option value="<?php echo $row['id']; ?>" <?php echo $selected ?>><?php echo $row['id']; ?></option>
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