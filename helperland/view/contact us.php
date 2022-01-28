<!-- <?php
session_start();
?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/contact us.css">   
    <link rel="stylesheet" type="text/css" href="../css/model.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/Registration.css"> 
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">  

    <title>Contact Us Page</title>
</head>

<body>
  
   
  
 <?php include 'login.php';?>
 
   <?php include 'header.php';?>
 <!-- -------------------------------------------------- COntact Us  Image--------------------------------------------------------------------  -->
<div>
    <img src="../image/contactuscoverpage.png"class="img-fluid"style="width:100%;">
</div>
 <!-- -------------------------------------------------- End of Contact us Image--------------------------------------------------------------------  -->

 <!-- --------------------------------------------------  Contact us --------------------------------------------------------------------  -->

 <div class="contact" title="Contact Us">

        <p class="" >Contact us</p>
</div>
 <div>
        <div style="text-align: center;">
            <div class="lineLeft"></div>
            <img src="../image/faqstar.png" class="starfaq">
            <div class="lineRight"></div>
        </div>


<section class="container" style="margin:auto;">

      <div class="contact-list row">
                    <div class="list col-xl-4 col-md-4">
                        <div class="img">
                            <img src="../image/location.png">
                        </div>
                        <div class="title">
                            <p>Konigswinterer Str. 116<br>53227 Bonn</p>
                        </div>
                    </div>
                    <div class="list col-xl-4 col-md-4">
                        <div class="img">
                            <img src="../image/phone.png" alt="">
                        </div>
                        <div class="title">
                            <a href="tel:+49 (228) 28693320" title="+49 (228) 28693320" style="text-decoration:none; color:black;">
                            <span>+49 (228) 28693320</span>
                            </a>
                        </div>
                    </div>
                    <div class="list col-xl-4 col-md-4">
                        <div class="img">
                            <img src="../image/message.png" alt="">
                        </div>
                        <div class="title">
                            <a href="mailto:info@helperland.de" title="info@helperland.de" style="text-decoration:none; color:black;">
                            <span>info@helperland.de</span>
                             </a>
                        </div>
                    </div>

                </div>
            </div>


       </section>  
 <!-- -------------------------------------------------- End of Contact us --------------------------------------------------------------------  -->

 <!-- -------------------------------------------------- Line-------------------------------------------------------------------  -->

<div>
<hr style="width:80%; margin:auto;margin-top: 51px;" />

</div> 

 <!-- --------------------------------------------------End of  Line-------------------------------------------------------------------  -->

  <!-- --------------------------------------------------Contact us form-------------------------------------------------------------------  -->


<?php 
include("../controller/dbfunction.php");
mailer();
?>
<?php 
formsubmit();
?>

        <section id="contactform" class="contact-form">
            <div class="form-title" title="Get in touch with us">

                <h1>Get in touch with us</h1>
                 <h1 style=" margin: 0 auto; width: 400px;"><?= $output; ?></h1>

                <h1 style=" margin: 0 auto; width: 400px;"><?= $output1; ?></h1>
            </div>
            <div class="c-form">
                <form  action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">

                            <input type="hidden" name="approved" value="0">
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <input class="form-control" name="firstname" placeholder="Firstname" type="text"
                                    required autofocus title="Firstname " />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <input class="form-control" name="lastname" placeholder="Lastname" type="text"
                                    required title="Lastname" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">+49</div>
                                    </div>
                                    <input type="number" class="form-control" id="inlineFormInputGroup"
                                        placeholder="Mobile number" title="Mobile Number" name="phonenumber">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <input class="form-control" name="email" placeholder="Email address" type="email"
                                   required  title="Email Address" />
                            </div>
                        </div>
                      
                         <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="subject" placeholder="Subject" type="text"
                                   autofocus title="subject " />
                            </div>
                          
                        </div>
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                             <input class="form-control" id="file" type="file" name="file" >
                          </div>
                        <div class="row">
                            <div class="">
                                <textarea  class="form-control" placeholder="Message"
                                    rows="60" name="message"  title="Message"  ></textarea>
                            </div>
                        </div>
                        
                    </div>
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                         Our current ones apply privacy policy.I hereby agree that my data entered into the contact form will be stored 
                         electronically  and processed and used for the purpose  of establishing contact.The consent can be withdrawn at any time 
                         pursuant to Art.7 (3)GDPR by informal notification (eg by e-mail).
                        </label>
                        </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block" id="sendBtn">
                    </div>
                </form>
            </div>
        </section>
        
    </div>

  <!-- --------------------------------------------------End of Contact us form-------------------------------------------------------------------  -->

    <!-- --------------------------------------------------Location Image-------------------------------------------------------------------  -->


     <div style=" margin-top: 40px;" class="img-fluid">
       <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=K%C3%B6nigswinterer%20Str.%20116%2053227%20Bonn&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123moviesz.nl"></a><br>
    </div>
    <!-- --------------------------------------------------End of Location Image-------------------------------------------------------------------  -->


     <!-- -------------------------------------------------Mail------------------------------------------------------------  -->

 <div class="newsletter d-flex justify-content-center  row">
    <div class="mail-heading">SUBSCRIBE TO NEWSLETTER</div>        
            <p class="user-input newsletter d-flex justify-content-center  row">
                <input type="mail" name="mail" placeholder="YOUR EMAIL" class="mailBox ">
                <input type="submit" value="Submit" class="submit">
            </p>
         
     
        </div>
    </div>


 <!-- --------------------------------------------------End of Mail------------------------------------------------------------  -->


           <a href="#"  class="toptoback" id="backtotop" ><img src="image/up.png" ></a>

  <!-- --------------------------------------------------Footer ------------------------------------------------------------  -->
      <?php include 'footer.php';?>

  
 <!-- --------------------------------------------------End of Footer ------------------------------------------------------------  -->
 

 </body>
<script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
</html>
