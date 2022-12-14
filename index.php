<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Take Me Travel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/flexslideronload.css">
  <link rel="stylesheet" href="css/topmenu.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/index.css">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body><span onclick="window.location.href = 'logout.php'" style="position:absolute;top:0;right:0;color:white;cursor:pointer;z-index:200"><i class="fas fa-sign-out-alt"></i></span>
<?php
  ob_start();
  session_start();
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  if(!isset($_SESSION['username'])) {
    header('Location: login.php');
  }else {
    //echo $_SESSION['username'] . "<br>";
  }

?>

  <?php include("topmenu.php"); ?>

  <!-- slider -->
  <div class="flexslider">
    <ul class="slides">

      <li style="background-image: url('images/slide1.jpg');float: left; display: block;">
        <section class="flex-caption">
            <div class="head1">Custom journeys created just for you.</div>
            <p class="sub1">Sunset and sunrise at Machu Picchu? It's a life-changer. Go and see for yourself...</p>
            <a href="#">Explore Journeys</a>
        </section>
      </li>
      <li style="background-image: url('images/slide2.jpg'); float: left; display: block;">
        <section class="flex-caption">
          <div class="head1">Custom journeys created just for you.</div>
          <p class="sub1">Your year is a frenzy of work and family. Time away should include some serious naval contemplation...</p>
          <a href="#">Explore Journeys</a>
        </section>
      </li>
      <li style="background-image: url('images/slide3.jpg'); float: left; display: block;">
        <section class="flex-caption">
          <div class="head1">Custom journeys created just for you.</div>
          <p class="sub1">Get deep inside Asia with R. Crusoe. Go where others simply cannot go...</p>
          <a href="#">Explore Journeys</a>
        </section>
      </li>
    </ul>
    
  </div>


  <!-- content -->
  <div class="content container">
    <div class="row">
      <div class="c col-xs-12 col-sm-12 col-md-12 col-lg-6">
        
        <div class="article">
          <div class="sub1">FEATURED JOURNEY</div>
          <div class="row">
            <div class="c col-xs-12 col-sm-4 img">
              <img src="images/aticle1.jpg" alt="aticle1" class="img-responsive">
            </div>
            <div class="c col-xs-12 col-sm-8 detail">

              <a class="head1">Essential Morocco. From Fez to Marrakech.</a>
              <div class="sub2">Africa (Morocco)</div>
              <p class="prop"><strong>SEASON:</strong><span>January, February, March, April, May, June, July, August, September, October, November, December</span></p>
              <p class="prop"><strong>Type:</strong>Custom Journeys</p>
              <p class="prop"><strong>MODE:</strong>Land</p>              
              <div class="sub3">"Our local guide was beyond outstanding. Morocco was awesome, and she added a cherry on top to our entire experience. I would give her a seven out of five stars!"  —Meenakshi & Neeraj, journey to Morocco   Isn't it time you explored magical Morocco? Come with us on an ...</div>
            </div>
          </div>
        </div>

        <div class="divider"></div>

        <div class="article">
          <div class="sub1">FEATURED JOURNEY</div>
          <div class="row">
            <div class="c col-xs-12 col-sm-4">
              <img src="images/aticle2.jpg" alt="aticle2" class="img-responsive">
            </div>
            <div class="c col-xs-12 col-sm-8 detail">
              <a class="head1">Argentina: Soul of South America. A Bit of Brazil, Too.</a>
              <div class="sub2">South America (Argentina, Brazil)</div>
              <p class="prop"><strong>SEASON:</strong><span>January, February, March, April, May, June, July, August, September, October, November, December</span>
              </p>
              <p class="prop"><strong>Type:</strong>Custom Journeys</p>
              <p class="prop"><strong>MODE:</strong>Land</p>              
              <div class="sub3">"There were highlights in every location; no one could be singled out. It was the whole that made the trip so enjoyable." —Gail S.,  journey to Argentina   R. Crusoe's foray into Argentina and Brazil begins in Buenos Aires, known as the Paris of the South. You'll soon understand ...</div>
            </div>
          </div>
        </div>

      </div>
      <div class="c col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="callus">
          <div class="sub1">Let's chat. To start planning your next luxury vacation, get your questions answered, or to throw around some travel ideas,</div>
          <div class="head1">call us at 800-585-8555.</div>
        </div>
        <div class="aboutus">
          <div class="head1">Why Choose Us?</div>
          <div class="sub1">
            <p>Call us “Old School.” We take that as a compliment, because that's how we do things.</p>

            <p>R. Crusoe creates unusual luxury journeys all over the world filled with intellectual adventures and rich in insider experiences. We cater to individuals as well as small groups, creating seamless tours filled with unique access that you simply couldn’t plan on your own (we have our ways).</p>

            <p>Our philosophy? You deserve a once-in-a-lifetime experience, a journey that addresses your curiosity, embraces your sophistication, and acknowledges your taste for the best of everything—hotels, guides, sightseeing, cuisine...</p>

            <p>Our travel specialists know just how to approach your travel—with passion and insight, and armed with up-to-the-minute information. They work directly with you to create the perfect journey just for you and yours.</p>

            <p>Because at the end of the day, Crusoe creates journeys our way—which is, essentially, your way.</p>

            <p>As it should be.</p>
          </div>
          <div class="bar"></div>
        </div>
      </div>
    </div>

    <div class="divider"></div>

    <!-- social post -->
    <div class="row social_post">
      <div class="c col-xs-12 col-sm-12 col-md-4">
        <div class="sub1">FROM THE BLOG</div>
        <div class="box1">
          <a href="#" class="head1">Keep your hands (and minds) busy.</a>
          <div class="sub2">Apr 2, 2020</div>
        </div>
        <div class="box1">
          <a href="#" class="head1">Hallowed halls.</a>
          <div class="sub2">Apr 2, 2020</div>
        </div>
      </div>
      <div class="c col-xs-12 col-sm-12 col-md-4">
        <div class="sub1">RECENT TWEETS</div>
        <div class="box2">
          <div class="sub3">Is a trip to Paris in your future? We've got two fun reads for you to get ready. https://t.co/xH6Fub4d9M</div>
          <div class="sub4">4 months ago</div>
        </div>
        <div class="box2">
          <div class="sub3">Join us in September 2020 on a President’s Trip: Delights of South Africa & the Namib Desert.… https://t.co/LAlSXDzztQ</div>
          <div class="sub4">8 months ago</div>
        </div>
        <a href="#" class="twitter">
          <i class="fab fa-twitter"></i>
          <span>Follow <b>@RCrusoeandSon</b></span>
        </a>        
      </div>
      <div class="c col-xs-12 col-sm-12 col-md-4">
        <div class="sub1">NEED HELP?</div>
        <div class="box1">
          <div class="head1">Frequently Asked Questions</div>
          <div class="sub5">You have questions? We have answers. Head over to <a href="#">our FAQ section.</a></div>
        </div>
      </div>
    </div>

  </div>

  <?php include("footer.php"); ?>


  
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>

  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        touch: true,
        animation: "fade",  
        // pauseOnAction: true,
        // pauseOnHover: true,
        slideshowSpeed: 7000,
        start: function(slider) {
        //  $('.slidecaption, .btn_slide ').removeClass('actioncaption');
        //  $('.flex-active-slide').find('.slidecaption, .btn_slide').addClass('actioncaption');
        },
        after: function(slider) {
        //  $('.slidecaption, .btn_slide ').removeClass('actioncaption');
        //  $('.flex-active-slide').find('.slidecaption, .btn_slide').addClass('actioncaption');
        }
      });
    });
  </script>


</body>
</html>
