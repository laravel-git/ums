<!DOCTYPE html>
<html lang="en">
<head>
    <title>TUIT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


    <!--[if lt IE 9]>

    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-warp">
        <div class="container">

            <ul class="main-menu">
                <li><a href="{{route('site.index')}}">Bosh Sahifa</a></li>
                <li><a href="{{route('site.faculty')}}">Fakultetlar</a></li>
                <li><a href="{{route('site.teacher')}}">O'qituvchilar</a></li>
                <li><a href="{{route('site.news')}}">Yangiliklar</a></li>
                <li><a href="{{route('site.student')}}">Talabalar uchun</a></li>
            </ul>
        </div>
        <div class="container">
            <a href="#" class="site-logo">
                <img src="img/tuit1.jpg" style="width:200px" alt="">
            </a>
        </div>
    </div>
</header>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="img/tuit.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text text-white">
                    <h2>Literature Course</h2>
                    <p>Donec id mattis est. Proin nunc sapien, gravida ut sapien ut, ultrices faucibus sapien. Proin vehicula varius ex, vel feugiat massa scelerisque id. Nullam vulputate a lectus non molestie. </p>
                    <div class="hero-author">
                        <div class="hero-author-pic set-bg" data-setbg="img/hero-author.jpg"></div>
                        <h5>By Sebastian Smith, <span>Senior Lead Developer</span></h5>
                        <a href="#" class="site-btn">See Details <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- Search section -->
<section class="multi-search-section">
    <div class="msf-warp">
        <div class="container">
            <h5>Search your Course</h5>
            <form class="multi-search-form">
                <input type="text" placeholder="Course">
                <input type="text" placeholder="Level">
                <input type="text" placeholder="Date">
                <input type="text" placeholder="Teacher">
                <input type="text" placeholder="Price">
                <button class="site-btn">Search <i class="fa fa-angle-right"></i></button>
            </form>
        </div>
    </div>
</section>
<!-- Search section end -->


<!-- Services section -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-apple"></i>
                </div>
                <div class="si-content">
                    <h5>Training Center</h5>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-mortarboard"></i>
                </div>
                <div class="si-content">
                    <h5>Training Center</h5>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-idea"></i>
                </div>
                <div class="si-content">
                    <h5>Training Center</h5>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-medal"></i>
                </div>
                <div class="si-content">
                    <h5>Training Center</h5>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-question"></i>
                </div>
                <div class="si-content">
                    <h5>Training Center</h5>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item">
                <div class="si-icon">
                    <i class="flaticon-learning"></i>
                </div>
                <div class="si-content">
                    <h5>Training Center</h5>
                    <p>Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus ele ifend, et auctor lorem hendrerit. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section spad pb-0">
    <div class="container">
        <div class="footer-bottom">

            <div class="social">
                <a href=""><i class="fa fa-pinterest"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-dribbble"></i></a>
                <a href=""><i class="fa fa-behance"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
            <ul class="footer-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="footer-logo">
                <a href="#">
                    <img src="img/footer-logo.png" alt="">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="text-white  text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>

        </div>
    </div>



</footer>

<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</body>
</html>
