<?php
require_once('../model/empmodel.php');

$allUserData = getAllepmloyers();
//var_dump($userData);
//var_dump($totalRows);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            View Employers
        </title>
    </head>
    <body>
        <fieldset><a href="jportADMIN.html"><fieldset><b>HOME</b></fieldset></a></fieldset>
        <fieldset>
            <legend> Current Employers In The System</legend>

            <table border="1px solid" align="center" width="80%">
                <tr>
                    <th align="center">ID</th>
                    <th align="center">Employer Name</th>
                    <th align="center">Company Name</th>
                    <th align="center">Contact Info</th>
                    <th colspan="2" align="center">Operation</th>
                </tr>
                <?php
                $userData = $allUserData['user'];
                $totalRows = $allUserData['total'];

                for ($i = 0; $i < $totalRows; $i++) {
                    echo "<tr>";
                    echo "<td align='center'>" . $userData[$i]['id'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['uname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['comname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['cntc'] . "</td>";
                    echo "<td align='center'>" . "<a href='../view/empupdate.php?empid=" . $userData[$i]['id'] . "'>Update</a>" . "</td>";
                    echo "<td align='center'>" . "<a href='../controller/delemp.php?empid=" . $userData[$i]['id'] . "'>Delete</a>" . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
    </body>
</html>