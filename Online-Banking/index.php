<?php 
if (isset($_REQUEST['submitBtn'])) {
    include '_inc/dbconn.php';
    $username = $_REQUEST['uname'];
    //salting of password
    $salt = '@g26jQsG&nh*v';
    $password = sha1($_REQUEST['pwd'] . $salt);
    $sql = "SELECT email,password FROM customer WHERE email='{$username}' AND password='{$password}'";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    $rws = mysqli_fetch_array($result);
    $user = $rws[0];
    $pwd = $rws[1];
    if ($user == $username && $pwd == $password) {
        session_start();
        $_SESSION['customer_login'] = 1;
        $_SESSION['cust_id'] = $username;
        header('location:customer_account_summary.php');
    } else {
        header('location:index.php');
    }
}
session_start();
if (isset($_SESSION['customer_login'])) {
    header('location:customer_account_summary.php');
}
?>

<!DOCTYPE html>

<html>
    <head>
        
        <noscript><meta http-equiv="refresh" content="0;url=no-js.php"></noscript>    
        
        
        <meta charset="UTF-8">
        <title>Online Banking System</title>
        
    </head>
    <body>
        <?php include('header.php') ?>
        <div class="wrapper" style="margin-top: 15px">
          <div class="col-lg-12 col-md-12 col-sm-3">
            <div class="col-lg-3 col-sm-3 col-md-3">
              <div class="login-form-2">
                <form action='' method='POST'>
                 
                    <h3>Secure Login</h3>
                    <b style="color: black">Username:<b>
                    <div class="form-group"><input type="text" class="form-control" placeholder="Enter email" name="uname" required></div>
                    <b style="color: black">Password<b>
                    <div class="form-group"><input type="password" class="form-control" placeholder="Enter password" name="pwd" required></div>
                    <div class="form-group">
                    <input type="submit" name="submitBtn" class="btnSuccess" value="Log In" class="button"></div>
                </form>
              </div>
            </div>
        
            <div class="col-lg-9 col-sm-9 col-md-9">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <center>
                  <div class="carousel-inner">
                  <div class="item active">
                  <img src="slider3.png">
                    <div class="carousel-caption">
                      <h3>
                          </h3>
                      <p>
                        </p>
                    </div>
                  </div>
                    <!-- End Item -->
                  <div class="item">
                  <img src="slider2.png">
                    <div class="carousel-caption" style="">
                    <h3>
                        </h3>
                    <p>
                        </p>
                    </div>
                  </div>
                    <!-- End Item -->
                  <div class="item">
                  <img src="nocash.png">
                    <div class="carousel-caption">
                    <h3>
                        </h3>
                    <p>
                        </p>
                    </div>
                  </div>
                    <!-- End Item -->
                  <div class="item">
                  <img src="moneyrec.png">
                    <div class="carousel-caption">
                    <h3>
                    </h3>
                    <p>
                     </p>
                    </div>
                  </div>
                    <!-- End Item -->
                </div></center>
                <!-- End Carousel Inner -->
                <ul class="nav nav-pills nav-justified">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">Payment via Internet<small>Make easy payment for all.</small></a></li>
                  <li data-target="#myCarousel" data-slide-to="1"><a href="#">Scan & Pay<small>Pay easily at shops and restaurants.</small></a></li>
                  <li data-target="#myCarousel" data-slide-to="2"><a href="#">NO Cash<small>No need to carry cash</small></a></li>
                  <li data-target="#myCarousel" data-slide-to="3"><a href="#">Digi Wallet<small>Carry your e-wallet</small></a></li>
                </ul>
              </div>
              <!-- End Carousel -->
            </div>
          </div>
        </div>

        <div class="wrapper">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="col-sm-3 col-lg-3 col-md-3">
               <div class="pm-care">
                <img src="pm-cares-fund.jpg">
                <button class="btn"><a href="https://paytm.com/helpinghand">Donate</a></button>

               </div> 
            </div>
          </div>
          </div>    

        <div class="wrapper">
          <div class="col-md-12 col-lg-12 col-sm-12">
                   <div class="col-sm-3 col-lg-3 col-md-3">
                                                <div class="left-panel" style="position: relative;">
                <p>Our internet banking portal provides personal banking services that gives you complete control over all your banking demands online.</p>
                <h3>Features</h3>
                <ul>
                    <li>Registration for online banking</li>
                    <li>Adding Beneficiary account</li>
                    <li>Funds Transfer</li>
                    <li>Last Login record</li>
                    <li>Mini Statement</li>
                    <li>ATM and Cheque Book</li>
                    <li>Staff approval Feature</li>
                    <li>Account Statement by date</li>
                    
                    
                </ul>
              </div>
                   </div>
            <div class="col-lg-9 col-sm-9 col-md-9">
             <div class="row airtelapp-wrapper">
          <div class="col-xs-12 col-sm-6 col-md-6 pl-0 pr-0 pull-right mob-app" style="z-index: 1000"><img src="samsung-galaxy-note-edge-mountain-communications-vail-avon-eagle1_654x609px.png"></div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <h2>Your <span><img src="logo.png" height="80px" width="215px"></span> world <span>now in your pocket.</span> </h2>
            <p>Control accounts right at the palm of your hand with My Bank app.</p>
            <ul class="scan-wrap hidden-xs">
              <li><a href="http://www.airtel.in/5/qr" target="_blank"><img src="QR-Code_70x73px.png"></a></li>
              <li>Scan the code to access from your device</li>
            </ul>
            <div class="col-xs-12 col-sm-6 col-md-6 pl-0 pr-0 visible-xs" style="display:none"> <a href="#" style="display:none" class="link-arrow">SCAN CODE TO GET APP</a> </div>
          </div>
          </div>              
            </div>
            
          </div>          
        </div>  
            

            
            
            
            
                <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

$(document).ready( function() {
    $('#myCarousel').carousel({
    interval: 3000,
  });
  
  var clickEvent = false;
  $('#myCarousel').on('click', '.nav a', function() {
      clickEvent = true;
      $('.nav li').removeClass('active');
      $(this).parent().addClass('active');    
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.nav').children().length -1;
      var current = $('.nav li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.nav li').first().addClass('active');  
      }
    }
    clickEvent = false;
  });
});
</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

                    <?php 
include 'footer.php';
?>
