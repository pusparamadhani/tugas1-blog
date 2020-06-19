<?php
include "app/controller.php";
include "app/album.php";

$album = new app\album();
$rows = $album->tampil();
?>
<center>
<h2>DATA ALBUM</h2>
<a href="dashboard.php?page=input_album">Tambah Album</a>
<table>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>TEXT</th>
		<th>ID PHOTO</th>
		<th>AKSI</th>
		<th></th>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><?php echo $row['photo_id']; ?></td>
		<td><a href="dashboard.php?page=edit_album&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="dashboard.php?page=proses_album&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>