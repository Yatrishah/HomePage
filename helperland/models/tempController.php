<?php
    use PHPMailer\PHPMailer\PHPMailer;
session_start();
  
class tempController
{
    function __construct()
    {
        include('./models/models.php');
        $this->modal=new Models();
       // session_start() ;
        include("./models/doMail.php");


    }
function postalcodevalidation()
  {
     $postalcode = $_POST["code"];
     $iscorrect = $this->modal->ispostalcode($postalcode);
     if (!$iscorrect) {
        echo 1;
     } else {
        $_SESSION["postalcode"] = $postalcode;
     }
  }  

  function loadaddress()
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
        $useraddress .= "<div class='radio_address mb-2'>
                          <div class='row'>
                          <div class='col-1' style='margin: auto;width: 100%;'>
                             <input type='radio' id='$addressid-addressid' name='address' value='address1' style='margin: 0 auto;'>
                          </div>
                          <div class='col-11'>
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

function schedule_plan()
{
   $servicerequest["date"] = date("Y/m/d",strtotime($_POST["date_sr"]));
   $servicerequest["time"] = $_POST["time_sr"];
   $servicerequest["zipcode"] = $_SESSION["postalcode"];
   $servicerequest["UserId"] = $_SESSION["UserId"];
   $duration_sr = $_POST["duration_sr"];
   //echo $duration_sr; 
   $duration_arr = explode(" ", $duration_sr);
   $servicerequest["duration"] = (int)$duration_arr[0];
   $charge_per_hr= 100;
   $extra_service_hr = 0.5;
   $extra_service_cost = 50;
   $discount=27;
   $servicerequest["serviceid"] = rand(0,10000); 
   $servicerequest["extraservice"] = $_POST["extraservice"];


   echo $servicerequest["date"].'<br/>' ;
   echo $servicerequest["time"].'<br/>';
   echo  $servicerequest["zipcode"].'<br/>';
   echo $servicerequest["zipcode"].'<br/>';
   echo  $servicerequest["duration"].'<br/>';
   echo  $servicerequest["totalpayment"].'<br/>';
   echo $servicerequest["subtotal"].'<br/>';
   echo  $servicerequest["totaltime"].'<br/>';
   echo   $servicerequest["extraservice"].'<br/>';


   if(isset($_POST["comments"])){
    $servicerequest["comments"] = $_POST["comments"];
    //echo  $servicerequest["comments"] ;
 }else{
    $servicerequest["comments"] = null;
 }

   if (isset($_POST["pets"])) {
      $servicerequest["pets"] = 1;
   } else {
      $servicerequest["pets"] = 0;
   }


   if ($servicerequest["extraservice"][0] != 0) {
     echo "1";
    $servicerequest["extraservice"] = $_POST["extraservice"];
    $servicerequest["totalpayment"] = $charge_per_hr * $servicerequest["duration"] +
     count($servicerequest["extraservice"]) * $extra_service_cost-$discount;
     $servicerequest["subtotal"] = $charge_per_hr * $servicerequest["duration"] +
     count($servicerequest["extraservice"]) * $extra_service_cost;
    $servicerequest["totaltime"] = $servicerequest["duration"];
    $servicerequest["totalextrahr"] = count($servicerequest["extraservice"]) * $extra_service_hr;
    $servicerequest["extra_service_hr"]= count($servicerequest["extraservice"]) * $extra_service_hr;
    $servicerequest["charge_per_hr"] = $charge_per_hr;
    $servicerequest["discount"] =$discount;

    $this->modal->insertservicerequest($servicerequest);
    $servicerequest["servicerequestid"] = $this->modal->fetchservicerequestid($servicerequest["serviceid"]); 
    $_SESSION["servicerequestid"] = $servicerequest["servicerequestid"];

    $this->modal->insertextraservice($servicerequest);
 } else {
   echo "2";
    $servicerequest["totalpayment"] = $servicerequest["charge_per_hr"]* $servicerequest["duration"];
    $servicerequest["totaltime"] = $servicerequest["duration"];
    $servicerequest["extraservice"] = null;
    $this->modal->insertservicerequest($servicerequest);

    $servicerequest["servicerequestid"] = $this->modal->fetchservicerequestid($servicerequest["serviceid"]);
    $_SESSION["servicerequestid"] = $servicerequest["servicerequestid"];
 } 

 unset($_SESSION["postalcode"]);
//  $_SESSION["scheduleplan"] = "Set";
//  header("Location:./views/book-service.php");
$this->loadaddress();


}
function yoursdetails()
   {
      $row = $this->model->fetchuseraddress();
      print_r($row);
   }
function insertaddress(){
  
 
  $useraddress["streetname"] = $_POST["street_name_yd"];
  $useraddress["houseno"] = $_POST["house_no_yd"];
  $useraddress["postalcode"] = $_POST["postalcode_yd"];
  $useraddress["city"] = $_POST["city_yd"];
  $useraddress["phoneno"] = $_POST["phoneno_yd"];
  //echo $useraddress["streetname"];

  $this->modal->insertuseraddress($useraddress);
  $this->loadaddress();

  
}
function insertServiceRequestAddress(){
  $addressid = $_POST["addressid"];
  $this->modal->addServiceRequestAddress($addressid);
}

function makePayment(){
  schedule_plan();
  insertaddress();
  insertServiceRequestAddress();
}

}
?>