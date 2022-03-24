<?php
session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">  
     <link rel="stylesheet" type="text/css" href="../assets/css/model.css"> 
     <link rel="stylesheet" type="text/css" href="../assets/css/css/footer.css"> 
     <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  

    <title>Admin-dashboard</title>
</head>
<body>

    
       
 <!--------------------------------------Model For Navbar toggle--------------------------->
    <div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1"
        aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Welcome, <br><b>Admin</b> </h4>
                </div>
                <div class="modal-body">
                    <a href="#">Dashboard</a>
                    <a href="#">Service Management</a>
                    <a href="#">Role Management</a>
                    <a href="#">Coupen Code Management</a>
                    <a href="#">Escalation Management</a>
                    <a href="#servicerequest" id="servicerequest1" class="" onclick="servicerequest();" role="button">Service Requests</a>
                    <a href="#">Service Provider</a>
                    <a href="#usermanagement"   id="usermanagement1" class="" onclick="usermanagement();" role="button">User Mangement</a>
                    <a href="#">Finance Module</a>
                    <a href="#">Zip Code Management</a>
                    <a href="#">Rating Mangement</a>
                    <a href="#">Inquiry Mangement</a>
                    <a href="#">Newsletter Management</a>
                    <a href="#">Content Management</a>
                </div>
                <div class="modal-footer">
                    <a href="#">Prices & Services</a>
                    <a href="#">Warranty</a>
                    <a href="#">Blog</a>
                    <a href="#">Contact</a>
                </div>
                 <div class="modal-footer">
                    <a href="#"><img src="image/facebook.png"></a>
                    <a href="#"><img src="image/instagram.png"></a>
                   
                </div>
            </div>
        </div>
    </div>
   <!--------------------------------------End of Model For Navbar toggle--------------------------->
   <!--------------------------------------    Navbar ------------------------------------>

        <section id="section-header">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="../views/index.php">
                    helperland
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="float: left;">
                        <li class="nav-item">
                            <a class="nav-link" ><img src="../assets/image/admin.png" class="user"
                                    alt=""> <?php echo "<li class='nav-item' style='text-align:center;font-size:20px;color:white;'><b > 
                   Welcome ".$_SESSION['FirstName']."</b></li>"; ?>  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/logout.php"><img src="../assets/image/logout.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
