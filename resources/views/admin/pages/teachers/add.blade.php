<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Yangi Kafedra Qo'shish</title>
</head>
<body>
<div class="container">
    <h1 class="one text-center  text-success">O'QITUVCHI MA'LUMOTLARINI KIRITISH</h1>
    <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
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
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Familiyasi<span class="text-danger">*</span>:
                            @if($errors->has('lastname'))
                                <span class="text-danger"> | {{ $errors->first('lastname') }}</span>
                            @endif
                        </label>
                        <input class="form-control"type="text"  placeholder="" value="{{ old('lastname') }}" id="lastname" name="lastname"  style="border:1px solid lightblue;" required="required">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label> Otasining Ismi<span class="text-danger">*</span>:
                            @if($errors->has('father_name'))
                                <span class="text-danger"> | {{ $errors->first('father_name') }}</span>
                            @endif
                        </label>
                        <input class="form-control"type="text"  placeholder="" value="{{ old('father_name') }}" id="father_name" name="father_name"  style="border:1px solid lightblue;" required="required">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Email<span class="text-danger">*</span>:
                            @if($errors->has('email'))
                                <span class="text-danger"> | {{ $errors->first('email') }}</span>
                            @endif
                        </label>
                        <input class="form-control"type="email"  placeholder="" value="{{ old('email') }}" id="email" name="email"  style="border:1px solid lightblue;" required="required">
                    </div>
                </div>
            </div>
        <div class="col-md-12">
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
            <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Kafedrasi<span class="text-danger">*</span>:
                        @if($errors->has('department'))
                            <span class="text-danger"> | {{ $errors->first('department') }}</span>
                        @endif
                    </label>
                    <select class="form-control" id="department" name="department">
                        <option style="display: none" value="" selected>Tanlang</option>
                    </select>
                </div>
            </div>
        </div>
            <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Lavozimi<span class="text-danger">*</span>:
                        @if($errors->has('position'))
                            <span class="text-danger"> | {{ $errors->first('position') }}</span>
                        @endif
                    </label>
                    <select class="form-control" id="position" name="position">
                        <option style="display: none" value="" selected>Tanlang</option>
                        @foreach($positions as $position)
                            <option value="{{$position->id}}">{{$position->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Yuborish</button>
    </form>
</div>


<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
{{--<script>--}}
    {{--$('#faculty').on('change',function (e) {--}}
        {{--var fac_id = e.target.value;--}}
        {{--//ajax--}}
        {{--$.get('/dep?fac_id=' + fac_id,function (data) {--}}
            {{--$.each(data,function (add,departmentObj) {--}}
                {{--$('#department').append('<option value="'+departmentObj.id+'">'+departmentObj.name+'</option>');--}}
            {{--});--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
</body>
</html>
