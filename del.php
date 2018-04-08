<?php
$conn=mysqli_connect("localhost","root","") or die("Some error occurred during connection " . mysqli_error($conn));
 mysqli_select_db($conn,"aj");
 mysqli_query($conn,"delete from test where id='$_GET[id]'");
 header("location:manage.php");

?>