<?php

$photos = new app\photos();
$rows = $photos->tampil();

?>
<center>
<h2>DAFTAR PHOTOS</h2>
<a href="index.php?page=input_photos">Tambah Photo</a>
<table>
	<tr>
		<td>ID</td>
		<td>DATE</td>
		<td>TITLE</td>
		<td>TEXT</td>
		<td>ID POST</td>
		<td>AKSI</td>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><?php echo $row['post_id']; ?></td>
		<td><a href="index.php?page=edit_photos&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="index.php?page=proses_photos&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>