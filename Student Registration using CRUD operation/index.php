<?php 


include "databaseconnectivity.php";


if (isset($_POST['submit'])) {

	// echo "submitted";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$department=$_POST['department'];

$query=mysqli_query($conn,"insert into student set name='$name',email='$email',password='$password',dept='$department'");

if($query){
	echo"inserted successsfully";
	header("location:view.php");
}
else
{
	echo "not inserted";
}

}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>


</head>
<body>

<section>
	<div class="container">
		<h2 class="text-primary text-center fw-bold">STUDENT FORM</h2>
		<div class="row mt-5">
			<div class="col-lg-6">
				<form method="post">
					<div class="form-group">
						<label class="form-label" for="name">Name</label>
						<input type="text" name="name" class="form-control" id="name">
					</div>
					<div class="form-group mt-3">
						<label class="form-label" for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email">
					</div>
					<div class="form-group mt-3">
						<label class="form-label" for="password">Password</label>
						<input type="password" name="password" class="form-control" id="password">
					</div>
					<div class="form-group mt-3">
						<label class="form-label" for="department">Department</label>
						<input type="text" name="department" class="form-control" id="department">
					</div>
					<div class="form-group mt-3">
						<input type="submit" class="btn btn-success" value="Submit" name="submit">
						<input type="reset" class="btn btn-danger" value="Reset">
					</div>
				</form>
			</div>
			<div class="col-lg-6"></div>
		</div>
	</div>
</section>
</body>
</html>