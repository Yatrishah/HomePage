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
    <link rel="stylesheet" type="text/css" href="../assets/css/up.css"> 
       <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Service Provider_Upcoming</title>
</head>
        
<body>

  <!------------------------------------------------------------------- Model For Login ---------------------------------------------------->

  
 <?php include 'header4.php' ?>
<!------------------------------------------------------ Model For Service Cancel ------------------------------->
<div class="modal fade" id="exampleModalServiceCancel" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-7 modal-body">
                                <div class="row">
                                    <p class="head">Service Details</p>
                                    <p class="time" id="date_upcoming_service">07/10/2021 08:00 -11:00 </p>
                                    <p id="duration_us">Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="serviceid_us">Service Id: 8488.</p>
                                    <p id="extras_us">Extras:</p>
                                    <p id="amount_us">Total Payment: <span class="currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="name_us">Customer Name:</p>
                                    <p id="address_us">Service Address:</p>                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="comment_us">Comments</p>
                                    <p id="pets_us"><span class="fa fa-times-circle-o"> </span> 
                                    I dont't have pets at home</p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                <div class="mt-2 serviceRequestId_us">
                                                    <button class="modal-button-cancel">
                                                        <p id="cancelService_us" data-dismiss="modal" 
                                                        data-dismiss="modal" data-bs-toggle='modal'
                                        data-bs-target='#exampleModalServiceCancel'> 
                                                            <i class="fa fa-times"></i> Cancel</p>
                                                    </button>
                                                    <button class="modal-button-complete complete_us">
                                                        <p id="completeService_us"data-dismiss="modal" 
                                                        data-bs-toggle='modal'
                                                        data-bs-target='#exampleModalServiceCancel'>
                                                             <i class="fa fa-check"></i> Complete</p>
                                                    </button>
                                                </div>
                                </div>
                            </div>
                            <div class="col-5 modal-map">
                                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=tatvasoft%20ahmedababd+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">fitness tracker</a></iframe>
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
       <!--------------------------------------------------- End of Service cancel Model ----------------------------------------------->

    <!--------------------------------------------------- Service History Model ----------------------------------------------->
    <div class="modal fade" id="exampleModalServiceHistory" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-7 modal-body">
                                <div class="row">
                                    <p class="head">Service Details</p>
                                    <p class="time" id="date_serhis">07/10/2021 08:00 -11:00 </p>
                                    <p id="duration_serhis">Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="serviceid_serhis">Service Id: 8488.</p>
                                    <p id="extras_serhis">Extras:</p>
                                    <p id="amount_serhis">Total Payment: <span class="currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="name_serhis">Customer Name:</p>
                                    <p id="address_serhis">Service Address:</p>                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="comment_serhis">Comments</p>
                                    <p id="pets_serhis"><span class="fa fa-times-circle-o"> </span> 
                                    I dont't have pets at home</p>
                                </div>
                                <hr>
                                
                            </div>
                            <div class="col-5 modal-map">
                                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=tatvasoft%20ahmedababd+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">fitness tracker</a></iframe>
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------- End of Service History Model ----------------------------------------------->

 
     <!------------------------------------------------------ Model For Service Accept------------------------------->
    <div class="modal fade" id="exampleModalServiceAccept" tabindex="-1" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-5 modal-body">
                                <div class="row">
                                    <p class="head">Service Details</p>
                                    <p class="time" id="accept_service_sp" >07/10/2021 08:00 -11:00 </p>
                                    <p id="duration_accept_sp">Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="serviceid_accept_sp">Service Id: 8488.</p>
                                    <p id="extras_accept_sp">Extras:</p>
                                    <p id="total_payment_accept_sp">Total Payment: <span class="currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="customer_name_accept">Customer Name: Gaurang Patel.</p>
                                    <p id="customer_address_accept">Service Address: Koenigstrasse 112,99897 Tambach-Dietharz</p>
                                    <p>Distance: 296,76</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head" id="comment_accept_sp">Comments</p>
                                    <p id="pets_accept_sp"><span class="fa fa-times-circle-o" ></span> I dont't have pets at home</p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                    <div class="col">
                                    <button class="modal-button-complete accept_id" 
                                     data-dismiss="modal" data-bs-toggle='modal'
                                     data-bs-target='#exampleModalServiceAccept'>
                                                        <p> <i class="fa fa-check"></i> Accept</p>
                                                    </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 modal-map">
                                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=tatvasoft%20ahmedababd+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">fitness tracker</a></iframe>
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------- End of Service Accept Model ----------------------------------------------->



<!-- ------------------------------------ Nav MOdel ---------------------------------------------- -->
 <div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b>Yatri!</b> </h4>
                </div>
                <div class="modal-body tab">
                    <a href="#dashboard"  class="" onclick="dashboard();" role="button" title="Dashboard">Dashboard</a>
                    <a href="#newservicerequests" class="" onclick="newservice();" role="button" title="New Service Requests">New Service Requests</a>
                    <a href="#upcomingservice"   class="active" onclick="upcoming();" role="button" title="Upcoming Service">Upcoming Service</a>
                    <a href="#newserviceschedule" class="" onclick="schedule();" role="button" title="Service Schedule">Service Schedule</a>
                    <a href="#servicehistory"  class="" onclick="history();" role="button" title="Service History">Service History</a>
                    <a href="#myratings"  class="" onclick="ratings();" role="button" title="My Ratings">My Ratings</a>
                    <a href="#blockcustomer"   class="block_customer_tab" onclick="blockcustomer();" role="button" title="Block Customer">Block Customer</a>
                    <a href="#invoice">Invoices</a>
                <a href="#notification">Notification</a>
                    <a href="#mySettings"  onclick="mySettings();" role="button">My Setting</a>
                    <a href="index.html">Logout</a>
                </div>
                <div class="modal-footer tab">
                    <a href="price.html" title="Prices & Services">Prices & Services</a>
                    <a href="#" title="Warranty">Warranty</a>
                    <a href="#" title="Blog">Blog</a>
                    <a href="contact us.html" title="Contact">Contact</a>
                </div>
               <hr>
                <div class ="footer-social1">
                    <img src="image/instagram.png" class="insta">
                    <img src="image/facebook.png" class="fb">
                </div>
            </div>
        </div>
