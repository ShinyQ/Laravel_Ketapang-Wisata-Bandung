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

function geoLocation(geocoder, mapResults) {
  const address = $("#alamatWisata").text();
  geocoder.geocode({ address: address }, function(res, status) {
    if (status == "OK") {
      mapResults.setCenter(res[0].geometry.location);
      const marker = new google.maps.Marker({
        map: mapResults,
        position: res[0].geometry.location
      });
    } else {
      console.log(status);
    }
  });
}

// Owl Carousel
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:18,
  items:2,
  center:true,
  responsive:{
      0:{
          items:1,
          center:false
      },
      600:{
          center:false,
          items:2
      },
      1000:{
          items:2
      }
  }
})


// Fetch News API

const newsUrl =
  "https://newsapi.org/v2/everything?apiKey=f8fd87d48cf746e0a817a4f7a21bafe4&q=bandung AND (wisata OR travel OR turis OR alam OR pemandangan)&language=id";
axios.get(newsUrl).then(resp => {
  for (let i = 0; i < 6; i++) {
    $("#newsContainer").append(`
    <div class="col-md-4 col-sm-6 col-xs-6">
    <a href="${resp.data.articles[i].url}" target="_blank">
    <div class="news-card" style='background-image:url("${
      resp.data.articles[i].urlToImage
    }")'>
        <div class="news-content">
                <h5>${resp.data.articles[i].title}</h5>
                <p>${resp.data.articles[i].publishedAt}</p>
        </div>
    </div>
    </a>
</div>
    `);
  }
});
