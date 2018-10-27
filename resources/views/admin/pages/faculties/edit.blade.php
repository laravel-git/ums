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
    <h1 class="one text-center  text-success">FAKULTET MA'LUMOTLARINI O'ZGARTIRISH</h1>
    <form action="{{route('faculties.update',['id'=>$faculty->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Fakultet Nomi<span class="text-danger">*</span>:
                            @if($errors->has('name'))
                                <span class="text-danger"> | {{ $errors->first('name') }}</span>
                            @endif
                        </label>
                        <input class="form-control"type="text"  placeholder="" value="{{old('name',$faculty->name)}}" id="name" name="name"  style="border:1px solid lightblue;" required="required">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">O'ZGARISHLARN SAQLASH</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
