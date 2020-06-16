<?php

$album = new app\album();
$rows = $album->tampil();

?>
<center>
<h2>DAFTAR ALBUM</h2>
<a href="index.php?page=input_album">Tambah Album</a>
<table>
	<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>TEXT</td>
		<td>ID PHOTO</td>
		<td>AKSI</td>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><?php echo $row['photo_id']; ?></td>
		<td><a href="index.php?page=edit_album&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="index.php?page=proses_album&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>