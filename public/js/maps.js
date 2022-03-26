$(document).ready(function() {

    const jakarta = {
        lat: -6.200000,
        lng: 106.816666
    };

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: jakarta,
        mapTypeId: "roadmap"
    })

    var asal = document.getElementById("asal")
    var tujuan = document.getElementById("tujuan")
    var autocomplete = new google.maps.places.Autocomplete(asal, {
        componentRestrictions: {
            country: "idn"
        },
        strictBounds: false,
        fields: ["address_components", "geometry", "icon", "name"],
        types: ["address"],
    });
    var autocomplete1 = new google.maps.places.Autocomplete(tujuan, {
        componentRestrictions: {
            country: "idn"
        },
        strictBounds: false,
        fields: ["address_components", "geometry", "icon", "name"],
        types: ["address"],
    });
    tujuan.focus()
    asal.focus();
    // When the user selects an address from the drop-down, populate the
    // address fields in the form.

    $("#formRute").submit(function(e) {

        e.preventDefault();
        //ambil value dari form input asal
        var asal = $("#asal").val();
        //ambil value dari form input tujuan
        var tujuan = $("#tujuan").val();

        //cek apakah asal dan tujuan kosong
        if (asal == "") {
            alert("Tempat asal tidak boleh kosong!");
        } else if (tujuan == "") {
            alert("Tempat tujuan tidak boleh kosong!");
        } else {

            var directionsService = new google.maps.DirectionsService();
            var directionsDisplay = new google.maps.DirectionsRenderer();
            var mapOptions = {
                zoom: 20,
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('panel'));

            var start = asal;
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
                        tempatjarak.innerHTML = "<span class='text-danger'>" + result.routes[0].legs[0].distance.text + "</span>"
                        tempatwaktu.innerHTML = "<span class='text-danger'>" + waktu + "</span>"
                    } else {

                        tempatjarak.innerHTML = "<span class='text-success'>" + result.routes[0].legs[0].distance.text + "</span>"
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

    });


});