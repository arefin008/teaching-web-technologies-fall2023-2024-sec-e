<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
<center>
<form method="post" action="../controller/signupcheck.php" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="number" name="id" value="" /><br/>
					Password<br/><input type="password" name="password" value="" /><br/>
					Confirm Password<br/><input type="password" name="password" value="" /><br/>
					Name<br/><input type="text" name="username" value="" /><br/>
					User Type<hr/>
					<input type="radio" />User
					<input type="radio" />Admin
					<hr/>
					<input type="submit" name="submit" value="Submit" />
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>