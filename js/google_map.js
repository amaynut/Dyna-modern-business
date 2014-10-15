/**
 * Created by said guerrab on 2014-10-15.
 */


var myCenter = new google.maps.LatLng(45.496485, -73.721474);
// Add a Home control that returns the user to the initial location
function HomeControl(controlDiv, map) {
    controlDiv.style.padding = '5px';
    var controlUI = document.createElement('div');
    controlUI.style.backgroundColor = '#232162';
    controlUI.style.border = '1px solid';
    controlUI.style.cursor = 'pointer';
    controlUI.style.textAlign = 'center';
    controlUI.title = 'Set map to Dynagroup location';
    controlDiv.appendChild(controlUI);
    var controlText = document.createElement('div');
    controlText.style.fontFamily = 'Arial,sans-serif';
    controlText.style.color = 'white';
    controlText.style.fontSize = '12px';
    controlText.style.paddingLeft = '4px';
    controlText.style.paddingRight = '4px';
    controlText.innerHTML = '<b>Dynagroup<b>'
    controlUI.appendChild(controlText);

    // Setup click-event listener: simply set the map to Dynagroup
    google.maps.event.addDomListener(controlUI, 'click', function () {
        map.setCenter(myCenter)
    });
}

function initialize() {
    var mapProp = {
        center: myCenter,
        zoom: 12,
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: true,
        streetViewControl: true,
        overviewMapControl: true,
        rotateControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    var marker = new google.maps.Marker({
        position: myCenter
    });
    // add info bull
    marker.setMap(map);
    var infowindow = new google.maps.InfoWindow({
        content: "Dynagroup-Technologies"
    });

    infowindow.open(map, marker);
    // add a zoom to click event on the marker
    // Zoom to 15 when clicking on marker
    google.maps.event.addListener(marker, 'click', function () {
        map.setZoom(15);
        map.setCenter(marker.getPosition());
    });
    google.maps.event.addListener(map, 'center_changed', function () {
// 5 seconds after the center of the map has changed, pan back to the marker
        window.setTimeout(function () {
            map.panTo(marker.getPosition());
        }, 100000);
    });
    // open the info window on click
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

    // Create a DIV to hold the control and call HomeControl()
    var homeControlDiv = document.createElement('div');
    var homeControl = new HomeControl(homeControlDiv, map);
//  homeControlDiv.index = 1;
    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(homeControlDiv);
}

google.maps.event.addDomListener(window, 'load', initialize);
