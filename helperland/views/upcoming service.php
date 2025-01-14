<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/services provider_upcoming service.css"> 
       <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Service Provider_Upcoming</title>
</head>
        
<body>

  <!------------------------------------------------------------------- Model For Login ---------------------------------------------------->

  
  <?php include 'header3.php'; ?> 
  
    <!-- -----------------------------------------------End Model ----------------------------------------------------------------------->
  

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
                                    <p class="time">07/10/2021 08:00 -11:00 </p>
                                    <p>Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head">Service Id: 8488.</p>
                                    <p>Extras:</p>
                                    <p>Total Payment: <span class="currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head">Customer Name: Gaurang Patel.</p>
                                    <p>Service Address: Koenigstrasse 112,99897 Tambach-Dietharz</p>
                                    <p>Distance: 296,76</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head">Comments</p>
                                    <p><span class="fa fa-times-circle-o"></span> I dont't have pets at home</p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                    <div class="col">
                                        <button class="modal-button-cancel" title="Cancel"><i class="fa fa-times"></i> Cancel</button>
                                        <button class="modal-button-complete" title="Complete"><i class="fa fa-check"></i>
                                            Complete</button>
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
                                    <p class="time">07/10/2021 08:00 -11:00 </p>
                                    <p>Duration: 3 Hrs </p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head">Service Id: 8488.</p>
                                    <p>Extras:</p>
                                    <p>Total Payment: <span class="currency">56,25 €</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head">Customer Name: Gaurang Patel.</p>
                                    <p>Service Address: Koenigstrasse 112,99897 Tambach-Dietharz</p>
                                    <p>Distance: 296,76</p>
                                </div>
                                <hr>
                                <div class="row">
                                    <p class="head">Comments</p>
                                    <p><span class="fa fa-times-circle-o"></span> I dont't have pets at home</p>
                                </div>
                                <hr>
                                <div class="row modal-button">
                                    <div class="col">
                                        <button class="modal-button-complete" title="Accept"><i class="fa fa-check"></i>
                                            Accept</button>
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
                    <a href="#blockcustomer"   class="" onclick="blockcustomer();" role="button" title="Block Customer">Block Customer</a>
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
    <p class="text">Welcome, <b>Yatri!</b></p>
