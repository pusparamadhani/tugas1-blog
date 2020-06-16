<?php
include "koneksi.php";
include "app/photos.php";

$id = $_GET['id'];
$photos = new photos();
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
			<td>
				<select name="id">
						<option>- Pilih -</option>
						<?php
						$sql3 = "SELECT * FROM post";
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