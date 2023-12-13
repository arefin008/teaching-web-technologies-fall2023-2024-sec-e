<?php 
//echo "kaj hoytece";
require_once ('../model/dbcon.php');
require_once ('../controller/sessioncheck.php');

$con = getConnection();

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM solutions WHERE probname LIKE '%{$input}%'";
                                  
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
    ?>
        <table border="2px" width="100%">
            <tr>
                <th align="center">PROBLEM NAME</th>
                <th align="center">SOLUTION</th>
                <th align="center">COST</th>
            </tr>
            
            <?php 
                while($row = mysqli_fetch_assoc($result)){
                    $pname= $row['probname'];
                    $sol= $row['solution'];
                    $cost= $row['cost'];

            ?>
            <tr>
                <td align="center"><?php echo $pname; ?></td>
                <td align="center"><?php echo $sol;   ?></td>
                <td align="center"><?php echo $cost;  ?></td>
            </tr>
            <?php } ?>

        </table>

       <?php 
    }
    else{
        echo "<center><h4>No DATA FOUND!!!</h4></center>";
    }

    mysqli_close($con);
}
?>
