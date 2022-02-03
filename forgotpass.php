<!--    <?php
include("../controllers/forgotPassLink.php");
   ?>
 -->
   <!---------------------------------------------- Model For Forgot Password ------------------------------------------------------>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/price.css"> 
      <link rel="stylesheet" type="text/css" href="../css/footer.css">
     <link rel="stylesheet" type="text/css" href="../css/model.css">
    <link rel="stylesheet" type="text/css" href="../css/Registration.css"> 
        <link rel="stylesheet" type="text/css" href="../css/navbar.css">     

    <title>Forgot Password</title>
</head>

<body>

    <div class="modal fade" id="exampleModalfpwd" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel" title="Forgot  Password">Forgot Password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


                </div>

                <div class="modal-body">
                    <form method="post" action="<?php echo 'http://localhost/project/?function=forgotPasswordMail';?>" name="reset">
                        <div class="mb-3 form-group icon-textbox">

                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" title="Email " name="email" required>
                            <img alt="email" src="../assets/image/user.png" >
                        </div>
                        
                        <button class="submit-button mb-3" type="submit" title="Login" value="reset" name="reset">Reset Password</button>
                        <div class="text-center mb-2"><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModallogin" data-bs-dismiss="modal" title="Login Now">Login now</a></div>
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
    <!-- -----------------------------------------------End Model ----------------------------------------------------------------------->


