<?php
require_once('../controller/sessioncheck.php');
//require_once('../controller/allconsultants.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            All User Profiles
        </title>
        <script type="text/javascript" src="../js/viewconsultantsUser.js"></script>
        <link rel="stylesheet" type="text/css" href="../asset/admin/allusers.css">
    </head>
    <body>
        <fieldset>
        <table width="30%" align="right">
                <tr>
                    <td align="center"><a href="userMenu.php"><fieldset>Home</fieldset></a></td>
                    <td align="center"><a href="../controller/logoutcheck.php"><fieldset>Log Out</fieldset></a></td>
                </tr>
            </table>
        </fieldset>
        <center>
            <fieldset>
                <legend>
                    Consultants available in the system currently
                </legend>
                <div id="users"></div>
            </fieldset>
        </center>
    </body>
</html>