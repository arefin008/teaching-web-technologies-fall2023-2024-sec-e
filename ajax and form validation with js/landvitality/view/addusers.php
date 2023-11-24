<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add users[admin]</title>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Add More users
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <a href="adminMenu.php"><fieldset>Home</fieldset></a>
                    <hr>
                <form action="../controller/addmoreusers.php" method="post" enctype="">
                <table>
                    <tr>
                        <td><label>ID :</label></td>
                        <td><input type="text" name="id" placeholder="Use Digits"></td>
                    </tr>
                    <tr>
                        <td><label>First Name :</label></td>   
                        <td><input type="text" name="fusername" placeholder="First Name"></td>
                    </tr>
                    <tr>
                        <td><label>Last Name :</label></td>
                        <td><input type="text" name="lusername" placeholder="Last Name"></td>
                    </tr>
                    <tr>
                        <td><label>Password :</label></td>
                        <td><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><label>Phone Number :</label></td>
                        <td><input type="text" name="phone" placeholder="User Digits"></td>
                    </tr>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input type="text" name="email" placeholder="email"></td>
                    </tr>
                    <tr>
                        <td><label>Gender:</label></td>
                        <td><select name="gender">
                            <option value="none">Not Selected</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>Date of birth :</label></td>
                        <td><input type="text" name="date_of_birth"></td>
                    </tr>
                    <tr>
                        <td><label>User type:</label></td>
                        <td><input type="radio" name="usertype" value="admin">Admin
                        <input type="radio" name="usertype" value="user">User</td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="ADD">
                </form>
            </fieldset>
        </center>
    </body>
</html>