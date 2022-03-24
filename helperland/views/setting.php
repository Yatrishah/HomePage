<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/customer-service history.css">   
     <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">  
      <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/model.css">




   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Customer-Service History</title>
</head>
        
<body>
<div class="content-section">
<?php include 'customer-service history.php';?>

                  <!-- ----------------------------------------Settings ------------------------------------------------ --> 

  <div class="divContent" id="mySettings">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"  data-bs-target="#nav-details" type="button" role="tab" aria-controls="nav-home" aria-selected="true">My Details</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-address" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Addresses</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Change Password</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row ">
                            <div class="col-sm-4">
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="yatri@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Mobile Number</label>
                                <div class="input-group">
                                    <span class="input-group-text" >+49</span>
                                    <input type="text" class="form-control" placeholder="Phone Number" aria-label="Username">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="26/03/2000">
                                </div>
                            </div>
                        </div>
                        <hr>
                       
                        <a href="#" ><button class="buttonaccept">Save</button></a>
                 <!-- ------------------------------------------------------End of Settings ------------------------------------------------ --> 
                  <!-- ----------------------------------------------------------------Settings ------------------------------------------------ --> 
                  <!-- ----------------------------------------Address ------------------------------------------------ --> 

                    </div>
                    <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table  class="services">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                       <div><b>Address:</b> Second Street 23, 53225 Bonn</div> 
                                        <div><b>Phone number:</b> 9988556644</div>
                                    </td>
                                    <td>
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
                        <button class="buttonaccept" data-bs-toggle="modal"
                                    data-bs-target="#addNewAddress" data-bs-dismiss="modal"> Add New Address </button>
                    </div>
                 <!-- -------------------------------------------------------End of Addrerss ------------------------------------------------ --> 

                  <!-- ----------------------------------------Password ------------------------------------------------ --> 

                    <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="form-group col-sm-4">
                            <label>Old Password</label>
                            <input type="password" class="form-control" placeholder="Old password ">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="New password">
                        </div>
                        <div class="form-group col-sm-4">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm password">
                        </div>
                        <div class="">
                            <button class="buttonaccept"> Save </button>
                        </div>
                    </div>
                  </div>

            </div></body>
            
            <script type="text/javascript" src="../assets/css/script1.js"></script>
            </html>
                  <!-- ----------------------------------------End of Password ------------------------------------------------ --> 