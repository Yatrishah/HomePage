<?php
    use PHPMailer\PHPMailer\PHPMailer;
session_start();
  
class HomeController
{
    function __construct()
    {
        include('./models/models.php');
        $this->modal=new Models();
       // session_start() ;
        include("./models/doMail.php");


    }

   function forgotPassword(){
      include "views/fpassword.php";
   }
   //CONTACTUS FORM
   function getTouchwithUs()
        {
            
          //  $mail = new PHPMailer(true);
          if (isset($_POST)) {
                  $name = $_POST['firstname']. $_POST['lastname'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];
                  $subject=$_POST['subject'];
                  $phonenumber=$_POST['phonenumber'];
                  $CreatedOn = date('Y-m-d H:i:s');
                  $file=$_FILES['file']['name'];
                  $target_path = $_FILES['file']['name'];   
                   move_uploaded_file($_FILES['file']['tmp_name'], "./views/profile_img/".$target_path);

                  $temp= $this->modal->insert_contactUs('contactus',$name,$email,$phonenumber,$subject,$message,
                  $CreatedOn,$file,$target_path);
                  $_SESSION["status_msg"]="Data Inserted In Database AND mail is sended to User and Admin";
                  doMailAttactment($email, $subject ,  'Name :' .$name.'<br>'.'Email :' .$email.'<br>'.'Message :' .$message.'<br>'.'CreatedOn :' .$CreatedOn);
                  header('Location:./views/contact us.php');
                   }

      }      
//CUSTOMER REGISTRATION
  function customerregistration()
  {
          if (isset($_POST)) {
               $name = $_POST['firstname'];
               $lastname = $_POST['lastname'];
               $email = $_POST['email']; 
               $phonenumber=$_POST['phonenumber'];
               $password=trim($_POST['password']);
               $cpassword=trim($_POST['cpassword']);
            
               $userTypeId=1;
               $currentDateTime = date('Y-m-d H:i:s');
               $isApproved=1;
               $ZipCode=380007;
               if($password == $cpassword){
               
               $temp= $this->modal->customer_insert('user',$name,$lastname ,$email,$password,$phonenumber,
               $userTypeId,$ZipCode,
               $currentDateTime,$isApproved);
             //  $_SESSION['status_msg1']="Inserted User Data Sucessfully And Mail is Sended To your Account";
              // doMail($email,'Account Created','Congratulation ' .$name. ' your account is created sucessfully!!');
              
               }  
               else{
                     $_SESSION['status_msg1']="Password Does Not match!! Please Try Again";
                  }
            }
               header('Location:./views/registration.php');                       
  }
//SERVICEROVIDER
  function serviceProviderregistration()
    {
      if(isset($_POST)) {
        $name = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email']; 
        $phonenumber=$_POST['phonenumber'];
        $password=trim($_POST['password']);
        $cpassword=trim($_POST['cpassword']);
       
        $userTypeId=2;
        $ZipCode=380007;

        $currentDateTime = date('Y-m-d H:i:s');
        $isApproved=1;
        if($password == $cpassword){
          
          $temp= $this->modal->customer_insert('user',$name,$lastname ,$email,$password,$phonenumber,
          $userTypeId,$ZipCode,
          $currentDateTime,$isApproved);
        // $_SESSION['status_msg1']="Inserted User Data Sucessfully And Mail is Sended To your Account";
         //doMail($email,'Account Created','Congratulation ' . $name.' your account is created sucessfully!!');
        }  
        else{
              $_SESSION['status_msg1']="Password Does Not match!! Please Try Again";
            }
      }
        header('Location:./views/service provider(6th).php');       
    }
    
   //LOGIN
  function login()
  {

      if (isset($_POST)) {
        $email = $_POST['email'];
        $password=$_POST['password'] ;
        $result= $this->modal->CheckLogin($email,$password);
          if($result){
            if(mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_array($result)) {
                //die(print_r($row));
                if($row['IsApproved'] == 1){
                     if(($row['IsActive']==1)){
                  if(($_POST['email'] == $row['email']) && ($_POST['password'] == $row['Password'])){
                     
                         $_SESSION['UserId'] = $row['UserId'];

                      $_SESSION['FirstName'] = $row['FirstName'];
                      $_SESSION['UserTypeId'] = $row['UserTypeId'];
                      if($_SESSION['UserTypeId']==3){
                      header('Location:./views/admin-dashboard.php');
                      }
                      else
                      {
                        header('Location:./views/index.php');
 
                      }
                     }
                  

                  }
                  else{
                     $_SESSION['login']='<script>
                     alert("Sorry!! Admin Does not approve your account")
                     </script>';
                     header('Location:./views/index.php');


                  }
         }
      }
                                        
   }  
        else{
              $_SESSION['status_msg2']='<script>
              alert("Invalid Username Or Password!!! Please CLick on YOUR Login Button to Login Again ")
              </script>';
              header('Location:./views/index.php');
            }
      }
    }
  }

  //FORGOT PASSWORD
   function forgotPasswordMail(){
   
         if(isset($_POST["reset"])){

         $userid = $this->modal->forgotpasswordfetch($_POST["email"]);
            
         if(isset($_POST["reset"])){
         $email = $_POST["email"];
         $_SESSION['status_msg1']='<script>
                  alert("Link Has Been Sended to your Mail Id!!Please Check Your Mail")
                  </script>';
                  doMail($email,'Change Password for Helperland',"http://localhost/project/index.php?function=forgotPassword&parameter=$userid");
                     header('Location:./views/index.php');

 
   }}}

   //CHANGE PASSWORD
   function changepassword(){
      $user["userid"] = $_GET["parameter"];
      $user["password"] = $_POST["password"];
      $user["cpassword"] = $_POST["cpassword"];

     if($user["password"]==$user["cpassword"]){
      $this->modal->changepassword($user);
       $_SESSION['status_msg1']='<script>
              alert("Thanks For Connecting With us!!!Your Password As Been Updated")
              </script>';
              header('Location:./views/index.php');

     }
     else{
      $_SESSION['status_msg1']='<script>
      alert("Password Does Not Match Plz Click on your Link Again")
      </script>';
           header('Location:./views/index.php');


    }

   }

   //POSTALCODE(tab1)
  function postalcodevalidation()
   {
      $postalcode = $_POST["code"];
      $city = $this->modal->postalcode($postalcode);
      if ($city == false) {
         echo 1;
      } else {
         $_SESSION["postalcode"] = $postalcode;
         echo $postalcode."|";
         echo $city;
      }
   }

   //USER ADDRESS(TAB2)
  function usersaddress()
  {
     $row = $this->modal->fetchuseraddress();
     $useraddress = "";
     while($address = mysqli_fetch_assoc($row)){ 

        $addressid = $address["AddressId"];
        $addressline = $address["AddressLine1"];
        $city = $address["City"];
        $state = $address["State"];
        $postalcode = $address["PostalCode"];
        $mobile = $address["Mobile"];
        $useraddress .= " <div class='row  ' style=' margin:8px'>
                              <div class='radio_address mb-2 form-control ' style='height:auto;'>
                          <div class='col-lg-1' style='margin: auto;width: 100%;'>
                             <input type='radio' id='$addressid-addressid' name='address' value='address1' style='margin: 0 auto;'>
                          </div>
                          <div class='col-lg-11'>
                             <label for='address1'>
                                <p style='margin-bottom: 0px;'><b>Address:</b> $addressline,
                                      $city $state $postalcode 
                                </p>
                                <p style='margin-bottom: 0px;'><b>Phone number:</b> $mobile</p>
                             </label>
                                </div>
                          </div>
                       </div>";
     }
        echo $useraddress;
     
  }
//ADDRESS(TAB3)
function schedule()
{
   
   $servicerequest["date"] = date("Y/m/d",strtotime($_POST["date"]));
   $servicerequest["time"] = $_POST["time"];
   $servicerequest["zipcode"] = $_SESSION["postalcode"];
   $servicerequest["UserId"] = $_SESSION["UserId"];
   $duration_sr = $_POST["duration"];
   $duration_arr = explode(" ", $duration_sr);
   $servicerequest["duration"] = (int)$duration_arr[0];
   $charge_per_hr= 100;
   $extra_service_hr = 0.5;
   $extra_service_cost = 50;
 
   $servicerequest["serviceid"] = rand(0,10000); 
   $servicerequest["extraservice"]  = $_POST["extraservice"];
   $servicerequest["pets"] = $_POST["pets"];
   $servicerequest["comments"] = $_POST["comments"];


   if ($_POST["providerid"] != 0) {
      $servicerequest["ServiceProviderId"] = $_POST["providerid"];
   } else {
      $servicerequest["ServiceProviderId"] = 0;
   }
   


   

   if ($servicerequest["extraservice"][0] != 0) {
     echo "1";
    $servicerequest["extraservice"] = $_POST["extraservice"];
    $servicerequest["totalpayment"] = $charge_per_hr * $servicerequest["duration"] +
     count($servicerequest["extraservice"]) * $extra_service_cost;
     $servicerequest["subtotal"] = $charge_per_hr * $servicerequest["duration"] +
     count($servicerequest["extraservice"]) * $extra_service_cost;
    $servicerequest["totaltime"] = $servicerequest["duration"];
    $servicerequest["totalextrahr"] = count($servicerequest["extraservice"]) * $extra_service_hr;
    $servicerequest["extra_service_hr"]= count($servicerequest["extraservice"]) * $extra_service_hr;
    $servicerequest["charge_per_hr"] = $charge_per_hr;

    $this->modal->insertservicerequest($servicerequest);
    $servicerequest["servicerequestid"] = $this->modal->fetchservicerequestid($servicerequest["serviceid"]); 
    $_SESSION["servicerequestid"] = $servicerequest["servicerequestid"];



 }
  else {
   echo "2";
    $servicerequest["totalpayment"] = $servicerequest["charge_per_hr"]* $servicerequest["duration"];
    $servicerequest["totaltime"] = $servicerequest["duration"];
    $servicerequest["extraservice"] = null;
    $this->modal->insertservicerequest($servicerequest);

    $servicerequest["servicerequestid"] = $this->modal->fetchservicerequestid($servicerequest["serviceid"]);
    $_SESSION["servicerequestid"] = $servicerequest["servicerequestid"];
 } 
 //$this->modal->insertextraservice($servicerequest);

   // unset($_SESSION["postalcode"]);

   $this->usersaddress();


}

