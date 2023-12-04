<?php
require_once('../controller/allusers.php');
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
            <legend>
                All users whom are available in the system currently
            </legend>
            <table border="2px" align="center">
                <tr>
                    <th align="center">NAME</th>
                    <th align="center">PHONE</th>
                    <th align="center">EMAIL</th>
                    <th align="center">PASSWORD</th>
                </tr>
                <?php
                $userData = $allUserData['user'];
                $totalRows = $allUserData['total'];

                for ($i = 0; $i < $totalRows; $i++) {
                    echo "<tr>";
                    echo "<td align='center'>" . $userData[$i]['name'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['phone'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['email'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['pass'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
    </body>
</html>