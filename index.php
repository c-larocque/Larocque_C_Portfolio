<?php
  //Error reporting for MAMP and WAMP - REMOVE THIS BEFORE PLACING ON LIVE SITE
  //ini_set('display_errors',1);
  //error_reporting(E_ALL);

  require_once("admin/scripts/mail.php");

  if(isset($_POST['name'])) {
  $direct = "thankyou.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  //echo $direct."<br>".$name."<br>".$email."<br>".$message;
  $sendMail = submitMessage($direct, $name, $email, $phone, $message);
  }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Carolyn Larocque | Portfolio</title>
   <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
   <link href="css/vendor/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600%7COpen+Sans:300,400" rel="stylesheet" type="text/css">
   <link href="css/css/main.css" rel="stylesheet" type="text/css" media="screen">
 </head>

 <body>
   <div id="mainSiteCon">
     <h1 class="hide">Carolyn Larocque's Portfolio</h1>

     <header id="mainHeader">
       <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
         <h3 class="hide">Site Navigation</h3>
         <div class="container">
           <!-- Navigation -->
           <div class="navbar-header page-scroll">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavigation">
               <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
             </button>
             <a href="#" class="navbar-brand">
               <img src="images/logo.svg" height="63" width="50" alt="Carolyn Larocque Logo">
             </a>
           </div>

           <div class="collapse navbar-collapse" id="mainNavigation">
             <ul class="nav navbar-nav navbar-right">
               <li>
                 <a class="navLinks" href="#portfolioCon">PORTFOLIO</a>
               </li>
               <li>
                 <a class="navLinks" href="#aboutMeCon">ABOUT</a>
               </li>
               <li>
                 <a class="navLinks" href="#contactCon">CONTACT</a>
               </li>
             </ul>
           </div>
         </div>
       </nav>
     </header>

     <!-- Main Banner -->
     <section class="jumbotron" id="mainBannerCon" tabindex="-1">
       <h2 class="hide">Main Banner</h2>
       <div class="container">
         <div class="row" id="bannerText">
           <div class="col-xs-12 col-sm-6" id="helloText">
             <h3>HELLO!</h3>
           </div>
           <div class="col-xs-12 col-sm-6" id="introText">
             <p>MY NAME IS CAROLYN LAROCQUE</p>
             <p>AND I MAKE THINGS.</p>
           </div>
         </div>
       </div>
     </section>

     <!-- Portfolio Grid Section -->
    <section id="portfolioCon" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row" id="portfolioGrid"></div>
      </div>
    </section>

    <!-- Portfolio Lightbox -->
    <div id="projectLightbox" class="container">
      <i class="fa fa-times" aria-hidden="true" id="closeLB" class="closeLightbox"></i>
      <div id="lightboxContent">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h2 class="projectName">Project Name</h2>
            <img src="images/default.jpg" alt="Project Image" class="projectImage img-responsive">
            <p class="projectInfo">Project Information</p>
            <a href="http://carolynlarocque.com/#portfolioCon">LEARN MORE ></a>
          </div>
        </div>
      </div>
    </div>

     <!-- About Me Section -->
     <section class="container-fluid" id="aboutMeCon">
       <div class="container">
         <div class="row">
           <div class="col-xs-12 col-md-10 col-md-offset-1">
             <h2>Who is Carolyn?</h2>
             <p>Hi there, I'm Carolyn! I am a 22-year-old student currently finishing my last year in a collaborative program split between Western University and Fanshawe College called Media Theory and Production. Following graduation, I will hold a Bachelor of Arts in Media Information and Technoculture from Western University, and an Ontario College Diploma in Interactive Media Design from Fanshawe College. Being an Alberta raised girl I can always find the beauty in whatever my surroundings may be. I am excited by learning new things and taking my skills to another level. Web development. Graphic design. Branding collateral. These are just a few of the areas I have experience in.</p>
           </div>
         </div>
       </div>
     </section>

     <!-- Contact Section -->
     <section id="contactCon" class="container-fluid">
       <div class="container">
         <div class="row">
           <div class="col-sm-8 col-sm-offset-2">
             <form id="contactForm" action="index.php" method="post">
               <h2>Get In Touch</h2>
               <div class="form-group">
                 <label for="name" class="sr-only">Name</label>
                 <input name="name" type="text" class="form-control" placeholder="Name" id="name" required>
               </div>
               <div class="form-group">
                 <label for="email" class="sr-only">Email Address</label>
                 <input name="email" type="email" class="form-control" placeholder="Email Address" id="email" required>
               </div>
               <div class="form-group">
                 <label for="phone" class="sr-only">Phone Number</label>
                 <input name="phone" type="tel" class="form-control" placeholder="Phone Number" id="phone" required>
               </div>
               <div class="form-group">
                 <label for="message" class="sr-only">Message</label>
                 <textarea name="message" rows="5" class="form-control" placeholder="Message" id="message" required></textarea>
               </div>
               <button name="submit" type="submit" class="btn btn-default" id="formButton">Send</button>
             </form>
           </div>
         </div>
       </div>
     </section>

     <!-- Footer -->
     <footer class="container-fluid">
       <h2 class="hide">Site Footer</h2>
       <div class="row">
         <div class="col-xs-12" id="socialLinks">
           <h3>Find Me Online</h3>
           <ul class="list-inline">
             <li>
               <a target="_blank" href="https://twitter.com/carolynlarocque" class="buttonIcon"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
             </li>
             <li>
               <a target="_blank" href="https://www.instagram.com/carolynlarocque/" class="buttonIcon"><span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i></a>
             </li>
             <li>
               <a target="_blank" href="https://www.linkedin.com/in/carolyn-larocque-45525b13b/" class="buttonIcon"><span class="sr-only">LinkedIn</span><i class="fa fa-fw fa-linkedin"></i></a>
             </li>
             <li>
               <a target="_blank" href="https://github.com/c-larocque" class="buttonIcon"><span class="sr-only">GitHub</span><i class="fa fa-fw fa-github"></i></a>
             </li>
           </ul>
         </div>
       </div>
     </footer>

     <section id="copyright" class="container-fluid">
       <h2 class="hide">Copyright</h2>
       <div class="container">
         <div class="row">
           <div class="col-xs-12">
             <p>&copy; 2018 Carolyn Larocque</p>
             <a href="#mainSiteCon">BACK TO TOP</a>
           </div>
         </div>
       </div>
     </section>

   </div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/vendor/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     <script src="js/main.js"></script>

 </body>

 </html>
