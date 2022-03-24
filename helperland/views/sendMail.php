<?php
    use PHPMailer\PHPMailer\PHPMailer;
session_start();
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
            require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
            require 'vendor/phpmailer/phpmailer/src/SMTP.php';
            require 'vendor/autoload.php';
               $mail = new PHPMailer(true);

if (isset($_POST)) {
                  $name1 = $_POST['firstname']. $_POST['lastname'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];
                  $subject=$_POST['subject'];
                  $phonenumber=$_POST['phonenumber'];
                  $CreatedOn = date('Y-m-d H:i:s');
                  $file=$_FILES['file']['name'];
                  $target_path = $_FILES['file']['name'];   
                  // move_uploaded_file($_FILES['file']['tmp_name'], "./views/profile_img/".$target_path);

                 
             

?>