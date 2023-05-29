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
        <div class="formbold-main-wrapper">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <div class="formbold-form-wrapper">
              
              <form action="ud.php" method="POST">
                <div class="formbold-mb-5">
                  <label for="name" class="formbold-form-label"> Full Name </label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Full Name"
                    class="formbold-form-input"
                  />
                </div>
                <div class="formbold-mb-5">
            <label for="phone_no" class="formbold-form-label"> Phone Number </label>
            <input
              type="text"
              name="phone_no"
              id="phone_no"
              placeholder="Enter your phone number"
              class="formbold-form-input"
            />
          </div>

                <div class="formbold-mb-5">
                  <label for="email" class="formbold-form-label"> Email Address </label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    class="formbold-form-input"
                  />
                </div>
                <div class="flex flex-wrap formbold--mx-3">
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5 w-full">
                      <label for="date" class="formbold-form-label"> Date </label>
                      <input
                        type="date"
                        name="date"
                        id="date"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                  <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <label for="time" class="formbold-form-label"> Time </label>
                      <input
                        type="time"
                        name="time"
                        id="time"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
          
                <div class="formbold-mb-5 formbold-pt-3">
                  <label class="formbold-form-label formbold-form-label-2">
                    Address Details
                  </label>
                  <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input
                          type="text"
                          name="area"
                          id="area"
                          placeholder="Enter area"
                          class="formbold-form-input"
                        />
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input
                          type="text"
                          name="city"
                          id="city"
                          placeholder="Enter city"
                          class="formbold-form-input"
                        />
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                      <div class="formbold-mb-5">
                        <input
                          type="text"
                          name="state"
                          id="state"
                          placeholder="Enter state"
                          class="formbold-form-input"
                        />
                      </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                    <div class="formbold-mb-5">
                      <input
                        type="text"
                        name="pincode"
                        id="pincode"
                        placeholder="Pin Code"
                        class="formbold-form-input"
                      />
                    </div>
                  </div>
                </div>
                </div>
                <div class="formbold-mb-5">
                  <label for="Problem" class="formbold-form-label"> Problem </label>
                  <input
                    type="Problem"
                    name="Problem"
                    id="Problem"
                    placeholder="Enter your Problem"
                    class="formbold-form-input"
                  />
                </div>
                <div class="formbold-mb-5">
                  <label for="Specialist" class="formbold-form-label"> Specialist </label>
                  <select class="form-control form-control">
                  <option></option>
                  <option>Cancer Oncology</option>
                  <option>Cardiologist</option>
                  <option>Neurologist</option>
                  <option>Diabetology</option>
                  <option>Pulmonologist</option>
                  <option>Infectious Disease</option>
                </select>
                </div>
                <div>
                  <button class="formbold-btn">Book Appointment</button>
                </div>
              </form>
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>