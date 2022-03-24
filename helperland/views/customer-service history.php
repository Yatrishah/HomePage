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
    <link rel="stylesheet" type="text/css" href="../assets/css/customerHistory.css">   
     <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">  
      <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-
awesome.min.css"> -->

    <?php include '../views/include/header_customer.php'; ?> 

<title>Customer-Service History</title>
</head>
        
<body>

<?php include '../views/include/header3.php'; ?> 


 <!-- --------------------------------------------------modal for tabs with navbar ------------------------------------------------------------  -->
<div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center" style="float: right;">
            <div class="modal-content">
                <div class="modal-header">
                     <?php echo "<h4 class='modal-title' > <b> Welcome;</br> ".$_SESSION['FirstName']."</b></li>"; ?> 
                </div>
                <div class="modal-body tab">
                    <a href="#dashboard" class="" onclick="dashboard();" role="button">Dashboard</a>
                    <a href="#servicehistory"  class="" onclick="history();" role="button">Service History</a>
                    <a href="#serviceschedule"  class="" onclick="schedule();" role="button">Service Schedule</a>
                <a href="#favouritepros"  class="" onclick="favouritepros();" role="button" >Favourite Pros</a>
                    <a href="#invoices" class="" onclick="invoice()" role="button">Invoices</a>
                    <a href="#notifications" class="" onclick="notification();" role="button">Notifications</a>
                   
                    <a href="#mySettings" id="mysettings"  onclick="mysettings();" role="button">My Settings</a>
                    <a href="index.php">Logout</a>
                </div>
                <div class="modal-footer tab">
                    <a href="book-service.php"> Book Now </a>
                    <a href="price.php">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="contact us.php">Contact</a>
                </div>
                <hr>
                <div class ="footer-social col-xl-2">
                    <img src="../assets/image/instagram.png">
                    <img src="../assets/image/facebook.png">
                </div>
            </div>
        </div>
</div>


 <!-- --------------------------------------------------End of modal for tabs with navbar ------------------------------------------------------------  -->

  <!-- -------------------------------------------------- Head Text ------------------------------------------------------------  -->

<div class="textdiv">
<p class="text">Welcome,  <?php echo "<b>".$_SESSION['FirstName']."</b>"; ?>  </p>
</div>
 <!-- --------------------------------------------------End of Head Text ------------------------------------------------------------  -->
   <!-- --------------------------------------------------Left Table ------------------------------------------------------------  -->

    <section id="tab-section">
        <div class="div-main container-fluild" >
            <div class="div-tab" >
                <a href="#dashboard" id="dashboard1"  class="dashboardrow active " onclick="dashboard();" role="button">Dashboard</a>
                <a href="#servicehistory" id="history"  onclick="history();" role="button">Service History</a>
                <a href="#serviceschedule" id="schedule" class="" onclick="schedule();" role="button">Service Schedule</a>
                <a href="#favouritepros" id="favpros" class="block"
                 onclick="favouritepros();" role="button" >Favourite Pros</a>
                <a href="#invoices" id="invoice" class="" onclick="invoice();" role="button">Invoices</a>
                <a href="#notifications" id="notification" class="" onclick="notification();" role="button">Notifications</a>
                
            </div>
                <!-- --------------------------------------------------End of Left Table ------------------------------------------------------------  -->
 <!-- --------------------------------------------------Right Table ------------------------------------------------------------  -->
             
              <!-- ----------------------------------------End of Dashboard ------------------------------------------------ --> 

<div class="content-section">
                  <!-- ----------------------------------------Settings ------------------------------------------------ --> 
                  <?php
