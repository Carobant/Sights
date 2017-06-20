var map, pins = [];

function getPins(){
  $.get( "/test", function( data ) {
  console.log(data);

  for(i = 0; i < data.length; i++){
    console.log(data[i]);
    // startingPoint = new google.maps.Marker({
          
    //     	position: {lat: 43.144609, lng: 24.733226},
    //     	map: map,
    //     	title: data[i].title
    // });
    pins[i] = new google.maps.Marker({
          
        	position: {lat: data[i].lat, lng: data[i].long},
        	map: map,
        	title: data[i].title
    });
    
  }
  }, "json" );
}

function hidePins(){
  for(i = 0; i < pins.length; i++){
    pins[i].setMap(null);
  }
}

function showPins(){
  for(i = 0; i < pins.length; i++){
    pins[i].setMap(map);
  }
}

function showMap() {
  getPins();

	console.log('ready');

	var infoWindow;
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 42.144609, lng: 24.733226},
          zoom: 15
        });

        // startingPoint = new google.maps.Marker({
        // 	position: {lat: 42.144609, lng: 24.733226},
        // 	map: map,
        // 	title: "Test 1,2,3"
        // });

    function myPos () {
    	var pos;
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            marker = new google.maps.Marker({
			    map: map,
			    draggable: false,
			    animation: google.maps.Animation.DROP,
			    position: pos
			  });
            map.panTo(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
  	};

    $("#openMenu").click(function(){
    	$(".menuBar").toggle("fast");
    });

    $("#openContext").click(function(){
    	$(".contextMenu").toggle("fast");
    });

    $("#signInBtn").click(function(){
      $("#signInForm").toggle(400);
      $("#signUpForm").hide();
    });

    $("#signUpBtn").click(function(){
      $("#signUpForm").toggle(400);
      $("#signInForm").hide();
    });

    $("#regBtn").click(function(event) {
      $(".logIn").toggle("fast");
    });

    $("#myPos").click(function(event) {
    	myPos();
    });
	var focused = false;
	    	$("#search").focusin(function(event) {
	    		focused = true;
	    	});
	    	$("#search").focusout(function(event) {
	    		focused = false;
	    		$("#search").fadeOut("fast");
	    	});
    $("#searchBox").hover(function() {

    	$("#search").fadeIn("fast");
    }, function() {
    	
    	if (!focused) {
    		$("#search").fadeOut("fast");
    	}
    });
    
}