function initMap() {
    var gymnase = {lat: 48.8382718, lng: 2.5503758};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: gymnase,
        styles: [{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}]


    });
    var marker = new google.maps.Marker({
        position: gymnase,
        map: map
    });
}