$r='';
if(isset($_SESSION['msg1'] ))
{
$r=($_SESSION['msg1']);
 unset($_SESSION['msg1']);
}
?>
  <div class="divContent" id="mySettings">
  <form action="<?php echo 'http://localhost/project/?controller=Home&function=Mydetails';?>"
             method="POST" enctype="multipart/form-data">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"  data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Details</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-address" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Addresses</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Change Password</button>
                    </div>
                  </nav>
                  <?php 
                     if(!empty($r)){
                    ?>
                  <?php 
                     echo $r;
                  ?>
                  <?php } ?>        
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="Yatri"  name="fname" required>
                                </div>

                            </div>
                            <div class="col-sm-4 ">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" placeholder="Shah" name="lname" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="" name="email1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" >+49</span>
                                    <input type="text" class="form-control" placeholder="Phone Number" 
                                    aria-label="Username" name="phonenumber">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="26/03/2000" name="bdate">
                                </div>
                            </div>
                        </div>
                        <hr>
                       
                        <a href="#" ><button type="submit" class="buttonaccept" data-dismiss="modal">Save</button></a>
                     </form>
                 <!-- ------------------------------------------------------End of Settings ------------------------------------------------ --> 
                  <!-- ----------------------------------------------------------------Settings ------------------------------------------------ --> 
                  <!-- ----------------------------------------Address ------------------------------------------------ --> 

                    </div>
                    <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="address_table">
                            <thead>
                                <tr class="table_heading">
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="address_td">
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td>
                                        <i class="fa fa-edit" data-bs-toggle="modal"
                                    data-bs-target="#editAddress" data-bs-dismiss="modal"> Edit </button>
                                    <i class="fa fa-trash" data-bs-toggle="modal"
                                    data-bs-target="#deleteAddress" data-bs-dismiss="modal"> Delete </button> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td >
                                        <button class="buttonaccept"  data-bs-toggle="modal"
                                    data-bs-target="#editAddress" data-bs-dismiss="modal"> Edit </button>
                                    <button class="buttoncancel1" data-bs-toggle="modal"
                                    data-bs-target="#deleteAddress" data-bs-dismiss="modal"> Delete </button> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td >
                                        <button class="buttonaccept"  data-bs-toggle="modal"
                                    data-bs-target="#editAddress" data-bs-dismiss="modal"> Edit </button>
                                    <button class="buttoncancel1" data-bs-toggle="modal"
                                    data-bs-target="#deleteAddress" data-bs-dismiss="modal"> Delete </button> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="buttonaccept" data-bs-toggle="modal" data-dismiss="modal"
                                    data-bs-target="#addNewAddress" data-bs-dismiss="modal"> Add New Address </button>
                                    <div class="setting_address_error"></div>
                            <div class="setting_address_sucess text-success"></div>
                    </div>
                 <!-- -------------------------------------------------------End of Addrerss ------------------------------------------------ --> 

                  <!-- ----------------------------------------Password ------------------------------------------------ --> 
                        <?php
                        $rr='';
                        if(isset($_SESSION['msg1'] ))
                        {
                        $rr=($_SESSION['msg1']);
                        unset($_SESSION['msg1']);
                        }
                        ?>
                    <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-contact-tab">
                  
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
                            <button type="submit" class="buttonaccept" id="setting_update_password" data-bs-toggle="modal" data-dismiss="modal">Save</button></a>
                        <div id="update_password_sucess" class="text-success"></div>
                                <div id="update_password_error" class="text-danger"></div>
                        
                    </div>
                  </div>

            </div>

                  </form>
                  <!-- ----------------------------------------End of Password ------------------------------------------------ --> 
                 
                  <!-- ----------------------------------------Dashboard ------------------------------------------------ --> 


 <div  class="divContent" id="dashboard">
                <div class="row">
                    <div class="col-sm-6 title-filter">
                        <h3 class="medium-title"> Current Service Request </h3>
                    </div>
                    <div class="col-sm-6 " >
                    <span class="buttonexport" ><button style="float: right;" ><a href="book-service.php" style="text-decoration:none;color:white">Add New Service Request</a></button></span> 
                         
                    </div>
                    
                </div>
                <div>
                   
                         <table  class="dashboardtable" class="services">
                        <!-- <thead>
                            <tr>
                                <th>Service Id<img src="../assets/image/both_arrow.png"></th>
                                <th>Service Date<img src="../assets/image/both_arrow.png"></th>
                                <th>Service Provider <img src="../assets/image/both_arrow.png"></th>
                                <th>Payment<img src="../assets/image/both_arrow.png"></th>
                                <th>Actions<img src="../assets/image/both_arrow.png"></th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                         
                             <tr data-bs-toggle="modal"
                                            data-bs-target="#exampleModalServiceRequest"
                                            data-bs-dismiss="modal">
                                <td>323436</td>
                                <td>
                                    <div><img src="../assets/image/calender_c.png"><b>28/02/2018  </b></div>
                                    <div><img src="../assets/image/clock1.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-img"><img src="../assets/image/image_table.png"></div>
                                        <div class="info">
                                            <div class="name">Lyum Watson</div>
                                            <div class="ratings">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                        <div class="td-curr">€<span>63</span></div>
                                </td>
                               
                               <td >
                                    <button class="buttonaccept"  data-bs-toggle="modal"
                                    data-bs-target="#RescheduleRequest" data-bs-dismiss="modal"> Reschedule </button>
                                    <button class="buttoncancel1"  data-bs-toggle="modal"
                                    data-bs-target="#cancelRequest" data-bs-dismiss="modal"> Cancel </button>   
                                                                    </td>
                               
                            </tr >
                           
                            
                        </tbody> -->
                    </table>
                </div>
               <!-- <div class="history-pagination">
                        <div class="show-page">
                            show 
                            <select class="form-select" aria-label="Default select example">
                                <option selected>10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            entries Total Record : 7
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
                </div> -->
                <div class="history-pagination">
                            <div class="show-page">Show</p>

                            <select name="entries" id="entries_dashboard" class="entries">
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

                            <p class="show-page" id="totalRecord_dashboard">Total Record: 2</p>
                            </div>
                            <div class="paginations">
                            <div class="jump-left" title="Min"><a onclick="paginationno('min')">
                            <img src="../assets/image/jump-left.png"></a></div>
                                <div class="next-right" title="back"> <a onclick="paginationno('back')">
                                <img src="../assets/image/next-left.png"></a></div>
                                <div class="current-page">
                                <a class="active" id="pageno"  style="color:white" >1</a></div>
                                <div class="jump-left" title="next"> <a onclick="paginationno('next')">
                                <img src="../assets/image/next-left.png" style="transform: rotate(180deg);"></a></div>
                                <div class="next-right" title="max"> <a onclick="paginationno('max')"> 
                                <img src="../assets/image/jump-left.png" 
                                style="transform: rotate(180deg);"></a></div></div>
                            </div>
                        </div>
            </div>
              <!-- ----------------------------------------End of Dashboard ------------------------------------------------ --> 
            </div>
            <div class="divContent" id="serviceschedule">
             </div>
                           <!-- -----------------------------------------------Service History ------------------------------------------------ --> 

            <div class="divContent" id="servicehistory">
             <div>
                    <h2> Service History</h2>
                    <form action="process.php" method= "post">
                    <span class="buttonexport" id="#btnExport"><button     style="float: right;">Export</button></span> 
                    </form>
                </div>
                <div>
                    <table  id="tblCustomers"  class="services">
                        <!-- <thead>
                            <tr>
                                <th>Service Id<img src="../assets/image/both_arrow.png"></th>
                                <th>Service Date<img src="../assets/image/both_arrow.png"></th>
                                <th>Service Provider <img src="../assets/image/both_arrow.png"></th>
                                <th>Payment<img src="../assets/image/both_arrow.png"></th>
                                <th>Status<img src="../assets/image/both_arrow.png"></th>
                                <th>Rate SP<img src="../assets/image/both_arrow.png"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="image/calender_c.png"><b>31/03/2018</b></div>
                                    <div><img src="image/clock1.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-img"><img src="image/image_table.png"></div>
                                        <div class="info">
                                            <div class="name">Lyum Watson</div>
                                            <div class="ratings">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                        <div class="td-curr">€<span>63</span></div>
                                </td>
                                <td class="centerbutton">
                                    <button class="buttoncompleted"> Completed </button>
                                </td>
                                <td class="centerbutton">
                                    <button class="RateSP" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalRateSP"> Rate SP </button>
                                 </td>
                               
                            </tr>
                              <tr>
                                <td>323436</td>
                                <td>
                                    <div><img src="image/calender_c.png"><b>15/03/2018  </b></div>
                                    <div><img src="image/clock1.png">12:00 - 18:00</div>
                                </td>
                                <td>
                                    <div class="td-rating">
                                        <div class="rating-img"><img src="image/image_table.png"></div>
                                        <div class="info">
                                            <div class="name">Lyum Watson</div>
                                            <div class="ratings">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star-o"></span>
                                                4
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                        <div class="td-curr">€<span>63</span></div>
                                </td>
                                <td class="centerbutton">
                                    <button class="buttoncompleted"> Completed </button>
                                </td>
                                <td class="centerbutton">
                                    <button class="RateSP" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalRateSP"> Rate SP </button>
                                 </td>
                               
                            </tr>
                            
                        </tbody> -->
                    </table>
                </div>
                <div class="history-pagination">
                            <div class="show-page">Show</p>

                            <select name="entries" id="entries_history" class="entries">
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

                            <p class="show-page" id="totalRecord_history">Total Record: 2</p>
                            </div>
                            <div class="paginations">
                            <div class="jump-left" title="Min"><a onclick="paginationno1('min')">
                            <img src="../assets/image/jump-left.png"></a></div>
                                <div class="next-right" title="back"> <a onclick="paginationno1('back')">
                                <img src="../assets/image/next-left.png"></a></div>
                                <div class="current-page">
                                <a class="active" id="pageno1"  style="color:white" >1</a></div>
                                <div class="jump-left" title="next"> <a onclick="paginationno1('next')">
                                <img src="../assets/image/next-left.png" style="transform: rotate(180deg);"></a></div>
                                <div class="next-right" title="max"> <a onclick="paginationno1('max')"> 
                                <img src="../assets/image/jump-left.png" 
                                style="transform: rotate(180deg);"></a></div></div>
                            </div>
                        </div>
            </div>
                 <!-- ------------------------------------------------------End of Service History ------------------------------------------------ --> 

                 <!-- ------------------------------------------------------Favourite ------------------------------------------------ --> 

            <div class="divContent" id="favouritepros">
                <div class="row" id="blockfav_Sp" >
                 <div class="col-sm-5 ">
                      <div class="card">
                        <div class="card-body text-center">
                         <div class="td-rating" style="justify-content: center;">
                          <div class="rating-img"><img src="image/image_table.png"></div></div>
                          <h5 class="card-title">Kavan Patel</h5>
                          <div class="td-rating" style="justify-content: center;">
                            <div class="rating-info">
                                <div class="info-ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    4
                                
                          <p class="card-text">1 Cleanings</p>
                          <button class="buttonaccept">Remove</a>
                          <button class="buttonblock">Block</button>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-5 ">
                      <div class="card">
                        <div class="card-body text-center">
                         <div class="td-rating" style="justify-content: center;">
                          <div class="rating-img"><img src="image/image_table.png"></div></div>
                          <h5 class="card-title">Kavan Patel</h5>
                          <div class="td-rating" style="justify-content: center;">
                            <div class="rating-info">
                                <div class="info-ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    4
                                </div>
                            </div>
                        </div>
                          <p class="card-text">1 Cleanings</p>
                          <button class="buttonaccept">Remove</a>
                          <button class="buttonblock">Block</button>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-5 ">
                      <div class="card">
                        <div class="card-body text-center">
                         <div class="td-rating" style="justify-content: center;">
                          <div class="rating-img"><img src="image/image_table.png"></div></div>
                          <h5 class="card-title">Kavan Patel</h5>
                          <div class="td-rating" style="justify-content: center;">
                            <div class="rating-info">
                                <div class="info-ratings">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span>
                                    4
                                </div>
                            </div>
                        </div>
                          <p class="card-text">1 Cleanings</p>
                          <button class="buttonaccept">Remove</a>
                          <button class="buttonblock">Block</button>
                        </div>
                      </div>
                    </div>
                    <!-- ------------------------------------------------------End of Favourite ------------------------------------------------ --> 

         <div class="divContent" id="invoices"> </div>
            <div class="divContent" id="notifications">
               
            </div>

            

