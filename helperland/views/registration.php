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
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/registration.css">    
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css"> 
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <?php include '../views/include/header_css.php';?>

    <title>Registration</title>
</head>
<body>

    <?php include '../views/include/login.php';?>
    <?php include '../views/include/header.php';?>

  <!------------------------------------------------------------ Form  --------------------------------------------------------------------------->

<section class="banner img-fluid">
                  
    <div class="flex-container" style="justify-content: center; align-items: center;">
        <div class="hero-image" >
                <div id="form">
                    <div class="form">
                        <div class="text-center" title="Create  an Account  " style="margin-top:-100px">
                            <span >Create an Account</span>
                        </div>
                    <div>
                    <div style="text-align: center;">
                        <div class="lineLeft"></div>
                             <img src="../assets/image/faqstar.png" class="starfaq">
                        <div class="lineRight"></div>
                    </div>
    <form  action="<?php echo 'http://localhost/project/?controller=Home&function=customerregistration';?>"
            method="post" accept-charset="utf-8" enctype="multipart/form-data">
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

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                <input class="form-control" name="firstname" placeholder="First name" type="text"
                required autofocus title="First Name" />

            </div>
             <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 15px;">
                <input class="form-control" name="lastname" placeholder="Last name" type="text"
                required title="Last Name" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6"  style="padding-bottom: 15px;">
                <input class="form-control" name="email" placeholder="Email Address" type="email"
                    required title="Email Address   " />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6"  style="padding-bottom:15px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">+46</div>
                    </div>
                    <input type="number" class="form-control" id="inlineFormInputGroup"
                    placeholder="Phone number" title="Phone number" name="phonenumber">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6"  style="padding-bottom: 15px;">
                <input class="form-control" name="password" placeholder="Password" type="text"
                required autofocus />
            </div>

            <input class="form-control" name="cpassword" placeholder="Confirm Password" type="text"
                 required title="Confirm Password " />
            </div>
         </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">
                Yes, I would like to subscribe to the newsletter of Helperland GmbH with vouchers, trends,
                promotions and individualized offers. I can unsubscribe from the newsletter at any time in
                the newsletter and in the customer account itself.
            </label>
        </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" required>
            <label class="form-check-label" for="flexCheckDefault1">
            I agree with the <a href="#">terms and conditions</a> of Helperland GmbH.
            </label>
        </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" required>
            <label class="form-check-label" for="flexCheckDefault2">
                I have read the <a href="#">privacy policy </a>
            </label>
        </div>
        <div class=" row" title="Login Now">
            <button name="submit" class="get-started text-center ">Get Started 
                <img src="../assets/image/whiterightarrow.png" alt=""></button>
                 <p>Already registered? <a href="#" data-bs-toggle="modal"
                data-bs-target="#exampleModallogin">Login now</a></p>
        </div>
    </form>
    </div>
    </div>
     </div>
</div></div></section>
    <!------------------------------------------------------------ End of Form  --------------------------------------------------------------------------->
    <!------------------------------------------------------------Footer--------------------------------------------------------------------------->

    <?php include '../views/include/footer.php';?>

    <!------------------------------------------------------------ End of Footer  --------------------------------------------------------------------------->

      <!-- <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script> -->
      <?php include '../views/include/footer_js.php';?>

</body>
   
</html>