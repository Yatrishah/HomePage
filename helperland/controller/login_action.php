
                    <?php

                   // session_start();

                    include 'db.php';
                    if (isset($_POST['login'])) {
                    $email = $_REQUEST['email'];
                     session_start();

                    $sql = "SELECT `UserId`, `FirstName`,`RoleId`,`isApproved`,`Email`,`Password` FROM `user` WHERE Email = '".$email."'";

                    $result = mysqli_query($connection,$sql);

                    if($result){

                        if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_array($result)) {
                        if($row['isApproved'] == 1){
                         if(($_REQUEST['email'] == $row['Email']) && ($_REQUEST['password'] == $row['Password'])){
                                        $_SESSION['UserId'] = $row['UserId'];
                                        $_SESSION['FirstName'] = $row['FirstName'];
                                        $_SESSION['RoleId'] = $row['RoleId'];
                                         header('Location:index.php');
                                    }
                                    else{
                                            echo '<script>alert("Invalid Username Or Password")</script>';
                                    }
                                }
                                else{
                                    echo "User not Approved";
                                }
                            }

                             }
                        else{
                            echo "No user found";
                      }  }

                    }
                    ?>

