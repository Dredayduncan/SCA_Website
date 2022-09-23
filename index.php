<?php

    if (isset($_GET['newsletter'])){
        if ($_GET['newsletter'] == "true"){
            echo "<script>
            
                alert('Newsletter has been sent');
            
            </script>";
        }
        else{
            echo "<script>alert('Newsletter could not been sent')</script>";
        }
        
        echo "<script>
        
            var url= document.location.href;
            window.history.pushState({}, '', url.split('?')[0]);
        
        </script>";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Spear Capital & Advisory Services Limited</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/SCAlogo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/venobox/venobox.css" rel="stylesheet"> -->
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <img class="logo" src="assets/img/SCAlogo.png" alt="SCA logo">

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Who We Are</a></li>
          <li><a href="#about-boxes">Our Values</a></li>
          <li><a href="#clients">Our Clients</a></li>
          <li><a href="#features">Our Services</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <!-- <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Plan. Launch. Grow.</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div> -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/SCA WP.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/SCA WP2.jpeg" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div> -->
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/SCA_PNG.png" class="img-fluid" alt="">

          </div>

          <div class="col-lg-5 pt-3 pt-lg-0 content">
            <h3>Our Firm</h3>
            <p>
            Spear Capital & Advisory (SCA) is a Ghanaian early stage investing, financial advisory and consulting firm setup to achieve the purpose of supporting
            the following enterprises through the process of seed, pre-seed, early stage investing and impact investing:

            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Early Stage Companies</li>
              <li><i class="bx bx-check-double"></i> Sole Proprietorships.</li>
              <li><i class="bx bx-check-double"></i> Small & Medium Enterprises.</li>
            </ul>
            <p>
              Working together with our clients, we aspire to present the best possible solutions, 
              outlining the opportunities available while considering the inherent risks. 
              Our strategic growth plans are cognisant of the dynamics within the client industry;
              therefore are fully agile, allowing our clients to execute achieving the highest impact possible.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">

        
        <div class="section-title">
          <h2>Values</h2>
          <p>Our Values</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/Our Mission.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">
                  To identify the peculiar needs of our clients through discussions, sourcing the best investment i.e. 
                  equity or debt structure, being a strategic partner in the growth of these early stage companies. 
                  The client aspirations fuel our passion to see them becoming the leaders in their chosen industries, 
                  offering tangible yet practical solutions. Our mission statement is our fuel; our clients are the vehicle, 
                  so together, we create the ultimate driving force built for every challenge. Each client is treated as unique, 
                  offering bespoke solutions.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/Our Values.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-scales-3-fill"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Values</a></h5>
                
                <!-- <p class="card-text "> -->
                  <ul>
                    <li><i class="bx bx-check-double"></i> 
                      <strong>Ubuntu:</strong> 
                      We consider what critical success factors are for our client ensuring that together, we achieve the goals.
                       Together, we can achieve more.
                      </li>
                    <li><i class="bx bx-check-double"></i> 
                      <strong>Trust:</strong> 
                      We continuously involve our clients in the process, 
                      devoting time and resources while communicating clearly on progress made.
                    </li>
                    <li><i class="bx bx-check-double"></i> 
                      <strong>Integrity:</strong>To be honest, truthful and stick to high ethical frameworks of our chosen fields, 
                      we ensure that our work ethics are maintained at all times.
                    </li>
                  </ul>
                  
                <!-- </p> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/Our Vision.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-eye-fill"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">
                At Spear Capital & Advisory, our vision encapsulates the desire to see early stage businesses, sole proprietorships, 
                small & medium enterprises expand to become dominant market leaders. 
                We do this by providing financial advisory and corporate strategic guidance for each client we interact with.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Boxes Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="about-boxes">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
          <p>Our Clients</p>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/Sole Proprietorship.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-user-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Early Stage Businesses & Sole Proprietorships</a></h5>
                <p class="card-text">Most major firms in this world began as sole proprietorships. The aspirations of one person to solve a unique problem by providing a service to humanity, is the reason why every firm exists. We at Spear Capital & Advisory are aware not every vision was or has been realised. We acknowledge the unique circumstances early stage business owners and sole proprietorships face seeing the vision evolve into viable businesses. <br><br>
                    This is where we come in. Using a structured business ideation process, we fully support early stage business owners & sole proprietorships gain a solid footing in their identified industries. For existing businesses, in need of coaching and support to
                        navigate the business environment, we provide corporate strategic guidance
                        that will give them the requisite tools to achieve their dreams
              
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/SME.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-building-fill"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""> Small & Medium Enterprises</a></h5>
                <p class="card-text">The small & medium enterprise market is interesting in the opportunities and challenges it provides. The SME industry is considered to be the driving force of growth in any country. Every small & medium enterprise faces the arduous task of remaining viable while attempting to scale up, reaching a wider customer base. When done right, the firm can organically scale up its products(s) and/or service(s) offering to meet with the rising demand.
                    <br><br>At Spear Capital & Advisory, we present the client aspiration-led value proposition that executes on its core mandate - helping clients sustainably and profitably scale up. We believe by doing this, the client makes an informed decision that incorporates an analysis of the objective, the roadmap to fulfilling it, the associated risks, how to mitigate those risks and the best possible returns.
                 
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Our Services</p>
        </div>

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a id="serv1" class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Early Stage Investing & Financial Advisory </h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a id="serv2" class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Corporate Strategy</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Early Stage Investing & Financial Advisory</h3>
                <p >
                At Spear Capital & Advisory, we recognise that after a long period of bootstrapping, there is the need for injection of debt or equity capital into the business.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i>Thus, we scout for the best possible funding under favourable terms for the client. 
                  That way, we don’t leave the client half way through the journey hoping they’re able to get to the finish line.</li>
                </ul>
                <p>
                We appreciate that it may be difficult for our clients to have a partner that provides prudent corporate advice on navigating 
                the industry while having a firm grip on the sound financial management.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Therefore, as a key pillar in our service offering, we leverage on our knowledge 
                  of the financial markets and global economy with proven research to present the best advisory ideas to our clients.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Corporate Strategy</h3>
                <p>
                  Achieving a high level of growth within any industry requires a deliberate plan built to deliver sustainable results for long term.
                  Many early stage business owners & SME businesses begin with a solution for a problem within a small context. However, as the business grows,
                  tact is required especially when scalability of solutions is brought into the discussion.
                </p>
             
                <ul>
                  <li><i class="ri-check-double-line"></i> We deliver to our clients, scalable, agile and goal oriented corporate strategies that fully incorporate all the requirements of a corporate strategic plan.</li>
                  <li><i class="ri-check-double-line"></i> We consider the strengths and weaknesses of the business, the possible risks internal and external, then fully discuss the outcomes with the client.</li>
                  <li><i class="ri-check-double-line"></i> We incorporate relevant data to support our corporate strategic plan to show possible results that are relatable to the client.</li>
                </ul>

                <p >Once agreed, we develop a project plan taking into account all the necessary risks to deliver this strategy with the desired results.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

    <div class=" section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p> No 17, Citrus Street, Community 20, Lashibi, Ghana<br></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@spearcapitaladvisory.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>(+233) 054 833 0423</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Spear Capital & Advisory Services Ltd.</h3>
              <p>
                No 17, Citrus Street <br>
                Community 20, Lashibi, Ghana<br><br>
                <strong>Phone:</strong> (+233) 054 833 0423<br>
                <strong>Email:</strong> info@spearcapitaladvisory.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/SpearCapital_?s=20"  target="_blank" class="twitter"><i class="bx bxl-twitter" ></i></a>
                <a href="https://www.linkedin.com/company/scasltd/" target="_blank" class="linkedin"><i class="bx bxl-linkedin" ></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Who We Are</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about-boxes">Our Values</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#clients">Our Clients</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Our Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a id="servLink1" href="#features">Corporate & Financial Advisory</a></li>
              <li><i class="bx bx-chevron-right"></i> <a id="servLink2" href="#features">Corporate Strategy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a id="servLink3" href="#features">Project Management</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Sign up here to get the latest news, updates and special offers delivered to your inbox.</p>
            <form id="newsletter" action="forms/contact.php" method="post">
              <input type="email" name="newsEmail"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#header" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>