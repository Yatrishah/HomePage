
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
   //CONTACTUS
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
                      $_SESSION['RoleId'] = $row['RoleId'];
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

   function forgotPasswordMail(){
   
    if(isset($_POST["reset"])){

    $userid = $this->modal->forgotpasswordfetch($_POST["email"]);
        
    if(isset($_POST["reset"])){
   $email = $_POST["email"];

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

   function changepassword(){
      $user["userid"] = $_GET["parameter"];
      $user["password"] = $_POST["password"];

      $this->modal->changepassword($user);

      header('Location:./views/index.php');
   }
}
?>