</div>
<!------------------------------------------End of navbar Model----------------------------------------------------->
    

<!-----------------------------------------Left table----------------------------------------------------->

<main style="min-height:100vh;">
<div class="textdiv">
    <p class="text">Welcome,  <?php echo "<b>".$_SESSION['FirstName']."</b>"; ?>  </p>
</div>
  
    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab">
                <a href="#dashboard" id="dashboard1" class="" onclick="dashboard();" role="button" title="Dashboard">Dashboard</a>
                <a href="#newservicerequests" id="newservice" class="new_service_request" onclick="newservice();" role="button" title="New Service Requests">New Service Requests</a>
                <a href="#upcomingservice" id="upcoming" class="active upcoming_service" onclick="upcoming();" role="button" title="Upcoming Service">Upcoming Service</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button" title="Service Schedule">Service Schedule</a>
                <a href="#servicehistory" id="history" class="service_history_tab" onclick="history();" role="button" title="Service History"> Service History</a>
                <a href="#myratings" id="ratings" class="my_ratings_tab" onclick="ratings();" role="button" title="My Ratings">My Ratings</a>
                <a href="#blockcustomer" id="customer" class="block_customer_tab" onclick="blockcustomer();" role="button" title="Block Customer">Block Customer</a>
                <a href="#invoice">Invoices</a>
                <a href="#notification">Notification</a>
            </div>

            <!-----------------------------------------End of Left table----------------------------------------------------->
            <!-------------------------------------------settings tab--------------------------------------------->

