<!DOCTYPE html>
<html>
<head>
    <title>
        Home
    </title>
</head>
<body>
<fieldset><a href="jportADMIN.html"><fieldset><b>HOME</b></fieldset></a></fieldset>
    <fieldset>
        <legend>
            Add Employer[ADMIN]
        </legend>
        <center>
            <form method="post" action="addemp.php" enctype="">
        <table>
            <tr>
                <td>Employee Name:</td>
                <td> <input type="text" name="name" placeholder="Employee Name"> </td>
            </tr>
            <tr>
                <td>Company Name:</td>
                <td><input type="text" name="cname" placeholder="Company Name"></td>
            </tr>
            <tr>
                <td>Contact NO:</td>
                <td><input type="text" name="cont" placeholder="Contact"> </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" placeholder="Password"></td>
            </tr>
        </table>
        <hr><input type="submit" name="submit" value="ADD EMPLOYEE">
    </form>
    </center>
    </fieldset>

</body>

</html>