<?php
require_once('../controller/viewuserscheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            All User Profiles
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="../js/liveserach.js"></script>
        <script type="text/javascript" src="../js/confirmdel.js"></script>
    </head>
    <body>
        <fieldset>
            <legend>
                All users whom are available in the system currently
            </legend>
            <table border="2px" align="center">
                <tr>
                    <th align="center">EMPLOYEE NAME</th>
                    <th align="center">USER NAME</th>
                    <th align="center">CONTATC</th>
                    <th align="center">Updation</th>
                    <th align="center">Deletion</th>
                </tr>
                <?php
                $userData = $allUserData['user'];
                $totalRows = $allUserData['total'];

                for ($i = 0; $i < $totalRows; $i++) {
                    echo "<tr>";
                    echo "<td align='center'>" . $userData[$i]['uname'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['username'] . "</td>";
                    echo "<td align='center'>" . $userData[$i]['cntc'] . "</td>";
                    //echo "<td align='center'>" . $userData[$i]['email'] . "</td>";
                    echo "<td>" . "<a href='../view/updateuserinfo.php?userid=" . $userData[$i]['id'] . "'>Update</a>" . "</td>";
                    echo "<td>" . "<a href='#' onclick='confirmDelete(\"" . $userData[$i]['id'] . "\")'>Delete</a>" . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </fieldset>
        <fieldset>
            <h3>LIVE SEARCH USERS</h3>
        </fieldset>
        <fieldset>
            <legend>Live Search</legend>
            <center>
                <h3><i>SEARCH ANY USERS HERE!</i></h3>
                <input type="text" id="liv_srch" placeholder="Search by name!">
            </center>
            <div id="searchresult"> </div>
        </fieldset>
    </body>
</html>