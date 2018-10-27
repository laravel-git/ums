<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">
<div class="container">
    <h1 class="text-center mb-5 text-success">FAKULTET MA'LUMOTLARINI KIRITING</h1>
    <form action="{{route('faculties.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Fakultet Nomi<span class="text-danger">*</span>:
                            @if($errors->has('name'))
                                <span class="text-danger"> | {{ $errors->first('name') }}</span>
                            @endif
                        </label>
                        <input class="form-control"type="text"  placeholder="" value="{{ old('name') }}" id="name" name="name"  style="border:1px solid lightblue;" required="required">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Yuborish</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
