
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
                  // move_uploaded_file($_FILES['file']['tmp_name'], "./views/profile_img/".$target_path);

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
               $role=1;
               $userTypeId=1;
               $currentDateTime = date('Y-m-d H:i:s');
               $isApproved=1;
            
               if($password == $cpassword){
               
               $temp= $this->modal->customer_insert('user',$name,$lastname ,$email,$password,$phonenumber,$role,$userTypeId,
               $currentDateTime,$isApproved);
               $_SESSION['status_msg1']="Inserted User Data Sucessfully And Mail is Sended To your Account";
               doMail($email,'Account Created','Congratulation ' .$name. ' your account is created sucessfully!!');
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
        $role=1;
        $userTypeId=1;
        $currentDateTime = date('Y-m-d H:i:s');
        $isApproved=1;
      
        if($password == $cpassword){
          
          $temp= $this->modal->customer_insert('user',$name,$lastname ,$email,$password,$phonenumber,$role,$userTypeId,
          $currentDateTime,$isApproved);
          $_SESSION['status_msg1']="Inserted User Data Sucessfully And Mail is Sended To your Account";
          doMail($email,'Account Created','Congratulation ' . $name.' your account is created sucessfully!!');
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
                if($row['IsApproved'] == 1){
                  if(($_POST['email'] == $row['email']) && ($_POST['password'] == $row['Password'])){

                      $_SESSION['UserId'] = $row['UserId'];

                      $_SESSION['FirstName'] = $row['FirstName'];
                      $_SESSION['UserTypeId'] = $row['UserTypeId'];
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
                  header('Location:./views/index.php');

  try{
     // use PHPMailer\PHPMailer\PHPMailer;
          $mail = new PHPMailer(true);

     $mail->isSMTP();
                  $mail->Host = 'smtp.gmail.com';
                  $mail->SMTPAuth = true;
                  // Gmail ID which you want to use as SMTP server
                  $mail->Username = 'yatri.shah03@gmail.com';
                  // Gmail Password
                  $mail->Password = '2000ys26';
                  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                  $mail->Port = 587;
                  $mail->setFrom($email);
                  $mail->addAddress($email);
                  $mail->addAddress('drashyatri1726@gmail.com');
                  $mail->isHTML(true);
                 $mail->Subject = 'Change Password for Helperland';
                  $mail->Body = "http://localhost/project/index.php?function=forgotPassword&parameter=$userid";

                  $mail->send();
                 // header('Location:./views/contact us.php');
                }
              catch (Exception $e) {
                 echo '<div class="alert alert-danger">
                        <h5>' . $e->getMessage() . '</h5>
                      </div>';
                }


      }
   }}

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
 $this->modal->insertextraservice($servicerequest);

   unset($_SESSION["postalcode"]);

   $this->usersaddress();


}

function yourdetails()
   {
      $row = $this->model->fetchuseraddress();
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
}


function favouriteserviceprovider()
   {
      $output = "";
      $userid = $_SESSION["UserId"];
      $targetServiceProviderarr = $this->modal->fetchServiceProvider($userid);
      foreach ($targetServiceProviderarr as $value) {
         $name = $this->modal->fetchServiceProviderName($value);
         $output .= "<div class='td-rating m-2' style='width: 200px; border:none'>
                     <div class='rating-user' style='margin-left:20px'>
                        <img src='../assets/image/image_table.png'>
                     </div>
                     <p style='margin-left:25px;margin-top:5px'>$name</p>
                     <button class='btnaddnewadd1' id='$value-favserviceprovider'>Select</button>
                  </div>";
      }
      echo $output;
   }

}
?>