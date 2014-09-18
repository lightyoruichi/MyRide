   function getLocation(){
      console.log("Entering getLocation()");
      if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(
      displayCurrentLocation,
      displayError,
      { 
        maximumAge: 3000, 
        timeout: 5000, 
        enableHighAccuracy: true 
      }
	  );
    }else{
      console.log("No geolocation support");
    } 
      console.log("Exiting getLocation()");
    };
    function displayCurrentLocation(position){
      var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    getAddressFromLatLang(latitude,longitude);
    }
   function  displayError(error){
    var errorType = {
      0: "Unknown error",
      1: "Permission denied by user",
      2: "Position is not available",
      3: "Request time out"
    };
    var errorMessage = errorType[error.code];
    if(error.code == 0  || error.code == 2){
      errorMessage = errorMessage + "  " + error.message;
    }
    alert("Error Message " + errorMessage);
  }
    function getAddressFromLatLang(lat,lng){
      var geocoder = new google.maps.Geocoder();
        var latLng = new google.maps.LatLng(lat, lng);
        geocoder.geocode( { 'latLng': latLng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[1]) {
            console.log(results[1]);
			var form = document.getElementById('Address');
			var formad = (results[1].formatted_address);
            form.elements.start.value = formad
			$("#spin").remove();
          }
        }else{
          alert("Geocode was not successful for the following reason: " + status);
        }
        });
    }
