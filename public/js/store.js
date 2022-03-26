if (document.readyState == 'loading') {
    document.addEventListener("DOMContentLoaded", ready)
} else {
    ready()
}


function submit() {
    $("checkout").submit()
}

function ready() {
    var input = document.getElementsByClassName("input")
    for (var i = 0; i < input.length; i++) {
        updateTotal()
        input[i].addEventListener("change", QuantityChanged)
    }
}

function QuantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    var inputjumlah = document.getElementById("inputjumlah")
    inputjumlah.value = input.value



    updateTotal()
}

function updateTotal() {
    var input = document.getElementsByClassName("input")
    var containerproduk = document.getElementsByClassName("containerproduk")
    var total = 0
    for (var i = 0; i < containerproduk.length; i++) {
        var dataharga = containerproduk[i].getElementsByClassName("hargaproduk")[0]
        var jumlahbarang = containerproduk[i].getElementsByClassName("cartproduk")[0]
        var harga = parseFloat(dataharga.value.replace("Rp ", ''))


        var datajumlah = input[i]
        var jumlah = datajumlah.value

        total = total + (harga * jumlah)
        jumlahbarang.innerText = "Rp " + harga * jumlah

    }
    document.getElementById("total").innerText = `Rp ${total}`
    document.getElementById("inputtotal").value = `Rp ${total}`
}