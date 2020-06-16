<?php

namespace App;

class album extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$name = $_POST['name'];
		$text = $_POST['text'];
		$photo_id = $_POST['photo_id'];
		

		$sql = "INSERT INTO album (name, text, photo_id) VALUES
			(:name, :text, :photo_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->execute();

		return false;
	}

	public function tampil() {
		$sql = "SELECT * FROM album";
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
		$sql = "SELECT * FROM album WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$nama = $_POST['name'];
		$text = $_POST['text'];
		$photo_id = $_POST['photo_id'];
		$id = $_POST['id'];

		$sql = "UPDATE album SET name=:name, text=:text WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
	public function delete ($id)
	{
		$sql = "DELETE FROM album WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
}

?>