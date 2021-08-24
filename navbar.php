<div class="site-navbar-wrap js-site-navbar bg-white">

    <div class="container">
        <div class="site-navbar bg-light">
            <div class="py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h2 class="mb-0 site-logo"><a href="index.php" style="font-family:'Neo Fobia Bold';font-weight:normal;"><img src="logo1.png" width="200px" ;height="80px" style="margin-right: 50px;"></a></h2>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block" style="padding-left: 0px;margin-bottom:20px;height:35px">
                                    <li><a href="index.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);font-size:10px">See Land For Sale</span></a></li>
                                    <li><a href="how-to-buy-land.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);font-size:10px">How To Buy Land</span></a></li>
                                    <li><a href="about-us.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);font-size:10px">About Us</span></a></li>
                                    <li><a href="testimonials.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);font-size:10px">Testimonials</span></a></li>
                                    <?php
                                    if (!isset($_SESSION['name'])) {
                                    ?>
                                        <li><a href="login.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);font-size:10px">Login</span></a></li>

                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="logout.php"><span class=" text-white py-3 px-4 rounded" style="background-color: red;font-size:10px">Logout</span></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>