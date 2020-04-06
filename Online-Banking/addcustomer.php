<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');  
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Customer</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
<?php include 'header.php'; ?>
<div class="col-md-3 col-sm-3 col-lg-3"> 
    <?php include 'admin_navbar.php'?>
  </div>  
            <div class="col-md-9 col-sm-9 col-lg-9"> 
            
             <div class="header-place">
                    <div class="header-account">
                            <center>E-banking Team is here for you..</center> 
                            <center>Welcome Admin </center>
                    </div>
                </div> 

<form action="add_customer.php" method="POST">
            <table class="table" align="center">
                <tr><td colspan='2' align='center' style='color:#2E4372;'><h3><u>Add Customer</u></h3></td></tr>
                <tr>
                    <td> Customer's name</td>
                    <td><input class="form-control" type="text" name="customer_name" required=""/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        M<input  type="radio" name="customer_gender" value="M" checked/>
                        F<input  type="radio" name="customer_gender" value="F" />
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input class="form-control" type="date" name="customer_dob" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>Nominee</td>
                    <td><input class="form-control" type="text" name="customer_nominee" required=""/></td>
                </tr>
                <tr>
                    <td>
                        Branch
                    </td>
                    <td>
                        <select name="branch">
                            <option>KOLKATA</option>
                            <option>DELHI</option>
                            <option>BANGALORE</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Account class="form-control" type</td>
                    <td>
                        <select name="customer_account">
                            <option>savings</option>
                            <option>current</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Minimum amount</td>
                    <td><input class="form-control" type="text" name="initial" value="1000" min="1000" required=""/></td>
                </tr>
                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="customer_address" required=""></textarea></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input class="form-control" type="text" name="customer_mobile" required=""/></td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input class="form-control" type="email" name="customer_email" required=""/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input class="form-control" type="password" name="customer_pwd" required=""/></td>
                </tr>
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input  type="submit" name="add_customer" value="Add Customer" class="btn btn-Success"/></td>
                </tr>
            </table>
            </div>
    </div>
        </form>
<?php include 'footer.php';?>
    </body>
</html>