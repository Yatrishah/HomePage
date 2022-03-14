<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/bs.css">

   <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">  
    <script type="text/javascript" src="../assets/css/custom.js"></script>

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 


    <title>Book Service</title>
</head>

<body>

     <?php include 'login.php'; ?> 

      <!-- --------------------------------------------------Navigation Bar ------------------------------------------------------------  -->
     <?php include 'header.php';?>

     

 <!-- -------------------------------------------------- End of Navigation Bar ------------------------------------------------------------  -->
 <!-- -------------------------------------------------- Text ------------------------------------------------------------  -->

 <div>
    <img src="../assets/image1/bookbanner.jpg"class="img-fluid"style="width:100%;">
</div>       

 <section id="section-faqs">
            <div class="servicetext">
                <h1 class="title-main">Set up your cleaning service</h1>
                 <div>
        <div style="text-align: center;">
            <div class="lineLeft"></div>
            <img src="../assets/image/faqstar.png" class="starfaq">
            <div class="lineRight"></div>
        </div>
 <!-- -------------------------------------------------- End of Text ------------------------------------------------------------  -->
 <!-- -------------------------------------------------- Tab ------------------------------------------------------------  -->

   <section class="d-f">
            
            
   <div id="pills-tabContent" class="tab-content">
                <ul class="nav nav-pills mb-3 flex-nowrap" id="pills-tab" >
                    <li class="nav-item" role="button" id="pills-tab1" onclick="setupservice()">
                      <button class="nav-link active nav-flex" id="setupservice"  type="button" >
                    <img src="../assets/image1/setup-service.png"id="imgsetupservice"> <p id="forsetup" style="color: white;">Setup Service</p>
                         
                      </button>
                    </li>
                    <li class="nav-item" role="button" id="pills-tab2" onclick="scheduleplan()">
                      <button class="nav-link nav-flex" id="schedule1"  type="button" >
                         <img src="../assets/image1/schedule.png" id="imgschedule"> <p id="schedulep">Schedule & plan</p>
                      </button>
                    </li>
                    <li class="nav-item" role="button" id="pills-tab3" onclick="details()">
                      <button class="nav-link nav-flex" id="details1"  type="button">
                         <img src="../assets/image1/details.png" id="details"><p id="detailsp"> Your Details</p>
                      </button>
                    </li>
                    <li class="nav-item" role="button" id="pills-tabs4" onclick="payment()">
                        <button class="nav-link nav-flex" id="payment1"  type="button" >
                           <img src="../assets/image1/payment.png" id="payment"><p id="paymentp"> Make Payments</p>
                        </button>
                      </li>
                    
                  </ul>
<!------------------------------------ SetupService----------------------------------------------------->

     <div id="pills-setupservice"> 

          <div class="postal_input">
            <div class="col-sm-4">
              <input type="number" class="form-control" name="postalcode" placeholder="Postal Code" id="postalcode_aj" required>
              <button type="button" class="btncheckavailability" name="checkAvailability" id="check_availability">Check
                  Availability</button>
          </div>
        </div>
          <p style="color: red;" id="postalerror"></p>
   </div>
<!------------------------------------End of  SetupService----------------------------------------------------->