<div class="content-section">

   <div class="divContent" id="mySettings">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#MyDetails" type="button" role="tab"  aria-selected="true">My Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link"  data-bs-toggle="tab" data-bs-target="#changePassword" type="button" role="tab"  aria-selected="false">Change Password</button>
                    </li>
                    
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="MyDetails" role="tabpanel" aria-labelledby="home-tab">
                        <p><b> Account Status : </b> Active </p>
                        <h6><b>Basic Details</b></h6>
                        
                        <div class="avatar_selected">
                                <img src="../assets/image/avatar-car.png" class="avatar_img" id="avatar_selected">
                            </div>

                           

                        <hr>
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control"  id="first_name_sp">
                                </div>

                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control"  id="last_name_sp">
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="email_sp" >
                                </div>
                            </div>
                        </div>
                        <div class="row "  style="margin-bottom:20px;">
                            <div class="col-sm-4">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" class="form-control" id="phoneNo_sp">
                                  </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" id="date_sp" class="form-control" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select class="form-select" id="nationality_sp" >
                                        <option  value="1" selected>German</option>
                                        <option value="2">American</option>
                                        <option value="3">Indian</option>
                                        <option value="4">Canadian</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <label> Gender </label>
                        <div class="row "  style="margin-bottom:20px;">
                        <div class="form-check col" style="margin-left:20px;">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Radios1" value="option1" id="male">
                            <label class="form-check-label" for="Radios1">
                              Male
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio"  id="Female" name="exampleRadios" id="Radios2" value="option2">
                            <label class="form-check-label" for="Radios2">
                              Female
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio"  id="not_to_say" name="exampleRadios" id="Radios3" value="option3">
                            <label class="form-check-label" for="Radios3">
                              Rather not to say
                            </label>
                        </div>
                        </div>
                        <label> Select Avatar</label>
                        
                        <div class="form-group">
                            <div class="columnAvatar">
                                <img src="../assets/image/avatar-female.png" class="avatar_img select" 
                                onclick="change_avatar('../assets/image/avatar-female.png')" 
                                >
                            </div>
                            <div class="columnAvatar">
                                <img  src="../assets/image/avatar-car.png" class="avatar_img " 
                                onclick="change_avatar('../assets/image/avatar-car.png')" 
                                 >
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar_img " 
                                onclick="change_avatar('../assets/image/avatar-hat.png')"
                                 src="../assets/image/avatar-hat.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar_img " 
                                onclick="change_avatar('../assets/image/avatar-iron.png')"
                                 src="../assets/image/avatar-iron.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar_img " 
                                onclick="change_avatar('../assets/image/avatar-male.png')"
                                 src="../assets/image/avatar-male.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar_img " 
                                onclick="change_avatar('../assets/image/avatar-ship.png')"
                                 src="../assets/image/avatar-ship.png">
                            </div>
                        </div>
                        
                        <h6 style="margin-top:190px;"><b>My Address</b></h6>
                        <hr>
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Street Name</label>
                                    <input type="text" id="streetName_sp"  class="form-control">
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>House Number</label>
                                    <input type="text"  id="houseno_sp" class="form-control" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Postal code</label>
                                    <input type="number" class="form-control" id="postalcode_sp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control"  id="city_sp">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div >
                        <button type="button" class="save" id="save_details_sp">Save</button>
                                <div class="save_details_sucess_sp text-success"></div>
                                <div class="save_details_error_sp text-danger"></div>                        </div>

                    </div> 
                                <!------------------------------------------- My Details--------------------------------------------->

                                <!-------------------------------------------Password--------------------------------------------->

                    <?php
                        $rr='';
                        if(isset($_SESSION['msg1'] ))
                        {
                        $rr=($_SESSION['msg1']);
                        unset($_SESSION['msg1']);
                        }
                        ?>
                    <div class="tab-pane fade" id="changePassword" role="tabpanel" aria-labelledby="nav-contact-tab">
                  
                         <?php 
                            if(!empty($rr)){
                        ?>
                        <div class="form-row mb-3">
                            <p class="text-center bg-success text-white px-4 py-2 mx-auto my-auto">
                        <?php 
                            echo $rr;
                        ?>
                        </p>
                        </div>
                        <?php } ?>
                        <div class="form-group col-sm-4">
                            <label>Old Password</label>
                            <input type="password" class="form-control"  id="old_password" placeholder="Old password "
                             name="password" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>New Password</label>
                            <input type="password" class="form-control" id="new_password" placeholder="New password" 
                            name="password" required>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password" name="cpassword" required>
                        </div>
                        <a href="#" >
                            <button type="submit" class="save" id="setting_update_password" data-bs-toggle="modal" data-dismiss="modal">Save</button></a>
                        <div id="update_password_sucess" class="text-success"></div>
                                <div id="update_password_error" class="text-danger"></div>
                        
                    </div>
                  </div>

            </div>

                  </form>
            </div>
                        <!-------------------------------------------End of Password--------------------------------------------->

            <!-------------------------------------------End settings tab--------------------------------------------->
            <div class="divContent" id="dashboard">
               
            </div>
            <div class="divContent" id="serviceschedule">
               

            </div>
                        <!-------------------------------------------Service History--------------------------------------------->

            <div class="divContent" id="servicehistory">
                <div>
                    <p style="color: black;">Payment Status:
                    <select name="mySelect" id="mySelect" onchange="setValue();">
                        <option value="1" selected="">All</option>
                        <option value="2"> All 1</option>
                        <option value="3"> All 2</option>
                        <option value="4">All 3</option>
                        <option value="3"> All 4</option>
                        <option value="4">All 5</option>
                    </select>
                    <form action="process1.php" method= "post">
                    <span class="buttonaccept" id="#btnExport"><button     style="float: right;">Export</button></span> 
                    </form>
                   
                </p>
                 </div>
                <div>
                    <table  class="services" id="mytable">
                      <thead>
                            <tr data-bs-toggle="modal" data-bs-target="#exampleModalServiceHistory"
                                            data-bs-dismiss="modal">
                                <th title="Service Id">Service ID <img src="image/both_arrow.png"></th>
                                <th title="Service Date">Service date <img src="image/both_arrow.png"></th>
                                <th title="Customer Details">Cutomer details <img src="image/both_arrow.png"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="image/calendar.png"><b>09/04/2018</b></div>
                                    <div><img src="image/clock1.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="image/home.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="image/calendar.png"><b>09/04/2018</b></div>
                                    <div><img src="image/clock1.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="image/home.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                
                            </tr>
                            
                        </tbody>
                    </table>

                    <div class="history-pagination">
                            <div class="show-page">Show</p>

                            <select name="entries" id="entries_serhis" class="entries">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                            <p class="show-page totalentries_serhis">Total Record: 2</p>
                            </div>
                            <div class="pagination pagejs paginations"> 
                            <div class="jump-left" title="Min"> <a onclick="ServiceHistoryPag_Sp('min')">
                            <img src="../assets/image/jump-left.png"></a></div>
                            <div class="jump-left" title="Min">   <a onclick="ServiceHistoryPag_Sp('back')">
                            <img src="../assets/image/next-left.png"></a></div>
                            <div class="current-page">
                                <a onclick="ServiceHistoryPag_Sp(id)" class="active min-pagination" id="1-pagination" 
                                style="color:white">1</a></div>
                                <div class="current-page">
                                <a onclick="ServiceHistoryPag_Sp(id)" class="mid1-pagination" id="2-pagination" 
                                style="color:white">2</a></div>
                                <div class="current-page">
                                <a onclick="ServiceHistoryPag_Sp(id)" class="mid2-pagination" id="3-pagination" 
                                style="color:white">3</a></div>
                                <div class="current-page">
                                <a onclick="ServiceHistoryPag_Sp(id)" class="max-pagination" id="4-pagination" 
                                style="color:white">4</a></div>  
                              <div class="jump-left" title="Min">   <a onclick="ServiceHistoryPag_Sp('next')">
                              <img src="../assets/image/next-left.png" style="transform: rotate(180deg);"></a></div>
                              <div class="jump-left" title="Min">   <a onclick="ServiceHistoryPag_Sp('max')">
                                <img src="../assets/image/jump-left.png" style="transform: rotate(180deg);"></a></div>
                                </div>
                            
                            </div>
                            </div>
                            </div>
                        <!-------------------------------------------End of Service History--------------------------------------------->

                        <!------------------------------------------- End of Ratings--------------------------------------------->

            <div class="divContent" id="myratings" class="rating_list">
                         
                <div class="card " >
                <p class="show">Ratings</p>



                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="card-title">8318</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Gaurang Patel</h6>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="image/calendar.png"><b>09/04/2018</b></div>
                                <div><img src="image/clock1.png">12:00 - 18:00</div>
                            </div>
                            <div class="col-sm-3">
                                <span>Ratings</span><br>
                              <div class="td-rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-o"></span>
                                            Very good
                                        </div>
                               
                        </div></div>
                    <hr>
                    <p>Customer Comments</p>
                    </div> 
                </div>
                <div class="card" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h5 class="card-title">7216</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Gaurang Patel</h6>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="image/calendar.png"><b>09/04/2018</b></div>
                                <div><img src="image/clock1.png">12:00 - 18:00</div>
                            </div>
                            <div class="col-sm-3">
                                <span>Ratings</span>
                                <div class="td-rating">
                                    
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-o"></span>
                                            Very good
                                        </div>
                                  
                            </div>
                        </div>
                    <hr>
                    <p>Customer Comments</p>
                    <p> Excellent work done by the provider i am very happy and would like to receive the services of the same provider.</p>
                    </div> 
                </div>
            </div>
          </div>

                        <!-------------------------------------------End of Ratings--------------------------------------------->

                        <!-------------------------------------------Block Customers--------------------------------------------->

                <div class="divContent" id="blockcustomer">
               
                            </div>
                        <!-------------------------------------------End of Block Customers--------------------------------------------->

                        <!-------------------------------------------New Service Requests--------------------------------------------->

            <div class="divContent" id="newservicerequests">
                <div>
                    <p style="color: black;">Service area :
                    <select name="mySelect" id="mySelect" onchange="setValue();">
                        <option value="1" selected="">2 KM</option>
                        <option value="2"> 5 KM</option>
                        <option value="3"> 10 KM</option>
                        <option value="4">15 KM</option>
                        <option value="3"> 20 KM</option>
                        <option value="4">25 KM</option>
                    </select>
                    <input type="checkbox" id="pet_home"> <span> Include Pet at home</span>
                </p>
                 </div>
                <div>
                    <table class="services" id="mytable1" > 
                        <thead>
                            <tr>
                                <th title="Service ID">Service ID <img src="image/both_arrow.png"></th>
                                <th title="Service Date">Service date <img src="image/both_arrow.png"></th>
                                <th title="Customer Details">Cutomer details <img src="image/both_arrow.png"></th>
                                <th title="Distance">Distance <img src="image/both_arrow.png"></th>
                                <th title="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="image/calendar.png"><b>09/04/2018</b></div>
                                    <div><img src="image/clock1.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="image/home.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td>15 km</td>
                                <td class="buttonaccept" title="Accept"> <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceAccept"
                                            data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <div class="history-pagination pages">
                            <div class="show-page">Show</p>

                            <select name="entries" id="entries_new" class="entries">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                            <p class="show-page" id="totalentries_new">Total Record: 2</p>
                            </div>

                            <div class="pagination pagejs paginations"> 
                            <div class="jump-left" title="Min"> <a onclick="paginationno_new('min')">
                            <img src="../assets/image/jump-left.png"></a></div>
                            <div class="jump-left" title="Min">   <a onclick="paginationno_new('back')">
                            <img src="../assets/image/next-left.png"></a></div>
                            <div class="current-page">
                            <a onclick="paginationno_new(id)" class="active min-pagination" id="pageno_new" 
                                style="color:white">1</a></div>
                            <div class="jump-left" title="Min">   <a onclick="paginationno_new('next')">
                              <img src="../assets/image/next-left.png" style="transform: rotate(180deg);"></a></div>
                              <div class="jump-left" title="Min">   <a onclick="paginationno_new('max')">
                                <img src="../assets/image/jump-left.png" style="transform: rotate(180deg);"></a></div>
                                </div>
                            </div>
                        </div>
                </div>
            
                <div>

                 </div></div></div> 
                        <!-------------------------------------------End of New Service Requests--------------------------------------------->
                       
                        <!-------------------------------------------Upcoming Services--------------------------------------------->


                 </div>  
            <div class="divContent" id="upcomingservice">
                <div>
                    <table class="services" id="mytable2">
                         <thead>
                            <tr>
                                <th title="Service ID">Service ID <img src="image/both_arrow.png"></th>
                                <th title="Service Date">Service date <img src="image/both_arrow.png"></th>
                                <th title="Customer Details">Cutomer details <img src="image/both_arrow.png"></th>
                                <th title="Distance">Distance <img src="image/both_arrow.png"></th>
                                <th title="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="image/calendar.png"><b>09/04/2018</b></div>
                                    <div><img src="image/clock1.png" >12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div>David Bough</div>
                                    <div><img src="image/home.png">Musterstrabe 5,12345 Bonn</div>
                                </td>
                                <td>15 km</td>
                                <td class="buttoncancel" title="Cancel"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
                         
                        </tbody>
                    </table>
                    <div class="history-pagination pages">
                            <div class="show-page">Show</p>

                            <select name="entries" id="entries_us" class="entries">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>

                            <p class="show-page" id="totalentries_us">Total Record: 2</p>
                            </div>

                            <div class="pagination pagejs paginations"> 
                            <div class="jump-left" title="Min"> <a onclick="paginationno_us('min')">
                            <img src="../assets/image/jump-left.png"></a></div>
                            <div class="jump-left" title="Min">   <a onclick="paginationno_us('back')">
                            <img src="../assets/image/next-left.png"></a></div>
                            <div class="current-page">
                            <a onclick="paginationno_us(id)" class="active min-pagination" id="pageno_us" 
                                style="color:white">1</a></div>
                            <div class="jump-left" title="Min">   <a onclick="paginationno_us('next')">
                              <img src="../assets/image/next-left.png" style="transform: rotate(180deg);"></a></div>
                              <div class="jump-left" title="Min">   <a onclick="paginationno_us('max')">
                                <img src="../assets/image/jump-left.png" style="transform: rotate(180deg);"></a></div>
                                </div>
                            </div>
                        </div>

               
            </div>
        </div>
            </div>
            <div>
                        </div>       
    </div>
