<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Solutions[admin]</title>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Add Solutions
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <a href="adminMenu.php"><fieldset>Home</fieldset></a>
                    <hr>
                <form action="../controller/addsolutionscheck.php" method="post" enctype="">
                <table>
                    <tr>
                        <td><label>SOLUTION ID :</label></td>
                        <td><input type="text" name="solutionid" placeholder="SOLUTION ID"></td>
                    </tr>
                    <tr>
                        <td><label>PROBLEM NAME :</label></td>   
                        <td><input type="text" name="pname" placeholder="PROBLEM Name"></td>
                    </tr>
                    <tr>
                        <td><label>SOLUTION:</label></td>
                        <td><input type="text" name="solution" placeholder="WIRTE SOLUTION HERE"></td>
                    </tr>
                    <tr>
                        <td><label>COST:</label></td>
                        <td><input type="text" name="cost" placeholder="COSTS"></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="ADD">
                </form>
            </fieldset>
        </center>
    </body>
</html>