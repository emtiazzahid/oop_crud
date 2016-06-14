<?php
	include('database.php');
	class crud
	{

		
		public function insert($name, $password)
		{
			$database_obj = new database();
			$conn = $database_obj->Connection();
			$query = "INSERT INTO oop (username, password) VALUES ('$name', '$password')";
			if(mysqli_query($conn, $query))
			{
				echo "data inserted";
			}
			else
				echo "data not inserted";
		}

		public function delete($id)
		{

			$query = "DELETE FROM oop Where id = '$id'";
			if(mysqli_query($connection_obj->Connection, $query))
			{
				echo "data deleted";
			}
			else
				echo "data not deleted";
		}

		public function update($id, $name, $password)
		{
			$query = "UPDATE oop set username = '$name' , password = '$password' WHERE id = '$id'";
			if(mysqli_query($conn, $query))
			{
				echo "data updated";
			}
			else
				echo "data not updated";
		}


		public function select($name, $password)
		{
			$query = "SELECT * FROM oop";
			if(mysqli_query($connection_obj->Connection, $query))
			{
				echo "Showing all data";
			}
			else
				echo "data not showing";
		}
	}

?>