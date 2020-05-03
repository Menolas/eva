function initMap() {
  var latLng = {lat: 59.93857, lng: 30.323};
  var mapCenter = {lat: 59.9388, lng: 30.323}
  var map = new google.maps.Map(document.getElementById("map-canvas"), {
    zoom: 16,
    center: mapCenter,
    mapTypeControl: false,
    streetViewControl: false,
    scrollwheel: false,
});

var image = "img/icon-map-pin.svg"
var marker = new google.maps.Marker({
  position: latLng,
  map: map,
  icon: image,
});
}

https://goo.gl/maps/QZLHFDJ7uSX316Mx7

<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2722.61223878996!2d31.96220711592559!3d46.96930817914761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YHQv9Cw0YDRgtCw!5e0!3m2!1sen!2sua!4v1588501238683!5m2!1sen!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>