<!-------------------------------------- End of Navbar ------------------------------------>

   <!--------------------------------------Left Table--------------------------->
  <div class="main">

        <section id="section">
            <div class="div-main" style="overflow-y:hidden;">
                <div class="div-sidebar" style="position:fixed">
                    <a href="#">Service Management</a>
                    <a href="#">Role Management</a>
                    <a href="#" class="nav-tog">
                        <p>Coupon Code Management <img src="image/next-left.png" alt=""></p>
                        <div class="nav-toggle">
                            <div>Coupen Code</div>
                            <div>Usage History</div>
                        </div>
                    </a>

                    <a href="#">Escalation Management</a>
                    <a href="#servicerequest" id="servicerequest1" class="" onclick="servicerequest();" role="button">Service Requests</a>
                    <a href="#">Service Provider</a>
                    <a href="#usermanagement" class="sidebar-active"  id="usermanagement1" class="" onclick="usermanagement();" role="button">User Mangement</a>
                    <a href="#" class="nav-tog">
                        <p>Finance Module <img src="image/next-left.png" alt=""></p>
                        <div class="nav-toggle">
                            <div>All Transaction</div>
                            <div>Generate Payment</div>
                            <div>Customer Invoices</div>
                        </div>
                    </a>
                    <a href="#">Zip Code Management</a>
                    <a href="#">Rating Mangement</a>
                    <a href="#">Inquiry Mangement</a>
                    <a href="#">Newsletter Management</a>
                    <a href="#" class="nav-tog">
                        <p>Content Management <img src="./static/images/next-left.png" alt=""></p>
                        <div class="nav-toggle">
                            <div>Blog</div>
                            <div>FAQs</div>
                        </div>
                    </a>
                </div>

    <!------------------------------------------------End of Left Table---------------------------------------------------->

    <!------------------------------------------------Right Table  UserManagment---------------------------------------------------->


                <div class="differ-section" >
              
                    <div class="div-content" id="usermanagement">
                        <div class="title">
                            <p>User Management</p>
                            <button><span class="fa fa-plus-circle"></span>Add New User</button>
                        </div>
                        <div class="search-bar">
                            <form action="#" id="UserManagementFilterForm">
                                <div class="row">
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example" id="user_name_admin" >
                                        <option value="user_name" disabled selected>Select User Name</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>
                                    <div class="col-3">
                                        <select class="form-select" aria-label="Default select example" id="user_type_um">
                                        <option value="user_type" disabled selected>User Type</option>
                            <option value=0>Service Provider</option>
                            <option value=1>Customer</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">+49</span>
                                            <input type="text" class="form-control" id="phone_no_um" placeholder="Phone Number" aria-label="Username">
                                          </div>
                                    </div>
                                      <div class="col col-xs-12">
                                        <input type="text" class="form-control" placeholder="postalcode" id="postalcode_um">
                                    </div>
                                     <div class="col-3">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" placeholder="zipcode">
                                    </div>
                                     <div class="col-3">
                                        <input type="date" class="form-control" placeholder="From Date" id="fromdate_um">
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control" placeholder="To Date" id="todate_um">
                                    </div>
                                    <div class="col col-buttons">
                                        <button type="Search" class="btn-search" id="search_um">Search</button>
                                        <button type="reset" class="btn-clear" id="clear_um">Clear</button>
                                    </div>
                                  </div>
                            </form>
                        </div>
                        <div id="" class="table-responsive" >
                        <div class="export">
                <button type="button" class="btn-search" id="export_um" style="float:right;">Export</button>
                    </div>
                            <table class="table services" id="AdminUserManagementtable">
                                <thead>
                                    <tr>
                                        <th scope="col">User Name <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">User Type <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Postal Code <img src="image/both_arrow.png" alt="">
                                        </th>
                                        <th scope="col">City</th>
                                        <th scope="col">Radius <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">User Status <img src="image/both_arrow.png" alt="">
                                        </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Customer</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-name">John Smith</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Customer</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td>
                                            <div class="td-name">123456</div>
                                        </td>
                                        <td>
                                            <div class="td-name">Berlin</div>
                                        </td>
                                        <td>
                                            <div class="td-name"></div>
                                        </td>
                                        <td class="btn-status completed"><button>Active</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button">Edit</button></li>
                                                    <li><button class="dropdown-item" type="button">Deactivate</button>
                                                    </li>
                                                    <li><button class="dropdown-item" type="button">Service
                                                            History</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                            <!------------------------------------------------End of Right Table UserManagment---------------------------------------------------->

                     <!------------------------------------------------Pagination UserManagment---------------------------------------------------->


                    
                        <div class="pagination">
                            <div class="show-page">
                                Show Entries
                                <select  name="entries" id="entries_um" class="entries">
                                <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        
                    </select>

                    <p class="show"  id="totalrecord_um">Entries Total Record: 55</p>
                               
                            </div>
                    <div class="paginations pagejs">                     
                          <div> <a onclick="pagination_um('min')"><img src="../assets/image/jump-left.png"></a></div>
<div>  <a onclick="pagination_um('back')"><img src="../assets/image/next-left.png"></a></div>
                     <div><a onclick="pagination_um(id)" class="active min-pagination" id="1-pagination" style="text-decoration:none; color:black">1</a></div>
                     <div><a onclick="pagination_um(id)" class="mid1-pagination" id="2-pagination" style="text-decoration:none; color:black">2</a></div>
                     <div><a onclick="pagination_um(id)" class="mid2-pagination" id="3-pagination"style="text-decoration:none; color:black">3</a></div>
                     <div> <a onclick="pagination_um(id)" id="4-pagination" class="max-pagination" style="text-decoration:none; color:black">4</a></div>
                      <div>  <a onclick="pagination_um('next')"><img src="../assets/image/next-left.png" 
                      style="transform: rotate(180deg);"></a></div>
                        <div><a onclick="pagination_um('max')"><img src="../assets/image/jump-left.png" 
                        style="transform: rotate(180deg);"></a></div>
                    </div>
                </div>
                <table id="exportusermanagementTable" style="display: none;">
                </table>
