
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="load.css">
    <title>cliqhealthcare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- <header class="header"> -->
<?php
session_start();
if (isset($_SESSION['id'])) {
  $userId = $_SESSION['id'];
  $conn = mysqli_connect("localhost", "username", "password", "database");
  $query = "SELECT name FROM users WHERE id = '$userId'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
}
?>
<div class="bg-img">
  <nav class="navbar navbar-expand-sm navbar-light navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <div class="logo">
          <img src="assets/logo1.png">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="team.php">Our Team</a>
  </li>	
  <li class="nav-item">
    <a class="nav-link" href="health-info.php">Health Information</a>
  </li>	
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact us</a>
  </li>
  
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
       
</ul>

      </div>
    </div>
  </nav>
</div>

<div class="container text-center">
    <?php
    if (isset($_SESSION['registered']) && $_SESSION['registered']) {
        // Show login form if user is registered
        echo '<div class="row">
                  <div class="col se-di log-in">
                      <a href="book.php" class="search">Appointment</a>
                      <span><i class="fa fa-long-arrow-right fa-1x" aria-hidden="true"></i> </span>
                  </div>
              </div>';
    } else {
        // Show registration link if user is not registered
        echo '<div class="row">
                  <div class="col se-di log-in">
                      <a href="book.php" class="search">Appointment</a>
                      <span><i class="fa fa-long-arrow-right fa-1x" aria-hidden="true"></i> </span>
                  </div>
              </div>';
    }
    ?>
</div>



    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
                <h1> Why choose
                    cliq health care?
                </h1>
                <a class="btn btn-primary rounded-pill" href="load.html" role="button">Learn more</a>
            </div>
            <div class="col-8 mt-5">
                <div class="row">
                    <div class="col-6 ">
                        <div class="card border-top">
                            <img src="assets/png1.png" class="png1-image" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">More experience</h3>
                                <p class="card-text">The thousands patients we treat each year prepares us to treat the
                                    one who matters most — you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="card border-top">
                            <img src="assets/png2.png" class="png2-image" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">The right answers</h3>
                                <p class="card-text">Count on our experts to deliver an accurate diagnosis and the right
                                    plan for you the first time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card border-top">
                            <img src="assets/png3.png" class="png3-image" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">You come first</h3>
                                <p class="card-text">Treatment at cliq health care is a truly human experience. You're
                                    cared for as a person first.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card border-top">
                            <img src="assets/png4.png" class="png4-image" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Innovation with impact</h3>
                                <p class="card-text">All of our patient care, education and research are driven to make
                                    discoveries that can help heal you.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col cov-19 mt-3">
                <h2> COVID-19
                    updates
                </h2>
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.
                    Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover
                    without special treatment. However, some will become seriously ill and require medical attention.
                </p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h2> TREATMENTS
                </h2>
                <!-- <p>Check our COVID-19 resource center for patient and visitor guidelines and trusted health information.</p> -->
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4">
                <div class="card border p-2 treatment-hght" >
                    <img src="assets/png5.png" class="card-img-top trt-img-1" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CANCER</h5>
                        <p class="card-text text-justify">Cancer is a life-threatening disease in which some of the body's cells grow
                            uncontrollably and spread to other parts of the body.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border p-2 treatment-hght" >
                    <img src="assets/png6.png" class="card-img-top trt-img-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CARDIOVASCULAR DISEASE</h5>
                        <p class="card-text text-justify">Cardiovascular disease refers to conditions that affect the heart and blood
                            vessels. These include: coronaryheart disease, congenital heart disease, rheumatic heart
                            disease, peripheral arterial disease and deep vein thrombosis and pulmonaryembolism.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border p-2 treatment-hght" >
                    <img src="assets/png7.png" class="card-img-top trt-img-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">STROKE</h5>
                        <p class="card-text text-justify">A stroke occurs when something blocks blood supply to part of the brain or
                            when a blood vessel in the brain bursts.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card border p-2 treatment-hght" >
                    <img src="assets/png8.png" class="card-img-top trt-img-4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">DIABETES
                        </h5>
                        <p class="card-text text-cente">Diabetes is a chronic condition that either occurs when the pancreas are
                            unable to produce enough insulin or when the body is unable to effectively utilize the
                            insulin it produces.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border p-2 treatment-hght" >
                    <img src="assets/png9.png" class="card-img-top trt-img-5" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">TUBERCULOSIS (TB)</h5>
                        <p class="card-text text-justify">Cardiovascular disease refers to conditions that affect the heart and blood
                            vessels. These include: coronaryheart disease, congenital heart disease, rheumatic heart
                            disease, peripheral arterial disease and deep vein thrombosis and pulmonaryembolism.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border p-2 treatment-hght" >
                    <img src="assets/png10.png" class="card-img-top trt-img-6" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HIV/AIDS</h5>
                        <p class="card-text text-justify">Acquired immunodeficiency syndrome (AIDS) is a chronic, potentially
                            life-threatening condition caused by the human immunodeficiency virus (HIV). By damaging
                            your immune system, HIV interferes with your body's ability to fight infection and disease.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted footer-bg">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <h4>
              Cliq Health Care
            </h4>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="about.html" class="text-reset">About</a>
            </p>
            <p>
              <a href="contact.html" class="text-reset">Contact</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fa fa-home" aria-hidden="true"></i> Chennai, IBM, India</p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              cliqhealthcare@gmail.com
            </p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +91 9751312574</p>
          </div>
</body>
</html>