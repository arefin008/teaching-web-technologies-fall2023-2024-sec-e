<html>
<head>
    <title>HTML FORM</title>
</head>
<body>
    <fieldset>
        <legend>EMAIL</legend>
       <form method="post" action="Lab-3.2.CurrentPage.php" enctype="">
    <input type="email" name="email" value="" />
    <img src="image\i.jpeg" height="15" title="Hint: sample@gmail.com"><br>
       
       
       
      
        <input type="submit" name="" value="Submit" />
        
   
    </form>

    <?php

$email=$_REQUEST['email'];

if($email =="")
{
    echo 'null value';
}
   
else{
    echo 'Email is: ',$email;
}

?>
</fieldset>
</body>
</html>