</div>            
</div>
</section>


 <!-- --------------------------------------------------End of Right Table ------------------------------------------------------------  -->

 <!-- --------------------------------------------------Footer ------------------------------------------------------------  -->


 <?php include '../views/include/footer.php';?>

 <!-- -------------------------------------------------- End of Footer ------------------------------------------------------------  -->


</main>
</div>
 <!----------------------------------------------Model For SP ratings---------------------------------------------------------->
    <div class="modal fade navbar-tmodel" id="exampleModalRateSP" tabindex="-1"
        aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div style="position: relative;">
                    <img src="../assets/image/image_table.png" id="rating_logo" class="cap_border ml-2 
                    avatar_logo" style="width:50px;height:50px;margin-left:20px">

                    <p class="rating_name_modal"><b>Lyum Watson</b></p>

                    <div id="average_rating"></div>
                    <div class="rating_serviceid">
                    <span id="average_rating_value"></span>
                    </div>
                    
                    </div>

                    <div class="m-heading">
                        Rate Your Service Provider
                    </div>
                   
                    <hr style="width:400px; height: 1px;">
                    <div class="m-form">
                        
                            <div class="m-ratings">
                                <p class="rating_option">On Time Arrival</p> 
                                <div  id="rateYo">
                                </div>

                            </div>
                            <div id="rating_value" style="display: none;">1</div>

                            <div class="m-ratings">
                                <p  class="rating_option">Friendy</p> 
                                <div class="ratings" id="rateYo1" >

                                    <!-- <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span> -->
                                </div>

                            </div>
                            <div class="rating_value1" style="display: none;">1</div>

                            <div class="m-ratings">
                                <p class="rating_option">Quality of Service</p> 
                                <div class="ratings" id="rateYo2">

                                    <!-- <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-o"></span> -->
                                </div>

                            </div>
                            <div class="rating_value2" style="display: none;">1</div>

                            <div class="form-group">
                                <label for="feedback">Feedback on Service Provider</label>
                                <textarea name="" class="form-control" rows="2" style="width:400px" id="rating_textarea"></textarea>
                            </div>
                            <div class="m-button">
                            <button class="accept_btn" type="button"  id="rating_submit" data-bs-toggle="modal" data-dismiss="modal">Submit</button>
                            
                            </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

 <!----------------------------------------------End of Model For SP ratings---------------------------------------------------------->


  <!--------------------------------------------------------Modal for Rescheule Request----------------------------------------------------->
