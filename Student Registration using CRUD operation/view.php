<?php
include "databaseconnectivity.php";
 
$selectQuery = mysqli_query($conn,"select * from student");

if(mysqli_num_rows($selectQuery) > 0) { 
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

	<div class="container mt-5">

		<h2 class="text-success text-center fw-bold">STUDENT DETAILS</h2>
		<div class="row">
			<div class="col">
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Department</th>
						<th>Action</th>
						<th>Action</th>
					</tr>

					 <?php
			            while ($result = mysqli_fetch_array($selectQuery)) {
			                $id = $result['id'];
			                $name = $result['name'];
			                $email = $result['email'];
			                $password = $result['password'];
			                $department = $result['dept'];
			            ?>
			            <tr>
			            	<td><?php echo $name?></td>
			            	<td><?php echo $email?></td>
			            	<td><?php echo $password?></td>
			            	<td><?php echo $department?></td>
			            	<td><a href="update.php?update=<?php echo $id?>"
			            		class="btn btn-success">Update</a></td>
			            	<td><a href="delete.php?delete=<?php echo $id?>"
			            		class="btn btn-danger">Delete</a></td>
			            </tr>


			        <?php
			            } 
			            ?>    
					
				</table>
			</div>
		</div>
	</div>

</body>
</html>

<?php
} 
?>