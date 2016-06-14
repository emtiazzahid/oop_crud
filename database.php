<?php

	include('config.php');
	class database
	{
		public $host = HOST;
		public $name = name;
		public $pass = password;
		public $data = database;


		public function __construct(){
			$this->Connection();
		}

		public function Connection(){
			$conn = mysqli_connect($this->host,$this->name,$this->pass,$this->data);
			if ($conn) {
				echo "connection successfull <br>";
			}
			else
				die("error connection <br>");
		}
	}

?>