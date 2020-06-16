<?php

namespace App;

class category extends controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$name = $_POST['name'];
		$text = $_POST['text'];
		

		$sql = "INSERT INTO category (name, text) VALUES (:name, :text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text", $text);
		$stmt->execute();

		return false;
	}

	public function tampil() {
		$sql = "SELECT * FROM category";
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
		$sql = "SELECT * FROM category WHERE id =:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{

		$name = $_POST['name'];
		$text = $_POST['text'];
		$id = $_POST['id'];

		$sql = "UPDATE category SET name=:name, text=:text WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":name", $name);
		$stmt->bindParam(":text", $text);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
	
	public function delete ($id)
	{
		$sql = "DELETE FROM category WHERE id=:id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();

		return false;
	}
}

?>