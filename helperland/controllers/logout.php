<?php

session_start();
session_destroy();
// header('Location:../views/index.php');

?>
<script src="../assets/js/sweetalert.min.js"></script>
<script>
    window.addEventListener('load', function () {
  			swal('Successfully Logout','Redirecting...','success')
            setTimeout(function() {
                    window.location = "../views/index.php";
        }, 2000);
    })
</script>