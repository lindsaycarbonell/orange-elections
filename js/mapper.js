function initMap(){

      var BOELoc = new google.maps.LatLng(36.073353, -79.096665);
      var TownLoc = new google.maps.LatLng(35.91124, -79.077476);
      var ChapelLoc = new google.maps.LatLng(35.91457, -79.049855);
      var SeymourLoc = new google.maps.LatLng(35.9506837, -79.0633686);

      var map;
      var center = new google.maps.LatLng(35.99222,-79.0725);


      //basic map options
      var mapOptions = {
        center: center,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      //basic map variable
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


      //image variables for map icons
      var voteImg = 'assets/check.png';

      //old popup box with image:
      //<div id="contentStart"><img id="logo" src="home.png"><div><b>644 Lake Hogan Lane</b><p class="inline"></p></div></div>

      //marker variables with attached icons
      var BOEMarker = new google.maps.Marker({
          position: BOELoc,
          map: map,
          icon: voteImg
      });

      var TownMarker = new google.maps.Marker({
          position: TownLoc,
          map: map,
          icon: voteImg
      });

      var ChapelMarker = new google.maps.Marker({
          position: ChapelLoc,
          map: map,
          icon: voteImg
      });

      var SeymourMarker = new google.maps.Marker({
          position: SeymourLoc,
          map: map,
          icon: voteImg
      });


      //MAIN POPUP
      var bigBox = new google.maps.InfoWindow({
        content: "Empty"
      });

      function initialize() {
        geocoder = new google.maps.Geocoder();
        directionsDisplay = new google.maps.DirectionsRenderer();
        directionsDisplay.setOptions({suppressMarkers:true});

        //connect directions service to map
        directionsDisplay.setMap(map);

        //popup box content
        var BOEString = '<div id="contentStart"><div><b>644 Lake Hogan Lane</b><p class="inline"></p></div></div>';
        var TownString = '<div id="contentStart"><div><b>Driving around the neighborhood</b><p class="inline"></p></div></div>';
        var ChapelString = '<div id="contentStart"><div><b>Pool</b><p class="inline"></p></div></div>';
        var SeymourString = '<div id="contentStart"><div><b>Greenway</b><p class="inline"></p></div></div>';

        //listeners to open boxes when icons are clicked
        google.maps.event.addListener(BOEMarker, 'click', function() {
            bigBox.setContent(BOEString);
            bigBox.open(map,BOEMarker);
            //changeFrame("btn-house");
            //changeFrame()...
        });

        google.maps.event.addListener(TownMarker, 'click', function() {
            bigBox.setContent(TownString);
            bigBox.open(map,TownMarker);
            //changeFrame("btn-driving");
        });

        google.maps.event.addListener(ChapelMarker, 'click', function() {
            bigBox.setContent(ChapelString);
            bigBox.open(map,ChapelMarker);
            //changeFrame("btn-pool");
        });

        google.maps.event.addListener(SeymourMarker, 'click', function() {
            bigBox.setContent(SeymourString);
            bigBox.open(map,SeymourMarker);
            //changeFrame("btn-greenway");
        });


        //recalculate center on window resize
        function calculateCenter(){
          center = map.getCenter();
        }

        // $('#recenter').click(function(){
        //   map.setCenter(center);
        //   map.setZoom(15);
        // });

        google.maps.event.addDomListener(map, 'idle', function() {
        calculateCenter();
          });
      google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(center);
          });

      }


      google.maps.event.addDomListener(window, 'load', initialize);


    }