</div>
                     <!------------------------------------------------Pagination UserManagment---------------------------------------------------->

                    <!------------------------------------------------ Right Table Servicerequest---------------------------------------------------->

                    <div class="div-content" id="servicerequest">
                        <div class="title">
                            <p>Service Requests</p>
                        </div>
                        <div class="search-bar">
                            <form id="adminServiceRequestForm">
                                <div class="row">
                                    <div class="col col-xs">
                                        <input type="number" class="form-control" placeholder="ServiceID" id="serviceId_adminServiceReq">
                                    </div>
                                     <div class="col col-xs-12">
                                        <input type="text" class="form-control" placeholder="postalcode" id="postalcode_adminServiceReq">
                                    </div>
                                     <div class="col-3">
                                        <input type="email" class="form-control" placeholder="Email" id="email_adminServiceReq">
                                    </div>
                                    <div class="col-3">
                                    <select name="user_name form-select" id="CustomerOption" class="user_name_ser">

                                       
                            <option value="user_name" disabled selected>Select Customer</option>
                                            <!-- <option value="">User1</option>
                                             <option value="">User2</option>
                                             <option value="">User3</option> -->
                                              </select></div>
                                    <div class="col-3">
                                    <select name="user_type form-select" id="serviceProviderOption" class="user_name_ser">
                                    <option value="user_type" disabled selected>Select Service Provider</option>
                                            <option value="">Type1</option>
                                             <option value="">Type2</option>
                                             <option value="">Type3</option>
                                          </select></div>
                                    <!-- <div class="col-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> Sp Payment  Status</option>
                                            <option value="New">Select 1</option>
                                            <option value="Pending">Select 2</option>
                                            
                                          </select> </div> -->

                                          <div class="col-3">
                                        <select class="form-select" aria-label="Default select example" id="status_type">
                                            <option disabled selected> Select Status</option>
                                            <option value="0">New</option>
                                            <option value="1">Completed</option>
                                            <option value="2">Cancelled</option>
                                          </select> </div>
                                    <div class="col-3" id='datetimepicker1'>
                                        <input type="date" class="form-control" placeholder="From Date" id="fromdate_adminServiceReq" >
                                    </div>
                                    <div class="col-3" id='datetimepicker2'>
                                        <input type="date" class="form-control" placeholder="To Date" id="todate_adminServiceReq" >
                                    </div>
                                    <div class="col col-xs-12 col-buttons">
                                        <button type="Search" class="btn-search Search">Search</button>
                                        <button type="reset" class="btn-clear clear">Clear</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="servicerequests table-responsive">
                            <table class="table services" id="admin_service_request">
                                <thead>
                                    <tr>
                                        <th scope="col">Service ID <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">Service Date <img src="image/both_arrow.png" alt="">
                                        </th>
                                        <th scope="col">Customer detailes <img src="image/both_arrow.png"
                                                alt=""></th>
                                        <th scope="col">Service Provider <img src="image/both_arrow.png"
                                                alt=""></th>
                                        <th scope="col">Status <img src="image/both_arrow.png" alt=""></th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-name">323436</div>
                                        </td>
                                        <td>
                                            <div class="td-date"><img src="image/calendar.png"
                                                    alt=""><b>09/04/2018</b></div>
                                            <div class="td-time"><img src="image/clock1.png" alt="">12:00 -
                                                18:00</div>
                                        </td>
                                        <td>
                                            <div class="td-name">David Bough</div>
                                            <div class="td-address"><img src="image/home.png"
                                                    alt="">Musterstrabe 5,12345 Bonn</div>
                                        </td>
                                        <td>
                                            <div class="td-rating">

                                            </div>
                                        </td>
                                        <td class="btn-status new"><button>New</button></td>
                                        <td class="btn-raction">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                                    id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="image/menudot.png" alt="">
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><button class="dropdown-item" type="button"  data-bs-toggle="modal"
                                                        data-bs-target="#exampleModaledit" data-bs-dismiss="modal">Edit &
                                                            Reschedule</button></li>
                                                    <li><button class="dropdown-item" type="button">Refund</button></li>
                                                    <li><button class="dropdown-item" type="button">Cancel</button>
                                                    <li><button class="dropdown-item" type="button">Change SP</button>
                                                    <li><button class="dropdown-item" type="button">Escalate</button>
                                                    <li><button class="dropdown-item" type="button">History Log</button>
                                                    <li><button class="dropdown-item" type="button">Download
                                                            Invoice</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                   
         </tbody>
                            </table>
                        </div>      

                                       <!------------------------------------------------End of Right Table Servicerequest---------------------------------------------------->
                   <!------------------------------------------------Servicerequest Pagination---------------------------------------------------->


                        <div class="pagination">
                            <div class="show-page">
                                Show Entries
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                               
                            </div>
                            <div class="paginations">
                                <div class="next-left"><img src="image/next-left.png" alt=""></div>
                                <div class="current-page">1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>
                                <div class="next-right"><img src="next-left.png" alt=""></div>
                            </div>
                        </div>
                        <div class="shistory-footer">
                            ©2018 Helperland. All rights reserved.
                        </div>
                    </div>

                </div>
            </div>
        </section>           

    </div>
 <!------------------------------------------------ End of Servicerequest Pagination---------------------------------------------------->


