<?php
mysql_connect("localhost","root","");
mysql_select_db("airways");
?>
<html>
<head>
</head>
<body>
<form method="post" enctype="multipart/form-data">

Username:<br>
<input type="text" name="uname" value=""><br>
Password:<br>
<input type="password" name="pass" value=""><br>
Address:<br>
<textarea rows="10" cols="20" name="address"></textarea><br>
City<br>
<select name="city">
<option>goa</option>
<option>kerala</option>
<option>cbe</option>
</select><br>
Course<br>
<input type="checkbox" name="course" value="B.E">B.E
<input type="checkbox" name="course" value="M.E">M.E
<input type="checkbox" name="course" value="G.E">G.E
<br>
Gender:<br>
<input type="radio" name="gend" value="male">male
<input type="radio" name="gend" value="Female">Female
<br>
Image:<br>
<input type="file" name="image"><br>
<input type="submit" name="submit" value="register">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$course=$_POST['course'];
	$gend=$_POST['gend'];
	$fname="image/";
	$name=$_FILES['image']['name'];
	$tem=$_FILES['image']['tmp_name'];
	$uid=uniqid();
	$path=pathinfo($name,PATHINFO_EXTENSION);
	$name1=$uid.".".$path;
	$fname1=$uname.$name1;
	move_uploaded_file($tem,$name1);
	mysql_query("insert into aj(uname,pass,address,city,course,gend,image)values('$uname','$pass','$address','$city','$course','$gend','$name1')");
	echo"registered";
}
?>