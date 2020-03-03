<!--
    This is the Sign up  Doc Created By Erika Fermin 9/2/2018
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- the google font "source sans pro"-->
    <link 
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" 
        rel="stylesheet">
    <!-- the google font "Encode sans condensed-->
    <link 
        href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" 
        rel="stylesheet">
        <title>Sign Up for Outcome Data Software Testing</title>
    <!-- Latest compiled and minified CSS -->
    <link 
        rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link 
        rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" 
        crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/LogoFlowerCutout.png">
</head>
<!--Angular JS-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
<!-- jQuery library -->
<script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<!-- Latest compiled JavaScript -->
<script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<!--My custom js -->
<script src="js/quote.js"></script>
<body style="margin-top:50px">
    <nav class="navbar ">
        <div class="container-fluid" id="navBanner">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"><i class="fas fa-bars" style="color: #ddd;"></i></span>                      
              </button>
              <img src="assets/LogoFlowerCutout.png" class="img-fluid navbar-brand" alt="Responsive image" style="width:10%; height:10%; margin: 0%; padding: 0%;">
              <a class="navbar-brand" href="index.html"><font size="5">Blossomtree Software</font></a>
            </div>
           <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="./index.html#Services">Our Services</a></li>
                <li><a href="./index.html#about_us">About Us</a></li>
                <li><a href="SignUp.php">Sign Up For Demo</a></li>
                <li><a href="meetTeam.html">Meet the Team</a></li>
                
              </ul>
            </div>
        </div>
    </nav>
    <header class="container" style="background: linear-gradient(rgba(0, 0, 53, 0.8),rgba(1, 1, 53, 0.8)), 
        url(assets/test4.jpg) no-repeat center center fixed;height: auto; 
        display:block;
        background-size: cover;  
    overflow: hidden;   padding: 12%;width: 100%; height: auto;">
        <h1 class="img-overlay " id="specialHeading" >
            Sign Up for Demo of Cloud Solutions for Behavioral Health
        </h1>
    </header>
        <!--Form/BackGround & Content-->
        <div class="container" id="card_back" style="padding:0%;background-color: white; width: 100%;">
            <div class="row">
                <h1><img src="assets/LogoFlowerCutout.png" class="img-fluid" alt="Responsive image" style="width:10%; height:10%; margin: 0%; padding: 0%;">Sign Up for Outcome Data Software Testing</h1>
            </div>
            <div class="row ml-2">
              <div class="col-sm-12" style="position:center; padding-left: 8%; padding-right: 8%; margin-left: 2%;  margin-bottom: 4%;">
                  <section class="col-sm-2"></section>
                  <font size="4" class="mx-3">
                  <p class="col-sm-11 mx-3">
                    Dear Reader,
                    <br/>
                    <br/>
                    Alpha and beta testing of outcome data software for behavioral
                    therapists and mental health clinics specializing in neurofeedback
                    therapy, counseling, and sensory integrations to help improve the
                    lives of children and their parents, will be conducted from October
                    through December 2018. If you are interested in beta testing
                    the software we have designed and built, please leave your
                    name, company name, address, phone, email address, and a
                    detailed message stating your interest below this statement.
                    We encourage all interested behavioral therapists and clinics
                    to give us feedback once beta testing has taken place. Our
                    software is a software as a service (SaaS) and is highly
                    secure for HIPAA compliance. Incentives will be given to
                    beta-testers and the company they work with.
                  </p>
                   <p class=" col-sm-11 mx-3">
                    We are thankful to Neurofeedback and Counseling of Utah for
                    their full cooperation and desire to bring a fully automated
                    outcome data software on the market to make statistical change,
                    to help improve and refine therapeutic interventions, and to better
                    the lives and relationships with their clients. Our goal is to help
                    and serve our clients with the utmost respect and trust.
                  </p>
                   <p class="col-sm-11 p-5 m-5">
                    <br/>
                    <strong>If you have any questions or want to learn more about our
                    services, please contact us at 801-391-3676 or email us at
                    support@blossomtreesoftware.biz.</strong><br/>
                    Thank you very much!<br/>
                    Sincerely,<br/>
                    Bryan K. Sherman<br/>
                    President &amp; CEO<br/>
                    Blossomtree Software, LLC<br/>
                  </p>
                </font>
                <section class="col-sm-1"></section>
                
              </div>
                <form class="m-2" action="contactform.php" method="post">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="First Name" name="firstname"required>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Last Name" name="lastname"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Company Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Company Name" name="company"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address Line 1</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Address Line 1" name="Address1"required>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Adderess Line 2</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Address Line 2" name="Address2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="City" name="City"required>
                        </div>
                        <label for="inputPassword3" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="State" name="State"required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">ZIP Code</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="ZIP" name="ZIP"required>
                        </div>
                         <label for="inputPassword3" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Country" name="Country"required>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="Phone" class="form-control" id="inputEmail3" name="phone" placeholder="Phone"required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="mail" placeholder="Email"required>
                        </div>
                    </div>
                    
                  
                    
                    <div class="form-group row">
                        <label for="Subject" class="col-sm-2 col-form-label" >Subject</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSubject3" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Additional Comments:</label>
                        <textarea class="form-control m-0 ml-sm-3" name="message" rows="3" style="height:auto; margin-left: 8%; max-width: 75%; padding:0%; display: block;"></textarea>
                    </div>
                    <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</form>


       <!--Footer-->
        <div class="nav navbar-nav col-sm-12" style="margin-left:-35%;background-color:#002952; color:white; width:200%;">
           
                            <div class="content col-sm-12" id="footer" style="margin-left:35%;">
               
                                <ul>
                                    <li><h4>Follow Us on our Social Media</h4></li> 
                                </ul>
                                <!-- Facebook -->
                                <a class="fb-ic" href=""><i class="fab fa-facebook-square" style="font-size:110px;"></i>
                                </a>
                                  <!-- Twitter -->
                                 <a class="tw-ic" href="https://twitter.com/BlossomtreeSof1">
                                <i class="fab fa-twitter-square" style="font-size:110px;"></i>
                                </a>
                                  <!--Linkedin -->
                                 <a class="li-ic" href="https://www.linkedin.com/company/blossomtree-software/">
                                <i class="fab fa-linkedin" style="font-size:110px;"></i>
                                </a>

                                <p> © 2018 Copyright;
                                <a href="http://www.blossomtreesoftware.biz/"> blossomtreesoftware.biz</a>
                                </p>
                        </div>
        </div>
</body>

</html>