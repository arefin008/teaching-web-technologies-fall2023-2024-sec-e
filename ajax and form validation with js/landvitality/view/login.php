<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Login
                </legend>
                <form action="../controller/logincheck.php" method="post">
                <table>
                    <tr>
                        <td><label>USER ID:</label></td>
                        <td><Input type="text" name="id" placeholder="Type your Userid."></Input></td>
                    </tr>
                    <tr>
                        <td><label>PASSWORD:</label></td>
                        <td><Input type="password" name="password" placeholder="Type your password."></Input></td>
                    </tr>
                    <tr>
                        <td><label>User type:</label></td>
                        <td><input type="radio" name="usertype" value="admin">Admin
                            <input type="radio" name="usertype" value="user">User</td>
                    </tr>
                </table>
                    <input type="submit" name="submit" value="Login">
            </form><hr>
            <h3><i>Don't have an account?</i></h3>
            <a href="signup.php"><fieldset><h2><b>Sign Up</b></h2></fieldset></a>
            </fieldset>
        </center>
    </body>
</html>