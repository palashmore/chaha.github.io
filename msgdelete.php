<?php
include "connect.php";

$id=$_GET['id'];

$q="DELETE FROM `tb_msg` WHERE $id=id";

$query=mysqli_query($conn,$q);
header('location:msgread.php');
?>