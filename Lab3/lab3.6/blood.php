
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