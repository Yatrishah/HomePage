  <?php
   use PHPMailer\PHPMailer\PHPMailer;

                    include('db.php');
                    global $error;
                      require 'vendor/phpmailer/phpmailer/src/Exception.php';
                     require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
                    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
                     require 'vendor/autoload.php';
                        $mail = new PHPMailer(true);
                        //if (isset($_POST['reset'])){
                         if (isset($_POST["email"]) && (!empty($_POST["email"])) && (isset($_POST['reset']))) {
                        
                        $email = $_POST["email"];
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                        if (!$email) {
                            $error .="Invalid email address";
                        } else {
                            $sel_query = "SELECT * FROM `user` WHERE email='" . $email . "'";
                            $results = mysqli_query($connection, $sel_query);
                            $row = mysqli_num_rows($results);
                            if ($row == "") {
                                $error .= "aaa";
                            }
                        }
                        if ($error != "") {
                            echo $error;
                        } else {

                            $output = '';

                            $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                            $expDate = date("Y-m-d H:i:s", $expFormat);
                            $key = md5(time());
                            $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
                            $key = $key . $addKey;
                            // Insert Temp Table
                            mysqli_query($connection, "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");


                            $output.='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output.='<p><a href="http://localhost/helperlandproject/view/reset.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/helperlandproject/view/reset.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
                            $body = $output;
                            $subject = "Password Recovery";

                            $email_to = $email;


                            //autoload the PHPMailer
                            require("vendor/autoload.php");
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                            $mail->Username = "yatri.shah03@gmail.com"; // Enter your email here
                            $mail->Password = "2000ys26"; //Enter your passwrod here
                            $mail->Port = 587;
                            $mail->IsHTML(true);
                            $mail->From = "drashyatri1726@gmail.com";
                            $mail->FromName = "Admin";

                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            $mail->AddAddress($email_to);
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo "An email has been sent";
                            }
                        }
                    
                    }
                    ?>