</div>
</section>
                    <!-------------------------------------------End of Upcoming Services--------------------------------------------->

</main>
</div>
<!-----------------------------------------End of table----------------------------------------------------->

 <!-- --------------------------------------------------Footer ------------------------------------------------------------  -->

 <?php include 'footer.php';?>


 <!-- -------------------------------------------------- End of Footer ------------------------------------------------------------  -->

  </body>
<script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/css/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function change_avatar(src) {
    $('#avatar_selected').attr('src', src);
}

$('.avatar_img').click(function () {
    $('.select').removeClass('select');
    $(this).addClass('select');
});




function loadNewServiceRequest_SP(offset, limit){
    $.ajax({
        url: "http://localhost/project/?function=loadServiceRequest_SP&parameter=" + offset + "-" + limit,
        success: function (response) {
           // console.log(response);
            $('#mytable1').html(response);
        }
    });
    totalentries_NewService_SP();

}
$('#entries_new').change(function (e) {
    e.preventDefault();

    limit = $('#entries_new').val();

    loadNewServiceRequest_SP(0, limit);
    $('#pageno_new').html("1");
});


$('.new_service_request').click(function (e) { 
    e.preventDefault();

    loadNewServiceRequest_SP(0,2);
    $('#pageno_new').html("1");
    $('#entries_new').val("2");
});


