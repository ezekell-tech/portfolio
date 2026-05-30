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
                  <a href="contact.php"><li><i class="fa-solid fa-cookie"></i> Contact</li></a>
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
                <a href="contact.php"><li class="hide">Contact</li></a>
           
            </ul>

        </nav>
       </div>

   </header>
<br><br>



<!-- SKILLS SECTION -->
<section class="skills-section">
  <div class="container">
    
    <div class="section-title">
      <h2>My Skills</h2>
      <p>Technologies and tools I use to build modern web applications and e-commerce solutions.</p>
    </div>

    <div class="skills-grid">

      <!-- Frontend -->
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fa-brands fa-html5"></i>
        </div>

        <h3>Frontend Development</h3>

        <div class="skill">
          <div class="skill-info">
            <span>HTML</span>
            <span>95%</span>
          </div>
          <div class="progress-bar">
            <div class="progress html"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>CSS</span>
            <span>90%</span>
          </div>
          <div class="progress-bar">
            <div class="progress css"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>JavaScript</span>
            <span>85%</span>
          </div>
          <div class="progress-bar">
            <div class="progress js"></div>
          </div>
        </div>
      </div>

      <!-- Backend -->
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fa-solid fa-server"></i>
        </div>

        <h3>Backend Development</h3>

        <div class="skill">
          <div class="skill-info">
            <span>PHP</span>
            <span>90%</span>
          </div>
          <div class="progress-bar">
            <div class="progress php"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Python / Django</span>
            <span>85%</span>
          </div>
          <div class="progress-bar">
            <div class="progress django"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>REST APIs</span>
            <span>80%</span>
          </div>
          <div class="progress-bar">
            <div class="progress api"></div>
          </div>
        </div>
      </div>

      <!-- Database -->
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fa-solid fa-database"></i>
        </div>

        <h3>Database Management</h3>

        <div class="skill">
          <div class="skill-info">
            <span>MySQL</span>
            <span>90%</span>
          </div>
          <div class="progress-bar">
            <div class="progress mysql"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>SQLite</span>
            <span>80%</span>
          </div>
          <div class="progress-bar">
            <div class="progress sqlite"></div>
          </div>
        </div>
      </div>

      <!-- Ecommerce -->
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <h3>E-Commerce Solutions</h3>

        <div class="skill">
          <div class="skill-info">
            <span>Online Stores</span>
            <span>95%</span>
          </div>
          <div class="progress-bar">
            <div class="progress store"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Payment Integration</span>
            <span>80%</span>
          </div>
          <div class="progress-bar">
            <div class="progress payment"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Admin Dashboards</span>
            <span>90%</span>
          </div>
          <div class="progress-bar">
            <div class="progress dashboard"></div>
          </div>
        </div>
      </div>


        <!-- mobile app -->
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <h3>Mobile application</h3>

        <div class="skill">
          <div class="skill-info">
            <span>Flutter</span>
            <span>95%</span>
          </div>
          <div class="progress-bar">
            <div class="progress store"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Kotlin</span>
            <span>80%</span>
          </div>
          <div class="progress-bar">
            <div class="progress payment"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Swift</span>
            <span>90%</span>
          </div>
          <div class="progress-bar">
            <div class="progress dashboard"></div>
          </div>
        </div>
      </div>



 <!-- desktop apps -->
      <div class="skill-card">
        <div class="skill-icon">
          <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <h3>Desktop Application</h3>

        <div class="skill">
          <div class="skill-info">
            <span>Java</span>
            <span>95%</span>
          </div>
          <div class="progress-bar">
            <div class="progress store"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>C#</span>
            <span>80%</span>
          </div>
          <div class="progress-bar">
            <div class="progress payment"></div>
          </div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>C++</span>
            <span>90%</span>
          </div>
          <div class="progress-bar">
            <div class="progress dashboard"></div>
          </div>
        </div>
      </div>




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