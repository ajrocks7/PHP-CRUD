<?php
mysql_connect("localhost","root","");
mysql_select_db("airways");

?>
<html>
<head></head>
<body>
<table border='1' height='150px' width='100px'>
<tr>
<th>Username</th>
<th>password</th>
<th>address</th>
<th>city</th>
<th>course</th>
<th>gender</th>
<th>image</th>
</tr>
<?php
 $select=mysql_query("select * from aj where uname='".$_GET["id"]."'");
while($rows=mysql_fetch_array($select))
{
	?>
	<tr>
	
	<td><?php echo $rows['uname']?></td>
	<td><?php echo $rows['pass']?></td>
	<td><?php echo $rows['address']?></td>
	<td><?php echo $rows['city']?></td>
	<td><?php echo $rows['course']?></td>
	<td><?php echo $rows['gend']?></td>
	<td><img src="<?php echo $rows['image']?>" width='150px' height='150px'></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>