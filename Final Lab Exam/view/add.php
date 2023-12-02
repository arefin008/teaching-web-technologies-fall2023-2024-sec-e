<!DOCTYPE html>
<html>
    <head>
        <title>REGISTER EMPLOYEE</title>
        <script type="text/javascript" src="../js/regemp.js"></script>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    ADD EMPLOYEE
                </legend>
                    <form action="../controller/registration_emp.php" method="post" onsubmit="return regval()">
                <table>
                    <tr>
                        <td><label>EMPLOYEE NAME :</label></td>
                        <td><input type="text" name="name" id="name" placeholder="EMPLOYEE NAME"></td>
                    </tr>
                    <tr>
                        <td><label>USER NAME :</label></td>   
                        <td><input type="text" name="username" id="username" placeholder="USERNAME"></td>
                    </tr>
                    <tr>
                        <td><label>CONTACT :</label></td>
                        <td><input type="text" name="contact" id="contact" placeholder="CONTACT"></td>
                    </tr>
                    <tr>
                        <td><label>Password :</label></td>
                        <td><input type="password" name="password" id="password" placeholder="PASSWORD"></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="ADD EMPLOYEE">
                </form>
            </fieldset>
        </center>
    </body>
</html>