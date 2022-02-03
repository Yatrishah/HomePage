<?php
session_start() ;
$error='';
if(isset($_SESSION['status_msg1'] ))
{
$error=($_SESSION['status_msg1']);
 // setcookie('status_msg','',time());
 unset($_SESSION['status_msg1']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css">     
    <link rel="stylesheet" type="text/css" href="../assets/css/services.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Services</title>
</head>
<body>
    <?php include 'login.php';?>
    <!------------------------------------------------------------ Navbar  --------------------------------------------------------------------------->
    <header id="navbar">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 navbar-scroll" >
      <div class="container-fluid">
        <a href="index.php">
        <img src="../assets/image/logo.png" class="navbar-brand" href="#" style="width:100px;height:70px;" 
        title="Helperland"></img></a>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal"
         data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
        <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" >
      <div class="mx-auto" style="background-color:#525252"></div>
        <ul class="navbar-nav ms-auto mb-4 mb-lg-0 " style="margin-top:  -20px;">
          <li class="nav-item">
            <a class="nav-link   Rounded-Rectangle-1  text-white" href="book-service.php" title="Book a Cleaner">Book a Cleaner</a>
          </li>
          <li class="nav-item">
            <a class="nav-link Rounded-Rectangle  text-white" href="price.php" title="Prices">Prices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  Rounded-Rectangle  text-white" href="#" title="Our Guarantee">Our Guarantee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  Rounded-Rectangle  text-white" href="" title="Blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  Rounded-Rectangle  text-white" href="contact us.php" title="Contact Us">Contact Us</a>
          </li>
          <?php
      if(!isset($_SESSION['UserId'])){?>    
            <li class="nav-item" title="Login">
                <a href="#"data-bs-toggle="modal" data-bs-target="#exampleModallogin" data-bs-dismiss="modal" class="Rounded-Rectangle-1 text-white nav-link">Login</button></a> 
            </li> 
            <?php
            }
        else{

            //echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>"; ?>
                <li class="nav-item">
                    <a class="nav-link"><div class="seprator"><div class="counter">2</div><img src="../assets/image/notification.png">
                    </div></a>
                </li>
                <li class="dropdown">
                    <button class="btn  dropdown-toggle dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                        <img src="../assets/image/login.png" alt="">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <?php echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>"; ?>                 
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item active" href="#">My Dashboard</a></li>
                        <li><a class="dropdown-item"href="#mySettings"  onclick="mySettings();" role="button" > My Settings</a></li>
                        <li><a class="dropdown-item" href="../controllers/logout.php">Logout</a></li>
                    </ul>
                </li>
        <?php
         }
?>
          <li class="nav-item">
            <a class="nav-link text-white Rounded-Rectangle-1" href="service provider(6th).php" title="Become a Helper">Become a Helper</a>
          </li>
          </li>       
      </ul>
                    
    </div>
   </div>
     
  </nav>
  </header>
    <!------------------------------------------------------------End of  Navbar  --------------------------------------------------------------------------->

    <!------------------------------------------------------------ Form  --------------------------------------------------------------------------->

<section class="banner img-fluid" id="form" style=" background:url(../assets/image/serviceprovidercoverpage.png);">
                  
    <div class="flex-container" style="justify-content: center; align-items: center;">
      <div class="hero-image" >
        <div id="form">
          <div class="form">
            <div class="text-center">
              <span >Register Now!</span>
            </div>
    <form action="<?php echo 'http://localhost/project/?controller=Home&function=serviceProviderregistration';?>"
       method="post" accept-charset="utf-8" enctype="multipart/form-data">
       <div class="row">
         <?php 
          if(!empty($error)){
       ?>
      <div class="form-row mb-3">
        <p class="text-center bg-success text-white px-4 py-2 mx-auto my-auto">
      <?php 
        echo $error;
      ?>
      </p>
      </div>
      <?php } ?>
      <div class="">
        <input class="form-control" name="firstname" placeholder="First name" type="text"
              required autofocus title="First Name" />
      </div>
     </div>
    <div class="row">
      <div class="">
        <input class="form-control" name="lastname" placeholder="Last name" type="text"
            required title="Last name " />
      </div>
    </div>
      <div class="row">
        <div class="">
          <input class="form-control" name="email" placeholder="Email Address" type="email"
              required  title="Email  Address " />
      </div>
  </div>
      <div class="row">
          <div class="">
              <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">+46</div>
                </div>
                <input type="number" class="form-control" id="inlineFormInputGroup"
                      placeholder="Phone number" title="Phone Number" name="phonenumber">
              </div>
          </div>
      </div>
      <div class="row">
          <div class="">
            <input class="form-control" name="password" placeholder="Password" type="text"
                  required autofocus title="Password  " />
          </div>
      </div>
      <div class="row">
          <div class="">
            <input class="form-control" name="cpassword" placeholder="Confirm Password" type="text"
                  required  title="Confirm Password   " />
          </div>
      </div>
      <div class="form-elements">
          <input class="form-elements-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-elements-label" for="flexCheckDefault">
              Send me newsletters from Helperland 
          </label>
      </div>
      <div class="form-elements">
          <input class="form-elements-input" type="checkbox" value="" id="flexCheckDefault1">
          <label class="form-elements-label" for="flexCheckDefault1">
              I accept <span>terms and conditions </span>&<span> privacy policy</span>
          </label> 
      </div>
      <div class="row form-elements">
          <img src="assets\layer-20.png" alt="">
      </div>    
     <div class=" text-center row" title="Get Started">
      <button name="submit" class="get-started text-center ">Get Started <img src="../assets/image/whiterightarrow.png" alt=""></button>
     </div>
    </form>
    </div>
    </div>
    </div>
    <div style="position:absolute;top: 760px;">
    <img src="../assets/image/circle_arrow.png" width="40px" height="40px" >
    </div>
</section>
    <div class="left-img">
       <img src="../assets/image/blog-left-bg.png" alt="">
    </div>
    <div class="right-img">
        <img src="../assets/image/forma-1_2.png" alt="">
        <img src="../assets/image/forma-1_5.png" alt="">
        <img src="../assets/image/forma-1_4.png" alt="">
    </div>

    <!------------------------------------------------------------ End of Form  --------------------------------------------------------------------------->

        <!------------------------------------------------------------ Body Content  --------------------------------------------------------------------------->

<section id="servicecontent">
  <p class="bodyheading" title="How it Works">How it works</p>
  <div class="bodycontent">
  <div class="section-container">
         
    <div class="columns content">
      <div class="content-container">
          <p class="bodytext1">Register yourself</h5>
          <p class="bodytext2">
            Provide your basic information to register yourself as a service provider.
          </p>
          <p class="bodytext3">
            Read more<span style="margin-left: 10px;"><img src="../assets/image/rightarrow.png"></span>
          </p>
      </div>
    </div> 
    <div class="columns image" title="Register yourself" 
    style="background-image:url('../assets/image/serviceproviderimage1.png')">
    &nbsp;
    </div>
    </div>

<div class="section-container">
  <div class="columns image" 
    title="Get service requests"style="background-image:url('../assets/image/serviceproviderimage2.png')">
      &nbsp;
  </div>
  <div class="columns content">
    <div class="content-container">
      <p class="bodytext1">Get service requests</h5>
      <p class="bodytext2">
        You will get service requests from customes depend on service area and profile.
      </p>
      <p class="bodytext3">
          Read more<span style="margin-left: 10px;"><img src="../assets/image/rightarrow.png"></span>
      </p>
        </div>
  </div>
  </div>
  <div class="section-container">
      <div class="columns content">
      <div class="content-container">
        <p class="bodytext1">Complete service</h5>
        <p class="bodytext2">
            Accept service requests from your customers and complete your work.</p>
        <p class="bodytext3">
          Read more<span style="margin-left: 10px;"><img src="../assets/image/rightarrow.png"></span>
        </p>
      </div>
    </div>
    <div class="columns image" title="Complete service" style="background-image:url('../assets/image/serviceproviderimage3.png')">
      &nbsp;
    </div>
    </div>
    </div>

     <!-- -------------------------------------------------Mail------------------------------------------------------------  -->
<section id="mail"> 
    <div class="newsletter d-flex justify-content-center  row">
      <div class="mail-heading">GET OUR NEWSLETTER</div>        
        <p class="user-input newsletter d-flex justify-content-center  ">
            <input type="mail" name="mail" placeholder="YOUR EMAIL" class="mailBox ">
            <input type="submit" value="Submit" class="submit" title="submit">
        </p>
      </div>
    </div>
  </section>
 <!-- --------------------------------------------------End of Mail------------------------------------------------------------  -->

 <!------------------------------------------------------------ End of body content  --------------------------------------------------------------------------->
<!-- --------------------------------------------------Footer ------------------------------------------------------------  -->
   
   <?php include 'footer.php';?>

 <!-- --------------------------------------------------End of Footer ------------------------------------------------------------  -->
 
  <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript">
      var nav = document.querySelector('nav');
      window.addEventListener('scroll', function () {
        if (window.pageYOffset >10) {
          nav.classList.add('bg-dark', 'shadow');
        }
         else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
</script>
</body>
</html>