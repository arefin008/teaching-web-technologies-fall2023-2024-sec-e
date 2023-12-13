<?php
require_once('../controller/sessioncheck.php');
//require_once('../controller/allsolutions.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            All Solutions
        </title>
        <link rel="stylesheet" type="text/css" href="../asset/admin/allusers.css">
        <script type="text/javascript" src="../js/viewsolutionsAdmin.js"></script>
    </head>
    <body>
        <fieldset>
        <table width="30%" align="right">
                <tr>
                    <td align="center"><a href="addsolutions.php"><fieldset>Add Solutions</fieldset></a></td>
                    <td align="center"><a href="adminMenu.php"><fieldset>Home</fieldset></a></td>
                    <td align="center"><a href="../controller/logoutcheck.php"><fieldset>Log Out</fieldset></a></td>
                </tr>
            </table>
        </fieldset>
            <center>
                <fieldset>
                <legend>
                    Solutions available in the system currently
                </legend> 
                    <div id="solutions"></div>
                </fieldset>
            </center>
    </body>
</html>