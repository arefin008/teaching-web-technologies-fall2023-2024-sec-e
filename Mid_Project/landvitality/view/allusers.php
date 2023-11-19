<?php
require_once('../controller/sessioncheck.php');
require_once('../controller/alluserscheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            All User Profiles
        </title>
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
        <fieldset>
            <legend>
                All users whom are available in the system currently
            </legend>
            <table border="2px" align="center">
                <tr>
                    <th align="center">User ID</th>
                    <th align="center">Profile Picture</th>
                    <th align="center">First Name</th>
                    <th align="center">Last Name</th>
                    <th align="center">Email</th>
                    <th align="center">Phone Number</th>
                    <th align="center">Date Of Birth</th>
                    <th align="center">Gender</th>
                    <th align="center">User Typer</th>
                    <th align="center">Updation</th>
                    <th align="center">Deletion</th>
                </tr>
                <?php
                $userData = $allUserData['user'];
                $totalRows = $allUserData['total'];

                for ($i = 0; $i < $totalRows; $i++) {
                    echo "<tr>";
                    echo "<td align='center'>" . $userData[$i]['userid'] . "</td>";
                    echo "<td align='center'><img src='" . $userData[$i]['pp'] . "' height='100px' width='70px'></td>";
                    echo "<td align='center'>" . $userData[$i]['fname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['lname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['email'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['phone'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['dob'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['gender'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['usertyp'] . "</td>";
                    echo "<td>" . "<a href='../view/updateuserinfo.php?userid=" . $userData[$i]['userid'] . "'>Update</a>" . "</td>";
                    echo "<td>" . "<a href='../controller/deleteusers.php?userid=" . $userData[$i]['userid'] . "'>Delete</a>" . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
    </body>
</html>