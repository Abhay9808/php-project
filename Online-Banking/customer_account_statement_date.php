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
        <title>Account Statement</title>
        
        <link rel="stylesheet" href="newcss.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>
        <?php 
include 'header.php';
?>
<div class="col-md-3 col-sm-3 col-lg-3">

           <?php 
include 'customer_navbar.php';
?>
</div>
   <div class="col-md-9 col-sm-9 col-lg-9">
 <div class="header-place">
                    <div class="header-account">
                            <center>E-banking Team is here for you..</center> 
                            <center>Welcome <?php 
echo $_SESSION['name'];
?> </center>
                    </div>
                </div> 
    
    <h3 style="text-align:center;color:#2E4372;"><u>Account summary by Date</u></h3>
  
    
            
    <table  class="table" align="center">
                        
                        <th>Id</th>
                        <th>Transaction Date</th>
                        <th>Narration</th>
                        <th>Credit</th>
                        <th>Debit</th>
                        <th>Balance Amount</th>
                        
                        <?php 
if (isset($_REQUEST['summary_date'])) {
    $date1 = $_REQUEST['date1'];
    $date2 = $_REQUEST['date2'];
    include '_inc/dbconn.php';
    $sender_id = $_SESSION['login_id'];
    $sql = 'SELECT * FROM passbook' . $sender_id . " WHERE transactiondate BETWEEN '{$date1}' AND '{$date2}'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($rws = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $rws[0] . '</td>';
        echo '<td>' . $rws[1] . '</td>';
        echo '<td>' . $rws[8] . '</td>';
        echo '<td>' . $rws[5] . '</td>';
        echo '<td>' . $rws[6] . '</td>';
        echo '<td>' . $rws[7] . '</td>';
        echo '</tr>';
    }
}
?>
</table>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<div class="container" style="padding-top:50px;position: relative;">
<h2>Generate PDF file from MySQL Using PHP</h2>
<form class="form-inline" method="post" action="generate_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate PDF</button>
</form>
</fieldset>
</div>


    </div>
        <?php 
include 'footer.php';
?>
