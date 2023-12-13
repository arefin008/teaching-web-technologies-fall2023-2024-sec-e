<?php
require_once('../controller/sessioncheck.php');
require_once('../controller/allsolutions.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            All Solutions
        </title>
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
        <fieldset>
            <legend>
                All the solutions that are available in the system currently
            </legend>
            <table border="2px" align="center">
                <tr>
                    <th align="center">SOLUTION ID</th>
                    <th align="center">PROBLEM NAME</th>
                    <th align="center">SOLUTION</th>
                    <th align="center">COSTS</th>
                    <th align="center">Updation</th>
                    <th align="center">Deletion</th>
                </tr>
                <?php
                $userData = $allUserData['user'];
                $totalRows = $allUserData['total'];

                for ($i = 0; $i < $totalRows; $i++) {
                    echo "<tr>";
                    echo "<td align='center'>" . $userData[$i]['solid'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['probname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['solution'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['cost'] . "</td>";
                    echo "<td>" . "<a href='../view/updatesolutioninfo.php?userid=" . $userData[$i]['solid'] . "'>Update</a>" . "</td>";
                    echo "<td>" . "<a href='../controller/deletesolution.php?userid=" . $userData[$i]['solid'] . "'>Delete</a>" . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
    </body>
</html>