<!--------------------------------------------------------- Model for Edit and Reschedule Service ------------------------------------------>
     <div class="modal fade " id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="font-family:Roboto;">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Edit Service Request</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="editModalForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Date">Date</label>
                                    <input type="date" class="form-control" id="editdate_modal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Time">Time</label>
                                    <input type="time" class="form-control head" id="edittime_modal">
                                </div>
                            </div>
                        </div>
                        <br><div class=" head">Service Address</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetname">Street name</label>
                                    <input type="text" class="form-control"id="streetname_editmodal" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="housenumber">House number</label>
                                    <input type="text" class="form-control" id="houseno_editmodal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postalcode">Postal Code</label>
                                    <input type="text" class="form-control" id="zipcode_editmodal">
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city" >City</label>
                                    <select name="" id="city_editmodal" class="form-control">
                                    <option value="city" selected disabled>Enter your city</option>

                                    <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- <br><div class="head">Invoice Address</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetname">Street name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="housenumber">House number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postalcode">Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <select name="" id="" class="form-control">
                                        <option value="rajkot">Rajkot</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->

                        <br><div class="head">Why do you want to rechedule service requests?</div>
                        <div class="row">
                            <div class="col">
                                <textarea name="" id="reason_editmodal" rows="3" class="form-control" placeholder="why do you want to rechedule service requests?"></textarea>
                            </div>
                        </div>
                        <div style="display: none;">
                <input type="text" id="date_check_editmodal">
                <input type="text" id="time_check_editmodal">
            </div>
                        <!-- <br><div class="head">Call Center EMP notes</div>
                        <div class="row">
                            <div class="col">
                                <textarea name="" id="" rows="3" class="form-control" placeholder="Enter Notes?"></textarea>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col requestid_editModal">
                                <button type="submit" class="form-control modal_btn btn-search " id="update_editmodal"
                                style="margin-top:15px;" data-dismiss="modal" 
                                                        data-bs-toggle='modal'
                                        data-bs-target='exampleModaledit'>Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------End of  Model for Edit and Reschedule Service ------------------------------------------>

