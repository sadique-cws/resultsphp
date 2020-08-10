<?php 
	$connect  = mysqli_connect('localhost','root','','resultdb') or die("fail");
?>

<!DOCTYPE html>
<html>
<head>
	<title>result </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<a class="navbar-brand">Result</a>

		<form action="" class="form-inline mx-auto" method="post">
			<input type="search" class="form-control" name="search" size="70" placeholder="search by Name and Roll" />
			<input type="submit" class="btn btn-success" name="send">
		</form>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a class="nav-link">Login</a></li>
			<li class="nav-item"><a class="nav-link">Create Account</a></li>
			<li class="nav-item"><a class="btn btn-dark" href="insert.php">Insert Record</a></li>
		</ul>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-12">
				<table class="table">
					<tr>
						<th>Id</th>
						<th>name</th>
						<th>contact</th>
						<th>email</th>
						<th>total_marks</th>
						<th>action</th>
					</tr>



					<?php 
					$calling = mysqli_query($connect,"SELECT * from students");
					while($row = mysqli_fetch_array($calling)){
						?>
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['contact'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['maths'] + $row['science'] + $row['sst'] + $row['hindi'] + $row['eng'];?></td>
							<td>
								<a class="btn btn-success">Edit</a>
								<a class="btn btn-info">View</a>
								<a class="btn btn-danger" href="delete.php?del=<?php echo $row['id'];?>">Delete</a>
							</td>
						</tr>

					<?php } ?>
				</table>
			</div>
		</div>
	</div>

</body>
</html>