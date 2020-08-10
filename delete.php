<?php 
	$connect  = mysqli_connect('localhost','root','','resultdb') or die("fail");


	if(isset($_GET['del'])){
		$id = $_GET['del'];

		$query = mysqli_query($connect,"DELETE FROM students where id='$id'");


		echo "<script>window.open('index.php','_self')</script>";
	}
?>