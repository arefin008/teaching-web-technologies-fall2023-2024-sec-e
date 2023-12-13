<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asset/admin/adminHome.css">
    <title>Admin Menu</title>
</head>
<body>
    <div class="container">
        <div class="menu-container">
            <fieldset>
                <legend>Admin Menu</legend>
                <table class="menu-table">
                    <tr>
                        <td colspan="2"><a class="menu-link" href="adminprofile.php">View Profile</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="allusers.php">View/Edit USERS</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="addusers.php">Add Users</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="livesearchADMIN.php">SEARCH USERS</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="adminviewconsultants.php">View & Edit Consultant</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="adminviewsolutions.php">View & Edit FAQ</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="menu-link" href="about.php">About Us</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a class="logout-link" href="../controller/logoutcheck.php">Logout</a></td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>
</body>
</html>
