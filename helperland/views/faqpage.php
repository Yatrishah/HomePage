<?php
session_start();

?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/faq.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  -->
    <link rel="stylesheet" type="text/css" href="../assets/css/faq.css">

    <?php include '../views/include/header_css.php';?>

    <title>FAQs Page</title>
</head>

<body>

 <?php include '../views/include/login.php';?>
 
   <?php include '../views/include/header.php';?>

<!-- -------------------------------------------------- FAQ Image--------------------------------------------------------------------  -->
<div>
    <img src="../assets/image/faqbanner.png"class="img-fluid"style="width:100%;">
</div>       

 <section id="section-faqs">
            <div class="faqs-header">
                <h1 title="FAQs">FAQs</h1>
                 <div>
        <div style="text-align: center;">
            <div class="lineLeft"></div>
            <img src="../assets/image/faqstar.png" class="starfaq">
            <div class="lineRight"></div>
        </div>
                <div class="content">
                    Whether you are Customer or Service provider,<br>
                    We have tried our best to solve all your queries and questions.
                </div>
            </div>
            <div class="division">
                <div class="button">
                    <button class="customer active" title="For Customer">For Customers</button>
                    <button class="serviceprovider" title="For Service provider">For Service Providers</button>
                </div>
                <div class="faqs">
                    <div class="faq for-customer">

                <div class="questions">
                            <div class="question">
                                <button type="button" class="btn btn-col" data-toggle="collapse" data-target="#demo1">
                                    <img src="../assets/image/arrow-right.png">
                                    <p>What's included in a cleaning?</p>
                                </button>
                            </div>
                            <div id="demo1" class="answer collapse in">
                             Bedroom, Living Room & Common Areas, Bathrooms, Kitchen, Extras

                            </div>
                        </div>

                      
                        <div class="questions">
                            <div class="question">
                                <button type="button" class="btn btn-col" data-toggle="collapse" data-target="#demo2">
                                    <img src="../assets/image/arrow-right.png">
                                    <p>Which Helperland professional will come to my place?</p>
                                </button>
                            </div>
                            <div id="demo2" class="answer collapse in">
                                Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available. Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings. You will receive an email with details about your professional prior to your appointment.
                            </div>
                        </div>

                        <div class="questions">
                            <div class="question">
                                <button type="button" class="btn btn-col" data-toggle="collapse" data-target="#demo3">
                                    <img src="../assets/image/arrow-right.png">
                                    <p>Can I skip or reschedule bookings?</p>

                                </button>
                            </div>
                            <div id="demo3" class="answer collapse in">
                               You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.
                            </div>
                        </div>

                        <div class="questions">
                            <div class="question">
                                <button type="button" class="btn btn-col" data-toggle="collapse" data-target="#demo4">
                                    <img src="../assets/image/arrow-right.png">
                                    <p>Do I need to be home for the booking?</p>
                                </button>
                            </div>
                            <div id="demo4" class="answer collapse in">
                               We strongly recommend that you are home for the first clean of your booking to show your cleaner around. Some customers choose to give a spare key to their cleaner, but this decision is based on individual preferences.
                            </div>
                        </div>

                       

                    </div>
                   <div class="faq for-service" style="display: none;">

                        <div class="questions">
                            <div class="question">
                                <button type="button" class="btn btn-col" data-toggle="collapse" data-target="#demo-5">
                                    <img src="../assets/image/arrow-down.png">
                                    <p>How much do service providers earn?
</p>
                                </button>
                            </div>
                            <div id="demo-5" class="answer collapse show">
                               The self-employed service providers working with Helperland set their own payouts, this means that they decide how much they earn per hour.
                            </div>
                        </div>
                        
                        <div class="questions">
                            <div class="question">
                                <button type="button" class="btn btn-col" data-toggle="collapse" data-target="#demo-6">
                                    <img src="../assets/image/arrow-right.png">
                                    <p>What support do you provide to the service providers?</p>

                                </button>
                            </div>
                            <div id="demo-6" class="answer collapse in">
                              Our call-centre is available to assist the service providers with all queries or issues in regards to their bookings during office hours. Before a service provider starts receiving jobs, every individual partner receives an orientation session to familiarise with the online platform and their profile.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
   <!-- -------------------------------------------------End of FAQ------------------------------------------------------------  -->

    
   <!-- -------------------------------------------------Mail------------------------------------------------------------  -->


 <!-- --------------------------------------------------End of Mail------------------------------------------------------------  -->

            <a href="#"  class="toptoback" id="backtotop" ><img src="../assets/image/up.png" ></a>

  <!-- --------------------------------------------------Footer ------------------------------------------------------------  -->
   <?php include '../views/include/footer.php';?>
  
 <!-- --------------------------------------------------End of Footer ------------------------------------------------------------  -->
 


  </body>
<!-- <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="../assets/css/faq.js"></script>
<?php include '../views/include/footer_js.php';?>

</html>















