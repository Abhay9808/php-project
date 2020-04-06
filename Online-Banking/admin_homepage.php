<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Homepage</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class="col-md-3 col-sm-3 col-lg-3"> 
           <?php include 'admin_navbar.php'?>
       </div>
            <div class="col-md-9 col-sm-9 col-lg-9"> 
            
             <div class="header-place">
                    <div class="header-account">
                            <center>E-banking Team is here for you..</center> 
                            <center>Welcome Admin</center>
                    </div>
                </div>
                <div class="admin_staff">
                    <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="header-body" style="background:linear-gradient(-225deg,rgba(23, 13, 177, 0.55) 35%,rgba(236, 50, 87, 0.56) 100%) !important;">
                            <ul>
                    <li><b><u>Staff</u></b></li>
       <li> <a href="addstaff.php">Add staff member</a></li>
        <li><a href="display_staff.php">Edit staff member</a></li>
        <li> <a href="delete_staff.php">Delete staff</a></li>
        </ul>
                    </div>
                </div>
                
        </div>
            <div class='admin_customer'>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="header-body" style="background:linear-gradient(-225deg,rgba(23, 13, 177, 0.55) 35%,rgba(236, 50, 87, 0.56) 100%) !important;">
                <ul>
                   <li><b><u> Customer</u></b></li>
        <li><a href="addcustomer.php">Add Customer</a></li>
       <li> <a href="display_customer.php">Edit customer</a></li>
       <li> <a href="delete_customer.php">Delete customer</a></li></ul>
        </div>
        </div>
    </div>
</div>
        <?php include 'footer.php';?>
    </body>
</html>