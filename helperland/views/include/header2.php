
<header class="header">
    <heder>
        <nav class="navbar navbar-default sticky-top navbar-expand-lg navbar-dark " id="navbar">
            <div class="container-fluid">
                <a href="index.php">
                <img class="navbar-brand" src="../assets/image/logo.png" style="width: 150px;height: 90px;"></a>
                    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-end ">
      <ul class="navbar-nav ms-auto mb-4 mb-lg-0 " style="margin-top:  -20px;">
    
      <?php
      if(!isset($_SESSION['UserId'])){?>    
            <li class="nav-item" title="Login">
                <a href="#"data-bs-toggle="modal" data-bs-target="#exampleModallogin" 
                data-bs-dismiss="modal" class="Rounded-Rectangle-1 text-white nav-link">Book Services</button></a> 
            </li> 
            <?php
            }
            else{

                //echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>"; ?>
                 <?php
          if($_SESSION['UserTypeId']==1){?>
    
    <li class="nav-item">
            <a class="nav-link   Rounded-Rectangle-1  text-white" href="book-service.php" title="Book a Cleaner">Book a Cleaner</a>
          </li>
          <?php
             }
    ?>
            <?php
             }
    ?>
            <li class="nav-item">
              <a class="nav-link Rounded-Rectangle text-white" href="price.php" title="Prices">Prices & services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  Rounded-Rectangle text-white" href="#" title="Our Guarantee">Our Guarantee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  Rounded-Rectangle text-white" href="" title="Blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  Rounded-Rectangle text-white " href="contact us.php" title="Contact Us">Contact Us</a>
            </li>
               <?php
        if(!isset($_SESSION['UserId'])){?>    
            <li class="nav-item" title="Login">
                <a href="#"data-bs-toggle="modal" data-bs-target="#exampleModallogin" data-bs-dismiss="modal" class="Rounded-Rectangle-1 text-white nav-link">Login</button></a> 
            </li> 
            <?php
            }
        else{?>
               <?php
                if($_SESSION['UserTypeId']==1){
            //echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>"; ?>
                <li class="nav-item">
                    <a class="nav-link"><div class="seprator"><div class="counter">2</div><img src="../assets/image/notification.png">
                    </div></a>
                </li>
                <li class="dropdown" style='margin-top:10px'>
                    <button class="btn dropdown-toggle dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                        <img src="../assets/image/login.png" alt="">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <?php echo "<li class='nav-item' style='text-align:center;font-size:20px;color:white;'><b > 
                    Welcome ".$_SESSION['FirstName']."</b></li>"; ?>                 
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item active" href="customer-service history.php">My Dashboard</a></li>
                        <li><a class="dropdown-item" href="../controllers/logout.php">Logout</a></li>
                    </ul>
                </li>
        <?php
         }

 else {?>
 <?php
                if($_SESSION['UserTypeId']==2){
            //echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>"; ?>
      <li class="nav-item">
                                    <a class="nav-link"><div class="seprator"><div class="counter">2</div>
                                    <img src="../assets/image/notification.png"></div></a>
                                </li>
                                <li class="dropdown">
                                    <button class="btn  dropdown-toggle dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                                        <img src="../assets/image/login.png" alt="">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <?php echo "<li class='nav-item' style='text-align:center;font-size:20px;color:white;'><b > 
                    Welcome ".$_SESSION['FirstName']."</b></li>"; ?>  
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item active" href="us.php">My Dashboard</a></li>
                                      <li><a class="dropdown-item" href="../controllers/logout.php">Logout</a></li>
                                    </ul>
                                  
                                </li>
                             </ul>
    <?php
         }

 else {?>
    <li class="nav-item">
    <a class="nav-link"><div class="seprator"><div class="counter">2</div>
    <img src="../assets/image/notification.png"></div></a>
</li>
<li class="dropdown">
    <button class="btn  dropdown-toggle dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
        <img src="../assets/image/login.png" alt="">
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <?php echo "<li class='nav-item' style='text-align:center;font-size:20px;color:white;'><b > 
Welcome ".$_SESSION['FirstName']."</b></li>"; ?>  
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item active" href="us.php">My Dashboard</a></li>
      <li><a class="dropdown-item" href="../controllers/logout.php">Logout</a></li>
    </ul>
  
</li>
</ul>

 
<?php
    }
?>
<?php
         }
?><?php
}
?>

<?php
      if(!isset($_SESSION['UserId'])){?>
             <li class="nav-item" >
                <a class="nav-link text-white Rounded-Rectangle-1" href="service provider(6th).php" title="Become a Helper">Become a Helper</a>
            </li>
            <?php }?>
            </div>
      </div>

    </ul>
  </div>

</nav> 
</header> 

        </body>
        </html>