<!------------------------------------ schedule and plan----------------------------------------------------->

  <div id="pills-scheduleplan">
                    
    <div class="row w-100">
        <div class="col-sm-12 col-lg-6 m-20">
            <label class="form-label"><b>When do you need the cleanner?</b></label>
            <div class="row">
                <div class="col-sm-6  m-20">
                    <input type="date" class="form-control" name="date" id="date" value="<?= date("d/m/Y") ?>" id="date" onChange="changeDate();" required>
                </div>
                <div class="col-sm-6 m-20">
                    <select name="time" id="time" class="form-control" onchange="changeTime();" required>
                        <option>----Select Time----</option>
                        <option>8:00 AM</option>
                        <option>8:30AM</option>
                        <option>9:00</option>
                        <option>9:30</option><option>10:00</option>
                        <option>11:30</option>
                        <option>12:00</option>
                        <option>12:30</option>
                    </select>
                </div>
            </div>
        </div>
    <div class="col-sm-12 col-lg-6 m-20">
        <label class="form-label"><b>How long do you need your cleanner to stay?</b></label>
        <select name="duration" id="duration" class="form-control m-20"  onchange="changeDuration(); "required>
            <option>----Select Duration----</option>
            <option>3</option>
            <option>3.5</option>
            <option>4</option>
            <option>4.5</option><option>5</option>
            <option>5.5</option>
            <option>6</option>
            <option>6.5</option>
        </select>
    </div>
  </div>
  <hr>
  <label><b>Extra Services</b></label>
  
  <div id="custom-checkboxes" >
      <div class="checkbox">
        <input type="checkbox" name="extraservice" value="1" id="insideCabinetCheck" class="htmlcheckbox" onclick="cabinetClick();">
        <label for="insideCabinetCheck" ><img src="../assets/image/extraservice1.png" id="insideCabinetImg" alt=""></label>
        <p>inside cabinets</p>
      </div>

      <div class="checkbox">
        <input type="checkbox" id="insideFridgeCheck" name="extraservice" value="2" class="htmlcheckbox" onclick="fridgeClick();">
        <label for="insideFridgeCheck"><img src="../assets/image/extraservice2.png" id="insideFridgeImg" alt="" ></label>
        <p>inside Fridge</p>
      </div>

      <div class="checkbox">
        <input type="checkbox" name="extraservice" value="3" id="insideOvenCheck" class="htmlcheckbox" onclick="ovenClick();">
        <label for="insideOvenCheck"><img src="../assets/image/extraservice3.png" id="insideOvenImg" alt=""></label>
        <p>inside Oven</p>
      </div>

      <div class="checkbox">
        <input type="checkbox" id="laundryCheck" name="extraservice" value="4" class="htmlcheckbox" onclick="laundaryClick();">
        <label for="laundryCheck"><img src="../assets/image/extraservice4.png" id="laundryImg" alt=""></label>
        <p>Laundry Wash & Dry</p>
      </div>

      <div class="checkbox">
        <input type="checkbox" id="interiorCheck" name="extraservice" value="5" class="htmlcheckbox" onclick="interiorClick();">
        <label for="interiorCheck"><img src="../assets/image/extraservice5.png" id="interiorImg" alt=""></label>
        <p>interior Windows</p>
      </div>
    </div>

      <hr>
      <label><b>Comments</b></label>
      <textarea id="comments" class="md-textarea form-control" rows="3" name="comments" required></textarea>
      <input type="checkbox" name="pets" id="pets">&nbsp;I have pets at home
      <hr>
      <div>
      <?php if (isset($_SESSION["UserId"])) { ?>
          
      <button type="submit" class="btncontinue float-right" id="continue_schedulePlan">Continue</button>
      <?php } else { ?>
      <button type="button" class="accept_btn float-right" id="continue_schedulePlan">Continue</button>
      <?php } ?>
      </div>
      <p style="color: red;" class="mt-2 ml-2" id="add"></p>

