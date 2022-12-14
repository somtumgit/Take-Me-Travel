<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Take Me Travel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Map Icons -->
  <link rel="stylesheet" type="text/css" href="css/map-icons.css">
  <link rel="stylesheet" type="text/css" href="css/map02.css">
  <link rel="stylesheet" href="css/topmenu.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/contact.css">


</head>
<body>

  <?php include("topmenu.php"); ?>




  <!-- content -->
  <div class="content container-lg">
    <div class="row">
      <div class="c col-xs-12 col-sm-12 col-md-12 col-lg-8">
        <div class="submain">
          <div class="head1">Contact</div>
          <div class="sub1">Need to talk? If you're ready to begin planning your next unusual journey with R. Crusoe, or have a question for us, please let us know.</div>

          <div class="box1">
            <div class="head2">Send Us a Message</div>
            <div class="sub2"><em>All fields required unless otherwise specified.</em></div>
            <div class="divider"></div>
            <form action="" name="contact" method="post">
              <div class="form-group row">
                <label for="firstName" class="c col-xs-12 col-sm-12 col-md-3 col-form-label">First Name</label>
                <div class="c col-xs-12 col-sm-12 col-md-9">
                  <input type="text" class="form-control-plaintext" id="firstName" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="lastName" class="c col-xs-12 col-sm-12 col-md-3 col-form-label">Last Name</label>
                <div class="c col-xs-12 col-sm-12 col-md-9">
                  <input type="text" class="form-control-plaintext" id="lastName" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="phone" class="c col-xs-12 col-sm-12 col-md-3 col-form-label">Phone <em>(optional)</em></label>
                <div class="c col-xs-12 col-sm-12 col-md-9">
                  <input type="tel" class="form-control-plaintext" id="phone" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="c col-xs-12 col-sm-12 col-md-3 col-form-label">Email</label>
                <div class="c col-xs-12 col-sm-12 col-md-9">
                  <input type="email" class="form-control-plaintext" id="email" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="comment" class="c col-xs-12 col-sm-12 col-md-3 col-form-label">Comment</label>
                <div class="c col-xs-12 col-sm-12 col-md-9">
                  <textarea name="" class="form-control comment" id="comment"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="sendMessage" class="c col-xs-12 col-sm-12 col-md-3 col-form-label"></label>
                <div class="c col-xs-12 col-sm-12 col-md-9">
                  <input type="submit" class="form-control-plaintext" id="submit" value="Send Message">
                  <span>We'll attempt to call or email you back within 24 hours.</span>
                </div>
              </div>

            </form>
            <div class="bar"></div>
          </div>

        </div>
      </div>
      <div class="c col-xs-12 col-sm-12 col-md-12 col-lg-4">
        <div class="right-side">
          <div class="box3">
            <div id="map"></div>
          </div>
          <div class="box1">
            <div class="head1">Contact Us</div>
            <div class="sub1"><strong>Address:</strong><br>
              123 North West Street, New York IL 22301<br><br>
              <strong>Phone:</strong><br>
              1-456-9222, 1-456-9333
            </div>
            <a href="#" class="sub2">info@someemail.com directions »</a>
          </div>
          <div class="box2">
            <div class="row">
              <div class="c-100">
                <img src="images/giraffe01.jpg" alt="giraffe01" class="img-responsive">
              </div>
              <div class="c-rest">
                <div class="head1">R. Crusoe's Travel Journal</div>
                <div class="sub1">Receive our exclusive Travel Journal by mail.</div>
                <a href="#" class="sub2">Request yours.</a>
              </div>
            </div>
          </div>
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

  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKGrBpfivxJS-NYrjRE0NyqSjOg7EPhUs&libraries=geometry&v=3&callback=initMap">
  </script>
  <script src="js/map-icons.js"></script>
  <script src="js/map02.js"></script>


</body>
</html>



