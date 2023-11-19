<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Consultant[admin]</title>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Add Consultants
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <a href="About.php"><fieldset>About</fieldset></a>
                    <hr>
                <form action="../controller/addconsultants.php" method="post" enctype="">
                <table>
                    <tr>
                        <td><label>CONSULTANT ID :</label></td>
                        <td><input type="text" name="id" placeholder="Use Digits"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT NAME :</label></td>   
                        <td><input type="text" name="name" placeholder="Consultants Name"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT PHONE:</label></td>
                        <td><input type="text" name="phone" placeholder="Consultants Digits"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT EMAIL :</label></td>
                        <td><input type="text" name="email" placeholder="email"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT SPECIALITY :</label></td>
                        <td><input type="text" name="speciality" placeholder="Speciality"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT'S EXPERIENCE:</label></td>
                        <td><input type="NUMBER" name="exp" placeholder="Experience in Years"></td>
                    </tr>
                    <tr>
                        <td><label>Gender:</label></td>
                        <td><select name="gender">
                            <option value="none">Not Selected</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="ADD">
                </form>
            </fieldset>
        </center>
    </body>
</html>