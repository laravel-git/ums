<html>
<head>
  <title>Salom</title>
  <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
 
</head>
<body>

  <div class="container">
     
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
                               <option style="display: none" value="" selected>Tanlang</option>
                               @foreach($groups as $group)
                               <option value="{{$group->id}}">{{$group->name}}</option>
                               @endforeach
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




  <script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
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