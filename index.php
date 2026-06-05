<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

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
                 <a href="service.php"><li><i class="fa-solid fa-cookie"></i> Services</li></a>
                  <a href="service.php"><li class="hide">Services</li></a>
                <a href="menu.php"><li><i class="fa-solid fa-burger"></i>  Skills</li></a>
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
                 <a href="service.php"><li class="hide">Services</li></a>
                <a href="about.php"><li class="hide">About Me</li></a>
                  <a href="skills.php"><li class="hide">Skills</li></a>
                <a href="projects.php"><li class="hide">Projects</li></a>
                <a href="contact.php"><li class="hide">Contact</li></a>
           
            </ul>

        </nav>
       </div>

   </header>
<br><br>


<section>
   <div class="hero">
        <div class="hero-text">
            <h6>AVAILABLE FOR WORK</h6>
              <h1>Hi, I'm Ezekell </h1>
              <p>
                Software Engineer & Full Stack Developer passionate about building modern
                 web applications ,e-commerce systems, Desktop and Mobile applications,
                and scalable digital solutions.
              </p>

              <div class="hero-btn">
            
              <a href="projects.php"> <button class="btn-2"> 
               View my work
             </button></a>

                  <a href="contact.php"> <button class="button btn-1">
                     Get in touch
                   </button></a>

              </div>

              <hr width="86%" ><br>

              <div class="hero-num">
                  <div>
                    <h3>15+</h3>
                    <p>Projects done</p>
                  </div>

                   <div>
                    <h3>25+</h3>
                    <p>Happy clients</p>
                  </div>

                   <div>
                    <h3>3y</h3>
                    <p>Experience</p>
                  </div>
              </div>

        </div>


       <div class="hero-img">
          <img src="assets/images/IMG_3238.jpg" alt="img"> 
       </div>

   </div>

</section>







<section>
    <div class="service-wrapper">
          <div class="service-text">
               <h6>WHAT I DO</h6>
                <h2>Services</h2>
          </div>

          <div class="service-cards">

                <div class="cards">
                   <div class="skill-icon">
                       <i class="fa-brands fa-html5"></i>
                    </div>
                  <h4>Web Development</h4>
                  <p>Helping startups and businesses create modern digital products with web development.
                  I build fast, scalable, and user-friendly web applications tailored to business need
                  </p>
                </div>

                  <div class="cards">
                       <div class="skill-icon">
                       <i class="fa-brands fa-html5"></i>
                    </div>
                  <h4>E-commerce Systems</h4>
                  <p>Delivering reliable digital solutions that help brands improve customer experience and grow online.
                  Turning business ideas into powerful web, mobile, desktop, and e-commerce applications.</p>
                </div>


                  <div class="cards">
                        <div class="skill-icon">
                       <i class="fa-brands fa-html5"></i>
                    </div>
                  <h4>Full-stack</h4>
                  <p>Creating fast, responsive, and scalable digital solutions 
                    from frontend interfaces to full-stack applications.
                  Building scalable and user-focused applications that help businesses succeed in the digital world</p>
                </div>

                

          </div>


    </div>
</section>




<Section>
  <div class="about">
       <div class="ab-text"><h6>ABOUT ME</h6></div>

       <div class="about-wrapper">
         <div class="about-img">
                <img src="assets/images/IMG_3238.jpg" alt="img"> 
         </div>

         <div class="about-me">
          <h2>A bit about </h2>
           <h2>who i am </h2>

          <p>
            I am a passionate and results-driven Software Engineer specializing in Full Stack Web Development and E-commerce Solutions. I design and develop modern, responsive, and user-friendly applications that
             combine clean design with powerful functionality. With experience in both frontend and backend development, I build scalable systems that help businesses grow and improve their digital presence.

           My expertise includes developing dynamic websites, e-commerce platforms, management systems, dashboards, APIs, 
           and database-driven applications using modern technologies and best development practices. I enjoy transforming ideas into functional digital products that provide real value to users and businesses.
          </p>

          <div class="about-tools">
            <div class="ab-stack-tools"><h6>STACK & TOOLS</h6></div>

               <div class="tech-stack">
                <span>Php#</span>
                <span>Flutter</span>
                <span>Java</span>
                 <span>Andriod Studio</span>
        </div>
          </div>

         </div>

       </div>
          

  </div>
</Section>




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


<!-- PROJECTS  SECTION -->

<div><div class="project-text"><h2>Projects</h2></div>
<section class="projects">

<div class="project-card">

    <img src="assets/images/1.png" alt="ATM System">

    <div class="project-content">

        <h3>Student Registration System</h3>

        <p>
            A desktop resgistration application developed with Jva and SQL
            that allows students and adminstrators to register, add programs, and many functionalities.
        </p>

        <div class="tech-stack">
            <span>Java</span>
            <span>SQL Server</span>
            <span>Windows Forms</span>
        </div>

        <div class="project-buttons">

            <a href="https://github.com/yourusername/atm-system" target="_blank">
                GitHub
            </a>

            <button class="details-btn">
                View Details
            </button>

        </div>

    </div>

</div>


