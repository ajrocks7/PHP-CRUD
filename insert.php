
<!doctype html>
<head>
	</head>
	<body>
		<form method="post" action="ins.php" enctype="multipart/form-data">
			<input type="hidden" name="id" value="">
			<label>Name</label>
			<input type="text" name="uname" value=""><br><br>
			<label>Password</label>
			<input type="Password" name="pass"><br><br>
			<label>Age</label>
			<input type="number" name="age" value=""><br><br>
			<label>City</label>
			<select name="city">
				<option value="cbe">CBE</option>
				<option value="goa">goa</option>
				<option value="kerala">Kerala</option>
			</select><br><br>
			<label>gender</label>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">female<br><br>
			<label>hobby</label>
			<input type="checkbox" name="hobby" value="a">A
			<input type="checkbox" name="hobby" value="b">B
            <input type="checkbox" name="hobby" value="c">C<br>
            <br><label>Address</label><br>
            <textarea name="addr" rows="5" cols="10"></textarea><br><br>
            <label>Image</label>
            <input type="file" name="image" value=""><br><br>
            <input type="submit" name="submit" value="save">
            <input type="reset" value="cancel">