<?php 
//echo "kaj hoytece";
require_once ('../model/dbcon.php');
require_once ('../controller/sessioncheck.php');

$con = getConnection();

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM users WHERE fname LIKE '{$input}%' 
                                  OR    lname LIKE '{$input}%' 
                                  OR   userid LIKE '{$input}%' ";
                                  
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
    ?>
        <table border="2px" width="100%">
            <tr>
                <th align="center">USER ID</th>
                <th align="center">FIRST NAME</th>
                <th align="center">LAST NAME</th>
                <th align="center">PHONE</th>
                <th align="center">EMAIL</th>
                <th align="center">DATE OF BIRTH</th>
                <th align="center">GENDER</th>
                <!--<th align="center">USER TYPE</th>-->
            </tr>
            
            <?php 
                while($row = mysqli_fetch_assoc($result)){
                    $id= $row['userid'];
                    $first_name= $row['fname'];
                    $last_name= $row['lname'];
                    $phone= $row['phone'];
                    $mail= $row['email'];
                    $date= $row['dob'];
                    $gend= $row['gender'];
                    //$ustype= $row['usertyo'];

            ?>
            <tr>
                <td align="center"><?php echo $id;          ?></td>
                <td align="center"><?php echo $first_name;  ?></td>
                <td align="center"><?php echo $last_name;   ?></td>
                <td align="center"><?php echo $phone;       ?></td>
                <td align="center"><?php echo $mail;        ?></td>
                <td align="center"><?php echo $date;        ?></td>
                <td align="center"><?php echo $gend;        ?></td>
            <!--<td align="center"><?php echo $ustype;      ?></td>-->
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
