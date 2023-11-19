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
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Edit Your Profile Info
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <hr>
                <!-- <form action="../controller/updateprofinfo.php" method="post" enctype=""> -->
                <form name="profileForm" onsubmit="return validateForm()" action="../controller/updateprofinfo.php" method="post" enctype="" >

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

    <script>
        function validateForm() {
            var firstName = document.forms["profileForm"]["fname"].value;
            var lastName = document.forms["profileForm"]["lname"].value;
            var phone = document.forms["profileForm"]["phone"].value;
            var email = document.forms["profileForm"]["email"].value;
            var gender = document.forms["profileForm"]["gender"].value;
            var dob = document.forms["profileForm"]["date_of_birth"].value;

          
            if (firstName === "" || !/^[a-zA-Z]+(\s[a-zA-Z]+)?$/.test(firstName)) {
                alert("Invalid First Name");
                return false;
            }

            
            if (lastName === "" || !/^[a-zA-Z]+(\s[a-zA-Z]+)?$/.test(lastName)) {
                alert("Invalid Last Name");
                return false;
            }
            if (phone === "" || !/^[0-9]+$/.test(phone)) {
                alert("Invalid Phone Number");
                return false;
            }

            if (email === "" || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                alert("Invalid Email Address");
                return false;
            }

            if (gender === "none") {
                alert("Please select a gender");
                return false;
            }

            if (dob === "" || !/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d\d$/.test(dob)) {
                alert("Invalid Date of Birth");
                return false;
            }

            var degree = document.forms["profileForm"]["degree[]"];
            var degreeSelected = false;
            for (var i = 0; i < degree.length; i++) {
                if (degree[i].checked) {
                    degreeSelected = true;
                    break;
                }
            }
            if (!degreeSelected) {
                alert("Please select at least one degree");
                return false;
            }

            var bloodGroup = document.forms["profileForm"]["blood_group"].value;
            if (bloodGroup === "") {
                alert("Please select a blood group");
                return false;
            }

           

            return true;
        }
    </script>


</html>
