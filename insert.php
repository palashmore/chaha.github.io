
<?php
include "connect.php";

if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];


	$q="INSERT INTO `tb_form`(`id`, `fname`, `lname`, `email`, `phone`) VALUES ('','$fname','$lname','$email','$phone')";

	$qc=mysqli_query($conn,$q);
	{
	 header('location:index.php');
	}
}

if (isset($_POST['submit'])) {
	$msg=$_POST['msg'];
	$name=$_POST['name'];
	$mail=$_POST['mail'];


	$q="INSERT INTO `tb_form`(`id`, `msg`, `name`, `mail`) VALUES ('','$msg','$name','$mail')";

	$qc=mysqli_query($conn,$q);
	{
	 header('location:index.php');
	}
}
?>
