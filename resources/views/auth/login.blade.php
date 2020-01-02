@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--<div class="card">-->
                <div class="login-header">{{ __('دفترچه خاطرات آنلاین') }}</div>
                <div class="card-sub-header">{{ __('پروژه پایانی طراحی وب  دانشکده فنی دختران شریعتی') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            

                            <div class="col-md-6">
                                <input id="username" type="text"   placeholder="نام کاربری" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            

                            <div class="col-md-6">
                                <input id="password" type="password"  placeholder="کلمه عبور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا بخاطر بسپار') }}
                                    </label>
                                </div>
                                <div class="col-md-6">
                                <button type="submit" class="btn btn-primary login-btn">
                                    {{ __('ورود') }}
                                </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            
                                
                                <a type="submit" href="/register" class="btn btn-primary  center-block"> {{ __(' ثبت نام ') }} </a>
                                
                        </div>
                    </form>
                </div>
            <!--</div>-->
        </div>
    </div>
</div>
@endsection
