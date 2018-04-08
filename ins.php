<?php
$conn=mysqli_connect("localhost","root","","aj") or die("error is bad".mysqli_error($conn));
mysqli_select_db($conn,"aj");

if(isset($_POST['submit'])){

	$uname=isset($_POST['uname']) ? $_POST['uname'] :'';
	$pass=isset($_POST['pass']) ? $_POST['pass'] :'';
	$age=isset($_POST['age']) ? $_POST['age'] :'';
	$city=isset($_POST['city']) ? $_POST['city']:'';
	$gender=isset($_POST['gender']) ? $_POST['gender']:'';
	$hobby=isset($_POST['hobby']) ? $_POST['hobby']:'';
	$addr=isset($_POST['addr']) ? $_POST['addr']:'';
	$fname="/test";
	$name=$_FILES['image']['name'];
	$tem=$_FILES['image']['tmp_name'];
	$uid=uniqid();
	$path=pathinfo($name,PATHINFO_EXTENSION);
	$name1=$uid.".".$path;
	$fname1=$uname.$name1;
	move_uploaded_file($tem,$name1);
mysqli_query($conn,"insert into test(uname,pass,age,city,gender,hobby,addr,image)values('$uname','$pass','$age','$city','$gender','$hobby','$addr','$name1')");


echo"added successfully";
header("location:manage.php");

}
else{
	echo"error";
}
?>


