<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio</title>
<link rel="stylesheet" href="/css/app.css"
</head>
<body>
@include ('inc.navbar')
<div class="container">
@if(Request::is('/'))
@include('inc.showcase')
@endif
<div class="row">
<div class="col-md-8 col-lg-12">
@include('inc.messages')
@yield('content')

</div>
</div>
</div>
<footer id="footer" class="text-center">
<p>Copyright 2017 &copy; Sven Wilpstra</p>
</footer>
</body>
</html>