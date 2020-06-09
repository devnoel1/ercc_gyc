<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Favicon -->
    <link href="{{ asset('img/erccl.jpg" rel="shortcut icon')}}"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}"/>
        <link rel="stylesheet" href="{{ asset('css/sty.css')}}"/>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- header section -->
<header class="header-section">
    <div class="container">
        <!-- logo -->
                    <a href="index.html" class="site-logo"><img src="img/title.png" width="400" alt=""></a>
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>

    </div>
</header>
<!-- header section end-->


<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">

        </div>
        <ul class="main-menu">
            <li class=""><a href="index.php">Home</a></li>
            <li><a href="#">Event</a></li>
                            <li><a href="#">REGISTRATION</a></li>
                            <li><a href="youthBlog/">blog</a></li>
            <li><a href="contact.php">Contact</a></li>
                            <li><a href="donations.php">Donations</a></li>
                            <li><a href="youthBlog/admin/login.php">Signin <i class="fa fa-sign-in"></i></a></li>
        </ul>
    </div>
</nav>
<!-- Header section end -->
    @yield('content')

    	<!-- Footer section -->
	<footer class="footer-section">
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
<p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a href="https://deelinkonline.com" target="_blank">Deelinks</a>
</p>
			</div>
		</div>
	</footer>
	<!-- Footer section end-->

    <!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/jquery.countdown.js')}}"></script>
	<script src="{{ asset('js/masonry.pkgd.min.js')}}"></script>
	<script src="{{ asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
