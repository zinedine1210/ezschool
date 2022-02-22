// AOS
AOS.init({
  duration: 1100
});
// Akhir AOS

// GSAP
gsap.registerPlugin(TextPlugin);

gsap.from(".navbar", {
  duration: 2,
  y: -50,
  ease: "bounce",
  opacity: 0
})

gsap.from('.jumbotron p', {
  duration : 4,
  text: ''
})
gsap.from('.info-number h1', {
  duration : 3,
  delay : 5,
  text: '---'
})

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}