
<html>
<head>
    <title>HTML FORM</title>
</head>
<body><fieldset>
    <legend>GENDER</legend>
    <form method="post" action="currentradio.php" enctype="">
       
    <input type="radio" name="gender" value="Male" /> Male
    <input type="radio" name="gender" value="Female" /> Female
    <input type="radio" name="gender" value="Other" /> Other <br><hr>
       
        <input type="submit" name="" value="Submit" />
        
   
    </form>
    <?php

$gender= $_REQUEST['gender'];

if($gender=="")
{
    echo "Null value";
}
else
{
    echo "Gender is :".$gender;
}

?>
</fieldset>
</body>
</html>