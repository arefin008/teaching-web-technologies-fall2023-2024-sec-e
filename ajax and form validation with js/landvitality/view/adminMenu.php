<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Menu
        </title>
    </head>
    <body>
        <fieldset>
            <legend>
                Admin Menu
            </legend>
        <table border="1px"align="center" width="30%">
            <tr align="center" >
                <td colspan="2"><a href="adminprofile.php">View Profile</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="allusers.php">View/Edit user Profiles</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="addusers.php">Add Users</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="adminviewconsultants.php">View & Edit Consultant</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="adminviewsolutions.php">View & Edit FAQ</a></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><a href="../controller/logoutcheck.php">Logout</a></td>
            </tr>
        </table>
    </fieldset>
    </body>
</html>