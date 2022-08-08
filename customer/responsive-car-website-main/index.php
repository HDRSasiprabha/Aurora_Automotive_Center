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
                <a href="index.php" class="nav__logo">
                    <img src="assets\img\logotrans.png" style="width:28%; height: 80px;">
                 <!-- <i class="ri-steering-fill"></i> -->
                 Aurora Automotive Center
                </a> 
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                         <a href="#about" class="nav__link">About</a>
                        </li>
 
                        <li class="nav__item">
                         <a href="#popular" class="nav__link">Popular</a>
                        </li>
 
                        <li class="nav__item">
                         <a href="#featured" class="nav__link">Features</a>
                        </li>
                        <li >
                            <i class="ri-user-3-fill "></i>
                             <a href="login.php" class="nav__link">Login</a>
                             
                            </li>
                     </ul>
 
                     <div class="nav__close" id="nav-close">
                         <i class="ri-eye-close-fill"></i>
                     </div>
 
                </div>
 
                <!--Togle-->
 
                <div class="nav__toggle" id="nav-toggle">
                     <i class="ri-menu-line"></i>
 
                </div>
                  
 
 
             </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="shape shape__big"></div>
                <div class="shape shape__small"></div>
                <div class="home__container container grid">
                   <div class="home__data">
                       <h1 class="home__title">
                           Choose you car now
                       </h1>
                       <h2 class="home__subtitle">
                           Vega EVX
                       </h2>
                       <h3 class="home__sports">
                        <i class="ri-flashlight-fill">Electric Car</i>
                       </h3>
                   </div> 
                   <img src="assets/img/popular2.png" alt="" class="home__image">
                   <div class="home__car">
                       <div class="home__car-data">
                           <div class="home__car-icon">
                            <i class="ri-dashboard-2-fill"></i>
                           </div>
                           <h2 class="home___car-number">300</h2>
                           <h3 class="home__car-name">Top Speed</h3>

                       </div>

                       <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-flashlight-line"></i>
                        </div>
                        <h2 class="home___car-number">350hp</h2>
                        <h3 class="home__car-name">Hourse Power</h3>

                    </div>

                    <div class="home__car-data">
                        <div class="home__car-icon">
                            <i class="ri-battery-2-charge-fill"></i> 
                        </div>
                        <h2 class="home___car-number">2</h2>
                        <h3 class="home__car-name">Electric Motors</h3>

                    </div>


                   </div>
                   <a href="login.php" class="home__button">SERVICES</a>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__group">
                        <img src="assets/img/about.png" alt="" class="about__img">
                        
                        <div class="about__card">
                            <h3 class="about__card-title">2.500</h3>
                            <p class="about__card-description">
                                One of the most powerful cars out there
                            </p>
                        </div>

                    </div>
                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Driving Machines <br>With Electric Power
                        </h2>
                        <p class="about__description">
                            See the future with high-performance electric cars produced by 
                            renowned brands. They feature futuristic builds and designs with 
                            new and innovative platforms that last a long time.

                        </p>
                        <a href="#" class="button">Know more</a>
                    </div>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <h2 class="section__title">
                    Choose Your Car<br>From Leading brands
                </h2>
                
                <div class="popular__container container swiper">
                    <div class="swiper-wrapper">
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller">Car Brand</div>
                                   <h1 class="popular__title">Car Brand</h1> 
                                   <h3 class="popular__subtitle">Model</h3>
                                   <img src="assets/img/featured1.png" alt="" class="popular__img">

                                   <div class="popular__data">
                                    <div class="popular__data-group">
                                        <i class="ri-dashboard-2-line"></i>3.7 Sec
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-funds-box-line"></i>356 km/h
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-unsplash-fill"></i>v10
                                    </div>
                                   </div>
                                   <h3 class="popular__price">RS:20000000</h3>
                                   <button class="button popular__button">
                                    <i class="ri-shopping-bag-2-line"></i>
                                   </button>
                               
                            
                        </article>
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                                   <h1 class="popular__title">Car Brand</h1> 
                                   <h3 class="popular__subtitle">Mode;</h3>
                                   <img src="assets/img/featured2.png" alt="" class="popular__img">

                                   <div class="popular__data">
                                    <div class="popular__data-group">
                                        <i class="ri-dashboard-2-line"></i>3.7 Sec
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-funds-box-line"></i>356 km/h
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-unsplash-fill"></i>v10
                                    </div>
                                   </div>
                                   <h3 class="popular__price">RS:20000000</h3>
                                   <button class="button popular__button">
                                    <i class="ri-shopping-bag-2-line"></i>
                                   </button>
                               
                            
                        </article>
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                               <h1 class="popular__title">Car Brand</h1> 
                                   <h3 class="popular__subtitle">Model</h3>
                                   <img src="assets/img/featured3.png" alt="" class="popular__img">

                                   <div class="popular__data">
                                    <div class="popular__data-group">
                                        <i class="ri-dashboard-2-line"></i>3.7 Sec
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-funds-box-line"></i>356 km/h
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-unsplash-fill"></i>v10
                                    </div>
                                   </div>
                                   <h3 class="popular__price">RS:20000000</h3>
                                   <button class="button popular__button">
                                    <i class="ri-shopping-bag-2-line"></i>
                                   </button>
                               
                            
                        </article>
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                               <h1 class="popular__title">Car Brand</h1> 
                                   <h3 class="popular__subtitle">Model</h3>
                                   <img src="assets/img/featured4.png" alt="" class="popular__img">

                                   <div class="popular__data">
                                    <div class="popular__data-group">
                                        <i class="ri-dashboard-2-line"></i>3.7 Sec
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-funds-box-line"></i>356 km/h
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-unsplash-fill"></i>v10
                                    </div>
                                   </div>
                                   <h3 class="popular__price">RS:20000000</h3>
                                   <button class="button popular__button">
                                    <i class="ri-shopping-bag-2-line"></i>
                                   </button>
                               
                            
                        </article>
                        <article class="popular__card swiper-slide">
                            <div class="shape shape__smaller"></div>
                               <h1 class="popular__title">Car Brand</h1> 
                                   <h3 class="popular__subtitle">Model</h3>
                                   <img src="assets/img/featured5.png" alt="" class="popular__img">

                                   <div class="popular__data">
                                    <div class="popular__data-group">
                                        <i class="ri-dashboard-2-line"></i>3.7 Sec
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-funds-box-line"></i>356 km/h
                                    </div>

                                    <div class="popular__data-group">
                                        <i class="ri-unsplash-fill"></i>v10
                                    </div>
                                   </div>
                                   <h3 class="popular__price">RS:20000000</h3>
                                   <button class="button popular__button">
                                    <i class="ri-shopping-bag-2-line"></i>
                                   </button>
                               
                            
                        </article>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--==================== FEATURES ====================-->
            <section class="features section">
                <h2 class="section__title">More Features</h2>
                <div class="features__container container grid">
                    <div class="features__group">
                        <img src="assets/img/features.png" alt="" class="features__img">

                        <div class="features__card features__card-1">
                            <h3 class="features__card-title">330+hp</h3>
                            <p class="features__card-description">Turbo<br>charged</p>
                        </div>

                        <div class="features__card features__card-2">
                            <h3 class="features__card-title">2500CC</h3>
                            <p class="features__card-description">Engine <br>Capacity</p>
                        </div>

                        <div class="features__card features__card-3">
                            <h3 class="features__card-title">350</h3>
                            <p class="features__card-description">Top<br>Speed</p>
                        </div>
                        
                    </div>
                </div>

                <img src="assets/img/map.svg" alt="" class="features__map">
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section" id="featured">
                <h2 class="section__title">
                    Luxuary And Sport Cars
                </h2>
                <div class="featured__container container">

                    <ul class="featured__filters">
                        <li>

                            <button class="featured__item active-featured" data-filter="all">
                                <span>ALL</span>
                            </button>
                        </li>

                        <li>

                            <button class="featured__item" data-filter=".tesla">
                                <img src="assets/img/logo3.png" alt="" >
                            </button>
                        </li>

                        <li>

                            <button class="featured__item" data-filter=".porsche">
                                <img src="assets/img/logo2.png" alt="" >
                            </button>
                        </li>

                        <li>

                            <button class="featured__item" data-filter=".audi">
                                <img src="assets/img/logo1.png" alt="" >
                            </button>
                        </li>
                        
                    </ul>

                    <div class="featured__content grid">
                        <article class="featured__card mix tesla">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Car Brand</h1>
                            <h3 class="featured__subtitle">Model</h3>
                            <img src="assets/img/popular1.png" alt="" class="featured__img">
                            <h3 class="faetured__price">RS:20000000</h3>

                            <buttton class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </buttton>
                        </article>

                        <article class="featured__card mix tesla" >
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Car Brand</h1>
                            <h3 class="featured__subtitle">Model</h3>
                            <img src="assets/img/popular2.png" alt="" class="featured__img">
                            <h3 class="faetured__price">RS:20000000</h3>

                            <buttton class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </buttton>
                        </article>

                        <article class="featured__card mix tesla">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Car Brand</h1>
                            <h3 class="featured__subtitle">Model</h3>
                            <img src="assets/img/popular3.png" alt="" class="featured__img">
                            <h3 class="faetured__price">RS:20000000</h3>

                            <buttton class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </buttton>
                        </article>

                        <article class="featured__card mix audi" >
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Car Brand</h1>
                            <h3 class="featured__subtitle">Model</h3>
                            <img src="assets/img/popular4.png" alt="" class="featured__img">
                            <h3 class="faetured__price">RS:20000000</h3>

                            <buttton class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </buttton>
                        </article>

                        <article class="featured__card mix porsche">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Car Brand</h1>
                            <h3 class="featured__subtitle">Model</h3>
                            <img src="assets/img/popular5.png" alt="" class="featured__img">
                            <h3 class="faetured__price">RS:20000000</h3>

                            <buttton class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </buttton>
                        </article>

                    </div>
                </div>
            </section>

            <!--==================== OFFER ====================-->
            <section class="offer section">
                <div class="offer__container container grid">
                    <img src="assets/img/offer-bg.png" alt="" class="offer__bg">
                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Are You Searching for<br>Special offers?
                        </h2>
                        <p class="offer__description">
                            Be the first to receive all the information about our 
                            products and new cars by email by subscribing to our 
                            mailing list.
                        </p>
                        
                        <a href="#" class="button">
                            Subscribe Now
                        </a>
                    </div>
                    <img src="assets/img/offer.png" alt="" class="offer__img">
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container container grid">

                    <div class="logos__content">
                        <img src="assets/img/logo1.png" alt="" class="logos__img">
                    </div>

                    <div class="logos__content">
                        <img src="assets/img/logo2.png" alt="" class="logos__img">
                    </div>

                    <div class="logos__content">
                        <img src="assets/img/logo3.png" alt="" class="logos__img">
                    </div>

                    <div class="logos__content">
                        <img src="assets/img/logo4.png" alt="" class="logos__img">
                    </div>

                    <div class="logos__content">
                        <img src="assets/img/logo5.png" alt="" class="logos__img">
                    </div>

                    <div class="logos__content">
                        <img src="assets/img/logo6.png" alt="" class="logos__img">
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