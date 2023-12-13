<?php
require_once('../controller/sessioncheck.php');
require_once('../model/usermodel.php');

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    $users = getAllUsersinfo($userid);  
        //var_dump($users);
    } else {
        echo "Operation Failed!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User Profile Edit</title>
        <script type="text/javascript" src="../js/updateconfirmation.js"></script>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Edit Your Profile Info
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <hr>
                <form action="../controller/updateprofinfo.php" method="post" onsubmit="return confirmUpdate();" enctype="">
                <table>
                    <tr>
                        <td colspan="2"><label><i>Please note that no change in your ID will take effect!</i></label></td>
                    </tr>
                    <tr>
                        <td><label>ID :</label></td>
                        <td><input type="text" name="id" value="<?php echo $users[0]['userid']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>First Name :</label></td>   
                        <td><input type="text" name="fusername" value="<?php echo $users[0]['fname']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Last Name :</label></td>
                        <td><input type="text" name="lusername" value="<?php echo $users[0]['lname']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Phone Number :</label></td>
                        <td><input type="text" name="phone" value="<?php echo $users[0]['phone']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input type="text" name="email" value="<?php echo $users[0]['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender:</label></td>
                        <td>
                            <select id="gender" name="gender">
                                <option value="none" <?php echo ($users[0]['gender'] == 'none') ? 'selected' : ''; ?>>Not Selected</option>
                                <option value="male" <?php echo ($users[0]['gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
                                <option value="female" <?php echo ($users[0]['gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Date of birth :</label></td>
                        <td><input type="text" name="date_of_birth" value="<?php echo $users[0]['dob']; ?>"></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="Update">
                </form>
            </fieldset>
        </center>
    </body>
</html>
