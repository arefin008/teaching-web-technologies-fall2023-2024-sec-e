<?php
require_once('../controller/sessioncheck.php');
require_once('../controller/userProfilecheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            View Profile
        </title>
    </head>
    <body>
        <fieldset>
            <h3> ADMIN PROFILE</h3>
            <table width="20%" align="right">
                <tr>
                    <td align="center"><a href="adminMenu.php"><fieldset>Home</fieldset></a></td>
                    <td align="center"><a href="../controller/logoutcheck.php"><fieldset>Log Out</fieldset></a></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Your Profile</legend>
            <table width="100%">
                <tr>
                    <td>
                        User ID:
                    </td>
                    <td>
                        <fieldset> <?php echo" ".$_SESSION['userid'] ?></fieldset>
                    </td>
                    <td rowspan="7" align="center">
                    <fieldset>
                        <img src="<?php echo $users[0]['pp']; ?>" height='200px' width='150px'>
                        <hr>
                        <a href="uploadadminpp.php">Edit Profile Picture</a>
                    </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <fieldset><?php echo $users[0]['fname'] . ' ' . $users[0]['lname']; ?></fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <fieldset><?php echo $users[0]['email']; ?></fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                       <fieldset><?php echo $users[0]['phone']; ?></fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth
                    </td>
                    <td>
                        <fieldset><?php echo $users[0]['dob']; ?></fieldset> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                        <fieldset><?php echo $users[0]['gender']; ?></fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        User type:
                    </td>
                    <td>
                       <fieldset><?php echo $users[0]['usertyp']; ?></fieldset>
                    </td>
                </tr>
            </table>
            <hr>
            <a href="usereditprof.php"><fieldset align="center"><h4>Edit</h4></fieldset></a>
        </fieldset>
    </body>
</html>