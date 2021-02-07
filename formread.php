<table>
	<tr>
		<th>ID</th>
		<th>FName</th>
		<th>LName</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<?php
      include "connect.php";

      $q="select * from tb_form order by id";

      $query=mysqli_query($conn,$q);

      while($res=mysqli_fetch_array($query)){
	?>

	<tr>
		<td><?php echo $res['id']?></td>
		<td><?php echo $res['fname']?></td>
		<td><?php echo $res['lname']?></td>
		<td><?php echo $res['email']?></td>
		<td><?php echo $res['phone']?></td>
		<td><button><a href="update.php?id=<?php echo $res['id']?>">Update</a></button></td>
		<td><button><a href="delete.php?id=<?php echo $res['id']?>">Delete</a></button></td>
	</tr>
<?php
}
?>
</table>
<!-- <button><a href="insert.php?id=<?php echo $res['id']?>">Insert</a></button> -->
