<?php
require_once('../controller/sessioncheck.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Upload Your Photo
        </title>
    </head>
    <body>
        <center>
            <form method="post" action="../controller/updateadminpp.php" enctype="multipart/form-data">
            <fieldset>
                <legend>
                    Upload Your Profile picture here
                </legend>
                <table>
                    <tr>
                        <th colspan = "2" align="left">+__________________________+</th>
                    </tr>
                    <tr>
                        <td>Photo:</td>
                        <td><input type="file" name="pp"</td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="Upload">
            </fieldset>
        </form>
        </center>
    </body>
</html>