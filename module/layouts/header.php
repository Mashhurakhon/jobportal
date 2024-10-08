<!-- Header Start -->
<div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo02.png" alt="" width=150 height=160></a>
                    </div>  
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="menu-wrapper">
                        <!-- Main-menu -->
                        <div class="main-menu">
                            <nav class="d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="job_listing.php?action=allVacancies">Find a Jobs </a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#">Page</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li><a href="job_details.html">job Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <?php  
                        session_start();
                                   if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {
                                       echo "
                                       <div class='main-menu'>
                                    <nav class='d-none d-lg-block'>
                                        <ul id='navigation'>
                                            <li><a href='profile.php'>{$_SESSION["username"]}</a></li>
                                            <li><a href='1.php'>Out</a></li>
                                            </ul></div></div>";
                                       
                                   }
                                   else{
                                    echo "<div class='header-btn d-none f-right d-lg-block'>";
                                       echo "<a href='signup.php' class='btn head-btn1'>Register</a>";
                                   echo "<a href='signin.php' class='btn head-btn2'>Login</a></div>";
                                   }
                                   ?>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->