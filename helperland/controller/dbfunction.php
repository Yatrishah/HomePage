<?php
include("db.php");
use PHPMailer\PHPMailer\PHPMailer;
function formsubmit()
{
    global $output1 ;
  include("db.php");
 if (isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject=$_POST['subject'];
    $phonenumber=$_POST['phonenumber'];
    $CreatedOn = date('Y-m-d H:i:s');
    $file=$_FILES['file']['name'];
    $target_path = $_FILES['file']['name'];   
    move_uploaded_file($_FILES['file']['tmp_name'], "../view/profile_img/".$target_path);
    $query="INSERT INTO Contactus(Name,Email,Phonenumber,Subject,Message,CreatedOn,UploadFileName,FileName)values('$name','$email','$phonenumber','$subject','$message','$CreatedOn','$file','$target_path')";
    $result=mysqli_query($connection,$query);
    if($result)
    $output1 = '<div class="alert alert-success">
     <h5> Database Record Inserted</h5>
     </div>';            
        else
        $output1 = '<div class="alert alert-success">
        <h5>die("Database Record not Inserted".mysqli_error($connection));</h5>
        </div>'; 
      }
}


function mailer()
{
  global $output;
   require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';
  require 'vendor/autoload.php';
  $mail = new PHPMailer(true);
include("db.php");
 if (isset($_POST['submit'])) {
    $name = $_POST['firstname'];
     $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject=$_POST['subject'];
     $phonenumber=$_POST['phonenumber'];
     $CreatedOn = date('Y-m-d H:i:s');
   try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'yatri.shah03@gmail.com';
      // Gmail Password
      $mail->Password = '2000ys26';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;
      $mail->setFrom($email,$name);
      $mail->addAddress($email);

      $mail->addAddress('drashyatri1726@gmail.com');
      $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
      $mail->isHTML(true);
        $mail->Subject = ("$email ($subject)");
    $mail->Body = "<p>Name : $name $lastname <br>Email : $email <br>Message : $message<br> CreatedOn:$CreatedOn</p>";
     $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us,<br> We get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }
}

function customerregistration()
{include("../controller/db.php");

    global $msg,$output1 ;
    if (isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email']; 
    $phonenumber=$_POST['phonenumber'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $role=1;
    $userTypeId=1;
    $currentDateTime = date('Y-m-d H:i:s');
    $isApproved=1;

    if($password != $cpassword){
               $msg=  ' <h5>Password Does not Match</h5>';
    }
    else{
      $query1="INSERT INTO user(FirstName,LastName,Email,Password,Mobile,RoleId,userTypeId,CreatedDate,isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$role','$userTypeId','$currentDateTime','isApproved')";
        $result1=mysqli_query($connection,$query1);
        if($result1)
              $output1 = '<div class="alert alert-success">
                  <h5> User Record Inserted</h5>
                </div>';            
        else
              $output1 = '<div class="alert alert-success">
                  <h5>die("Database Record not Inserted".mysqli_error($connection));</h5>
                </div>'; 
}

                } 
}
?>

