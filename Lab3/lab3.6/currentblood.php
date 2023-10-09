<html>
<head>
    <title>HTML FORM</title>
</head>
<body><fieldset>
    <legend>BLood Group</legend>
    <form method="post" action="currentblood.php" enctype="">
       
        Blood Group
            <select name="blood">
                <option value="A+">A+</option>         
                <option value="AB+">AB+</option>         
                <option value="B+">B+</option>      
                <option value="O+">O+</option>         
            </select> <br><hr>
       
        <input type="submit" name="" value="Submit" />
        
   
    </form>
    
<?php

$blood= $_REQUEST['blood'];

if($blood=="")
{
    echo "Null value";
}
else
{
    echo "Blood group is :".$blood;
}

?>
</fieldset>
</body>
</html>