<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Consultant[admin]</title>
        <script type="text/javascript">
     function validateConsultantForm() {
    let id = document.getElementById('id').value;
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let speciality = document.getElementById('speciality').value;
    let exp = document.getElementById('exp').value;
    let gender = document.getElementById('gender').value;

    if (id === "" || name === "" || phone === "" || email === "" || speciality === "" ||exp === "" || gender === "none") {
        alert("Please fill out all fields.");
        return false;
    }
    else{
        alert("Successfull");
        return true;
    }
}
        </script>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Add Consultants
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <a href="About.php"><fieldset>About</fieldset></a>
                    <hr>

                <form action="../controller/addconsultants.php" method="post"  onsubmit="return validateConsultantForm()">
                <table>
                    <tr>
                        <td><label>CONSULTANT ID :</label></td>
                        <td><input type="text" id="id" name="id" placeholder="Use Digits"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT NAME :</label></td>   
                        <td><input type="text"id="name" name="name" placeholder="Consultants Name"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT PHONE:</label></td>
                        <td><input type="text" id="phone" name="phone" placeholder="Consultants Digits"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT EMAIL :</label></td>
                        <td><input type="text"id ="email" name="email" placeholder="email"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT SPECIALITY :</label></td>
                        <td><input type="text"id="speciality" name="speciality" placeholder="Speciality"></td>
                    </tr>
                    <tr>
                        <td><label>CONSULTANT'S EXPERIENCE:</label></td>
                        <td><input type="NUMBER"id="exp" name="exp" placeholder="Experience in Years"></td>
                    </tr>
                    <tr>
                        <td><label>Gender:</label></td>
                        <td><select id= "gender" name="gender">
                            <option value="none">Not Selected</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="ADD">
                </form>
            </fieldset>
        </center>
    </body>
</html>