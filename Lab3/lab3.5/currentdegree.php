<html>
<head>
    <title>HTML FORM</title>
</head>
<body><fieldset>
    <legend>Degree</legend>
    <form method="post" action="currentdegree.php" enctype="">
       
        <input type="checkbox" name="degree" value="SSC"/> SSC 
        <input type="checkbox" name="degree" value="HSC"/> HSC 
        <input type="checkbox" name="degree" value="BSc"/> BSc <br><hr>
       
        <input type="submit" name="" value="Submit" />
        
   
    </form>
    
<?php

$degree= $_REQUEST['degree'];

if($degree=="")
{
    echo "Null value";
}
else
{
    echo "degree is :".$degree;
}

?>
</fieldset>
</body>
</html>