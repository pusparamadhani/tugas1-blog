<?php

$post = new app\post();
$rows = $post->tampil();

?>
<center>
<h2>DAFTAR POST</h2>
<a href="index.php?page=input_post">Tambah Postan</a>
<table>
	<tr>
		<td>ID</td>
		<td>DATE</td>
		<td>SLUG</td>
		<td>TITLE</td>
		<td>TEXT</td>
		<td>ID CATEGORY</td>
		<td>AKSI</td>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['slug']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><?php echo $row['cat_id']; ?></td>
		<td><a href="index.php?page=edit_post&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="index.php?page=proses_post&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>