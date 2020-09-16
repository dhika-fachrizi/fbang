if ($('#gmaps').val() != '') {
    var dtm = JSON.parse($('#gmaps').val());
    var gmaps = {
        lat: dtm.lat,
        lng: dtm.lng,
        name: dtm.name,
    }
    $('#autocomplete').val(dtm.name)
} else {
    var gmaps = {
        lat: 0,
        lng: 0,
        name: "",
    }
}

function initMap() {

    map = new google.maps.Map(document.getElementById("map"), {
        mapTypeControl: false,
        panControl: false,
        zoomControl: false,
        streetViewControl: false,
        zoom: 15,
        center: {
            lat: gmaps.lat,
            lng: gmaps.lng
        }
    });
    var input = document.getElementById('autocomplete');
    var options = {

        componentRestrictions: {
            country: 'ID'
        }
    };
    autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.addListener("place_changed", onPlaceChanged);

    const marker = new google.maps.Marker({
        draggable: true,
        position: {
            lat: gmaps.lat,
            lng: gmaps.lng
        },
        map: map
    });

    marker.addListener('dragend', handleEvent);


}

function handleEvent(event) {
    //document.getElementById('lat').val
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({
        latLng: event.latLng
    }, function(responses) {
        if (responses && responses.length > 0) {
            console.log(responses[0]);
            gmaps.lat = responses[0].geometry.location.lat();
            gmaps.lng = responses[0].geometry.location.lng();
            gmaps.name = responses[0].formatted_address;
            document.getElementById('autocomplete').value = responses[0].formatted_address;
            console.log(gmaps);
            $("#gmaps").val(JSON.stringify(gmaps));
        } else {
            console.log('Cannot determine address at this location.');
        }
    });


    // /ue = event.latLng.lat();
    //.getElementById('lng').value = event.latLng.lng();
    //console.log(map.getPlace());
}

function onPlaceChanged() {
    const place = autocomplete.getPlace();
    const marker = new google.maps.Marker({
        position: place.geometry.location,
        draggable: true,
        animation: google.maps.Animation.DROP,
        map: map
    });

    gmaps.lat = place.geometry.location.lat();
    gmaps.lng = place.geometry.location.lng();
    gmaps.name = place.formatted_address;
    console.log(gmaps);
    $("#gmaps").val(JSON.stringify(gmaps));
    marker.addListener('dragend', handleEvent);
    // console.log(google.maps.places);
    google.maps.event.addListener(marker);
    if (place.geometry) {
        map.panTo(place.geometry.location);
        map.setZoom(15);

    } else {
        document.getElementById("autocomplete").placeholder = "Enter a city";
    }
}