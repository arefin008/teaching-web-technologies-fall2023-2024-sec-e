<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            User Menu
        </title>
    </head>
    <body>
        <fieldset>
            <legend>
                User Menu
            </legend>
        <table border="1px"align="center" width="30%">
            <tr align="center" >
                <td colspan="2"><a href="userProfile.php">View Profile</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="usereditprof.php">Edit Profile</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="userviewconsultants.php">View Consultant</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="userviewsolutions.php">View FAQ</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="Terms.php">Terms & Conditions</a></td>
            </tr>
            <tr align="center" >
                <td colspan="2"><a href="About.php">About Us</a></td>
            </tr>
            <tr>
                <td width="50%" align="center"><a href="versioninfo.php">Version Info</a></td>
                <td align="center"><a href="../controller/logoutcheck.php">Logout</a></td>
            </tr>
        </table>
    </fieldset>
    </body>
</html>