<div class="modal fade" id="RescheduleRequest" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="alert alert-danger m-2" id="error" role="alert" style="display: none;">
             Sorry!! Another service request has been assigned to the service provider
        </div>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Reschedule Services Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <p>Select New Date & Time</
        <form id="rescheduleform">
                <div class="row">
                    <div class="col">
                        <div class="form-group" style="width: 100%;">
                        <div class='input-group date' id='datetimepicker1' class="date">
                            <input type="date" class="form-control" id="rescheduledate" >

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <select id="rescheduletime" class="form-control">
                            <option value="8:00">8:00</option>
                            <option value="9:00">9:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                        </select>
                    </div>
                </div>
                <div class="reschedulebutton">
                    <button class="buttonaccept" type="button" id="Updatereschudele">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>
</div>
  <!--------------------------------------------------------End of Modal for Rescheule Request----------------------------------------------------->
<!----------------------------------------------------Modal for Cancel Service Request----------------------------------------------------------->
<div class="modal fade" id="cancelRequest" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Cancel Service Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Why you want to cancel the service request?</p>
        <textarea class="form-control rounded-0 mb-2" id="textarea" rows="4"></textarea>
        <div class="cancelservice">
        
                <button type="button" id="cancelButton" data-dismiss="modal" class="buttonaccept">Cancel Now</a>

        </div>

    </div>
        </div>
    </div>
</div>
</div>
<!----------------------------------------------------End of Modal for Cancel Service Request----------------------------------------------------------->
   
<!------------------------------------------------------Modal for Edit Address------------------------------------------------------------>
<div class="modal fade" id="editAddress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Addresses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Street name</label>
                          <input type="text" class="form-control" id="streetname_setting" placeholder="Koenigstreet20">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" class="form-control w200" id="streetname_houseno" placeholder="112">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Postal code</label>
                          <input type="text" class="form-control" id="postalcode_setting" placeholder="99397">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" id="city_setting" placeholder="Ahmedabad">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" >+49</span>
                            <input type="text" class="form-control" id="phoneno_setting" placeholder="Phone Number" aria-label="Username" >
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                <button type="submit" data-dismiss="modal" id="submit_setting"
                 class="submit_my_settings buttonaccept" style="width: 100%;" data-bs-toggle="modal" data-dismiss="modal">Edit</button>                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--------------------------------------------------------end edit address  modal--------------------------------------------------------> 
