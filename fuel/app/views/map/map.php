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

        $.ajax({
            url: "<?= Uri::create('api/stations.json')?>",
            beforeSend: function (xhr) {
                $('#map').block()
            }
        }).done(function (data) {
            var obj = jQuery.parseJSON(data);
            console.log(obj);
            $.each(obj, function (i, item) {
                createMarker(map, item);
            });
            $('#map').unblock()
        });
    }

    function createMarker(map, station) {
        var contentString = '<div id="marker'+station.stn+'">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading">' + station.name + '</h1>' +
            '<div id="bodyContent">' +
            '<canvas id="Chart'+station.stn+'" width="400" height="400"></canvas>' +
            '</div>' +
            '</div>';

        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var pos = {lat: parseFloat(station.latitude), lng: parseFloat(station.longitude)};

        var marker = new google.maps.Marker({
            position: pos,
            map: map,
            title: station.name
        });
        marker.addListener('click', function () {
            infowindow.open(map, marker);
            //$('#marker'+station.stn).block({ message: '' });
            // Get the context of the canvas element we want to select
            var ctx = document.getElementById("Chart"+station.stn).getContext("2d");
            var myNewChart = new Chart(ctx).line(data,{});

            $.ajax({
                url: "<?= Uri::create('api/station.json?stn=')?>"+station.stn,
                beforeSend: function (xhr) {
                   // $('#map').block()
                }
            }).done(function (data) {
                console.log('data');
            });
        });
    }
</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOh1BKXh1Xfi4npeMzk_6VVOnAyZrwsmk&signed_in=true&callback=initMap"></script>
<?= \Fuel\Core\Asset::js(['jquery.blockUI.js','Chart.js']) ?>