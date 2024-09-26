<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <link rel="stylesheet" href="assesr/css/card.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assesr/bootstrap/bootstrap-5.3.2-dist (1)/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar-scroll" data-aos="fade-in">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#"><img src="M__2_-removebg-preview (1).png" alt="" width="80px"></a>

      <div class="offcanvas offcanvas-start navbar-height d-flex justify-content-center align-items-center text-center" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
          <img src="M__2_-removebg-preview (1).png" alt="" width="80px">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" aria-current="page" href="salon_index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="">SERVICES</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="#">ABOUT</a>
            </li>
            
            <li class="nav-item">

              <a class="nav-link mx-lg-2" href="#">APPOINTMENT</a>
            
            

            </li>


          </ul>

        </div>
      </div>

     
     
      <li class="nav-item d-flex justify-content-center align-items-center flex-column">
        <i class='bx bx-user-circle fs-2 text-white'></i>
        <a class="nav-link mx-lg-2" href="file:///C:/Users/USER/Desktop/laundry/login.html">LOGIN</a>
      </li>
    

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
      <div class="col-12 back-color"  data-aos="zoom-out">
        <div class="container-full d-flex justify-content-center gap-5 flex-wrap" style="  background: url(./Group\ 94.png)">
            <div class="colum-for-top text-white d-flex  justify-content-center align-items-center ">
              <span>
                <h1 class="text-start mt-3">PREMIUM SALON SERVICES</h1>
                <p class="text-start">
                <?php include 'content.php'; ?>
                              </p>
            </span>
            
            </div>
            <div class="colum-for-top d-flex align-items-center justify-content-center mt-5">
                <img class="mt-5" src="Group 93.png" alt="" width="300px">
            </div>
            <div class="colum-for-top text-white d-flex  justify-content-center align-items-center ">
<span>
    <h1 class="mt-2 text-end">PREMIUM SALON</h1>
    <p class="text-end">
        Enjoy our top-notch salon services, including haircuts, styling, and treatments. We also offer manicure and pedicure services, ensuring a polished look. Our monthly packages are designed to meet your grooming needs. Special requests? We can tailor a package just for you.
    </p>
</span>

            </div>
        </div>
      </div>
      <div class="container-fluid  mt-5 text-white d-flex justify-content-center align-items-center">
        <section>
            <div class="content text-center mt-5">
              <h2>OUR SERVICES</h2>
             
            </div>
          </section>
    </div>
 <div class="col-12 mt-5" data-aos="fade-in">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card-1">
                <img src="istockphoto-1398386354-170667a.webp" alt="" width="100%" >
                <div class="col-12 text-center d-flex justify-content-center">
                <span>
                    <h1>BEAUTY TREATMENTS</h1><p> We offer a variety of beauty treatments <i class='bx bx-shield-plus'></i></p>
                
                <div class="col-12">
                    <button class="btn-style">VIEW</button>
                </div></span>
            </div>
            </div>
          </div>
          <div class="swiper-slide" >
            <div class="card-1">
                <img src="salon-service.jpg" alt="" width="100%" >
                <div class="col-12 text-center d-flex justify-content-center">
                <span>
                    <h1>SALON EXPERIENCE</h1><p>  Enjoy our comprehensive salon services,<i class='bx bx-shield-plus'></i></p>
                
                <div class="col-12">
                    <button class="btn-style">VIEW</button>
                </div></span>
            </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-1">
                <img src="hair-near-me-open-1.jpg" alt="" width="100%" >
                <div class="col-12 text-center d-flex justify-content-center">
                <span>
                    <h1>CLEANSING </h1><p> styling, coloring, and special treatments.<i class='bx bx-shield-plus'></i></p>
                
                <div class="col-12">
                    <button class="btn-style">VIEW</button>
                </div></span>
            </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-1">
                <img src="freya-salon-mar2022-68.jpeg" alt="" width="100%" >
                <div class="col-12 text-center d-flex justify-content-center">
                <span>
                    <h1>SERVICES</h1><p>we provide better services to you<i class='bx bx-shield-plus'></i></p>
                
                <div class="col-12">
                    <button class="btn-style">VIEW</button>
                </div></span>
            </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-1">
                <img src="Hair-salon_leaf_Getty-Images.png" alt="" width="100%" >
                <div class="col-12 text-center d-flex justify-content-center">
                <span>
                    <h1>Our Approach</h1><p>Our business model is pretty simple and focused. Our target market consists primarily of consumers and corporate <br> customers looking for long-term beauti  services.<i class='bx bx-shield-plus'></i></p>
                
                <div class="col-12">
                    <button class="btn-style">VIEW</button>
                </div></span>
            </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-1">
              <img src="Hair-salon_leaf_Getty-Images.png" alt="" width="100%" >
                <div class="col-12 text-center d-flex justify-content-center">
                <span>
                    <h1>VIP SERVICES</h1><p>we are always here to provide you vip ser<i class='bx bx-shield-plus'></i></p>
                
                <div class="col-12">
                    <button class="btn-style">VIEW</button>
                </div></span>
            </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination mt-5"></div>
      </div>
    
 </div>