function paginationno_new(textno) {
    limit = $('#entries_new').val();

    totalentriestext = $('#totalentries_new').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    currentpageno = parseInt($('#pageno_new').html());

    maxpageno = Math.ceil(totalentries / limit);
    if (textno == 'next') {
        currentpageno += 1;

        if (currentpageno <= maxpageno) {
            $('#pageno_new').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            loadNewServiceRequest_SP(offset, limit);
        }
    } else if (textno == 'back') {
        currentpageno -= 1;

        if (currentpageno > 0) {
            $('#pageno_new').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            loadNewServiceRequest_SP(offset, limit);
        }
    } else if (textno == 'max') {
        $('#pageno_new').html(maxpageno);

        offset = (currentpageno - 1) * limit;
        loadNewServiceRequest_SP(offset, limit);

    } else if (textno == 'min') {
        $('#pageno_new').html(1);

        offset = (currentpageno - 1) * limit;
        loadNewServiceRequest_SP(offset, limit);
    } else {
        console.log("Error in Pagination");
    }
}



function totalentries_NewService_SP() {
    $.ajax({
        url: "http://localhost/project/?function=TotalEntriesNewServiceRequest",
        success: function (response) {
            $('#totalentries_accept').html("Total Record: " + response);
        }
    });
}

$('.accept_id').click(function (e) {
    e.preventDefault();

    id = $('.accept_id').attr('id');
    id_arr = id.split("-");
    serviceid = parseInt(id_arr[0]);
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=IsServiceProviderAssigned",
        data: {
            id: serviceid
           
        },
        success: function (response) {
        console.log(response);
            if (parseInt(response) == 0) {
                console.log(response);
                $.ajax({
                    type: "POST",
                    url: "http://localhost/project/?function=SetServiceProvider",
                    data: {
                        id: serviceid
                    },
                    success: function (response) {
                        loadNewServiceRequest_SP(0, 2);

                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something Already Taken This Service!'
                })
                loadNewServiceRequest_SP(0,2);
            }
        }
    });
    $('#entries_new').val(2);
    $('#pageno_new').html(1);
    
});
// $('.accept_id').click(function (e) { 
//     e.preventDefault();

//     id = $('.accept_id').attr('id');
//     id_arr = id.split("-");
//     serviceid = parseInt(id_arr[0]);
//    // console.log(serviceid);
    
//     $.ajax({
//         type: "POST",
//         url: "http://localhost/project/?function=SetServiceProvider",
//         data: {
//             id : serviceid
//         },
//         success: function (response) {
//             loadNewServiceRequest_SP(0,2);
//             console.log(response);
//         }
//     });
    
 
// });
function Accept_Service(serviceproviderid){
    $.ajax({
        method: "POST",
        url: "http://localhost/project/?function=setAcceptServiceModal",
        data:{
            id : serviceproviderid
        },
        success: function (response) {
            details = JSON.parse(response);
           // var string1 = JSON.stringify(response);
            //details = JSON.parse(response);  



            console.log(response);
            
            $('#accept_service_sp').html(details["date"] + " " + details["starttime"] + "-" + details["endtime"]);
            $('#duration_accept_sp').html("Duration: " + details["totalhr"]);
            $('#serviceid_accept_sp').html("Service Id: " + details["serviceid"]);
            $('#total_payment_accept_sp').html(details["payment"] + "€");
            $('#customer_name_accept').html("Customer Name: " + details["name"]);
            $('#customer_address_accept').html("Service Address: " + details["customer_address"]);

            extras = "";
            $.each(details["ExtraService"], function (indexInArray, service) { 
                 extras += service + " "
            });

            $('#extras_accept_sp').html("Extras: " + extras);
            $('#comment_accept_sp').html("Comments: " + details["comment"]);

            if (details["HasPets"] == 0) {
                $('#pets_accept_sp').html("<img  src='../assets/image1/not-included.png' style='width: 20px;height: 20px;'>  I don't have pets at home.");
            } else {
                $('#pets_accept_sp').html("<img  src='../assets/image1/included.png' style='width: 20px;height: 20px;'> I have pets at home.");
            }
            $('.accept_id').attr('id',serviceproviderid + "-accept_sp");

        }
    });
}
function loadUpcomingService(offset, limit){
    $.ajax({
        url: "http://localhost/project/?function=loadUpcomingService_SP&parameter=" + offset + "-" + limit,
        success: function (response) {
            $('#mytable2').html(response);
        }
    });
    totalentries_us();

}
$('#entries_us').change(function (e) {
    e.preventDefault();

    limit = $('#entries_us').val();

    loadUpcomingService(0, limit);
    $('#pageno_us').html("1");
});




$(document).ready(function () {
    loadUpcomingService(0,2)
});
function totalentries_us() {
    $.ajax({
        url: "http://localhost/project/?function=TotalEntriesUpcomingService",
        success: function (response) {
            $('#totalentries_us').html("Total Record: " + response);
        }
    });
}



$('.upcoming_service').click(function (e) {
    e.preventDefault();
    loadUpcomingService(0, 2);
    $('#pageno_us').html("1");
    $('#entries_us').val("2");

});

