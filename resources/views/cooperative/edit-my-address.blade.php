<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- MY CSS --}}
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate-main.css">
    <link rel="stylesheet" href="css/bgjar.css">
    <link rel="stylesheet" href="css/izmir.css">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="../images/Logo EzSchool.png" type="image/x-icon">

    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <script src="https://kit.fontawesome.com/4afc99932b.js" crossorigin="anonymous"></script>

    {{-- API Maps --}}
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBsZrS5LkAXAqzgVYMJQQMYOoWgYCHHZTU&libraries=places"
        type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="../css/trix.css">
    <script type="text/javascript" src="../js/trix.js"></script>


    <title>Edit My Address | EzSchool</title>
    <style>
        #map {
            width: 100%;
            height: 700px;
            margin-top: 50px;
        }

    </style>
</head>

<body>
    <div class="card border-rd my-5 mx-5 p-5">
        <a href="/my-address" class="text-main fw-bold mb-3"><i class="fa-solid fa-angles-left me-2"></i>Back</a>
        <form class="form-horizontal" id="formRute">
            <div class="form-group">
                <div class="mb-2 form-floating font-poppins">
                    <input autocomplete="off" type="text" name="asal" class="form-control" id="asal"
                        placeholder="name@example.com">
                    <label for="asal" class="fw-bold">Your Address</label>
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" name="tujuan" id="tujuan" value="SMKN 26 Jakarta">
            </div>
            <button type="submit" class="btn bg-main rounded text-white fw-bold px-4 py-2"><i
                    class="fa-solid fa-route me-2"></i>Direction
                Now</button>

            <button type="button" onclick="myPosition()" class="btn bg-main rounded text-white fw-bold px-4 py-2"><i
                    class="fa-solid fa-location-dot me-2"></i>My position now</button>
            <small class="font-courier text-danger d-block" id="x"></small>


            <div class="card rounded mt-5 p-3 detailaddress">
                <div class="card-title fw-bold font-poppins text-main">Information</div>
                <small class="font-poppins mb-2 text-dark fw-bold">Detail Address</small>
                <div class="d-flex justify-content-between mb-1">
                    <small class="font-montserrat text-dark fw-bold ms-3">From</small>
                    <small class="font-montserrat text-dark text-end"><span id="from"></span></small>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <small class="font-montserrat text-dark fw-bold ms-3">To</small>
                    <small class="font-montserrat text-dark text-end"><span id="to"></span></small>
                </div>


                <small class="font-poppins mb-2 text-dark fw-bold">Estimated</small>
                <div class="d-flex justify-content-between mb-1">
                    <small class="font-montserrat text-dark fw-bold ms-3">Distance</small>
                    <small class="font-montserrat text-dark fw-bold"><span id="jarak"></span></small>
                </div>
                <div class="d-flex justify-content-between mb-1">
                    <small class="font-montserrat text-dark fw-bold ms-3">Duration</small>
                    <small class="font-montserrat text-dark fw-bold"><span id="waktu"></span></small>
                </div>

                <div id="map"></div>
                <button type="button" data-bs-toggle="modal" data-bs-target="#modaladdress"
                    class="btn bg-main rounded text-white fw-bold px-4 py-2"><i
                        class="fa-solid fa-location-crosshairs me-2"></i>Add
                    address</button>
            </div>
        </form>



    </div>




    <div class="modal fade" id="modaladdress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">One more step to add address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/my-address" method="POST">
                        @csrf

                        <div class="form-floating font-poppins">
                            <input autocomplete="off" type="text" name="inputalamat"
                                class="form-control form-control-plaintext" id="inputalamat"
                                placeholder="name@example.com" readonly>
                            <label for="inputalamat" class="fw-bold">Address</label>
                        </div>
                        <div class="form-floating font-poppins">
                            <input autocomplete="off" type="text" name="inputjarak"
                                class="form-control form-control-plaintext" id="inputjarak"
                                placeholder="name@example.com" readonly>
                            <label for="inputjarak" class="fw-bold">Distance</label>
                        </div>
                        <div class="form-floating font-poppins">
                            <input autocomplete="off" type="text" name="inputwaktu"
                                class="form-control form-control-plaintext" id="inputwaktu"
                                placeholder="name@example.com" readonly>
                            <label for="inputwaktu" class="fw-bold">Duration</label>
                        </div>
                        <div class="form-floating font-poppins mt-4">
                            <input autocomplete="off" type="text" name="note" class="form-control" id="shippingnote"
                                placeholder="name@example.com">
                            <label for="shippingnote" class="fw-bold">Note</label>
                        </div>


                </div>
                <div class="modal-footer font-poppins">
                    <button type="submit" class="btn bg-main text-white fw-bold">Save Address</button>

                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->

    <!-- GSAP -->

    <script type="text/javascript">
        function myPosition() {
            var x = document.getElementById("x")
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, failure);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }

            function success(position) {
                var tujuan = document.getElementById("tujuan").value


                var directionsService = new google.maps.DirectionsService();
                var directionsDisplay = new google.maps.DirectionsRenderer();

                var mapOptions = {
                    zoom: 20,
                    mapTypeId: "ROADMAP"
                }

                var map = new google.maps.Map(document.getElementById('map'), mapOptions);

                directionsDisplay.setMap(map);
                directionsDisplay.setPanel(document.getElementById('panel'));

                var myLat = position.coords.latitude
                var myLong = position.coords.longitude

                var start = new google.maps.LatLng(myLat, myLong);
                var end = tujuan;

                var request = {
                    origin: start,
                    destination: end,
                    travelMode: 'DRIVING'
                };


                directionsService.route(request, function(result, status) {
                    if (status == 'OK') {

                        var jarak = result.routes[0].legs[0].distance.value
                        var waktu = result.routes[0].legs[0].duration.text

                        var tempatjarak = document.getElementById("jarak")
                        var tempatwaktu = document.getElementById("waktu")
                        var start = document.getElementById("from")
                        var end = document.getElementById("to")

                        start.innerHTML = "<span class=''>" + result.routes[0].legs[0].end_address + "</span>"
                        end.innerHTML = "<span class=''>" + result.routes[0].legs[0].start_address + "</span>"

                        if (jarak > 10000) {
                            tempatjarak.innerHTML = "<span class='text-danger'>" + result.routes[0].legs[0].distance
                                .text + "</span>"
                            tempatwaktu.innerHTML = "<span class='text-danger'>" + waktu + "</span>"
                        } else {

                            tempatjarak.innerHTML = "<span class='text-success'>" + result.routes[0].legs[0]
                                .distance.text + "</span>"
                            tempatwaktu.innerHTML = "<span class='text-success'>" + waktu + "</span>"

                        }

                        var jarak = result.routes[0].legs[0].distance.value / 1000
                        var jarak = jarak.toFixed(2)

                        var waktu = result.routes[0].legs[0].duration.value / 60
                        var waktu = waktu.toFixed(2)

                        document.getElementById("inputalamat").value = result.routes[0].legs[0].start_address
                        document.getElementById("inputjarak").value = jarak
                        document.getElementById("inputwaktu").value = waktu


                        directionsDisplay.setDirections(result);
                    } else {
                        directionsDisplay.setDirections({
                            routes: []
                        })
                    }
                });
            }

            function failure(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        x.innerHTML =
                            "<i class='fa-solid fa-circle-exclamation me-2'></i>Failed get your position, user denied the request for Geolocation."
                        break;
                    case error.POSITION_UNAVAILABLE:
                        x.innerHTML = "Location information is unavailable."
                        break;
                    case error.TIMEOUT:
                        x.innerHTML = "The request to get user location timed out."
                        break;
                    case error.UNKNOWN_ERROR:
                        x.innerHTML = "An unknown error occurred."
                        break;
                }
            }
        }
    </script>

    <script src="../js/maps.js"></script>
    <script src="https://kit.fontawesome.com/0968712025.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- JS Toastr --}}
    <script>
        @if (session()->has('berhasil'))
            toastr.success("{{ session('berhasil') }}")
        @endif

        @if (session()->has('gagal'))
            toastr.error("{{ session('gagal') }}")
        @endif

        @if (session()->has('login'))
            toastr.info("{{ session('login') }}")
        @endif
    </script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Akhir Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
