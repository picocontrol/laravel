<html>
<head>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/JavaScript%20Main.js"></script>
<script src="js/tagcanvas.min.js" type="text/javascript"></script>
<script src="js/JclassListShim.js"></script>
<script src="js/jclassListShim2.js"></script>

<link href="css/Main.css" rel="stylesheet"/>
<link href="css/scrolling-nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<!-- NAV OVERLAY CSS -->
<link href="css/navoverlay.css" rel="stylesheet"/>
<!-- BUBBLE CSS -->
<link href="css/bubbles.css" rel="stylesheet"/>

<link href="css/lightbox.css" rel="stylesheet"/>

<link href="css/price.css" rel="stylesheet"/>



<!-- Open menu en sluit menu, sluiten werkt nog niet omdat svg aangeroepen wordt met img, dus closemenu en close.svg werkt niet -->
<script>
$(document).ready(function() {
  $('.open-menu').on('click', function() {
     $('.overlay').addClass('open');
  });
 
  $('.close-menu').on('click', function() {
    $('.overlay').removeClass('open');
  });
});
  </script>

<!-- NAV OVERLAY ON CLICK -->
 <script>
  window.console = window.console || function(t) {};
</script>
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
 <script type="text/javascript">
      window.onload = function() {
        try {
          TagCanvas.Start('myCanvas','tags',{
            textColour: '#ff0000',
            outlineColour: '#ff00ff',
            reverse: true,
            depth: 0.5,
            maxSpeed: 0.05
          });
        } catch(e) {
          // something went wrong, hide the canvas container
          document.getElementById('myCanvasContainer').style.display = 'none';
        }
      };
    </script>
<style>
@-moz-keyframes
fade-it { 0% {
    opacity:0
}
    100% {
        opacity:1
    }
}

@-webkit-keyframes
fade-it { 0% {
    opacity:0
}
    100% {
        opacity:1
    }
}

@keyframes
fade-it { 0% {
    opacity:0
}
    100% {
        opacity:1
    }
}

.js-fade-in-verb {
    animation-name: fade-it;
    animation-duration: 1s;
    animation-fill-mode: forwards;
    -webkit-animation-name: fade-it;
    -webkit-animation-duration: 1s;
    -webkit-animation-fill-mode: forwards
}

.verb.js-block { display: inline-block }

.verb.js-hide {
    display: none;
    opacity: 0
}

.verb {
    display: inline-block;
    visibility: visible;
}

.js-fade-in-verb2 {
    animation-name: fade-it;
    animation-duration: 1s;
    animation-fill-mode: forwards;
    -webkit-animation-name: fade-it;
    -webkit-animation-duration: 1s;
    -webkit-animation-fill-mode: forwards
}

.verb2.js-block { display: inline-block }

.verb2.js-hide {
    display: none;
    opacity: 0
}

.verb2 {
    display: inline-block;
    visibility: visible;
}

/* Zelf toegevoegde code */
.profiel {
    color: white;
}

span {
    color: white;
}

#polina { 
  background: rgba(0,0,0,0.3);
  color: white;
  font-size: 1.2rem;
  width: 100%;
}

#polina2 { 
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 100%;
  margin:2rem;
  font-size: 1.2rem;
}

</style>
</head>

<body id="page-top">

<!-- HEADER VIDEO -->

<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <!-- <source src="video/big_buck_bunny.webm" type="video/webm"> 
        <source src="video/big_buck_bunny.ogv" type="video/ogg">-->
<source src="video/day-timelapse.mp4" type="video/mp4">
    </video>
</div>

<!-- HEADER PARALLAX -->

<div id="main">
<div id="logo"><img src="img/logo-naam.png"></div>
<div id="mountainImg"><img src="img/bellen-transparant2.png" width="100%">

<!-- BUBBLE SCRIPT -->
<div class="bubbles-container">
<?php include( public_path() . '/svg/bubbles.svg');?> 
</div>
</div>
</div>
</div>

<!-- Overlay menu -->
<div class="overlay">
  <h2 class="nav-title">Navigation</h2>
  <nav class="overlay-menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Portfolio</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#" class="close-menu"><img src="/svg/close.svg" alt=""/></li>
    </ul>
  </nav>
</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
     