</div>
<!------------------------------------Ends schedule and plan----------------------------------------------------->
<!------------------------------------Detail----------------------------------------------------->

            <div id="pills-Details" >
            <div class="alert alert-danger mb-0 mt-4" role="alert" style="display: none;" id="address_alert">
                            Please select the address.
                        </div>
                    <p><b>Enter Your contact details,so we can serve you in better way!</b></p>
                 
               <div id="addresses" >
                    <div class="forborder mt-20">
                     
                    </div>
                  
                  </div> 
                 
                    <input type="button" class="btnaddnewadd" value="+ Add New Address" id="addnewadd" onclick="btnaddnewadd()">
                     <div id="formadd" class="forborder mt-20 border">
                     <form id="addnewaddress_form">

                        <div class="row mt-20 ml-20">
                            <div class="col-sm-6">
                                <label>Street Name</label>
                                <input type="text" class="form-control" placeholder="Street Name" id="street_name"  >
                            </div>
                            <div class="col-sm-6">
                                <label>House Number</label>
                                <input type="number" class="form-control" placeholder="House Number" id="house_no" >
                            </div>
                        </div>
                        <div class="row mt-20 ml-20">
                            <div class="col-sm-6">
                                <label>Postal code</label>
                                <input type="text" class="form-control"  id="postalcode" readonly> 
                            </div>
                            <div class="col-sm-6">
                                <label>City</label>
                                <input type="text" class="form-control" id="city" readonly>    
                            </div>
                        </div>
                        <div class="row mt-20 ml-20">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" class="form-control" placeholder="Phone Number" id="phoneno" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <input type="button" value="save" id="save_address_btn" class="btnsave" onclick="save()">
                            <input type="button" value="cancel" class="btncancel"  onclick="btncancel()">
                        </div>
                        <p style="color: red;" class="mt-2 ml-2" id="add_new_address_error"></p>

                    </div> 
                  
                    <p class="mt-20"><b>Your favourite service Provider</b></p>
                    <hr>
                    <p>You can choose your favourite service provider from the below list</p>
                    <div class="d-flex flex-wrap" id="fav_service_provider_box">

                  
                    </div>
                    <hr>

                    <div>
                    <input type="button" class="  btncontinue" value="Continue" 
                    id="continue_details">

                  </div>
                </div>
                <!------------------------------------------ends of details--------------------------------->
                <!------------------------------------------Payment--------------------------------->

                <div  id="pills-payment" >
                    <p>Pay Securely with Helperland payment gateway!</p>
                    <label>promo code(optional)</label>
                    <div>
                        <input type="number" class="form-control w-230" id="promo_code" placeholder="promo code(optional)">
                        <input type="button" class="btnaddnewadd" value="Apply">
                    </div>
                    <div class="row">

                    <div class="form-group col-sm-6">
                        <input type="number" id="creditcardno" class="form-control w-230" placeholder="card-number" name="card-number" >
                  </div>
                  <div class="form-group col-sm-3">
                        <input type="number" id="creditcardexpiry" placeholder="MM/YY" name="mmyy" class="form-control w-230">
                  </div>
                  <div class="form-group col-sm-3">
                        <input type="number" id="creditcardcvc" class="form-control w-230" placeholder="CVC" name="cvc">
                  </div>
                  </div>
                  <p class="accpted_card">Accepted Card</p>
                        <div class="card_accepted">
                            <img src="../assets/image1/america_express.png">
                            <img src="../assets/image1/mastercard.png">
                            <img src="../assets/image1/visa.png">
                        </div>
                    <div class="d-flex" style="margin-top:50px">
                        <div class="form-check" >
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              I accepted <span style="color:#1D7A8C">terms and conditions</span> , the <span style="color: #1D7A8C;">privacy policy</span>. 
                              I confirm that Helperland start to execute the contract before the expiry of the withdrawal period and I lose my right of withdrawal 
                              as a consumer with full performance of the contract.  
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div>
                           

              <button data-bs-toggle="modal" id="complete_booking"  
                class="btnaddnewadd float-right">Complete Booking</button> 
                        </div>
                    <div class="modal fade" id="complete_booking_modal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"  href="faqpage.php">
              
                                    <div class="modal-body">
                                        <div class="complete_box">
                                            <img src="../assets/image/included.png" alt="">
                                            <p>Booking has been successfully submitted</p>
                                            <p class="request_id"></p>
                                            <button class="btnsave" style="width: 80px; margin: 0 auto;" data-dismiss="modal">Ok</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                
                <!-------------------------------------ends of payment ---------------------------------------->
            </form>
              </div>
              <div  class="rightside">
              <div class="card w-200">
                <div class="card-header">
                  Payment Summary
                </div>
                <div class="card-body">
                  
                  <p class="card-text"><span  id="dateText">01/02/22</span> @ <span id="timeText"><?php echo date('h:i:s ')?></span> </p>
                  <p><b>Duration</b></p>
                  <p>Basic<span style="float: right;" id="durationText">0 Hrs</span></p>
                  <p><b>Extras</b></p>
                  <p id="extraServices" style="display:none" name="1">Inside cabinets<span style="float: right;">30 mins</span></p>
                  <p id="extraServices" style="display:none" name="2">Inside fridge<span style="float: right;">30 mins</span></p>
                  <p id="extraServices" style="display:none" name="3">Inside Oven<span style="float: right;">30 mins</span></p>
                  <p id="extraServices" style="display:none" name="4">Laundary Wash & Dry<span style="float: right;">30 mins</span></p>
                  <p id="extraServices" style="display:none" name="5">Interior Windows<span style="float: right;">30 mins</span></p>
                  <hr>
                  <p><b>Total Service Time<span style="float: right;" id="total">0 Hrs</span></b></p>
                  <hr>
                  <p>per Cleaning<span style="float: right;" id="totalPay">$00</span></p>
                  <p>Discount<span style="float: right;">-$0</span></p>
                  <hr>
                  <h6 class="payment"><b>Total Payment<span class="paymentsub">$<span id="totalPayment">0</span></span></b></h6>
                  <br>
                  
                </div>
                <div class="card-footer" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button">
                    <p><img src="../assets/image/home.png">  See What is always include</p>
                </div>
                </div>

                <div class="rightsecondpart">
                <h6 class="onlyone"><b>Questions?</b></h6>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What's include in a cleaning?
                        </button>
                    </h2>
                      <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          Bedroom,Living room & Common area, Bathrooms,Kitchen and Extras
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              Which Helperland professional will come to my place?
                          </button>
                      </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available.Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings.You will receive an email with details about your professional prior to your appointment.
                        </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              Can I skip or rescheule bookings?
                          </button>
                      </h2>
                        <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.
                        </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                              Test tatva
                          </button>
                      </h2>
                        <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            tatva
                          </div>
                        </div>
                      </div>
                </div> <!--ends accordition-->
               <div class="onlyone"><a href="../views/faqpage.html"  style="font-weight:bold;">For More Help</a></div>
                </div><!--ends right second part-->
            </div><!--Ends right side-->
            </section>
    </section>
