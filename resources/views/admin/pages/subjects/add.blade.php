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
<body class="mb-5">
<div class="container">
    <h1 class="one text-center  text-success">FAN MA'LUMOTLARINI KIRITISH</h1>
    <form action="{{route('subjects.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Fan Nomi<span class="text-danger">*</span>:
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
                        <label>Qaysi kafedraga tegishli<span class="text-danger">*</span>:
                            @if($errors->has('department'))
                                <span class="text-danger"> | {{ $errors->first('department') }}</span>
                            @endif
                        </label>
                        <select class="form-control" id="department" name="department">
                            <option style="display: none" value="" selected>Tanlang</option>
                            @foreach($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
            </div><br>
            <div class="container"><br>
                <h5 class="">Bu fanni qaysi o'qituvchilar o'qitadi(<span class="text-danger">tanlash shart*</span>)</h5>
                <div class="form-group">
                    <div class="col-md-12">
                        <table>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td><input type="checkbox" name="teachers[]" id="how_hear1" value="{{$teacher->id}}"/></td>
                                    <td style="padding-left:3px"><label for="how_hear1">{{$teacher->lastname." ".$teacher->name." ".$teacher->father_name  }}</label></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
           <div class="container"><br>
               <h5>Bu fan qaysi fakultet talabalariga o'qitiladi</h5>
               <div class="form-group">
                   @if($errors->has('faculties'))
                       <span class="text-danger"> | {{ $errors->first('faculties') }}</span>
                   @endif
                   <div class="col-md-12">
                       <table>
                           @foreach($faculties as $faculty)
                               <tr>
                                   <td><input type="checkbox" name="faculties[]" id="how_hear1" value="{{$faculty->id}}"/></td>
                                   <td style="padding-left:3px"><label for="how_hear1">{{$faculty->name}}</label></td>
                               </tr>
                           @endforeach
                       </table>
                   </div>
               </div>
           </div>


        </div><br><br>
        <button type="submit" class="btn btn-primary btn-block">Yuborish</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
