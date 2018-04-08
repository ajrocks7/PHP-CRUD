<html>
<head>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>city</th>
			<th>gender</th>
			<th>hobby</th>
			<th>address</th>
			<th>image</th>
			<th>Actions</th>
		</tr>
		<tr>
			<?php
		$conn=mysqli_connect("localhost","root","","aj") or die("error is bad".mysqli_error($conn));
mysqli_select_db($conn,"aj");
$select="select *from test";
$result=mysqli_query($conn,$select);
while($rows=mysqli_fetch_array($result))
{
?>
			<td><?php echo $rows['id']?></td>
			<td><?php echo $rows['uname']?></td>
			<td><?php echo $rows['age']?></td>
			<td><?php echo $rows['city']?></td>
			<td><?php echo $rows['gender']?></td>
			<td><?php echo $rows['hobby']?></td>
			<td><?php echo $rows['addr']?></td>
			<td><img src="<?php echo $rows['image']?>" height="50px" width="50px"></td>
			<td><a href="edit.php?id=<?php echo $rows['id']?>">edit</a></td>
			<td><a href="del.php?id=<?php echo $rows['id']?>">delete</a></td>
		</tr>
<?php
}
?>
	</table>