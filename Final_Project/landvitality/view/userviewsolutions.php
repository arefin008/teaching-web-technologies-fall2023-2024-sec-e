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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/solsearchUser.js"></script>
        <script type="text/javascript" src="../js/viewsolutionsUser.js"></script>
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
                    Solutions available in the system currently
                </legend>
                <fieldset>
                    <center>
                        <h3><i>SEARCH WHAT YOU ARE LOOKING FOR</i></h3>
                        <input type="text" id="solsh" placeholder="Search Here!">
                    </center>
                    <div id="solsearch"></div>
                </fieldset>
                <div id="solutions"></div>
            </fieldset>
        </center>
    </body>
</html>