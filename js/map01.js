var map;
var styles = [
  {
    featureType: "administrative.country",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  },{
    featureType: "administrative.province",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  },{
    featureType: "water",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }
];
function initMap() {

  // This is the minimum zoom level that we'll allow
  var minZoomLevel = 2;
  var maxZoomLevel = 4;

  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 2,
    center: {lat: 24.714707, lng: -22.262697},
    styles: styles,
    mapTypeControl: false,
    fullscreenControl: false,
    streetViewControl: false,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.TOP_LEFT,
    },
  });

  // Bounds for North America
  var strictBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(28.70, -127.50), 
    new google.maps.LatLng(48.85, -55.90)
  );

  // Listen for the dragend event
  google.maps.event.addListener(map, 'dragend', function() {
    if (strictBounds.contains(map.getCenter())) return;

    // We're out of bounds - Move the map back within the bounds

    var c = map.getCenter(),
        x = c.lng(),
        y = c.lat(),
        maxX = strictBounds.getNorthEast().lng(),
        maxY = strictBounds.getNorthEast().lat(),
        minX = strictBounds.getSouthWest().lng(),
        minY = strictBounds.getSouthWest().lat();

    if (x < minX) x = minX;
    if (x > maxX) x = maxX;
    if (y < minY) y = minY;
    if (y > maxY) y = maxY;

    map.setCenter(new google.maps.LatLng(y, x));
  });

  // Limit the zoom level
  google.maps.event.addListener(map, 'zoom_changed', function() {
    if (map.getZoom() < minZoomLevel) map.setZoom(minZoomLevel);
    if (map.getZoom() > maxZoomLevel) map.setZoom(maxZoomLevel);

  });

  var infowindows = new google.maps.InfoWindow({});

  // NOTE: This uses cross-domain XHR, and may not work on older browsers.
  map.data.loadGeoJson(
      'js/custom.geo.json');
  
  map.data.setStyle({
    fillColor: '#CBB58B',
    strokeColor: '#666666',
    strokeWeight: 0.5,
    
  });
  map.data.addListener('click', function(event) {
    map.data.overrideStyle(event.feature, {fillColor: 'red'});
  });
  map.data.addListener('mouseover', function(event) {
    var feat = event.feature;
    var latLng = event.latLng;
    map.data.overrideStyle(feat, {fillColor: 'red'});
    geoJsonInfoWindow(feat,infowindows,latLng);
    //console.log(event.feature);
    //event.feature.getProperty('letter');
  });
  map.data.addListener('mouseout', function(event) {
    var feat = event.feature;
    map.data.overrideStyle(event.feature, {fillColor: '#CBB58B'});
    geoJsonMouseoutInfoWindow(feat, infowindows);
  });

  function geoJsonInfoWindow(feat,infowindow,latLng) {
    
    if(infowindow.feat != feat) {
      //console.log(feat);
      infowindow.setContent('');
      infowindow.feat = feat;
      infowindow.addListener('closeclick',function(){
        infowindow.feat = null;
      });

      if(feat.getProperty('name') != '') {
        infowindow.setContent(
        '<div id="iw-container">' +
          '<div class="iw-title">' +  feat.getProperty('name') + '</div>' +

          '<div class="iw-content">' + 
          '<!--img src="images/vistalegre.jpg" alt="Porcelain Factory of Vista Alegre" height="115" width="83"-->' +
          '<div class="iw-subTitle">Economy:</div>' + feat.getProperty('economy') + '</div>' +
          '<div class="iw-bottom-gradient"></div>' + 
        '</div>');

        // infowindow.setContent(
        //   '<div id="iw-container">' + 
        //     '<div class="iw-title">'+ feat.getProperty('name') +'</div>' +
        //       '<div class="iw-content">' +
        //         '<div class="iw-subTitle">History</div>' +
        //         '<img src="images/vistalegre.jpg" alt="Porcelain Factory of Vista Alegre" height="115" width="83">' +
        //         '<p>Founded in 1824, the Porcelain Factory of Vista Alegre was the first industrial unit dedicated to porcelain production in Portugal. For the foundation and success of this risky industrial development was crucial the spirit of persistence of its founder, José Ferreira Pinto Basto. Leading figure in Portuguese society of the nineteenth century farm owner, daring dealer, wisely incorporated the liberal ideas of the century, having become "the first example of free enterprise" in Portugal.</p>' +
        //         '<div class="iw-subTitle">Contacts</div>' +
        //         '<p>VISTA ALEGRE ATLANTIS, SA<br>3830-292 Ílhavo - Portugal<br>'+
        //         '<br>Phone. +351 234 320 600<br>e-mail: geral@vaa.pt<br>www: www.myvistaalegre.com</p>'+
        //       '</div>' +
        //       '<div class="iw-bottom-gradient"></div>' +
        //     '</div>');

      } else {
        infowindow.setContent('<div>No Country Name</div>')
      }
      
      infowindow.setPosition(latLng);
      infowindow.setOptions({pixelOffset: new google.maps.Size(0,-34)});
      infowindow.open(map);
    }
  }

  function geoJsonMouseoutInfoWindow(feat, infowindow) {
    if(infowindow.feat == feat) {
      //console.log(feat);
      infowindow.setContent('');
      infowindow.feat = null;
      infowindow.addListener('closeclick',function(){
        infowindow.feat = null;
      });
      infowindow.close();
    }
  }

}