<?php
session_start();
if (!isset($_SESSION['staff_login'])) {
    header('location:staff_login.php');
}
?>
 <?php 
$staff_id = $_SESSION['staff_id'];
include '_inc/dbconn.php';
$sql = "SELECT * FROM staff WHERE email='{$staff_id}'";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
$rws = mysqli_fetch_array($result);
$id = $rws[0];
$name = $rws[1];
$dob = $rws[2];
$department = $rws[4];
$doj = $rws[5];
$mobile = $rws[7];
$email = $rws[8];
$gender = $rws[10];
$last_login = $rws[11];
$_SESSION['login_id'] = $email;
$_SESSION['name1'] = $name;
$_SESSION['id'] = $id;
?>
            
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Home</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php 
include 'header.php';
?>
        <div class="col-sm-3 col-md-3 col-lg-3">
            
           <?php 
include 'staff_navbar.php';
?></div>
            <div class="col-md-9 col-sm-9 col-lg-9">
 <div class="header-place">
                    <div class="header-account">
                            <center>E-banking Team is here for you..</center> 
                            <center>Welcome <?php 
echo $_SESSION['name'];
?> </center>
                    </div>
                </div> 
    
            
           
            <div class="customer_body">
             <div class="content1">
                <p><span class="heading">Name: </span><?php 
echo $name;
?>
</p>
            <p><span class="heading">Department: </span><?php 
echo $department;
?>
</p>
            <p><span class="heading">Email: </span><?php 
echo $email;
?>
</p>
            </div>
             <div class="content2">
            <p><span class="heading">DOJ: </span><?php 
echo $doj;
?>
</p>
            <p><span class="heading">Last Login: </span><?php 
echo $last_login;
?>
</p>
            </div>
            </div>
        </div>
        
    <?php 
include 'footer.php';
$date1 = date('Y-m-d H:i:s');
$_SESSION['staff_date'] = $date1;
?>
