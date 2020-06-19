<?php

namespace App;

class photos extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$date = $_POST['date'];
		$title = $_POST['title'];
		$text = $_POST['text'];
		$post_id = $_POST['post_id'];

		$sql = "INSERT INTO photos (date, title, text, post_id) VALUES
			(:date, :title, :text, :post_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date", $date);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":post_id", $post_id);
		$stmt->execute();

		return false;
	}

	public function tampil() {
		$sql = "SELECT photos.*, post.title as ART FROM photos, post WHERE photos.post_id=post.id 
		ORDER BY photos.title";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}
		return $data;
	}

	public function listPost()
	{
		$sql = "SELECT * FROM post";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}
	public function edit($id)
	{
		$sql = "SELECT * FROM photos WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$date = $_POST['date'];
		$title = $_POST['title'];
		$text = $_POST['text'];
		$cat_id = $_POST['post_id'];
		$id = $_POST['id'];

		$sql = "UPDATE photos SET date=:date, title=:title, text=:text, post_id=:post_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date", $date);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":post_id", $post_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
	public function delete ($id)
	{
		$sql = "DELETE FROM photos WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
}

?>