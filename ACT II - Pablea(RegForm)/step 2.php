<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Step 2</title>
</head>
<body>
	<center><table border="8">
		<form action="step 3.php" method="GET">
			<h1>Student Registration Form (Step 2 of 6)</h1>
			<tr>
				<td id="name">Firstname</td>
				<td id="name">Middlename</td>
				<td id="name">Lastname</td>
			</tr>
			<tr>
				<td><input type="textbox" size="25" autofocus name="firstname" id="namespace"></td>
				<td><input type="textbox" size="25" autofocus name="middlename" id="namespace"></td>
				<td><input type="textbox" size="25" autofocus name="lastname" id="namespace"></td>
			</tr>
			<tr>
				<td id="name">Gender</td>
				<td id="pabz"><center><input type="radio" name="gender" value="Male">Male</center></td>
				<td id="pabz"><center><input type="radio" name="gender" value="Female">Female</center></td>
			</tr>
			<tr>
				<td colspan="3">
					<pre><center><a href="step 1.php">Back</a>		<input type="submit" id="ck" value="Next Step"></center></pre>
				</td>
			</tr>
		</form>
	</table>
</body>
</html>