function SetUpcomingServiceModal(servicerequestid){

$.ajax({
    type: "POST",
    url: "http://localhost/project/?function=GetUpcomingServiceDetails",
    data: {
        id : servicerequestid
    },
    success: function (response) {
        var serviceDetails = JSON.parse(response);
        console.log(serviceDetails);
        $('#date_upcoming_service').html(serviceDetails["date"] + " " + serviceDetails["starttime"] + "-" + serviceDetails["endtime"]);
        $('#duration_us').html("Duration: " + serviceDetails["totalhr"]);
        $('#serviceid_us').html("Service Id: " + serviceDetails["serviceid"]);
        $('#amount_us').html(serviceDetails["payment"] + "€");
        $('#name_us').html("Customer Name: " + serviceDetails["name"]);
        $('#address_us').html("Service Address: " + serviceDetails["customer_address"]);
        $('#comment_us').html("Comments: " + serviceDetails["comment"]);

        extraservice = "";
        $.each(serviceDetails["ExtraService"], function (indexInArray, value) { 
             extraservice += value + ", ";
        });
        $('#extras_us').html("Extras: " + extraservice);

        if (serviceDetails["HasPets"] == 0) {
            $('#pets_us').html("<img  src='../assets/image1/not-included.png' style='width: 20px;height: 20px;'>  I don't have pets at home.");
        } else {
            $('#pets_us').html("<img  src='../assets/image1/included.png' style='width: 20px;height: 20px;'> I have pets at home.");
        }
        if (serviceDetails["Complete"] == 1) {
                $('.complete_us').css('display', 'inline');
                // $('.complete_us').html("<p> <i class='fas fa-check'></i> Complete</p>")
            } else {
                $('.complete_us').css('display', 'none');
            }
        $('.serviceRequestId_us').attr('id', serviceDetails["ServiceRequestId"] + "_serviceRequestId-us");
        console.log($('.serviceRequestId_us').attr('id'));

    }
});



}
$('#cancelService_us').click(function (e) {
    e.preventDefault();

    id = $('.serviceRequestId_us').attr('id');
    idarr = id.split('_');
    serviceRequestId = parseInt(idarr[0]);
    console.log(id);
   
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=cancelServiceRequest",
        data: {
            id: serviceRequestId
        },
        success: function (response) {
            loadUpcomingService(0, 2);
        }
    });

});
$('#completeService_us').click(function (e) {
    e.preventDefault();

    id = $('.serviceRequestId_us').attr('id');
    idarr = id.split('_');
    serviceRequestId = parseInt(idarr[0]);
    
    $.ajax({
        
        type: "POST",
        url: "http://localhost/project/?function=completeServiceRequest",
        data: {
            id: serviceRequestId
        },
        success: function (response) {
            loadUpcomingService(0, 2);
            console.log(response);
        }
    });

});
function totalServiceHistory_Sp() {
    $.ajax({
        url: "http://localhost/project/?function=TotalEntriesServiceHistory_Sp",
        success: function (response) {
            $('.totalentries_serhis').html("Total Record: " + response);
        }
    });
}
function paginationno_us(textno) {
    limit = $('#entries_us').val();

    totalentriestext = $('#totalentries_us').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    currentpageno = parseInt($('#pageno_us').html());

    maxpageno = Math.ceil(totalentries / limit);
    if (textno == 'next') {
        currentpageno += 1;

        if (currentpageno <= maxpageno) {
            $('#pageno_us').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            loadUpcomingService(offset, limit);
        }
    } else if (textno == 'back') {
        currentpageno -= 1;

        if (currentpageno > 0) {
            $('#pageno_us').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            loadUpcomingService(offset, limit);
        }
    } else if (textno == 'max') {
        $('#pageno_us').html(maxpageno);

        offset = (currentpageno - 1) * limit;
        loadUpcomingService(offset, limit);

    } else if (textno == 'min') {
        $('#pageno_us').html(1);

        offset = (currentpageno - 1) * limit;
        loadUpcomingService(offset, limit);
    } else {
        console.log("Error in Pagination");
    }
}

$('.upcoming_service').click(function (e) {
    e.preventDefault();
    loadUpcomingService(0, 2);
    $('#pageno_us').html("1");
    $('#entries_us').val("2");

});

function loadServiceHistory_Sp(offset, limit) {
    $.ajax({
        url: "http://localhost/project/?function=loadServiceHistory_SP&parameter=" + offset + "-" + limit,
        success: function (response) {
            $('#mytable').html(response);
        }
    });
    totalServiceHistory_Sp();

}
$('.service_history_tab').click(function (e) { 
    e.preventDefault();
   
    loadServiceHistory_Sp();
});

function SetServiceHistoryModal_SP(servicerequestid){
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=GetUpcomingServiceDetails",
            data: {
                id: servicerequestid
            },
            success: function (response) {
                var serviceDetails = JSON.parse(response);
                // console.log(response);
                //console.log(serviceDetails);
                $('#date_serhis').html(serviceDetails["date"] + " " + serviceDetails["starttime"] + "-" + serviceDetails["endtime"]);
                $('#duration_serhis').html("Duration: " + serviceDetails["totalhr"]);
                $('#serviceid_serhis').html("Service Id: " + serviceDetails["serviceid"]);
                $('#amount_serhis').html(serviceDetails["payment"] + "€");
                $('#name_serhis').html("Customer Name: " + serviceDetails["name"]);
                $('#address_serhis').html("Service Address: " + serviceDetails["customer_address"]);
                $('#comment_serhis').html("Comments: " + serviceDetails["comment"]);

                extraservice = "";
                $.each(serviceDetails["ExtraService"], function (indexInArray, value) {
                    extraservice += value + ", ";
                });
                $('#extras_serhis').html("Extras: " + extraservice);

                if (serviceDetails["HasPets"] == 0) {
                    $('#pets_serhis').html("<img  src='../assets/image1/not-included.png' style='width: 20px;height: 20px;'>  I don't have pets at home.");
                } else {
                    $('#pets_serhis').html("<img  src='../assets/image1/included.png' style='width: 20px;height: 20px;'> I have pets at home.");
                }

            }
        });
    }
    $('#mySettings').click(function () {


setting_set_details_sp();
});


