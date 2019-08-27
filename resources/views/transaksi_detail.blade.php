@extends('template.navigation2')

@section('konten')
<section class="transaksi-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Paket Misqueen</h2>
                    <p>Isinya paket miskin</p>
                </div>
                <div class="col-lg-6">
                    <h6>Status: <span style="color:red">Unpaid</span></h6>
                    <div class="payment-method">
                        <span>Please choose your preferred payment method</span>
                        <hr>
                        <img src="https://upload.wikimedia.org/wikipedia/id/f/fa/Bank_Mandiri_logo.svg"
                            alt="mandiri-logo" height="30">
                        <hr>
                        <div class="container">
                            <p style="text-align: center">Mandiri 130119427660 <br>
                                a/n Ketapang Tours<br>
                                Telkom University Bandung 40257</p>
                        </div>
                        <button class="btn btn-primary" id="buttonUpload" style="width: 100%">Upload Bukti
                            Pembayaran</button>
                        <input type="file" id="buktiUpload" style="display: none" />
                    </div>
                    <h4>Total: <span>Rp2.000.000</span></h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <h5>Invoiced To</h5>
                    <p>Muhammad Ilham Mubarak</p>
                </div>
                <div class="col-lg-6">
                    <h5>Pay to</h5>
                    <p>Ketapang</p>
                </div>
            </div>
        </div>
    </section>

    <script>
    $("#buttonUpload").click(function () {
        $("#buktiUpload").click()
    })
</script>

    @endsection