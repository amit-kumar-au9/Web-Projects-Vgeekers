

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - SVG: Multiples Make A 3d Flip Book</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Ubuntu:700);

body{

  font-family: 'Ubuntu', sans-serif;
  overflow-y: hidden; 
}
h2{
  color:hsla(255,255%,255%,1);
  font-size:1.5em;
}
.svg{
  width:300px;
  text-align:center;
  margin-top:5em;
}
svg{
  margin-top: -280px;
  max-width:100%;
  z-index: 100;
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
<body translate="no">
<div class="svg">

<svg width="400px" height="400px" viewBox="-200 -100 400 400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
<defs>
<rect id="animatedRect" x="-400" y="-100" width="400" height="400">
<animateTransform attributeName="transform" type="rotate" from="45,0,-150" to="0,0,-150" begin="0s" dur="3s" repeatCount="indefinite" calcMode="spline" keyTimes="0;1" keySplines="0.42 0.0 0.58 1.0" />
</rect>
<clipPath id="clip">
<use xlink:href="#animatedRect" />
</clipPath>
<mask id="mask" maskUnits="userSpaceOnUse" x="-200" y="-100" width="400" height="400">
<rect x="-150" y="0" width="150" height="200" fill="hsla(255,255%,255%,1)" clip-path="url(#clip)" />
</mask>
<g id="page">
<rect x="-150" y="0" width="150" height="200" fill="hsla(52, 95%, 95%, 1)" />
<g font-family="ubuntu" font-size="15">
<text x="-115" y="85">Welcome To</text>
<text x="-105" y="110">Swastick </text>
<text x="-105" y="135">Classes</text>
</g>
</g>
<linearGradient id="centerGrad" x1="1" x2="0">
<stop offset="0" stop-color="hsla(0,0%,0%,1)" stop-opacity="0.3" />
<stop offset="0.02" stop-color="hsla(0,0%,0%,1)" stop-opacity="0" />
</linearGradient>
<filter id="shadow">
<feOffset in="SourceAlpha">
<animate attributeName="dx" begin="0s" dur="3s" repeatCount="indefinite" calcMode="linear" keyTimes="0;0.5;1" values="0;-1;0" />
<animate attributeName="dy" begin="0s" dur="3s" repeatCount="indefinite" calcMode="linear" keyTimes="0;0.5;1" values="0;1;0" />
</feOffset>
<feGaussianBlur>
<animate attributeName="stdDeviation" begin="0s" dur="3s" repeatCount="indefinite" calcMode="linear" keyTimes="0;0.5;1" values="0;3;0" />
</feGaussianBlur>
<feMerge>
<feMergeNode />
<feMergeNode in="SourceGraphic" />
</feMerge>
</filter>
</defs>
<rect x="-161" y="2" width="322" height="208" fill="hsla(52, 5%, 55%, 1)" rx="2" ry="2" />
<rect x="-160" y="1" width="320" height="208" fill="hsla(1, 95%, 15%, 1)" rx="2" ry="2" />
<path d="M-150,0 L-155,5 V205 L-5,205 L0,200" fill="hsla(52, 5%, 85%, 1)" />
<path d="M150,0 L155,5 V205 L5,205 L0,200" fill="hsla(52, 5%, 85%, 1)" />
<rect x="0" width="150" height="200" fill="hsla(52, 95%, 95%, 1)" />
<g font-family="ubuntu" font-size="15">
<text x="35" y="85">Where</text>
<text x="45" y="110">Learning</text>
<text x="40" y="135">is fun!</text>
</g>
<use xlink:href="#page" />
<rect x="-400" y="0" width="400" height="200" fill="url(#centerGrad)" />
<g filter="url(#shadow)">
<g>
<g mask="url(#mask)">
<use xlink:href="#page" />
<use xlink:href="#animatedRect" fill="url(#centerGrad)" />
</g>
<animateTransform attributeName="transform" type="rotate" from="-90,0,-150" to="0,0,-150" begin="0s" dur="3s" repeatCount="indefinite" calcMode="spline" keyTimes="0;1" keySplines="0.42 0.0 0.58 1.0" />
</g>
</g>
</svg>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
