<html>
<head>
  <title>Atlas Institute<?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <div class="main-wrapper">
    
    <div class="top-head-bar">
      
      <div class="top-head-bar-glyphicons-and-social-media-container">
        <div class="top-head-bar-glyphicons-container">
          <div class="glyphicon-earphone-container">
            <a href="tel:2342355678">
              <span class="glyphicon glyphicon-earphone"></span> (234)-235-5678
            </a>
          </div>
          
          <div class="glyphicon-envelope-container">      
            <a href="mailto:atlassinstitute@gmail.com">
              <span class="glyphicon glyphicon-envelope"></span> atlassinstitute@gmail.com
            </a>
          </div>
        </div>

        <div class="top-heading-bar-social-media-container">
          <div class="facebook-icon-container">
            <a class="facebook-icon" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/1024px-F_icon.svg.png">
            </a>
          </div>

          <div class="twitter-icon-container">
            <a class="twitter-icon" href="#">
              <img src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/twitter-512.png">
            </a>
          </div>

          <div class="linkedin-icon-container">
            <a class="linkedin-icon" href="#">
              <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-linkedin-512.png">
            </a>
          </div>

          <div class="linkedin-icon-container">
            <a class="linkedin-icon" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Youtube.svg/256px-Youtube.svg.png">
            </a>
          </div>
        </div> 
      </div> <!-- end of top-head-bar-glyphicons-and-social-media-container -->
    

    </div> <!-- end of top-head-bar -->
    
    <div class="top-heading-container clearfix">
      <h1 class="top-heading-main-title"><a href="index.php">Atlas Logo</a></h1>
      <div class="top-heading-number">(703) 555-1234</div>
    </div>

    <nav id="primary_nav_wrap">
      <div class="outer-ul-and-language-switcher-container-wrapper">
        <ul class="menu-title-ul">
          <li id="about-us" class="menu-item"><a href="#">About Us<span class="caret"></span></a>
            <ul>
              <li><a href="about.php">About Us</a></li>
              <li><a href="mission.php">Our Mission</a></li>
              <li><a href="gallery.php">Gallery</a></li>
            </ul>
          </li>
          <li id="courses" class="menu-item"><a href="#">Courses<span class="caret"></span></a>
            <ul>
              <li><a href="hvac.php">HVAC</a></li>
              <li><a href="hvac-r.php">HVAC/R</a></li>
              <li><a href="certifications.php">Certifications</a></li>
            </ul>
          </li>
          <li id="schedule" class="menu-item"><a href="#">Schedule<span class="caret"></span></a>
            <ul>
              <li><a href="schedule.php">Schedule</a></li>
              <li><a href="events.php">Events</a></li>
            </ul>
          </li>
          <!-- <li><a href="#">Student Services<img class="navbar-arrow" src="https://www.materialui.co/materialIcons/navigation/arrow_drop_down_white_192x192.png" alt="" /></a>
            <ul>
              <li><a href="#">Student/Staff Log In</a></li>
              <li><a href="#">Job Placement</a></li>
              <li><a href="#">Financial Aid</a></li>
              <li><a href="#">Student Handbook</a></li>
              <li><a href="#">Make A Payment</a></li>
            </ul>
          </li> -->
          <li id="contact" class="menu-item"><a href="#">Contact<span class="caret"></span></a>
            <ul>
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="location.php">Location</a></li>
            </ul>
          </li>
        </ul> <!-- end of menu-title-ul -->

        <div class="language-switcher-container">        
          <div class="flags-container">
            <a href=<?php echo $currentPage ?>><img class="flag" src="img/american-flag.png" alt="Picture of American Flag" /></a>
            <a href=<?php echo $currentPageSpanishEquivalent ?>><img class="flag mexican-flag"src="img/mexican-flag.png" alt="Picture of Mexican Flag" /></a>
          </div>
          <div class="language-swithcher-text">Language:
          </div>
        </div> <!-- end of language-switcher-container -->
      </div> <!-- end of outer-ul-and-language-switcher-container-wrapper -->
    </nav> 