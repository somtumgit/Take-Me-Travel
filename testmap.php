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
  <link rel="stylesheet" href="css/topmenu.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/testmap.css">


</head>
<body>

  <?php include("topmenu.php"); ?>


  <!-- map -->
  <div class="map_section container-md">
    <div id="map"></div>
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
  <script src="js/testmap.js"></script>



</body>
</html>