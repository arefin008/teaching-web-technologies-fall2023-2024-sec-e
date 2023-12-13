<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Your Photo</title>
    <link rel="stylesheet" type="text/css" href="../asset/pp.css">
</head>
<body>
    <center>
        <form method="post" action="../controller/updateuserpp.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Upload Your Profile picture here</legend>
                <table>
                    <tr>
                        <th colspan="2" align="left">+__________________________+</th>
                    </tr>
                    <tr>
                        <td>Photo:</td>
                        <td><input type="file" name="pp"></td>
                    </tr>
                </table>
                <hr>
                <input type="submit" name="submit" value="Upload">
            </fieldset>
        </form>
    </center>
</body>
</html>
