<?php
$alert_class = '';
$message = '';
?>

<html>

<head>


  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="loginPage.css">
  <title>cliqhealthcare</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- <header class="header"> -->
  <div class="bg-img">
    <nav class="navbar navbar-expand-sm navbar-light navbar-custom">
      <div class="container-fluid ">
        <a class="navbar-brand " href="index.php">
          <div class="logo">
            <img src="assets/logo1.png">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="team.html">Our Team</a>
            </li>	
            <li class="nav-item">
              <a class="nav-link" href="health-info.html">Health Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-xl-6 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <!-- <div class="card-img-left d-none d-md-flex"> -->
          <!-- Background image for card set in CSS! -->
          <!-- </div> -->
          <div class="card-body p-4 p-sm-5">
            <h2 class="card-title text-center mb-5 fw-light fs-5">Register</h2>
            <form method="POST" action="reg.php">
           
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required autofocus>
        <label for="name">Name</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Your email address">
        <label for="email">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number">
        <label for="phone">Phone number</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="address" name="address" placeholder="Your address" required>
        <label for="address">Address</label>
    </div>
    <hr>
    <div class="form-floating mb-3">
        <select class="form-select" aria-label="Gender" id="Gender" name="Gender">
            <option selected></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <label for="Gender">Gender</label>
    </div>
    <div class="form-floating mb-3">
        <select class="form-select" aria-label="Marital status" id="marital_status" name="marital_status">
            <option selected></option>
            <option value="married">Married</option>
            <option value="unmarried">Unmarried</option>
        </select>
        <label for="marital_status">Marital status</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
        <label for="password">Password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
        <label for="confirm_password">Confirm password</label>
    </div>
    <hr>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Reason for registration" id="reason_for_registration" name="reason_for_registration"></textarea>
        <label for="reason_for_registration">Reason for registration</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Additional notes" id="additional_notes" name="additional_notes"></textarea>
        <label for="additional_notes">Additional notes</label>
    </div>
    <div class="d-grid mb-2">
    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
    <?php if (!empty($message)): ?>
    <div class="alert <?php echo $alert_class; ?> mt-3" role="alert">
        <?php echo $message; ?>
     
        <?php endif; ?>
     </div>
    <!-- <div class="flex items-center justify-center h-screen">
      <div>
        <div class="flex flex-col items-center space-y-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h1 class="text-4xl font-bold">Thank You !</h1>
            <p>Thank you for your interest! Check your email for a link to the guide.</p>
            <a
              class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 border border-indigo-600 rounded rounded-full hover:bg-indigo-700 focus:outline-none focus:ring">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
              </svg>
              <span class="text-sm font-medium">
                Home
              </span>
            </a>
        </div>
      </div>
    </div> -->
</form>


              <a class="d-block text-center mt-2 small" href="login.php">Have an account? Sign In</a>

              <hr class="my-4">

              <!-- <div class="d-grid mb-2">
                      <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                        <i class="fab fa-google me-2"></i> Sign up with Google
                      </button>
                    </div>
      
                    <div class="d-grid">
                      <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                        <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                      </button>
                    </div> -->

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--container end.//-->
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
              info@example.com
            </p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +91 9751312574</p>
          </div>

  </body>
</html>