<!-- Navigatie button -->
    <section id="about">
    <div class="container2">
  
	<button class="button">
  <?php include( public_path() . '/svg/bubbles.svg');?> 

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" class="open-menu">
		    <g fill="none" fill-rule="evenodd">

			   <circle class="inner-circle" cx="60" cy="60" r="39" fill="#FFF"/>

			   <path class="menu-button" fill="#9B9B9B" fill-rule="nonzero" d="M58.486 56.324H57.19c-.48 0-.866.387-.866.865v1.29c0 .48.387.86.865.86h1.29c.48 0 .86-.39.86-.87v-1.29c0-.48-.39-.87-.87-.87zm-4.324 0h-1.297c-.478 0-.865.387-.865.865v1.29c0 .48.387.86.865.86h1.297c.478 0 .865-.39.865-.87v-1.29c0-.48-.387-.87-.865-.87zM58.486 52H57.19c-.48 0-.866.387-.866.865v1.297c0 .478.387.865.865.865h1.29c.48 0 .86-.387.86-.865v-1.297c0-.478-.39-.865-.87-.865zm-4.324 0h-1.297c-.478 0-.865.387-.865.865v1.297c0 .478.387.865.865.865h1.297c.478 0 .865-.387.865-.865v-1.297c0-.478-.387-.865-.865-.865zm12.973 4.324h-1.297c-.478 0-.865.387-.865.865v1.29c0 .48.387.86.865.86h1.297c.478 0 .865-.39.865-.87v-1.29c0-.48-.387-.87-.865-.87zm-4.324 0h-1.29c-.48 0-.86.387-.86.865v1.29c0 .48.39.86.87.86h1.3c.48 0 .87-.39.87-.87v-1.29c0-.48-.38-.87-.86-.87zM67.14 52h-1.3c-.48 0-.866.387-.866.865v1.297c0 .478.387.865.865.865h1.29c.48 0 .86-.387.86-.865v-1.297c0-.478-.39-.865-.87-.865zm-4.324 0H61.52c-.48 0-.865.387-.865.865v1.297c0 .478.386.865.865.865h1.297c.48 0 .866-.387.866-.865v-1.297c0-.478-.386-.865-.864-.865zM58.49 64.973h-1.3c-.48 0-.866.387-.866.865v1.297c0 .478.387.865.865.865h1.29c.48 0 .86-.387.86-.865v-1.297c0-.478-.39-.865-.87-.865zm-4.325 0h-1.297c-.478 0-.865.387-.865.865v1.297c0 .478.387.865.865.865h1.297c.478 0 .865-.387.865-.865v-1.297c0-.478-.388-.865-.866-.865zm4.324-4.324h-1.3c-.48 0-.87.38-.87.86v1.29c0 .48.38.86.86.86h1.29c.48 0 .86-.39.86-.87V61.5c0-.48-.39-.864-.87-.864zm-4.33 0h-1.3c-.48 0-.87.38-.87.86v1.29c0 .48.38.86.86.86h1.29c.472 0 .86-.39.86-.87V61.5c0-.48-.39-.864-.867-.864zm12.97 4.32h-1.29c-.48 0-.87.38-.87.86v1.29c0 .48.38.86.86.86h1.29c.48 0 .86-.39.86-.87v-1.29c0-.48-.387-.87-.865-.87zm-4.33 0h-1.29c-.48 0-.87.38-.87.86v1.29c0 .48.38.86.86.86h1.3c.48 0 .862-.39.862-.87v-1.29c0-.48-.39-.87-.867-.87zm4.32-4.33h-1.3c-.48 0-.87.38-.87.86v1.3c0 .48.384.86.862.86h1.3c.476 0 .863-.39.863-.87V61.5c0-.48-.388-.864-.866-.864zm-4.33 0H61.5c-.48 0-.864.38-.864.86v1.3c0 .48.387.86.866.86H62.8c.48 0 .87-.39.87-.87V61.5c0-.48-.383-.864-.86-.864z"/>

			   <g class="outer-circle">
				  <circle cx="60" cy="60" r="53" stroke="#9B9B9B" transform="rotate(90 60 60)"/>
				  <circle cx="60" cy="7" r="2" fill="#9B9B9B"/>
				  <circle cx="60" cy="113" r="2" fill="#9B9B9B"/>
				  <circle cx="113" cy="60" r="2" fill="#9B9B9B"/>
				  <circle cx="7" cy="60" r="2" fill="#9B9B9B"/>
			   </g>

		    </g>
		</svg>
	</button>
</div>

<!-- <div class="container3">

<h1>Portfolio</h1>

