// function submit() {
//     $("checkout").submit()
// }

// var cartproduk = document.getElementsByClassName("cartproduk")
// var total = []
// for (var i = 0; i < cartproduk.length; i++) {
//     var ini = parseFloat(cartproduk[i].innerHTML.replace("Rp ", ""))

//     total.push(ini)
// }

// let sum = 0;
// for (var i = 0; i < total.length; i++) {
//     sum += total[i];
// }
// document.getElementById("total").innerHTML = sum


// function QuantityChanged(event) {
//     var input = event.target
//     if (isNaN(input.value) || input.value <= 0) {
//         input.value = 1
//     }
//     var inputjumlah = document.getElementById("inputjumlah")
//     inputjumlah.value = input.value



//     updateTotal()
// }

// function updateTotal() {
//     var input = document.getElementsByClassName("input")
//     var containerproduk = document.getElementsByClassName("containerproduk")
//     var total = 0
//     for (var i = 0; i < containerproduk.length; i++) {
//         var dataharga = containerproduk[i].getElementsByClassName("hargaproduk")[0]
//         var jumlahbarang = containerproduk[i].getElementsByClassName("cartproduk")[0]
//         var harga = parseFloat(dataharga.value.replace("Rp ", ''))


//         var datajumlah = input[i]
//         var jumlah = datajumlah.value

//         total = total + (harga * jumlah)
//         jumlahbarang.innerText = "Rp " + harga * jumlah

//     }
//     document.getElementById("total").innerText = `Rp ${total}`
//     document.getElementById("inputtotal").value = `Rp ${total}`
// }