<!--------------------------------------------------------- Model for Refund------------------------------------------>


    <div class="modal fade " id="exampleModalrefund" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="font-family:Roboto;">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">Refund</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
             
         
            <div class="modal-body p-4">
                <form id="refund_form">
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="refund_amount_text">Paid Amount</p>
                            <p class="refund_amount_no" id="totalAmount_RM"><b>54,00 €</b></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="refund_amount_text">Refunded Amount</p>
                            <p class="refund_amount_no" id="refundedAmount_RM"><b>0,00 €</b></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="refund_amount_text">In Balance Amount</p>
                            <p class="refund_amount_no" id="AvailableBalance_RM"><b>54,00 €</b></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount_input" class="refund_amount_text"><b>Amount</b></label>
                                <div class="row">
                                    <div class="col-sm-6" style="padding-right: 0px;">
                                        <input type="number" class=" form-control" id="amount_enter">
                                    </div>
                                    <div class="col-sm-6" style="padding-left: 0px;">
                                        <select class="form-control format_amount" id="format_amount_enter">
                                            <option value="1">Percentage</option>
                                            <option value="2">Normal</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount_input" class="refund_amount_text"><b>Calculate</b></label>
                                <div class="row">
                                    <div class="col-sm-6" style="padding-right: 0px;">
                                        <input type="text" class="form-control" value="Calculate" readonly>
                                    </div>
                                    <div class="col-sm-6" style="padding-left: 0px;">
                                        <input type="text" class="form-control" id="calculate_value" readonly>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div>
                        <label for="refund_amount" class="refund_amount_text" style="margin-top:10px;">
                        <b>Why do you want to refund amount?</b></label>
                        <textarea name="refund_amount" rows="4" placeholder="Why do you want to refund amount?" class="modal_textarea"></textarea>
                    </div>

                    <!-- <div>
                        <label for="refund_amount" class="refund_amount_text">Call Center EMP Notes?</label>
                        <textarea name="refund_amount" rows="4" placeholder="Enter Notes" class="modal_textarea"></textarea>
                    </div> -->

                    <div class="requestid_editModal refund_id">
                        <button type="button" class="modal_btn btn-search" id="refund_modal" data-dismiss="modal" 
                                                        data-bs-toggle='modal'
                                        data-bs-target='exampleModalrefund' style="padding: 10px 0px;">Refund</button>
                    </div>
                </form>
            </div>
<!--------------------------------------------------------- End Model for Refund------------------------------------------>


  </body>
<script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/css/adashboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>



    <script>

function loadadminServiceRequest(validation){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=loadServiceRequestAdmin",
        data: {
            condition: validation
        },
        success: function (response) {
            console.log(response);

            $('#admin_service_request').html(response);

            $(".td-rating").rateYo({
                rating: 3.6,
                starWidth: "20px",
                readOnly: true
            });

            $('.td-rating').each(function (index, element) {
                // element == this
                classarr = $(this).attr('class').split(' ');
                rating = classarr[1];

                $(this).rateYo("option", "rating", rating);
                // console.log(this);

            });
        }
    });

    loadCustomerOption();
    loadServiceProviderOption()

}
$(document).ready(function () {
    condition = 'S.Status >= 0';

    loadadminServiceRequest(condition);
});

function loadCustomerOption(){
    $.ajax({
        url: "http://localhost/project/?function=loadCustomerOptionAdmin",
        success: function (response) {
            $('#CustomerOption').html(response);
        }
    });
}
function loadServiceProviderOption() {
    $.ajax({
        url: "http://localhost/project/?function=loadHelpersOptionAdmin",
        success: function (response) {
            $('#serviceProviderOption').html(response);
        }
    });
}

