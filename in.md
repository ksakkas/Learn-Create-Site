<html>
  <head>
  <style>
    .ml3 {
    font-weight: 900;
    font-size: 1.8em;
    }
     .ml4 {
    font-weight: 900;
    font-size: 1.8em;
    }
    .ml5 {
    font-weight: 900;
    font-size: 1.8em;
    }
    .ml6 {
    font-weight: 900;
    font-size: 1.8em;
    }
    </style>
  </head>
<body>
<h1> Learn HTML-CSS-JS-PHP-SQL-DB</h1>
<p> Τμήμα Πληροφορικής & Τηλεπικοινωνιών </p>
<p> Κωνσταντίνος Σακκάς</p>
  <p>Copyright © 2020 Κωνσταντίνος Σακκάς. Με την επιφύλαξη παντός δικαιώματος</p>
  <h1></h1>
  <hr>

<h1 class="ml3">HTML</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<ul>
<li><a href="./Εισαγωγή%20στην%20HTML">Εισαγωγή στην HTML</a></li>
<li><a href="./Βίντεο%20και%20Ήχος%20στην%20HTML/">Βίντεο και Ήχος στην HTML</a></li>
<li><a href="./Φόρμες%20στην%20HTML">Φόρμες στην HTML</a></li>
<li><a href="./Ασκήσεις%20HTML%2C%20CSS%2C%20JS">Ασκήσεις HTML, CSS, JS</a></li>
<li><a href="./Διαφάνειες%20HTML%2C%20CSS%2C%20JS%2C%20PHP">Διαφάνειες HTML, CSS, JS, PHP</a></li>
</ul>
<hr style="height:2px;border-width:0;color:gray;background-color: #008080">
<h1 class="ml4">CSS</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<ul>
<li><a href="./Εισαγωγή%20στην%20CSS">Εισαγωγή στην CSS</a></li>
<li><a href="./Ασκήσεις%20HTML%2C%20CSS%2C%20JS">Ασκήσεις HTML, CSS, JS</a></li>
<li><a href="./Διαφάνειες%20HTML%2C%20CSS%2C%20JS%2C%20PHP">Διαφάνειες HTML, CSS, JS, PHP</a></li>
</ul>
<hr style="height:2px;border-width:0;color:gray;background-color: #008080">

<h1 class="ml5">JAVASCRIPT</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<ul>
<li><a href="./Εισαγωγή%20στην%20JavaScript">Εισαγωγή στην JAVASCRIPT</a></li>
<li><a href="./Ασκήσεις%20HTML%2C%20CSS%2C%20JS">Ασκήσεις HTML, CSS, JS</a></li>
<li><a href="./Διαφάνειες%20HTML%2C%20CSS%2C%20JS%2C%20PHP">Διαφάνειες HTML, CSS, JS, PHP</a></li>
</ul>
<hr style="height:2px;border-width:0;color:gray;background-color: #008080">

<h1 class="ml6">PHP</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<ul>
<li><a href="./Εισαγωγή%20στην%20PHP">Εισαγωγή στην PHP</a></li>
<li><a href="./Φόρμες%20και%20Βάση%20Δεδομένων%20στην%20PHP">Φόρμες και Βάση Δεδομένων στην PHP</a></li>
<li><a href="./Εξειδικευμένη%20PHP">Εξειδικευμένη PHP</a></li>
<li><a href="./Αντικειμενοστραφής%20στην%20PHP">Αντικειμενοστραφής στην PHP</a></li>
<li><a href="./PHP">Ασκήσεις στην PHP</a></li>
<li><a href="./Διαφάνειες%20HTML%2C%20CSS%2C%20JS%2C%20PHP">Διαφάνειες HTML, CSS, JS, PHP</a></li>
</ul>

<script>
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml3');
var textWrapper2 = document.querySelector('.ml4');
var textWrapper3 = document.querySelector('.ml5');
var textWrapper4 = document.querySelector('.ml6');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper3.innerHTML = textWrapper3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper4.innerHTML = textWrapper4.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 80 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 90 * (i+1)
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml5 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 100 * (i+1)
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2250,
    delay: (el, i) => 110 * (i+1)
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
</body>
</html>
