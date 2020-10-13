<?php 
	class Connect{
		// private $conn = 'mysql:host=localhost;dbname=PHP0320E2_nhom4';
		// private $user = 'PHP0320E2_nhom4';
		// private $passw = 'PHP0320E2_nhom4*';
		private $conn = 'mysql:host=localhost;dbname=db_nhahang';
		private $user = 'root';
		private $passw = '';
		protected $pdo = null;

		function __construct(){
			try {
				$this->pdo = new PDO($this->conn, $this->user, $this->passw);
				$this->pdo->query("SET NAMES utf8");
			} catch (PDOException $e){
				exit();
			}
		}
	}
	
 ?>