function setting_set_details_sp() {
    $.ajax({
        url: "http://localhost/project/?function=getdetails",
        success: function (response) {
            var userdetails = JSON.parse(response);
            // console.log(userdetails);

            $('#first_name_sp').val(userdetails['FirstName']);
            $('#last_name_sp').val(userdetails['LastName']);
            $('#email_sp').val(userdetails['Email']);
            $('#phoneNo_sp').val(userdetails['Mobile']);

          
            $('#date_sp').val(userdetails['DateOfBirth']);
         

        }
    });
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=setAdress_sp",
        success: function (response) {
            var userdetails = JSON.parse(response);
            // console.log(response);

            $('#streetName_sp').val(userdetails["AddressLine2"]);
            $('#houseno_sp').val(userdetails["AddressLine1"]);
            $('#postalcode_sp').val(userdetails["PostalCode"]);
            $('#city_sp').val(userdetails["City"]);

        }
    });
}

    $('#save_details_sp').click(function (e) {
    e.preventDefault();
    src = $('#avatar_selected').attr('src');
    avatar_name_arr = src.split('/');
    avatar_name = avatar_name_arr[3];
    console.log(avatar_name);

    fname = $('#first_name_sp').val().trim();
    lname = $('#last_name_sp').val().trim();
    email = $('#email_sp').val().trim();
    phoneNo = $('#phoneNo_sp').val().trim();
    date = $('#date_sp').val();
    nationality = $('#nationality_sp').val();
    gender_val = $("input[name='gender']:checked").val();
    if (gender_val == 'male') {
        gender = 0;
    } else if (gender_val == 'Female') {
        gender = 1;
    } else {
        gender = 2;
    }
    //Address
    StreetName = $('#streetName_sp').val().trim();
    HouseNo = $('#houseno_sp').val().trim();
    PostalCode = $('#postalcode_sp').val().trim();
    City = $('#city_sp').val().trim();

    if (fname == "" || lname == "" || email == "" || phoneNo == "" || StreetName == "" || HouseNo == "" || PostalCode == "" || City == "") {
        $('.save_details_error_sp').html("Please enter all details");
        $('.save_details_sucess_sp').html("");
    } else if (phoneNo.length != 10) {
        $('.save_details_error_sp').html("Please enter correct mobile no");
        $('.save_details_sucess_sp').html("");
    } else if (PostalCode.length != 6) {
        $('.save_details_error_sp').html("Please enter correct postal code");
        $('.save_details_sucess_sp').html("");
    } else if (!String(email)
        .toLowerCase()
        .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )) {
        $('.save_details_error_sp').html("Please enter email in correct format");
        $('.save_details_sucess_sp').html("");
    } else {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=updatedetails_sp",
            data: {
                FirstName: fname,
                LastName: lname,
                Email: email,
                PhoneNo: phoneNo,
                date: date,
                Nationality: nationality,
                Gender: gender,
                logo_name: avatar_name,
                streetName: StreetName,
                houseNo: HouseNo,
                postalcode: PostalCode,
                city: City
            },
            success: function (response) {
                $('.save_details_error_sp').html("");
                $('.save_details_sucess_sp').html("Updated Successfully");
            }
        });
    }
});



function loadBlockedCustomer_SP(offset, limit) {
    $.ajax({
        url: "http://localhost/project/?function=GetBlockedCustomerlist",
        success: function (response) {
            // console.log(response);
            $('#blockcustomer').html(response);
        }
    });


}


// Block Customer of Service Provider

$('.block_customer_tab').click(function (e) {
    e.preventDefault();

    loadBlockedCustomer_SP();

});

$(document).on("click", ".favblock", function (e) {

    id = $(this).attr('id');

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=SetFavBlockedCustomerlist",
        data: {
            favouriteId: id
        },
        success: function (response) {
            loadBlockedCustomer_SP();
        }
    });
});

$('#setting_update_password').click(function (e) {
    e.preventDefault();

    old_password = $('#old_password').val();
    new_password = $('#new_password').val();
    confirm_password = $('#confirm_password').val();

    if (old_password == "" || new_password == "" || confirm_password == "") {
        $('#update_password_sucess').html(" ");
        $('#update_password_error').html("Please Enter all the values");
    } else if (new_password != confirm_password) {
        $('#update_password_sucess').html(" ");
        $('#update_password_error').html("Please enter the same password");
    } else {

        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=oldpasswordcheck",
            data: {
                oldPassword: old_password
            },
            success: function (response) {
                if (old_password != old_password) {
                    $('#update_password_sucess').html(" ");
                    $('#update_password_error').html("Incorrect old password");
                   
                } else {
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/project/?function=updatePassword",
                        data: {
                            password: new_password
                        },
                        success: function (response) {
                            $('#update_password_error').html(" ");
                            $('#update_password_sucess').html("Password Updated");
                        }
                    });
                }
            }
        });
    }

});
$('.service_history_tab').click(function (e) {
    e.preventDefault();

    loadServiceHistory_Sp(0, 2);
});

