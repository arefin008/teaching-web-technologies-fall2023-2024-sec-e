<?php 
//echo "kaj hoytece";
require_once ('../model/dbcon.php');

$con = getConnection();

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM users WHERE uname LIKE '{$input}%' 
                                  OR    username LIKE '{$input}%' 
                                  OR   cntc LIKE '{$input}%' ";
                                  
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
    ?>
        <table border="2px" width="100%">
            <tr>
                <th align="center">EMPLOYEE NAME</th>
                <th align="center">USER NAME</th>
                <th align="center">CONTACT</th>
                <!--<th align="center">USER TYPE</th>-->
            </tr>
            
            <?php 
                while($row = mysqli_fetch_assoc($result)){
                    $name= $row['uname'];
                    $username= $row['username'];
                    $contact= $row['cntc'];

            ?>
            <tr>
                <td align="center"><?php echo $name;          ?></td>
                <td align="center"><?php echo $username;  ?></td>
                <td align="center"><?php echo $contact;   ?></td>
            </tr>
            <?php } ?>

        </table>

       <?php 
    }
    else{
        echo "<h4>No DATA FOUND!!!</h4>";
    }

    mysqli_close($con);
}
?>
