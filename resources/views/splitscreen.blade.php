<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>CodePen - Animated - SVG Bubbles</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      @import url("https://fonts.googleapis.com/css?family=Exo+2:900");
h1 {
  font-family: 'Exo 2', sans-serif;
  font-size: 8.5vw;
  color: white;
  padding: 5rem 0;
  text-shadow: 0px 4px 48px rgba(255, 255, 255, 0.2);
}

.container3 {
  position: relative;
  display: flex;
  align-content: center;
  justify-content: center;
  background-image: url(/img/koppel-linksenrechts.jpg);
  /* background-image: linear-gradient(to bottom, #00c9ff 0%, #92fe9d 100%), url(https://images.unsplash.com/photo-1502726299822-6f583f972e02);*/
  background-blend-mode: multiply;
  background-size: cover;
  overflow: hidden;
}

.bubbles-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 100%;
  max-width: 15rem;
  min-height: 30rem;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  opacity: 0.75;
  overflow: visible;
}

.bubbles {
  width: 100%;
  height: auto;
}
.bubbles circle {
  stroke: white;
  fill: none;
}
.bubbles > g > g:nth-of-type(3n) circle {
  stroke: #87f5fb;
}
.bubbles > g > g:nth-of-type(4n) circle {
  stroke: #8be8cb;
}

.bubbles-large {
  overflow: visible;
}
.bubbles-large > g {
  -webkit-transform: translateY(2048px);
          transform: translateY(2048px);
  opacity: 0;
  will-change: transform, opacity;
}
.bubbles-large g:nth-of-type(1) {
  -webkit-animation: up 6.5s infinite;
          animation: up 6.5s infinite;
}
.bubbles-large g:nth-of-type(1) g {
  -webkit-transform: translateX(350px);
          transform: translateX(350px);
}
.bubbles-large g:nth-of-type(1) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}
.bubbles-large g:nth-of-type(2) {
  -webkit-animation: up 5.25s 250ms infinite;
          animation: up 5.25s 250ms infinite;
}
.bubbles-large g:nth-of-type(2) g {
  -webkit-transform: translateX(450px);
          transform: translateX(450px);
}
.bubbles-large g:nth-of-type(2) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}
.bubbles-large g:nth-of-type(3) {
  -webkit-animation: up 6s 750ms infinite;
          animation: up 6s 750ms infinite;
}
.bubbles-large g:nth-of-type(3) g {
  -webkit-transform: translateX(700px);
          transform: translateX(700px);
}
.bubbles-large g:nth-of-type(3) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}
.bubbles-large g:nth-of-type(4) {
  -webkit-animation: up 5.5s 1.5s infinite;
          animation: up 5.5s 1.5s infinite;
}
.bubbles-large g:nth-of-type(4) g {
  -webkit-transform: translateX(500px);
          transform: translateX(500px);
}
.bubbles-large g:nth-of-type(4) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}
.bubbles-large g:nth-of-type(5) {
  -webkit-animation: up 6.5s 4s infinite;
          animation: up 6.5s 4s infinite;
}
.bubbles-large g:nth-of-type(5) g {
  -webkit-transform: translateX(675px);
          transform: translateX(675px);
}
.bubbles-large g:nth-of-type(5) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}

