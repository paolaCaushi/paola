<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <center><H1 style="background-color:#000; padding:10px; width:50%;OPACITY:0.5">SPECIAL CARD</h1>
      <h2>Karta juaj per te shpenzuar me pak!</h2></center>
      <a href="shop.php" class="btn1">Shiko të gjithë produktet
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Produkte në trend<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Informacion</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Brande</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Dyqane</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shërbimi klientit</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Pse të blini nga ne</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Secure shipping</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Award winning</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Hyr</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Regjistrohu</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shiko Kartën</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shikoni platformën</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Gjurmo një porosi</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ndrysho informacionin</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Detajet e Kontaktit</div>
            <address class="address">
            Head Office: Special Card.<br>
            Tiranë, Albania.
          </address>
            <div class="phone">
              Cel:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
            </div>
          </div>

        </div>
      </div>

      <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Ecommerce Website&trade;
          </div>

          <div class="developer">
            Developed by Paola
          </div>

          <div class="designby">
            Design by Paola
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
