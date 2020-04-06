<style type="text/css">
    /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */


#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7ffaf7;
    color: #fff;
    margin-top: 10px;
    transition: all 0.3s;
}

#sidebar.active {
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar.active .sidebar-header h3, #sidebar.active .CTAs {
    display: none;
}

#sidebar.active .sidebar-header strong {
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 0.85em;
}

#sidebar.active ul li a i {
    margin-right:  0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
    text-decoration: none;
}

#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
    top: auto;
    bottom: 5px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar .sidebar-header strong {
    display: none;
    font-size: 1.8em;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    text-decoration: none;
}
#sidebar ul li a:hover {
    color: black;
    font-weight: bold;
    background: #fff;
    text-decoration: none;
}
#sidebar ul li a i {
    margin-right: 10px;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: black;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


.header-place{
    padding:15px 0px;

}

.header-account{
    padding: 15px 5px;
    background: #ffabcf;
    border: none;
    border-radius: 10px;
    margin-bottom: 5px;
    box-shadow: 3px 5px 5px rgba(0, 0, 0, 0.1);
}


.header-body{
    box-shadow: 3px 5px 5px rgba(0, 0, 0, 0.1);
    background: #6d7fcc;
    min-height: 90px;
    text-align: center;
    font-weight: bold;
    color: black;
    border-radius: 3px;
    width: auto;
    display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.3em;
  text-transform: uppercase;
}




/*MEDIA QUERIES*/
@media (max-width: 768px) {
    #sidebar {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
        margin-left: -80px !important ;
    }
    a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
        top: auto;
        bottom: 5px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }
    #sidebar.active {
        margin-left: 0 !important;
    }

    #sidebar .sidebar-header h3, #sidebar .CTAs {
        display: none;
    }

    #sidebar .sidebar-header strong {
        display: block;
    }

    #sidebar ul li a {
        padding: 20px 10px;
    }

    #sidebar ul li a span {
        font-size: 0.85em;
    }
    #sidebar ul li a i {
        margin-right:  0;
        display: block;
    }

    #sidebar ul ul a {
        padding: 10px !important;
    }

    #sidebar ul li a i {
        font-size: 1.3em;
    }
    #sidebar {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}



/*MEDIA QUERIES END*/


</style>

            <!-- Sidebar Holder -->
            <div class="col-md-3">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>MENU</h3>
                    
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                               <strong><i class="glyphicon glyphicon-align-left"></i></strong>
                                
                            </button>
                </div>

                <ul style="padding: 0px;">
                    <li>
                        <a href="index.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>

               
                   <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-money"></i>
                            Account
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                   <li><a href="customer_account_summary.php">Accounts summary</a></li>
                   <li><a href="customer_mini_statement.php">Mini statement</a></li>
                   
                   <li><a href="customer_account_statement.php">Account statement</a></li>
                 </ul>
               </li>
                
        
    
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            Funds
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="add_beneficiary.php">Add Beneficiary</a></li>
                    <li><a href="display_beneficiary.php">View added Beneficiary</a></li>
                    <li><a href="customer_transfer.php">Transfer Funds</a></li>
                   
                   </ul>
                 </li>
    
        <li style="color:black;"><a href="customer_issue_atm.php"><i class="fa fa-credit-card" aria-hidden="true"></i>ATM card/Cheque book</a></li>
        
                    
        <li>
                        <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile
                        </a>
                        <ul class="collapse list-unstyled" id="profileSubmenu">
        <li><a href="customer_personal_details.php">Personal Details</a></li>
        <li><a href="change_password_customer.php">Change Password</a></li>
                    </ul>
                  </li>
                  <li>
                        <a href="customer_logout.php">
                            <i class="glyphicon glyphicon-off"></i>
                            LogOut
                        </a>
                    </li>
    </ul>
    
               </div>
             </div>


             <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>