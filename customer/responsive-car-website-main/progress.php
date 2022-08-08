
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
        <link rel="stylesheet"  href="assets/css/styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        

        <title>Aurora Automotive Center</title>
        <style>
            /*=============== rating CSS ===============*/
*{
  margin: 0;
  padding: 0;
}
.rate {
  float: left;
  height: 46px;
  padding: 0 10px;
}
.rate:not(:checked) > input {
  position:absolute;
  top:-9999px;
}
.rate:not(:checked) > label {
  float:right;
  width:1em;
  overflow:hidden;
  white-space:nowrap;
  cursor:pointer;
  font-size:30px;
  color:#ccc;
}
.rate:not(:checked) > label:before {
  content: '★ ';
}
.rate > input:checked ~ label {
  color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
  color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
  color: #c59b08;
}
        </style>
        <style>
                 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

/* *, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
} */


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 50vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password],.form-content input[type=date],.form-content input[type=time], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


/* .btn-primary{
    background-color: #FFFFFF;
    outline: none;
    border: 0px;
     box-shadow: none;
} */

/* .btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
} */

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}
.button1{
    color: #000;
}
</style>
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
                            <a href="dashboard.php" class="nav__link">HOME</a>
                        </li>
                        <li class="nav__item">
                         <a href="appointment.php" class="nav__link">Appointments</a>
                        </li>
 
                        <li class="nav__item">
                         <a href="ecv.php" class="nav__link">Carieer Vehicle</a>
                        </li>
 
                        <li class="nav__item">
                         <a href="qro.php" class="nav__link">Quick Recovery Services</a>
                        </li>

                        <li class="nav__item">
                        <i class="ri-user-3-fill "></i>
                        <a href="login.php" class="nav__link">Logout</a>
                         
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
            
            <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Enter Job ID Below</h3>
                       
                        <form  action=""   method="POST" >

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="job_id" placeholder="Job ID" required>
                             
                            </div>
</br>
                      
                            <div class="col-md-12 mt-3">
                            
                                <input type="submit" class="w3-button w3-round-large w3-hover-blue" value = "Enter"/>
                                <a href="dashboard.php"><button type="button" class="w3-button w3-round-large w3-hover-red">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

$con = mysqli_connect("localhost","root","","aurora");

//select database


//perform sqk operations
if($_SERVER["REQUEST_METHOD"] == "POST") {
$job_id = mysqli_real_escape_string($con,$_POST['job_id']);
$sql = "SELECT * FROM job_tasks where job_id='$job_id'";
$result = mysqli_query($con,$sql);

//print result

echo "<table style='border:1px solid black;margin-left:auto;margin-right:auto;width: 760px;' >";
echo "<tr align=left>";
echo "<th >Job ID</th>";
echo "<th>Task</th>";
echo "<th>Task Status</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>$row[0] </td>";
	echo "<td>$row[1] </td>";
	echo "<td>$row[2] </td>";
	echo "</tr>";
}
echo "</table>";


//close connection
mysqli_close($con);
}
?>    
</section>
<section >

		<center>
<h3>Now you can rate our services...</h3>
</center>
<div class="rate" style='margin-left:auto;margin-right:auto;width: 830px;' >
    
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>


  </section>
</br>
 
  
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