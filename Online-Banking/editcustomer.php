<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header('location:adminlogin.php');
}
?>
<?php
include '_inc/dbconn.php';
$id = mysqli_real_escape_string($link, $_REQUEST['staff_id']);
$sql = "SELECT * FROM `customer` WHERE id={$id}";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
$rws = mysqli_fetch_array($result);
$delete_id = mysqli_real_escape_string($link, $_REQUEST['customer_id']);
if (isset($_REQUEST['submit2_id'])) {
    $sql_delete = "DELETE FROM `customer` WHERE `id` = '{$delete_id}'";
    $sql_drop = 'DROP TABLE passbook' . $delete_id;
    mysqli_query($link, $sql_delete) or die(mysqli_error($link));
    mysqli_query($link, $sql_drop) or die(mysqli_error($link));
    header('location:delete_customer.php');
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="newcss.css"/>
        
        <title>Customer editing</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <?php 
include 'header.php';
?>
        <div class='col-md-3 col-sm-3 col-lg-3'>
    <?php 
include 'admin_navbar.php';
?></div>
          <div class='col-md-3 col-sm-3 col-lg-3'>
                <div class='addstaff'>
                <form action="alter_customer.php" method="POST">
            <table class="table" align="center">
                                <input type="hidden" name="current_id" value="<?php 
echo $id;
?>
"/>
                 <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Edit Customer Details</u></h3></td></tr>
                <tr>
                    <td>Customer's name</td>
                    <td><input type="text" name="edit_name" value="<?php echo $rws[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>Branch</td>
                    <td>
                        <select name="edit_account">
                            <option <?php if ($rws[9] == 'DELHI') {echo 'selected';}?>>
                               DELHI
                            </option>
                            <option <?php if ($rws[9] == 'KOLKATA') {echo 'selected';}?>>
                                KOLKATA
                            </option>
                            <option <?php if ($rws[9] == 'BANGALORE') {echo 'selected';}?>>
                                BANGALORE
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        M<input type="radio" name="edit_gender" value="M" <?php if ($rws[2] == 'M') {echo 'checked';}?>/>
                        F<input type="radio" name="edit_gender" value="F" <?php if ($rws[2] == 'F') {echo 'checked';}?>/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="edit_dob" value="<?php 
echo $rws[3];
?>
"/>
                    </td>
                </tr>
                <tr>
                    <td>Nominee</td>
                    <td><input type="text" name="edit_nominee" value="<?php echo $rws[4];?>" required=""/></td>
                </tr>
                <tr>
                    <td>account type</td>
                    <td>
                        <select name="edit_account">
                            <option <?php if ($rws[5] == 'savings') {echo 'selected';}?>>
                               Savings
                            </option>
                            <option <?php if ($rws[5] == 'current') {echo 'selected';}?>>
                                Current
                            </option>
                        </select>
                    </td>
                </tr>
                
                                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="edit_address"><?php echo $rws[6];?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>mobile</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[7];?>" required=""/></td>
                </tr>

                <tr>
                    <td>email id</td>
                    <td><input type="text" name="edit_mobile" value="<?php echo $rws[8];?>" required=""/></td>
                </tr>
                
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="alter_customer" value="UPDATE DATA" class='btn btn-primary'/></td>
                </tr>
            </table>
        </form>
                
        </div>
        </div>
                
           
    </body>
</html>

