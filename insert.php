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
				<form action="insert.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label>name</label>
						<input type='text' class="form-control" name="name" />
					</div>
					<div class="mb-3">
						<label>contact</label>
						<input type='text' class="form-control" name="contact" />
					</div>
					<div class="mb-3">
						<label>email</label>
						<input type='text' class="form-control" name="email" />
					</div>
					<div class="mb-3">
						<label>image</label>
						<input type="file" class="form-control" name="image" />
					</div>
					<div class="mb-3">
						<label>maths</label>
						<input type="number" class="form-control" name="maths" />
					</div>
					<div class="mb-3">
						<label>science</label>
						<input type="number" class="form-control" name="science" />
					</div>
					<div class="mb-3">
						<label>sst</label>
						<input type="number" class="form-control" name="sst" />
					</div>
					<div class="mb-3">
						<label>eng</label>
						<input type="number" class="form-control" name="eng" />
					</div>
					<div class="mb-3">
						<label>hindi</label>
						<input type="number" class="form-control" name="hindi" />
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-danger" name="send" />
					</div>
				</form>


				<?php 
				if(isset($_POST['send'])){
					$name  = $_POST['name'];
					$contact  = $_POST['contact'];
					$email  = $_POST['email'];
					$science  = $_POST['science'];
					$sst  = $_POST['sst'];
					$eng  = $_POST['eng'];
					$maths  = $_POST['maths'];
					$hindi  = $_POST['hindi'];

					//image work
					$image  = $_FILES['image']['name'];
					$tmp_image = $_FILES['image']['tmp_name'];

					move_uploaded_file($tmp_image, "photos/$image");

					$query = mysqli_query($connect,"INSERT INTO students(name,contact,email,image,science,sst,eng,maths,hindi) value ('$name','$contact','$email','$image','$science','$sst','$eng','$maths','$hindi')");

					if($query){
						echo "success";
					}
					else{
						echo "fail";
					}
				}



				?>
			</div>
		</div>
	</div>

</body>
</html>