$('.btn-clear').click(function (e) {
    e.preventDefault();

    $('#adminServiceRequestForm').trigger('reset');
});
$('.btn-search').click(function (e) {
    e.preventDefault();

    status_type = $('#status_type').val();
    ServiceProvider = $('#serviceProviderOption').val();
    Customer = $('#CustomerOption').val();
    zipcode = $('#postalcode_adminServiceReq').val();
    serviceid = $('#serviceId_adminServiceReq').val();
    email = $('#email_adminServiceReq').val();
    fromdate = $('#fromdate_adminServiceReq').val();
    todate = $('#todate_adminServiceReq').val();

    // date = date('Y-m-D',strtotime(fromdate));

    // fromdate.format("YYYY-MM-DD");


   // console.log(status_type,ServiceProvider,Customer,zipcode,serviceid,email,fromdate,todate);

    condition = "";
    count = 0;

    if (status_type == null && ServiceProvider == null && Customer == null && zipcode == "" && serviceid == "" && email == "" &&
        fromdate == "" && todate == "") {
        condition += 'S.Status >= 0';
        console.log('aaa');
    }

    if (status_type != null) {
        condition += "S.Status = " + status_type;
        count = 1;
    }

    if (ServiceProvider != null) {
        if (count == 0) {
            condition += " S.ServiceProviderId = " + ServiceProvider;
        } else {
            condition += " AND S.ServiceProviderId = " + ServiceProvider;
        }
        count = 1;
    }

    if (Customer != null) {
        if (count == 0) {
            condition += " S.UserId  = " + Customer;
        } else {
            condition += " AND S.UserId  = " + Customer;
        }
        count = 1;
    }

    if (zipcode != "") {
        if (count == 0) {
            condition += " S.ZipCode  = " + zipcode;
        } else {
            condition += " AND S.ZipCode  = " + zipcode;
        }
        count = 1;
    }

    if (serviceid != "") {
        if (count == 0) {
            condition += " S.ServiceId  = " + serviceid;
        } else {
            condition += " AND S.ServiceId  = " + serviceid;
        }
        count = 1;
    }

    if (fromdate != "") {
        if (count == 0) {
            condition += " S.ServiceStartDate  >= '" + fromdate + "'";
        } else {
            condition += " AND S.ServiceStartDate  >= '" + fromdate + "'";
        }
        count = 1;
    }

    if (todate != "") {
        if (count == 0) {
            condition += " S.ServiceStartDate  <= '" + todate + "'";
        } else {
            condition += " AND S.ServiceStartDate  <= '" + todate + "'";
        }
        count = 1;
    }

    if (email != "") {
        if (count == 0) {
            condition += " U.email  = '" + email + "'";
        } else {
            condition += " AND U.email  = '" + email + "'";
        }
        count = 1;
    }

    console.log(condition);

    loadadminServiceRequest(condition);

});

function ServiceDetails(id) {
console.log(id);
$.ajax({
    type: "POST",
    url: "http://localhost/project/?function=loadEditServiceModalAdmin",
    data: {
        servicerequestid: id
    },
    success: function (response) {

        details = JSON.parse(response);
        console.log(response);
        $('#edittime_modal').val(details["starttime"]);
        $('#editdate_modal').val(details["date"]);
        $('#streetname_editmodal').val(details["Address2"]);
        $('#houseno_editmodal').val(details["Address1"]);
        $('#zipcode_editmodal').val(details["zipcode"]);
        $('#city_editmodal').val(details["City"]);

        //For further checking
        $('#time_check_editmodal').val(details["starttime"]);
        $('#date_check_editmodal').val(details["date"]);

        $('.requestid_editModal').attr('id', details["id"] + "-editModalId");

        $('.bg-modal').css('display', 'flex');
    }
});
}
function sendMailbyAdmin(id,reason){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=SendMailbyAdminEdit",
        data: {
            servicerequestid : id,
            body : reason
        },
        success: function (response) {
            console.log(response);
        }
    });
}
function updateServiceRequestAddress(id) {
    console.log(id);

streetname = $('#streetname_editmodal').val();
houseno = $('#houseno_editmodal').val();
zipcode = $('#zipcode_editmodal').val();
city = $('#city_editmodal').val();

$.ajax({
    type: "POST",
    url: "http://localhost/project/?function=updateServiceAddress_Modal",
    data: {
        streetName: streetname,
        houseNo: houseno,
        Zipcode: zipcode,
        City: city,
        serviceid: id
    },
    success: function (response) {

        $('.bg-modal').css('display', 'none');
        $('.bg-modal-fp').css('display', 'none');

        Swal.fire({
            icon: 'success',
            title: 'Updated Successfully',
        })
    }
});

}
$('#update_editmodal').click(function (e) {
    e.preventDefault();

    id = $('.requestid_editModal').attr('id');
    idarr = id.split("-");
    servicerequestid = parseInt(idarr[0]);

    date1 = $('#editdate_modal').val();
    time1 = $('#edittime_modal').val();
   
    $reason = $('#reason_editmodal').val();



    timecheck = $('#time_check_editmodal').val();
    datecheck = $('#date_check_editmodal').val();

    if (date1 == datecheck && time1 == timecheck) {
        updateServiceRequestAddress(servicerequestid);
        loadadminServiceRequest('S.Status >= 0');
       sendMailbyAdmin(servicerequestid,$reason);
        $('#editModalForm').trigger('reset');
    } else {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=isserviceavailable",
            data: {
                date: date1,
                time: time1,
                serviceid: servicerequestid
            },
            success: function (response) {
                console.log(response);
                if (response == 0) {
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/project/?function=setdatetimeservice",
                        data: {
                            date: date1,
                            time: time1,
                            serviceid: servicerequestid
                        },
                        success: function (response) {

                            updateServiceRequestAddress(servicerequestid);
                            loadadminServiceRequest('S.Status >= 0');
                            sendMailbyAdmin(servicerequestid,$reason);

                            $('#editModalForm').trigger('reset');
                        } 
                    });
                } else {
                    // $('#reschudele_error').css('display', 'block');
                    $('.bg-modal').css('display', 'none');
                    $('.bg-modal-fp').css('display', 'none');

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Already Service is there'
                    })
                }
            }
        });

    }



});


