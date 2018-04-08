
<?php
$conn=mysqli_connect("localhost","root","","aj");
mysqli_select_db($conn,"aj");
$select="select * from test where id='$_GET[id]'";
$result=mysqli_query($conn,$select);
while($rows=mysqli_fetch_array($result)){
?>
<!doctype html>
<head>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<label>Name</label>
			<input type="text" name="uname" value="<?php echo $rows['uname']?>"><br><br>
			<label>Age</label>
			<input type="number" name="age" value="<?php echo $rows['age']?>"><br><br>
			<label>City</label>
			<select name="city">
				<option value="cbe"<?php if($rows['city']=='cbe')echo 'selected' ?>>CBE</option>
				<option value="goa"<?php if($rows['city']=='goa')echo 'selected' ?>>goa</option>
				<option value="kerala"<?php if($rows['city']=='kerala') echo'selected' ?>>Kerala</option>
			</select><br><br>
			<label>gender</label>
			<input type="radio" name="gender" value="male"<?php if($rows['gender']=='male') echo'checked'?>>Male
			<input type="radio" name="gender" value="female"<?php if($rows['gender']=='female') echo'checked' ?>>female<br><br>
			<label>hobby</label>
			<input type="checkbox" name="hobby" value="a"<?php if($rows['hobby']=='a') echo'checked'?>>A
			<input type="checkbox" name="hobby" value="b"<?php if($rows['hobby']=='b') echo'checked' ?>>B
            <input type="checkbox" name="hobby" value="c"<?php if($rows['hobby']=='c') echo'checked' ?>>C<br>
            <br><label>Address</label><br>
            <textarea name="addr" rows="5" cols="10"><?php echo $rows['addr']?></textarea><br><br>
            <label>Image</label>
            <input type="file" name="image"><img src="<?php echo $rows['image']?>" height="50px" width="50px"><br><br>

            <input type="submit" name="submit" value="update">
            <input type="reset" value="cancel">
        </form>
    </body>
    </!DOCTYPE html>
    <?php
        }
        if(isset($_POST['submit'])){

        	$uname=isset($_POST['uname']) ? $_POST['uname'] : '';
$age=isset($_POST['age']) ? $_POST['age'] : '';

$city=isset($_POST['city']) ? $_POST['city'] : '';
$gender=isset($_POST['gender']) ? $_POST['gender'] : '';
$hobby=isset($_POST['hobby']) ? $_POST['hobby'] : '';
$address=isset($_POST['address']) ? $_POST['address'] : '';

$fname="image/";
	$name=$_FILES['image']['name'];
	$tem=$_FILES['image']['tmp_name'];
	$uid=uniqid();
	$path=pathinfo($name,PATHINFO_EXTENSION);
	$name1=$uid.".".$path;
	$fname1=$uname.$name1;
	move_uploaded_file($tem,$name1);
mysqli_query($conn,"update test set uname='$uname',age='$age',city='$city',gender='$gender',hobby='$hobby',addr='$address',image='$name1' where id='$_GET[id]'");
header("location:manage.php");
echo"updated";
}
else{
	echo"error";
}
?>
        