.bubbles-small {
  overflow: visible;
}
.bubbles-small > g {
  -webkit-transform: translateY(2048px);
          transform: translateY(2048px);
  opacity: 0;
  will-change: transform, opacity;
}
.bubbles-small g circle {
  -webkit-transform: scale(0);
          transform: scale(0);
}
.bubbles-small g:nth-of-type(1) {
  -webkit-animation: up 5.25s infinite;
          animation: up 5.25s infinite;
}
.bubbles-small g:nth-of-type(1) g {
  -webkit-transform: translateX(350px);
          transform: translateX(350px);
}
.bubbles-small g:nth-of-type(1) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}
.bubbles-small g:nth-of-type(2) {
  -webkit-animation: up 5.75s infinite;
          animation: up 5.75s infinite;
}
.bubbles-small g:nth-of-type(2) g {
  -webkit-transform: translateX(750px);
          transform: translateX(750px);
}
.bubbles-small g:nth-of-type(2) circle {
  -webkit-animation: wobble 3s infinite ease-in-out;
          animation: wobble 3s infinite ease-in-out;
}
.bubbles-small g:nth-of-type(3) {
  -webkit-animation: up 5.25s 250ms infinite;
          animation: up 5.25s 250ms infinite;
}
.bubbles-small g:nth-of-type(3) g {
  -webkit-transform: translateX(350px);
          transform: translateX(350px);
}
.bubbles-small g:nth-of-type(3) circle {
  -webkit-animation: wobble 3s 250ms infinite ease-in-out;
          animation: wobble 3s 250ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(4) {
  -webkit-animation: up 5.75s 325ms infinite;
          animation: up 5.75s 325ms infinite;
}
.bubbles-small g:nth-of-type(4) g {
  -webkit-transform: translateX(180px);
          transform: translateX(180px);
}
.bubbles-small g:nth-of-type(4) circle {
  -webkit-animation: wobble 3s 325ms infinite ease-in-out;
          animation: wobble 3s 325ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(5) {
  -webkit-animation: up 6s 125ms infinite;
          animation: up 6s 125ms infinite;
}
.bubbles-small g:nth-of-type(5) g {
  -webkit-transform: translateX(350px);
          transform: translateX(350px);
}
.bubbles-small g:nth-of-type(5) circle {
  -webkit-animation: wobble 3s 250ms infinite ease-in-out;
          animation: wobble 3s 250ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(6) {
  -webkit-animation: up 5.13s 250ms infinite;
          animation: up 5.13s 250ms infinite;
}
.bubbles-small g:nth-of-type(6) g {
  -webkit-transform: translateX(650px);
          transform: translateX(650px);
}
.bubbles-small g:nth-of-type(6) circle {
  -webkit-animation: wobble 3s 125ms infinite ease-in-out;
          animation: wobble 3s 125ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(7) {
  -webkit-animation: up 6.25s 350ms infinite;
          animation: up 6.25s 350ms infinite;
}
.bubbles-small g:nth-of-type(7) g {
  -webkit-transform: translateX(480px);
          transform: translateX(480px);
}
.bubbles-small g:nth-of-type(7) circle {
  -webkit-animation: wobble 3s 325ms infinite ease-in-out;
          animation: wobble 3s 325ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(8) {
  -webkit-animation: up 7s 200ms infinite;
          animation: up 7s 200ms infinite;
}
.bubbles-small g:nth-of-type(8) g {
  -webkit-transform: translateX(330px);
          transform: translateX(330px);
}
.bubbles-small g:nth-of-type(8) circle {
  -webkit-animation: wobble 3s 325ms infinite ease-in-out;
          animation: wobble 3s 325ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(9) {
  -webkit-animation: up 6.25s 233ms infinite;
          animation: up 6.25s 233ms infinite;
}
.bubbles-small g:nth-of-type(9) g {
  -webkit-transform: translateX(230px);
          transform: translateX(230px);
}
.bubbles-small g:nth-of-type(9) circle {
  -webkit-animation: wobble 3s 275ms infinite ease-in-out;
          animation: wobble 3s 275ms infinite ease-in-out;
}
.bubbles-small g:nth-of-type(10) {
  -webkit-animation: up 6s 900ms infinite;
          animation: up 6s 900ms infinite;
}
.bubbles-small g:nth-of-type(10) g {
  -webkit-transform: translateX(730px);
          transform: translateX(730px);
}
.bubbles-small g:nth-of-type(10) circle {
  -webkit-animation: wobble 2s 905ms infinite ease-in-out;
          animation: wobble 2s 905ms infinite ease-in-out;
}

@-webkit-keyframes wobble {
  33% {
    -webkit-transform: translateX(-50px);
            transform: translateX(-50px);
  }
  66% {
    -webkit-transform: translateX(50px);
            transform: translateX(50px);
  }
}

@keyframes wobble {
  33% {
    -webkit-transform: translateX(-50px);
            transform: translateX(-50px);
  }
  66% {
    -webkit-transform: translateX(50px);
            transform: translateX(50px);
  }
}
@-webkit-keyframes up {
  0% {
    opacity: 0;
  }
  10%, 90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-1024px);
            transform: translateY(-1024px);
  }
}
@keyframes up {
  0% {
    opacity: 0;
  }
  10%, 90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-1024px);
            transform: translateY(-1024px);
  }
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <div class="container3">

	<div class="bubbles-container">
		<svg class="bubbles" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 701 1024" style="overflow: visible;">

        <g class="bubbles-large" stroke-width="7">
            <g>
                <g transform="translate(10 940)">
                    <circle cx="35" cy="35" r="35"/>
                </g>
            </g>
            <g>
                <g transform="translate(373 940)">
                    <circle cx="35" cy="35" r="35"/>
                </g>
            </g>
            <g>
                <g transform="translate(408 940)">
                    <circle cx="35" cy="35" r="35"/>
                </g>
            </g>
            <g>
                <g transform="translate(621 940)">
                    <circle cx="35" cy="35" r="35"/>
                </g>
            </g>
            <g>
                <g transform="translate(179 940)">
                    <circle cx="35" cy="35" r="35"/>
                </g>
            </g>
        </g>

        <g class="bubbles-small" stroke-width="4">
            <g>
                <g transform="translate(147 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(255 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(573 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(429 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(91 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(640 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(321 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(376 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(376 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
            <g>
                <g transform="translate(497 984)">
                    <circle cx="15" cy="15" r="15"/>
                </g>
            </g>
        </g>

    </svg>
	</div>
	
	<h1>Portfolio</h1>

</div>
  
  
  
  
  

  <script src="https://static.codepen.io/assets/editor/live/css_reload-2a5c7ad0fe826f66e054c6020c99c1e1c63210256b6ba07eb41d7a4cb0d0adab.js"></script>
</body>

</html>