<?php

namespace App;

class post extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$date = $_POST['date'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text = $_POST['text'];
		$cat_id = $_POST['cat_id'];

		$sql = "INSERT INTO post (date, slug, title, text, cat_id) VALUES
			(:date, :slug, :title, :text, :cat_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date", $date);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":cat_id", $cat_id);
		$stmt->execute();

		return false;
	}

	public function tampil() {
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
		$sql = "SELECT * FROM post WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$date = $_POST['date'];
		$slug = $_POST['slug'];
		$title = $_POST['title'];
		$text = $_POST['text'];
		$cat_id = $_POST['cat_id'];
		$id = $_POST['id'];

		$sql = "UPDATE post SET date=:date, slug=:slug, title=:title, text=:text, cat_id=:cat_id WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":date", $date);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":cat_id", $cat_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
	
	public function delete ($id)
	{
		$sql = "DELETE FROM post WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
}

?>