// AOS
AOS.init({
  duration: 1200
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