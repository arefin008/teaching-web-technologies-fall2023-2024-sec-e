<?php
require_once('../controller/sessioncheck.php');
//require_once('../controller/alluserscheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>All User Profiles</title>
    <script type="text/javascript" src="../js/viewusers.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/admin/allusers.css">
</head>
<body>
    <fieldset>
        <table width="30%" align="right">
            <tr>
                <td align="center"><a href="addusers.php"><fieldset>Add More Users</fieldset></a></td>
                <td align="center"><a href="adminMenu.php"><fieldset>Home</fieldset></a></td>
                <td align="center"><a href="../controller/logoutcheck.php"><fieldset>Log Out</fieldset></a></td>
            </tr>
        </table>
    </fieldset>
    <center> 
        <fieldset>
            <legend>Users available in the system currently</legend>
            <div id="users"></div>
        </fieldset>
    </center>
</body>
</html>
