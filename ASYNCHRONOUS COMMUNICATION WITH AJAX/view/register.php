<!DOCTYPE html>
<html>
    <head>
        <title>REGISTER PERSON</title>
        <script type="text/javascript" src="../js/regesterperson.js"></script>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <center>
        <table>
            <tr>
                <td>
            <fieldset>
                <legend>
                    ADD PERSON
                </legend>
                <form action="../controller/regcheck.php" method="post" onsubmit="return registerVal()">
                    <table>
                        <tr>
                            <td><label>NAME :</label></td>
                            <td>
                                <input type="text" name="name" id="name" placeholder="PERSON'S NAME">
                                <span id="nameError" class="error"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>PHONE :</label></td>
                            <td>
                                <input type="text" name="phone" id="phone" placeholder="PERSON'S PHONE">
                                <span id="phoneError" class="error"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>EMAIL :</label></td>   
                            <td>
                                <input type="text" name="email" id="email" placeholder="PERSON'S EMAIL">
                                <span id="emailError" class="error"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>PASSWORD :</label></td>
                            <td>
                                <input type="password" name="password" id="password" placeholder="PASSWORD">
                                <span id="passwordError" class="error"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>CONFIRM PASSWORD :</label></td>
                            <td>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="CONFIRM PASSWORD">
                                <span id="confirmPasswordError" class="error"></span>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <input type="submit" name="submit" value="REGISTER">
                </form>
            </fieldset>
        </td>
        </tr>
        </table>
        </center>

        <script type="text/javascript" src="../js/regesterperson.js"></script>
    </body>
</html>
