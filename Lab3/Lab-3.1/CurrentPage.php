<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <fieldset>
        <legend>NAME</legend>
    <form method="post" action="CurrentPage.php" enctype="">
      
       
        <input type="text" name="name" value="" /> <br><hr>
        
        
        <input type="submit" name="" value="Submit" />
        
   
    </form>

    <?php

$name=$_REQUEST['name'];

if($name =="")
{
    echo 'null value';
}
   
else{
    echo 'Name is:',$name;
}

?>
 </fieldset>
</body>
</html>