function loadAdminUserManagement(condition, offset, limit) {
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=loadUserManagAdmin&parameter=" + offset + "-" + limit,
        data: {
            reason: condition
        },
        success: function (response) {
            $('#AdminUserManagementtable').html(response);
        }
    });
}
function totalrecord_um(condition){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=fetchtotalRecord_UM",
        data : {
            reason: condition
        },
        success: function (response) {
            $('#totalrecord_um').html("Entries Total Record: " + response);
        }
    });
}
$(document).ready(function () {
    condition = 'UserTypeId < 3';
    loadAdminUserManagement(condition, 0, 10);
    loadCustomerNameList()
    totalrecord_um(condition);
    loadExportUserManagementTable(condition)
});
function loadCustomerNameList() {
    $.ajax({
        url: "http://localhost/project/?function=fetchCustomerNameList",
        success: function (response) {
            $('#user_name_admin').html(response);
        }
    });
}
function UserActiveStatus(userstatus){
    idarr = userstatus.split("/");
    userid = parseInt(idarr[0]);
    isActive = parseInt(idarr[1]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=ChangeActiveStatus",
        data: {
           Userid : userid,
           ActiveStatus : isActive 
        },
        success: function (response) {
            loadAdminUserManagement('UserTypeId < 3', 0, 10);
        }
    });
}
function condition_um(){
        username = $('#user_name_admin').val();
        usertype = $('#user_type_um').val();
        mobile = $('#phone_no_um').val();
        zipcode = $('#postalcode_um').val();
        fromdate = $('#fromdate_um').val();
        todate = $('#todate_um').val();

        console.log(username, usertype, mobile, zipcode, fromdate, todate);

        condition = "";
        count = 0;

        if (username == null && usertype == null && mobile == "" && zipcode == "" && fromdate == "" && todate == "") {
            condition = 'UserTypeId < 3';
        }

        if (username != null) {
            if (count == 0) {
                condition += " UserId = " + username;
            } else {
            condition += " AND UserId = " + username;
        }
        count = 1;
    }

    if (usertype != null) {
        if (count == 0) {
            condition += " UserTypeId = " + usertype;
        } else {
            condition += " AND UserTypeId = " + usertype;
        }
        count = 1;
    }

    if (mobile != "") {
        if (count == 0) {
            condition += " Mobile = '" + mobile + "'";
        } else {
            condition += " AND Mobile = '" + mobile + "'";
        }
        count = 1;
    }

    if (zipcode != "") {
        if (count == 0) {
            condition += " ZipCode = '" + zipcode + "'";
        } else {
            condition += " AND ZipCode = '" + zipcode + "'";
        }
        count = 1;
    }

    if (fromdate != "") {
        if (count == 0) {
            condition += " CreatedDate >= '" + fromdate + "'";
        } else {
            condition += " AND CreatedDate >= '" + fromdate + "'";
        }
        count = 1;
    }

    if (todate != "") {
        if (count == 0) {
            condition += " CreatedDate <= '" + todate + "'";
        } else {
            condition += " AND CreatedDate <= '" + todate + "'";
        }
        count = 1;
    }

    return condition;
}

