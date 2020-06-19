<?php
include "app/controller.php";
include "app/category.php";
/** new app (nama folder bukan namespace) **/
$category = new app\category();
$rows = $category->tampil();

?>

<center>
<h2>DATA CATEGORY</h2>
<a href="dashboard.php?page=input_category">Tambah Category</a>
<table>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>TEXT</th>
		<th>AKSI</th>
		<th></th>
	</tr>
	
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['text']; ?></td>
		<td><a href="dashboard.php?page=edit_category&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="dashboard.php?page=proses_category&delete-id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
<?php } ?>
</table>
</center>