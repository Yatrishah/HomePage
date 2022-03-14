<?php
    use PHPMailer\PHPMailer\PHPMailer;
      require 'vendor/phpmailer/phpmailer/src/Exception.php';
     require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
      require 'vendor/phpmailer/phpmailer/src/SMTP.php';
      require 'vendor/autoload.php';
function doMail($email,$subject,$message)
{     
            try {
            
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
                  $mail->setFrom($email,'Admin');
                  $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;
                 $mail->send();
                 header('Location:./views/registration.php');
                

            }
            catch (Exception $e) {
                  $output = '<div class="alert alert-danger">
                              <h5>' . $e->getMessage() . '</h5>
                            </div>';
                }
   }

function doMailAttactment($email,$subject,$message)
{     
            try {
            
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

                  $mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);

                  $mail->isHTML(true);
                  $mail->Subject = $subject;
                  $mail->Body = $message;
                   $mail->send();

              }
            catch (Exception $e) {
                  $output = '<div class="alert alert-danger">
                              <h5>' . $e->getMessage() . '</h5>
                            </div>';
                }
 }

          ?>