<!--Modal for payment summary-->
    <div class="hidepaymentsummary" >
  <div class="centerbtn"><button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
        Payment Summary
      </button></div>  
      
     
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">      
              <h5 class="modal-title" id="exampleModalLabel">Payment Summary</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="modal-text">01/01/2018 @ 4:00</p>
                <p class="modal-text">1 bed ,1 bath</p>
                <p><b>Duration</b></p>
                <p>Basic<span style="float: right;">3 Hrs</span></p>
                <p>Inside cabinets<span style="float: right;">30 mins</span></p>
                <hr>
                <p><b>Total Service Time<span style="float: right;">3.5 Hrs</span></b></p>
                <hr>
                <p>per Cleaning<span style="float: right;">$87</span></p>
                <p>Discount<span style="float: right;">-$27</span></p>
                <hr>
                <h6 class="payment"><b>Total Payment<span class="paymentsub">$63</span></b></h6>
                <br>
                <h6>Effective Price<span style="float: right;">$50.4</span></h6>
                <p>You will save 20% according to...</p>
            </div>
            <div class="modal-footer" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button">
                <p><img src="../assets/image/home.png">  See What is always include</p>
            </div>
          </div>
        </div>
      </div>
      </div>
<!--Ends Modal-->
<!--modal for what we include-->

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">What we include in cleaning?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-4">
                    <p><b>Bedroom and Living Room</b></p>
                    <ul class="no-bullets">
                        <li><img src="../assets/image/included.png" class="rotate">Dust all accessible surface</li>
                        <li><img src="../assets/image/included.png" class="rotate"> Wipe down all mirrors and glass fixtures</li>
                        <li><img src="../assets/image/included.png" class="rotate">Clean all floor surfaces</li>
                        <li><img src="../assets/image/included.png" class="rotate">Take out garbage and recycling</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <p><b>Bathrooms</b></p>
                        <ul class="no-bullets">
                            <li><img src="../assets/image/included.png" class="rotate">Wash and sanitize the toilet, shower, tub, sink</li>
                            <li><img src="../assets/image/included.png" class="rotate">Dust all accessible surfaces</li>
                            <li><img src="../assets/image/included.png" class="rotate"> Wipe down all mirrors and glass fixtures</li>
                            <li><img src="../assets/image/included.png" class="rotate">Clean all floor surfaces</li>
                            <li><img src="../assets/image/included.png" class="rotate">Take out garbage and recycling</li>
                        </ul>
                </div>
                <div class="col-sm-4">
                    <p><b>Kitchens</b></p>
                        <ul class="no-bullets" >
                            <li><img src="../assets/image/included.png" class="rotate">Dust all accessible surfaces</li>
                            <li><img src="../assets/image/included.png" class="rotate"> Empty sink and load up dishwasher</li>
                            <li><img src=../assets/image/included.png" class="rotate">Wipe down exterior of stove, oven and fridge</li>
                            <li><img src="../assets/image/included.png" class="rotate"> Clean all floor surfaces</li>
                            <li><img src="../assets/image/included.png" class="rotate">Take out garbage and recycling</li>
                        </ul>
                </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
 <!-- --------------------------------------------------End of Mail------------------------------------------------------------  -->


 
  <?php include 'footer.php';?>

  </body>
<script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../assets/css/bs.js"></script>
   
            <?php
// if (isset($_SESSION["postalcode"])) {
//     echo "<script>
//        scheduleplan();            
//         </script>";
// }

// if (isset($_SESSION["scheduleplan"])) {
//   echo "<script>
//     details();
//       </script>";
// }
// unset($_SESSION["scheduleplan"]);
//unset($_SESSION["postalcode"]);

