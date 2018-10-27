@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ismi') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Familiyasi') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="father_name" class="col-md-4 col-form-label text-md-right">{{ __('Otasining Ismi') }}</label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}" name="father_name" value="{{ old('father_name') }}" required autofocus>

                                @if ($errors->has('father_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('father_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="faculty" class="col-md-4 col-form-label text-md-right">{{ __('Fakulteti') }}</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="faculty">
                                        <option style="display: none" value="" selected>Tanlang</option>
                                        <option value="1">Dasturiy injiniring</option>
                                        <option value="2">Kompyuter Injiniring</option>
                                        <option value="3">Axborot Xavfsizligi</option>
                                    </select>
                                @if ($errors->has('faculty'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="group" class="col-md-4 col-form-label text-md-right">{{ __('Guruhi') }}</label>

                            <div class="col-md-6">
                                    <select class="form-control" name="group">
                                        <option style="display: none" value="" selected>Tanlang</option>
                                        <option value="1">310-16</option>
                                        <option value="2">512-18</option>
                                        <option value="3">311-16</option>
                                    </select>
                                @if ($errors->has('group'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="passport_ser" class="col-md-4 col-form-label text-md-right">{{ __('Pasport Seriyasi') }}</label>

                            <div class="col-md-6">
                                <input id="passport_ser" type="text" class="form-control{{ $errors->has('passport_ser') ? ' is-invalid' : '' }}" name="passport_ser" value="{{ old('passport_ser') }}" required autofocus>

                                @if ($errors->has('passport_ser'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_numb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passport_numb" class="col-md-4 col-form-label text-md-right">{{ __('Pasport Raqami') }}</label>

                            <div class="col-md-6">
                                <input id="passport_numb" type="text" class="form-control{{ $errors->has('passport_numb') ? ' is-invalid' : '' }}" name="passport_numb" value="{{ old('passport_numb') }}" required autofocus>

                                @if ($errors->has('passport_numb'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_numb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cert_numb" class="col-md-4 col-form-label text-md-right">{{ __('Talabalik guvohnomasi raqami') }}</label>

                            <div class="col-md-6">
                                <input id="cert_numb" type="text" class="form-control{{ $errors->has('cert_numb') ? ' is-invalid' : '' }}" name="cert_numb" value="{{ old('cert_numb') }}" required autofocus>

                                @if ($errors->has('cert_numb'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cert_numb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Parolingiz') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Parolni Tasdiqlang') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