</div>
  
    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab">
                <a href="#dashboard" id="dashboard1" class="" onclick="dashboard();" role="button" title="Dashboard">Dashboard</a>
                <a href="#newservicerequests" id="newservice" class="" onclick="newservice();" role="button" title="New Service Requests">New Service Requests</a>
                <a href="#upcomingservice" id="upcoming" class="active" onclick="upcoming();" role="button" title="Upcoming Service">Upcoming Service</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button" title="Service Schedule">Service Schedule</a>
                <a href="#servicehistory" id="history" class="" onclick="history();" role="button" title="Service History"> Service History</a>
                <a href="#myratings" id="ratings" class="" onclick="ratings();" role="button" title="My Ratings">My Ratings</a>
                <a href="#blockcustomer" id="customer" class="" onclick="blockcustomer();" role="button" title="Block Customer">Block Customer</a>
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
                        <hr>
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="Yatri">
                                </div>

                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" placeholder="Shah">
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="yatri@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="row "  style="margin-bottom:20px;">
                            <div class="col-sm-4">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                  </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="26/03/2000">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select class="form-select" >
                                        <option selected>German</option>
                                        <option value="1">American</option>
                                        <option value="2">Indian</option>
                                        <option value="3">Canadian</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <label> Gender </label>
                        <div class="row "  style="margin-bottom:20px;">
                        <div class="form-check col" style="margin-left:20px;">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Radios1" value="option1">
                            <label class="form-check-label" for="Radios1">
                              Male
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Radios2" value="option2">
                            <label class="form-check-label" for="Radios2">
                              Female
                            </label>
                        </div>
                        <div class="form-check col">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Radios3" value="option3">
                            <label class="form-check-label" for="Radios3">
                              Rather not to say
                            </label>
                        </div>
                        </div>
                        <label> Select Avatar</label>
                        
                        <div class="form-group">
                            <div class="columnAvatar">
                                <img class="avatar" src="image/avatar-female.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="image/avatar-car.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="image/avatar-hat.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="image/avatar-iron.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="image/avatar-male.png">
                            </div>
                            <div class="columnAvatar">
                                <img class="avatar" src="image/avatar-ship.png">
                            </div>
                        </div>
                    </select>
                        
                        <h6 style="margin-top:190px;"><b>My Address</b></h6>
                        <hr>
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Street Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>House Number</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Postal code</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div >
                            <button class="save"> Save </button>
                        </div>

                    </div> 
                                <!------------------------------------------- My Details--------------------------------------------->

                                <!-------------------------------------------Password--------------------------------------------->

                    <div class="tab-pane fade" id="changePassword" role="tabpanel">
                        <div class="form-group  col-sm-3" >
                            <label>Old Password</label>
                            <input type="password" class="form-control" placeholder="Old Password ">
                        </div>
                        <div class="form-group  col-sm-3">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group  col-sm-3">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div >
                            <button class="save"> Save </button>
                        </div>
                    </div>
                   
                  </div>
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
                    <span class="buttonaccept"><button   style="float: right;">Export</button></span> 

                   
                </p>
                 </div>
                <div>
                    <table  class="services" id="mytable">
                      <thead>
                            <tr>
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

                </div>
               
            </div>

                        <!-------------------------------------------End of Service History--------------------------------------------->

                        <!------------------------------------------- End of Ratings--------------------------------------------->

            <div class="divContent" id="myratings">
                <div class="card " >
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
                        <!-------------------------------------------End of Ratings--------------------------------------------->

                        <!-------------------------------------------Block Customers--------------------------------------------->

                <div class="divContent" id="blockcustomer">
                <div class="row " >
                    <div class="col-sm-5 ">
                      <div class="card">
                        <div class="card-body text-center">
                         <div class="td-rating" style="justify-content: center;">
                          <div class="rating-img"><img src="image/image_table.png"></div></div>

                          <h5 class="card-title">Gurang Patel</h5>
                         <button class="buttonblock">Block</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card">
                          <div class="card-body text-center">
                           <div class="td-rating" style="justify-content: center;">   
                                        <div class="rating-img"><img src="image/image_table.png"></div></div>
                            <h5 class="card-title">Keyur Nakrani</h5>
                           <button class="buttonblock">Block</button>
                          </div>
                        </div>
                      </div> 
            </div>

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
                    <input type="checkbox"> <span> Include Pet at home</span>
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
                                <td>15 km</td>
                                <td class="buttonaccept" title="Accept"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceAccept"
                                            data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
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
                                <td class="buttonaccept" title="Accept"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceAccept"
                                            data-bs-dismiss="modal">Accept</button>
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
                                <td>15 km</td>
                                <td class="buttonaccept" title="Accept"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceAccept"
                                            data-bs-dismiss="modal">Accept</button>
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
                                <td>15 km</td>
                                <td class="buttonaccept" title="Accept"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceAccept"
                                            data-bs-dismiss="modal">Accept</button>
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
                                <td>15 km</td>
                                <td class="buttonaccept" title="Accept">
                                    <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceAccept"
                                            data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                                <td>15 km</td>
                                <td class="buttoncancel" title="Cancel"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>
                                </td>
                            </tr>
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
                                <td>15 km</td>
                                <td class="buttoncancel" title="Cancel"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>
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
                                <td>15 km</td>
                                <td class="buttoncancel" title="Cancel"><button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>
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
                                <td>15 km</td>
                                <td class="buttoncancel"title="Cancel">
                                    <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>
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
                                <td>15 km</td>
                                <td class="buttoncancel"title="Cancel">
                                  <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>
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
                                <td>15 km</td>
                                <td class="buttoncancel" title="Cancel">
                                            <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button>  </td>
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
                                <td>15 km</td>
                                <td class="buttoncancel"title="Cancel">
                                            <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button> </td>
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
                                <td>15 km</td>
                                <td class="buttoncancel" title="Cancel">
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceCancel"
                                            data-bs-dismiss="modal">Cancel</button> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                      <div class="history-pagination">
                        <div class="show-page">
                             <p style="color: black;">Size :
                <select name="mySelect" id="mySelect" onchange="setValue();">
                    <option value="1" selected="">10</option>
                    <option value="2"> 20</option>
                    <option value="3"> 50</option>
                    <option value="4">100</option>
                </select>
            </p>
                        </div>
                        <div class="paginations">
                            <div class="jump-left"><img src="image/jump-left.png" alt=""></div>
                            <div class="next-left"><img src="image/next-left.png" alt=""></div>
                            <div class="current-page">1</div>
                            <div>2</div>
                            <div>3</div>
                            <div>4</div>
                            <div class="next-right"><img src="image/next-left.png" alt=""></div>
                            <div class="jump-right"><img src="image/jump-left.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
               
            </div>
               
             </div>
            </div>
        </div>
    </div>
</section>
                        <!-------------------------------------------End of Upcoming Services--------------------------------------------->

</main>
</div>
<!-----------------------------------------End of table----------------------------------------------------->

 <!-- --------------------------------------------------Footer ------------------------------------------------------------  -->

 <section id="section-footer" class="container-fluid">
        <div class="f-main row">
            <div class="footer-logo col-xl-2">
                <img src="image/logo.png"
                    srcset="image/logo.png" class="footer1-logo " title="Helperland" style="width:100px;">
            </div>
            <div class="footer-nav col-xl-8">
                <ul>
                    <li><a href="index.html" title="home">HOME</a></li>
                    <li><a href="about us.html" title="About">ABOUT</a></li>
                    <li><a href="#" title="Testimonials">TESTIMONIALS</a></li>
                    <li><a href="faqpage.html" title=Faqs>FAQS</a></li>
                    <li><a href="#" title=Insurance>INSURANCE</a></li>
                    <li><a href="contact us.html"title="Policy">POLICY</a></li>
                    <li><a href="#"title="Impressum">IMPRESSUM</a></li>
                </ul>
            </div>
            <div class="footer-social col-xl-2">
                <img src="image/facebook.png" alt="">
                <img src="image/instagram.png" alt="">
            </div>
        </div>
        <hr class="hr">
        <div class="f-sub">
            <p>©2018 Helperland. All rights reserved. Terms and Conditions | Privacy Policy</p>
        </div>
    </section>

 <!-- -------------------------------------------------- End of Footer ------------------------------------------------------------  -->

  </body>
<script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="css/script.js"></script>
</html>
