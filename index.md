<html>
  <head>
  	<link rel="icon" href="favicon.ico" type="image/png" />
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
    .ml7 {
    font-weight: 900;
    font-size: 1.8em;
    }
    
.hamburger-icon {
  position: absolute;
  z-index: 1;
  top: 5vh;
  left: 5vw;
  padding-bottom: 2vh;
}

.hamburger-icon span {
  height: 5px;
  width: 40px;
  background-color: black;
  display: block;
  margin: 5px 0px 5px 0px;
  transition: 0.7s ease-in-out;
  transform: none;
}

#openmenu:checked ~ .menu-pane {
  left: -5vw;
  transform: translateX(-5vw);
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(2) {
  transform: translate(0%, 175%) rotate(-45deg);
  background-color: white;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(3) {
  transform: rotate(45deg);
  background-color: white;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(1) {
  opacity: 0;
}

#openmenu:checked ~ .hamburger-icon span:nth-of-type(4) {
  opacity: 0;
}

div.menu-pane {
  background-color: #000;
  position: absolute;
  transform: translateX(-105vw);
  transform-origin: (0, 0);
  width: 100vw;
  height: 100%;
  transition: 0.6s ease-in-out;
}

.menu-pane p {
  color: black;
  font-size: 0.6em;
}

.menu-pane nav {
  padding: 10%;
}

.menu-links li, a, span {
      transition: 0.5s ease-in-out;
}

.menu-pane ul {
  padding: 10%;
  display: inline-block;
}

.menu-pane li {
  padding-top: 20px;
  padding-bottom: 20px;
  margin-left: 10px;
    font-size: 1em;
}


.menu-pane li:first-child {
  font-size: 1.3em;
  margin-left: -10px;
}


.menu-links li a {
  color: white;
  text-decoration: none;
}


.menu-links li:hover a {
  color: #FFAB91;
}

.menu-links li:first-child:hover a {
  color: black;  
  background-color: #FFAB91;
}

#QC-info {
  background-color: #FFAB91;
    border: 2px solid;
  border-color: #FFAB91;
display: block;
  opacity: 0;
  
}

.menu-links li:first-child:hover #QC-info {
opacity: 1;
}

.menu-links li:first-child:hover #DC-info {
opacity: 1;
}

#DC-info {
  background-color: #FFAB91;
    border: 2px solid;
  border-color: #FFAB91;
display: block;
  opacity: 0;
}


.menu-links li:first-child a {
  padding: 5px;
}



input.hamburger-checkbox {
  position: absolute;
  z-index: 3;
  top: 5vh;
  left: 5vw;
  width: 10vw;
  opacity: 0;
  height: 6vh;
}

    </style>
  </head>
<body>

<h1> Learn HTML-CSS-JS-PHP-SQL-DB</h1>
<p> Τμήμα Πληροφορικής & Τηλεπικοινωνιών </p>
<p> Κωνσταντίνος Σακκάς</p>
  <p>Copyright © 2021 Κωνσταντίνος Σακκάς. Με την επιφύλαξη παντός δικαιώματος</p>
  <h1></h1>
<hr style="height:3px;border-width:0;color:gray;background-color: #990033">
<div class="menu-container">
  
  <input type="checkbox" id="openmenu" class="hamburger-checkbox">
  
  <div class="hamburger-icon">
    <label for="openmenu" id="hamburger-label">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </label>    
  </div>

    <div class="menu-pane">
      
      <nav>
        <ul class="menu-links">
          <li><a href="###">Québec, QC</a><span id="QC-info">
            <p>+1 418-640-3300</p>
          </span>
            
          </li>
          
          <li><a href="###">déjeuner</a>
           
          </li>
          <li><a href="###">boulangerie</a></li>
          <li><a href="###">boissons</a></li>
        </ul>
         <ul class="menu-links">
                     <li><a href="###">Washington, DC</a>
                       <span id="DC-info">
            <p>+1 202-472-3850</p>
          </span></li>

          <li><a href="###">breakfast</a></li>
          <li><a href="###">
            bakery            
            </a></li>
          <li><a href="###">bar</a></li>
        </ul>
        
        
      </nav>
    </div>
</div>
<h1 class="ml3">HTML</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<ul>
<li><a href="./Εισαγωγή%20στην%20HTML">Εισαγωγή στην HTML</a></li>
<li><a href="./Βίντεο%20και%20Ήχος%20στην%20HTML/">Βίντεο και Ήχος στην HTML</a></li>
<li><a href="./Φόρμες%20στην%20HTML">Φόρμες στην HTML</a></li>
<li><a href="./Ασκήσεις%20HTML,%20CSS,%20JS">Ασκήσεις HTML, CSS, JS</a></li>
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
<h1 class="ml7">My Project</h1>
<ul>
<li><a href="./Project">My Project</a></li>
</ul>

<script>
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml3');
var textWrapper2 = document.querySelector('.ml4');
var textWrapper3 = document.querySelector('.ml5');
var textWrapper4 = document.querySelector('.ml6');
var textWrapper5 = document.querySelector('.ml7');

textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper3.innerHTML = textWrapper3.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper4.innerHTML = textWrapper4.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
textWrapper5.innerHTML = textWrapper5.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2150,
    delay: (el, i) => 60 * (i+1)
  }).add({
    targets: '.ml3',
    opacity: 0,
    duration: 500,
    easing: "easeOutExpo",
    delay: 100
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2150,
    delay: (el, i) => 60 * (i+1)
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    easing: "easeOutExpo",
    delay: 100
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml5 .letter', 
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2150,
    delay: (el, i) => 60 * (i+1)
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 500,
    easing: "easeOutExpo",
    delay: 100
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2150,
    delay: (el, i) => 60 * (i+1)
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 500,
    easing: "easeOutExpo",
    delay: 100
  });

  anime.timeline({loop: true})
  .add({
    targets: '.ml7 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 2150,
    delay: (el, i) => 60 * (i+1)
  }).add({
    targets: '.ml7',
    opacity: 0,
    duration: 500,
    easing: "easeOutExpo",
    delay: 100
  });
</script>
</body>
</html>
