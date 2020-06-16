<?php

namespace App;
use PDO;

class controller {

	public function __construct() {
		
		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=utssem6", "root", "");
		} catch (Exception $e) {
			die ("error!" . $e->getMessage());
		}
	}
}