<!------------------------------------------------------------Add Address Model------------------------------------------------> 
<div class="modal fade" id="addNewAddress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Add New Address</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Street name</label>
                          <input type="text" class="form-control w200" id="streetname_add_setting" placeholder="Koenigstreet20">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" class="form-control w200"  id="houseno_add_setting" placeholder="112">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6">
                       <div class="form-group">
                           <label>Postal code</label>
                          <input type="text" class="form-control w200" id="postalcode_add_setting" placeholder="99397">
                       </div>
                    </div>
                    <div  class="col-sm-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control w200"  id="city_add_setting" placeholder="Ahmedabad">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+49</span>
                            <input type="text" class="form-control" id="phoneno_add_setting" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class=" text-center">
                <button type="submit"   data-bs-toggle="modal" data-dismiss="modal"
                 id="submit_add_setting" class="submit_my_settings buttonaccept" style="width: 100%;">Add</button>
                              
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!------------------------------------------------------------End of Add Address Model------------------------------------------------> 
<!------------------------------------------------------Modal for Delete Address Model---------------------------------------------->
<div class="modal fade" id="deleteAddress" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Address</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#">
                <div class="row">
                    <div class=" text-center">
                        <p> Are You Sure to delete the Address?</p>
                    </div>
                </div>   
               
                <div class=" text-center">
                <button type="button" class="btn btn-secondary delete_address_id" data-bs-toggle="modal" data-dismiss="modal">Close</button>

                <button type="button" class="btn btn-primary" id="delete_address_setting" data-bs-toggle="modal" data-dismiss="modal">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!----------------------------------------------------------End  of Delete Address Modal--------------------------------------------------------> 

 <!------------------------------------------------------ Model For Service Request ------------------------------->
    <div class="modal fade" id="exampleModalServiceRequest" tabindex="-1" aria-labelledby="exampleModalLabel1"
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
                                    <p class="head" ><p style="font-weight:bold">Service Details</p>
                                    <p class="time" id="servicedetailsdatetime"><b> </b></p>
                                    <p id="servicedetailsduration" style="font-weight:bold">Duration:  </p>
                                    <hr>
                                </div>
                              
                                <div class="row">
                                    <p class="head" id="servicedetailsserviceid" style="font-weight:bold">Service Id:</p>
                                    <p id="servicedetailsextraservice" style="font-weight:bold">Extras:</p>
                                    <p style="font-weight:bold" style="font-weight:bold">Net Amount: <span class="currency servicedetailsamount"> </p>
                                    <hr>
                                </div>
                               
                                <div class="row">
                                <p id="servicedetailscustomername" style="font-weight:bold">Customer Name: </p>

                                    <p id="servicedetailsserviceaddress" style="font-weight:bold">Service Address: </p>
                                    <hr>
                                </div>
                               
                                <div class="row">
                                    <p class="head" id="servicedetailscomments" style="font-weight:bold">Comments:</p>
                                    <p><span id="servicedetailspets" style="font-weight:bold"></span> 
                                    </p>
                                    <hr>
                              
                                <div class="row modal-button">
                                    <div class="col">
                                    <button class="buttonaccept" id="dashboard_reschedule" data-toggle='modal' 
                                    data-target='#RescheduleRequest'>
                                                    <p class="reschudule_id"> <i class="fa fa-check"></i>
                                                     Reschedule</p>
                                                </button>
                                                <button class="buttoncancel1" id="dashboard_cancel" 
                                                data-toggle='modal' data-target='#cancelRequest'>
                                                    <p> <i class="fa fa-times"></i> Cancel</p>
                                                </button>
                                    </div>
                                </div>
                            </div>
                           
                            </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <?php
if (isset($_GET["parameter"]) && $_GET["parameter"] == 1) {
    echo "<script>
            display('#mySettings');
            $('#My_settings_customer').css('display', 'block');
            $('.arrow_down_section').css('display', 'none');
            setting_set_details();
            setting_load_address();
        </script>";
}

if (isset($_GET["parameter"]) && $_GET["parameter"] == 0) {
    echo "<script>
            display('#dashboard');
            $('.dashboard_tab').addClass('active_left');
            loaddashboard(0, 2);
        </script>";
}
  ?>  
  </body>
  <?php include '../views/include/footer_js.php';?>

<!-- <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="../assets/css/script1.js"></script>
    <!-- <script type="text/javascript" src="../assets/js/ajax.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script> -->


<script>
//     function starmark(item) {
//     count1 = item.id[0];
//     console.log(count1);
//     // sessionStorage.starRating = count;
//     var subid = item.id.substring(1);
//     console.log(subid);
//     for (var i = 0; i < 5; i++) {
//         if (i < count1) {
//             document.getElementById((i + 1) + subid).style.color = "orange";
//         } else {
//             document.getElementById((i + 1) + subid).style.color = "black";
//         }
//     }
// }

function avgrating() {
    val1 = parseInt($('#rating_value').html());
    val2 = parseInt($('.rating_value1').html());
    val3 = parseInt($('.rating_value2').html());

    average = (val1 + val2 + val3) / 3;
    console.log(val1,val2,val3);

    $('#average_rating_value').html(average.toFixed(1));

    $("#average_rating").rateYo("option", "rating", average.toFixed(1)); //returns a jQuery Element
}

