<?php
include "app/controller.php";
include "app/post.php";

$post = new app\post();
$rows = $post->tampil();

?>
<center>
<h2>DATA POST</h2>
<a href="dashboard.php?page=input_post">Tambah Postan</a>
<table>
	<tr>
		<th>ID</th>
		<th>DATE</th>
		<th>SLUG</th>
		<th>TITLE</th>
		<th>TEXT</th>
		<th>ID CATEGORY</th>
		<th>AKSI</th>
		<th></th>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['slug']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><?php echo $row['cat_id']; ?></td>
		<td><a href="dashboard.php?page=edit_post&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="dashboard.php?page=proses_post&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>