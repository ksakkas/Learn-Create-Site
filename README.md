<html>
<head>
<style>
.ml2 {
  font-weight: 900;
  font-size: 2.5em;
}
.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}
</style>
</head>
<body>
<h1> Learn HTML-CSS-JS-PHP-SQL-DB</h1>
<p> Τμήμα Πληροφορικής & Τηλεπικοινωνιών </p>
<p> Κωνσταντίνος Σακκάς</p>
  <p>Copyright © 2020 Κωνσταντίνος Σακκάς. Με την επιφύλαξη παντός δικαιώματος</p>
  <h1></h1>
  
  

<ul>
  <li><a href="Εισαγωγή στην HTML" target="_blank"><h1>Εισαγωγή στην HTML</h1></a></li>
  <li><a href="Εισαγωγή στην CSS" target="_blank"><h1>Εισαγωγή στην CSS</h1></a></li>
  <li><a href="Σύνθετα Παραδείγματα HTML-CSS" target="_blank"><h1>Σύνθετα Παραδείγματα HTML-CSS</h1></a></li>

 </ul>



<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


 <script>
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
</body>
</html>