$("#rateYo").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",

    onSet: function (rating, rateYoInstance) {
        $('#rating_value').html(rating);
        console.log(rating);
        avgrating()
    },
});
$("#rateYo1").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",

    onSet: function (rating, rateYoInstance) {
        $('.rating_value1').html(rating);
        avgrating()
    },
});
$("#rateYo2").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",

    onSet: function (rating, rateYoInstance) {
        $('.rating_value2').html(rating);
        avgrating()
    },
});

$("#average_rating").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",
});

function setAvgRating(id,className){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=averageRating",
        data: {
            serviceProviderId: id
        },
        success: function (response) {
            console.log(className, response);
            $("." + className).rateYo("option", "rating", response);
        }
    });
}
function updatedashboard(offset,limit) {
    
    $.ajax({
        // type: "method",
        url: "http://localhost/project/?function=fetchcurrentservice&parameter=" + offset + "-" + limit,
        
        success: function (response) {
            //console.log(response);
            
            $('.dashboardtable').html(response);
            $('.avg_rating_serprovider').rateYo({
                rating: 1,
                starWidth: "20px",
                readOnly: true
            });

            $('.avg_rating_serprovider').each(function (i, obj) {

                class_str = $(this).attr('class');
                class_arr = class_str.split(" ");
                id_arr = class_arr[1].split("-");
                id = parseInt(id_arr[0]);
                console.log(class_arr[1]);

                setAvgRating(id,class_arr[1]);
            });
        },
      
        error: function (e) {
            console.log(e);
        }
    });
}

function dashboardtotalentries() {

    $.ajax({
        url: "http://localhost/project/?function=fetchtotalentriesdashboard",
        success: function (response) {
            $('#totalRecord_dashboard').html("Total Record: " + response);
        }
    });

}
function historytotalentries() {

    $.ajax({
        url: "http://localhost/project/?function=fetchtotalentriesservicehistory",
        success: function (response) {
            $('#totalRecord_history').html("Total Record: " + response);
        }
    });

}
$('.dashboardrow').click(function (e) {
    e.preventDefault();
     updatedashboard(0, 2);
     dashboardtotalentries();


});

function onReschedule(id) {
//console.log('hiii');
    $('#error').css('display','none');
    $('#RescheduleRequest').modal('show');


    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=fetch_datetime",
        data: {
            serviceid: id
        },
        success: function (response) {

            datetime = response.split("|");
            $('#rescheduledate').val(datetime[0]);
            $('#rescheduletime').val(datetime[1]);
        },
        error: function (e) {
            console.log(e);
        }
    });

    $('.reschedulebutton').attr('id', id);
}   
$('#Updatereschudele').click(function () {
    
    id = $('.reschedulebutton').attr('id');

    date1 = $('#rescheduledate').val();
    time1 = $('#rescheduletime').val();
   
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=checkserviceavailable",
        data: {
            date: date1,
            time: time1,
            serviceid: id
        },
        success: function (response) {
            if (response == 0) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/project/?controller=Home&function=update_datetime",
                    data: {
                        date: date1,
                        time: time1,
                        serviceid: id
                    },
                    success: function (response) {
                        $('#error').css('display','none');

                        $('#RescheduleRequest').modal('hide');
                        $('.show').remove('.modal-backdrop');

                        updatedashboard(0, 2);
                    }
                });
            }else{
                $('#error').css('display','block');
            }
        }
    });

});
function onCancel($servicerequestid){
    
    $('.cancelservice').attr('id',$servicerequestid);
    $('#cancelRequest').modal('show');


}

$('#cancelButton').click(function () { 
    id = $('.cancelservice').attr('id');
    comments = $('#textarea').val();
    
    console.log(comments);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=cancelservice",
        data: {
            serviceid : id,
            comment : comments
        },
        success: function (response) {
            console.log(response);
             $('#cancelRequest').modal('hide');


        }
    });
    dashboardtotalentries();
    $('#pageno').html(1)
    updatedashboard(0,2);
});

function dashboardmodal(servicerequestid){
    

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=Allservicerequestdetails",
        data: {
            id : servicerequestid
        },
        success: function (response) {
            var servicedetails = JSON.parse(response);
            console.log(servicedetails);

            $('#servicedetailsserviceid').html("Service Id: " + servicedetails["ServiceId"]);
            $('#servicedetailsdatetime').html(servicedetails["date"] + " " + servicedetails["starttime"] + "-" + servicedetails["endtime"]);
            $('#servicedetailsduration').html("Duration: " + servicedetails["duration"]);

            $('.servicedetailsamount').html("&nbsp; &nbsp; &nbsp;" + servicedetails["TotalCost"] + "€");

            $('#servicedetailscomments').html("Comment: " + servicedetails["Comments"]);

            if(servicedetails["HasPets"] == 0){
                $('#servicedetailspets').html("<img  src='../assets/image1/not-included.png' style='width: 20px;height: 20px;'>  I don't have pets at home.");
            }else{
                $('#servicedetailspets').html("<img  src='../assets/image1/included.png' style='width: 20px;height: 20px;'> I have pets at home.");
            }

            extraservice = "Extras: ";
            if(servicedetails["ExtraService"][0] == 0){
                $('#servicedetailsextraservice').html(extraservice);
            }else{
                servicedetails["ExtraService"].forEach(element => {
                    extraservice += element + ", ";
                });
                $('#servicedetailsextraservice').html(extraservice);
            }

            $('#servicedetailsserviceaddress').html("Service Address: " + servicedetails["AddressLine1"] + " " + servicedetails["AddressLine2"]
                + ", " + servicedetails["City"] + " " + servicedetails["State"] + ", " + servicedetails["PostalCode"]);

            $('#servicedetailscustomername').html("Customer Name: " + servicedetails["customername"]);

            $('#exampleModalServiceRequest').modal('show');

            $('.reschudule_id').attr('id',servicedetails["servicerequestid"]);
        }
    });
}