function yourdetails()
   {
      $row = $this->modal->fetchuseraddress();
      print_r($row);
   }

   //USER ADDRESS INSERT(TAB3)
function insertaddress(){
  
 
  $useraddress["streetname"] = $_POST["street_name"];
  $useraddress["houseno"] = $_POST["house_no"];
  $useraddress["postalcode"] = $_POST["postalcode"];
  $useraddress["city"] = $_POST["city"];
  $useraddress["phoneno"] = $_POST["phoneno"];

  $this->modal->insertuseraddress($useraddress);
  $this->usersaddress();

  
}

function insertServiceRequestAddress(){
  $addressid = $_POST["addressid"];
  $this->modal->addServiceRequestAddress($addressid);
  echo $_SESSION["servicerequestid"];

}


// function favouriteserviceprovider()
//    {
//       $output = "";
//       $userid = $_SESSION["UserId"];
//       $targetServiceProviderarr = $this->modal->fetchServiceProvider($userid);
//       foreach ($targetServiceProviderarr as $value) {
//          $name = $this->modal->fetchServiceProviderName($value);
//          $output .= "<div class='td-rating m-2' style='width: 200px; border:none'>
//                      <div class='rating-user' style='margin-left:20px'>
//                         <img src='../assets/image/image_table.png'>
//                      </div>
//                      <p style='margin-left:25px;margin-top:5px'>$name</p>
//                      <button class='btnaddnewadd1' id='$value-favserviceprovider'>Select</button>
//                   </div>";
//       }
//       echo $output;
//    }
   function favourite_service_provider()
   {
      $output = "";
      $userid = $_SESSION["UserId"];
      $targetServiceProviderarr = $this->modal->fetchtargetServiceProvider($userid);
      // print_r($targetServiceProviderarr);
      foreach ($targetServiceProviderarr as $value) {
         $name = $this->modal->fetchServiceProviderName($value);
         $output .= "<div class='td-rating m-2' style='width: 200px; border:none'>
                     <div class='rating-user' style='margin-left:20px'>
                        <img src='../assets/image/image_table.png'>
                     </div>
                     <p style='margin-top:5px'><b>$name</b></p>
                     <button class='select_btn' id='$value-favserviceprovider' style='margin-left:10px;color:white;'>Select</button>
                  </div>";
      }
      echo $output;
   }


   function fetchcurrentservice()
   {
      $output = "";
      $userid = $_SESSION["UserId"];
      $parameterarr = explode("-",$_GET["parameter"]);
      $offset = $parameterarr[0];
      $limit = $parameterarr[1];
      $output .= " <div>
                   
      <table  id='dashboardforpagination'  class='services'>
     <thead>
         <tr>
             <th>Service Id<img src='../assets/image/both_arrow.png'></th>
             <th>Service Date<img src='../assets/image/both_arrow.png'></th>
             <th>Service Provider <img src='../assets/image/both_arrow.png'></th>
             <th>Payment<img src='../assets/image/both_arrow.png'></th>
             <th>Actions<img src='../assets/image/both_arrow.png'></th>
             
             
         </tr>
     </thead>
     <tbody>";

      $result = $this->modal->fetchcurrentservice($userid,$offset,$limit);
      while ($row = mysqli_fetch_assoc($result)) {

         $servicerequestid = $row["ServiceRequestId"];
         $serviceid = $row["ServiceId"];
         $datetime = $row["ServiceStartDate"];
         $payment = $row["TotalCost"];
         $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
         $serviceproviderid = $row["ServiceProviderId"];
         // echo $serviceproviderid;

         // Date & Time 
         $datetime_arr = explode(" ", $datetime);
         $date = $datetime_arr[0];
         $time = $datetime_arr[1];
         $starttime = date("g:i", strtotime($time));
         $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));
         




         $output .= 
                        "<tr data-bs-toggle='modal'
                        data-bs-target='#exampleModalServiceRequest'
                        data-bs-dismiss='modal'>
            <td onclick='dashboardmodal($servicerequestid)'><b>$serviceid</b></td>
            <td >
                <div><img src='../assets/image/calender_c.png'><b>$date</b></div>
                <div><img src='../assets/image/clock1.png'>$starttime - $endtime</div>
            </td>";

         if (isset($serviceproviderid)) {

            $row1 = $this->modal->fetchuserdetails($serviceproviderid);

            $firstname = $row1["FirstName"];
            $lastname = $row1["LastName"];
            $picture = $row1["UserProfilePicture"];

            $output .=  
                       " <td>
                        <div class='td-rating'>
                           <div class='rating-img' ><img src='../assets/image/$picture' style='width:50px;height:50px'></div>
                            <div class='info'>
                                <div class='name'><b>$firstname $lastname</b></div>
                                <div class='avg_rating_serprovider $serviceproviderid-avgRating'>hh
                                    
                                </div>
                            </div>
                        </div>
                    </td>";
         } else {
            $output .= "<td> </td>";
         }



         $output .=  "<td>
         <div class='td-curr'>€<span>$payment</span></div>
 </td>
 <td >
 <button class='buttonaccept'  data-bs-toggle='modal'
     data-bs-target='#RescheduleRequest' ' onclick='onReschedule($servicerequestid)' data-bs-dismiss='modal'>
      Reschedule </button>
     <button class='buttoncancel1'  data-bs-toggle='modal'
     data-bs-target='#cancelRequest' ' onclick='onCancel($servicerequestid)' data-bs-dismiss='modal'> Cancel </button>   
                                     </td>
                     </tr>";
      }

      echo $output;
   }



   function update_datetime(){
      $date = date("Y/m/d", strtotime($_POST["date"]));;
      $time = $_POST["time"];
      $id = $_POST["serviceid"];

      $datetime = $date." ".$time. ":00";
   
      echo $date;
      echo $time;
      $this->modal->update_datetime($id,$datetime);
      $result = $this->modal->emailsp($id);
      $row = mysqli_fetch_assoc($result);
      $userid = $row["ServiceProviderId"];
      if ($userid != NULL) {
         $row = $this->modal->fetchuserdetails($userid);
         $email = $row["email"];
         echo $row["email"];
         doMail($email,'Account Created','your account is created sucessfully!!');

      }
   }

   function fetch_datetime(){
      $serviceid = $_POST["serviceid"];

      $datetime = $this->modal->fetch_datetime($serviceid);
      $datetimearr = explode(" ",$datetime);
      echo $datetimearr[0]."|";

      $timearr = explode(":",$datetimearr[1]);
      $time = $timearr[0].":".$timearr[1];
      echo $time;
   }

   function checkserviceavailable(){
      $date = date("Y/m/d", strtotime($_POST["date"]));;
      $time = $_POST["time"];
      $id = $_POST["serviceid"];
      //echo $id;
      $datetime = $date." ".$time. ":00";
      
      $result = $this->modal->checkserviceavailable($datetime);
      $no = mysqli_num_rows($result);
      echo $no;
   }

   function cancelservice(){
      $serviceid = $_POST["serviceid"];
      $comment = $_POST["comment"];
      
      $this->modal->cancelservice($serviceid,$comment);
   }

   function Allservicerequestdetails()
   {
      $servicerequestid = $_POST["id"];


      $result = $this->modal->Allservicerequestdetails($servicerequestid);

      $row = mysqli_fetch_assoc($result);
      $servicedetails = [];

      $servicedetails["ServiceId"] = $row["ServiceId"];
      $datetime = $row["ServiceStartDate"];
      $servicedetails["servicerequestid"] = $servicerequestid;
      $servicedetails["ServiceHours"] = $row["ServiceHours"];
      $servicedetails["ExtraHours"] = $row["ExtraHours"];
      $servicedetails["TotalCost"] = $row["TotalCost"];
      $servicedetails["UserId"] = $row["UserId"];
      $servicedetails["Comments"] = $row["Comments"];
      $servicedetails["HasPets"] = $row["HasPets"];
      $servicedetails["AddressLine1"] = $row["AddressLine1"];
      $servicedetails["AddressLine2"] = $row["AddressLine2"];
      $servicedetails["City"] = $row["City"];
      $servicedetails["State"] = $row["State"];
      $servicedetails["PostalCode"] = $row["PostalCode"];

      // Date and Time 
      $totalhr = $servicedetails["ServiceHours"] + $servicedetails["ExtraHours"];
      $servicedetails["duration"] = $totalhr;
      $datetime_arr = explode(" ", $datetime);
      $servicedetails["date"] = $datetime_arr[0];
      $time = $datetime_arr[1];
      $servicedetails["starttime"] = date("g:i", strtotime($time));
      $servicedetails["endtime"] = date("H:i", strtotime("+$totalhr hour", strtotime($time)));

      // Extra Service 
      $servicedetails["ServiceExtraId"] = [];

      $result1 = $this->modal->Allextraservicedeatils($servicerequestid);

      if (mysqli_num_rows($result1) == 0) {
         array_push($servicedetails["ServiceExtraId"], 0);
      } else {
         while ($row1 = mysqli_fetch_assoc($result1)) {
            array_push($servicedetails["ServiceExtraId"], $row1["ServiceExtraId"]);
         }
      }


      // Extra Service Name 
      $servicedetails["ExtraService"] = [];
      foreach ($servicedetails["ServiceExtraId"] as $value) {

         if ($value == 1) {
            array_push($servicedetails["ExtraService"], "Inside Cabinet");
         } else if ($value == 2) {
            array_push($servicedetails["ExtraService"], "Inside fridge");
         } else if ($value == 3) {
            array_push($servicedetails["ExtraService"], "Inside oven");
         } else if ($value == 4) {
            array_push($servicedetails["ExtraService"], "Inside fridge");
         } else if ($value == 5) {
            array_push($servicedetails["ExtraService"], "Laundry wash & dry");
         } else {
            array_push($servicedetails["ExtraService"], 0);
         }
      }

      $servicedetails["customername"] = $this->modal->servicerequestCustomerName($servicedetails["UserId"]);

      echo json_encode($servicedetails);
   }


