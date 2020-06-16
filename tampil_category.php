<?php

/** new app (nama folder bukan namespace) **/
$category = new app\Category();
$rows = $category->tampil();

?>
<center>
<h2>DAFTAR CATEGORY</h2>
<a href="index.php?page=input_category">Tambah Category</a>
<table>
	<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>TEXT</td>
		<td>AKSI</td>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><a href="index.php?page=edit_category&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="index.php?page=proses_category&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>