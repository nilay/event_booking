
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 40.73, lng: -73.93},
        zoom: 12
    });

    markMap(map);
}

function markMap(map){

	var infowindow = new google.maps.InfoWindow();

	$.getJSON( "api/events", function( data ) {
	  $.each( data, function( key, event ) {
		
		var marker = new google.maps.Marker({
		  position: {lat: parseFloat(event.hall.latitude), lng: parseFloat(event.hall.longitude)},
		  map: map,
		  title: event.name
		});

		
		google.maps.event.addListener(marker, 'click', (function(marker, key) {
	        return function() {
	          infowindow.setContent(getEventInfo(event));
	          infowindow.open(map, marker);
	        }
      	})(marker, key));



	  });
	});
}

function getEventInfo(event){
	return '<h5>' + event.name + '</h5>' +
		'<p>At ' + event.hall.name + '</p>' +
		'<p>From: <span style="color:blue">' + new Date(event.from_date).toLocaleDateString() + '</span>&nbsp; To:  <span style="color:blue">' + new Date(event.to_date).toLocaleDateString() + '</span></p>' +
		'<p class="pull-right"><a class="btn btn-primary" href="/events/' + event.id + '/hall"> Book your place </a></p>';
}

