<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cliqhealthcare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
        <div class="bg-img">
            <nav class="navbar navbar-expand-sm navbar-light navbar-custom">
                <div class="container-fluid ">
                  <a class="navbar-brand " href="index.php"> <div class="logo">
                    <img src="assets/logo1.png">
                </div></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <div class="container animated fadeIn">

            <div class="row">
              <h1 class="header-title mt-3"> Contact </h1>
              <hr>
              <div class="col-sm-12 d-flex justify-content-center mt-2" id="parent">
                <div class="col-sm-6">
                <form action="form.php" class="contact-form" method="post" onsubmit="return validateForm()">
    <div class="form-group mb-2">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
    </div>
    <div class="form-group mb-2 form_left">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
    </div>
    <div class="form-group mb-2">
        <input type="text" class="form-control" id="phone" name="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
    </div>
    <div class="form-group mb-2">
        <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
        <br>
        <button class="btn btn-primary"> <span class="glyphicon glyphicon-send"></span> Send </button>
    </div>
</form>

            <script>
                function validateForm() {
                    // add your form validation code here
                    // ...

                    // show an alert message after the form is submitted
                    alert("Thank you for your message!");
                    return true;
                }
            </script>

                   </div>
              </div>
             </div>
          
          <div class="container second-portion">
            <div class="row">
                  <!-- Boxes de Acoes -->
                <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">							
                  <div class="icon">
                    <div class="image"><i class="fa fa-envelope mt-3" aria-hidden="true"></i></div>
                    <div class="info">
                      <h3 class="title mt-3">MAIL & WEBSITE</h3>
                      <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
                        <br>
                        <br>
                        <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
                      </p>
                    
                    </div>
                  </div>
                  <div class="space"></div>
                </div> 
              </div>
                
                  <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">							
                  <div class="icon">
                    <div class="image"><i class="fa fa-mobile mt-3" aria-hidden="true"></i></div>
                    <div class="info">
                      <h3 class="title mt-3">CONTACT</h3>
                        <p>
                        <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                        <br>
                        <br>
                        <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-756706XXXX
                      </p>
                    </div>
                  </div>
                  <div class="space"></div>
                </div> 
              </div>
                
                  <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">							
                  <div class="icon">
                    <div class="image"><i class="fa fa-map-marker mt-3" aria-hidden="true"></i></div>
                    <div class="info">
                      <h3 class="title mt-3">ADDRESS</h3>
                        <p>
                         <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot 
                         "Shree Krishna Krupa", Rajkot - 360001.
                      </p>
                    </div>
                  </div>
                  <div class="space"></div>
                </div> 
              </div>		    
              <!-- /Boxes de Acoes -->
              
              <!--My Portfolio  dont Copy this -->
                
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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
    </footer> 
</body>

</html>