function ServiceHistory()
{
   
   $output = "";
   $userid = $_SESSION["UserId"];
   $parameterarr = explode("-",$_GET["parameter"]);
   $offset = $parameterarr[0];
   $limit = $parameterarr[1];

   $output .= "  <table  id='tblCustomers'  class='services'>
   <thead> <tr>
   <th>Service Id<img src='../assets/image/both_arrow.png'></th>
   <th>Service Date<img src='../assets/image/both_arrow.png'></th>
   <th>Service Provider <img src='../assets/image/both_arrow.png'></th>
   <th>Payment<img src='../assets/image/both_arrow.png'></th>
   <th>Status<img src='../assets/image/both_arrow.png'></th>
   <th>Rate SP<img src='../assets/image/both_arrow.png'></th>
   
</tr>
</thead> ";

   $servicehistorydetails = $this->modal->servicehistorydetails($userid, $offset, $limit);

   while ($row = mysqli_fetch_assoc($servicehistorydetails)) {

      $servicerequestid = $row["ServiceRequestId"];
      $serviceid = $row["ServiceId"];
      $datetime = $row["ServiceStartDate"];
      $payment = $row["TotalCost"];
      $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
      $serviceproviderid = $row["ServiceProviderId"];
      $status = $row["Status"];
      // echo $serviceproviderid;

      // Date & Time 
      $datetime_arr = explode(" ", $datetime);
      $date = $datetime_arr[0];
      $time = $datetime_arr[1];
      $starttime = date("g:i", strtotime($time));
      $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));

      $output .= " <tr>
                  <td><b>$serviceid</b> </td>
                  <td>
                        <div><img src='../assets/image/calender_c.png'><b>$date</b></div>
                        <div><img src='../assets/image/clock1.png'>$starttime - $endtime</div>
                  </td>";

      if (isset($serviceproviderid)) {

         $row1 = $this->modal->fetchuserdetails($serviceproviderid);

         $firstname = $row1["FirstName"];
         $lastname = $row1["LastName"];
         $picture= $row1["UserProfilePicture"];

         $output .=  
                    " <td>
                     <div class='td-rating'>
                        <div class='rating-img'><img src='../assets/image/$picture' style='width:50px;height:50px'></div>
                         <div class='info'>
                             <div class='name'style='margin-bottom:-20px;'><b>$firstname $lastname</b>   </div>
                             <div class='servicehistory_rating mt-4 ml-5' id='$servicerequestid-ratings'
                             >
                            </div>
                            
                         </div>
                     </div>
                 </td>";
      } else {
         $output .= "<td> </td>";
      }


    
      $output .=  "<td>
      <div class='td-curr'>€<span>$payment</span></div>
</td>";

      

      if ($status == 1) {

         $output .= "
                       
                        <td class='centerbutton'>
                        <button class='buttoncompleted'> Completed </button>
                    </td>                           </div>
                     ";
      } else {
         $output .= "  <td class='centerbutton'>
         <button class='buttoncancel'> Cancelled </button>
         </td> ";
      }

      if (isset($serviceproviderid)) {
         if($status==2){
            $output .= "<td>
            <button type='button' class='RateSP'>Rate SP</button>
         </td>
         </tr>";}
         else{
      $output .= "<td class='centerbutton'>
      <button class='RateSP' data-bs-toggle='modal'
          data-bs-target='#exampleModalRateSP' onclick='ratingclick($servicerequestid,$serviceproviderid)'> Rate SP </button>
   </td>
 
</tr>";
}}
else{
   $output .= "<td>
   <button type='button' class='RateSP'>Rate SP</button>
</td>
</tr>";
}
   }

   echo $output;
}
function fetchtotalentriesdashboard(){

   $userid = $_SESSION["UserId"];

   $totalentries = $this->modal->gettotalentriesdashboard($userid);
   echo $totalentries;
}

function fetchtotalentriesservicehistory(){
   $userid = $_SESSION["UserId"];

   $totalentries = $this->modal->gettotalentriesservicehistory($userid);
   echo $totalentries;
}

