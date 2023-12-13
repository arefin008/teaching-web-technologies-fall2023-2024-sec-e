<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asset/user/userHome.css">
    <title>User Menu</title>
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <fieldset>
                <legend>User Menu</legend>
                <table class="menu-table">
                    <tr>
                        <td colspan="2"><a class="menu-link" href="userProfile.php">View Profile</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="usereditprof.php">Edit Profile</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="userviewconsultants.php">View Consultant</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="userviewsolutions.php">View FAQ</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="Terms.php">Terms & Conditions</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="AboutUser.php">About Us</a></td>
                    </tr>
                    <tr>
                        <td width="50%" align="center"><a class="menu-link" href="versioninfo.php">Version Info</a></td>
                        <td align="center"><a class="logout-link" href="../controller/logoutcheck.php">Logout</a></td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>
</body>
</html>
