<?php
mysql_connect("localhost","root","");
mysql_select_db("airways");
?>
<html>
<head>
</head>
<body>
<form method="post">
Username:<br>
<input type="text" name="uname" value=""><br>
Password:<br>
<input type="password" name="pass" value=""><br>
<input type="submit" name="submit" value="log in">
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	if(empty($uname)||empty($pass)){
		echo"please enter data";
	}
	else{
		$select=mysql_query("select * from aj where uname='$uname' and pass='$pass'");
		$rows=mysql_num_rows($select);
		if($rows==1){
			header("location:welcome.php?id=$uname");
		}
		else{
			echo"invalid data";
		}
	}
}
?>