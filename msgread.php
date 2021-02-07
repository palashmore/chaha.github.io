<table>
	<tr>
		<th>ID</th>
		<th>Massage</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Delete</th>
	</tr>
	<?php
      include "connect.php";

      $q="select * from tb_msg order by id";

      $query=mysqli_query($conn,$q);

      while($res=mysqli_fetch_array($query)){
	?>

	<tr>
		<td><?php echo $res['id']?></td>
		<td><?php echo $res['msg']?></td>
		<td><?php echo $res['name']?></td>
		<td><?php echo $res['mail']?></td>
		<td><?php echo $res['phone']?></td>
		<td><button><a href="msgdelete.php?id=<?php echo $res['id']?>">Delete</a></button></td>
	</tr>
<?php
}
?>
</table>

