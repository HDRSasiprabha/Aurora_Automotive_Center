
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Aurora Automotive Center</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo" >
                    <img src="assets\img\logotrans.png" style="width:28%; height: 80px;">
                 Aurora Automotive Center
                </a> 
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li >
                            <a href="dashboard.php" class="nav__link">Home</a>
                        </li>
                        <li >
                         <a href="appointment.php" class="nav__link">Appointments</a>
                        </li>
 
                        <li >
                         <a href="ecv.php" class="nav__link">Carieer Vehicle</a>
                        </li>
 
                        <li >
                         <a href="qro.php" class="nav__link">Quick Recovery Services</a>
                        </li>

                        <li >
                        <i class="ri-user-3-fill "></i>
                         <a href="logout.php" class="nav__link">Logout</a>
                         
                        </li>
                     </ul>
 
                     <div class="nav__close" id="nav-close">
                         <i class="ri-eye-close-fill"></i>
                     </div>
 
                </div>
 
                <!--Togle-->
 
                <div class="nav__toggle" id="nav-toggle">
                     <i class="ri-menu-line"></i>
             </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
            <!-- <div class="home__container container grid">
            <i class="ri-roadster-fill ri-5x"></i>
            <h5  class="text-justify">View Vehicle Repairing Progress</h5>
            </div> -->
            <div style="align-items: center;justify-content: center;display: flex;color: white;">
  <div>
              <a href="progress.php">
              <img  border="0"  img src="assets\img\car-repair.png" width="150" height="150" ></a><br>
              <h2>View Repair Progress</h2>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div>
               <a href="appointment.php">
              <img  border="0"  img src="assets\img\calendar.png" width="150" height="150"></a><br>
              <h2>Get Appointments</h2>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div>
               <a href="ecv.php">
              <img  border="0"  img src="assets\img\truck.png" width="150" height="150"></a><br>
              <h2>Emergency Carrier Vehicle</h2>
             
</div>

</div>
</br>
</br>
<div style="align-items: center;justify-content: center;display: flex;color: white;">
<div>
               <a href="http://127.0.0.1:5000/">
              <img  border="0"  img src="assets\img\broken-car.png" width="150" height="150"></a><br>
              <h2>Damage detection</h2>
             
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div>
               <a href="qro.php">
              <img  border="0"  img src="assets\img\scrapyard.png" width="150" height="150"></a><br>
              <h2>Quick Recovery Option</h2>
             
</div>
</div>
            </section>

                        

           
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="shape shape__big"></div>
            <div class="shape shape__small"></div>

            <div class="footer__container container grid">
                <div class="footer_content">
                    <a href="#" class="footer__logo">
                        <i class="ri-steering-fill"></i>Aurora Automotive center
                    </a>
                    <p class="footer__description">
                        We Offer the best cars of <br>the most recognizing
                        brands in the world

                    </p>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">
                        Company
                    </h3>
                    <ul class="footer__link">
                        <li>
                            <a href="" class="footer__link">About</a>
                        </li>

                        <li>
                            <a href="" class="footer__link">Cars</a>
                        </li>

                        <li>
                            <a href="" class="footer__link">History</a>
                        </li>

                        <li>
                            <a href="" class="footer__link">Shop</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Information
                    </h3>
                    <ul class="footer__link">
                        <li>
                            <a href="" class="footer__link">Request Service</a>
                        </li>

                        <li>
                            <a href="" class="footer__link">Contact us</a>
                        </li>

                        <li>
                            <a href="" class="footer__link">Serices</a>
                        </li>

                        <li>
                            <a href="" class="footer__link">Working Hours</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Follow us on
                    </h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-circle-line"></i>
                        </a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/?lang=en" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </ul>
                    
                </div>
            </div>
            <span class="footer__copy">
                All rights reserved
            </span>
        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MIXITUP JS ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>