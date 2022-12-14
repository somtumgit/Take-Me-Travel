// Initialize and add the map
function initMap() {
  var styles = [{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":"66"},{"visibility":"on"},{"color":"#fffff7"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#fcf3da"},{"lightness":40},{"saturation":-40}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ef8c25"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"lightness":30},{"weight":"1.32"}]}];
  // The location of Uluru
  var markers = [];
  var defaultIcon = makeMarkerIcon('#990000');
  var highlightedIcon = makeMarkerIcon('#0091ff');
  
  var locations = [
    {title: 'Office',
    address: '123 North West Street, New York IL 22301',
    tel: '1-456-9222, 1-456-9333',
    location: {lat: 41.880248, lng: -87.641965}},
  ];
  
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {
        zoom: 15, 
        center: locations[0].location,
        styles: styles,
        mapTypeControl: false,
        fullscreenControl: false,
        streetViewControl: false,
        zoomControl: true,
      });

  var infowindows = new google.maps.InfoWindow({});
  var bounds = new google.maps.LatLngBounds();
  
  // The marker, positioned at Uluru
  for(var i=0; i < locations.length; i++) {
    var location = locations[i];
    var title = locations[i].title;
    var position = locations[i].location;
    //console.log(title);
    //console.log(position);

    //var marker = new google.maps.Marker({
    var marker = new mapIcons.Marker({  
      position: position,
      map: map,
      title: title,
      animation:google.maps.Animation.DROP,
      id: i,
      icon: defaultIcon,
      map_icon_label: '<span class="map-icon map-icon-map-pin"></span>',
    });

    //console.log(locations[i]);
    markers.push(marker);

    bounds.extend(marker.position);

    marker.addListener('click', function() {
      streetViewInfoWindow(this, infowindows);
    });
    marker.addListener('mouseover', function() {
      this.setIcon(highlightedIcon);
      connetInfoWindow(this, infowindows, location)
    });
    marker.addListener('mouseout', function() {
      this.setIcon(defaultIcon);
    });
  }

  function streetViewInfoWindow(marker, infowindow) {
    infowindow.marker = null;
    if(infowindow.marker != marker){
      infowindow.setContent('');
      infowindow.marker = marker;
      infowindow.addListener('closeclick',function(){
        infowindow.marker = null;
      });          

      var streetViewService = new google.maps.StreetViewService();
      var radius = 50;

      function getStreetView(data, status) {
        if(status == google.maps.StreetViewStatus.OK) {
          var nearStreetViewLocation = data.location.latLng;
          var heading = google.maps.geometry.spherical.computeHeading(nearStreetViewLocation, marker.position);
          infowindow.setContent('<div>' + marker.title + '</div><div id="pano" style="width:200px;height:200px"></div>');
          var panoramaOption = {
            position: nearStreetViewLocation,
            pov: {
              heading: heading,
              pitch: 30
            }
          };
          var panorama = new google.maps.StreetViewPanorama( document.getElementById('pano'),panoramaOption);

        } else {
          infowindow.setContent('<div>' + marker.title + '</div><div>No Street View Found</div>');
        }
      }

      streetViewService.getPanoramaByLocation(marker.position, radius, getStreetView);

      infowindow.open(map, marker);

    }

  }

  function connetInfoWindow(marker, infowindow, location) {
    infowindow.marker = null;
    if(infowindow.marker != marker){
      infowindow.setContent('');
      infowindow.marker = marker;
      infowindow.addListener('closeclick',function(){
        infowindow.marker = null;
      });

      infowindow.setContent(
        '<div id="iw-container">' +
          '<div class="iw-title">' +  location.title + '</div><hr>' +
          '<div class="iw-content">' + 
            '<!--img src="images/vistalegre.jpg" alt="Porcelain Factory of Vista Alegre" height="115" width="83"-->' +
            '<div class="iw-subTitle">Address:</div><em>' + location.address + 
            '</em><div class="iw-subTitle">Phone:</div><em>' +
            location.tel +
          '</em></div>' +
          '<div class="iw-bottom-gradient"></div>' + 
        '</div>');

      infowindow.open(map, marker);
    }
  }

  function makeMarkerIcon(markerColor) {
    // var markerImage = new google.maps.MarkerImage(
    //   //'http://maps.google.com/mapfiles/ms/icons/'+markerColor+'-dot.png',
    //   new google.maps.Size(21, 34),
    //   new google.maps.Point(0, 0),
    //   new google.maps.Point(10, 34),
    //   new google.maps.Size(21, 34)
    // );
    var markerIcon = {
      path: mapIcons.shapes.MAP_PIN,
      fillColor: markerColor,
      fillOpacity: 1,
      strokeColor: '',
      strokeWeight: 0,
    };
      
    return markerIcon;
  }


}