?>
<script>
$('#check_availability').click(function (e) {
    e.preventDefault();

    var postalcode = $('#postalcode_aj').val().trim();
    console.log(postalcode);
    if (postalcode == "") {

        $('#postalerror').html("Please Enter Value");
    } 
    else if (postalcode.length != 6) {
        $('#postalerror').html("Postal Code must have six numbers");}
    else {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?controller=Home&function=postalcodevalidation",
            data: {
                code: postalcode

            },
            success: function (response) {
                if (response == 1) {
                    $('#postalform').trigger("reset");
                    $('#postalerror').html("We are not providing service in this area. Well notify you if any helper would start working near your area.");
                } else {
                  scheduleplan();
                  var splitted = response.split("|");
                  $('#postalcode').val(splitted[0]);
                  
                   // console.log(response);
                    $('#city').val(splitted[1]);
                }
            }
        });
    }
});


$('#continue_schedulePlan').click(function (e) {
    e.preventDefault();
    var date = $('#date').val();

   
    if (date == "") {
        $('#add').html("Please Enter Date");
    }
    else{
    details();
    }
    $.ajax({
        url: "http://localhost/project/?controller=Home&function=usersaddress",
        success: function (response) {
            $('#addresses').html(response);
        }
    });

    $.ajax({
        url: "http://localhost/project/?controller=Home&function=favouriteserviceprovider",
        success: function (response) {
            $('#fav_service_provider_box').html(response);
        }
    });

    
    
});

$('#save_address_btn').click(function (e) {
    e.preventDefault();

    var streetname = $('#street_name').val();
    var houseno = $('#house_no').val();
    var postalcode = $('#postalcode').val();
    var city = $('#city').val();
    var phone_no = $('#phoneno').val();
    if (streetname == "" || houseno == "" || postalcode == "" || city == "" || phone_no == "") {
        $('#add_new_address_error').html("Please Enter all Value");
    } else if (postalcode.length != 6) {
        $('#add_new_address_error').html("Postal Code must have 6 numbers");
    } else if (phone_no.length != 10) {
        $('#add_new_address_error').html("Phone No must have 10 numbers");
    } else {
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=insertaddress",
        data: {
            street_name: streetname,
            house_no: houseno,
            postalcode: postalcode,
            city: city,
            phoneno: phone_no
        },
        success: function (response) {
            $('#addnewaddress_form').trigger("reset");
            $('#addnewadd').css('display', 'none');
            $('#formadd').css('display', 'block');

            $('#addresses').html(response);
        }
    });
  }
});

$('#continue_details').click(function (e) { 
    e.preventDefault();

    addressid =  $("input:radio[name=address]:checked").attr('id');
    console.log(addressid);
    if (addressid == undefined) {
        // alert("Please select the address");
        $('#address_alert').css('display', 'block');
        window.scrollTo(0,300);
    } else {
        $('#address_alert').css('display', 'none');
        payment();
    }
    
});

$('#complete_booking').click(function (e) {
    e.preventDefault();
   
    creditcardno = $('#creditcardno').val().trim();
    creditcardexpiry = $('#creditcardexpiry').val().trim();
    creditcardcvc = $('#creditcardcvc').val().trim();
    promo_code = $('#promo_code').val().trim();

    if (creditcardno == "" || creditcardexpiry == "" || creditcardcvc == "") {
        alert("Please Enter all details")
    // } else if(creditcardno.length != 16 || creditcardexpiry.length != 4 || 
    //             creditcardcvc.length != 3){
    //     alert("Please Enter all the details properly");
    } else {

   var date = $('#date').val();
    var time = $('#time').val();
    var duration = $('#duration').val();
    var comments = $('#comments').val();
    if ($("#pets").is(":checked")) {
        pets = 1;
    } else {
        pets = 0;
    }
    var extraservice = [];
    $("input:checkbox[name=extraservice]:checked").each(function () {
        extraservice.push($(this).val());
    });

    if (extraservice.length == 0) {
        extraservice.push(0);
    }
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=schedule",
        data: {
            date: date,
            time: time,
            duration: duration,
            pets: pets,
            comments: comments,

            extraservice: extraservice
        },
        success: function (response) {
            //console.log(response);

            addressid =  $("input:radio[name=address]:checked").attr('id');
    id_arr = addressid.split("-");

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=insertServiceRequestAddress",
        data: {
            addressid : id_arr[0]
        },
                success: function (response) {
                //  $('.request_id').html("Service Request Id: ".concat(response));
                    $('#complete_booking_modal').modal('show');
                    $.ajax({
                            type: "POST",
                            url: "http://localhost/project/?function=sendEmailtoProvider",
                            success: function (response) {
                                console.log(response);
                            }
                        });
                }
            });
         
           
        }


    });

    }
});

</script>