</div>
-->
<div class=wrapper id="profiel">
<p style="color:white"><img src="img/profielfoto_svenwilpstra.png">
        Bij mij kunt u terecht voor<span class="verb">de volgende programmeertalen:</span></p>
  <span class="ripple"></span>
</div>
    </div>

<div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto", >
            <img src="img/koppel-links2.png" width=100%>
          </div>
          <div class="col-lg-8 mx-auto" style="background-image:url('/img/achtergrond-manmethond.png'); opacity: 0.2">   

            <h2>Over mij</h2>
            <p class="lead">Vanaf januari 2018 ben werkzaam als front-end developer. In de tijd die overblijft werk ik als freelancer onder de naam Less Marketing. Een website is voor mij als een tube tandpasta. De tube raakt nooit helemaal leeg en kan altijd meer uitgeknepen worden. Deze website biedt u een overzicht van mijn portofolio en vaardigheden.</p>
          </div>
        </div>
      </div>
    </section>

<div class="container">
  <div class="row">
  <div class="col-lg-2 mx-auto", >
  </div>

  
<div class="col-lg-8 mx-auto">
<h2>Ik programmeer met:</h2>
    <div id="myCanvasContainer"">
      <canvas width="500" height="500" id="myCanvas">
        <p>Anything in here will be replaced on browsers that support the canvas element</p>
      </canvas>
    </div>
    <div id="tags">
      <ul>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/angular-logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/owasp-logo-klein.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/react-logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/woocommerce_logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/vuejs-logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/laravel-logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/logo-mysql.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/Bootstrap.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/css3-logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/GitHub.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/heroku-logo.svg"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/html-t.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/Javascript.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/PHP.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/photoshop-logo.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/WordPress.png"></a></li>
        <li><a href="angular"><img width="100px" src="img/icons/PNGs/jquery-klein2.png"></a></li>
      </ul>
    </div>
    <div class="col-lg-2 mx-auto">
    </div>
    </div>

    <section id="services">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto" style="background-image:url('/img/achtergrond-manmethond.png'); opacity: 0.2">
            <h2>About this page</h2>
            <p class="lead">Wij zorgen ervoor dat uw website beter bijdraagt aan uw bedrijfsresultaat, vindbaarheid op basis van een goede samenwerking tussen ons en u als cliënt. Hierbij houden wij rekening met alle trends en sturen wij voortdurend bij waar nodig.</p> 
        </div>
        <div class="col-lg-4 mx-auto", >
                    <img src="img/koppel-links2.png" width=100%>

          </div>
        </div>
      </div>
    </section>

<div class="snip1214">
  <div class="plan">
    <h3 class="plan-title">
Over mij   </h3>
</div>
</div>

    <div id="polina">
    <div class="row">
   <div class="col-lg-8 mx-auto">

    <h2 style="color:white">Wist u dat?</h2>
    <p style="color:white"><h3>Sven <span class="verb2">heeft gewerkt in de retail, horeca & marketing</span>.</h3></p>
</div>
</div></div>
</div>

    <section id="contact">
      <div class="container">
      <div id="portfolio-tekst">
<a id="portfolio" class="smooth"></a>
<h2>Portfolio</h2>

<p>Een kleine selectie van websites gemaakt door Sven Wilpstra. Klik op een thumbnail voor een grotere versie.</p>
</div>
<!-- thumbnail image wrapped in a link -->
<div class="row">
    <div class="col-lg-6 mx-auto">
        <a href="#img1">
            <img src="/img/wit.png" class="thumbnail">
        </a>Sanderman Art - Portfolio
    </div>
    <!-- lightbox container hidden with CSS -->
    <a href="#_" class="lightbox" id="img1">
        <img src="/img/wit.png">
    </a>
    <!-- thumbnail image wrapped in a link -->
    <div class="col-lg-6 mx-auto">
        <a href="#img2">
            <img src="/img/rose.png" class="thumbnail">
        </a>MinkArt - Online galerij
    </div>
    <!-- lightbox container hidden with CSS -->
    <a href="#_" class="lightbox" id="img2">
        <img src="/img/rose.png">
    </a>
