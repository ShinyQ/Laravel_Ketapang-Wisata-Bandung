<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail Paket | {{ $data->nama }}</title>
  </head>
  <body>
  <section class="transaksi-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Paket Merakyat</h2>
                    <p>Destinasi Wisata</p>
                    <div class="owl-carousel">
                        <div class="item">
                            <h4>1</h4>
                        </div>
                        <div class="item">
                            <h4>2</h4>
                        </div>
                        <div class="item">
                            <h4>3</h4>
                        </div>
                        <div class="item">
                            <h4>4</h4>
                        </div>
                    </div>
                    <div class="detail-content-pkt">
                        <ul class="destinasi-pkt">
                            <li>Floating Market Lembang</li>
                            <li>Farmhouse Lembang</li>
                            <li>Gedung Sate</li>
                            <li>Alun – Alun Bandung</li>
                            <li>Gedung Asia Afrika</li>
                        </ul>
                    </div>

                    <div class="map-pkt" id="mapWisata">

                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-book">
            <div class="booking-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h4>Rp1.600.000</h4>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <button class="btn btn-primary" style="width: 100%">Booking Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
  <script>
     let locationArrPkt = []

$(".destinasi-pkt li").each(function (a) {
    locationArrPkt.push($(this).text())
})


function initMap() {
    const map = new google.maps.Map(document.getElementById("mapPaket"), {
        center: { lat: -6.893396, lng: 107.62067 },
        zoom: 12
    });

    const geocoder = new google.maps.Geocoder();

    geoLocation(geocoder, map);
}

function geoLocation(geocoder, mapResults) {

    locationArrPkt.map(location => {
        geocoder.geocode({ address: location }, function (res, status) {
            if (status == "OK") {
                // mapResults.setCenter(res[0].geometry.location);
                const marker = new google.maps.Marker({
                    map: mapResults,
                    position: res[0].geometry.location
                });

                marker.addListener('click', () => {
                    console.log('clicked')
                    mapResults.setZoom(15);
                    mapResults.setCenter(res[0].geometry.location)
                })
            } else {
                console.log(status);
            }
        });
    })

}
  </script>
</html>
