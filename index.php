<?php
include "function.php";
include "db.php";
include  "header.php";
include  "footer.php";

//Checking wheather we pressed any button by the help of name attribute and post function

if(isset($_POST['create'])) {
	//creating a new entry to the database!!!
	create();
} else if(isset($_POST['read'])) {
	//Reading all the entries from database!!!
	showAllData();
} else if(isset($_POST['update'])) {

	//Updating a previous entry from the database by the help of id!!!!
	update();
} else if(isset($_POST['delete'])) {
	//Deleting a previous entry from the database by the help of id!!!!
	Delete();

} else {
	echo "Noting pressed yet!!!!";
}


?>

		<div class="container">

			<div class="col-sm-6">

				<form action="index.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password">
					</div>

					<div class="form-group">

						<select name="id" id="">


							<?php
							showAllData();
							?>


						</select>

					</div>

					<input class="btn-primary" type="submit" name="create" value="Create">
					<input class="btn-primary" type="submit" name="read" value="Read">
					<input class="btn-primary" type="submit" name="update" value="Update">
					<input class="btn-primary" type="submit" name="delete" value="Delete">
				</form>

			</div>