$('#dashboard_reschedule').click(function (e) { 
    e.preventDefault();

    id = $('.reschudule_id').attr('id');
    $('#exampleModalServiceRequest').modal('hide');

    onReschedule(id);
    
});

$('#dashboard_cancel').click(function (e) { 
    e.preventDefault();

    id = $('.reschudule_id').attr('id');
    $('#exampleModalServiceRequest').modal('hide');
    //console.log(reschudule_setid);
    onCancel(id);
    
});

function serviceHistory(offset,limit){
    $.ajax({
        url: "http://localhost/project/?function=ServiceHistory&parameter=" + offset + "-" + limit ,
        success: function (response) {
            $('#tblCustomers').html(response);
            
            $('.servicehistory_rating').rateYo({
                rating: 1,
                starWidth: "15px"
            });

            $('.servicehistory_rating').each(function (i, obj) {

                id = $(this).attr('id');
                servicerequestid_arr = id.split('-');
                servicerequestid = servicerequestid_arr[0];

                $.ajax({
                    type: "POST",
                    url: "http://localhost/project/?function=getrating",
                    data: {
                        serviceRequestId: servicerequestid
                    },
                    success: function (response) {
                        id_rating_arr = response.split('|');
                        rating = id_rating_arr[0];
                        id = id_rating_arr[1];
                        $('#' + id + '-ratings').rateYo("option", "rating", rating);
                    }
                });
            });
        }
    });
}


$('#history').click(function (e) { 
    e.preventDefault();
   serviceHistory(0, 2);
   historytotalentries();
    
});

$(document).ready(function () {
    
    updatedashboard(0, 2);
    dashboardtotalentries();
});


$('#entries_dashboard').change(function () {
    limit = $('#entries_dashboard').val();
    updatedashboard(0, limit);
    $('#pageno').html(1);
});
$('#entries_history').change(function () {
    limit = $('#entries_history').val();
    serviceHistory (0, limit);
    $('#pageno1').html(1);
});
function paginationno1(textno) {
    limit = $('#entries_history').val();

    totalentriestext = $('#totalRecord_history').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    currentpageno = parseInt($('#pageno1').html());

    maxpageno = Math.ceil(totalentries / limit);
    if (textno == 'next') {
        currentpageno += 1;

        if (currentpageno <= maxpageno) {
            $('#pageno1').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            serviceHistory(offset, limit);
        }
    } else if (textno == 'back') {
        currentpageno -= 1;

        if (currentpageno > 0) {
            $('#pageno1').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            serviceHistory(offset, limit);
        }
    } else if (textno == 'max') {
        $('#pageno1').html(maxpageno);

        offset = (currentpageno - 1) * limit;
        serviceHistory(offset, limit);

    } else if (textno == 'min') {
        $('#pageno1').html(1);

        offset = (currentpageno - 1) * limit;
        serviceHistory(offset, limit);
    } else {
        console.log("Error in Pagination");
    }
} 

function paginationno(textno) {
    limit = $('#entries_dashboard').val();

    totalentriestext = $('#totalRecord_dashboard').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    currentpageno = parseInt($('#pageno').html());

    maxpageno = Math.ceil(totalentries / limit);
    if (textno == 'next') {
        currentpageno += 1;

        if (currentpageno <= maxpageno) {
            $('#pageno').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            updatedashboard(offset, limit);
        }
    } else if (textno == 'back') {
        currentpageno -= 1;

        if (currentpageno > 0) {
            $('#pageno').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            updatedashboard(offset, limit);
        }
    } else if (textno == 'max') {
        $('#pageno').html(maxpageno);

        offset = (currentpageno - 1) * limit;
        updatedashboard(offset, limit);

    } else if (textno == 'min') {
        $('#pageno').html(1);

        offset = (currentpageno - 1) * limit;
        updatedashboard(offset, limit);
    } else {
        console.log("Error in Pagination");
    }
}

function ratingclick(servicerequestid, serviceproviderid) {
console.log(serviceproviderid);
    $.ajax({
        method: "POST",
        url: "http://localhost/project/?function=setratingmodal",
        data: {
            serviceProviderId : serviceproviderid

        },
        success: function (response) {
            arr = response.split("|");
            $('.rating_name_modal').html(arr[0]);
            $('#rating_logo').attr('src','../assets/image/' + arr[1]);
        }
    });

    $('.rating_serviceid').attr('id', servicerequestid + "/" + serviceproviderid);
}

