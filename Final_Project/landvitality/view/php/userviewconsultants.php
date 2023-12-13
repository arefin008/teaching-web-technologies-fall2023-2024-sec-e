<?php
require_once('../controller/sessioncheck.php');
require_once('../controller/allconsultants.php');

//echo "<td>" . "<a href='../view/updateconsulinfo.php?userid=" . $userData[$i]['userid'] . "'>Update</a>" . "</td>";
//echo "<td>" . "<a href='../controller/deleteconsultants.php?userid=" . $userData[$i]['userid'] . "'>Delete</a>" . "</td>";
//<th align="center">Updation</th>
//<th align="center">Deletion</th>
//<td align="center"><a href="addconsultant.php"><fieldset>Add Consultants</fieldset></a></td>
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
                    <td align="center"><a href="userMenu.php"><fieldset>Home</fieldset></a></td>
                    <td align="center"><a href="../controller/logoutcheck.php"><fieldset>Log Out</fieldset></a></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>
                All consultants whom are available in the system currently
            </legend>
            <table border="2px" align="center">
                <tr>
                    <th align="center">CONSULTANT ID</th>
                    <th align="center">NAME</th>
                    <th align="center">EMAIL</th>
                    <th align="center">CONTACT</th>
                    <th align="center">SPECIALITY</th>
                    <th align="center">EXPERIENCE</th>
                    <th align="center">GENDER</th>
                </tr>
                <?php
                $userData = $allUserData['user'];
                $totalRows = $allUserData['total'];

                for ($i = 0; $i < $totalRows; $i++) {
                    echo "<tr>";
                    echo "<td align='center'>" . $userData[$i]['userid'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['cname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['email'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['phone'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['specia'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['exper'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['gender'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
    </body>
</html>