$('#entries_serhis').change(function (e) {
    e.preventDefault();

    limit = $('#entries_serhis').val();
    loadServiceHistory_Sp(0, limit);

});
function ServiceHistoryPag_Sp(textno) {
    limit = $('#entries_serhis').val();

    totalentriestext = $('.totalentries_serhis').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    maxpageno = Math.ceil(totalentries / limit);
    currentpageno = parseInt($('.pagejs .active').html());

    if ($("#" + textno).length != 0) {
        noarr = textno.split("-");
        textno = parseInt(noarr[0]);
    }

    if ($.isNumeric(textno)) {

        $('.pagejs .active').removeClass('active');

        offset = (textno - 1) * limit;
        loadServiceHistory_Sp(offset, limit);
        $('#' + textno + '-pagination').addClass('active');
    } else if (textno == "next") {

        if ($('.pagejs .active').hasClass('max-pagination')) {


            if (currentpageno < maxpageno) {
                $('.max-pagination').html(currentpageno + 1);
                $('.max-pagination').attr('id', (currentpageno + 1) + "-pagination");

                $('.min-pagination').html(currentpageno - 2);
                $('.min-pagination').attr('id', (currentpageno - 2) + "-pagination");

                $('.mid1-pagination').html(currentpageno - 1);
                $('.mid1-pagination').attr('id', (currentpageno - 1) + "-pagination");

                $('.mid2-pagination').html(currentpageno);
                $('.mid2-pagination').attr('id', (currentpageno) + "-pagination");

                currentpageno = parseInt($('.pagejs .active').html());
                currentpageno -= 1;
            }
        }

        if (currentpageno < maxpageno) {

            $('.pagejs .active').removeClass('active');
            currentpageno += 1;
            offset = (currentpageno - 1) * limit;
            loadServiceHistory_Sp(offset, limit);
            $('#' + currentpageno + '-pagination').addClass('active');
        }


    } else if (textno == "back") {

        if ($('.pagejs .active').hasClass('min-pagination')) {
            if (currentpageno > 1) {
                console.log(currentpageno);

                $('.min-pagination').html(currentpageno - 1);
                $('.min-pagination').attr('id', (currentpageno - 1) + "-pagination");

                $('.max-pagination').html(currentpageno + 2);
                $('.max-pagination').attr('id', (currentpageno + 2) + "-pagination");

                $('.mid1-pagination').html(currentpageno);
                $('.mid1-pagination').attr('id', (currentpageno) + "-pagination");

                $('.mid2-pagination').html(currentpageno + 1);
                $('.mid2-pagination').attr('id', (currentpageno + 1) + "-pagination");
            }
        }


        if (currentpageno > 1) {
            $('.pagejs .active').removeClass('active');
            currentpageno -= 1;
            offset = (currentpageno - 1) * limit;
            loadServiceHistory_Sp(offset, limit);
            $('#' + currentpageno + '-pagination').addClass('active');
        }
    } else if (textno == "max") {

        paginationmaxno = $('.max-pagination').html();

        if (paginationmaxno < maxpageno && currentpageno <= maxpageno) {

            console.log("Hello");
            $('.min-pagination').html(maxpageno - 3);
            $('.min-pagination').attr('id', (maxpageno - 3) + "-pagination");

            $('.max-pagination').html(maxpageno);
            $('.max-pagination').attr('id', (maxpageno) + "-pagination");

            $('.mid1-pagination').html(maxpageno - 2);
            $('.mid1-pagination').attr('id', (maxpageno - 2) + "-pagination");

            $('.mid2-pagination').html(maxpageno - 1);
            $('.mid2-pagination').attr('id', (maxpageno - 1) + "-pagination");

        }

        $('.pagejs .active').removeClass('active');
        offset = (maxpageno - 1) * limit;
        loadServiceHistory_Sp(offset, limit);
        $('#' + maxpageno + '-pagination').addClass('active');

    } else if (textno == "min") {

        if (currentpageno > 1) {
            $('.min-pagination').html("1");
            $('.min-pagination').attr('id', 1 + "-pagination");

            $('.max-pagination').html("4");
            $('.max-pagination').attr('id', 4 + "-pagination");

            $('.mid1-pagination').html("2");
            $('.mid1-pagination').attr('id', 2 + "-pagination");

            $('.mid2-pagination').html("3");
            $('.mid2-pagination').attr('id', 3 + "-pagination");
        }

        $('.pagejs .active').removeClass('active');
        offset = 0;
        loadServiceHistory_Sp(offset, limit);
        $('#1-pagination').addClass('active');

    } else {
        console.log("Pagination Error");
    }
}
function totalratings_SP(){

order = $("input[type=radio][name=rating_Sp]:checked").val();
rating_val = $('#star_value').val();

$.ajax({
    type: "POST",
    url: "http://localhost/project/?function=TotalRatinglist_Sp",
    data: {
        orderby: order,
        rating : rating_val,
    },
    success: function (response) {
        //$('#totalentries_rating_Sp').html("Total Record: " + response);
        
    }
});
}
function loadratings_SP(){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=Ratinglist_Sp",
        data: {
            orderby: order,
            rating : rating_val
        },
        success: function (response) {
            console.log(response);
            $('#myratings').html(response);

            $('.starrating_Sp').rateYo({
                starWidth: "20px",
                readOnly: true
            });

            $('.rating_value_Sp').each(function() {

                id = $(this).attr('id');
                rating_val = parseFloat($(this).html());
                id_arr = id.split("-");
                serviceRequestId = parseInt(id_arr[0]);
            
                $('#' + serviceRequestId + '-ratingSp').rateYo("option", "rating", rating_val);
            });            
        }
    });

}
$('.my_ratings_tab').click(function (e) { 
    e.preventDefault();

    order = $("input[type=radio][name=rating_Sp]:checked").val();

    rating_val = $('#star_value').val();
    loadratings_SP(order,rating_val);
    
});

$("input[type=radio][name=rating_Sp]").change(function (e) { 
    e.preventDefault();
    
    order = $(this).val();

    rating_val = $('#star_value').val();
    loadratings_SP(order,rating_val);

    $('.sorting_option').css('display', 'none');
});

$('#star_value').change(function (e) { 
    e.preventDefault();
    
    order = $("input[type=radio][name=rating_Sp]:checked").val();

    rating_val = $('#star_value').val();
    loadratings_SP(order,rating_val);
});


    </script>
</html>
