<?php
include "db.php"; //calling database connection from db.php file
/**
 * Created by PhpStorm.
 * User: User
 * Date: 8/4/2017
 * Time: 4:28 AM
 */



//Creating a new entry to the database !!!!
function create(){
	global $connection;

	//Checking if there is any submission by builtin isset function!!!!
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "INSERT INTO users(username,password) VALUES ('$username','$password')";

		$result = mysqli_query($connection,$query);

		if($result){
			echo "Succesfully Created a new entry!!!!";
		}
		else{
			die(mysqli_error($connection));
		}
}


//Reading the database!!!!!
function showAllData() {

	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);


	if($result) {
		echo "working";
	} else {
		echo mysqli_error($connection);
	}

	while($row = mysqli_fetch_assoc($result)) {

		$id = $row['id'];
		echo "<option value='$id'>$id</option>";

	}

}


//Updating a database!!!!!
function update(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];


	$query = "UPDATE users SET username = '$username', PASSWORD = '$password' WHERE id = $id";

	$result = mysqli_query($connection, $query);

	if(!$result){
		echo "Not updated";
	}
	else echo "Updated";
}


//Deleting a database!!!!
function Delete(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];


	$query = "DELETE FROM users WHERE id = $id";

	$result = mysqli_query($connection, $query);

	if(!$result){
		echo "Not deleted";
	}
	else echo "Deleted";
}
?>