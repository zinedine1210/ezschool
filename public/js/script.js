var distance = document.getElementById("distance").innerHTML

$("#shipping").on("change", function() {
    var data = document.getElementById("shipping").value
    if (data == "sameday") {
        var final = parseFloat(distance) * 2200
        var data = `Rp ${final}`
    } else if (data == "reguler") {
        var final = parseFloat(distance) * 1300
        var data = `Rp ${final}`
    }
    var subtotal = parseFloat(document.getElementById("subtotal").innerText.replace("Rp ", ""))
    var totalsemua = document.getElementById("totalsemua")


    var value = subtotal + final
    totalsemua.innerHTML = `Rp ${value}`

    document.getElementById("shippingPlace").innerHTML = data
    document.getElementById("shippingmethod").value = final
})


// AOS
AOS.init({
    duration: 1100
});
// Akhir AOS

// GSAP
gsap.registerPlugin(TextPlugin);

// gsap.from(".navbar", {
//   duration: 2,
//   y: -50,
//   ease: "bounce",
//   opacity: 0
// })

gsap.from('.jumbotron p', {
    duration: 4,
    text: ''
})
gsap.from('.info-number h1', {
    duration: 3,
    delay: 5,
    text: '---'
})

var slider = document.getElementsByClassName("myRange")
console.log(slider)