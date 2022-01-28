
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=" ../css/style.css">    
       <link rel="stylesheet" type="text/css" href="../css/model.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/Registration.css"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        


    <title>Homepage</title>
</head>
<body>

<?php include 'login.php'; ?> 
    <!------------------------------------------------------------ Navbar  --------------------------------------------------------------------------->

    <header class="header">
    <heder>
    <nav class="navbar navbar-default sticky-top navbar-expand-lg navbar-dark " id="navbar">
  <div class="container-fluid">
    <a href="index.php">
    <img class="navbar-brand" src="../image/logo.png" style="width: 150px;height: 90px;"></a>
    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-end ">
      <ul class="navbar-nav ms-auto mb-4 mb-lg-0 " style="margin-top:  -20px;">
    
      <li class="nav-item">
              <a class="nav-link   Rounded-Rectangle-1 text-white" href="book-service.php" title="Book a Cleaner">Book a Cleaner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Rounded-Rectangle text-white" href="price.php" title="Prices">Prices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  Rounded-Rectangle text-white" href="#" title="Our Guarantee">Our Guarantee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  Rounded-Rectangle text-white" href="" title="Blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  Rounded-Rectangle text-white " href="contact us.php" title="Contact Us">Contact Us</a>
            </li>

<!-- <?php
            if(!isset($_SESSION['UserId'])){
?> -->
             <li class="nav-item" title="Login" >
               <a data-bs-toggle="modal" data-bs-target="#exampleModallogin" data-bs-dismiss="modal" class="Rounded-Rectangle-1 text-white nav-link">Login</button></a> 
            </li>
<!-- <?php
            }
             else{

echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>";

            }
?> -->
             <li class="nav-item">
              <a class="nav-link text-white Rounded-Rectangle-1" href="service provider(6th).php" title="Become a Helper">Become a Helper</a>
            </li>
    
                    
        </div>
      </div>
    </ul>
  </div>

</nav> 
</header> 
        
            
         <div class="main" id="main">

        <section id="section-home">
            <div class="home-content">
                <div class="home-heading">
                    <h1>Do not feel like housework?</h1>
                    <h6 class="list">Great! Book now for Helperland and enjoy the benefits</h6>
                </div>
                <ul class="list">
                    <li><i class="fa fa-check"></i>certified & insured helper</li>
                    <li><i class="fa fa-check"></i>easy booking procedure</li>
                    <li><i class="fa fa-check"></i>friendly customer service</li>
                    <li><i class="fa fa-check"></i>secure online payment method</li>

                </ul>
            </div>
            <div class="btn-lets">
                <div>
                    <button class="btn btn-outline-light text-light " title="Let’s Book a Cleaner" ><a href="book-service.php" class="text-white" >Let’s Book a Cleaner</a></button>
                </div>
            </div>
            <div class="all-steps">
                <div class="step">
                    <div class="step-img">
                        <img src="../image/postcode.png" alt=""  title="Enter Your Postcode">
                    </div>
                    <div class="step-text">
                        Enter Your Postcode
                    </div>
                    <div class="step-arrow">
                        <img src="../image/step-down-arrow.png" alt="">
                    </div>
                </div>
                <div class="step">
                    <div class="step-img">
                        <img src="./image/plan.png" alt="" title="  Select your plan">
                    </div>
                    <div class="step-text" >
                        Select your plan
                    </div>
                    <div class="step-arrow">
                        <img src="../image/step-up-arrow.png" alt="">
                    </div>
                </div>
                <div class="step">
                    <div class="step-img">
                        <img src="../image/security.png" alt="" title=" Pay securely online">
                    </div>
                    <div class="step-text" >
                        Pay securely online
                    </div>
                    <div class="step-arrow">
                        <img src="../image/step-down-arrow.png" alt="">
                    </div>
                </div>
                <div class="step">
                    <div class="step-img">
                        <img src="../image/services.png" alt=""title="Enjoy Amazing Service">
                    </div>
                    <div class="step-text" >
                        Enjoy Amazing Service
                    </div>
                </div>
            </div>
            <div class="btn-down">
                   <img src="../image/circle_arrow.png" alt="">
               
            </div>
        </section>
        <!------------------------------------------------------------End of  Navbar  --------------------------------------------------------------------------->

           <!-- --------------------------------------------Why Helper-----------------------------------------------  -->

        <section id="section-whyhelper">

            <div class="head">
                <h2 class="whyhelper-title" title="Why Helperland">Convince yourself!</h2>
            </div>
            <div class="whyhelpers">
                <div class="whyhelper">
                    <div class="whyhelper-image"><img class="image-rounded" src="../image/helperland1.png" alt=""></div>
                    <div class="whyhelper-title">
                        <h3>Friendly & Certified Helpers</h3>
                    </div>
                    <div class="content">
                        <p>We want you to be completely satisfied with our service and feel comfortable at home. In order to guarantee this, our helpers go through a test procedure. Only when the cleaners meet our high standards, they may call themselves Helper.</p>
                    </div>
                </div>
                <div class="whyhelper">
                    <div class="whyhelper-image"><img src="../image/helperland2.png" alt=""></div>
                    <div class="whyhelper-title">
                        <h3>Transparent and secure payment</h3>
                    </div>
                    <div class="content">
                        <p>We have transparent prices, you do not have to scratch money or money on the sideboard Leave it: Pay your helper easily and securely via the online payment method. You will also receive an invoice for each completed cleaning.</p>
                    </div>
                </div>
                <div class="whyhelper">
                    <div class="whyhelper-image"><img src="../image/helperland3.png" alt=""></div>
                    <div class="whyhelper-title">
                        <h3>We're here for you</h3>
                    </div>
                    <div class="content">
                        <p>You have a question or need assistance with the booking process? Our customer service is happy to help and advise you. How you can reach us you will find out when you look under "Contact". We look forward to hearing from you or reading.
