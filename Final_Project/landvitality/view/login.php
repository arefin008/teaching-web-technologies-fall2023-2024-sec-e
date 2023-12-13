<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../asset/login.css">
    <script type="text/javascript" src="../js/loginval.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h1>LAND VITALITY<br>MANAGEMENT</h1>
            <hr>
            <h2>Login</h2>
            <form action="../controller/logincheck.php" method="post" onsubmit="return loginval()">
                <label for="usid">User ID:</label>
                <input type="text" name="id" id="usid" placeholder="Type your Userid.">

                <label for="uspass">Password:</label>
                <input type="password" name="password" id="uspass" placeholder="Type your password.">

                <label>User type:</label>
                <input type="radio" name="usertype" value="admin">Admin
                <input type="radio" name="usertype" value="user">User

                <input type="submit" name="submit" value="Login">
            </form>
            <hr>
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</body>

</html>
