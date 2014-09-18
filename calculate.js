    $("#Address").submit(function(event) {
      event.preventDefault();
      var $form = $( this ),
          url = $form.attr( 'action' );
      var posting = $.post( url, { start: $('#start').val(), end: $('#end').val() } );
var start = $('#start').val();
var end = $('#end').val();
posting.done(function( data ) {
   var directionsService = new google.maps.DirectionsService();
   var directionsDisplay = new google.maps.DirectionsRenderer();
   var myOptions = {
     zoom:7,
     mapTypeId: google.maps.MapTypeId.ROADMAP
   }
   var map = new google.maps.Map(document.getElementById("map"), myOptions);
   directionsDisplay.setMap(map);
   var request = {
       origin: start,
       destination: end,
       travelMode: google.maps.DirectionsTravelMode.DRIVING
   };
   directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
		  $("#map").show();
var center = map.getCenter();
google.maps.event.trigger(map, "resize");
map.setCenter(center);
         document.getElementById('distance').innerHTML = 
           "UberX cost: RM" + Math.round( (7+(response.routes[0].legs[0].distance.value*0.000621371*1.5)+(response.routes[0].legs[0].duration.value/60*.30)) *100 ) /100;
         document.getElementById('distance11').innerHTML = 
           "UberLUX cost: RM" + Math.round( (10+(response.routes[0].legs[0].distance.value*0.000621371*1.5)+(response.routes[0].legs[0].duration.value/60*.42)) *100 ) /100;
         document.getElementById('distance12').innerHTML = 
           "UberBlack cost: RM" + Math.round( (7.5+(response.routes[0].legs[0].distance.value*0.000621371*1.5)+(response.routes[0].legs[0].duration.value/60*.38)) *100 ) /100;
         document.getElementById('distance2').innerHTML = 
           "MyTeksi cost: RM" + Math.round( (7.5+(response.routes[0].legs[0].distance.value*0.000621371*1.5)+(response.routes[0].legs[0].duration.value/60*.42)) *100 ) /100;
         document.getElementById('distance3').innerHTML = 
           "EasyTeksi cost: RM" + Math.round( (7.5+(response.routes[0].legs[0].distance.value*0.000621371*1.5)+(response.routes[0].legs[0].duration.value/60*.44)) *100 ) /100;
         document.getElementById('duration').innerHTML = 
            "Time to location: " + Math.round( (response.routes[0].legs[0].duration.value/60) *100 ) / 100 + " minutes";
         document.getElementById('OpenApp').innerHTML = 
            "<a href='uber://?action=setPickup&pickup=my_location'>Open Uber App</a>";
         directionsDisplay.setDirections(response);
      }
   });
  });
    });