</p>
                    </div>
                </div>
            </div>
        </section>
           <!-- --------------------------------------------End of Why Helper-----------------------------------------------  -->
           <!----------------------------------------------------------------------------------------------------- --> 
        <section id="section-blog" >


            <div class="lorem">
                <div class="col1">
                    <div class="title">
                        <h2 class="heading">We do not know what makes you happy, but ...</h2>
                    </div>
                    <div class="content">
                        <p>
                          If it's not dusting off, our friendly helpers will free you from this burden - do not worry anymore about spending valuable time doing housework, but savor life, you're well worth your time with beautiful experiences. Free yourself and enjoy the gained time: Go celebrate, relax, play with your children, meet friends or dare to jump on the bungee.Other leisure ideas and exclusive events can be found in our blog - guaranteed free from dust and cleaning tips!
                        </p>
                    </div>
                </div>
                <div class="col2 helper4">
                    <img src="../image/helper456.png" alt="">
                </div>
            </div>

            <!----------------------------------------------------------------------------------------------------- --> 
          

            <!----------------------------------------------------Customer------------------------------------------------- --> 

        <section id="section-customer">
            <div class="say-heading">
                <h2>What Our Customers Say</h2>
            </div>
            <div class="says">
                <div class="say">
                    <div class="say-about">
                        <div class="say-profile">
                            <img src="../image/customer1.png" alt="">
                        </div>
                        <div class="say-name">
                            <div>
                                <h3 class="name">Jacques</h3>
                            </div>
                            <div>
                                <p class="city">Falah</p>
                            </div>
                        </div>
                        <div class="say-msg">
                            <img src="../image/mess.png" alt="">
                        </div>
                    </div>
                    <div class="say-content">
                        <p>Super Service👍 Danke</p>
                    </div>
                    <div class="say-more">
                        Read More <img src="../image\rightarrow.png">
                    </div>
                </div>
                <div class="say">
                    <div class="say-about">
                        <div class="say-profile">
                            <img src="../image/customer2.png" alt="">
                        </div>
                        <div class="say-name">
                            <div>
                                <h3 class="name">Yahoo</h3>
                            </div>
                            <div>
                                <p class="city">Kunde</p>
                            </div>
                        </div>
                        <div class="say-msg">
                            <img src="../image/mess.png" alt="">
                        </div>
                    </div>
                    <div class="say-content">
                        <p>Very Good...!</p>
                    </div>
                    <div class="say-more">
                        Read More <img src="../image\rightarrow.png">
                    </div>
                </div>
               

        </section>
        
              <!----------------------------------------------------End of Customer------------------------------------------------- --> 

              <section id="mail">
 <div class="newsletter d-flex justify-content-center  row">
    <div class="mail-heading">SUBSCRIBE TO NEWSLETTER</div>        
            <p class="user-input newsletter d-flex justify-content-center  row">
                <input type="mail" name="mail" placeholder="YOUR EMAIL" class="mailBox ">
                <input type="submit" value="Submit" class="submit">
            </p>
          </div>
    </div>
</section>
              <!---------------------------------------------------- Footer------------------------------------------------- --> 

    <?php include 'footer.php';?>


  
              <!----------------------------------------------------End of Footer------------------------------------------------- --> 

   
</body>
<script type="text/javascript" src="../css/bootstrap/js/bootstrap.min.js"></script>
<script src="../css/stickynav.js"></script>    
</html>
