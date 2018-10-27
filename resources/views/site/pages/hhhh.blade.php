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
<br>
<br>
<!-- Search section end -->
<hr>
<section>
    <div class="container">
        <h2 class="text-center">Ro'yhatdan O'tish</h2><hr><br>
        <form method="POST" action="{{route('register')}}">
           @csrf
           <div class="row">
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Ismi<span class="text-danger">*</span>:
                               @if($errors->has('name'))
                                   <span class="text-danger"> | {{ $errors->first('name') }}</span>
                               @endif
                           </label>
                           <input class="form-control"type="text"  placeholder="" value="{{ old('name') }}" id="name" name="name"  style="border:1px solid lightblue;" required="required">
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Familiyasi<span class="text-danger">*</span>:
                               @if($errors->has('lastname'))
                                   <span class="text-danger"> | {{ $errors->first('lastname') }}</span>
                               @endif
                           </label>
                           <input class="form-control"type="text"  placeholder="" value="{{ old('lastname') }}" id="lastname" name="lastname"  style="border:1px solid lightblue;">
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Otasining Ismi<span class="text-danger">*</span>:
                               @if($errors->has('father_name'))
                                   <span class="text-danger"> | {{ $errors->first('father_name') }}</span>
                               @endif
                           </label>
                           <input class="form-control" type="text" placeholder="" value="{{ old('father_name') }}" id="father_name" name="father_name"  required="required" style="border:1px solid lightblue;">
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Email <span class="text-danger">*</span>@:
                               @if($errors->has('email'))
                                   <span class="text-danger"> | {{ $errors->first('email') }}</span>
                               @endif
                           </label>
                           <input class="form-control" type="email" placeholder="" value="{{ old('email') }}" id="email" name="email"  required="required" style="border:1px solid lightblue;">
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Fakulteti<span class="text-danger">*</span>:
                               @if($errors->has('faculty'))
                                   <span class="text-danger"> | {{ $errors->first('faculty') }}</span>
                               @endif
                           </label>
                           <select class="form-control" id="faculty" name="faculty">
                               <option style="display: none" value="" selected>Tanlang</option>
                               @foreach($faculties as $faculty)
                               <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                               @endforeach
                           </select>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Guruhi<span class="text-danger">*</span>:
                               @if($errors->has('group'))
                                   <span class="text-danger"> | {{ $errors->first('group') }}</span>
                               @endif
                           </label>
                           <select class="form-control" id="group" name="group">
                              
                           </select>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="form-group">
                       <div class="col-md-12">
                           <label>Talabalik guvohnomasi raqami<span class="text-danger">*</span>:
                               @if($errors->has('cert_numb'))
                                   <span class="text-danger"> | {{ $errors->first('cert_numb') }}</span>
                               @endif
                           </label>
                           <input class="form-control"type="text"  placeholder="" value="{{ old('cert_numb') }}" id="cert_numb" name="cert_numb" required="required"  style="border:1px solid lightblue;">
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                               <div class="col-md-12">
                                   <label>Passport seriyasi<span class="text-danger">*</span>:
                                       @if($errors->has('passport'))
                                           <span class="text-danger"> | {{ $errors->first('passport') }}</span>
                                       @endif
                                   </label>
                                   <input class="form-control" type="text" placeholder="" value="{{ old('passport_ser') }}"  required="required" maxlength="2" minlength="2" id="passport_ser" name="passport_ser"  style="border:1px solid lightblue;">
                               </div>
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div class="form-group">
                               <div class="col-md-12">
                                   <label>Passport raqami<span class="text-danger">*</span>:
                                       @if($errors->has('passport'))
                                           <span class="text-danger"> | {{ $errors->first('passport') }}</span>
                                       @endif
                                   </label>
                                   <input class="form-control"type="text"  placeholder="" value="{{ old('passport_numb') }}" required="required" id="passport_numb" name="passport_numb" maxlength="7"  style="border:1px solid lightblue;">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-md-12">
                   <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               <div class="col-md-12">
                                   <label>Parolingiz<span class="text-danger">*</span>:
                                       @if($errors->has('password'))
                                           <span class="text-danger"> | {{ $errors->first('password') }}</span>
                                       @endif
                                   </label>
                                   <input class="form-control" type="password" placeholder="" value="{{ old('password') }}"  required="required" minlength="6" id="password" name="password"  style="border:1px solid lightblue;">
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <div class="col-md-12">
                                   <label>Parolni Tasdiqlang<span class="text-danger">*</span>:
                                   </label>
                                   <input class="form-control" type="password"  minlength="6" name="password_confirmation"  style="border:1px solid lightblue;">
                               </div>
                           </div>
                       </div>

                   </div>
               </div>


           </div>
            <div class="col-md-12 container">
                <button type="submit" class="btn btn-success btn-block">Yuborish</button>
            </div>
        </form>
    </div>
</section>

<br>
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
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script>
  
   $('#faculty').on('change',function () {
  
      $faculty = $(this).val();

      $.ajax({
             type: 'get',
             url:  '{{URL::to('/select')}}',
             data: {'faculty':$faculty},
             success:function(data){
                $('#group').html(data);
             }
           }
       );
    //ajax
      /* $.get('/select?fac_id=' + fac_id,function (data) {
           $.each(data,function (student,groupObj) {

               $('#group').append('<option value="'+groupObj.id+'">'+groupObj.name+'</option>');
           });
       });*/
   });
</script>
</body>
</html>