<!-- DETAILS MODAL -->
<div class="project-modal">

  <div class="project-modal-content">

        <span class="close-btn">&times;</span>

     

        <h2>Student Registration System</h2>

        <p>
           A desktop resgistration application developed with Jva and SQL
            that allows students and adminstrators to register, add programs, and many functionalities.
        </p>

        <h3>Features</h3>

        <ul>
            <li>Registration</li>
            <li>User Authentication</li>
            <li>User Validation</li>
            <li>Add Program</li>
            <li>Grade Checking</li>
            <li>Search Student</li>
            <li>SQL Database Integration</li>
        </ul>

        <h3>Technologies Used</h3>

        <div class="tech-stack">
            <span>Java</span>
            <span>SQL Server</span>
            <span>Windows Forms</span>
        </div>

    </div>

</div>



<div class="project-card">
 <img src="assets/images/ecormerce.png" alt="E-commerce Online Shipping">

    <div class="project-content">

        <h3>E-commerce Online Shipping</h3>

        <p>
          An online Shipping application developed with php, JavaScript and SQL
            that allows users to create an account, add products to cart, and checkout.
        </p>

        <div class="tech-stack">
            <span>PHP</span>
            <span>JavaScript</span>
            <span>SQL Server</span>
        </div>

        <div class="project-buttons">

            <a href="https://github.com/yourusername/e-commerce-online-shipping" target="_blank">
                GitHub
            </a>

            <button class="details-btn">
                 Details
            </button>

                   <a href="https://weisshorn.shop" target="_blank">
               Live
            </a>

        </div>

    </div>

</div>

<!-- DETAILS MODAL -->
<div class="project-modal">

  <div class="project-modal-content">

        <span class="close-btn">&times;</span>


        <h2>E-commerce Online Shipping</h2>

        <p>
            This online shipping application was built using PHP, JavaScript, and SQL Server.
            The application allows users to create an account, add products to cart, and checkout.
        </p>

        <h3>Features</h3>

        <ul>
            <li>User Authentication</li>
            <li>Create Account</li>
            <li>Product Catalog</li>
            <li>Add to Cart</li>
            <li>Search Products</li>
            <li>Checkout</li>
            <li>Payment Processing</li>
            <li>Admin Panel</li>
            <li>SQL Database Integration</li>
        </ul>

        <h3>Technologies Used</h3>

        <div class="tech-stack">
            <span>PHP</span>
            <span>JavaScript</span>
            <span>SQL Server</span>
            <span>HTML</span>
            <span>CSS</span>

        </div>

    </div>

</div>


<div class="project-card">

    <img src="assets/images/home.png" alt="Wilzie Meals Restaurant">

    <div class="project-content">

        <h3>Wilzie Meals Restaurant</h3>

        <p>
            This web-based restaurant makes customers reserve or book a table, order food online. The application is built using PHP, 
            JavaScript and SQL Server, providing a user-friendly interface. 
            It has an admin panel that allows administrators to manage restaurant operations.
        </p>

        <div class="tech-stack">
            <span>PHP</span>
            <span>JavaScript</span>
            <span>SQL Server</span>
            <span>HTML</span>
            <span>CSS</span>
        </div>

        <div class="project-buttons">

            <a href="https://github.com/ezekell-tech/wilzieMeal" target="_blank">
                GitHub
            </a>

            <button class="details-btn">
                View Details
            </button>

        </div>

    </div>

</div>

<!-- DETAILS MODAL -->
<div class="project-modal">

  <div class="project-modal-content">

        <span class="close-btn">&times;</span>

        <img src="assets/images/home.png" alt="Wilzie Meals Restaurant">

        <h2>Wilzie Meals Restaurant</h2>

        <p>
            This desktop banking system was built using C# and SQL Server.
            The application allows users to securely manage transactions
            including withdrawals, deposits, and balance checking.
        </p>

        <h3>Features</h3>

        <ul>
         <li>User Authentication</li>
          <li>Book Table</li>
          <li>View Menu</li>
          <li>Admin Panel</li>
          <li>Form Validation</li>
         <li>SQL Database Integration</li>
        </ul>

        <h3>Technologies Used</h3>

        <div class="tech-stack">
            <span>Php</span>
            <span>JavaScript</span>
            <span>SQL Server</span>
            <span>Html</span>
            <span>Css</span>
        </div>

    </div>

</div>


</section>

</div>



<div class="github-cta">
  <h2>More Projects</h2>
  <p>Check out more of my work on GitHub</p>

  <a href="https://github.com/ezekell-tech" target="_blank">
    Visit My GitHub
  </a>
</div>
















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

      <form action="send.php" method="POST">

        <input
          type="text"
          name="name"
          class="form-control"
          placeholder="Your Name"
          
        >

        <input
          type="email"
          name="email"
          class="form-control"
          placeholder="Your Email"
          
        >

        <input
          type="text"
          name="subject"
          class="form-control"
          placeholder="Subject"
          
        >

        <textarea
          name="message"
          class="form-control"
          rows="6"
          placeholder="Your Message"
          
        ></textarea>

        <button type="submit" name="submit" class="btn submit-btn">
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<div id="toast"></div>
<?php 
include_once 'toast.php';
?>
<?php if (isset($_SESSION['toast'])): ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    showToast(
        "<?= addslashes($_SESSION['toast']) ?>",
        "<?= $_SESSION['toast_type'] ?? 'info' ?>"
    );
});
</script>
<?php unset($_SESSION['toast'], $_SESSION['toast_type']); endif; ?>

</body>
</html>