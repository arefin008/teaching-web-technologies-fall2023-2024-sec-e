<?php
require_once('../model/empmodel.php');

if (isset($_GET['empid'])) {   
    $id = $_GET['empid'];
    $users = getAllemp($id);  
        //var_dump($users);
    } else {
        echo "Operation Failed!";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Employee
        </title>
    </head>
    <body>
    <fieldset><a href="jportADMIN.html"><fieldset><b>HOME</b></fieldset></a></fieldset>
        <fieldset>
            <legend>
                Update Employee Informatons
            </legend>
            <center>
                <form action="../controller/upempcheck.php" method="post" enctype="">
                    <h3><b><i>NAME</i></b></h3>
                    <br>
                    <input typer="text" name="name" value="<?php echo $users[0]['uname']; ?>">
                    <hr>
                    <h3><b><i>Company Name</i></b></h3>
                    <br>
                    <input typer="text" name="cname" value="<?php echo $users[0]['comname']; ?>">
                    <hr>
                    <h3><b><i>Contact</i></b></h3>
                    <br>
                    <input typer="text" name="cont" value="<?php echo $users[0]['cntc']; ?>">
                    <hr>
                    <input type="hidden" name="empid" value="<?php echo $users[0]['id']; ?>">
                    <input type="submit" name="submit" value="UPDATE">
                </form>
            </center>
        </fieldset>
    </body>
</html>