function setrating()
   {
      $rating["userid"] = $_SESSION["UserId"];
      $rating["serviceid"]  = $_POST["id"];
      $rating["serviceproviderid"]  = $_POST["serviceprovider_id"];
      $rating["feedback"]  = $_POST["service_feedback"];
      $rating["timeArrivalRating"]  = $_POST["timeArrival"];
      $rating["frindlyRating"]  = $_POST["friendly"];
      $rating["qualityRating"]  = $_POST["quality"];
      $rating["rating"] =  $_POST["rating_service"];

      $ratingdone = $this->modal->checkratingalreadydone($rating["serviceid"]);

      if ($ratingdone == true) {
         $this->modal->updaterating($rating);
      } else {
         $this->modal->insertrating($rating);
      }

      echo $rating["serviceid"] . "|";
      echo $rating["rating"];
   }

   function setratingmodal()
   {
      $serviceproviderid = $_POST["serviceProviderId"];
      //echo $serviceproviderid;
      $row1 = $this->modal->fetchuserdetails($serviceproviderid);

      $fname = $row1["FirstName"];
      $lname = $row1["LastName"];
      //echo $lname;
      $avatar = $row1["UserProfilePicture"];

      $name = $fname." ".$lname;

      echo '<b>'.$name.'<b>'."|".$avatar;
   }
   function getrating()
   {
      $servicerequestId = $_POST["serviceRequestId"];

      $result = $this->modal->getAverageRating($servicerequestId);
      while ($row = mysqli_fetch_assoc($result)) {
         echo $row["Ratings"] . "|" . $servicerequestId;
      }
   }
   function getdetails()
   {
      $userid = $_SESSION["UserId"];

      $row = $this->modal->fetchuserdetails($userid);

      echo json_encode($row);
   }

   function oldpasswordcheck(){
      $old_password = $_POST["oldPassword"]; 
      $userid = $_SESSION["UserId"];

      $row = $this->modal->fetchuserdetails($userid);
      echo $row["Password"];
   }

   function updatePassword()
   {
      $user["userid"] = $_SESSION["UserId"];
      $user["password"] = $_POST["password"];

      $this->modal->changepassword1($user);
   }
   
   
    function Mydetails(){
       
      $details["userid"]=$_SESSION["UserId"];
     
      $details["fname"]=$_SESSION["fname"];
      //echo $details["fname"];
      $details["lname"]=$_POST["lname"];
      $details["email1"]=$_POST["email1"];
     $details["phonenumber"]=$_POST["phonenumber"];
     $details["bdate"]=$_POST["bdate"];
      $this->modal->updateDetails($details);
      $_SESSION['msg1']='<script>
      alert("Your Details Hase Been Updated!!!");
      </script>';
      header('Location:./views/customer-service history.php');


    }
    function loadsettingaddress(){
      $row = $this->modal->fetchuseraddress();
      $useraddress = "<tr class='table_heading'>
                        <th class='address_th py-3 px-4'>Addresses</th>
                        <th>Action</th>
                     </tr>";
      while ($address = mysqli_fetch_assoc($row)) {

         $addressid = $address["AddressId"];
         $houseno = $address["AddressLine1"];
         $addressline = $address["AddressLine2"];
         $city = $address["City"];
         $state = $address["State"];
         $postalcode = $address["PostalCode"];
         $mobile = $address["Mobile"];
         $useraddress .= "<tr>
                           <td class='address_td' id='$addressid-useraddress'>
                        <div>
                                    <p><b>Address:</b> $houseno $addressline, $city, $state, $postalcode</p>
                                    <p><b>Phone Number:</b> $mobile</p>
                                 </div>
                              </td>
                              <td class='action_row'>
                                
                                 <i class='fa fa-edit' data-bs-toggle='modal'
                                 data-bs-target='#editAddress' data-bs-dismiss='modal' onclick='edit_address($addressid)'> Edit </button>
                                 <i class='fa fa-trash' data-bs-toggle='modal'
                                 data-bs-target='#deleteAddress' data-bs-dismiss='modal' onclick='delete_address($addressid)'> Delete </button> 
                                 
                              </td>
                        </tr>";
      }
      echo $useraddress;
   }
   function setAddressModal()
   {
      $id = $_POST["addressId"];
      

      $result = $this->modal->fetchAddressModal($id);
      $row = mysqli_fetch_assoc($result);

      echo json_encode($row);
   }

   //   Update Address 
   function updateAddress(){
      $address["StreetName"] = $_POST["streetName"];
      $address["HouseNo"] = $_POST["houseno"];
      $address["PostalCode"] = $_POST["postalcode"];
      $address["City"] = $_POST["city"];
      $address["Mobile"] = $_POST["Mobile"];
      $address["addressId"] = $_POST["AddressId"];
     
      $this->modal->updateAddress($address);
      print_r($address);
   }

   // Delete Address 
   function deleteaddress_setting(){
      $addressid = $_POST["addressId"];

      $this->modal->deleteaddress($addressid);
   }
   function averageRating(){
      $id = $_POST["serviceProviderId"];

      $result = $this->modal->getAllRatingOfProvider($id);
      $count = 0;
      $sum = 0;
      while($row = mysqli_fetch_assoc($result)){
         $sum += $row["Ratings"];
         $count++;
      }
      $avg = $sum/$count;
      echo  number_format($avg,1);
   }

    //Update details of Service Provider
   //  function updatedetails_sp()
   //  {
   //     $provider["fname"] = $_POST["FirstName"];
   //     $provider["lname"] = $_POST["LastName"];
   //     $provider["email"] = $_POST["Email"];
   //     $provider["phoneno"] = $_POST["PhoneNo"];
   //     $provider["birthdate"] = $_POST["date"];
   //     $provider["nationality"] = $_POST["Nationality"];
   //     $provider["gender"] = $_POST["Gender"];
   //     $provider["avatar_name"] = $_POST["logo_name"];
   //     $provider["streetname"] = $_POST["streetName"];
   //     $provider["houseno"] = $_POST["houseNo"];
   //     $provider["postalcode"] = $_POST["postalcode"];
   //     $provider["city"] = $_POST["city"];
   //     $provider["userid"] = $_SESSION["UserId"];
 
   //     $this->modal->updateServiceProviderDetails($provider);
 
   //     $result = $this->modal->IsInsertedAddress_SP($provider);
 
   //     if ($result > 0) {
   //        //Update Address
   //        $this->modal->updateAddress_sp($provider);
   //     } else {
   //        //Insert Address
   //        $this->modal->insertuseraddress($provider);
   //     }
 
   //     print_r($provider);
   //  }
 
   //  function setAdress_sp()
   //  {
   //     $provider["userid"] = $_SESSION["UserId"];
 
   //     $result = $this->modal->IsInsertedAddress_SP($provider);
 
   //     if ($result > 0) {
   //        $result1 = $this->modal->getAddress_SP($provider["UserId"]);
   //        echo json_encode($result1);
   //     }
   //  }
 
    function loadServiceRequest_SP()
    {
      
       $output = "";
      
       $userid = $_SESSION["UserId"];
       
       $result = $this->modal->getAddress_SP($userid);
      $pincode = $result['PostalCode'];
 
      // //  $parameterarr = explode("-", $_GET["parameter"]);
      $parameterarr = explode("-", $_GET["parameter"]);
      $offset = $parameterarr[0];
      $limit = $parameterarr[1];
      // $pets = $parameterarr[2];

 
       $output .= "  <thead>
       <tr >
           <th title='Service ID'>Service ID <img src='../assets/image/both_arrow.png'></th>
           <th title='Service Date'>Service date <img src='../assets/image/both_arrow.png'></th>
           <th title='Customer Details'>Cutomer details <img src='../assets/image/both_arrow.png'></th>
           <th title='Distance'>Distance <img src='../assets/image/both_arrow.png'></th>
           <th title='Actions'>Actions</th>
       </tr>
   </thead>";
 
       $result = $this->modal->getnewservicerequest_sp($pincode,$offset,$limit);
       while ($row = mysqli_fetch_assoc($result)) {
 
          $servicerequestid = $row["ServiceRequestId"];
          $serviceid = $row["ServiceId"];
          $datetime = $row["ServiceStartDate"];
          $payment = $row["TotalCost"];
          $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
          $serviceproviderid = $row["ServiceProviderId"];
 
          //Customer details
          $customerid = $row["UserId"];
          //$row1 = $this->modal->getAddress_SP($customerid);
          $row1 = $this->modal->getAddress_SD($servicerequestid);

          $customer_address = $row1["AddressLine1"] . ", " . $row1["AddressLine2"] . " " . $row1["City"] . " " . $row1["PostalCode"];
         echo $customer_address ;
          $row2 = $this->modal->fetchuserdetails($customerid);
 
          $fname = $row2["FirstName"];
          $lname = $row2["LastName"];
          $name = $fname . " " . $lname;
 
          // Date & Time 
          $datetime_arr = explode(" ", $datetime);
          $date = $datetime_arr[0];
          $time = $datetime_arr[1];
          $starttime = date("G:i", strtotime($time));
          $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));
 
          $output .= " <tr  data-bs-toggle='modal'
          data-bs-target='#exampleModalServiceAccept'
          data-bs-dismiss='modal' onclick='Accept_Service($servicerequestid)'>
          <td>$serviceid</td>
          <td>
              <div><img src='../assets/image/calendar.png'><b>$date</b></div>
              <div><img src='../assets/image/clock1.png'>$starttime - $endtime</div>
          </td>
          <td>
              <div>$name</div>
              <div><img src='../assets/image/home.png'>$customer_address</div>
          </td>
          <td>$payment</td>
          <td class='buttonaccept' title='Accept'> <button data-bs-toggle='modal'
                      data-bs-target='#exampleModalServiceAccept'
                      data-bs-dismiss='modal' >Accept</button>
          </td>
      </tr>";
       }
 
       echo $output;
    }
   
    function setAcceptServiceModal()
    {
       $id = $_POST["id"];
 
       $row = $this->modal->getServiceRequests_SP_details($id);
 
       $servicerequestid = $row["ServiceRequestId"];
       $details["serviceid"] = $row["ServiceId"];
       $datetime = $row["ServiceStartDate"];
       $details["payment"] = $row["TotalCost"];
       $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
       $details["totalhr"] = $totalhr;
       $details["comment"] = $row["Comments"];
       $details["HasPets"] = $row["HasPets"];
       //echo $details["HasPets"];
    
       $serviceproviderid = $row["ServiceProviderId"];
 
       //Customer details
       $customerid = $row["UserId"];
       $row1 = $this->modal->getAddress_SD($servicerequestid);
       $details["customer_address"] = $row1["AddressLine1"] . ", " . $row1["AddressLine2"] . " " . $row1["City"] . " " . $row1["PostalCode"];
 
       $row2 = $this->modal->fetchuserdetails($customerid);
 
       $fname = $row2["FirstName"];
       $lname = $row2["LastName"];
       $details["name"] = $fname . " " . $lname;
 
       // Date & Time 
       $datetime_arr = explode(" ", $datetime);
       $details["date"] = $datetime_arr[0];
       $time = $datetime_arr[1];
       $details["starttime"] = date("G:i", strtotime($time));
       $details["endtime"] = date("H:i", strtotime("+$totalhr hour", strtotime($time)));
 
       // Extra Service 
       $servicedetails["ServiceExtraId"] = [];
 
       $result1 = $this->modal->Allextraservicedeatils($servicerequestid);
 
       if (mysqli_num_rows($result1) == 0) {
          array_push($servicedetails["ServiceExtraId"], 0);
       } else {
          while ($row1 = mysqli_fetch_assoc($result1)) {
             array_push($servicedetails["ServiceExtraId"], $row1["ServiceExtraId"]);
          }
       }
 
 
       // Extra Service Name 
       $details["ExtraService"] = [];
       foreach ($servicedetails["ServiceExtraId"] as $value) {
 
          if ($value == 1) {
             array_push($details["ExtraService"], "Inside Cabinet");
          } else if ($value == 2) {
             array_push($details["ExtraService"], "Inside fridge");
          } else if ($value == 3) {
             array_push($details["ExtraService"], "Inside oven");
          } else if ($value == 4) {
             array_push($details["ExtraService"], "Inside fridge");
          } else if ($value == 5) {
             array_push($details["ExtraService"], "Laundry wash & dry");
          } else {
             array_push($details["ExtraService"], 0);
          }
       }
 
 
       echo json_encode($details);
       
    }
  
    
   function TotalEntriesNewServiceRequest()
   {

      $userid = $_SESSION["UserId"];
      $result = $this->modal->getAddress_SP($userid);
      $pincode = $result["PostalCode"];

    

      $no = $this->modal->getnewservicerequestTotalEntries_sp($pincode);

      echo $no;
   }
   function SetServiceProvider()
   {
      $serviceid = $_POST["id"];
      $userid = $_SESSION["UserId"];

      $this->modal->setServiceProviderId($serviceid, $userid);
   }
   
   function loadUpcomingService_SP()
   {
     

      $userid = $_SESSION["UserId"];
      $parameterarr = explode("-", $_GET["parameter"]);
      $offset = $parameterarr[0];
      $limit = $parameterarr[1];
      $output = "<tr>
      <th title='Service ID'>Service ID <img src='../assets/image/both_arrow.png'></th>
      <th title='Service Date'>Service date <img src='../assets/image/both_arrow.png'></th>
      <th title='Customer Details'>Cutomer details <img src='../assets/image/both_arrow.png'th>
      <th title='Distance'>Distance <img src='../assets/image/both_arrow.png'></th>
      <th title='Actions'>Actions</th>
  </tr>";


      $result = $this->modal->getUpcomingService_Sp($userid, $offset, $limit);

      while ($row = mysqli_fetch_assoc($result)) {

         $servicerequestid = $row["ServiceRequestId"];
         $serviceid = $row["ServiceId"];
         $datetime = $row["ServiceStartDate"];
         $payment = $row["TotalCost"];
         $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
         $serviceproviderid = $row["ServiceProviderId"];

         //Customer details
         $customerid = $row["UserId"];
         //$row1 = $this->modal->getAddress_SP($customerid);
         $row1 = $this->modal->getAddress_SD($servicerequestid);

         $customer_address = $row1["AddressLine1"] . ", " . $row1["AddressLine2"] . " " . $row1["City"] . " " . $row1["PostalCode"];

         $row2 = $this->modal->fetchuserdetails($customerid);

         $fname = $row2["FirstName"];
         $lname = $row2["LastName"];
         $name = $fname . " " . $lname;

         // Date & Time 
         $datetime_arr = explode(" ", $datetime);
         $date = $datetime_arr[0];
         $time = $datetime_arr[1];
         $starttime = date("G:i", strtotime($time));
         $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));

         $output .= "
         <tr data-bs-toggle='modal'
         data-bs-target='#exampleModalServiceCancel'
         data-bs-dismiss='modal'  onclick='SetUpcomingServiceModal($servicerequestid)'>
         <td>$serviceid</td>
         <td>
             <div><img src='../assets/image/calendar.png'><b>$date</b></div>
             <div><img src='../assets/image/clock1.png'>$starttime - $endtime</div>
         </td>
         <td>
             <div>$name</div>
             <div><img src='../assets/image/home.png'>$customer_address</div>
         </td>
         <td>$payment €</td>
         <td class='buttoncancel' title='Cancel'><button data-bs-toggle='modal'
                     data-bs-target='#exampleModalServiceCancel'
                     data-bs-dismiss='modal'>Cancel</button>
         </td>
     </tr>";
      }

      echo $output;
   }

   function IsServiceProviderAssigned()
   {
    
     $serviceid = $_POST["id"];

     $row =  $this->modal->getUpcomingServiceDetails($serviceid);
     $ServiceDateStart = $row["ServiceStartDate"];
     $zipcode = $row["ZipCode"];
     $userid = $_SESSION["UserId"];
     $currentdatetotalhrs = $row["ServiceHours"] + $row["ExtraHours"];
      $ServiceDateEnd = date("Y-m-d H:i:s", strtotime("+$currentdatetotalhrs hours", strtotime($ServiceDateStart)));

      $result = $this->modal->AcceptServiceValidation($zipcode, $userid);

      $onecount = 0;
      $zerocount = 0;
      if (mysqli_num_rows($result) > 0) {
         while ($row1 = mysqli_fetch_assoc($result)) {
            // echo $row1["ServiceStartDate"] . "    ";
            $ServiceStartComp = $row1["ServiceStartDate"];
            $totalhrs = $row1["ServiceHours"] + $row1["ExtraHours"];
            $ServiceEndComp = date("Y-m-d H:i:s", strtotime("+$totalhrs hours", strtotime($ServiceStartComp)));
if (($ServiceDateStart < $ServiceStartComp && $ServiceDateEnd < $ServiceStartComp) || $ServiceDateStart > $ServiceEndComp) {
               if (isset($row["ServiceProviderId"])) {
                  $onecount++;
               } else {
                  $zerocount++;
               }
            } else {
               $onecount++;
            }
         }
      } else {
         $zerocount++;
      }
      if ($onecount > 0) {
         echo "1";
      } else {
         echo "0";
      }

   }
   function GetUpcomingServiceDetails()
   {
      $servicerequestId = $_POST["id"];

      $row = $this->modal->getUpcomingServiceDetails($servicerequestId);

     
       $servicerequestid = $row["ServiceRequestId"];
       $details["serviceid"] = $row["ServiceId"];
       $datetime = $row["ServiceStartDate"];
       $details["payment"] = $row["TotalCost"];
       $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
       $details["totalhr"] = $totalhr;
       $details["comment"] = $row["Comments"];
       $details["HasPets"] = $row["HasPets"];
       //echo $details["HasPets"];
       $details['ServiceRequestId']=$servicerequestid;

    
       $serviceproviderid = $row["ServiceProviderId"];
 
       //Customer details
       $customerid = $row["UserId"];
       $row1 = $this->modal->getAddress_SD($servicerequestid);
       $details["customer_address"] = $row1["AddressLine1"] . ", " . $row1["AddressLine2"] . " " . $row1["City"] . " " . $row1["PostalCode"];
 
       $row2 = $this->modal->fetchuserdetails($customerid);
 
       $fname = $row2["FirstName"];
       $lname = $row2["LastName"];
       $details["name"] = $fname . " " . $lname;
 
       // Date & Time 
       $datetime_arr = explode(" ", $datetime);
       $details["date"] = $datetime_arr[0];
       $time = $datetime_arr[1];
       $details["starttime"] = date("G:i", strtotime($time));
       $details["endtime"] = date("H:i", strtotime("+$totalhr hour", strtotime($time)));
 
       $todayDate = date("Y/m/d G:i:s");
       $datetime = date("Y/m/d h:i:s",strtotime($datetime));
 
       
       $endtime_us = date("H:i:s", strtotime($details["endtime"]));
       $datetime_end =  date("Y/m/d G:i:s",strtotime($details["date"]." ".$endtime_us));
 
       $details["endtime_check"] = $datetime_end;
       $details["todayDate"] = $todayDate;
 
       // echo $todayDate;
       // $details["datetime"] = $datetime;
       // $details["todayDate"] = $todayDate;
 
       if($todayDate > $datetime_end){
          $details["Complete"] = 1;
       }else{
          $details["Complete"] = 0;
       }


      // Extra Service 
      $servicedetails["ServiceExtraId"] = [];

      $result1 = $this->modal->Allextraservicedeatils($servicerequestid);

      if (mysqli_num_rows($result1) == 0) {
         array_push($servicedetails["ServiceExtraId"], 0);
      } else {
         while ($row1 = mysqli_fetch_assoc($result1)) {
            array_push($servicedetails["ServiceExtraId"], $row1["ServiceExtraId"]);
         }
      }


      // Extra Service Name 
      $details["ExtraService"] = [];
      foreach ($servicedetails["ServiceExtraId"] as $value) {

         if ($value == 1) {
            array_push($details["ExtraService"], "Inside Cabinet");
         } else if ($value == 2) {
            array_push($details["ExtraService"], "Inside fridge");
         } else if ($value == 3) {
            array_push($details["ExtraService"], "Inside oven");
         } else if ($value == 4) {
            array_push($details["ExtraService"], "Inside fridge");
         } else if ($value == 5) {
            array_push($details["ExtraService"], "Laundry wash & dry");
         } else {
            array_push($details["ExtraService"], 0);
         }
      }

      echo json_encode($details);
   }




   function cancelServiceRequest(){
      $serviceRequestId = $_POST["id"];
      
      $this->modal->cancelServiceRequest_SP($serviceRequestId);
   }
   function completeServiceRequest(){
      $serviceRequestId = $_POST["id"];

      $this->modal->completeServiceRequest_SP($serviceRequestId);
      $userid = $_SESSION["UserId"];
      $row = $this->modal->getUpcomingServiceDetails($serviceRequestId);

      $customerId = $row["UserId"];
      $this->modal->insertFavoriteBlock($userid,$customerId);
         echo $customerId,$userid ;
   }
   function TotalEntriesUpcomingService()
   {
      $userid = $_SESSION["UserId"];

      $no = $this->modal->gettotalentries_us($userid);
      echo $no;
   }














   function loadServiceHistory_SP(){
      $userid = $_SESSION["UserId"];
      $parameterarr = explode("-", $_GET["parameter"]);
      $offset = $parameterarr[0];
      $limit = $parameterarr[1];

      $output = "<tr>
      <th title='Service Id'>Service ID <img src='../assets/image/both_arrow.png'></th>
      <th title='Service Date'>Service date <img src='../assets/image/both_arrow.png'></th>
      <th title='Customer Details'>Cutomer details <img src='../assets/image/both_arrow.png'></th>
      
      </tr>";

      $result = $this->modal->getServiceHistory_SP($userid, $offset, $limit);

      while($row = mysqli_fetch_assoc($result)){

         $servicerequestid = $row["ServiceRequestId"];
         $serviceid = $row["ServiceId"];
         $datetime = $row["ServiceStartDate"];
         $payment = $row["TotalCost"];
         $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
         $serviceproviderid = $row["ServiceProviderId"];

         //Customer details
         $customerid = $row["UserId"];
        // $row1 = $this->modal->getAddress_SP($customerid);
        $row1 = $this->modal->getAddress_SD($servicerequestid);

         $customer_address = $row1["AddressLine1"] . ", " . $row1["AddressLine2"] . " " . $row1["City"] . " " . $row1["PostalCode"];

         $row2 = $this->modal->fetchuserdetails($customerid);

         $fname = $row2["FirstName"];
         $lname = $row2["LastName"];
         $name = $fname . " " . $lname;

         // Date & Time 
         $datetime_arr = explode(" ", $datetime);
         $date = $datetime_arr[0];
         $time = $datetime_arr[1];
         $starttime = date("G:i", strtotime($time));
         $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));

         $output .= "
         
         <tr  data-bs-toggle='modal'
         data-bs-target='#exampleModalServiceHistory'
         data-bs-dismiss='modal' onclick='SetServiceHistoryModal_SP($servicerequestid)'>
                                <td>$serviceid</td>
                                <td>
                                    <div><img src='../assets/image/calendar.png'><b>$date</b></div>
                                    <div><img src='../assets/image/clock1.png'>$starttime - $endtime</div>
                                </td>
                                <td>
                                    <div>$name</div>
                                    <div><img src='../assets/image/home.png'>$customer_address</div>
                                </td>
                               
                            </tr>";

      }

      echo $output;
   }
   function TotalEntriesServiceHistory_Sp()
   {
      $userid = $_SESSION["UserId"];

      $no = $this->modal->gettotalentriesServiceHistory_Sp($userid);
      echo $no;
   }
   function updatedetails_sp()
   {
      $provider["fname"] = $_POST["FirstName"];
      $provider["lname"] = $_POST["LastName"];
      $provider["email"] = $_POST["Email"];
      $provider["phoneno"] = $_POST["PhoneNo"];
      $provider["birthdate"] = $_POST["date"];
      $provider["nationality"] = $_POST["Nationality"];
      $provider["gender"] = $_POST["Gender"];
      $provider["avatar_name"] = $_POST["logo_name"];
      $provider["streetname"] = $_POST["streetName"];
      $provider["houseno"] = $_POST["houseNo"];
      $provider["postalcode"] = $_POST["postalcode"];
      $provider["city"] = $_POST["city"];
      $provider["userid"] = $_SESSION["UserId"];

      $this->modal->updateServiceProviderDetails($provider);

      $result = $this->modal->IsInsertedAddress_SP($provider);

      if ($result > 0) {
         //Update Address
         $this->modal->updateAddress_sp($provider);
      } else {
         //Insert Address
         $this->modal->insertuseraddress($provider);
      }

      print_r($provider);
   }

   function setAdress_sp()
   {
      $provider["userid"] = $_SESSION["UserId"];

      $result = $this->modal->IsInsertedAddress_SP($provider);

      if ($result > 0) {
         $result1 = $this->modal->getAddress_SP($provider["userid"]);
         echo json_encode($result1);
      }
   }
   function GetBlockedCustomerlist(){
      $userid = $_SESSION["UserId"];

      $result = $this->modal->getServiceHistoryExport($userid);
      $userarr = [];
      while($row = mysqli_fetch_assoc($result)){

         if(!in_array($row["UserId"],$userarr)){
            array_push($userarr,$row["UserId"]);
         }

      }
      // print_r($userarr);

      // $parameterarr = explode("-", $_GET["parameter"]);
      // $offset = $parameterarr[0];
      // $limit = $parameterarr[1];

     //  $user_arr_range = array_slice($userarr);

      $output = "";
      foreach($userarr as $customerId){
         $row = $this->modal->FavouriteBlockedCustomerDetails($customerId,$userid);
         $IsFavorite = $row["IsFavorite"];
         $customerName = $row["FirstName"]." ".$row["LastName"];
         $id = $row["Id"];
         $favblock = $row["IsFavorite"];

         $output .= "
         <div class='row' >
             <div class='col-sm-4'>
               <div class='card'>
                 <div class='card-body text-center'>
                  <div class='td-rating' style='justify-content: center;'>
                   <div class='rating-img'><img src='../assets/image/image_table.png'></div></div>

                   <h5 class='card-title'>$customerName</h5>";

         if($IsFavorite == 1){
            $output .=     "<button class='buttonblock favblock' id='$id-$favblock' >
            Block</button>
                  </div></div></div></div>";
         }else{
            $output .=     "<button class='buttonblock favblock' id='$id-$favblock'  >UnBlock</button>
                  </div></div></div></div>";
         }

         
      }
      echo $output;
   }

 

   function SetFavBlockedCustomerlist(){
      $id = $_POST["favouriteId"];

      $id_arr = explode("-",$id);
      $favblockid = (int)$id_arr[0];
      $isfavorite = (int)$id_arr[1];

      if($isfavorite == 1){
         $this->modal->blockcustomer($favblockid);
      }else{
         $this->modal->favcustomer($favblockid);
      }
   }

   function Ratinglist_Sp()
   {
      $userid = $_SESSION["UserId"];
      $orderby ="FirstName Asc";
      $rating_select_val = 6;
      if ($rating_select_val == 6) {
         $startRatingValue = 1;
         $endRatingValue = 6;
      } else {
         $startRatingValue = $rating_select_val;
         $endRatingValue = $startRatingValue + 1;
      }

      // $offset = (int) $_POST["offset_val"];
      // $limit = (int)$_POST["limit_val"];

      $result = $this->modal->getRatinglist_Sp($userid, $orderby, $startRatingValue, $endRatingValue);

      $output = "";

      while ($row = mysqli_fetch_assoc($result)) {
         $rating_comment = $row["Comments"];
         $rating_value = $row["Ratings"];
         $CustomerId = $row["RatingFrom"];
         $servicerequestid = $row["ServiceRequestId"];

         // $servicedetails =  $this->model->getUpcomingServiceDetails($servicerequestid);

         $serviceid = $row["ServiceId"];
         $datetime = $row["ServiceStartDate"];
         $totalhr = $row["ServiceHours"] + $row["ExtraHours"];

         // Date & Time 
         $datetime_arr = explode(" ", $datetime);
         $date = $datetime_arr[0];
         $time = $datetime_arr[1];
         $starttime = date("G:i", strtotime($time));
         $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));


         // $userdetails = $this->model->getuserdetails($CustomerId);

         $fname = $row["FirstName"];
         $lname = $row["LastName"];
         $name = $fname . " " . $lname;

         $output .= "<div class='rating_box'>
         
         <div class='card-body' >
         <div class='row' style='border:2px grey solid;box-shadow: 3px 5px #888888;'>
             <div class='col-sm-3'>
                 <h5 class='card-title'>$serviceid</h5>
                 <h6 class='card-subtitle mb-2 text-muted'>$name</h6>
                           </div>
                           <div class='col-sm-6'>
                           <div><img src='../assets/image/calendar.png'><b>$date</b></div>
                              <div><img src='../assets/image/clock1.png'><b> $starttime - $endtime</b></div>
                           </div>
                           <div class='col-sm-3 rating_star'>
                           <span><b>Ratings</b></span><br>

                              <span class=' rating_value_Sp td-rating' id='$servicerequestid-ratingValueSp'>$rating_value</span>";

         if ($rating_value > 3) {
            $output .=           "<span>very good</span>";
         } else {
            $output .=           "<span>Not good</span>";
         }


         $output .= "         <span class='starrating_Sp' id='$servicerequestid-ratingSp'></span>
                           </div>
                        <div class='comments'>
                           <p class='comment_heading'><b>Customer Comments:</b>$rating_comment</p>
                                                </div>
                  </div>   </div>
                  </div>
                </div>";
      }
      echo $output;
   }

   function TotalRatinglist_Sp(){
      $userid = $_SESSION["UserId"];
      $orderby = $_POST["orderby"];
      $rating_select_val = (int) $_POST["rating"];

      if ($rating_select_val == 6) {
         $startRatingValue = 1;
         $endRatingValue = 6;
      } else {
         $startRatingValue = $rating_select_val;
         $endRatingValue = $startRatingValue + 1;

      }
      $total_no = $this->modal->totalRatinglist_Sp($userid, $orderby, $startRatingValue, $endRatingValue);

      echo $total_no;
   }
   function sendEmailtoProvider()
   {
      // Email Service Pool 
      $serviceprovideremail =  $this->modal->fetchserviceprovideremail(380007);
      print_r($serviceprovideremail);
      
      
      //  Send Email  
      // include "view/include/sendemail.php";
      foreach ($serviceprovideremail as $emailtext) {
         $email = $emailtext;
         $subject = 'One Service Request Arrived in your area';
         $message = 'Please login in helperland and check the service request';
        
         doMail($email, $subject, $message);
         echo "success";

      }

      unset($_SESSION["postalcode"]);
   }
   function loadServiceRequestAdmin()
   {
      $condition = $_POST["condition"];
      

     

      $output = " <table class='table services'>
      <tr>
      <th scope='col' >Service ID <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Service Date  <img src='../assets/image/both_arrow.png'></th>
      <th scope='col' style='width:400px';>Customer details <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Service Provider <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Payment <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Status<img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Action </th>

  </tr>";

      $result = $this->modal->fetchAllServiceRequestDetails($condition);

      $userlist = [];
      $helperslist = [];

      while ($row = mysqli_fetch_assoc($result)) {

         $servicerequestid = $row["ServiceRequestId"];
         $serviceid = $row["ServiceId"];
         $datetime = $row["ServiceStartDate"];
         $payment = $row["TotalCost"];
         $totalhr = $row["ServiceHours"] + $row["ExtraHours"];
         $serviceproviderid = $row["ServiceProviderId"];
         $status = $row["Status"];

         //Customer details
         $customerid = $row["UserId"];
         // $row1 = $this->model->getAddress_SP($customerid);
         $row1 = $this->modal->getAddress_SD($servicerequestid);
         $customer_address = $row1["AddressLine2"] . ", " . $row1["AddressLine1"] . ", " . $row1["City"] . ", " . $row1["PostalCode"];
         
         $row2 = $this->modal->fetchuserdetails($customerid);

         $fname = $row2["FirstName"];
         $lname = $row2["LastName"];
         $name = $fname . " " . $lname;

         array_push($userlist, $name);

         //Service Provider Details


         // Date & Time 
         $datetime_arr = explode(" ", $datetime);
         $date = $datetime_arr[0];
         $time = $datetime_arr[1];
         $starttime = date("G:i", strtotime($time));
         $endtime = date("H:i", strtotime("+$totalhr hour", strtotime($time)));


         $output .= " 
         <tr>
             <td>
                 <div class='td-name'><b>$serviceid</b></div>
             </td>
             <td>
                 <div class='td-date'><img src='../assets/image/calendar.png'
                        <b>$date</b></div>
                 <div class='td-time'><img src='../assets/image/clock1.png'>$starttime - $endtime</div>
             </td>
             <td>
                 <div class='td-name' ><b>$name</b></div>
                 <div class='td-address'><img src='../assets/image/home.png'>$customer_address</div>
             </td>";

         if (isset($serviceproviderid)) {

            $row3 = $this->modal->fetchuserdetails($serviceproviderid);
            $fnameSP = $row3["FirstName"];
            $lnameSP = $row3["LastName"];
            $nameSP = $fnameSP . " " . $lnameSP;
            $avatar = $row3["UserProfilePicture"];

            array_push($helperslist, $nameSP);
   
      $output .=  "<td>
     
      <div class='rating-user'style='width:70px;height:70px ;margin-left:30px;'>
         <img src='../assets/image/$avatar' style='width:50px;height:50px;'></div>
         <div class='info'>
         <div class='name'><b>$nameSP</b></div>";

$result_rating = $this->modal->getAverageRating($servicerequestid);

if (isset($result_rating)) {

$rating = mysqli_fetch_assoc($result_rating);
$rating_value = $rating["Ratings"];

$output .=                  "<div class='td-rating $rating_value'></div>
          <p class='text-center'>$rating_value</p> 
      </div>
   </td>";
} else {
$output .=  "</div>
   </td>";
}
} else {
$output .= "<td></td>";
}




         $output .=  "<td>
                           <p class='net_amount'>$payment €</p>
                        </td>
                        ";


         if ($status == 1) {
            $output .=   "<td class='btn-status completed'><button>Completed</button></td>";
         } elseif ($status == 0) {
            $output .=   "<td class='btn-status new'><button>New</button></td>";
         } else {
            $output .=   "<td class='btn-status cancelled'><button>Cancelled</button></td>
            ";
         }


         $output .=  " <td class='btn-raction'>
         <div class='dropdown'>
             <button class='btn btn-secondary dropdown-toggle' type='button'
                 id='dropdownMenu2' data-bs-toggle='dropdown' aria-expanded='false'>
                 <img src='../assets/image/menudot.png'>
             </button>
             <ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>";

if ($status == 0) {
   $output .=
            " 
                 <li><button class='dropdown-item' type='button' data-bs-toggle='modal'
                     data-bs-target='#exampleModaledit' data-bs-dismiss='modal' onclick='ServiceDetails($servicerequestid)' >Edit &
                         Reschedule</button></li>";
}
$output .=  

                "    <li><button class='dropdown-item' type='button' data-bs-toggle='modal'
                data-bs-target='#exampleModalrefund' data-bs-dismiss='modal'  onclick='RefundDetails($servicerequestid)'  >Refund</button></li>
                 <li><button class='dropdown-item' type='button'>Cancel</button>
                 <li><button class='dropdown-item' type='button'>Change SP</button>
                 <li><button class='dropdown-item' type='button'>Escalate</button>
                 <li><button class='dropdown-item' type='button'>History Log</button>
                 <li><button class='dropdown-item' type='button'>Download
                         Invoice</button>
                 </li>
             </ul>
         </div>
     </td>
                  </tr>";
      }

      echo $output;

      $userlist_unique = array_unique($userlist);
      $helperslist_unique = array_unique($helperslist);
   }

   function loadCustomerOptionAdmin()
   {
      $output = "<option value='user_name'  disabled selected>Select Customer</option>";
      $condition = 'S.Status >= 0';

      $result = $this->modal->fetchAllServiceRequestDetails($condition);

      $userlist = [];

      while ($row = mysqli_fetch_assoc($result)) {

         $customerid = $row["UserId"];
         $row2 = $this->modal->fetchuserdetails($customerid);

         $fname = $row2["FirstName"];
         $lname = $row2["LastName"];
         $name = $fname . " " . $lname;

         // array_push($userlist, $name);
         $userlist[$customerid] = $name;
      }

      $userlist_unique = array_unique($userlist);

      foreach($userlist_unique as $key => $value){
         $output .= "<option value='$key'>$value</option>";
      }

      echo $output;
   }

   function loadHelpersOptionAdmin(){
      $output = "<option value='user_type' disabled selected>Select Service Provider</option>";
      $condition = 'S.Status >= 0';

      $result = $this->modal->fetchAllServiceRequestDetails($condition);

      $helperslist = [];

      while ($row = mysqli_fetch_assoc($result)) {

         $serviceproviderid = $row["ServiceProviderId"];

         if (isset($serviceproviderid)) {

            $row3 = $this->modal->fetchuserdetails($serviceproviderid);
            $fnameSP = $row3["FirstName"];
            $lnameSP = $row3["LastName"];
            $nameSP = $fnameSP . " " . $lnameSP;

            // array_push($helperslist, $nameSP);
            $helperslist[$serviceproviderid] = $nameSP;
         }
      }

      $helperslist_unique = array_unique($helperslist);

      foreach($helperslist_unique as $key => $value){
         $output .= "<option value='$key'>$value</option>";
      }

      echo $output;

   }
   function loadEditServiceModalAdmin()
   {
      $serviceRequestId = $_POST["servicerequestid"];
      $row = $this->modal->getUpcomingServiceDetails($serviceRequestId);

      $datetime = $row["ServiceStartDate"];

      $datetime_arr = explode(" ", $datetime);
      $editmodal["date"] = $datetime_arr[0];
      $time = $datetime_arr[1];
      $editmodal["starttime"] = date("G:i", strtotime($time));

      $row1 = $this->modal->getAddress_SD($serviceRequestId);
      $editmodal["Address1"] = $row1["AddressLine1"];
      $editmodal["Address2"] = $row1["AddressLine2"];
      $editmodal["City"] = $row1["City"];
      $editmodal["zipcode"] = $row1["PostalCode"];
      $editmodal["id"] = $serviceRequestId;

      echo json_encode($editmodal);
   }
   function updateServiceAddress_Modal()
   {
      echo "x";
      $address["streetName"] = $_POST["streetName"];
      $address["houseNo"] = $_POST["houseNo"];
      $address["zipcode"] = $_POST["Zipcode"];
      $address["city"] = $_POST["City"];
      $address["id"] = $_POST["serviceid"];
     

      $this->modal->updateServiceAddress($address);
   }
   function setdatetimeservice()
   {
      $date = date("Y/m/d", strtotime($_POST["date"]));;
      $time = $_POST["time"];
      $id = $_POST["serviceid"];
      echo
      $datetime =  date("Y/m/d G:i:s", strtotime($date . " " . $time . ":00"));

      echo $datetime;
      $this->modal->updatedatetimeservice($id, $datetime);

      $result = $this->modal->getEmailOfServiceProvider($id);
      $row = mysqli_fetch_assoc($result);
      $userid = $row["ServiceProviderId"];
      if ($userid != NULL) {
         $row = $this->modal->fetchuserdetails($userid);
         $email = $row["email"];
         echo $row["email"];
         $subject = 'Service Date Change';
         $message = "Service Request " . $id . " has been rescheduled by customer. New date and time are {" . $date . "," . $time . "}";
         doMail($email, $subject, $message);
      }


   }
   function SendMailbyAdminEdit()
   {
      $servicerequestId = $_POST["servicerequestid"];
      $reason = $_POST["body"];
      $row = $this->modal->getServiceRequests_SP_details($servicerequestId);

      $userid = $row["UserId"];
      $serviceproviderId = $row["ServiceProviderId"];

      if (isset($userid)) {
         $row2 = $this->modal->fetchuserdetails($userid);
         doMail($row2["email"], "Service Changed by Admin", $reason . "<br> <br> Please login again and check the new date, time and Address");
         echo $row2["email"];
      }

      if (isset($serviceproviderId)) {
         $row2 = $this->modal->fetchuserdetails($serviceproviderId);
         doMail($row2["email"], "Service Changed by Admin", $reason . "<br> <br> Please login again and check the new date, time and Address");
         echo $row2["email"];
      }
   }
   function isserviceavailable()
   {
      $date = date("Y/m/d", strtotime($_POST["date"]));;
      $time = $_POST["time"];
      $id = $_POST["serviceid"];

      $datetime = $date . " " . $time . ":00";

      $result = $this->modal->checkserviceavailable($datetime);
      $no = mysqli_num_rows($result);
      echo $no;
   }
   
   function loadUserManagAdmin()
   {
      $condition = $_POST["reason"];
      $parameterarr = explode("-", $_GET["parameter"]);
      $offset = $parameterarr[0];
      $limit = $parameterarr[1];

      $output = " <tr>
      <th scope='col'>User Name <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Date of Registration <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>User Type <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Phone  <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Postal Code <img src='../assets/image/both_arrow.png'></th>
      <th scope='col'>Status <img src='../assets/image/both_arrow.png'></th>

    
      <th scope='col'>Action</th>
  </tr>";

      $result = $this->modal->getAllUserDetails($condition,$offset,$limit);

      while ($row = mysqli_fetch_assoc($result)) {

         $name = $row["FirstName"] . " " . $row["LastName"];
         $phoneno = $row["Mobile"];
         $zipcode = $row["ZipCode"];
         $usertype = $row["UserTypeId"];
         $isActive = $row["IsActive"];
         $userid = $row["UserId"];

         //Date 
         $datetime = $row["CreatedDate"];
         $datetimearr = explode(" ",$datetime);
         $date = $datetimearr[0];

         $output .= "<tr >
                        <td> <div class='td-name'>$name</div></td>
                        <td >
                        <div class='td-name'>
                              <img src='../assets/image/calendar.png'>
                              <span>$date</span>
                           </div>
                        </td>";

         if ($usertype == 1) {
            $output .=     "<td>Customer</td>";
         } else {
            $output .=     "<td>Service Provider</td>";
         }



         $output .= "   <td><div class='td-name'>$phoneno</div></td>
                        <td><div class='td-name'>$zipcode</div></td>
                        <td>";

         if ($isActive == 1) {
            $output .=       "
            <td class='btn-status completed'><button>Active</button></td>
                           </div>";
         } else {
            $output .=       "  <td class='btn-status completed'><button>InActive</button></td>
            </div>";
         }



         $output .=       "</td>
         <td class='btn-raction'>
         <div class='dropdown'>
             <button class='btn btn-secondary dropdown-toggle' type='button'
                 id='dropdownMenu' data-bs-toggle='dropdown' aria-expanded='false'>
                 <img src='../assets/image/menudot.png'>
             </button>
             <ul class='dropdown-menu' aria-labelledby='dropdownMenu'>";

         if ($isActive == 1) {
            $output .=              "<a class='dropdown-item' id='$userid/0/changestatus' onclick='UserActiveStatus(id)'>Deactive</a>";
         } else {
            $output .=              "<a class='dropdown-item' id='$userid/1/changestatus' onclick='UserActiveStatus(id)'>Active</a>";
         }



         $output .=                 "<a class='dropdown-item'>Service History</a>
                              </div>
                           </div>
                        </td>
                  </tr>";
      }

      echo $output;
   }
   function ChangeActiveStatus()
   {
      $userid = $_POST["Userid"];
      $activestatus = $_POST["ActiveStatus"];

      $this->modal->UpdateActiveStatus($userid, $activestatus);
   }

   function fetchCustomerNameList(){
      $result = $this->modal->getAllUserDetails_UM('UserTypeId < 3');

      $output = "<option value='user_name' disabled selected>Select User Name</option>";
      while($row = mysqli_fetch_assoc($result)){
         $userid = $row["UserId"];
         $name = $row["FirstName"]." ".$row["LastName"];

         $output .= "<option value=$userid>$name</option>";
      }

      echo $output;
   }

   function fetchtotalRecord_UM(){

      $condition = $_POST["reason"];
      $result = $this->modal->getAllUserDetails_UM($condition);

      echo mysqli_num_rows($result);
   }
   function loadExportUserManagAdmin()
   {
      $condition = $_POST["reason"];

      $output = "<tr class='table_heading'>
                     <th>UserName</th>
                     <th>Date of Registration</th>
                     <th>User Type</th>
                     <th>Phone</th>
                     <th>Postal Code</th>
                     <th>Status</th>
               </tr>";

      $result = $this->modal->getAllUserDetails_UM($condition);

      while ($row = mysqli_fetch_assoc($result)) {

         $name = $row["FirstName"] . " " . $row["LastName"];
         $phoneno = $row["Mobile"];
         $zipcode = $row["ZipCode"];
         $usertype = $row["UserTypeId"];
         $isActive = $row["IsActive"];
         $userid = $row["UserId"];

         //Date 
         $datetime = $row["CreatedDate"];
         $datetimearr = explode(" ",$datetime);
         $date = $datetimearr[0];

         $output .= "<tr class='table_row'>
                        <td>$name</td>
                        <td>$date</td>";

         if ($usertype == 1) {
            $output .=     "<td>Customer</td>";
         } else {
            $output .=     "<td>Service Provider</td>";
         }



         $output .= "   <td>$phoneno</td>
                        <td>$zipcode</td>";

         if ($isActive == 1) {
            $output .=       "<td>Active</td>";
         } else {
            $output .=       "<td>Inactive</td>";
         }


         $output .= "</tr>";
      }

      echo $output;
   }
   function fetchrefundmodaldetails(){
      $id = $_POST["serviceRequestId"];

      $row = $this->modal->getServiceRequests_SP_details($id);

      $refunddetails["totalcost"] = $row["TotalCost"];
      $refunddetails["refundAmount"] = $row["RefundedAmount"];

      echo json_encode($refunddetails);
   
   }

   function updaterefundvalue(){
      $id = $_POST["serviceRequestId"];
      $refundedAmount = $_POST["refunded_amount"];

      $this->modal->updateRefundedValue($id,$refundedAmount);
   }














   function GetBlockedCustomerlist_C()
   {
     
      $userid = $_SESSION["UserId"];
      
      

      $result = $this->modal->getFavBlockCustomerList($userid);
      $output = "";
    
      while ($row = mysqli_fetch_assoc($result)) {
         
         $serviceproviderid = $row["TargetUserId"];
       
         $row1 = $this->modal->fetchuserdetails($serviceproviderid);

         $name = $row1["FirstName"] . " " . $row1["LastName"];
         
         $logo = $row1["UserProfilePicture"];
         $favblockId = $row["Id"];

         $totalcleaning = $this->modal->totalcleaningbyProvider($userid, $serviceproviderid);
         $result2 = $this->modal->averageratingSp($userid, $serviceproviderid);

         $count = 0;
         $sum = 0;
         while ($row2 = mysqli_fetch_assoc($result2)) {
            $sum += $row2["Ratings"];
            $count++;
         }
         $avgrating1=$sum / $count ;
         $avgrating =number_format($avgrating1, 3);
      
 
         $output .= "   <div class='row' >
         <div class='col-sm-5 '>  <div class='card'>
         <div class='card-body text-center'>
          <div class='td-rating' style='justify-content: center;'>
           <div class='rating-img'><img src='../assets/image/$logo' style='height:50px;'></div></div>
                       
                        <h5 class='card-title'>$name</h5>

                        <div style='width: 100%; display: flex; justify-content: center;'>
                           
                           <div class='rating_customer $avgrating-set_avg_rating'></div>
                           <span class='ml-2 set_avg_rating'>$avgrating</span>
                        </div>


                        <p class='text-center'>$totalcleaning Cleanings</p>
                        <div style='width: 100%; display: flex; justify-content: center;'>";

         if ($row["IsFavorite"] == 1) {
            $output .= "<button class='buttonaccept' id='$favblockId-spfav' onclick='favouriteSp(id)'>Remove</button>";
         } else {
            $output .= "<button class='buttonaccept'  id='$favblockId-spfav' onclick='favouriteSp(id)'>Favorite</button>";
         }

         if ($row["IsBlocked"] == 1) {
            $output .=  "<button class='buttonblock ml-2' style='margin: 0;' id='$favblockId-spblock' 
            onclick='BlockedSp(id)'>UnBlock</button>
                     ";
         } else {
            $output .=  "<button class='buttonblock ml-2' style='margin: 0;' id='$favblockId-spblock'
             onclick='BlockedSp(id)'>Block</button>
                     ";
         }
      }

      echo $output;
   }


   function favouriteblocked_C()
   {
      $favblockId = $_POST["favouriteId"];
      $row = $this->modal->setOrRemoveFav($favblockId);
      if ($row["IsFavorite"] == 1) {
         $this->modal->setUnfavourite($favblockId);
      } else {
         $this->modal->setfavourite($favblockId);
      }
   }

   function favouriteblocked_C2()
   {
      $favblockId = $_POST["favouriteId"];

      $row = $this->modal->setOrRemoveFav($favblockId);
      if ($row["IsBlocked"] == 1) {
         $this->modal->favcustomer($favblockId);
      } else {
         $this->modal->blockcustomer($favblockId);
      }
   }

   function loadsevent()
   {
      $userid = $_SESSION["UserId"];

      $result = $this->modal->getallevents($userid);

      $data = array();

      while ($row = mysqli_fetch_assoc($result)) {

         $Servicedate = $row["ServiceStartDate"];
         $Servicedatearr = explode(" ",$Servicedate);

         $timearr = explode(".",$Servicedatearr[1]);


         $data[] = array(
            'id'   => $row["UserId"],
            'title'   => 'Service time:- '.$timearr[0],
            'start'   => $Servicedatearr[0],
         );
      }

      echo json_encode($data);
   }

}
?>
