<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
        <script type="text/javascript" src="../js/loginvalidation.js"></script>
    </head>
    <body>
        <center>
            <table>
                    <tr>
                        <td>
            <fieldset>
                <legend>
                    Login
                </legend>
                <form action="../controller/logincheck.php" method="post" onsubmit="return loginval()">
                
                        <label>EMAIL ID:</label>
                        <Input type="text" name="email" id="email" placeholder="Type your EMAIL ID."><br><br>
                    
                    
                        <label>PASSWORD:</label>
                        <Input type="password" name="password" id="password" placeholder="Type your PASSWORD."><br><br>
                        <center><input type="submit" name="submit" value="Login"><br><br><center>
                        Don't have an account?
                        <a href="register.php"><b>REGISTRETION</b></a>
                        </td>
                    </tr>
                    
                 </table>
                    
            </form>
            
            </fieldset>
        </center>
    </body>
</html>