// Mansory Libarary Initialization
$(".gallery-detail").masonry({
  itemSelector: ".grid-item",
  columnWidth: 350,
  gutter: 10
});

// AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -6.903363, lng: 107.6081381 },
    zoom: 16
  });

  const geocoder = new google.maps.Geocoder();

  geoLocation(geocoder, map);
}

function geoLocation(geocoder, mapResults){
  const address = $("#alamatWisata").text();
  geocoder.geocode({'address':address},function(res, status){
    if(status=="OK"){
      mapResults.setCenter(res[0].geometry.location);
      const marker = new google.maps.Marker({
        map:mapResults,
        position: res[0].geometry.location
      });
    } else{
      console.log(status);
    }
  })
}