</div>
<div class="row">
    <div class="col-lg-6 mx-auto">
        <a href="#img3">
            <img src="/img/zwartwit.png" class="thumbnail">
        </a>Voorbeeld portfolio
    </div>
    <!-- lightbox container hidden with CSS -->
    <a href="#_" class="lightbox" id="img3">
        <img src="/img/zwartwit.png">
    </a>
    <!-- thumbnail image wrapped in a link -->
    <div class="col-lg-6 mx-auto">
        <a href="#img4">
            <img src="/img/oranje.png" class="thumbnail">
        </a>Bedrijfswebsite Project Study
    </div>
    <!-- lightbox container hidden with CSS -->
    <a href="#_" class="lightbox" id="img4">
        <img src="/img/oranje.png">
    </a>
    <!-- thumbnail image wrapped in a link -->
    <div class="col-lg-6 mx-auto">
        <a href="#img5">
            <img src="/img/elo.png" class="thumbnail">
        </a>Electronische leeromgeving
    </div>
    <!-- lightbox container hidden with CSS -->
    <a href="#_" class="lightbox" id="img5">
        <img src="/img/elo.png">
    </a>
    <!-- thumbnail image wrapped in a link -->
    <div class="col-lg-6 mx-auto">
        <a href="#img6">
            <img src="/img/hetverschil.png" class="thumbnail">
        </a>Bedrijfswebsite Het Verschil
    </div>
    <!-- lightbox container hidden with CSS -->
    <a href="#_" class="lightbox" id="img6">
        <img src="/img/hetverschil.png">
    </a>
</div>
</div>

      </div>
    </section>

<h2 style="color:white">Mijn tarieven</h2>
<div class="snip1214">
  <div class="plan">
    <h3 class="plan-title">
      Starter
    </h3>
    <div class="plan-cost"><span class="plan-price">€29</span><span class="plan-type" style="color:darkblue">/ Monthly</span></div>
    <ul class="plan-features">
      <li><i class="ion-checkmark"> </i>Wordpress site</li>
      <li><i class="ion-checkmark"> </i>Op maat gemaakt</li>
      <li><i class="ion-checkmark"> </i>Wij verzorgen het onderhoud</li>
      <li><i class="ion-checkmark"> </i>Ook voor bestaande websites</li>
      <li><i class="ion-checkmark"> </i>Door u zelf aan te passen!</li>
      <li><i class="ion-checkmark"> </i>Origineel en opvallend webdesign</li>
    </ul>
    <div class="plan-select"><a href="">Select Plan</a></div>
  </div>
  <div class="plan">
    <h3 class="plan-title">
      Basic
    </h3>
    <div class="plan-cost"><span class="plan-price">€39</span><span class="plan-type">/ Monthly</span></div>
    <ul class="plan-features">
      <li><i class="ion-checkmark"> </i>Bedrijfswebsite</li>
      <li><i class="ion-checkmark"> </i>10 MySQL Databases</li>
      <li><i class="ion-checkmark"> </i>Unlimited Email</li>
      <li><i class="ion-checkmark"> </i>500Gb Monthly Transfer</li>
      <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
      <li><i class="ion-checkmark"> </i>Daily Backups</li>
    </ul>
    <div class="plan-select"><a href="">Select Plan</a></div>
  </div>
  <div class="plan featured">
    <h3 class="plan-title">
      Professional
    </h3>
    <div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/ Monthly</span></div>
    <ul class="plan-features">
      <li><i class="ion-checkmark"> </i>Platform</li>
      <li><i class="ion-checkmark"> </i>25 MySQL Databases</li>
      <li><i class="ion-checkmark"> </i>Unlimited Email</li>
      <li><i class="ion-checkmark"> </i>2000Gb Monthly Transfer</li>
      <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
      <li><i class="ion-checkmark"> </i>Daily Backups</li>
    </ul>
    <div class="plan-select"><a href="">Select Plan</a></div>
  </div>
  <div class="plan">
    <h3 class="plan-title">
      Ultra
    </h3>
    <div class="plan-cost"><span class="plan-price">$99</span><span class="plan-type">/ Monthly</span></div>
    <ul class="plan-features">
      <li><i class="ion-checkmark"> </i>Webshop</li>
      <li><i class="ion-checkmark"> </i>Unlimited MySQL Databases</li>
      <li><i class="ion-checkmark"> </i>Unlimited Email</li>
      <li><i class="ion-checkmark"> </i>10000Gb Monthly Transfer</li>
      <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
      <li><i class="ion-checkmark"> </i>Daily Backups</li>
    </ul>
    <div class="plan-select"><a href="">Select Plan</a></div>
  </div>
</div>


  <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/JclassListShim.js"></script>
<script src="js/jclassListShim2.js"></script>
</body>
</html>