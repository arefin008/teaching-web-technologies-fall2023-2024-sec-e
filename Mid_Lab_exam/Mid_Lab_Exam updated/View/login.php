<?php
    session_start();
    print_r($_SESSION);

?>
<html>
<head>
    <title>Login</title>
</head>

<center>
	<body>
<form method="post" action="../controller/loginCheck.php" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id" value="" /><br/>                               
					Password<br/>
					<input type="password" name="password" value="" />
					<br /><hr/>
					<input type="submit" name="submit" value="Submit" />
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</body>
</center>
</html>