<div class="container-fluid d-flex justify-content-center align-items-center flex-wrap mt-5" data-aos="fade-in">
  <div class="col-6  video-1"><video muted autoplay loop>
<source src="Hair Salon BROLL video shot on SONY A7siii.mp4">
  </video></div>
  <div class="  container-card">
    <div class="card-2 d-flex flex-column  align-items-center justify-content-center">
<h2 class="mt-2 mx-4">OUR PROCESS FLOW</h2>
<ul>
  <div class="col-12">
    <li class="d-flex align-items-center"><h3>STEP 1: <h5>BOOK YOUR APPOINTMENT</h5></h3></li>
  </div>
  <div class="col-12">
    <li><span><i class='bx bx-check'></i> Call/WhatsApp on +92312-2946615 OR book your appointment online.</span></li>
  </div>
  <div class="col-12">
    <li class="d-flex align-items-center"><h3>STEP 2: <h5>VISIT OUR SALON</h5></h3></li>
  </div>
  <div class="col-12">
    <li><span><i class='bx bx-check'></i> Arrive at our salon at your scheduled time, and our professionals will be ready to serve you.</span></li>
  </div>
  <div class="col-12">
    <li class="d-flex align-items-center"><h3>STEP 3: <h5>ENJOY YOUR TREATMENT</h5></h3></li>
  </div>
  <div class="col-12">
    <li><span><i class='bx bx-check'></i> Sit back, relax, and enjoy your selected treatments. Leave our salon feeling refreshed and revitalized.</span></li>
  </div>
</ul>

    </div>
  </div>
</div>
<div class="col-12  mt-5 text-white d-flex justify-content-center align-items-center " data-aos="fade-in">
  <section class="margning">
      <div class="content text-center mt-5 ">
        <h2>OUR SERVICES</h2>
     
      </div>
    </section>
</div>
<div class="col-12 d-flex justify-content-center align-items-center flex-wrap margning gap-5">
  <div class="card-3">
    <div class="card-5">
      <img src="Hair-salon_leaf_Getty-Images.png" alt="" width="100%">
      <div class="col-12 text-center d-flex justify-content-center">
        <h3>
          QUALITY
        <p>
          We use the best products to ensure that your hair and skin receive the top-notch care they deserve.</p></h3>
        <span>
          <h1>VIP SERVICES</h1>
          <p>We are always here to provide you VIP services<i class='bx bx-shield-plus'></i></p>
          <div class="col-12">
            <button class="btn-style">VIEW</button>
          </div>
        </span>
      </div>
    </div>
  </div>
  <div class="card-3">
    <div class="card-5">
      <img src="hair-near-me-open-1.jpg" alt="" width="100%">
      <div class="col-12 text-center d-flex justify-content-center">
        <h3>
          Convenience
        </h3>
        <span>
          <h1>VIP SERVICES</h1>
          <p>We are always here to provide you VIP services<i class='bx bx-shield-plus'></i></p>
          <div class="col-12">
            <button class="btn-style">VIEW</button>
          </div>
        </span>
      </div>
    </div>
  </div>
  <div class="card-3">
    <div class="card-5">
      <img src="freya-salon-mar2022-68.jpeg" alt="" width="100%">
      <div class="col-12 text-center d-flex justify-content-center">
        <h3>
          Affordable Pricing
        </h3>
        <span>
          <h1>VIP SERVICES</h1>
          <p>We are always here to provide you VIP services<i class='bx bx-shield-plus'></i></p>
          <div class="col-12">
            <button class="btn-style">VIEW</button>
          </div>
        </span>
      </div>
    </div>
  </div>
  <div class="card-3">
    <div class="card-5">
      <img src="salon-service.jpg" alt="" width="100%">
      <div class="col-12 text-center d-flex justify-content-center">
        <h3>
          Personalized Experience
        </h3>
        <span>
          <h1>VIP SERVICES</h1>
          <p>We are always here to provide you VIP services<i class='bx bx-shield-plus'></i></p>
          <div class="col-12">
            <button class="btn-style">VIEW</button>
          </div>
        </span>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center flex-wrap mt-5 gap-2" data-aos="fade-in">
  <div class="deliver-1 d-flex justify-content align-items-center">
    <img src="a4789c100246457.5f04c4f143deb.gif" alt="" width="80%">
  </div>
  <div class="deliver-2 d-flex justify-content-start flex-column">
    <h2 class="">Premium Salon Service with <br>
      Free <span>Consultation & Appointment</span>
    </h2>
    <p class="mt-3">Our goal is to offer you the best possible salon experience, with top-notch hair and beauty services.</p>
    <p class="text-white d-flex align-items-center"><i class='bx bx-phone-call fs-4'></i>+92 563974849</p>
  </div>
