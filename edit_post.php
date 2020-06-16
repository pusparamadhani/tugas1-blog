<?php

$id = $_GET['id'];
$post = new app\post();
$row = $post->edit($id);

?>

<center>
<h2>EDIT POST</h2>
<form method="POST" action="proses_post.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>DATE</td>
			<td><input type="date" name="date" value="<?php echo $row['date']; ?>"></td>
		</tr>
		<tr>
			<td>SLUG</td>
			<td><input type="text" name="slug" value="<?php echo $row['slug']; ?>"></td>
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
			<td>ID CATEGORY</td>
			<td><input type="text" name="cat_id" value="<?php echo $row['cat_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tedit" value="UPDATE"></td>
		</tr>
	</table>
</form>
</center>