<?php

session_start();
if (!isset($_SESSION['customer_login'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal Details</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php 
include 'header.php';
?>
        <div class='col-lg-3 col-sm-3 col-md-3'>
            
           <?php 
include 'customer_navbar.php';
?></div>
<div class="col-sm-9 col-lg-9 col-md-9">
             <div class="header-place">
                    <div class="header-account">
                            <center>E-banking Team is here for you..</center> 
                            <center>Welcome <?php 
echo $_SESSION['name'];
?> </center>
                    </div>
                </div>
            <br><br><br><br>
            <h3 style="text-align:center;color:#2E4372;"><u>Personal Details</u></h3>
            
            <?php 
$cust_id = $_SESSION['cust_id'];
include '_inc/dbconn.php';
$sql = "SELECT * FROM customer WHERE email='{$cust_id}'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
$rws = mysqli_fetch_array($result);
$name = $rws[1];
$account_no = $rws[0];
$dob = $rws[3];
$nominee = $rws[4];
$branch = $rws[10];
$branch_code = $rws[11];
$gender = $rws[2];
$mobile = $rws[7];
$email = $rws[8];
$address = $rws[6];
$last_login = $rws[12];
$acc_status = $rws[13];
$acc_type = $rws[5];
?>
          <div class="customer_body">
            <div class="content3">
            <p><span class="heading">Name: </span><?php 
echo $name;
?>
</p>
            <p><span class="heading">gender: </span><?php 
if ($gender == 'M') {
    echo 'Male';
} else {
    echo 'Female';
}
?>
</p>
            <p><span class="heading">Mobile: </span><?php 
echo $mobile;
?>
</p>
            <p><span class="heading">Email: </span><?php 
echo $email;
?>
</p>
            <p><span class="heading">Address: </span><?php 
echo $address;
?>
</p>
            </div>
            <div class="content4">
            <p><span class="heading">Account No: </span><?php 
echo $account_no;
?>
</p>
            <p><span class="heading">Nominee: </span><?php 
echo $nominee;
?>
</p>
            <p><span class="heading">Branch: </span><?php 
echo $branch;
?>
</p>
            <p><span class="heading">Branch Code: </span><?php 
echo $branch_code;
?>
</p>
            
            <p><span class="heading">Account Type: </span><?php 
echo $acc_type;
?>
</p>
            </div>
            </div>
        </div>
               <?php 
include 'footer.php';
?>
            
    </body>
</html>
