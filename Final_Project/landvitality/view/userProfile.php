<?php
require_once('../controller/sessioncheck.php');
require_once('../controller/userProfilecheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asset/user/userProfile.css">
    <title>View Profile</title>
</head>
<body>
    <div class="container">
        <header>
            <a class="menu-link" href="userMenu.php">Home</a>
            <a class="menu-link" href="../controller/logoutcheck.php">Log Out</a>
        </header>
        <div class="profile-container">
            <fieldset>
                <legend>Your Profile</legend>
                <table class="profile-info" width="100%">
                    <tr>
                        <td>User ID:</td>
                        <td><?php echo" ".$_SESSION['userid'] ?></td>
                        <td rowspan="7" class="profile-image">
                            <img src="<?php echo $users[0]['pp']; ?>" alt="Profile Picture">
                            <hr>
                            <a class="edit-link" href="uploaduserpp.php">Edit Profile Picture</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $users[0]['fname'] . ' ' . $users[0]['lname']; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $users[0]['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><?php echo $users[0]['phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth:</td>
                        <td><?php echo $users[0]['dob']; ?></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><?php echo $users[0]['gender']; ?></td>
                    </tr>
                    <tr>
                        <td>User type:</td>
                        <td><?php echo $users[0]['usertyp']; ?></td>
                    </tr>
                </table>
                <hr>
                <a href="usereditprof.php" class="edit-link"><fieldset align="center"><h4>Edit</h4></fieldset></a>
            </fieldset>
        </div>
    </div>
</body>
</html>