$('#rating_submit').click(function (e) {
    e.preventDefault();

    idarr = $('.rating_serviceid').attr('id').split("/");
    serviceid = idarr[0];
    serviceproviderid = idarr[1];
    feedback = $('#rating_textarea').val();
    //console.log(feedback);

    timeArrivalRating = parseFloat($('.rating_value').html());
    friendlyRating =  parseFloat($('.rating_value1').html());
    QualityRating = parseFloat($('.rating_value2').html());
    rating = parseFloat($('#average_rating_value').html());

    if (serviceproviderid != undefined) {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=setrating",
            data: {
                id: serviceid,
                serviceprovider_id : serviceproviderid,
                service_feedback: feedback,
                timeArrival : timeArrivalRating,
                friendly : friendlyRating,
                quality : QualityRating,
                rating_service : rating
            },
            success: function (response) {
                ratings_id_arr = response.split("|");
                console.log("#" + ratings_id_arr[0] + "-ratings");
                $("#" + ratings_id_arr[0] + "-ratings").rateYo("option", "rating", ratings_id_arr[1]);
            }
        });
    }


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

function setting_load_address(){
    $.ajax({
        url: "http://localhost/project/?function=loadsettingaddress",
        success: function (response) {
            $('.address_table').html(response);  
        }
    });
}
$('#mysettings').click(function () {

//setting_set_details();
setting_load_address();
});

function edit_address(id) {

$('.setting_address_error').attr('id',id + '-addressid');

$.ajax({
    type: "POST",
    url: "http://localhost/project/?controller=Home&function=setAddressModal",
    data: {
        addressId: id
    },
    success: function (response) {
        var address = JSON.parse(response);

        $('#streetname_setting').val(address["AddressLine2"]);
        $('#streetname_houseno').val(address["AddressLine1"]);
        $('#postalcode_setting').val(address["PostalCode"]);
        $('#city_setting').val(address["City"]);
        $('#phoneno_setting').val(address["Mobile"]);

    }
    
});


}

$('#submit_setting').click(function (e) {
e.preventDefault();

StreetName = $('#streetname_setting').val();
HouseNo = $('#streetname_houseno').val();
PostalCode = $('#postalcode_setting').val();
City = $('#city_setting').val();
PhoneNo = $('#phoneno_setting').val();


AddressId = $('.setting_address_error').attr('id');
idarr = AddressId.split('-');
id = parseInt(idarr[0]);

$.ajax({
    type: "POST",
    url: "http://localhost/project/?controller=Home&function=updateAddress",
    data: {
        streetName : StreetName,
        houseno : HouseNo,
        postalcode : PostalCode,
        city : City,
        Mobile : PhoneNo,
        AddressId : id
    },
    success: function (response) {
        setting_load_address();
        console.log(response);
        //$('.setting_address_sucess').html('Address Updated Successfully');
    }
});
});

$('#submit_add_setting').click(function (e) { 
    e.preventDefault();

    var streetname = $('#streetname_add_setting').val().trim();
    var houseno = $('#houseno_add_setting').val().trim();
    var postalcode = $('#postalcode_add_setting').val().trim();
    var city = $('#city_add_setting').val().trim();
    var phone_no = $('#phoneno_add_setting').val().trim();
    
    //console.log(streetname, houseno,postalcode,city,phone_no);

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
                setting_load_address();
                console.log(response);
                $('#addnewaddress_setting_form').trigger("reset");
            }
        });
    }
    
});

// Delete Address 

function delete_address(addressid){
    $('.delete_address_id').attr('id',addressid + '-delete_addr');
}

$('#delete_address_setting').click(function (e) { 
    e.preventDefault();

    id_str = $('.delete_address_id').attr('id');
    id_arr = id_str.split('-');
    id = parseInt(id_arr[0]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=deleteaddress_setting",
        data: {
            addressId : id,
        },
        success: function (response) {
            setting_load_address();     
        }
    });
    
});





function loadBlockedCustomer() {
    $.ajax({
        url: "http://localhost/project/?function=GetBlockedCustomerlist_C",
        success: function (response) {
            console.log(response);
            $('#favouritepros').html(response);

            //Rating in Customer

            $('.rating_customer').rateYo({
                rating: 1,
                starWidth: "20px",
                readOnly: true
            });

            $('.rating_customer').each(function () {
                className = $(this).attr('class');
                className_arr = className.split(' ');
                rating_arr = className_arr[1].split('-');
                avgrating = parseFloat(rating_arr[0]);

                $(this).rateYo("option", "rating", avgrating);
            });

        }
    });

}

$('#favpros').click(function (e) {
    e.preventDefault();

    loadBlockedCustomer()
});


function favouriteSp(id) {
    id_arr = id.split("-");

    favblockid = parseInt(id_arr[0]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=favouriteblocked_C",
        data: {
            favouriteId: favblockid
        },
        success: function (response) {
            loadBlockedCustomer();
        }
    });
}

function BlockedSp(id) {
    id_arr = id.split("-");

    favblockid = parseInt(id_arr[0]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=favouriteblocked_C2",
        data: {
            favouriteId: favblockid
        },
        success: function (response) {
            loadBlockedCustomer();
        }
    });
}
</script>

 

  
  
</html>
