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
    <h1 class="one text-center  text-success">KAFEDRA MA'LUMOTLARINI O'ZGARTIRISH</h1>
    <form action="{{route('departments.update',['id'=>$department->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Kafedra Nomi<span class="text-danger">*</span>:
                            @if($errors->has('name'))
                                <span class="text-danger"> | {{ $errors->first('name') }}</span>
                            @endif
                        </label>
                        <input class="form-control"type="text"  placeholder="" value="{{$department->name}}" id="name" name="name"  style="border:1px solid lightblue;" required="required">
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
                            <option style="display:none" value="{{$department->faculty_id}}" selected>{{$department->faculty->name}}</option>
                            @foreach($faculties as $faculty)
                                @if($department->faculty_id != $faculty->id)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">O'ZGARISHLARNI SAQLASH</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
