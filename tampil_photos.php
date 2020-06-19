<?php
include "app/controller.php";
include "app/photos.php";

$photos = new app\photos();
$rows = $photos->tampil();
?>
<center>
<h2>DATA PHOTOS</h2>
<a href="dashboard.php?page=input_photos">Tambah Photo</a>
<table>
	<tr>
		<th>ID</th>
		<th>DATE</th>
		<th>TITLE</th>
		<th>TEXT</th>
		<th>ID POST</th>
		<th>AKSI</th>
		<th></th>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><?php echo $row['post_id']; ?></td>
		<td><a href="dashboard.php?page=edit_photos&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="dashboard.php?page=proses_photos&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>