$('#search_um').click(function (e) {
    e.preventDefault();

    condition = condition_um();
    limit = $('#entries_um').val();
    pagination_um('min');
 loadAdminUserManagement(condition, 0, limit);
 totalrecord_um(condition);
 loadExportUserManagementTable(condition)



});
$('#entries_um').change(function (e) {
    e.preventDefault();

    limit = $('#entries_um').val();
    loadAdminUserManagement('UserTypeId < 3', 0, limit);

});

function pagination_um(textno) {
    limit = $('#entries_um').val();

    totalentriestext = $('#totalrecord_um').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    maxpageno = Math.ceil(totalentries / limit);
    currentpageno = parseInt($('.pagejs .active').html());

    condition = condition_um();

    if ($("#" + textno).length != 0) {
        noarr = textno.split("-");
        textno = parseInt(noarr[0]);
    }

    if ($.isNumeric(textno)) {

        $('.pagejs .active').removeClass('active');

        offset = (textno - 1) * limit;
        loadAdminUserManagement(condition, offset, limit);
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
            loadAdminUserManagement(condition, offset, limit);
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
            loadAdminUserManagement(condition, offset, limit);
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
        loadAdminUserManagement(condition, offset, limit);
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
        loadAdminUserManagement(condition, offset, limit);
        $('#1-pagination').addClass('active');

    } else {
        console.log("Pagination Error");
    }


}

function loadExportUserManagementTable(condition){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=loadExportUserManagAdmin",
        data: {
            reason: condition
        },
        success: function (response) {
            $('#exportusermanagementTable').html(response);
        }
    });
}
$('#export_um').click(function (e) { 
    e.preventDefault();

    let data = document.getElementById('exportusermanagementTable');
    var fp = XLSX.utils.table_to_book(data, {
        sheet: 'Sheet1'
    });

    XLSX.write(fp, {
        bookType: 'xlsx',
        type: 'base64'
    });
    XLSX.writeFile(fp, 'Service History(Admin).xlsx');
    
});

function RefundDetails(id) {
    console.log(id);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=fetchrefundmodaldetails",
        data: {
            serviceRequestId: id
        },
        success: function (response) {
            Refunddetails = JSON.parse(response);

            console.log(Refunddetails);

            $('#totalAmount_RM').html(Refunddetails["totalcost"] + "€");

            if (Refunddetails["refundAmount"] == null) {
                $('#refundedAmount_RM').html(0 + "€");
            } else {
                $('#refundedAmount_RM').html(Refunddetails["refundAmount"] + "€");
            }



            availablebalance = Refunddetails["totalcost"] - Refunddetails["refundAmount"];
            $('#AvailableBalance_RM').html(availablebalance + "€");

            $('.refund_id').attr('id', id + "-refundid")
        }
    });
}

$('#amount_enter').change(function (e) {
    e.preventDefault();

    amount = $('#amount_enter').val();
    format = $('#format_amount_enter').val();
    if (format == 2) {
        $('#calculate_value').val(amount);
    } else {
        availablebalance = $('#AvailableBalance_RM').html();
        availablebalance_arr = availablebalance.split('€');
        calculatevalue_per = parseFloat(availablebalance_arr[0]);

        calculatevalue = (amount / 100) * calculatevalue_per;

        $('#calculate_value').val(calculatevalue);
    }

});

$('#refund_modal').click(function (e) {
    e.preventDefault();

    id = $('.refund_id').attr('id');
    id_arr = id.split("-");
    refundid = parseInt(id_arr[0]);

    refundAmount = parseFloat($('#calculate_value').val());

    refundedAmount = $('#refundedAmount_RM').html();
    refundedAmount_arr = refundedAmount.split("€");
    refundNo = parseFloat(refundedAmount_arr[0]);

    totalrefund = refundAmount + refundNo;

    totalAmount = $('#totalAmount_RM').html();
    totalAmount_arr = totalAmount.split("€");
    totalNo = parseFloat(totalAmount_arr[0]);

    if (totalrefund < totalNo) {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=updaterefundvalue",
            data: {
                serviceRequestId: refundid,
                refunded_amount: totalrefund
            },
            success: function (response) {
                $('#exampleModalrefund').modal('hide');
                $('#refund_form').trigger('reset');
            }
        });

    }else{
        console.log("Error");
    }


});

 </script>
</html>
 