</div>

<footer>
         
  <div class="col-12 P-5   d-flex flex-wrap  justify-content-center footer-media" data-aos="fade-in">

    <div class=" footer-width p-5  ">
      <ul>
        <li><img src="M__2_-removebg-preview (1).png" alt="" width="80px"></li>
        <!-- <li class="mt-3"><a href=""><i class='bx bx-log-in'></i>LOGIN</a></li> -->
        <li class=""><a href=""><span class="fs-4 text-white"> WE ARE HERE!!</span></a></li>
        <li class=""><a href=""><span class="fs-6 text-white">we are always here for your services</span></a></li>
        <div class="col-12 d-flex justify-content gap-2 mt-4 media-1">
        <li  class="  icon-for-style"><a href=""><i class='bx bxl-twitter fs-2' ></i></a></li>
        <li  class="  icon-for-style"><a href=""><i class='bx bxl-facebook fs-2' ></i></a></li>
        <li  class="  icon-for-style"><a href=""><i class='bx bxl-instagram fs-2'></i></a></li>
      </div>
      </ul>
    </div>
    <div class=" footer-width p-4 " data-aos="fade-in">
      <ul>
        <li>
          <h3 class="mt-4 fs-4">ABOUT US</h3>
        </li>

        <li class="mt-2 style-1"><a href=""><span class="fs-6 "> Gulshan-e-iqbal block 3 near disco bakery</span></a></li>
        <li class="mt-2 style-1"><a href=""><span class="fs-6"><i class='bx bx-phone-call'></i>+92 56383748494</span></a></li>
        <li class="mt-2 style-1"><a href=""><span class="fs-6 "><i class='bx bxl-gmail'></i>@MSSALONEmail.com</span></a></li>
        <li class="mt-2 style-1"><a href=""><span class="fs-6 "><i class='bx bx-time-five' ></i> Shop timming from monday to friday | 12:pm to 12:am</span></a></li>
      </ul>
    </div>
   
    <div class=" footer-width p-4 ">
      <ul>
        <li>
          <h3 class="fs-3 mt-3">BOOKING</h3>
        </li>
        <li><p class="text-white">Book Your Appointment Now!!!</p></li>
        <li>
         
          <button type="submit" class=" btn-content text-white btn-width mt-1">BOOK</button>
        </li>
      </ul>
    </div>
   
  </div>

</footer>

      <script src="assesr/bootstrap/bootstrap-5.3.2-dist (1)/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
     var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
 
  loop: true,
    spaceBetween: 16,
    grabCursor: true,
    slidesPerView: 'auto',
    centeredSlides: 'auto',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    loop: true,
  },
  autoplay: {
    delay: 3000, // Set the delay in milliseconds (e.g., 3000 for 3 seconds)
    disableOnInteraction: false, // Allow manual interaction to interrupt autoplay
  },
});
      </script>
       <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
       <script>
         AOS.init();
       </script>
</body>
<script src="assesr/js/laundry.js"></script>
</html>