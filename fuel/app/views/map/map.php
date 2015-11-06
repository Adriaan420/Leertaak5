<div id="map"></div>
<script>
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.

    function initMap() {
        var uluru = {lat: 52.10, lng: 5.34};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 2,
            center: uluru
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Weerstation 23391282</h1>'+
            '<div id="bodyContent">'+
            '<p>Hier komt realtime informatie te staan over het weerstation'+
            '<br>hurblurblu'+
            '</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOh1BKXh1Xfi4npeMzk_6VVOnAyZrwsmk&signed_in=true&callback=initMap"></script>
