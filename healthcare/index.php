<?php require('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaid</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
      include "navbar.php";
    ?>

<div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>


    <div class="section-2" style="padding: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2  class="section-heading text-center">Your Path to Seamless Healthcare</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>
                    Vaid provides progressive, and affordable healthcare, accessible on mobile and onnline for everyone.
                    </p>
                    <button class="btn btn-start">Start for Free</button>                
                </div>
                <div class="col-lg-6">
                    <img src="img/logo.jpeg" class="img-fluid" alt="Image">
                </div>
            </div>
        </div>
    </div>

    <div class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-1">
                    <h2 class="section-heading">Dedicated Vaid Services to Enhance Your Well-being</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 mb-4">
                <div class="card">
                    <img src="resources/dweb_instant_video_consulation.webp" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Instant Video Consulation</h5>
                        <p>Connect with 60 secs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <div class="card">
                    <img src="resources/dweb_find_doctors (3).webp" class="card-img-top" alt="Image 2">          
                    <div class="card-body">
                        <h5 class="card-title">Find Doctors Near You</h5>
                        <p>Confirmed appointments</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <div class="card">
                    <img src="resources/dweb_medicines.webp" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Medicines</h5>
                        <p>Essentials at your doorstep</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <div class="card">
                    <img src="resources/dweb_lab_tests.png" class="card-img-top" alt="Image 4">
                    <div class="card-body">
                        <h5 class="card-title">Lab Test</h5>
                        <p>Sample pickup at your home</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-4">
                <div class="card">
                    <img src="resources/dweb_surgeries.png" class="card-img-top" alt="Image 5">
                    <div class="card-body">
                        <h5 class="card-title">Surgeries</h5>
                        <p>Safe and trusted surgey centers</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
        <form method="post" action="Services/service.php">
            <button type="submit" class="btn btn-more-services">More Services</button>
        </form>
        </div>
    </div>

    <div class="section-4" style="padding: 30px;"> 
        <div class="container">
            <h2 class="text-left">Consult top doctors online for any health concern</h2> <!-- Adjusted margin-top -->
            <p class="text-left">Private online consultations with verified doctors in all specialists</p> <!-- Adjusted margin-top -->
            <div class="row justify-content-center">
                <div class="col-lg-2 mb-4">
                    <div class="card">
                        <img src="resources/irregular-painful+period.webp" class="card-img" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Period doubts or Pregnancy</h5>
                            <p class="card-text">CONSULT NOW</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card">
                        <img src="resources/Acne.webp" class="card-img" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Acne, pimple or skin issues</h5>
                            <p class="card-text">CONSULT NOW</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card">
                        <img src="resources/top-speciality-sexology.svg" class="card-img" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Performance issues in bed</h5>
                            <p class="card-text">CONSULT NOW</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card">
                        <img src="resources/coughing.webp" class="card-img" alt="Image 4">
                        <div class="card-body">
                            <h5 class="card-title">Cold, cough or fever</h5>
                            <p class="card-text">CONSULT NOW</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card">
                        <img src="resources/top-speciality-pediatric.svg" class="card-img" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title">Child not feeling well</h5>
                            <p class="card-text">CONSULT NOW</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <div class="card">
                        <img src="resources/12-mental-wellness.webp" class="card-img" alt="Image 6">
                        <div class="card-body">
                            <h5 class="card-title">Depression or anxiety</h5>
                            <p class="card-text">CONSULT NOW</p>
                        </div>
                    </div>
                </div>
                <!-- More cards here -->
            </div>
        </div>
    </div>

    <div class="section-5"> 
        <div class="container">
            <h2 class="text-left">Book an appointment for an in-clinic consultation</h2> <!-- Adjusted margin-top -->
            <p>Find experienced doctors across all specialties</p>
            <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
          <img class="image-item" src="resources/sp-dentist@2x.jpg" alt="img-1" />
          <img class="image-item" src="resources/sp-gynecologist@2x.jpg" alt="img-2" />
          <img class="image-item" src="resources/sp-dietitian@2x.jpg" alt="img-3" />
          <img class="image-item" src="resources/sp-physiotherapist@2x.jpg" alt="img-4" />
          <img class="image-item" src="resources/sp-general-surgeon@2x.jpg" alt="img-5" />
          <img class="image-item" src="resources/sp-orthopedist@2x.jpg" alt="img-6" />
          <img class="image-item" src="resources/sp-general-doctor@2x.jpg" alt="img-7" />
          <img class="image-item" src="resources/sp-pediatrician@2x.jpg" alt="img-8" />
          <img class="image-item" src="resources/sp-gastroenterologist@2x.jpg" alt="img-9" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
        </div>
    </div>

    <div class="section-6" style="padding: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2  class="section-heading text-center">Read top articles from health experts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <p style="padding: 50px;">
                    Health articles that keep you informed about good health practices and achieve your goals.  
                </p>
                    <button class="btn btn-start">See All Articles</button>                
                </div>
                <div class="col-lg-4 mb-6">
                <div class="card">
                    <img src="resources/5fd27b74d9477cb633445cf3f105078bbc479910.jpeg" class="card-img-top" alt="Image 1" style="width: fit-content;">
                    <div class="card-body">
                        <h5 class="card-title">12 Coronavirus Myths and Facts That You Should Be Aware of </h5>
                        <p>Dr. Joyshree Pal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-6">
                <div class="card">
                    <img src="resources/bade52edc7fb158bf627216bf96c2b881a97f30c.jpeg" class="card-img-top" alt="Image 2" style="width: fit-content;">          
                    <div class="card-body">
                        <h5 class="card-title">Eating Right to Build Immunity Against Cold and Viral Infections</h5>
                        <p>Dr. Sahil Patil</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-7" style="padding: 50px;">
        <div class="container">
            <h2 class="text-center">What our users have to say</h2> <!-- Adjusted margin-top -->
            <div class="wrapper">
                <div class="box">
                    <i class="fas fa-quote-left quote"></i>
                    <p>Very good app. Well thought out about booking/rescheduling/canceling an appointment. Also, Doctor's feedback mechanism is good and describes all the basics in a good way</p>
                    <div class="content">
                        <div class="info">
                            <div class="name">Alex Smith</div>
                            <div class="job">Designer | Developer</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/person-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-quote-left quote"></i>
                    <P>Very easy to book, maintain history. Hassle free from older versions of booking appointment via telephone.. Thanks Practo for making it simple.</p>
                    <div class="content">
                        <div class="info">
                            <div class="name">Steven Chris</div>
                            <div class="job">YouTuber | Blogger</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/person-image.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="box">
                    <i class="fas fa-quote-left  quote"></i>
                    <p>Very helpful. Far easier than doing same things on computer. Allows quick and easy search with speedy booking. Even maintains history of doctors visited.</p>
                    <div class="content">
                        <div class="info">
                            <div class="name">Kristina Bellis</div>
                            <div class="job">Freelancer | Advertiser</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="image">
                            <img src="img/person-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-8" style="padding: 5px; margin-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="resources/footer-img.webp" class="img-fluid" alt="Image" style="height: 500px;">
                </div>
                <div class="col-lg-6">
                <h2  class="section-heading text-center" style="font-size: 80px;">Download the Vaid app</h2>
                    <p>
                    Access video consultation with India’s top doctors on the Vaid app. Connect with doctors online, available 24/7, from the comfort of your home.                    </p>
                    <button class="btn btn-start">Download Now</button>                
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
