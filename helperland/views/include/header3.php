<header class="navheader fixed-top">
        <div class="header-navbar1 d-flex justify-content-between align-items-center">
            <a href="index.php" title="Helper hand" class="logo-block">
                <img src="../assets/image/logo.png" alt="Helper hand logo">
            </a>
            <div class="header-right-block">
                <div class="right-block-inner d-flex align-items-center">
                    <nav class="navbar navbar-expand-lg align-items-center ">
                   <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalnavbartoggle" data-bs-dismiss="modal">
                             <span class="navbar-toggler-icon"></span>
                         </button>
                        <div class="collapse navbar-collapse" id="navbarNav" >
                            <ul class="navbar-nav align-items-center">
                                 <li class="nav-item">
                                    <a class="nav-link Rounded-Rectangle-0" href="book-service.php" title="book now"><p class="textround">Book now</p></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="price.php" title="Prices">Prices & Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Blog">Warranty</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="#" title="Login" >Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact us.php" title="Contact us">Contact</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link"><div class="seprator"><div class="counter">2</div><img src="../assets/image/notification.png"></div></a>
                                </li>
                                <li class="dropdown">
                                    <button class="btn  dropdown-toggle dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" >
                                        <img src="../assets/image/login.png" alt="">
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">

                                    <?php echo "<li class='nav-item' style='text-align:center;font-size:20px;color:white;'>
                                    <b> Welcome;</br> ".$_SESSION['FirstName']."</b></li>"; ?>  
                                        <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item active" href="customer-service history.php">My Dashboard</a></li>
                                      <li><a class="dropdown-item" href="#mySettings" id="mysettings"  onclick="mysettings();" role="button"> My Settings</a></li>
                                      <li><a class="dropdown-item" href="../controllers/logout.php">Logout</a></li>
                                    </ul>
                                  
                                </li>
                             </ul>
                            </div>
                    </nav>
                   </div>
                 </div>
        </div>


</header>

 <!-- -------------------------------------------------- End of Navigation Bar ------------------------------------------------------------  -->
