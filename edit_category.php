<?php
include "app/controller.php";
include "app/category.php";

$id = $_GET['id'];
$category = new app\category();
$row = $category->edit($id);

?>
<center>
<h2>EDIT CATEGORY</h2>
<form method="POST" action="proses_category.php">
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
			<td></td>
			<td><input type="submit" name="tedit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</center>