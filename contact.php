<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

           <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

</head>
<body class="body">
    

 <header>
       <div class="header">
        <nav>

       <div class="sidebar">
        <nav>
            <ul>
               <a id="i-cross" href="#"><li onclick=hideSidebar()><i id="i-move" class="fa-solid fa-xmark"></i></li></a>
               
                <a href="index.php"><li><i class="fa-solid fa-cookie"></i> Home</li></a>
                  <a href="service.php"><li class="hide">Services</li></a>
                <a href="about.php"><li><i class="fa-solid fa-burger"></i>  About Me</li></a>
                <a href="projects.php"><li><i class="fa-solid fa-kitchen-set"></i> Projects</li></a>
                  <a href="skills.php"><li><i class="fa-solid fa-cookie"></i> Skills</li></a>
            </ul>
        </nav>
       </div>


     <a id="i-menu" href="#"><li class="menu-show" onclick=showSidebar()><i class="fa-solid fa-bars"></i></li></a> 
     
        <div class="meals">
            <h4>ezekell.dev</h4>
        </div>

            <ul>
                 <a href="index.php"><li class="hide">Home</li></a>
                 <a href="service.php"><li class="hide">Services</li></a>
                  <a href="about.php"><li class="hide">About Me</li></a>
                <a href="projects.php"><li class="hide">Projects</li></a>
                <a href="skills.php"><li class="hide">Skills</li></a>
           
            </ul>

        </nav>
       </div>

   </header>
<br><br>




<!-- CONTACT SECTION -->
<section class="contact-section">

  <div class="contact-container">

    <!-- LEFT SIDE -->
    <div class="contact-info">

      <h6>GET IN TOUCH</h6>

      <h1>
        Let's work <br>
        together
      </h1>

      <p>
        I'm open to full-stack and mobile application projects,
        short or long-term collaborations, e-commerce solutions,
        product redesigns, or simply offering a second pair of eyes.
        Let’s talk.
      </p>

      <div class="contact-links">

        <p>
          <i class="fa-solid fa-envelope"></i>
          hello@ezekell.dev
        </p>

        <p>
          <i class="fa-brands fa-linkedin"></i>
          linkedin.com/in/ezekell
        </p>

        <p>
          <i class="fa-brands fa-github"></i>
          github.com/ezekell
        </p>

      </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="contact-form-wrapper">

      <form action="" method="POST">

        <input
          type="text"
          name="name"
          class="form-control"
          placeholder="Your Name"
          required
        >

        <input
          type="email"
          name="email"
          class="form-control"
          placeholder="Your Email"
          required
        >

        <input
          type="text"
          name="subject"
          class="form-control"
          placeholder="Subject"
          required
        >

        <textarea
          name="message"
          class="form-control"
          rows="6"
          placeholder="Your Message"
          required
        ></textarea>

        <button type="submit" class="btn submit-btn">
          Send Message
        </button>

      </form>

    </div>

  </div>

</section>





<!-- FOOTER -->
<footer class="portfolio-footer">

  <div class="footer-content">

    <h3>ezekell.dev</h3>

    <p>
      Software Engineer & Full Stack Developer building modern web and mobile experiences.
    </p>

    <div class="footer-socials">

      <a href="#">
        <i class="fa-brands fa-github"></i>
      </a>

      <a href="#">
        <i class="fa-brands fa-linkedin-in"></i>
      </a>

      <a href="#">
        <i class="fa-brands fa-twitter"></i>
      </a>

    </div>

    <small>
      © 2026 ezekell. All rights reserved.
    </small>

  </div>

</footer>






<script src="assets/js/all.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>