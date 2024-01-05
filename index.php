<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booth level officer</title>
    <link rel="stylesheet" href="style.css" />
    <!------------------------link for font-------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Young+Serif&display=swap"
      rel="stylesheet"
    />
    <!------------------------link for icon-------------------->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>

  <body>
    <section class="header">
      <nav>
        <a href="index.html"
          ><img src="photos/logo.png.d0e6aee2d64193769bffbc6e720bbe96.png"
        /></a>
        <div class="nav-links" id="navLinks">
          <i class="fas fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT ECI</a></li>
            <li><a href="">LOGIN</a></li>
          </ul>
        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        <h1>National Grievance Services</h1>
        <p>Information, Suggestions & Complaints</p>
        <a
          href="https://www.eci.gov.in/it-applications/web-applications/national-grievance-services-portal-r1/"
          class="hero-btn"
          >click here to know more</a
        >
      </div>
    </section>

    <!-------------------------Election Commission of India-------------------->
    <section class="election">
      <h1>An initiative of</h1>
      <p>Election Commission of India</p>

      <div class="row">
        <div class="election-col">
          <h3>National Voter Service portal</h3>
          <a href="https://voters.eci.gov.in/">click here </a>
        </div>

        <div class="election-col">
          <h3>ECI website</h3>
          <a href="https://www.eci.gov.in/">click here </a>
        </div>

        <div class="election-col">
          <h3>Polling station &BLO Details</h3>
          <a href="http://psleci.nic.in/">click here </a>
        </div>
      </div>
    </section>

         
    <!-------------------------Javascript for Tonggle Menu-------------------->
    <script>
      var navLinks = document.getElementById("navLinks");
      function showMenu() {
        navLinks.style.right = "0";
      }

      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>

   <!-- code to include footer section -->
<?php include('partials/footer.php') ?>
